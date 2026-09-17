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
                <h4>Tax Rates</h4>
              </div>
              <div class="page-header bank-settings justify-content-end">
                <div class="page-btn">
                  <a
                    href="javascript:void(0);"
                    class="btn btn-added"
                    data-bs-toggle="modal"
                    data-bs-target="#add-tax"
                    ><vue-feather type="plus-circle" class="me-2"></vue-feather>Add New
                    Tax Rate</a
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
                      </div>
                      <div class="table-responsive">
                        <a-table
                          class="table datanew"
                          :columns="columns"
                          :data-source="data"
                          :row-selection="{}"
                        >
                          <template #bodyCell="{ column, record }">
                            <template v-if="column.key === 'Name'">
                              <div>{{ record.Name }}</div>
                            </template>
                            <template v-else-if="column.key === 'action'">
                              <td class="action-table-data justify-content-end">
                                <div class="edit-delete-action">
                                  <a
                                    class="me-2 p-2"
                                    href="javascript:void(0);"
                                    data-bs-toggle="modal"
                                    data-bs-target="#edit-tax"
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
  <tax-rates-modal></tax-rates-modal>
</template>
<script>
const columns = [
  {
    title: "Name",
    dataIndex: "Name",
    key: "Name",
    sorter: {
      compare: (a, b) => {
        a = a.Name.toLowerCase();
        b = b.Name.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Tax Rates%",
    dataIndex: "TaxRates",
    sorter: {
      compare: (a, b) => {
        a = a.TaxRates.toLowerCase();
        b = b.TaxRates.toLowerCase();
        return a > b ? -1 : b > a ? 1 : 0;
      },
    },
  },
  {
    title: "Created On",
    dataIndex: "CreatedOn",
    key: "CreatedOn",
    sorter: {
      compare: (a, b) => {
        a = a.CreatedOn.toLowerCase();
        b = b.CreatedOn.toLowerCase();
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
    Name: "VAT",
    TaxRates: "16",
    CreatedOn: "12 Jul 2023",
  },
  {
    Name: "TGST",
    TaxRates: "14",
    CreatedOn: "17 Jul 2023",
  },
  {
    Name: "HST",
    TaxRates: "12",
    CreatedOn: "23 Jul 2023",
  },
];
import Swal from "sweetalert2";

export default {
  data() {
    return {
      filter: false,
      BankSort: ["Sort by Date", "Newest", "Oldest"],
      BankChooseBank: ["Choose Bank", "HDFC", "Swiss Bank", "Canara Bank"],
      BankChoose: ["Choose Name", "Mathew", "John Smith", "Andrew"],
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
