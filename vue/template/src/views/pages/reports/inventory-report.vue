<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Inventory Report</h4>
            <h6>Manage Your Inventory Report</h6>
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
                :options="InventoryReport"
                id="inventoryreport"
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
                      :options="InventoryProduct"
                      id="inventoryproduct"
                      placeholder="Choose Product"
                    />
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="input-blocks">
                    <vue-feather type="zap" class="info-img"></vue-feather>
                    <vue-select
                      :options="InventoryCategory"
                      id="inventorycategory"
                      placeholder="Choose Category"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
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
    title: "SKU",
    dataIndex: "SKU",
    sorter: {
      compare: (a, b) => {
        a = a.SKU.toLowerCase();
        b = b.SKU.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Category",
    dataIndex: "Category",
    sorter: {
      compare: (a, b) => {
        a = a.Category.toLowerCase();
        b = b.Category.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Brand",
    dataIndex: "Brand",
    sorter: {
      compare: (a, b) => {
        a = a.Brand.toLowerCase();
        b = b.Brand.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Unit",
    dataIndex: "Unit",
    sorter: {
      compare: (a, b) => {
        a = a.Unit.toLowerCase();
        b = b.Unit.toLowerCase();
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
    SKU: "PT001",
    Category: "Computers",
    Brand: "N/D",
    Unit: "pc",
    Image: "stock-img-01.png",
    InstockQty: "100",
  },
  {
    ProductName: "Bold V3.2",
    SKU: "PT002",
    Category: "Accessories",
    Brand: "N/D",
    Unit: "pc",
    Image: "stock-img-06.png",
    InstockQty: "150",
  },
  {
    ProductName: "Nike Jordan",
    SKU: "PT003",
    Category: "Shoe",
    Brand: "N/D",
    Unit: "pc",
    Image: "stock-img-02.png",
    InstockQty: "170",
  },
  {
    ProductName: "Apple Series 5 Watch",
    SKU: "PT004",
    Category: "Accessories",
    Brand: "N/D",
    Unit: "pc",
    Image: "stock-img-03.png",
    InstockQty: "120",
  },
  {
    ProductName: "Amazon Echo Dot",
    SKU: "PT005",
    Category: "Accessories",
    Brand: "N/D",
    Unit: "pc",
    Image: "stock-img-04.png",
    InstockQty: "80",
  },
  {
    ProductName: "Lobar Handy",
    SKU: "PT006",
    Category: "Furnitures",
    Brand: "N/D",
    Unit: "pc",
    Image: "stock-img-05.png",
    InstockQty: "200",
  },
  {
    ProductName: "Red Premium Handy",
    SKU: "PT007",
    Category: "Accessories",
    Brand: "N/D",
    Unit: "pc",
    Image: "expire-product-01.png",
    InstockQty: "230",
  },
  {
    ProductName: "Iphone 14 Pro",
    SKU: "PT008",
    Category: "Phone",
    Brand: "N/D",
    Unit: "pc",
    Image: "expire-product-02.png",
    InstockQty: "370",
  },
  {
    ProductName: "Black Slim 200",
    SKU: "PT009",
    Category: "Furnitures",
    Brand: "N/D",
    Unit: "pc",
    Image: "expire-product-03.png",
    InstockQty: "260",
  },
  {
    ProductName: "Woodcraft Sandal",
    SKU: "PT010",
    Category: "Bags",
    Brand: "N/D",
    Unit: "pc",
    Image: "expire-product-04.png",
    InstockQty: "340",
  },
];
export default {
  data() {
    return {
      filter: false,
      InventoryReport: ["Sort by Date", "25 9 23", "12 9 23"],
      InventoryProduct: ["Choose Product", "Bold V3.2", "Nike Jordan"],
      InventoryCategory: ["Choose Category", "Accessories", "Shoe"],
      data,
      columns,
    };
  },
  toggleCollapse() {
    const collapseHeader = this.$refs.collapseHeader;

    if (collapseHeader) {
      collapseHeader.classList.toggle("active");
      document.body.classList.toggle("header-collapse");
    }
  },
};
</script>
