<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Expired Products</h4>
            <h6>Manage your expired products</h6>
          </div>
        </div>
        <ul class="table-top-head">
          <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"
              ><img src="@/assets/img/icons/pdf.svg" alt="img"
            /></a>
          </li>
          <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"
              ><img src="@/assets/img/icons/excel.svg" alt="img"
            /></a>
          </li>
          <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"
              ><i data-feather="printer" class="feather-printer"></i
            ></a>
          </li>
          <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"
              ><i data-feather="rotate-ccw" class="feather-rotate-ccw"></i
            ></a>
          </li>
          <li>
            <a
              ref="collapseHeader"
              data-bs-toggle="tooltip"
              data-bs-placement="top"
              title="Collapse"
              @click="toggleCollapse"
            >
              <i data-feather="chevron-up" class="feather-chevron-up"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- /product list -->
      <div class="card table-list-card">
        <div class="card-body">
          <div class="table-top">
            <div class="search-set">
              <div class="search-input">
                <input type="text" placeholder="Search" class="dark-input" />
                <a href="" class="btn btn-searchset"
                  ><vue-feather type="search" class="feather-search"></vue-feather
                ></a>
              </div>
            </div>
            <div class="search-path">
              <div class="d-flex align-items-center">
                <a
                  class="btn btn-filter"
                  id="filter_search"
                  v-on:click="filter = !filter"
                  :class="{ setclose: filter }"
                >
                  <vue-feather type="filter" class="filter-icon"></vue-feather>
                  <span><img src="@/assets/img/icons/closes.svg" alt="img" /></span>
                </a>
              </div>
            </div>
            <div class="form-sort">
              <vue-feather type="sliders" class="info-img"></vue-feather>
              <vue-select
                :options="Sortbydate"
                id="sortbydate"
                placeholder="Sort by Date"
              />
            </div>
          </div>
          <!-- /Filter -->
          <div
            class="card"
            :style="{ display: filter ? 'block' : 'none' }"
            id="filter_inputs"
          >
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="box" class="info-img"></vue-feather>
                    <vue-select
                      :options="LenovoType"
                      id="lenovotype"
                      placeholder="Choose Type"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="calendar" class="info-img"></vue-feather>
                    <div class="input-groupicon">
                      <date-picker
                        v-model="startdate"
                        placeholder="Choose Date"
                        class="datetimepicker"
                        :editable="true"
                        :clearable="false"
                        :input-format="dateFormat"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 ms-auto">
                  <div class="input-blocks">
                    <a class="btn btn-filters ms-auto">
                      <i data-feather="search" class="feather-search"></i> Search
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Filter -->
          <div class="table-responsive">
            <a-table
              class="table datanew"
              :columns="columns"
              :data-source="data"
              :row-selection="{}"
            >
              <template #bodyCell="{ column, record }">
                <template v-if="column.key === 'Product'">
                  <div class="productimgname">
                    <a href="javascript:void(0);" class="product-img stock-img">
                      <img
                        :src="require(`@/assets/img/products/${record.Image}`)"
                        alt="product"
                      />
                    </a>
                    <a href="javascript:void(0);">{{ record.Product }} </a>
                  </div>
                </template>
                <template v-else-if="column.key === 'action'">
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a class="me-2 p-2" href="javascript:void(0);">
                        <i data-feather="edit" class="feather-edit"></i>
                      </a>
                      <a
                        class="confirm-text p-2"
                        @click="showConfirmation"
                        href="javascript:void(0);"
                      >
                        <i data-feather="trash-2" class="feather-trash-2"></i>
                      </a>
                    </div>
                  </td>
                </template>
              </template>
            </a-table>
          </div>
        </div>
      </div>
      <!-- /product list -->
    </div>
  </div>
  <expired-products-modal></expired-products-modal>
</template>
<script>
import { ref } from "vue";
const currentDate = ref(new Date());
const columns = [
  {
    title: "Product",
    dataIndex: "Product",
    key: "Product",
    sorter: {
      compare: (a, b) => {
        a = a.Product.toLowerCase();
        b = b.Product.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "SKU",
    dataIndex: "SKU",
    sorter: {
      compare: (a, b) => {
        a = a.SKU.toLowerCase();
        b = b.SKU.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Manufactured Date",
    dataIndex: "ManufacturedDate",
    sorter: {
      compare: (a, b) => {
        a = a.ManufacturedDate.toLowerCase();
        b = b.ManufacturedDate.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Expired Date",
    dataIndex: "ExpiredDate",
    sorter: {
      compare: (a, b) => {
        a = a.ExpiredDate.toLowerCase();
        b = b.ExpiredDate.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Action",
    key: "action",
    sorter: true,
  },
];
const data = [
  {
    Product: "Lenovo 3rd Generation",
    SKU: "PT001",
    Image: "stock-img-01.png",
    ManufacturedDate: "19 Nov 2023",
    ExpiredDate: "02 Jan 2024",
  },
  {
    Product: "Bold V3.2",
    SKU: "PT002",
    Image: "stock-img-06.png",
    ManufacturedDate: "24 Nov 2023",
    ExpiredDate: "23 Jan 2024",
  },
  {
    Product: "Nike Jordan",
    SKU: "PT003",
    Image: "stock-img-02.png",
    ManufacturedDate: "11 Dec 2023",
    ExpiredDate: "18 Feb 2023",
  },
  {
    Product: "Apple Series 5 Watch",
    SKU: "PT004",
    Image: "stock-img-03.png",
    ManufacturedDate: "	27 Dec 2022",
    ExpiredDate: "18 Feb 2023",
  },
  {
    Product: "Amazon Echo Dot",
    SKU: "PT005",
    Image: "stock-img-04.png",
    ManufacturedDate: "18 Mar 2023",
    ExpiredDate: "24 Feb 2024",
  },
  {
    Product: "Lobar Handy",
    SKU: "PT006",
    Image: "stock-img-05.png",
    ManufacturedDate: "08 Jan 2023",
    ExpiredDate: "16 Mar 2023",
  },
  {
    Product: "Red Premium Handy",
    SKU: "PT007",
    Image: "stock-img-01.png",
    ManufacturedDate: "17 Jan 2023",
    ExpiredDate: "29 Mar 2023",
  },
  {
    Product: "Iphone 14 Pro",
    SKU: "PT008",
    Image: "stock-img-02.png",
    ManufacturedDate: "22 Feb 2023",
    ExpiredDate: "04 Apr 2023",
  },
  {
    Product: "Black Slim 200",
    SKU: "PT009",
    Image: "stock-img-03.png",
    ManufacturedDate: "18 Mar 2023",
    ExpiredDate: "13 May 2023",
  },
  {
    Product: "Woodcraft Sandal",
    SKU: "PT010",
    Image: "stock-img-04.png",
    ManufacturedDate: "18 Mar 2023",
    ExpiredDate: "27 May 2023",
  },
];
import Swal from "sweetalert2";
export default {
  data() {
    return {
      filter: false,
      startdate: currentDate,
      dateFormat: "dd-MM-yyyy",
      Sortbydate: ["Sort by Date", "Newest", "Oldest"],
      LenovoType: ["Choose Type", "Lenovo 3rd Generation", "Nike Jordan"],
      data,
      columns,
    };
  },
  methods: {
    showConfirmation() {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
        confirmButtonClass: "btn btn-primary",
        cancelButtonClass: "btn btn-danger ml-1",
        buttonsStyling: false,
      }).then((result) => {
        if (result.value) {
          Swal.fire({
            icon: "success",
            title: "Deleted!",
            text: "Your file has been deleted.",
            confirmButtonClass: "btn btn-success",
          });
        }
      });
    },
    toggleCollapse() {
      const collapseHeader = this.$refs.collapseHeader;

      if (collapseHeader) {
        collapseHeader.classList.toggle("active");
        document.body.classList.toggle("header-collapse");
      }
    },
  },
};
</script>
