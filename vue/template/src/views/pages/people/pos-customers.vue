<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Customer List</h4>
            <h6>Manage your warehouse</h6>
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
            ><vue-feather type="plus-circle" class="me-2"></vue-feather>Add New
            Customer</a
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
                  ><vue-feather type="search" class="feather-search"></vue-feather
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
              </div>
            </div>
            <div class="form-sort">
              <vue-feather type="sliders" class="info-img"></vue-feather>
              <vue-select
                :options="CustomerDate"
                id="customerdate"
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
                    <i data-feather="user" class="info-img"></i>
                    <vue-select
                      :options="CustomerName"
                      id="customerName"
                      placeholder="Choose Customer Name"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <i data-feather="globe" class="info-img"></i>
                    <vue-select
                      :options="CustomerCountry"
                      id="customercountry"
                      placeholder="Choose Customer Name"
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
            <a-table
              class="table datanew"
              :columns="columns"
              :data-source="data"
              :row-selection="{}"
            >
              <template #bodyCell="{ column, record }">
                <template v-if="column.key === 'CategoryName'">
                  <div class="userimgname cust-imgname">
                    <a href="javascript:void(0);" class="product-img">
                      <img :src="require(`@/assets/img/${record.Image}`)" alt="product" />
                    </a>
                    <a href="javascript:void(0);">{{ record.CategoryName }}</a>
                  </div>
                </template>
                <template v-if="column.key === 'action'">
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
  <customers-modal></customers-modal>
</template>
<script>
const columns = [
  {
    title: "Category Name",
    dataIndex: "CategoryName",
    key: "CategoryName",
    sorter: {
      compare: (a, b) => {
        a = a.CategoryName.toLowerCase();
        b = b.CategoryName.toLowerCase();
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
    title: "Customer",
    dataIndex: "Customer",
    sorter: {
      compare: (a, b) => {
        a = a.Customer.toLowerCase();
        b = b.Customer.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Email",
    dataIndex: "Email",
    sorter: {
      compare: (a, b) => {
        a = a.Email.toLowerCase();
        b = b.Email.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Phone",
    dataIndex: "Phone",
    sorter: {
      compare: (a, b) => {
        a = a.Phone.toLowerCase();
        b = b.Phone.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Country",
    dataIndex: "Country",
    sorter: {
      compare: (a, b) => {
        a = a.Country.toLowerCase();
        b = b.Country.toLowerCase();
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
    Image: "users/user-23.jpg",
    CategoryName: "Thomas",
    Code: "201",
    Customer: "Thomas",
    Email: "thomas@exmple.com",
    Phone: "12163547758",
    Country: "Germany",
  },
  {
    Image: "users/user-15.jpg",
    CategoryName: "Rose",
    Code: "201",
    Customer: "Rose",
    Email: "rose@exmple.com",
    Phone: "11367529510",
    Country: "USA",
  },
  {
    Image: "users/user-16.jpg",
    CategoryName: "Benjamin",
    Code: "203",
    Customer: "Benjamin",
    Email: "benjamin@exmple.com",
    Phone: "15362789414",
    Country: "Japan",
  },
  {
    Image: "users/user-17.jpg",
    CategoryName: "Kaitlin",
    Code: "204",
    Customer: "Kaitlin",
    Email: "kaitlin@exmple.com",
    Phone: "18513094627",
    Country: "Austria",
  },
  {
    Image: "users/user-18.jpg",
    CategoryName: "Lilly",
    Code: "205",
    Customer: "Lilly",
    Email: "lilly@exmple.com",
    Phone: "14678219025",
    Country: "India",
  },
  {
    Image: "users/user-19.jpg",
    CategoryName: "Freda",
    Code: "206",
    Customer: "Freda",
    Email: "freda@exmple.com",
    Phone: "10913278319",
    Country: "France",
  },
  {
    Image: "users/user-23.jpg",
    CategoryName: "Walk-in-Customer",
    Code: "1",
    Customer: "Walk-in-Customer",
    Email: "customer01@exmple.com",
    Phone: "19125852947",
    Country: "Belgium",
  },
  {
    Image: "customer/people-customer-07.jpg",
    CategoryName: "Maybelle",
    Code: "207",
    Customer: "Maybelle",
    Email: "maybelle@exmple.com",
    Phone: "19125852947",
    Country: "Italy",
  },
  {
    Image: "users/user-10.jpg",
    CategoryName: "Ellen",
    Code: "208",
    Customer: "Ellen",
    Email: "ellen@exmple.com",
    Phone: "19756194733",
    Country: "Canada",
  },
  {
    Image: "customer/people-customer-07.jpg",
    CategoryName: "Walk-in-Customer",
    Code: "2",
    Customer: "Walk-in-Customer",
    Email: "customer02@exmple.com",
    Phone: "19167850925",
    Country: "Greece",
  },
];
import Swal from "sweetalert2";
export default {
  data() {
    return {
      filter: false,
      CustomerCountry: ["Choose Country", "Inda", "USA"],
      CustomerName: ["Choose Customer Name", "Benjamin", "Ellen", "Freda", "Kaitlin"],
      CustomerDate: ["Sort by Date", "Newest", "Oldest"],
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
