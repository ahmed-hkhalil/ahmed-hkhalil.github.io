<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('dashboard', 'Home::Dashboard');
$routes->get('manage-stocks', 'Home::Managestocks');
$routes->get('notes', 'Home::Notes');
$routes->get('notification', 'Home::Notification');
$routes->get('otp-settings', 'Home::Otpsettings');
$routes->get('payment-gateway-settings', 'Home::Paymentgatewaysettings');
$routes->get('payroll-list', 'Home::Payrolllist');
$routes->get('payslip', 'Home::Payslip');
$routes->get('permissions', 'Home::Permissions');
$routes->get('pos', 'Home::Pos');
$routes->get('pos-settings', 'Home::Possettings');
$routes->get('preference', 'Home::Preference');
$routes->get('prefixes', 'Home::Prefixes');
$routes->get('printer-settings', 'Home::Printersettings');
$routes->get('product-details', 'Home::Productdetails');
$routes->get('product-list', 'Home::Productlist');
$routes->get('profile', 'Home::Profile');
$routes->get('profit-and-loss', 'Home::Profitandloss');
$routes->get('purchase-list', 'Home::Purchaselist');
$routes->get('purchase-order-report', 'Home::Purchaseorderreport');
$routes->get('purchase-report', 'Home::Purchasereport');
$routes->get('purchase-returns', 'Home::Purchasereturns');
$routes->get('qrcode', 'Home::Qrcode');
$routes->get('quotation-list', 'Home::Quotationlist');
$routes->get('register', 'Home::Register');
$routes->get('register-2', 'Home::Register2');
$routes->get('register-3', 'Home::Register3');
$routes->get('reset-password', 'Home::Resetpassword');
$routes->get('reset-password-2', 'Home::Resetpassword2');
$routes->get('reset-password-3', 'Home::Resetpassword3');
$routes->get('roles-permissions', 'Home::Rolespermissions');
$routes->get('sales-dashboard', 'Home::Salesdashboard');
$routes->get('sales-list', 'Home::Saleslist');
$routes->get('sales-report', 'Home::Salesreport');
$routes->get('sales-returns', 'Home::Salesreturns');
$routes->get('security-settings', 'Home::Securitysettings');
$routes->get('shift', 'Home::Shift');
$routes->get('signin', 'Home::Signin');
$routes->get('signin-2', 'Home::Signin2');
$routes->get('signin-3', 'Home::Signin3');
$routes->get('sms-gateway', 'Home::Smsgateway');
$routes->get('social-authentication', 'Home::Socialauthentication');
$routes->get('stock-adjustment', 'Home::Stockadjustment');
$routes->get('stock-transfer', 'Home::Stocktransfer');
$routes->get('storage-settings', 'Home::Storagesettings');
$routes->get('store-list', 'Home::Storelist');
$routes->get('sub-categories', 'Home::Subcategories');
$routes->get('success', 'Home::Success');
$routes->get('success-2', 'Home::Success2');
$routes->get('success-3', 'Home::Success3');
$routes->get('supplier-report', 'Home::Supplierreport');
$routes->get('suppliers', 'Home::Suppliers');
$routes->get('system-settings', 'Home::Systemsettings');
$routes->get('tables-basic', 'Home::Tablesbasic');
$routes->get('tax-rates', 'Home::Taxrates');
$routes->get('tax-reports', 'Home::Taxreports');
$routes->get('todo', 'Home::Todo');
$routes->get('two-step-verification', 'Home::Twostepverification');
$routes->get('two-step-verification-2', 'Home::Twostepverification2');
$routes->get('two-step-verification-3', 'Home::Twostepverification3');
$routes->get('ui-accordion', 'Home::Uiaccordion');
$routes->get('ui-alerts', 'Home::Uialerts');
$routes->get('ui-avatar', 'Home::Uiavatar');
$routes->get('ui-badges', 'Home::Uibadges');
$routes->get('ui-borders', 'Home::Uiborders');
$routes->get('ui-breadcrumb', 'Home::Uibreadcrumb');
$routes->get('ui-buttons-group', 'Home::Uibuttonsgroup');
$routes->get('ui-buttons', 'Home::Uibuttons');
$routes->get('ui-cards', 'Home::Uicards');
$routes->get('ui-carousel', 'Home::Uicarousel');
$routes->get('ui-clipboard', 'Home::Uiclipboard');
$routes->get('ui-colors', 'Home::Uicolors');
$routes->get('ui-counter', 'Home::Uicounter');
$routes->get('ui-drag-drop', 'Home::Uidragdrop');
$routes->get('ui-dropdowns', 'Home::Uidropdowns');
$routes->get('ui-grid', 'Home::Uigrid');
$routes->get('ui-images', 'Home::Uiimages');
$routes->get('ui-lightbox', 'Home::Uilightbox');
$routes->get('ui-media', 'Home::Uimedia');
$routes->get('ui-modals', 'Home::Uimodals');
$routes->get('ui-nav-tabs', 'Home::Uinavtabs');
$routes->get('ui-offcanvas', 'Home::Uioffcanvas');
$routes->get('ui-pagination', 'Home::Uipagination');
$routes->get('ui-placeholders', 'Home::Uiplaceholders');
$routes->get('ui-popovers', 'Home::Uipopovers');
$routes->get('ui-progress', 'Home::Uiprogress');
$routes->get('ui-rangeslider', 'Home::Uirangeslider');
$routes->get('ui-rating', 'Home::Uirating');
$routes->get('ui-ribbon', 'Home::Uiribbon');
$routes->get('ui-scrollbar', 'Home::Uiscrollbar');
$routes->get('ui-spinner', 'Home::Uispinner');
$routes->get('ui-stickynote', 'Home::Uistickynote');
$routes->get('ui-sweetalerts', 'Home::Uisweetalerts');
$routes->get('ui-text-editor', 'Home::Uitexteditor');
$routes->get('ui-timeline', 'Home::Uitimeline');
$routes->get('ui-toasts', 'Home::Uitoasts');
$routes->get('ui-tooltips', 'Home::Uitooltips');
$routes->get('ui-typography', 'Home::Uitypography');
$routes->get('ui-video', 'Home::Uivideo');
$routes->get('under-maintenance', 'Home::Undermaintenance');
$routes->get('units', 'Home::Units');
$routes->get('users', 'Home::Users');
$routes->get('varriant-attributes', 'Home::Varriantattributes');
$routes->get('video-call', 'Home::Videocall');
$routes->get('warehouse', 'Home::Warehouse');
$routes->get('warranty', 'Home::Warranty');

$routes->get('activities', 'Home::activities');
$routes->get('add-employee', 'Home::add_employee');
$routes->get('add-product', 'Home::add_product');
$routes->get('appearance', 'Home::appearance');
$routes->get('attendance-admin', 'Home::attendance_admin');
$routes->get('attendance-employee', 'Home::attendance_employee');
$routes->get('audio-call', 'Home::audio_call');
$routes->get('ban-ip-address', 'Home::ban_ip_address');
$routes->get('bank-settings-grid', 'Home::bank_settings_grid');
$routes->get('bank-settings-list', 'Home::bank_settings_list');
$routes->get('barcode', 'Home::barcode');
$routes->get('blank-page', 'Home::blank_page');
$routes->get('brand-list', 'Home::brand_list');
$routes->get('calendar', 'Home::calendar');
$routes->get('call-history', 'Home::call_history');
$routes->get('category-list', 'Home::category_list');
$routes->get('chart-apex', 'Home::chart_apex');
$routes->get('chart-c3', 'Home::chart_c3');
$routes->get('chart-flot', 'Home::chart_flot');
$routes->get('chart-js', 'Home::chart_js');
$routes->get('chart-morris', 'Home::chart_morris');
$routes->get('chart-peity', 'Home::chart_peity');
$routes->get('chat', 'Home::chat');
$routes->get('coming-soon', 'Home::coming_soon');
$routes->get('company-settings', 'Home::company_settings');
$routes->get('connected-apps', 'Home::connected_apps');
$routes->get('countries', 'Home::countries');
$routes->get('coupons', 'Home::coupons');
$routes->get('currency-settings', 'Home::currency_settings');
$routes->get('custom-fields', 'Home::custom_fields');
$routes->get('customer-report', 'Home::customer_report');
$routes->get('customers', 'Home::customers');
$routes->get('data-tables', 'Home::data_tables');
$routes->get('delete-account', 'Home::delete_account');
$routes->get('department-grid', 'Home::department_grid');
$routes->get('department-list', 'Home::department_list');
$routes->get('designation', 'Home::designation');
$routes->get('edit-employee', 'Home::edit_employee');
$routes->get('edit-product', 'Home::edit_product');
$routes->get('email-verification-2', 'Home::email_verification_2');
$routes->get('email-verification-3', 'Home::email_verification_3');
$routes->get('email-verification', 'Home::email_verification');
$routes->get('email', 'Home::email');
$routes->get('employees-grid', 'Home::employees_grid');
$routes->get('employees-list', 'Home::employees_list');
$routes->get('error-404', 'Home::error_404');
$routes->get('error-500', 'Home::error_500');
$routes->get('expense-category', 'Home::expense_category');
$routes->get('expense-list', 'Home::expense_list');
$routes->get('expense-report', 'Home::expense_report');
$routes->get('expired-products', 'Home::expired_products');
$routes->get('file-archived', 'Home::file_archived');
$routes->get('file-document', 'Home::file_document');
$routes->get('file-favourites', 'Home::file_favourites');
$routes->get('file-manager-deleted', 'Home::file_manager_deleted');
$routes->get('file-manager', 'Home::file_manager');
$routes->get('file-recent', 'Home::file_recent'); 
$routes->get('file-shared', 'Home::file_shared');  
$routes->get('forgot-password-2', 'Home::forgot_password_2');   
$routes->get('forgot-password-3', 'Home::forgot_password_3');   
$routes->get('forgot-password', 'Home::forgot_password');   
$routes->get('form-basic-inputs', 'Home::form_basic_inputs');  
$routes->get('form-checkbox-radios', 'Home::form_checkbox_radios');  
$routes->get('form-elements', 'Home::form_elements');  
$routes->get('form-fileupload', 'Home::form_fileupload');  
$routes->get('form-floating-labels', 'Home::form_floating_labels');
$routes->get('form-grid-gutters', 'Home::form_grid_gutters');
$routes->get('form-horizontal', 'Home::form_horizontal');
$routes->get('form-input-groups', 'Home::form_input_groups');
$routes->get('form-mask', 'Home::form_mask');
$routes->get('form-select', 'Home::form_select');
$routes->get('form-select2', 'Home::form_select2');
$routes->get('form-validation', 'Home::form_validation');
$routes->get('form-vertical', 'Home::form_vertical');
$routes->get('form-wizard', 'Home::form_wizard');
$routes->get('gdpr-settings', 'Home::gdpr_settings');
$routes->get('general-settings', 'Home::general_settings');
$routes->get('holidays', 'Home::holidays');
$routes->get('icon-feather', 'Home::icon_feather');
$routes->get('icon-flag', 'Home::icon_flag');
$routes->get('icon-fontawesome', 'Home::icon_fontawesome');
$routes->get('icon-ionic', 'Home::icon_ionic');
$routes->get('icon-material', 'Home::icon_material');
$routes->get('icon-pe7', 'Home::icon_pe7');
$routes->get('icon-simpleline', 'Home::icon_simpleline');
$routes->get('icon-themify', 'Home::icon_themify');
$routes->get('icon-typicon', 'Home::icon_typicon');
$routes->get('icon-weather', 'Home::icon_weather');
$routes->get('income-report', 'Home::income_report');
$routes->get('inventory-report', 'Home::inventory_report');
$routes->get('invoice-report', 'Home::invoice_report');    
$routes->get('invoice-settings', 'Home::invoice_settings');   
$routes->get('language-settings-web', 'Home::language_settings_web');    
$routes->get('language-settings', 'Home::language_settings');  
$routes->get('leave-types', 'Home::leave_types');  
$routes->get('leaves-admin', 'Home::leaves_admin');  
$routes->get('leaves-employee', 'Home::leaves_employee');  
$routes->get('localization-settings', 'Home::localization_settings');   
$routes->get('lock-screen', 'Home::lock_screen');   
$routes->get('low-stocks', 'Home::low_stocks');     
$routes->get('states', 'Home::states'); 
$routes->get('email-settings', 'Home::email_settings');     
















 

 

 

 
 
 
 
 























































/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
