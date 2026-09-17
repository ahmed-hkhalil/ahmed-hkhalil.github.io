<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Designation</h4>
            <h6>Manage your designation</h6>
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
            Designation</a
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
              </div>
              <div class="form-sort">
                <vue-feather type="sliders" class="info-img"></vue-feather>
                <vue-select
                  :options="SortbyNewest"
                  id="sortbynewest"
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
                      :options="DesignationCh"
                      id="designationch"
                      placeholder="Choose Designation"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="users" class="info-img"></vue-feather>
                    <vue-select :options="DesHod" id="deshod" placeholder="Choose HOD" />
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
                <template v-if="column.key === 'Members'">
                  <ul class="team-members">
                    <li>
                      <ul>
                        <li>
                          <a href=""
                            ><img src="@/assets/img/users/user-08.jpg" alt=""
                          /></a>
                        </li>
                        <li>
                          <a href=""
                            ><img src="@/assets/img/users/user-13.jpg" alt=""
                          /></a>
                        </li>
                        <li>
                          <a href=""
                            ><img src="@/assets/img/users/user-09.jpg" alt=""
                          /></a>
                        </li>
                        <li>
                          <a href=""
                            ><img src="@/assets/img/users/user-11.jpg" alt=""
                          /></a>
                        </li>
                        <li>
                          <a href=""
                            ><img src="@/assets/img/users/user-04.jpg" alt="" /><span
                              >+3</span
                            ></a
                          >
                        </li>
                      </ul>
                    </li>
                  </ul>
                </template>
                <template v-if="column.key === 'Status'">
                  <div>
                    <span class="badge badge-linesuccess">{{ record.Status }}</span>
                  </div>
                </template>
                <template v-else-if="column.key === 'action'">
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a class="ms-2 p-2" href="javascript:void(0);">
                        <vue-feather type="eye" class="eye"></vue-feather>
                      </a>
                      <a
                        class="ms-2 p-2"
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
  <designation-modal></designation-modal>
</template>
<script>
const columns = [
  {
    title: "Designation",
    dataIndex: "Designation",
    key: "Designation",
    sorter: {
      compare: (a, b) => {
        a = a.Designation.toLowerCase();
        b = b.Designation.toLowerCase();
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
    title: "Total Members",
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
    Designation: "Designer",
    Members: "3",
    CreatedOn: "7",
    TotalMembers: "25 May 2023",
    Status: "Active",
  },
  {
    Designation: "Curator",
    Members: "5",
    CreatedOn: "8",
    TotalMembers: "27 June 2023",
    Status: "Active",
  },
  {
    Designation: "System Administrator",
    Members: "2",
    CreatedOn: "6",
    TotalMembers: "29 June 2023",
    Status: "Active",
  },
  {
    Designation: "Administrative Officer",
    Members: "1",
    CreatedOn: "3",
    TotalMembers: "15 July 2023",
    Status: "Active",
  },
  {
    Designation: "Technician",
    Members: "2",
    CreatedOn: "5",
    TotalMembers: "19 July 2023",
    Status: "Active",
  },
  {
    Designation: "Office Support Secretary",
    Members: "5",
    CreatedOn: "9",
    TotalMembers: "04 August 2023",
    Status: "Active",
  },
  {
    Designation: "Tech Lead",
    Members: "6",
    CreatedOn: "10",
    TotalMembers: "13 August 2023",
    Status: "Active",
  },
  {
    Designation: "Database administrator",
    Members: "1",
    CreatedOn: "4",
    TotalMembers: "24 August 2023",
    Status: "Active",
  },
];
import Swal from "sweetalert2";
export default {
  data() {
    return {
      filter: false,
      DesHod: ["Choose HOD", "Mitchum Daniel", "Susan Lopez"],
      DesignationCh: ["Choose Designation", "UI/UX", "HR", "Admin", "Engineering"],
      SortbyNewest: ["Sort by Date", "Newest", "Oldest"],
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
