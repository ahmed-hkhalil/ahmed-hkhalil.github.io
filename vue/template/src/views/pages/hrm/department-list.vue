<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Department</h4>
            <h6>Manage your departments</h6>
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
            href=""
            class="btn btn-added"
            data-bs-toggle="modal"
            data-bs-target="#add-department"
            ><vue-feather type="plus-circle" class="me-2"></vue-feather>Add New
            Department</a
          >
        </div>
      </div>
      <!-- /product list -->
      <div class="card table-list-card">
        <div class="card-body pb-0">
          <div class="table-top table-top-new">
            <div class="search-set mb-0">
              <div class="total-employees">
                <h6>
                  <i data-feather="users" class="feather-user"></i>Total Employees
                  <span>21</span>
                </h6>
              </div>
              <div class="search-input">
                <input type="text" placeholder="Search" class="dark-input" />
                <a href="" class="btn btn-searchset"
                  ><i data-feather="search" class="feather-search"></i
                ></a>
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
                <router-link to="department-list" class="btn-list active"
                  ><vue-feather type="list" class="list"></vue-feather
                ></router-link>
                <router-link to="department-grid" class="btn-grid"
                  ><vue-feather type="grid" class="grid"></vue-feather
                ></router-link>
              </div>
              <div class="form-sort">
                <vue-feather type="sliders" class="info-img"></vue-feather>
                <vue-select
                  :options="Mentsort"
                  id="mentsort"
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
                    <vue-feather type="file-text" class="info-img"></vue-feather>
                    <vue-select
                      :options="MentChoose"
                      id="mentchoose"
                      placeholder="Choose Department"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="users" class="info-img"></vue-feather>
                    <vue-select
                      :options="HODChoose"
                      id="hodchoose"
                      placeholder="Choose HOD"
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
                <template v-if="column.key === 'HOD'">
                  <div class="userimgname">
                    <a href="javascript:void(0);" class="product-img">
                      <img
                        :src="require(`@/assets/img/users/${record.Image}`)"
                        alt="product"
                      />
                    </a>
                    <div>
                      <a href="javascript:void(0);">{{ record.HOD }}</a>
                    </div>
                  </div>
                </template>

                <template v-if="column.key === 'Members'">
                  <ul class="team-members">
                    <li>
                      <ul>
                        <li>
                          <a href="javascript:void(0);"
                            ><img src="@/assets/img/users/user-03.jpg" alt=""
                          /></a>
                        </li>
                        <li>
                          <a href="javascript:void(0);"
                            ><img src="@/assets/img/users/user-04.jpg" alt=""
                          /></a>
                        </li>
                        <li>
                          <a href="javascript:void(0);"
                            ><img src="@/assets/img/users/user-06.jpg" alt=""
                          /></a>
                        </li>
                        <li>
                          <a href="javascript:void(0);"
                            ><img src="@/assets/img/users/user-05.jpg" alt="" /><span
                              >+3</span
                            ></a
                          >
                        </li>
                      </ul>
                    </li>
                  </ul>
                </template>
                <template v-else-if="column.key === 'Status'">
                  <div>
                    <span :class="record.Class">{{ record.Status }}</span>
                  </div>
                </template>
                <template v-else-if="column.key === 'action'">
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a class="me-2 p-2" href="javascript:void(0);">
                        <i data-feather="eye" class="feather-eye"></i>
                      </a>
                      <a
                        class="me-2 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#edit-department"
                      >
                        <i data-feather="edit" class="feather-edit"></i>
                      </a>
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
  <department-list-modal></department-list-modal>
</template>
<script>
const columns = [
  {
    title: "Department",
    dataIndex: "Department",
    key: "Department",
    sorter: {
      compare: (a, b) => {
        a = a.Department.toLowerCase();
        b = b.Department.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "HOD",
    dataIndex: "HOD",
    key: "HOD",
    sorter: {
      compare: (a, b) => {
        a = a.HOD.toLowerCase();
        b = b.HOD.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Members",
    dataIndex: "Members",
    key: "Members",
    sorter: {
      compare: (a, b) => {
        a = a.Members.toLowerCase();
        b = b.Members.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "TotalMembers",
    dataIndex: "TotalMembers",
    sorter: {
      compare: (a, b) => {
        a = a.TotalMembers.toLowerCase();
        b = b.TotalMembers.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Created On",
    dataIndex: "CreatedOn",
    sorter: {
      compare: (a, b) => {
        a = a.CreatedOn.toLowerCase();
        b = b.CreatedOn.toLowerCase();
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
    Department: "UI/UX",
    HOD: "Steven",
    Members: "3",
    TotalMembers: "7",
    CreatedOn: "25 Jan 2023",
    Class: "badges-success",
    Image: "user-01.jpg",
    Status: "Active",
  },
  {
    Department: "HR",
    HOD: "Susan Lopez",
    Members: "3",
    TotalMembers: "5",
    CreatedOn: "29 Jan 2023",
    Class: "badges-success",
    Image: "user-02.jpg",
    Status: "Active",
  },
  {
    Department: "Admin",
    HOD: "Robert Grossman",
    Members: "3",
    TotalMembers: "6",
    CreatedOn: "13 Feb 2023",
    Class: "badges-inactive",
    Image: "user-03.jpg",
    Status: "Inactive",
  },
  {
    Department: "Technician",
    HOD: "Janet Hembre",
    Members: "3",
    TotalMembers: "8",
    CreatedOn: "27 Feb 2023",
    Class: "badges-success",
    Image: "user-06.jpg",
    Status: "Active",
  },
  {
    Department: "Support",
    HOD: "Russell Belle",
    Members: "3",
    TotalMembers: "4",
    CreatedOn: "02 Mar 2023",
    Class: "badges-success",
    Image: "user-04.jpg",
    Status: "Active",
  },
  {
    Department: "Engineering",
    HOD: "Edward K. Muniz",
    Members: "3",
    TotalMembers: "10",
    CreatedOn: "17 Mar 2023",
    Class: "badges-inactive",
    Image: "user-05.jpg",
    Status: "Inactive",
  },
  {
    Department: "Admin",
    HOD: "Susan Moore",
    Members: "3",
    TotalMembers: "3",
    CreatedOn: "20 Mar 2023",
    Class: "badges-success",
    Image: "user-06.jpg",
    Status: "Active",
  },
];
import Swal from "sweetalert2";

export default {
  data() {
    return {
      filter: false,
      HODChoose: ["Choose HOD", "Mitchum Daniel", "Susan Lopez"],
      MentChoose: ["Choose Department", "UI/UX", "HR", "Admin", "Engineering"],
      Mentsort: ["Sort by Date", "Newest", "Oldest"],
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
