<template>
  <div>
    <div class="modal fade" id="add-units">
      <div class="modal-dialog modal-dialog-centered custom-modal-two">
        <div class="modal-content">
          <div class="page-wrapper-new p-0">
            <div class="content">
              <div class="modal-header border-0 custom-modal-header">
                <div class="page-title">
                  <h4>Add Expense</h4>
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
                <div class="row">
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label class="form-label">Expense Category</label>
                      <vue-select
                        :options="ChooseExpense"
                        id="chooseexpenses"
                        placeholder="Choose"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="input-blocks date-group">
                      <vue-feather type="calendar" class="info-img"></vue-feather>
                      <div class="input-groupicon">
                        <date-picker
                          v-model="startdate"
                          placeholder="Choose Date"
                          class="datetimepicker"
                          :editable="true"
                          :clearable="false"
                          :input-format="dateFormat"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label class="form-label">Amount</label>
                      <input type="text" class="form-control" placeholder="$" />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label class="form-label">Reference</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Expense For</label>
                      <input type="text" class="form-control" />
                      <span class="unlimited-text">0 for Unlimited</span>
                    </div>
                  </div>
                  <!-- Editor -->
                  <div class="col-md-12">
                    <div class="edit-add card">
                      <div class="edit-add">
                        <label class="form-label">Description</label>
                      </div>
                      <div class="card-body-list input-blocks mb-0">
                        <textarea class="form-control"></textarea>
                      </div>
                      <p>Maximum 600 Characters</p>
                    </div>
                  </div>
                  <!-- /Editor -->
                </div>
                <div class="modal-footer-btn">
                  <a
                    href="javascript:void(0);"
                    class="btn btn-cancel me-2"
                    data-bs-dismiss="modal"
                    >Cancel</a
                  >
                  <router-link to="/finance/expenses-list" class="btn btn-submit"
                    >Submit</router-link
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="edit-units">
      <div class="modal-dialog modal-dialog-centered custom-modal-two">
        <div class="modal-content">
          <div class="page-wrapper-new p-0">
            <div class="content">
              <div class="modal-header border-0 custom-modal-header">
                <div class="page-title">
                  <h4>Edit Expense</h4>
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
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label class="form-label">Expense Category</label>
                        <vue-select
                          :options="ChooseExpenseOne"
                          id="chooseexpensesone"
                          placeholder="Employee Benefits"
                        />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="input-blocks date-group">
                        <vue-feather type="calendar" class="info-img"></vue-feather>
                        <div class="input-groupicon">
                          <date-picker
                            v-model="startdateOne"
                            placeholder="Choose Date"
                            class="datetimepicker"
                            :editable="true"
                            :clearable="false"
                            :input-format="dateFormat"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label class="form-label">Amount</label>
                        <input type="text" class="form-control" value="$550.00" />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="mb-3">
                        <label class="form-label">Reference</label>
                        <input type="text" class="form-control" value="55544" />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="mb-3 input-blocks">
                        <label class="form-label">Expense For</label>
                        <input type="text" class="form-control" />
                        <span class="unlimited-text">0 for Unlimited</span>
                      </div>
                    </div>
                    <!-- Editor -->
                    <div class="col-md-12">
                      <div class="edit-add card">
                        <div class="edit-add">
                          <label class="form-label">Description</label>
                        </div>
                        <div class="card-body-list input-blocks mb-0">
                          <textarea class="form-control">Employee Vehicle</textarea>
                        </div>
                        <p>Maximum 600 Characters</p>
                      </div>
                    </div>
                    <!-- /Editor -->
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
  </div>
</template>
<script>
import { ref } from "vue";
const currentDate = ref(new Date());
const currentDateOne = ref(new Date());
export default {
  data() {
    return {
      startdate: currentDate,
      startdateOne: currentDateOne,
      dateFormat: "dd-MM-yyyy",
      ChooseExpense: ["Choose", "Foods & Snacks", "Emplyee Benefits"],
      ChooseExpenseOne: ["Employee Benefits", "Foods & Snacks", "Emplyee Benefits"],
    };
  },
  methods: {
    submitForm() {
      this.$router.push("/finance/expenses-list");
    },
  },
};
</script>
