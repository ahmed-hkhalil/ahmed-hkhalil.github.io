<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="attendance-header">
        <div class="attendance-content">
          <img src="@/assets/img/icons/hand01.svg" class="hand-img" alt="img" />
          <h3>Good Morning, <span>John Smilga</span></h3>
        </div>
        <div>
          <ul class="table-top-head employe">
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
      </div>
      <div class="attendance-widget">
        <div class="row">
          <div class="col-xl-4 col-lg-12 col-md-4 d-flex">
            <div class="card w-100">
              <div class="card-body">
                <h5>Attendance<span>22 Aug 2023</span></h5>
                <div class="card attendance">
                  <div>
                    <img src="@/assets/img/icons/time-big.svg" alt="time-img" />
                  </div>
                  <div>
                    <h2>05:45:22</h2>
                    <p>Current Time</p>
                  </div>
                </div>
                <div class="modal-attendance-btn flex-column flex-lg-row">
                  <a href="javascript:void(0);" class="btn btn-submit w-100">Clock Out</a>
                  <a
                    href="javascript:void(0);"
                    class="btn btn-cancel me-2 w-100"
                    data-bs-dismiss="modal"
                    >Break</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-12 col-md-8 d-flex">
            <div class="card w-100">
              <div class="card-body">
                <h5>Days Overview This Month</h5>
                <ul class="widget-attend">
                  <li class="box-attend">
                    <div class="warming-card">
                      <h4>31</h4>
                      <h6>Total Working Days</h6>
                    </div>
                  </li>
                  <li class="box-attend">
                    <div class="danger-card">
                      <h4>05</h4>
                      <h6>Abesent Days</h6>
                    </div>
                  </li>
                  <li class="box-attend">
                    <div class="light-card">
                      <h4>28</h4>
                      <h6>Present Days</h6>
                    </div>
                  </li>
                  <li class="box-attend">
                    <div class="warming-card">
                      <h4>02</h4>
                      <h6>Half Days</h6>
                    </div>
                  </li>
                  <li class="box-attend">
                    <div class="warming-card">
                      <h4>01</h4>
                      <h6>Late Days</h6>
                    </div>
                  </li>
                  <li class="box-attend">
                    <div class="success-card">
                      <h4>02</h4>
                      <h6>Holidays</h6>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Attendance</h4>
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
        </ul>
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
              <vue-select :options="AttSort" id="attsort" placeholder="Sort by Date" />
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
                <div class="col-lg-4 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="calendar" class="info-img"></vue-feather>
                    <div class="input-groupicon">
                      <date-picker
                        v-model="startdate"
                        placeholder="Expiry Date"
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
                    <vue-feather type="stop-circle" class="info-img"></vue-feather>
                    <vue-select
                      :options="Choosetus"
                      id="choosetus"
                      placeholder="Choose Status"
                    />
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12 ms-auto">
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
                  <th>Date</th>
                  <th>Clock In</th>
                  <th>Clock Out</th>
                  <th>Production</th>
                  <th>Break</th>
                  <th>Overtime</th>
                  <th>Progress</th>
                  <th>Status</th>
                  <th>Total Hours</th>
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
                  <td>01 Jan 2023</td>
                  <td>09:15 AM</td>
                  <td>08:55 PM</td>
                  <td>9h 00m</td>
                  <td>1h 13m</td>
                  <td>00h 50m</td>
                  <td>
                    <div class="progress attendance">
                      <div
                        class="progress-bar progress-bar-success"
                        role="progressbar"
                        style="width: 78%"
                      ></div>
                      <div
                        class="progress-bar progress-bar-warning"
                        role="progressbar"
                        style="width: 55%"
                      ></div>
                      <div
                        class="progress-bar progress-bar-danger"
                        role="progressbar"
                        style="width: 15%"
                      ></div>
                    </div>
                  </td>
                  <td><span class="badge-linesuccess">Present</span></td>
                  <td>09h 50m</td>
                </tr>
                <tr>
                  <td>
                    <label class="checkboxs">
                      <input type="checkbox" />
                      <span class="checkmarks"></span>
                    </label>
                  </td>
                  <td>02 Jan 2023</td>
                  <td>09:07 AM</td>
                  <td>08:40 PM</td>
                  <td>9h 10m</td>
                  <td>1h 07m</td>
                  <td>01h 13m</td>
                  <td>
                    <div class="progress attendance">
                      <div
                        class="progress-bar progress-bar-success"
                        role="progressbar"
                        style="width: 124%"
                      ></div>
                    </div>
                  </td>
                  <td><span class="badge-linesuccess">Present</span></td>
                  <td>10h 23m</td>
                </tr>
                <tr>
                  <td>
                    <label class="checkboxs">
                      <input type="checkbox" />
                      <span class="checkmarks"></span>
                    </label>
                  </td>
                  <td>03 Jan 2023</td>
                  <td>09:04 AM</td>
                  <td>08:52 PM</td>
                  <td>8h 47m</td>
                  <td>1h 04m</td>
                  <td>01h 07m</td>
                  <td>
                    <div class="progress attendance">
                      <div
                        class="progress-bar progress-bar-success"
                        role="progressbar"
                        style="width: 124%"
                      ></div>
                      <div
                        class="progress-bar progress-bar-danger"
                        role="progressbar"
                        style="width: 15%"
                      ></div>
                    </div>
                  </td>
                  <td><span class="badge-linesuccess">Present</span></td>
                  <td>10h 04m</td>
                </tr>
                <tr>
                  <td>
                    <label class="checkboxs">
                      <input type="checkbox" />
                      <span class="checkmarks"></span>
                    </label>
                  </td>
                  <td>04 Jan 2023</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>
                    <div class="progress attendance">
                      <div
                        class="progress-bar progress-bar-success"
                        role="progressbar"
                        style="width: 78%"
                      ></div>
                      <div
                        class="progress-bar progress-bar-warning"
                        role="progressbar"
                        style="width: 55%"
                      ></div>
                      <div
                        class="progress-bar progress-bar-danger"
                        role="progressbar"
                        style="width: 15%"
                      ></div>
                    </div>
                  </td>
                  <td><span class="badges-inactive">Absent</span></td>
                  <td>-</td>
                </tr>
                <tr>
                  <td>
                    <label class="checkboxs">
                      <input type="checkbox" />
                      <span class="checkmarks"></span>
                    </label>
                  </td>
                  <td>06 Jan 2023</td>
                  <td>09:10 AM</td>
                  <td>08:48 PM</td>
                  <td>8h 38m</td>
                  <td>0h 58m</td>
                  <td>01h 08m</td>
                  <td>
                    <div class="progress attendance">
                      <div
                        class="progress-bar progress-bar-success"
                        role="progressbar"
                        style="width: 78%"
                      ></div>
                      <div
                        class="progress-bar progress-bar-warning"
                        role="progressbar"
                        style="width: 55%"
                      ></div>
                      <div
                        class="progress-bar progress-bar-danger"
                        role="progressbar"
                        style="width: 15%"
                      ></div>
                    </div>
                  </td>
                  <td><span class="badge-linesuccess">Present</span></td>
                  <td>09h 46m</td>
                </tr>
                <tr>
                  <td>
                    <label class="checkboxs">
                      <input type="checkbox" />
                      <span class="checkmarks"></span>
                    </label>
                  </td>
                  <td>07 Jan 2023</td>
                  <td>09:03 AM</td>
                  <td>08:57 PM</td>
                  <td>8h 50m</td>
                  <td>1h 26m</td>
                  <td>0h 43m</td>
                  <td>
                    <div class="progress attendance">
                      <div
                        class="progress-bar progress-bar-success"
                        role="progressbar"
                        style="width: 78%"
                      ></div>
                      <div
                        class="progress-bar progress-bar-warning"
                        role="progressbar"
                        style="width: 55%"
                      ></div>
                      <div
                        class="progress-bar progress-bar-danger"
                        role="progressbar"
                        style="width: 15%"
                      ></div>
                    </div>
                  </td>
                  <td><span class="badge-linesuccess">Present</span></td>
                  <td>08h 33m</td>
                </tr>
                <tr>
                  <td>
                    <label class="checkboxs">
                      <input type="checkbox" />
                      <span class="checkmarks"></span>
                    </label>
                  </td>
                  <td>04 Jan 2023</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>
                    <div class="progress attendance">
                      <div
                        class="progress-bar progress-bar-success"
                        role="progressbar"
                        style="width: 78%"
                      ></div>
                      <div
                        class="progress-bar progress-bar-warning"
                        role="progressbar"
                        style="width: 55%"
                      ></div>
                      <div
                        class="progress-bar progress-bar-danger"
                        role="progressbar"
                        style="width: 15%"
                      ></div>
                    </div>
                  </td>
                  <td><span class="badges-inactive Holiday">Holiday </span></td>
                  <td>-</td>
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
export default {
  data() {
    return {
      isLayoutBoxVisible: false,
      filter: false,
      startdate: currentDate,
      dateFormat: "dd-MM-yyyy",
      Choosetus: ["Choose Status", "Present", "Absent", "Holiday"],
      AttSort: ["Sort by Date", "Newest", "Oldest"],
    };
  },
  methods: {
    toggleLayoutBox() {
      this.isLayoutBoxVisible = !this.isLayoutBoxVisible;
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
