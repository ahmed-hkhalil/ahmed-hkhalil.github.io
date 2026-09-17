<template>
  <!-- Add Custom Field -->
  <div class="modal fade" id="add-custom-field">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Add New Custom Fields</h4>
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
                      <label class="form-label">Custom Fields For <span> *</span></label>
                      <vue-select
                        :options="ChooseCust"
                        id="choosecust"
                        placeholder="Choose"
                      />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Label <span> *</span></label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Default Value <span> *</span></label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Input Type <span> *</span></label>
                      <vue-select
                        :options="TextCust"
                        id="textcust"
                        placeholder="Choose"
                      />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div
                      class="localization-select pos-payment-method mb-3 d-flex align-items-center mb-0 w-100"
                    >
                      <div class="custom-control custom-checkbox">
                        <label class="checkboxs mb-0 pb-0 line-height-1">
                          <input type="checkbox" checked />
                          <span class="checkmarks"></span>Required
                        </label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <label class="checkboxs mb-0 pb-0 line-height-1">
                          <input type="checkbox" checked />
                          <span class="checkmarks"></span>Disable
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div
                      class="status-toggle modal-status d-flex justify-content-between align-items-center"
                    >
                      <span class="status-label">Status</span>
                      <input type="checkbox" id="user2" class="check" checked="" />
                      <label for="user2" class="checktoggle"></label>
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
  <!-- /Add Custom Field -->

  <!-- Edit Custom Field -->
  <div class="modal fade" id="edit-custom-field">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Add New Custom Fields</h4>
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
                      <label class="form-label">Custom Fields For <span> *</span></label>
                      <vue-select
                        :options="ChooseCustOne"
                        id="choosecustone"
                        placeholder="Expense"
                      />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Label <span> *</span></label>
                      <input type="text" class="form-control" value="Name" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Default Value <span> *</span></label>
                      <input type="text" class="form-control" value="None" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Input Type <span> *</span></label>
                      <vue-select
                        :options="TextCustOne"
                        id="textcustone"
                        placeholder="Text"
                      />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div
                      class="localization-select pos-payment-method mb-3 d-flex align-items-center mb-0 w-100"
                    >
                      <div class="custom-control custom-checkbox">
                        <label class="checkboxs mb-0 pb-0 line-height-1">
                          <input type="checkbox" checked />
                          <span class="checkmarks"></span>Required
                        </label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <label class="checkboxs mb-0 pb-0 line-height-1">
                          <input type="checkbox" checked />
                          <span class="checkmarks"></span>Disable
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div
                      class="status-toggle modal-status d-flex justify-content-between align-items-center"
                    >
                      <span class="status-label">Status</span>
                      <input type="checkbox" id="user3" class="check" checked="" />
                      <label for="user3" class="checktoggle"></label>
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
  <!-- /Edit Custom Field -->
</template>
<script>
export default {
  data() {
    return {
      ChooseCust: ["Choose", "Expense", "Transaction"],
      TextCust: ["Choose", "Text", "Textarea"],
      ChooseCustOne: ["Expense", "Transaction"],
      TextCustOne: ["Text", "Textarea"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/settings/custom-fields");
    },
  },
};
</script>
