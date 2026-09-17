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
                  <h4>Localization</h4>
                </div>
                <div class="company-info company-images">
                  <div class="card-title-head">
                    <h6>
                      <span><vue-feather type="list"></vue-feather></span>Basic
                      Information
                    </h6>
                  </div>
                  <div class="localization-info">
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <div class="setting-info">
                          <h6>Language</h6>
                          <p>Select Language of the Website</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="localization-select">
                          <vue-select
                            :options="LanSetting"
                            id="lansetting"
                            placeholder="English"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <div class="setting-info">
                          <h6>Language Switcher</h6>
                          <p>To display in all the pages</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="localization-select">
                          <div
                            class="status-toggle modal-status d-flex justify-content-between align-items-center"
                          >
                            <input type="checkbox" id="user3" class="check" checked />
                            <label for="user3" class="checktoggle"></label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <div class="setting-info">
                          <h6>Timezone</h6>
                          <p>Select Time zone in website</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="localization-select">
                          <vue-select
                            :options="TimeSet"
                            id="timeset"
                            placeholder="UTC 5:30"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <div class="setting-info">
                          <h6>Date format</h6>
                          <p>Select date format to display in website</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="localization-select">
                          <vue-select
                            :options="Dateset"
                            id="dateset"
                            placeholder="22 Jul 2023"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <div class="setting-info">
                          <h6>Time Format</h6>
                          <p>Select time format to display in website</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="localization-select">
                          <vue-select
                            :options="Hourset"
                            id="houret"
                            placeholder="12 Hours"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <div class="setting-info">
                          <h6>Financial Year</h6>
                          <p>Select year for finance</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="localization-select">
                          <vue-select :options="Yearset" id="yearet" placeholder="2023" />
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <div class="setting-info">
                          <h6>Starting Month</h6>
                          <p>Select starting month to display</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="localization-select">
                          <vue-select
                            :options="Monthset"
                            id="monthset"
                            placeholder="January"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="company-info company-images">
                  <div class="card-title-head">
                    <h6>
                      <span><vue-feather type="credit-card"></vue-feather></span>Currency
                      Settings
                    </h6>
                  </div>
                  <div class="localization-info">
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <div class="setting-info">
                          <h6>Currency</h6>
                          <p>Select currency</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="localization-select">
                          <vue-select
                            :options="Americaset"
                            id="americaset"
                            placeholder="United Stated of America"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <div class="setting-info">
                          <h6>Currency Symbol</h6>
                          <p>Select currency symbol</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="localization-select">
                          <vue-select
                            :options="Amountset"
                            id="amountset"
                            placeholder="$"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <div class="setting-info">
                          <h6>Currency Position</h6>
                          <p>Select currency position</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="localization-select">
                          <vue-select
                            :options="Priceset"
                            id="priceset"
                            placeholder="$100"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <div class="setting-info">
                          <h6>Decimal Separator</h6>
                          <p>Select decimal</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="localization-select">
                          <vue-select :options="Dotset" id="dotset" placeholder="." />
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <div class="setting-info">
                          <h6>Thousand Separator</h6>
                          <p>Select thousand</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="localization-select">
                          <vue-select :options="Set" id="set" placeholder="," />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="company-info company-images">
                  <div class="card-title-head">
                    <h6>
                      <span><vue-feather type="map"></vue-feather></span>Country Settings
                    </h6>
                  </div>
                  <div class="localization-info">
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <div class="setting-info">
                          <h6>Countries Restriction</h6>
                          <p>Select country</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="localization-select">
                          <vue-select
                            :options="Allset"
                            id="allset"
                            placeholder="Allow All Countries"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="company-images">
                  <div class="card-title-head">
                    <h6>
                      <span><vue-feather type="map"></vue-feather></span>File Settings
                    </h6>
                  </div>
                  <div class="localization-info">
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <div class="setting-info">
                          <h6>Allowed Files</h6>
                          <p>Select files</p>
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-8 col-sm-4">
                        <div class="localization-select w-100">
                          <div class="input-blocks">
                            <vue3-tags-input
                              class="input-tags form-control"
                              type="text"
                              data-role="tagsinput"
                              name="inputBox"
                              id="inputBox"
                              :tags="tags"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-sm-4">
                        <div class="setting-info mb-sm-0">
                          <h6>Max File Size</h6>
                          <p>File size</p>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="localization-select d-flex align-items-center mb-0">
                          <input type="text" class="form-control" value="5000" />
                          <span class="ms-2"> MB</span>
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
import Vue3TagsInput from "vue3-tags-input";
export default {
  components: {
    Vue3TagsInput,
  },
  data() {
    return {
      Allset: ["Allow All Countries", "Deny All Countries"],
      Set: [",", ","],
      Dotset: [".", "."],
      Priceset: ["$100", "$400"],
      Amountset: ["$", "€", "¥"],
      Americaset: ["United Stated of America", "India"],
      Monthset: ["January", "February", "March"],
      Yearset: ["2023", "2022"],
      Hourset: ["12 Hours", "24 Hours"],
      Dateset: ["22 Jul 2023", "Jul 22 2023"],
      TimeSet: ["UTC 5:30", "(UTC+11:00) INR"],
      LanSetting: ["English", "Spanish"],
      tags: ["JPG", "GIF", "PNG"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/settings/localization-settings");
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
