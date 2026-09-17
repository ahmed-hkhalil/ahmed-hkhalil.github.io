<template>
  <!-- Add Payroll -->
  <div
    class="offcanvas offcanvas-end em-payrol-add"
    tabindex="-1"
    id="offcanvasRight-add"
  >
    <div class="offcanvas-body p-0">
      <div class="page-wrapper-new">
        <div class="content">
          <div class="page-header justify-content-between">
            <div class="page-title">
              <h4>Add New Payroll</h4>
            </div>
            <div class="page-btn">
              <a
                href="javascript:void(0);"
                class="btn btn-added"
                data-bs-dismiss="offcanvas"
                ><vue-feather type="arrow-left" class="me-2"></vue-feather>Back To List</a
              >
            </div>
          </div>
          <!-- /add -->
          <div class="card">
            <div class="card-body">
              <form @submit.prevent="submitForm">
                <div class="row">
                  <div class="col-lg-3 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">Select Employee <span>*</span></label>
                      <vue-select
                        :options="Choopayli"
                        id="choopayli"
                        placeholeder="Choose"
                      />
                    </div>
                  </div>
                  <div class="text-title">
                    <p>Salary Information</p>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Basic Salary <span>*</span></label>
                    <input type="text" class="text-form form-control" />
                  </div>
                  <div class="payroll-info d-flex">
                    <p>Status</p>
                    <div class="status-updates">
                      <ul class="nav nav-pills list mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button
                            class="nav-link active"
                            id="pills-home-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-home"
                            type="button"
                            role="tab"
                          >
                            <span class="form-check form-check-inline">
                              <span class="form-check-label">Paid</span>
                            </span>
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button
                            class="nav-link"
                            id="pills-profile-tab"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-profile"
                            type="button"
                            role="tab"
                          >
                            <span class="form-check form-check-inline">
                              <span class="form-check-label">Unpaid</span>
                            </span>
                          </button>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="payroll-title">
                    <p>Allowances</p>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">HRA Allowance <span>*</span></label>
                      <input type="text" class="form-control" id="allowances-one" />
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">Conveyance <span>*</span></label>
                      <input type="text" class="form-control" id="conveyance" />
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">Medical Allowance <span>*</span></label>
                      <input type="text" class="form-control" id="medical-allowance" />
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">Bonus <span>*</span></label>
                      <input type="text" class="form-control" id="bonus" />
                    </div>
                  </div>
                  <div class="sub-form">
                    <div class="mb-3 flex-grow-1">
                      <label class="form-label">Others</label>
                      <input type="text" class="text-form form-control" />
                    </div>
                    <div class="subadd-btn">
                      <a href="javascript:void(0);" class="btn btn-add"
                        ><vue-feather type="plus-circle"></vue-feather
                      ></a>
                    </div>
                  </div>
                  <div class="payroll-title">
                    <p>Deductions</p>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">PF <span>*</span></label>
                      <input type="text" class="form-control" id="pf-allowances" />
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">Professional Tax <span>*</span></label>
                      <input type="text" class="form-control" id="professional" />
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">TDS <span>*</span></label>
                      <input type="text" class="form-control" id="tds-allowances" />
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">Loans & Others <span>*</span></label>
                      <input type="text" class="form-control" id="other-allowances" />
                    </div>
                  </div>
                  <div class="sub-form">
                    <div class="mb-3 flex-grow-1">
                      <label class="form-label">Others</label>
                      <input type="text" class="text-form form-control" />
                    </div>
                    <div class="subadd-btn">
                      <a href="javascript:void(0);" class="btn btn-add"
                        ><vue-feather type="plus-circle"></vue-feather
                      ></a>
                    </div>
                  </div>
                  <div class="payroll-title">
                    <p>Deductions</p>
                  </div>
                  <div class="col-lg-4 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">Total Allowance <span>*</span></label>
                      <input type="text" class="form-control" id="total-allowances" />
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">Total Deduction <span>*</span></label>
                      <input type="text" class="form-control" id="total-deduction" />
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">Net Salary <span>*</span></label>
                      <input type="text" class="form-control" id="salary-allowances" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="view-btn">
                      <button type="button" class="btn btn-previw me-2">Preview</button>
                      <button type="button" class="btn btn-reset me-2">Reset</button>
                      <button type="submit" class="btn btn-save">Save</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- /add -->
        </div>
      </div>
    </div>
  </div>
  <!-- /Add Payroll -->

  <!-- Edit Payroll -->
  <div class="offcanvas offcanvas-end em-payrol-add" tabindex="-1" id="offcanvasRight">
    <div class="offcanvas-body p-0">
      <div class="page-wrapper-new">
        <div class="content">
          <div class="page-header justify-content-between">
            <div class="page-title">
              <h4>Edit Payroll</h4>
            </div>
            <div class="page-btn">
              <a href="javascript:void(0);" class="btn btn-added" data-bs-dismiss="offcanvas"
                ><vue-feather type="arrow-left" class="me-2"></vue-feather>Back To List</a
              >
            </div>
          </div>
          <!-- /add -->
          <div class="card">
            <div class="card-body">
              <form @submit.prevent="submitForm">
                <div class="row">
                  <div class="col-lg-3 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">Select Employee <span>*</span></label>
                      <vue-select
                        :options="ChoopayliOne"
                        id="choopayliOne"
                        placeholeder="Herald james"
                      />
                    </div>
                  </div>
                  <div class="text-title">
                    <p>Salary Information</p>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Basic Salary <span>*</span></label>
                    <input type="text" class="form-control" value="$32,000" />
                  </div>
                  <div class="payroll-info d-flex">
                    <p>Status</p>
                    <div class="status-updates">
                      <ul class="nav nav-pills list mb-3" id="pills-tab2" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button
                            class="nav-link active"
                            id="pills-home-tab2"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-home"
                            type="button"
                            role="tab"
                          >
                            <span class="form-check form-check-inline">
                              <span class="form-check-label">Paid</span>
                            </span>
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button
                            class="nav-link"
                            id="pills-profile-tab2"
                            data-bs-toggle="pill"
                            data-bs-target="#pills-profile"
                            type="button"
                            role="tab"
                          >
                            <span class="form-check form-check-inline">
                              <span class="form-check-label">Unpaid</span>
                            </span>
                          </button>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="payroll-title">
                    <p>Allowances</p>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">HRA Allowance <span>*</span></label>
                      <input
                        type="text"
                        class="form-control"
                        id="hra-allowances-one"
                        value="0.00"
                      />
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">Conveyance <span>*</span></label>
                      <input
                        type="text"
                        class="form-control"
                        id="conveyance-two"
                        value="0.00"
                      />
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">Medical Allowance <span>*</span></label>
                      <input
                        type="text"
                        class="form-control"
                        id="medical-allowance-three"
                        value="0.00"
                      />
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">Bonus <span>*</span></label>
                      <input
                        type="text"
                        class="form-control"
                        id="bonus-allowances-four"
                        value="0.00"
                      />
                    </div>
                  </div>
                  <div class="sub-form">
                    <div class="mb-3 flex-grow-1">
                      <label class="form-label">Others</label>
                      <input type="text" class="form-control" value="0.00" />
                    </div>
                    <div class="subadd-btn">
                      <a href="javascript:void(0);" class="btn btn-add"
                        ><vue-feather type="plus-circle"></vue-feather
                      ></a>
                    </div>
                  </div>
                  <div class="payroll-title">
                    <p>Deductions</p>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">PF <span>*</span></label>
                      <input
                        type="text"
                        class="form-control"
                        id="pf-allowances-five"
                        value="0.00"
                      />
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">Professional Tax <span>*</span></label>
                      <input
                        type="text"
                        class="form-control"
                        id="professional-allowances-six"
                        value="0.00"
                      />
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">TDS <span>*</span></label>
                      <input
                        type="text"
                        class="form-control"
                        id="tds-allowances-seven"
                        value="0.00"
                      />
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">Loans & Others <span>*</span></label>
                      <input
                        type="text"
                        class="form-control"
                        id="other-allowances-eight"
                        value="0.00"
                      />
                    </div>
                  </div>
                  <div class="sub-form">
                    <div class="mb-3 flex-grow-1">
                      <label class="form-label">Others</label>
                      <input type="text" class="text-form form-control" value="0.00" />
                    </div>
                    <div class="subadd-btn">
                      <a href="javascript:void(0);" class="btn btn-add"
                        ><vue-feather type="plus-circle"></vue-feather
                      ></a>
                    </div>
                  </div>
                  <div class="payroll-title">
                    <p>Deductions</p>
                  </div>
                  <div class="col-lg-4 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">Total Allowance <span>*</span></label>
                      <input
                        type="text"
                        class="form-control"
                        id="total-allowances-nine"
                        value="0.00"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">Total Deduction <span>*</span></label>
                      <input
                        type="text"
                        class="form-control"
                        id="deductio-allowances-ten"
                        value="0.00"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 col-12">
                    <div class="mb-3">
                      <label class="form-label">Net Salary <span>*</span></label>
                      <input
                        type="text"
                        class="form-control"
                        id="salary-allowances-leven"
                        value="$32.000"
                      />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="view-btn">
                      <button type="button" class="btn btn-previw me-2">Preview</button>
                      <button type="submit" class="btn btn-reset me-2">Reset</button>
                      <button type="submit" class="btn btn-save">Save</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- /add -->
        </div>
      </div>
    </div>
  </div>
  <!-- Edit Payroll -->
</template>
<script>
export default {
  data() {
    return {
      Choopayli: ["Choose", "Computers"],
      ChoopayliOne: ["Herald james", "Herald1"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/payroll/payroll-list");
    },
  },
};
</script>
