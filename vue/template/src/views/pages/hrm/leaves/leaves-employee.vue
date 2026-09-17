<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Leaves</h4>
            <h6>Manage your Leaves</h6>
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
            ><vue-feather type="plus-circle" class="me-2"></vue-feather>Apply Leave</a
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
                        Please drag and drop your column to reorder your table and enable
                        see option as you want.
                      </p>
                    </div>
                    <ul>
                      <li>
                        <div
                          class="status-toggle modal-status d-flex justify-content-between align-items-center"
                        >
                          <span class="status-label"
                            ><i data-feather="menu" class="feather-menu"></i>Shop</span
                          >
                          <input type="checkbox" id="option1" class="check" checked />
                          <label for="option1" class="checktoggle"> </label>
                        </div>
                      </li>
                      <li>
                        <div
                          class="status-toggle modal-status d-flex justify-content-between align-items-center"
                        >
                          <span class="status-label"
                            ><i data-feather="menu" class="feather-menu"></i>Product</span
                          >
                          <input type="checkbox" id="option2" class="check" checked />
                          <label for="option2" class="checktoggle"> </label>
                        </div>
                      </li>
                      <li>
                        <div
                          class="status-toggle modal-status d-flex justify-content-between align-items-center"
                        >
                          <span class="status-label"
                            ><i data-feather="menu" class="feather-menu"></i>Reference
                            No</span
                          >
                          <input type="checkbox" id="option3" class="check" checked />
                          <label for="option3" class="checktoggle"> </label>
                        </div>
                      </li>
                      <li>
                        <div
                          class="status-toggle modal-status d-flex justify-content-between align-items-center"
                        >
                          <span class="status-label"
                            ><i data-feather="menu" class="feather-menu"></i>Date</span
                          >
                          <input type="checkbox" id="option4" class="check" checked />
                          <label for="option4" class="checktoggle"> </label>
                        </div>
                      </li>
                      <li>
                        <div
                          class="status-toggle modal-status d-flex justify-content-between align-items-center"
                        >
                          <span class="status-label"
                            ><i data-feather="menu" class="feather-menu"></i>Responsible
                            Person</span
                          >
                          <input type="checkbox" id="option5" class="check" checked />
                          <label for="option5" class="checktoggle"> </label>
                        </div>
                      </li>
                      <li>
                        <div
                          class="status-toggle modal-status d-flex justify-content-between align-items-center"
                        >
                          <span class="status-label"
                            ><i data-feather="menu" class="feather-menu"></i>Notes</span
                          >
                          <input type="checkbox" id="option6" class="check" checked />
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
                          <input type="checkbox" id="option7" class="check" checked />
                          <label for="option7" class="checktoggle"> </label>
                        </div>
                      </li>
                      <li>
                        <div
                          class="status-toggle modal-status d-flex justify-content-between align-items-center"
                        >
                          <span class="status-label"
                            ><i data-feather="menu" class="feather-menu"></i>Actions</span
                          >
                          <input type="checkbox" id="option8" class="check" checked />
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
              <vue-select :options="Lem" id="lem" placeholder="Sort by Date" />
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
                    <vue-feather type="box" class="info-img"></vue-feather>
                    <vue-select
                      :options="LemType"
                      id="lemtype"
                      placeholder="Choose Type"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="user" class="info-img"></vue-feather>
                    <vue-select
                      :options="LemEmp"
                      id="lememp"
                      placeholder="Choose Employee"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="stop-circle" class="info-img"></vue-feather>
                    <vue-select
                      :options="LemStatus"
                      id="lemstatus"
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
            <table class="table datanew">
              <thead>
                <tr>
                  <th class="no-sort">
                    <label class="checkboxs">
                      <input type="checkbox" id="select-all" />
                      <span class="checkmarks"></span>
                    </label>
                  </th>
                  <th>Emp Id</th>
                  <th>Type</th>
                  <th>Date</th>
                  <th>Duration</th>
                  <th>Applied On</th>
                  <th>Reason</th>
                  <th>Approval</th>
                  <th class="no-sort">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <label class="checkboxs">
                      <input type="checkbox" />
                      <span class="checkmarks"></span>
                    </label>
                  </td>
                  <td>POS001</td>
                  <td>Sick Leave</td>
                  <td>02 Aug 2023</td>
                  <td>01 Day</td>
                  <td>04 Aug 2023</td>
                  <td></td>
                  <td><span class="badge-applied">Applied</span></td>
                  <td class="action-table-data justify-content-end">
                    <div class="edit-delete-action">
                      <a href="" class="me-2 cancel-circle"
                        ><vue-feather type="x-circle" class="x-circle"></vue-feather
                      ></a>
                      <a
                        class="me-2 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#edit-units"
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
                </tr>
                <tr>
                  <td>
                    <label class="checkboxs">
                      <input type="checkbox" />
                      <span class="checkmarks"></span>
                    </label>
                  </td>
                  <td>POS002</td>
                  <td>Paternity</td>
                  <td>07 Aug 2023</td>
                  <td>2 hrs</td>
                  <td>07 Aug 2023</td>
                  <td></td>
                  <td><span class="badge-approved">Approved</span></td>
                  <td class="action-table-data justify-content-end">
                    <div class="edit-delete-action">
                      <a
                        class="me-2 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#edit-units"
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
                </tr>
                <tr>
                  <td>
                    <label class="checkboxs">
                      <input type="checkbox" />
                      <span class="checkmarks"></span>
                    </label>
                  </td>
                  <td>POS003</td>
                  <td>Sick Leave</td>
                  <td>03 Aug 2023</td>
                  <td>01 Day</td>
                  <td>03 Aug 2023</td>
                  <td>
                    <a
                      href=""
                      class="reason-for-reject"
                      data-bs-toggle="modal"
                      data-bs-target="#rejected-reason"
                      >Reason</a
                    >
                  </td>
                  <td><span class="badge-reject">Rejected</span></td>
                  <td class="action-table-data justify-content-end">
                    <div class="edit-delete-action">
                      <a
                        class="me-2 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#edit-units"
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
                </tr>
                <tr>
                  <td>
                    <label class="checkboxs">
                      <input type="checkbox" />
                      <span class="checkmarks"></span>
                    </label>
                  </td>
                  <td>POS004</td>
                  <td>Sick Leave</td>
                  <td>05 Aug 2023</td>
                  <td>01 Day</td>
                  <td>05 Aug 2023</td>
                  <td>
                    <a
                      href=""
                      class="reason-for-reject"
                      data-bs-toggle="modal"
                      data-bs-target="#rejected-reason"
                      >Reason</a
                    >
                  </td>
                  <td><span class="badge-reject">Rejected</span></td>
                  <td class="action-table-data justify-content-end">
                    <div class="edit-delete-action">
                      <a
                        class="me-2 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#edit-units"
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
                </tr>
                <tr>
                  <td>
                    <label class="checkboxs">
                      <input type="checkbox" />
                      <span class="checkmarks"></span>
                    </label>
                  </td>
                  <td>POS005</td>
                  <td>Sick Leave</td>
                  <td>08 Aug 2023</td>
                  <td>02 Days</td>
                  <td>08 Aug 2023</td>
                  <td></td>
                  <td><span class="badge-applied">Applied</span></td>
                  <td class="action-table-data justify-content-end">
                    <div class="edit-delete-action">
                      <a href="" class="me-2 cancel-circle"
                        ><vue-feather type="x-circle" class="x-circle"></vue-feather
                      ></a>
                      <a
                        class="me-2 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#edit-units"
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
                </tr>
                <tr>
                  <td>
                    <label class="checkboxs">
                      <input type="checkbox" />
                      <span class="checkmarks"></span>
                    </label>
                  </td>
                  <td>POS006</td>
                  <td>Sick Leave</td>
                  <td>03 Aug 2023</td>
                  <td>2 hrs</td>
                  <td>03 Aug 2023</td>
                  <td></td>
                  <td><span class="badge-approved">Approved</span></td>
                  <td class="action-table-data justify-content-end">
                    <div class="edit-delete-action">
                      <a
                        class="me-2 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#edit-units"
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
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /product list -->
    </div>
  </div>
  <leaves-employee-modal></leaves-employee-modal>
</template>
<script>
import Swal from "sweetalert2";
export default {
  data() {
    return {
      LemStatus: ["Choose Status", "Approved", "Rejected"],
      LemEmp: ["Choose Employee", "Mitchum Daniel", "Susan Lopez"],
      LemType: ["Choose Type", "Sick Leave", "Paternity"],
      Lem: ["Sort by Date", "Newest", "Oldest"],
      filter: false,
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
