<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>

  <div
    class="page-wrapper notes-page-wrapper file-manager"
    :class="{ 'notes-tag-left': isNotesTagLeft }"
  >
    <div class="content">
      <div
        class="page-header page-add-notes d-flex align-items-center justify-content-between"
      >
        <div class="add-item d-flex align-items-center">
          <div class="page-title">
            <h4>File Manager</h4>
            <p>Manage your files</p>
          </div>
          <a
            id="toggle_btn2"
            class="notes-tog"
            @click="toggleNotes"
            href="javascript:void(0);"
          >
            <i class="fas fa-chevron-left"></i>
          </a>
        </div>
        <div class="d-sm-flex align-items-center">
          <div class="form-sort owned-by w-auto">
            <span><vue-feather type="sliders" class="info-img"></vue-feather></span>
            <vue-select :options="Owned" id="owned" placeholder="Owned By Me" />
          </div>
          <ul class="table-top-head">
            <li>
              <a data-bs-toggle="tooltip" data-bs-placement="top" title="rotate"
                ><vue-feather type="rotate-ccw" class="rotate-ccw"></vue-feather
              ></a>
            </li>
            <li class="full-height">
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
          <a
            href="javascript:void(0);"
            class="btn btn-primary btn-added"
            data-bs-toggle="modal"
            data-bs-target="#upload-file"
            ><span class="me-1 d-flex align-items-center"
              ><vue-feather type="upload" class="feather-16"></vue-feather></span
            >Upload Files</a
          >
        </div>
      </div>

      <div class="row">
        <div
          class="col-lg-3 col-md-12 sidebars-right theiaStickySidebar section-bulk-widget"
          :class="{ 'section-notes-dashboard': isSectionNotesDashboard }"
        >
          <files-sidebar></files-sidebar>
        </div>

        <div
          class="col-lg-9 budget-role-notes"
          :class="{ 'budgeted-role-notes': isBudgetedRoleNotes }"
        >
          <div class="row">
            <div class="col-12">
              <div class="section-bulk-wrap">
                <div class="bulk-action-type col-lg-6 col-md-6">
                  <div class="form-sort select-bluk">
                    <vue-select
                      :options="Relevance"
                      id="relevance"
                      placeholder="Sort by Date"
                    />
                  </div>
                  <div
                    class="search-set me-2"
                    id="dropdownSort"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                  >
                    <div class="search-input">
                      <a href="" class="btn btn-searchset"
                        ><vue-feather type="search" class="search"></vue-feather
                      ></a>
                      <div class="dataTables_filter">
                        <label>
                          <input
                            type="search"
                            class="form-control form-control-sm width-auto"
                            placeholder="Search"
                        /></label>
                      </div>
                    </div>
                  </div>

                  <div
                    class="dropdown-menu search-dropdown"
                    aria-labelledby="dropdownMenuClickable"
                  >
                    <div class="search-info">
                      <h6>
                        <span
                          ><vue-feather
                            type="search"
                            class="feather-16"
                          ></vue-feather></span
                        >Recent Searches
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
                        <vue-feather
                          type="chevron-right"
                          class="feather-16"
                        ></vue-feather>
                      </p>
                      <p class="d-flex align-items-center justify-content-between">
                        Projectdetails.xls<vue-feather
                          type="chevron-right"
                          class="feather-16"
                        ></vue-feather>
                      </p>
                    </div>
                  </div>
                </div>
                <div
                  class="d-sm-flex align-items-center col-lg-6 col-md-6 justify-content-end"
                >
                  <div class="form-sort me-3">
                    <i class="feather feather-filter"></i>
                    <vue-select :options="Recent" id="recent" placeholder="Recent" />
                  </div>
                  <div class="form-sort">
                    <i class="feather feather-file-text"></i>
                    <vue-select
                      :options="Types"
                      id="types"
                      placeholder="All File types"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- /Overview -->
          <div class="overview seprator-lg">
            <h4 class="mb-2">Overview</h4>
            <div class="row g-3">
              <div class="col-sm-6 col-md-3">
                <div class="detail">
                  <a
                    href="javascript:void(0);"
                    class="d-flex align-items-center justify-content-center bg-light-orange bg p-4"
                  >
                    <span class="d-flex align-items-center justify-content-center"
                      ><img src="@/assets/img/icons/folder.svg" alt="Folder"
                    /></span>
                  </a>
                  <div class="d-flex align-items-center justify-content-between info">
                    <h6><a href="javascript:void(0);">Folders</a></h6>
                    <span>300 Files</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="detail">
                  <a
                    href="javascript:void(0);"
                    class="d-flex align-items-center justify-content-center bg-light-red bg p-4"
                  >
                    <span class="d-flex align-items-center justify-content-center"
                      ><img src="@/assets/img/icons/pdf-02.svg" alt="Folder"
                    /></span>
                  </a>
                  <div class="d-flex align-items-center justify-content-between info">
                    <h6><a href="javascript:void(0);">PDF</a></h6>
                    <span>50 Files</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="detail">
                  <a
                    href="javascript:void(0);"
                    class="d-flex align-items-center justify-content-center bg-light-green bg p-4"
                  >
                    <span class="d-flex align-items-center justify-content-center"
                      ><img src="@/assets/img/icons/image.svg" alt="Folder"
                    /></span>
                  </a>
                  <div class="d-flex align-items-center justify-content-between info">
                    <h6><a href="javascript:void(0);">Images</a></h6>
                    <span>240 Files</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="detail">
                  <a
                    href="javascript:void(0);"
                    class="d-flex align-items-center justify-content-center bg-light-red bg p-4"
                  >
                    <span class="d-flex align-items-center justify-content-center"
                      ><img src="@/assets/img/icons/video.svg" alt="Folder"
                    /></span>
                  </a>
                  <div class="d-flex align-items-center justify-content-between info">
                    <h6><a href="javascript:void(0);">Videos</a></h6>
                    <span>30 Files</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-3">
                <div class="detail">
                  <a
                    href="javascript:void(0);"
                    class="d-flex align-items-center justify-content-center bg-light-orange bg p-4"
                  >
                    <span class="d-flex align-items-center justify-content-center"
                      ><img src="@/assets/img/icons/audio.svg" alt="Folder"
                    /></span>
                  </a>
                  <div class="d-flex align-items-center justify-content-between info">
                    <h6><a href="javascript:void(0);">Audios</a></h6>
                    <span>100 Files</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /Overview -->

          <!-- Accordian -->
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item seprator-lg">
              <h4
                class="accordion-header d-flex align-items-center justify-content-between"
                id="panelsStayOpen-headingOne"
              >
                Folders
                <a
                  href="javascript:void(0);"
                  class="accordion-button a-auto"
                  data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseOne"
                  aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseOne"
                ></a>
              </h4>
              <div
                id="panelsStayOpen-collapseOne"
                class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-headingOne"
              >
                <div class="accordion-body">
                  <folder-carousel></folder-carousel>
                </div>
              </div>
            </div>
            <div class="accordion-item seprator-lg">
              <h4
                class="accordion-header d-flex align-items-center justify-content-between"
                id="panelsStayOpen-headingTwo"
              >
                Files
                <a
                  href="javascript:void(0);"
                  class="accordion-button w-auto"
                  data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseTwo"
                  aria-expanded="false"
                  aria-controls="panelsStayOpen-collapseTwo"
                >
                </a>
              </h4>
              <div
                id="panelsStayOpen-collapseTwo"
                class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-headingTwo"
              >
                <div class="accordion-body">
                  <files-carousel></files-carousel>
                </div>
              </div>
            </div>
            <div class="accordion-item mb-4">
              <h4
                class="accordion-header d-flex align-items-center justify-content-between"
                id="panelsStayOpen-headingThree"
              >
                Videos
                <a
                  href="javascript:void(0);"
                  class="accordion-button w-auto"
                  data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseThree"
                  aria-expanded="false"
                  aria-controls="panelsStayOpen-collapseThree"
                ></a>
              </h4>
              <div
                id="panelsStayOpen-collapseThree"
                class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-headingThree"
              >
                <div class="accordion-body">
                  <div class="owl-carousel video-section">
                    <Carousel
                      :wrap-around="true"
                      :settings="settings"
                      :breakpoints="breakpoints"
                    >
                      <Slide v-for="item in DemoDw" :key="item.id">
                        <div class="item">
                          <div>
                            <video
                              width="100"
                              height="100"
                              class="js-player"
                              crossorigin
                              playsinline
                              :poster="require(`@/assets/img/file-manager/${item.Image}`)"
                            >
                              <source :src="item.Url" type="video/mp4" />
                            </video>
                          </div>

                          <div class="info">
                            <div
                              class="d-flex align-items-center justify-content-between"
                            >
                              <h6 class="popup-toggle">
                                <a href="javascript:void(0);">{{ item.Title }}</a>
                              </h6>
                              <div class="d-flex align-items-center">
                                <a
                                  href="javascript:void(0);"
                                  class="d-flex align-items-center"
                                  ><vue-feather
                                    type="star"
                                    class="feather-16 me-2"
                                  ></vue-feather
                                ></a>
                                <div class="dropdown">
                                  <a
                                    href="javascript:void(0);"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                    class="dropset"
                                  >
                                    <i class="fa fa-ellipsis-v"></i>
                                  </a>
                                  <ul class="dropdown-menu">
                                    <li>
                                      <a href="javascript:void(0);" class="dropdown-item"
                                        >Details</a
                                      >
                                    </li>
                                    <li>
                                      <a href="javascript:void(0);" class="dropdown-item"
                                        >Share</a
                                      >
                                    </li>
                                    <li>
                                      <a href="javascript:void(0);" class="dropdown-item"
                                        >Copy</a
                                      >
                                    </li>
                                    <li>
                                      <a href="javascript:void(0);" class="dropdown-item"
                                        >Move</a
                                      >
                                    </li>
                                    <li>
                                      <a href="javascript:void(0);" class="dropdown-item"
                                        >Download</a
                                      >
                                    </li>
                                    <li>
                                      <a href="javascript:void(0);" class="dropdown-item"
                                        >Rename</a
                                      >
                                    </li>
                                    <li>
                                      <a href="javascript:void(0);" class="dropdown-item"
                                        >Archeived</a
                                      >
                                    </li>
                                    <li>
                                      <a href="javascript:void(0);" class="dropdown-item"
                                        >Delete</a
                                      >
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div
                              class="d-flex align-items-center justify-content-start project-plan"
                            >
                              <label>{{ item.Day }}</label>
                              <ul class="d-flex">
                                <li class="d-flex align-items-center">{{ item.Size }}</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </Slide>
                      <template #addons>
                        <Pagination />
                      </template>
                    </Carousel>
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
                <a href="javascript:void(0);" class="btn btn-primary me-2"
                  ><vue-feather type="list" class="feather-20"></vue-feather
                ></a>
                <a href="javascript:void(0);" class="btn btn-outline-secondary me-2"
                  ><vue-feather type="layout" class="feather-20"></vue-feather
                ></a>
                <a href="javascript:void(0);" class="btn btn-outline-secondary me-2"
                  ><vue-feather type="grid" class="feather-20"></vue-feather
                ></a>

                <div class="icon-select">
                  <span class="icon"
                    ><vue-feather type="calendar" class="feather-16"></vue-feather
                  ></span>
                  <vue-select
                    :options="Modified"
                    id="modified"
                    placeholder="Last Modified"
                  />
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
import { Carousel, Pagination, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";
import DemoDw from "@/assets/json/demo_dw.json";
export default {
  data() {
    return {
      isSectionNotesDashboard: false,
      isBudgetedRoleNotes: false,
      isNotesTagLeft: false,
      DemoDw: DemoDw,
      Owned: ["Owned By Me", "Owned by Anyone", "Not Owned by Me"],
      Relevance: [
        "Sort by Date",
        "Sort By Relevance",
        "Sort By Size",
        "Order Ascending",
        "Order Descending",
        "Upload Time",
      ],
      Recent: ["Recent", "Last Week", "Last Month"],
      Types: ["All File types", "Folders", "PDF", "Images", "Videos", "Audios", "Excel"],
      Modified: ["Last Modified", "Last Modified by Me", "Last Opened by Me"],
      settings: {
        itemsToShow: 1,
        snapAlign: "center",
        loop: true,
      },
      breakpoints: {
        575: {
          itemsToShow: 1,
          snapAlign: "center",
        },
        767: {
          itemsToShow: 1,
          snapAlign: "center",
        },
        991: {
          itemsToShow: 2,
          snapAlign: "center",
        },
        1024: {
          itemsToShow: 3,
          snapAlign: "start",
        },
      },
    };
  },
  components: {
    Carousel,
    Slide,
    Pagination,
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
