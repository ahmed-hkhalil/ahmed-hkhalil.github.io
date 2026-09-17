<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header justify-content-between">
        <div class="page-title">
          <h4>Tax Reports</h4>
          <h6>Manage your Tax Reports</h6>
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
              ><i data-feather="printer" class="feather-rotate-ccw"></i
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
          <div class="tabs-set">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link active"
                  id="purchase-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#purchase2"
                  type="button"
                  role="tab"
                  aria-controls="purchase2"
                  aria-selected="true"
                >
                  Purchase Tax Report
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="sales-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#sales2"
                  type="button"
                  role="tab"
                  aria-controls="sales2"
                  aria-selected="false"
                >
                  Sales Tax Report
                </button>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div
                class="tab-pane fade show active"
                id="purchase2"
                role="tabpanel"
                aria-labelledby="purchase-tab"
              >
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
                      <a href="" class="me-3 layout-box"
                        ><vue-feather type="layout" class="layout"></vue-feather
                      ></a>
                    </div>
                  </div>
                  <div class="form-sort">
                    <vue-feather type="sliders" class="info-img"></vue-feather>
                    <vue-select
                      :options="TaxSort"
                      id="taxsort"
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
                            :options="TaxCat"
                            id="taxcat"
                            placeholder="Choose Category"
                          />
                        </div>
                      </div>
                      <div class="col-lg-2 col-sm-6 col-12">
                        <div class="input-blocks">
                          <vue-feather type="credit-card" class="info-img"></vue-feather>
                          <vue-select
                            :options="PaymentMethodTax"
                            id="paymentmethodtax"
                            placeholder="Payment Method"
                          />
                        </div>
                      </div>
                      <div class="col-lg-3 col-sm-6 col-12">
                        <div class="input-blocks">
                          <div class="position-relative daterange-wraper">
                            <input
                              type="text"
                              class="form-control date-range bookingrange"
                              ref="dateRangeInput"
                              placeholder="From Date - To Date"
                              name="datetimes"
                            />
                            <vue-feather
                              type="calendar"
                              class="feather-14 info-img"
                            ></vue-feather>
                          </div>
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
                      <template v-if="column.key === 'RefNo'">
                        <td class="ref-number">{{ record.RefNo }}</td>
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
              <salestax-report></salestax-report>
            </div>
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
    title: "Supplier",
    dataIndex: "Supplier",
    key: "Supplier",
    sorter: {
      compare: (a, b) => {
        a = a.Supplier.toLowerCase();
        b = b.Supplier.toLowerCase();
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
    title: "Ref No",
    dataIndex: "RefNo",
    key: "RefNo",
    sorter: {
      compare: (a, b) => {
        a = a.RefNo.toLowerCase();
        b = b.RefNo.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Total Amount",
    dataIndex: "TotalAmount",
    key: "TotalAmount",
    sorter: {
      compare: (a, b) => {
        a = a.TotalAmount.toLowerCase();
        b = b.TotalAmount.toLowerCase();
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
    title: "Discount",
    dataIndex: "Discount",
    sorter: {
      compare: (a, b) => {
        a = a.Discount.toLowerCase();
        b = b.Discount.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Tax Amount",
    dataIndex: "TaxAmount",
    sorter: {
      compare: (a, b) => {
        a = a.TaxAmount.toLowerCase();
        b = b.TaxAmount.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
];
const data = [
  {
    Supplier: "Lavi",
    Date: "12 Jul 2023",
    RefNo: "#4237300",
    TotalAmount: "$30,000",
    PaymentMethod: "pay.svg",
    Discount: "10",
    TaxAmount: "$457",
  },
  {
    Supplier: "Anthony",
    Date: "18 Aug 2023",
    RefNo: "#5628954",
    TotalAmount: "$45,000",
    PaymentMethod: "stripe.svg",
    Discount: "12",
    TaxAmount: "$265",
  },
  {
    Supplier: "Colleen",
    Date: "27 Aug 2023",
    RefNo: "#8745239",
    TotalAmount: "$26,000",
    PaymentMethod: "razorpay.svg",
    Discount: "8",
    TaxAmount: "$980",
  },
  {
    Supplier: "Victor",
    Date: "05 Sep 2023",
    RefNo: "#9814586",
    TotalAmount: "$18,000",
    PaymentMethod: "pay.svg",
    Discount: "15",
    TaxAmount: "$561",
  },
  {
    Supplier: "Tracy",
    Date: "23 Sep 2023",
    RefNo: "#7590325",
    TotalAmount: "$52,000",
    PaymentMethod: "pay.svg",
    Discount: "20",
    TaxAmount: "$382",
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
      TaxSort: ["Sort by Date", "Oldest"],
      TaxCat: ["Choose Category", "Computers"],
      PaymentMethodTax: ["Payment Method", "Complete", "Inprogress"],
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
          return start.format("M/D/YYYY") + " - " + end.format("M/D/YYYY");
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
    booking_range(start, end) {
      return start.format("M/D/YYYY") + " - " + end.format("M/D/YYYY");
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
