<template>
  <!-- add popup -->
  <div class="modal fade" id="add-sales-new">
    <div class="modal-dialog add-centered">
      <div class="modal-content">
        <div class="page-wrapper p-0 m-0">
          <div class="content p-0">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Add Sales Return</h4>
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
            <div class="card">
              <div class="card-body">
                <form @submit.prevent="submitForm">
                  <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label class="form-label">Customer Name</label>
                        <div class="row">
                          <div class="col-lg-10 col-sm-10 col-10">
                            <vue-select
                              :options="Bruklin"
                              id="bruklin"
                              placeholder="Choose Customer"
                            />
                          </div>
                          <div class="col-lg-2 col-sm-2 col-2 ps-0">
                            <div class="add-icon">
                              <a href="javascript:void(0);" class="choose-add"
                                ><vue-feather
                                  type="plus-circle"
                                  class="plus"
                                ></vue-feather
                              ></a>
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
                          <input
                            type="text"
                            class="datetimepicker"
                            placeholder="Choose"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label class="form-label">Reference No.</label>
                        <input type="text" class="form-control" />
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
                            <img src="@/assets/img/icons/qrcode-scan.svg" alt="img" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive no-pagination">
                    <table class="table datanew">
                      <thead>
                        <tr>
                          <th>Product Name</th>
                          <th>Net Unit Price($)</th>
                          <th>Stock</th>
                          <th>QTY</th>
                          <th>Discount($)</th>
                          <th>Tax %</th>
                          <th>Subtotal ($)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
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
                            <h5>$ 0.00</h5>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Order Tax</label>
                        <div class="input-groupicon select-code">
                          <input type="text" value="0" class="p-2" />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Discount</label>
                        <div class="input-groupicon select-code">
                          <input type="text" value="0" class="p-2" />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Shipping</label>
                        <div class="input-groupicon select-code">
                          <input type="text" value="0" class="p-2" />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks mb-5">
                        <label>Status</label>
                        <vue-select
                          :options="Received"
                          id="choosesix"
                          placeholder="Choose"
                        />
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
  <!-- /add popup -->

  <!-- Edit popup -->
  <div class="modal fade" id="edit-sales-new">
    <div class="modal-dialog add-centered">
      <div class="modal-content">
        <div class="page-wrapper p-0 m-0">
          <div class="content p-0">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Add Sales Return</h4>
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
            <div class="card">
              <div class="card-body">
                <form @submit.prevent="submitForm">
                  <div class="row">
                    <div class="col-lg-4 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label class="form-label">Customer Name</label>
                        <div class="row">
                          <div class="col-lg-10 col-sm-10 col-10">
                            <vue-select
                              :options="Benjamin"
                              id="benjaminone"
                              placeholder="Thomas"
                            />
                          </div>
                          <div class="col-lg-2 col-sm-2 col-2 ps-0">
                            <div class="add-icon">
                              <a href="javascript:void(0);" class="choose-add"
                                ><vue-feather
                                  type="plus-circle"
                                  class="plus"
                                ></vue-feather
                              ></a>
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
                          <input
                            type="text"
                            class="datetimepicker"
                            placeholder="Choose"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label class="form-label">Reference No.</label>
                        <input type="text" class="form-control" value="555444" />
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
                            <img src="@/assets/img/icons/qrcode-scan.svg" alt="img" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive no-pagination">
                    <table class="table datanew">
                      <thead>
                        <tr>
                          <th>Product Name</th>
                          <th>Net Unit Price($)</th>
                          <th>Stock</th>
                          <th>QTY</th>
                          <th>Discount($)</th>
                          <th>Tax %</th>
                          <th>Subtotal ($)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="productimgname">
                              <a href="javascript:void(0);" class="product-img">
                                <img
                                  src="@/assets/img/products/product6.jpg"
                                  alt="product"
                                />
                              </a>
                              <a href="javascript:void(0);">Apple Earpods</a>
                            </div>
                          </td>
                          <td>300</td>
                          <td>400</td>
                          <td>500</td>
                          <td>100</td>
                          <td>50</td>
                          <td>300</td>
                        </tr>
                        <tr>
                          <td>
                            <div class="productimgname">
                              <a href="javascript:void(0);" class="product-img">
                                <img
                                  src="@/assets/img/products/product7.jpg"
                                  alt="product"
                                />
                              </a>
                              <a href="javascript:void(0);">Apple Earpods</a>
                            </div>
                          </td>
                          <td>150</td>
                          <td>500</td>
                          <td>300</td>
                          <td>100</td>
                          <td>50</td>
                          <td>300</td>
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
                            <h5>$ 0.00</h5>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Order Tax</label>
                        <div class="input-groupicon select-code">
                          <input type="text" value="0" class="p-2" />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Discount</label>
                        <div class="input-groupicon select-code">
                          <input type="text" value="0" class="p-2" />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Shipping</label>
                        <div class="input-groupicon select-code">
                          <input type="text" value="0" class="p-2" />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks mb-5">
                        <label>Status</label>
                        <vue-select
                          :options="Received"
                          id="receivedsixone"
                          placeholder="Choose"
                        />
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
  <!-- /Edit popup -->
</template>

<script>
export default {
  data() {
    return {
      Bruklin: ["Choose Customer", "Thomas", "Benjamin", "Bruklin"],
      Received: ["Choose", "Pending", "Received"],
      Benjamin: ["Thomas", "Benjamin", "Bruklin"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/sales/sales-returns");
    },
  },
};
</script>
