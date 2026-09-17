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
              <div class="row social-authent-settings">
                <div class="col-xxl-4 col-xl-6 col-lg-12 col-md-6 d-flex">
                  <div class="connected-app-card d-flex w-100">
                    <ul class="w-100">
                      <li class="flex-column align-items-start">
                        <div
                          class="d-flex align-items-center justify-content-between w-100"
                        >
                          <div class="security-type d-flex align-items-center">
                            <span class="system-app-icon">
                              <img src="@/assets/img/icons/fb-icon.svg" alt="" />
                            </span>
                            <div class="security-title">
                              <h5>Facebook</h5>
                            </div>
                          </div>
                          <div class="connect-btn">
                            <a href="javascript:void(0);">Connected</a>
                          </div>
                        </div>
                        <p>Connect with friends, family and other people you know.</p>
                      </li>
                      <li>
                        <div class="integration-btn">
                          <a
                            href="javascript:void(0);"
                            data-bs-toggle="modal"
                            data-bs-target="#fb-connect"
                            ><vue-feather type="tool" class="me-2"></vue-feather>View
                            Integration</a
                          >
                        </div>
                        <div
                          class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2"
                        >
                          <input type="checkbox" id="user1" class="check" checked />
                          <label for="user1" class="checktoggle"> </label>
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
                              <img src="@/assets/img/icons/twitter-icon.svg" alt="" />
                            </span>
                            <div class="security-title">
                              <h5>Twitter</h5>
                            </div>
                          </div>
                          <div class="connect-btn not-connect">
                            <a href="javascript:void(0);">Not connected</a>
                          </div>
                        </div>
                        <p>
                          Communicate and stay connected through the exchange of quick,
                          frequent messages
                        </p>
                      </li>
                      <li>
                        <div class="integration-btn">
                          <a
                            href="javascript:void(0);"
                            data-bs-toggle="modal"
                            data-bs-target="#twitter-connect"
                            ><vue-feather type="tool" class="me-2"></vue-feather>Connect
                            Now</a
                          >
                        </div>
                        <div
                          class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2"
                        >
                          <input type="checkbox" id="user2" class="check" checked />
                          <label for="user2" class="checktoggle"> </label>
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
                              <img src="@/assets/img/icons/google-icon.svg" alt="" />
                            </span>
                            <div class="security-title">
                              <h5>Google</h5>
                            </div>
                          </div>
                          <div class="connect-btn not-connect">
                            <a href="javascript:void(0);">Not connected</a>
                          </div>
                        </div>
                        <p>
                          Google has many special features to help you find exactly what
                          you're looking for.
                        </p>
                      </li>
                      <li>
                        <div class="integration-btn">
                          <a
                            href="javascript:void(0);"
                            data-bs-toggle="modal"
                            data-bs-target="#google-connect"
                            ><vue-feather type="tool" class="me-2"></vue-feather>Connect
                            Now</a
                          >
                        </div>
                        <div
                          class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2"
                        >
                          <input type="checkbox" id="user3" class="check" checked />
                          <label for="user3" class="checktoggle"> </label>
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
                              <img src="@/assets/img/icons/linkedin-icon.svg" alt="" />
                            </span>
                            <div class="security-title">
                              <h5>Linkedin</h5>
                            </div>
                          </div>
                          <div class="connect-btn">
                            <a href="javascript:void(0);">Connected</a>
                          </div>
                        </div>
                        <p>
                          Network with people and professional organizations in your
                          industry.
                        </p>
                      </li>
                      <li>
                        <div class="integration-btn">
                          <a
                            href="javascript:void(0);"
                            data-bs-toggle="modal"
                            data-bs-target="#linkedin-connect"
                            ><vue-feather type="tool" class="me-2"></vue-feather>View
                            Integration</a
                          >
                        </div>
                        <div
                          class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2"
                        >
                          <input type="checkbox" id="user4" class="check" checked />
                          <label for="user4" class="checktoggle"> </label>
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
  <social-modal></social-modal>
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
