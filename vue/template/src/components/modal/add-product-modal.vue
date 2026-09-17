<template>
  <!-- Add Adjustment -->
  <div class="modal fade" id="add-units">
    <div class="modal-dialog modal-dialog-centered stock-adjust-modal">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Add Variation Attribute</h4>
              </div>
              <button
                type="button"
                class="close"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body custom-modal-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="input-blocks">
                    <label>Attribute Name</label>
                    <input type="text" class="form-control" />
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="input-blocks">
                    <label>Add Value</label>
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <ul class="nav user-menu">
                    <li class="nav-item nav-searchinputs">
                      <div class="top-nav-search">
                        <form action="javascript:void(0);" class="dropdown">
                          <div
                            class="searchinputs list dropdown-toggle"
                            id="dropdownMenuClickable2"
                            data-bs-toggle="dropdown"
                            data-bs-auto-close="false"
                          >
                            <input type="text" placeholder="Search" class="dark-input" />
                            <vue-feather type="search"></vue-feather>
                            <div class="search-addon d-none">
                              <span><vue-feather type="x-circle"></vue-feather></span>
                            </div>
                          </div>
                          <div
                            class="dropdown-menu search-dropdown idea"
                            aria-labelledby="dropdownMenuClickable2"
                          >
                            <div class="search-info">
                              <p>Black</p>
                              <p>Red</p>
                              <p>Green</p>
                              <p>S</p>
                              <p>M</p>
                            </div>
                          </div>
                        </form>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <div class="modal-footer-btn popup">
                    <a
                      href="javascript:void(0);"
                      class="btn btn-cancel me-2"
                      data-bs-dismiss="modal"
                      >Cancel</a
                    >
                    <a
                      href="javascript:void(0);"
                      class="btn btn-submit"
                      data-bs-dismiss="modal"
                      >Create Attribute</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Adjustment -->

  <!-- Add Category -->
  <div class="modal fade" id="add-units-category">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Add New Category</h4>
              </div>
              <button
                type="button"
                class="close"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body custom-modal-body">
              <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" />
              </div>
              <div class="modal-footer-btn">
                <a
                  href="javascript:void(0);"
                  class="btn btn-cancel me-2"
                  data-bs-dismiss="modal"
                  >Cancel</a
                >
                <router-link to="/inventory/add-product" class="btn btn-submit"
                  >Submit</router-link
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Category -->

  <!-- Add Brand -->
  <div class="modal fade" id="add-units-brand">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Add New Brand</h4>
              </div>
              <button
                type="button"
                class="close"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body custom-modal-body">
              <div class="mb-3">
                <label class="form-label">Brand</label>
                <input type="text" class="form-control" />
              </div>
              <div class="modal-footer-btn">
                <a
                  href="javascript:void(0);"
                  class="btn btn-cancel me-2"
                  data-bs-dismiss="modal"
                  >Cancel</a
                >
                <router-link to="/inventory/add-product" class="btn btn-submit"
                  >Submit</router-link
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Brand -->

  <!-- Add Unit -->
  <div class="modal fade" id="add-unit">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Add Unit</h4>
              </div>
              <button
                type="button"
                class="close"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body custom-modal-body">
              <div class="mb-3">
                <label class="form-label">Unit</label>
                <input type="text" class="form-control" />
              </div>
              <div class="modal-footer-btn">
                <a
                  href="javascript:void(0);"
                  class="btn btn-cancel me-2"
                  data-bs-dismiss="modal"
                  >Cancel</a
                >
                <router-link to="/inventory/add-product" class="btn btn-submit"
                  >Submit</router-link
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Unit -->

  <!-- Add Variatent -->
  <div class="modal fade" id="add-variation">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Add Variation</h4>
              </div>
              <button
                type="button"
                class="close"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body custom-modal-body">
              <div class="modal-title-head people-cust-avatar">
                <h6>Variant Thumbnail</h6>
              </div>
              <div class="new-employee-field">
                <div class="profile-pic-upload">
                  <div class="profile-pic">
                    <span
                      ><vue-feather
                        type="plus-circle"
                        class="plus-down-add"
                      ></vue-feather>
                      Add Image</span
                    >
                  </div>
                  <div class="mb-3">
                    <div class="image-upload mb-0">
                      <input type="file" />
                      <div class="image-uploads">
                        <h4>Change Image</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 pe-0">
                  <div class="mb-3">
                    <label class="form-label">Barcode Symbology</label>
                    <vue-select
                      :options="BarCodeSym"
                      id="barcodesym"
                      placeholder="Choose"
                    />
                  </div>
                </div>
                <div class="col-lg-6 pe-0">
                  <div class="mb-3">
                    <div class="input-blocks add-product list">
                      <label>Item Code</label>
                      <input type="text" class="form-control list" value="455454478844" />
                      <button type="submit" class="btn btn-primaryadd">
                        Generate Code
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="input-blocks image-upload-down">
                    <div class="image-upload download">
                      <input type="file" />
                      <div class="image-uploads">
                        <img src="@/assets/img/download-img.png" alt="img" />
                        <h4>Drag and drop a <span>file to upload</span></h4>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-body">
                    <div class="text-editor add-list add">
                      <div class="col-lg-12">
                        <div class="add-choosen mb-3">
                          <div class="phone-img ms-0">
                            <img
                              src="@/assets/img/products/phone-add-2.png"
                              alt="image"
                            />
                            <a href="javascript:void(0);"
                              ><vue-feather
                                type="x"
                                class="x-square-add remove-product"
                              ></vue-feather
                            ></a>
                          </div>

                          <div class="phone-img">
                            <img
                              src="@/assets/img/products/phone-add-1.png"
                              alt="image"
                            />
                            <a href="javascript:void(0);"
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
                <div class="col-lg-6 pe-0">
                  <div class="mb-3">
                    <label class="form-label">Quantity</label>
                    <input type="text" class="form-control" />
                  </div>
                </div>
                <div class="col-lg-6 pe-0">
                  <div class="mb-3">
                    <label class="form-label">Quantity Alert</label>
                    <input type="text" class="form-control" />
                  </div>
                </div>
                <div class="col-lg-6 pe-0">
                  <div class="mb-3">
                    <label class="form-label">Tax Type</label>
                    <vue-select :options="Typetax" id="typeta" placeholder="Choose" />
                  </div>
                </div>
                <div class="col-lg-6 pe-0">
                  <div class="mb-3">
                    <label class="form-label">Tax </label>
                    <vue-select
                      :options="Incometax"
                      id="incometax"
                      placeholder="Choose"
                    />
                  </div>
                </div>
                <div class="col-lg-12 pe-0">
                  <div class="mb-3">
                    <label class="form-label">Discount Type </label>
                    <vue-select
                      :options="TypeDiscount"
                      id="typediscount"
                      placeholder="Choose"
                    />
                  </div>
                </div>
                <div class="col-lg-12 pe-0">
                  <div>
                    <label class="form-label">Discount Value</label>
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>

              <div class="modal-footer-btn">
                <a
                  href="javascript:void(0);"
                  class="btn btn-cancel me-2"
                  data-bs-dismiss="modal"
                  >Cancel</a
                >
                <router-link to="/inventory/add-product" class="btn btn-submit"
                  >Submit</router-link
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Variatent -->
</template>
<script>
export default {
  data() {
    return {
      TypeDiscount: ["Choose", "Percentage", "Early Payment"],
      Incometax: ["Choose", "Income Tax", "Service Tax"],
      Typetax: ["Choose", "Direct", "Indirect"],
      BarCodeSym: ["Choose", "Code34"],
    };
  },
};
</script>
