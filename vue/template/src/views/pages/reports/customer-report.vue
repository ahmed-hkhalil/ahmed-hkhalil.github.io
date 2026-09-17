<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Customer Report</h4>
            <h6>Manage Your Customer Report</h6>
          </div>
        </div>
        <ul class="table-top-head">
          <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"
              ><img src="@/assets/img/icons/pdf.svg" alt="img"
            /></a>
          </li>
          <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"
              ><img src="@/assets/img/icons/excel.svg" alt="img"
            /></a>
          </li>
          <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"
              ><img src="@/assets/img/icons/printer.svg" alt="img"
            /></a>
          </li>
          <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="rotate"
              ><i data-feather="rotate-ccw" class="feather-rotate-ccw"></i
            ></a>
          </li>
          <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="up"
              ><i data-feather="chevron-up" class="feather-chevron-up"></i
            ></a>
          </li>
        </ul>
      </div>

      <!-- /product list -->
      <div class="card table-list-card">
        <div class="card-body">
          <div class="table-top">
            <div class="search-set">
              <div class="search-input">
                <input type="text" placeholder="Search" 
class="dark-input" />
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
                :options="CustomerSort"
                id="customersort"
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
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="user" class="info-img"></vue-feather>
                    <vue-select
                      :options="CustomerName"
                      id="customerName"
                      placeholder="Choose Name"
                    />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="user" class="info-img"></vue-feather>
                    <vue-select
                      :options="CustomerId"
                      id="customerid"
                      placeholder="Choose ID"
                    />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="stop-circle" class="info-img"></vue-feather>
                    <vue-select
                      :options="CustomerStatus"
                      id="customerstatus"
                      placeholder="Choose Status"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <img
                      src="@/assets/img/icons/payment-status.svg"
                      class="info-img status-icon"
                      alt="Icon"
                    />
                    <vue-select
                      :options="CustomerPaymentStatus"
                      id="customerpymentstatus"
                      placeholder="Choose Payment Status"
                    />
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
                  <div>
                    <span class="badges status-badge">{{ record.Status }}</span>
                  </div>
                </template>
                <template v-else-if="column.key === 'PaymentStatus'">
                  <div>
                    <span :class="record.Class">{{ record.PaymentStatus }}</span>
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
<script>
const columns = [
  {
    title: "Customer ID",
    dataIndex: "CustomerID",
    key: "CustomerID",
    sorter: {
      compare: (a, b) => {
        a = a.CustomerID.toLowerCase();
        b = b.CustomerID.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Customer Name",
    dataIndex: "CustomerName",
    sorter: {
      compare: (a, b) => {
        a = a.CustomerName.toLowerCase();
        b = b.CustomerName.toLowerCase();
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
    title: "Due Amount",
    dataIndex: "DueAmount",
    sorter: {
      compare: (a, b) => {
        a = a.DueAmount.toLowerCase();
        b = b.DueAmount.toLowerCase();
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
    title: "Payment Status",
    dataIndex: "PaymentStatus",
    key: "PaymentStatus",
    sorter: {
      compare: (a, b) => {
        a = a.PaymentStatus.toLowerCase();
        b = b.PaymentStatus.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
];
const data = [
  {
    CustomerID: "CT_0001",
    CustomerName: "Thomas",
    Amount: "$1800",
    Paid: "$1800",
    DueAmount: "$0.00",
    Status: "Completed",
    Class: "badge-linesuccess",
    PaymentStatus: "Paid",
  },
  {
    CustomerID: "CT_0002",
    CustomerName: "Rose",
    Amount: "$120",
    Paid: "$0.00",
    DueAmount: "$120",
    Status: "Completed",
    Class: "badge-linedanger",
    PaymentStatus: "Unpaid",
  },
  {
    CustomerID: "CT_0003",
    CustomerName: "Benjamin",
    Amount: "$2000",
    Paid: "$2000",
    DueAmount: "$0.00",
    Status: "Completed",
    Class: "badge-linesuccess",
    PaymentStatus: "Paid",
  },
  {
    CustomerID: "CT_0004",
    CustomerName: "Kaitlin",
    Amount: "$1300",
    Paid: "$1300",
    DueAmount: "$1300",
    Status: "Completed",
    Class: "badges-warning",
    PaymentStatus: "Overdue",
  },
  {
    CustomerID: "CT_0005",
    CustomerName: "Lilly",
    Amount: "$400",
    Paid: "$0.00",
    DueAmount: "$400",
    Status: "Completed",
    Class: "badge-linedanger",
    PaymentStatus: "Unpaid",
  },
  {
    CustomerID: "CT_0006",
    CustomerName: "Freda",
    Amount: "$700",
    Paid: "$700",
    DueAmount: "$700",
    Status: "Completed",
    Class: "badges-warning",
    PaymentStatus: "Overdue",
  },
  {
    CustomerID: "CT_0007",
    CustomerName: "Alwin",
    Amount: "$800",
    Paid: "$800",
    DueAmount: "$0.00",
    Status: "Completed",
    Class: "badge-linesuccess",
    PaymentStatus: "Paid",
  },
  {
    CustomerID: "CT_0008",
    CustomerName: "Maybelle",
    Amount: "$300",
    Paid: "$300",
    DueAmount: "$0.00",
    Status: "Completed",
    Class: "badge-linesuccess",
    PaymentStatus: "Paid",
  },
  {
    CustomerID: "CT_0009",
    CustomerName: "Ellen",
    Amount: "$120",
    Paid: "$120",
    DueAmount: "$0.00",
    Status: "Completed",
    Class: "badge-linesuccess",
    PaymentStatus: "Paid",
  },
  {
    CustomerID: "CT_0010",
    CustomerName: "Grace",
    Amount: "$600",
    Paid: "$600",
    DueAmount: "$0.00",
    Status: "Completed",
    Class: "badge-linesuccess",
    PaymentStatus: "Paid",
  },
];
export default {
  data() {
    return {
      filter: false,
      CustomerSort: ["Sort by Date", "27 9 23", "10 9 23"],
      CustomerName: ["Choose Name", "Rose", "Kaiklin"],
      CustomerId: ["Choose ID", "CT_0003", "CT_0004", "CT_0005"],
      CustomerStatus: ["Choose Status", "Completed", "Incompleted"],
      CustomerPaymentStatus: ["Choose Payment Status", "Paid", "Unpaid", "Overdue"],
      data,
      columns,
    };
  },
};
</script>
