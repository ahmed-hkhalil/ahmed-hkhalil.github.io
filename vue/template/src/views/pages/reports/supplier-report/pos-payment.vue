<template>
  <div
    class="tab-pane fade"
    id="payment-report"
    role="tabpanel"
    aria-labelledby="payment-report-tab"
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
              id="filter_search1"
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
              :options="SortPayment"
              id="sortpayment"
              placeholder="Sort by Date"
            />
          </div>
        </div>
        <!-- /Filter -->
        <div
          class="card"
          :style="{ display: filter ? 'block' : 'none' }"
          id="filter_inputs1"
        >
          <div class="card-body pb-0">
            <div class="row">
              <div class="col-lg-3 col-sm-6 col-12">
                <div class="input-blocks">
                  <vue-feather type="user" class="info-img"></vue-feather>
                  <vue-select
                    :options="SupplierPayment"
                    id="supplierpayment"
                    placeholder="Choose Supplier Name"
                  />
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 col-12">
                <div class="input-blocks">
                  <vue-feather type="calendar" class="info-img"></vue-feather>
                  <div class="input-groupicon">
                    <date-picker
                      v-model="startdate"
                      placeholder="Choose Date"
                      class="datetimepicker"
                      :editable="true"
                      :clearable="false"
                      :input-format="dateFormat"
                    />
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-sm-6 col-12">
                <div class="input-blocks">
                  <vue-feather type="file-text" class="info-img"></vue-feather>
                  <input type="text" placeholder="Enter Reference" />
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
              <template v-if="column.key === 'Date'">
                <div>{{ record.Date }}</div>
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
    title: "Date",
    dataIndex: "Date",
    key: "Date",
    sorter: {
      compare: (a, b) => {
        a = a.Date.toLowerCase();
        b = b.Date.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Purchase",
    dataIndex: "Purchase",
    sorter: {
      compare: (a, b) => {
        a = a.Purchase.toLowerCase();
        b = b.Purchase.toLowerCase();
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
    key: "Paid",
    sorter: {
      compare: (a, b) => {
        a = a.Paid.toLowerCase();
        b = b.Paid.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Paid By",
    dataIndex: "PaidBy",
    key: "PaidBy",
    sorter: {
      compare: (a, b) => {
        a = a.PaidBy.toLowerCase();
        b = b.PaidBy.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
];
const data = [
  {
    Date: "19 Jan 2023",
    Purchase: "PR_0001",
    Reference: "INV/PR_0001",
    SupplierName: "Apex Computers",
    Amount: "$1800",
    Paid: "$1800",
    PaidBy: "Cash",
  },
  {
    Date: "24 Jan 2023",
    Purchase: "PR_0002",
    Reference: "INV/PR_0002",
    SupplierName: "Beats Headphones",
    Amount: "$1100",
    Paid: "$1100",
    PaidBy: "Cash",
  },
  {
    Date: "02 Feb 2023",
    Purchase: "PR_0003",
    Reference: "INV/PR_0003",
    SupplierName: "Dazzle Shoes",
    Amount: "$2000",
    Paid: "$2000",
    PaidBy: "Cash",
  },
  {
    Date: "15 Feb 2023",
    Purchase: "PR_0004",
    Reference: "INV/PR_0004",
    SupplierName: "Best Accessories",
    Amount: "$700",
    Paid: "$700",
    PaidBy: "Cash",
  },
  {
    Date: "12 Mar 2023",
    Purchase: "PR_0005",
    Reference: "INV/PR_0005",
    SupplierName: "Aesthetic Bags",
    Amount: "$500",
    Paid: "$500",
    PaidBy: "Cash",
  },
  {
    Date: "26 Mar 2023",
    Purchase: "PR_0006",
    Reference: "INV/PR_0006",
    SupplierName: "Hatimi Hardwares",
    Amount: "$1600",
    Paid: "$1600",
    PaidBy: "Cash",
  },
  {
    Date: "16 Apr 2023",
    Purchase: "PR_0007",
    Reference: "INV/PR_0007",
    SupplierName: "Shine Bags",
    Amount: "$600",
    Paid: "$600",
    PaidBy: "Cash",
  },
  {
    Date: "24 Apr 2023",
    Purchase: "PR_0008",
    Reference: "INV/PR_0008",
    SupplierName: "Alpha Mobiles",
    Amount: "$120",
    Paid: "$120",
    PaidBy: "Cash",
  },
  {
    Date: "13 May 2023",
    Purchase: "PR_0009",
    Reference: "INV/PR_0009",
    SupplierName: "Sigma Chairs",
    Amount: "$300",
    Paid: "$300",
    PaidBy: "Cash",
  },
  {
    Date: "29 May 2023",
    Purchase: "PR_0010",
    Reference: "INV/PR_0011",
    SupplierName: "Zenith Bags",
    Amount: "$350",
    Paid: "$350",
    PaidBy: "Cash",
  },
];
import { ref } from "vue";
const currentDate = ref(new Date());
export default {
  data() {
    return {
      startdate: currentDate,
      dateFormat: "dd-MM-yyyy",
      filter: false,
      SortPayment: ["Sort by Date", "22 09 23", "18 09 23"],
      SupplierPayment: ["Choose Supplier Name", "Apex computers", "Beats Headphones"],
      data,
      columns,
    };
  },
};
</script>
