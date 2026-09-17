<?php
   $uri = new \CodeIgniter\HTTP\URI(current_url(true));
   $pages = $uri->getSegments();
   $page = $uri->getSegment(count($pages));
 ?>
	<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Main</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='dashboard'||$page == '/'||$page == 'sales-dashboard') ? 'active subdrop' : '' ;?>"><i
                                    data-feather="grid"></i><span>Dashboard</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>dashboard"
                                        class="<?php echo ($page =='dashboard'||$page == '/') ? 'active' : '' ;?>">Admin Dashboard</a></li>
                                <li><a href="<?php echo base_url(); ?>sales-dashboard"
                                        class="<?php echo ($page =='sales-dashboard') ? 'active' : '' ;?>">Sales Dashboard</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='chat'||$page == 'file-manager'||$page == 'file-archived'||$page =='file-document'||$page =='file-favourites'||$page =='file-manager-seleted'||$page =='file-recent'||$page =='file-shared'||$page =='notes'||$page == 'todo'||$page == 'email'||$page == 'calendar'||$page == 'call-history'||$page == 'audio-call'||$page == 'video-call'||$page =='file-manager-deleted') ? 'active subdrop' : '' ;?> "><i
                                    data-feather="smartphone"></i><span>Application</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>chat"
                                        class="<?php echo ($page =='chat') ? 'active' : '' ;?>">Chat</a></li>
                                <li class="submenu submenu-two"><a href="javascript:void(0);"
                                        class="<?php echo ($page =='video-call'||$page == 'audio-call'||$page == 'call-history') ? 'active subdrop' : ''  ;?>">Call<span
                                            class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a class="<?php echo ($page =='video-call') ? 'active' : '' ;?>"
                                                href="<?php echo base_url(); ?>video-call">Video Call</a></li>
                                        <li><a class="<?php echo ($page =='audio-call') ? 'active' : '' ;?>"
                                                href="<?php echo base_url(); ?>audio-call">Audio Call</a></li>
                                        <li><a class="<?php echo ($page =='call-history') ? 'active' : '' ;?>"
                                                href="<?php echo base_url(); ?>call-history">Call History</a></li>
                                    </ul>
                                </li>
                                <li><a class="<?php echo ($page =='calendar') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>calendar">Calendar</a></li>
                                <li><a class="<?php echo ($page =='email') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>email">Email</a></li>
                                <li><a class="<?php echo ($page =='todo') ? 'active' : '' ;?>" href="<?php echo base_url(); ?>todo">To
                                        Do</a></li>
                                <li><a class="<?php echo ($page =='notes') ? 'active' : '';?>"
                                        href="<?php echo base_url(); ?>notes">Notes</a></li>
                                <li><a class="<?php echo ($page =='file-manager'||$page == 'file-archived'||$page =='file-document'||$page =='file-favourites'||$page =='file-manager-seleted'||$page =='file-recent'||$page =='file-shared'||$page =='file-manager-deleted') ? 'active' : '' ;?>"
                                        href="<?php echo base_url(); ?>file-manager">File Manager</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Inventory</h6>
                    <ul>
                        <li class="<?php echo ($page =='product-list'||$page =='product-details') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>product-list"><i data-feather="box"></i><span>Products</span></a>
                        </li>
                        <li class="<?php echo ($page =='add-product'||$page =='edit-product') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>add-product"><i data-feather="plus-square"></i><span>Create
                                    Product</span></a></li>
                        <li class="<?php echo ($page =='expired-products') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>expired-products"><i data-feather="codesandbox"></i><span>Expired
                                    Products</span></a></li>
                        <li class="<?php echo ($page =='low-stocks') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>low-stocks"><i data-feather="trending-down"></i><span>Low
                                    Stocks</span></a></li>
                        <li class="<?php echo ($page =='category-list') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>category-list"><i
                                    data-feather="codepen"></i><span>Category</span></a></li>
                        <li class="<?php echo ($page =='sub-categories') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>sub-categories"><i data-feather="speaker"></i><span>Sub
                                    Category</span></a></li>
                        <li class="<?php echo ($page =='brand-list') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>brand-list"><i data-feather="tag"></i><span>Brands</span></a></li>
                        <li class="<?php echo ($page =='units') ? 'active' : '' ;?>"><a href="<?php echo base_url(); ?>units"><i
                                    data-feather="speaker"></i><span>Units</span></a></li>
                        <li class="<?php echo ($page =='varriant-attributes') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>varriant-attributes"><i data-feather="layers"></i><span>Variant
                                    Attributes</span></a></li>
                        <li class="<?php echo ($page =='warranty') ? 'active' : '' ;?>"><a href="<?php echo base_url(); ?>warranty"><i
                                    data-feather="bookmark"></i><span>Warranties</span></a>
                        </li>
                        <li class="<?php echo ($page =='barcode') ? 'active' : '' ;?>"><a href="<?php echo base_url(); ?>barcode"><i
                                    data-feather="align-justify"></i><span>Print
                                    Barcode</span></a></li>
                        <li class="<?php echo ($page =='qrcode') ? 'active' : '' ;?>"><a href="<?php echo base_url(); ?>qrcode"><i
                                    data-feather="maximize"></i><span>Print QR Code</span></a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Stock</h6>
                    <ul>
                        <li class="<?php echo ($page =='manage-stocks') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>manage-stocks"><i data-feather="package"></i><span>Manage
                                    Stock</span></a></li>
                        <li class="<?php echo ($page =='stock-adjustment') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>stock-adjustment"><i data-feather="clipboard"></i><span>Stock
                                    Adjustment</span></a></li>
                        <li class="<?php echo ($page =='stock-transfer') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>stock-transfer"><i data-feather="truck"></i><span>Stock
                                    Transfer</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Sales</h6>
                    <ul>
                        <li class="<?php echo ($page =='sales-list') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>sales-list"><i
                                    data-feather="shopping-cart"></i><span>Sales</span></a></li>
                        <li class="<?php echo ($page =='invoice-report') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>invoice-report"><i
                                    data-feather="file-text"></i><span>Invoices</span></a></li>
                        <li class="<?php echo ($page =='sales-returns') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>sales-returns"><i data-feather="copy"></i><span>Sales
                                    Return</span></a></li>
                        <li class="<?php echo ($page =='quotation-list') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>quotation-list"><i
                                    data-feather="save"></i><span>Quotation</span></a>
                        </li>
                        <li class="<?php echo ($page =='pos') ? 'active' : '' ;?>"><a href="<?php echo base_url(); ?>pos"><i
                                    data-feather="hard-drive"></i><span>POS</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Promo</h6>
                    <ul>
                        <li class="<?php echo ($page =='coupons') ? 'active' : '' ;?>"><a href="<?php echo base_url(); ?>coupons"><i
                                    data-feather="shopping-cart"></i><span>Coupons</span></a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Purchases</h6>
                    <ul>
                        <li class="<?php echo ($page =='purchase-list') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>purchase-list"><i
                                    data-feather="shopping-bag"></i><span>Purchases</span></a></li>
                        <li class="<?php echo ($page =='purchase-order-report') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>purchase-order-report"><i
                                    data-feather="file-minus"></i><span>Purchase Order</span></a></li>
                        <li class="<?php echo ($page =='purchase-returns') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>purchase-returns"><i data-feather="refresh-cw"></i><span>Purchase
                                    Return</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Finance & Accounts</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='expense-list'||$page == 'expense-category') ? 'active subdrop' : '' ;?>"><i
                                    data-feather="file-text"></i><span>Expenses</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>expense-list"
                                        class="<?php echo ($page =='expense-list') ? 'active' : '' ;?>">Expenses</a></li>
                                <li><a href="<?php echo base_url(); ?>expense-category"
                                        class="<?php echo ($page =='expense-category') ? 'active' : '' ;?>">Expense
                                        Category</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Peoples</h6>
                    <ul>
                        <li class="<?php echo ($page =='customers') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>customers"><i data-feather="user"></i><span>Customers</span></a>
                        </li>
                        <li class="<?php echo ($page =='suppliers') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>suppliers"><i data-feather="users"></i><span>Suppliers</span></a>
                        </li>
                        <li class="<?php echo ($page =='store-list') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>store-list"><i data-feather="home"></i><span>Stores</span></a>
                        </li>
                        <li class="<?php echo ($page =='warehouse') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>warehouse"><i
                                    data-feather="archive"></i><span>Warehouses</span></a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">HRM</h6>
                    <ul>
                        <li class="<?php echo ($page =='employees-grid'||$page =='employees-list'||$page =='edit-employee'||$page =='add-employee') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>employees-grid"><i
                                    data-feather="user"></i><span>Employees</span></a></li>
                        <li class="<?php echo ($page =='department-grid'||$page =='department-list') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>department-grid"><i
                                    data-feather="users"></i><span>Departments</span></a></li>
                        <li class="<?php echo ($page =='designation') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>designation"><i
                                    data-feather="git-merge"></i><span>Designation</span></a></li>
                        <li class="<?php echo ($page =='shift') ? 'active' : '' ;?>"><a href="shift"><i
                                    data-feather="shuffle"></i><span>Shifts</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='attendance-employee'||$page == 'attendance-admin') ? 'active subdrop' : '' ;?>"><i
                                    data-feather="book-open"></i><span>Attendence</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>attendance-employee"
                                        class="<?php echo ($page =='attendance-employee') ? 'active' : '' ;?>">Employee</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>attendance-admin"
                                        class="<?php echo ($page =='attendance-admin') ? 'active' : '' ;?>">Admin</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='leaves-admin'||$page == 'leaves-employee'||$page == 'leave-types') ? 'active subdrop' : '' ;?>"><i
                                    data-feather="calendar"></i><span>Leaves</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>leaves-admin"
                                        class="<?php echo ($page =='leaves-admin') ? 'active' : '' ;?>">Admin Leaves</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>leaves-employee"
                                        class="<?php echo ($page =='leaves-employee') ? 'active' : '' ;?>">Employee
                                        Leaves</a></li>
                                <li><a href="<?php echo base_url(); ?>leave-types"
                                        class="<?php echo ($page =='leave-types') ? 'active' : '' ;?>">Leave Types</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo ($page =='holidays') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>holidays"><i
                                    data-feather="credit-card"></i><span>Holidays</span></a>
                        </li>
                        <li class="submenu">
                            <a href="<?php echo base_url(); ?>payroll-list"
                                class="<?php echo ($page =='payroll-list'||$page == 'payslip') ? 'active subdrop' : '' ;?>"><i
                                    data-feather="dollar-sign"></i><span>Payroll</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>payroll-list"
                                        class="<?php echo ($page =='payroll-list') ? 'active' : '';?>">Employee Salary</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>payslip"
                                        class="<?php echo ($page =='payslip') ? 'active' : '' ;?>">Payslip</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Reports</h6>
                    <ul>
                        <li class="<?php echo ($page =='sales-report') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>sales-report"><i data-feather="bar-chart-2"></i><span>Sales
                                    Report</span></a></li>
                        <li class="<?php echo ($page =='purchase-report') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>purchase-report"><i data-feather="pie-chart"></i><span>Purchase
                                    report</span></a></li>
                        <li class="<?php echo ($page =='inventory-report') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>inventory-report"><i data-feather="inbox"></i><span>Inventory
                                    Report</span></a></li>
                        <li class="<?php echo ($page =='invoice-report') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>invoice-report"><i data-feather="file"></i><span>Invoice
                                    Report</span></a></li>
                        <li class="<?php echo ($page =='supplier-report') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>supplier-report"><i data-feather="user-check"></i><span>Supplier
                                    Report</span></a></li>
                        <li class="<?php echo ($page =='customer-report') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>customer-report"><i data-feather="user"></i><span>Customer
                                    Report</span></a></li>
                        <li class="<?php echo ($page =='expense-report') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>expense-report"><i data-feather="file"></i><span>Expense
                                    Report</span></a></li>
                        <li class="<?php echo ($page =='income-report') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>income-report"><i data-feather="bar-chart"></i><span>Income
                                    Report</span></a></li>
                        <li class="<?php echo ($page =='tax-reports') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>tax-reports"><i data-feather="database"></i><span>Tax
                                    Report</span></a></li>
                        <li class="<?php echo ($page =='profit-and-loss') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>profit-and-loss"><i data-feather="pie-chart"></i><span>Profit &
                                    Loss</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">User Management</h6>
                    <ul>
                        <li class="<?php echo ($page =='users') ? 'active' : '' ;?>"><a href="<?php echo base_url(); ?>users"><i
                                    data-feather="user-check"></i><span>Users</span></a>
                        </li>
                        <li class="<?php echo ($page =='roles-permissions'||$page =='permissions') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>roles-permissions"><i data-feather="shield"></i><span>Roles &
                                    Permissions</span></a></li>
                        <li class="<?php echo ($page =='delete-account') ? 'active' : '' ;?>"><a
                                href="<?php echo base_url(); ?>delete-account"><i data-feather="lock"></i><span>Delete Account
                                    Request</span></a></li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Pages</h6>
                    <ul>
                        <li class="<?php echo ($page =='profile') ? 'active' : '' ;?>"><a href="<?php echo base_url(); ?>profile"><i
                                    data-feather="user"></i><span>Profile</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i
                                    data-feather="shield"></i><span>Authentication</span><span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li class="submenu submenu-two"><a href="javascript:void(0);">Login<span
                                            class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>signin">Cover</a></li>
                                        <li><a href="<?php echo base_url(); ?>signin-2">Illustration</a></li>
                                        <li><a href="<?php echo base_url(); ?>signin-3">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two"><a href="javascript:void(0);">Register<span
                                            class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>register">Cover</a></li>
                                        <li><a href="<?php echo base_url(); ?>register-2">Illustration</a></li>
                                        <li><a href="<?php echo base_url(); ?>register-3">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two"><a href="javascript:void(0);">Forgot Password<span
                                            class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>forgot-password">Cover</a></li>
                                        <li><a href="<?php echo base_url(); ?>forgot-password-2">Illustration</a></li>
                                        <li><a href="<?php echo base_url(); ?>forgot-password-3">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two"><a href="javascript:void(0);">Reset Password<span
                                            class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>reset-password">Cover</a></li>
                                        <li><a href="<?php echo base_url(); ?>reset-password-2">Illustration</a></li>
                                        <li><a href="<?php echo base_url(); ?>reset-password-3">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two"><a href="javascript:void(0);">Email Verification<span
                                            class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>email-verification">Cover</a></li>
                                        <li><a href="<?php echo base_url(); ?>email-verification-2">Illustration</a></li>
                                        <li><a href="<?php echo base_url(); ?>email-verification-3">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two"><a href="javascript:void(0);">2 Step Verification<span
                                            class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>two-step-verification">Cover</a></li>
                                        <li><a href="<?php echo base_url(); ?>two-step-verification-2">Illustration</a></li>
                                        <li><a href="<?php echo base_url(); ?>two-step-verification-3">Basic</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url(); ?>lock-screen">Lock Screen</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="file-minus"></i><span>Error
                                    Pages</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>error-404">404 Error </a></li>
                                <li><a href="<?php echo base_url(); ?>error-500">500 Error </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='countries'||$page == 'states') ? 'active subdrop' : '' ;?>"><i
                                    data-feather="map"></i><span>Places</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>countries"
                                        class="<?php echo ($page =='countries') ? 'active' : '' ;?>">Countries</a></li>
                                <li><a href="<?php echo base_url(); ?>states"
                                        class="<?php echo ($page =='states') ? 'active' : '' ;?>">States</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo ($page =='blank-page') ? 'active' : '' ;?>">
                            <a href="<?php echo base_url(); ?>blank-page"><i data-feather="file"></i><span>Blank Page</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page =='coming-soon') ? 'active' : '' ;?>">
                            <a href="<?php echo base_url(); ?>coming-soon"><i data-feather="send"></i><span>Coming Soon</span>
                            </a>
                        </li>
                        <li class="<?php echo ($page =='under-maintenance') ? 'active' : '' ;?>">
                            <a href="<?php echo base_url(); ?>under-maintenance"><i
                                    data-feather="alert-triangle"></i><span>Under
                                    Maintenance</span> </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Settings</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='general-settings'||$page == 'security-settings'||$page == 'notification'||$page =='connected-apps') ? 'active subdrop' : '' ;?>"><i
                                    data-feather="settings"></i><span>General
                                    Settings</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>general-settings"
                                        class="<?php echo ($page =='general-settings') ? 'active' : '' ;?>">Profile</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>security-settings"
                                        class="<?php echo ($page =='security-settings') ? 'active' : '' ;?>">Security</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>notification"
                                        class="<?php echo ($page =='notification') ? 'active' : '' ;?>">Notifications</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>connected-apps"
                                        class="<?php echo ($page =='connected-apps') ? 'active' : '' ;?>">Connected
                                        Apps</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='system-settings'||$page == 'company-settings'||$page == 'localization-settings'||$page == 'prefixes'||$page == 'preference'||$page == 'appearance'||$page == 'social-authentication'||$page == 'language-settings'||$page =='language-settings-web') ? 'active subdrop' : '' ;?>"><i
                                    data-feather="globe"></i><span>Website
                                    Settings</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>system-settings"
                                        class="<?php echo ($page =='system-settings') ? 'active' : ''  ;?>">System
                                        Settings</a></li>
                                <li><a href="<?php echo base_url(); ?>company-settings"
                                        class="<?php echo ($page =='company-settings') ? 'active' : ''  ;?>">Company
                                        Settings </a></li>
                                <li><a href="<?php echo base_url(); ?>localization-settings"
                                        class="<?php echo ($page =='localization-settings') ? 'active' : ''  ;?>">Localization</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>prefixes"
                                        class="<?php echo ($page =='prefixes') ? 'active' : ''  ;?>">Prefixes</a></li>
                                <li><a href="<?php echo base_url(); ?>preference"
                                        class="<?php echo ($page =='preference') ? 'active' : ''  ;?>">Preference</a></li>
                                <li><a href="<?php echo base_url(); ?>appearance"
                                        class="<?php echo ($page =='appearance') ? 'active' : ''  ;?>">Appearance</a></li>
                                <li><a href="<?php echo base_url(); ?>social-authentication"
                                        class="<?php echo ($page =='social-authentication') ? 'active' : ''  ;?>">Social
                                        Authentication</a></li>
                                <li><a href="<?php echo base_url(); ?>language-settings"
                                        class="<?php echo ($page =='language-settings'||$page =='language-settings-web') ? 'active' : ''  ;?>">Language</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='invoice-settings'||$page == 'printer-settings'||$page == 'pos-settings'||$page == 'custom-fields') ? 'active subdrop' : '' ;?>"><i
                                    data-feather="smartphone"></i>
                                <span>App Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>invoice-settings"
                                        class="<?php echo ($page =='invoice-settings') ? 'active' : '' ;?>">Invoice</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>printer-settings"
                                        class="<?php echo ($page =='printer-settings') ? 'active' : '' ;?>">Printer</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>pos-settings"
                                        class="<?php echo ($page =='pos-settings') ? 'active' : '' ;?>">POS</a></li>
                                <li><a href="<?php echo base_url(); ?>custom-fields"
                                        class="<?php echo ($page =='custom-fields') ? 'active' : '' ;?>">Custom Fields</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='email-settings'||$page == 'sms-gateway'||$page == 'otp-settings'||$page =='gdpr-settings') ? 'active subdrop' : '' ;?>"><i
                                    data-feather="monitor"></i>
                                <span>System Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>email-settings"
                                        class="<?php echo ($page =='email-settings') ? 'active' : '' ;?>">Email</a></li>
                                <li><a href="<?php echo base_url(); ?>sms-gateway"
                                        class="<?php echo ($page =='sms-gateway') ? 'active' : '' ;?>">SMS Gateways</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>otp-settings"
                                        class="<?php echo ($page =='otp-settings') ? 'active' : '' ;?>">OTP</a></li>
                                <li><a href="<?php echo base_url(); ?>gdpr-settings"
                                        class="<?php echo ($page =='gdpr-settings') ? 'active' : '' ;?>">GDPR Cookies</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='payment-gateway-settings'||$page =='bank-settings-grid'||$page =='bank-settings-list'||$page =='tax-rates'||$page == 'currency-settings') ? 'active subdrop' : '' ;?>"><i
                                    data-feather="dollar-sign"></i>
                                <span>Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>payment-gateway-settings"
                                        class="<?php echo ($page =='payment-gateway-settings') ? 'active' : '';?>">Payment
                                        Gateway</a></li>
                                <li><a href="<?php echo base_url(); ?>bank-settings-grid"
                                        class="<?php echo ($page =='bank-settings-grid'||$page =='bank-settings-list') ? 'active' : '' ;?>">Bank
                                        Accounts</a></li>
                                <li><a href="<?php echo base_url(); ?>tax-rates"
                                        class="<?php echo ($page =='tax-rates') ? 'active' : '' ;?>">Tax Rates</a></li>
                                <li><a href="<?php echo base_url(); ?>currency-settings"
                                        class="<?php echo ($page =='currency-settings') ? 'active' : '' ;?>">Currencies</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='storage-settings'||$page == 'ban-ip-address') ? 'active subdrop' : '' ;?> "><i
                                    data-feather="hexagon"></i>
                                <span>Other Settings</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>storage-settings"
                                        class="<?php echo ($page =='storage-settings') ? 'active' : '' ;?>">Storage</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>ban-ip-address"
                                        class="<?php echo ($page =='ban-ip-address') ? 'active' : '' ;?>">Ban IP
                                        Address</a></li>
                            </ul>
                        </li>
                        <li class="<?php echo ($page =='signin') ? 'active' : '' ;?>">
                            <a href="<?php echo base_url(); ?>signin"><i data-feather="log-out"></i><span>Logout</span> </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">UI Interface</h6>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='ui-alerts'||$page == 'ui-accordion'||$page == 'ui-avatar'||$page == 'ui-badges'||$page == 'ui-borders'||$page == 'ui-buttons'||$page == 'ui-buttons-group'||$page == 'ui-breadcrumb'||$page == 'ui-cards'||$page =='ui-carousel'||$page == 'ui-colors'||$page == 'ui-dropdowns'||$page == 'ui-grid'||$page == 'ui-images'||$page == 'ui-lightbox'||$page == 'ui-modals'||$page == 'ui-media'||$page == 'ui-offcanvas'||$page == 'ui-pagination'||$page == 'ui-popovers'||$page == 'ui-progress'||$page == 'ui-placeholders'||$page == 'ui-rangeslider'||$page == 'ui-spinner'||$page == 'ui-sweetalerts'||$page =='ui-nav-tabs'||$page == 'ui-toasts'||$page == 'ui-tooltips'||$page == 'ui-typography'||$page =='ui-video') ? 'active subdrop' : '' ;?>">
                                <i data-feather="layers"></i><span>Base UI</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>ui-alerts"
                                        class="<?php echo ($page =='ui-alerts') ? 'active' : '' ;?>">Alerts</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-accordion"
                                        class="<?php echo ($page =='ui-accordion') ? 'active' : '' ;?>">Accordion</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-avatar"
                                        class="<?php echo ($page =='ui-avatar') ? 'active' : '' ;?>">Avatar</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-badges"
                                        class="<?php echo ($page =='ui-badges') ? 'active' : '' ;?>">Badges</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-borders"
                                        class="<?php echo ($page =='ui-borders') ? 'active' : '' ;?>">Border</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-buttons"
                                        class="<?php echo ($page =='ui-buttons') ? 'active' : '' ;?>">Buttons</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-buttons-group"
                                        class="<?php echo ($page =='ui-buttons-group') ? 'active' : '' ;?>">Button
                                        Group</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-breadcrumb"
                                        class="<?php echo ($page =='ui-breadcrumb') ? 'active' : '' ;?>">Breadcrumb</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>ui-cards"
                                        class="<?php echo ($page =='ui-cards') ? 'active' : '' ;?>">Card</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-carousel"
                                        class="<?php echo ($page =='ui-carousel') ? 'active' : '' ;?>">Carousel</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-colors"
                                        class="<?php echo ($page =='ui-colors') ? 'active' : '' ;?>">Colors</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-dropdowns"
                                        class="<?php echo ($page =='ui-dropdowns') ? 'active' : '' ;?>">Dropdowns</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-grid"
                                        class="<?php echo ($page =='ui-grid') ? 'active' : '' ;?>">Grid</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-images"
                                        class="<?php echo ($page =='ui-images') ? 'active' : '' ;?>">Images</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-lightbox"
                                        class="<?php echo ($page =='ui-lightbox') ? 'active' : '' ;?>">Lightbox</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-media"
                                        class="<?php echo ($page =='ui-media') ? 'active' : '' ;?>">Media</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-modals"
                                        class="<?php echo ($page =='ui-modals') ? 'active' : '' ;?>">Modals</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-offcanvas"
                                        class="<?php echo ($page =='ui-offcanvas') ? 'active' : '' ;?>">Offcanvas</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-pagination"
                                        class="<?php echo ($page =='ui-pagination') ? 'active' : '' ;?>">Pagination</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>ui-popovers"
                                        class="<?php echo ($page =='ui-popovers') ? 'active' : '' ;?>">Popovers</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-progress"
                                        class="<?php echo ($page =='ui-progress') ? 'active' : '' ;?>">Progress</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-placeholders"
                                        class="<?php echo ($page =='ui-placeholders') ? 'active' : '' ;?>">Placeholders</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>ui-rangeslider"
                                        class="<?php echo ($page =='ui-rangeslider') ? 'active' : '' ;?>">Range Slider</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>ui-spinner"
                                        class="<?php echo ($page =='ui-spinner') ? 'active' : '' ;?>">Spinner</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-sweetalerts"
                                        class="<?php echo ($page =='ui-sweetalerts') ? 'active' : '' ;?>">Sweet Alerts</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>ui-nav-tabs"
                                        class="<?php echo ($page =='ui-nav-tabs') ? 'active' : '' ;?>">Tabs</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-toasts"
                                        class="<?php echo ($page =='ui-toasts') ? 'active' : '' ;?>">Toasts</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-tooltips"
                                        class="<?php echo ($page =='ui-tooltips') ? 'active' : '' ;?>">Tooltips</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-typography"
                                        class="<?php echo ($page =='ui-typography') ? 'active' : '' ;?>">Typography</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>ui-video"
                                        class="<?php echo ($page =='ui-video') ? 'active' : '' ;?>">Video</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='ui-ribbon'||$page == 'ui-clipboard'||$page == 'ui-drag-drop'||$page == 'ui-rating'||$page == 'ui-text-editor'||$page == 'ui-counter'||$page == 'ui-scrollbar'||$page == 'ui-stickynote'||$page == 'ui-timeline') ? 'active subdrop' : '' ;?>">
                                <i data-feather="layers"></i><span>Advanced UI</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>ui-ribbon"
                                        class="<?php echo ($page =='ui-ribbon') ? 'active' : ''  ;?>">Ribbon</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-clipboard"
                                        class="<?php echo ($page =='ui-clipboard') ? 'active' : ''  ;?>">Clipboard</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-drag-drop"
                                        class="<?php echo ($page =='ui-drag-drop') ? 'active' : ''  ;?>">Drag & Drop</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>ui-rating"
                                        class="<?php echo ($page =='ui-rating') ? 'active' : ''  ;?>">Rating</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-text-editor"
                                        class="<?php echo ($page =='ui-text-editor') ? 'active' : ''  ;?>">Text Editor</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>ui-counter"
                                        class="<?php echo ($page =='ui-counter') ? 'active' : ''  ;?>">Counter</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-scrollbar"
                                        class="<?php echo ($page =='ui-scrollbar') ? 'active' : ''  ;?>">Scrollbar</a></li>
                                <li><a href="<?php echo base_url(); ?>ui-stickynote"
                                        class="<?php echo ($page =='ui-stickynote') ? 'active' : ''  ;?>">Sticky Note</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>ui-timeline"
                                        class="<?php echo ($page =='ui-timeline') ? 'active' : ''  ;?>">Timeline</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='chart-apex'||$page == 'chart-c3'||$page == 'chart-js'||$page == 'chart-morris'||$page == 'chart-flot'||$page == 'chart-peity') ? 'active subdrop' : ''  ;?>"><i
                                    data-feather="bar-chart-2"></i>
                                <span>Charts</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>chart-apex"
                                        class="<?php echo ($page =='chart-apex') ? 'active' : '' ;?>">Apex Charts</a></li>
                                <li><a href="<?php echo base_url(); ?>chart-c3"
                                        class="<?php echo ($page =='chart-c3') ? 'active' : '' ;?>">Chart C3</a></li>
                                <li><a href="<?php echo base_url(); ?>chart-js"
                                        class="<?php echo ($page =='chart-js') ? 'active' : '' ;?>">Chart Js</a></li>
                                <li><a href="<?php echo base_url(); ?>chart-morris"
                                        class="<?php echo ($page =='chart-morris') ? 'active' : '' ;?>">Morris Charts</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>chart-flot"
                                        class="<?php echo ($page =='chart-flot') ? 'active' : '' ;?>">Flot Charts</a></li>
                                <li><a href="<?php echo base_url(); ?>chart-peity"
                                        class="<?php echo ($page =='chart-peity') ? 'active' : '' ;?>">Peity Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='icon-fontawesome'||$page == 'icon-feather'||$page == 'icon-ionic'||$page =='icon-material'||$page == 'icon-pe7'||$page =='icon-simpleline'||$page =='icon-themify'||$page =='icon-weather'||$page =='icon-typicon'||$page =='icon-flag') ? 'active subdrop' : '' ;?>"><i
                                    data-feather="database"></i>
                                <span>Icons</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>icon-fontawesome"
                                        class="<?php echo ($page =='icon-fontawesome') ? 'active' : '' ;?>">Fontawesome
                                        Icons</a></li>
                                <li><a href="<?php echo base_url(); ?>icon-feather"
                                        class="<?php echo ($page =='icon-feather') ? 'active' : '' ;?>">Feather Icons</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>icon-ionic"
                                        class="<?php echo ($page =='icon-ionic') ? 'active' : '' ;?>">Ionic Icons</a></li>
                                <li><a href="<?php echo base_url(); ?>icon-material"
                                        class="<?php echo ($page =='icon-material') ? 'active' : '' ;?>">Material Icons</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>icon-pe7"
                                        class="<?php echo ($page =='icon-pe7') ? 'active' : '' ;?>">Pe7 Icons</a></li>
                                <li><a href="<?php echo base_url(); ?>icon-simpleline"
                                        class="<?php echo ($page =='icon-simpleline') ? 'active' : '' ;?>">Simpleline
                                        Icons</a></li>
                                <li><a href="<?php echo base_url(); ?>icon-themify"
                                        class="<?php echo ($page =='icon-themify') ? 'active' : '' ;?>">Themify Icons</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>icon-weather"
                                        class="<?php echo ($page =='icon-weather') ? 'active' : '' ;?>">Weather Icons</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>icon-typicon"
                                        class="<?php echo ($page =='icon-typicon') ? 'active' : '' ;?>">Typicon Icons</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>icon-flag"
                                        class="<?php echo ($page =='icon-flag') ? 'active' : '' ;?>">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='form-wizard'||$page == 'form-select2'||$page == 'form-validation'||$page == 'form-floating-labels'||$page == 'form-vertical'||$page == 'form-horizontal'||$page == 'form-basic-inputs'||$page == 'form-checkbox-radios'||$page =='form-input-groups'||$page =='form-grid-gutters'||$page =='form-select'||$page =='form-mask'||$page =='form-fileupload') ? 'active subdrop' : '' ;?>">
                                <i data-feather="edit"></i><span>Forms</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);"
                                        class="<?php echo ($page =='form-basic-inputs'||$page == 'form-checkbox-radios'||$page == 'form-input-groups'||$page == 'form-grid-gutters'||$page =='form-select'||$page == 'form-mask'||$page =='form-fileupload') ? 'active subdrop' : '' ;?>">Form
                                        Elements<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>form-basic-inputs"
                                                class="<?php echo ($page =='form-basic-inputs') ? 'active' : '' ;?>">Basic
                                                Inputs</a></li>
                                        <li><a href="<?php echo base_url(); ?>form-checkbox-radios"
                                                class="<?php echo ($page =='form-checkbox-radios') ? 'active' : '' ;?>">Checkbox
                                                & Radios</a></li>
                                        <li><a href="<?php echo base_url(); ?>form-input-groups"
                                                class="<?php echo ($page =='form-input-groups') ? 'active' : '' ;?>">Input
                                                Groups</a></li>
                                        <li><a href="<?php echo base_url(); ?>form-grid-gutters"
                                                class="<?php echo ($page =='form-grid-gutters') ? 'active' : '' ;?>">Grid &
                                                Gutters</a></li>
                                        <li><a href="<?php echo base_url(); ?>form-select"
                                                class="<?php echo ($page =='form-select') ? 'active' : '' ;?>">Form
                                                Select</a></li>
                                        <li><a href="<?php echo base_url(); ?>form-mask"
                                                class="<?php echo ($page =='form-mask') ? 'active' : '' ;?>">Input
                                                Masks</a></li>
                                        <li><a href="<?php echo base_url(); ?>form-fileupload"
                                                class="<?php echo ($page =='form-fileupload') ? 'active' : '' ;?>">File
                                                Uploads</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);"
                                        class="<?php echo ($page =='form-horizontal'||$page == 'form-vertical'||$page == 'form-floating-labels') ? 'active subdrop' : '' ;?>">Layouts<span
                                            class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>form-horizontal"
                                                class="<?php echo ($page =='form-horizontal') ? 'active' : '' ;?>">Horizontal
                                                Form</a></li>
                                        <li><a href="<?php echo base_url(); ?>form-vertical"
                                                class="<?php echo ($page =='form-vertical') ? 'active' : '' ;?>">Vertical
                                                Form</a></li>
                                        <li><a href="<?php echo base_url(); ?>form-floating-labels"
                                                class="<?php echo ($page =='form-floating-labels') ? 'active' : '' ;?>">Floating
                                                Labels</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url(); ?>form-validation"
                                        class="<?php echo ($page =='form-validation') ? 'active' : '' ;?>">Form
                                        Validation</a></li>
                                <li><a href="<?php echo base_url(); ?>form-select2"
                                        class="<?php echo ($page =='form-select2') ? 'active' : '' ;?>">Select2</a></li>
                                <li><a href="<?php echo base_url(); ?>form-wizard"
                                        class="<?php echo ($page =='form-wizard') ? 'active' : '' ;?>">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="<?php echo ($page =='tables-basic'||$page =='data-tables') ? 'active subdrop' : '' ;?>"><i
                                    data-feather="columns"></i><span>Tables</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>tables-basic"
                                        class="<?php echo ($page =='tables-basic') ? 'active' : '' ;?>">Basic Tables </a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>data-tables"
                                        class="<?php echo ($page =='data-tables') ? 'active' : '' ;?>">Data Table </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu-open">
                    <h6 class="submenu-hdr">Help</h6>
                    <ul>
                        <li><a href="javascript:void(0);"><i
                                    data-feather="file-text"></i><span>Documentation</span></a></li>
                        <li><a href="javascript:void(0);"><i data-feather="lock"></i><span>Changelog v2.0.3</span></a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><i data-feather="file-minus"></i><span>Multi
                                    Level</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="javascript:void(0);">Level 1.1</a></li>
                                <li class="submenu submenu-two"><a href="javascript:void(0);">Level 1.2<span
                                            class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Level 2.1</a></li>
                                        <li class="submenu submenu-two submenu-three"><a
                                                href="javascript:void(0);">Level 2.2<span
                                                    class="menu-arrow inside-submenu inside-submenu-two"></span></a>
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
</div>
<!-- /Sidebar -->





	<!-- Sidebar -->
<div class="sidebar collapsed-sidebar" id="collapsed-sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu-2" class="sidebar-menu sidebar-menu-three">
            <aside id="aside" class="ui-aside">
                <ul class="tab nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link <?php echo ($page =='dashboard'||$page == '/' ||$page =='sales-dashboard'||$page == 'video-call'||$page == 'audio-call'||$page == 'call-history'||$page == 'chat'||$page == 'calendar'||$page =='email'||$page == 'todo'||$page == 'notes'||$page == 'file-manager'||$page == 'file-archived'||$page =='file-document'||$page =='file-favourites'||$page =='file-manager-seleted'||$page =='file-recent'||$page =='file-shared'||$page =='file-manager-deleted') ? 'active' : '' ;?>" href="#home" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home" role="tab" aria-selected="true">
                            <img src="<?php echo base_url(); ?>/assets/img/icons/menu-icon.svg" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link <?php echo ($page =='product-list'||$page == 'product-details' ||$page == 'edit-product'||$page == 'add-product'||$page ==  'expired-products'||$page ==  'low-stocks'||$page ==  'category-list'||$page ==  'sub-categories'||$page ==  'brand-list'||$page ==  'units'||$page ==  'varriant-attributes'||$page ==  'warranty'||$page =='barcode'||$page =='qrcode') ? 'active' : '' ;?>" href="#messages" id="messages-tab" data-bs-toggle="tab"
                            data-bs-target="#product" role="tab" aria-selected="false">
                            <img src="<?php echo base_url(); ?>/assets/img/icons/product.svg" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link <?php echo ($page =='sales-list'||$page == 'sales-returns'||$page ==  'quotation-list'||$page == 'pos'||$page == 'coupons') ? 'active' : '' ;?>" href="#profile" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#sales" role="tab" aria-selected="false">
                            <img src="<?php echo base_url(); ?>/assets/img/icons/sales1.svg" alt="">
                        </a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link <?php echo ($page =='expense-list'||$page == 'expense-category'||$page == 'purchase-list'||$page ==  'purchase-order-report'||$page ==  'purchase-returns'||$page ==  'manage-stocks'||$page ==  'stock-adjustment'||$page ==  'stock-transfer') ? 'active' : '' ;?>" href="#report" id="report-tab" data-bs-toggle="tab"
                            data-bs-target="#purchase" role="tab" aria-selected="true">
                            <img src="<?php echo base_url(); ?>/assets/img/icons/purchase1.svg" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link <?php echo ($page =='customers'||$page ==  'suppliers'||$page == 'store-list'||$page == 'warehouse') ? 'active' : '' ;?>" href="#set" id="set-tab" data-bs-toggle="tab"
                            data-bs-target="#user" role="tab" aria-selected="true">
                            <img src="<?php echo base_url(); ?>/assets/img/icons/users1.svg" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link <?php echo ($page =='employees-grid'||$page == 'employees-list'||$page == 'edit-employee'||$page == 'add-employee'||$page == 'department-grid'||$page == 'department-list'||$page == 'designation'||$page == 'shift'||$page == 'attendance-employee'||$page == 'attendance-admin'||$page == 'leaves-admin'||$page == 'leaves-employee'||$page == 'leave-types'||$page == 'holidays'||$page == 'payroll-list') ? 'active' : '' ;?>" href="#set2" id="set-tab2" data-bs-toggle="tab"
                            data-bs-target="#employee" role="tab" aria-selected="true">
                            <img src="<?php echo base_url(); ?>/assets/img/icons/calendars.svg" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link <?php echo ($page =='sales-report'||$page == 'purchase-report'||$page == 'inventory-report'||$page == 'invoice-report'||$page == 'supplier-report'||$page == 'customer-report'||$page == 'expense-report'||$page == 'income-report'||$page == 'tax-reports'||$page == 'profit-and-loss') ? 'active' : '' ;?>" href="#set3" id="set-tab3" data-bs-toggle="tab"
                            data-bs-target="#report" role="tab" aria-selected="true">
                            <img src="<?php echo base_url(); ?>/assets/img/icons/printer.svg" alt="">
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link <?php echo ($page =='tables-basic'||$page == 'data-tables'||$page == 'form-wizard'||$page == 'form-select2'||$page == 'form-validation'||$page == 'form-floating-labels'||$page == 'form-vertical'||$page == 'form-horizontal'||$page == 'form-basic-inputs'||$page == 'form-checkbox-radios'||$page == 'form-input-groups'||$page == 'form-grid-gutters'||$page == 'form-select'||$page == 'form-mask'||$page == 'form-fileupload'||$page == 'icon-fontawesome'||$page == 'icon-feather'||$page == 'icon-ionic'||$page == 'icon-material'||$page == 'icon-pe7'||$page == 'icon-simpleline'||$page == 'icon-themify'||$page == 'icon-weather'||$page == 'icon-typicon'||$page == 'icon-flag'||$page == 'chart-apex'||$page == 'chart-c3'||$page == 'chart-js'||$page == 'chart-morris'||$page == 'chart-flot'||$page == 'chart-peity'||$page == 'roles-permissions'||$page == 'permissions'||$page == 'delete-account'||$page == 'users'||$page == 'ui-alerts'||$page == 'ui-accordion'||$page == 'ui-avatar'||$page == 'ui-badges'||$page == 'ui-borders'||$page == 'ui-buttons'||$page == 'ui-buttons-group'||$page == 'ui-breadcrumb'||$page == 'ui-cards'||$page == 'ui-carousel'||$page == 'ui-colors'||$page == 'ui-dropdowns'||$page == 'ui-grid'||$page == 'ui-images'||$page == 'ui-lightbox'||$page == 'ui-modals'||$page == 'ui-media'||$page == 'ui-offcanvas'||$page == 'ui-pagination'||$page == 'ui-popovers'||$page == 'ui-progress'||$page == 'ui-placeholders'||$page == 'ui-rangeslider'||$page == 'ui-spinner'||$page == 'ui-sweetalerts'||$page == 'ui-nav-tabs'||$page == 'ui-toasts'||$page == 'ui-tooltips'||$page == 'ui-typography'||$page == 'ui-video'||$page == 'ui-ribbon'||$page == 'ui-clipboard'||$page == 'ui-drag-drop'||$page == 'ui-rating'||$page == 'ui-text-editor'||$page == 'ui-counter'||$page == 'ui-scrollbar'||$page == 'ui-stickynote'||$page == 'ui-timeline')? 'active': '' ;?>" href="#set4" id="set-tab4" data-bs-toggle="tab"
                            data-bs-target="#document" role="tab" aria-selected="true">
                            <i data-feather="file-minus"></i>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link <?php echo ($page =='countries'||$page ==  'states'||$page ==  'blank-page') ? 'active' : '' ;?>" href="#set5" id="set-tab6" data-bs-toggle="tab"
                            data-bs-target="#permission" role="tab" aria-selected="true">
                            <i data-feather="user"></i>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="tablinks nav-link <?php echo ($page =='general-settings'||$page ==  'security-settings'||$page ==  'notification'||$page == 'connected-apps'||$page == 'system-settings'||$page == 'company-settings'||$page == 'localization-settings'||$page == 'prefixes'||$page == 'preference'||$page == 'appearance'||$page == 'social-authentication'||$page == 'language-settings'||$page == 'language-settings-web'||$page == 'invoice-settings'||$page == 'printer-settings'||$page == 'pos-settings'||$page == 'custom-fields'||$page == 'email-settings'||$page == 'sms-gateway'||$page == 'otp-settings'||$page == 'gdpr-settings'||$page == 'payment-gateway-settings'||$page == 'bank-settings-grid'||$page == 'bank-settings-list'||$page == 'tax-rates'||$page == 'currency-settings'||$page == 'storage-settings'||$page == 'ban-ip-address'||$page == 'activities') ? 'active' : '' ;?>" href="#set6" id="set-tab5" data-bs-toggle="tab"
                            data-bs-target="#settings" role="tab" aria-selected="true">
                            <i data-feather="settings"></i>
                        </a>
                    </li>
                </ul>
            </aside>
            <div class="tab-content tab-content-four pt-2">
                <ul class="tab-pane <?php echo ($page =='dashboard'||$page == '/'||$page =='sales-dashboard'||$page == 'video-call'||$page == 'audio-call'||$page == 'call-history'||$page == 'chat'||$page == 'calendar'||$page == 'email'||$page == 'todo'||$page == 'notes'||$page == 'file-manager'||$page == 'file-archived'||$page == 'file-document'||$page == 'file-favourites'||$page == 'file-manager-seleted'||$page == 'file-recent'||$page == 'file-shared'||$page == 'file-manager-deleted') ? 'active' : '' ;?>"
                    id="home" aria-labelledby="home-tab">
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='dashboard'||$page ==  '/'||$page ==  'sales-dashboard') ? 'active subdrop' : '' ;?>"><span>Dashboard</span>
                            <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>dashboard"
                                    class="<?php echo ($page =='dashboard'||$page=='/') ? 'active' : '' ;?>">Admin Dashboard</a></li>
                            <li><a href="<?php echo base_url(); ?>sales-dashboard"
                                    class="<?php echo ($page =='sales-dashboard') ? 'active' : '' ;?>">Sales Dashboard</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='chat'||$page == 'file-manager'||$page == 'notes'||$page == 'todo'||$page == 'email'||$page == 'calendar'||$page == 'call-history'||$page == 'audio-call'||$page == 'video-call'||$page == 'file-archived'||$page == 'file-document'||$page == 'file-favourites'||$page == 'file-manager-seleted'||$page == 'file-recent'||$page == 'file-shared'||$page == 'file-manager-deleted') ? 'active subdrop' : '' ;?>"><span>Application</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>chat"
                                    class="<?php echo ($page =='chat') ? 'active' : '' ;?>">Chat</a></li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);"
                                    class="<?php echo ($page =='video-call'||$page == 'audio-call'||$page == 'call-history') ? 'active subdrop' : '' ;?>"><span>Call</span><span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a class="<?php echo ($page =='video-call') ? 'active' : '' ;?>"
                                           href="<?php echo base_url(); ?>video-call">Video Call</a></li>
                                    <li><a class="<?php echo ($page =='audio-call') ? 'active' : '' ;?>"
                                           href="<?php echo base_url(); ?>audio-call">Audio Call</a></li>
                                    <li><a class="<?php echo ($page =='call-history') ? 'active' : '' ;?>"
                                           href="<?php echo base_url(); ?>call-history">Call History</a></li>
                                </ul>
                            </li>
                            <li><a class="<?php echo ($page =='calendar') ? 'active' : '' ;?>"
                                   href="<?php echo base_url(); ?>calendar">Calendar</a></li>
                            <li><a class="<?php echo ($page =='email') ? 'active' : '' ;?>"
                                   href="<?php echo base_url(); ?>email">Email</a></li>
                            <li><a class="<?php echo ($page =='todo') ? 'active' : '' ;?>"href="<?php echo base_url(); ?>todo">To
                                    Do</a></li>
                            <li><a class="<?php echo ($page =='notes') ? 'active' : '' ;?>"
                                   href="<?php echo base_url(); ?>notes">Notes</a></li>
                            <li><a class="<?php echo ($page =='file-manager'||$page =='file-archived'||$page =='file-document'||$page =='file-favourites'||$page =='file-manager-seleted'||$page =='file-recent'||$page =='file-shared') ? 'active' : '' ;?>"
                                   href="<?php echo base_url(); ?>file-manager">File Manager</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="tab-pane <?php echo ($page =='product-list'||$page =='product-details'||$page =='edit-product'||$page =='add-product'||$page =='expired-products'||$page =='low-stocks'||$page =='category-list'||$page =='sub-categories'||$page =='brand-list'||$page =='units'||$page =='varriant-attributes'||$page =='warranty'||$page =='barcode'||$page =='qrcode') ? 'active' : '' ;?>"
                    id="product" aria-labelledby="messages-tab">
                    <li><a href="<?php echo base_url(); ?>product-list"
                            class="<?php echo ($page =='product-list'||$page =='product-details') ? 'active' : '' ;?>"><span>Products</span></a></li>
                    <li><a href="<?php echo base_url(); ?>add-product"
                            class="<?php echo ($page =='add-product'||$page =='edit-product') ? 'active' : '' ;?>"><span>Create Product</span></a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>expired-products"
                            class="<?php echo ($page =='expired-products') ? 'active' : '' ;?>"><span>Expired
                                Products</span></a></li>
                    <li><a href="<?php echo base_url(); ?>low-stocks"
                            class="<?php echo ($page =='low-stocks') ? 'active' : '' ;?>"><span>Low Stocks</span></a></li>
                    <li><a href="<?php echo base_url(); ?>category-list"
                            class="<?php echo ($page =='category-list') ? 'active' : '' ;?>"><span>Category</span></a></li>
                    <li><a href="<?php echo base_url(); ?>sub-categories"
                            class="<?php echo ($page =='sub-categories') ? 'active' : '' ;?>"><span>Sub Category</span></a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>brand-list"
                            class="<?php echo ($page =='brand-list') ? 'active' : '' ;?>"><span>Brands</span></a></li>
                    <li><a href="<?php echo base_url(); ?>units"
                            class="<?php echo ($page =='units') ? 'active' : '' ;?>"><span>Units</span></a></li>
                    <li><a href="<?php echo base_url(); ?>varriant-attributes"
                            class="<?php echo ($page =='varriant-attributes') ? 'active' : '' ;?>"><span>Variant
                                Attributes</span></a></li>
                    <li><a href="<?php echo base_url(); ?>warranty"
                            class="<?php echo ($page =='warranty') ? 'active' : '' ;?>"><span>Warranties</span></a></li>
                    <li><a href="<?php echo base_url(); ?>barcode"
                            class="<?php echo ($page =='barcode') ? 'active' : '' ;?>"><span>Print Barcode</span></a></li>
                    <li><a href="<?php echo base_url(); ?>qrcode"
                            class="<?php echo ($page =='qrcode') ? 'active' : '' ;?>"><span>Print QR Code</span></a></li>
                </ul>
                <ul class="tab-pane <?php echo ($page =='sales-list'||$page =='sales-returns'||$page =='quotation-list'||$page =='pos'||$page =='coupons') ? 'active' : '' ;?>"
                    id="sales" aria-labelledby="profile-tab">
                    <li><a href="<?php echo base_url(); ?>sales-list"
                            class="<?php echo ($page =='sales-list') ? 'active' : '' ;?>"><span>Sales</span></a></li>
                    <li><a href="<?php echo base_url(); ?>invoice-report"
                            ><span>Invoices</span></a></li>
                    <li><a href="<?php echo base_url(); ?>sales-returns"
                            class="<?php echo ($page =='sales-returns') ? 'active' : ''  ;?>"><span>Sales Return</span></a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>quotation-list"
                            class="<?php echo ($page =='quotation-list') ? 'active' : ''  ;?>"><span>Quotation</span></a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>pos"
                            class="<?php echo ($page =='pos') ? 'active' : ''  ;?>"><span>POS</span></a></li>
                    <li><a href="<?php echo base_url(); ?>coupons"
                            class="<?php echo ($page =='coupons') ? 'active' : ''  ;?>"><span>Coupons</span></a></li>
                </ul>
                <ul class="tab-pane <?php echo ($page =='expense-list'||$page =='expense-category'||$page =='purchase-list'||$page =='purchase-order-report'||$page =='purchase-returns'||$page =='manage-stocks'||$page =='stock-adjustment'||$page =='stock-transfer') ? 'active' : '' ;?>"
                    id="purchase" aria-labelledby="report-tab">
                    <li><a href="<?php echo base_url(); ?>purchase-list"
                            class="<?php echo ($page =='purchase-list') ? 'active' : '' ;?>"><span>Purchases</span></a></li>
                    <li><a href="<?php echo base_url(); ?>purchase-order-report"
                            class="<?php echo ($page =='purchase-order-report') ? 'active' : '' ;?>"><span>Purchase
                                Order</span></a></li>
                    <li><a href="<?php echo base_url(); ?>purchase-returns"
                            class="<?php echo ($page =='purchase-returns') ? 'active' : '' ;?>"><span>Purchase
                                Return</span></a></li>
                    <li><a href="<?php echo base_url(); ?>manage-stocks"
                            class="<?php echo ($page =='manage-stocks') ? 'active' : '' ;?>"><span>Manage Stock</span></a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>stock-adjustment"
                            class="<?php echo ($page =='stock-adjustment') ? 'active' : '' ;?>"><span>Stock
                                Adjustment</span></a></li>
                    <li><a href="<?php echo base_url(); ?>stock-transfer"
                            class="<?php echo ($page =='stock-transfer') ? 'active' : '' ;?>"><span>Stock
                                Transfer</span></a></li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='expense-list'||$page =='expense-category') ? 'active subdrop' : '' ;?>"><span>Expenses</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>expense-list"
                                    class="<?php echo ($page =='expense-list') ? 'active' : '' ;?>">Expenses</a></li>
                            <li><a href="<?php echo base_url(); ?>expense-category"
                                    class="<?php echo ($page =='expense-category') ? 'active' : '' ;?>">Expense Category</a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <ul class="tab-pane <?php echo ($page =='customers'||$page =='suppliers'||$page =='store-list'||$page =='warehouse') ? 'active' : '' ;?>"
                    id="user" aria-labelledby="set-tab">

                    <li><a href="<?php echo base_url(); ?>customers"
                            class="<?php echo ($page =='customers') ? 'active' : '';?>"><span>Customers</span></a></li>
                    <li><a href="<?php echo base_url(); ?>suppliers"
                            class="<?php echo ($page =='suppliers') ? 'active' : '';?>"><span>Suppliers</span></a></li>
                    <li><a href="<?php echo base_url(); ?>store-list"
                            class="<?php echo ($page =='store-list') ? 'active' : '' ;?>"><span>Stores</span></a></li>
                    <li><a href="<?php echo base_url(); ?>warehouse"
                            class="<?php echo ($page =='warehouse') ? 'active' : '';?>"><span>Warehouses</span></a></li>

                </ul>
                <ul class="tab-pane <?php echo ($page =='employees-grid'||$page =='employees-list'||$page =='edit-employee'||$page =='add-employee'||$page =='department-grid'||$page =='department-list'||$page =='designation'||$page =='shift'||$page =='attendance-employee'||$page =='attendance-admin'||$page =='leaves-admin'||$page =='leaves-employee'||$page =='leave-types'||$page =='holidays'||$page =='payroll-list'||$page =='payslip'||$page =='payslip') ? 'active' : '' ;?>"
                    id="employee" aria-labelledby="set-tab2">
                    <li><a href="<?php echo base_url(); ?>employees-grid"
                            class="<?php echo ($page =='employees-grid'||$page =='employees-list'||$page =='edit-employee'||$page =='add-employee') ? 'active' : '' ;?>"><span>Employees</span></a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>department-grid"
                            class="<?php echo ($page =='department-grid'||$page =='department-list') ? 'active' : '' ;?>"><span>Departments</span></a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>designation"
                            class="<?php echo ($page =='designation') ? 'active' : '' ;?>"><span>Designation</span></a></li>
                    <li><a href="<?php echo base_url(); ?>shift"
                            class="<?php echo ($page =='shift') ? 'active' : '' ;?>"><span>Shifts</span></a></li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='attendance-employee'||$page =='attendance-admin') ? 'active subdrop' : '' ;?>"><span>Attendence</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>attendance-employee"
                                    class="<?php echo ($page =='attendance-employee') ? 'active' : '' ;?>">Employee
                                    Attendence</a></li>
                            <li><a href="<?php echo base_url(); ?>attendance-admin"
                                    class="<?php echo ($page =='attendance-admin') ? 'active' : '' ;?>">Admin
                                    Attendence</a></li>
                        </ul>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='leaves-admin'||$page =='leaves-employee'||$page =='leave-types') ? 'active subdrop' : '' ;?>"><span>Leaves</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>leaves-admin"
                                    class="<?php echo ($page =='leaves-admin') ? 'active' : '' ;?>">Admin Leaves</a></li>
                            <li><a href="<?php echo base_url(); ?>leaves-employee"
                                    class="<?php echo ($page =='leaves-employee') ? 'active' : '' ;?>">Employee Leaves</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>leave-types"
                                    class="<?php echo ($page =='leave-types') ? 'active' : '' ;?>">Leave Types</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url(); ?>holidays"
                            class="<?php echo ($page =='holidays') ? 'active' : '' ;?>"><span>Holidays</span></a></li>
                    <li class="submenu">
                        <a href="<?php echo base_url(); ?>payroll-list"
                            class="<?php echo ($page =='payroll-list'||$page== 'payslip') ? 'active subdrop' : '' ;?>"><span>Payroll</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>payroll-list"
                                    class="<?php echo ($page =='payroll-list') ? 'active' : '' ;?>">Employee Salary</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>payslip"
                                    class="<?php echo ($page =='payslip') ? 'active' : '' ;?>">Payslip</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="tab-pane <?php echo ($page =='sales-report'||$page=='purchase-report'||$page=='inventory-report'||$page=='invoice-report'||$page=='supplier-report'||$page=='customer-report'||$page=='expense-report'||$page=='income-report'||$page=='tax-reports'||$page=='profit-and-loss') ? 'active' : '' ;?>"
                    id="report" aria-labelledby="set-tab3">
                    <li><a href="<?php echo base_url(); ?>sales-report"
                            class="<?php echo ($page =='sales-report') ? 'active' : '' ;?>"><span>Sales Report</span></a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>purchase-report"
                            class="<?php echo ($page =='purchase-report') ? 'active' : '' ;?>"><span>Purchase
                                report</span></a></li>
                    <li><a href="<?php echo base_url(); ?>inventory-report"
                            class="<?php echo ($page =='inventory-report') ? 'active' : '' ;?>"><span>Inventory
                                Report</span></a></li>
                    <li><a href="<?php echo base_url(); ?>invoice-report"
                            class="<?php echo ($page =='invoice-report') ? 'active' : '' ;?>"><span>Invoice
                                Report</span></a></li>
                    <li><a href="<?php echo base_url(); ?>supplier-report"
                            class="<?php echo ($page =='supplier-report') ? 'active' : '' ;?>"><span>Supplier
                                Report</span></a></li>
                    <li><a href="<?php echo base_url(); ?>customer-report"
                            class="<?php echo ($page =='customer-report') ? 'active' : '' ;?>"><span>Customer
                                Report</span></a></li>
                    <li><a href="<?php echo base_url(); ?>expense-report"
                            class="<?php echo ($page =='expense-report') ? 'active' : '' ;?>"><span>Expense
                                Report</span></a></li>
                    <li><a href="<?php echo base_url(); ?>income-report"
                            class="<?php echo ($page =='income-report') ? 'active' : '' ;?>"><span>Income Report</span></a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>tax-reports"
                            class="<?php echo ($page =='tax-reports') ? 'active' : '' ;?>"><span>Tax Report</span></a></li>
                    <li><a href="<?php echo base_url(); ?>profit-and-loss"
                            class="<?php echo ($page =='profit-and-loss') ? 'active' : '' ;?>"><span>Profit &
                                Loss</span></a></li>
                </ul>
                <ul class="tab-pane <?php echo ($page =='tables-basic'||$page=='data-tables'||$page=='form-wizard'||$page=='form-select2'||$page=='form-validation'||$page=='form-floating-labels'||$page=='form-vertical'||$page=='form-horizontal'||$page=='form-basic-inputs'||$page=='form-checkbox-radios'||$page=='form-input-groups'||$page=='form-grid-gutters'||$page=='form-select'||$page=='form-mask'||$page=='form-fileupload'||$page=='icon-fontawesome'||$page=='icon-feather'||$page=='icon-ionic'||$page=='icon-material'||$page=='icon-pe7'||$page=='icon-simpleline'||$page=='icon-themify'||$page=='icon-weather'||$page=='icon-typicon'||$page=='icon-flag'||$page=='chart-apex'||$page=='chart-c3'||$page=='chart-js'||$page=='chart-morris'||$page=='chart-flot'||$page=='chart-peity'||$page=='roles-permissions'||$page=='permissions'||$page=='delete-account'||$page=='users'||$page=='ui-alerts'||$page=='ui-accordion'||$page=='ui-avatar'||$page=='ui-badges'||$page=='ui-borders'||$page=='ui-buttons'||$page=='ui-buttons-group'||$page=='ui-breadcrumb'||$page=='ui-cards'||$page=='ui-carousel'||$page=='ui-colors'||$page=='ui-dropdowns'||$page=='ui-grid'||$page=='ui-images'||$page=='ui-lightbox'||$page=='ui-modals'||$page=='ui-media'||$page=='ui-offcanvas'||$page=='ui-pagination'||$page=='ui-popovers'||$page=='ui-progress'||$page=='ui-placeholders'||$page=='ui-rangeslider'||$page=='ui-spinner'||$page=='ui-sweetalerts'||$page=='ui-nav-tabs'||$page=='ui-toasts'||$page=='ui-tooltips'||$page=='ui-typography'||$page=='ui-video'||$page=='ui-ribbon'||$page=='ui-clipboard'||$page=='ui-drag-drop'||$page=='ui-rangeslider'||$page=='ui-rating'||$page=='ui-text-editor'||$page=='ui-counter'||$page=='ui-scrollbar'||$page=='ui-stickynote'||$page=='ui-timeline')? 'active': '' ;?>"
                    id="permission" aria-labelledby="set-tab4">
                    <li><a href="<?php echo base_url(); ?>users"
                            class="<?php echo ($page =='users') ? 'active' : '' ;?>"><span>Users</span></a></li>
                    <li><a href="<?php echo base_url(); ?>roles-permissions"
                            class="<?php echo ($page =='roles-permissions'||$page=='permissions') ? 'active' : '' ;?>"><span>Roles &
                                Permissions</span></a></li>
                    <li><a href="<?php echo base_url(); ?>delete-account"
                            class="<?php echo ($page =='delete-account') ? 'active' : '' ;?>"><span>Delete Account
                                Request</span></a></li>

                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='ui-alerts'||$page=='ui-accordion'||$page=='ui-avatar'||$page=='ui-badges'||$page=='ui-borders'||$page=='ui-buttons'||$page=='ui-buttons-group'||$page=='ui-breadcrumb'||$page=='ui-cards'||$page=='ui-carousel'||$page=='ui-colors'||$page=='ui-dropdowns'||$page=='ui-grid'||$page=='ui-images'||$page=='ui-lightbox'||$page=='ui-modals'||$page=='ui-media'||$page=='ui-offcanvas'||$page=='ui-pagination'||$page=='ui-popovers'||$page=='ui-progress'||$page=='ui-placeholders'||$page=='ui-rangeslider'||$page=='ui-spinner'||$page=='ui-sweetalerts'||$page=='ui-nav-tabs'||$page=='ui-toasts'||$page=='ui-tooltips'||$page=='ui-typography'||$page=='ui-video') ? 'active subdrop' : '' ;?>">
                            <span>Base UI</span><span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>ui-alerts"
                                    class="<?php echo ($page =='ui-alerts') ? 'active' : '' ;?>">Alerts</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-accordion"
                                    class="<?php echo ($page =='ui-accordion') ? 'active' : '' ;?>">Accordion</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-avatar"
                                    class="<?php echo ($page =='ui-avatar') ? 'active' : '' ;?>">Avatar</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-badges"
                                    class="<?php echo ($page =='ui-badges') ? 'active' : '' ;?>">Badges</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-borders"
                                    class="<?php echo ($page =='ui-borders') ? 'active' : '' ;?>">Border</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-buttons"
                                    class="<?php echo ($page =='ui-buttons') ? 'active' : '' ;?>">Buttons</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-buttons-group"
                                    class="<?php echo ($page =='ui-buttons-group') ? 'active' : '' ;?>">Button
                                    Group</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-breadcrumb"
                                    class="<?php echo ($page =='ui-breadcrumb') ? 'active' : '' ;?>">Breadcrumb</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>ui-cards"
                                    class="<?php echo ($page =='ui-cards') ? 'active' : '' ;?>">Card</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-carousel"
                                    class="<?php echo ($page =='ui-carousel') ? 'active' : '' ;?>">Carousel</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-colors"
                                    class="<?php echo ($page =='ui-colors') ? 'active' : '' ;?>">Colors</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-dropdowns"
                                    class="<?php echo ($page =='ui-dropdowns') ? 'active' : '' ;?>">Dropdowns</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-grid"
                                    class="<?php echo ($page =='ui-grid') ? 'active' : '' ;?>">Grid</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-images"
                                    class="<?php echo ($page =='ui-images') ? 'active' : '' ;?>">Images</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-lightbox"
                                    class="<?php echo ($page =='ui-lightbox') ? 'active' : '' ;?>">Lightbox</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-media"
                                    class="<?php echo ($page =='ui-media') ? 'active' : '' ;?>">Media</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-modals"
                                    class="<?php echo ($page =='ui-modals') ? 'active' : '' ;?>">Modals</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-offcanvas"
                                    class="<?php echo ($page =='ui-offcanvas') ? 'active' : '' ;?>">Offcanvas</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-pagination"
                                    class="<?php echo ($page =='ui-pagination') ? 'active' : '' ;?>">Pagination</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>ui-popovers"
                                    class="<?php echo ($page =='ui-popovers') ? 'active' : '' ;?>">Popovers</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-progress"
                                    class="<?php echo ($page =='ui-progress') ? 'active' : '' ;?>">Progress</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-placeholders"
                                    class="<?php echo ($page =='ui-placeholders') ? 'active' : '' ;?>">Placeholders</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>ui-rangeslider"
                                    class="<?php echo ($page =='ui-rangeslider') ? 'active' : '' ;?>">Range Slider</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>ui-spinner"
                                    class="<?php echo ($page =='ui-spinner') ? 'active' : '' ;?>">Spinner</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-sweetalerts"
                                    class="<?php echo ($page =='ui-sweetalerts') ? 'active' : '' ;?>">Sweet Alerts</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>ui-nav-tabs"
                                    class="<?php echo ($page =='ui-nav-tabs') ? 'active' : '' ;?>">Tabs</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-toasts"
                                    class="<?php echo ($page =='ui-toasts') ? 'active' : '' ;?>">Toasts</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-tooltips"
                                    class="<?php echo ($page =='ui-tooltips') ? 'active' : '' ;?>">Tooltips</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-typography"
                                    class="<?php echo ($page =='ui-typography') ? 'active' : '' ;?>">Typography</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>ui-video"
                                    class="<?php echo ($page =='ui-video') ? 'active' : '' ;?>">Video</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='ui-ribbon'||$page =='ui-clipboard'||$page =='ui-drag-drop'||$page =='ui-rating'||$page =='ui-text-editor'||$page =='ui-counter'||$page =='ui-scrollbar'||$page =='ui-stickynote'||$page =='ui-timeline') ? 'active subdrop' : '' ;?>">
                            <span>Advanced UI</span><span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>ui-ribbon"
                                    class="<?php echo ($page =='ui-ribbon') ? 'active' : '' ;?>">Ribbon</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-clipboard"
                                    class="<?php echo ($page =='ui-clipboard') ? 'active' : '' ;?>">Clipboard</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-drag-drop"
                                    class="<?php echo ($page =='ui-drag-drop') ? 'active' : '' ;?>">Drag & Drop</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>ui-rating"
                                    class="<?php echo ($page =='ui-rating') ? 'active' : '' ;?>">Rating</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-text-editor"
                                    class="<?php echo ($page =='ui-text-editor') ? 'active' : '' ;?>">Text Editor</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>ui-counter"
                                    class="<?php echo ($page =='ui-counter') ? 'active' : '' ;?>">Counter</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-scrollbar"
                                    class="<?php echo ($page =='ui-scrollbar') ? 'active' : '' ;?>">Scrollbar</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-stickynote"
                                    class="<?php echo ($page =='ui-stickynote') ? 'active' : '' ;?>">Sticky Note</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>ui-timeline"
                                    class="<?php echo ($page =='ui-timeline') ? 'active' : '' ;?>">Timeline</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='chart-apex'||$page =='chart-c3'||$page =='chart-js'||$page =='chart-morris'||$page =='chart-flot'||$page =='chart-peity') ? 'active subdrop' : '' ;?>"><span>Charts</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>chart-apex"
                                    class="<?php echo ($page =='chart-apex') ? 'active' : '';?>">Apex Charts</a></li>
                            <li><a href="<?php echo base_url(); ?>chart-c3"
                                    class="<?php echo ($page =='chart-c3') ? 'active' : '' ;?>">Chart C3</a></li>
                            <li><a href="<?php echo base_url(); ?>chart-js"
                                    class="<?php echo ($page =='chart-js') ? 'active' : '' ;?>">Chart Js</a></li>
                            <li><a href="<?php echo base_url(); ?>chart-morris"
                                    class="<?php echo ($page =='chart-morris') ? 'active' : '' ;?>">Morris Charts</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>chart-flot"
                                    class="<?php echo ($page =='chart-flot') ? 'active' : '' ;?>">Flot Charts</a></li>
                            <li><a href="<?php echo base_url(); ?>chart-peity"
                                    class="<?php echo ($page =='chart-peity') ? 'active' : '' ;?>">Peity Charts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='icon-fontawesome'||$page == 'icon-feather'||$page =='icon-ionic'||$page =='icon-material'||$page =='icon-pe7'||$page =='icon-simpleline'||$page =='icon-themify'||$page =='icon-weather'||$page =='icon-typicon'||$page =='icon-flag') ? 'active subdrop' : '' ;?>"><span>Icons</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>icon-fontawesome"
                                    class="<?php echo ($page =='icon-fontawesome') ? 'active' : '' ;?>">Fontawesome
                                    Icons</a></li>
                            <li><a href="<?php echo base_url(); ?>icon-feather"
                                    class="<?php echo ($page =='icon-feather') ? 'active' : '' ;?>">Feather Icons</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>icon-ionic"
                                    class="<?php echo ($page =='icon-ionic') ? 'active' : '' ;?>">Ionic Icons</a></li>
                            <li><a href="<?php echo base_url(); ?>icon-material"
                                    class="<?php echo ($page =='icon-material') ? 'active' : '' ;?>">Material Icons</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>icon-pe7"
                                    class="<?php echo ($page =='icon-pe7') ? 'active' : '' ;?>">Pe7 Icons</a></li>
                            <li><a href="<?php echo base_url(); ?>icon-simpleline"
                                    class="<?php echo ($page =='icon-simpleline') ? 'active' : '' ;?>">Simpleline
                                    Icons</a></li>
                            <li><a href="<?php echo base_url(); ?>icon-themify"
                                    class="<?php echo ($page =='icon-themify') ? 'active' : '' ;?>">Themify Icons</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>icon-weather"
                                    class="<?php echo ($page =='icon-weather') ? 'active' : '' ;?>">Weather Icons</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>icon-typicon"
                                    class="<?php echo ($page =='icon-typicon') ? 'active' : '' ;?>">Typicon Icons</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>icon-flag"
                                    class="<?php echo ($page =='icon-flag') ? 'active' : '' ;?>">Flag Icons</a></li>

                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='form-wizard'||$page =='form-select2'||$page =='form-validation'||$page =='form-floating-labels'||$page =='form-vertical'||$page =='form-horizontal'||$page =='form-basic-inputs'||$page =='form-checkbox-radios'||$page =='form-input-groups'||$page =='form-grid-gutters'||$page =='form-select'||$page =='form-mask'||$page =='form-fileupload') ? 'active' : '' ;?>">
                            <span>Forms</span><span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li class="submenu submenu-two">
                                <a href="javascript:void(0);"
                                    class="<?php echo ($page =='form-wizard'||$page =='form-select2'||$page =='form-validation'||$page =='form-basic-inputs'||$page =='form-checkbox-radios'||$page =='form-input-groups'||$page =='form-grid-gutters'||$page =='form-select'||$page =='form-mask'||$page =='form-fileupload') ? 'active subdrop' : '' ;?>">Form
                                    Elements<span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>form-basic-inputs"
                                            class="<?php echo ($page =='form-basic-inputs') ? 'active' : '' ;?>">Basic
                                            Inputs</a></li>
                                    <li><a href="<?php echo base_url(); ?>form-checkbox-radios"
                                            class="<?php echo ($page =='form-checkbox-radios') ? 'active' : '' ;?>">Checkbox
                                            & Radios</a></li>
                                    <li><a href="<?php echo base_url(); ?>form-input-groups"
                                            class="<?php echo ($page =='form-input-groups') ? 'active' : '' ;?>">Input
                                            Groups</a></li>
                                    <li><a href="<?php echo base_url(); ?>form-grid-gutters"
                                            class="<?php echo ($page =='form-grid-gutters') ? 'active' : '' ;?>">Grid &
                                            Gutters</a></li>
                                    <li><a href="<?php echo base_url(); ?>form-select"
                                            class="<?php echo ($page =='form-select') ? 'active' : '' ;?>">Form
                                            Select</a></li>
                                    <li><a href="<?php echo base_url(); ?>form-mask"
                                            class="<?php echo ($page =='form-mask') ? 'active' : '' ;?>">Input
                                            Masks</a></li>
                                    <li><a href="<?php echo base_url(); ?>form-fileupload"
                                            class="<?php echo ($page =='form-fileupload') ? 'active' : '' ;?>">File
                                            Uploads</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two">
                                <a href="javascript:void(0);"
                                    class="<?php echo ($page =='form-floating-labels'||$page =='form-vertical'||$page =='form-horizontal') ? 'active subdrop' : '' ;?>">Layouts<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>form-horizontal"
                                            class="<?php echo ($page =='form-horizontal') ? 'active' : '' ;?>">Horizontal
                                            Form</a></li>
                                    <li><a href="<?php echo base_url(); ?>form-vertical"
                                            class="<?php echo ($page =='form-vertical') ? 'active' : '' ;?>">Vertical
                                            Form</a></li>
                                    <li><a href="<?php echo base_url(); ?>form-floating-labels"
                                            class="<?php echo ($page =='form-floating-labels') ? 'active' : '' ;?>">Floating
                                            Labels</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url(); ?>form-validation"
                                    class="<?php echo ($page =='form-validation') ? 'active' : '' ;?>">Form
                                    Validation</a></li>
                            <li><a href="<?php echo base_url(); ?>form-select2"
                                    class="<?php echo ($page =='form-select2') ? 'active' : '' ;?>">Select2</a></li>
                            <li><a href="<?php echo base_url(); ?>form-wizard"
                                    class="<?php echo ($page =='form-wizard') ? 'active' : '' ;?>">Form Wizard</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='tables-basic'||$page =='data-tables') ? 'active subdrop' : '' ;?>"><span>Tables</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>tables-basic"
                                    class="<?php echo ($page =='tables-basic') ? 'active' : '' ;?>">Basic Tables </a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>data-tables"
                                    class="<?php echo ($page =='data-tables') ? 'active' : '' ;?>">Data Table </a></li>
                        </ul>
                    </li>

                </ul>
                <ul class="tab-pane <?php echo ($page =='countries'||$page =='states'||$page =='blank-page'||$page =='activities') ? 'active' : '' ;?>"
                    id="document" aria-labelledby="set-tab5">
                    <li><a href="<?php echo base_url(); ?>profile"><span>Profile</span></a></li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Authentication</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Login<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>signin">Cover</a></li>
                                    <li><a href="<?php echo base_url(); ?>signin-2">Illustration</a></li>
                                    <li><a href="<?php echo base_url(); ?>signin-3">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Register<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>register">Cover</a></li>
                                    <li><a href="<?php echo base_url(); ?>register-2">Illustration</a></li>
                                    <li><a href="<?php echo base_url(); ?>register-3">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Forgot Password<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>forgot-password">Cover</a></li>
                                    <li><a href="<?php echo base_url(); ?>forgot-password-2">Illustration</a></li>
                                    <li><a href="<?php echo base_url(); ?>forgot-password-3">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Reset Password<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>reset-password">Cover</a></li>
                                    <li><a href="<?php echo base_url(); ?>reset-password-2">Illustration</a></li>
                                    <li><a href="<?php echo base_url(); ?>reset-password-3">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Email Verification<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>email-verification">Cover</a></li>
                                    <li><a href="<?php echo base_url(); ?>email-verification-2">Illustration</a></li>
                                    <li><a href="<?php echo base_url(); ?>email-verification-3">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">2 Step Verification<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>two-step-verification">Cover</a></li>
                                    <li><a href="<?php echo base_url(); ?>two-step-verification-2">Illustration</a></li>
                                    <li><a href="<?php echo base_url(); ?>two-step-verification-3">Basic</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url(); ?>lock-screen">Lock Screen</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Error Pages</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>error-404">404 Error </a></li>
                            <li><a href="<?php echo base_url(); ?>error-500">500 Error </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='countries'||$page =='states') ? 'active subdrop' : '' ;?>"><span>Places</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>countries"
                                    class="<?php echo ($page =='countries') ? 'active' : '' ;?>">Countries</a></li>
                            <li><a href="<?php echo base_url(); ?>states"
                                    class="<?php echo ($page =='states') ? 'active' : '' ;?>">States</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>blank-page"><span>Blank Page</span> </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>coming-soon"><span>Coming Soon</span> </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>under-maintenance"><span>Under Maintenance</span> </a>
                    </li>
                </ul>
                <ul class="tab-pane <?php echo ($page =='general-settings'||$page =='security-settings'||$page =='notification'||$page =='connected-apps'||$page =='system-settings'||$page =='company-settings'||$page =='localization-settings'||$page =='prefixes'||$page =='preference'||$page =='appearance'||$page =='social-authentication'||$page =='language-settings'||$page =='language-settings-web'||$page =='invoice-settings'||$page =='printer-settings'||$page =='pos-settings'||$page =='custom-fields'||$page =='email-settings'||$page =='sms-gateway'||$page =='otp-settings'||$page =='gdpr-settings'||$page =='payment-gateway-settings'||$page =='bank-settings-grid'||$page =='bank-settings-list'||$page =='tax-rates'||$page =='currency-settings'||$page =='storage-settings'||$page =='ban-ip-address') ? 'active' : '' ;?>"
                    id="settings" aria-labelledby="set-tab6">
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='general-settings'||$page =='security-settings'||$page =='notification'||$page =='connected-apps') ? 'active subdrop' : '' ;?>"><span>General
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>general-settings"
                                    class="<?php echo ($page =='general-settings') ? 'active' : '' ;?>">Profile</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>security-settings"
                                    class="<?php echo ($page =='security-settings') ? 'active' : '' ;?>">Security</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>notification"
                                    class="<?php echo ($page =='notification') ? 'active' : '' ;?>">Notifications</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>connected-apps"
                                    class="<?php echo ($page =='connected-apps') ? 'active' : '' ;?>">Connected
                                    Apps</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='system-settings'||$page =='company-settings'||$page =='localization-settings'||$page =='prefixes'||$page =='preference'||$page =='appearance'||$page =='social-authentication'||$page =='language-settings'||$page =='language-settings-web') ? 'active subdrop' : '' ;?>"><span>Website
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>system-settings"
                                    class="<?php echo ($page =='system-settings') ? 'active' : '' ;?>">System
                                    Settings</a></li>
                            <li><a href="<?php echo base_url(); ?>company-settings"
                                    class="<?php echo ($page =='company-settings') ? 'active' : '' ;?>">Company
                                    Settings </a></li>
                            <li><a href="<?php echo base_url(); ?>localization-settings"
                                    class="<?php echo ($page =='localization-settings') ? 'active' : '' ;?>">Localization</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>prefixes"
                                    class="<?php echo ($page =='prefixes') ? 'active' : '' ;?>">Prefixes</a></li>
                            <li><a href="<?php echo base_url(); ?>preference"
                                    class="<?php echo ($page =='preference') ? 'active' : '' ;?>">Preference</a></li>
                            <li><a href="<?php echo base_url(); ?>appearance"
                                    class="<?php echo ($page =='appearance') ? 'active' : '' ;?>">Appearance</a></li>
                            <li><a href="<?php echo base_url(); ?>social-authentication"
                                    class="<?php echo ($page =='social-authentication') ? 'active' : '' ;?>">Social
                                    Authentication</a></li>
                            <li><a href="<?php echo base_url(); ?>language-settings"
                                    class="<?php echo ($page =='language-settings'||$page =='language-settings-web') ? 'active' : '' ;?>">Language</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='invoice-settings'||$page =='printer-settings'||$page =='pos-settings'||$page =='custom-fields') ? 'active subdrop' : '' ;?>"><span>App
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>invoice-settings"
                                    class="<?php echo ($page =='invoice-settings') ? 'active' : '' ;?>">Invoice</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>printer-settings"
                                    class="<?php echo ($page =='printer-settings') ? 'active' : '' ;?>">Printer</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>pos-settings"
                                    class="<?php echo ($page =='pos-settings') ? 'active' : '' ;?>">POS</a></li>
                            <li><a href="<?php echo base_url(); ?>custom-fields"
                                    class="<?php echo ($page =='custom-fields') ? 'active' : '' ;?>">Custom Fields</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='email-settings'||$page =='sms-gateway'||$page =='otp-settings'||$page =='gdpr-settings') ? 'active subdrop' : '' ;?>"><span>System
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>email-settings"
                                    class="<?php echo ($page =='email-settings') ? 'active' : '' ;?>">Email</a></li>
                            <li><a href="<?php echo base_url(); ?>sms-gateway"
                                    class="<?php echo ($page =='sms-gateway') ? 'active' : '' ;?>">SMS Gateways</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>otp-settings"
                                    class="<?php echo ($page =='otp-settings') ? 'active' : '' ;?>">OTP</a></li>
                            <li><a href="<?php echo base_url(); ?>gdpr-settings"
                                    class="<?php echo ($page =='gdpr-settings') ? 'active' : '' ;?>">GDPR Cookies</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='payment-gateway-settings'||$page =='bank-settings-grid'||$page =='bank-settings-list'||$page =='tax-rates'||$page =='currency-settings') ? 'active subdrop' : '' ;?>"><span>Financial
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>payment-gateway-settings"
                                    class="<?php echo ($page =='payment-gateway-settings') ? 'active' : '' ;?>">Payment
                                    Gateway</a></li>
                            <li><a href="<?php echo base_url(); ?>bank-settings-grid"
                                    class="<?php echo ($page =='bank-settings-grid'||$page =='bank-settings-list') ? 'active' : ''  ;?>">Bank
                                    Accounts</a></li>
                            <li><a href="<?php echo base_url(); ?>tax-rates"
                                    class="<?php echo ($page =='tax-rates') ? 'active' : ''  ;?>">Tax Rates</a></li>
                            <li><a href="<?php echo base_url(); ?>currency-settings"
                                    class="<?php echo ($page =='currency-settings') ? 'active' : ''  ;?>">Currencies</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='storage-settings'||$page =='ban-ip-address') ? 'active subdrop' : '' ;?>"><span>Other
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>storage-settings"
                                    class="<?php echo ($page =='storage-settings') ? 'active' : '' ;?>">Storage</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>ban-ip-address"
                                    class="<?php echo ($page =='ban-ip-address') ? 'active' : '' ;?>">Ban IP
                                    Address</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);"><span>Documentation</span></a></li>
                    <li><a href="javascript:void(0);"><span>Changelog v2.0.3</span></a></li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="javascript:void(0);">Level 1.1</a></li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Level 1.2<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="javascript:void(0);">Level 2.1</a></li>
                                    <li class="submenu submenu-two submenu-three"><a href="javascript:void(0);">Level
                                            2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
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
            </div>
        </div>
    </div>
</div>
<!-- /Sidebar -->

<!-- Sidebar -->
<div class="sidebar horizontal-sidebar">
    <div id="sidebar-menu-3" class="sidebar-menu">
        <ul class="nav">
            <li class="submenu">
                <a href="<?php echo base_url(); ?>dashboard"
                    class="<?php echo ($page =='dashboard'||$page=='/'||$page=='sales-dashboard'||$page=='video-call'||$page=='audio-call'||$page=='call-history'||$page=='chat'||$page=='calendar'||$page=='email'||$page=='todo'||$page=='notes'||$page=='file-manager'||$page=='file-archived'||$page=='file-document'||$page=='file-favourites'||$page=='file-manager-seleted'||$page=='file-recent'||$page=='file-shared') ? 'active subdrop' : '' ;?>"><i
                        data-feather="grid"></i><span> Main Menu</span>
                    <span class="menu-arrow"></span></a>
                <ul>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='dashboard'||$page=='/'||$page=='sales-dashboard') ? 'active subdrop' : '' ;?>"><span>Dashboard</span>
                            <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>dashboard" class="<?php echo ($page =='dashboard') ? 'active' : '' ;?>">Admin
                                    Dashboard</a></li>
                            <li><a href="<?php echo base_url(); ?>sales-dashboard"
                                    class="<?php echo ($page =='sales-dashboard') ? 'active' : '' ;?>">Sales Dashboard</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='video-call'||$page =='audio-call'||$page =='call-history'||$page =='chat'||$page =='calendar'||$page =='email'||$page =='todo'||$page =='notes'||$page =='file-manager'||$page =='file-archived'||$page =='file-document'||$page =='file-favourites'||$page =='file-manager-seleted'||$page =='file-recent'||$page =='file-shared'||$page =='file-manager-deleted') ? 'active subdrop' : '' ;?>"><span>Application</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>chat" class="<?php echo ($page =='chat') ? 'active' : '' ;?>">Chat</a>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);"
                                    class="<?php echo ($page =='video-call'||$page =='audio-call'||$page =='call-history') ? 'active subdrop' : '' ;?> "><span>Call</span><span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>video-call"
                                            class="<?php echo ($page =='video-call') ? 'active' : '' ;?>">Video Call</a></li>
                                    <li><a href="<?php echo base_url(); ?>audio-call"
                                            class="<?php echo ($page =='audio-call') ? 'active' : '' ;?>">Audio Call</a></li>
                                    <li><a href="<?php echo base_url(); ?>call-history"
                                            class="<?php echo ($page =='call-history') ? 'active' : '' ;?>">Call History</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url(); ?>calendar"
                                    class="<?php echo ($page =='calendar') ? 'active' : '' ;?>">Calendar</a></li>
                            <li><a href="<?php echo base_url(); ?>email"
                                    class="<?php echo ($page =='email') ? 'active' : '' ;?>">Email</a></li>
                            <li><a href="<?php echo base_url(); ?>todo" class="<?php echo ($page =='todo') ? 'active' : '' ;?>">To
                                    Do</a></li>
                            <li><a href="<?php echo base_url(); ?>notes"
                                    class="<?php echo ($page =='notes') ? 'active' : '' ;?>">Notes</a></li>
                            <li><a href="<?php echo base_url(); ?>file-manager"
                                    class="<?php echo ($page =='file-manager'||$page =='file-archived'||$page =='file-document'||$page =='file-favourites'||$page =='file-manager-seleted'||$page =='file-recent'||$page =='file-shared'||$page =='file-manager-deleted') ? 'active' : '' ;?>">File Manager</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"
                    class="<?php echo ($page =='product-list'||$page =='product-details'||$page =='edit-product'||$page =='add-product'||$page =='expired-products'||$page =='low-stocks'||$page =='category-list'||$page =='sub-categories'||$page =='brand-list'||$page =='units'||$page =='varriant-attributes'||$page =='warranty'||$page =='barcode'||$page =='qrcode') ? 'active subdrop' : '' ;?>"><img
                       src="<?php echo base_url(); ?>/assets/img/icons/product.svg" alt="img"><span> Inventory
                    </span> <span class="menu-arrow"></span></a>
                <ul>
                    <li><a
                            href="<?php echo base_url(); ?>product-list"class="<?php echo ($page =='product-list'||$page =='product-details') ? 'active' : '' ;?>"><span>Products</span></a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>add-product"class="<?php echo ($page =='add-product'||$page =='edit-product') ? 'active' : '' ;?>"><span>Create
                                Product</span></a></li>
                    <li><a
                            href="<?php echo base_url(); ?>expired-products"class="<?php echo ($page =='expired-products') ? 'active' : '' ;?>"><span>Expired
                                Products</span></a></li>
                    <li><a href="<?php echo base_url(); ?>low-stocks"class="<?php echo ($page =='low-stocks') ? 'active' : '' ;?>"><span>Low
                                Stocks</span></a></li>
                    <li><a
                            href="<?php echo base_url(); ?>category-list"class="<?php echo ($page =='category-list') ? 'active' : '' ;?>"><span>Category</span></a>
                    </li>
                    <li><a
                            href="<?php echo base_url(); ?>sub-categories"class="<?php echo ($page =='sub-categories') ? 'active' : '' ;?>"><span>Sub
                                Category</span></a></li>
                    <li><a
                            href="<?php echo base_url(); ?>brand-list"class="<?php echo ($page =='brand-list') ? 'active' : '' ;?>"><span>Brands</span></a>
                    </li>
                    <li><a
                            href="<?php echo base_url(); ?>units"class="<?php echo ($page =='units') ? 'active' : '' ;?>"><span>Units</span></a>
                    </li>
                    <li><a
                            href="<?php echo base_url(); ?>varriant-attributes"class="<?php echo ($page =='varriant-attributes') ? 'active' : '' ;?>"><span>Variant
                                Attributes</span></a></li>
                    <li><a
                            href="<?php echo base_url(); ?>warranty"class="<?php echo ($page =='warranty') ? 'active' : '' ;?>"><span>Warranties</span></a>
                    </li>
                    <li><a href="<?php echo base_url(); ?>barcode"class="<?php echo ($page =='barcode') ? 'active' : '' ;?>"><span>Print
                                Barcode</span></a></li>
                    <li><a href="<?php echo base_url(); ?>qrcode"class="<?php echo ($page =='qrcode') ? 'active' : '' ;?>"><span>Print
                                QR Code</span></a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"
                    class="<?php echo ($page =='sales-list'||$page =='invoice-report'||$page =='sales-returns'||$page =='quotation-list'||$page =='pos'||$page =='coupons'||$page =='purchase-list'||$page =='purchase-order-report'||$page =='purchase-returns'||$page =='manage-stocks'||$page =='stock-adjustment'||$page =='stock-transfer'||$page =='expense-list'||$page =='expense-category') ? 'active subdrop' : '' ;?>"><img
                       src="<?php echo base_url(); ?>/assets/img/icons/purchase1.svg" alt="img"><span>Sales &amp;
                        Purchase</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='sales-list'||$page == 'invoice-report'||$page =='sales-returns'||$page =='quotation-list'||$page =='pos'||$page =='coupons') ? 'active subdrop' : '' ;?>"><span>Sales</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>sales-list"
                                    class="<?php echo ($page =='sales-list') ? 'active' : '' ;?>"><span>Sales</span></a></li>
                            <li><a href="<?php echo base_url(); ?>invoice-report"
                                    class="<?php echo ($page =='invoice-report') ? 'active' : '' ;?>"><span>Invoices</span></a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>sales-returns"
                                    class="<?php echo ($page =='sales-returns') ? 'active' : '' ;?>"><span>Sales
                                        Return</span></a></li>
                            <li><a href="<?php echo base_url(); ?>quotation-list"
                                    class="<?php echo ($page =='quotation-list') ? 'active' : '' ;?>"><span>Quotation</span></a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>pos"
                                    class="<?php echo ($page =='pos') ? 'active' : '' ;?>"><span>POS</span></a></li>
                            <li><a href="<?php echo base_url(); ?>coupons"
                                    class="<?php echo ($page =='coupons') ? 'active' : '' ;?>"><span>Coupons</span></a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='purchase-list'||$page =='purchase-order-report'||$page =='purchase-returns'||$page =='manage-stocks'||$page =='stock-adjustment'||$page =='stock-transfer') ? 'active subdrop' : '' ;?> "><span>Purchase</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>purchase-list"
                                    class="<?php echo ($page =='purchase-list') ? 'active' : '' ;?>"><span>Purchases</span></a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>purchase-order-report"
                                    class="<?php echo ($page =='purchase-order-report') ? 'active' : '' ;?>"><span>Purchase
                                        Order</span></a></li>
                            <li><a href="<?php echo base_url(); ?>purchase-returns"
                                    class="<?php echo ($page =='purchase-returns') ? 'active' : '' ;?>"><span>Purchase
                                        Return</span></a></li>
                            <li><a href="<?php echo base_url(); ?>manage-stocks"
                                    class="<?php echo ($page =='manage-stocks') ? 'active' : '' ;?>"><span>Manage
                                        Stock</span></a></li>
                            <li><a href="<?php echo base_url(); ?>stock-adjustment"
                                    class="<?php echo ($page =='stock-adjustment') ? 'active' : '' ;?>"><span>Stock
                                        Adjustment</span></a></li>
                            <li><a href="<?php echo base_url(); ?>stock-transfer"
                                    class="<?php echo ($page =='stock-transfer') ? 'active' : '' ;?>"><span>Stock
                                        Transfer</span></a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='expense-list'||$page =='expense-category') ? 'active subdrop' : '' ;?> "><span>Expenses</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>expense-list"
                                    class="<?php echo ($page =='expense-list') ? 'active' : '' ;?>">Expenses</a></li>
                            <li><a href="<?php echo base_url(); ?>expense-category"
                                    class="<?php echo ($page =='expense-category') ? 'active' : '' ;?>">Expense Category</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"
                    class="<?php echo ($page =='customers'||$page =='suppliers'||$page =='store-list'||$page =='warehouse'||$page =='roles-permissions'||$page =='permissions'||$page =='delete-account'||$page =='ui-alerts'||$page =='ui-accordion'||$page =='ui-avatar'||$page =='ui-badges'||$page =='ui-borders'||$page =='ui-buttons'||$page =='ui-buttons-group'||$page =='ui-breadcrumb'||$page =='ui-cards'||$page =='ui-carousel'||$page =='ui-colors'||$page =='ui-dropdowns'||$page =='ui-grid'||$page =='ui-images'||$page =='ui-lightbox'||$page =='ui-modals'||$page =='ui-media'||$page =='ui-offcanvas'||$page =='ui-pagination'||$page =='ui-popovers'||$page =='ui-progress'||$page =='ui-placeholders'||$page =='ui-rangeslider'||$page =='ui-spinner'||$page =='ui-sweetalerts'||$page =='ui-nav-tabs'||$page =='ui-toasts'||$page =='ui-tooltips'||$page =='ui-typography'||$page =='ui-video'||$page =='ui-ribbon'||$page =='ui-clipboard'||$page =='ui-drag-drop'||$page =='ui-rating'||$page =='ui-text-editor'||$page =='ui-counter'||$page =='ui-scrollbar'||$page =='ui-stickynote'||$page =='ui-timeline'||$page =='chart-apex'||$page =='chart-c3'||$page =='chart-js'||$page =='chart-morris'||$page =='chart-flot'||$page =='chart-peity'||$page =='icon-fontawesome'||$page =='icon-feather'||$page =='icon-ionic'||$page =='icon-material'||$page =='icon-pe7'||$page =='icon-simpleline'||$page =='icon-themify'||$page =='icon-weather'||$page =='icon-typicon'||$page =='icon-flag'||$page =='form-wizard'||$page =='form-select2'||$page =='form-validation'||$page =='form-floating-labels'||$page =='form-vertical'||$page =='form-horizontal'||$page =='form-basic-inputs'||$page =='form-checkbox-radios'||$page =='form-input-groups'||$page =='form-grid-gutters'||$page =='form-select'||$page =='form-mask'||$page =='form-fileupload'||$page =='form-horizontal'||$page =='form-vertical'||$page =='form-floating-labels'||$page =='form-validation'||$page =='form-select2'||$page =='form-wizard'||$page =='tables-basic'||$page =='data-tables')? 'active subdrop': '' ;?>"><img
                       src="<?php echo base_url(); ?>/assets/img/icons/users1.svg" alt="img"><span>User Management</span> <span
                        class="menu-arrow"></span></a>
                <ul>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='customers'||$page =='suppliers'||$page =='store-list'||$page =='warehouse') ? 'active subdrop' : '' ;?>"><span>People</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>customers"
                                    class="<?php echo ($page =='customers') ? 'active' : '' ;?>"><span>Customers</span></a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>suppliers"
                                    class="<?php echo ($page =='suppliers') ? 'active' : '' ;?>"><span>Suppliers</span></a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>store-list"
                                    class="<?php echo ($page =='store-list') ? 'active' : '' ;?>"><span>Stores</span></a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>warehouse"
                                    class="<?php echo ($page =='warehouse') ? 'active' : '' ;?>"><span>Warehouses</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='roles-permissions'||$page =='delete-account'||$page =='permissions') ? 'active subdrop' : '' ;?> "><span>Roles
                                &amp; Permissions</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>roles-permissions"
                                    class="<?php echo ($page =='roles-permissions'||$page =='permissions') ? 'active' : '' ;?>"><span>Roles &
                                        Permissions</span></a></li>
                            <li><a href="<?php echo base_url(); ?>delete-account"
                                    class="<?php echo ($page =='delete-account') ? 'active' : '' ;?>"><span>Delete Account
                                        Request</span></a></li>

                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='ui-alerts'||$page =='ui-accordion'||$page =='ui-avatar'||$page =='ui-badges'||$page =='ui-borders'||$page =='ui-buttons'||$page =='ui-buttons-group'||$page =='ui-breadcrumb'||$page =='ui-cards'||$page =='ui-carousel'||$page =='ui-colors'||$page =='ui-dropdowns'||$page =='ui-grid'||$page =='ui-images'||$page =='ui-lightbox'||$page =='ui-modals'||$page =='ui-media'||$page =='ui-offcanvas'||$page =='ui-pagination'||$page =='ui-popovers'||$page =='ui-progress'||$page =='ui-placeholders'||$page =='ui-rangeslider'||$page =='ui-spinner'||$page =='ui-sweetalerts'||$page =='ui-nav-tabs'||$page =='ui-toasts'||$page =='ui-tooltips'||$page =='ui-typography'||$page =='ui-video') ? 'active subdrop' : '' ;?> "><span>Base
                                UI</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>ui-alerts"
                                    class="<?php echo ($page =='ui-alerts') ? 'active' : '' ;?>">Alerts</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-accordion"
                                    class="<?php echo ($page =='ui-accordion') ? 'active' : '' ;?>">Accordion</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-avatar"
                                    class="<?php echo ($page =='ui-avatar') ? 'active' : '' ;?>">Avatar</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-badges"
                                    class="<?php echo ($page =='ui-badges') ? 'active' : '' ;?>">Badges</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-borders"
                                    class="<?php echo ($page =='ui-borders') ? 'active' : '' ;?>">Border</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-buttons"
                                    class="<?php echo ($page =='ui-buttons') ? 'active' : '' ;?>">Buttons</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-buttons-group"
                                    class="<?php echo ($page =='ui-buttons-group') ? 'active' : '' ;?>">Button
                                    Group</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-breadcrumb"
                                    class="<?php echo ($page =='ui-breadcrumb') ? 'active' : '' ;?>">Breadcrumb</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>ui-cards"
                                    class="<?php echo ($page =='ui-cards') ? 'active' : '' ;?>">Card</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-carousel"
                                    class="<?php echo ($page =='ui-carousel') ? 'active' : '' ;?>">Carousel</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-colors"
                                    class="<?php echo ($page =='ui-colors') ? 'active' : '' ;?>">Colors</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-dropdowns"
                                    class="<?php echo ($page =='ui-dropdowns') ? 'active' : '' ;?>">Dropdowns</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-grid"
                                    class="<?php echo ($page =='ui-grid') ? 'active' : '' ;?>">Grid</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-images"
                                    class="<?php echo ($page =='ui-images') ? 'active' : '' ;?>">Images</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-lightbox"
                                    class="<?php echo ($page =='ui-lightbox') ? 'active' : '' ;?>">Lightbox</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-media"
                                    class="<?php echo ($page =='ui-media') ? 'active' : '' ;?>">Media</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-modals"
                                    class="<?php echo ($page =='ui-modals') ? 'active' : '' ;?>">Modals</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-offcanvas"
                                    class="<?php echo ($page =='ui-offcanvas') ? 'active' : '' ;?>">Offcanvas</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-pagination"
                                    class="<?php echo ($page =='ui-pagination') ? 'active' : '' ;?>">Pagination</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>ui-popovers"
                                    class="<?php echo ($page =='ui-popovers') ? 'active' : '' ;?>">Popovers</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-progress"
                                    class="<?php echo ($page =='ui-progress') ? 'active' : '' ;?>">Progress</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-placeholders"
                                    class="<?php echo ($page =='ui-placeholders') ? 'active' : '' ;?>">Placeholders</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>ui-rangeslider"
                                    class="<?php echo ($page =='ui-rangeslider') ? 'active' : '' ;?>">Range Slider</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>ui-spinner"
                                    class="<?php echo ($page =='ui-spinner') ? 'active' : '' ;?>">Spinner</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-sweetalerts"
                                    class="<?php echo ($page =='ui-sweetalerts') ? 'active' : '' ;?>">Sweet Alerts</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>ui-nav-tabs"
                                    class="<?php echo ($page =='ui-nav-tabs') ? 'active' : '' ;?>">Tabs</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-toasts"
                                    class="<?php echo ($page =='ui-toasts') ? 'active' : '' ;?>">Toasts</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-tooltips"
                                    class="<?php echo ($page =='ui-tooltips') ? 'active' : '' ;?>">Tooltips</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-typography"
                                    class="<?php echo ($page =='ui-typography') ? 'active' : '' ;?>">Typography</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>ui-video"
                                    class="<?php echo ($page =='ui-video') ? 'active' : '' ;?>">Video</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='ui-ribbon'||$page =='ui-clipboard' ||$page =='ui-drag-drop'||$page =='ui-rating'||$page =='ui-text-editor'||$page =='ui-counter'||$page =='ui-scrollbar'||$page =='ui-stickynote'||$page =='ui-timeline') ? 'active subdrop' : '' ;?> "><span>Advanced
                                UI</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>ui-ribbon"
                                    class="<?php echo ($page =='ui-ribbon') ? 'active' : '' ;?>">Ribbon</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-clipboard"
                                    class="<?php echo ($page =='ui-clipboard') ? 'active' : '' ;?>">Clipboard</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-drag-drop"
                                    class="<?php echo ($page =='ui-drag-drop') ? 'active' : '' ;?>">Drag & Drop</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>ui-rating"
                                    class="<?php echo ($page =='ui-rating') ? 'active' : '' ;?>">Rating</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-text-editor"
                                    class="<?php echo ($page =='ui-text-editor') ? 'active' : '' ;?>">Text Editor</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>ui-counter"
                                    class="<?php echo ($page =='ui-counter') ? 'active' : '' ;?>">Counter</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-scrollbar"
                                    class="<?php echo ($page =='ui-scrollbar') ? 'active' : '' ;?>">Scrollbar</a></li>
                            <li><a href="<?php echo base_url(); ?>ui-stickynote"
                                    class="<?php echo ($page =='ui-stickynote') ? 'active' : '' ;?>">Sticky Note</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>ui-timeline"
                                    class="<?php echo ($page =='ui-timeline') ? 'active' : '' ;?>">Timeline</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='chart-apex'||$page =='chart-c3'||$page =='chart-js'||$page =='chart-morris'||$page =='chart-flot'||$page =='chart-peity') ? 'active subdrop' : '' ;?>"><span>Charts</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>chart-apex"
                                    class="<?php echo ($page =='chart-apex') ? 'active' : '' ;?>">Apex Charts</a></li>
                            <li><a href="<?php echo base_url(); ?>chart-c3"
                                    class="<?php echo ($page =='chart-c3') ? 'active' : '' ;?>">Chart C3</a></li>
                            <li><a href="<?php echo base_url(); ?>chart-js"
                                    class="<?php echo ($page =='chart-js') ? 'active' : '' ;?>">Chart Js</a></li>
                            <li><a href="<?php echo base_url(); ?>chart-morris"
                                    class="<?php echo ($page =='chart-morris') ? 'active' : '' ;?>">Morris Charts</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>chart-flot"
                                    class="<?php echo ($page =='chart-flot') ? 'active' : '' ;?>">Flot Charts</a></li>
                            <li><a href="<?php echo base_url(); ?>chart-peity"
                                    class="<?php echo ($page =='chart-peity') ? 'active' : '' ;?>">Peity Charts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='icon-fontawesome'||$page =='icon-feather'||$page =='icon-ionic'||$page =='icon-material'||$page =='icon-pe7') ? 'active subdrop' : '' ;?> "><span>Primary
                                Icons</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>icon-fontawesome"
                                    class="<?php echo ($page =='icon-fontawesome') ? 'active' : '' ;?>">Fontawesome
                                    Icons</a></li>
                            <li><a href="<?php echo base_url(); ?>icon-feather"
                                    class="<?php echo ($page =='icon-feather') ? 'active' : '' ;?>">Feather Icons</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>icon-ionic"
                                    class="<?php echo ($page =='icon-ionic') ? 'active' : '' ;?>">Ionic Icons</a></li>
                            <li><a href="<?php echo base_url(); ?>icon-material"
                                    class="<?php echo ($page =='icon-material') ? 'active' : '' ;?>">Material Icons</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>icon-pe7"
                                    class="<?php echo ($page =='icon-pe7') ? 'active' : '' ;?>">Pe7 Icons</a></li>

                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='icon-simpleline'||$page =='icon-themify'||$page =='icon-weather'||$page =='icon-typicon'||$page =='icon-flag') ? 'active subdrop' : '' ;?>"><span>Secondary
                                Icons</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>icon-simpleline"
                                    class="<?php echo ($page =='icon-simpleline') ? 'active' : '' ;?>">Simpleline
                                    Icons</a></li>
                            <li><a href="<?php echo base_url(); ?>icon-themify"
                                    class="<?php echo ($page =='icon-themify') ? 'active' : '' ;?>">Themify Icons</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>icon-weather"
                                    class="<?php echo ($page =='icon-weather') ? 'active' : '' ;?>">Weather Icons</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>icon-typicon"
                                    class="<?php echo ($page =='icon-typicon') ? 'active' : '' ;?>">Typicon Icons</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>icon-flag"
                                    class="<?php echo ($page =='icon-flag') ? 'active' : '' ;?>">Flag Icons</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='form-wizard'||$page =='form-select2'||$page =='form-validation'||$page =='form-floating-labels'||$page =='form-vertical'||$page =='form-horizontal'||$page =='form-basic-inputs'||$page =='form-checkbox-radios'||$page =='form-input-groups'||$page =='form-grid-gutters'||$page =='form-select'||$page =='form-mask'||$page =='form-fileupload') ? 'active subdrop' : '' ;?> "><span>
                                Forms</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li class="submenu submenu-two">
                                <a href="javascript:void(0);"><span>Form Elements</span><span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>form-basic-inputs"
                                            class="<?php echo ($page =='form-basic-inputs') ? 'active' : '' ;?>">Basic
                                            Inputs</a></li>
                                    <li><a href="<?php echo base_url(); ?>form-checkbox-radios"
                                            class="<?php echo ($page =='form-checkbox-radios') ? 'active' : '' ;?>">Checkbox
                                            & Radios</a></li>
                                    <li><a href="<?php echo base_url(); ?>form-input-groups"
                                            class="<?php echo ($page =='form-input-groups') ? 'active' : '' ;?>">Input
                                            Groups</a></li>
                                    <li><a href="<?php echo base_url(); ?>form-grid-gutters"
                                            class="<?php echo ($page =='form-grid-gutters') ? 'active' : '' ;?>">Grid &
                                            Gutters</a></li>
                                    <li><a href="<?php echo base_url(); ?>form-select"
                                            class="<?php echo ($page =='form-select') ? 'active' : '' ;?>">Form
                                            Select</a></li>
                                    <li><a href="<?php echo base_url(); ?>form-mask"
                                            class="<?php echo ($page =='form-mask') ? 'active' : '' ;?>">Input
                                            Masks</a></li>
                                    <li><a href="<?php echo base_url(); ?>form-fileupload"
                                            class="<?php echo ($page =='form-fileupload') ? 'active' : '' ;?>">File
                                            Uploads</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two">
                                <a href="javascript:void(0);"
                                    class="<?php echo ($page =='form-horizontal'||$page =='form-vertical'||$page =='form-floating-labels') ? 'active subdrop' : '' ;?>"><span>
                                        Layouts</span><span class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>form-horizontal"
                                            class="<?php echo ($page =='form-horizontal') ? 'active' : '' ;?>">Horizontal
                                            Form</a></li>
                                    <li><a href="<?php echo base_url(); ?>form-vertical"
                                            class="<?php echo ($page =='form-vertical') ? 'active' : '' ;?>">Vertical
                                            Form</a></li>
                                    <li><a href="<?php echo base_url(); ?>form-floating-labels"
                                            class="<?php echo ($page =='form-floating-labels') ? 'active' : '' ;?>">Floating
                                            Labels</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url(); ?>form-validation"
                                    class="<?php echo ($page =='form-validation') ? 'active' : '' ;?>">Form
                                    Validation</a></li>
                            <li><a href="<?php echo base_url(); ?>form-select2"
                                    class="<?php echo ($page =='form-select2') ? 'active' : '' ;?>">Select2</a></li>
                            <li><a href="<?php echo base_url(); ?>form-wizard"
                                    class="<?php echo ($page =='form-wizard') ? 'active' : '' ;?>">Form Wizard</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='tables-basic'||$page =='data-tables') ? 'active subdrop' : '' ;?>"><span>Tables</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>tables-basic"
                                    class="<?php echo ($page =='tables-basic') ? 'active' : '' ;?>">Basic Tables </a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>data-tables"
                                    class="<?php echo ($page =='data-tables') ? 'active' : '' ;?>">Data Table </a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="submenu">
                <a href="javascript:void(0);"
                    class="<?php echo ($page =='error-404'||$page =='error-500' ||$page =='blank-page'||$page =='coming-soon'||$page =='under-maintenance'||$page =='countries'||$page =='states'||$page =='employees-grid'||$page =='employees-list'||$page =='add-employee'||$page =='edit-employee'||$page =='department-grid'||$page =='department-list'||$page =='designation'||$page =='shift'||$page =='attendance-employee'||$page =='attendance-admin'||$page =='leaves-admin'||$page =='leaves-employee'||$page =='leave-types'||$page =='holidays'||$page =='payroll-list'||$page =='payslip') ? 'active subdrop' : '' ;?>"><i
                        data-feather="user"></i><span>Profile</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li><a href="<?php echo base_url(); ?>profile"><span>Profile</span></a></li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Authentication</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Login<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>signin">Cover</a></li>
                                    <li><a href="<?php echo base_url(); ?>signin-2">Illustration</a></li>
                                    <li><a href="<?php echo base_url(); ?>signin-3">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Register<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>register">Cover</a></li>
                                    <li><a href="<?php echo base_url(); ?>register-2">Illustration</a></li>
                                    <li><a href="<?php echo base_url(); ?>register-3">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Forgot Password<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>forgot-password">Cover</a></li>
                                    <li><a href="<?php echo base_url(); ?>forgot-password-2">Illustration</a></li>
                                    <li><a href="<?php echo base_url(); ?>forgot-password-3">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Reset Password<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>reset-password">Cover</a></li>
                                    <li><a href="<?php echo base_url(); ?>reset-password-2">Illustration</a></li>
                                    <li><a href="<?php echo base_url(); ?>reset-password-3">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Email Verification<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>email-verification">Cover</a></li>
                                    <li><a href="<?php echo base_url(); ?>email-verification-2">Illustration</a></li>
                                    <li><a href="<?php echo base_url(); ?>email-verification-3">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">2 Step Verification<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>two-step-verification">Cover</a></li>
                                    <li><a href="<?php echo base_url(); ?>two-step-verification-2">Illustration</a></li>
                                    <li><a href="<?php echo base_url(); ?>two-step-verification-3">Basic</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo base_url(); ?>lock-screen">Lock Screen</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='error-404'||$page =='error-500'||$page =='blank-page'||$page =='coming-soon'||$page =='under-maintenance') ? 'active' : '' ;?> "><span>Pages</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>error-404"
                                    class="<?php echo ($page =='error-404') ? 'active' : '' ;?>">404 Error </a></li>
                            <li><a href="<?php echo base_url(); ?>error-500"
                                    class="<?php echo ($page =='error-500') ? 'active' : '' ;?>">500 Error </a></li>
                            <li><a href="<?php echo base_url(); ?>blank-page"
                                    class="<?php echo ($page =='blank-page') ? 'active' : '' ;?>"><span>Blank Page</span>
                                </a></li>
                            <li><a href="<?php echo base_url(); ?>coming-soon"
                                    class="<?php echo ($page =='coming-soon') ? 'active' : '' ;?>"><span>Coming Soon</span>
                                </a></li>
                            <li><a href="<?php echo base_url(); ?>under-maintenance"
                                    class="<?php echo ($page =='under-maintenance') ? 'active' : '' ;?>"><span>Under
                                        Maintenance</span> </a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='countries'||$page =='states') ? 'active subdrop' : '' ;?>"><span>Places</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>countries"
                                    class="<?php echo ($page =='countries') ? 'active' : '' ;?>">Countries</a></li>
                            <li><a href="<?php echo base_url(); ?>states"
                                    class="<?php echo ($page =='states') ? 'active' : '' ;?>">States</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='employees-grid'||$page =='employees-list'||$page =='edit-employee'||$page =='add-employee'||$page =='department-grid'||$page =='department-list'||$page =='designation'||$page =='shift') ? 'active subdrop' : '' ;?> "><span>Employees</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a class="<?php echo ($page =='employees-grid'||$page =='employees-list'||$page =='edit-employee'||$page =='add-employee') ? 'active' : '' ;?>"
                                    href="<?php echo base_url(); ?>employees-grid"><span>Employees</span></a></li>
                            <li><a class="<?php echo ($page =='department-grid'||$page =='department-list') ? 'active' : '' ;?>"
                                    href="<?php echo base_url(); ?>department-grid"><span>Departments</span></a></li>
                            <li><a class="<?php echo ($page =='designation') ? 'active' : '' ;?>"
                                    href="<?php echo base_url(); ?>designation"><span>Designation</span></a></li>
                            <li><a class="<?php echo ($page =='shift') ? 'active' : '' ;?>"
                                    href="<?php echo base_url(); ?>shift"><span>Shifts</span></a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='attendance-employee'||$page =='attendance-admin') ? 'active subdrop' : '' ;?> "><span>Attendence</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>attendance-employee"
                                    class="<?php echo ($page =='attendance-employee') ? 'active' : '' ;?>">Employee</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>attendance-admin"
                                    class="<?php echo ($page =='attendance-admin') ? 'active' : '' ;?>">Admin</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='leaves-admin'||$page=='leaves-employee'||$page=='leave-types'||$page=='holidays') ? 'active subdrop' : '' ;?> "><span>Leaves
                                &amp; Holidays</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>leaves-admin"
                                    class="<?php echo ($page =='leaves-admin') ? 'active' : '' ;?>">Admin Leaves</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>leaves-employee"
                                    class="<?php echo ($page =='leaves-employee') ? 'active' : '' ;?>">Employee
                                    Leaves</a></li>
                            <li><a href="<?php echo base_url(); ?>leave-types"
                                    class="<?php echo ($page =='leave-types') ? 'active' : '' ;?>">Leave Types</a></li>
                            <li><a href="<?php echo base_url(); ?>holidays"
                                    class="<?php echo ($page =='holidays') ? 'active' : '' ;?>"><span>Holidays</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="<?php echo base_url(); ?>payroll-list"
                            class="<?php echo ($page =='payroll-list'||$page=='payslip') ? 'active subdrop' : '' ;?> "><span>Payroll</span><span
                                class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>payroll-list"
                                    class="<?php echo ($page =='payroll-list') ? 'active' : '' ;?>">Employee Salary</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>payslip"
                                    class="<?php echo ($page =='payslip') ? 'active' : '' ;?>">Payslip</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"
                    class="<?php echo ($page =='sales-report'||$page=='purchase-report'||$page=='inventory-report'||$page=='invoice-report'||$page=='supplier-report'||$page=='customer-report'||$page=='expense-report'||$page=='income-report'||$page=='tax-reports'||$page=='profit-and-loss') ? 'active subdrop' : '' ;?>"><img
                       src="<?php echo base_url(); ?>/assets/img/icons/printer.svg" alt="img"><span>Reports</span> <span
                        class="menu-arrow"></span></a>
                <ul>
                    <li><a class="<?php echo ($page =='sales-report') ? 'active' : '' ;?>"
                            href="<?php echo base_url(); ?>sales-report"><span>Sales
                                Report</span></a></li>
                    <li><a class="<?php echo ($page =='purchase-report') ? 'active' : '' ;?>"
                            href="<?php echo base_url(); ?>purchase-report"><span>Purchase
                                report</span></a></li>
                    <li><a class="<?php echo ($page =='inventory-report') ? 'active' : '' ;?>"
                            href="<?php echo base_url(); ?>inventory-report"><span>Inventory
                                Report</span></a></li>
                    <li><a class="<?php echo ($page =='invoice-report') ? 'active' : '' ;?>"
                            href="<?php echo base_url(); ?>invoice-report"><span>Invoice
                                Report</span></a></li>
                    <li><a class="<?php echo ($page =='supplier-report') ? 'active' : '' ;?>"
                            href="<?php echo base_url(); ?>supplier-report"><span>Supplier
                                Report</span></a></li>
                    <li><a class="<?php echo ($page =='customer-report') ? 'active' : '' ;?>"
                            href="<?php echo base_url(); ?>customer-report"><span>Customer
                                Report</span></a></li>
                    <li><a class="<?php echo ($page =='expense-report') ? 'active' : '' ;?>"
                            href="<?php echo base_url(); ?>expense-report"><span>Expense
                                Report</span></a></li>
                    <li><a class="<?php echo ($page =='income-report') ? 'active' : '' ;?>"
                            href="<?php echo base_url(); ?>income-report"><span>Income
                                Report</span></a></li>
                    <li><a class="<?php echo ($page =='tax-reports') ? 'active' : '' ;?>"
                            href="<?php echo base_url(); ?>tax-reports"><span>Tax
                                Report</span></a></li>
                    <li><a class="<?php echo ($page =='profit-and-loss') ? 'active' : '' ;?>"
                            href="<?php echo base_url(); ?>profit-and-loss"><span>Profit &
                                Loss</span></a></li>
                </ul>
            </li>
            <li class="submenu">
                <a href="javascript:void(0);"
                    class="<?php echo ($page =='general-settings'||$page =='security-settings'||$page =='notification'||$page =='connected-apps'||$page =='system-settings'||$page =='company-settings'||$page =='localization-settings'||$page =='prefixes'||$page =='preference'||$page =='appearance'||$page =='social-authentication'||$page =='language-settings'||$page =='language-settings-web'||$page =='invoice-settings'||$page =='printer-settings'||$page =='pos-settings'||$page =='custom-fields'||$page =='email-settings'||$page =='sms-gateway'||$page =='otp-settings'||$page =='gdpr-settings'||$page =='payment-gateway-settings'||$page =='bank-settings-grid'||$page =='bank-settings-list'||$page =='tax-rates'||$page =='currency-settings'||$page =='storage-settings'||$page =='ban-ip-address') ? 'active' : '' ;?>"><img
                       src="<?php echo base_url(); ?>/assets/img/icons/settings.svg" alt="img"><span>
                        Settings</span> <span class="menu-arrow"></span></a>
                <ul>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='general-settings'||$page =='security-settings'||$page =='notification'||$page =='connected-apps') ? 'active subdrop' : '' ;?>"><span>General
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>general-settings"
                                    class="<?php echo ($page =='general-settings') ? 'active' : '' ;?>">Profile</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>security-settings"
                                    class="<?php echo ($page =='security-settings') ? 'active' : '' ;?>">Security</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>notification"
                                    class="<?php echo ($page =='notification') ? 'active' : '' ;?>">Notifications</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>connected-apps"
                                    class="<?php echo ($page =='connected-apps') ? 'active' : '' ;?>">Connected
                                    Apps</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='system-settings'||$page =='company-settings'||$page =='localization-settings'||$page =='prefixes'||$page =='preference'||$page =='appearance'||$page =='social-authentication'||$page =='language-settings'||$page =='language-settings-web') ? 'active subdrop' : '' ;?>"><span>Website
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>system-settings"
                                    class="<?php echo ($page =='system-settings') ? 'active' : '' ;?>">System
                                    Settings</a></li>
                            <li><a href="<?php echo base_url(); ?>company-settings"
                                    class="<?php echo ($page =='company-settings') ? 'active' : '' ;?>">Company
                                    Settings </a></li>
                            <li><a href="<?php echo base_url(); ?>localization-settings"
                                    class="<?php echo ($page =='localization-settings') ? 'active' : '' ;?>">Localization</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>prefixes"
                                    class="<?php echo ($page =='prefixes') ? 'active' : '' ;?>">Prefixes</a></li>
                            <li><a href="<?php echo base_url(); ?>preference"
                                    class="<?php echo ($page =='preference') ? 'active' : '' ;?>">Preference</a></li>
                            <li><a href="<?php echo base_url(); ?>appearance"
                                    class="<?php echo ($page =='appearance') ? 'active' : '' ;?>">Appearance</a></li>
                            <li><a href="<?php echo base_url(); ?>social-authentication"
                                    class="<?php echo ($page =='social-authentication') ? 'active' : '' ;?>">Social
                                    Authentication</a></li>
                            <li><a href="<?php echo base_url(); ?>language-settings"
                                    class="<?php echo ($page =='language-settings'||$page =='language-settings-web') ? 'active' : '' ;?>">Language</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='invoice-settings'||$page =='printer-settings'||$page =='pos-settings'||$page =='custom-fields') ? 'active subdrop' : '' ;?>"><span>App
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>invoice-settings"
                                    class="<?php echo ($page =='invoice-settings') ? 'active' : '' ;?>">Invoice</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>printer-settings"
                                    class="<?php echo ($page =='printer-settings') ? 'active' : '' ;?>">Printer</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>pos-settings"
                                    class="<?php echo ($page =='pos-settings') ? 'active' : '' ;?>">POS</a></li>
                            <li><a href="<?php echo base_url(); ?>custom-fields"
                                    class="<?php echo ($page =='custom-fields') ? 'active' : '' ;?>">Custom Fields</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='email-settings'||$page =='sms-gateway'||$page =='otp-settings'||$page =='gdpr-settings') ? 'active subdrop' : '' ;?>"><span>System
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>email-settings"
                                    class="<?php echo ($page =='email-settings') ? 'active' : '' ;?>">Email</a></li>
                            <li><a href="<?php echo base_url(); ?>sms-gateway"
                                    class="<?php echo ($page =='sms-gateway') ? 'active' : '' ;?>">SMS Gateways</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>otp-settings"
                                    class="<?php echo ($page =='otp-settings') ? 'active' : '' ;?>">OTP</a></li>
                            <li><a href="<?php echo base_url(); ?>gdpr-settings"
                                    class="<?php echo ($page =='gdpr-settings') ? 'active' : '' ;?>">GDPR Cookies</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='payment-gateway-settings'||$page =='bank-settings-grid'||$page =='bank-settings-list'||$page =='tax-rates'||$page =='currency-settings') ? 'active subdrop' : '' ;?>"><span>Financial
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>payment-gateway-settings"
                                    class="<?php echo ($page =='payment-gateway-settings') ? 'active' : '' ;?>">Payment
                                    Gateway</a></li>
                            <li><a href="<?php echo base_url(); ?>bank-settings-grid"
                                    class="<?php echo ($page =='bank-settings-grid'||$page =='bank-settings-list') ? 'active' : '' ;?>">Bank
                                    Accounts</a></li>
                            <li><a href="<?php echo base_url(); ?>tax-rates"
                                    class="<?php echo ($page =='tax-rates') ? 'active' : '' ;?>">Tax Rates</a></li>
                            <li><a href="<?php echo base_url(); ?>currency-settings"
                                    class="<?php echo ($page =='currency-settings') ? 'active' : '' ;?>">Currencies</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"
                            class="<?php echo ($page =='storage-settings'||$page =='ban-ip-address') ? 'active subdrop' : '' ;?> "><span>Other
                                Settings</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>storage-settings"
                                    class="<?php echo ($page =='storage-settings') ? 'active' : '' ;?>">Storage</a>
                            </li>
                            <li><a href="<?php echo base_url(); ?>ban-ip-address"
                                    class="<?php echo ($page =='ban-ip-address') ? 'active' : '' ;?>">Ban IP
                                    Address</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);"><span>Documentation</span></a></li>
                    <li><a href="javascript:void(0);"><span>Changelog v2.0.3</span></a></li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="javascript:void(0);">Level 1.1</a></li>
                            <li class="submenu submenu-two"><a href="javascript:void(0);">Level 1.2<span
                                        class="menu-arrow inside-submenu"></span></a>
                                <ul>
                                    <li><a href="javascript:void(0);">Level 2.1</a></li>
                                    <li class="submenu submenu-two submenu-three"><a href="javascript:void(0);">Level
                                            2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
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
<!-- /Sidebar -->
		