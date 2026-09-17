<template>
  <!-- Add Category -->
  <div class="modal fade" id="add-category">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Create Sub Category</h4>
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
                <div class="mb-3">
                  <label class="form-label">Parent Category</label>
                  <vue-select
                    :options="Catemodal"
                    id="catemodal"
                    placeholder="Choose Category"
                  />
                </div>
                <div class="mb-3">
                  <label class="form-label">Category Name</label>
                  <input type="text" class="form-control" />
                </div>
                <div class="mb-3">
                  <label class="form-label">Category Code</label>
                  <input type="text" class="form-control" />
                </div>
                <div class="mb-3 input-blocks">
                  <label class="form-label">Description</label>
                  <textarea class="form-control"></textarea>
                </div>
                <div class="mb-0">
                  <div
                    class="status-toggle modal-status d-flex justify-content-between align-items-center"
                  >
                    <span class="status-label">Status</span>
                    <input type="checkbox" id="user2" class="check" checked="" />
                    <label for="user2" class="checktoggle"></label>
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
                  <button type="submit" class="btn btn-submit">Create Subcategory</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Category -->

  <!-- Edit Category -->
  <div class="modal fade" id="edit-category">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Edit Sub Category</h4>
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
                <div class="mb-3">
                  <label class="form-label">Parent Category</label>
                  <vue-select
                    :options="EditCatemodal"
                    id="editcatemodal"
                    placeholder="Choose Category"
                  />
                </div>
                <div class="mb-3">
                  <label class="form-label">Category Name</label>
                  <input type="text" class="form-control" value="Computers" />
                </div>
                <div class="mb-3">
                  <label class="form-label">Category Code</label>
                  <input type="text" class="form-control" value="CT001" />
                </div>
                <div class="mb-3 input-blocks">
                  <label class="form-label">Description</label>
                  <textarea class="form-control">Type Description</textarea>
                </div>
                <div class="mb-0">
                  <div
                    class="status-toggle modal-status d-flex justify-content-between align-items-center"
                  >
                    <span class="status-label">Status</span>
                    <input type="checkbox" id="user3" class="check" checked="" />
                    <label for="user3" class="checktoggle"></label>
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
  <!-- /Edit Category -->
</template>
<script>
export default {
  data() {
    return {
      Catemodal: ["Choose Category", "Category"],
      EditCatemodal: ["Computers", "Fruits"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/inventory/sub-categories");
    },
  },
};
</script>
