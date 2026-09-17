<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Employees</h4>
            <h6>Manage your employees</h6>
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
          <router-link to="add-employee" class="btn btn-added"
            ><vue-feather type="plus-circle" class="me-2"></vue-feather>Add New
            Employee</router-link
          >
        </div>
      </div>
      <!-- /product list -->
      <div class="card table-list-card">
        <div class="card-body pb-0">
          <div class="table-top table-top-two table-top-new">
            <div class="search-set mb-0">
              <div class="total-employees">
                <h6>
                  <i data-feather="users" class="feather-user"></i>Total Employees
                  <span>21</span>
                </h6>
              </div>
              <div class="search-input">
                <a href="" class="btn btn-searchset"
                  ><i data-feather="search" class="feather-search"></i
                ></a>
                <input type="search" class="form-control" />
              </div>
            </div>
            <div class="search-path d-flex align-items-center search-path-new">
              <div class="d-flex">
                <a
                  class="btn btn-filter"
                  id="filter_search"
                  v-on:click="filter = !filter"
                  :class="{ setclose: filter }"
                >
                  <vue-feather type="filter" class="filter-icon"></vue-feather>
                  <span><img src="@/assets/img/icons/closes.svg" alt="img" /></span>
                </a>
                <router-link to="employees-list" class="btn-list active"
                  ><vue-feather type="list" class="list"></vue-feather
                ></router-link>
                <router-link to="employees-grid" class="btn-grid"
                  ><vue-feather type="grid" class="grid"></vue-feather
                ></router-link>
              </div>

              <div class="form-sort">
                <vue-feather type="sliders" class="info-img"></vue-feather>
                <vue-select
                  :options="SortEmpList"
                  id="sortemplist"
                  placeholder="Sort by Date"
                />
              </div>
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
                    <vue-feather type="user" class="info-img"></vue-feather>
                    <vue-select
                      :options="EmpNameList"
                      id="empnamelist"
                      placeholder="Choose Name"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="stop-circle" class="info-img"></vue-feather>
                    <vue-select
                      :options="EmpstatusList"
                      id="empstatuslist"
                      placeholder="Choose Status"
                    />
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
                <template v-if="column.key === 'Employee'">
                  <div class="userimgname">
                    <a href="javascript:void(0);" class="product-img">
                      <img
                        :src="require(`@/assets/img/users/${record.Image}`)"
                        alt="product"
                      />
                    </a>
                    <div>
                      <a href="javascript:void(0);">{{ record.Name }}</a>
                      <span class="emp-team">{{ record.Role }}</span>
                    </div>
                  </div>
                </template>
                <template v-else-if="column.key === 'Status'">
                  <span :class="record.Class">{{ record.Status }}</span>
                </template>
                <template v-else-if="column.key === 'action'">
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a class="ms-2 p-2" href="javascript:void(0);">
                        <i data-feather="eye" class="feather-eye"></i>
                      </a>
                      <router-link class="ms-2 p-2" to="edit-employee">
                        <i data-feather="edit" class="feather-edit"></i>
                      </router-link>
                      <a
                        class="confirm-text p-2"
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
</template>
<script>
const columns = [
  {
    title: "Employee",
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
    title: "Phone Number",
    dataIndex: "PhoneNumber",
    sorter: {
      compare: (a, b) => {
        a = a.PhoneNumber.toLowerCase();
        b = b.PhoneNumber.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Shift",
    dataIndex: "Shift",
    sorter: {
      compare: (a, b) => {
        a = a.Shift.toLowerCase();
        b = b.Shift.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Status",
    dataIndex: "Status",
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
    Employee: "Steven",
    Role: "Designer",
    EmployeeID: "POS001",
    Email: "mir34345@example.com",
    PhoneNumber: "+1 54554 54788",
    Shift: "Regular",
    Class: "badges-success",
    Image: "user-01.jpg",
    Status: "Active",
  },
  {
    Employee: "Susan Lopez",
    Role: "Curator",
    EmployeeID: "POS002",
    Email: "susanopez@example.com",
    PhoneNumber: "+1 35132 14547",
    Shift: "Regular",
    Class: "badges-success",
    Image: "user-02.jpg",
    Status: "Active",
  },
  {
    Employee: "Robert Grossman",
    Role: "System Administrator",
    EmployeeID: "POS003",
    Email: "robertgman@example.com",
    PhoneNumber: "+1 14778 66454",
    Shift: "Regular",
    Class: "badges-inactive",
    Image: "user-03.jpg",
    Status: "Inactive",
  },
  {
    Employee: "Janet Hembre",
    Role: "Administrative Officer",
    EmployeeID: "POS004",
    Email: "janetembre@example.com",
    PhoneNumber: "+1 14554 54774",
    Shift: "Regular",
    Class: "badges-success",
    Image: "user-06.jpg",
    Status: "Active",
  },
  {
    Employee: "Russell Belle",
    Role: "Technician",
    EmployeeID: "POS005",
    Email: "russellbelle@example.com",
    PhoneNumber: "+1 14478 45547",
    Shift: "Regular",
    Class: "badges-success",
    Image: "user-04.jpg",
    Status: "Active",
  },
  {
    Employee: "Edward K. Muniz",
    Role: "Office Support Secretary",
    EmployeeID: "POS006",
    Email: "edward@example.com",
    PhoneNumber: "+1 47887 45547",
    Shift: "Regular",
    Class: "badges-inactive",
    Image: "user-05.jpg",
    Status: "Inactive",
  },
  {
    Employee: "Susan Moore",
    Role: "Tech Lead",
    EmployeeID: "POS007",
    Email: "susanmoore@example.com",
    PhoneNumber: "+1 47787 54661",
    Shift: "Regular",
    Class: "badges-success",
    Image: "user-07.jpg",
    Status: "Active",
  },
];
import Swal from "sweetalert2";
export default {
  data() {
    return {
      filter: false,
      EmpstatusList: ["Choose Status", "Active", "Inactive"],
      SortEmpList: ["Sort by Date", "Newest", "Oldest"],
      EmpNameList: ["Choose Name", "Mitchum Daniel", "Robert Grossman", "Janet Hembre"],
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
