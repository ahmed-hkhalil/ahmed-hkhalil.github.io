<template>
  <div class="tab-pane fade" id="sales2" role="tabpanel" aria-labelledby="sales-tab">
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
          v-on:click="filter = !filter"
          :class="{ setclose: filter }"
          id="filter_search2"
        >
          <vue-feather type="filter" class="filter-icon"></vue-feather>
          <span><img src="@/assets/img/icons/closes.svg" alt="img" /></span>
        </a>
      </div>
      <div class="form-sort">
        <vue-feather type="sliders" class="info-img"></vue-feather>
        <vue-select
          :options="SalesTaxreport"
          id="salestaxreport"
          placeholder="Sort by Date"
        />
      </div>
    </div>
    <!-- /Filter -->
    <div class="card" :style="{ display: filter ? 'block' : 'none' }" id="filter_inputs2">
      <div class="card-body pb-0">
        <div class="row">
          <div class="col-lg-2 col-sm-6 col-12">
            <div class="input-blocks">
              <vue-feather type="zap" class="info-img"></vue-feather>
              <vue-select
                :options="Salestaxcat"
                id="salestaxcat"
                placeholder="Choose Category"
              />
            </div>
          </div>
          <div class="col-lg-2 col-sm-6 col-12">
            <div class="input-blocks">
              <vue-feather type="credit-card" class="info-img"></vue-feather>
              <vue-select
                :options="Paymentsales"
                id="paymentsales"
                placeholder="Payment Method"
              />
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-12">
            <div class="input-blocks">
              <vue-feather type="calendar" class="info-img"></vue-feather>
              <div class="input-groupicon">
                <input
                  type="text"
                  class="form-control date-range bookingrange"
                  ref="dateRangeInput"
                  placeholder="From Date - To Date"
                  name="datetimes"
                />
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
          <template v-if="column.key === 'Customer'">
            <div class="userimgname">
              <a href="javascript:void(0);" class="product-img">
                <img :src="require(`@/assets/img/users/${record.Image}`)" alt="product" />
              </a>
              <a href="javascript:void(0);">{{ record.Customer }}</a>
            </div>
          </template>
          <template v-else-if="column.key === 'InvoiceNumber'">
            <div class="ref-number">{{ record.InvoiceNumber }}</div>
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
</template>
<script>
const columns = [
  {
    title: "Customer",
    dataIndex: "Customer",
    key: "Customer",
    sorter: {
      compare: (a, b) => {
        a = a.Customer.toLowerCase();
        b = b.Customer.toLowerCase();
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
    title: "InvoiceNumber",
    dataIndex: "InvoiceNumber",
    key: "InvoiceNumber",
    sorter: {
      compare: (a, b) => {
        a = a.InvoiceNumber.toLowerCase();
        b = b.InvoiceNumber.toLowerCase();
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
    Customer: "Mitchum Daniel",
    Date: "12 Jul 2023",
    Image: "user-01.jpg",
    InvoiceNumber: "INV4237300",
    TotalAmount: "$30,000",
    PaymentMethod: "pay.svg",
    Discount: "10",
    TaxAmount: "$457",
  },
  {
    Customer: "Susan Lopez",
    Date: "04 Aug 2023",
    Image: "user-02.jpg",
    InvoiceNumber: "INV5385083",
    TotalAmount: "$27,000",
    PaymentMethod: "stripe.svg",
    Discount: "8",
    TaxAmount: "$382",
  },
  {
    Customer: "Robert",
    Date: "25 Aug 2023",
    Image: "user-03.jpg",
    InvoiceNumber: "INV7609368",
    TotalAmount: "$45,000",
    PaymentMethod: "razorpay.svg",
    Discount: "15",
    TaxAmount: "$649",
  },
  {
    Customer: "Russell Belle",
    Date: "16 Sep 2023",
    Image: "user-04.jpg",
    InvoiceNumber: "INV2750916",
    TotalAmount: "$18,000",
    PaymentMethod: "pay.svg",
    Discount: "12",
    TaxAmount: "$104",
  },
  {
    Customer: "Edward Muniz",
    Date: "28 Oct 2023",
    Image: "user-05.jpg",
    InvoiceNumber: "INV3478305",
    TotalAmount: "$22,000",
    PaymentMethod: "pay.svg",
    Discount: "20",
    TaxAmount: "$290",
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
      Paymentsales: ["Payment Method", "Complete", "Inprogress"],
      Salestaxcat: ["Choose Category", "Computers"],
      SalesTaxreport: ["Sort by Date", "Newest", "Oldest"],
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
        // Define the function outside the component options
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
};
</script>
