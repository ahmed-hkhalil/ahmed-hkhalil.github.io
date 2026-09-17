<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Department</h4>
            <h6>Manage your departments</h6>
          </div>
        </div>
        <ul class="table-top-head">
          <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"
              ><img src="@/assets/img/icons/pdf.svg" alt="img"
            /></a>
          </li>
          <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"
              ><img src="@/assets/img/icons/excel.svg" alt="img"
            /></a>
          </li>
          <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"
              ><i data-feather="printer" class="feather-printer"></i
            ></a>
          </li>
          <li>
            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"
              ><i data-feather="rotate-ccw" class="feather-rotate-ccw"></i
            ></a>
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
        <div class="page-btn">
          <a
            href="javascript:void(0);"
            class="btn btn-added"
            data-bs-toggle="modal"
            data-bs-target="#add-department"
            ><vue-feather type="plus-circle" class="me-2"></vue-feather>Add New
            Department</a
          >
        </div>
      </div>
      <!-- /product list -->
      <div class="card">
        <div class="card-body pb-0">
          <div class="table-top table-top-new">
            <div class="search-set mb-0">
              <div class="total-employees">
                <h6>
                  <i data-feather="users" class="feather-user"></i>Total Employees
                  <span>21</span>
                </h6>
              </div>
              <div class="search-input">
                <a href="" class="btn btn-searchset"
                  ><i data-feather="search" class="feather-search"></i
                ></a>
                <input type="search" class="form-control" />
              </div>
            </div>
            <div class="search-path d-flex align-items-center search-path-new">
              <div class="d-flex">
                <a
                  class="btn btn-filter"
                  id="filter_search"
                  v-on:click="filter = !filter"
                  :class="{ setclose: filter }"
                >
                  <vue-feather type="filter" class="filter-icon"></vue-feather>
                  <span><img src="@/assets/img/icons/closes.svg" alt="img" /></span>
                </a>
                <router-link to="department-list" class="btn-list"
                  ><vue-feather type="list" class="list"></vue-feather
                ></router-link>
                <router-link to="department-grid" class="btn-grid active"
                  ><vue-feather type="grid" class="grid"></vue-feather
                ></router-link>
              </div>
              <div class="form-sort">
                <vue-feather type="sliders" class="info-img"></vue-feather>
                <vue-select
                  :options="SortDepa"
                  id="sortdepa"
                  placeholder="Sort by Date"
                />
              </div>
            </div>
          </div>
          <!-- /Filter -->
          <div
            class="card"
            :style="{ display: filter ? 'block' : 'none' }"
            id="filter_inputs"
          >
            <div class="card-body pb-0">
              <div class="row">
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="file-text" class="info-img"></vue-feather>
                    <vue-select
                      :options="Choosedepa"
                      id="choosedepa"
                      placeholder="Choose Department"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                  <div class="input-blocks">
                    <vue-feather type="users" class="info-img"></vue-feather>
                    <vue-select
                      :options="ChooseHOD"
                      id="choosehod"
                      placeholder="Choose HOD"
                    />
                  </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12 ms-auto">
                  <div class="input-blocks">
                    <a class="btn btn-filters ms-auto">
                      <i data-feather="search" class="feather-search"></i> Search
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Filter -->
        </div>
      </div>
      <!-- /product list -->

      <div class="employee-grid-widget">
        <div class="row">
          <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
            <div class="employee-grid-profile">
              <div class="profile-head">
                <div class="dep-name">
                  <h5 class="active">UI/UX</h5>
                </div>
                <div class="profile-head-action">
                  <div class="dropdown profile-action">
                    <a
                      href="javascript:void(0);"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><vue-feather
                        type="more-vertical"
                        class="feather-user"
                      ></vue-feather
                    ></a>
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item"
                          data-bs-toggle="modal"
                          data-bs-target="#edit-department"
                          ><vue-feather type="edit" class="info-img"></vue-feather>Edit</a
                        >
                      </li>
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item confirm-text mb-0"
                          ><vue-feather type="trash-2" class="info-img"></vue-feather
                          >Delete</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="profile-info department-profile-info">
                <div class="profile-pic">
                  <img src="@/assets/img/users/user-01.jpg" alt="" />
                </div>
                <h4>Mitchum Daniel</h4>
              </div>
              <ul class="team-members">
                <li>Total Members: 07</li>
                <li>
                  <ul>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-01.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-02.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-03.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-04.jpg" alt="" /><span
                          >+4</span
                        ></a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
            <div class="employee-grid-profile">
              <div class="profile-head">
                <div class="dep-name">
                  <h5 class="active">HR</h5>
                </div>
                <div class="profile-head-action">
                  <div class="dropdown profile-action">
                    <a
                      href="javascript:void(0);"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><vue-feather
                        type="more-vertical"
                        class="feather-user"
                      ></vue-feather
                    ></a>
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item"
                          data-bs-toggle="modal"
                          data-bs-target="#edit-department"
                          ><vue-feather type="edit" class="info-img"></vue-feather>Edit</a
                        >
                      </li>
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item confirm-text mb-0"
                          ><vue-feather type="trash-2" class="info-img"></vue-feather
                          >Delete</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="profile-info department-profile-info">
                <div class="profile-pic">
                  <img src="@/assets/img/users/user-02.jpg" alt="" />
                </div>
                <h4>Susan Lopez</h4>
              </div>
              <ul class="team-members">
                <li>Total Members: 05</li>
                <li>
                  <ul>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-03.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-04.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-05.jpg" alt="" /><span
                          >+3</span
                        ></a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
            <div class="employee-grid-profile">
              <div class="profile-head">
                <div class="dep-name">
                  <h5 class="inactive">Admin</h5>
                </div>
                <div class="profile-head-action">
                  <div class="dropdown profile-action">
                    <a
                      href="javascript:void(0);"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><vue-feather
                        type="more-vertical"
                        class="feather-user"
                      ></vue-feather
                    ></a>
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item"
                          data-bs-toggle="modal"
                          data-bs-target="#edit-department"
                          ><vue-feather type="edit" class="info-img"></vue-feather>Edit</a
                        >
                      </li>
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item confirm-text mb-0"
                          ><vue-feather type="trash-2" class="info-img"></vue-feather
                          >Delete</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="profile-info department-profile-info">
                <div class="profile-pic">
                  <img src="@/assets/img/users/user-03.jpg" alt="" />
                </div>
                <h4>Robert Grossman</h4>
              </div>
              <ul class="team-members">
                <li>Total Members: 06</li>
                <li>
                  <ul>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-03.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-04.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-06.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-05.jpg" alt="" /><span
                          >+3</span
                        ></a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
            <div class="employee-grid-profile">
              <div class="profile-head">
                <div class="dep-name">
                  <h5 class="active">Admin</h5>
                </div>
                <div class="profile-head-action">
                  <div class="dropdown profile-action">
                    <a
                      href="javascript:void(0);"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><vue-feather
                        type="more-vertical"
                        class="feather-user"
                      ></vue-feather
                    ></a>
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item"
                          data-bs-toggle="modal"
                          data-bs-target="#edit-department"
                          ><vue-feather type="edit" class="info-img"></vue-feather>Edit</a
                        >
                      </li>
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item confirm-text mb-0"
                          ><vue-feather type="trash-2" class="info-img"></vue-feather
                          >Delete</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="profile-info department-profile-info">
                <div class="profile-pic">
                  <img src="@/assets/img/users/user-06.jpg" alt="" />
                </div>
                <h4>Janet Hembre</h4>
              </div>
              <ul class="team-members">
                <li>Total Members: 04</li>
                <li>
                  <ul>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-03.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-04.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-06.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-05.jpg" alt="" /><span
                          >+3</span
                        ></a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
            <div class="employee-grid-profile">
              <div class="profile-head">
                <div class="dep-name">
                  <h5 class="inactive">Technician</h5>
                </div>
                <div class="profile-head-action">
                  <div class="dropdown profile-action">
                    <a
                      href="javascript:void(0);"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><vue-feather
                        type="more-vertical"
                        class="feather-user"
                      ></vue-feather
                    ></a>
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item"
                          data-bs-toggle="modal"
                          data-bs-target="#edit-department"
                          ><vue-feather type="edit" class="info-img"></vue-feather>Edit</a
                        >
                      </li>
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item confirm-text mb-0"
                          ><vue-feather type="trash-2" class="info-img"></vue-feather
                          >Delete</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="profile-info department-profile-info">
                <div class="profile-pic">
                  <img src="@/assets/img/users/user-04.jpg" alt="" />
                </div>
                <h4>Russell Belle</h4>
              </div>
              <ul class="team-members">
                <li>Total Members: 08</li>
                <li>
                  <ul>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-03.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-04.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-06.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-05.jpg" alt="" /><span
                          >+3</span
                        ></a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
            <div class="employee-grid-profile">
              <div class="profile-head">
                <div class="dep-name">
                  <h5 class="active">Support</h5>
                </div>
                <div class="profile-head-action">
                  <div class="dropdown profile-action">
                    <a
                      href="javascript:void(0);"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><vue-feather
                        type="more-vertical"
                        class="feather-user"
                      ></vue-feather
                    ></a>
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item"
                          data-bs-toggle="modal"
                          data-bs-target="#edit-department"
                          ><vue-feather type="edit" class="info-img"></vue-feather>Edit</a
                        >
                      </li>
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item confirm-text mb-0"
                          ><vue-feather type="trash-2" class="info-img"></vue-feather
                          >Delete</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="profile-info department-profile-info">
                <div class="profile-pic">
                  <img src="@/assets/img/users/user-05.jpg" alt="" />
                </div>
                <h4>Edward K. Muniz</h4>
              </div>
              <ul class="team-members">
                <li>Total Members: 04</li>
                <li>
                  <ul>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-03.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-04.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-06.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-05.jpg" alt="" /><span
                          >+3</span
                        ></a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
            <div class="employee-grid-profile">
              <div class="profile-head">
                <div class="dep-name">
                  <h5 class="inactive">Engineering</h5>
                </div>
                <div class="profile-head-action">
                  <div class="dropdown profile-action">
                    <a
                      href="javascript:void(0);"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><vue-feather
                        type="more-vertical"
                        class="feather-user"
                      ></vue-feather
                    ></a>
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item"
                          data-bs-toggle="modal"
                          data-bs-target="#edit-department"
                          ><vue-feather type="edit" class="info-img"></vue-feather>Edit</a
                        >
                      </li>
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item confirm-text mb-0"
                          ><vue-feather type="trash-2" class="info-img"></vue-feather
                          >Delete</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="profile-info department-profile-info">
                <div class="profile-pic">
                  <img src="@/assets/img/users/user-07.jpg" alt="" />
                </div>
                <h4>Susan Moore</h4>
              </div>
              <ul class="team-members">
                <li>Total Members: 10</li>
                <li>
                  <ul>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-03.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-04.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-06.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-09.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-05.jpg" alt="" /><span
                          >+6</span
                        ></a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
            <div class="employee-grid-profile">
              <div class="profile-head">
                <div class="dep-name">
                  <h5 class="inactive">Admin</h5>
                </div>
                <div class="profile-head-action">
                  <div class="dropdown profile-action">
                    <a
                      href="javascript:void(0);"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><vue-feather
                        type="more-vertical"
                        class="feather-user"
                      ></vue-feather
                    ></a>
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item"
                          data-bs-toggle="modal"
                          data-bs-target="#edit-department"
                          ><vue-feather type="edit" class="info-img"></vue-feather>Edit</a
                        >
                      </li>
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item confirm-text mb-0"
                          ><vue-feather type="trash-2" class="info-img"></vue-feather
                          >Delete</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="profile-info department-profile-info">
                <div class="profile-pic">
                  <img src="@/assets/img/users/user-08.jpg" alt="" />
                </div>
                <h4>Lance Jackson</h4>
              </div>
              <ul class="team-members">
                <li>Total Members: 03</li>
                <li>
                  <ul>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-03.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-04.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-06.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-05.jpg" alt="" /><span
                          >+3</span
                        ></a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
            <div class="employee-grid-profile">
              <div class="profile-head">
                <div class="dep-name">
                  <h5 class="inactive">PHP Development</h5>
                </div>
                <div class="profile-head-action">
                  <div class="dropdown profile-action">
                    <a
                      href="javascript:void(0);"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><vue-feather
                        type="more-vertical"
                        class="feather-user"
                      ></vue-feather
                    ></a>
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item"
                          data-bs-toggle="modal"
                          data-bs-target="#edit-department"
                          ><vue-feather type="edit" class="info-img"></vue-feather>Edit</a
                        >
                      </li>
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item confirm-text mb-0"
                          ><vue-feather type="trash-2" class="info-img"></vue-feather
                          >Delete</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="profile-info department-profile-info">
                <div class="profile-pic">
                  <img src="@/assets/img/users/user-11.jpg" alt="" />
                </div>
                <h4>Mitchum Daniel</h4>
              </div>
              <ul class="team-members">
                <li>Total Members: 09</li>
                <li>
                  <ul>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-03.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-04.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-06.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-05.jpg" alt="" /><span
                          >+3</span
                        ></a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
            <div class="employee-grid-profile">
              <div class="profile-head">
                <div class="dep-name">
                  <h5 class="active">React</h5>
                </div>
                <div class="profile-head-action">
                  <div class="dropdown profile-action">
                    <a
                      href="javascript:void(0);"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><vue-feather
                        type="more-vertical"
                        class="feather-user"
                      ></vue-feather
                    ></a>
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item"
                          data-bs-toggle="modal"
                          data-bs-target="#edit-department"
                          ><vue-feather type="edit" class="info-img"></vue-feather>Edit</a
                        >
                      </li>
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item confirm-text mb-0"
                          ><vue-feather type="trash-2" class="info-img"></vue-feather
                          >Delete</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="profile-info department-profile-info">
                <div class="profile-pic">
                  <img src="@/assets/img/users/user-12.jpg" alt="" />
                </div>
                <h4>Susan Moore</h4>
              </div>
              <ul class="team-members">
                <li>Total Members: 07</li>
                <li>
                  <ul>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-03.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-04.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-06.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-05.jpg" alt="" /><span
                          >+3</span
                        ></a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
            <div class="employee-grid-profile">
              <div class="profile-head">
                <div class="dep-name">
                  <h5 class="active">Angular</h5>
                </div>
                <div class="profile-head-action">
                  <div class="dropdown profile-action">
                    <a
                      href="javascript:void(0);"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><vue-feather
                        type="more-vertical"
                        class="feather-user"
                      ></vue-feather
                    ></a>
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item"
                          data-bs-toggle="modal"
                          data-bs-target="#edit-department"
                          ><vue-feather type="edit" class="info-img"></vue-feather>Edit</a
                        >
                      </li>
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item confirm-text mb-0"
                          ><vue-feather type="trash-2" class="info-img"></vue-feather
                          >Delete</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="profile-info department-profile-info">
                <div class="profile-pic">
                  <img src="@/assets/img/users/user-09.jpg" alt="" />
                </div>
                <h4>Lance Jackson</h4>
              </div>
              <ul class="team-members">
                <li>Total Members: 07</li>
                <li>
                  <ul>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-03.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-04.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-06.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-05.jpg" alt="" /><span
                          >+3</span
                        ></a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
            <div class="employee-grid-profile">
              <div class="profile-head">
                <div class="dep-name">
                  <h5 class="active">NodeJS</h5>
                </div>
                <div class="profile-head-action">
                  <div class="dropdown profile-action">
                    <a
                      href="javascript:void(0);"
                      class="action-icon dropdown-toggle"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      ><vue-feather
                        type="more-vertical"
                        class="feather-user"
                      ></vue-feather
                    ></a>
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item"
                          data-bs-toggle="modal"
                          data-bs-target="#edit-department"
                          ><vue-feather type="edit" class="info-img"></vue-feather>Edit</a
                        >
                      </li>
                      <li>
                        <a
                          href="javascript:void(0);"
                          class="dropdown-item confirm-text mb-0"
                          ><vue-feather type="trash-2" class="info-img"></vue-feather
                          >Delete</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="profile-info department-profile-info">
                <div class="profile-pic">
                  <img src="@/assets/img/users/user-13.jpg" alt="" />
                </div>
                <h4>Robert Grossman</h4>
              </div>
              <ul class="team-members">
                <li>Total Members: 07</li>
                <li>
                  <ul>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-03.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-04.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-06.jpg" alt=""
                      /></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"
                        ><img src="@/assets/img/users/user-05.jpg" alt="" /><span
                          >+3</span
                        ></a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row custom-pagination">
          <div class="col-md-12">
            <div class="paginations d-flex justify-content-end mb-3">
              <span><i class="fas fa-chevron-left"></i></span>
              <ul class="d-flex align-items-center page-wrap">
                <li>
                  <a href="javascript:void(0);" class="active"> 1 </a>
                </li>
                <li>
                  <a href="javascript:void(0);"> 2 </a>
                </li>
                <li>
                  <a href="javascript:void(0);"> 3 </a>
                </li>
                <li>
                  <a href="javascript:void(0);"> 4 </a>
                </li>
              </ul>
              <span><i class="fas fa-chevron-right"></i></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <department-grid-modal></department-grid-modal>
</template>
<script>
export default {
  data() {
    return {
      SortDepa: ["Sort by Date", "Newest", "Oldest"],
      Choosedepa: ["Choose Department", "UI/UX", "HR", "Admin", "Engineering"],
      ChooseHOD: ["Choose HOD", "Mitchum Daniel", "Susan Lopez"],
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
