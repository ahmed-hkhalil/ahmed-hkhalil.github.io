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
                            <input type="text" placeholder="Search" 
class="dark-input" />
                            <i data-feather="search" class="feather-16 icon"></i>
                            <div class="search-addon d-none">
                              <span
                                ><i data-feather="x-circle" class="feather-14"></i
                              ></span>
                            </div>
                          </div>
                          <div
                            class="dropdown-menu search-dropdown idea"
                            aria-labelledby="dropdownMenuClickable"
                          >
                            <div class="search-info">
                              <p>Black</p>
                              <p>Red</p>
                              <p>Green</p>
                              <p>S</p>
                              <p>M</p>
                            </div>
                          </div>
                          <!-- <a class="btn"  id="searchdiv"><img src="@/assets/img/icons/search.svg" alt="img"></a> -->
                        </form>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <div class="modal-footer-btn popup">
                    <a href="javascript:void(0);" class="btn btn-cancel me-2">Cancel</a>
                    <a href="javascript:void(0);" class="btn btn-submit"
                      >Create Adjustment</a
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
                <router-link to="/inventory/units" class="btn btn-submit">Submit</router-link>
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
                <router-link to="/inventory/units" class="btn btn-submit">Submit</router-link>
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
                <router-link to="/inventory/units" class="btn btn-submit">Submit</router-link>
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
                      ><i data-feather="plus-circle" class="plus-down-add"></i> Add
                      Image</span
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
                    <vue-select :options="Barcode" id="barcode" placeholder="Choose" />
                  </div>
                </div>
                <div class="col-lg-6 pe-0">
                  <div class="mb-3">
                    <div class="form-group add-product list">
                      <label>Item Code</label>
                      <input type="text" class="form-control list" value="455454478844" />
                      <button type="submit" class="btn btn-primaryadd">
                        Generate Code
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group image-upload-down">
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
                              ><i data-feather="x" class="x-square-add remove-product"></i
                            ></a>
                          </div>

                          <div class="phone-img">
                            <img
                              src="@/assets/img/products/phone-add-1.png"
                              alt="image"
                            />
                            <a href="javascript:void(0);"
                              ><i data-feather="x" class="x-square-add remove-product"></i
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
                    <vue-select :options="Taxtype" id="taxtype" placeholder="Choose" />
                  </div>
                </div>
                <div class="col-lg-6 pe-0">
                  <div class="mb-3">
                    <label class="form-label">Tax </label>
                    <vue-select :options="Tax" id="tax" placeholder="Choose" />
                  </div>
                </div>
                <div class="col-lg-12 pe-0">
                  <div class="mb-3">
                    <label class="form-label">Discount Type </label>
                    <vue-select :options="Discount" id="discount" placeholder="Choose" />
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
                <router-link to="/people/warehouse" class="btn btn-submit">Submit</router-link>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Variatent -->

  <!-- Import Product -->
  <div class="modal fade" id="view-notes">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Import Product</h4>
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
              <form @submit.prevent="submitForm">
                <div class="row">
                  <div class="col-lg-4 col-sm-6 col-12">
                    <div class="input-blocks">
                      <label>Product</label>
                      <vue-select
                        :options="ProductChoose"
                        id="productchoose"
                        placeholder="Choose"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 col-12">
                    <div class="input-blocks">
                      <label>Category</label>
                      <vue-select
                        :options="CategoryChoose"
                        id="categorychoose"
                        placeholder="Choose"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 col-12">
                    <div class="input-blocks">
                      <label>Satus</label>
                      <vue-select
                        :options="SatusChoose"
                        id="satuschoose"
                        placeholder="Choose"
                      />
                    </div>
                  </div>
                  <div class="col-lg-12 col-sm-6 col-12">
                    <div class="row">
                      <div>
                        <div class="modal-footer-btn download-file">
                          <a href="javascript:void(0)" class="btn btn-submit"
                            >Download Sample File</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-blocks image-upload-down">
                      <label> Upload CSV File</label>
                      <div class="image-upload download">
                        <input type="file" />
                        <div class="image-uploads">
                          <img src="@/assets/img/download-img.png" alt="img" />
                          <h4>Drag and drop a <span>file to upload</span></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">Created by</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="mb-3 input-blocks">
                    <label class="form-label">Description</label>
                    <textarea class="form-control"></textarea>
                    <p class="mt-1">Maximum 60 Characters</p>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="modal-footer-btn">
                    <button
                      type="button"
                      class="btn btn-cancel me-2"
                      data-bs-dismiss="modal"
                    >
                      Cancel
                    </button>
                    <button type="submit" class="btn btn-submit">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Import Product -->
</template>
<script>
export default {
  data() {
    return {
      StoreProduct: ["Choose", "Computers"],
      StoreWarehouse: ["Choose", "Computers"],
      StoreNew: ["Choose", "Computers"],
      StoreCategory: ["Choose", "Computers"],
      StoreSubCategory: ["Choose", "Computers"],
      StoreSelling: ["Choose", "Computers"],
      NewProduct: ["Choose", "Nike", "Bolt"],
      NewProductKg: ["Choose", "Kg", "Pc"],
      StoreCode: ["Choose", "Code34"],
      StoreTax: ["Choose", "Type"],
      StoreDiscount: ["Choose", "Type"],
      StoreDiscountType: ["Choose", "Type"],
      StoreVariant: ["Choose", "Color", "Red", "Black"],
      Barcode: ["Choose", "Code34"],
      Taxtype: ["Choose", "Direct", "Indirect"],
      Tax: ["Choose", "Income Tax", "Service Tax"],
      Discount: ["Choose", "Percentage", "Early Payment"],
      ProductChoose: ["Choose", "Bold V3.2", "Nike Jordan", "Iphone 14 Pro"],
      CategoryChoose: ["Choose", "Laptop", "Electronics", "Shoe"],
      SatusChoose: ["Choose", "Bolt", "Nike"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/inventory/product-list");
    },
  },
};
</script>
