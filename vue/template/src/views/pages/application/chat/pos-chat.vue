<template>
  <div class="main-chat-blk">
    <div class="main-wrapper">
      <layout-header></layout-header>
      <layout-sidebar></layout-sidebar>

      <div class="page-wrapper chat-page-wrapper">
        <div class="content">
          <!-- sidebar group -->
          <div class="sidebar-group left-sidebar chat_sidebar">
            <!-- Chats sidebar -->
            <div id="chats" class="left-sidebar-wrap sidebar active slimscroll">
              <perfect-scrollbar
                class="scroll-area-one"
                :settings="settings"
                @ps-scroll-y="scrollHanle"
              >
                <div class="slimscroll-active-sidebar">
                  <!-- Left Chat Title -->
                  <div
                    class="left-chat-title all-chats d-flex justify-content-between align-items-center"
                  >
                    <div class="setting-title-head">
                      <h4>All Chats</h4>
                    </div>
                    <div class="add-section">
                      <ul>
                        <li>
                          <a href="javascript:void(0);" class="user-chat-search-btn"
                            ><i class="bx bx-search"></i
                          ></a>
                        </li>
                        <li>
                          <div class="chat-action-btns">
                            <div class="chat-action-col">
                              <a
                                class="#"
                                href="javascript:void(0);"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                              >
                                <i class="bx bx-dots-vertical-rounded"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:void(0);" class="dropdown-item"
                                  ><span><i class="bx bx-message-rounded-add"></i></span
                                  >New Chat
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item"
                                  ><span><i class="bx bx-user-circle"></i></span>Create
                                  Group</a
                                >
                                <a href="javascript:void(0);" class="dropdown-item"
                                  ><span><i class="bx bx-user-plus"></i></span>Invite
                                  Others</a
                                >
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <!-- Chat Search -->
                      <div class="user-chat-search">
                        <form>
                          <span class="form-control-feedback"
                            ><i class="bx bx-search"></i
                          ></span>
                          <input
                            type="text"
                            name="chat-search"
                            placeholder="Search"
                            class="form-control"
                          />
                          <div class="user-close-btn-chat">
                            <span class="material-icons">close</span>
                          </div>
                        </form>
                      </div>
                      <!-- /Chat Search -->
                    </div>
                  </div>
                  <!-- /Left Chat Title -->

                  <!-- Top Online Contacts -->
                  <div class="top-online-contacts">
                    <div class="fav-title">
                      <h6>Online Now</h6>
                      <a href="javascript:void(0);">View All</a>
                    </div>
                    <div class="swiper-container">
                      <div class="swiper-wrapper d-flex">
                        <div class="swiper-slide">
                          <div class="top-contacts-box">
                            <div class="profile-img online">
                              <img src="@/assets/img/avatar/avatar-2.jpg" alt="" />
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="top-contacts-box">
                            <div class="profile-img online">
                              <img src="@/assets/img/avatar/avatar-1.jpg" alt="" />
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="top-contacts-box">
                            <div class="profile-img online">
                              <img src="@/assets/img/avatar/avatar-7.jpg" alt="" />
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="top-contacts-box">
                            <div class="profile-img online">
                              <img src="@/assets/img/avatar/avatar-5.jpg" alt="" />
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="top-contacts-box">
                            <div class="profile-img online">
                              <img src="@/assets/img/avatar/avatar-3.jpg" alt="" />
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="top-contacts-box">
                            <div class="profile-img online">
                              <img src="@/assets/img/avatar/avatar-2.jpg" alt="" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /Top Online Contacts -->

                  <div class="sidebar-body chat-body" id="chatsidebar">
                    <!-- Left Chat Title -->
                    <div
                      class="d-flex justify-content-between align-items-center ps-0 pe-0"
                    >
                      <div class="fav-title pin-chat">
                        <h6>Pinned Chat</h6>
                      </div>
                    </div>
                    <!-- /Left Chat Title -->

                    <ul class="user-list">
                      <li class="user-list-item">
                        <a href="javascript:void(0);">
                          <div class="avatar avatar-online">
                            <img
                              src="@/assets/img/avatar/avatar-2.jpg"
                              class="rounded-circle"
                              alt="image"
                            />
                          </div>
                          <div class="users-list-body">
                            <div>
                              <h5>Mark Villiams</h5>
                              <p>Have you called them?</p>
                            </div>
                            <div class="last-chat-time">
                              <small class="text-muted">10:20 PM</small>
                              <div class="chat-pin">
                                <i class="bx bx-pin me-2"></i>
                                <i class="bx bx-check-double"></i>
                              </div>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="user-list-item">
                        <a href="javascript:void(0);">
                          <div>
                            <div class="avatar">
                              <img
                                src="@/assets/img/avatar/avatar-1.jpg"
                                class="rounded-circle"
                                alt="image"
                              />
                            </div>
                          </div>
                          <div class="users-list-body">
                            <div>
                              <h5>Elizabeth Sosa</h5>
                              <p>
                                <span class="animate-typing-col"
                                  >Typing
                                  <span class="dot"></span>
                                  <span class="dot"></span>
                                  <span class="dot"></span>
                                </span>
                              </p>
                            </div>
                            <div class="last-chat-time">
                              <small class="text-muted">Yesterday</small>
                              <div class="chat-pin">
                                <i class="bx bx-pin"></i>
                              </div>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="user-list-item">
                        <a href="javascript:void(0);">
                          <div class="avatar avatar-online">
                            <img
                              src="@/assets/img/avatar/avatar-5.jpg"
                              class="rounded-circle"
                              alt="image"
                            />
                          </div>
                          <div class="users-list-body">
                            <div>
                              <h5>Michael Howard</h5>
                              <p>Thank you</p>
                            </div>
                            <div class="last-chat-time">
                              <small class="text-muted">10:20 PM</small>
                              <div class="chat-pin">
                                <i class="bx bx-pin me-2"></i>
                                <i class="bx bx-check-double green-check"></i>
                              </div>
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                    <!-- Left Chat Title -->
                    <div
                      class="d-flex justify-content-between align-items-center ps-0 pe-0"
                    >
                      <div class="fav-title pin-chat">
                        <h6>Recent Chat</h6>
                      </div>
                    </div>
                    <!-- /Left Chat Title -->
                    <ul class="user-list">
                      <li class="user-list-item">
                        <a href="javascript:void(0);">
                          <div class="avatar avatar-online">
                            <img
                              src="@/assets/img/avatar/avatar-3.jpg"
                              class="rounded-circle"
                              alt="image"
                            />
                          </div>
                          <div class="users-list-body">
                            <div>
                              <h5>Horace Keene</h5>
                              <p>Have you called them?</p>
                            </div>
                            <div class="last-chat-time">
                              <small class="text-muted">Just Now</small>
                              <div class="new-message-count">11</div>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="user-list-item">
                        <a href="javascript:void(0);">
                          <div>
                            <div class="avatar avatar-online">
                              <img
                                src="@/assets/img/avatar/avatar-3.jpg"
                                class="rounded-circle"
                                alt="image"
                              />
                            </div>
                          </div>
                          <div class="users-list-body">
                            <div>
                              <h5>Hollis Tran</h5>
                              <p><i class="bx bx-video me-1"></i>Video</p>
                            </div>
                            <div class="last-chat-time">
                              <small class="text-muted">Yesterday</small>
                              <div class="chat-pin">
                                <i class="bx bx-check"></i>
                              </div>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="user-list-item">
                        <a href="javascript:void(0);">
                          <div class="avatar">
                            <img
                              src="@/assets/img/avatar/avatar-4.jpg"
                              class="rounded-circle"
                              alt="image"
                            />
                          </div>
                          <div class="users-list-body">
                            <div>
                              <h5>James Albert</h5>
                              <p><i class="bx bx-file me-1"></i>Project Tools.doc</p>
                            </div>
                            <div class="last-chat-time">
                              <small class="text-muted">10:20 PM</small>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="user-list-item">
                        <a href="javascript:void(0);">
                          <div>
                            <div class="avatar avatar-online">
                              <img
                                src="@/assets/img/avatar/avatar-9.jpg"
                                class="rounded-circle"
                                alt="image"
                              />
                            </div>
                          </div>
                          <div class="users-list-body">
                            <div>
                              <h5>Debra Jones</h5>
                              <p><i class="bx bx-microphone me-1"></i>Audio</p>
                            </div>
                            <div class="last-chat-time">
                              <small class="text-muted">12:30 PM</small>
                              <div class="chat-pin">
                                <i class="bx bx-check-double green-check"></i>
                              </div>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="user-list-item">
                        <a href="javascript:void(0);">
                          <div>
                            <div class="avatar">
                              <img
                                src="@/assets/img/avatar/avatar-7.jpg"
                                class="rounded-circle"
                                alt="image"
                              />
                            </div>
                          </div>
                          <div class="users-list-body">
                            <div>
                              <h5>Dina Brown</h5>
                              <p>Have you called them?</p>
                            </div>
                            <div class="last-chat-time">
                              <small class="text-muted">Yesterday</small>
                              <div class="chat-pin">
                                <i class="bx bx-microphone-off"></i>
                              </div>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="user-list-item">
                        <a href="javascript:void(0);">
                          <div>
                            <div class="avatar avatar-online">
                              <img
                                src="@/assets/img/avatar/avatar-8.jpg"
                                class="rounded-circle"
                                alt="image"
                              />
                            </div>
                          </div>
                          <div class="users-list-body">
                            <div>
                              <h5>Judy Mercer</h5>
                              <p class="missed-call-col">
                                <i class="bx bx-phone-incoming me-1"></i>Missed Call
                              </p>
                            </div>
                            <div class="last-chat-time">
                              <small class="text-muted">25/July/23</small>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li class="user-list-item">
                        <a href="javascript:void(0);">
                          <div>
                            <div class="avatar">
                              <img
                                src="@/assets/img/avatar/avatar-6.jpg"
                                class="rounded-circle"
                                alt="image"
                              />
                            </div>
                          </div>
                          <div class="users-list-body">
                            <div>
                              <h5>Richard Ohare</h5>
                              <p><i class="bx bx-image-alt me-1"></i>Photo</p>
                            </div>
                            <div class="last-chat-time">
                              <small class="text-muted">27/July/23</small>
                              <div class="chat-pin">
                                <i class="bx bx-check-double"></i>
                              </div>
                            </div>
                          </div>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </perfect-scrollbar>
            </div>
            <!-- / Chats sidebar -->
          </div>
          <!-- /Sidebar group -->

          <!-- Chat -->
          <chat-content></chat-content>
          <!-- /Chat -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { PerfectScrollbar } from "vue3-perfect-scrollbar";
import "vue3-perfect-scrollbar/dist/vue3-perfect-scrollbar.css";
export default {
  components: {
    PerfectScrollbar,
  },
  data() {
    return {
      settings: {
        suppressScrollX: true,
      },
    };
  },
  methods: {
    scrollHanle() {},
  },
};
</script>
