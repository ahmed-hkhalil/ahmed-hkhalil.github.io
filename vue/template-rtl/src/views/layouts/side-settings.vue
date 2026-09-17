<template>
  <div class="customizer-links" id="setdata">
    <ul class="sticky-sidebar">
      <li class="sidebar-icons">
        <a
          href="javascript:void(0);"
          class="navigation-add"
          data-bs-toggle="tooltip"
          data-bs-placement="left"
          data-bs-original-title="Theme"
          @click="toggleClass()"
        >
          <vue-feather type="settings" class="settings"></vue-feather>
        </a>
      </li>
    </ul>
  </div>
  <div
    :class="{
      'sidebar-settings': true,
      'nav-toggle': true,
      'show-settings': showPreview,
    }"
    @click="hidePreview"
  >
    <div class="sidebar-content sticky-sidebar-one" id="sect">
      <div class="sidebar-header">
        <div class="sidebar-theme-title">
          <h5>Theme Customizer</h5>
          <p>Customize & Preview in Real Time</p>
        </div>
        <div class="close-sidebar-icon d-flex">
          <a class="sidebar-refresh me-2" href="javascript:void(0);"
            ><vue-feather type="refresh-ccw"></vue-feather
          ></a>
          <a class="sidebar-close" href="javascript:void(0);" @click="closeSidebar"
            ><vue-feather type="x"></vue-feather
          ></a>
        </div>
      </div>
      <form action="javascript:;" method="post">
        <div class="sidebar-body">
          <div class="theme-mode">
            <div class="theme-head">
              <h6>Theme Mode</h6>
              <p>Enjoy Dark & Light modes.</p>
            </div>
            <div class="row">
              <div class="col-xl-6 ere">
                <div class="layout-wrap">
                  <div class="d-flex align-items-center">
                    <div class="status-toggle d-flex align-items-center me-2">
                      <input
                        type="radio"
                        name="theme-mode"
                        id="light_mode"
                        class="check color-check stylemode alldata"
                        value="light_mode"
                      />
                      <label for="light_mode" class="checktoggles">
                        <img src="@/assets/img/theme/theme-img-01.jpg" alt="" />
                        <span class="theme-name">Light Mode</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 ere">
                <div class="layout-wrap">
                  <div class="d-flex align-items-center">
                    <div class="status-toggle d-flex align-items-center me-2">
                      <input
                        type="radio"
                        name="theme-mode"
                        id="dark_mode"
                        class="check color-check stylemode alldata"
                        value="dark_mode"
                      />
                      <label for="dark_mode" class="checktoggles">
                        <img src="@/assets/img/theme/theme-img-02.jpg" alt="" />
                        <span class="theme-name">Dark Mode</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="theme-mode">
            <div class="theme-head">
              <h6>Direction</h6>
              <p>Select the direction for your app.</p>
            </div>
            <div class="row">
              <div class="col-xl-6 ere">
                <div class="layout-wrap">
                  <div class="d-flex align-items-center">
                    <div class="status-toggle d-flex align-items-center me-2">
                      <input
                        type="radio"
                        name="direction"
                        id="ltr"
                        class="check direction"
                        value="ltr"
                      />
                      <label for="ltr" class="checktoggles">
                        <a
                          href="https://dreamspos.dreamstechnologies.com/vuejs/template/"
                          target="_blank"
                        >
                          <img src="@/assets/img/theme/theme-img-01.jpg" alt="" />
                          <span class="theme-name">LTR</span>
                        </a>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 ere">
                <div class="layout-wrap">
                  <div class="d-flex align-items-center">
                    <div class="status-toggle d-flex align-items-center me-2">
                      <input
                        type="radio"
                        name="direction"
                        id="rtl"
                        class="check direction"
                        value="rtl"
                      />
                      <label for="rtl" class="checktoggles">
                        <a
                          href="https://dreamspos.dreamstechnologies.com/vuejs/template-rtl/"
                          target="_blank"
                        >
                          <img src="@/assets/img/theme/theme-img-03.jpg" alt="" />
                          <span class="theme-name">RTL</span>
                        </a>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="theme-mode border-0 mb-0">
            <div class="theme-head">
              <h6>Layout Mode</h6>
              <p>Select the primary layout style for your app.</p>
            </div>
            <div class="row">
              <div class="col-xl-6 ere">
                <div class="layout-wrap">
                  <div class="d-flex align-items-center">
                    <div class="status-toggle d-flex align-items-center me-2">
                      <input
                        type="radio"
                        name="layout"
                        id="default_layout"
                        class="check layout-mode alldata"
                        value="default"
                      />
                      <label for="default_layout" class="checktoggles">
                        <img src="@/assets/img/theme/theme-img-01.jpg" alt="" />
                        <span class="theme-name">Default</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 ere">
                <div class="layout-wrap">
                  <div class="d-flex align-items-center">
                    <div class="status-toggle d-flex align-items-center me-2">
                      <input
                        type="radio"
                        name="layout"
                        id="box_layout"
                        class="check layout-mode alldata"
                        value="box"
                      />
                      <label for="box_layout" class="checktoggles">
                        <img src="@/assets/img/theme/theme-img-07.jpg" alt="" />
                        <span class="theme-name">Box</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 ere">
                <div class="layout-wrap">
                  <div class="d-flex align-items-center">
                    <div class="status-toggle d-flex align-items-center me-2">
                      <input
                        type="radio"
                        name="layout"
                        id="collapse_layout"
                        class="check layout-mode alldata"
                        value="collapsed"
                      />
                      <label for="collapse_layout" class="checktoggles">
                        <img src="@/assets/img/theme/theme-img-05.jpg" alt="" />
                        <span class="theme-name">Collapsed</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 ere">
                <div class="layout-wrap">
                  <div class="d-flex align-items-center">
                    <div class="status-toggle d-flex align-items-center me-2">
                      <input
                        type="radio"
                        name="layout"
                        id="horizontal_layout"
                        class="check layout-mode alldata"
                        value="horizontal"
                      />
                      <label for="horizontal_layout" class="checktoggles">
                        <img src="@/assets/img/theme/theme-img-06.jpg" alt="" />
                        <span class="theme-name">Horizontal</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 ere">
                <div class="layout-wrap">
                  <div class="d-flex align-items-center">
                    <div class="status-toggle d-flex align-items-center me-2">
                      <input
                        type="radio"
                        name="layout"
                        id="modern_layout"
                        class="check layout-mode alldata"
                        value="modern"
                      />
                      <label for="modern_layout" class="checktoggles">
                        <img src="@/assets/img/theme/theme-img-04.jpg" alt="" />
                        <span class="theme-name">Modern</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="theme-mode">
            <div class="theme-head">
              <h6>Navigation Colors</h6>
              <p>Setup the color for the Navigation</p>
            </div>
            <div class="row">
              <div class="col-xl-4 ere">
                <div class="layout-wrap">
                  <div class="d-flex align-items-center">
                    <div class="status-toggle d-flex align-items-center me-2">
                      <input
                        type="radio"
                        name="nav_color"
                        id="light_color"
                        class="check nav-color alldata"
                        value="light"
                      />
                      <label for="light_color" class="checktoggles">
                        <span class="theme-name">Light</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 ere">
                <div class="layout-wrap">
                  <div class="d-flex align-items-center">
                    <div class="status-toggle d-flex align-items-center me-2">
                      <input
                        type="radio"
                        name="nav_color"
                        id="grey_color"
                        class="check nav-color alldata"
                        value="grey"
                      />
                      <label for="grey_color" class="checktoggles">
                        <span class="theme-name">Grey</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 ere">
                <div class="layout-wrap">
                  <div class="d-flex align-items-center">
                    <div class="status-toggle d-flex align-items-center me-2">
                      <input
                        type="radio"
                        name="nav_color"
                        id="dark_color"
                        class="check nav-color alldata"
                        value="dark"
                      />
                      <label for="dark_color" class="checktoggles">
                        <span class="theme-name">Dark</span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sidebar-footer">
          <div class="row">
            <div class="col-xl-6">
              <div class="footer-preview-btn">
                <button @click="resetData" type="button" class="btn btn-secondary w-100">
                  Reset
                </button>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="footer-reset-btn">
                <a
                  href="https://themeforest.net/item/dreamspos-pos-inventory-management-admin-dashboard-template/38834413"
                  target="_blank"
                  class="btn btn-primary w-100"
                  >Buy Now</a
                >
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      showPreview: false,
    };
  },
  methods: {
    hidePreview() {
      this.showPreview = false;
    },
    toggleClass() {
      this.showPreview = !this.showPreview;
    },
    closeSidebar() {
      this.showPreview = false;
    },
    resetData() {
      document.getElementById("light_mode").checked = true;
      document.getElementById("default_layout").checked = true;
      document.getElementById("light_color").checked = true;
      document.body.style.overflow = "auto"; // Show the scrollbar
      const htmlElment = document.getElementsByTagName("html")[0];
      localStorage.setItem("selectedLayoutValues", "default");
      localStorage.setItem("selectedColorValue", "light_mode");
      localStorage.setItem("selectedNavcolorValue", "light");
      htmlElment.setAttribute("data-layout-mode", "light_mode");
      htmlElment.setAttribute("data-layout-style", "default");
      htmlElment.setAttribute("data-nav-color", "light");
    },
  },
  mounted() {
    // Retrieve the selected radio button value from localStorage, if available
    // Theme Color
    const themeColor = localStorage.getItem("selectedColorValue");
    const themeColorHtmlElement = document.getElementsByTagName("html")[0];
    themeColorHtmlElement.setAttribute("data-layout-mode", "light_mode");

    if (themeColor) {
      let themeColorElement;
      const inputElements = document.getElementsByTagName("input");
      for (let i = 0; i < inputElements.length; i++) {
        if (inputElements[i].type === "radio" && inputElements[i].value === themeColor) {
          themeColorElement = inputElements[i];
          break;
        }
      }

      const themeColorHtmlElement = document.getElementsByTagName("html")[0];

      themeColorHtmlElement.setAttribute("data-layout-mode", themeColor);
      if (themeColorElement) {
        themeColorElement.checked = true;
      }
    }

    // Add an event listener to the radio buttons to store the selected value in localStorage
    const colorButtons = document.getElementsByTagName("input");
    for (let i = 0; i < colorButtons.length; i++) {
      if (
        colorButtons[i].type === "radio" &&
        colorButtons[i].classList.contains("color-check")
      ) {
        colorButtons[i].addEventListener("change", (event) => {
          const selectedColor = event.target.value;
          localStorage.setItem("selectedColorValue", selectedColor);
          if (selectedColor) {
            // Find the HTML element by its id
            const themeColorHtmlElement = document.getElementsByTagName("html")[0];

            themeColorHtmlElement.setAttribute("data-layout-mode", selectedColor);
          }
        });
      }
    }

    // Retrieve the selected radio button value from localStorage, if available
    // Data Layout
    const dataLayout = localStorage.getItem("selectedLayoutValues");
    const dataLayoutHtmlElement = document.getElementsByTagName("html")[0];
    dataLayoutHtmlElement.setAttribute("data-layout-style", "default");

    if (dataLayout) {
      let dataLayoutElement;
      const inputElements = document.getElementsByTagName("input");
      for (let i = 0; i < inputElements.length; i++) {
        if (inputElements[i].type === "radio" && inputElements[i].value === dataLayout) {
          dataLayoutElement = inputElements[i];
          break;
        }
      }

      const dataLayoutHtmlElement = document.getElementsByTagName("html")[0];

      dataLayoutHtmlElement.setAttribute("data-layout-style", dataLayout);
      if (dataLayoutElement) {
        dataLayoutElement.checked = true;
      }
    }

    // Add an event listener to the radio buttons to store the selected value in localStorage
    const layoutButtons = document.getElementsByTagName("input");
    for (let i = 0; i < layoutButtons.length; i++) {
      if (
        layoutButtons[i].type === "radio" &&
        layoutButtons[i].classList.contains("layout-mode")
      ) {
        layoutButtons[i].addEventListener("change", (event) => {
          const selectedValues = event.target.value;
          localStorage.setItem("selectedLayoutValues", selectedValues);
          if (selectedValues) {
            // Find the HTML element by its id
            const themeColorHtmlElement = document.getElementsByTagName("html")[0];

            themeColorHtmlElement.setAttribute("data-layout-style", selectedValues);
          }
        });
      }
    }

    // Retrieve the selected radio button value from localStorage, if available
    // Nav Color
    const navigationColor = localStorage.getItem("selectedNavcolorValue");
    const navigationColorHtmlElement = document.getElementsByTagName("html")[0];
    navigationColorHtmlElement.setAttribute("data-nav-color", "light");

    if (navigationColor) {
      let navigationColorElement;
      const inputElements = document.getElementsByTagName("input");
      for (let i = 0; i < inputElements.length; i++) {
        if (
          inputElements[i].type === "radio" &&
          inputElements[i].value === navigationColor
        ) {
          navigationColorElement = inputElements[i];
          break;
        }
      }

      const navigationColorHtmlElement = document.getElementsByTagName("html")[0];

      navigationColorHtmlElement.setAttribute("data-nav-color", navigationColor);
      if (navigationColorElement) {
        navigationColorElement.checked = true;
      }
    }

    // Add an event listener to the radio buttons to store the selected value in localStorage
    const navcolorButtons = document.getElementsByTagName("input");
    for (let i = 0; i < navcolorButtons.length; i++) {
      if (
        navcolorButtons[i].type === "radio" &&
        navcolorButtons[i].classList.contains("nav-color")
      ) {
        navcolorButtons[i].addEventListener("change", (event) => {
          const selectedNavcolor = event.target.value;
          localStorage.setItem("selectedNavcolorValue", selectedNavcolor);
          if (selectedNavcolor) {
            // Find the HTML element by its id
            const navigationColorHtmlElement = document.getElementsByTagName("html")[0];

            navigationColorHtmlElement.setAttribute("data-nav-color", selectedNavcolor);
          }
        });
      }
    }

    let enableFirstFunction = true;

    function toggleClassDetail() {
      var mainLayout = document.getElementById("layoutDiv");

      if (mainLayout) {
        if (enableFirstFunction) {
          mainLayout.classList.add("show-settings");
          document.body.style.overflow = "auto"; // Show the scrollbar
        } else {
          mainLayout.classList.remove("show-settings");
          document.body.style.overflow = "auto"; // Show the scrollbar
        }
        enableFirstFunction = !enableFirstFunction;
      }
    }

    var darkModeLayout = document.getElementById("dark_mode");
    var lightModeLayout = document.getElementById("light_mode");
    // eslint-disable-next-line no-unused-vars
    var boxModeLayout = document.getElementById("box_layout");
    if (darkModeLayout) {
      darkModeLayout.addEventListener("click", toggleClassDetail);
    } else if (lightModeLayout) {
      lightModeLayout.addEventListener("click", toggleClassDetail);
    }
  },
};
</script>
