<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Purchase Report</h4>
            <h6>Manage Your Purchase Report</h6>
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
                :options="SortbyPurchase"
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
                <div class="col-lg-3">
                  <div class="input-blocks">
                    <vue-feather type="box" class="info-img"></vue-feather>
                    <vue-select
                      :options="PurchaseBold"
                      id="purchasebold"
                      placeholder="Choose Product"
                    />
                  </div>
                </div>
                <div class="col-lg-9 col-sm-6 col-12">
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
                <template v-if="column.key === 'ProductName'">
                  <div class="productimgname">
                    <div class="view-product me-2">
                      <a href="javascript:void(0);">
                        <img
                          :src="require(`@/assets/img/products/${record.Image}`)"
                          alt="product"
                        />
                      </a>
                    </div>
                    <a href="javascript:void(0);">{{ record.ProductName }}</a>
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
    title: "ProductName",
    dataIndex: "ProductName",
    key: "ProductName",
    sorter: {
      compare: (a, b) => {
        a = a.ProductName.toLowerCase();
        b = b.ProductName.toLowerCase();
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
    title: "Instock Qty",
    dataIndex: "InstockQty",
    sorter: {
      compare: (a, b) => {
        a = a.InstockQty.toLowerCase();
        b = b.InstockQty.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
];
const data = [
  {
    ProductName: "Lenovo 3rd Generation",
    PurchaseAmount: "$5000",
    PurchaseQty: "500",
    InstockQty: "100",
    Image: "stock-img-01.png",
  },
  {
    ProductName: "Bold V3.2",
    PurchaseAmount: "$1000",
    PurchaseQty: "200",
    InstockQty: "150",
    Image: "stock-img-06.png",
  },
  {
    ProductName: "Nike Jordan",
    PurchaseAmount: "$2000",
    PurchaseQty: "350",
    InstockQty: "200",
    Image: "stock-img-02.png",
  },
  {
    ProductName: "Apple Series 5 Watch",
    PurchaseAmount: "$500",
    PurchaseQty: "120",
    InstockQty: "50",
    Image: "stock-img-03.png",
  },
  {
    ProductName: "Amazon Echo Dot",
    PurchaseAmount: "$100",
    PurchaseQty: "400",
    InstockQty: "320",
    Image: "stock-img-04.png",
  },
  {
    ProductName: "Lobar Handy",
    PurchaseAmount: "$1500",
    PurchaseQty: "170",
    InstockQty: "80",
    Image: "stock-img-05.png",
  },
  {
    ProductName: "Red Premium Handy",
    PurchaseAmount: "$800",
    PurchaseQty: "320",
    InstockQty: "180",
    Image: "expire-product-01.png",
  },
  {
    ProductName: "Iphone 14 Pro",
    PurchaseAmount: "$1200",
    PurchaseQty: "270",
    InstockQty: "120",
    Image: "expire-product-02.png",
  },
  {
    ProductName: "Black Slim 200",
    PurchaseAmount: "$600",
    PurchaseQty: "180",
    InstockQty: "70",
    Image: "expire-product-03.png",
  },
  {
    ProductName: "Woodcraft Sandal",
    PurchaseAmount: "$300",
    PurchaseQty: "450",
    InstockQty: "300",
    Image: "expire-product-04.png",
  },
];
export default {
  data() {
    return {
      filter: false,
      SortbyPurchase: ["Sort by Date", "25 9 23", "12 9 23"],
      PurchaseBold: ["Choose Product", "Bold V3.2", "Nike Jordan"],
      data,
      columns,
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
