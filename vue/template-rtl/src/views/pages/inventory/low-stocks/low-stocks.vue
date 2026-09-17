<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="page-title me-auto">
          <h4>Low Stocks</h4>
          <h6>Manage your low stocks</h6>
        </div>
        <ul class="table-top-head low-stock-top-head">
          <li>
            <div class="status-toggle d-flex justify-content-between align-items-center">
              <input type="checkbox" id="user2" class="check" checked="" />
              <label for="user2" class="checktoggle">checkbox</label>
              Notify
            </div>
          </li>
          <li>
            <a
              href=""
              class="btn btn-secondary"
              data-bs-toggle="modal"
              data-bs-target="#send-email"
              ><vue-feather type="mail" class="mail"></vue-feather>Send Email</a
            >
          </li>
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
              ><vue-feather type="printer" class="printer"></vue-feather
            ></a>
          </li>
          <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"
              ><vue-feather type="rotate-ccw" class="rotate-ccw"></vue-feather
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
      <div class="table-tab">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button
              class="nav-link active"
              id="pills-home-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-home"
              type="button"
              role="tab"
              aria-controls="pills-home"
              aria-selected="true"
            >
              Low Stocks
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="pills-profile-tab"
              data-bs-toggle="pill"
              data-bs-target="#pills-profile"
              type="button"
              role="tab"
              aria-controls="pills-profile"
              aria-selected="false"
            >
              Out of Stocks
            </button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div
            class="tab-pane fade show active"
            id="pills-home"
            role="tabpanel"
            aria-labelledby="pills-home-tab"
          >
            <!-- /product list -->
            <div class="card table-list-card">
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
                    <vue-select
                      :options="LowSort"
                      id="lowsort"
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
                            :options="LowChoose"
                            id="lowchoose"
                            placeholder="Choose Product"
                          />
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-12">
                        <div class="input-blocks">
                          <vue-feather type="zap" class="info-img"></vue-feather>
                          <vue-select
                            :options="LowCategory"
                            id="lowCategory"
                            placeholder="Choose Category"
                          />
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-12">
                        <div class="input-blocks">
                          <vue-feather type="archive" class="info-img"></vue-feather>
                          <vue-select
                            :options="LowWarehouse"
                            id="lowwarehouse"
                            placeholder="Choose Warehouse"
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
                  <a-table
                    class="table datanew table-hover table-center mb-0"
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
                            <a class="ms-2 p-2" href="javascript:void(0);">
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
          <out-of-stocks></out-of-stocks>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
const columns = [
  {
    title: "Warehouse",
    dataIndex: "Warehouse",
    sorter: {
      compare: (a, b) => {
        a = a.Warehouse.toLowerCase();
        b = b.Warehouse.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Store",
    dataIndex: "Store",
    sorter: {
      compare: (a, b) => {
        a = a.Store.toLowerCase();
        b = b.Store.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
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
    title: "Category",
    dataIndex: "Category",
    sorter: {
      compare: (a, b) => {
        a = a.Category.toLowerCase();
        b = b.Category.toLowerCase();
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
    title: "Qty",
    dataIndex: "Qty",
    sorter: {
      compare: (a, b) => {
        a = a.Qty.toLowerCase();
        b = b.Qty.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Qty Alert",
    dataIndex: "QtyAlert",
    sorter: {
      compare: (a, b) => {
        a = a.QtyAlert.toLowerCase();
        b = b.QtyAlert.toLowerCase();
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
    Warehouse: "Lavish Warehouse",
    Store: "Crinol",
    Product: "Lenovo 3rd Generation",
    Category: "Laptop",
    SKU: "PT001",
    Image: "stock-img-01.png",
    Qty: "15",
    QtyAlert: "10",
  },
  {
    Warehouse: "Lobar Handy",
    Store: "Selosy",
    Product: "Nike Jordan",
    Category: "Shoe",
    SKU: "PT002",
    Image: "stock-img-02.png",
    Qty: "17",
    QtyAlert: "8",
  },
  {
    Warehouse: "Quaint Warehouse",
    Store: "Logerro",
    Product: "Apple Series 5 Watch",
    Category: "Electronics",
    SKU: "PT003",
    Image: "stock-img-03.png",
    Qty: "14",
    QtyAlert: "12",
  },
  {
    Warehouse: "Traditional Warehouse",
    Store: "Vesloo",
    Product: "Amazon Echo Dot",
    Category: "Speaker",
    SKU: "PT004",
    Image: "stock-img-04.png",
    Qty: "20",
    QtyAlert: "15",
  },
  {
    Warehouse: "Cool Warehouse",
    Store: "Crompy",
    Product: "Lobar Handy",
    Category: "Furnitures",
    SKU: "PT005",
    Image: "stock-img-05.png",
    Qty: "18",
    QtyAlert: "13",
  },
];
import Swal from "sweetalert2";
export default {
  data() {
    return {
      filter: false,
      LowSort: ["Sort by Date", "Newest", "Oldest"],
      LowWarehouse: ["Choose Warehouse", "Lavish Warehouse", "Traditional Warehouse"],
      LowCategory: ["Choose Category", "Laptop", "Shoe", "Speaker"],
      LowChoose: [
        "Choose Product",
        "Lenovo 3rd Generation",
        "Nike Jordan",
        "Amazon Echo Dot",
      ],
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
