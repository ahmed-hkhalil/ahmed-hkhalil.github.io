<template>
  <!-- Php Mail -->
  <div class="modal fade" id="php-mail">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>PHP Mailer</h4>
              </div>
              <div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-auto me-2">
                <input type="checkbox" id="user4" class="check" checked />
                <label for="user4" class="checktoggle"> </label>
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
                      <label class="form-label">From Email Address <span> *</span></label>
                      <input type="email" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Email Password <span> *</span></label>
                      <input type="password" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-0">
                      <label class="form-label"> From Email Name <span> *</span></label>
                      <input type="text" class="form-control" />
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
  <!-- /Php Mail -->

  <!-- Smtp Mail -->
  <div class="modal fade" id="smtp-mail">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>SMTP</h4>
              </div>
              <div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-auto me-2">
                <input type="checkbox" id="user5" class="check" checked />
                <label for="user5" class="checktoggle"> </label>
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
                      <label class="form-label">From Email Address <span> *</span></label>
                      <input type="email" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Email Password <span> *</span></label>
                      <input type="password" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label"> Email Host <span> *</span></label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-0">
                      <label class="form-label"> Port <span> *</span></label>
                      <input type="text" class="form-control" />
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
  <!-- /Smtp Mail -->

  <!-- Test Mail -->
  <div class="modal fade" id="test-mail">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Test Mail</h4>
              </div>
              <div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-auto me-2">
                <input type="checkbox" id="user6" class="check" checked />
                <label for="user6" class="checktoggle"> </label>
              </div>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body custom-modal-body">
              <form @submit.prevent="submitForm">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="mb-0">
                      <label class="form-label">Enter Email Address <span> *</span></label>
                      <input type="email" class="form-control" />
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
  <!-- /Test Mail -->
</template>

<script>
export default {
  data() {
    return {
      methods: {
        submitForm() {
          this.$router.push("/settings/email-settings");
        },
      },
    }
  },
}
</script>