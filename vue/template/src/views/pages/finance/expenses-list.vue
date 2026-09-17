<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Expense List</h4>
            <h6>Manage Your Expenses</h6>
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
            ><vue-feather type="plus-circle" class="me-2"></vue-feather> Add New
            Expense</a
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
                :options="Sortbyexp"
                id="sortbyexp"
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
                    <vue-feather type="user" class="info-img"></vue-feather>
                    <vue-select
                      :options="ChooseMacbook"
                      id="choosemackbook"
                      placeholder="Choose Name"
                    />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="stop-circle" class="info-img"></vue-feather>
                    <vue-select
                      :options="ChooseComputers"
                      id="choosecomputers"
                      placeholder="Choose Status"
                    />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="calendar" class="info-img"></vue-feather>
                    <div class="input-groupicon">
                      <date-picker
                        v-model="startdateOne"
                        placeholder="From Date - To Date"
                        class="form-control"
                        :editable="true"
                        :clearable="false"
                        :input-format="dateFormat"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="file-text" class="info-img"></vue-feather>
                    <div class="input-groupicon">
                      <date-picker
                        v-model="startdateOne"
                        placeholder="Enter Reference"
                        class="form-control"
                        :editable="true"
                        :clearable="false"
                        :input-format="dateFormat"
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
                <template v-if="column.key === 'Status'">
                  <td>
                    <span :class="record.StatusClass">{{ record.Status }}</span>
                  </td>
                </template>
                <template v-else-if="column.key === 'action'">
                  <td class="action-table-data">
                    <div class="edit-delete-action">
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
                      <a class="me-3 confirm-text p-2 mb-0" href="javascript:void(0);">
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
  <expenses-list-modal></expenses-list-modal>
</template>
<script>
import { ref } from "vue";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
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
    CategoryName: "Employee Benefits",
    Reference: "PT001",
    Date: "19 Jan 2023",
    Status: "Active",
    StatusClass: "badge badge-linesuccess",
    Amount: "$550",
    Description: "Employee Vehicle",
  },
  {
    CategoryName: "Foods & Snacks",
    Reference: "PT002",
    Date: "27 Jan 2023",
    Status: "Active",
    StatusClass: "badge badge-linesuccess",
    Amount: "$570",
    Description: "Employee Foods",
  },
  {
    CategoryName: "Entertainment",
    Reference: "PT003",
    Date: "03 Feb 2023",
    Status: "Active",
    StatusClass: "badge badge-linesuccess",
    Amount: "$400",
    Description: "Office Vehicle",
  },
  {
    CategoryName: "Office Expenses & Postage",
    Reference: "PT004",
    Date: "17 Feb 2023",
    Status: "Inactive",
    StatusClass: "badge badge-linedanger",
    Amount: "$750",
    Description: "Employee Foods",
  },
  {
    CategoryName: "Employee Benefits",
    Reference: "PT005",
    Date: "14 Mar 2023",
    Status: "Inactive",
    StatusClass: "badge badge-linedanger",
    Amount: "$470",
    Description: "Employee Vehicle",
  },
  {
    CategoryName: "Foods & Snacks",
    Reference: "PT006",
    Date: "28 Mar 2023",
    Status: "Active",
    StatusClass: "badge badge-linesuccess",
    Amount: "$200",
    Description: "Employee Foods",
  },
  {
    CategoryName: "Entertainment",
    Reference: "PT007",
    Date: "06 Apr 2023",
    Status: "Inactive",
    StatusClass: "badge badge-linedanger",
    Amount: "$380",
    Description: "Office Vehicle",
  },
  {
    CategoryName: "Office Expenses & Postage",
    Reference: "PT008",
    Date: "19 Apr 2023",
    Status: "Active",
    StatusClass: "badge badge-linesuccess",
    Amount: "$620",
    Description: "Employee Foods",
  },
  {
    CategoryName: "Employee Benefits",
    Reference: "PT009",
    Date: "08 May 2023",
    Status: "Inactive",
    StatusClass: "badge badge-linedanger",
    Amount: "$430",
    Description: "Employee Vehicle",
  },
  {
    CategoryName: "Foods & Snacks",
    Reference: "PT010",
    Date: "23 May 2023",
    Status: "Active",
    StatusClass: "badge badge-linesuccess",
    Amount: "$120",
    Description: "Employee Foods",
  },
  {
    CategoryName: "Entertainment",
    Reference: "PT011",
    Date: "24 Nov 2023",
    Status: "Inactive",
    StatusClass: "badge badge-linedanger",
    Amount: "$620",
    Description: "Office Vehicle",
  },
  {
    CategoryName: "Office Expenses & Postage",
    Reference: "PT012",
    Date: "19 Nov 2023",
    Status: "Active",
    StatusClass: "badge badge-linesuccess",
    Amount: "$430",
    Description: "Employee Foods",
  },
];
export default {
  data() {
    return {
      startdate: currentDate,
      startdateOne: currentDateOne,
      dateFormat: "dd-MM-yyyy",
      filter: false,
      Sortbyexp: ["Sort by Date", "11 09 23", "20 09 23"],
      ChooseMacbook: ["Choose Name", "Mackbook pro", "Orange"],
      ChooseComputers: ["Choose Status", "Computers", "Fruits"],
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
