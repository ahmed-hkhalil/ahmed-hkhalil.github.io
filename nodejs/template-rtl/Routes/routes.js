const express = require("express");
const route = express.Router();
const public_routes = require("./public.routes");

var LocalStorage = require("node-localstorage").LocalStorage,
  localStorage = new LocalStorage("./local-storage");

var selected_layout = "index";

var changeLayout = function (res) {
  setLayout();
  res.redirect(public_routes.dashboard);
};

route.use(function (req, res, next) {
  let url_replace_options = req.url.replace("?", "");
  res.locals.routes = public_routes;
  res.locals.current_routes = url_replace_options;
  next();
});

var setLayout = function () {
  let current_layout = localStorage.getItem("layout");
  if (current_layout == "index") {
    selected_layout = "index";
  }
  if (current_layout == "index-one") {
    selected_layout = "index-one";
  }
  if (current_layout == "index-two") {
    selected_layout = "index-two";
  }
  if (current_layout == "index-three") {
    selected_layout = "index-three";
  }
  if (current_layout == "index-four") {
    selected_layout = "index-four";
  }
};
setLayout();
route.get("/index", function (req, res) {
  localStorage.setItem("layout", "index");
  changeLayout(res);
});

route.get("/index-one", function (req, res) {
  localStorage.setItem("layout", "index-one");
  changeLayout(res);
});

route.get("/index-two", function (req, res) {
  localStorage.setItem("layout", "index-two");
  changeLayout(res);
});

route.get("/index-three", function (req, res) {
  localStorage.setItem("layout", "index-three");
  changeLayout(res);
});

route.get("/index-four", function (req, res) {
  localStorage.setItem("layout", "index-four");
  changeLayout(res);
});

// redirect
route.get("/", function (req, res) {
  res.redirect(public_routes.login);
});
// redirect **

// auth
route.get(public_routes.login, (req, res, next) => {
  res.render("Auth/login");
});
route.get(public_routes.signUp, (req, res, next) => {
  res.render("Auth/signup");
});
route.get("/forget-password", (req, res, next) => {
  res.render("Auth/forgetPassword");
});
route.get("/reset-password", (req, res, next) => {
  res.render("Auth/resetPassword");
});
// auth **

// main
route.get(public_routes.dashboard, (req, res, next) => {
  res.render("layout", {
    page_path: "./dashboard/dashboard",
    layout: selected_layout,
    title: "Dashboard",
  });
});

//------------------------ PRODUCT ---------------------------- //

route.get(public_routes.product_list, (req, res, next) => {
  res.render("layout", {
    page_path: "./product/productlist",
    layout: selected_layout,
    title: "Product List",
  });
});

//====== Code to be start ======== //
//add-product
route.get(public_routes.product_addProduct, (req, res, next) => {
  res.render("layout", {
    page_path: "./product/addproduct",
    active_path: "Add Product",
    layout: selected_layout,
    title: "Add Product",
  });
});

//categorylist
route.get(public_routes.product_categoryList, (req, res, next) => {
  res.render("layout", {
    page_path: "./product/categorylist",
    active_path: "Category List",
    layout: selected_layout,
    title: "Category List",
  });
});

//addcategory
route.get(public_routes.product_addCategory, (req, res, next) => {
  res.render("layout", {
    page_path: "./product/addcategory",
    layout: selected_layout,
    title: "Add Category",
  });
});

//subcategorylist
route.get(public_routes.product_subCategoryList, (req, res, next) => {
  res.render("layout", {
    page_path: "./product/subcategorylist",
    layout: selected_layout,
    title: "Sub Category List",
  });
});

//addsubcategory
route.get(public_routes.product_addSubCategory, (req, res, next) => {
  res.render("layout", {
    page_path: "./product/addsubcategory",
    layout: selected_layout,
    title: "Add Sub Category",
  });
});

//brandlist
route.get(public_routes.product_brandList, (req, res, next) => {
  res.render("layout", {
    page_path: "./product/brandlist",
    layout: selected_layout,
    title: "Brand List",
  });
});

//addbrand
route.get(public_routes.product_addBrand, (req, res, next) => {
  res.render("layout", {
    page_path: "./product/addbrand",
    layout: selected_layout,
    title: "Add Brand",
  });
});

//importproduct
route.get(public_routes.product_importProduct, (req, res, next) => {
  res.render("layout", {
    page_path: "./product/importproduct",
    layout: selected_layout,
    title: "Import Product",
  });
});

//printbarcode
route.get(public_routes.product_printBarcode, (req, res, next) => {
  res.render("layout", {
    page_path: "./product/printbarcode",
    layout: selected_layout,
    title: "Print BarCode",
  });
});

//Product Details
route.get(public_routes.product_productDetails, (req, res, next) => {
  res.render("layout", {
    page_path: "./product/productdetails",
    layout: selected_layout,
    title: "Product Details",
  });
});

//Edit Product
route.get(public_routes.product_editProduct, (req, res, next) => {
  res.render("layout", {
    page_path: "./product/editproduct",
    layout: selected_layout,
    title: "Edit Product",
  });
});

//Edit Category
route.get(public_routes.product_editCategory, (req, res, next) => {
  res.render("layout", {
    page_path: "./product/editcategory",
    layout: selected_layout,
    title: "Edit Category",
  });
});

//Edit Brand
route.get(public_routes.product_editBrand, (req, res, next) => {
  res.render("layout", {
    page_path: "./product/editbrand",
    layout: selected_layout,
    title: "Edit Brand",
  });
});

//Edit Sub Category
route.get(public_routes.product_editSubCategory, (req, res, next) => {
  res.render("layout", {
    page_path: "./product/editsubcategory",
    layout: selected_layout,
    title: "Edit Sub Category",
  });
});

//------------------------ /PRODUCT ---------------------------- //

//------------------------  SALES ---------------------------- //

//Sales
route.get(public_routes.sales_salesList, (req, res, next) => {
  res.render("layout", {
    page_path: "./sales/saleslist",
    layout: selected_layout,
    title: "Sales List",
  });
});

//POS
route.get(public_routes.sales_pos, (req, res, next) => {
  res.render("layout", {
    page_path: "./sales/pos",
    layout: selected_layout,
    title: "POS",
  });
});

//New Sales
route.get(public_routes.sales_newSales, (req, res, next) => {
  res.render("layout", {
    page_path: "./sales/newsales",
    layout: selected_layout,
    title: "New Sales",
  });
});

//SalesReturnList
route.get(public_routes.sales_salesReturnLists, (req, res, next) => {
  res.render("layout", {
    page_path: "./sales/salesreturnlists",
    layout: selected_layout,
    title: "Sales Return List",
  });
});

//NewSalesReturn
route.get(public_routes.sales_newSalesReturn, (req, res, next) => {
  res.render("layout", {
    page_path: "./sales/newsalesreturn",
    layout: selected_layout,
    title: "New Sales Return",
  });
});

// Edit Sales
route.get(public_routes.sales_editSales, (req, res, next) => {
  res.render("layout", {
    page_path: "./sales/editsales",
    layout: selected_layout,
    title: "Edit Sales",
  });
});

// Sales Details
route.get(public_routes.sales_salesDetails, (req, res, next) => {
  res.render("layout", {
    page_path: "./sales/salesdetails",
    layout: selected_layout,
    title: "Sales Details",
  });
});

//EditSalesReturns
route.get(public_routes.sales_editSalesReturns, (req, res, next) => {
  res.render("layout", {
    page_path: "./sales/editsalesreturns",
    layout: selected_layout,
    title: "Edit Sales Returns",
  });
});

//------------------------ /SALES ---------------------------- //
//------------------------ PURCHASE ---------------------------- //

//Purchase List
route.get(public_routes.purchase_purchaseList, (req, res, next) => {
  res.render("layout", {
    page_path: "./purchase/purchaselist",
    layout: selected_layout,
    title: "Purchase List",
  });
});

//Add Purchase
route.get(public_routes.purchase_addPurchase, (req, res, next) => {
  res.render("layout", {
    page_path: "./purchase/addpurchase",
    layout: selected_layout,
    title: "Add Purchase",
  });
});

//Import Purchase
route.get(public_routes.purchase_importPurchase, (req, res, next) => {
  res.render("layout", {
    page_path: "./purchase/importpurchase",
    layout: selected_layout,
    title: "Import Purchase",
  });
});

//Edit Purchase
route.get(public_routes.purchase_editPurchase, (req, res, next) => {
  res.render("layout", {
    page_path: "./purchase/editpurchase",
    layout: selected_layout,
    title: "Edit Purchase",
  });
});
//------------------------ /PURCHASE ---------------------------- //
//------------------------ EXPENSES ---------------------------- //

//Expense List
route.get(public_routes.expense_expenseList, (req, res, next) => {
  res.render("layout", {
    page_path: "./expense/expenselist",
    layout: selected_layout,
    title: "Expense List",
  });
});

//Add Expense
route.get(public_routes.expense_addExpense, (req, res, next) => {
  res.render("layout", {
    page_path: "./expense/addexpense",
    layout: selected_layout,
    title: "Add Expense",
  });
});

//Expense Category
route.get(public_routes.expense_expenseCategory, (req, res, next) => {
  res.render("layout", {
    page_path: "./expense/expensecategory",
    layout: selected_layout,
    title: "Expense Category",
  });
});

//Edit Expense
route.get(public_routes.expense_editExpense, (req, res, next) => {
  res.render("layout", {
    page_path: "./expense/editexpense",
    layout: selected_layout,
    title: "Edit Expense",
  });
});

//------------------------ /EXPENSES ---------------------------- //
//------------------------ QUOTATION ---------------------------- //

//Quotation List
route.get(public_routes.quotation_quotationList, (req, res, next) => {
  res.render("layout", {
    page_path: "./quotation/quotationlist",
    layout: selected_layout,
    title: "Quotation List",
  });
});

//Add Quotation
route.get(public_routes.quotation_addQuotation, (req, res, next) => {
  res.render("layout", {
    page_path: "./quotation/addquotation",
    layout: selected_layout,
    title: "Add Quotation",
  });
});

//Edit Quotation
route.get(public_routes.quotation_editQuotation, (req, res, next) => {
  res.render("layout", {
    page_path: "./quotation/editquotation",
    layout: selected_layout,
    title: "Edit Quotation",
  });
});
//------------------------ /QUOTATION ---------------------------- //
//------------------------ TRANSFER---------------------------- //

//Transfer List
route.get(public_routes.transfer_transferList, (req, res, next) => {
  res.render("layout", {
    page_path: "./transfer/transferlist",
    layout: selected_layout,
    title: "Transfer List",
  });
});

//Add Transfer
route.get(public_routes.transfer_addTransfer, (req, res, next) => {
  res.render("layout", {
    page_path: "./transfer/addtransfer",
    layout: selected_layout,
    title: "Add Transfer",
  });
});

//Import Transfer
route.get(public_routes.transfer_importTransfer, (req, res, next) => {
  res.render("layout", {
    page_path: "./transfer/importtransfer",
    layout: selected_layout,
    title: "Import Transfer",
  });
});

//Import Transfer
route.get(public_routes.transfer_editTransfer, (req, res, next) => {
  res.render("layout", {
    page_path: "./transfer/edittransfer",
    layout: selected_layout,
    title: "Edit Transfer",
  });
});

//------------------------ /TRANSFER---------------------------- //
//------------------------ RETURN ---------------------------- //

// Sales Return List
route.get(public_routes.return_salesReturnList, (req, res, next) => {
  res.render("layout", {
    page_path: "./return/salesreturnlist",
    layout: selected_layout,
    title: "Sales Return List",
  });
});

// Add Sales Return
route.get(public_routes.return_addSalesReturn, (req, res, next) => {
  res.render("layout", {
    page_path: "./return/addsalesreturn",
    layout: selected_layout,
    title: "Add Sales Return",
  });
});

// Purchase Return List
route.get(public_routes.return_purchaseReturnList, (req, res, next) => {
  res.render("layout", {
    page_path: "./return/purchasereturnlist",
    layout: selected_layout,
    title: "Purchase Return List",
  });
});

// Add Purchase List
route.get(public_routes.return_addPurchaseReturn, (req, res, next) => {
  res.render("layout", {
    page_path: "./return/addpurchasereturn",
    layout: selected_layout,
    title: "Add Purchase Return",
  });
});

// Edit Sales Return
route.get(public_routes.return_editSalesReturn, (req, res, next) => {
  res.render("layout", {
    page_path: "./return/editsalesreturn",
    layout: selected_layout,
    title: "Edit Sales Return",
  });
});

//Edit Purchase Return
route.get(public_routes.return_editPurchaseReturn, (req, res, next) => {
  res.render("layout", {
    page_path: "./return/editpurchasereturn",
    layout: selected_layout,
    title: "Edit Purchase Return",
  });
});

//------------------------ /RETURN ---------------------------- //
//------------------------ PEOPLE ---------------------------- //

//Customer List
route.get(public_routes.people_customerList, (req, res, next) => {
  res.render("layout", {
    page_path: "./people/customerlist",
    layout: selected_layout,
    title: "Customer List",
  });
});

//Add Customer
route.get(public_routes.people_addCustomer, (req, res, next) => {
  res.render("layout", {
    page_path: "./people/addcustomer",
    layout: selected_layout,
    title: "Add Customer",
  });
});

//Supplier List
route.get(public_routes.people_supplierList, (req, res, next) => {
  res.render("layout", {
    page_path: "./people/supplierlist",
    layout: selected_layout,
    title: "Supper List",
  });
});

//Add Supplier
route.get(public_routes.people_addSupplier, (req, res, next) => {
  res.render("layout", {
    page_path: "./people/addsupplier",
    layout: selected_layout,
    title: "Add Supplier",
  });
});

//User List
route.get(public_routes.people_userList, (req, res, next) => {
  res.render("layout", {
    page_path: "./people/userlist",
    layout: selected_layout,
    title: "User List",
  });
});

//Add User
route.get(public_routes.people_addUser, (req, res, next) => {
  res.render("layout", {
    page_path: "./people/adduser",
    layout: selected_layout,
    title: "Add User",
  });
});

//Store List
route.get(public_routes.people_storeList, (req, res, next) => {
  res.render("layout", {
    page_path: "./people/storelist",
    layout: selected_layout,
    title: "Store List",
  });
});

//Add Store
route.get(public_routes.people_addStore, (req, res, next) => {
  res.render("layout", {
    page_path: "./people/addstore",
    layout: selected_layout,
    title: "Add Store",
  });
});

//Edit Customer
route.get(public_routes.people_editCustomer, (req, res, next) => {
  res.render("layout", {
    page_path: "./people/editcustomer",
    layout: selected_layout,
    title: "Edit Customer",
  });
});

//Edit user
route.get(public_routes.people_editUser, (req, res, next) => {
  res.render("layout", {
    page_path: "./people/edituser",
    layout: selected_layout,
    title: "Edit user",
  });
});

//Edit
route.get(public_routes.people_editList, (req, res, next) => {
  res.render("layout", {
    page_path: "./people/editstore",
    layout: selected_layout,
    title: "Edit List",
  });
});

//Edit Supplier
route.get(public_routes.people_editSupplier, (req, res, next) => {
  res.render("layout", {
    page_path: "./people/editsupplier",
    layout: selected_layout,
    title: "Edit Supplier",
  });
});

//------------------------ /PEOPLE ---------------------------- //
//------------------------ PLACE ---------------------------- //

//New Country
route.get(public_routes.place_newCountry, (req, res, next) => {
  res.render("layout", {
    page_path: "./places/newcountry",
    layout: selected_layout,
    title: "New Country",
  });
});

//Countries List
route.get(public_routes.place_countriesList, (req, res, next) => {
  res.render("layout", {
    page_path: "./places/countrieslist",
    layout: selected_layout,
    title: "Country List",
  });
});

//New State
route.get(public_routes.place_newState, (req, res, next) => {
  res.render("layout", {
    page_path: "./places/newstate",
    layout: selected_layout,
    title: "New State",
  });
});

//State List
route.get(public_routes.place_stateList, (req, res, next) => {
  res.render("layout", {
    page_path: "./places/statelist",
    layout: selected_layout,
    title: "State List",
  });
});

//Edit country
route.get(public_routes.place_editCountry, (req, res, next) => {
  res.render("layout", {
    page_path: "./places/editcountry",
    layout: selected_layout,
    title: "Edit Country",
  });
});

//Edit State
route.get(public_routes.place_editState, (req, res, next) => {
  res.render("layout", {
    page_path: "./places/editstate",
    layout: selected_layout,
    title: "Edit State",
  });
});

//
//------------------------ /PLACE ---------------------------- //
//------------------------ Components ---------------------------- //
route.get(public_routes.components, (req, res, next) => {
  res.render("layout", {
    page_path: "./components/components",
    layout: selected_layout,
    title: "Components",
  });
});
//------------------------ /Components ---------------------------- //
//------------------------ Blank Page ---------------------------- //
route.get(public_routes.blankPage, (req, res, next) => {
  res.render("layout", {
    page_path: "./blankpage/blankpage",
    layout: selected_layout,
    title: "Blank Page",
  });
});
//------------------------ /Blank Page ---------------------------- //
//------------------------ Error Pages ---------------------------- //

// 404 - Error
route.get(public_routes.pageNotFound, (req, res, next) => {
  res.render("index-error", {
    page_path: "./error/error404",
    layout: "index-error",
    title: "404 Error",
  });
});

// 500 - Error
route.get(public_routes.serverError, (req, res, next) => {
  res.render("index-error", {
    page_path: "./error/error500",
    layout: "index-error",
    title: "500 Error",
  });
});
//------------------------ /Error Pages ---------------------------- //
//------------------------ Elements ---------------------------- //

//Sweet Alerts
route.get(public_routes.elements_sweetAlerts, (req, res, next) => {
  res.render("layout", {
    page_path: "./elements/sweetalerts",
    layout: selected_layout,
    title: "Sweet Alerts",
  });
});

//Tooltip
route.get(public_routes.elements_toolTip, (req, res, next) => {
  res.render("layout", {
    page_path: "./elements/tooltip",
    layout: selected_layout,
    title: "Tool Tip",
  });
});

//Popover
route.get(public_routes.elements_popOver, (req, res, next) => {
  res.render("layout", {
    page_path: "./elements/popover",
    layout: selected_layout,
    title: "Popover",
  });
});

//Ribbon
route.get(public_routes.elements_ribbon, (req, res, next) => {
  res.render("layout", {
    page_path: "./elements/ribbon",
    layout: selected_layout,
    title: "Ribbon",
  });
});

//Clipboard
route.get(public_routes.elements_clipboard, (req, res, next) => {
  res.render("layout", {
    page_path: "./elements/clipboard",
    layout: selected_layout,
    title: "Clipboard",
  });
});

//Drag & Drop
route.get(public_routes.elements_dragDrop, (req, res, next) => {
  res.render("layout", {
    page_path: "./elements/drag&drop",
    layout: selected_layout,
    title: "Drag & Drop",
  });
});

//Range Slider
route.get(public_routes.elements_rangeSlider, (req, res, next) => {
  res.render("layout", {
    page_path: "./elements/rangeslider",
    layout: selected_layout,
    title: "Range Slider",
  });
});

//Rating
route.get(public_routes.elements_rating, (req, res, next) => {
  res.render("layout", {
    page_path: "./elements/rating",
    layout: selected_layout,
    title: "Rating",
  });
});

//Toastr
route.get(public_routes.elements_toastr, (req, res, next) => {
  res.render("layout", {
    page_path: "./elements/toastr",
    layout: selected_layout,
    title: "Toastr",
  });
});

//Text Editor
route.get(public_routes.elements_textEditor, (req, res, next) => {
  res.render("layout", {
    page_path: "./elements/texteditor",
    layout: selected_layout,
    title: "Text Editor",
  });
});

//Counter
route.get(public_routes.elements_counter, (req, res, next) => {
  res.render("layout", {
    page_path: "./elements/counter",
    layout: selected_layout,
    title: "Counter",
  });
});

//Scrollbar
route.get(public_routes.elements_scrollBar, (req, res, next) => {
  res.render("layout", {
    page_path: "./elements/scrollbar",
    layout: selected_layout,
    title: "Scrollbar",
  });
});

//Spinner
route.get(public_routes.elements_spinner, (req, res, next) => {
  res.render("layout", {
    page_path: "./elements/spinner",
    layout: selected_layout,
    title: "Spinner",
  });
});

//Notification
route.get(public_routes.elements_notification, (req, res, next) => {
  res.render("layout", {
    page_path: "./elements/notification",
    layout: selected_layout,
    title: "Notifiaction",
  });
});

//Lightbox
route.get(public_routes.elements_lightBox, (req, res, next) => {
  res.render("layout", {
    page_path: "./elements/lightbox",
    layout: selected_layout,
    title: "Light Box",
  });
});

//Sticky Note
route.get(public_routes.elements_stickyNote, (req, res, next) => {
  res.render("layout", {
    page_path: "./elements/stickynote",
    layout: selected_layout,
    title: "Sticky Note",
  });
});

// Timeline
route.get(public_routes.elements_timeLine, (req, res, next) => {
  res.render("layout", {
    page_path: "./elements/timeline",
    layout: selected_layout,
    title: "Timelilne",
  });
});

//Form Wizard
route.get(public_routes.elements_formWizard, (req, res, next) => {
  res.render("layout", {
    page_path: "./elements/formwizard",
    layout: selected_layout,
    title: "Form Wizard",
  });
});

//------------------------ /Elements ---------------------------- //
//------------------------ Charts ---------------------------- //

//Apex Charts
route.get(public_routes.charts_apexCharts, (req, res, next) => {
  res.render("layout", {
    page_path: "./charts/apexcharts",
    layout: selected_layout,
    title: "Apex Charts",
  });
});

//Chart JS
route.get(public_routes.charts_chartsJs, (req, res, next) => {
  res.render("layout", {
    page_path: "./charts/chartjs",
    layout: selected_layout,
    title: "Chart Js",
  });
});

//Morris Charts
route.get(public_routes.charts_morrisCharts, (req, res, next) => {
  res.render("layout", {
    page_path: "./charts/morrischarts",
    layout: selected_layout,
    title: "Morris Charts",
  });
});

//Flot Charts
route.get(public_routes.charts_flotCharts, (req, res, next) => {
  res.render("layout", {
    page_path: "./charts/flotcharts",
    layout: selected_layout,
    title: "Flot Charts",
  });
});

//Peity Charts
route.get(public_routes.charts_peityCharts, (req, res, next) => {
  res.render("layout", {
    page_path: "./charts/peitycharts",
    layout: selected_layout,
    title: "Peity Charts",
  });
});
//------------------------ /Charts ---------------------------- //
//------------------------ Icons ---------------------------- //

//FontAwesome Icons
route.get(public_routes.icons_fontAwesomeIcons, (req, res, next) => {
  res.render("layout", {
    page_path: "./icons/fontawesomeicons",
    layout: selected_layout,
    title: "Font Awesome Icons",
  });
});

//Feather Icons
route.get(public_routes.icons_featherIcons, (req, res, next) => {
  res.render("layout", {
    page_path: "./icons/feathericons",
    layout: selected_layout,
    title: "Feather Icons",
  });
});

//Ionic Icons
route.get(public_routes.icons_ionicIcons, (req, res, next) => {
  res.render("layout", {
    page_path: "./icons/ionicicons",
    layout: selected_layout,
    title: "Ionic Icons",
  });
});

//Material Icons
route.get(public_routes.icons_materialIcons, (req, res, next) => {
  res.render("layout", {
    page_path: "./icons/materialicons",
    layout: selected_layout,
    title: "Material Icons",
  });
});

//Pe7 Icons
route.get(public_routes.icons_pe7Icons, (req, res, next) => {
  res.render("layout", {
    page_path: "./icons/pe7icons",
    layout: selected_layout,
    title: "Pe7 Icons",
  });
});

//SimpleLine Icons
route.get(public_routes.icons_simpleLineIcons, (req, res, next) => {
  res.render("layout", {
    page_path: "./icons/simplelineicons",
    layout: selected_layout,
    title: "Simpleline Icons",
  });
});

//Themify Icons
route.get(public_routes.icons_themifyIcons, (req, res, next) => {
  res.render("layout", {
    page_path: "./icons/themifyicons",
    layout: selected_layout,
    title: "Themify Icons",
  });
});

//Weather Icons
route.get(public_routes.icons_weatherIcons, (req, res, next) => {
  res.render("layout", {
    page_path: "./icons/weathericons",
    layout: selected_layout,
    title: "Weather Icons",
  });
});

//Typicon Icons
route.get(public_routes.icons_typiconIcons, (req, res, next) => {
  res.render("layout", {
    page_path: "./icons/typiconicons",
    layout: selected_layout,
    title: "Typicon Icons",
  });
});

//Flag Icons
route.get(public_routes.icons_flagIcons, (req, res, next) => {
  res.render("layout", {
    page_path: "./icons/flagicons",
    layout: selected_layout,
    title: "Flag Icons",
  });
});
//------------------------ /Icons ---------------------------- //
//------------------------ Forms ---------------------------- //

//Basic Inputs
route.get(public_routes.form_basicInputs, (req, res, next) => {
  res.render("layout", {
    page_path: "./forms/basicinputs",
    layout: selected_layout,
    title: "Basic Inputs",
  });
});

//Input Group
route.get(public_routes.form_inputGroups, (req, res, next) => {
  res.render("layout", {
    page_path: "./forms/inputgroups",
    layout: selected_layout,
    title: "Input Groups",
  });
});

//Horizontal Form
route.get(public_routes.form_horizontalForm, (req, res, next) => {
  res.render("layout", {
    page_path: "./forms/horizontalform",
    layout: selected_layout,
    title: "Horizontal Form",
  });
});

//Vertical Form
route.get(public_routes.form_verticalForm, (req, res, next) => {
  res.render("layout", {
    page_path: "./forms/verticalform",
    layout: selected_layout,
    title: "Vertical Form",
  });
});

//Form Mask
route.get(public_routes.form_formMask, (req, res, next) => {
  res.render("layout", {
    page_path: "./forms/formmask",
    layout: selected_layout,
    title: "Form Mask",
  });
});

//Form Validation
route.get(public_routes.form_formValidation, (req, res, next) => {
  res.render("layout", {
    page_path: "./forms/formvalidation",
    layout: selected_layout,
    title: "Form Validation",
  });
});

//Form Select2
route.get(public_routes.form_formSelected2, (req, res, next) => {
  res.render("layout", {
    page_path: "./forms/formselect2",
    layout: selected_layout,
    title: "Form Select2",
  });
});

//File Upload
route.get(public_routes.form_fileUpload, (req, res, next) => {
  res.render("layout", {
    page_path: "./forms/fileupload",
    layout: selected_layout,
    title: "File Upload",
  });
});
//------------------------ /Forms ---------------------------- //
//------------------------ Table ---------------------------- //

//Basic Tables
route.get(public_routes.table_basicTable, (req, res, next) => {
  res.render("layout", {
    page_path: "./table/basictables",
    layout: selected_layout,
    title: "Basic Tables",
  });
});

//Data Tebles
route.get(public_routes.table_dataTable, (req, res, next) => {
  res.render("layout", {
    page_path: "./table/datatable",
    layout: selected_layout,
    title: "Data Table",
  });
});
//------------------------ /Table ---------------------------- //
//------------------------ Application ---------------------------- //

//Chat
route.get(public_routes.application_chat, (req, res, next) => {
  res.render("layout", {
    page_path: "./application/chat",
    layout: selected_layout,
    title: "Chat",
  });
});

//Calendar
route.get(public_routes.application_calendar, (req, res, next) => {
  res.render("layout", {
    page_path: "./application/calendar",
    layout: selected_layout,
    title: "Calendar",
  });
});

//Email
route.get(public_routes.application_email, (req, res, next) => {
  res.render("layout", {
    page_path: "./application/email",
    layout: selected_layout,
    title: "Email",
  });
});
//------------------------ /Application ---------------------------- //
//------------------------ Report ---------------------------- //

//Purchase Order Report
route.get(public_routes.report_purchaseOrderReport, (req, res, next) => {
  res.render("layout", {
    page_path: "./report/purchaseorderreport",
    layout: selected_layout,
    title: "Purchase Order Report",
  });
});

//Inventory Report
route.get(public_routes.report_inventoryReport, (req, res, next) => {
  res.render("layout", {
    page_path: "./report/inventoryreport",
    layout: selected_layout,
    title: "Inventory Report",
  });
});

//Sales Report
route.get(public_routes.report_salesReport, (req, res, next) => {
  res.render("layout", {
    page_path: "./report/salesreport",
    layout: selected_layout,
    title: "Sales Report",
  });
});

//Invoice Report
route.get(public_routes.report_invoiceReport, (req, res, next) => {
  res.render("layout", {
    page_path: "./report/invoicereport",
    layout: selected_layout,
    title: "Invoice Report",
  });
});

//Purchase Report
route.get(public_routes.report_purchaseReport, (req, res, next) => {
  res.render("layout", {
    page_path: "./report/purchasereport",
    layout: selected_layout,
    title: "Purchase Report",
  });
});

//Supplier Report
route.get(public_routes.report_supplierReport, (req, res, next) => {
  res.render("layout", {
    page_path: "./report/supplierreport",
    layout: selected_layout,
    title: "Suppler Report",
  });
});

//Customer Report
route.get(public_routes.report_customerReport, (req, res, next) => {
  res.render("layout", {
    page_path: "./report/customerreport",
    layout: selected_layout,
    title: "Customer Report",
  });
});
//------------------------ /Report ---------------------------- //
//------------------------ Users ---------------------------- //

//New User
route.get(public_routes.users_newUser, (req, res, next) => {
  res.render("layout", {
    page_path: "./users/newuser",
    layout: selected_layout,
    title: "New User",
  });
});

//Users List
route.get(public_routes.users_usersList, (req, res, next) => {
  res.render("layout", {
    page_path: "./users/userslist",
    layout: selected_layout,
    title: "Users List",
  });
});

//------------------------ /Users ---------------------------- //
//------------------------ Settings ---------------------------- //

//General Setting
route.get(public_routes.setting_generalSetting, (req, res, next) => {
  res.render("layout", {
    page_path: "./settings/general",
    layout: selected_layout,
    title: "General Settings",
  });
});

//Email Setting
route.get(public_routes.setting_emailSetting, (req, res, next) => {
  res.render("layout", {
    page_path: "./settings/emailset",
    layout: selected_layout,
    title: "Email Settings",
  });
});

//Payment Setting
route.get(public_routes.setting_paymentSetting, (req, res, next) => {
  res.render("layout", {
    page_path: "./settings/payment",
    layout: selected_layout,
    title: "Payment Settings",
  });
});

//Currency Setting
route.get(public_routes.setting_currencySetting, (req, res, next) => {
  res.render("layout", {
    page_path: "./settings/currency",
    layout: selected_layout,
    title: "Currency Settings",
  });
});

//Group Permission
route.get(public_routes.setting_groupPermission, (req, res, next) => {
  res.render("layout", {
    page_path: "./settings/grouppermission",
    layout: selected_layout,
    title: "Group Permissions",
  });
});

//Create Permission
route.get(public_routes.setting_createPermission, (req, res, next) => {
  res.render("layout", {
    page_path: "./settings/createpermission",
    layout: selected_layout,
    title: "Create Permission",
  });
});

//Tax Rates
route.get(public_routes.setting_taxRates, (req, res, next) => {
  res.render("layout", {
    page_path: "./settings/taxrates",
    layout: selected_layout,
    title: "Tax Rates",
  });
});

//Edit Permission
route.get(public_routes.setting_editPermission, (req, res, next) => {
  res.render("layout", {
    page_path: "./settings/editpermission",
    layout: selected_layout,
    title: "Edit Permission",
  });
});
//------------------------ /Settings ---------------------------- //
//------------------------  Activities / Profile---------------------------- //

//Activities
route.get(public_routes.activities, (req, res, next) => {
  res.render("layout", {
    page_path: "./activities/activities",
    layout: selected_layout,
    title: "Activies",
  });
});

//Activities
route.get(public_routes.profile, (req, res, next) => {
  res.render("layout", {
    page_path: "./activities/profile",
    layout: selected_layout,
    title: "Profile",
  });
});

//------------------------ /Activities/Profile ---------------------------- //

// main **

// wild card route
route.all("*", function (req, res) {
  res.redirect(public_routes.login);
});
// wild card route **

module.exports = route;
