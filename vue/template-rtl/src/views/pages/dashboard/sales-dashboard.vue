<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>

  <div class="page-wrapper">
    <div class="content">
      <div class="welcome d-lg-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center welcome-text">
          <h3 class="d-flex align-items-center">
            <img src="@/assets/img/icons/hi.svg" alt="img" />&nbsp;Hi John Smilga,
          </h3>
          &nbsp;
          <h6>here's what's happening with your store today.</h6>
        </div>
        <div class="d-flex align-items-center">
          <div class="position-relative daterange-wraper d-flex me-2">
            <div class="input-groupicon calender-input">
              <input
                type="text"
                class="form-control date-range bookingrange"
                ref="dateRangeInput"
                placeholder="Select"
                value="13 Aug 1992"
              />
            </div>
            <vue-feather type="calendar"></vue-feather>
          </div>
          <button
            type="button"
            data-toggle="tooltip"
            class="btn btn-white-outline d-none d-md-inline-block"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="Refresh"
          >
            <vue-feather type="rotate-ccw" class="feather-16"></vue-feather>
          </button>
          <a
            ref="collapseHeader"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            title="Collapse"
            @click="toggleCollapse"
          >
            <i data-feather="chevron-up" class="feather-chevron-up"></i>
          </a>
        </div>
      </div>
      <div class="row sales-cards">
        <div class="col-xl-6 col-sm-12 col-12">
          <div
            class="card d-flex align-items-center justify-content-between default-cover mb-4"
          >
            <div>
              <h6>Weekly Earning</h6>
              <h3>$<span class="counters" data-count="95000.45">95000.45</span></h3>
              <p class="sales-range">
                <span class="text-success"
                  ><vue-feather type="chevron-up" class="feather-16"></vue-feather
                  >48%&nbsp;</span
                >increase compare to last week
              </p>
            </div>
            <img src="@/assets/img/icons/weekly-earning.svg" alt="img" />
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card color-info bg-primary mb-4">
            <img src="@/assets/img/icons/total-sales.svg" alt="img" />
            <h3>
              <vue3-autocounter
                class="counters"
                ref="counter"
                :startAmount="100"
                :delay="3"
                :endAmount="10000"
                :duration="5"
                :autoinit="true"
              />+
            </h3>
            <p>No of Total Sales</p>
            <vue-feather
              type="rotate-ccw"
              class="feather-16"
              data-bs-toggle="tooltip"
              data-bs-placement="top"
              title="Refresh"
            ></vue-feather>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
          <div class="card color-info bg-secondary mb-4">
            <img src="@/assets/img/icons/purchased-earnings.svg" alt="img" />
            <h3>
              <vue3-autocounter
                class="counters"
                ref="counter"
                :startAmount="10"
                :delay="3"
                :endAmount="800"
                :duration="5"
                :autoinit="true"
              />+
            </h3>
            <p>No of Total Sales</p>
            <vue-feather
              type="rotate-ccw"
              class="feather-16"
              data-bs-toggle="tooltip"
              data-bs-placement="top"
              title="Refresh"
            ></vue-feather>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-12 col-xl-4 d-flex">
          <div class="card flex-fill default-cover w-100 mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h4 class="card-title mb-0">Best Seller</h4>
              <div class="dropdown">
                <a href="javascript:void(0);" class="view-all d-flex align-items-center">
                  View All<span class="ps-2 d-flex align-items-center"
                    ><vue-feather type="arrow-right" class="feather-16"></vue-feather
                  ></span>
                </a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-borderless best-seller">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Products</th>
                      <th>Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="item in SalesBest" :key="item.id">
                      <td>{{ item.id }}</td>
                      <td class="productimgname">
                        <router-link to="/inventory/product-list" class="product-img">
                          <img
                            :src="require(`@/assets/img/products/${item.Image}`)"
                            alt="product"
                          />
                        </router-link>
                        <router-link to="/inventory/product-list">{{
                          item.Title
                        }}</router-link>
                      </td>
                      <td>{{ item.Price }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-xl-8 d-flex">
          <div class="card flex-fill default-cover w-100 mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h4 class="card-title mb-0">Recent Transactions</h4>
              <div class="dropdown">
                <a href="javascript:void(0);" class="view-all d-flex align-items-center">
                  View All<span class="ps-2 d-flex align-items-center"
                    ><vue-feather type="arrow-right" class="feather-16"></vue-feather
                  ></span>
                </a>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-borderless recent-transactions">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Order Details</th>
                      <th>Payment</th>
                      <th>Status</th>
                      <th>Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>
                        <div class="product-info">
                          <router-link to="/inventory/product-list" class="product-img">
                            <img
                              src="@/assets/img/products/stock-img-05.png"
                              alt="product"
                            />
                          </router-link>
                          <div class="info">
                            <router-link to="/inventory/product-list"
                              >Lobar Handy</router-link
                            >
                            <span class="dull-text d-flex align-items-center"
                              ><vue-feather type="clock" class="feather-14"></vue-feather
                              >15 Mins</span
                            >
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="d-block head-text">Paypal</span>
                        <span class="text-blue">#416645453773</span>
                      </td>
                      <td>
                        <span class="badge background-less border-success">Success</span>
                      </td>
                      <td>$1,099.00</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>
                        <div class="product-info">
                          <router-link to="/inventory/product-list" class="product-img">
                            <img
                              src="@/assets/img/products/expire-product-01.png"
                              alt="product"
                            />
                          </router-link>
                          <div class="info">
                            <router-link to="/inventory/product-list"
                              >Red Premium Handy</router-link
                            >
                            <span class="dull-text d-flex align-items-center"
                              ><vue-feather type="clock" class="feather-14"></vue-feather
                              >10 Mins</span
                            >
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="d-block head-text">Apple Pay</span>
                        <span class="text-blue">#147784454554</span>
                      </td>
                      <td>
                        <span class="badge background-less border-danger">Canceled</span>
                      </td>
                      <td>$600.55</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>
                        <div class="product-info">
                          <router-link to="/inventory/product-list" class="product-img">
                            <img
                              src="@/assets/img/products/expire-product-02.png"
                              alt="product"
                            />
                          </router-link>
                          <div class="info">
                            <router-link to="/inventory/product-list"
                              >Iphone 14 Pro</router-link
                            >
                            <span class="dull-text d-flex align-items-center"
                              ><vue-feather type="clock" class="feather-14"></vue-feather
                              >10 Mins</span
                            >
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="d-block head-text">Stripe</span>
                        <span class="text-blue">#147784454554</span>
                      </td>
                      <td>
                        <span class="badge background-less border-primary">Pending</span>
                      </td>
                      <td>$1,099.00</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>
                        <div class="product-info">
                          <router-link to="/inventory/product-list" class="product-img">
                            <img
                              src="@/assets/img/products/expire-product-03.png"
                              alt="product"
                            />
                          </router-link>
                          <div class="info">
                            <router-link to="/inventory/product-list"
                              >Black Slim 200</router-link
                            >
                            <span class="dull-text d-flex align-items-center"
                              ><vue-feather type="clock" class="feather-14"></vue-feather
                              >10 Mins</span
                            >
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="d-block head-text">PayU</span>
                        <span class="text-blue">#147784454554</span>
                      </td>
                      <td>
                        <span class="badge background-less border-success">Success</span>
                      </td>
                      <td>$1,569.00</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>
                        <div class="product-info">
                          <router-link to="/inventory/product-list" class="product-img">
                            <img
                              src="@/assets/img/products/expire-product-04.png"
                              alt="product"
                            />
                          </router-link>
                          <div class="info">
                            <router-link to="/inventory/product-list"
                              >Woodcraft Sandal</router-link
                            >
                            <span class="dull-text d-flex align-items-center"
                              ><vue-feather type="clock" class="feather-14"></vue-feather
                              >15 Mins</span
                            >
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="d-block head-text">Paytm</span>
                        <span class="text-blue">#147784454554</span>
                      </td>
                      <td>
                        <span class="badge background-less border-success">Success</span>
                      </td>
                      <td>$1,478.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Button trigger modal -->

      <div class="row sales-board">
        <div class="col-md-12 col-lg-7 col-sm-12 col-12">
          <div class="card flex-fill default-cover">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="card-title mb-0">Sales Analytics</h5>
              <div class="graph-sets">
                <div class="dropdown dropdown-wraper">
                  <button
                    class="btn btn-white btn-sm dropdown-toggle d-flex align-items-center"
                    type="button"
                    id="dropdown-sales"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <vue-feather type="calendar" class="feather-14"></vue-feather>2023
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdown-sales">
                    <li>
                      <a href="javascript:void(0);" class="dropdown-item">2023</a>
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="dropdown-item">2022</a>
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="dropdown-item">2021</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div id="sales-analysis" class="chart-set"></div>
              <apexchart
                type="area"
                height="300"
                :options="salesAnalysis.sline"
                :series="salesAnalysis.series"
              ></apexchart>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-5 col-sm-12 col-12">
          <!-- World Map -->
          <div class="card default-cover">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="card-title mb-0">Sales by Countries</h5>
              <div class="graph-sets">
                <div class="dropdown dropdown-wraper">
                  <button
                    class="btn btn-white btn-sm dropdown-toggle d-flex align-items-center"
                    type="button"
                    id="dropdown-country-sales"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    This Week
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdown-country-sales">
                    <li>
                      <a href="javascript:void(0);" class="dropdown-item">This Month</a>
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="dropdown-item">This Year</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div id="sales_db_world_map" style="height: 265px">
                <vector-map></vector-map>
              </div>
              <p class="sales-range">
                <span class="text-success"
                  ><vue-feather type="chevron-up" class="feather-16"></vue-feather
                  >48%&nbsp;</span
                >increase compare to last week
              </p>
            </div>
          </div>
          <!-- /World Map -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { salesAnalysis } from "./data";
import SalesBest from "@/assets/json/sales-best.json";
import "daterangepicker/daterangepicker.css";
import "daterangepicker/daterangepicker.js";
import { ref } from "vue";
import { onMounted } from "vue";
import moment from "moment";
import DateRangePicker from "daterangepicker";
export default {
  data() {
    return {
      SalesBest: SalesBest,
      salesAnalysis: salesAnalysis,
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
