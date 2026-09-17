<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>State List</h4>
            <h6>Manage Your States</h6>
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
            ><vue-feather type="plus-circle" class="me-2"></vue-feather>Add New State</a
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
                :options="Sortstate"
                id="sortstate"
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
                    <vue-feather type="globe" class="info-img"></vue-feather>
                    <vue-select
                      :options="Sortstateco"
                      id="sortstateco"
                      placeholder="Country"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="stop-circle" class="info-img"></vue-feather>
                    <vue-select
                      :options="Statest"
                      id="statest"
                      placeholder="Choose Status"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="map-pin" class="info-img"></vue-feather>
                    <vue-select :options="Newst" id="newst" placeholder="Choose State" />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <a class="btn btn-filters ms-auto">
                      <i data-feather="search" class="feather-search"></i> Search
                    </a>
                  </div>
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
              <template v-if="column.key === 'Status'">
                <div>
                  <span :class="record.Class">{{ record.Status }}</span>
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
  <states-modal></states-modal>
</template>
<script>
const columns = [
  {
    title: "State Name",
    dataIndex: "StateName",
    sorter: {
      compare: (a, b) => {
        a = a.StateName.toLowerCase();
        b = b.StateName.toLowerCase();
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
    StateName: "Beijing",
    Country: "China",
    Class: "badge badge-linedanger",
    Status: "Inactive",
  },
  {
    StateName: "Newyork",
    Country: "USA",
    Class: "badge badge-linesuccess",
    Status: "Active",
  },
  {
    StateName: "Greece",
    Country: "Athens",
    Class: "badge badge-linesuccess",
    Status: "Active",
  },
  {
    StateName: "Bangkok",
    Country: "Thailand",
    Class: "badge badge-linesuccess",
    Status: "Active",
  },
  {
    StateName: "Mueang Phuket",
    Country: "Phiket island",
    Class: "badge badge-linedanger",
    Status: "Inactive",
  },
  {
    StateName: "Berlin",
    Country: "Germany",
    Class: "badge badge-linedanger",
    Status: "Inactive",
  },
  {
    StateName: "Luanda",
    Country: "Angola",
    Class: "badge badge-linesuccess",
    Status: "Active",
  },
  {
    StateName: "Albania",
    Country: "Albania",
    Class: "badge badge-linesuccess",
    Status: "Active",
  },
  {
    StateName: "Ankara",
    Country: "Turkey",
    Class: "badge badge-linesuccess",
    Status: "Active",
  },
  {
    StateName: "Polanco",
    Country: "Mexico",
    Class: "badge badge-linesuccess",
    Status: "Active",
  },
  {
    StateName: "Greece",
    Country: "Athens",
    Class: "badge badge-linedanger",
    Status: "Inactive",
  },
  {
    StateName: "Newyork",
    Country: "USA",
    Class: "badge badge-linedanger",
    Status: "Inactive",
  },
];
export default {
  data() {
    return {
      filter: false,
      Newst: ["Choose Status", "Newyork", "Bangkok"],
      Sortstateco: ["Choose Country", "Mexico", "Italy"],
      Statest: ["Choose Status", "Active", "Inactive"],
      Sortstate: ["Sort by Date", "25 9 23", "12 9 23"],
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
