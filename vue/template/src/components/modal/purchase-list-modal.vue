<template>
  <!-- Add Purchase -->
  <div class="modal fade" id="add-units">
    <div class="modal-dialog purchase modal-dialog-centered stock-adjust-modal">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Add Purchase</h4>
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
              <form   @submit.prevent="submitForm">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="input-blocks add-product">
                      <label>Supplier Name</label>
                      <div class="row">
                        <div class="col-lg-10 col-sm-10 col-10">
                          <vue-select
                            :options="Customer"
                            id="customer"
                            placeholder="Select Customer"
                          />
                        </div>
                        <div class="col-lg-2 col-sm-2 col-2 ps-0">
                          <div class="add-icon tab">
                            <a href="javascript:void(0);"
                              ><vue-feather
                                type="plus-circle"
                                class="feather-plus-circles"
                              ></vue-feather
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="input-blocks">
                      <label>Purchase Date</label>

                      <div class="input-groupicon calender-input">
                        <i data-feather="calendar" class="info-img"></i>
                        <input type="text" class="datetimepicker" placeholder="Choose" />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="input-blocks">
                      <label>Product Name</label>
                      <vue-select :options="Mobile" id="mobile" placeholder="Choose" />
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="input-blocks">
                      <label>Reference No</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="input-blocks">
                      <label>Product Name</label>
                      <input
                        type="text"
                        placeholder="Please type product code and select"
                      />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="modal-body-table">
                      <div class="table-responsive">
                        <table class="table datanew">
                          <thead>
                            <tr>
                              <th>Product</th>
                              <th>Qty</th>
                              <th>Purchase Price($)</th>
                              <th>Discount($)</th>
                              <th>Tax(%)</th>
                              <th>Tax Amount($)</th>
                              <th>Unit Cost($)</th>
                              <th>Total Cost(%)</th>
                            </tr>
                          </thead>

                          <tbody>
                            <tr>
                              <td class="p-5"></td>
                              <td class="p-5"></td>
                              <td class="p-5"></td>
                              <td class="p-5"></td>
                              <td class="p-5"></td>
                              <td class="p-5"></td>
                              <td class="p-5"></td>
                              <td class="p-5"></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                      <div class="input-blocks">
                        <label>Order Tax</label>
                        <input type="text" value="0" />
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                      <div class="input-blocks">
                        <label>Discount</label>
                        <input type="text" value="0" />
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                      <div class="input-blocks">
                        <label>Shipping</label>
                        <input type="text" value="0" />
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                      <div class="input-blocks">
                        <label>Status</label>
                        <vue-select
                          :options="Received"
                          id="received"
                          placeholder="Choose"
                        />
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="input-blocks summer-description-box">
                    <label>Notes</label>
                    <editor v-model="contentOne" />
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
  <!-- /Add Purchase -->

  <!-- Edit Purchase -->
  <div class="modal fade" id="edit-units">
    <div class="modal-dialog purchase modal-dialog-centered stock-adjust-modal">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Edit Purchase</h4>
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
              <form  @submit.prevent="submitForm">
                <div>
                  <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Supplier Name</label>
                        <div class="row">
                          <div class="col-lg-10 col-sm-10 col-10">
                            <vue-select
                              :options="Dazzle"
                              id="dazzle"
                              placeholder="Dazzle shoes"
                            />
                          </div>
                          <div class="col-lg-2 col-sm-2 col-2 ps-0">
                            <div class="add-icon tab">
                              <a href="javascript:void(0);"
                                ><vue-feather
                                  type="plus-circle"
                                  class="feather-plus-circles"
                                ></vue-feather
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Purchase Date </label>
                        <div class="input-groupicon">
                          <input
                            type="text"
                            placeholder="19 Jan 2023"
                            class="datetimepicker"
                          />
                          <div class="addonset">
                            <img src="@/assets/img/icons/calendars.svg" alt="img" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Product Name</label>
                        <vue-select
                          :options="Jordan"
                          id="jordan"
                          placeholder="Nike Jordan"
                        />
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Reference No.</label>
                        <input type="text" value="010203" />
                      </div>
                    </div>
                    <div class="col-lg-12 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Product</label>
                        <div class="input-groupicon">
                          <input
                            type="text"
                            placeholder="Scan/Search Product by code and select"
                          />
                          <div class="addonset">
                            <img src="@/assets/img/icons/scanners.svg" alt="img" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="modal-body-table">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Product Name</th>
                                <th>QTY</th>
                                <th>Purchase Price($)</th>
                                <th>Discount($)</th>
                                <th>Tax %</th>
                                <th>Tax Amount($)</th>
                                <th class="text-end">Unit Cost($)</th>
                                <th class="text-end">Total Cost ($)</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <div class="productimgname">
                                    <a
                                      href="javascript:void(0);"
                                      class="product-img stock-img"
                                    >
                                      <img
                                        src="@/assets/img/products/stock-img-02.png"
                                        alt="product"
                                      />
                                    </a>
                                    <a href="javascript:void(0);">Nike Jordan</a>
                                  </div>
                                </td>
                                <td>
                                  <div class="product-quantity">
                                    <span class="quantity-btn"
                                      >+<i
                                        data-feather="plus-circle"
                                        class="plus-circle"
                                      ></i
                                    ></span>
                                    <input type="text" class="quntity-input" value="10" />
                                    <span class="quantity-btn"
                                      ><i
                                        data-feather="minus-circle"
                                        class="feather-search"
                                      ></i
                                    ></span>
                                  </div>
                                </td>
                                <td>2000</td>
                                <td>500.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>0.00</td>
                                <td>1500</td>
                                <td>
                                  <a class="delete-set"
                                    ><img src="@/assets/img/icons/delete.svg" alt="svg"
                                  /></a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 float-md-right">
                      <div class="total-order">
                        <ul>
                          <li>
                            <h4>Order Tax</h4>
                            <h5>$ 0.00</h5>
                          </li>
                          <li>
                            <h4>Discount</h4>
                            <h5>$ 0.00</h5>
                          </li>
                          <li>
                            <h4>Shipping</h4>
                            <h5>$ 0.00</h5>
                          </li>
                          <li class="total">
                            <h4>Grand Total</h4>
                            <h5>$1500.00</h5>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Order Tax</label>
                        <input type="text" value="0" />
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Discount</label>
                        <input type="text" value="0" />
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Shipping</label>
                        <input type="text" value="0" />
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Status</label>
                        <vue-select :options="Ordered" id="ordered" placeholder="Sent" />
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="input-blocks summer-description-box">
                    <label>Description</label>
                    <editor v-model="contentOne" />
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
                    <button type="submit" class="btn btn-submit">Save Changes</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Edit Purchase -->

  <!-- Import Purchase -->
  <div class="modal fade" id="view-notes">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Import Purchase</h4>
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
              <form   @submit.prevent="submitForm">
                <div class="row">
                  <div class="col-lg-6 col-sm-6 col-12">
                    <div class="input-blocks">
                      <label>Supplier Name</label>
                      <div class="row">
                        <div class="col-lg-10 col-sm-10 col-10">
                          <vue-select :options="Apex" id="apex" placeholder="Choose" />
                        </div>
                        <div class="col-lg-2 col-sm-2 col-2 ps-0">
                          <div class="add-icon tab">
                            <a href="javascript:void(0);"
                              ><vue-feather
                                type="plus-circle"
                                class="feather-plus-circles"
                              ></vue-feather
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-6 col-12">
                    <div class="input-blocks">
                      <label>Purchase Status </label>
                      <vue-select :options="Pending" id="rending" placeholder="Choose" />
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
                  <div class="col-lg-4 col-sm-6 col-12">
                    <div class="input-blocks">
                      <label>Order Tax</label>
                      <input type="text" value="0" />
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 col-12">
                    <div class="input-blocks">
                      <label>Discount</label>
                      <input type="text" value="0" />
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 col-12">
                    <div class="input-blocks">
                      <label>Shipping</label>
                      <input type="text" value="0" />
                    </div>
                  </div>
                </div>
                <div class="input-blocks summer-description-box transfer">
                  <label>Description</label>
                  <editor v-model="contentTwo" />
                  <p>Maximum 60 Characters</p>
                </div>
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
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Import Purchase -->
</template>

<script>
import Editor from "@tinymce/tinymce-vue";
export default {
  components: {
    editor: Editor,
  },
  data() {
    return {
      content: "Type your message",
      contentOne: "These shoes are made with the highest quality materials.",
      contentTwo: "Type your message",
      Customer: ["Select Customer", "Apex Computers", "Dazzle Shoes", "Best Accessories"],
      Mobile: ["Choose", "Shoe", "Mobile"],
      Received: ["Choose", "Received", "Pending"],
      Dazzle: ["Dazzle Shoes", "Apex Computers", "Beats Headphones"],
      Jordan: ["Nike Jordan"],
      Ordered: ["Sent", "Ordered"],
      Apex: ["Choose", "Apex Computers", "Apex Computers"],
      Pending: ["Choose", "Received", "Ordered", "Pending"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/purchases/purchase-list");
    },
  },
};
</script>
