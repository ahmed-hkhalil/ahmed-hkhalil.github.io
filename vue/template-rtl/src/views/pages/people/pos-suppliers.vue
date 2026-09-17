<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Supplier List</h4>
            <h6>Manage Your Supplier</h6>
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
            Supplier</a
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
              </div>
            </div>
            <div class="form-sort">
              <vue-feather type="sliders" class="info-img"></vue-feather>
              <vue-select
                :options="SupplierSort"
                id="supplersort"
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
                    <vue-feather type="user" class="info-img"></vue-feather>
                    <vue-select
                      :options="ChooseSupplierName"
                      id="choosesuppliername"
                      placeholder="Choose Supplier Name"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="globe" class="info-img"></vue-feather>
                    <vue-select
                      :options="SupplierCountry"
                      id="suppliercountry"
                      placeholder="Choose Country"
                    />
                  </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
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
                <template v-if="column.key === 'SupplierName'">
                  <div class="productimgname">
                    <a href="javascript:void(0);" class="product-img supplier-img">
                      <img
                        :src="require(`@/assets/img/supplier/${record.Image}`)"
                        alt="product"
                      />
                    </a>
                    <div>
                      <a href="javascript:void(0);" class="ms-2">{{
                        record.SupplierName
                      }}</a>
                    </div>
                  </div>
                </template>
                <template v-else-if="column.key === 'action'">
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                        <vue-feather type="eye" class="action-eye"></vue-feather>
                      </a>
                      <a
                        class="me-2 p-2 mb-0"
                        data-bs-toggle="modal"
                        data-bs-target="#edit-units"
                      >
                        <i data-feather="edit" class="feather-edit"></i>
                      </a>
                      <a class="me-2 confirm-text p-2 mb-0" href="javascript:void(0);">
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
  <suppliers-modal></suppliers-modal>
</template>
<script>
const columns = [
  {
    title: "Supplier Name",
    dataIndex: "SupplierName",
    key: "SupplierName",
    sorter: {
      compare: (a, b) => {
        a = a.SupplierName.toLowerCase();
        b = b.SupplierName.toLowerCase();
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
    SupplierName: "Apex Computers",
    Code: "201",
    Email: "apexcomputers@example.com",
    Image: "supplier-01.png",
    Phone: "12163547758",
    Country: "Germany",
  },
  {
    SupplierName: "Beats Headphones",
    Code: "202",
    Email: "beatsheadphones@example.com",
    Image: "supplier-02.png",
    Phone: "16372895190",
    Country: "Mexico",
  },
  {
    SupplierName: "Dazzle Shoes",
    Code: "203",
    Email: "dazzleshoes@example.com",
    Image: "supplier-03.png",
    Phone: "17589201739",
    Country: "France",
  },
  {
    SupplierName: "Best Accessories",
    Code: "204",
    Email: "bestaccessories@example.com",
    Image: "supplier-04.png",
    Phone: "18934092467",
    Country: "Italy",
  },
  {
    SupplierName: "A-Z Store",
    Code: "205",
    Email: "atozstore@example.com",
    Image: "supplier-05.png",
    Phone: "12568749035",
    Country: "Belgium",
  },
  {
    SupplierName: "Hatimi Hardwares",
    Code: "206",
    Email: "hatimihardwares@example.com",
    Image: "supplier-06.png",
    Phone: "19054674627",
    Country: "Austria",
  },
  {
    SupplierName: "Aesthetic Bags",
    Code: "207",
    Email: "aestheticbags@example.com",
    Image: "supplier-07.png",
    Phone: "18943670365",
    Country: "India",
  },
  {
    SupplierName: "Alpha Mobiles",
    Code: "208",
    Email: "alphamobiles@example.com",
    Image: "supplier-08.png",
    Phone: "16473894103",
    Country: "Greece",
  },
  {
    SupplierName: "Sigma Chairs",
    Code: "209",
    Email: "sigmachairs@example.com",
    Image: "supplier-09.png",
    Phone: "17590274536",
    Country: "Japan",
  },
  {
    SupplierName: "Zenith Bags",
    Code: "210",
    Email: "zenithbags@example.com",
    Image: "supplier-10.png",
    Phone: "12564098473",
    Country: "China",
  },
  {
    SupplierName: "Aesthetic Bags",
    Code: "211",
    Email: "aestheticbags@example.com",
    Image: "supplier-07.png",
    Phone: "18943670365",
    Country: "India",
  },
  {
    SupplierName: "A-Z Store",
    Code: "212",
    Email: "atozstore@example.com",
    Image: "supplier-05.png",
    Phone: "12568749035",
    Country: "Angola",
  },
  {
    SupplierName: "Dazzle Shoes",
    Code: "213",
    Email: "dazzleshoes@example.com",
    Image: "supplier-03.png",
    Phone: "17589201739",
    Country: "Albania",
  },
];
export default {
  data() {
    return {
      filter: false,
      SupplierSort: ["Sort by Date", "25 9 23", "12 9 23"],
      SupplierCountry: ["Choose Country", "Mexico", "Italy"],
      ChooseSupplierName: ["Choose Supplier Name", "Dazzle Shoes", "A-Z Store"],
      data,
      columns,
    };
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
