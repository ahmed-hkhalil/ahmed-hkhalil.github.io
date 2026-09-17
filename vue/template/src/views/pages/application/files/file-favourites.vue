<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>

  <div class="page-wrapper notes-page-wrapper file-manager" :class="{ 'notes-tag-left': isNotesTagLeft }">
    <div class="content">
      <div class="page-header page-add-notes d-flex align-items-center justify-content-between">
        <div class="add-item d-flex align-items-center">
          <div class="page-title">
            <h4>File Manager</h4>
            <p>Manage your files</p>
          </div>
          <a id="toggle_btn2" class="notes-tog" @click="toggleNotes" href="javascript:void(0);">
            <i class="fas fa-chevron-left"></i>
          </a>
        </div>
        <div class="d-sm-flex align-items-center">
          <div class="form-sort owned-by w-auto">
            <span><vue-feather type="sliders" class="info-img"></vue-feather></span>
            <vue-select :options="Anyone" id="bynot" placeholder="Owned By Me" />
          </div>
          <ul class="table-top-head">
            <li>
              <a data-bs-toggle="tooltip" data-bs-placement="top" title="rotate"><vue-feather type="rotate-ccw"
                  class="feather-rotate-ccw"></vue-feather></a>
            </li>
            <li class="full-height">
              <a ref="collapseHeader" data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse"
                @click="toggleCollapse">
                <i data-feather="chevron-up" class="feather-chevron-up"></i>
              </a>
            </li>
          </ul>
          <a href="javascript:void(0);" class="btn btn-primary btn-added" data-bs-toggle="modal"
            data-bs-target="#upload-file"><span class="me-1 d-flex align-items-center"><vue-feather type="upload"
                class="feather-16"></vue-feather></span>Upload Files</a>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-12 sidebars-right theiaStickySidebar section-bulk-widget"
          :class="{ 'section-notes-dashboard': isSectionNotesDashboard }">
          <files-sidebar></files-sidebar>
        </div>

        <div class="col-lg-9 budget-role-notes" :class="{ 'budgeted-role-notes': isBudgetedRoleNotes }">
          <div class="row">
            <div class="col-12">
              <div class="section-bulk-wrap">
                <div class="bulk-action-type col-lg-6 col-md-6">
                  <div class="form-sort select-bluk">
                    <vue-select :options="Dateby" id="oneupload" placeholder="Sort by Date" />
                  </div>
                  <div class="search-set me-2" id="dropdownSort" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    <div class="search-input">
                      <a href="" class="btn btn-searchset"><vue-feather type="search"
                          class="feather-search"></vue-feather></a>
                      <div class="dataTables_filter">
                        <label>
                          <input type="search" class="form-control form-control-sm width-auto"
                            placeholder="Search" /></label>
                      </div>
                    </div>
                  </div>

                  <div class="dropdown-menu search-dropdown" aria-labelledby="dropdownMenuClickable">
                    <div class="search-info">
                      <h6>
                        <span><vue-feather type="search" class="feather-16"></vue-feather></span>Recent Searches
                      </h6>
                      <ul class="search-tags">
                        <li><a href="javascript:void(0);">Filename</a></li>
                        <li><a href="javascript:void(0);">Excel Files</a></li>
                      </ul>
                    </div>
                    <div class="search-info">
                      <h6>Search Results</h6>
                      <p class="d-flex align-items-center justify-content-between">
                        Sportsmodel.pdf
                        <vue-feather type="chevron-right" class="feather-16"></vue-feather>
                      </p>
                      <p class="d-flex align-items-center justify-content-between">
                        Projectdetails.xls<vue-feather type="chevron-right" class="feather-16"></vue-feather>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="d-sm-flex align-items-center col-lg-6 col-md-6 justify-content-end">
                  <div class="form-sort me-3">
                    <i class="feather feather-filter"></i>
                    <vue-select :options="Recent" id="alllast" placeholder="Recent" />
                  </div>
                  <div class="form-sort">
                    <i class="feather feather-file-text"></i>
                    <vue-select :options="File" id="allpdf" placeholder="All File Types" />
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Accordian -->
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item seprator-lg">
              <h4 class="accordion-header d-flex align-items-center justify-content-between"
                id="panelsStayOpen-headingOne">
                Folders
                <a href="javascript:void(0);" class="accordion-button a-auto" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseOne"></a>
              </h4>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                  <div class="row mt-3">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="folders p-3 mb-3">
                        <div class="d-flex align-items-center justify-content-between head">
                          <div class="d-flex align-items-center">
                            <img src="@/assets/img/icons/folder.svg" alt="Folder" class="me-2" />
                            <h6 class="popup-toggle">
                              <a href="javascript:void(0);">Project Details</a>
                            </h6>
                          </div>
                          <div class="dropdown">
                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                              <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <ul class="dropdown-menu">
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Details</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Share</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Copy</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Move</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Download</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Rename</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Archeived</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Delete</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-start project-plan my-3">
                          <label>Project plan</label>
                          <ul class="d-flex">
                            <li class="d-flex align-items-center">154 KB</li>
                            <li class="d-flex align-items-center">8 Files</li>
                          </ul>
                        </div>
                        <div class="d-flex align-items-center justify-content-between avatar-wrap">
                          <div class="group-avatar">
                            <span class="avatar">
                              <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right"
                                aria-label="Member 1" data-bs-original-title="Member 1"><img
                                  src="@/assets/img/avatar/avatar-2.jpg" alt="Avatar" /></a>
                            </span>
                            <span class="avatar">
                              <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right"
                                aria-label="Member 2" data-bs-original-title="Member 2"><img
                                  src="@/assets/img/avatar/avatar-1.jpg" alt="Avatar" /></a>
                            </span>
                            <span class="count">
                              <a href="javascript:void(0);">1 Members</a>
                            </span>
                          </div>
                          <a href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="folders p-3 mb-3">
                        <div class="d-flex align-items-center justify-content-between head">
                          <div class="d-flex align-items-center">
                            <img src="@/assets/img/icons/folder.svg" alt="Folder" class="me-2" />
                            <h6 class="popup-toggle">
                              <a href="javascript:void(0);">Project Details</a>
                            </h6>
                          </div>
                          <div class="dropdown">
                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                              <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <ul class="dropdown-menu">
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Details</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Share</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Copy</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Move</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Download</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Rename</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Archeived</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Delete</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-start project-plan my-3">
                          <label>Project plan</label>
                          <ul class="d-flex">
                            <li class="d-flex align-items-center">154 KB</li>
                            <li class="d-flex align-items-center">8 Files</li>
                          </ul>
                        </div>
                        <div class="d-flex align-items-center justify-content-between avatar-wrap">
                          <div class="group-avatar">
                            <span class="avatar">
                              <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right"
                                aria-label="Member 1" data-bs-original-title="Member 1"><img
                                  src="@/assets/img/avatar/avatar-6.jpg" alt="Avatar" /></a>
                            </span>
                            <span class="avatar">
                              <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right"
                                aria-label="Member 2" data-bs-original-title="Member 2"><img
                                  src="@/assets/img/avatar/avatar-14.jpg" alt="Avatar" /></a>
                            </span>
                            <span class="avatar">
                              <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right"
                                aria-label="Member 3" data-bs-original-title="Member 3"><img
                                  src="@/assets/img/avatar/avatar-15.jpg" alt="Avatar" /></a>
                            </span>
                            <span class="avatar">
                              <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right"
                                aria-label="Member 4" data-bs-original-title="Member 4"><img
                                  src="@/assets/img/avatar/avatar-16.jpg" alt="Avatar" /></a>
                            </span>
                            <span class="avatar">
                              <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right"
                                aria-label="Member 5" data-bs-original-title="Member 5"><img
                                  src="@/assets/img/avatar/avatar-17.jpg" alt="Avatar" /></a>
                            </span>
                            <span class="count">
                              <a href="javascript:void(0);">+9 Members</a>
                            </span>
                          </div>
                          <a href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="folders p-3 mb-3">
                        <div class="d-flex align-items-center justify-content-between head">
                          <div class="d-flex align-items-center">
                            <img src="@/assets/img/icons/folder.svg" alt="Folder" class="me-2" />
                            <h6 class="popup-toggle">
                              <a href="javascript:void(0);">Project Details</a>
                            </h6>
                          </div>
                          <div class="dropdown">
                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                              <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <ul class="dropdown-menu">
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Details</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Share</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Copy</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Move</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Download</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Rename</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Archeived</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Delete</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-start project-plan my-3">
                          <label>Project plan</label>
                          <ul class="d-flex">
                            <li class="d-flex align-items-center">154 KB</li>
                            <li class="d-flex align-items-center">8 Files</li>
                          </ul>
                        </div>
                        <div class="d-flex align-items-center justify-content-between avatar-wrap">
                          <div class="group-avatar">
                            <span class="avatar">
                              <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right"
                                aria-label="Member 1" data-bs-original-title="Member 1"><img
                                  src="@/assets/img/avatar/avatar-18.jpg" alt="Avatar" /></a>
                            </span>
                            <span class="avatar">
                              <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right"
                                aria-label="Member 2" data-bs-original-title="Member 2"><img
                                  src="@/assets/img/avatar/avatar-5.jpg" alt="Avatar" /></a>
                            </span>
                            <span class="count">
                              <a href="javascript:void(0);"> +2 Members</a>
                            </span>
                          </div>
                          <a href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="folders p-3 mb-3">
                        <div class="d-flex align-items-center justify-content-between head">
                          <div class="d-flex align-items-center">
                            <img src="@/assets/img/icons/folder.svg" alt="Folder" class="me-2" />
                            <h6 class="popup-toggle">
                              <a href="javascript:void(0);">Project Details</a>
                            </h6>
                          </div>
                          <div class="dropdown">
                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                              <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <ul class="dropdown-menu">
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Details</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Share</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Copy</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Move</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Download</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Rename</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Archeived</a>
                              </li>
                              <li>
                                <a href="javascript:void(0);" class="dropdown-item">Delete</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-start project-plan my-3">
                          <label>Project plan</label>
                          <ul class="d-flex">
                            <li class="d-flex align-items-center">154 KB</li>
                            <li class="d-flex align-items-center">8 Files</li>
                          </ul>
                        </div>
                        <div class="d-flex align-items-center justify-content-between avatar-wrap">
                          <div class="group-avatar">
                            <span class="avatar">
                              <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right"
                                aria-label="Member 1" data-bs-original-title="Member 1"><img
                                  src="@/assets/img/avatar/avatar-2.jpg" alt="Avatar" /></a>
                            </span>
                            <span class="avatar">
                              <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="right"
                                aria-label="Member 2" data-bs-original-title="Member 2"><img
                                  src="@/assets/img/avatar/avatar-1.jpg" alt="Avatar" /></a>
                            </span>
                            <span class="count">
                              <a href="javascript:void(0);">1 Members</a>
                            </span>
                          </div>
                          <a href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item seprator-lg">
              <h4 class="accordion-header d-flex align-items-center justify-content-between"
                id="panelsStayOpen-headingTwo">
                Files
                <a href="javascript:void(0);" class="accordion-button w-auto" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                  aria-controls="panelsStayOpen-collapseTwo">
                </a>
              </h4>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                  <div class="row mt-3">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="folders p-3 mb-3">
                        <div class="d-flex align-items-center justify-content-between head">
                          <div class="d-flex align-items-center">
                            <img src="@/assets/img/icons/pdf-02.svg" alt="File" class="me-2" />
                            <h6 class="popup-toggle">
                              <a href="javascript:void(0);">hsa.pdf</a>
                            </h6>
                          </div>
                          <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
                            <div class="dropdown">
                              <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                class="dropset">
                                <i class="fa fa-ellipsis-v"></i>
                              </a>
                              <ul class="dropdown-menu">
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Details</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Share</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Copy</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Move</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Rename</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Archeived</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Delete</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-start project-plan mt-3">
                          <label>Last edited 12 Jul</label>
                          <ul class="d-flex">
                            <li class="d-flex align-items-center">15 Memebers</li>
                            <li class="d-flex align-items-center">8 5 MB</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="folders p-3 mb-3">
                        <div class="d-flex align-items-center justify-content-between head">
                          <div class="d-flex align-items-center">
                            <img src="@/assets/img/icons/pdf-02.svg" alt="File" class="me-2" />
                            <h6 class="popup-toggle">
                              <a href="javascript:void(0);">Haird.pdf</a>
                            </h6>
                          </div>
                          <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
                            <div class="dropdown">
                              <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                class="dropset">
                                <i class="fa fa-ellipsis-v"></i>
                              </a>
                              <ul class="dropdown-menu">
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Details</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Share</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Copy</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Move</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Rename</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Archeived</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Delete</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-start project-plan mt-3">
                          <label>Last edited 14 Jul</label>
                          <ul class="d-flex">
                            <li class="d-flex align-items-center">09 Memebers</li>
                            <li class="d-flex align-items-center">4 MB</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="folders p-3 mb-3">
                        <div class="d-flex align-items-center justify-content-between head">
                          <div class="d-flex align-items-center">
                            <img src="@/assets/img/icons/xls.svg" alt="File" class="me-2" />
                            <h6 class="popup-toggle">
                              <a href="javascript:void(0);">Estimation.xls</a>
                            </h6>
                          </div>
                          <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
                            <div class="dropdown">
                              <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                class="dropset">
                                <i class="fa fa-ellipsis-v"></i>
                              </a>
                              <ul class="dropdown-menu">
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Details</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Share</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Copy</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Move</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Rename</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Archeived</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Delete</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-start project-plan mt-3">
                          <label>Last edited 14 Jul</label>
                          <ul class="d-flex">
                            <li class="d-flex align-items-center">05 Memebers</li>
                            <li class="d-flex align-items-center">500 KB</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="folders p-3 mb-3">
                        <div class="d-flex align-items-center justify-content-between head">
                          <div class="d-flex align-items-center">
                            <img src="@/assets/img/icons/pdf-02.svg" alt="File" class="me-2" />
                            <h6 class="popup-toggle">
                              <a href="javascript:void(0);">hsa.pdf</a>
                            </h6>
                          </div>
                          <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
                            <div class="dropdown">
                              <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                class="dropset">
                                <i class="fa fa-ellipsis-v"></i>
                              </a>
                              <ul class="dropdown-menu">
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Details</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Share</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Copy</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Move</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Rename</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Archeived</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Delete</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-start project-plan mt-3">
                          <label>Last edited 12 Jul</label>
                          <ul class="d-flex">
                            <li class="d-flex align-items-center">15 Memebers</li>
                            <li class="d-flex align-items-center">8 5 MB</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="folders p-3 mb-3">
                        <div class="d-flex align-items-center justify-content-between head">
                          <div class="d-flex align-items-center">
                            <img src="@/assets/img/icons/pdf-02.svg" alt="File" class="me-2" />
                            <h6 class="popup-toggle">
                              <a href="javascript:void(0);">Haird.pdf</a>
                            </h6>
                          </div>
                          <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
                            <div class="dropdown">
                              <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                class="dropset">
                                <i class="fa fa-ellipsis-v"></i>
                              </a>
                              <ul class="dropdown-menu">
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Details</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Share</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Copy</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Move</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Rename</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Archeived</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Delete</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-start project-plan mt-3">
                          <label>Last edited 14 Jul</label>
                          <ul class="d-flex">
                            <li class="d-flex align-items-center">09 Memebers</li>
                            <li class="d-flex align-items-center">4 MB</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                      <div class="folders p-3 mb-3">
                        <div class="d-flex align-items-center justify-content-between head">
                          <div class="d-flex align-items-center">
                            <img src="@/assets/img/icons/xls.svg" alt="File" class="me-2" />
                            <h6 class="popup-toggle">
                              <a href="javascript:void(0);">Estimation.xls</a>
                            </h6>
                          </div>
                          <div class="d-flex align-items-center">
                            <a href="javascript:void(0);" class=""><i class="fa fa-star me-2"></i></a>
                            <div class="dropdown">
                              <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
                                class="dropset">
                                <i class="fa fa-ellipsis-v"></i>
                              </a>
                              <ul class="dropdown-menu">
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Details</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Share</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Copy</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Move</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Rename</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Archeived</a>
                                </li>
                                <li>
                                  <a href="javascript:void(0);" class="dropdown-item">Delete</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-start project-plan mt-3">
                          <label>Last edited 14 Jul</label>
                          <ul class="d-flex">
                            <li class="d-flex align-items-center">05 Memebers</li>
                            <li class="d-flex align-items-center">500 KB</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Accordian -->

          <div class="card p-4 bg-white all-files mb-0">
            <div class="seprator-lg d-lg-flex align-items-center justify-content-between">
              <h4>All Files</h4>
              <div class="d-sm-flex align-items-center btn-grp">
                <a href="javascript:void(0);" class="btn btn-primary me-2"><vue-feather type="list"
                    class="feather-20"></vue-feather></a>
                <a href="javascript:void(0);" class="btn btn-outline-secondary me-2"><vue-feather type="layout"
                    class="feather-20"></vue-feather></a>
                <a href="javascript:void(0);" class="btn btn-outline-secondary me-2"><vue-feather type="grid"
                    class="feather-20"></vue-feather></a>

                <div class="icon-select">
                  <span class="icon"><vue-feather type="calendar" class="feather-16"></vue-feather></span>
                  <vue-select :options="Opened" id="onemodified" placeholder="Last Modified" />
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <file-table></file-table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Content -->
  </div>
  <file-manager-modal></file-manager-modal>
</template>
  
<script>
export default {
  data() {
    return {
      isSectionNotesDashboard: false,
      isBudgetedRoleNotes: false,
      isNotesTagLeft: false,
      Anyone: ["Owned By Me", "Owned by Anyone", "Not Owned by Me"],
      Dateby: [
        "Sort by Date",
        "Sort By Relevance",
        "Sort By Size",
        "Order Ascending",
        "Order Descending",
        "Upload Time",
      ],
      Recent: ["Recent", "Last Week", "Last Month"],
      File: ["All File types", "Folders", "PDF", "Images", "Videos", "Audios", "Excel"],
      Opened: ["Last Modified", "Last Modified by Me", "Last Opened by Me"],
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
  