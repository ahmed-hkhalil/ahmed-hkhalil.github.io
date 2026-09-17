<template>
  <!-- Edit Language -->
  <div class="offcanvas offcanvas-end em-payrol-add" tabindex="-1" id="offcanvasRight">
    <div class="offcanvas-body p-0">
      <div class="page-wrapper-new">
        <div class="content">
          <div class="page-header justify-content-between">
            <div class="page-title d-flex align-items-center">
              <div class="page-btn mt-0">
                <a
                  href="javascript:void(0);"
                  class="d-flex align-items-center selected-language me-3"
                  ><img
                    src="@/assets/img/icons/flag-02.svg"
                    class="me-2"
                    alt=""
                  />Arabic</a
                >
              </div>
              <div class="position-relative">
                <p class="mb-0">Progress</p>
                <div class="d-flex align-items-center">
                  <div class="progress attendance language-progress">
                    <div
                      class="progress-bar progress-bar-violet-two"
                      role="progressbar"
                    ></div>
                  </div>
                  <span class="position-static ms-2">40%</span>
                </div>
              </div>
            </div>
            <div class="page-btn">
              <a href="javascript:void(0);" class="btn btn-secondary" data-bs-dismiss="offcanvas"
                ><vue-feather type="arrow-left" class="arrow-left me-2"></vue-feather>Back
                to Translations
              </a>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table datanew">
              <thead>
                <tr>
                  <th class="no-sort fixed-width">English</th>
                  <th class="no-sort fixed-width">Arabic</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Bugs</td>
                  <td>
                    <div><input type="text" class="form-control" value="البق" /></div>
                  </td>
                </tr>
                <tr>
                  <td>Bugs Email</td>
                  <td>
                    <div>
                      <input
                        type="text"
                        class="form-control"
                        value="البق البريد الإلكتروني"
                      />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Bug Assigned</td>
                  <td>
                    <div>
                      <input type="text" class="form-control" value="علة المخصصة" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Bug Comments</td>
                  <td>
                    <div>
                      <input type="text" class="form-control" value="علة المخصصة" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Bug Attachment</td>
                  <td>
                    <div>
                      <input type="text" class="form-control" value="علة المخصصة" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Bug Updated</td>
                  <td>
                    <div>
                      <input type="text" class="form-control" value="علة المخصصة" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Bug Reported</td>
                  <td>
                    <div>
                      <input type="text" class="form-control" value="علة المخصصة" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Bugs infromation successfully updated</td>
                  <td>
                    <div>
                      <input type="text" class="form-control" value="علة المخصصة" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Bugs infromation successfully Saved</td>
                  <td>
                    <div>
                      <input type="text" class="form-control" value="علة المخصصة" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Timer infromation successfully Deleted</td>
                  <td>
                    <div>
                      <input type="text" class="form-control" value="علة المخصصة" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Bugs infromation successfully Deleted</td>
                  <td>
                    <div>
                      <input type="text" class="form-control" value="علة المخصصة" />
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Bug Updated</td>
                  <td>
                    <div>
                      <input type="text" class="form-control" value="علة المخصصة" />
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Edit Language -->
</template>
