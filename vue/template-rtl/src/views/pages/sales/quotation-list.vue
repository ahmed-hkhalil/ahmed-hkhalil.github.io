<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Quotation List</h4>
            <h6>Manage Your Quotation</h6>
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
        <div class="page-btn">
          <a
            href="javascript:void(0);"
            class="btn btn-added"
            data-bs-toggle="modal"
            data-bs-target="#add-units"
            ><vue-feather type="plus-circle" class="me-2"></vue-feather>Add New
            Quotation</a
          >
        </div>
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
              <vue-select :options="Quoda" id="quoda" placeholder="Sort by Date" />
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
                      :options="QuodaPr"
                      id="quodapr"
                      placeholder="Choose product"
                    />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="stop-circle" class="info-img"></vue-feather>
                    <vue-select
                      :options="QuodaSt"
                      id="quodast"
                      placeholder="Choose Status"
                    />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="user" class="info-img"></vue-feather>
                    <vue-select
                      :options="Quodacu"
                      id="quodacu"
                      placeholder="Choose Custmer"
                    />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="file-text" class="info-img"></vue-feather>
                    <div class="input-groupicon">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Enter Reference"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
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
                <template v-else-if="column.key === 'Status'">
                  <div>
                    <span class="badges status-badge">{{ record.Status }}</span>
                  </div>
                </template>
                <template v-if="column.key === 'action'">
                  <td class="action-table-data">
                    <div class="edit-delete-action data-row">
                      <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                        <vue-feather type="eye" class="action-eye"></vue-feather>
                      </a>
                      <a
                        class="me-2 p-2 mb-0"
                        data-bs-toggle="modal"
                        data-bs-target="#edit-units"
                      >
                        <i data-feather="edit" class="feather-edit"></i>
                      </a>
                      <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
                        <i data-feather="trash-2" class="feather-trash-2"></i>
                      </a>
                    </div>
                  </td>
                </template>
              </template>
            </a-table>
          </div>
        </div>
      </div>
      <!-- /product list -->
    </div>
  </div>
  <quotation-list-modal></quotation-list-modal>
</template>
<script>
const columns = [
  {
    title: "Product Name",
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
    title: "Grand Total($)",
    dataIndex: "GrandTotal",
    sorter: {
      compare: (a, b) => {
        a = a.GrandTotal.toLowerCase();
        b = b.GrandTotal.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Action",
    key: "action",
    sorter: true,
  },
];
const data = [
  {
    ProductName: "Lenovo 3rd Generation",
    Reference: "PT001",
    CustomerName: "walk-in-customer",
    Status: "Sent",
    Image: "stock-img-01.png",
    Class: "badges status-badge",
    GrandTotal: "$550",
  },
  {
    ProductName: "Bold V3.2",
    Reference: "PT002",
    CustomerName: "walk-in-customer",
    Status: "Sent",
    Image: "stock-img-06.png",
    Class: "badges status-badge",
    GrandTotal: "$430",
  },
  {
    ProductName: "Nike Jordan",
    Reference: "PT003",
    CustomerName: "walk-in-customer",
    Status: "Ordered",
    Image: "stock-img-02.png",
    Class: "badges order-badge",
    GrandTotal: "$260",
  },
  {
    ProductName: "Apple Series 5 Watch",
    Reference: "PT004",
    CustomerName: "John Smith",
    Status: "Pending",
    Image: "stock-img-03.png",
    Class: "badges unstatus-badge",
    GrandTotal: "$470",
  },
  {
    ProductName: "Amazon Echo Dot",
    Reference: "PT005",
    CustomerName: "Harley Stanley",
    Status: "Pending",
    Image: "stock-img-04.png",
    Class: "badges unstatus-badge",
    GrandTotal: "$380",
  },
  {
    ProductName: "Lobar Handy",
    Reference: "PT006",
    CustomerName: "Egbert Caldwell",
    Status: "Sent",
    Image: "stock-img-05.png",
    Class: "badges status-badge",
    GrandTotal: "$190",
  },
  {
    ProductName: "Red Premium Handy",
    Reference: "PT007",
    CustomerName: "walk-in-customer",
    Status: "Pending",
    Image: "expire-product-01.png",
    Class: "badges unstatus-badge",
    GrandTotal: "$540",
  },
  {
    ProductName: "Iphone 14 Pro",
    Reference: "PT008",
    CustomerName: "Benjamin",
    Status: "Ordered",
    Image: "expire-product-02.png",
    Class: "badges order-badge",
    GrandTotal: "$610",
  },
  {
    ProductName: "Black Slim 200",
    Reference: "PT009",
    CustomerName: "walk-in-customer",
    Status: "Pending",
    Image: "expire-product-03.png",
    Class: "badges unstatus-badge",
    GrandTotal: "$220",
  },
  {
    ProductName: "Woodcraft Sandal",
    Reference: "PT010",
    CustomerName: "Nydia Fitzgerald",
    Status: "Sent",
    Image: "expire-product-04.png",
    Class: "badges status-badge",
    GrandTotal: "$460",
  },
  {
    ProductName: "Lobar Handy",
    Reference: "PT011",
    CustomerName: "Thomas",
    Status: "Pending",
    Image: "expire-product-01.png",
    Class: "badges unstatus-badge",
    GrandTotal: "$250",
  },
  {
    ProductName: "Iphone 15 Pro",
    Reference: "PT012",
    CustomerName: "Benjamin",
    Status: "Sent",
    Image: "expire-product-02.png",
    Class: "badges status-badge",
    GrandTotal: "$550",
  },
];
export default {
  data() {
    return {
      filter: false,
      Quodacu: ["Choose Custmer", "Walk-in-Customer", "John Smith"],
      QuodaSt: ["Choose Status", "Sent", "orderd"],
      Quoda: ["Sort by Date", "25 9 23", "12 9 23"],
      QuodaPr: ["Choose Product", "Bold V3.2", "Apple Series 5 Watch"],
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
