<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }
    public function Dashboard()
	{
		return view('index');
	}
	public function Managestocks()
	{
		return view('manage-stocks');
	}
	public function Notes()
	{
		return view('notes');
	}
	public function Notification()
	{
		return view('notification');
	}
	public function Otpsettings()
	{
		return view('otp-settings');
	}
	public function Paymentgatewaysettings()
	{
		return view('payment-gateway-settings');
	}
	public function Payrolllist()
	{
		return view('payroll-list');
	}
	public function Payslip()
	{
		return view('payslip');
	}
	public function Permissions()
	{
		return view('permissions');
	}
	public function Pos()
	{
		return view('pos');
	}
	public function Possettings()
	{
		return view('pos-settings');
	}
	public function Preference()
	{
		return view('preference');
	}
	public function Prefixes()
	{
		return view('prefixes');
	}
	public function Printersettings()
	{
		return view('printer-settings');
	}
	public function Productdetails()
	{
		return view('product-details');
	}
	public function Productlist()
	{
		return view('product-list');
	}
	public function Profile()
	{
		return view('profile');
	}
	public function Profitandloss()
	{
		return view('profit-and-loss');
	}
	public function Purchaselist()
	{
		return view('purchase-list');
	}
	public function Purchaseorderreport()
	{
		return view('purchase-order-report');
	}
	public function Purchasereport()
	{
		return view('purchase-report');
	}
	public function Purchasereturns()
	{
		return view('purchase-returns');
	}
	public function Qrcode()
	{
		return view('qrcode');
	}
	public function Quotationlist()
	{
		return view('quotation-list');
	}
	public function Register()
	{
		return view('register');
	}
	public function Register2()
	{
		return view('register-2');
	}
	public function Register3()
	{
		return view('register-3');
	}
	public function Resetpassword()
	{
		return view('reset-password');
	}
	public function Resetpassword2()
	{
		return view('reset-password-2');
	}
	public function Resetpassword3()
	{
		return view('reset-password-3');
	}
	public function Rolespermissions()
	{
		return view('roles-permissions');
	}
	public function Salesdashboard()
	{
		return view('sales-dashboard');
	}
	public function Saleslist()
	{
		return view('sales-list');
	}
	public function Salesreport()
	{
		return view('sales-report');
	}
	public function Salesreturns()
	{
		return view('sales-returns');
	}
	public function Securitysettings()
	{
		return view('security-settings');
	}
	public function Shift()
	{
		return view('shift');
	}
	public function Signin()
	{
		return view('signin');
	}
	public function Signin2()
	{
		return view('signin-2');
	}
	public function Signin3()
	{
		return view('signin-3');
	}
	public function Smsgateway()
	{
		return view('sms-gateway');
	}
	public function Socialauthentication()
	{
		return view('social-authentication');
	}
	public function Stockadjustment()
	{
		return view('stock-adjustment');
	}
	public function Stocktransfer()
	{
		return view('stock-transfer');
	}
	public function Storagesettings()
	{
		return view('storage-settings');
	}
	public function Storelist()
	{
		return view('store-list');
	}
	public function Subcategories()
	{
		return view('sub-categories');
	}
	public function Success()
	{
		return view('success');
	}
	public function Success2()
	{
		return view('success-2');
	}
	public function Success3()
	{
		return view('success-3');
	}
	public function Supplierreport()
	{
		return view('supplier-report');
	}
	public function Suppliers()
	{
		return view('suppliers');
	}
	public function Systemsettings()
	{
		return view('system-settings');
	}
	public function Tablesbasic()
	{
		return view('tables-basic');
	}
	public function Taxrates()
	{
		return view('tax-rates');
	}
	public function Taxreports()
	{
		return view('tax-reports');
	}
	public function Todo()
	{
		return view('todo');
	}
	public function Twostepverification()
	{
		return view('two-step-verification');
	}
	public function Twostepverification2()
	{
		return view('two-step-verification-2');
	}
	public function Twostepverification3()
	{
		return view('two-step-verification-3');
	}
	public function Uiaccordion()
	{
		return view('ui-accordion');
	}
	public function Uialerts()
	{
		return view('ui-alerts');
	}
	public function Uiavatar()
	{
		return view('ui-avatar');
	}
	public function Uibadges()
	{
		return view('ui-badges');
	}
	public function Uiborders()
	{
		return view('ui-borders');
	}
	public function Uibreadcrumb()
	{
		return view('ui-breadcrumb');
	}
	public function Uibuttonsgroup()
	{
		return view('ui-buttons-group');
	}
	public function Uibuttons()
	{
		return view('ui-buttons');
	}
	public function Uicards()
	{
		return view('ui-cards');
	}
	public function Uicarousel()
	{
		return view('ui-carousel');
	}
	public function Uiclipboard()
	{
		return view('ui-clipboard');
	}
	public function Uicolors()
	{
		return view('ui-colors');
	}
	public function Uicounter()
	{
		return view('ui-counter');
	}
	public function Uidragdrop()
	{
		return view('ui-drag-drop');
	}
	public function Uidropdowns()
	{
		return view('ui-dropdowns');
	}
	public function Uigrid()
	{
		return view('ui-grid');
	}
	public function Uiimages()
	{
		return view('ui-images');
	}
	public function Uilightbox()
	{
		return view('ui-lightbox');
	}
	public function Uimedia()
	{
		return view('ui-media');
	}
	public function Uimodals()
	{
		return view('ui-modals');
	}
	public function Uinavtabs()
	{
		return view('ui-nav-tabs');
	}
	public function Uioffcanvas()
	{
		return view('ui-offcanvas');
	}
	public function Uipagination()
	{
		return view('ui-pagination');
	}
	public function Uiplaceholders()
	{
		return view('ui-placeholders');
	}
	public function Uipopovers()
	{
		return view('ui-popovers');
	}
	public function Uiprogress()
	{
		return view('ui-progress');
	}
	public function Uirangeslider()
	{
		return view('ui-rangeslider');
	}
	public function Uirating()
	{
		return view('ui-rating');
	}
	public function Uiribbon()
	{
		return view('ui-ribbon');
	}
	public function Uiscrollbar()
	{
		return view('ui-scrollbar');
	}
	public function Uispinner()
	{
		return view('ui-spinner');
	}
	public function Uistickynote()
	{
		return view('ui-stickynote');
	}
	public function Uisweetalerts()
	{
		return view('ui-sweetalerts');
	}
	public function Uitexteditor()
	{
		return view('ui-text-editor');
	}
	public function Uitimeline()
	{
		return view('ui-timeline');
	}
	public function Uitoasts()
	{
		return view('ui-toasts');
	}
	public function Uitooltips()
	{
		return view('ui-tooltips');
	}
	public function Uitypography()
	{
		return view('ui-typography');
	}
	public function Uivideo()
	{
		return view('ui-video');
	}
	public function Undermaintenance()
	{
		return view('under-maintenance');
	}
	public function Units()
	{
		return view('units');
	}
	public function Users()
	{
		return view('users');
	}
	public function Varriantattributes()
	{
		return view('varriant-attributes');
	}	
	public function Videocall()
	{
		return view('video-call');
	}
	public function Warehouse()
	{
		return view('warehouse');
	}
	public function Warranty()
	{
		return view('warranty');
	}
	public function activities()
	{
		return view('activities');
	}
	public function add_employee()
	{
		return view('add-employee');
	}
	public function add_product()
	{
		return view('add-product');
	}
	public function appearance()
	{
		return view('appearance');
	}
	public function attendance_admin()
	{
		return view('attendance-admin');
	}
	public function attendance_employee()
	{
		return view('attendance-employee');
	}
	public function audio_call()
	{
		return view('audio-call');
	}
	public function ban_ip_address()
	{
		return view('ban-ip-address');
	}
	public function bank_settings_grid()
	{
		return view('bank-settings-grid');
	}
	public function bank_settings_list()
	{
		return view('bank-settings-list');
	}
	public function barcode()
	{
		return view('barcode');
	}
	public function blank_page()
	{
		return view('blank-page');
	}
	public function brand_list()
	{
		return view('brand-list');
	}
	public function calendar()
	{
		return view('calendar');
	}
	public function call_history()
	{
		return view('call-history');
	}
	public function category_list()
	{
		return view('category-list');
	}
	public function chart_apex()
	{
		return view('chart-apex');
	}
	public function chart_c3()
	{
		return view('chart-c3');
	}
	public function chart_flot()
	{
		return view('chart-flot');
	}
	public function chart_js()
	{
		return view('chart-js');
	}
	public function chart_morris()
	{
		return view('chart-morris');
	}
	public function chart_peity()
	{
		return view('chart-peity');
	}
	public function chat()
	{
		return view('chat');
	}
	public function coming_soon()
	{
		return view('coming-soon');
	}
	public function company_settings()
	{
		return view('company-settings');
	}
	public function connected_apps()
	{
		return view('connected-apps');
	}
	public function countries()
	{
		return view('countries');
	}
	public function coupons()
	{
		return view('coupons');
	}
	public function currency_settings()
	{
		return view('currency-settings');
	}
	public function custom_fields()
	{
		return view('custom-fields');
	}
	public function customer_report()
	{
		return view('customer-report');
	}
    public function customers()
	{
		return view('customers');
	}
	public function data_tables()
	{
		return view('data-tables');
	}
	public function delete_account()
	{
		return view('delete-account');         
	}
	public function department_grid()
	{
		return view('department-grid');         
	}
	public function department_list()
	{
		return view('department-list');         
	}
	public function designation()
	{
		return view('designation');         
	}
	public function edit_employee()
	{
		return view('edit-employee');         
	}
	public function edit_product()
	{
		return view('edit-product');         
	}
	public function email_verification_2()
	{
		return view('email-verification-2');         
	}
	public function email_verification_3()
	{
		return view('email-verification-3');         
	}
	public function email_verification()
	{
		return view('email-verification');         
	}
	public function email()
	{
		return view('email');         
	}
	public function employees_grid()
	{
		return view('employees-grid');         
	}
	public function employees_list()
	{
		return view('employees-list');         
	}
	public function error_404()
	{
		return view('error-404');         
	}
	public function error_500()
	{
		return view('error-500');         
	}
	public function expense_category()
	{
		return view('expense-category');         
	}
	public function expense_list()
	{
		return view('expense-list');         
	}
	public function expense_report()
	{
		return view('expense-report');         
	}
	public function expired_products()
	{
		return view('expired-products');         
	}
	public function file_archived()
	{
		return view('file-archived');         
	}
	public function file_document()
	{
		return view('file-document');         
	}
	public function file_favourites()
	{
		return view('file-favourites');         
	}
	public function file_manager_deleted()
	{
		return view('file-manager-deleted');         
	}
	public function file_manager()
	{
		return view('file-manager');         
	}
	public function file_recent()
	{
		return view('file-recent');         
	}
	public function file_shared()
	{
		return view('file-shared');         
	}
	public function forgot_password_2()
	{
		return view('forgot-password-2');         
	}
	public function forgot_password_3()
	{
		return view('forgot-password-3');         
	}
	public function forgot_password()
	{
		return view('forgot-password');         
	}
	public function form_basic_inputs()
	{
		return view('form-basic-inputs');         
	}
	public function form_checkbox_radios()
	{
		return view('form-checkbox-radios');         
	}
	public function form_elements()
	{
		return view('form-elements');         
	}
	public function form_fileupload()
	{
		return view('form-fileupload');         
	}
	public function form_floating_labels()
	{
		return view('form-floating-labels');         
	}
	public function form_grid_gutters()
	{
		return view('form-grid-gutters');         
	}
	public function form_horizontal()
	{
		return view('form-horizontal');         
	}
	public function form_input_groups()
	{
		return view('form-input-groups');         
	}
	public function form_mask()
	{
		return view('form-mask');         
	}
	public function form_select()
	{
		return view('form-select');         
	}
	public function form_select2()
	{
		return view('form-select2');         
	}
	public function form_validation()
	{
		return view('form-validation');         
	}
	public function form_vertical()
	{
		return view('form-vertical');         
	}
	public function form_wizard()
	{
		return view('form-wizard');         
	}
	public function gdpr_settings()
	{
		return view('gdpr-settings');         
	}
	public function general_settings()
	{
		return view('general-settings');         
	}
	public function holidays()
	{
		return view('holidays');         
	}
	public function icon_feather()
	{
		return view('icon-feather');         
	}
	public function icon_flag()
	{
		return view('icon-flag');         
	}
	public function icon_fontawesome()
	{
		return view('icon-fontawesome');         
	}
	public function icon_ionic()
	{
		return view('icon-ionic');         
	}
	public function icon_material()
	{
		return view('icon-material');         
	}
	public function icon_pe7()
	{
		return view('icon-pe7');         
	}
	public function icon_simpleline()
	{
		return view('icon-simpleline');         
	}
	public function icon_themify()
	{
		return view('icon-themify');         
	}
	public function icon_typicon()
	{
		return view('icon-typicon');         
	}
	public function icon_weather()
	{
		return view('icon-weather');         
	}
	public function income_report()
	{
		return view('income-report');         
	}
	public function inventory_report()
	{
		return view('inventory-report');         
	}
	public function invoice_report()
	{
		return view('invoice-report');         
	}
	public function invoice_settings()
	{
		return view('invoice-settings');         
	}
	public function language_settings_web()
	{
		return view('language-settings-web');         
	}
	public function language_settings()
	{
		return view('language-settings');         
	}
	public function leave_types()
	{
		return view('leave-types');         
	}
	public function leaves_admin()
	{
		return view('leaves-admin');         
	}
	public function leaves_employee()
	{
		return view('leaves-employee');         
	}
	public function localization_settings()
	{
		return view('localization-settings');         
	}
	public function lock_screen()
	{
		return view('lock-screen');         
	}
	public function low_stocks()
	{
		return view('low-stocks');         
	}
	public function states()
	{
		return view('states');         
	}
	public function email_settings()
	{
		return view('email-settings');         
	}



































	
}
