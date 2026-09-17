<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper cardhead">
    <div class="content container-fluid">
      <!-- Page Header -->
      <layout-breadcrumb :title="title" :text="text" :text1="text1" />
      <!-- /Page Header -->

      <div class="row">
        <!-- Lightbox -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title mb-0">Basic Wizard</h4>
            </div>
            <div class="card-body">
              <div id="basic-pills-wizard" class="twitter-bs-wizard">
                <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                  <li
                    class="nav-item flex-fill"
                    role="presentation"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Seller Details"
                  >
                    <a
                      class="nav-link active rounded-circle mx-auto d-flex align-items-center justify-content-center"
                    >
                      <i class="far fa-user"></i>
                    </a>
                  </li>
                  <li
                    class="nav-item flex-fill"
                    role="presentation"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Company Document"
                  >
                    <a
                      class="nav-link rounded-circle mx-auto d-flex align-items-center justify-content-center"
                    >
                      <i class="fas fa-map-pin"></i>
                    </a>
                  </li>
                  <li
                    class="nav-item flex-fill"
                    role="presentation"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Bank Details"
                  >
                    <a
                      class="nav-link rounded-circle mx-auto d-flex align-items-center justify-content-center"
                    >
                      <i class="fas fa-credit-card"></i>
                    </a>
                  </li>
                </ul>
                <!-- wizard-nav -->

                <div class="tab-content twitter-bs-wizard-tab-content mt-4">
                  <div class="tab-pane active" id="seller-details">
                    <div class="mb-4">
                      <h5>Enter Your Personal Details</h5>
                    </div>
                    <form>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label for="basicpill-firstname-input" class="form-label"
                              >First name</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="basicpill-firstname-input"
                            />
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label for="basicpill-lastname-input" class="form-label"
                              >Last name</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="basicpill-lastname-input"
                            />
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label for="basicpill-phoneno-input" class="form-label"
                              >Phone</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="basicpill-phoneno-input"
                            />
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label for="basicpill-email-input" class="form-label"
                              >Email</label
                            >
                            <input
                              type="email"
                              class="form-control"
                              id="basicpill-email-input"
                            />
                          </div>
                        </div>
                      </div>
                    </form>
                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                      <li class="next">
                        <a
                          href="javascript: void(0);"
                          class="btn btn-primary"
                          onclick="nextTab()"
                          >Next <i class="bx bx-chevron-right ms-1"></i
                        ></a>
                      </li>
                    </ul>
                  </div>
                  <!-- tab pane -->
                  <div class="tab-pane" id="company-document">
                    <div>
                      <div class="mb-4">
                        <h5>Enter Your Address</h5>
                      </div>
                      <form>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="basicpill-pancard-input" class="form-label"
                                >Address 1</label
                              >
                              <input
                                type="text"
                                class="form-control"
                                id="basicpill-pancard-input"
                              />
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="basicpill-vatno-input" class="form-label"
                                >Address 2</label
                              >
                              <input
                                type="text"
                                class="form-control"
                                id="basicpill-vatno-input"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="basicpill-cstno-input" class="form-label"
                                >Landmark</label
                              >
                              <input
                                type="text"
                                class="form-control"
                                id="basicpill-cstno-input"
                              />
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="basicpill-servicetax-input" class="form-label"
                                >Town</label
                              >
                              <input
                                type="text"
                                class="form-control"
                                id="basicpill-servicetax-input"
                              />
                            </div>
                          </div>
                        </div>
                      </form>
                      <ul class="pager wizard twitter-bs-wizard-pager-link">
                        <li class="previous">
                          <a
                            href="javascript: void(0);"
                            class="btn btn-primary"
                            onclick="nextTab()"
                            ><i class="bx bx-chevron-left me-1"></i> Previous</a
                          >
                        </li>
                        <li class="next">
                          <a
                            href="javascript: void(0);"
                            class="btn btn-primary"
                            onclick="nextTab()"
                            >Next <i class="bx bx-chevron-right ms-1"></i
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- tab pane -->
                  <div class="tab-pane" id="bank-detail">
                    <div>
                      <div class="mb-4">
                        <h5>Payment Details</h5>
                      </div>
                      <form>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="basicpill-namecard-input" class="form-label"
                                >Name on Card</label
                              >
                              <input
                                type="text"
                                class="form-control"
                                id="basicpill-namecard-input"
                              />
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label class="form-label">Credit Card Type</label>
                              <select class="form-select">
                                <option selected>Select Card Type</option>
                                <option value="AE">American Express</option>
                                <option value="VI">Visa</option>
                                <option value="MC">MasterCard</option>
                                <option value="DI">Discover</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="basicpill-cardno-input" class="form-label"
                                >Credit Card Number</label
                              >
                              <input
                                type="text"
                                class="form-control"
                                id="basicpill-cardno-input"
                              />
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label
                                for="basicpill-card-verification-input"
                                class="form-label"
                                >Card Verification Number</label
                              >
                              <input
                                type="text"
                                class="form-control"
                                id="basicpill-card-verification-input"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="mb-3">
                              <label for="basicpill-expiration-input" class="form-label"
                                >Expiration Date</label
                              >
                              <input
                                type="text"
                                class="form-control"
                                id="basicpill-expiration-input"
                              />
                            </div>
                          </div>
                        </div>
                      </form>
                      <ul class="pager wizard twitter-bs-wizard-pager-link">
                        <li class="previous">
                          <a
                            href="javascript: void(0);"
                            class="btn btn-primary"
                            onclick="nextTab()"
                            ><i class="bx bx-chevron-left me-1"></i> Previous</a
                          >
                        </li>
                        <li class="float-end">
                          <a
                            href="javascript: void(0);"
                            class="btn btn-primary"
                            data-bs-toggle="modal"
                            data-bs-target=".confirmModal"
                            >Save Changes</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- tab pane -->
                </div>
                <!-- end tab content -->
              </div>
            </div>
            <!-- end card body -->
          </div>
        </div>
        <!-- /Wizard -->

        <!-- Wizard -->
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title mb-0">Wizard with Progressbar</h4>
            </div>
            <div class="card-body">
              <div class="wizard">
                <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                  <li
                    class="nav-item flex-fill"
                    role="presentation"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Seller Details"
                  >
                    <a
                      class="nav-link active rounded-circle mx-auto d-flex align-items-center justify-content-center"
                      href="#step1"
                      id="step1-tab"
                      data-bs-toggle="tab"
                      role="tab"
                      aria-controls="step1"
                      aria-selected="true"
                    >
                      <i class="far fa-user"></i>
                    </a>
                  </li>
                  <li
                    class="nav-item flex-fill"
                    role="presentation"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Company Document"
                  >
                    <a
                      class="nav-link rounded-circle mx-auto d-flex align-items-center justify-content-center"
                      href="#step2"
                      id="step2-tab"
                      data-bs-toggle="tab"
                      role="tab"
                      aria-controls="step2"
                      aria-selected="false"
                    >
                      <i class="fas fa-map-pin"></i>
                    </a>
                  </li>
                  <li
                    class="nav-item flex-fill"
                    role="presentation"
                    data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    title="Bank Details"
                  >
                    <a
                      class="nav-link rounded-circle mx-auto d-flex align-items-center justify-content-center"
                      href="#step3"
                      id="step3-tab"
                      data-bs-toggle="tab"
                      role="tab"
                      aria-controls="step3"
                      aria-selected="false"
                    >
                      <i class="fas fa-credit-card"></i>
                    </a>
                  </li>
                </ul>
                <div id="bar" class="progress mt-4">
                  <div
                    class="progress-bar bg-success progress-bar-striped progress-bar-animated"
                  ></div>
                </div>
                <div class="tab-content mt-4" id="myTabContent">
                  <div
                    class="tab-pane fade show active"
                    role="tabpanel"
                    id="step1"
                    aria-labelledby="step1-tab"
                  >
                    <div class="mb-4">
                      <h5>User Details</h5>
                    </div>
                    <b-form>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="input-block mb-3">
                            <label for="basicpill-firstname-input" class="form-label"
                              >First name</label
                            >
                            <b-form-input
                              type="text"
                              class="form-control"
                              id="basicpill-firstname-input"
                            />
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="input-block mb-3">
                            <label for="basicpill-lastname-input" class="form-label"
                              >Last name</label
                            >
                            <b-form-input
                              type="text"
                              class="form-control"
                              id="basicpill-lastname-input"
                            />
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-6">
                          <div class="input-block mb-3">
                            <label for="basicpill-phoneno-input" class="form-label"
                              >Phone</label
                            >
                            <b-form-input
                              type="text"
                              class="form-control"
                              id="basicpill-phoneno-input"
                            />
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="input-block mb-3">
                            <label for="basicpill-email-input" class="form-label"
                              >Email</label
                            >
                            <b-form-input
                              type="email"
                              class="form-control"
                              id="basicpill-email-input"
                            />
                          </div>
                        </div>
                      </div>
                    </b-form>
                    <div class="d-flex">
                      <a class="btn btn btn-primary next">Next</a>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    role="tabpanel"
                    id="step2"
                    aria-labelledby="step2-tab"
                  >
                    <div class="mb-4">
                      <h5>Location Details</h5>
                    </div>
                    <form>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label for="progresspill-pancard-input" class="form-label"
                              >Address Line 1</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="progresspill-pancard-input"
                            />
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label for="progresspill-vatno-input" class="form-label"
                              >Address Line 2</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="progresspill-vatno-input"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label for="progresspill-cstno-input" class="form-label"
                              >Landmark</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="progresspill-cstno-input"
                            />
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label for="progresspill-servicetax-input" class="form-label"
                              >City</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="progresspill-servicetax-input"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label for="progresspill-companyuin-input" class="form-label"
                              >State</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="progresspill-companyuin-input"
                            />
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label for="progresspill-declaration-input" class="form-label"
                              >Country</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="progresspill-declaration-input"
                            />
                          </div>
                        </div>
                      </div>
                    </form>
                    <div class="d-flex">
                      <a class="btn btn btn-primary previous me-2"> Back</a>
                      <a class="btn btn btn-primary next">Continue</a>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    role="tabpanel"
                    id="step3"
                    aria-labelledby="step3-tab"
                  >
                    <div class="mb-4">
                      <h5>Payment Details</h5>
                    </div>
                    <form>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label for="basicpill-namecard-input" class="form-label"
                              >Name on Card</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="basicpill-namecard-input"
                            />
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label class="form-label">Credit Card Type</label>
                            <vue-select
                              :options="FormSelect"
                              id="formselect"
                              placeholder="Select Card Type"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label for="basicpill-cardno-input" class="form-label"
                              >Credit Card Number</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="basicpill-cardno-input"
                            />
                          </div>
                        </div>

                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label
                              for="basicpill-card-verification-input"
                              class="form-label"
                              >Card Verification Number</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="basicpill-card-verification-input"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6">
                          <div class="mb-3">
                            <label for="basicpill-expiration-input" class="form-label"
                              >Expiration Date</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="basicpill-expiration-input"
                            />
                          </div>
                        </div>
                      </div>
                    </form>
                    <div class="d-flex">
                      <a class="btn btn-primary previous me-2">Previous</a>
                      <a
                        class="btn btn-primary next"
                        data-bs-toggle="modal"
                        data-bs-target="#save_modal"
                        >Save Changes</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /Wizard -->
      </div>
    </div>
  </div>
</template>
<script>
// import '@/assets/css/form-wizard.css'
export default {
  data() {
    return {
      title: "Form Wizard",
      text: "Dashboard",
      text1: "Form Wizard",
      FormSelect: ["Selec Card Type", "VIsa", "Visa", "MasterCard", "Discover"],
    };
  },
};
</script>
