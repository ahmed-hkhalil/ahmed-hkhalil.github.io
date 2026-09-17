<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Edit Product</h4>
          </div>
        </div>
        <ul class="table-top-head">
          <li>
            <div class="page-btn">
              <router-link to="/inventory/product-list" class="btn btn-secondary"
                ><vue-feather type="arrow-left" class="me-2"></vue-feather>Back to
                Product</router-link
              >
            </div>
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
      <!-- /add -->
      <form @submit.prevent="submitForm">
        <div class="card">
          <div class="card-body add-product pb-0">
            <div class="accordion-card-one accordion" id="accordionExample">
              <div class="accordion-item">
                <div class="accordion-header" id="headingOne">
                  <div
                    class="accordion-button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-controls="collapseOne"
                  >
                    <div class="addproduct-icon">
                      <h5>
                        <vue-feather type="info" class="add-info"></vue-feather
                        ><span>Product Information</span>
                      </h5>
                      <a href="javascript:void(0);"
                        ><vue-feather
                          type="chevron-down"
                          class="chevron-down-add"
                        ></vue-feather
                      ></a>
                    </div>
                  </div>
                </div>
                <div
                  id="collapseOne"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample"
                >
                  <div class="accordion-body">
                    <div class="row">
                      <div class="col-lg-4 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                          <label class="form-label">Store</label>
                          <vue-select
                            :options="ThomasStore"
                            id="thomasstore"
                            placeholder="Thomas"
                          />
                        </div>
                      </div>
                      <div class="col-lg-4 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                          <label class="form-label">Warehouse</label>
                          <vue-select
                            :options="WarhouseStore"
                            id="warehousestore"
                            placeholder="Legendary"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-4 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                          <label class="form-label">Product Name</label>
                          <input type="text" class="form-control" value="Nike Jordan" />
                        </div>
                      </div>
                      <div class="col-lg-4 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                          <label class="form-label">Slug</label>
                          <input type="text" class="form-control" value="Shoe" />
                        </div>
                      </div>
                      <div class="col-lg-4 col-sm-6 col-12">
                        <div class="input-blocks add-product list">
                          <label>SKU</label>
                          <input
                            type="text"
                            class="form-control list"
                            placeholder="Enter SKU"
                            value="PT003"
                          />
                          <button type="submit" class="btn btn-primaryadd">
                            Generate Code
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="addservice-info">
                      <div class="row">
                        <div class="col-lg-4 col-sm-6 col-12">
                          <div class="mb-3 add-product">
                            <div class="add-newplus">
                              <label class="form-label">Category</label>
                              <a
                                href="javascript:void(0);"
                                data-bs-toggle="modal"
                                data-bs-target="#add-units-category"
                                ><vue-feather
                                  type="plus-circle"
                                  class="plus-down-add"
                                ></vue-feather
                                ><span>Add New</span></a
                              >
                            </div>
                            <vue-select
                              :options="ChooseNew"
                              id="choosenew"
                              placeholder="Lenovo"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                          <div class="mb-3 add-product">
                            <label class="form-label">Sub Category</label>
                            <vue-select
                              :options="SubCategory"
                              id="subcategory"
                              placeholder="Lenovo"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                          <div class="mb-3 add-product">
                            <label class="form-label">Sub Sub Category</label>
                            <vue-select
                              :options="SubSubCategory"
                              id="subsubcategory"
                              placeholder="Fruits"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="add-product-new">
                      <div class="row">
                        <div class="col-lg-4 col-sm-6 col-12">
                          <div class="mb-3 add-product">
                            <div class="add-newplus">
                              <label class="form-label">Brand</label>
                              <a
                                href="javascript:void(0);"
                                data-bs-toggle="modal"
                                data-bs-target="#add-units-brand"
                                ><vue-feather
                                  type="plus-circle"
                                  class="plus-down-add"
                                ></vue-feather
                                ><span>Add New</span></a
                              >
                            </div>
                            <vue-select
                              :options="ChooseAdd"
                              id="chooseadd"
                              placeholder="Nike"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                          <div class="mb-3 add-product">
                            <div class="add-newplus">
                              <label class="form-label">Unit</label>
                              <a
                                href="javascript:void(0);"
                                data-bs-toggle="modal"
                                data-bs-target="#add-unit"
                                ><vue-feather
                                  type="plus-circle"
                                  class="plus-down-add"
                                ></vue-feather
                                ><span>Add New</span></a
                              >
                            </div>
                            <vue-select
                              :options="ChooseAddNew"
                              id="chooseaddnew"
                              placeholder="Kg"
                            />
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                          <div class="mb-3 add-product">
                            <label class="form-label">Selling Type</label>
                            <vue-select
                              :options="SellingType"
                              id="sellingtype"
                              placeholder="Transactional selling"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-6 col-sm-6 col-12">
                        <div class="mb-3 add-product">
                          <label class="form-label">Barcode Symbology</label>
                          <vue-select
                            :options="ChooseCode"
                            id="choosecode"
                            placeholder="Code34"
                          />
                        </div>
                      </div>
                      <div class="col-lg-6 col-sm-6 col-12">
                        <div class="input-blocks add-product list">
                          <label>Item Code</label>
                          <input
                            type="text"
                            class="form-control list"
                            placeholder="Please Enter Item Code"
                          />
                          <button type="submit" class="btn btn-primaryadd">
                            Generate Code
                          </button>
                        </div>
                      </div>
                    </div>
                    <!-- Editor -->
                    <div class="col-lg-12">
                      <div class="input-blocks summer-description-box transfer mb-3">
                        <label>Description</label>
                        <textarea class="form-control h-100" rows="5"></textarea>
                        <p class="mt-1">Maximum 60 Characters</p>
                      </div>
                    </div>
                    <!-- /Editor -->
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-card-one accordion" id="accordionExample2">
              <div class="accordion-item">
                <div class="accordion-header" id="headingTwo">
                  <div
                    class="accordion-button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo"
                    aria-controls="collapseTwo"
                  >
                    <div class="text-editor add-list">
                      <div class="addproduct-icon list icon">
                        <h5>
                          <vue-feather type="life-buoy" class="add-info"></vue-feather
                          ><span>Pricing & Stocks</span>
                        </h5>
                        <a href="javascript:void(0);"
                          ><vue-feather
                            type="chevron-down"
                            class="chevron-down-add"
                          ></vue-feather
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  id="collapseTwo"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample2"
                >
                  <div class="accordion-body">
                    <div class="input-blocks add-products">
                      <label class="d-block">Product Type</label>
                      <div class="single-pill-product">
                        <ul class="nav nav-pills" id="pills-tab1" role="tablist">
                          <li class="nav-item" role="presentation">
                            <span
                              class="custom_radio me-4 mb-0 active"
                              id="pills-home-tab"
                              data-bs-toggle="pill"
                              data-bs-target="#pills-home"
                              role="tab"
                              aria-controls="pills-home"
                              aria-selected="true"
                            >
                              <input type="radio" class="form-control" name="payment" />
                              <span class="checkmark"></span> Single Product</span
                            >
                          </li>
                          <li class="nav-item" role="presentation">
                            <span
                              class="custom_radio me-2 mb-0"
                              id="pills-profile-tab"
                              data-bs-toggle="pill"
                              data-bs-target="#pills-profile"
                              role="tab"
                              aria-controls="pills-profile"
                              aria-selected="false"
                            >
                              <input type="radio" class="form-control" name="sign" />
                              <span class="checkmark"></span> Variable Product</span
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                      <div
                        class="tab-pane fade show active"
                        id="pills-home"
                        role="tabpanel"
                        aria-labelledby="pills-home-tab"
                      >
                        <div class="row">
                          <div class="col-lg-4 col-sm-6 col-12">
                            <div class="input-blocks add-product">
                              <label>Quantity</label>
                              <input type="text" class="form-control" value="5" />
                            </div>
                          </div>
                          <div class="col-lg-4 col-sm-6 col-12">
                            <div class="input-blocks add-product">
                              <label>Price</label>
                              <input type="text" class="form-control" value="300" />
                            </div>
                          </div>
                          <div class="col-lg-4 col-sm-6 col-12">
                            <div class="input-blocks add-product">
                              <label>Tax Type</label>
                              <vue-select
                                :options="ExclusiveType"
                                id="exclusivetype"
                                placeholder="Exclusive"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4 col-sm-6 col-12">
                            <div class="input-blocks add-product">
                              <label>Discount Type</label>
                              <vue-select
                                :options="ChooseTypeDis"
                                id="choosetypedis"
                                placeholder="Percentage"
                              />
                            </div>
                          </div>
                          <div class="col-lg-4 col-sm-6 col-12">
                            <div class="input-blocks add-product">
                              <label>Discount Value</label>
                              <input type="text" placeholder="10%" />
                            </div>
                          </div>
                          <div class="col-lg-4 col-sm-6 col-12">
                            <div class="input-blocks add-product">
                              <label>Quantity Alert</label>
                              <input type="text" class="form-control" value="100" />
                            </div>
                          </div>
                        </div>
                        <div class="accordion-card-one accordion" id="accordionExample3">
                          <div class="accordion-item">
                            <div class="accordion-header" id="headingThree">
                              <div
                                class="accordion-button"
                                data-bs-toggle="collapse"
                                data-bs-target="#collapseThree"
                                aria-controls="collapseThree"
                              >
                                <div class="addproduct-icon list">
                                  <h5>
                                    <vue-feather
                                      type="image"
                                      class="add-info"
                                    ></vue-feather
                                    ><span>Images</span>
                                  </h5>
                                  <a href="javascript:void(0);"
                                    ><vue-feather
                                      type="chevron-down"
                                      class="chevron-down-add"
                                    ></vue-feather
                                  ></a>
                                </div>
                              </div>
                            </div>
                            <div
                              id="collapseThree"
                              class="accordion-collapse collapse show"
                              aria-labelledby="headingThree"
                              data-bs-parent="#accordionExample3"
                            >
                              <div class="accordion-body">
                                <div class="text-editor add-list add">
                                  <div class="col-lg-12">
                                    <div class="add-choosen">
                                      <div class="input-blocks">
                                        <div class="image-upload">
                                          <input type="file" />
                                          <div class="image-uploads">
                                            <i
                                              data-feather="plus-circle"
                                              class="plus-down-add me-0"
                                            ></i>
                                            <h4>Add Images</h4>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="phone-img" v-if="isVisible">
                                        <img
                                          src="@/assets/img/products/phone-add-2.png"
                                          alt="image"
                                        />
                                        <a href="javascript:void(0);" @click="hideProduct"
                                          ><vue-feather
                                            type="x"
                                            class="x-square-add remove-product"
                                          ></vue-feather
                                        ></a>
                                      </div>
                                      <div class="phone-img" v-if="isVisible1">
                                        <img
                                          src="@/assets/img/products/phone-add-1.png"
                                          alt="image"
                                        />
                                        <a
                                          href="javascript:void(0);"
                                          @click="hideProduct1"
                                          ><vue-feather
                                            type="x"
                                            class="x-square-add remove-product"
                                          ></vue-feather
                                        ></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="pills-profile"
                        role="tabpanel"
                        aria-labelledby="pills-profile-tab"
                      >
                        <div class="row select-color-add">
                          <div class="col-lg-6 col-sm-6 col-12">
                            <div class="input-blocks add-product">
                              <label>Variant Attribute</label>
                              <div class="row">
                                <div class="col-lg-10 col-sm-10 col-10">
                                  <vue-select
                                    :options="VariantChoose"
                                    id="varianchoose"
                                    placeholder="Choose"
                                  />
                                </div>
                                <div class="col-lg-2 col-sm-2 col-2 ps-0">
                                  <div class="add-icon tab">
                                    <a
                                      class="btn btn-filter"
                                      data-bs-toggle="modal"
                                      data-bs-target="#add-units"
                                      ><i class="feather feather-plus-circle"></i
                                    ></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="selected-hide-color" id="input-show">
                              <div class="row align-items-center">
                                <div class="col-sm-10">
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
                                <div class="col-lg-2">
                                  <div class="input-blocks">
                                    <a href="javascript:void(0);" class="remove-color"
                                      ><i class="far fa-trash-alt"></i
                                    ></a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="modal-body-table variant-table" id="variant-table">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th>Variantion</th>
                                  <th>Variant Value</th>
                                  <th>SKU</th>
                                  <th>Quantity</th>
                                  <th>Price</th>
                                  <th class="no-sort">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <div class="add-product">
                                      <input
                                        type="text"
                                        class="form-control"
                                        value="color"
                                      />
                                    </div>
                                  </td>
                                  <td>
                                    <div class="add-product">
                                      <input
                                        type="text"
                                        class="form-control"
                                        value="red"
                                      />
                                    </div>
                                  </td>
                                  <td>
                                    <div class="add-product">
                                      <input
                                        type="text"
                                        class="form-control"
                                        value="1234"
                                      />
                                    </div>
                                  </td>
                                  <td>
                                    <div class="product-quantity">
                                      <span class="quantity-btn"
                                        ><i
                                          data-feather="minus-circle"
                                          class="feather-search"
                                        ></i
                                      ></span>
                                      <input
                                        type="text"
                                        class="quntity-input"
                                        value="2"
                                      />
                                      <span class="quantity-btn"
                                        >+<i
                                          data-feather="plus-circle"
                                          class="plus-circle"
                                        ></i
                                      ></span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="add-product">
                                      <input
                                        type="text"
                                        class="form-control"
                                        value="50000"
                                      />
                                    </div>
                                  </td>
                                  <td class="action-table-data">
                                    <div class="edit-delete-action">
                                      <div class="input-block add-lists">
                                        <label class="checkboxs">
                                          <input type="checkbox" checked />
                                          <span class="checkmarks"></span>
                                        </label>
                                      </div>
                                      <a
                                        class="me-2 p-2"
                                        href="javascript:void(0);"
                                        data-bs-toggle="modal"
                                        data-bs-target="#add-variation"
                                      >
                                        <i data-feather="plus" class="feather-edit"></i>
                                      </a>
                                      <a
                                        class="confirm-text p-2"
                                        @click="showConfirmation"
                                        href="javascript:void(0);"
                                      >
                                        <i
                                          data-feather="trash-2"
                                          class="feather-trash-2"
                                        ></i>
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="add-product">
                                      <input
                                        type="text"
                                        class="form-control"
                                        value="color"
                                      />
                                    </div>
                                  </td>
                                  <td>
                                    <div class="add-product">
                                      <input
                                        type="text"
                                        class="form-control"
                                        value="black"
                                      />
                                    </div>
                                  </td>
                                  <td>
                                    <div class="add-product">
                                      <input
                                        type="text"
                                        class="form-control"
                                        value="2345"
                                      />
                                    </div>
                                  </td>
                                  <td>
                                    <div class="product-quantity">
                                      <span class="quantity-btn"
                                        ><i
                                          data-feather="minus-circle"
                                          class="feather-search"
                                        ></i
                                      ></span>
                                      <input
                                        type="text"
                                        class="quntity-input"
                                        value="3"
                                      />
                                      <span class="quantity-btn"
                                        >+<i
                                          data-feather="plus-circle"
                                          class="plus-circle"
                                        ></i
                                      ></span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="add-product">
                                      <input
                                        type="text"
                                        class="form-control"
                                        value="50000"
                                      />
                                    </div>
                                  </td>
                                  <td class="action-table-data">
                                    <div class="edit-delete-action">
                                      <div class="input-block add-lists">
                                        <label class="checkboxs">
                                          <input type="checkbox" checked />
                                          <span class="checkmarks"></span>
                                        </label>
                                      </div>
                                      <a
                                        class="me-2 p-2"
                                        href="javascript:void(0);"
                                        data-bs-toggle="modal"
                                        data-bs-target="#edit-units"
                                      >
                                        <i data-feather="plus" class="feather-edit"></i>
                                      </a>
                                      <a
                                        class="confirm-text p-2"
                                        @click="showConfirmation"
                                        href="javascript:void(0);"
                                      >
                                        <i
                                          data-feather="trash-2"
                                          class="feather-trash-2"
                                        ></i>
                                      </a>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-card-one accordion" id="accordionExample4">
              <div class="accordion-item">
                <div class="accordion-header" id="headingFour">
                  <div
                    class="accordion-button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseFour"
                    aria-controls="collapseFour"
                  >
                    <div class="text-editor add-list">
                      <div class="addproduct-icon list">
                        <h5>
                          <vue-feather type="list" class="add-info"></vue-feather
                          ><span>Custom Fields</span>
                        </h5>
                        <a href="javascript:void(0);"
                          ><vue-feather
                            type="chevron-down"
                            class="chevron-down-add"
                          ></vue-feather
                        ></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  id="collapseFour"
                  class="accordion-collapse collapse show"
                  aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample4"
                >
                  <div class="accordion-body">
                    <div class="text-editor add-list add">
                      <div class="custom-filed">
                        <div class="input-block add-lists">
                          <label class="checkboxs">
                            <input type="checkbox" />
                            <span class="checkmarks"></span>Warranties
                          </label>
                          <label class="checkboxs">
                            <input type="checkbox" />
                            <span class="checkmarks"></span>Manufacturer
                          </label>
                          <label class="checkboxs">
                            <input type="checkbox" />
                            <span class="checkmarks"></span>Expiry
                          </label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4 col-sm-6 col-12">
                          <div class="input-blocks add-product">
                            <label>Discount Type</label>
                            <vue-select
                              :options="Distype"
                              id="distype"
                              placeholder="Percentage"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4 col-sm-6 col-12">
                          <div class="input-blocks add-product">
                            <label>Quantity Alert</label>
                            <input type="text" class="form-control" value="100" />
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                          <div class="input-blocks">
                            <label>Manufactured Date</label>

                            <div class="input-groupicon calender-input">
                              <vue-feather type="calendar" class="info-img"></vue-feather>
                              <date-picker
                                v-model="startdate"
                                placeholder="Choose Date"
                                class="form-control"
                                :editable="true"
                                :clearable="false"
                                :input-format="dateFormat"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                          <div class="input-blocks">
                            <label>Expiry On</label>

                            <div class="input-groupicon calender-input">
                              <vue-feather type="calendar" class="info-img"></vue-feather>
                              <date-picker
                                v-model="startdateOne"
                                placeholder="Choose Date"
                                class="form-control"
                                :editable="true"
                                :clearable="false"
                                :input-format="dateFormat"
                              />
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
        </div>
        <div class="col-lg-12">
          <div class="btn-addproduct mb-4">
            <button type="button" class="btn btn-cancel me-2">Cancel</button>
            <button type="submit" class="btn btn-submit">Save Product</button>
          </div>
        </div>
      </form>
      <!-- /add -->
    </div>
  </div>
  <add-product-modal></add-product-modal>
</template>
<script>
import { ref } from "vue";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
import Vue3TagsInput from "vue3-tags-input";
import Swal from "sweetalert2";
export default {
  components: {
    Vue3TagsInput,
  },
  data() {
    return {
      isVisible: true,
      isVisible1: true,
      Distype: ["Choose", "Percentage", "Cash"],
      VariantChoose: ["Choose", "Color", "Red", "Black"],
      ChooseTypeDis: ["Choose", "Percentage", "Cash"],
      ExclusiveType: ["Exclusive", "Sales Tax"],
      ChooseCode: ["Choose", "Code34", "Code35", "Code36"],
      SellingType: ["Choose", "Transactional selling", "Solution selling"],
      ChooseAddNew: ["Choose", "Kg", "Pc"],
      ChooseAdd: ["Choose", "Nike", "Bolt"],
      SubSubCategory: ["Choose", "Fruits", "Computers", "Shoes"],
      SubCategory: ["Choose", "Lenovo", "Electronics"],
      ChooseNew: ["Choose", "Lenovo", "Electronics"],
      WarhouseStore: ["Choose", "Legendary", "Determined", "Sincere"],
      ThomasStore: ["Choose", "Thomas", "Rasmussen", "Fred john"],
      tags: ["red", "black"],
      startdate: currentDate,
      startdateOne: currentDateOne,
      dateFormat: "dd-MM-yyyy",
    };
  },
  methods: {
    hideProduct() {
      this.isVisible = false;
    },
    hideProduct1() {
      this.isVisible1 = false;
    },
    showConfirmation() {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
        confirmButtonClass: "btn btn-primary",
        cancelButtonClass: "btn btn-danger ml-1",
        buttonsStyling: false,
      }).then((result) => {
        if (result.value) {
          Swal.fire({
            icon: "success",
            title: "Deleted!",
            text: "Your file has been deleted.",
            confirmButtonClass: "btn btn-success",
          });
        }
      });
    },
    submitForm() {
      this.$router.push("/inventory/add-product");
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
