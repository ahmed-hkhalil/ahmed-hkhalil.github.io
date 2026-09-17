<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Expense Category</h4>
            <h6>Manage Your Expense Category</h6>
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
            ><vue-feather type="plus-circle" class="me-2"></vue-feather> Add Expense
            Category</a
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
              </div>
            </div>
            <div class="form-sort">
              <vue-feather type="sliders" class="info-img"></vue-feather>
              <vue-select
                :options="Catedate"
                id="catechooseone"
                placeholder="Choose Category"
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
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="zap" class="info-img"></vue-feather>
                    <vue-select
                      :options="CateChoose"
                      id="catechoose"
                      placeholder="Choose Category"
                    />
                  </div>
                </div>
                <div class="col-lg-9 col-sm-6 col-12">
                  <div class="input-blocks">
                    <a class="btn btn-filters ms-auto"
                      ><i data-feather="search" class="feather-search"></i> Search
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Filter -->
          <div class="table-responsive">
            <a-table
              class="table datanew table-hover table-center mb-0"
              :columns="columns"
              :data-source="data"
              :row-selection="{}"
            >
              <template #bodyCell="{ column }">
                <template v-if="column.key === 'action'">
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a
                        class="me-2 p-2 mb-0"
                        data-bs-toggle="modal"
                        data-bs-target="#edit-units"
                      >
                        <i data-feather="edit" class="feather-edit"></i>
                      </a>
                      <a class="me-0 confirm-text p-2 mb-0" href="javascript:void(0);">
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
</template>
<script>
const columns = [
  {
    title: "Category Name",
    dataIndex: "CategoryName",
    sorter: {
      compare: (a, b) => {
        a = a.CategoryName.toLowerCase();
        b = b.CategoryName.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Description",
    dataIndex: "Description",
    sorter: {
      compare: (a, b) => {
        a = a.Description.toLowerCase();
        b = b.Description.toLowerCase();
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
    FIELD1: "",
    CategoryName: "Employee Benefits",
    Description: "Employee Vehicle",
  },
  {
    FIELD1: "",
    CategoryName: "Foods & Snacks",
    Description: "Employee Foods",
  },
  {
    FIELD1: "",
    CategoryName: "Entertainment",
    Description: "Employee Welfare",
  },
  {
    FIELD1: "",
    CategoryName: "Office Expenses & Postage",
    Description: "Postal Expense",
  },
  {
    FIELD1: "",
    CategoryName: "Other Expenses",
    Description: "Other Expenses",
  },
  {
    FIELD1: "",
    CategoryName: "Petrol",
    Description: "Employee Cab",
  },
  {
    FIELD1: "",
    CategoryName: "Maintenance",
    Description: "Office Maintenance",
  },
  {
    FIELD1: "",
    CategoryName: "Marketing",
    Description: "Advertising Cost",
  },
  {
    FIELD1: "",
    CategoryName: "Printing & Stationery",
    Description: "Stationery Expense",
  },
  {
    FIELD1: "",
    CategoryName: "Telephone Expense",
    Description: "Telephone Cost",
  },
  {
    FIELD1: "",
    CategoryName: "Entertainment",
    Description: "Office Vehicle",
  },
  {
    FIELD1: "",
    CategoryName: "Office Expenses & Postage",
    Description: "Employee Foods",
  },
];
export default {
  data() {
    return {
      filter: false,
      Catedate: ["Sort bt Date", "25 9 23", "12 9 23"],
      CateChoose: ["Choose Category", "Food & Snacks", "Petrol"],
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
