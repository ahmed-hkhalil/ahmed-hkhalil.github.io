<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Payroll</h4>
            <h6>Manage Your Employees</h6>
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
        <div class="page-btn">
          <button
            class="btn btn-primary add-em-payroll"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasRight-add"
            aria-controls="offcanvasRight-add"
          >
            <vue-feather type="plus-circle" class="me-2"></vue-feather>Add New Payoll
          </button>
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
              <vue-select :options="SortPay" id="sortpay" placeholder="Sort by Date" />
            </div>
          </div>
          <!-- /Filter -->
          <div
            class="card mb-0"
            :style="{ display: filter ? 'block' : 'none' }"
            id="filter_inputs"
          >
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-lg-12 col-sm-12">
                  <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks">
                        <vue-feather type="user" class="info-img"></vue-feather>
                        <vue-select
                          :options="Namepay"
                          id="Namepay"
                          placeholder="Choose Name"
                        />
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks">
                        <vue-feather type="stop-circle" class="info-img"></vue-feather>
                        <vue-select
                          :options="Namestatus"
                          id="Namestatus"
                          placeholder="Choose Status"
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
                <template v-if="column.key === 'Employee'">
                  <div class="userimgname">
                    <a href="javascript:void(0);" class="product-img me-3">
                      <img
                        :src="require(`@/assets/img/users/${record.Image}`)"
                        alt="product"
                      />
                    </a>
                    <div class="emp-name">
                      <a href="javascript:void(0);">{{ record.Employee }}</a>
                      <div class="role">{{ record.Role }}</div>
                    </div>
                  </div>
                </template>
                <template v-if="column.key === 'Status'">
                  <div>
                    <span :class="record.Class">{{ record.Status }}</span>
                  </div>
                </template>
                <template v-else-if="column.key === 'action'">
                  <td class="action-table-data">
                    <div class="edit-delete-action data-view">
                      <a class="me-2" href="javascript:void(0);">
                        <vue-feather type="eye" class="action-eye"></vue-feather>
                      </a>
                      <a class="me-2" href="javascript:void(0);">
                        <vue-feather
                          type="download"
                          class="action-download"
                        ></vue-feather>
                      </a>
                      <a
                        class="me-2"
                        href="javascript:void(0);"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight"
                      >
                        <vue-feather type="edit" class="action-edit"></vue-feather>
                      </a>
                      <a
                        class="confirm-text"
                        @click="showConfirmation"
                        href="javascript:void(0);"
                      >
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
  <payroll-list-modal></payroll-list-modal>
</template>
<script>
const columns = [
  {
    title: " Employee",
    dataIndex: "Employee",
    key: "Employee",
    sorter: {
      compare: (a, b) => {
        a = a.Employee.toLowerCase();
        b = b.Employee.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Employee ID",
    dataIndex: "EmployeeID",
    sorter: {
      compare: (a, b) => {
        a = a.EmployeeID.toLowerCase();
        b = b.EmployeeID.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Email",
    dataIndex: "Email",
    sorter: {
      compare: (a, b) => {
        a = a.Email.toLowerCase();
        b = b.Email.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Salary",
    dataIndex: "Salary",
    sorter: {
      compare: (a, b) => {
        a = a.Salary.toLowerCase();
        b = b.Salary.toLowerCase();
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
    title: "Action",
    key: "action",
    sorter: true,
  },
];
const data = [
  {
    Image: "user-01.jpg",
    Employee: "Mitchum Daniel",
    Role: "Database Administrator",
    EmployeeID: "POS001",
    Email: "mir34345@example.com",
    Salary: "$30,000",
    Class: "badge badge-linesuccess",
    Status: "Paid",
  },
  {
    Image: "user-02.jpg",
    Employee: "Susan Lopez",
    Role: "Curator",
    EmployeeID: "POS002",
    Email: "susanopez@example.com",
    Salary: "$20,000",
    Class: "badge badge-linesuccess",
    Status: "Paid",
  },
  {
    Image: "user-03.jpg",
    Employee: "Robert",
    Role: "System Administrator",
    EmployeeID: "POS003",
    Email: "robertgman@example.com",
    Salary: "$25,000",
    Class: "badge badge-linedanger",
    Status: "UnPaid",
  },
  {
    Image: "user-06.jpg",
    Employee: "Janet Hembre",
    Role: "Administrative Officer",
    EmployeeID: "POS004",
    Email: "janetembre@example.com",
    Salary: "$23,000",
    Class: "badge badge-linesuccess",
    Status: "Paid",
  },
  {
    Image: "user-04.jpg",
    Employee: "Russell Belle",
    Role: "Technician",
    EmployeeID: "POS005",
    Email: "russellbelle@example.com",
    Salary: "$35,000",
    Class: "badge badge-linesuccess",
    Status: "Paid",
  },
  {
    Image: "user-05.jpg",
    Employee: "Edward Muniz",
    Role: "Office Support Secretary",
    EmployeeID: "POS006",
    Email: "edward@example.com",
    Salary: "$28,000",
    Class: "badge badge-linedanger",
    Status: "UnPaid",
  },
  {
    Image: "user-07.jpg",
    Employee: "Susan Moore",
    Role: "Tech Lead",
    EmployeeID: "POS007",
    Email: "susanmoore@example.com",
    Salary: "$27,000",
    Class: "badge badge-linesuccess",
    Status: "Paid",
  },
];
import Swal from "sweetalert2";
export default {
  data() {
    return {
      filter: false,
      SortPay: ["Sort by Date", "12 09 23", "26 09 23"],
      Namepay: ["Choose Name", "Macbook pro", "Orange"],
      Namestatus: ["Choose Status", "Computers", "Fruits"],
      ChooseHoliday: ["Choose Status", "Mitchum Daniel", "Susan Lopez"],
      data,
      columns,
    };
  },
  methods: {
    showConfirmation() {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
        confirmButtonClass: "btn btn-primary",
        cancelButtonClass: "btn btn-danger ml-1",
        buttonsStyling: false,
      }).then((result) => {
        if (result.value) {
          Swal.fire({
            icon: "success",
            title: "Deleted!",
            text: "Your file has been deleted.",
            confirmButtonClass: "btn btn-success",
          });
        }
      });
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
