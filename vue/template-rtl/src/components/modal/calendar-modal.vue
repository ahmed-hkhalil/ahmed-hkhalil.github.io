<template>
  <!-- Add Event Modal -->
  <div id="add_event" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Event</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="input-blocks">
              <label>Event Name <span class="text-danger">*</span></label>
              <input class="form-control" type="text" />
            </div>
            <div class="input-blocks">
              <label>Event Date <span class="text-danger">*</span></label>
              <div class="cal-icon">
                <input class="form-control" type="text" />
              </div>
            </div>
            <div class="submit-section">
              <button type="submit" class="btn btn-primary submit-btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Event Modal -->

  <!-- Add Event Modal -->
  <div class="modal custom-modal fade none-border" id="my_event">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Event</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            &times;
          </button>
        </div>
        <div class="modal-body">
          <form @submit.prevent="submitForm">
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-success save-event submit-btn">
                Create event
              </button>
              <button
                type="submit"
                class="btn btn-danger delete-event submit-btn"
                data-dismiss="modal"
              >
                Delete
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Event Modal -->

  <!-- Add Category Modal -->
  <div class="modal custom-modal fade" id="add_new_event">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add Category</h4>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-hidden="true"
          >
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form  @submit.prevent="submitForm">
            <div class="mb-3">
              <label class="form-label">Category Name</label>
              <input
                class="form-control form-white"
                placeholder="Enter name"
                type="text"
                name="category-name"
              />
            </div>
            <div class="mb-3">
              <label class="form-label">Choose Category Color</label>
              <select
                class="form-control form-white"
                data-placeholder="Choose a color..."
                name="category-color"
              >
                <option value="success">Success</option>
                <option value="danger">Danger</option>
                <option value="info">Info</option>
                <option value="primary">Primary</option>
                <option value="warning">Warning</option>
                <option value="inverse">Inverse</option>
              </select>
            </div>
            <div class="submit-section">
              <button
                type="submit"
                class="btn btn-primary save-category submit-btn"
                data-dismiss="modal"
              >
                Save
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Category Modal -->
</template>

<script>
export default {
  methods: {
    submitForm() {
      this.$router.push("/application/calendar");
    },
  },
}
</script>