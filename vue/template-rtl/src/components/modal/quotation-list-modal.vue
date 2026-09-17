<template>
  <!--Add Quotation -->
  <div class="modal fade" id="add-units">
    <div class="modal-dialog purchase modal-dialog-centered stock-adjust-modal">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Add Quotation</h4>
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
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="input-blocks add-product">
                      <label>Customer Name</label>
                      <div class="row">
                        <div class="col-lg-10 col-sm-10 col-10">
                          <vue-select
                            :options="QuChoose"
                            id="quchoose"
                            placeholder="Choose"
                          />
                        </div>
                        <div class="col-lg-2 col-sm-2 col-2 p-0">
                          <div class="add-icon tab">
                            <a
                              class="btn btn-filter"
                              data-bs-toggle="modal"
                              data-bs-target="#add-units"
                              ><img src="@/assets/img/icons/plus1.svg" alt="img" />
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="input-blocks">
                      <label>Date</label>

                      <div class="input-groupicon calender-input">
                        <vue-feather type="calendar" class="info-img"></vue-feather>
                        <date-picker
                          v-model="startdate"
                          placeholder="Choose"
                          class="datetimepicker"
                          :editable="true"
                          :clearable="false"
                          :input-format="dateFormat"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="input-blocks">
                      <label>Reference Number</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="input-blocks">
                      <label>Product Name</label>
                      <div class="input-groupicon select-code">
                        <input
                          type="text"
                          placeholder="Please type product code and select"
                        />
                        <div class="addonset">
                          <img src="@/assets/img/icons/qrcode-scan.svg" alt="img" />
                        </div>
                      </div>
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
                            <tr style="background: #ffffff">
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
                      <div class="input-blocks mb-3">
                        <label>Order Tax</label>
                        <input type="text" value="0" />
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                      <div class="input-blocks mb-3">
                        <label>Discount</label>
                        <input type="text" value="0" />
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                      <div class="input-blocks mb-3">
                        <label>Shipping</label>
                        <input type="text" value="0" />
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                      <div class="input-blocks mb-3">
                        <vue-select
                          :options="Qstatus"
                          id="qstatus"
                          placeholder="Choose"
                        />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="input-blocks summer-description-box">
                    <label>Description</label>
                    <editor v-model="content" />
                  </div>
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
  <!-- /Add Quotation -->

  <!-- edit popup -->
  <div class="modal fade" id="edit-units">
    <div class="modal-dialog edit-sales-modal">
      <div class="modal-content">
        <div class="page-wrapper p-0 m-0">
          <div class="content p-0">
            <div class="page-header p-4 mb-0">
              <div class="add-item new-sale-items d-flex">
                <div class="page-title">
                  <h4>Edit Quotation</h4>
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
            </div>
            <div class="card">
              <div class="card-body">
                <form @submit.prevent="submitForm">
                  <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Customer Name</label>
                        <div class="row">
                          <div class="col-lg-10 col-sm-10 col-10">
                            <vue-select
                              :options="ThomSel"
                              id="thomsel"
                              placeholder="Thomas"
                            />
                          </div>
                          <div class="col-lg-2 col-sm-2 col-2 ps-0">
                            <div class="add-icon">
                              <span class="choose-add"
                                ><vue-feather
                                  type="plus-circle"
                                  class="plus"
                                ></vue-feather
                              ></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Date</label>
                        <div class="input-groupicon calender-input">
                          <vue-feather type="calendar" class="info-img"></vue-feather>
                          <date-picker
                            v-model="startdateOne"
                            placeholder="19 jan 2023"
                            class="datetimepicker"
                            :editable="true"
                            :clearable="false"
                            :input-format="dateFormat"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Reference Number</label>
                        <input type="text" placeholder="010203" />
                      </div>
                    </div>
                    <div class="col-lg-12 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Product Name</label>
                        <div class="input-groupicon select-code">
                          <input
                            type="text"
                            placeholder="Please type product code and select"
                          />
                          <div class="addonset">
                            <img src="@/assets/img/icons/scanners.svg" alt="img" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive no-pagination">
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
                          <td>
                            <div class="productimgname">
                              <a href="javascript:void(0);" class="product-img stock-img">
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
                                >+<vue-feather
                                  type="plus-circle"
                                  class="plus-circle"
                                ></vue-feather
                              ></span>
                              <input type="text" class="quntity-input" value="2" />
                              <span class="quantity-btn"
                                ><i data-feather="minus-circle" class="feather-search"></i
                              ></span>
                            </div>
                          </td>
                          <td>2000</td>
                          <td>500</td>
                          <td>0.00</td>
                          <td>0.00</td>
                          <td>0.00</td>
                          <td>1500</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="productimgname">
                              <a href="javascript:void(0);" class="product-img stock-img">
                                <img
                                  src="@/assets/img/products/stock-img-03.png"
                                  alt="product"
                                />
                              </a>
                              <a href="javascript:void(0);">Apple Series 5 Watch</a>
                            </div>
                          </td>
                          <td>
                            <div class="product-quantity">
                              <span class="quantity-btn"
                                >+<vue-feather
                                  type="plus-circle"
                                  class="plus-circle"
                                ></vue-feather
                              ></span>
                              <input type="text" class="quntity-input" value="2" />
                              <span class="quantity-btn"
                                ><i data-feather="minus-circle" class="feather-search"></i
                              ></span>
                            </div>
                          </td>
                          <td>3000</td>
                          <td>400</td>
                          <td>0.00</td>
                          <td>0.00</td>
                          <td>0.00</td>
                          <td>1700</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="productimgname">
                              <a href="javascript:void(0);" class="product-img stock-img">
                                <img
                                  src="@/assets/img/products/stock-img-05.png"
                                  alt="product"
                                />
                              </a>
                              <a href="javascript:void(0);">Lobar Handy</a>
                            </div>
                          </td>
                          <td>
                            <div class="product-quantity">
                              <span class="quantity-btn"
                                >+<vue-feather
                                  type="plus-circle"
                                  class="plus-circle"
                                ></vue-feather
                              ></span>
                              <input type="text" class="quntity-input" value="2" />
                              <span class="quantity-btn"
                                ><i data-feather="minus-circle" class="feather-search"></i
                              ></span>
                            </div>
                          </td>
                          <td>2500</td>
                          <td>500</td>
                          <td>0.00</td>
                          <td>0.00</td>
                          <td>0.00</td>
                          <td>2000</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="row">
                    <div class="col-lg-6 ms-auto">
                      <div class="total-order w-100 max-widthauto m-auto mb-4">
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
                          <li>
                            <h4>Grand Total</h4>
                            <h5>$5200.00</h5>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks mb-3">
                        <label>Order Tax</label>
                        <div class="input-groupicon select-code">
                          <input type="text" placeholder="0" />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks mb-3">
                        <label>Discount</label>
                        <div class="input-groupicon select-code">
                          <input type="text" placeholder="0" />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks mb-3">
                        <label>Shipping</label>
                        <div class="input-groupicon select-code">
                          <input type="text" placeholder="0" />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks mb-3">
                        <label>Status</label>
                        <vue-select
                          :options="SendStatus"
                          id="sendstatus"
                          placeholder="Send"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="input-blocks summer-description-box">
                        <label>Description</label>
                        <editor v-model="contentOne" />
                      </div>
                    </div>
                    <div class="col-lg-12 text-end">
                      <button
                        type="button"
                        class="btn btn-cancel add-cancel me-3"
                        data-bs-dismiss="modal"
                      >
                        Cancel
                      </button>
                      <button type="submit" class="btn btn-submit add-sale">
                        Submit
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /edit popup -->
</template>
<script>
import { ref } from "vue";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
import Editor from "@tinymce/tinymce-vue";
export default {
  components: {
    editor: Editor,
  },
  data() {
    return {
      SendStatus: ["Sent", "Completed", "Inprogress"],
      ThomSel: ["Thomas", "Rose"],
      Qstatus: ["Choose"],
      QuChoose: ["Choose", "Benjamin", "Nydia Fitzgerald"],
      content: "Type your message",
      contentOne: "Type your message",
      startdate: currentDate,
      startdateOne: currentDateOne,
      dateFormat: "dd-MM-yyyy",
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/sales/quotation-list");
    },
  },
};
</script>
