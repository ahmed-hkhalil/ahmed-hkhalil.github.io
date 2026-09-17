<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content settings-content">
      <div class="page-header settings-pg-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Settings</h4>
            <h6>Manage your settings on portal</h6>
          </div>
        </div>
        <ul class="table-top-head">
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
      <div class="row">
        <div class="col-xl-12">
          <div class="settings-wrapper d-flex">
            <div class="sidebars settings-sidebar theiaStickySidebar" id="sidebar2">
              <settings-sidebar></settings-sidebar>
            </div>
            <div class="settings-page-wrap w-50">
              <div class="setting-title">
                <h4>Language</h4>
              </div>
              <div class="page-header justify-content-end">
                <ul class="table-top-head me-auto">
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
                </ul>
                <div class="page-btn d-flex align-items-center ms-0">
                  <div class="select-language">
                    <vue-select
                      :options="Selectlang"
                      id="selectlang"
                      placeholder="Select Language"
                    />
                  </div>
                  <a href="javascript:void(0);" class="btn btn-added ms-3"
                    >Add Translation</a
                  >
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="card table-list-card">
                    <div class="card-body">
                      <div class="table-top">
                        <div class="search-set">
                          <div class="search-input">
                            <input type="text" placeholder="Search" class="dark-input" />
                            <a href="javascript:void(0);" class="btn btn-searchset"
                              ><i data-feather="search" class="feather-search"></i
                            ></a>
                          </div>
                        </div>
                        <div class="search-path">
                          <div class="d-flex align-items-center">
                            <a class="btn btn-secondary" href="javascript:void(0);">
                              <vue-feather
                                type="filter"
                                class="filter-icon"
                              ></vue-feather>
                              Import Sample
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="table-responsive">
                        <a-table
                          class="table datanew"
                          :columns="columns"
                          :data-source="data"
                          :row-selection="{}"
                        >
                          <template #bodyCell="{ column, record }">
                            <template v-if="column.key === 'Language'">
                              <div class="language-name d-flex align-items-center">
                                <img
                                  :src="require(`@/assets/img/icons/${record.Image}`)"
                                  class="me-2"
                                  alt=""
                                />
                                {{ record.Language }}
                              </div>
                            </template>
                            <template v-else-if="column.key === 'RTL'">
                              <div
                                class="status-toggle modal-status d-flex justify-content-between align-items-center"
                              >
                                <input
                                  type="checkbox"
                                  id="user1"
                                  class="check"
                                  checked=""
                                />
                                <label for="user1" class="checktoggle"></label>
                              </div>
                            </template>
                            <template v-else-if="column.key === 'Progress'">
                              <div class="position-relative">
                                <div class="progress attendance language-progress">
                                  <div :class="record.ProgressClass" role="progressbar">
                                    <span>{{ record.Progress }}</span>
                                  </div>
                                </div>
                              </div>
                            </template>
                            <template v-else-if="column.key === 'Status'">
                              <div>
                                <span :class="record.Class">{{ record.Status }}</span>
                              </div>
                            </template>
                            <template v-else-if="column.key === 'action'">
                              <td class="action-table-data">
                                <div class="edit-delete-action language-action">
                                  <a
                                    href="javascript:void(0);"
                                    class="me-2 language-import"
                                    ><vue-feather
                                      type="download"
                                      class="download"
                                    ></vue-feather
                                  ></a>
                                  <div class="custom-control custom-checkbox">
                                    <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                                      <input type="checkbox" checked />
                                      <span class="checkmarks"></span>
                                    </label>
                                  </div>
                                  <router-link
                                    to="language-settings-web"
                                    class="btn btn-secondary me-2"
                                    >Web</router-link
                                  >
                                  <a
                                    href="javascript:void(0);"
                                    class="btn btn-secondary me-2"
                                    >App</a
                                  >
                                  <a
                                    href="javascript:void(0);"
                                    class="btn btn-secondary me-2"
                                    >Admin</a
                                  >
                                  <a
                                    class="confirm-text p-0"
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
const columns = [
  {
    title: "Language",
    dataIndex: "Language",
    key: "Language",
    sorter: {
      compare: (a, b) => {
        a = a.Language.toLowerCase();
        b = b.Language.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Code",
    dataIndex: "Code",
    sorter: {
      compare: (a, b) => {
        a = a.Code.toLowerCase();
        b = b.Code.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "RTL",
    dataIndex: "RTL",
    key: "RTL",
    sorter: {
      compare: (a, b) => {
        a = a.RTL.toLowerCase();
        b = b.RTL.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Total",
    dataIndex: "Total",
    key: "Total",
    sorter: {
      compare: (a, b) => {
        a = a.Total.toLowerCase();
        b = b.Total.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Done",
    dataIndex: "Done",
    sorter: {
      compare: (a, b) => {
        a = a.Done.toLowerCase();
        b = b.Done.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Progress",
    dataIndex: "Progress",
    key: "Progress",
    sorter: {
      compare: (a, b) => {
        a = a.Progress.toLowerCase();
        b = b.Progress.toLowerCase();
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
    Language: "English",
    Code: "en",
    RTL: "",
    Total: "2145",
    Done: "1815",
    Progress: "80%",
    Image: "flag-01.svg",
    ProgressClass: "progress-bar progress-bar-warning",
    Class: "badge badge-linesuccess",
    Status: "Active",
  },
  {
    Language: "Arabic",
    Code: "Ar",
    RTL: "",
    Total: "2045",
    Done: "2045",
    Progress: "100%",
    Image: "flag-02.svg",
    ProgressClass: "progress-bar progress-bar-success",
    Class: "badge badge-linedanger",
    Status: "Inactive",
  },
  {
    Language: "Chinese",
    Code: "zh",
    RTL: "",
    Total: "2245",
    Done: "295",
    Progress: "5%",
    Image: "flag-03.svg",
    ProgressClass: "progress-bar progress-bar-violet",
    Class: "badge badge-linesuccess",
    Status: "Active",
  },
  {
    Language: "Hindi",
    Code: "hi",
    RTL: "",
    Total: "2535",
    Done: "1145",
    Progress: "40%",
    Image: "flag-04.svg",
    ProgressClass: "progress-bar progress-bar-violet-two",
    Class: "badge badge-linesuccess",
    Status: "Active",
  },
];
import Swal from "sweetalert2";

export default {
  data() {
    return {
      Selectlang: ["Select Language", "English", "Chinese"],
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
