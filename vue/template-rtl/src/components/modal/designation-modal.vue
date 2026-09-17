<template>
  <!-- Add Department -->
  <div class="modal fade" id="add-department">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Add Designation</h4>
              </div>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body custom-modal-body">
              <form @submit.prevent="submitForm">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Designation Name</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="input-blocks m-0">
                    <div class="status-toggle modal-status d-flex justify-content-between align-items-center">
                      <span class="status-label">Status</span>
                      <input type="checkbox" id="user5" class="check" checked />
                      <label for="user5" class="checktoggle"> </label>
                    </div>
                  </div>
                </div>
                <div class="modal-footer-btn">
                  <button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">
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
  <!-- /Add Department -->

  <!-- Edit Department -->
  <div class="modal fade" id="edit-department">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Edit Designation</h4>
              </div>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body custom-modal-body">
              <form @submit.prevent="submitForm">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Designation Name</label>
                      <input type="text" class="form-control" value="Designer" />
                    </div>
                  </div>
                  <div class="input-blocks m-0">
                    <div class="status-toggle modal-status d-flex justify-content-between align-items-center">
                      <span class="status-label">Status</span>
                      <input type="checkbox" id="user3" class="check" checked />
                      <label for="user3" class="checktoggle"> </label>
                    </div>
                  </div>
                </div>
                <div class="modal-footer-btn">
                  <button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">
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
  <!-- /Edit Department -->
</template>

<script>
export default {
  data() {
    return {
      methods: {
        submitForm() {
          this.$router.push("/hrm/designation");
        },
      },
    }
  },
}
</script>