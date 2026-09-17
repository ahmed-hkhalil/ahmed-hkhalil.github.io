<script>
const columns = [
  {
    sorter: true,
  },
  {
    title: "Supplier Name",
    dataIndex: "Supplier_Name",
    sorter: {
      compare: (a, b) => {
        a = a.Supplier_Name.toLowerCase();
        b = b.Supplier_Name.toLowerCase();
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
    title: "Grand Total",
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
    title: "Grand Total",
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
    title: "Paid",
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
    title: "Due",
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
    title: "Created by",
    dataIndex: "Created_by",
    key: "Created_by",
    sorter: {
      compare: (a, b) => {
        a = a.Created_by.toLowerCase();
        b = b.Created_by.toLowerCase();
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
    Supplier_Name: "Apex Computers",
    Reference: "PT001",
    Date: "19 Jan 2023",
    Status: "Received",
    Status_class: "badges status-badge",
    Grand_Total: "$550",
    Paid: "$550",
    Due: "$0.00",
    Created_by: "Paid",
    Created_class: "badge-linesuccess",
  },
  {
    id: "2",
    Supplier_Name: "Beats Headphones",
    Reference: "PT002",
    Date: "27 Jan 2023",
    Status: "Received",
    Status_class: "badges status-badge",
    Grand_Total: "$370",
    Paid: "$370",
    Due: "$0.00",
    Created_by: "Paid",
    Created_class: "badge-linesuccess",
  },
  {
    id: "3",
    Supplier_Name: "Dazzle Shoes",
    Reference: "PT003",
    Date: "08 Feb 2023",
    Status: "Ordered",
    Status_class: "badges status-badge ordered",
    Grand_Total: "$400",
    Paid: "$400",
    Due: "$200",
    Created_by: "Partial",
    Created_class: "badges-warning",
  },
  {
    id: "4",
    Supplier_Name: "Best Accessories",
    Reference: "PT004",
    Date: "16 Feb 2023",
    Status: "Pending",
    Status_class: "badges unstatus-badge",
    Grand_Total: "$560",
    Paid: "$0.00",
    Due: "$560",
    Created_by: "Unpaid",
    Created_class: "badge badge-linedangered",
  },
  {
    id: "5",
    Supplier_Name: "A-Z Store",
    Reference: "PT005",
    Date: "12 Mar 2023",
    Status: "Pending",
    Status_class: "badges unstatus-badge",
    Grand_Total: "$240",
    Paid: "$0.00",
    Due: "$240",
    Created_by: "Unpaid",
    Created_class: "badge badge-linedangered",
  },
  {
    id: "6",
    Supplier_Name: "Hatimi Hardwares",
    Reference: "PT006",
    Date: "24 Mar 2023",
    Status: "Received",
    Status_class: "badges status-badge",
    Grand_Total: "$170",
    Paid: "$170",
    Due: "$0.00",
    Created_by: "Paid",
    Created_class: "badge-linesuccess",
  },
  {
    id: "7",
    Supplier_Name: "Aesthetic Bags",
    Reference: "PT007",
    Date: "06 Apr 2023",
    Status: "Pending",
    Status_class: "badges unstatus-badge",
    Grand_Total: "$230",
    Paid: "$0.00",
    Due: "$230",
    Created_by: "Unpaid",
    Created_class: "badge badge-linedangered",
  },
  {
    id: "8",
    Supplier_Name: "Alpha Mobiles",
    Reference: "PT008",
    Date: "14 Apr 2023",
    Status: "Ordered",
    Status_class: "badges status-badge ordered",
    Grand_Total: "$300",
    Paid: "$150",
    Due: "$300",
    Created_by: "Partial",
    Created_class: "badges-warning",
  },
  {
    id: "9",
    Supplier_Name: "Sigma Chairs",
    Reference: "PT009",
    Date: "02 May 2023",
    Status: "Pending",
    Status_class: "badges unstatus-badge",
    Grand_Total: "$620",
    Paid: "$0.00",
    Due: "$620",
    Created_by: "Unpaid",
    Created_class: "badge badge-linedangered",
  },
  {
    id: "10",
    Supplier_Name: "Zenith Bags",
    Reference: "PT010",
    Date: "23 May 2023",
    Status: "Received",
    Status_class: "badges status-badge",
    Grand_Total: "$200",
    Paid: "$200",
    Due: "$0.00",
    Created_by: "Paid",
    Created_class: "badge-linesuccess",
  },
];
import Swal from "sweetalert2";
export default {
  data() {
    return {
      filter: false,
      columns,
      data,
      Sortby: ["Sort by Date", "Newest", "Oldest"],
      Best: [
        "Choose Supplier Name",
        "Apex Computers",
        "Beats Headphones",
        "Dazzle Shoes",
        "Best Accessories",
      ],
      Status: ["Choose Status", "Received", "Ordered", "Pending"],
      Enter: ["Enter Reference", "PT001", "PT002", "PT003"],
      Paid: ["Choose Payment Status", "Paid", "Partial", "Unpaid"],
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
      <div class="page-header transfer">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Purchase List</h4>
            <h6>Manage your purchases</h6>
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
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"
              ><img src="@/assets/img/icons/printer.svg" alt="img"
            /></a>
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
        <div class="d-flex purchase-pg-btn">
          <div class="page-btn">
            <a
              href="javascript:void(0);"
              class="btn btn-added"
              data-bs-toggle="modal"
              data-bs-target="#add-units"
              ><vue-feather type="plus-circle" class="me-2"></vue-feather>Add New
              Purchase</a
            >
          </div>
          <div class="page-btn import">
            <a
              href="javascript:void(0);"
              class="btn btn-added color"
              data-bs-toggle="modal"
              data-bs-target="#view-notes"
              ><vue-feather type="download" class="me-2"></vue-feather>Import Purchase</a
            >
          </div>
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
              <vue-select :options="Sortby" id="Sortby" placeholder="Sort by Date" />
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
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <i data-feather="user" class="info-img"></i>
                    <vue-select
                      :options="Best"
                      id="best"
                      placeholder="Choose Supplier Name"
                    />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <i data-feather="stop-circle" class="info-img"></i>
                    <vue-select
                      :options="Status"
                      id="status"
                      placeholder="Choose Status"
                    />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <i data-feather="file" class="info-img"></i>
                    <vue-select
                      :options="Enter"
                      id="enter"
                      placeholder="Enter Reference"
                    />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <i class="fas fa-money-bill info-img"></i>
                    <vue-select
                      :options="Paid"
                      id="paid"
                      placeholder="Choose Payment Status"
                    />
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 ms-auto">
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
          <div class="table-responsive product-list">
            <a-table :columns="columns" :data-source="data" :row-selection="{}">
              <template #bodyCell="{ column, record }">
                <template v-if="column.key === 'Status'">
                  <div>
                    <span :class="record.Status_class">{{ record.Status }}</span>
                  </div>
                </template>
                <template v-else-if="column.key === 'Created_by'">
                  <div>
                    <span :class="record.Created_class">{{ record.Created_by }}</span>
                  </div>
                </template>
                <template v-else-if="column.key === 'action'">
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a class="me-2 p-2" href="javascript:void(0);">
                        <vue-feather type="eye" class="action-eye"></vue-feather>
                      </a>
                      <a
                        class="me-2 p-2"
                        data-bs-toggle="modal"
                        data-bs-target="#edit-units"
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

  <purchase-list-modal></purchase-list-modal>
</template>
