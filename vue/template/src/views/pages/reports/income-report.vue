<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header justify-content-between">
        <div class="page-title">
          <h4>Income Report</h4>
          <h6>Manage your Income</h6>
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
                <a href="" class="me-3 layout-box"
                  ><vue-feather type="layout" class="layout"></vue-feather
                ></a>
              </div>
            </div>
            <div class="form-sort">
              <vue-feather type="sliders" class="info-img"></vue-feather>
              <vue-select
                :options="IncomeSort"
                id="incomesort"
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
                    <vue-feather type="zap" class="info-img"></vue-feather>
                    <vue-select
                      :options="IncomeCategory"
                      id="incomeCategory"
                      placeholder="Choose Category"
                    />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="user" class="info-img"></vue-feather>
                    <vue-select
                      :options="IncomeCreated"
                      id="incomecreated"
                      placeholder="Created by"
                    />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="credit-card" class="info-img"></vue-feather>
                    <vue-select
                      :options="IncomePayment"
                      id="incomepayment"
                      placeholder="Payment Method"
                    />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <div class="position-relative daterange-wraper">
                      <input
                        type="text"
                        class="form-control date-range bookingrange"
                        ref="dateRangeInput"
                        placeholder="From Date - To Date"
                        name="datetimes"
                      />
                      <i data-feather="calendar" class="feather-14 info-img"></i>
                    </div>
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
          <div class="table-responsive">
            <a-table
              class="table datanew"
              :columns="columns"
              :data-source="data"
              :row-selection="{}"
            >
              <template #bodyCell="{ column, record }">
                <template v-if="column.key === 'User'">
                  <div class="userimgname">
                    <a href="javascript:void(0);" class="product-img">
                      <img
                        :src="require(`@/assets/img/users/${record.Image}`)"
                        alt="product"
                      />
                    </a>
                    <a href="javascript:void(0);">{{ record.User }}</a>
                  </div>
                </template>
                <template v-else-if="column.key === 'PaymentMethod'">
                  <div class="payment-info">
                    <a href="javascript:void(0);">
                      <img
                        :src="require(`@/assets/img/icons/${record.PaymentMethod}`)"
                        alt="Pay"
                      />
                    </a>
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
    title: "Income Category",
    dataIndex: "IncomeCategory",
    sorter: {
      compare: (a, b) => {
        a = a.IncomeCategory.toLowerCase();
        b = b.IncomeCategory.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "User",
    dataIndex: "User",
    key: "User",
    sorter: {
      compare: (a, b) => {
        a = a.User.toLowerCase();
        b = b.User.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Payment Method",
    dataIndex: "PaymentMethod",
    key: "PaymentMethod",
    sorter: {
      compare: (a, b) => {
        a = a.PaymentMethod.toLowerCase();
        b = b.PaymentMethod.toLowerCase();
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
];
const data = [
  {
    Date: "01 Jan 2024",
    IncomeCategory: "Printing",
    Image: "user-01.jpg",
    PaymentMethod: "pay.svg",
    User: "Mitchum Daniel",
    Amount: "$14,174",
  },
  {
    Date: "14 Jan 2024",
    IncomeCategory: "Utilities",
    Image: "user-02.jpg",
    PaymentMethod: "stripe.svg",
    User: "Susan Lopez",
    Amount: "$19,474",
  },
  {
    Date: "25 Jan 2024",
    IncomeCategory: "Travel",
    Image: "user-03.jpg",
    PaymentMethod: "razorpay.svg",
    User: "Robert Grossman",
    Amount: "$20,744",
  },
  {
    Date: "01 May 2024",
    IncomeCategory: "Purchase",
    Image: "user-04.jpg",
    PaymentMethod: "stripe.svg",
    User: "Russell Belle",
    Amount: "$25,474",
  },
  {
    Date: "14 Oct 2024",
    IncomeCategory: "Printing",
    Image: "user-05.jpg",
    PaymentMethod: "pay.svg",
    User: "Edward K. Muniz",
    Amount: "$12,436",
  },
];
import "daterangepicker/daterangepicker.css";
import "daterangepicker/daterangepicker.js";
import { ref } from "vue";
import { onMounted } from "vue";
import moment from "moment";
import DateRangePicker from "daterangepicker";
export default {
  data() {
    return {
      filter: false,
      IncomeSort: ["Sort by Date", "10 09 23", "17 09 23"],
      IncomeCategory: ["Choose Category", "Printing", "Travel"],
      IncomeCreated: ["Created by", "Susan Lopez", "Russell Belle"],
      IncomePayment: ["Payment Method", "Paypal", "Stripe"],
      data,
      columns,
    };
  },
  setup() {
    const dateRangeInput = ref(null);
    onMounted(() => {
      if (dateRangeInput.value) {
        const start = moment().subtract(6, "days");
        const end = moment();

        function booking_range(start, end) {
          start.format("M/D/YYYY") + " - " + end.format("M/D/YYYY");
        }

        new DateRangePicker(
          dateRangeInput.value,
          {
            startDate: start,
            endDate: end,
            ranges: {},
          },
          booking_range
        );

        booking_range(start, end);
      }
    });
    return {
      dateRangeInput,
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
