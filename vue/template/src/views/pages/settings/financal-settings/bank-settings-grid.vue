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
                <h4>Bank Account</h4>
              </div>
              <div class="page-header bank-settings justify-content-end">
                <router-link to="bank-settings-list" class="btn-list me-2"
                  ><vue-feather type="list" class="list"></vue-feather
                ></router-link>
                <router-link to="bank-settings-grid" class="btn-grid active"
                  ><vue-feather type="grid" class="grid"></vue-feather
                ></router-link>
                <div class="page-btn">
                  <a
                    href="javascript:void(0);"
                    class="btn btn-added"
                    data-bs-toggle="modal"
                    data-bs-target="#add-account"
                    ><vue-feather type="plus-circle" class="me-2"></vue-feather>Add New
                    Account</a
                  >
                </div>
              </div>
              <div class="row">
                <div
                  v-for="(bank, index) in banks"
                  :key="index"
                  class="col-xxl-4 col-xl-6 col-lg-12 col-sm-6"
                >
                  <div
                    :class="{ 'bank-box': true, active: bank.active }"
                    @click="makeActive(index)"
                  >
                    <div class="bank-header">
                      <div class="bank-name">
                        <h6>{{ bank.name }}</h6>
                        <p>{{ bank.cardNumber }}</p>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="bank-info">
                        <span>Holder Name</span>
                        <h6>{{ bank.holderName }}</h6>
                      </div>
                      <div class="edit-delete-action bank-action-btn">
                        <a
                          class="me-2 p-2"
                          href="javascript:void(0);"
                          data-bs-toggle="modal"
                          data-bs-target="#edit-account"
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
  <bank-settings-grid-modal></bank-settings-grid-modal>
</template>
<script>
import Swal from "sweetalert2";

export default {
  data() {
    return {
      banks: [
        {
          name: "Karur vysya bank",
          cardNumber: "**** **** 1982",
          holderName: "John Smith",
          active: true,
        },
        {
          name: "Swiss Bank",
          cardNumber: "**** **** 1796",
          holderName: "Andrew",
          active: false,
        },
        {
          name: "HDFC",
          cardNumber: "**** **** 1832",
          holderName: "Mathew",
          active: false,
        },
      ],
    };
  },
  methods: {
    makeActive(index) {
      this.banks.forEach((bank, i) => {
        bank.active = i === index;
      });
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
