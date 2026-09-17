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
                <h4>Custom Fields</h4>
              </div>
              <div class="page-header justify-content-end">
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
                </ul>
                <div class="page-btn">
                  <a
                    href="javascript:void(0);"
                    class="btn btn-added"
                    data-bs-toggle="modal"
                    data-bs-target="#add-custom-field"
                    ><vue-feather type="plus-circle" class="me-2"></vue-feather>Add New
                    Field</a
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
                              <vue-feather
                                type="filter"
                                class="filter-icon"
                              ></vue-feather>
                              <span
                                ><img src="@/assets/img/icons/closes.svg" alt="img"
                              /></span>
                            </a>
                            <div
                              :class="{
                                'layout-hide-box': !isLayoutBoxVisible,
                                'layout-show-box': isLayoutBoxVisible,
                              }"
                            >
                              <a
                                href="javascript:void(0);"
                                class="me-3 layout-box"
                                @click="toggleLayoutBox"
                                ><vue-feather type="layout"></vue-feather
                              ></a>
                              <div class="layout-drop-item card">
                                <div class="drop-item-head">
                                  <h5>Want to manage datatable?</h5>
                                  <p>
                                    Please drag and drop your column to reorder your table
                                    and enable see option as you want.
                                  </p>
                                </div>
                                <ul>
                                  <li>
                                    <div
                                      class="status-toggle modal-status d-flex justify-content-between align-items-center"
                                    >
                                      <span class="status-label"
                                        ><i data-feather="menu" class="feather-menu"></i
                                        >Shop</span
                                      >
                                      <input
                                        type="checkbox"
                                        id="option1"
                                        class="check"
                                        checked
                                      />
                                      <label for="option1" class="checktoggle"> </label>
                                    </div>
                                  </li>
                                  <li>
                                    <div
                                      class="status-toggle modal-status d-flex justify-content-between align-items-center"
                                    >
                                      <span class="status-label"
                                        ><i data-feather="menu" class="feather-menu"></i
                                        >Product</span
                                      >
                                      <input
                                        type="checkbox"
                                        id="option2"
                                        class="check"
                                        checked
                                      />
                                      <label for="option2" class="checktoggle"> </label>
                                    </div>
                                  </li>
                                  <li>
                                    <div
                                      class="status-toggle modal-status d-flex justify-content-between align-items-center"
                                    >
                                      <span class="status-label"
                                        ><i data-feather="menu" class="feather-menu"></i
                                        >Reference No</span
                                      >
                                      <input
                                        type="checkbox"
                                        id="option3"
                                        class="check"
                                        checked
                                      />
                                      <label for="option3" class="checktoggle"> </label>
                                    </div>
                                  </li>
                                  <li>
                                    <div
                                      class="status-toggle modal-status d-flex justify-content-between align-items-center"
                                    >
                                      <span class="status-label"
                                        ><i data-feather="menu" class="feather-menu"></i
                                        >Date</span
                                      >
                                      <input
                                        type="checkbox"
                                        id="option4"
                                        class="check"
                                        checked
                                      />
                                      <label for="option4" class="checktoggle"> </label>
                                    </div>
                                  </li>
                                  <li>
                                    <div
                                      class="status-toggle modal-status d-flex justify-content-between align-items-center"
                                    >
                                      <span class="status-label"
                                        ><i data-feather="menu" class="feather-menu"></i
                                        >Responsible Person</span
                                      >
                                      <input
                                        type="checkbox"
                                        id="option5"
                                        class="check"
                                        checked
                                      />
                                      <label for="option5" class="checktoggle"> </label>
                                    </div>
                                  </li>
                                  <li>
                                    <div
                                      class="status-toggle modal-status d-flex justify-content-between align-items-center"
                                    >
                                      <span class="status-label"
                                        ><i data-feather="menu" class="feather-menu"></i
                                        >Notes</span
                                      >
                                      <input
                                        type="checkbox"
                                        id="option6"
                                        class="check"
                                        checked
                                      />
                                      <label for="option6" class="checktoggle"> </label>
                                    </div>
                                  </li>
                                  <li>
                                    <div
                                      class="status-toggle modal-status d-flex justify-content-between align-items-center"
                                    >
                                      <span class="status-label"
                                        ><i data-feather="menu" class="feather-menu"></i
                                        >Quantity</span
                                      >
                                      <input
                                        type="checkbox"
                                        id="option7"
                                        class="check"
                                        checked
                                      />
                                      <label for="option7" class="checktoggle"> </label>
                                    </div>
                                  </li>
                                  <li>
                                    <div
                                      class="status-toggle modal-status d-flex justify-content-between align-items-center"
                                    >
                                      <span class="status-label"
                                        ><i data-feather="menu" class="feather-menu"></i
                                        >Actions</span
                                      >
                                      <input
                                        type="checkbox"
                                        id="option8"
                                        class="check"
                                        checked
                                      />
                                      <label for="option8" class="checktoggle"> </label>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-sort">
                          <vue-feather type="sliders" class="info-img"></vue-feather>
                          <vue-select
                            :options="CustomSort"
                            id="customsort"
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
                            <div class="col-lg-3 col-sm-6 col-12">
                              <div class="input-blocks">
                                <vue-feather type="zap" class="info-img"></vue-feather>
                                <vue-select
                                  :options="ModuleSelect"
                                  id="moduleselect"
                                  placeholder="Choose Module"
                                />
                              </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                              <div class="input-blocks">
                                <vue-feather type="edit-2" class="info-img"></vue-feather>
                                <vue-select
                                  :options="FieldsSelect"
                                  id="fieldsselect"
                                  placeholder="Choose Fields"
                                />
                              </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12">
                              <div class="input-blocks">
                                <vue-feather
                                  type="stop-circle"
                                  class="info-img"
                                ></vue-feather>
                                <vue-select
                                  :options="StatusSelect"
                                  id="statusselect"
                                  placeholder="Choose Status"
                                />
                              </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12 ms-auto">
                              <div class="input-blocks">
                                <a class="btn btn-filters ms-auto">
                                  <i data-feather="search" class="feather-search"></i>
                                  Search
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
                              <div>
                                <span class="badge badge-linesuccess">{{
                                  record.Status
                                }}</span>
                              </div>
                            </template>
                            <template v-else-if="column.key === 'action'">
                              <td class="action-table-data">
                                <div class="edit-delete-action">
                                  <a
                                    class="me-2 p-2"
                                    href="javascript:void(0);"
                                    data-bs-toggle="modal"
                                    data-bs-target="#edit-custom-field"
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <custom-fields-modal></custom-fields-modal>
</template>
<script>
const columns = [
  {
    title: "Module",
    dataIndex: "Module",
    sorter: {
      compare: (a, b) => {
        a = a.Module.toLowerCase();
        b = b.Module.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Label",
    dataIndex: "Label",
    sorter: {
      compare: (a, b) => {
        a = a.Label.toLowerCase();
        b = b.Label.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Type",
    dataIndex: "Type",
    sorter: {
      compare: (a, b) => {
        a = a.Type.toLowerCase();
        b = b.Type.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Default Value",
    dataIndex: "DefaultValue",
    key: "DefaultValue",
    sorter: {
      compare: (a, b) => {
        a = a.DefaultValue.toLowerCase();
        b = b.DefaultValue.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Required",
    dataIndex: "Required",
    key: "Required",
    sorter: {
      compare: (a, b) => {
        a = a.Required.toLowerCase();
        b = b.Required.toLowerCase();
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
    Module: "Expense",
    Label: "Name",
    Type: "Text",
    DefaultValue: "Name",
    Required: "Required",
    Status: "Active",
  },
  {
    Module: "Transaction",
    Label: "Comment",
    Type: "Textarea",
    DefaultValue: "Enter Comments",
    Required: "Required",
    Status: "Active",
  },
];
import Swal from "sweetalert2";
export default {
  data() {
    return {
      filter: false,
      CustomSort: ["Sort by Date", "Newest", "Oldest"],
      ModuleSelect: ["Choose Module", "Expense", "Transaction"],
      FieldsSelect: ["Choose Fields", "Expense", "Transaction"],
      StatusSelect: ["Choose Status", "Active", "Inactive"],
      data,
      columns,
      isLayoutBoxVisible: false,
    };
  },
  methods: {
    toggleLayoutBox() {
      this.isLayoutBoxVisible = !this.isLayoutBoxVisible;
    },
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
