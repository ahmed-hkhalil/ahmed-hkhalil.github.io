<template>
  <!-- Add Leave -->
  <div class="modal fade" id="add-units">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Apply Leave</h4>
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
                    <div class="input-blocks">
                      <label>Start Date</label>

                      <div class="input-groupicon calender-input">
                        <vue-feather type="calendar" class="info-img"></vue-feather>
                        <date-picker
                          v-model="startdate"
                          placeholder="Select From - To Date"
                          class="datetimepicker"
                          :editable="true"
                          :clearable="false"
                          :input-format="dateFormat"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Select Leave Type </label>
                      <vue-select
                        :options="ChooLeave"
                        id="Chooleave"
                        placeholder="Choose"
                      />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="apply-leave">
                      <div class="leave-apply">
                        <div class="leave-date">
                          <span>Day 1</span>
                          <p>16 Aug 2023</p>
                        </div>
                        <div class="leave-time">
                          <div class="input-blocks mb-0">
                            <vue-select
                              :options="Fullleave"
                              id="fullleave"
                              placeholder="Full Day"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="leave-apply">
                        <div class="leave-date">
                          <span>Day 1</span>
                          <p>16 Aug 2023</p>
                        </div>
                        <div class="leave-time">
                          <div class="input-blocks mb-0">
                            <vue-select
                              :options="FullleaveFull"
                              id="fullleavefull"
                              placeholder="Full Day"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3 summer-description-box mb-0">
                      <label class="form-label">Reason</label>
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
  <!-- /Add Leave -->

  <!-- Edit Leave -->
  <div class="modal fade" id="edit-units">
    <div class="modal-dialog modal-dialog-centered custom-modal-two">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Edit Leave</h4>
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
                    <div class="input-blocks">
                      <label class="form-label">Start Date</label>

                      <div class="input-groupicon calender-input">
                        <vue-feather type="calendar" class="info-img"></vue-feather>
                        <date-picker
                          v-model="startdateOne"
                          placeholder="Select From - To Date"
                          class="datetimepicker"
                          :editable="true"
                          :clearable="false"
                          :input-format="dateFormat"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Select Leave Type </label>
                      <vue-select
                        :options="ChooLeaveOne"
                        id="Chooleaveone"
                        placeholder="Sick Leave"
                      />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="apply-leave">
                      <div class="leave-apply">
                        <div class="leave-date">
                          <span>Day 1</span>
                          <p>16 Aug 2023</p>
                        </div>
                        <div class="leave-time">
                          <div class="input-blocks mb-0">
                            <vue-select
                              :options="Fullleaveone"
                              id="fullleaveone"
                              placeholder="Full Day"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="leave-apply">
                        <div class="leave-date">
                          <span>Day 1</span>
                          <p>16 Aug 2023</p>
                        </div>
                        <div class="leave-time">
                          <div class="input-blocks mb-0">
                            <vue-select
                              :options="FullleaveFUllone"
                              id="fullleavefUllone"
                              placeholder="Full Day"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3 summer-description-box mb-0">
                      <label class="form-label">Reason</label>
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
  <!-- /Edit Leave -->

  <!-- Rejected Reason -->
  <div class="modal fade" id="rejected-reason">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Reason For Rejection</h4>
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
              <p>
                The Jordan brand is owned by Nike (owned by the Knight family), as, at the
                time, the company was building its strategy to work with athletes to
                launch shows that could inspire consumers.Although Jordan preferred
                Converse and Adidas, they simply could not match the offer Nike made.
                Jordan also signed with Nike because he loved the way they wanted to
                market him with the banned colored shoes. Nike promised to cover the fine
                Jordan would receive from the NBA.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Rejected Reason -->
</template>
<script>
import { ref } from "vue";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
import Editor from "@tinymce/tinymce-vue";
export default {
  components: {
    editor: Editor,
  },
  data() {
    return {
      startdate: currentDate,
      startdateOne: currentDateOne,
      dateFormat: "dd-MM-yyyy",
      content: "Type your message",
      contentOne: "Type your message",
      ChooLeave: ["Choose", "Sick Leave", "paternity"],
      ChooLeaveOne: ["Choose", "Sick Leave", "paternity"],
      Fullleave: ["Full Day", "Half Day"],
      FullleaveOne: ["Full Day", "Half Day"],
      FullleaveFull: ["Full Day", "Half Day"],
      FullleaveFullOne: ["Full Day", "Half Day"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/leaves/leaves-employee");
    },
  },
};
</script>
