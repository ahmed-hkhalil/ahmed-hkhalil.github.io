<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>

  <div class="page-wrapper sales-list">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Sales List</h4>
            <h6>Manage Your Sales</h6>
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
            href="javascript:void(0);"
            class="btn btn-added"
            data-bs-toggle="modal"
            data-bs-target="#add-sales-new"
            ><vue-feather type="plus-circle" class="me-2"></vue-feather> Add New Sales</a
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
              <vue-select :options="Sortdate" id="sortdate" placeholder="Sort by Date" />
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
                    <i data-feather="user" class="info-img"></i>
                    <vue-select
                      :options="Macbook"
                      id="macbook"
                      placeholder="Choose Customer Name"
                    />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <i data-feather="stop-circle" class="info-img"></i>
                    <vue-select
                      :options="Fruits"
                      id="fruits"
                      placeholder="Choose Status"
                    />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <i data-feather="file-text" class="info-img"></i>
                    <input
                      type="text"
                      placeholder="Enter Reference"
                      class="form-control"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <i data-feather="stop-circle" class="info-img"></i>
                    <vue-select
                      :options="Computers"
                      id="computer"
                      placeholder="Choose Payment Status"
                    />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
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
                <template v-if="column.key === 'Status'">
                  <div>
                    <span :class="record.Status_class">{{ record.Status }}</span>
                  </div>
                </template>
                <template v-else-if="column.key === 'Payment_Status'">
                  <div>
                    <span :class="record.Payment_Class">{{ record.Payment_Status }}</span>
                  </div>
                </template>
                <template v-else-if="column.key === 'action'">
                  <div class="text-center">
                    <a
                      class="action-set"
                      href="javascript:void(0);"
                      data-bs-toggle="dropdown"
                      aria-expanded="true"
                    >
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu sales-list-icon">
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item"
                          data-bs-toggle="modal"
                          data-bs-target="#sales-details-new"
                          ><vue-feather type="eye" class="info-img"></vue-feather>Sale
                          Detail</a
                        >
                      </li>
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item"
                          data-bs-toggle="modal"
                          data-bs-target="#edit-sales-new"
                          ><vue-feather type="edit" class="info-img"></vue-feather>Edit
                          Sale</a
                        >
                      </li>
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item"
                          data-bs-toggle="modal"
                          data-bs-target="#showpayment"
                          ><vue-feather type="dollar-sign" class="info-img"></vue-feather
                          >Show Payments</a
                        >
                      </li>
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item"
                          data-bs-toggle="modal"
                          data-bs-target="#createpayment"
                          ><vue-feather type="plus-circle" class="info-img"></vue-feather
                          >Create Payment</a
                        >
                      </li>
                      <li>
                        <a href="javascript:void(0);" class="dropdown-item"
                          ><vue-feather type="download" class="info-img"></vue-feather
                          >Download pdf</a
                        >
                      </li>
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item confirm-text mb-0"
                          ><vue-feather type="trash-2" class="info-img"></vue-feather
                          >Delete Sale</a
                        >
                      </li>
                    </ul>
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

  <sales-list-modal></sales-list-modal>
</template>

<script>
const columns = [
  {
    sorter: true,
  },
  {
    title: "Customer Name",
    dataIndex: "Customer_Name",
    sorter: {
      compare: (a, b) => {
        a = a.Customer_Name.toLowerCase();
        b = b.Customer_Name.toLowerCase();
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
    title: "Biller",
    dataIndex: "Biller",
    sorter: {
      compare: (a, b) => {
        a = a.Biller.toLowerCase();
        b = b.Biller.toLowerCase();
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
    Customer_Name: "Thomas",
    Reference: "SL0101",
    Date: "19 Jan 2023",
    Status: "Completed",
    Status_class: "badge badge-bgsuccess",
    Grand_Total: "$550",
    Paid: "$550",
    Due: "$0.00",
    Payment_Status: "Paid",
    Payment_Class: "badge badge-linesuccess",
    Biller: "Admin",
  },
  {
    Customer_Name: "Rose",
    Reference: "SL0102",
    Date: "26 Jan 2023",
    Status: "Completed",
    Status_class: "badge badge-bgsuccess",
    Grand_Total: "$250",
    Paid: "$250",
    Due: "$0.00",
    Payment_Status: "Paid",
    Payment_Class: "badge badge-linesuccess",
    Biller: "Admin",
  },
  {
    Customer_Name: "Benjamin",
    Reference: "SL0103",
    Date: "08 Feb 2023",
    Status: "Completed",
    Status_class: "badge badge-bgsuccess",
    Grand_Total: "$570",
    Paid: "$570",
    Due: "$0.00",
    Payment_Status: "Paid",
    Payment_Class: "badge badge-linesuccess",
    Biller: "Admin",
  },
  {
    Customer_Name: "Lilly",
    Reference: "SL0104",
    Date: "12 Feb 2023",
    Status: "Pending",
    Status_class: "badge badge-bgdanger",
    Grand_Total: "$300",
    Paid: "$0.00",
    Due: "$300",
    Payment_Status: "Due",
    Payment_Class: "badge badge-linedanger",
    Biller: "Admin",
  },
  {
    Customer_Name: "Freda",
    Reference: "SL0105",
    Date: "17 Mar 2023",
    Status: "Pending",
    Status_class: "badge badge-bgdanger",
    Grand_Total: "$700",
    Paid: "$0.00",
    Due: "$700",
    Payment_Status: "Due",
    Payment_Class: "badge badge-linedanger",
    Biller: "Admin",
  },
  {
    Customer_Name: "Alwin",
    Reference: "SL0106",
    Date: "24 Mar 2023",
    Status: "Completed",
    Status_class: "badge badge-bgsuccess",
    Grand_Total: "$400",
    Paid: "$400",
    Due: "$0.00",
    Payment_Status: "Paid",
    Payment_Class: "badge badge-linesuccess",
    Biller: "Admin",
  },
  {
    Customer_Name: "Maybelle",
    Reference: "SL0107",
    Date: "06 Apr 2023",
    Status: "Pending",
    Status_class: "badge badge-bgdanger",
    Grand_Total: "$120",
    Paid: "$0.00",
    Due: "$120",
    Payment_Status: "Due",
    Payment_Class: "badge badge-linedanger",
    Biller: "Admin",
  },
  {
    Customer_Name: "Ellen",
    Reference: "SL0108",
    Date: "16 Apr 2023",
    Status: "Completed",
    Status_class: "badge badge-bgsuccess",
    Grand_Total: "$830",
    Paid: "$830",
    Due: "$0.00",
    Payment_Status: "Paid",
    Payment_Class: "badge badge-linesuccess",
    Biller: "Admin",
  },
  {
    Customer_Name: "Kaitlin",
    Reference: "SL0109",
    Date: "04 May 2023",
    Status: "Pending",
    Status_class: "badge badge-bgdanger",
    Grand_Total: "$800",
    Paid: "$0.00",
    Due: "$800",
    Payment_Status: "Due",
    Payment_Class: "badge badge-linedanger",
    Biller: "Admin",
  },
  {
    Customer_Name: "Grace",
    Reference: "SL0110",
    Date: "29 May 2023",
    Status: "Completed",
    Status_class: "badge badge-bgsuccess",
    Grand_Total: "$460",
    Paid: "$460",
    Due: "$0.00",
    Payment_Status: "Paid",
    Payment_Class: "badge badge-linesuccess",
    Biller: "Admin",
  },
];
export default {
  data() {
    return {
      filter: false,
      Sortdate: ["Sort by Date", "07 09 23", "21 09 23"],
      Macbook: ["Choose Customer Name", "Macbook pro", "Orange"],
      Fruits: ["Choose Status", "Computers", "Fruits"],
      Computers: ["Choose Payment Status", "Computers", "Fruits"],
      columns,
      data,
    };
  },
  methods: {
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
