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
            <div class="settings-page-wrap">
              <form @submit.prevent="submitForm">
                <div class="setting-title">
                  <h4>POS Settings</h4>
                </div>
                <div class="company-info border-0">
                  <div class="localization-info">
                    <div class="row align-items-center mb-sm-4">
                      <div class="col-sm-4">
                        <div class="setting-info">
                          <h6>POS Printer</h6>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="localization-select">
                          <vue-select :options="Aselect" id="aselect" placeholder="A4" />
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center mb-sm-4">
                      <div class="col-sm-4">
                        <div class="setting-info">
                          <h6>Payment Method</h6>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div
                          class="localization-select pos-payment-method d-flex align-items-center mb-0 w-100"
                        >
                          <div class="custom-control custom-checkbox">
                            <label class="checkboxs mb-0 pb-0 line-height-1">
                              <input type="checkbox" />
                              <span class="checkmarks"></span>COD
                            </label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <label class="checkboxs mb-0 pb-0 line-height-1">
                              <input type="checkbox" />
                              <span class="checkmarks"></span>Cheque
                            </label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <label class="checkboxs mb-0 pb-0 line-height-1">
                              <input type="checkbox" />
                              <span class="checkmarks"></span>Card
                            </label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <label class="checkboxs mb-0 pb-0 line-height-1">
                              <input type="checkbox" />
                              <span class="checkmarks"></span>Paypal
                            </label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <label class="checkboxs mb-0 pb-0 line-height-1">
                              <input type="checkbox" />
                              <span class="checkmarks"></span>Bank Transfer
                            </label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <label class="checkboxs mb-0 pb-0 line-height-1">
                              <input type="checkbox" />
                              <span class="checkmarks"></span>Cash
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <div class="setting-info">
                          <h6>Enable Sound Effect</h6>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="localization-select d-flex align-items-center">
                          <div
                            class="status-toggle modal-status d-flex justify-content-between align-items-center me-3"
                          >
                            <input type="checkbox" id="user4" class="check" checked />
                            <label for="user4" class="checktoggle"></label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer-btn">
                  <button
                    type="button"
                    class="btn btn-cancel me-2"
                    data-bs-dismiss="modal"
                  >
                    Cancel
                  </button>
                  <button type="submit" class="btn btn-submit">Save Changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      Aselect: ["A4", "A5", "A6"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/settings/pos-settings");
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
