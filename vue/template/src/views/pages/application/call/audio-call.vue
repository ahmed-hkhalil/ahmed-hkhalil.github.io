<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>

  <div class="page-wrapper">
    <div class="content">
      <div class="page-header d-flex justify-content-end">
        <div>
          <ul class="table-top-head">
            <li>
              <a data-bs-toggle="tooltip" data-bs-placement="top" title="rotate"
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
        </div>
      </div>

      <!-- /product list -->
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-xl-12">
              <div class="conference-meet-group">
                <div class="meeting-list" ref="meetingList">
                  <!-- Horizontal View -->
                  <div class="join-contents horizontal-view fade-whiteboard">
                    <div class="join-video audio-calls user-active">
                      <div class="audio-call-group">
                        <ul>
                          <li class="active">
                            <div class="avatar">
                              <img
                                src="@/assets/img/avatar/avatar-2.jpg"
                                class="rounded-circle"
                                alt="image"
                              />
                              <div class="more-icon">
                                <a href="javascript:void(0);">
                                  <i class="feather feather-radio"></i>
                                </a>
                              </div>
                            </div>
                            <div class="user-audio-call">
                              <h5>Mark Villiams</h5>
                            </div>
                          </li>
                          <li>
                            <div class="avatar">
                              <img
                                src="@/assets/img/users/user-16.jpg"
                                class="rounded-circle"
                                alt="image"
                              />
                              <div class="more-icon audio-more-icon">
                                <a href="javascript:void(0);" class="other-mic-off">
                                  <i class="bx bx-microphone"></i>
                                </a>
                              </div>
                            </div>
                            <div class="user-audio-call">
                              <h5>Benjamin</h5>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="record-time">
                        <span>40:12</span>
                      </div>
                      <div class="meet-drop meet-mutes-bottom">
                        <ul>
                          <li>
                            <a
                              href="javascript:void(0);"
                              @click="handleShowMessageClick"
                              id="show-message"
                              ><i class="bx bx-message-alt-dots"></i
                            ></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- /Horizontal View -->
                </div>
                <div
                  class="right-user-side chat-rooms theiaStickySidebar mb-2"
                  ref="chatRooms"
                  id="chat-room"
                >
                  <perfect-scrollbar
                    class="scroll-area"
                    :settings="settings"
                    @ps-scroll-y="scrollHanle"
                  >
                    <div class="slime-grp">
                      <div class="left-chat-title">
                        <div class="chat-title">
                          <h4>Message</h4>
                        </div>
                        <div class="contact-close_call">
                          <a
                            href="javascript:void(0);"
                            @click="handleCloseProfileClick"
                            class="close_profile close_profile4"
                          >
                            <vue-feather type="x"></vue-feather>
                          </a>
                        </div>
                      </div>
                      <div class="card-body-blk slimscroll p-0">
                        <div class="chat-msg-blk">
                          <div class="chats">
                            <div class="chat-avatar">
                              <img
                                src="@/assets/img/users/user-01.jpg"
                                class="dreams_chat"
                                alt="image"
                              />
                            </div>
                            <div class="chat-content">
                              <div class="message-content">
                                <h4>Hi Everyone.!</h4>
                              </div>
                              <div class="chat-profile-name d-flex justify-content-end">
                                <h6>10:00 AM</h6>
                              </div>
                            </div>
                          </div>
                          <div class="chats chats-right">
                            <div class="chat-content">
                              <div class="message-content">
                                <h4>
                                  Good Morning..! Today we have meeting about the new
                                  product.
                                </h4>
                              </div>
                              <div class="chat-profile-name text-end">
                                <h6><i class="bx bx-check-double"></i> 10:00</h6>
                              </div>
                            </div>
                            <div class="chat-avatar">
                              <img
                                src="@/assets/img/users/user-02.jpg"
                                class="dreams_chat"
                                alt="image"
                              />
                            </div>
                          </div>
                          <div class="chats">
                            <div class="chat-avatar">
                              <img
                                src="@/assets/img/users/user-01.jpg"
                                class="dreams_chat"
                                alt="image"
                              />
                            </div>
                            <div class="chat-content">
                              <div class="message-content">
                                <h4>Hi.! Good Morning all.</h4>
                              </div>
                              <div class="chat-profile-name d-flex justify-content-end">
                                <h6>10:00 AM</h6>
                              </div>
                            </div>
                          </div>
                          <div class="chats">
                            <div class="chat-avatar">
                              <img
                                src="@/assets/img/users/user-01.jpg"
                                class="dreams_chat"
                                alt="image"
                              />
                            </div>
                            <div class="chat-content">
                              <div class="message-content">
                                <h4>Nice..which category it belongs to?</h4>
                              </div>
                              <div class="chat-profile-name d-flex justify-content-end">
                                <h6>10:00 AM</h6>
                              </div>
                            </div>
                          </div>
                          <div class="chats">
                            <div class="chat-avatar">
                              <img
                                src="@/assets/img/users/user-01.jpg"
                                class="dreams_chat"
                                alt="image"
                              />
                            </div>
                            <div class="chat-content">
                              <div class="message-content">
                                <h4>
                                  Great.! This is the second new product that comes in
                                  this week.
                                </h4>
                              </div>
                              <div class="chat-profile-name d-flex justify-content-end">
                                <h6>10:00 AM</h6>
                              </div>
                            </div>
                          </div>
                          <div class="chats">
                            <div class="chat-avatar">
                              <img
                                src="@/assets/img/users/user-01.jpg"
                                class="dreams_chat"
                                alt="image"
                              />
                            </div>
                            <div class="chat-content">
                              <div class="message-content">
                                <h4>Hi.! Good Morning all.</h4>
                              </div>
                              <div class="chat-profile-name d-flex justify-content-end">
                                <h6>10:00 AM</h6>
                              </div>
                            </div>
                          </div>
                          <div class="chats">
                            <div class="chat-avatar">
                              <img
                                src="@/assets/img/users/user-01.jpg"
                                class="dreams_chat"
                                alt="image"
                              />
                            </div>
                            <div class="chat-content">
                              <div class="message-content">
                                <h4>Nice..which category it belongs to?</h4>
                              </div>
                              <div class="chat-profile-name d-flex justify-content-end">
                                <h6>10:00 AM</h6>
                              </div>
                            </div>
                          </div>
                          <div class="chats chats-right">
                            <div class="chat-content">
                              <div class="message-content">
                                <h4>
                                  Good Morning..! Today we have meeting about the new
                                  product.
                                </h4>
                              </div>
                              <div class="chat-profile-name text-end">
                                <h6><i class="bx bx-check-double"></i> 10:00</h6>
                              </div>
                            </div>
                            <div class="chat-avatar">
                              <img
                                src="@/assets/img/users/user-02.jpg"
                                class="dreams_chat"
                                alt="image"
                              />
                            </div>
                          </div>
                          <div class="chats">
                            <div class="chat-avatar">
                              <img
                                src="@/assets/img/users/user-01.jpg"
                                class="dreams_chat"
                                alt="image"
                              />
                            </div>
                            <div class="chat-content">
                              <div class="message-content">
                                <h4>
                                  Great.! This is the second new product that comes in
                                  this week.
                                </h4>
                              </div>
                              <div class="chat-profile-name d-flex justify-content-end">
                                <h6>10:00 AM</h6>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="chat-footer">
                          <form>
                            <div class="smile-col comman-icon">
                              <a href="javascript:void(0);"
                                ><i class="far fa-smile"></i
                              ></a>
                            </div>
                            <div class="attach-col comman-icon">
                              <a href="javascript:void(0);"
                                ><i class="fas fa-paperclip"></i
                              ></a>
                            </div>
                            <div class="micro-col comman-icon">
                              <a href="javascript:void(0);"
                                ><i class="bx bx-microphone"></i
                              ></a>
                            </div>
                            <input
                              type="text"
                              class="form-control chat_form"
                              placeholder="Enter Message....."
                            />
                            <div class="send-chat comman-icon">
                              <a href="javascript:void(0);"
                                ><vue-feather type="send"></vue-feather
                              ></a>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </perfect-scrollbar>
                </div>
              </div>
              <div class="meet-call-menu-blk">
                <div class="video-call-action">
                  <ul class="nav">
                    <li>
                      <a
                        href="javascript:void(0);"
                        class="mute-bt"
                        @click="toggleMute"
                        :title="mute ? 'Unmute Audio' : 'Mute Audio'"
                        :class="muteButtonClass"
                      >
                        <i
                          :class="mute ? 'bx bx-microphone-off' : 'bx bx-microphone'"
                        ></i>
                      </a>
                    </li>

                    <li>
                      <a href="javascript:void(0);" class="call-end"
                        ><vue-feather type="phone"></vue-feather
                      ></a>
                    </li>
                    <li>
                      <a href="javascript:void(0);"><i class="bx bx-video-off"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /product list -->
    </div>
  </div>
</template>

<script>
import { PerfectScrollbar } from "vue3-perfect-scrollbar";
import "vue3-perfect-scrollbar/dist/vue3-perfect-scrollbar.css";
export default {
  data() {
    return {
      settings: {
        suppressScrollX: true,
      },
      mute: false,
      micView: false,
      vidView: false,
    };
  },
  components: {
    PerfectScrollbar,
  },
  computed: {
    muteButtonClass() {
      return this.mute ? "stop" : "";
    },
  },
  methods: {
    scrollHanle() {},
    handleShowMessageClick() {
      const meetingList = this.$refs.meetingList;
      const chatRooms = this.$refs.chatRooms;

      if (meetingList && chatRooms) {
        meetingList.classList.add("add-meeting");
        chatRooms.classList.add("open-chats");
      }
    },
    handleCloseProfileClick() {
      if (this.$refs.meetingList && this.$refs.chatRooms) {
        this.$refs.meetingList.classList.remove("add-meeting");
        this.$refs.chatRooms.classList.remove("open-chats");
      }
    },
    toggleMute() {
      this.mute = !this.mute;
      this.micView = this.mute;
      this.vidView = this.mute;
    },
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
