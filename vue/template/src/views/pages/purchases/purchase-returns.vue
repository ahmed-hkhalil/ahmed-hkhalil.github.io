<script>
const columns = [
  {
    sorter: true,
  },
  {
    title: "Image",
    dataIndex: "Image",
    key: "Image",
    sorter: {
      compare: (a, b) => {
        a = a.Image.toLowerCase();
        b = b.Image.toLowerCase();
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
    title: "Supplier",
    dataIndex: "Supplier",
    sorter: {
      compare: (a, b) => {
        a = a.Supplier.toLowerCase();
        b = b.Supplier.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Reference",
    dataIndex: "Reference",
    sorter: {
      compare: (a, b) => {
        a = a.Reference.toLowerCase();
        b = b.Reference.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Status",
    dataIndex: "Status",
    key: "Status",
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
    dataIndex: "Grand",
    sorter: {
      compare: (a, b) => {
        a = a.Grand.toLowerCase();
        b = b.Grand.toLowerCase();
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
    dataIndex: "Payment",
    key: "Payment",
    sorter: {
      compare: (a, b) => {
        a = a.Payment.toLowerCase();
        b = b.Payment.toLowerCase();
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
    id: "1",
    Image: "product1.jpg",
    Date: "2/27/2022",
    Supplier: "Apex Computers",
    Reference: "PT001",
    Status: "Received",
    Status_class: "badges bg-lightgreen",
    Grand: "550",
    Paid: "120",
    Due: "550",
    Payment: "Paid",
    Payment_class: "badges bg-lightgreen",
  },
  {
    id: "2",
    Image: "product2.jpg",
    Date: "1/15/2022",
    Supplier: "Modern Automobile",
    Reference: "PT002",
    Status: "Ordered",
    Status_class: "badges bg-lightyellow",
    Grand: "550",
    Paid: "120",
    Due: "550",
    Payment: "Partial",
    Payment_class: "badges bg-lightyellow",
  },
  {
    id: "3",
    Image: "product3.jpg",
    Date: "3/24/2022",
    Supplier: "AIM Infotech",
    Reference: "PT003",
    Status: "Pending",
    Status_class: "badges bg-lightred",
    Grand: "210",
    Paid: "120",
    Due: "210",
    Payment: "Unpaid",
    Payment_class: "badges bg-lightred",
  },
  {
    id: "4",
    Image: "product4.jpg",
    Date: "1/15/2022",
    Supplier: "Best Power Tools",
    Reference: "PT004",
    Status: "Received",
    Status_class: "badges bg-lightgreen",
    Grand: "210",
    Paid: "120",
    Due: "210",
    Payment: "Paid",
    Payment_class: "badges bg-lightgreen",
  },
  {
    id: "5",
    Image: "product5.jpg",
    Date: "1/15/2022",
    Supplier: "AIM Infotech",
    Reference: "PT005",
    Status: "Pending",
    Status_class: "badges bg-lightred",
    Grand: "210",
    Paid: "120",
    Due: "210",
    Payment: "UnPaid",
    Payment_class: "badges bg-lightred",
  },
  {
    id: "6",
    Image: "product6.jpg",
    Date: "3/24/2022",
    Supplier: "Best Power Tools",
    Reference: "PT006",
    Status: "Received",
    Status_class: "badges bg-lightgreen",
    Grand: "210",
    Paid: "120",
    Due: "210",
    Payment: "paid",
    Payment_class: "badges bg-lightgreen",
  },
  {
    id: "7",
    Image: "product7.jpg",
    Date: "1/15/2022",
    Supplier: "Apex Computers",
    Reference: "PT007",
    Status: "Ordered",
    Status_class: "badges bg-lightyellow",
    Grand: "1000",
    Paid: "500",
    Due: "1000",
    Payment: "Partial",
    Payment_class: "badges bg-lightyellow",
  },
  {
    id: "8",
    Image: "product8.jpg",
    Date: "3/24/2022",
    Supplier: "Best Power Tools",
    Reference: "PT008",
    Status: "Received",
    Status_class: "badges bg-lightgreen",
    Grand: "210",
    Paid: "120",
    Due: "210",
    Payment: "paid",
    Payment_class: "badges bg-lightgreen",
  },
  {
    id: "9",
    Image: "product9.jpg",
    Date: "3/24/2022",
    Supplier: "Hatimi Hardware & Tools",
    Reference: "PT009",
    Status: "Pending",
    Status_class: "badges bg-lightred",
    Grand: "5500",
    Paid: "550",
    Due: "5500",
    Payment: "Unpaid",
    Payment_class: "badges bg-lightred",
  },
  {
    id: "10",
    Image: "product10.jpg",
    Date: "3/24/2022",
    Supplier: "Best Power Tools",
    Reference: "PT0010",
    Status: "Pending",
    Status_class: "badges bg-lightred",
    Grand: "2580",
    Paid: "1250",
    Due: "2580",
    Payment: "Unpaid",
    Payment_class: "badges bg-lightred",
  },
  {
    id: "11",
    Image: "product5.jpg",
    Date: "3/24/2022",
    Supplier: "Best Power Tools",
    Reference: "PT0011",
    Status: "Pending",
    Status_class: "badges bg-lightred",
    Grand: "2580",
    Paid: "1250",
    Due: "2580",
    Payment: "Unpaid",
    Payment_class: "badges bg-lightred",
  },
];
import Swal from "sweetalert2";
export default {
  data() {
    return {
      filter: false,
      columns,
      data,
      Newest: ["Sort by Date", "Newest", "Oldest"],
      Supplier: [
        "Choose Supplier",
        "Apex Computers",
        "Modern Automobile",
        "AIM Infotech",
      ],
      Received: ["Choose Status", "Received", "Ordered", "Pending"],
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

<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>

  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Purchase Return List</h4>
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
        <div class="page-btn">
          <a
            href="javascript:void(0);"
            class="btn btn-added"
            data-bs-toggle="modal"
            data-bs-target="#add-sales-new"
          >
            <vue-feather type="plus-circle" class="me-2"></vue-feather>Add Purchase Return
          </a>
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
              <vue-select :options="Newest" id="newby" placeholder="Sort by Date" />
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
                      <input type="text" class="datetimepicker" placeholder="From Date" />
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="stop-circle" class="info-img"></vue-feather>
                    <vue-select
                      :options="Supplier"
                      id="supplierone"
                      placeholder="Choose Supplier"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="stop-circle" class="info-img"></vue-feather>
                    <vue-select
                      :options="Received"
                      id="orderedone"
                      placeholder="Choose Status"
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
                <template v-if="column.key === 'Image'">
                  <a class="product-img">
                    <img
                      :src="require(`@/assets/img/products/${record.Image}`)"
                      alt="product"
                    />
                  </a>
                </template>
                <template v-else-if="column.key === 'Status'">
                  <div>
                    <span :class="record.Status_class">{{ record.Status }}</span>
                  </div>
                </template>
                <template v-else-if="column.key === 'Payment'">
                  <div>
                    <span :class="record.Payment_class">{{ record.Payment }}</span>
                  </div>
                </template>
                <template v-else-if="column.key === 'action'">
                  <td class="action-table-data">
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

  <purchase-returns-modal></purchase-returns-modal>
</template>
