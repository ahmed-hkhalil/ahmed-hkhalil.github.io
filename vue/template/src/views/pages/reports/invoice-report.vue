<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Invoice Report</h4>
            <h6>Manage Your Invoice Report</h6>
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
              <vue-select
                :options="SortbyInvoice"
                id="sortbypurchase"
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
                    <vue-feather type="user" class="info-img"></vue-feather>
                    <vue-select
                      :options="InvoiceName"
                      id="invoicename"
                      placeholder="Choose Name"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="stop-circle" class="info-img"></vue-feather>
                    <vue-select
                      :options="InvoiceStatus"
                      id="invoicename"
                      placeholder="Choose Name"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <div class="position-relative daterange-wraper">
                      <input
                        type="text"
                        class="form-control"
                        name="datetimes"
                        placeholder="From Date - To Date"
                      />
                      <i data-feather="calendar" class="feather-14 info-img"></i>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
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
                <template v-if="column.key === 'Status'">
                  <td>
                    <span :class="record.Class">{{ record.Status }}</span>
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
</template>
<script>
const columns = [
  {
    title: "InvoiceNo",
    dataIndex: "InvoiceNo",
    key: "InvoiceNo",
    sorter: {
      compare: (a, b) => {
        a = a.InvoiceNo.toLowerCase();
        b = b.InvoiceNo.toLowerCase();
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
    title: "Due Date",
    dataIndex: "DueDate",
    sorter: {
      compare: (a, b) => {
        a = a.DueDate.toLowerCase();
        b = b.DueDate.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Amount",
    dataIndex: "Amount",
    sorter: {
      compare: (a, b) => {
        a = a.Amount.toLowerCase();
        b = b.Amount.toLowerCase();
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
    title: "Amount Due",
    dataIndex: "AmountDue",
    sorter: {
      compare: (a, b) => {
        a = a.AmountDue.toLowerCase();
        b = b.AmountDue.toLowerCase();
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
];
const data = [
  {
    InvoiceNo: "INV001",
    Customer: "Thomas",
    DueDate: "19 Jan 2023",
    Amount: "$1000",
    Paid: "$1000",
    AmountDue: "$0.00",
    Class: "badge badge-linesuccess",
    Status: "Paid",
  },
  {
    InvoiceNo: "INV002",
    Customer: "Rose",
    DueDate: "25 Jan 2023",
    Amount: "$1500",
    Paid: "$0.00",
    AmountDue: "$1500",
    Class: "badge badge-linedanger",
    Status: "Unpaid",
  },
  {
    InvoiceNo: "INV003",
    Customer: "Benjamin",
    DueDate: "05 Feb 2023",
    Amount: "$1800",
    Paid: "$1800",
    AmountDue: "$0.00",
    Class: "badge badge-linesuccess",
    Status: "Paid",
  },
  {
    InvoiceNo: "INV004",
    Customer: "Kaitlin",
    DueDate: "15 Feb 2023",
    Amount: "$2000",
    Paid: "$1000",
    AmountDue: "$1000",
    Class: "badge badge-warning",
    Status: "Overdue",
  },
  {
    InvoiceNo: "INV005",
    Customer: "Lilly",
    DueDate: "18 Mar 2023",
    Amount: "$800",
    Paid: "$800",
    AmountDue: "$0.00",
    Class: "badge badge-linesuccess",
    Status: "Paid",
  },
  {
    InvoiceNo: "INV006",
    Customer: "Freda",
    DueDate: "24 Mar 2023",
    Amount: "$750",
    Paid: "$0.00",
    AmountDue: "$750",
    Class: "badge badge-linedanger",
    Status: "Unpaid",
  },
  {
    InvoiceNo: "INV007",
    Customer: "Alwin",
    DueDate: "12 Apr 2023",
    Amount: "$1300",
    Paid: "$1300",
    AmountDue: "$0.00",
    Class: "badge badge-linesuccess",
    Status: "Paid",
  },
  {
    InvoiceNo: "INV008",
    Customer: "Maybelle",
    DueDate: "24 Apr 2023",
    Amount: "$1100",
    Paid: "$1100",
    AmountDue: "$0.00",
    Class: "badge badge-linesuccess",
    Status: "Paid",
  },
  {
    InvoiceNo: "INV009",
    Customer: "Ellen",
    DueDate: "03 May 2023",
    Amount: "$2300",
    Paid: "$2300",
    AmountDue: "$0.00",
    Class: "badge badge-linesuccess",
    Status: "Paid",
  },
  {
    InvoiceNo: "INV010",
    Customer: "Grace",
    DueDate: "29 May 2023",
    Amount: "$1700",
    Paid: "$1700",
    AmountDue: "$0.00",
    Class: "badge badge-linesuccess",
    Status: "Paid",
  },
];
export default {
  data() {
    return {
      filter: false,
      InvoiceName: ["Choose Name", "Rose", "Kaiklin"],
      Status: ["Choose Status", "Paid", "Unpaid", "Overdue"],
      data,
      columns,
    };
  },
  method: {
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
