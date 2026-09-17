<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Sub Category list</h4>
            <h6>Manage your subcategories</h6>
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
            data-bs-target="#add-category"
            ><vue-feather type="plus-circle" class="me-2"></vue-feather> Add Sub
            Category</a
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
            <div class="form-sort">
              <vue-feather type="sliders" class="info-img"></vue-feather>
              <vue-select
                :options="SubCategorySort"
                id="subcategorysort"
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
                      :options="SubCategorySelect"
                      id="subcategoryselect"
                      placeholder="Choose Category"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="zap" class="info-img"></vue-feather>
                    <vue-select
                      :options="SubCategoryfru"
                      id="subcategoryfru"
                      placeholder="Choose SubCategory"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="stop-circle" class="info-img"></vue-feather>
                    <vue-select
                      :options="SubCategorycode"
                      id="subcategorycode"
                      placeholder="Category Code"
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
              class="table datanew table-hover table-center mb-0"
              :columns="columns"
              :data-source="data"
              :row-selection="{}"
            >
              <template #bodyCell="{ column, record }">
                <template v-if="column.key === 'Image'">
                  <a class="product-img">
                    <img
                      :src="require(`@/assets/img/products/${record.Image}`)"
                      alt="product"
                    />
                  </a>
                </template>
                <template v-else-if="column.key === 'action'">
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a
                        class="me-2 p-2"
                        href="javascript:void(0);"
                        data-bs-toggle="modal"
                        data-bs-target="#edit-category"
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
  <sub-categories-modal></sub-categories-modal>
</template>
<script>
const columns = [
  {
    title: "Image",
    dataIndex: "Image",
    key: "Image",
    sorter: {
      compare: (a, b) => {
        a = a.Image.toLowerCase();
        b = b.Image.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Category",
    dataIndex: "Category",
    sorter: {
      compare: (a, b) => {
        a = a.Category.toLowerCase();
        b = b.Category.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Parent category",
    dataIndex: "Parentcategory",
    sorter: {
      compare: (a, b) => {
        a = a.Parentcategory.toLowerCase();
        b = b.Parentcategory.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Category Code",
    dataIndex: "CategoryCode",
    sorter: {
      compare: (a, b) => {
        a = a.CategoryCode.toLowerCase();
        b = b.CategoryCode.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Description",
    dataIndex: "Description",
    sorter: {
      compare: (a, b) => {
        a = a.Description.toLowerCase();
        b = b.Description.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Created By",
    dataIndex: "CreatedBy",
    sorter: {
      compare: (a, b) => {
        a = a.CreatedBy.toLowerCase();
        b = b.CreatedBy.toLowerCase();
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
    Image: "product1.jpg",
    Category: "Computers",
    Parentcategory: "Computers",
    CategoryCode: "CT001",
    Description: "Computers Description",
    CreatedBy: "Admin",
  },
  {
    Image: "product2.jpg",
    Category: "Fruits",
    Parentcategory: "Fruits",
    CategoryCode: "CT002",
    Description: "Fruits Description",
    CreatedBy: "Admin",
  },
  {
    Image: "product3.jpg",
    Category: "Fruits",
    Parentcategory: "Fruits",
    CategoryCode: "CT003",
    Description: "Fruits Description",
    CreatedBy: "Admin",
  },
  {
    Image: "product4.jpg",
    Category: "Fruits",
    Parentcategory: "Fruits",
    CategoryCode: "CT004",
    Description: "Fruits Description",
    CreatedBy: "Admin",
  },
  {
    Image: "product5.jpg",
    Category: "Accessories",
    Parentcategory: "Accessories",
    CategoryCode: "CT005",
    Description: "Accessories Description",
    CreatedBy: "Admin",
  },
  {
    Image: "product6.jpg",
    Category: "Shoes",
    Parentcategory: "Shoes",
    CategoryCode: "CT006",
    Description: "Shoes Description",
    CreatedBy: "Admin",
  },
  {
    Image: "product7.jpg",
    Category: "Fruits",
    Parentcategory: "Fruits",
    CategoryCode: "CT007",
    Description: "Fruits Description",
    CreatedBy: "Admin",
  },
  {
    Image: "product8.jpg",
    Category: "Fruits",
    Parentcategory: "Fruits",
    CategoryCode: "CT008",
    Description: "Fruits Description",
    CreatedBy: "Admin",
  },
  {
    Image: "product9.jpg",
    Category: "Computers",
    Parentcategory: "Computers",
    CategoryCode: "CT009",
    Description: "Computers Description",
    CreatedBy: "Admin",
  },
  {
    Image: "product10.jpg",
    Category: "Health Care",
    Parentcategory: "Health Care",
    CategoryCode: "CT0010",
    Description: "Health Care Description",
    CreatedBy: "Admin",
  },
  {
    Image: "product4.jpg",
    Category: "Fruits",
    Parentcategory: "Fruits",
    CategoryCode: "CT004",
    Description: "Fruits Description",
    CreatedBy: "Admin",
  },
  {
    Image: "product5.jpg",
    Category: "Accessories",
    Parentcategory: "Accessories",
    CategoryCode: "CT005",
    Description: "Accessories Description",
    CreatedBy: "Admin",
  },
  {
    Image: "product6.jpg",
    Category: "Shoes",
    Parentcategory: "Shoes",
    CategoryCode: "CT006",
    Description: "Shoes Description",
    CreatedBy: "Admin",
  },
  {
    Image: "product7.jpg",
    Category: "Fruits",
    Parentcategory: "Fruits",
    CategoryCode: "CT007",
    Description: "Fruits Description",
    CreatedBy: "Admin",
  },
  {
    Image: "product8.jpg",
    Category: "Fruits",
    Parentcategory: "Fruits",
    CategoryCode: "CT008",
    Description: "Fruits Description",
    CreatedBy: "Admin",
  },
  {
    Image: "product9.jpg",
    Category: "Computers",
    Parentcategory: "Computers",
    CategoryCode: "CT009",
    Description: "Computers Description",
    CreatedBy: "Admin",
  },
  {
    Image: "product10.jpg",
    Category: "Health Care",
    Parentcategory: "Health Care",
    CategoryCode: "CT0010",
    Description: "Health Care Description",
    CreatedBy: "Admin",
  },
];
import Swal from "sweetalert2";
export default {
  data() {
    return {
      filter: false,
      SubCategorySort: ["Sort by Date", "Newest", "Oldest"],
      SubCategorySelect: ["Choose Category", "Laptop", "Electronics", "Shoe"],
      SubCategoryfru: ["Choose Subcategory", "Fruits"],
      SubCategorycode: ["Category Code", "CT001", "CT002"],
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
