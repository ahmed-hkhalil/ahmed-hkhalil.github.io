<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>

  <div class="page-wrapper notes-page-wrapper" :class="{ 'notes-tag-left': isNotesTagLeft }">
    <div class="content">
      <div class="page-header page-add-notes">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Todo</h4>
            <h6>Manage your tasks</h6>
          </div>
          <a id="toggle_btn2" class="notes-tog" @click="toggleNotes" href="javascript:void(0);">
            <i class="fas fa-chevron-left"></i>
          </a>
        </div>
        <div class="d-flex flex-sm-row flex-column align-items-sm-center align-items-start">
          <div class="input-block add-lists todo-inbox-check">
            <label class="checkboxs">
              <input type="checkbox" checked />
              <span class="checkmarks"></span>Mark all as Complete
            </label>
          </div>
          <div class="form-sort me-2 mb-sm-0 mb-3">
            <vue-feather type="sliders" class="info-img"></vue-feather>
            <vue-select :options="Ascending" id="ascending" placeholder="Sort by Date" />
          </div>
          <ul class="table-top-head">
            <li>
              <a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><vue-feather type="rotate-ccw"
                  class="rotate-ccw"></vue-feather></a>
            </li>
            <li>
              <a ref="collapseHeader" data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse"
                @click="toggleCollapse">
                <i data-feather="chevron-up" class="feather-chevron-up"></i>
              </a>
            </li>
          </ul>
          <div class="page-btn">
            <a href="javascript:void(0);" class="btn btn-added" data-bs-toggle="modal"
              data-bs-target="#note-units"><vue-feather type="plus-circle" class="me-2"></vue-feather> Add Task
            </a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xl-3 col-md-12 sidebars-right theiaStickySidebar section-bulk-widget"
          :class="{ 'section-notes-dashboard': isSectionNotesDashboard }">
          <div class="notes-dash">
            <div class="notes-top-head">
              <h5>
                <vue-feather type="file-text" class="file-text"></vue-feather> Todo List
              </h5>
            </div>
            <div class="notes-top-head-submenu">
              <div class="nav flex-column nav-pills todo-inbox" id="v-pills-tab" role="tablist"
                aria-orientation="vertical">
                <button class="nav-link todo-tab todo-inbox active" id="v-pills-profile-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                  aria-selected="true">
                  <vue-feather type="inbox" class="inbox"></vue-feather>Inbox
                  <span class="ms-2">1</span>
                </button>
                <button class="nav-link todo-tab todo-inbox" id="v-pills-home-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
                  aria-selected="false">
                  <vue-feather type="check-circle" class="check-circle"></vue-feather>Done
                </button>
                <button class="nav-link todo-tab-btn todo-inbox" id="v-pills-messages-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                  aria-selected="false">
                  <vue-feather type="star" class="star"></vue-feather> Important
                </button>
                <button class="nav-link todo-tab todo-inbox mb-0" id="v-pills-settings-tab" data-bs-toggle="pill"
                  data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                  aria-selected="false">
                  <vue-feather type="trash-2" class="trash-2"></vue-feather>Trash
                </button>
              </div>
            </div>
            <div class="content-submenu-tag">
              <h6>Tags</h6>
              <ul class="tags-list">
                <li class="personal">
                  <a href="javascript:void(0);">
                    <span><i class="fas fa-square"></i></span>
                    Pending
                  </a>
                </li>
                <li class="social">
                  <a href="javascript:void(0);">
                    <span><i class="fas fa-square"></i></span>
                    Onhold
                  </a>
                </li>
                <li class="public">
                  <a href="javascript:void(0);">
                    <span><i class="fas fa-square"></i></span>
                    Inprogress
                  </a>
                </li>

                <li class="work">
                  <a href="javascript:void(0);">
                    <span><i class="fas fa-square"></i></span>
                    Done
                  </a>
                </li>
              </ul>

              <h6>Priority</h6>
              <ul class="priority-list">
                <li class="medium">
                  <a href="javascript:void(0);">
                    <span><i class="fas fa-square"></i></span>
                    Medium
                  </a>
                </li>
                <li class="high">
                  <a href="javascript:void(0);">
                    <span><i class="fas fa-square"></i></span>
                    High
                  </a>
                </li>
                <li class="low">
                  <a href="javascript:void(0);">
                    <span><i class="fas fa-square"></i></span>
                    Low
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-xl-9 budget-role-notes" :class="{ 'budgeted-role-notes': isBudgetedRoleNotes }">
          <div class="section-bulk-wrap">
            <div class="bulk-action-type">
              <div class="form-sort select-bluk">
                <vue-select :options="Actions" id="actions" placeholder="Bulk Actions" />
              </div>
              <a href="" class="btn btn-added">Apply</a>
              <div class="search-set">
                <div class="search-input">
                  <a href="" class="btn btn-searchset"><vue-feather type="search" class="search"></vue-feather></a>
                  <div id="DataTables_Table_0_filter" class="dataTables_filter">
                    <label>
                      <input type="search" class="form-control form-control-sm" placeholder="Search" /></label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-sort">
              <i class="feather feather-filter"></i>
              <vue-select :options="Recent" id="recent" placeholder="Recent" />
            </div>
          </div>
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade active show" id="v-pills-profile" role="tabpanel"
              aria-labelledby="v-pills-profile-tab">
              <div class="sections-notes-slider">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="accordion-card-one accordion todo-accordion" id="accordionExample">
                      <div class="accordion-item">
                        <div class="accordion-header" id="headingOne">
                          <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                            aria-controls="collapseOne">
                            <div class="notes-content todo-today-content">
                              <div class="notes-header todo-today-header">
                                <span><vue-feather type="calendar" class="calendar"></vue-feather></span>
                                <h3>Today</h3>
                                <h6>1</h6>
                              </div>
                            </div>
                            <div class="todo-drop-down">
                              <a href="javascript:void(0);">
                                <span><i class="fas fa-chevron-down"></i></span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                          data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            <div class="todo-widget">
                              <div class="todo-wrapper-list">
                                <div class="input-block add-lists todo-inbox-check todo-inbox-check-list">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                  </label>
                                  <div class="todo-wrapper-list-content">
                                    <h4>Meeting with Shaun Park at 4:50pm</h4>
                                    <p>Discuss about new project</p>
                                  </div>
                                </div>
                                <div class="notes-card-body d-flex align-items-center">
                                  <p class="badge bg-outline-danger badge-lg me-2 mb-0">
                                    <i class="fas fa-circle"></i> High
                                  </p>
                                  <p class="badge bg-outline-secondary badge-lg me-2 mb-0">
                                    New
                                  </p>
                                </div>
                                <div class="todo-profile d-flex align-items-center">
                                  <img src="@/assets/img/users/user-24.jpg" alt="Img" class="img-fluid" />
                                  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu notes-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                      data-bs-target="#edit-note-units"><span><vue-feather
                                          type="edit"></vue-feather></span>Edit</a>
                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                      data-bs-target="#delete-note-units"><span><vue-feather
                                          type="trash-2"></vue-feather></span>Delete</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><span><vue-feather
                                          type="star"></vue-feather></span>Not Important</a>
                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                      data-bs-target="#view-note-units"><span><vue-feather
                                          type="eye"></vue-feather></span>View</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-card-one accordion todo-accordion" id="accordionExample2">
                      <div class="accordion-item">
                        <div class="accordion-header" id="headingTwo">
                          <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                            aria-controls="collapseTwo">
                            <div class="notes-content todo-today-content">
                              <div class="notes-header todo-today-header">
                                <span><vue-feather type="calendar" class="calendar"></vue-feather></span>
                                <h3>Yesterday</h3>
                              </div>
                              <div class="todo-drop-down">
                                <a href="javascript:void(0);">
                                  <span><i class="fas fa-chevron-down"></i></span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                          data-bs-parent="#accordionExample2">
                          <div class="accordion-body">
                            <div class="todo-widget">
                              <div class="todo-wrapper-list">
                                <div class="input-block add-lists todo-inbox-check todo-inbox-check-list">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                  </label>
                                  <div class="todo-wrapper-list-content">
                                    <h4>Team meet at Starbucks</h4>
                                    <p>Identify the implementation team</p>
                                  </div>
                                </div>
                                <div class="notes-card-body d-flex align-items-center">
                                  <p class="badge bg-outline-danger badge-lg me-2 mb-0">
                                    <i class="fas fa-circle"></i> High
                                  </p>
                                  <p class="badge bg-outline-info badge-lg me-2 mb-0">
                                    Pending
                                  </p>
                                </div>
                                <div class="todo-profile d-flex align-items-center">
                                  <a href="javascript:void(0);" class="todo-star star-todo-inbox">
                                    <span>
                                      <vue-feather type="star" class="star me-3"></vue-feather>
                                    </span>
                                  </a>
                                  <img src="@/assets/img/avatar/avatar-2.jpg" alt="Img" class="img-fluid" />
                                  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu notes-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                      data-bs-target="#edit-note-units"><span><vue-feather
                                          type="edit"></vue-feather></span>Edit</a>
                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                      data-bs-target="#delete-note-units"><span><vue-feather
                                          type="trash-2"></vue-feather></span>Delete</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><span><vue-feather
                                          type="star"></vue-feather></span>Not Important</a>
                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                      data-bs-target="#view-note-units"><span><vue-feather
                                          type="eye"></vue-feather></span>View</a>
                                  </div>
                                </div>
                              </div>
                              <div class="todo-wrapper-list">
                                <div class="input-block add-lists todo-inbox-check todo-inbox-check-list">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                  </label>
                                  <div class="todo-wrapper-list-content">
                                    <h4>Meet Lisa to discuss project details</h4>
                                    <p>Discuss about additional features</p>
                                  </div>
                                </div>
                                <div class="notes-card-body d-flex align-items-center">
                                  <p class="badge bg-outline-secondary badge-lg me-2 mb-0">
                                    <i class="fas fa-circle"></i> Medium
                                  </p>
                                  <p class="badge bg-outline-warning badge-lg me-2 mb-0">
                                    InProgress
                                  </p>
                                </div>
                                <div class="todo-profile d-flex align-items-center">
                                  <img src="@/assets/img/users/user-11.jpg" alt="Img" class="img-fluid" />
                                  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu notes-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                      data-bs-target="#edit-note-units"><span><vue-feather
                                          type="edit"></vue-feather></span>Edit</a>
                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                      data-bs-target="#delete-note-units"><span><vue-feather
                                          type="trash-2"></vue-feather></span>Delete</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><span><vue-feather
                                          type="star"></vue-feather></span>Not Important</a>
                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                      data-bs-target="#view-note-units"><span><vue-feather
                                          type="eye"></vue-feather></span>View</a>
                                  </div>
                                </div>
                              </div>
                              <div class="todo-wrapper-list">
                                <div class="input-block add-lists todo-inbox-check todo-inbox-check-list">
                                  <label class="checkboxs">
                                    <input type="checkbox" checked />
                                    <span class="checkmarks"></span>
                                  </label>
                                  <div class="todo-wrapper-list-content todo-strike-content">
                                    <h4>Download Complete</h4>
                                    <p>
                                      Install console machines and prerequiste softwares
                                    </p>
                                  </div>
                                </div>
                                <div class="notes-card-body d-flex align-items-center">
                                  <p class="badge bg-outline-warning badge-lg me-2 mb-0">
                                    <i class="fas fa-circle"></i> Low
                                  </p>
                                  <p class="badge bg-outline-success badge-lg me-2 mb-0">
                                    Completed
                                  </p>
                                </div>
                                <div class="todo-profile d-flex align-items-center">
                                  <img src="@/assets/img/users/user-02.jpg" alt="Img" class="img-fluid" />
                                  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu notes-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                      data-bs-target="#edit-note-units"><span><vue-feather
                                          type="edit"></vue-feather></span>Edit</a>
                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                      data-bs-target="#delete-note-units"><span><vue-feather
                                          type="trash-2"></vue-feather></span>Delete</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><span><vue-feather
                                          type="star"></vue-feather></span>Not Important</a>
                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                      data-bs-target="#view-note-units"><span><vue-feather
                                          type="eye"></vue-feather></span>View</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-card-one accordion todo-accordion" id="accordionExample4">
                      <div class="accordion-item">
                        <div class="accordion-header" id="headingFour">
                          <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                            aria-controls="collapseFour">
                            <div class="notes-content todo-today-content">
                              <div class="notes-header todo-today-header">
                                <span><vue-feather type="calendar" class="calendar"></vue-feather></span>
                                <h3>25/07/2023</h3>
                              </div>
                              <div class="todo-drop-down">
                                <a href="javascript:void(0);">
                                  <span><i class="fas fa-chevron-down"></i></span>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour"
                          data-bs-parent="#accordionExample4">
                          <div class="accordion-body">
                            <div class="todo-widget">
                              <div class="todo-wrapper-list">
                                <div class="input-block add-lists todo-inbox-check todo-inbox-check-list">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                  </label>
                                  <div class="todo-wrapper-list-content">
                                    <h4>New User Registered</h4>
                                    <p>Add new user</p>
                                  </div>
                                </div>
                                <div class="notes-card-body d-flex align-items-center">
                                  <p class="badge bg-outline-danger badge-lg me-2 mb-0">
                                    <i class="fas fa-circle"></i> High
                                  </p>
                                  <p class="badge bg-outline-info badge-lg me-2 mb-0">
                                    Pending
                                  </p>
                                </div>
                                <div class="todo-profile d-flex align-items-center">
                                  <img src="@/assets/img/users/user-25.jpg" alt="Img" class="img-fluid" />
                                  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu notes-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                      data-bs-target="#edit-note-units"><span><vue-feather
                                          type="edit"></vue-feather></span>Edit</a>
                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                      data-bs-target="#delete-note-units"><span><vue-feather
                                          type="trash-2"></vue-feather></span>Delete</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><span><vue-feather
                                          type="star"></vue-feather></span>Not Important</a>
                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                      data-bs-target="#view-note-units"><span><vue-feather
                                          type="eye"></vue-feather></span>View</a>
                                  </div>
                                </div>
                              </div>
                              <div class="todo-wrapper-list">
                                <div class="input-block add-lists todo-inbox-check todo-inbox-check-list">
                                  <label class="checkboxs">
                                    <input type="checkbox" />
                                    <span class="checkmarks"></span>
                                  </label>
                                  <div class="todo-wrapper-list-content">
                                    <h4>Fix issues in new project</h4>
                                    <p>Unit test had done and bug fixed</p>
                                  </div>
                                </div>
                                <div class="notes-card-body d-flex align-items-center">
                                  <p class="badge bg-outline-danger badge-lg me-2 mb-0">
                                    <i class="fas fa-circle"></i> High
                                  </p>
                                  <p class="badge bg-outline-warning badge-lg me-2 mb-0">
                                    InProgress
                                  </p>
                                </div>
                                <div class="todo-profile d-flex align-items-center">
                                  <img src="@/assets/img/users/user-04.jpg" alt="Img" class="img-fluid" />
                                  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v"></i>
                                  </a>
                                  <div class="dropdown-menu notes-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                      data-bs-target="#edit-note-units"><span><vue-feather
                                          type="edit"></vue-feather></span>Edit</a>
                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                      data-bs-target="#delete-note-units"><span><vue-feather
                                          type="trash-2"></vue-feather></span>Delete</a>
                                    <a href="javascript:void(0);" class="dropdown-item"><span><vue-feather
                                          type="star"></vue-feather></span>Not Important</a>
                                    <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                                      data-bs-target="#view-note-units"><span><vue-feather
                                          type="eye"></vue-feather></span>View</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <div class="sections-notes-slider">
                <div class="row">
                  <div class="todo-widget">
                    <div class="todo-wrapper-list">
                      <div class="input-block add-lists todo-inbox-check todo-inbox-check-list">
                        <label class="checkboxs">
                          <input type="checkbox" />
                          <span class="checkmarks"></span>
                        </label>
                        <div class="todo-wrapper-list-content">
                          <h4>Team meet at Starbucks</h4>
                          <p>Identify the implementation team</p>
                        </div>
                      </div>
                      <div class="notes-card-body d-flex align-items-center">
                        <p class="badge bg-outline-danger badge-lg me-2 mb-0">
                          <i class="fas fa-circle"></i> High
                        </p>
                        <p class="badge bg-outline-info badge-lg me-2 mb-0">Pending</p>
                      </div>
                      <div class="todo-profile d-flex align-items-center">
                        <img src="@/assets/img/users/user-03.jpg" alt="Img" class="img-fluid" />
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#edit-note-units"><span><vue-feather type="edit"></vue-feather></span>Edit</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><vue-feather
                                type="trash-2"></vue-feather></span>Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><vue-feather
                                type="star"></vue-feather></span>Not
                            Important</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#view-note-units"><span><vue-feather type="eye"></vue-feather></span>View</a>
                        </div>
                      </div>
                    </div>
                    <div class="todo-wrapper-list">
                      <div class="input-block add-lists todo-inbox-check todo-inbox-check-list">
                        <label class="checkboxs">
                          <input type="checkbox" />
                          <span class="checkmarks"></span>
                        </label>
                        <div class="todo-wrapper-list-content">
                          <h4>Meet Lisa to discuss project details</h4>
                          <p>Discuss about additional features</p>
                        </div>
                      </div>
                      <div class="notes-card-body d-flex align-items-center">
                        <p class="badge bg-outline-secondary badge-lg me-2 mb-0">
                          <i class="fas fa-circle"></i> Medium
                        </p>
                        <p class="badge bg-outline-warning badge-lg me-2 mb-0">
                          InProgress
                        </p>
                      </div>
                      <div class="todo-profile d-flex align-items-center">
                        <img src="@/assets/img/users/user-04.jpg" alt="Img" class="img-fluid" />
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#edit-note-units"><span><vue-feather type="edit"></vue-feather></span>Edit</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><vue-feather
                                type="trash-2"></vue-feather></span>Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><vue-feather
                                type="star"></vue-feather></span>Not
                            Important</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#view-note-units"><span><vue-feather type="eye"></vue-feather></span>View</a>
                        </div>
                      </div>
                    </div>
                    <div class="todo-wrapper-list">
                      <div class="input-block add-lists todo-inbox-check todo-inbox-check-list">
                        <label class="checkboxs active">
                          <input type="checkbox" />
                          <span class="checkmarks"></span>
                        </label>
                        <div class="todo-wrapper-list-content todo-strike-content">
                          <h4>Download Complete</h4>
                          <p>Install console machines and prerequiste softwares</p>
                        </div>
                      </div>
                      <div class="notes-card-body d-flex align-items-center">
                        <p class="badge bg-outline-warning badge-lg me-2 mb-0">
                          <i class="fas fa-circle"></i> Low
                        </p>
                        <p class="badge bg-outline-success badge-lg me-2 mb-0">
                          Completed
                        </p>
                      </div>
                      <div class="todo-profile d-flex align-items-center">
                        <img src="@/assets/img/users/user-05.jpg" alt="Img" class="img-fluid me-0" />
                        <a href="javascript:void(0);" class="inbox-call-profile">
                          Calls
                        </a>
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#edit-note-units"><span><vue-feather type="edit"></vue-feather></span>Edit</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><vue-feather
                                type="trash-2"></vue-feather></span>Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><vue-feather
                                type="star"></vue-feather></span>Not
                            Important</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#view-note-units"><span><vue-feather type="eye"></vue-feather></span>View</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
              <div class="sections-notes-slider">
                <div class="row">
                  <div class="todo-widget">
                    <div class="todo-wrapper-list">
                      <div class="input-block add-lists todo-inbox-check todo-inbox-check-list">
                        <label class="checkboxs">
                          <input type="checkbox" />
                          <span class="checkmarks"></span>
                        </label>
                        <div class="todo-wrapper-list-content">
                          <h4>Team meet at Starbucks</h4>
                          <p>Identify the implementation team</p>
                        </div>
                      </div>
                      <div class="notes-card-body d-flex align-items-center">
                        <p class="badge bg-outline-danger badge-lg me-2 mb-0">
                          <i class="fas fa-circle"></i> High
                        </p>
                        <p class="badge bg-outline-info badge-lg me-2 mb-0">Pending</p>
                      </div>
                      <div class="todo-profile d-flex align-items-center">
                        <a href="javascript:void(0);" class="todo-star">
                          <span>
                            <i class="fas fa-star me-3"></i>
                          </span>
                        </a>
                        <img src="@/assets/img/users/user-05.jpg" alt="Img" class="img-fluid" />
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#edit-note-units"><span><vue-feather type="edit"></vue-feather></span>Edit</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><vue-feather
                                type="trash-2"></vue-feather></span>Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><vue-feather
                                type="star"></vue-feather></span>Not
                            Important</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#view-note-units"><span><vue-feather type="eye"></vue-feather></span>View</a>
                        </div>
                      </div>
                    </div>
                    <div class="todo-wrapper-list">
                      <div class="input-block add-lists todo-inbox-check todo-inbox-check-list">
                        <label class="checkboxs">
                          <input type="checkbox" />
                          <span class="checkmarks"></span>
                        </label>
                        <div class="todo-wrapper-list-content">
                          <h4>Meet Lisa to discuss project details</h4>
                          <p>Discuss about additional features</p>
                        </div>
                      </div>
                      <div class="notes-card-body d-flex align-items-center">
                        <p class="badge bg-outline-secondary badge-lg me-2 mb-0">
                          <i class="fas fa-circle"></i> Medium
                        </p>
                        <p class="badge bg-outline-warning badge-lg me-2 mb-0">
                          InProgress
                        </p>
                      </div>
                      <div class="todo-profile d-flex align-items-center">
                        <img src="@/assets/img/users/user-06.jpg" alt="Img" class="img-fluid" />
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#edit-note-units"><span><vue-feather type="edit"></vue-feather></span>Edit</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><vue-feather
                                type="trash-2"></vue-feather></span>Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><vue-feather
                                type="star"></vue-feather></span>Not
                            Important</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#view-note-units"><span><vue-feather type="eye"></vue-feather></span>View</a>
                        </div>
                      </div>
                    </div>
                    <div class="todo-wrapper-list">
                      <div class="input-block add-lists todo-inbox-check todo-inbox-check-list">
                        <label class="checkboxs active">
                          <input type="checkbox" />
                          <span class="checkmarks"></span>
                        </label>
                        <div class="todo-wrapper-list-content todo-strike-content">
                          <h4>Download Complete</h4>
                          <p>Install console machines and prerequiste softwares</p>
                        </div>
                      </div>
                      <div class="notes-card-body d-flex align-items-center">
                        <p class="badge bg-outline-warning badge-lg me-2 mb-0">
                          <i class="fas fa-circle"></i> Low
                        </p>
                        <p class="badge bg-outline-success badge-lg me-2 mb-0">
                          Completed
                        </p>
                      </div>
                      <div class="todo-profile d-flex align-items-center">
                        <img src="@/assets/img/users/user-07.jpg" alt="Img" class="img-fluid" />
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#edit-note-units"><span><vue-feather type="edit"></vue-feather></span>Edit</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><vue-feather
                                type="trash-2"></vue-feather></span>Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><vue-feather
                                type="star"></vue-feather></span>Not
                            Important</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#view-note-units"><span><vue-feather type="eye"></vue-feather></span>View</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              <div class="sections-notes-slider">
                <div class="row">
                  <div class="todo-widget">
                    <div class="todo-wrapper-list">
                      <div class="input-block add-lists todo-inbox-check todo-inbox-check-list">
                        <label class="checkboxs">
                          <input type="checkbox" />
                          <span class="checkmarks"></span>
                        </label>
                        <div class="todo-wrapper-list-content">
                          <h4>Team meet at Starbucks</h4>
                          <p>Identify the implementation team</p>
                        </div>
                      </div>
                      <div class="notes-card-body d-flex align-items-center">
                        <p class="badge bg-outline-danger badge-lg me-2 mb-0">
                          <i class="fas fa-circle"></i> High
                        </p>
                        <p class="badge bg-outline-info badge-lg me-2 mb-0">Pending</p>
                      </div>
                      <div class="todo-profile d-flex align-items-center">
                        <img src="@/assets/img/users/user-08.jpg" alt="Img" class="img-fluid" />
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item"><span><vue-feather
                                type="edit"></vue-feather></span>Permanent
                            Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><vue-feather
                                type="trash-2"></vue-feather></span>Restore Task</a>
                        </div>
                      </div>
                    </div>
                    <div class="todo-wrapper-list">
                      <div class="input-block add-lists todo-inbox-check todo-inbox-check-list">
                        <label class="checkboxs">
                          <input type="checkbox" />
                          <span class="checkmarks"></span>
                        </label>
                        <div class="todo-wrapper-list-content">
                          <h4>Meet Lisa to discuss project details</h4>
                          <p>Discuss about additional features</p>
                        </div>
                      </div>
                      <div class="notes-card-body d-flex align-items-center">
                        <p class="badge bg-outline-secondary badge-lg me-2 mb-0">
                          <i class="fas fa-circle"></i> Medium
                        </p>
                        <p class="badge bg-outline-warning badge-lg me-2 mb-0">
                          InProgress
                        </p>
                      </div>
                      <div class="todo-profile d-flex align-items-center">
                        <img src="@/assets/img/users/user-09.jpg" alt="Img" class="img-fluid" />
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item"><span><vue-feather
                                type="edit"></vue-feather></span>Permanent
                            Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><vue-feather
                                type="trash-2"></vue-feather></span>Restore Task</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row custom-pagination">
            <div class="col-md-12">
              <div class="paginations d-flex justify-content-end">
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
  </div>
</template>
  
<script>
export default {
  data() {
    return {
      isSectionNotesDashboard: false,
      isBudgetedRoleNotes: false,
      isNotesTagLeft: false,
      Actions: ["Bulk Actions", "Delete Marked", "Unmark All", "Mark All"],
      Recent: ["Recent", "Last Modified", "Last Modified by me"],
      Ascending: [
        "Sort by Date",
        "Ascending",
        "Descending",
        "Recently Viewed",
        "Recently Added",
        "Creation Date",
      ],
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
    toggleNotes() {
      this.isSectionNotesDashboard = !this.isSectionNotesDashboard;
      this.isBudgetedRoleNotes = !this.isBudgetedRoleNotes;
      this.isNotesTagLeft = !this.isNotesTagLeft;
    },
  },
};
</script>
  