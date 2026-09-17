<template>
  <div
    class="tab-pane fade"
    id="return-report"
    role="tabpanel"
    aria-labelledby="return-report-tab"
  >
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
            <a
              class="btn btn-filter"
              id="filter_search2"
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
              :options="ReturnSort"
              id="returnsort"
              placeholder="Sort by Date"
            />
          </div>
        </div>
        <!-- /Filter -->
        <div
          class="card"
          :style="{ display: filter ? 'block' : 'none' }"
          id="filter_inputs2"
        >
          <div class="card-body pb-0">
            <div class="row">
              <div class="col-lg-3 col-sm-6 col-12">
                <div class="input-blocks">
                  <vue-feather type="user" class="info-img"></vue-feather>
                  <vue-select
                    :options="ReturnName"
                    id="returnname"
                    placeholder="Choose Name"
                  />
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 col-12">
                <div class="input-blocks">
                  <vue-feather type="stop-circle" class="info-img"></vue-feather>
                  <vue-select
                    :options="ReturnStatus"
                    id="returnstatus"
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
                    :options="ReturnPaymentStatus"
                    id="returnpaymentstatus"
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
          <a-table
            class="table datanew"
            :columns="columns"
            :data-source="data"
            :row-selection="{}"
          >
            <template #bodyCell="{ column, record }">
              <template v-if="column.key === 'Status'">
                <div><span class="badges status-badge">Completed</span></div>
              </template>
              <template v-if="column.key === 'PaymentStatus'">
                <div>
                  <span class="badge-linesuccess">{{ record.PaymentStatus }}</span>
                </div>
              </template>
            </template>
          </a-table>
        </div>
      </div>
    </div>
    <!-- /product list -->
  </div>
</template>
<script>
const columns = [
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
    title: "Supplier Name",
    dataIndex: "SupplierName",
    sorter: {
      compare: (a, b) => {
        a = a.SupplierName.toLowerCase();
        b = b.SupplierName.toLowerCase();
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
    Reference: "PR0001",
    SupplierName: "Apex Computers",
    Amount: "$1800",
    Paid: "$1800",
    DueAmount: "$0.00",
    Status: "Completed",
    Class: "badge-linesuccess",
    PaymentStatus: "Paid",
  },
  {
    Reference: "PR0002",
    SupplierName: "Beats Headphones",
    Amount: "$1200",
    Paid: "$0.00",
    DueAmount: "$1200",
    Status: "Completed",
    Class: "badge-linedanger",
    PaymentStatus: "Unpaid",
  },
  {
    Reference: "PR0003",
    SupplierName: "Dazzle Shoes",
    Amount: "$2000",
    Paid: "$2000",
    DueAmount: "$0.00",
    Status: "Completed",
    Class: "badge-linesuccess",
    PaymentStatus: "Paid",
  },
  {
    Reference: "PR0004",
    SupplierName: "Best Accessories",
    Amount: "$1300",
    Paid: "$1300",
    DueAmount: "$1300",
    Status: "Completed",
    Class: "badge-warning",
    PaymentStatus: "Overdue",
  },
  {
    Reference: "PR0005",
    SupplierName: "Aesthetic Bags",
    Amount: "$400",
    Paid: "$0.00",
    DueAmount: "$400",
    Status: "Completed",
    Class: "badge-linedanger",
    PaymentStatus: "Unpaid",
  },
  {
    Reference: "PR0006",
    SupplierName: "Hatimi Hardwares",
    Amount: "$700",
    Paid: "$700",
    DueAmount: "$700",
    Status: "Completed",
    Class: "badge-warning",
    PaymentStatus: "Overdue",
  },
  {
    Reference: "PR0007",
    SupplierName: "Shine Bags",
    Amount: "$800",
    Paid: "$800",
    DueAmount: "$0.00",
    Status: "Completed",
    Class: "badge-linesuccess",
    PaymentStatus: "Paid",
  },
  {
    Reference: "PR0008",
    SupplierName: "Alpha Mobiles",
    Amount: "$300",
    Paid: "$300",
    DueAmount: "$0.00",
    Status: "Completed",
    Class: "badge-linesuccess",
    PaymentStatus: "Paid",
  },
  {
    Reference: "PR0009",
    SupplierName: "Sigma Chairs",
    Amount: "$120",
    Paid: "$120",
    DueAmount: "$0.00",
    Status: "Completed",
    Class: "badge-linesuccess",
    PaymentStatus: "Paid",
  },
  {
    Reference: "PR0010",
    SupplierName: "Zenith Bags",
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
      ReturnSort: ["Sort by Date", "24 09 23", "30 09 23"],
      ReturnPaymentStatus: ["Choose Payment Status", "Paid", "Unpaid", "Overdue"],
      ReturnName: ["Choose Name", "Apex Computers", "Beats headphones"],
      ReturnStatus: ["Choose Status", "Completed", "Incompleted"],
      data,
      columns,
    };
  },
};
</script>
