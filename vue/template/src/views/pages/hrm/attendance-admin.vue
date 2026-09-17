<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Attendance</h4>
            <h6>Manage your Attendance</h6>
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
          <li></li>
        </ul>
        <div class="page-btn">
          <a
            href="javascript:void(0);"
            class="btn btn-added"
            data-bs-toggle="modal"
            data-bs-target="#add-units"
            ><vue-feather type="plus-circle" class="me-2"></vue-feather>Add New
            Attendance</a
          >
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
            <div class="search-path d-flex align-items-center search-path-new">
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
                <a href="javascript:void(0);" class="btn-grid active"
                  ><vue-feather type="grid" class="grid"></vue-feather
                ></a>
              </div>
            </div>
            <div class="form-sort">
              <vue-feather type="sliders" class="info-img"></vue-feather>
              <vue-select :options="SortAtte" id="sortatte" placeholder="Sort by Date" />
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
                      :options="AtteName"
                      id="atteName"
                      placeholder="Choose Name"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="stop-circle" class="info-img"></vue-feather>
                    <vue-select
                      :options="AtteStatus"
                      id="atteStatus"
                      placeholder="Choose Name"
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
                  <th>Emp Name</th>
                  <th>Emp Id</th>
                  <th>Date</th>
                  <th>Shift</th>
                  <th>Clock In</th>
                  <th>Production</th>
                  <th>Overtime</th>
                  <th>Total Hours</th>
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
                  <td>
                    <div class="userimgname">
                      <a href="javascript:void(0);" class="product-img">
                        <img src="@/assets/img/users/user-01.jpg" alt="product" />
                      </a>
                      <div>
                        <a href="javascript:void(0);">Mitchum Daniel</a>
                        <span class="emp-team">Administrator</span>
                      </div>
                    </div>
                  </td>
                  <td>POS001</td>
                  <td>15 Jan 2023</td>
                  <td>Regular</td>
                  <td>09:15 AM</td>
                  <td>9h 22m</td>
                  <td>1h 13m</td>
                  <td>10h 15m</td>
                  <td><span class="badges status-badge">Approved</span></td>
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a class="me-2 p-2" href="javascript:void(0);">
                        <i data-feather="eye" class="feather-eye"></i>
                      </a>
                      <a
                        class="me-2 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#edit-units"
                      >
                        <i data-feather="edit" class="feather-edit"></i>
                      </a>
                      <a
                        class="me-0 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#delete-units"
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
                  <td>
                    <div class="userimgname">
                      <a href="javascript:void(0);" class="product-img">
                        <img src="@/assets/img/users/user-06.jpg" alt="product" />
                      </a>
                      <div>
                        <a href="javascript:void(0);">Janet Hembre</a>
                        <span class="emp-team">Administrative</span>
                      </div>
                    </div>
                  </td>
                  <td>POS003</td>
                  <td>15 Jan 2023</td>
                  <td>Regular</td>
                  <td>09:07 AM</td>
                  <td>9h 55m</td>
                  <td>0h 50m</td>
                  <td>10h 50m</td>
                  <td>
                    <div class="input-blocks leave-table">
                      <vue-select :options="Approve" id="approve" placeholder="Approve" />
                    </div>
                  </td>
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a class="me-2 p-2" href="javascript:void(0);">
                        <i data-feather="eye" class="feather-eye"></i>
                      </a>
                      <a
                        class="me-2 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#edit-units"
                      >
                        <i data-feather="edit" class="feather-edit"></i
                      ></a>
                      <a
                        class="me-0 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#delete-units"
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
                  <td>POS004</td>
                  <td>15 Jan 2023</td>
                  <td>Regular</td>
                  <td>08:58 AM</td>
                  <td>9h 10m</td>
                  <td>1h 05m</td>
                  <td>10h 05m</td>
                  <td>
                    <div class="input-blocks leave-table">
                      <vue-select
                        :options="ApproveOne"
                        id="approveone"
                        placeholder="Approve"
                      />
                    </div>
                  </td>
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a class="me-2 p-2" href="javascript:void(0);">
                        <i data-feather="eye" class="feather-eye"></i>
                      </a>
                      <a
                        class="me-2 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#edit-units"
                      >
                        <i data-feather="edit" class="feather-edit"></i
                      ></a>
                      <a
                        class="me-0 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#delete-units"
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
                  <td>
                    <div class="userimgname">
                      <a href="javascript:void(0);" class="product-img">
                        <img src="@/assets/img/users/user-03.jpg" alt="product" />
                      </a>
                      <div>
                        <a href="javascript:void(0);">Robert Grossman</a>
                        <span class="emp-team">Administrator</span>
                      </div>
                    </div>
                  </td>
                  <td>POS005</td>
                  <td>15 Jan 2023</td>
                  <td>Regular</td>
                  <td>09:02 AM</td>
                  <td>9h 20m</td>
                  <td>1h 03m</td>
                  <td>10h 03m</td>
                  <td>
                    <div class="input-blocks leave-table">
                      <vue-select
                        :options="ApproveTwo"
                        id="approvetwo"
                        placeholder="Approve"
                      />
                    </div>
                  </td>
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a class="me-2 p-2" href="javascript:void(0);">
                        <i data-feather="eye" class="feather-eye"></i>
                      </a>
                      <a
                        class="me-2 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#edit-units"
                      >
                        <i data-feather="edit" class="feather-edit"></i
                      ></a>
                      <a
                        class="me-0 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#delete-units"
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
                  <td>
                    <div class="userimgname">
                      <a href="javascript:void(0);" class="product-img">
                        <img src="@/assets/img/users/user-05.jpg" alt="product" />
                      </a>
                      <div>
                        <a href="javascript:void(0);">Edward Muniz</a>
                        <span class="emp-team">Secretary</span>
                      </div>
                    </div>
                  </td>
                  <td>POS006</td>
                  <td>15 Jan 2023</td>
                  <td>Regular</td>
                  <td>09:08 AM</td>
                  <td>9h 30m</td>
                  <td>1h 55m</td>
                  <td>10h 55m</td>
                  <td>
                    <div class="input-blocks leave-table">
                      <vue-select
                        :options="ApproveThree"
                        id="approvethree"
                        placeholder="Approve"
                      />
                    </div>
                  </td>
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a class="me-2 p-2" href="javascript:void(0);">
                        <i data-feather="eye" class="feather-eye"></i>
                      </a>
                      <a
                        class="me-2 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#edit-units"
                      >
                        <i data-feather="edit" class="feather-edit"></i
                      ></a>
                      <a
                        class="me-0 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#delete-units"
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
                  <td>
                    <div class="userimgname">
                      <a href="javascript:void(0);" class="product-img">
                        <img src="@/assets/img/users/user-02.jpg" alt="product" />
                      </a>
                      <div>
                        <a href="javascript:void(0);">Susan Moore</a>
                        <span class="emp-team">Tech Lead</span>
                      </div>
                    </div>
                  </td>
                  <td>POS007</td>
                  <td>15 Jan 2023</td>
                  <td>Regular</td>
                  <td>09:13 AM</td>
                  <td>9h 40m</td>
                  <td>1h 52m</td>
                  <td>10h 52m</td>
                  <td>
                    <div class="input-blocks leave-table">
                      <vue-select
                        :options="ApproveFour"
                        id="approvefour"
                        placeholder="Approve"
                      />
                    </div>
                  </td>
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a class="me-2 p-2" href="javascript:void(0);">
                        <i data-feather="eye" class="feather-eye"></i>
                      </a>
                      <a
                        class="me-2 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#edit-units"
                      >
                        <i data-feather="edit" class="feather-edit"></i
                      ></a>
                      <a
                        class="me-0 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#delete-units"
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
</template>
<script>
export default {
  data() {
    return {
      isLayoutBoxVisible: false,
      filter: false,
      AtteStatus: ["Choose Status", "Approved", "Rejected"],
      AtteName: ["Choose Name", "Mitchum Daniel", "Susan Lopez", "Janet Hembre"],
      SortAtte: ["Sort by Date", "Newest", "Oldest"],
      Approve: ["Approve", "Rejected"],
      ApproveOne: ["Approve", "Rejected"],
      ApproveTwo: ["Approve", "Rejected"],
      ApproveThree: ["Approve", "Rejected"],
      ApproveFour: ["Approve", "Rejected"],
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
