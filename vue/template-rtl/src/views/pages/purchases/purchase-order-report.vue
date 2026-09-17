<script>
const columns = [
  {
    sorter: true,
  },
  {
    title: "Product Name",
    dataIndex: "Product_Name",
    key: "Product_Name",
    sorter: {
      compare: (a, b) => {
        a = a.Product_Name.toLowerCase();
        b = b.Product_Name.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Purchased amount",
    dataIndex: "Purchased_amount",
    sorter: {
      compare: (a, b) => {
        a = a.Purchased_amount.toLowerCase();
        b = b.Purchased_amount.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Purchased QTY",
    dataIndex: "Purchased_QTY",
    sorter: {
      compare: (a, b) => {
        a = a.Purchased_QTY.toLowerCase();
        b = b.Purchased_QTY.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Instock QTY",
    dataIndex: "Instock_QTY",
    sorter: {
      compare: (a, b) => {
        a = a.Instock_QTY.toLowerCase();
        b = b.Instock_QTY.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
];
const data = [
  {
    id: "1",
    Product_Name: "Macbook pro",
    Product_img: "product1.jpg",
    Purchased_amount: "38698",
    Purchased_QTY: "1248",
    Instock_QTY: "1356",
  },
  {
    id: "2",
    Product_Name: "Orange",
    Product_img: "product2.jpg",
    Purchased_amount: "36080",
    Purchased_QTY: "110",
    Instock_QTY: "131",
  },
  {
    id: "3",
    Product_Name: "Pineapple",
    Product_img: "product3.jpg",
    Purchased_amount: "21000",
    Purchased_QTY: "106",
    Instock_QTY: "131",
  },
  {
    id: "4",
    Product_Name: "Strawberry",
    Product_img: "product4.jpg",
    Purchased_amount: "11000",
    Purchased_QTY: "105",
    Instock_QTY: "100",
  },
  {
    id: "5",
    Product_Name: "Sunglasses",
    Product_img: "product5.jpg",
    Purchased_amount: "10600",
    Purchased_QTY: "105",
    Instock_QTY: "100",
  },
  {
    id: "6",
    Product_Name: "Unpaired gray",
    Product_img: "product6.jpg",
    Purchased_amount: "9984",
    Purchased_QTY: "50",
    Instock_QTY: "50",
  },
  {
    id: "7",
    Product_Name: "Avocat",
    Product_img: "product7.jpg",
    Purchased_amount: "4500",
    Purchased_QTY: "41",
    Instock_QTY: "29",
  },
  {
    id: "8",
    Product_Name: "Banana",
    Product_img: "product8.jpg",
    Purchased_amount: "900",
    Purchased_QTY: "28",
    Instock_QTY: "24",
  },
  {
    id: "9",
    Product_Name: "Earphones",
    Product_img: "product9.jpg",
    Purchased_amount: "500",
    Purchased_QTY: "20",
    Instock_QTY: "11",
  },
  {
    id: "10",
    Product_Name: "Banana",
    Product_img: "product8.jpg",
    Purchased_amount: "900",
    Purchased_QTY: "28",
    Instock_QTY: "24",
  },
  {
    id: "11",
    Product_Name: "Earphones",
    Product_img: "product9.jpg",
    Purchased_amount: "500",
    Purchased_QTY: "20",
    Instock_QTY: "11",
  },
];

import { ref } from "vue";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());

export default {
  data() {
    return {
      filter: false,
      columns,
      data,
      Sort: ["Sort by Date", "Newest", "Oldest"],
      Supplier: ["Choose Supplier", "Suppliers"],
      startdate: currentDate,
      startdateOne: currentDateOne,
      dateFormat: "dd-MM-yyyy",
    };
  },
  toggleCollapse() {
    const collapseHeader = this.$refs.collapseHeader;

    if (collapseHeader) {
      collapseHeader.classList.toggle("active");
      document.body.classList.toggle("header-collapse");
    }
  },
};
</script>

<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>

  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Purchase order report</h4>
            <h6>Manage your Purchase order report</h6>
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
      <div class="card">
        <div class="card-body">
          <div class="table-top">
            <div class="search-set">
              <div class="search-input">
                <input type="text" placeholder="Search" class="dark-input" />
                <a href="" class="btn btn-searchset"
                  ><i data-feather="search" class="feather-search"></i
                ></a>
              </div>
            </div>
            <div class="search-path">
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
            <div class="form-sort">
              <vue-feather type="sliders" class="info-img"></vue-feather>
              <vue-select :options="Sort" id="sortdate" placeholder="Sort by Date" />
            </div>
          </div>
          <!-- /Filter -->
          <div
            class="card"
            id="filter_inputs"
            :style="{ display: filter ? 'block' : 'none' }"
          >
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="calendar" class="info-img"></vue-feather>
                    <div class="input-groupicon">
                      <date-picker
                        v-model="startdate"
                        placeholder="From Date"
                        class="datetimepicker"
                        :editable="true"
                        :clearable="false"
                        :input-format="dateFormat"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="calendar" class="info-img"></vue-feather>
                    <div class="input-groupicon">
                      <date-picker
                        v-model="startdateOne"
                        placeholder="Due Date"
                        class="datetimepicker"
                        :editable="true"
                        :clearable="false"
                        :input-format="dateFormat"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="stop-circle" class="info-img"></vue-feather>
                    <vue-select
                      :options="Supplier"
                      id="supplier"
                      placeholder="Choose Supplier"
                    />
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
            <a-table :columns="columns" :data-source="data" :row-selection="{}">
              <template #bodyCell="{ column, record }">
                <template v-if="column.key === 'Product_Name'">
                  <div class="productimgname">
                    <a class="product-img">
                      <img
                        :src="require(`@/assets/img/products/${record.Product_img}`)"
                        alt="product"
                      />
                    </a>
                    <a href="javascript:void(0);">{{ record.Product_Name }}</a>
                  </div>
                </template>
              </template>
            </a-table>
          </div>
        </div>
      </div>
      <!-- /product list -->
    </div>
  </div>
</template>
