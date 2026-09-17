<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content settings-content">
      <div class="page-header settings-pg-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Settings</h4>
            <h6>Manage your settings on portal</h6>
          </div>
        </div>
        <ul class="table-top-head">
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
      <div class="row">
        <div class="col-xl-12">
          <div class="settings-wrapper d-flex">
            <div class="sidebars settings-sidebar theiaStickySidebar" id="sidebar2">
              <settings-sidebar></settings-sidebar>
            </div>
            <div class="settings-page-wrap w-50">
              <div class="setting-title">
                <h4>Ban IP Address</h4>
              </div>
              <div class="page-header bank-settings justify-content-end">
                <div class="page-btn">
                  <a
                    href="javascript:void(0);"
                    class="btn btn-added"
                    data-bs-toggle="modal"
                    data-bs-target="#add-banip"
                    ><vue-feather type="plus-circle" class="me-2"></vue-feather>Add New
                    Ban IP</a
                  >
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
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
                              <vue-feather
                                type="filter"
                                class="filter-icon"
                              ></vue-feather>
                              <span
                                ><img src="@/assets/img/icons/closes.svg" alt="img"
                              /></span>
                            </a>
                          </div>
                        </div>
                        <div class="form-sort">
                          <vue-feather type="sliders" class="info-img"></vue-feather>
                          <vue-select
                            :options="BanSort"
                            id="bansort"
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
                            <div class="col-lg-4 col-sm-6 col-12">
                              <div class="input-blocks">
                                <vue-feather type="zap" class="info-img"></vue-feather>
                                <vue-select
                                  :options="Ipsort"
                                  id="ipsort"
                                  placeholder="Choose IP"
                                />
                              </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-12 ms-auto">
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
                      <!-- /Filter -->
                      <div class="table-responsive">
                        <a-table
                          class="table datanew"
                          :columns="columns"
                          :data-source="data"
                          :row-selection="{}"
                        >
                          <template #bodyCell="{ column, record }">
                            <template v-if="column.key === 'IPAddress'">
                              <div>{{ record.IPAddress }}</div>
                            </template>
                            <template v-else-if="column.key === 'Reason'">
                              <p>
                                {{ record.Reason }}
                              </p>
                            </template>
                            <template v-else-if="column.key === 'Date'">
                              <div>{{ record.Date }}</div>
                            </template>
                            <template v-else-if="column.key === 'action'">
                              <td class="action-table-data justify-content-end">
                                <div class="edit-delete-action">
                                  <a
                                    class="me-2 p-2"
                                    href="javascript:void(0);"
                                    data-bs-toggle="modal"
                                    data-bs-target="#edit-banip"
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <ban-ip-address-modal></ban-ip-address-modal>
</template>
<script>
const columns = [
  {
    title: "IP Address",
    dataIndex: "IPAddress",
    key: "IPAddress",
    sorter: {
      compare: (a, b) => {
        a = a.IpAddress.toLowerCase();
        b = b.IpAddress.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Reason",
    dataIndex: "Reason",
    key: "Reason",
    sorter: {
      compare: (a, b) => {
        a = a.Reason.toLowerCase();
        b = b.Reason.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Date",
    dataIndex: "Date",
    key: "Date",
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
    IPAddress: "211.11.0.25",
    Reason: "You can get on-demand services in order to find a nearby service.",
    Date: "12 Jul 2023",
  },
  {
    IPAddress: "211.03.0.11",
    Reason: "Extract pricing information at inventory levels.",
    Date: "24 Aug 2023",
  },
  {
    IPAddress: "211.24.0.17",
    Reason: "Fetching data for competitors to gain competitive advantage.",
    Date: "07 Sep 2023",
  },
  {
    IPAddress: "211.12.0.34",
    Reason: "Temporarily block to protect user accounts from internet fraudsters.",
    Date: "13 Oct 2023",
  },
];
import Swal from "sweetalert2";

export default {
  data() {
    return {
      filter: false,
      BanSort: ["Sort by Date", "Newest", "Oldest"],
      Ipsort: ["Choose IP", "211.11.0.25", "211.03.0.11"],
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
  toggleCollapse() {
    const collapseHeader = this.$refs.collapseHeader;

    if (collapseHeader) {
      collapseHeader.classList.toggle("active");
      document.body.classList.toggle("header-collapse");
    }
  },
};
</script>
