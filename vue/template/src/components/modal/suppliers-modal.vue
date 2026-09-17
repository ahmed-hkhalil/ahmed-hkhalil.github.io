<template>
  <!-- Add Supplier -->
  <div class="modal fade" id="add-units">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Add Supplier</h4>
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
                  <div class="col-lg-12">
                    <div class="new-employee-field">
                      <span>Avatar</span>
                      <div class="profile-pic-upload mb-2">
                        <div class="profile-pic">
                          <span
                            ><i data-feather="plus-circle" class="plus-down-add"></i>
                            Profile Photo</span
                          >
                        </div>
                        <div class="input-blocks mb-0">
                          <div class="image-upload mb-0">
                            <input type="file" />
                            <div class="image-uploads">
                              <h4>Change Image</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="input-blocks">
                      <label>Supplier Name</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="input-blocks">
                      <label>Email</label>
                      <input type="email" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="input-blocks">
                      <label>Phone</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-blocks">
                      <label>Address</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-10 col-10">
                    <div class="input-blocks">
                      <label>City</label>
                      <vue-select
                        :options="ChooseSup"
                        id="choosesup"
                        placeholder="Choose"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-10 col-10">
                    <div class="input-blocks">
                      <label>Country</label>
                      <vue-select :options="GerSup" id="gersup" placeholder="Choose" />
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="mb-0 input-blocks">
                      <label class="form-label">Descriptions</label>
                      <textarea class="form-control mb-1"></textarea>
                      <p>Maximum 600 Characters</p>
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
                  <button type="submit" class="btn btn-submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Supplier -->

  <!-- Edit Supplier -->
  <div class="modal fade" id="edit-units">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Edit Supplier</h4>
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
                  <div class="col-lg-12">
                    <div class="new-employee-field">
                      <span>Avatar</span>
                      <div class="profile-pic-upload edit-pic">
                        <div class="profile-pic">
                          <span
                            ><img src="@/assets/img/supplier/edit-supplier.jpg" alt=""
                          /></span>
                          <div class="close-img">
                            <i data-feather="x" class="info-img"></i>
                          </div>
                        </div>
                        <div class="input-blocks mb-0">
                          <div class="image-upload mb-0">
                            <input type="file" />
                            <div class="image-uploads">
                              <h4>Change Image</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="input-blocks">
                      <label>Supplier Name</label>
                      <input type="text" placeholder="Apex Computers" />
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="input-blocks">
                      <label>Email</label>
                      <input type="email" placeholder="apexcomputers@example.com" />
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="input-blocks">
                      <label>Phone</label>
                      <input type="text" placeholder="+12163547758 " />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-blocks">
                      <label>Address</label>
                      <input type="text" placeholder="Budapester Strasse 2027259 " />
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-10 col-10">
                    <div class="input-blocks">
                      <label>City</label>
                      <vue-select
                        :options="ChooseSupOne"
                        id="choosesupone"
                        placeholder="Varrel"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-10 col-10">
                    <div class="input-blocks">
                      <label>Country</label>
                      <vue-select :options="CouSup" id="cousup" placeholder="Germany" />
                    </div>
                  </div>

                  <div class="mb-0 input-blocks">
                    <label class="form-label">Descriptions</label>
                    <textarea class="form-control mb-1"></textarea>
                    <p>Maximum 600 Characters</p>
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
  <!-- /Edit Supplier -->
</template>
<script>
export default {
  data() {
    return {
      ChooseSup: ["Choose", "Varrel"],
      ChooseSupOne: ["Choose", "Varrel"],
      GerSup: ["Choose", "Germany", "Mexico"],
      CouSup: ["Germany", "Mexico"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/people/suppliers");
    },
  },
};
</script>
