<template>
  <!-- Add Stock -->
  <div class="modal fade" id="add-units">
    <div class="modal-dialog modal-dialog-centered stock-adjust-modal">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Add Transfer</h4>
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
                  <div class="col-lg-6">
                    <div class="input-blocks">
                      <label>Warehouse From</label>
                      <vue-select :options="Lobar" id="lobar" placeholder="Choose" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-blocks">
                      <label>Warehouse To</label>
                      <vue-select :options="Logerro" id="lobar" placeholder="Choose" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-blocks">
                      <label>Responsible Person</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-blocks search-form mb-3">
                      <label>Product</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Select Product"
                      />
                      <i data-feather="search" class="feather-search"></i>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-blocks search-form mb-0">
                      <label>Notes</label>
                      <textarea class="form-control"></textarea>
                    </div>
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
                  <button type="submit" class="btn btn-submit">Create</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Stock -->

  <!-- Edit Stock -->
  <div class="modal fade" id="edit-units">
    <div class="modal-dialog modal-dialog-centered stock-adjust-modal">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Edit Transfer</h4>
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
                <div class="input-blocks search-form">
                  <label>Product</label>
                  <input type="text" class="form-control" value="Nike Jordan" />
                  <i data-feather="search" class="feather-search"></i>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="input-blocks">
                      <label>Warehouse From</label>
                      <vue-select
                        :options="Quaint"
                        id="quaintlobar"
                        placeholder="Lobar Handy"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-blocks">
                      <label>Warehouse To</label>
                      <vue-select
                        :options="Logerro"
                        id="logerrolobar"
                        placeholder="Selosy"
                      />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-blocks">
                      <label>Reference No</label>
                      <input type="text" class="form-control" value="32434545" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-blocks search-form mb-3">
                      <label>Product</label>
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Select Product"
                        value="Nike Jordan"
                      />
                      <i data-feather="search" class="feather-search"></i>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="modal-body-table">
                      <div class="table-responsive">
                        <table class="table datanew">
                          <thead>
                            <tr>
                              <th>Product</th>
                              <th>SKU</th>
                              <th>Category</th>
                              <th>Qty</th>
                              <th class="no-sort">Action</th>
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
                              <td>PT002</td>
                              <td>Nike</td>
                              <td>
                                <div class="product-quantity">
                                  <span class="quantity-btn"
                                    ><i
                                      data-feather="minus-circle"
                                      class="feather-search"
                                    ></i
                                  ></span>
                                  <input type="text" class="quntity-input" value="2" />
                                  <span class="quantity-btn"
                                    >+<i
                                      data-feather="plus-circle"
                                      class="plus-circle"
                                    ></i
                                  ></span>
                                </div>
                              </td>
                              <td class="action-table-data">
                                <div class="edit-delete-action">
                                  <a
                                    class="me-2 p-2"
                                    href="javascript:void(0);"
                                    data-bs-toggle="modal"
                                    data-bs-target="#edit-units"
                                  >
                                    <i data-feather="edit" class="feather-edit"></i>
                                  </a>
                                  <a
                                    class="confirm-text p-2"
                                    @click="showConfirmation"
                                    href="javascript:void(0);"
                                  >
                                    <i data-feather="trash-2" class="feather-trash-2"></i>
                                  </a>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-blocks search-form mb-0">
                      <label>Notes</label>
                      <textarea class="form-control">
The Jordan brand is owned by Nike (owned by the Knight family), as, at the time, the company was building its strategy to work with athletes to launch shows that could inspire consumers.Although Jordan preferred Converse and Adidas, they simply could not match the offer Nike made. </textarea
                      >
                    </div>
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
                  <button type="submit" class="btn btn-submit">Save Changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Edit Stock -->

  <!-- Import Transfer -->
  <div class="modal fade" id="view-notes">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Import Transfer</h4>
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
          <div class="modal-body custom-modal-body">
            <form @submit.prevent="submitForm">
              <div class="row">
                <div class="col-lg-4 col-sm-6 col-12">
                  <div class="input-blocks">
                    <label>From</label>
                    <vue-select :options="Store" id="store" placeholder="Choose" />
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                  <div class="input-blocks">
                    <label>To</label>
                    <vue-select :options="Storetwo" id="storetwo" placeholder="Choose" />
                  </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                  <div class="input-blocks">
                    <label>Satus</label>
                    <vue-select :options="Sent" id="sent" placeholder="Choose" />
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
                    <label class="form-label">Shipping</label>
                    <input type="text" class="form-control" />
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="mb-3 summer-description-box transfer">
                  <label class="form-label">Description</label>
                  <editor v-model="content" />
                  <p>Maximum 60 Characters</p>
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
  <!-- /Import Transfer -->
</template>

<script>
import Swal from "sweetalert2";

import Editor from "@tinymce/tinymce-vue";
export default {
  components: {
    editor: Editor,
  },
  data() {
    return {
      Lobar: ["Choose", "Lobar Handy", "Quaint Warehouse"],
      Logerro: ["Choose", "Selosy", "Logerro"],
      Quaint: ["Lobar Handy", "Quaint Warehouse"],
      Store: ["Choose", "Store 1"],
      Storetwo: ["Choose", "Store 2"],
      Sent: ["Choose", "Sent", "Pending"],
      content: "Type your message",
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
      this.$router.push("/stock/stock-transfer");
    },
  },
};
</script>
