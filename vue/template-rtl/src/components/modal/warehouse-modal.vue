<template>
  <!-- Add Warehouse -->
  <div class="modal fade" id="add-units">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Add Warehouse</h4>
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
                <div class="modal-title-head">
                  <h6>
                    <span><i data-feather="info" class="feather-edit"></i></span>Warehouse
                    Info
                  </h6>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-blocks">
                      <label>Contact Person</label>
                      <vue-select :options="OneCont" id="onecont" placeholder="Choose" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3 war-add">
                      <label class="mb-2">Phone Number</label>
                      <input class="form-control" id="phone" name="phone" type="text" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label class="form-label">Work Phone</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" />
                    </div>
                  </div>
                  <div class="modal-title-head">
                    <h6>
                      <span><i data-feather="map-pin"></i></span>Location
                    </h6>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Address 1</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Address 2</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-blocks">
                      <label>Country</label>
                      <vue-select
                        :options="OneContkin"
                        id="onecontkin"
                        placeholder="Choose"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label class="form-label">State</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3 mb-0">
                      <label class="form-label">City</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3 mb-0">
                      <label class="form-label">Zipcode</label>
                      <input type="text" class="form-control" />
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
                  <button type="submit" class="btn btn-submit">Create Warehouse</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Warehouse -->

  <!-- Edit Warehouse -->
  <div class="modal fade" id="edit-units">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Edit Warehouse</h4>
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
                <div class="modal-title-head">
                  <h6>
                    <span><i data-feather="info" class="feather-edit"></i></span>Warehouse
                    Info
                  </h6>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control" value="Legendary" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-blocks">
                      <label>Contact Person</label>
                      <vue-select :options="Cont" id="cont" placeholder="Steven" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3 war-edit-phone">
                      <label class="mb-2">Phone Number</label>
                      <input class="form-control" id="phone2" name="phone" type="text" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3 war-edit-phone">
                      <label class="form-label">Work Phone</label>
                      <input class="form-control" id="phone3" name="phone" type="text" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input
                        type="email"
                        class="form-control"
                        value="stevenlegendary@example.com"
                      />
                    </div>
                  </div>
                  <div class="modal-title-head">
                    <h6>
                      <span><i data-feather="map-pin"></i></span>Location
                    </h6>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Address 1</label>
                      <input type="text" class="form-control" value="Admiral Street" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="input-blocks">
                      <label class="form-label">Address 2</label>
                      <input type="text" class="form-control" value="Aire Street" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-blocks">
                      <label>Country</label>
                      <vue-select
                        :options="Contkin"
                        id="contkin"
                        placeholder="United Kingdom"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label class="form-label">State</label>
                      <input type="text" class="form-control" value="East England" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3 mb-0">
                      <label class="form-label">City</label>
                      <input type="text" class="form-control" value="Leeds" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3 mb-0">
                      <label class="form-label">Zipcode</label>
                      <input type="text" class="form-control" value="LS1" />
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
</template>
<script>
export default {
  data() {
    return {
      Contkin: ["United Kingdom", "United State"],
      Cont: ["Steven", "Gravely"],
      OneContkin: ["Choose", "United Kingdom", "United State"],
      OneCont: ["Choose", "Steven", "Gravely"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/people/warehouse");
    },
  },
};
</script>
