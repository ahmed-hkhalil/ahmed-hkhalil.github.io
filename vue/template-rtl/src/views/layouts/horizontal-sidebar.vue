<template>
  <div class="sidebar horizontal-sidebar">
    <div id="sidebar-menu-3" class="sidebar-menu">
      <ul class="nav">
        <li class="submenu">
          <a
            href="#sidebarDashboardOne"
            data-bs-toggle="collapse"
            role="button"
            aria-expanded="false"
            aria-controls="sidebarDashboardOne"
            :class="[
              isDashboardOneMenu ? 'active' : 'notactive',
              { subdrop: isDashboardOneMenuOpen },
            ]"
            v-on:click="isDashboardOneMenuOpen = !isDashboardOneMenuOpen"
          >
            <vue-feather type="grid"></vue-feather> <span>Main Menu</span>
            <span class="menu-arrow"></span>
          </a>
          <ul class="collapse menu-dropdown" id="sidebarDashboardOne">
            <li class="submenu">
              <a
                href="#sidebarDashboard"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarDashboard"
                :class="[
                  isDashboardMenu ? 'active' : 'notactive',
                  { subdrop: isDashboardMenuOpen },
                ]"
                v-on:click="isDashboardMenuOpen = !isDashboardMenuOpen"
              >
                <span>Dashboard</span>
                <span class="menu-arrow"></span>
              </a>
              <ul class="collapse menu-dropdown" id="sidebarDashboard">
                <li>
                  <router-link
                    :class="
                      currentPath == '/dashboard/admin-dashboard' ? 'active' : 'notactive'
                    "
                    to="/dashboard/admin-dashboard"
                    >Admin Dashboard</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/dashboard/sales-dashboard' ? 'active' : 'notactive'
                    "
                    to="/dashboard/sales-dashboard"
                    >Sales Dashboard</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarApplication"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarApplication"
                :class="[
                  isApplicationMenu ? 'active' : 'notactive',
                  { subdrop: isApplicationMenuOpen },
                ]"
                v-on:click="isApplicationMenuOpen = !isApplicationMenuOpen"
              >
                <span>Application</span>
                <span class="menu-arrow"></span>
              </a>
              <ul class="collapse menu-dropdown" id="sidebarApplication">
                <li><router-link to="/application/chat">Chat</router-link></li>
                <li class="submenu submenu-two">
                  <a href="javascript:void(0);">
                    <span>Call</span>
                    <span class="menu-arrow inside-submenu"></span>
                  </a>
                  <ul>
                    <li>
                      <router-link
                        :class="
                          currentPath == '/call/video-call' ? 'active' : 'notactive'
                        "
                        to="/call/video-call"
                        >Video Call</router-link
                      >
                    </li>
                    <li>
                      <router-link
                        :class="
                          currentPath == '/call/audio-call' ? 'active' : 'notactive'
                        "
                        to="/call/audio-call"
                        >Audio Call</router-link
                      >
                    </li>
                    <li>
                      <router-link
                        :class="
                          currentPath == '/call/call-history' ? 'active' : 'notactive'
                        "
                        to="/call/call-history"
                        >Call History</router-link
                      >
                    </li>
                  </ul>
                </li>
                <!-- Other menu items -->
              </ul>
            </li>
          </ul>
        </li>
        <li class="submenu">
          <a
            href="#sidebarInventory"
            data-bs-toggle="collapse"
            role="button"
            aria-expanded="false"
            aria-controls="sidebarInventory"
            :class="[
              isInventoryMenu ? 'active' : 'notactive',
              { subdrop: isInventoryMenuOpen },
            ]"
            v-on:click="isInventoryMenuOpen = !isInventoryMenuOpen"
          >
            <img src="@/assets/img/icons/product.svg" alt="img" /><span> Inventory </span>
            <span class="menu-arrow"></span
          ></a>
          <ul class="collapse menu-dropdown" id="sidebarInventory">
            <li>
              <router-link
                :class="currentPath == '/inventory/product-list' ? 'active' : 'notactive'"
                to="/inventory/product-list"
                ><span>Products</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="currentPath == '/inventory/add-product' ? 'active' : 'notactive'"
                to="/inventory/add-product"
                ><span>Create Product</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="
                  currentPath == '/inventory/expired-products' ? 'active' : 'notactive'
                "
                to="/inventory/expired-products"
                ><span>Expired Products</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="currentPath == '/inventory/low-stocks' ? 'active' : 'notactive'"
                to="/inventory/low-stocks"
                ><span>Low Stocks</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="
                  currentPath == '/inventory/category-list' ? 'active' : 'notactive'
                "
                to="/inventory/category-list"
                ><span>Category</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="
                  currentPath == '/inventory/sub-categories' ? 'active' : 'notactive'
                "
                to="/inventory/sub-categories"
                ><span>Sub Category</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="currentPath == '/inventory/brand-list' ? 'active' : 'notactive'"
                to="/inventory/brand-list"
                ><span>Brands</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="currentPath == '/inventory/units' ? 'active' : 'notactive'"
                to="/inventory/units"
                ><span>Units</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="
                  currentPath == '/inventory/varriant-attributes' ? 'active' : 'notactive'
                "
                to="/inventory/varriant-attributes"
                ><span>Variant Attributes</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="currentPath == '/inventory/warranty' ? 'active' : 'notactive'"
                to="/inventory/warranty"
                ><span>Warranties</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="currentPath == '/inventory/barcode' ? 'active' : 'notactive'"
                to="/inventory/barcode"
                ><span>Print Barcode</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="currentPath == '/inventory/qrcode' ? 'active' : 'notactive'"
                to="/inventory/qrcode"
                ><span>Print QR Code</span></router-link
              >
            </li>
          </ul>
        </li>
        <li class="submenu">
          <a
            href="#sidebarSalesOne"
            data-bs-toggle="collapse"
            role="button"
            aria-expanded="false"
            aria-controls="sidebarSalesOne"
            :class="[
              isSalesOneMenu ? 'active' : 'notactive',
              { subdrop: isSalesOneMenuOpen },
            ]"
            v-on:click="isSalesOneMenuOpen = !isSalesOneMenuOpen"
          >
            <img src="@/assets/img/icons/purchase1.svg" alt="img" /><span
              >Sales &amp; Purchase</span
            >
            <span class="menu-arrow"></span
          ></a>
          <ul class="collapse menu-dropdown" id="sidebarSalesOne">
            <li class="submenu">
              <a
                href="#sidebarSales"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarSales"
                :class="[
                  isSalesMenu ? 'active' : 'notactive',
                  { subdrop: isSalesMenuOpen },
                ]"
                v-on:click="isSalesMenuOpen = !isSalesMenuOpen"
              >
                <span>Sales</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarSales">
                <li>
                  <router-link
                    :class="currentPath == '/sales/sales-list' ? 'active' : 'notactive'"
                    to="/sales/sales-list"
                    ><span>Sales</span></router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/sales/invoice-report' ? 'active' : 'notactive'
                    "
                    to="/sales/invoice-report"
                    ><span>Invoices</span></router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/sales/sales-returns' ? 'active' : 'notactive'
                    "
                    to="/sales/sales-returns"
                    ><span>Sales Return</span></router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/sales/quotation-list' ? 'active' : 'notactive'
                    "
                    to="/sales/quotation-list"
                    ><span>Quotation</span></router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/sales/pos' ? 'active' : 'notactive'"
                    to="/sales/pos"
                    ><span>POS</span></router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/coupons' ? 'active' : 'notactive'"
                    to="/coupons"
                    ><span>Coupons</span></router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarPurchase"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarPurchase"
                :class="[
                  isPurchaseMenu ? 'active' : 'notactive',
                  { subdrop: isPurchaseMenuOpen },
                ]"
                v-on:click="isPurchaseMenuOpen = !isPurchaseMenuOpen"
              >
                <span>Purchase</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarPurchase">
                <li>
                  <router-link
                    :class="
                      currentPath == '/purchases/purchase-list' ? 'active' : 'notactive'
                    "
                    to="/purchases/purchase-list"
                    ><span>Purchases</span></router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/purchases/purchase-order-report'
                        ? 'active'
                        : 'notactive'
                    "
                    to="/purchases/purchase-order-report"
                    ><span>Purchase Order</span></router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/purchases/purchase-returns'
                        ? 'active'
                        : 'notactive'
                    "
                    to="/purchases/purchase-returns"
                    ><span>Purchase Return</span></router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/stock/manage-stocks' ? 'active' : 'notactive'
                    "
                    to="/stock/manage-stocks"
                    ><span>Manage Stock</span></router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/stock/stock-adjustment' ? 'active' : 'notactive'
                    "
                    to="/stock/stock-adjustment"
                    ><span>Stock Adjustment</span></router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/stock/stock-transfer' ? 'active' : 'notactive'
                    "
                    to="/stock/stock-transfer"
                    ><span>Stock Transfer</span></router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarExpense"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarExpense"
                :class="[
                  isExpenseMenu ? 'active' : 'notactive',
                  { subdrop: isExpenseMenuOpen },
                ]"
                v-on:click="isExpenseMenuOpen = !isExpenseMenuOpen"
              >
                <span>Expenses</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarExpense">
                <li>
                  <router-link
                    :class="
                      currentPath == '/finance/expenses-list' ? 'active' : 'notactive'
                    "
                    to="/finance/expenses-list"
                    >Expenses</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/finance/expenses-category' ? 'active' : 'notactive'
                    "
                    to="/finance/expenses-category"
                    >Expense Category</router-link
                  >
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="submenu">
          <a
            href="#sidebarUsers"
            data-bs-toggle="collapse"
            role="button"
            aria-expanded="false"
            aria-controls="sidebarUsers"
            :class="[isUsersMenu ? 'active' : 'notactive', { subdrop: isUsersMenuOpen }]"
            v-on:click="isUsersMenuOpen = !isUsersMenuOpen"
          >
            <img src="@/assets/img/icons/users1.svg" alt="img" /><span
              >User Management</span
            >
            <span class="menu-arrow"></span
          ></a>
          <ul class="collapse menu-dropdown" id="sidebarUsers">
            <li class="submenu">
              <a
                href="#sidebarPeople"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarPeople"
                :class="[
                  isPeopleMenu ? 'active' : 'notactive',
                  { subdrop: isPeopleMenuOpen },
                ]"
                v-on:click="isPeopleMenuOpen = !isPeopleMenuOpen"
              >
                <span>People</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarPeople">
                <li>
                  <router-link
                    :class="currentPath == '/people/customers' ? 'active' : 'notactive'"
                    to="/people/customers"
                    ><span>Customers</span></router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/people/suppliers' ? 'active' : 'notactive'"
                    to="/people/suppliers"
                    ><span>Suppliers</span></router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/people/store-list' ? 'active' : 'notactive'"
                    to="/people/store-list"
                    ><span>Stores</span></router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/people/warehouse' ? 'active' : 'notactive'"
                    to="/people/warehouse"
                    ><span>Warehouses</span></router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarRoles"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarRoles"
                :class="[
                  isRolesMenu ? 'active' : 'notactive',
                  { subdrop: isRolesMenuOpen },
                ]"
                v-on:click="isRolesMenuOpen = !isRolesMenuOpen"
              >
                <span>Roles &amp; Permissions</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarRoles">
                <li>
                  <router-link
                    :class="
                      currentPath == '/users/roles-permissions' ? 'active' : 'notactive'
                    "
                    to="/users/roles-permissions"
                    ><span>Roles & Permissions</span></router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/users/delete-account' ? 'active' : 'notactive'
                    "
                    to="/users/delete-account"
                    ><span>Delete Account Request</span></router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarBaseUI"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarBaseUI"
                :class="[
                  isBaseUIMenu ? 'active' : 'notactive',
                  { subdrop: isBaseUIMenuOpen },
                ]"
                v-on:click="isBaseUIMenuOpen = !isBaseUIMenuOpen"
              >
                <span>Base UI</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarBaseUI">
                <li>
                  <router-link
                    :class="currentPath == '/baseui/ui-alerts' ? 'active' : 'notactive'"
                    to="/baseui/ui-alerts"
                    >Alerts</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/baseui/ui-accordion' ? 'active' : 'notactive'
                    "
                    to="/baseui/ui-accordion"
                    >Accordion</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/baseui/ui-avatar' ? 'active' : 'notactive'"
                    to="/baseui/ui-avatar"
                    >Avatar</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/baseui/ui-badges' ? 'active' : 'notactive'"
                    to="/baseui/ui-badges"
                    >Badges</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/baseui/ui-borders' ? 'active' : 'notactive'"
                    to="/baseui/ui-borders"
                    >Border</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/baseui/ui-buttons' ? 'active' : 'notactive'"
                    to="/baseui/ui-buttons"
                    >Buttons</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/baseui/ui-buttons-group' ? 'active' : 'notactive'
                    "
                    to="/baseui/ui-buttons-group"
                    >Button Group</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/baseui/ui-breadcrumb' ? 'active' : 'notactive'
                    "
                    to="/baseui/ui-breadcrumb"
                    >Breadcrumb</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/baseui/ui-cards' ? 'active' : 'notactive'"
                    to="/baseui/ui-cards"
                    >Card</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/baseui/ui-carousel' ? 'active' : 'notactive'"
                    to="/baseui/ui-carousel"
                    >Carousel</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/baseui/ui-colors' ? 'active' : 'notactive'"
                    to="/baseui/ui-colors"
                    >Colors</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/baseui/ui-dropdowns' ? 'active' : 'notactive'
                    "
                    to="/baseui/ui-dropdowns"
                    >Dropdowns</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/baseui/ui-grid' ? 'active' : 'notactive'"
                    to="/baseui/ui-grid"
                    >Grid</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/baseui/ui-images' ? 'active' : 'notactive'"
                    to="/baseui/ui-images"
                    >Images</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/baseui/ui-lightbox' ? 'active' : 'notactive'"
                    to="/baseui/ui-lightbox"
                    >Lightbox</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/baseui/ui-media' ? 'active' : 'notactive'"
                    to="/baseui/ui-media"
                    >Media</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/baseui/ui-modals' ? 'active' : 'notactive'"
                    to="/baseui/ui-modals"
                    >Modals</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/baseui/ui-offcanvas' ? 'active' : 'notactive'
                    "
                    to="/baseui/ui-offcanvas"
                    >Offcanvas</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/baseui/ui-pagination' ? 'active' : 'notactive'
                    "
                    to="/baseui/ui-pagination"
                    >Pagination</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/baseui/ui-popovers' ? 'active' : 'notactive'"
                    to="/baseui/ui-popovers"
                    >Popovers</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/baseui/ui-progress' ? 'active' : 'notactive'"
                    to="/baseui/ui-progress"
                    >Progress</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/baseui/ui-placeholders' ? 'active' : 'notactive'
                    "
                    to="/baseui/ui-placeholders"
                    >Placeholders</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/baseui/ui-rangeslider' ? 'active' : 'notactive'
                    "
                    to="/baseui/ui-rangeslider"
                    >Range Slider</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/baseui/ui-spinner' ? 'active' : 'notactive'"
                    to="/baseui/ui-spinner"
                    >Spinner</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/baseui/ui-sweetalerts' ? 'active' : 'notactive'
                    "
                    to="/baseui/ui-sweetalerts"
                    >Sweet Alerts</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/baseui/ui-tooltips' ? 'active' : 'notactive'"
                    to="/baseui/ui-tooltips"
                    >Tooltips</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/baseui/ui-typography' ? 'active' : 'notactive'
                    "
                    to="/baseui/ui-typography"
                    >Typography</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/baseui/ui-video' ? 'active' : 'notactive'"
                    to="/baseui/ui-video"
                    >Video</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarSecondaryUI"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarSecondaryUI"
                :class="[
                  isSecondaryUIMenu ? 'active' : 'notactive',
                  { subdrop: isSecondaryUIMenuOpen },
                ]"
                v-on:click="isSecondaryUIMenuOpen = !isSecondaryUIMenuOpen"
              >
                <span>Seconadry Base UI</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarSecondaryUI">
                <li>
                  <router-link
                    :class="
                      currentPath == '/advancedui/ui-ribbon' ? 'active' : 'notactive'
                    "
                    to="/advancedui/ui-ribbon"
                    >Ribbon</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/advancedui/ui-clipboard' ? 'active' : 'notactive'
                    "
                    to="/advancedui/ui-clipboard"
                    >Clipboard</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/advancedui/ui-drag-drop' ? 'active' : 'notactive'
                    "
                    to="/advancedui/ui-drag-drop"
                    >Drag & Drop</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/advancedui/ui-rating' ? 'active' : 'notactive'
                    "
                    to="/advancedui/ui-rating"
                    >Rating</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/advancedui/ui-text-editor' ? 'active' : 'notactive'
                    "
                    to="/advancedui/ui-text-editor"
                    >Text Editor</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/advancedui/ui-counter' ? 'active' : 'notactive'
                    "
                    to="/advancedui/ui-counter"
                    >Counter</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/advancedui/ui-scrollbar' ? 'active' : 'notactive'
                    "
                    to="/advancedui/ui-scrollbar"
                    >Scrollbar</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/advancedui/ui-stickynote' ? 'active' : 'notactive'
                    "
                    to="/advancedui/ui-stickynote"
                    >Sticky Note</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/advancedui/ui-timeline' ? 'active' : 'notactive'
                    "
                    to="/advancedui/ui-timeline"
                    >Timeline</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarCharts"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarCharts"
                :class="[
                  isChartsMenu ? 'active' : 'notactive',
                  { subdrop: isChartsMenuOpen },
                ]"
                v-on:click="isChartsMenuOpen = !isChartsMenuOpen"
              >
                <span>Charts</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarCharts">
                <li>
                  <router-link
                    :class="currentPath == '/charts/chart-apex' ? 'active' : 'notactive'"
                    to="/charts/chart-apex"
                    >Apex Charts</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/charts/chart-c3' ? 'active' : 'notactive'"
                    to="/charts/chart-c3"
                    >Chart C3</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/charts/chart-js' ? 'active' : 'notactive'"
                    to="/charts/chart-js"
                    >Chart Js</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/charts/chart-morris' ? 'active' : 'notactive'
                    "
                    to="/charts/chart-morris"
                    >Morris Charts</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/charts/chart-flot' ? 'active' : 'notactive'"
                    to="/charts/chart-flot"
                    >Flot Charts</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarIcons"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarIcons"
                :class="[
                  isIconsMenu ? 'active' : 'notactive',
                  { subdrop: isIconsMenuOpen },
                ]"
                v-on:click="isIconsMenuOpen = !isIconsMenuOpen"
              >
                <span>Primary Icons</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarIcons">
                <li>
                  <router-link
                    :class="
                      currentPath == '/icons/icon-fontawesome' ? 'active' : 'notactive'
                    "
                    to="/icons/icon-fontawesome"
                    >Fontawesome Icons</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/icons/icon-feather' ? 'active' : 'notactive'"
                    to="/icons/icon-feather"
                    >Feather Icons</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/icons/icon-ionic' ? 'active' : 'notactive'"
                    to="/icons/icon-ionic"
                    >Ionic Icons</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/icons/icon-material' ? 'active' : 'notactive'
                    "
                    to="/icons/icon-material"
                    >Material Icons</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/icons/icon-pe7' ? 'active' : 'notactive'"
                    to="/icons/icon-pe7"
                    >Pe7 Icons</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarSecondaryIcons"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarSecondaryIcons"
                :class="[
                  isSecondaryIconsMenu ? 'active' : 'notactive',
                  { subdrop: isSecondaryIconsMenuOpen },
                ]"
                v-on:click="isSecondaryIconsMenuOpen = !isSecondaryIconsMenuOpen"
              >
                <span>Secondary Icons</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarSecondaryIcons">
                <li>
                  <router-link
                    :class="
                      currentPath == '/icons/icon-simpleline' ? 'active' : 'notactive'
                    "
                    to="/icons/icon-simpleline"
                    >Simpleline Icons</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/icons/icon-themify' ? 'active' : 'notactive'"
                    to="/icons/icon-themify"
                    >Themify Icons</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/icons/icon-weather' ? 'active' : 'notactive'"
                    to="/icons/icon-weather"
                    >Weather Icons</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/icons/icon-typicon' ? 'active' : 'notactive'"
                    to="/icons/icon-typicon"
                    >Typicon Icons</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/icons/icon-flag' ? 'active' : 'notactive'"
                    to="/icons/icon-flag"
                    >Flag Icons</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarForms"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarForms"
                :class="[
                  isFormsMenu ? 'active' : 'notactive',
                  { subdrop: isFormsMenuOpen },
                ]"
                v-on:click="isFormsMenuOpen = !isFormsMenuOpen"
              >
                <span> Forms</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarForms">
                <li class="submenu submenu-two">
                  <a href="javascript:void(0);"
                    ><span>Form Elements</span
                    ><span class="menu-arrow inside-submenu"></span
                  ></a>
                  <ul>
                    <li>
                      <router-link
                        :class="
                          currentPath == '/forms/form-basic-inputs'
                            ? 'active'
                            : 'notactive'
                        "
                        to="/forms/form-basic-inputs"
                        >Basic Inputs</router-link
                      >
                    </li>
                    <li>
                      <router-link
                        :class="
                          currentPath == '/forms/form-checkbox-radios'
                            ? 'active'
                            : 'notactive'
                        "
                        to="/forms/form-checkbox-radios"
                        >Checkbox & Radios</router-link
                      >
                    </li>
                    <li>
                      <router-link
                        :class="
                          currentPath == '/forms/form-input-groups'
                            ? 'active'
                            : 'notactive'
                        "
                        to="/forms/form-input-groups"
                        >Input Groups</router-link
                      >
                    </li>
                    <li>
                      <router-link
                        :class="
                          currentPath == '/forms/form-grid-gutters'
                            ? 'active'
                            : 'notactive'
                        "
                        to="/forms/form-grid-gutters"
                        >Grid & Gutters</router-link
                      >
                    </li>
                    <li>
                      <router-link
                        :class="
                          currentPath == '/forms/form-select' ? 'active' : 'notactive'
                        "
                        to="/forms/form-select"
                        >Form Select</router-link
                      >
                    </li>
                    <li>
                      <router-link
                        :class="
                          currentPath == '/forms/form-mask' ? 'active' : 'notactive'
                        "
                        to="/forms/form-mask"
                        >Input Masks</router-link
                      >
                    </li>
                    <li>
                      <router-link
                        :class="
                          currentPath == '/forms/form-fileupload' ? 'active' : 'notactive'
                        "
                        to="/forms/form-fileupload"
                        >File Uploads</router-link
                      >
                    </li>
                  </ul>
                </li>
                <li class="submenu submenu-two">
                  <a
                    href="#sidebarLayouts"
                    data-bs-toggle="collapse"
                    role="button"
                    aria-expanded="false"
                    aria-controls="sidebarLayouts"
                    :class="[
                      isLayoutsMenu ? 'active' : 'notactive',
                      { subdrop: isLayoutsMenuOpen },
                    ]"
                    v-on:click="isLayoutsMenuOpen = !isLayoutsMenuOpen"
                  >
                    <span> Layouts</span><span class="menu-arrow inside-submenu"></span
                  ></a>
                  <ul class="collapse menu-dropdown" id="sidebarLayouts">
                    <li>
                      <router-link
                        :class="
                          currentPath == '/forms/form-horizontal' ? 'active' : 'notactive'
                        "
                        to="/forms/form-horizontal"
                        >Horizontal Form</router-link
                      >
                    </li>
                    <li>
                      <router-link
                        :class="
                          currentPath == '/forms/form-vertical' ? 'active' : 'notactive'
                        "
                        to="/forms/form-vertical"
                        >Vertical Form</router-link
                      >
                    </li>
                    <li>
                      <router-link
                        :class="
                          currentPath == '/forms/form-floating-labels'
                            ? 'active'
                            : 'notactive'
                        "
                        to="/forms/form-floating-labels"
                        >Floating Labels</router-link
                      >
                    </li>
                  </ul>
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/forms/form-validation' ? 'active' : 'notactive'
                    "
                    to="/forms/form-validation"
                    >Form Validation</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/forms/form-select2' ? 'active' : 'notactive'"
                    to="/forms/form-select2"
                    >Select2</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/forms/form-wizard' ? 'active' : 'notactive'"
                    to="/forms/form-wizard"
                    >Form Wizard</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarTables"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarTables"
                :class="[
                  isTablesMenu ? 'active' : 'notactive',
                  { subdrop: isTablesMenuOpen },
                ]"
                v-on:click="isTablesMenuOpen = !isTablesMenuOpen"
              >
                <span>Tables</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarTables">
                <li>
                  <router-link
                    :class="
                      currentPath == '/tables/tables-basic' ? 'active' : 'notactive'
                    "
                    to="/tables/tables-basic"
                    >Basic Tables
                  </router-link>
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/tables/data-tables' ? 'active' : 'notactive'"
                    to="/tables/data-tables"
                    >Data Table
                  </router-link>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="submenu">
          <a
            href="#sidebarProfile"
            data-bs-toggle="collapse"
            role="button"
            aria-expanded="false"
            aria-controls="sidebarProfile"
            :class="[
              isProfileMenu ? 'active' : 'notactive',
              { subdrop: isProfileMenuOpen },
            ]"
            v-on:click="isProfileMenuOpen = !isProfileMenuOpen"
          >
            <vue-feather type="user"></vue-feather><span>Profile</span>
            <span class="menu-arrow"></span
          ></a>
          <ul class="collapse menu-dropdown" id="sidebarProfile">
            <li>
              <router-link to="/pages/profile"><span>Profile</span></router-link>
            </li>
            <li class="submenu">
              <a
                href="#sidebarAuth"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarAuth"
                :class="[
                  isAuthMenu ? 'active' : 'notactive',
                  { subdrop: isAuthMenuOpen },
                ]"
                v-on:click="isAuthMenuOpen = !isAuthMenuOpen"
              >
                <span>Authentication</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarAuth">
                <li class="submenu submenu-two">
                  <a
                    href="#sidebarLogin"
                    data-bs-toggle="collapse"
                    role="button"
                    aria-expanded="false"
                    aria-controls="sidebarLogin"
                    :class="[
                      isLoginMenu ? 'active' : 'notactive',
                      { subdrop: isLoginMenuOpen },
                    ]"
                    v-on:click="isLoginMenuOpen = !isLoginMenuOpen"
                  >
                    Login<span class="menu-arrow inside-submenu"></span
                  ></a>
                  <ul class="collapse menu-dropdown" id="sidebarLogin">
                    <li><router-link to="/">Cover</router-link></li>
                    <li>
                      <router-link to="/authentication/signin-2"
                        >Illustration</router-link
                      >
                    </li>
                    <li>
                      <router-link to="/authentication/signin-3">Basic</router-link>
                    </li>
                  </ul>
                </li>
                <li class="submenu submenu-two">
                  <a href="javascript:void(0);"
                    >Register<span class="menu-arrow inside-submenu"></span
                  ></a>
                  <ul>
                    <li><router-link to="/register">Cover</router-link></li>
                    <li>
                      <router-link to="/authentication/register-2"
                        >Illustration</router-link
                      >
                    </li>
                    <li>
                      <router-link to="/authentication/register-3">Basic</router-link>
                    </li>
                  </ul>
                </li>
                <li class="submenu submenu-two">
                  <a href="javascript:void(0);"
                    >Forgot Password<span class="menu-arrow inside-submenu"></span
                  ></a>
                  <ul>
                    <li><router-link to="/forgot-password">Cover</router-link></li>
                    <li>
                      <router-link to="/authentication/forgot-password-2"
                        >Illustration</router-link
                      >
                    </li>
                    <li>
                      <router-link to="/authentication/forgot-password-3"
                        >Basic</router-link
                      >
                    </li>
                  </ul>
                </li>
                <li class="submenu submenu-two">
                  <a href="javascript:void(0);"
                    >Reset Password<span class="menu-arrow inside-submenu"></span
                  ></a>
                  <ul>
                    <li><router-link to="/reset-password">Cover</router-link></li>
                    <li>
                      <router-link to="/authentication/reset-password-2"
                        >Illustration</router-link
                      >
                    </li>
                    <li>
                      <router-link to="/authentication/reset-password-3"
                        >Basic</router-link
                      >
                    </li>
                  </ul>
                </li>
                <li class="submenu submenu-two">
                  <a href="javascript:void(0);"
                    >Email Verification<span class="menu-arrow inside-submenu"></span
                  ></a>
                  <ul>
                    <li><router-link to="/email-verification">Cover</router-link></li>
                    <li>
                      <router-link to="/authentication/email-verification-2"
                        >Illustration</router-link
                      >
                    </li>
                    <li>
                      <router-link to="/authentication/email-verification-3"
                        >Basic</router-link
                      >
                    </li>
                  </ul>
                </li>
                <li class="submenu submenu-two">
                  <a href="javascript:void(0);"
                    >2 Step Verification<span class="menu-arrow inside-submenu"></span
                  ></a>
                  <ul>
                    <li>
                      <router-link to="/two-step-verification">Cover</router-link>
                    </li>
                    <li>
                      <router-link to="/authentication/two-step-verification-2"
                        >Illustration</router-link
                      >
                    </li>
                    <li>
                      <router-link to="/authentication/two-step-verification-3"
                        >Basic</router-link
                      >
                    </li>
                  </ul>
                </li>
                <li>
                  <router-link to="/authentication/lock-screen">Lock Screen</router-link>
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarPages"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarPages"
                :class="[
                  isPagesMenu ? 'active' : 'notactive',
                  { subdrop: isPagesMenuOpen },
                ]"
                v-on:click="isPagesMenuOpen = !isPagesMenuOpen"
              >
                <span>Pages</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarPages">
                <li><router-link to="/error/error-404">404 Error </router-link></li>
                <li><router-link to="/error/error-500">500 Error </router-link></li>
                <li>
                  <router-link to="/pages/blank-page"
                    ><span>Blank Page</span>
                  </router-link>
                </li>
                <li>
                  <router-link to="/pages/coming-soon"
                    ><span>Coming Soon</span>
                  </router-link>
                </li>
                <li>
                  <router-link to="/pages/under-maintenance"
                    ><span>Under Maintenance</span>
                  </router-link>
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarPlaces"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarPlaces"
                :class="[
                  isPlacesMenu ? 'active' : 'notactive',
                  { subdrop: isPlacesMenuOpen },
                ]"
                v-on:click="isPlacesMenuOpen = !isPlacesMenuOpen"
              >
                <span>Places</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarPlaces">
                <li>
                  <router-link
                    :class="currentPath == '/places/countries' ? 'active' : 'notactive'"
                    to="/places/countries"
                    >Countries</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/places/states' ? 'active' : 'notactive'"
                    to="/places/states"
                    >States</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarEmployee"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarEmployee"
                :class="[
                  isEmployeeMenu ? 'active' : 'notactive',
                  { subdrop: isEmployeeMenuOpen },
                ]"
                v-on:click="isEmployeeMenuOpen = !isEmployeeMenuOpen"
              >
                <span>Employees</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarEmployee">
                <li>
                  <router-link
                    :class="currentPath == '/hrm/employees-grid' ? 'active' : 'notactive'"
                    to="/hrm/employees-grid"
                    ><span>Employees</span></router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/hrm/department-grid' ? 'active' : 'notactive'
                    "
                    to="/hrm/department-grid"
                    ><span>Departments</span></router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/hrm/designation' ? 'active' : 'notactive'"
                    to="/hrm/designation"
                    ><span>Designation</span></router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/hrm/shift' ? 'active' : 'notactive'"
                    to="/hrm/shift"
                    ><span>Shifts</span></router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarAttendence"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarAttendence"
                :class="[
                  isAttendenceMenu ? 'active' : 'notactive',
                  { subdrop: isAttendenceMenuOpen },
                ]"
                v-on:click="isAttendenceMenuOpen = !isAttendenceMenuOpen"
              >
                <span>Attendence</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarAttendence">
                <li>
                  <router-link
                    :class="
                      currentPath == '/hrm/attendance-employee' ? 'active' : 'notactive'
                    "
                    to="/hrm/attendance-employee"
                    >Employee Attendence</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/hrm/attendance-admin' ? 'active' : 'notactive'
                    "
                    to="/hrm/attendance-admin"
                    >Admin Attendence</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarLeaves"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarLeaves"
                :class="[
                  isLeavesMenu ? 'active' : 'notactive',
                  { subdrop: isLeavesMenuOpen },
                ]"
                v-on:click="isLeavesMenuOpen = !isLeavesMenuOpen"
              >
                <span>Leaves &amp; Holidays</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarLeaves">
                <li>
                  <router-link
                    :class="
                      currentPath == '/leaves/leaves-admin' ? 'active' : 'notactive'
                    "
                    to="/leaves/leaves-admin"
                    >Admin Leaves</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/leaves/leaves-employee' ? 'active' : 'notactive'
                    "
                    to="/leaves/leaves-employee"
                    >Employee Leaves</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/leaves/leave-types' ? 'active' : 'notactive'"
                    to="/leaves/leave-types"
                    >Leave Types</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarPayroll"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarPayroll"
                :class="[
                  isPayrollMenu ? 'active' : 'notactive',
                  { subdrop: isPayrollMenuOpen },
                ]"
                v-on:click="isPayrollMenuOpen = !isPayrollMenuOpen"
              >
                <span>Payroll</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarPayroll">
                <li>
                  <router-link to="/payroll/payroll-list">Employee Salary</router-link>
                </li>
                <li><router-link to="/payroll/payslip">Payslip</router-link></li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="submenu">
          <a
            href="#sidebarReport"
            data-bs-toggle="collapse"
            role="button"
            aria-expanded="false"
            aria-controls="sidebarReport"
            :class="[
              isReportMenu ? 'active' : 'notactive',
              { subdrop: isReportMenuOpen },
            ]"
            v-on:click="isReportMenuOpen = !isReportMenuOpen"
          >
            <img src="@/assets/img/icons/printer.svg" alt="img" /><span>Reports</span>
            <span class="menu-arrow"></span
          ></a>
          <ul class="collapse menu-dropdown" id="sidebarReport">
            <li>
              <router-link
                :class="currentPath == '/reports/sales-report' ? 'active' : 'notactive'"
                to="/reports/sales-report"
                ><span>Sales Report</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="
                  currentPath == '/reports/purchase-report' ? 'active' : 'notactive'
                "
                to="/reports/purchase-report"
                ><span>Purchase report</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="
                  currentPath == '/reports/inventory-report' ? 'active' : 'notactive'
                "
                to="/reports/inventory-report"
                ><span>Inventory Report</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="currentPath == '/reports/invoice-report' ? 'active' : 'notactive'"
                to="/reports/invoice-report"
                ><span>Invoice Report</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="
                  currentPath == '/reports/supplier-report' ? 'active' : 'notactive'
                "
                to="/reports/supplier-report"
                ><span>Supplier Report</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="
                  currentPath == '/reports/customer-report' ? 'active' : 'notactive'
                "
                to="/reports/customer-report"
                ><span>Customer Report</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="currentPath == '/reports/expense-report' ? 'active' : 'notactive'"
                to="/reports/expense-report"
                ><span>Expense Report</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="currentPath == '/reports/income-report' ? 'active' : 'notactive'"
                to="/reports/income-report"
                ><span>Income Report</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="currentPath == '/reports/tax-report' ? 'active' : 'notactive'"
                to="/reports/tax-report"
                ><span>Tax Report</span></router-link
              >
            </li>
            <li>
              <router-link
                :class="
                  currentPath == '/reports/profit-and-loss' ? 'active' : 'notactive'
                "
                to="/reports/profit-and-loss"
                ><span>Profit & Loss</span></router-link
              >
            </li>
          </ul>
        </li>
        <li class="submenu">
          <a
            href="#sidebarSettings"
            data-bs-toggle="collapse"
            role="button"
            aria-expanded="false"
            aria-controls="sidebarSettings"
            :class="[
              isSettingsMenu ? 'active' : 'notactive',
              { subdrop: isSettingsMenuOpen },
            ]"
            v-on:click="isSettingsMenuOpen = !isSettingsMenuOpen"
          >
            <img src="@/assets/img/icons/settings.svg" alt="img" /><span> Settings</span>
            <span class="menu-arrow"></span
          ></a>
          <ul class="collapse menu-dropdown" id="sidebarSettings">
            <li class="submenu">
              <a
                href="#sidebarGeneral"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarGeneral"
                :class="[
                  isGeneralMenu ? 'active' : 'notactive',
                  { subdrop: isGeneralMenuOpen },
                ]"
                v-on:click="isGeneralMenuOpen = !isGeneralMenuOpen"
              >
                <span>General Settings</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarGeneral">
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/general-settings' ? 'active' : 'notactive'
                    "
                    to="/settings/general-settings"
                    >Profile</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/security-settings'
                        ? 'active'
                        : 'notactive'
                    "
                    to="/settings/security-settings"
                    >Security</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/notification' ? 'active' : 'notactive'
                    "
                    to="/settings/notification"
                    >Notifications</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/connected-apps' ? 'active' : 'notactive'
                    "
                    to="/settings/connected-apps"
                    >Connected Apps</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarWebsite"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarWebsite"
                :class="[
                  isWebsiteMenu ? 'active' : 'notactive',
                  { subdrop: isWebsiteMenuOpen },
                ]"
                v-on:click="isWebsiteMenuOpen = !isWebsiteMenuOpen"
              >
                <span>Website Settings</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarWebsite">
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/system-settings' ? 'active' : 'notactive'
                    "
                    to="/settings/system-settings"
                    >System Settings</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/company-settings' ? 'active' : 'notactive'
                    "
                    to="/settings/company-settings"
                    >Company Settings
                  </router-link>
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/localization-settings'
                        ? 'active'
                        : 'notactive'
                    "
                    to="/settings/localization-settings"
                    >Localization</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/settings/prefixes' ? 'active' : 'notactive'"
                    to="/settings/prefixes"
                    >Prefixes</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/preference' ? 'active' : 'notactive'
                    "
                    to="/settings/preference"
                    >Preference</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/appearance' ? 'active' : 'notactive'
                    "
                    to="/settings/appearance"
                    >Appearance</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/social-authentication'
                        ? 'active'
                        : 'notactive'
                    "
                    to="/settings/social-authentication"
                    >Social Authentication</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/language-settings'
                        ? 'active'
                        : 'notactive'
                    "
                    to="/settings/language-settings"
                    >Language</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarApp"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarApp"
                :class="[isAppMenu ? 'active' : 'notactive', { subdrop: isAppMenuOpen }]"
                v-on:click="isAppMenuOpen = !isAppMenuOpen"
              >
                <span>App Settings</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarApp">
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/invoice-settings' ? 'active' : 'notactive'
                    "
                    to="/settings/invoice-settings"
                    >Invoice</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/printer-settings' ? 'active' : 'notactive'
                    "
                    to="/settings/printer-settings"
                    >Printer</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/pos-settings' ? 'active' : 'notactive'
                    "
                    to="/settings/pos-settings"
                    >POS</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/custom-fields' ? 'active' : 'notactive'
                    "
                    to="/settings/custom-fields"
                    >Custom Fields</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarSystem"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarSystem"
                :class="[
                  isSystemMenu ? 'active' : 'notactive',
                  { subdrop: isSystemMenuOpen },
                ]"
                v-on:click="isSystemMenuOpen = !isSystemMenuOpen"
              >
                <span>System Settings</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarSystem">
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/email-settings' ? 'active' : 'notactive'
                    "
                    to="/settings/email-settings"
                    >Email</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/sms-gateway' ? 'active' : 'notactive'
                    "
                    to="/settings/sms-gateway"
                    >SMS Gateways</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/otp-settings' ? 'active' : 'notactive'
                    "
                    to="/settings/otp-settings"
                    >OTP</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/gdpr-settings' ? 'active' : 'notactive'
                    "
                    to="/settings/gdpr-settings"
                    >GDPR Cookies</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarFinancial"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarFinancial"
                :class="[
                  isFinancialMenu ? 'active' : 'notactive',
                  { subdrop: isFinancialMenuOpen },
                ]"
                v-on:click="isFinancialMenuOpen = !isFinancialMenuOpen"
              >
                <span>Financial Settings</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarFinancial">
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/payment-gateway-settings'
                        ? 'active'
                        : 'notactive'
                    "
                    to="/settings/payment-gateway-settings"
                    >Payment Gateway</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/bank-settings-grid'
                        ? 'active'
                        : 'notactive'
                    "
                    to="/settings/bank-settings-grid"
                    >Bank Accounts</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="currentPath == '/settings/tax-rates' ? 'active' : 'notactive'"
                    to="/settings/tax-rates"
                    >Tax Rates</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/currency-settings'
                        ? 'active'
                        : 'notactive'
                    "
                    to="/settings/currency-settings"
                    >Currencies</router-link
                  >
                </li>
              </ul>
            </li>
            <li class="submenu">
              <a
                href="#sidebarOther"
                data-bs-toggle="collapse"
                role="button"
                aria-expanded="false"
                aria-controls="sidebarOther"
                :class="[
                  isOtherMenu ? 'active' : 'notactive',
                  { subdrop: isOtherMenuOpen },
                ]"
                v-on:click="isOtherMenuOpen = !isOtherMenuOpen"
              >
                <span>Other Settings</span><span class="menu-arrow"></span
              ></a>
              <ul class="collapse menu-dropdown" id="sidebarOther">
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/storage-settings' ? 'active' : 'notactive'
                    "
                    to="/settings/storage-settings"
                    >Storage</router-link
                  >
                </li>
                <li>
                  <router-link
                    :class="
                      currentPath == '/settings/ban-ip-address' ? 'active' : 'notactive'
                    "
                    to="/settings/ban-ip-address"
                    >Ban IP Address</router-link
                  >
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:void(0);"><span>Documentation</span></a>
            </li>
            <li>
              <a href="javascript:void(0);"><span>Changelog v2.0.3</span></a>
            </li>
            <li class="submenu">
              <a href="javascript:void(0);"
                ><span>Multi Level</span><span class="menu-arrow"></span
              ></a>
              <ul>
                <li><a href="javascript:void(0);">Level 1.1</a></li>
                <li class="submenu submenu-two">
                  <a href="javascript:void(0);"
                    >Level 1.2<span class="menu-arrow inside-submenu"></span
                  ></a>
                  <ul>
                    <li><a href="javascript:void(0);">Level 2.1</a></li>
                    <li class="submenu submenu-two submenu-three">
                      <a href="javascript:void(0);"
                        >Level 2.2<span
                          class="menu-arrow inside-submenu inside-submenu-two"
                        ></span
                      ></a>
                      <ul>
                        <li><a href="javascript:void(0);">Level 3.1</a></li>
                        <li><a href="javascript:void(0);">Level 3.2</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      isApplicationMenuOpen: false,
      isInventoryMenuOpen: false,
      isSalesMenuOpen: false,
      isSalesOneMenuOpen: false,
      isSecondaryIconsMenuOpen: false,
      isTablesMenuOpen: false,
      isFormsMenuOpen: false,
      isIconsMenuOpen: false,
      isChartsMenuOpen: false,
      isSecondaryUIMenuOpen: false,
      isBaseUIMenuOpen: false,
      isRolesMenuOpen: false,
      isExpenseMenuOpen: false,
      isLayoutsMenuOpen: false,
      isUsersMenuOpen: false,
      isPurchaseMenuOpen: false,
      isAdvancedMenuOpen: false,
      isProfileMenuOpen: false,
      isAuthMenuOpen: false,
      isLoginMenuOpen: false,
      isGeneralMenuOpen: false,
      isWebsiteMenuOpen: false,
      isSystemMenuOpen: false,
      isFinancialMenuOpen: false,
      isAppMenuOpen: false,
      isSettingsMenuOpen: false,
      isPeopleMenuOpen: false,
      isAttendenceMenuOpen: false,
      isReportMenuOpen: false,
      isPagesMenuOpen: false,
      isLeavesMenuOpen: false,
      isPlacesMenuOpen: false,
      isPayrollMenuOpen: false,
      isEmployeeMenuOpen: false,
      isDashboardOneMenu: false,
      isDashboardOneMenuOpen: false,
      isDashboardMenuOpen: false,
      isOtherMenuOpen: false,
      isSalesOneMenu: false,
      isUsersMenu: false,
      isSettingsMenu: false,
      activeClass: "active",
    };
  },
  computed: {
    currentPath() {
      return this.$route.name;
    },
    isDashboardMenu() {
      return (
        this.$route.name == "/dashboard/admin-dashboard" ||
        this.$route.name == "/dashboard/sales-dashboard"
      );
    },
    isPagesMenu() {
      return (
        this.$route.name == "/error/error-404" ||
        this.$route.name == "/error/error-500" ||
        this.$route.name == "/pages/blank-page" ||
        this.$route.name == "/pages/coming-soon" ||
        this.$route.name == "/pages/under-maintenance"
      );
    },
    isLeavesMenu() {
      return (
        this.$route.name == "/leaves/leaves-admin" ||
        this.$route.name == "/leaves/leaves-employee" ||
        this.$route.name == "/leaves/leaves-admin"
      );
    },
    isPlacesMenu() {
      return (
        this.$route.name == "/places/countries" || this.$route.name == "/places/states"
      );
    },
    isEmployeeMenu() {
      return (
        this.$route.name == "/hrm/employees-grid" ||
        this.$route.name == "/hrm/department-grid" ||
        this.$route.name == "/hrm/designation" ||
        this.$route.name == "/hrm/shift"
      );
    },
    isAttendenceMenu() {
      return (
        this.$route.name == "/hrm/attendance-employee" ||
        this.$route.name == "/hrm/attendance-admin"
      );
    },
    isPayrollMenu() {
      return (
        this.$route.name == "/payroll/payroll-list" ||
        this.$route.name == "/payroll/payslip"
      );
    },
    isApplicationMenu() {
      return (
        this.$route.name == "/chat" ||
        this.$route.name == "/call/video-call" ||
        this.$route.name == "/call/audio-call" ||
        this.$route.name == "/call/call-history" ||
        this.$route.name == "/calendar" ||
        this.$route.name == "/email" ||
        this.$route.name == "/todo" ||
        this.$route.name == "/notes" ||
        this.$route.name == "/files/file-manager"
      );
    },
    isInventoryMenu() {
      return (
        this.$route.name == "/inventory/product-list" ||
        this.$route.name == "/inventory/add-product" ||
        this.$route.name == "/inventory/expired-products" ||
        this.$route.name == "/inventory/low-stocks" ||
        this.$route.name == "/inventory/category-list" ||
        this.$route.name == "/inventory/sub-categories" ||
        this.$route.name == "/inventory/brand-list" ||
        this.$route.name == "/inventory/units" ||
        this.$route.name == "/inventory/varriant-attributes" ||
        this.$route.name == "/inventory/warranty" ||
        this.$route.name == "/inventory/barcode" ||
        this.$route.name == "/inventory/qrcode"
      );
    },
    isTablesMenu() {
      return (
        this.$route.name == "/tables/tables-basic" ||
        this.$route.name == "/tables/data-tables"
      );
    },
    isLayoutsMenu() {
      return (
        this.$route.name == "/forms/form-horizontal" ||
        this.$route.name == "/forms/form-vertical" ||
        this.$route.name == "/forms/form-floating-labels" ||
        this.$route.name == "/forms/form-validation" ||
        this.$route.name == "/forms/form-select2" ||
        this.$route.name == "/forms/form-wizard"
      );
    },
    isFormsMenu() {
      return (
        this.$route.name == "/forms/form-basic-inputs" ||
        this.$route.name == "/forms/form-checkbox-radios" ||
        this.$route.name == "/forms/form-input-groups" ||
        this.$route.name == "/forms/form-grid-gutters" ||
        this.$route.name == "/forms/form-select" ||
        this.$route.name == "/forms/form-mask" ||
        this.$route.name == "/forms/form-fileupload"
      );
    },
    isSecondaryIconsMenu() {
      return (
        this.$route.name == "/forms/form-basic-inputs" ||
        this.$route.name == "/forms/form-checkbox-radios" ||
        this.$route.name == "/forms/form-input-groups" ||
        this.$route.name == "/forms/form-grid-gutters" ||
        this.$route.name == "/forms/form-select" ||
        this.$route.name == "/forms/form-mask" ||
        this.$route.name == "/forms/form-fileupload" ||
        this.$route.name == "/icons/icon-simpleline" ||
        this.$route.name == "/icons/icon-themify" ||
        this.$route.name == "/icons/icon-weather" ||
        this.$route.name == "/icons/icon-typicon" ||
        this.$route.name == "/icons/icon-flag"
      );
    },
    isIconsMenu() {
      return (
        this.$route.name == "/icons/icon-fontawesome" ||
        this.$route.name == "/icons/icon-ionic" ||
        this.$route.name == "/icons/icon-ionic" ||
        this.$route.name == "/icons/icon-material" ||
        this.$route.name == "/icons/icon-pe7"
      );
    },
    isChartsMenu() {
      return (
        this.$route.name == "/charts/chart-apex" ||
        this.$route.name == "/charts/chart-c3" ||
        this.$route.name == "/charts/chart-js" ||
        this.$route.name == "/charts/chart-morris" ||
        this.$route.name == "/charts/chart-flot"
      );
    },
    isBaseUIMenu() {
      return (
        this.$route.name == "/baseui/ui-alerts" ||
        this.$route.name == "/baseui/ui-accordion" ||
        this.$route.name == "/baseui/ui-avatar" ||
        this.$route.name == "/baseui/ui-badges" ||
        this.$route.name == "/baseui/ui-buttons" ||
        this.$route.name == "/baseui/ui-buttons-group" ||
        this.$route.name == "/baseui/ui-breadcrumb" ||
        this.$route.name == "/baseui/ui-cards" ||
        this.$route.name == "/baseui/ui-carousel" ||
        this.$route.name == "/baseui/ui-dropdowns" ||
        this.$route.name == "/baseui/ui-grid" ||
        this.$route.name == "/baseui/ui-images" ||
        this.$route.name == "/baseui/ui-lightbox" ||
        this.$route.name == "/baseui/ui-media" ||
        this.$route.name == "/baseui/ui-modals" ||
        this.$route.name == "/baseui/ui-offcanvas" ||
        this.$route.name == "/baseui/ui-pagination" ||
        this.$route.name == "/baseui/ui-popovers" ||
        this.$route.name == "/baseui/ui-progress" ||
        this.$route.name == "/baseui/ui-placeholders" ||
        this.$route.name == "/baseui/ui-rangeslider" ||
        this.$route.name == "/baseui/ui-spinner" ||
        this.$route.name == "/baseui/ui-sweetalerts" ||
        this.$route.name == "/baseui/ui-tooltips" ||
        this.$route.name == "/baseui/ui-typography" ||
        this.$route.name == "/baseui/ui-video"
      );
    },
    isSecondaryUIMenu() {
      return (
        this.$route.name == "/advancedui/ui-ribbon" ||
        this.$route.name == "/advancedui/ui-clipboard" ||
        this.$route.name == "/advancedui/ui-drag-drop" ||
        this.$route.name == "/advancedui/ui-rating" ||
        this.$route.name == "/advancedui/ui-text-editor" ||
        this.$route.name == "/advancedui/ui-counter" ||
        this.$route.name == "/advancedui/ui-scrollbar" ||
        this.$route.name == "/advancedui/ui-stickynote" ||
        this.$route.name == "/advancedui/ui-timeline"
      );
    },
    isRolesMenu() {
      return (
        this.$route.name == "/users/roles-permissions" ||
        this.$route.name == "/users/delete-account"
      );
    },
    isPeopleMenu() {
      return (
        this.$route.name == "/people/customers" ||
        this.$route.name == "/people/suppliers" ||
        this.$route.name == "/people/store-list" ||
        this.$route.name == "/people/warehouse"
      );
    },
    isExpenseMenu() {
      return (
        this.$route.name == "/finance/expenses-list" ||
        this.$route.name == "/finance/expenses-category"
      );
    },
    isPurchaseMenu() {
      return (
        this.$route.name == "/purchases/purchase-list" ||
        this.$route.name == "/purchases/purchase-order-report" ||
        this.$route.name == "/purchases/purchase-order-report" ||
        this.$route.name == "/purchases/purchase-returns" ||
        this.$route.name == "/stock/manage-stocks" ||
        this.$route.name == "/stock/stock-adjustment" ||
        this.$route.name == "/stock/stock-transfer"
      );
    },
    isSalesMenu() {
      return (
        this.$route.name == "/purchases/purchase-list" ||
        this.$route.name == "/purchases/purchase-order-report" ||
        this.$route.name == "/purchases/purchase-order-report" ||
        this.$route.name == "/purchases/purchase-returns" ||
        this.$route.name == "/stock/manage-stocks" ||
        this.$route.name == "/stock/stock-adjustment" ||
        this.$route.name == "/stock/stock-transfer" ||
        this.$route.name == "/sales/sales-list" ||
        this.$route.name == "/sales/invoice-report" ||
        this.$route.name == "/sales/sales-returns" ||
        this.$route.name == "/sales/quotation-list" ||
        this.$route.name == "/sales/pos"
      );
    },
    isProfileMenu() {
      return (
        this.$route.name == "/pages/profile" ||
        this.$route.name == "/purchases/purchase-order-report"
      );
    },
    isAuthMenu() {
      return this.$route.name == "/pages/profile" || this.$route.name == "/";
    },
    isLoginMenu() {
      return (
        this.$route.name == "/" ||
        this.$route.name == "/authentication/signin-2" ||
        this.$route.name == "/authentication/signin-3"
      );
    },
    isReportMenu() {
      return (
        this.$route.name == "/reports/sales-report" ||
        this.$route.name == "/reports/purchase-report" ||
        this.$route.name == "/reports/inventory-report" ||
        this.$route.name == "/reports/invoice-report" ||
        this.$route.name == "/reports/sales-returns" ||
        this.$route.name == "/reports/supplier-report" ||
        this.$route.name == "/reports/customer-report" ||
        this.$route.name == "/reports/expense-report" ||
        this.$route.name == "/reports/income-report" ||
        this.$route.name == "/reports/tax-report" ||
        this.$route.name == "/reports/profit-and-loss"
      );
    },
    isGeneralMenu() {
      return (
        this.$route.name == "/settings/general-settings" ||
        this.$route.name == "/settings/security-settings" ||
        this.$route.name == "/settings/notification" ||
        this.$route.name == "/settings/connected-apps"
      );
    },
    isWebsiteMenu() {
      return (
        this.$route.name == "/settings/system-settings" ||
        this.$route.name == "/settings/company-settings" ||
        this.$route.name == "/settings/localization-settings" ||
        this.$route.name == "/settings/prefixes" ||
        this.$route.name == "/settings/preference" ||
        this.$route.name == "/settings/appearance" ||
        this.$route.name == "/settings/social-authentication" ||
        this.$route.name == "/settings/language-settings"
      );
    },
    isAppMenu() {
      return (
        this.$route.name == "/settings/invoice-settings" ||
        this.$route.name == "/settings/printer-settings" ||
        this.$route.name == "/settings/pos-settings" ||
        this.$route.name == "/settings/custom-fields"
      );
    },
    isSystemMenu() {
      return (
        this.$route.name == "/settings/email-settings" ||
        this.$route.name == "/settings/sms-gateway" ||
        this.$route.name == "/settings/otp-settings" ||
        this.$route.name == "/settings/gdpr-fields"
      );
    },
    isFinancialMenu() {
      return (
        this.$route.name == "/settings/payment-gateway-settings" ||
        this.$route.name == "/settings/bank-settings-grid" ||
        this.$route.name == "/settings/tax-rates" ||
        this.$route.name == "/settings/currency-settings"
      );
    },
    isOtherMenu() {
      return (
        this.$route.name == "/settings/storage-settings" ||
        this.$route.name == "/settings/ban-ip-address"
      );
    },
  },
};
</script>
