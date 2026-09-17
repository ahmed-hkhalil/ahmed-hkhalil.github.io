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
          <router-link to="leave-types" class="btn btn-added">Leave type</router-link>
        </div>
      </div>
      <!-- /product list -->
      <div class="card table-list-card">
        <div class="card-body pb-0">
          <div class="table-top">
            <div class="input-blocks search-set mb-0">
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
              <vue-select
                :options="Sortleave"
                id="sortleave"
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
                      :options="SortEmployee"
                      id="sortemployee"
                      placeholder="Choose Employee"
                    />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="box" class="info-img"></vue-feather>
                    <vue-select :options="Sortty" id="sortty" placeholder="Choose Type" />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="calendar" class="info-img"></vue-feather>
                    <div class="input-groupicon">
                      <date-picker
                        v-model="startdate"
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
                    <vue-feather type="calendar" class="info-img"></vue-feather>
                    <div class="input-groupicon">
                      <date-picker
                        v-model="startdateOne"
                        placeholder="Applied Date"
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
                    <vue-feather type="stop-circle" class="info-img"></vue-feather>
                    <vue-select
                      :options="LeaveStatus"
                      id="least"
                      placeholder="Choose Status"
                    />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12 ms-auto">
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
                  <th>Emp Name</th>
                  <th>Emp Id</th>
                  <th>Type</th>
                  <th>From Date</th>
                  <th>To Date</th>
                  <th>Days/Hours</th>
                  <th>Shift</th>
                  <th>Applied On</th>
                  <th>Status</th>
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
                  <td>
                    <div class="userimgname">
                      <a href="javascript:void(0);" class="product-img">
                        <img src="@/assets/img/users/user-01.jpg" alt="product" />
                      </a>
                      <div>
                        <a href="javascript:void(0);">Mitchum Daniel</a>
                        <span class="emp-team">Database Administrator</span>
                      </div>
                    </div>
                  </td>
                  <td>POS001</td>
                  <td>Sick Leave</td>
                  <td>02 Aug 2023</td>
                  <td>03 Aug 2023</td>
                  <td>01 Day</td>
                  <td>Regular</td>
                  <td>02 Aug 2023</td>
                  <td><span class="badges status-badge">Approved</span></td>
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a class="me-3 confirm-text p-2" href="javascript:void(0);">
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
                  <td>
                    <div class="userimgname">
                      <a href="javascript:void(0);" class="product-img">
                        <img src="@/assets/img/users/user-02.jpg" alt="product" />
                      </a>
                      <div>
                        <a href="javascript:void(0);">Susan Lopez</a>
                        <span class="emp-team">Curator</span>
                      </div>
                    </div>
                  </td>
                  <td>POS002</td>
                  <td>Sick Leave</td>
                  <td>07 Aug 2023</td>
                  <td>07 Aug 2023</td>
                  <td>2 hrs</td>
                  <td>Regular</td>
                  <td>07 Aug 2023</td>
                  <td><span class="badges unstatus-badge">Rejected</span></td>
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a class="me-3 confirm-text p-2" href="javascript:void(0);">
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
                  <td>
                    <div class="userimgname">
                      <a href="javascript:void(0);" class="product-img">
                        <img src="@/assets/img/users/user-03.jpg" alt="product" />
                      </a>
                      <div>
                        <a href="javascript:void(0);">Robert Grossman</a>
                        <span class="emp-team">System Administrator</span>
                      </div>
                    </div>
                  </td>
                  <td>POS003</td>
                  <td>Sick Leave</td>
                  <td>03 Aug 2023</td>
                  <td>04 Aug 2023</td>
                  <td>01 Day</td>
                  <td>Regular</td>
                  <td>03 Aug 2023</td>
                  <td>
                    <div class="input-blocks leave-table">
                      <vue-select
                        :options="LeaveApp"
                        id="leaveapp"
                        placeholder="Approve"
                      />
                    </div>
                  </td>
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a class="me-3 confirm-text p-2" href="javascript:void(0);">
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
                  <td>
                    <div class="userimgname">
                      <a href="javascript:void(0);" class="product-img">
                        <img src="@/assets/img/users/user-06.jpg" alt="product" />
                      </a>
                      <div>
                        <a href="javascript:void(0);">Janet Hembre</a>
                        <span class="emp-team">Administrative Officer</span>
                      </div>
                    </div>
                  </td>
                  <td>POS004</td>
                  <td>Maternity</td>
                  <td>05 Aug 2023</td>
                  <td>07 Aug 2023</td>
                  <td>02 Days</td>
                  <td>Regular</td>
                  <td>05 Aug 2023</td>
                  <td>
                    <div class="input-blocks leave-table">
                      <vue-select
                        :options="LeaveAppone"
                        id="leaveappone"
                        placeholder="Approve"
                      />
                    </div>
                  </td>
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a class="me-3 confirm-text p-2" href="javascript:void(0);">
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
                  <td>
                    <div class="userimgname">
                      <a href="javascript:void(0);" class="product-img">
                        <img src="@/assets/img/users/user-04.jpg" alt="product" />
                      </a>
                      <div>
                        <a href="javascript:void(0);">Russell Belle</a>
                        <span class="emp-team">Technician</span>
                      </div>
                    </div>
                  </td>
                  <td>POS005</td>
                  <td>Vacation</td>
                  <td>08 Aug 2023</td>
                  <td>10 Aug 2023</td>
                  <td>03 Days</td>
                  <td>Regular</td>
                  <td>08 Aug 2023</td>
                  <td>
                    <div class="input-blocks leave-table">
                      <vue-select
                        :options="LeaveApptwo"
                        id="leaveapptwo"
                        placeholder="Approve"
                      />
                    </div>
                  </td>
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a class="me-3 confirm-text p-2" href="javascript:void(0);">
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
                  <td>
                    <div class="userimgname">
                      <a href="javascript:void(0);" class="product-img">
                        <img src="@/assets/img/users/user-05.jpg" alt="product" />
                      </a>
                      <div>
                        <a href="javascript:void(0);">Edward K. Muniz</a>
                        <span class="emp-team">Office Support Secretary</span>
                      </div>
                    </div>
                  </td>
                  <td>POS006</td>
                  <td>Sick Leave</td>
                  <td>03 Aug 2023</td>
                  <td>03 Aug 2023</td>
                  <td>2 hrs</td>
                  <td>Regular</td>
                  <td>03 Aug 2023</td>
                  <td>
                    <div class="input-blocks leave-table">
                      <vue-select
                        :options="LeaveAppthree"
                        id="leaveappthree"
                        placeholder="Approve"
                      />
                    </div>
                  </td>
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a class="me-3 confirm-text p-2" href="javascript:void(0);">
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
</template>
<script>
import { ref } from "vue";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
export default {
  data() {
    return {
      isLayoutBoxVisible: false,
      Sortleave: ["Sort by Date", "Newest", "Oldest"],
      LeaveStatus: ["Choose Status", "Approved", "Rejected"],
      Sortty: ["Choose Type", "Sick Leave", "Maternity", "Vacation"],
      SortEmployee: [
        "Choose Employee",
        "Mitchum Daniel",
        "Susan Lopez",
        "Robert Grossman",
        "Janet Hembre",
      ],
      LeaveApp: ["Approve", "Rejected"],
      LeaveAppone: ["Approve", "Rejected"],
      LeaveApptwo: ["Approve", "Rejected"],
      LeaveAppthree: ["Approve", "Rejected"],
      startdate: currentDate,
      startdateOne: currentDateOne,
      dateFormat: "dd-MM-yyyy",
      filter: false,
    };
  },
  methods: {
    toggleLayoutBox() {
      this.isLayoutBoxVisible = !this.isLayoutBoxVisible;
    },
  },
  toggleCollapse() {
    const collapseHeader = this.$refs.collapseHeader;

    if (collapseHeader) {
      collapseHeader.classList.toggle("active");
      document.body.classList.toggle("header-collapse");
    }
  },
};
</script>
