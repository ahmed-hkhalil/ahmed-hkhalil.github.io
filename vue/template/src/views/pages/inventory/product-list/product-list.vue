<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <product-header></product-header>

      <!-- /product list -->
      <div class="card table-list-card">
        <div class="card-body">
          <div class="table-top">
            <div class="search-set">
              <div class="search-input">
                <input type="text" placeholder="Search" class="dark-input" />
                <a href="javascript:void(0);" class="btn btn-searchset"
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
              <vue-select :options="Sortby" id="sortby" placeholder="Sort by Date" />
            </div>
          </div>
          <!-- /Filter -->
          <div
            class="card mb-0"
            :style="{ display: filter ? 'block' : 'none' }"
            id="filter_inputs"
          >
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-lg-12 col-sm-12">
                  <div class="row">
                    <div class="col-lg-2 col-sm-6 col-12">
                      <div class="input-blocks">
                        <vue-feather type="box" class="info-img"></vue-feather>
                        <vue-select
                          :options="ChooseFilter"
                          id="choosefilter"
                          placeholder="Choose Product"
                        />
                      </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-12">
                      <div class="input-blocks">
                        <vue-feather type="stop-circle" class="info-img"></vue-feather>
                        <vue-select
                          :options="CategroyFilter"
                          id="categroyfilter"
                          placeholder="Choose Categroy"
                        />
                      </div>
                    </div>

                    <div class="col-lg-2 col-sm-6 col-12">
                      <div class="input-blocks">
                        <vue-feather type="git-merge" class="info-img"></vue-feather>
                        <vue-select
                          :options="CategroySubFilter"
                          id="categroysubfilter"
                          placeholder="Choose Sub Categroy"
                        />
                      </div>
                    </div>

                    <div class="col-lg-2 col-sm-6 col-12">
                      <div class="input-blocks">
                        <vue-feather type="stop-circle" class="info-img"></vue-feather>
                        <vue-select
                          :options="BrandFilter"
                          id="brandfilter"
                          placeholder="All Brand"
                        />
                      </div>
                    </div>

                    <div class="col-lg-2 col-sm-6 col-12">
                      <div class="input-blocks">
                        <i class="fas fa-money-bill info-img"></i>
                        <vue-select
                          :options="PriceFilter"
                          id="Pricefilter"
                          placeholder="Price"
                        />
                      </div>
                    </div>
                    <div class="col-lg-2 col-sm-6 col-12">
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
            </div>
          </div>
          <!-- /Filter -->
          <div class="table-responsive product-list">
            <a-table
              class="table datanew table-hover table-center mb-0"
              :columns="columns"
              :data-source="data"
              :row-selection="{}"
            >
              <template #bodyCell="{ column, record }">
                <template v-if="column.key === 'Product'">
                  <div class="productimgname">
                    <a href="javascript:void(0);" class="product-img stock-img">
                      <img
                        :src="require(`@/assets/img/products/${record.Image}`)"
                        alt="product"
                      />
                    </a>
                    <a href="javascript:void(0);">{{ record.Product }} </a>
                  </div>
                </template>

                <template v-else-if="column.key === 'CreatedBy'">
                  <td class="userimgname">
                    <a href="javascript:void(0);" class="product-img me-2">
                      <img
                        :src="require(`@/assets/img/users/${record.UserImage}`)"
                        alt="product"
                      />
                    </a>
                    <a href="javascript:void(0);">{{ record.reatedby }}</a>
                  </td>
                </template>
                <template v-else-if="column.key === 'action'">
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <router-link
                        class="me-2 edit-icon p-2"
                        to="/inventory/product-details"
                      >
                        <i data-feather="eye" class="feather-eye"></i>
                      </router-link>
                      <router-link class="me-2 p-2" to="/inventory/edit-product">
                        <i data-feather="edit" class="feather-edit"></i>
                      </router-link>
                      <a
                        class="confirm-text p-2"
                        @click="showConfirmation"
                        href="javascript:void(0);"
                      >
                        <vue-feather type="trash-2" class="trash-2"></vue-feather>
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
  <product-list-modal></product-list-modal>
</template>
<script>
const columns = [
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
    title: "SKU",
    dataIndex: "SKU",
    sorter: {
      compare: (a, b) => {
        a = a.SKU.toLowerCase();
        b = b.SKU.toLowerCase();
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
    title: "Brand",
    dataIndex: "Brand",
    sorter: {
      compare: (a, b) => {
        a = a.Brand.toLowerCase();
        b = b.Brand.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Price",
    dataIndex: "Price",
    sorter: {
      compare: (a, b) => {
        a = a.Price.toLowerCase();
        b = b.Price.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Unit",
    dataIndex: "Unit",
    sorter: {
      compare: (a, b) => {
        a = a.Unit.toLowerCase();
        b = b.Unit.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Qty",
    dataIndex: "Qty",
    sorter: {
      compare: (a, b) => {
        a = a.Qty.toLowerCase();
        b = b.Qty.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Created by",
    dataIndex: "CreatedBy",
    key: "CreatedBy",
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
    Product: "Lenovo 3rd Generation",
    SKU: "PT001",
    Category: "Laptop",
    Brand: "Lenovo",
    Price: "$12500.00",
    Unit: "Pc",
    Qty: "100",
    Image: "stock-img-01.png",
    UserImage: "user-30.jpg",
    reatedby: "Arroon",
  },
  {
    Product: "Bold V3.2",
    SKU: "PT002",
    Category: "Electronics",
    Brand: "Bolt",
    Price: "$1600.00",
    Unit: "Pc",
    Qty: "140",
    Image: "stock-img-06.png",
    UserImage: "user-13.jpg",
    reatedby: "Kenneth",
  },
  {
    Product: "Nike Jordan",
    SKU: "PT003",
    Category: "Shoe",
    Brand: "Nike",
    Price: "$6000.00",
    Unit: "Pc",
    Qty: "780",
    Image: "stock-img-02.png",
    UserImage: "user-11.jpg",
    reatedby: "Gooch",
  },
  {
    Product: "Apple Series 5 Watch",
    SKU: "PT004",
    Category: "Electronics",
    Brand: "Apple",
    Price: "$25000.00",
    Unit: "Pc",
    Qty: "450",
    Image: "stock-img-03.png",
    UserImage: "user-03.jpg",
    reatedby: "Nathan",
  },
  {
    Product: "Amazon Echo Dot",
    SKU: "PT005",
    Category: "Speaker",
    Brand: "Amazon",
    Price: "$1600.00",
    Unit: "Pc",
    Qty: "477",
    Image: "stock-img-04.png",
    UserImage: "user-02.jpg",
    reatedby: "Alice",
  },
  {
    Product: "Lobar Handy",
    SKU: "PT006",
    Category: "Furnitures",
    Brand: "Woodmart",
    Price: "$4521.00",
    Unit: "Kg",
    Qty: "145",
    Image: "stock-img-05.png",
    UserImage: "user-05.jpg",
    reatedby: "Robb",
  },
  {
    Product: "Red Premium Handy",
    SKU: "PT007",
    Category: "Bags",
    Brand: "Versace",
    Price: "$2024.00",
    Unit: "Kg",
    Qty: "747",
    Image: "stock-img-01.png",
    UserImage: "user-08.jpg",
    reatedby: "Steven",
  },
  {
    Product: "Iphone 14 Pro",
    SKU: "PT008",
    Category: "Phone",
    Brand: "Iphone",
    Price: "$1698.00",
    Unit: "Pc",
    Qty: "897",
    Image: "stock-img-02.png",
    UserImage: "user-04.jpg",
    reatedby: "Gravely",
  },
  {
    Product: "Black Slim 200",
    SKU: "PT009",
    Category: "Chairs",
    Brand: "Bently",
    Price: "$6794.00",
    Unit: "Pc",
    Qty: "741",
    Image: "stock-img-03.png",
    UserImage: "user-01.jpg",
    reatedby: "Kevin",
  },
  {
    Product: "Woodcraft Sandal",
    SKU: "PT010",
    Category: "Bags",
    Brand: "Woodcraft",
    Price: "$4547.00",
    Unit: "Kg",
    Qty: "148",
    Image: "stock-img-04.png",
    UserImage: "user-10.jpg",
    reatedby: "Grillo",
  },
];
import Swal from "sweetalert2";
export default {
  data() {
    return {
      filter: false,
      Sortby: ["Sort by Date", "14 09 23", "11 09 23"],
      ChooseFilter: ["Choose Product", "Lenovo 3rd Generation", "Nike Jordan"],
      CategroyFilter: ["Laptop", "Shoe"],
      CategroySubFilter: ["Choose Sub Categroy", "Computers", "Fruits"],
      BrandFilter: ["Lenovo", "Nike"],
      PriceFilter: ["Price", "$12500.00", "$12500.00"],
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
  },
};
</script>
