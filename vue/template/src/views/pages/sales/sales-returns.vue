<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>

  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Sales Return List</h4>
            <h6>Manage your Returns</h6>
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
        <div class="page-btn">
          <a
            href="javascript:;"
            class="btn btn-added"
            data-bs-toggle="modal"
            data-bs-target="#add-sales-new"
            ><vue-feather type="plus-circle" class="me-2"></vue-feather>Add New Sales
            Return</a
          >
        </div>
      </div>

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
              <vue-select :options="Sort" id="sortfive" placeholder="Sort by Date" />
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
                    <vue-feather type="user" class="info-img"></vue-feather>
                    <vue-select
                      :options="James"
                      id="james"
                      placeholder="Choose Customer"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="zap" class="info-img"></vue-feather>
                    <vue-select
                      :options="Pending"
                      id="statusfive"
                      placeholder="Choose Status"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="stop-circle" class="info-img"></vue-feather>
                    <vue-select
                      :options="Paids"
                      id="paids"
                      placeholder="Choose Payment Status"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 ms-auto">
                  <div class="input-blocks">
                    <a class="btn btn-filters ms-auto">
                      <vue-feather type="search" class="feather-search"></vue-feather>
                      Search
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
                    <a href="javascript:void(0);" class="product-img">
                      <img
                        :src="require(`@/assets/img/products/${record.Image}`)"
                        alt="product"
                      />
                    </a>
                    <a href="javascript:void(0);">{{ record.Product_Name }}</a>
                  </div>
                </template>
                <template v-else-if="column.key === 'Status'">
                  <div>
                    <span :class="record.Status_class">{{ record.Status }}</span>
                  </div>
                </template>
                <template v-else-if="column.key === 'Payment_Status'">
                  <div>
                    <span :class="record.Payment_class">{{ record.Payment_Status }}</span>
                  </div>
                </template>
                <template v-else-if="column.key === 'action'">
                  <div class="action-table-data">
                    <div class="edit-delete-action">
                      <a
                        class="me-2 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#edit-sales-new"
                      >
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
  <sales-returns-modal></sales-returns-modal>
</template>

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
    title: "Date",
    dataIndex: "Date",
    sorter: {
      compare: (a, b) => {
        a = a.Date.toLowerCase();
        b = b.Date.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Customer",
    dataIndex: "Customer",
    sorter: {
      compare: (a, b) => {
        a = a.Customer.toLowerCase();
        b = b.Customer.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Status",
    dataIndex: "Status",
    Key: "Status",
    sorter: {
      compare: (a, b) => {
        a = a.Status.toLowerCase();
        b = b.Status.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Grand Total ($)",
    dataIndex: "Grand_Total",
    sorter: {
      compare: (a, b) => {
        a = a.Grand_Total.toLowerCase();
        b = b.Grand_Total.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Paid ($)",
    dataIndex: "Paid",
    sorter: {
      compare: (a, b) => {
        a = a.Paid.toLowerCase();
        b = b.Paid.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Due ($)",
    dataIndex: "Due",
    sorter: {
      compare: (a, b) => {
        a = a.Due.toLowerCase();
        b = b.Due.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Payment Status",
    dataIndex: "Payment_Status",
    key: "Payment_Status",
    sorter: {
      compare: (a, b) => {
        a = a.Payment_Status.toLowerCase();
        b = b.Payment_Status.toLowerCase();
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
    Product_Name: "Macbook pro",
    Image: "product1.jpg",
    Date: "19 Nov 2022",
    Customer: "Thomas",
    Status: "Received",
    Status_class: "badges bg-lightgreen",
    Grand_Total: "550",
    Paid: "120",
    Due: "550",
    Payment_Status: "Paid",
    Payment_class: "badges bg-lightgreen",
  },
  {
    Product_Name: "Orange",
    Image: "product2.jpg",
    Date: "19 Nov 2022",
    Customer: "Benjamin",
    Status: "Pending",
    Status_class: "badges bg-lightred",
    Grand_Total: "550",
    Paid: "120",
    Due: "550",
    Payment_Status: "Unpaid",
    Payment_class: "badges bg-lightred",
  },
  {
    Product_Name: "Pineapple",
    Image: "product3.jpg",
    Date: "19 Nov 2022",
    Customer: "James",
    Status: "Pending",
    Status_class: "badges bg-lightred",
    Grand_Total: "210",
    Paid: "120",
    Due: "210",
    Payment_Status: "Unpaid",
    Payment_class: "badges bg-lightred",
  },
  {
    Product_Name: "Strawberry",
    Image: "product4.jpg",
    Date: "19 Nov 2022",
    Customer: "Bruklin",
    Status: "Received",
    Status_class: "badges bg-lightgreen",
    Grand_Total: "210",
    Paid: "120",
    Due: "210",
    Payment_Status: "Paid",
    Payment_class: "badges bg-lightgreen",
  },
  {
    Product_Name: "Macbook Pro",
    Image: "product5.jpg",
    Date: "19 Nov 2022",
    Customer: "Best Power Tools",
    Status: "Received",
    Status_class: "badges bg-lightgreen",
    Grand_Total: "210",
    Paid: "120",
    Due: "210",
    Payment_Status: "paid",
    Payment_class: "badges bg-lightgreen",
  },
  {
    Product_Name: "Avocat",
    Image: "product6.jpg",
    Date: "19 Nov 2022",
    Customer: "Beverly",
    Status: "Pending",
    Status_class: "badges bg-lightred",
    Grand_Total: "210",
    Paid: "120",
    Due: "210",
    Payment_Status: "UnPaid",
    Payment_class: "badges bg-lightred",
  },
  {
    Product_Name: "Apple Earpods",
    Image: "product7.jpg",
    Date: "19 Nov 2022",
    Customer: "Apex Computers",
    Status: "Ordered",
    Status_class: "badges bg-lightyellow",
    Grand_Total: "1000",
    Paid: "500",
    Due: "1000",
    Payment_Status: "Partial",
    Payment_class: "badges bg-lightyellow",
  },
];
import Swal from "sweetalert2";
export default {
  data() {
    return {
      filter: false,
      columns,
      data,
      Sort: ["Sort by Date", "Newest", "Oldest"],
      James: ["Choose Customer", "Thomas", "James", "Beverly"],
      Pending: ["Choose Status", "Received", "Pending"],
      Paids: ["Choose Payment Status", "Unpaid", "Paids"],
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
