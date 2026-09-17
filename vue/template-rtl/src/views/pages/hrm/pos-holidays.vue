<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Holiday</h4>
            <h6>Manage your Holiday</h6>
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
            ><vue-feather type="plus-circle" class="me-2"></vue-feather>Add New Holiday</a
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
                  class="ms-3 layout-box"
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
                          ><i data-feather="menu" class="feather-menu"></i>Quantity</span
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
            <div class="form-sort">
              <vue-feather type="sliders" class="info-img"></vue-feather>
              <vue-select
                :options="SortHoliday"
                id="sortholiday"
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
                    <vue-feather type="file-text" class="info-img"></vue-feather>
                    <vue-select :options="Hol" id="hol" placeholder="Choose Holiday" />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="users" class="info-img"></vue-feather>
                    <vue-select :options="HolHOD" id="holhod" placeholder="Choose HOD" />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="stop-circle" class="info-img"></vue-feather>
                    <vue-select
                      :options="ChooseHoliday"
                      id="chooseholiday"
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
          <!-- product list -->
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
                    <span class="badge badge-linesuccess">{{ record.Status }}</span>
                  </div>
                </template>
                <template v-else-if="column.key === 'action'">
                  <td class="action-table-data">
                    <div class="edit-delete-action">
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
          <!-- /product list -->
        </div>
      </div>
    </div>
  </div>
  <holiday-modal></holiday-modal>
</template>
<script>
const columns = [
  {
    title: " Name",
    dataIndex: "Name",
    sorter: {
      compare: (a, b) => {
        a = a.Name.toLowerCase();
        b = b.Name.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Date",
    dataIndex: "Date",
    sorter: {
      compare: (a, b) => {
        a = a.Date.toLowerCase();
        b = b.Date.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Duration",
    dataIndex: "Duration",
    sorter: {
      compare: (a, b) => {
        a = a.Duration.toLowerCase();
        b = b.Duration.toLowerCase();
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
    Name: "Newyear",
    Date: "01 Jan 2024",
    Duration: "1 Day",
    CreatedOn: "04 Aug 2023",
    Status: "Active",
  },
  {
    Name: "Pongal",
    Date: "14 Jan 2024",
    Duration: "1 Day",
    CreatedOn: "31 Jan 2022",
    Status: "Active",
  },
  {
    Name: "Republic Day",
    Date: "25 Jan 2024",
    Duration: "1 Day",
    CreatedOn: "21 July 2023",
    Status: "Active",
  },
  {
    Name: "Worker’s Day",
    Date: "01 May 2024",
    Duration: "1 Day",
    CreatedOn: "15 May 2023",
    Status: "Active",
  },
  {
    Name: "Deepavali",
    Date: "14 Oct 2024",
    Duration: "1 Day",
    CreatedOn: "04 Aug 2023",
    Status: "Active",
  },
];
import Swal from "sweetalert2";
export default {
  data() {
    return {
      isLayoutBoxVisible: false,
      filter: false,
      SortHoliday: ["Sort by Date", "Newest", "Oldest"],
      Hol: ["Choose Holiday", "UI/UX", "HR", "Admin", "Engineering"],
      HolHOD: ["Choose HOD", "Mitchum Daniel", "Susan Lopez"],
      ChooseHoliday: ["Choose Status", "Mitchum Daniel", "Susan Lopez"],
      data,
      columns,
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
