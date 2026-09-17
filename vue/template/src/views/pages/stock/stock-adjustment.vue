<script>
const columns = [
  {
    sorter: true,
  },
  {
    title: "Warehouse",
    dataIndex: "Warehouse",
    sorter: {
      compare: (a, b) => {
        a = a.Warehouse.toLowerCase();
        b = b.Warehouse.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Shop",
    dataIndex: "Shop",
    sorter: {
      compare: (a, b) => {
        a = a.Shop.toLowerCase();
        b = b.Shop.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Product",
    dataIndex: "Product",
    key: "Product",
    sorter: {
      compare: (a, b) => {
        a = a.Product.toLowerCase();
        b = b.Product.toLowerCase();
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
    title: "Person",
    dataIndex: "Person",
    key: "Person",
    sorter: {
      compare: (a, b) => {
        a = a.Person.toLowerCase();
        b = b.Person.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Notes",
    dataIndex: "Notes",
    key: "Notes",
    sorter: {
      compare: (a, b) => {
        a = a.Notes.toLowerCase();
        b = b.Notes.toLowerCase();
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
    Warehouse: "Lobar Handy",
    Shop: "Selosy",
    Product: "Nike Jordan",
    Product_img: "stock-img-02.png",
    Date: "25 Jul 2023",
    Person: "Steven",
    Person_img: "user-08.jpg",
    Notes: "View Note",
  },
  {
    id: "2",
    Warehouse: "Quaint Warehouse",
    Shop: "Logerro",
    Product: "Apple Series 5 Watch",
    Product_img: "stock-img-03.png",
    Date: "28 Jul 2023",
    Person: "Gravely",
    Person_img: "user-04.jpg",
    Notes: "View Note",
  },
  {
    id: "3",
    Warehouse: "Traditional Warehouse",
    Shop: "Vesloo",
    Product: "Amazon Echo Dot",
    Product_img: "stock-img-04.png",
    Date: "24 Jul 2023",
    Person: "Kevin",
    Person_img: "user-09.jpg",
    Notes: "View Note",
  },
  {
    id: "4",
    Warehouse: "Cool Warehouse",
    Shop: "Crompy",
    Product: "Lobar Handy",
    Product_img: "stock-img-05.png",
    Date: "15 Jul 2023",
    Person: "Grillo",
    Person_img: "user-10.jpg",
    Notes: "View Note",
  },
];
import Swal from "sweetalert2";

export default {
  data() {
    return {
      isLayoutBoxVisible: false,
      filter: false,
      data,
      columns,
      Oldest: ["Sort by Date", "Newest", "Oldest"],
      Warehouse: [
        "Choose Warehouse",
        "Lobar Handy",
        "Quaint Warehouse",
        "Traditional Warehouse",
        "Cool Warehouse",
      ],
      Product: [
        "Choose Product",
        "Nike Jordan",
        "Apple Series 5 Watch",
        "Amazon Echo Dot",
        "Lobar Handy",
      ],
      Person: ["Choose Person", "Steven", "Gravely"],
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
            <h4>Stock Adjustment</h4>
            <h6>Manage your stock adjustment</h6>
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
            ><vue-feather type="plus-circle" class="me-2"></vue-feather>Add New</a
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
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="archive" class="info-img"></vue-feather>
                    <vue-select :options="Warehouse" placeholder="Choose Warehouse" />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="box" class="info-img"></vue-feather>
                    <vue-select :options="Product" placeholder="Choose Product" />
                  </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
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
                <div class="col-lg-2 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="user" class="info-img"></vue-feather>
                    <vue-select :options="Person" placeholder="Choose Person" />
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
            <a-table :columns="columns" :data-source="data" :row-selection="{}">
              <template #bodyCell="{ column, record }">
                <template v-if="column.key === 'Product'">
                  <div class="productimgname">
                    <a href="javascript:void(0);" class="product-img stock-img">
                      <img
                        :src="require(`@/assets/img/products/${record.Product_img}`)"
                        alt="product"
                      />
                    </a>
                    <a href="javascript:void(0);">{{ record.Product }}</a>
                  </div>
                </template>
                <template v-else-if="column.key === 'Person'">
                  <div class="userimgname d-flex">
                    <a href="javascript:void(0);" class="product-img">
                      <img
                        :src="require(`@/assets/img/users/${record.Person_img}`)"
                        alt="product"
                      />
                    </a>
                    <a href="javascript:void(0);">{{ record.Person }}</a>
                  </div>
                </template>
                <template v-else-if="column.key === 'Notes'">
                  <a
                    href="javascript:void(0);"
                    class="view-note"
                    data-bs-toggle="modal"
                    data-bs-target="#view-notes"
                    >{{ record.Notes }}</a
                  >
                </template>
                <template v-else-if="column.key === 'action'">
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

  <stock-adjustment-modal></stock-adjustment-modal>
</template>
