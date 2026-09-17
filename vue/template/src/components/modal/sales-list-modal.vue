<template>
  <!--add popup -->
  <div class="modal fade" id="add-sales-new">
    <div class="modal-dialog add-centered">
      <div class="modal-content">
        <div class="page-wrapper p-0 m-0">
          <div class="content p-0">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Add Sales</h4>
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
                        <label>Customer Name</label>
                        <div class="row">
                          <div class="col-lg-10 col-sm-10 col-10">
                            <vue-select
                              :options="Choose"
                              id="choosefive"
                              placeholder="Choose"
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
                        <label>Supplier</label>
                        <vue-select
                          :options="Choosename"
                          id="choosename"
                          placeholder="choose"
                        />
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
                          <td></td>
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
                          :options="Completed"
                          id="completed"
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

  <!-- details popup -->
  <div class="modal fade" id="sales-details-new">
    <div class="modal-dialog sales-details-modal">
      <div class="modal-content">
        <div class="page-wrapper details-blk">
          <div class="content p-0">
            <div class="page-header p-4 mb-0">
              <div class="add-item d-flex">
                <div class="page-title modal-datail">
                  <h4>Sales Detail : SL0101</h4>
                </div>
                <div class="page-btn">
                  <a href="javascript:void(0);" class="btn btn-added"
                    ><vue-feather type="plus-circle" class="me-2"></vue-feather> Add New
                    Sales</a
                  >
                </div>
              </div>
              <ul class="table-top-head">
                <li>
                  <a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"
                    ><vue-feather
                      type="edit"
                      class="action-edit sales-action"
                    ></vue-feather
                  ></a>
                </li>
                <li>
                  <a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"
                    ><img src="@/assets/img/icons/pdf.svg" alt="img"
                  /></a>
                </li>
                <li>
                  <a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"
                    ><img src="@/assets/img/icons/excel.svg" alt="img"
                  /></a>
                </li>
                <li>
                  <a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"
                    ><vue-feather type="printer" class="feather-rotate-ccw"></vue-feather
                  ></a>
                </li>
              </ul>
            </div>

            <div class="card">
              <div class="card-body">
                <form @submit.prevent="submitForm">
                  <div
                    class="invoice-box table-height"
                    style="
                      max-width: 1600px;
                      width: 100%;
                      overflow: auto;
                      padding: 0;
                      font-size: 14px;
                      line-height: 24px;
                      color: #555;
                    "
                  >
                    <div class="sales-details-items d-flex">
                      <div class="details-item">
                        <h6>Customer Info</h6>
                        <p>
                          walk-in-customer<br />
                          walk-in-customer@example.com<br />
                          123456780<br />
                          N45 , Dhaka
                        </p>
                      </div>
                      <div class="details-item">
                        <h6>Company Info</h6>
                        <p>
                          DGT<br />
                          admin@example.com<br />
                          6315996770<br />
                          3618 Abia Martin Drive
                        </p>
                      </div>
                      <div class="details-item">
                        <h6>Invoice Info</h6>
                        <p>
                          Reference<br />
                          Payment Status<br />
                          Status
                        </p>
                      </div>
                      <div class="details-item">
                        <h5>
                          <span>SL0101</span>Paid<br />
                          Completed
                        </h5>
                      </div>
                    </div>
                    <h5 class="order-text">Order Summary</h5>
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
                                  >+<vue-feather
                                    type="plus-circle"
                                    class="plus-circle"
                                  ></vue-feather
                                ></span>
                                <input type="text" class="quntity-input" value="2" />
                                <span class="quantity-btn"
                                  ><vue-feather
                                    type="minus-circle"
                                    class="search"
                                  ></vue-feather
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
                                <a
                                  href="javascript:void(0);"
                                  class="product-img stock-img"
                                >
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
                                  ><vue-feather
                                    type="minus-circle"
                                    class="search"
                                  ></vue-feather
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
                                <a
                                  href="javascript:void(0);"
                                  class="product-img stock-img"
                                >
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
                                  ><vue-feather
                                    type="minus-circle"
                                    class="search"
                                  ></vue-feather
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
                  </div>

                  <div class="row">
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
                              <h4>Grand Total</h4>
                              <h5>$ 5200.00</h5>
                            </li>
                            <li>
                              <h4>Paid</h4>
                              <h5>$ 5200.00</h5>
                            </li>
                            <li>
                              <h4>Due</h4>
                              <h5>$ 0.00</h5>
                            </li>
                          </ul>
                        </div>
                      </div>
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
  <!-- /details popup -->

  <!-- edit popup -->
  <div class="modal fade" id="edit-sales-new">
    <div class="modal-dialog edit-sales-modal">
      <div class="modal-content">
        <div class="page-wrapper p-0 m-0">
          <div class="content p-0">
            <div class="page-header p-4 mb-0">
              <div class="add-item new-sale-items d-flex">
                <div class="page-title">
                  <h4>Edit Sales</h4>
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
                        <label>Customer</label>
                        <div class="row">
                          <div class="col-lg-10 col-sm-10 col-10">
                            <vue-select
                              :options="Thomas"
                              id="thomas"
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
                        <label>Purchase Date</label>
                        <div class="input-groupicon calender-input">
                          <vue-feather type="calendar" class="info-img"></vue-feather>
                          <input
                            type="text"
                            class="datetimepicker"
                            placeholder="19 jan 2023"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Supplier</label>
                        <vue-select
                          :options="Shoes"
                          id="shoes"
                          placeholder="Dazzle Shoes"
                        />
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
                                ><vue-feather
                                  type="minus-circle"
                                  class="search"
                                ></vue-feather
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
                                ><vue-feather
                                  type="minus-circle"
                                  class="search"
                                ></vue-feather
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
                                ><vue-feather
                                  type="minus-circle"
                                  class="search"
                                ></vue-feather
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
                      <div class="input-blocks">
                        <label>Order Tax</label>
                        <div class="input-groupicon select-code">
                          <input type="text" placeholder="0" />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Discount</label>
                        <div class="input-groupicon select-code">
                          <input type="text" placeholder="0" />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks">
                        <label>Shipping</label>
                        <div class="input-groupicon select-code">
                          <input type="text" placeholder="0" />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12">
                      <div class="input-blocks mb-5">
                        <label>Status</label>
                        <vue-select
                          :options="Completed"
                          id="progress"
                          placeholder="Choose"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="input-blocks">
                        <label>Notes</label>
                        <textarea class="form-control"></textarea>
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

  <!-- show payment Modal -->
  <div
    class="modal fade"
    id="showpayment"
    tabindex="-1"
    aria-labelledby="showpayment"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-dialog-centered stock-adjust-modal">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Show Payments</h4>
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
                  <div class="modal-body-table total-orders">
                    <div class="table-responsive">
                      <table class="table datanew">
                        <thead>
                          <tr>
                            <th>Date</th>
                            <th>Reference</th>
                            <th>Amount</th>
                            <th>Paid By</th>
                            <th class="no-sort">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>19 Jan 2023</td>
                            <td>INV/SL0101</td>
                            <td>$1500</td>
                            <td>Cash</td>
                            <td class="action-table-data">
                              <div class="edit-delete-action">
                                <a class="me-3 p-2" href="javascript:void(0);">
                                  <vue-feather
                                    type="printer"
                                    class="printer"
                                  ></vue-feather>
                                </a>
                                <a
                                  class="me-3 p-2"
                                  href="javascript:void(0);"
                                  data-bs-toggle="modal"
                                  data-bs-target="#editpayment"
                                >
                                  <vue-feather
                                    type="edit"
                                    class="feather-edit"
                                  ></vue-feather>
                                </a>
                                <a
                                  class="confirm-text p-2"
                                  href="javascript:void(0);"
                                  @click="showConfirmation"
                                >
                                  <vue-feather
                                    type="trash-2"
                                    class="feather-trash-2"
                                  ></vue-feather>
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
    </div>
  </div>
  <!-- show payment Modal -->

  <!-- Create payment Modal -->
  <div
    class="modal fade"
    id="createpayment"
    tabindex="-1"
    aria-labelledby="createpayment"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0 custom-modal-header">
          <div class="page-title">
            <h4>Create Payments</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body custom-modal-body">
          <form @submit.prevent="submitForm">
            <div class="row">
              <div class="col-lg-6">
                <div class="input-blocks">
                  <label> Date</label>
                  <div class="input-groupicon calender-input">
                    <vue-feather type="calendar" class="info-img"></vue-feather>
                    <input type="text" class="datetimepicker" placeholder="Choose Date" />
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-sm-12 col-12">
                <div class="input-blocks">
                  <label>Reference</label>
                  <input type="text" class="form-control" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-sm-12 col-12">
                <div class="input-blocks">
                  <label>Received Amount</label>
                  <div class="input-groupicon calender-input">
                    <vue-feather type="dollar-sign" class="info-img"></vue-feather>
                    <input type="text" />
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12 col-12">
                <div class="input-blocks">
                  <label>Paying Amount</label>
                  <div class="input-groupicon calender-input">
                    <vue-feather type="dollar-sign" class="info-img"></vue-feather>
                    <input type="text" />
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12 col-12">
                <div class="input-blocks">
                  <label>Payment type</label>
                  <vue-select :options="OnlineOne" id="online" placeholder="Choose" />
                </div>
              </div>
              <div class="col-lg-12">
                <div class="input-blocks">
                  <label>Description</label>
                  <textarea class="form-control"></textarea>
                  <p>Maximum 60 Characters</p>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="modal-footer-btn">
                <button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">
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
  <!-- Create payment Modal -->

  <!-- edit payment Modal -->
  <div
    class="modal fade"
    id="editpayment"
    tabindex="-1"
    aria-labelledby="editpayment"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0 custom-modal-header">
          <div class="page-title">
            <h4>Edit Payments</h4>
          </div>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body custom-modal-body">
          <form @submit.prevent="submitForm">
            <div class="row">
              <div class="col-lg-6">
                <div class="input-blocks">
                  <label>19 Jan 2023</label>
                  <div class="input-groupicon calender-input">
                    <vue-feather type="calendar" class="info-img"></vue-feather>
                    <input
                      type="text"
                      class="datetimepicker form-control"
                      placeholder="Select Date"
                    />
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-sm-12 col-12">
                <div class="input-blocks">
                  <label>Reference</label>
                  <input type="text" value="INV/SL0101" />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-sm-12 col-12">
                <div class="input-blocks">
                  <label>Received Amount</label>
                  <div class="input-groupicon calender-input">
                    <vue-feather type="dollar-sign" class="info-img"></vue-feather>
                    <input type="text" value="1500" />
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12 col-12">
                <div class="input-blocks">
                  <label>Paying Amount</label>
                  <div class="input-groupicon calender-input">
                    <vue-feather type="dollar-sign" class="info-img"></vue-feather>
                    <input type="text" value="1500" />
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12 col-12">
                <div class="input-blocks">
                  <label>Payment type</label>
                  <vue-select :options="Online" id="cash" placeholder="Cash" />
                </div>
              </div>
              <div class="col-lg-12">
                <div class="input-blocks summer-description-box transfer">
                  <label>Description</label>
                  <textarea class="form-control"></textarea>
                </div>
                <p>Maximum 60 Characters</p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="modal-footer-btn mb-3 me-3">
                <button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">
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
  <!-- edit payment Modal -->
</template>

<script>
import Swal from "sweetalert2";

export default {
  data() {
    return {
      Choose: ["Choose", "Customer Name"],
      Choosename: ["Choose", "Supplier Name"],
      Completed: ["Choose", "Completed", "Inprogress"],
      Thomas: ["Thomas", "Name"],
      Shoes: ["Dazzle Shoes", "Supplier Name"],
      Online: ["Choose", "Online", "Cash"],
      OnlineOne: ["Choose", "Online", "Cash"],
    };
  },
  methods: {
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
      this.$router.push("/sales/sales-list");
    },
  },
};
</script>
