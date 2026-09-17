<template>
  <!-- Add Shift -->
  <div class="modal fade" id="add-units">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Add New Shift</h4>
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
                <ul class="nav nav-pills modal-table-tab" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link active"
                      id="pills-add-shift-info-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-add-shift-info"
                      type="button"
                      role="tab"
                      aria-controls="pills-add-shift-info"
                      aria-selected="true"
                    >
                      Shift Info
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="pills-add-break-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-add-break"
                      type="button"
                      role="tab"
                      aria-controls="pills-add-break"
                      aria-selected="false"
                    >
                      Break Timings
                    </button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <div
                    class="tab-pane fade show active"
                    id="pills-add-shift-info"
                    role="tabpanel"
                    aria-labelledby="pills-add-shift-info-tab"
                  >
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="input-blocks">
                          <label>Shift Name</label>
                          <input type="text" class="form-control" />
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-blocks">
                          <label>From</label>
                          <div class="form-icon">
                            <input
                              type="text"
                              class="form-control timepicker"
                              placeholder="Select Time"
                            />
                            <span class="cus-icon"
                              ><i data-feather="clock" class="feather-clock"></i
                            ></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-blocks">
                          <label>To</label>
                          <div class="form-icon">
                            <input
                              type="text"
                              class="form-control timepicker"
                              placeholder="Select Time"
                            />
                            <span class="cus-icon"
                              ><i data-feather="clock" class="feather-clock"></i
                            ></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="input-blocks">
                          <label>Weekoff</label>
                          <vue-select
                            :options="Weekoff"
                            id="weekoff"
                            placeholder="Sunday, Monday"
                          />
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="modal-table-item">
                          <h4>Weekdays Defeniton</h4>
                          <div class="table-responsive no-pagination">
                            <table class="table datanew">
                              <thead>
                                <tr>
                                  <th>Days</th>
                                  <th class="text-center">Weeks</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <div
                                      class="status-toggle modal-status d-flex align-items-center"
                                    >
                                      <input type="checkbox" id="day1" class="check" />
                                      <label for="day1" class="checktoggle"></label>
                                      <span class="status-label ms-2">Monday</span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="text-end">
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        All
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        1st
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        2nd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        3rd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        4th
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        5th
                                      </label>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div
                                      class="status-toggle modal-status d-flex align-items-center"
                                    >
                                      <input type="checkbox" id="day2" class="check" />
                                      <label for="day2" class="checktoggle"></label>
                                      <span class="status-label ms-2">Tuesday</span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="text-end">
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        All
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        1st
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        2nd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        3rd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        4th
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        5th
                                      </label>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div
                                      class="status-toggle modal-status d-flex align-items-center"
                                    >
                                      <input type="checkbox" id="day3" class="check" />
                                      <label for="day3" class="checktoggle"></label>
                                      <span class="status-label ms-2">Wednesday</span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="text-end">
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        All
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        1st
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        2nd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        3rd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        4th
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        5th
                                      </label>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div
                                      class="status-toggle modal-status d-flex align-items-center"
                                    >
                                      <input type="checkbox" id="day4" class="check" />
                                      <label for="day4" class="checktoggle"></label>
                                      <span class="status-label ms-2">Thursday</span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="text-end">
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        All
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        1st
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        2nd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        3rd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        4th
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        5th
                                      </label>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div
                                      class="status-toggle modal-status d-flex align-items-center"
                                    >
                                      <input type="checkbox" id="day5" class="check" />
                                      <label for="day5" class="checktoggle"></label>
                                      <span class="status-label ms-2">Friday</span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="text-end">
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        All
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        1st
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        2nd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        3rd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        4th
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        5th
                                      </label>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div
                                      class="status-toggle modal-status d-flex align-items-center"
                                    >
                                      <input type="checkbox" id="day6" class="check" />
                                      <label for="day6" class="checktoggle"></label>
                                      <span class="status-label ms-2">Saturday</span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="text-end">
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        All
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        1st
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        2nd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        3rd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        4th
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        5th
                                      </label>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div
                                      class="status-toggle modal-status d-flex align-items-center"
                                    >
                                      <input type="checkbox" id="day7" class="check" />
                                      <label for="day7" class="checktoggle"></label>
                                      <span class="status-label ms-2">Sunday</span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="text-end">
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        All
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        1st
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        2nd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        3rd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        4th
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        5th
                                      </label>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="input-blocks custom-form-check">
                            <label class="checkboxs modal-table-check">
                              <input type="checkbox" />
                              <span class="checkmarks"></span>
                              Recurring Shift
                            </label>
                          </div>

                          <div class="input-blocks m-0">
                            <div
                              class="status-toggle modal-status d-flex justify-content-between align-items-center"
                            >
                              <span class="status-label">Status</span>
                              <input type="checkbox" id="user6" class="check" checked />
                              <label for="user6" class="checktoggle mb-0"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="pills-add-break"
                    role="tabpanel"
                    aria-labelledby="pills-add-break-tab"
                  >
                    <div class="break-title">
                      <h4>Morning Break</h4>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="input-blocks">
                          <label>From</label>
                          <div class="form-icon">
                            <input
                              type="text"
                              class="form-control timepicker"
                              placeholder="Select Time"
                            />
                            <span class="cus-icon"
                              ><i data-feather="clock" class="feather-clock"></i
                            ></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-blocks">
                          <label>To</label>
                          <div class="form-icon">
                            <input
                              type="text"
                              class="form-control timepicker"
                              placeholder="Select Time"
                            />
                            <span class="cus-icon"
                              ><i data-feather="clock" class="feather-clock"></i
                            ></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="break-title">
                      <h4>Lunch</h4>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="input-blocks">
                          <label>From</label>
                          <div class="form-icon">
                            <input
                              type="text"
                              class="form-control timepicker"
                              placeholder="Select Time"
                            />
                            <span class="cus-icon"
                              ><i data-feather="clock" class="feather-clock"></i
                            ></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-blocks">
                          <label>To</label>
                          <div class="form-icon">
                            <input
                              type="text"
                              class="form-control timepicker"
                              placeholder="Select Time"
                            />
                            <span class="cus-icon"
                              ><i data-feather="clock" class="feather-clock"></i
                            ></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="break-title">
                      <h4>Evening Break</h4>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="input-blocks">
                          <label>From</label>
                          <div class="form-icon">
                            <input
                              type="text"
                              class="form-control timepicker"
                              placeholder="Select Time"
                            />
                            <span class="cus-icon"
                              ><i data-feather="clock" class="feather-clock"></i
                            ></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-blocks">
                          <label>To</label>
                          <div class="form-icon">
                            <input
                              type="text"
                              class="form-control timepicker"
                              placeholder="Select Time"
                            />
                            <span class="cus-icon"
                              ><i data-feather="clock" class="feather-clock"></i
                            ></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="input-blocks summer-description-box">
                      <label>Description</label>
                      <editor v-model="content" />
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
  <!-- /Add Shift -->

  <!-- Edit Shift -->
  <div class="modal fade" id="edit-units">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Edit Shift</h4>
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
                <ul class="nav nav-pills modal-table-tab" id="pills-tab2" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link active"
                      id="pills-edit-shift-info-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-edit-shift-info"
                      type="button"
                      role="tab"
                      aria-controls="pills-edit-shift-info"
                      aria-selected="true"
                    >
                      Shift Info
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button
                      class="nav-link"
                      id="pills-edit-break-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#pills-edit-break"
                      type="button"
                      role="tab"
                      aria-controls="pills-edit-break"
                      aria-selected="false"
                    >
                      Break Timings
                    </button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent2">
                  <div
                    class="tab-pane fade show active"
                    id="pills-edit-shift-info"
                    role="tabpanel"
                    aria-labelledby="pills-edit-shift-info-tab"
                  >
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="input-blocks">
                          <label>Shift Name</label>
                          <input type="text" class="form-control" />
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-blocks">
                          <label>From</label>
                          <div class="form-icon">
                            <input
                              type="text"
                              class="form-control timepicker"
                              placeholder="Select Time"
                            />
                            <span class="cus-icon"
                              ><i data-feather="clock" class="feather-clock"></i
                            ></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-blocks">
                          <label>To</label>
                          <div class="form-icon">
                            <input
                              type="text"
                              class="form-control timepicker"
                              placeholder="Select Time"
                            />
                            <span class="cus-icon"
                              ><i data-feather="clock" class="feather-clock"></i
                            ></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="input-blocks">
                          <label>Weekoff</label>
                          <vue-select
                            :options="WeekoffOne"
                            id="weekoffone"
                            placeholder="Sunday, Monday"
                          />
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="modal-table-item">
                          <h4>Weekdays Defeniton</h4>
                          <div class="table-responsive no-pagination">
                            <table class="table datanew">
                              <thead>
                                <tr>
                                  <th>Days</th>
                                  <th class="text-center">Weeks</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <div
                                      class="status-toggle modal-status d-flex align-items-center"
                                    >
                                      <input
                                        type="checkbox"
                                        id="days1"
                                        class="check"
                                        checked
                                      />
                                      <label for="days1" class="checktoggle"></label>
                                      <span class="status-label ms-2">Monday</span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="text-end">
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        All
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        1st
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        2nd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        3rd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        4th
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        5th
                                      </label>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div
                                      class="status-toggle modal-status d-flex align-items-center"
                                    >
                                      <input
                                        type="checkbox"
                                        id="days2"
                                        class="check"
                                        checked
                                      />
                                      <label for="days2" class="checktoggle"></label>
                                      <span class="status-label ms-2">Tuesday</span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="text-end">
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        All
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        1st
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        2nd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        3rd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        4th
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        5th
                                      </label>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div
                                      class="status-toggle modal-status d-flex align-items-center"
                                    >
                                      <input
                                        type="checkbox"
                                        id="days3"
                                        class="check"
                                        checked
                                      />
                                      <label for="days3" class="checktoggle"></label>
                                      <span class="status-label ms-2">Wednesday</span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="text-end">
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        All
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        1st
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        2nd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        3rd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        4th
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        5th
                                      </label>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div
                                      class="status-toggle modal-status d-flex align-items-center"
                                    >
                                      <input
                                        type="checkbox"
                                        id="days4"
                                        class="check"
                                        checked
                                      />
                                      <label for="days4" class="checktoggle"></label>
                                      <span class="status-label ms-2">Thursday</span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="text-end">
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        All
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        1st
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        2nd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        3rd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        4th
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" checked />
                                        <span class="checkmarks"></span>
                                        5th
                                      </label>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div
                                      class="status-toggle modal-status d-flex align-items-center"
                                    >
                                      <input type="checkbox" id="days5" class="check" />
                                      <label for="days5" class="checktoggle"></label>
                                      <span class="status-label ms-2">Friday</span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="text-end">
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        All
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        1st
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        2nd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        3rd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        4th
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        5th
                                      </label>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div
                                      class="status-toggle modal-status d-flex align-items-center"
                                    >
                                      <input type="checkbox" id="days6" class="check" />
                                      <label for="days6" class="checktoggle"></label>
                                      <span class="status-label ms-2">Saturday</span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="text-end">
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        All
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        1st
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        2nd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        3rd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        4th
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        5th
                                      </label>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div
                                      class="status-toggle modal-status d-flex align-items-center"
                                    >
                                      <input type="checkbox" id="days7" class="check" />
                                      <label for="days7" class="checktoggle"></label>
                                      <span class="status-label ms-2">Sunday</span>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="text-end">
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        All
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        1st
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        2nd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        3rd
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        4th
                                      </label>
                                      <label class="checkboxs modal-table-check">
                                        <input type="checkbox" />
                                        <span class="checkmarks"></span>
                                        5th
                                      </label>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="input-blocks custom-form-check">
                            <label class="checkboxs modal-table-check">
                              <input type="checkbox" checked />
                              <span class="checkmarks"></span>
                              Recurring Shift
                            </label>
                          </div>

                          <div class="input-blocks m-0">
                            <div
                              class="status-toggle modal-status d-flex justify-content-between align-items-center"
                            >
                              <span class="status-label">Status</span>
                              <input type="checkbox" id="users6" class="check" checked />
                              <label for="users6" class="checktoggle mb-0"></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="tab-pane fade"
                    id="pills-edit-break"
                    role="tabpanel"
                    aria-labelledby="pills-edit-break-tab"
                  >
                    <div class="break-title">
                      <h4>Morning Break</h4>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="input-blocks">
                          <label>From</label>
                          <div class="form-icon">
                            <input
                              type="text"
                              class="form-control timepicker"
                              placeholder="11:00 AM"
                            />
                            <span class="cus-icon"
                              ><i data-feather="clock" class="feather-clock"></i
                            ></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-blocks">
                          <label>To</label>
                          <div class="form-icon">
                            <input
                              type="text"
                              class="form-control timepicker"
                              placeholder="11:15 AM"
                            />
                            <span class="cus-icon"
                              ><i data-feather="clock" class="feather-clock"></i
                            ></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="break-title">
                      <h4>Lunch</h4>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="input-blocks">
                          <label>From</label>
                          <div class="form-icon">
                            <input
                              type="text"
                              class="form-control timepicker"
                              placeholder="01:00 PM"
                            />
                            <span class="cus-icon"
                              ><i data-feather="clock" class="feather-clock"></i
                            ></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-blocks">
                          <label>To</label>
                          <div class="form-icon">
                            <input
                              type="text"
                              class="form-control timepicker"
                              placeholder="02:00 PM"
                            />
                            <span class="cus-icon"
                              ><i data-feather="clock" class="feather-clock"></i
                            ></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="break-title">
                      <h4>Evening Break</h4>
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="input-blocks">
                          <label>From</label>
                          <div class="form-icon">
                            <input
                              type="text"
                              class="form-control timepicker"
                              placeholder="05:00 PM"
                            />
                            <span class="cus-icon"
                              ><i data-feather="clock" class="feather-clock"></i
                            ></span>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="input-blocks">
                          <label>To</label>
                          <div class="form-icon">
                            <input
                              type="text"
                              class="form-control timepicker"
                              placeholder="05:30 PM"
                            />
                            <span class="cus-icon"
                              ><i data-feather="clock" class="feather-clock"></i
                            ></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="input-blocks summer-description-box">
                      <label>Description</label>
                      <editor v-model="content" />
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
  <!-- /Edit Shift -->
</template>
<script>
import Editor from "@tinymce/tinymce-vue";
export default {
  components: {
    editor: Editor,
  },
  data() {
    return {
      content: "Type your message",
      Weekoff: ["Sunday,Monday", "Saturday,Sunday", "Tuesday Saturday"],
      WeekoffOne: ["Choose", "Sunday,Monday", "Saturday,Sunday", "Tuesday Saturday"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/hrm/shift");
    },
  },

};
</script>
