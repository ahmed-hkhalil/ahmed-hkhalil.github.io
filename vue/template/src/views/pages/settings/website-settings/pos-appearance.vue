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
                <h4>Appearance</h4>
              </div>
              <div class="appearance-settings">
                <div class="row">
                  <div class="col-xl-4 col-lg-12 col-md-4">
                    <div class="setting-info mb-4">
                      <h6>Select Theme</h6>
                      <p>Choose accent colour of website</p>
                    </div>
                  </div>
                  <div class="col-xl-8 col-lg-12 col-md-8">
                    <div class="theme-type-images d-flex align-items-center mb-4">
                      <div
                        v-for="(image, index) in themeImages"
                        :key="index"
                        class="theme-image"
                        @click="selectTheme(index)"
                        :class="{ active: selectedThemeIndex === index }"
                      >
                        <div class="theme-image-set">
                          <img :src="require(`@/assets/img/theme/${image.src}`)" alt="" />
                        </div>
                        <span>{{ image.label }}</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-4 col-lg-12 col-md-4">
                    <div class="setting-info mb-4">
                      <h6>Accent Color</h6>
                      <p>Choose accent colour of website</p>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-12 col-md-4">
                    <div class="theme-colors mb-4">
                      <ul>
                        <li v-for="(color, index) in themeColors" :key="index">
                          <span
                            :class="generateClass(color)"
                            @click="setActiveColor(index)"
                          ></span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-4 col-lg-12 col-md-4">
                    <div class="setting-info mb-4">
                      <h6>Expand Sidebar</h6>
                      <p>Choose accent colour of website</p>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-12 col-md-4">
                    <div
                      class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2"
                    >
                      <input type="checkbox" id="user1" class="check" checked />
                      <label for="user1" class="checktoggle"> </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-4 col-lg-12 col-md-4">
                    <div class="setting-info mb-4">
                      <h6>Sidebar Size</h6>
                      <p>Select size of the sidebar to display</p>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-12 col-md-4">
                    <div class="localization-select">
                      <vue-select
                        :options="AppearanceSelect"
                        id="appearanceselect"
                        placeholder="Small - 85px"
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xl-4 col-lg-12 col-md-4">
                    <div class="setting-info mb-4">
                      <h6>Font Family</h6>
                      <p>Select font family of website</p>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-12 col-md-4">
                    <div class="localization-select">
                      <vue-select :options="AppNu" id="appnu" placeholder="Nunito" />
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
</template>
<script>
export default {
  data() {
    return {
      AppNu: ["Nunito", "Poppins"],
      AppearanceSelect: ["Small - 85px", "Large - 250px"],
      themeImages: [
        { src: "theme-img-08.jpg", label: "Light" },
        { src: "theme-img-09.jpg", label: "Dark" },
        { src: "theme-img-10.jpg", label: "Automatic" },
      ],
      selectedThemeIndex: null,
      themeColors: [
        { name: "themecolorset defaultcolor", isActive: true },
        { name: "themecolorset theme-violet", isActive: false },
        { name: "themecolorset theme-blue", isActive: false },
        { name: "themecolorset theme-brown", isActive: false },
      ],
    };
  },
  methods: {
    selectTheme(index) {
      this.selectedThemeIndex = index;
    },
    setActiveColor(index) {
      // Reset isActive for all themeColors
      this.themeColors.forEach((color, i) => {
        color.isActive = i === index;
      });

      // Set the activeTheme to the name of the clicked color
      this.activeTheme = this.themeColors[index].name;
    },
    generateClass(color) {
      return color.name + (color.isActive ? " active" : "");
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
