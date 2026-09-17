<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Supplier Report</h4>
            <h6>Manage Your Supplier Report</h6>
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
      <div class="table-tab">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button
              class="nav-link active"
              id="purchase-report-tab"
              data-bs-toggle="pill"
              data-bs-target="#purchase-report"
              type="button"
              role="tab"
              aria-controls="purchase-report"
              aria-selected="true"
            >
              Purchase
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="payment-report-tab"
              data-bs-toggle="pill"
              data-bs-target="#payment-report"
              type="button"
              role="tab"
              aria-controls="payment-report"
              aria-selected="false"
            >
              Payment
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button
              class="nav-link"
              id="return-report-tab"
              data-bs-toggle="pill"
              data-bs-target="#return-report"
              type="button"
              role="tab"
              aria-controls="return-report"
              aria-selected="false"
            >
              Return
            </button>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <div
            class="tab-pane fade show active"
            id="purchase-report"
            role="tabpanel"
            aria-labelledby="purchase-report-tab"
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
                      :options="PurchaseSortBy"
                      id="purchasesortby"
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
                          <vue-feather type="box" class="info-img"></vue-feather>
                          <vue-select
                            :options="ProductPurchase"
                            id="ProductPurchase"
                            placeholder="Choose Product"
                          />
                        </div>
                      </div>
                      <div class="col-lg-2 col-sm-6 col-12">
                        <div class="input-blocks">
                          <vue-feather type="stop-circle" class="info-img"></vue-feather>
                          <vue-select
                            :options="PurchaseStatus"
                            id="purchasestatus"
                            placeholder="Choose Status"
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
                            <vue-feather
                              type="calendar"
                              class="feather-14 info-img"
                            ></vue-feather>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-12 ms-auto">
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
                      <template v-if="column.key === 'Product'">
                        <div class="productimgname">
                          <div class="view-product me-2">
                            <a href="javascript:void(0);">
                              <img
                                :src="require(`@/assets/img/products/${record.Image}`)"
                                alt="product"
                              />
                            </a>
                          </div>
                          <a href="javascript:void(0);">{{ record.Product }}</a>
                        </div>
                      </template>
                      <template v-else-if="column.key === 'Status'">
                        <div>
                          <span class="badges status-badge">{{ record.Status }}</span>
                        </div>
                      </template>
                    </template>
                  </a-table>
                </div>
              </div>
            </div>
            <!-- /product list -->
          </div>
          <pos-payment></pos-payment>
          <pos-return></pos-return>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
const columns = [
  {
    title: "PurchaseDate",
    dataIndex: "PurchaseDate",
    sorter: {
      compare: (a, b) => {
        a = a.PurchaseDate.toLowerCase();
        b = b.PurchaseDate.toLowerCase();
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
    title: "Purchase Amount",
    dataIndex: "PurchaseAmount",
    sorter: {
      compare: (a, b) => {
        a = a.PurchaseAmount.toLowerCase();
        b = b.PurchaseAmount.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Purchase Qty",
    dataIndex: "PurchaseQty",
    sorter: {
      compare: (a, b) => {
        a = a.PurchaseQty.toLowerCase();
        b = b.PurchaseQty.toLowerCase();
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
    title: "Balance",
    dataIndex: "Balance",
    key: "Balance",
    sorter: {
      compare: (a, b) => {
        a = a.Balance.toLowerCase();
        b = b.Balance.toLowerCase();
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
    PurchaseDate: "19 Jan 2023",
    Product: "Lenovo 3rd Generation",
    PurchaseAmount: "$1500",
    PurchaseQty: "50",
    Paid: "$1500",
    Balance: "$0.00",
    Status: "Received",
    Image: "stock-img-01.png",
  },
  {
    PurchaseDate: "24 Jan 2023",
    Product: "Bold V3.2",
    PurchaseAmount: "$1200",
    PurchaseQty: "20",
    Paid: "$1200",
    Balance: "$0.00",
    Status: "Received",
    Image: "stock-img-06.png",
  },
  {
    PurchaseDate: "03 Feb 2023",
    Product: "Nike Jordan",
    PurchaseAmount: "$2000",
    PurchaseQty: "30",
    Paid: "$2000",
    Balance: "$0.00",
    Status: "Received",
    Image: "stock-img-02.png",
  },
  {
    PurchaseDate: "15 Feb 2023",
    Product: "Apple Series 5 Watch",
    PurchaseAmount: "$800",
    PurchaseQty: "80",
    Paid: "$800",
    Balance: "$0.00",
    Status: "Received",
    Image: "stock-img-03.png",
  },
  {
    PurchaseDate: "12 Mar 2023",
    Product: "Amazon Echo Dot",
    PurchaseAmount: "$500",
    PurchaseQty: "70",
    Paid: "$500",
    Balance: "$0.00",
    Status: "Received",
    Image: "stock-img-04.png",
  },
  {
    PurchaseDate: "25 Mar 2023",
    Product: "Lobar Handy",
    PurchaseAmount: "$400",
    PurchaseQty: "100",
    Paid: "$400",
    Balance: "$0.00",
    Status: "Received",
    Image: "stock-img-05.png",
  },
  {
    PurchaseDate: "02 Apr 2023",
    Product: "Red Premium Handy",
    PurchaseAmount: "$300",
    PurchaseQty: "120",
    Paid: "$300",
    Balance: "$0.00",
    Status: "Received",
    Image: "expire-product-01.png",
  },
  {
    PurchaseDate: "19 Apr 2023",
    Product: "Iphone 14 Pro",
    PurchaseAmount: "$1800",
    PurchaseQty: "40",
    Paid: "$1800",
    Balance: "$0.00",
    Status: "Received",
    Image: "expire-product-02.png",
  },
  {
    PurchaseDate: "11 May 2023",
    Product: "Black Slim 200",
    PurchaseAmount: "$700",
    PurchaseQty: "300",
    Paid: "$700",
    Balance: "$0.00",
    Status: "Received",
    Image: "expire-product-03.png",
  },
  {
    PurchaseDate: "27 May 2023",
    Product: "Woodcraft Sandal",
    PurchaseAmount: "$600",
    PurchaseQty: "200",
    Paid: "$600",
    Balance: "$0.00",
    Status: "Received",
    Image: "expire-product-04.png",
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
      PurchaseStatus: ["Choose Status", "Received"],
      ProductPurchase: ["Choose Product", "Apple Series 5 Watch", "Amazon Echo Dot"],
      PurchaseSortBy: ["Sort by Date", "17 09 23", "19 09 23"],
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
