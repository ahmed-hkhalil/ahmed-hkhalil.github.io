<script>
const columns = [
  {
    sorter: true,
  },
  {
    title: "From Warehouse",
    dataIndex: "From_Warehouse",
    sorter: {
      compare: (a, b) => {
        a = a.From_Warehouse.toLowerCase();
        b = b.From_Warehouse.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "To Warehouse",
    dataIndex: "To_Warehouse",
    sorter: {
      compare: (a, b) => {
        a = a.To_Warehouse.toLowerCase();
        b = b.To_Warehouse.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "No of Products",
    dataIndex: "Products",
    sorter: {
      compare: (a, b) => {
        a = a.Products.toLowerCase();
        b = b.Products.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Quantity transfered",
    dataIndex: "Quantity",
    sorter: {
      compare: (a, b) => {
        a = a.Quantity.toLowerCase();
        b = b.Quantity.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Ref Number",
    dataIndex: "Number",
    sorter: {
      compare: (a, b) => {
        a = a.Number.toLowerCase();
        b = b.Number.toLowerCase();
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
    title: "Action",
    key: "action",
    sorter: true,
  },
];

const data = [
  {
    id: "1",
    From_Warehouse: "Lobar Handy",
    To_Warehouse: "Selosy",
    Products: "4",
    Quantity: "14",
    Number: "#145445",
    Date: "25 Jul 2023",
  },
  {
    id: "2",
    From_Warehouse: "Quaint Warehouse",
    To_Warehouse: "Logerro",
    Products: "21",
    Quantity: "10",
    Number: "#135478",
    Date: "28 Jul 2023",
  },
  {
    id: "3",
    From_Warehouse: "Traditional Warehouse",
    To_Warehouse: "Vesloo",
    Products: "15",
    Quantity: "14",
    Number: "#145124",
    Date: "24 Jul 2023",
  },
  {
    id: "4",
    From_Warehouse: "Cool Warehouse",
    To_Warehouse: "Crompy",
    Products: "14",
    Quantity: "74",
    Number: "#474541",
    Date: "15 Jul 2023",
  },
];
import Swal from "sweetalert2";

export default {
  data() {
    return {
      filter: false,
      columns,
      data,
      isLayoutBoxVisible: false,
      Oldest: ["Sort by Date", "Newest", "Oldest"],
      Cool: [
        "Warehouse From",
        "Lobar Handy",
        "Quaint Warehouse",
        "Traditional Warehouse",
        "Cool Warehouse",
      ],
      Crompy: ["Warehouse To", "Selosy", "Logerro", "Vesloo", "Crompy"],
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

<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>

  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Stock Transfer</h4>
            <h6>Manage your stock transfer</h6>
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
              ><i data-feather="printer" class="feather-rotate-ccw"></i
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
            ><vue-feather type="plus-circle" class="me-2"></vue-feather>Add New</a
          >
        </div>
        <div class="page-btn import">
          <a
            href="javascript:void(0);"
            class="btn btn-added color"
            data-bs-toggle="modal"
            data-bs-target="#view-notes"
            ><vue-feather type="download" class="me-2"></vue-feather>Import Transfer</a
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
              <vue-select :options="Oldest" placeholder="Sort by Date" />
            </div>
          </div>
          <!-- /Filter -->
          <div
            class="card"
            id="filter_inputs"
            :style="{ display: filter ? 'block' : 'none' }"
          >
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="archive" class="info-img"></vue-feather>
                    <vue-select :options="Cool" placeholder="Warehouse From" />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="user" class="info-img"></vue-feather>
                    <vue-select :options="Crompy" placeholder="Warehouse To" />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="calendar" class="info-img"></vue-feather>
                    <div class="input-groupicon">
                      <input
                        type="text"
                        class="datetimepicker"
                        placeholder="Choose Date"
                      />
                    </div>
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
            <a-table :columns="columns" :data-source="data" :row-selection="{}">
              <template #bodyCell="{ column }">
                <template v-if="column.key === 'action'">
                  <td class="action-table-data">
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
                </template>
              </template>
            </a-table>
          </div>
        </div>
      </div>
      <!-- /product list -->
    </div>
  </div>

  <stock-transfer-modal></stock-transfer-modal>
</template>
