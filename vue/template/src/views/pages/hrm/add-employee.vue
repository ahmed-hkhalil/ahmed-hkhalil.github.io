<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>New Employee</h4>
            <h6>Create new Employee</h6>
          </div>
        </div>
        <ul class="table-top-head">
          <li>
            <div class="page-btn">
              <router-link to="employees-list" class="btn btn-secondary"
                ><vue-feather type="arrow-left" class="me-2"></vue-feather>Back to
                Employee List</router-link
              >
            </div>
          </li>
          <li>
            <a
              ref="collapseHeader"
              data-bs-toggle="tooltip"
              data-bs-placement="top"
              title="Collapse"
              @click="toggleCollapse"
            >
              <i data-feather="chevron-up" class="feather-chevron-up"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- /product list -->
      <form action="add-employee">
        <div class="card">
          <div class="card-body">
            <div class="new-employee-field">
              <div class="card-title-head">
                <h6>
                  <span><vue-feather type="info" class="info"></vue-feather></span
                  >Employee Information
                </h6>
              </div>
              <div class="profile-pic-upload">
                <div class="profile-pic">
                  <span
                    ><vue-feather type="plus-circle" class="plus-down-add"></vue-feather>
                    Profile Photo</span
                  >
                </div>
                <div class="input-blocks mb-0">
                  <div class="image-upload mb-0">
                    <input type="file" />
                    <div class="image-uploads">
                      <h4>Change Image</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" />
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" />
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" />
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Contact Number</label>
                    <input type="text" class="form-control" />
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Emp Code</label>
                    <input type="text" class="form-control" />
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="input-blocks">
                    <label>Date of Birth</label>

                    <div class="input-groupicon calender-input">
                      <vue-feather type="calendar" class="info-img"></vue-feather>
                      <date-picker
                        v-model="startdate"
                        placeholder="Select Date"
                        class="datetimepicker"
                        :editable="true"
                        :clearable="false"
                        :input-format="dateFormat"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <vue-select :options="Empmale" id="empmale" placeholder="Choose" />
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Nationality</label>
                    <vue-select :options="EmpNat" id="empnat" placeholder="Choose" />
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="input-blocks">
                    <label>Joining Date</label>
                    <div class="input-groupicon calender-input">
                      <vue-feather type="calendar" class="info-img"></vue-feather>
                      <date-picker
                        v-model="startdateOne"
                        placeholder="Select Date"
                        class="datetimepicker"
                        :editable="true"
                        :clearable="false"
                        :input-format="dateFormat"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="mb-3">
                    <div class="add-newplus">
                      <label class="form-label">Shift</label>
                      <a href="javascript:void(0);"
                        ><span
                          ><vue-feather
                            type="plus-circle"
                            class="plus-down-add"
                          ></vue-feather
                          >Add new</span
                        ></a
                      >
                    </div>
                    <vue-select :options="ChoEmp" id="choemp" placeholder="Choose" />
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Department</label>
                    <vue-select :options="DepEmp" id="depemp" placeholder="Choose" />
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Designation</label>
                    <vue-select :options="DesEmp" id="desemp" placeholder="Choose" />
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Blood Group</label>
                    <vue-select :options="BloodEmp" id="bloodemp" placeholder="Choose" />
                  </div>
                </div>
              </div>
              <div class="other-info">
                <div class="card-title-head">
                  <h6>
                    <span><i data-feather="info" class="feather-edit"></i></span>Other
                    Information
                  </h6>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Emergency No 1</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Emergency No 2</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6"></div>
                  <div class="col-lg-4 col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Address</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Country</label>
                      <vue-select
                        :options="ChooseEmpCou"
                        id="chooseempcou"
                        placeholder="Choose"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="mb-3">
                      <label class="form-label">State</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="mb-3">
                      <label class="form-label">City</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Zipcode</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="pass-info">
                <div class="card-title-head">
                  <h6>
                    <span><i data-feather="info" class="feather-edit"></i></span>Password
                  </h6>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <div class="input-blocks mb-md-0 mb-sm-3">
                      <label>Password</label>
                      <div class="pass-group">
                        <input type="password" class="pass-input" />
                        <span class="fas toggle-password fa-eye-slash"></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                    <div class="input-blocks mb-0">
                      <label>Confirm Password</label>
                      <div class="pass-group">
                        <input type="password" class="pass-inputa" />
                        <span class="fas toggle-passworda fa-eye-slash"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /product list -->

        <div class="text-end mb-3">
          <button type="button" class="btn btn-cancel me-2">Cancel</button>
          <button type="submit" class="btn btn-submit">Save Product</button>
        </div>
      </form>
    </div>
  </div>
</template>
<script>
import { ref } from "vue";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
export default {
  data() {
    return {
      ChooseEmpCou: ["Choose", "United Kingdom", "USA"],
      BloodEmp: ["Choose", "A+", "A-", "B+", "B-", "O+", "O-", "AB+", "AB-"],
      DesEmp: ["Choose", "Designer", "Developer", "Tester"],
      DepEmp: ["Choose", "UI/UX", "Support", "HR", "Enginnering"],
      ChoEmp: ["Choose", "Regular"],
      EmpNat: ["Choose", "United Kingdom", "India"],
      Empmale: ["Choose", "Male", "Female"],
      startdate: currentDate,
      startdateOne: currentDateOne,
      dateFormat: "dd-MM-yyyy",
    };
  },
  methods: {
    toggleCollapse() {
      const collapseHeader = this.$refs.collapseHeader;

      if (collapseHeader) {
        collapseHeader.classList.toggle("active");
        document.body.classList.toggle("header-collapse");
      }
    },
  },
};
</script>
