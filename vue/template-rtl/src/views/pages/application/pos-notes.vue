<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>

  <div class="page-wrapper notes-page-wrapper" :class="{ 'notes-tag-left': isNotesTagLeft }">
    <div class="content">
      <div class="page-header page-add-notes flex-sm-row flex-column">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Notes</h4>
            <h6 class="mb-0">Manage your notes</h6>
          </div>
          <a id="toggle_btn2" class="notes-tog" @click="toggleNotes" href="javascript:void(0);">
            <i class="fas fa-chevron-left"></i>
          </a>
        </div>
        <div class="d-flex flex-sm-row flex-column align-items-sm-center align-items-start">
          <div class="form-sort ms-2 mb-sm-0 mb-3">
            <vue-feather type="sliders" class="info-img"></vue-feather>
            <vue-select :options="Descending" id="descending" placeholder="Sort by Date" />
          </div>
          <ul class="table-top-head">
            <li>
              <router-link to="/application/notes" data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i
                  data-feather="rotate-ccw" class="feather-rotate-ccw"></i></router-link>
            </li>
            <li>
              <a ref="collapseHeader" data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse"
                @click="toggleCollapse">
                <i data-feather="chevron-up" class="feather-chevron-up"></i>
              </a>
            </li>
          </ul>
          <div class="page-btn">
            <a href="javascript:void(0);" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#note-units"><vue-feather
                type="plus-circle" class="me-2"></vue-feather> Add Note</a>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xl-3 col-md-12 sidebars-right theiaStickySidebar section-bulk-widget"
        :class="{ 'section-notes-dashboard': isSectionNotesDashboard }">
          <div class="stickysidebar">
            <div class="notes-dash">
              <div class="notes-top-head">
                <h5> <vue-feather type="file-text" class="file-text"></vue-feather> Notes</h5>
              </div>
              <div class="notes-top-head-submenu">
                <div class="nav flex-column nav-pills todo-inbox" id="v-pills-tab" role="tablist"
                  aria-orientation="vertical">
                  <button class="nav-link todo-tab todo-inbox active d-flex align-items-center" id="v-pills-profile-tab"
                    data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab"
                    aria-controls="v-pills-profile" aria-selected="true"> <vue-feather type="inbox"
                      class="inbox"></vue-feather>All Notes
                    <span class="ms-auto">
                      <span>2</span>
                    </span>
                  </button>
                  <button class="nav-link todo-tab-btn todo-inbox" id="v-pills-messages-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                    aria-selected="false"> <vue-feather type="star" class="star"></vue-feather> Important</button>
                  <button class="nav-link todo-tab todo-inbox mb-0" id="v-pills-settings-tab" data-bs-toggle="pill"
                    data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                    aria-selected="false"> <vue-feather type="trash-2" class="trash-2"></vue-feather>Trash</button>
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
        </div>

        <div class="col-xl-9 budget-role-notes" :class="{ 'budgeted-role-notes': isBudgetedRoleNotes }">

          <div class="section-bulk-wrap">
            <div class="bulk-action-type">
              <div class="form-sort select-bluk ">
                <vue-select :options="Bulk" id="bulk" placeholder="Bulk Actions" />
              </div>
              <a href="javascript:void(0);" class="btn btn-added">Apply</a>
              <div class="search-set">
                <div class="search-input">
                  <a href="javascript:void(0);" class="btn btn-searchset"><i data-feather="search"
                      class="feather-search"></i></a>
                  <div id="DataTables_Table_0_filter" class="dataTables_filter">
                    <label> <input type="search" class="form-control form-control-sm" placeholder="Search"></label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-sort">
              <vue-select :options="Last" id="last" placeholder="Recent" />
            </div>
          </div>

          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade active show" id="v-pills-profile" role="tabpanel"
              aria-labelledby="v-pills-profile-tab">
              <div class="section-notes-slider">
                <div class="row">
                  <div class="notes-content">
                    <div class="notes-header">
                      <h3>Important Notes </h3>
                    </div>
                    <div class="notes-close">
                      <a href="javascript:void(0);"><i class="fas fa-times"></i> Close </a>
                    </div>
                  </div>
                  <div class="col-md-12" id="notes-important">
                    <notes-carousel></notes-carousel>
                  </div>
                </div>
              </div>
              <div class="section-card-body" id="notes-trash">
                <div class="row">
                  <div class="col-md-4 d-flex">
                    <div class="notes-card notes-card-details w-100">
                      <div class="notes-card-body">
                        <p class="badged medium"><i class="fas fa-circle"></i> Medium</p>
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><i data-feather="star"></i></span>Not
                            Important</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                        </div>
                      </div>
                      <div class="notes-wrap-content">
                        <h4>
                          <a href="javascript:void(0);">
                            Backup Files EOD
                          </a>
                        </h4>
                        <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>
                          25 Jul 2023</p>
                        <p>Project files should be took backup before end of the day.</p>
                      </div>
                      <div class="notes-slider-widget notes-widget-profile">
                        <div class="notes-logo">
                          <a href="javascript:void(0);">
                            <span>
                              <img src="@/assets/img/users/user-26.jpg" alt="Profile" class="img-fluid">
                            </span>
                          </a>
                          <div class="d-flex">
                            <span class="medium-square"><i class="fas fa-square"></i></span>
                            <p class="medium"> Work</p>
                          </div>
                        </div>
                        <div class="notes-star-delete">
                          <a href="javascript:void(0);">
                            <span><i data-feather="star"></i></span>
                          </a>
                          <a href="javascript:void(0);">
                            <span><i data-feather="trash-2"></i></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 d-flex">
                    <div class="notes-card notes-card-details w-100">
                      <div class="notes-card-body">
                        <p class="badged high"><i class="fas fa-circle"></i> High</p>
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><i data-feather="star"></i></span>Not
                            Important</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                        </div>
                      </div>
                      <div class="notes-wrap-content">
                        <h4>
                          <a href="javascript:void(0);">
                            Download Server Logs
                          </a>
                        </h4>
                        <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>
                          27 Jul 2023</p>
                        <p>Server log is a text document that contains a record of all activity.</p>
                      </div>
                      <div class="notes-slider-widget notes-widget-profile">
                        <div class="notes-logo">
                          <a href="javascript:void(0);">
                            <span>
                              <img src="@/assets/img/users/user-27.jpg" alt="Profile" class="img-fluid">
                            </span>
                          </a>
                          <div class="d-flex">
                            <span class="high-square"><i class="fas fa-square"></i></span>
                            <p class="high"> Social</p>
                          </div>
                        </div>
                        <div class="notes-star-delete">
                          <a href="javascript:void(0);">
                            <span><i data-feather="star"></i></span>
                          </a>
                          <a href="javascript:void(0);">
                            <span><i data-feather="trash-2"></i></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 d-flex">
                    <div class="notes-card notes-card-details w-100">
                      <div class="notes-card-body">
                        <p class="badged low"><i class="fas fa-circle"></i> Low</p>
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><i data-feather="star"></i></span>Not
                            Important</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                        </div>
                      </div>
                      <div class="notes-wrap-content">
                        <h4>
                          <a href="javascript:void(0);">
                            Team meet at Starbucks
                          </a>
                        </h4>
                        <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>
                          13 Aug 2023</p>
                        <p>Meeting all teamets at Starbucks for identifying them all.</p>
                      </div>
                      <div class="notes-slider-widget notes-widget-profile">
                        <div class="notes-logo">
                          <a href="javascript:void(0);">
                            <span>
                              <img src="@/assets/img/users/user-28.jpg" alt="Profile" class="img-fluid">
                            </span>
                          </a>
                          <div class="d-flex">
                            <span class="low-square"><i class="fas fa-square"></i></span>
                            <p class="low"> Personal</p>
                          </div>
                        </div>
                        <div class="notes-star-delete">
                          <a href="javascript:void(0);">
                            <span><i data-feather="star"></i></span>
                          </a>
                          <a href="javascript:void(0);">
                            <span><i data-feather="trash-2"></i></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 d-flex">
                    <div class="notes-card notes-card-details w-100">
                      <div class="notes-card-body">
                        <p class="badged high"><i class="fas fa-circle"></i> High</p>
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><i data-feather="star"></i></span>Not
                            Important</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                        </div>
                      </div>
                      <div class="notes-wrap-content">
                        <h4>
                          <a href="javascript:void(0);">
                            Create a compost pile
                          </a>

                        </h4>
                        <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>
                          23 Aug 2023</p>
                        <p>Compost pile refers to fruit and vegetable scraps, used tea, coffee
                          grounds etc..</p>
                      </div>
                      <div class="notes-slider-widget notes-widget-profile">
                        <div class="notes-logo">
                          <a href="javascript:void(0);">
                            <span>
                              <img src="@/assets/img/users/user-29.jpg" alt="Profile" class="img-fluid">
                            </span>
                          </a>
                          <div class="d-flex">
                            <span class="high-square"><i class="fas fa-square"></i></span>
                            <p class="high"> Social</p>
                          </div>
                        </div>
                        <div class="notes-star-delete">
                          <a href="javascript:void(0);">
                            <span><i data-feather="star"></i></span>
                          </a>
                          <a href="javascript:void(0);">
                            <span><i data-feather="trash-2"></i></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 d-flex">
                    <div class="notes-card notes-card-details w-100">
                      <div class="notes-card-body">
                        <p class="badged low"><i class="fas fa-circle"></i> Low</p>
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><i data-feather="star"></i></span>Not
                            Important</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                        </div>
                      </div>
                      <div class="notes-wrap-content">
                        <h4>
                          <a href="javascript:void(0);">
                            Take a hike at a local park
                          </a>
                        </h4>
                        <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>
                          04 Sep 2023</p>
                        <p>Hiking involves a long energetic walk in a natural environment.</p>
                      </div>
                      <div class="notes-slider-widget notes-widget-profile">
                        <div class="notes-logo">
                          <a href="javascript:void(0);">
                            <span>
                              <img src="@/assets/img/users/user-30.jpg" alt="Profile" class="img-fluid">
                            </span>
                          </a>
                          <div class="d-flex">
                            <span class="low-square"><i class="fas fa-square"></i></span>
                            <p class="low"> Personal</p>
                          </div>
                        </div>
                        <div class="notes-star-delete">
                          <a href="javascript:void(0);">
                            <span><i data-feather="star"></i></span>
                          </a>
                          <a href="javascript:void(0);">
                            <span><i data-feather="trash-2"></i></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 d-flex">
                    <div class="notes-card notes-card-details w-100">
                      <div class="notes-card-body">
                        <p class="badged medium"><i class="fas fa-circle"></i> Medium</p>
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><i data-feather="star"></i></span>Not
                            Important</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                        </div>
                      </div>
                      <div class="notes-wrap-content">
                        <h4>
                          <a href="javascript:void(0);">
                            Research a topic interested
                          </a>
                        </h4>
                        <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>
                          17 Sep 2023</p>
                        <p>Research a topic interested by listen actively and attentively.</p>
                      </div>
                      <div class="notes-slider-widget notes-widget-profile">
                        <div class="notes-logo">
                          <a href="javascript:void(0);">
                            <span>
                              <img src="@/assets/img/users/user-31.jpg" alt="Profile" class="img-fluid">
                            </span>
                          </a>
                          <div class="d-flex">
                            <span class="medium-square"><i class="fas fa-square"></i></span>
                            <p class="medium"> Work</p>
                          </div>
                        </div>
                        <div class="notes-star-delete">
                          <a href="javascript:void(0);">
                            <span><i data-feather="star"></i></span>
                          </a>
                          <a href="javascript:void(0);">
                            <span><i data-feather="trash-2"></i></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
              <div class="section-card-body pt-0" id="notes-trash2">
                <div class="row">
                  <div class="col-md-4 d-flex">
                    <div class="notes-card notes-card-details w-100">
                      <div class="notes-card-body">
                        <p class="badged medium"><i class="fas fa-circle"></i> Medium</p>
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><i data-feather="star"></i></span>Not
                            Important</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                        </div>
                      </div>
                      <div class="notes-wrap-content">
                        <h4>
                          <a href="javascript:void(0);">
                            Backup Files EOD
                          </a>
                        </h4>
                        <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>
                          25 Jul 2023</p>
                        <p>Project files should be took backup before end of the day.</p>
                      </div>
                      <div class="notes-slider-widget notes-widget-profile">
                        <div class="notes-logo">
                          <a href="javascript:void(0);">
                            <span>
                              <img src="@/assets/img/users/user-26.jpg" alt="Profile" class="img-fluid">
                            </span>
                          </a>
                          <div class="d-flex">
                            <span class="medium-square"><i class="fas fa-square"></i></span>
                            <p class="medium"> Work</p>
                          </div>
                        </div>
                        <div class="notes-star-delete">
                          <a href="javascript:void(0);">
                            <span><i data-feather="star"></i></span>
                          </a>
                          <a href="javascript:void(0);">
                            <span><i data-feather="trash-2"></i></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 d-flex">
                    <div class="notes-card notes-card-details w-100">
                      <div class="notes-card-body">
                        <p class="badged high"><i class="fas fa-circle"></i> High</p>
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><i data-feather="star"></i></span>Not
                            Important</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                        </div>
                      </div>
                      <div class="notes-wrap-content">
                        <h4>
                          <a href="javascript:void(0);">
                            Download Server Logs
                          </a>
                        </h4>
                        <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>
                          27 Jul 2023</p>
                        <p>Server log is a text document that contains a record of all activity.</p>
                      </div>
                      <div class="notes-slider-widget notes-widget-profile">
                        <div class="notes-logo">
                          <a href="javascript:void(0);">
                            <span>
                              <img src="@/assets/img/users/user-27.jpg" alt="Profile" class="img-fluid">
                            </span>
                          </a>
                          <div class="d-flex">
                            <span class="high-square"><i class="fas fa-square"></i></span>
                            <p class="high"> Social</p>
                          </div>
                        </div>
                        <div class="notes-star-delete">
                          <a href="javascript:void(0);">
                            <span><i data-feather="star"></i></span>
                          </a>
                          <a href="javascript:void(0);">
                            <span><i data-feather="trash-2"></i></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 d-flex">
                    <div class="notes-card notes-card-details w-100">
                      <div class="notes-card-body">
                        <p class="badged low"><i class="fas fa-circle"></i> Low</p>
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><i data-feather="star"></i></span>Not
                            Important</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                        </div>
                      </div>
                      <div class="notes-wrap-content">
                        <h4>
                          <a href="javascript:void(0);">
                            Team meet at Starbucks
                          </a>
                        </h4>
                        <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>
                          13 Aug 2023</p>
                        <p>Meeting all teamets at Starbucks for identifying them all.</p>
                      </div>
                      <div class="notes-slider-widget notes-widget-profile">
                        <div class="notes-logo">
                          <a href="javascript:void(0);">
                            <span>
                              <img src="@/assets/img/users/user-28.jpg" alt="Profile" class="img-fluid">
                            </span>
                          </a>
                          <div class="d-flex">
                            <span class="low-square"><i class="fas fa-square"></i></span>
                            <p class="low"> Personal</p>
                          </div>
                        </div>
                        <div class="notes-star-delete">
                          <a href="javascript:void(0);">
                            <span><i data-feather="star"></i></span>
                          </a>
                          <a href="javascript:void(0);">
                            <span><i data-feather="trash-2"></i></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 d-flex">
                    <div class="notes-card notes-card-details w-100">
                      <div class="notes-card-body">
                        <p class="badged high"><i class="fas fa-circle"></i> High</p>
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><i data-feather="star"></i></span>Not
                            Important</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                        </div>
                      </div>
                      <div class="notes-wrap-content">
                        <h4>
                          <a href="javascript:void(0);">
                            Create a compost pile
                          </a>

                        </h4>
                        <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>
                          23 Aug 2023</p>
                        <p>Compost pile refers to fruit and vegetable scraps, used tea, coffee
                          grounds etc..</p>
                      </div>
                      <div class="notes-slider-widget notes-widget-profile">
                        <div class="notes-logo">
                          <a href="javascript:void(0);">
                            <span>
                              <img src="@/assets/img/users/user-29.jpg" alt="Profile" class="img-fluid">
                            </span>
                          </a>
                          <div class="d-flex">
                            <span class="high-square"><i class="fas fa-square"></i></span>
                            <p class="high"> Social</p>
                          </div>
                        </div>
                        <div class="notes-star-delete">
                          <a href="javascript:void(0);">
                            <span><i data-feather="star"></i></span>
                          </a>
                          <a href="javascript:void(0);">
                            <span><i data-feather="trash-2"></i></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 d-flex">
                    <div class="notes-card notes-card-details w-100">
                      <div class="notes-card-body">
                        <p class="badged low"><i class="fas fa-circle"></i> Low</p>
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><i data-feather="star"></i></span>Not
                            Important</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                        </div>
                      </div>
                      <div class="notes-wrap-content">
                        <h4>
                          <a href="javascript:void(0);">
                            Take a hike at a local park
                          </a>
                        </h4>
                        <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>
                          04 Sep 2023</p>
                        <p>Hiking involves a long energetic walk in a natural environment.</p>
                      </div>
                      <div class="notes-slider-widget notes-widget-profile">
                        <div class="notes-logo">
                          <a href="javascript:void(0);">
                            <span>
                              <img src="@/assets/img/users/user-30.jpg" alt="Profile" class="img-fluid">
                            </span>
                          </a>
                          <div class="d-flex">
                            <span class="low-square"><i class="fas fa-square"></i></span>
                            <p class="low"> Personal</p>
                          </div>
                        </div>
                        <div class="notes-star-delete">
                          <a href="javascript:void(0);">
                            <span><i data-feather="star"></i></span>
                          </a>
                          <a href="javascript:void(0);">
                            <span><i data-feather="trash-2"></i></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 d-flex">
                    <div class="notes-card notes-card-details w-100">
                      <div class="notes-card-body">
                        <p class="badged medium"><i class="fas fa-circle"></i> Medium</p>
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#edit-note-units"><span><i data-feather="edit"></i></span>Edit</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><i data-feather="trash-2"></i></span>Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><i data-feather="star"></i></span>Not
                            Important</a>
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#view-note-units"><span><i data-feather="eye"></i></span>View</a>
                        </div>
                      </div>
                      <div class="notes-wrap-content">
                        <h4>
                          <a href="javascript:void(0);">
                            Research a topic interested
                          </a>
                        </h4>
                        <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>
                          17 Sep 2023</p>
                        <p>Research a topic interested by listen actively and attentively.</p>
                      </div>
                      <div class="notes-slider-widget notes-widget-profile">
                        <div class="notes-logo">
                          <a href="javascript:void(0);">
                            <span>
                              <img src="@/assets/img/users/user-31.jpg" alt="Profile" class="img-fluid">
                            </span>
                          </a>
                          <div class="d-flex">
                            <span class="medium-square"><i class="fas fa-square"></i></span>
                            <p class="medium"> Work</p>
                          </div>
                        </div>
                        <div class="notes-star-delete">
                          <a href="javascript:void(0);">
                            <span><i data-feather="star"></i></span>
                          </a>
                          <a href="javascript:void(0);">
                            <span><i data-feather="trash-2"></i></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
              <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-end">
                  <a href="javascript:void(0);" class="btn btn-cancel notes-trash-btn">
                    <span> <i data-feather="trash-2" class="feather-trash-2"></i> </span>
                    Restore all
                  </a>
                </div>
              </div>
              <div class="section-card-body pt-0" id="notes-trash3">
                <div class="row">
                  <div class="col-md-4 d-flex">
                    <div class="notes-card notes-card-details w-100">
                      <div class="notes-card-body">
                        <p class="badged medium"><i class="fas fa-circle"></i> Medium</p>
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><i data-feather="edit"></i></span>Permanent
                            Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><i
                                data-feather="trash-2"></i></span>Restore Task</a>
                        </div>
                      </div>
                      <div class="notes-wrap-content">
                        <h4>
                          <a href="javascript:void(0);">
                            Backup Files EOD
                          </a>
                        </h4>
                        <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>
                          25 Jul 2023</p>
                        <p>Project files should be took backup before end of the day.</p>
                      </div>
                      <div class="notes-slider-widget notes-widget-profile">
                        <div class="notes-logo">
                          <a href="javascript:void(0);">
                            <span>
                              <img src="@/assets/img/users/user-31.jpg" alt="Profile" class="img-fluid">
                            </span>
                          </a>
                          <div class="d-flex">
                            <span class="medium-square"><i class="fas fa-square"></i></span>
                            <p class="medium"> Work</p>
                          </div>
                        </div>
                        <div class="notes-star-delete">
                          <a href="javascript:void(0);">
                            <span><i data-feather="star"></i></span>
                          </a>
                          <a href="javascript:void(0);">
                            <span><i data-feather="trash-2"></i></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 d-flex">
                    <div class="notes-card notes-card-details w-100">
                      <div class="notes-card-body">
                        <p class="badged high"><i class="fas fa-circle"></i> High</p>
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><i data-feather="edit"></i></span>Permanent
                            Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><i
                                data-feather="trash-2"></i></span>Restore Task</a>
                        </div>
                      </div>
                      <div class="notes-wrap-content">
                        <h4>
                          <a href="javascript:void(0);">
                            Download Server Logs
                          </a>
                        </h4>
                        <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>
                          27 Jul 2023</p>
                        <p>Server log is a text document that contains a record of all activity.</p>
                      </div>
                      <div class="notes-slider-widget notes-widget-profile">
                        <div class="notes-logo">
                          <a href="javascript:void(0);">
                            <span>
                              <img src="@/assets/img/users/user-29.jpg" alt="Profile" class="img-fluid">
                            </span>
                          </a>
                          <div class="d-flex">
                            <span class="high-square"><i class="fas fa-square"></i></span>
                            <p class="high"> Social</p>
                          </div>
                        </div>
                        <div class="notes-star-delete">
                          <a href="javascript:void(0);">
                            <span><i data-feather="star"></i></span>
                          </a>
                          <a href="javascript:void(0);">
                            <span><i data-feather="trash-2"></i></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 d-flex">
                    <div class="notes-card notes-card-details w-100">
                      <div class="notes-card-body">
                        <p class="badged low"><i class="fas fa-circle"></i> Low</p>
                        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu notes-menu dropdown-menu-end">
                          <a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal"
                            data-bs-target="#delete-note-units"><span><i data-feather="edit"></i></span>Permanent
                            Delete</a>
                          <a href="javascript:void(0);" class="dropdown-item"><span><i
                                data-feather="trash-2"></i></span>Restore Task</a>
                        </div>
                      </div>
                      <div class="notes-wrap-content">
                        <h4>
                          <a href="javascript:void(0);">
                            Team meet at Starbucks
                          </a>
                        </h4>
                        <p class="wrap-cal"><i data-feather="calendar" class="feather-calendar"></i>
                          13 Aug 2023</p>
                        <p>Meeting all teamets at Starbucks for identifying them all.</p>
                      </div>
                      <div class="notes-slider-widget notes-widget-profile">
                        <div class="notes-logo">
                          <a href="javascript:void(0);">
                            <span>
                              <img src="@/assets/img/users/user-30.jpg" alt="Profile" class="img-fluid">
                            </span>
                          </a>
                          <div class="d-flex">
                            <span class="low-square"><i class="fas fa-square"></i></span>
                            <p class="low"> Personal</p>
                          </div>
                        </div>
                        <div class="notes-star-delete">
                          <a href="javascript:void(0);">
                            <span><i data-feather="star"></i></span>
                          </a>
                          <a href="javascript:void(0);">
                            <span><i data-feather="trash-2"></i></span>
                          </a>
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
                    <a href="javascript:void(0);" class="active">
                      1
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">
                      2
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">
                      3
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">
                      4
                    </a>
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
  <notes-modal></notes-modal>
</template>

<script>
export default {
  data() {
    return {
      isSectionNotesDashboard: false,
      isBudgetedRoleNotes: false,
      isNotesTagLeft: false,
      Descending: [
        "Sort by Date",
        "Ascending",
        "Descending",
        "Recently Viewed",
        "Recently Added",
        "Creation Date",
      ],
      Bulk: ["Bulk Actions", "Delete Marked", "Unmark All", "Mark All"],
      Last: ["Recent", "Last Modified", "Last Modified by me"],
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