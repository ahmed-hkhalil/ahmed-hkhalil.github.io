<template>
  <!-- Add Tax Rates -->
  <div class="modal fade" id="add-tax">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Add Tax Rates</h4>
              </div>
              <div
                class="status-toggle modal-status d-flex justify-content-between align-items-center ms-auto me-2"
              >
                <input type="checkbox" id="user1" class="check" checked />
                <label for="user1" class="checktoggle"> </label>
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
                    <div class="mb-3">
                      <label class="form-label">Name <span> *</span></label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-0">
                      <label class="form-label">Tax Rate % <span> *</span></label>
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
                  <button type="submit" class="btn btn-submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Tax Rates -->

  <!-- Edit Tax Rates -->
  <div class="modal fade" id="edit-tax">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Edit Tax Rates</h4>
              </div>
              <div
                class="status-toggle modal-status d-flex justify-content-between align-items-center ms-auto me-2"
              >
                <input type="checkbox" id="user4" class="check" checked />
                <label for="user4" class="checktoggle"> </label>
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
                <div class="row">
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Name <span> *</span></label>
                      <input type="text" class="form-control" value="VAT" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-0">
                      <label class="form-label">Tax Rate % <span> *</span></label>
                      <input type="text" class="form-control" value="16" />
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
  methods: {
    submitForm() {
      this.$router.push("/settings/tax-rates");
    },
  },
}
</script>