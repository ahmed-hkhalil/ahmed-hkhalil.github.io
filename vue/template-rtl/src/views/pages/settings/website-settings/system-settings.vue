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
              <div class="setting-title">
                <h4>System Settings</h4>
              </div>
              <div class="row">
                <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6 d-flex">
                  <div class="connected-app-card d-flex w-100">
                    <ul class="w-100">
                      <li class="flex-column align-items-start">
                        <div
                          class="d-flex align-items-center justify-content-between w-100"
                        >
                          <div class="security-type d-flex align-items-center">
                            <span class="system-app-icon">
                              <img src="@/assets/img/icons/app-icon-07.svg" alt="" />
                            </span>
                            <div class="security-title">
                              <h5>Google Captcha</h5>
                            </div>
                          </div>
                          <div
                            class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2"
                          >
                            <input type="checkbox" id="user1" class="check" checked />
                            <label for="user1" class="checktoggle"> </label>
                          </div>
                        </div>
                        <p>Captcha helps protect you from spam and password decryption</p>
                      </li>
                      <li>
                        <div class="integration-btn">
                          <a
                            href=""
                            data-bs-toggle="modal"
                            data-bs-target="#google-captcha"
                            ><vue-feather type="tool" class="me-2"></vue-feather>View
                            Integration</a
                          >
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6 d-flex">
                  <div class="connected-app-card d-flex w-100">
                    <ul class="w-100">
                      <li class="flex-column align-items-start">
                        <div
                          class="d-flex align-items-center justify-content-between w-100"
                        >
                          <div class="security-type d-flex align-items-center">
                            <span class="system-app-icon">
                              <img src="@/assets/img/icons/app-icon-08.svg" alt="" />
                            </span>
                            <div class="security-title">
                              <h5>Google Analytics</h5>
                            </div>
                          </div>
                          <div
                            class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2"
                          >
                            <input type="checkbox" id="user2" class="check" checked />
                            <label for="user2" class="checktoggle"> </label>
                          </div>
                        </div>
                        <p>
                          Provides statistics and basic analytical tools for SEO and
                          marketing purposes.
                        </p>
                      </li>
                      <li>
                        <div class="integration-btn">
                          <a
                            href=""
                            data-bs-toggle="modal"
                            data-bs-target="#google-analytics"
                            ><vue-feather type="tool" class="me-2"></vue-feather>View
                            Integration</a
                          >
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6 d-flex">
                  <div class="connected-app-card d-flex w-100">
                    <ul class="w-100">
                      <li class="flex-column align-items-start">
                        <div
                          class="d-flex align-items-center justify-content-between w-100"
                        >
                          <div class="security-type d-flex align-items-center">
                            <span class="system-app-icon">
                              <img src="@/assets/img/icons/app-icon-09.svg" alt="" />
                            </span>
                            <div class="security-title">
                              <h5>Google Adsense Code</h5>
                            </div>
                          </div>
                          <div
                            class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2"
                          >
                            <input type="checkbox" id="user3" class="check" checked />
                            <label for="user3" class="checktoggle"> </label>
                          </div>
                        </div>
                        <p>
                          Provides a way for publishers to earn money from their online
                          content.
                        </p>
                      </li>
                      <li>
                        <div class="integration-btn">
                          <a
                            href=""
                            data-bs-toggle="modal"
                            data-bs-target="#google-adsense"
                            ><vue-feather type="tool" class="me-2"></vue-feather>View
                            Integration</a
                          >
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6 d-flex">
                  <div class="connected-app-card d-flex w-100">
                    <ul class="w-100">
                      <li class="flex-column align-items-start">
                        <div
                          class="d-flex align-items-center justify-content-between w-100"
                        >
                          <div class="security-type d-flex align-items-center">
                            <span class="system-app-icon">
                              <img src="@/assets/img/icons/app-icon-10.svg" alt="" />
                            </span>
                            <div class="security-title">
                              <h5>Google Map</h5>
                            </div>
                          </div>
                          <div
                            class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2"
                          >
                            <input type="checkbox" id="user4" class="check" checked />
                            <label for="user4" class="checktoggle"> </label>
                          </div>
                        </div>
                        <p>
                          Provides detailed information about geographical regions and
                          sites worldwide.
                        </p>
                      </li>
                      <li>
                        <div class="integration-btn">
                          <a href="" data-bs-toggle="modal" data-bs-target="#google-map"
                            ><vue-feather type="tool" class="me-2"></vue-feather>View
                            Integration</a
                          >
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <system-settings-modal></system-settings-modal>
</template>
<script>
export default {
  data() {
    return {};
  },
  methods: {
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
