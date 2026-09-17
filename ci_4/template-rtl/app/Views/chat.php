<!DOCTYPE html>
<html lang="en">
	<head>
		<?= $this->include('partials/title-meta') ?>
		<?= $this->include('partials/head-css') ?>	
        
		<!-- Fancybox -->
		<link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">
		<!-- Boxicons CSS -->
		<link rel="stylesheet" href="assets/plugins/boxicons/css/boxicons.min.css">
		<!-- Mobile CSS-->
		<link rel="stylesheet" href="assets/plugins/intltelinput/css/intlTelInput.css">
    	<link rel="stylesheet" href="assets/plugins/intltelinput/css/demo.css">
		<!-- Swiper CSS -->
		<link rel="stylesheet" href="assets/plugins/swiper/swiper.min.css">
		<!-- animation CSS -->
		<link rel="stylesheet" href="assets/css/animate.css">
		<!-- Summernote CSS -->
        <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">

	</head>
    <body class="main-chat-blk">
		<div id="global-loader">
			<div class="whirly-loader"> </div>
		</div>
		<!-- Main Wrapper -->
		<div class="main-wrapper">
			<?= $this->include('partials/menu') ?>
   
            <div class="page-wrapper chat-page-wrapper">
				<div class="content">

					<!-- sidebar group -->
					<div class="sidebar-group left-sidebar chat_sidebar">

						<!-- Chats sidebar -->
						<div id="chats" class="left-sidebar-wrap sidebar active slimscroll">

							<div class="slimscroll-active-sidebar">

								<!-- Left Chat Title -->
								<div class="left-chat-title all-chats d-flex justify-content-between align-items-center">
									<div class="setting-title-head">
										<h4> All Chats</h4>
									</div>
									<div class="add-section">
										<ul>
											<li><a href="javascript:void(0);" class="user-chat-search-btn"><i
														class="bx bx-search"></i></a></li>
											<li>
												<div class="chat-action-btns">
													<div class="chat-action-col">
														<a class="#" href="#" data-bs-toggle="dropdown"
															aria-expanded="false">
															<i class="bx bx-dots-vertical-rounded"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-end">
															<a href="javascript:void(0);" class="dropdown-item "><span><i
																		class="bx bx-message-rounded-add"></i></span>New Chat </a>
															<a href="javascript:void(0);" class="dropdown-item"><span><i
																		class="bx bx-user-circle"></i></span>Create Group</a>
															<a href="javascript:void(0);" class="dropdown-item"><span><i
																		class="bx bx-user-plus"></i></span>Invite Others</a>
														</div>
													</div>
												</div>
											</li>
										</ul>
										<!-- Chat Search -->
										<div class="user-chat-search">
											<form>
												<span class="form-control-feedback"><i class="bx bx-search"></i></span>
												<input type="text" name="chat-search" placeholder="Search" class="form-control">
												<div class="user-close-btn-chat"><span class="material-icons">close</span></div>
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
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="top-contacts-box">
													<div class="profile-img online">
														<img src="<?php echo base_url();?>assets/img/avatar/avatar-2.jpg"
															alt="">
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="top-contacts-box">
													<div class="profile-img online">
														<img src="<?php echo base_url();?>assets/img/avatar/avatar-1.jpg"
															alt="">
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="top-contacts-box">
													<div class="profile-img online">
														<img src="<?php echo base_url();?>assets/img/avatar/avatar-7.jpg"
															alt="">
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="top-contacts-box">
													<div class="profile-img online">
														<img src="<?php echo base_url();?>assets/img/avatar/avatar-5.jpg"
															alt="">
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="top-contacts-box">
													<div class="profile-img online">
														<img src="<?php echo base_url();?>assets/img/avatar/avatar-3.jpg"
															alt="">
													</div>
												</div>
											</div>
											<div class="swiper-slide">
												<div class="top-contacts-box">
													<div class="profile-img online">
														<img src="<?php echo base_url();?>assets/img/avatar/avatar-2.jpg"
															alt="">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Top Online Contacts -->

								<div class="sidebar-body chat-body" id="chatsidebar">

									<!-- Left Chat Title -->
									<div class="d-flex justify-content-between align-items-center ps-0 pe-0">
										<div class="fav-title pin-chat">
											<h6>Pinned Chat</h6>
										</div>
									</div>
									<!-- /Left Chat Title -->

									<ul class="user-list">
										<li class="user-list-item">
											<a href="javascript:void(0);">
												<div class="avatar avatar-online">
													<img src="<?php echo base_url();?>assets/img/avatar/avatar-2.jpg"
														class="rounded-circle" alt="image">
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
													<div class="avatar ">
														<img src="<?php echo base_url();?>assets/img/avatar/avatar-1.jpg"
															class="rounded-circle" alt="image">
													</div>
												</div>
												<div class="users-list-body">
													<div>
														<h5>Elizabeth Sosa</h5>
														<p><span class="animate-typing-col">Typing
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
													<img src="<?php echo base_url();?>assets/img/avatar/avatar-5.jpg"
														class="rounded-circle" alt="image">
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
									<div class="d-flex justify-content-between align-items-center ps-0 pe-0">
										<div class="fav-title pin-chat">
											<h6>Recent Chat</h6>
										</div>
									</div>
									<!-- /Left Chat Title -->
									<ul class="user-list">
										<li class="user-list-item">
											<a href="javascript:void(0);">
												<div class="avatar avatar-online">
													<img src="<?php echo base_url();?>assets/img/avatar/avatar-3.jpg"
														class="rounded-circle" alt="image">
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
														<img src="<?php echo base_url();?>assets/img/avatar/avatar-3.jpg"
															class="rounded-circle" alt="image">
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
													<img src="<?php echo base_url();?>assets/img/avatar/avatar-4.jpg"
														class="rounded-circle" alt="image">
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
														<img src="<?php echo base_url();?>assets/img/avatar/avatar-9.jpg"
															class="rounded-circle" alt="image">
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
													<div class="avatar ">
														<img src="<?php echo base_url();?>assets/img/avatar/avatar-7.jpg"
															class="rounded-circle" alt="image">
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
														<img src="<?php echo base_url();?>assets/img/avatar/avatar-8.jpg"
															class="rounded-circle" alt="image">
													</div>
												</div>
												<div class="users-list-body">
													<div>
														<h5>Judy Mercer</h5>
														<p class="missed-call-col"><i class="bx bx-phone-incoming me-1"></i>Missed
															Call</p>
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
														<img src="<?php echo base_url();?>assets/img/avatar/avatar-6.jpg"
															class="rounded-circle" alt="image">
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

						</div>
						<!-- / Chats sidebar -->
					</div>
					<!-- /Sidebar group -->

					<!-- Chat -->
					<div class="chat chat-messages" id="middle">
						<div class="slimscroll">
							<div class="chat-header">
								<div class="user-details">
									<div class="d-lg-none">
										<ul class="list-inline mt-2 me-2">
											<li class="list-inline-item">
												<a class="text-muted px-0 left_sides" href="#" data-chat="open">
													<i class="fas fa-arrow-left"></i>
												</a>
											</li>
										</ul>
									</div>
									<figure class="avatar ms-1">
										<img src="<?php echo base_url();?>assets/img/avatar/avatar-2.jpg" class="rounded-circle"
											alt="image">
									</figure>
									<div class="mt-1">
										<h5>Mark Villiams</h5>
										<small class="last-seen">
											Last Seen at 07:15 PM
										</small>
									</div>
								</div>
								<div class="chat-options ">
									<ul class="list-inline">
										<li class="list-inline-item">
											<a href="javascript:void(0)" class="btn btn-outline-light chat-search-btn"
												data-bs-toggle="tooltip" data-bs-placement="bottom" title="Search">
												<i class="bx bx-search"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a href="{{ url('video-call" class="btn btn-outline-light"
												data-bs-toggle="tooltip" data-bs-placement="bottom" title="Video Call">
												<i class="bx bx-video"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a href="{{ url('audio-call" class="btn btn-outline-light"
												data-bs-toggle="tooltip" data-bs-placement="bottom" title="Voice Call">
												<i class="bx bx-phone"></i>
											</a>
										</li>
										<li class="list-inline-item dream_profile_menu">
											<a href="javascript:void(0)" class="btn btn-outline-light not-chat-user">
												<i class="bx bx-info-circle"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a class="btn btn-outline-light no-bg" href="#" data-bs-toggle="dropdown">
												<i class="bx bx-dots-vertical-rounded"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item "><span><i
															class="bx bx-x"></i></span>Close Chat </a>
												<a href="#" class="dropdown-item"><span><i
															class="bx bx-volume-mute"></i></span>Mute Notification</a>
												<a href="#" class="dropdown-item"><span><i
															class="bx bx-time-five"></i></span>Disappearing Message</a>
												<a href="#" class="dropdown-item"><span><i
															class="bx bx-brush-alt"></i></span>Clear
													Message</a>
												<a href="#" class="dropdown-item"><span><i
															class="bx bx-trash-alt"></i></span>Delete Chat</a>
												<a href="#" class="dropdown-item"><span><i
															class="bx bx-dislike"></i></span>Report</a>
												<a href="#" class="dropdown-item"><span><i
															class="bx bx-block"></i></span>Block</a>
											</div>
										</li>
									</ul>
								</div>
								<!-- Chat Search -->
								<div class="chat-search">
									<form>
										<span class="form-control-feedback"><i class="bx bx-search"></i></span>
										<input type="text" name="chat-search" placeholder="Search Chats"
											class="form-control">
										<div class="close-btn-chat"><span class="material-icons">close</span></div>
									</form>
								</div>
								<!-- /Chat Search -->
							</div>
							<div class="chat-body">
								<div class="messages">
									<div class="chats">
										<div class="chat-avatar">
											<img src="<?php echo base_url();?>assets/img/avatar/avatar-2.jpg"
												class="rounded-circle dreams_chat" alt="image">
										</div>
										<div class="chat-content">
											<div class="chat-profile-name">
												<h6>Mark Villiams<span>8:16 PM</span></h6>
												<div class="chat-action-btns ms-3">
													<div class="chat-action-col">
														<a class="#" href="#" data-bs-toggle="dropdown">
															<i class="bx bx-dots-horizontal-rounded"></i>
														</a>
														<div class="dropdown-menu chat-drop-menu dropdown-menu-end">
															<a href="#" class="dropdown-item message-info-left"><span><i
																		class="bx bx-info-circle"></i></span>Message Info </a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-share"></i></span>Reply</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-smile"></i></span>React</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-reply"></i></span>Forward</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-star"></i></span>Star Message</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-dislike"></i></span>Report</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-trash"></i></span>Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="message-content">
												Hello <a href="javascript:void(0);">@Alex</a> Thank you for the beautiful web
												design ahead schedule.
												<div class="emoj-group">
													<ul>
														<li class="emoj-action"><a href="javascript:void(0);"><i
																	class="bx bx-smile"></i></a>
															<div class="emoj-group-list">
																<ul>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-01.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-02.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-03.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-04.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-05.svg"
																				alt="Icon"></a></li>
																	<li class="add-emoj"><a href="javascript:void(0);"><i
																				class="bx bx-plus"></i></a></li>
																</ul>
															</div>
														</li>
														<li><a href="#"><i class="bx bx-share"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="chat-line">
										<span class="chat-date">Today, July 24</span>
									</div>
									<div class="chats chats-right">
										<div class="chat-content">
											<div class="chat-profile-name text-end">
												<h6>Alex Smith<span>8:16 PM</span></h6>
												<div class="chat-action-btns ms-3">
													<div class="chat-action-col">
														<a class="#" href="#" data-bs-toggle="dropdown">
															<i class="bx bx-dots-horizontal-rounded"></i>
														</a>
														<div class="dropdown-menu chat-drop-menu dropdown-menu-end">
															<a href="#" class="dropdown-item message-info-left"><span><i
																		class="bx bx-info-circle"></i></span>Message Info </a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-share"></i></span>Reply</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-smile"></i></span>React</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-reply"></i></span>Forward</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-star"></i></span>Star Message</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-dislike"></i></span>Report</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-trash"></i></span>Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="message-content ">
												<div class="emoj-group rig-emoji-group">
													<ul>
														<li class="emoj-action"><a href="javascript:void(0);"><i
																	class="bx bx-smile"></i></a>
															<div class="emoj-group-list">
																<ul>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-01.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-02.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-03.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-04.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-05.svg"
																				alt="Icon"></a></li>
																	<li class="add-emoj"><a href="javascript:void(0);"><i
																				class="bx bx-plus"></i></a></li>
																</ul>
															</div>
														</li>
														<li><a href="#"><i class="bx bx-share"></i></a>
														</li>
													</ul>
												</div>
												<div class="chat-voice-group">
													<ul>
														<li><a href="javascript:void(0);"><span><img
																		src="<?php echo base_url();?>assets/img/icons/play-01.svg"
																		alt="image"></span></a></li>
														<li><img src="<?php echo base_url();?>assets/img/icons/voice.svg"
																alt="image"></li>
														<li>0:05</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="chat-avatar">
											<img src="<?php echo base_url();?>assets/img/avatar/avatar-10.jpg"
												class="rounded-circle dreams_chat" alt="image">
										</div>
									</div>
									<div class="chats">
										<div class="chat-avatar">
											<img src="<?php echo base_url();?>assets/img/avatar/avatar-2.jpg"
												class="rounded-circle dreams_chat" alt="image">
										</div>
										<div class="chat-content">
											<div class="chat-profile-name">
												<h6>Mark Villiams<span>8:16 PM</span><span class="check-star"><i
															class="bx bxs-star"></i></span></h6>
												<div class="chat-action-btns ms-2">
													<div class="chat-action-col">
														<a class="#" href="#" data-bs-toggle="dropdown">
															<i class="bx bx-dots-horizontal-rounded"></i>
														</a>
														<div class="dropdown-menu chat-drop-menu dropdown-menu-end">
															<a href="#" class="dropdown-item message-info-left"><span><i
																		class="bx bx-info-circle"></i></span>Message Info </a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-share"></i></span>Reply</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-smile"></i></span>React</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-reply"></i></span>Forward</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bxs-star"></i></span>Unstar Message</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-dislike"></i></span>Report</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-trash"></i></span>Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="message-content award-link chat-award-link">
												<a href="javascript:void(0);"
													class="mb-1">https://www.youtube.com/watch?v=GCmL3mS0Psk</a>
												<img src="<?php echo base_url();?>assets/img/sending-img.png" alt="img">
												<div class="emoj-group">
													<ul>
														<li class="emoj-action"><a href="javascript:void(0);"><i
																	class="bx bx-smile"></i></a>
															<div class="emoj-group-list">
																<ul>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-01.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-02.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-03.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-04.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-05.svg"
																				alt="Icon"></a></li>
																	<li class="add-emoj"><a href="javascript:void(0);"><i
																				class="bx bx-plus"></i></a></li>
																</ul>
															</div>
														</li>
														<li><a href="#"><i class="bx bx-share"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="chats chats-right">
										<div class="chat-content">
											<div class="chat-profile-name justify-content-end">
												<h6>Alex Smith<span>8:16 PM</span></h6>
												<div class="chat-action-btns ms-3">
													<div class="chat-action-col">
														<a class="#" href="#" data-bs-toggle="dropdown">
															<i class="bx bx-dots-horizontal-rounded"></i>
														</a>
														<div class="dropdown-menu chat-drop-menu dropdown-menu-end">
															<a href="#" class="dropdown-item message-info-left"><span><i
																		class="bx bx-info-circle"></i></span>Message Info </a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-share"></i></span>Reply</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-smile"></i></span>React</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-reply"></i></span>Forward</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-star"></i></span>Star Message</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-dislike"></i></span>Report</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-trash"></i></span>Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="message-content fancy-msg-box">
												<div class="emoj-group wrap-emoji-group ">
													<ul>
														<li class="emoj-action"><a href="javascript:void(0);"><i
																	class="bx bx-smile"></i></a>
															<div class="emoj-group-list">
																<ul>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-01.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-02.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-03.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-04.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-05.svg"
																				alt="Icon"></a></li>
																	<li class="add-emoj"><a href="javascript:void(0);"><i
																				class="bx bx-plus"></i></a></li>
																</ul>
															</div>
														</li>
														<li><a href="javascript:void(0);"><i class="bx bx-share"></i></a>
														</li>
													</ul>
												</div>
												<div class="download-col">
													<ul class="nav mb-0">
														<li>
															<div class="image-download-col">
																<a href="<?php echo base_url();?>assets/img/media/media-02.jpg"
																	data-fancybox="gallery" class="fancybox">
																	<img src="<?php echo base_url();?>assets/img/media/media-02.jpg"
																		alt="">
																</a>

															</div>
														</li>
														<li>
															<div class="image-download-col ">
																<a href="<?php echo base_url();?>assets/img/media/media-03.jpg"
																	data-fancybox="gallery" class="fancybox">
																	<img src="<?php echo base_url();?>assets/img/media/media-03.jpg"
																		alt="">
																</a>
															</div>
														</li>
														<li>
															<div class="image-download-col image-not-download">
																<a href="<?php echo base_url();?>assets/img/media/media-01.jpg"
																	data-fancybox="gallery" class="fancybox">
																	<img src="<?php echo base_url();?>assets/img/media/media-01.jpg"
																		alt="">
																	<span>10+</span>
																</a>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="chat-avatar">
											<img src="<?php echo base_url();?>assets/img/avatar/avatar-10.jpg"
												class="rounded-circle dreams_chat" alt="image">
										</div>
									</div>

									<div class="chats">
										<div class="chat-avatar">
											<img src="<?php echo base_url();?>assets/img/avatar/avatar-2.jpg"
												class="rounded-circle dreams_chat" alt="image">
										</div>
										<div class="chat-content">
											<div class="chat-profile-name">
												<h6>Mark Villiams<span>8:16 PM</span></h6>
												<div class="chat-action-btns ms-3">
													<div class="chat-action-col">
														<a class="#" href="#" data-bs-toggle="dropdown">
															<i class="bx bx-dots-horizontal-rounded"></i>
														</a>
														<div class="dropdown-menu chat-drop-menu dropdown-menu-end">
															<a href="#" class="dropdown-item message-info-left"><span><i
																		class="bx bx-info-circle"></i></span>Message Info </a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-share"></i></span>Reply</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-smile"></i></span>React</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-reply"></i></span>Forward</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-star"></i></span>Star Message</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-dislike"></i></span>Report</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-trash"></i></span>Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="message-content review-files">
												<p class="d-flex align-items-center">Please check and review the files<span
														class="ms-1 d-flex"><img
															src="<?php echo base_url();?>assets/img/icons/smile-chat.svg"
															alt="Icon"></span></p>
												<div class="file-download d-flex align-items-center mb-0">
													<div class="file-type d-flex align-items-center justify-content-center me-2">
														<i class="bx bxs-file-doc"></i>
													</div>
													<div class="file-details">
														<span class="file-name">Landing_page_V1.doc</span>
														<ul>
															<li>80 Bytes</li>
															<li><a href="javascript:void(0);">Download</a></li>
														</ul>
													</div>
												</div>
												<div class="emoj-group">
													<ul>
														<li class="emoj-action"><a href="javascript:void(0);"><i
																	class="bx bx-smile"></i></a>
															<div class="emoj-group-list">
																<ul>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-01.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-02.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-03.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-04.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-05.svg"
																				alt="Icon"></a></li>
																	<li class="add-emoj"><a href="javascript:void(0);"><i
																				class="bx bx-plus"></i></a></li>
																</ul>
															</div>
														</li>
														<li><a href="#"><i class="bx bx-share"></i></a>
														</li>
													</ul>
												</div>
											</div>
											<div class="like-chat-grp">
												<ul>
													<li class="like-chat"><a href="javascript:void(0);">2<img
																src="<?php echo base_url();?>assets/img/icons/like.svg"
																alt="Icon"></a></li>
													<li class="comment-chat"><a href="javascript:void(0);">2<img
																src="<?php echo base_url();?>assets/img/icons/heart.svg"
																alt="Icon"></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="chats">
										<div class="chat-avatar">
											<img src="<?php echo base_url();?>assets/img/avatar/avatar-2.jpg"
												class="rounded-circle dreams_chat" alt="image">
										</div>
										<div class="chat-content">
											<div class="chat-profile-name">
												<h6>Mark Villiams<span>8:16 PM</span></h6>
												<div class="chat-action-btns ms-3">
													<div class="chat-action-col">
														<a class="#" href="#" data-bs-toggle="dropdown">
															<i class="bx bx-dots-horizontal-rounded"></i>
														</a>
														<div class="dropdown-menu chat-drop-menu dropdown-menu-end">
															<a href="#" class="dropdown-item message-info-left"><span><i
																		class="bx bx-info-circle"></i></span>Message Info </a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-share"></i></span>Reply</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-smile"></i></span>React</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-reply"></i></span>Forward</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-star"></i></span>Star Message</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-dislike"></i></span>Report</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-trash"></i></span>Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="message-content">
												Thank you for your support
												<div class="emoj-group">
													<ul>
														<li class="emoj-action"><a href="javascript:void(0);"><i
																	class="bx bx-smile"></i></a>
															<div class="emoj-group-list">
																<ul>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-01.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-02.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-03.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-04.svg"
																				alt="Icon"></a></li>
																	<li><a href="javascript:void(0);"><img
																				src="<?php echo base_url();?>assets/img/icons/emoj-icon-05.svg"
																				alt="Icon"></a></li>
																	<li class="add-emoj"><a href="javascript:void(0);"><i
																				class="bx bx-plus"></i></a></li>
																</ul>
															</div>
														</li>
														<li><a href="javascript:void(0);"><i class="bx bx-share"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="chats">
										<div class="chat-avatar">
											<img src="<?php echo base_url();?>assets/img/avatar/avatar-2.jpg"
												class="rounded-circle dreams_chat" alt="image">
										</div>
										<div class="chat-content chat-cont-type">
											<div class="chat-profile-name chat-type-wrapper">
												<p>Mark Villiams Typing...</p>
											</div>
										</div>
									</div>




									<div class="chats forward-chat-msg">
										<div class="chat-avatar">
											<img src="<?php echo base_url();?>assets/img/avatar/avatar-2.jpg"
												class="rounded-circle dreams_chat" alt="image">
										</div>
										<div class="chat-content">
											<div class="chat-profile-name">
												<h6>Mark Villiams<span>8:16 PM</span></h6>
												<div class="chat-action-btns ms-3">
													<div class="chat-action-col">
														<a class="#" href="#" data-bs-toggle="dropdown">
															<i class="bx bx-dots-horizontal-rounded"></i>
														</a>
														<div class="dropdown-menu chat-drop-menu dropdown-menu-end">
															<a href="#" class="dropdown-item message-info-left"><span><i
																		class="bx bx-info-circle"></i></span>Message Info </a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-share"></i></span>Reply</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-smile"></i></span>React</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-reply"></i></span>Forward</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-star"></i></span>Star Message</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-dislike"></i></span>Report</a>
															<a href="#" class="dropdown-item"><span><i
																		class="bx bx-trash"></i></span>Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="message-content">
												Thank you for your support
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="chat-footer">
							<form>
								<div class="smile-foot">
									<div class="chat-action-btns">
										<div class="chat-action-col">
											<a class="action-circle" href="#" data-bs-toggle="dropdown">
												<i class="bx bx-dots-vertical-rounded"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-end">
												<a href="#" class="dropdown-item "><span><i
															class="bx bx-file"></i></span>Document</a>
												<a href="#" class="dropdown-item"><span><i
															class="bx bx-camera"></i></span>Camera</a>
												<a href="#" class="dropdown-item"><span><i
															class="bx bx-image"></i></span>Gallery</a>
												<a href="#" class="dropdown-item"><span><i
															class="bx bx-volume-full"></i></span>Audio</a>
												<a href="#" class="dropdown-item"><span><i
															class="bx bx-map"></i></span>Location</a>
												<a href="#" class="dropdown-item"><span><i
															class="bx bx-user-pin"></i></span>Contact</a>
											</div>
										</div>
									</div>
								</div>
								<div class="smile-foot emoj-action-foot">
									<a href="#" class="action-circle"><i class="bx bx-smile"></i></a>
									<div class="emoj-group-list-foot down-emoji-circle">
										<ul>
											<li><a href="javascript:void(0);"><img
														src="<?php echo base_url();?>assets/img/icons/emoj-icon-01.svg"
														alt="Icon"></a></li>
											<li><a href="javascript:void(0);"><img
														src="<?php echo base_url();?>assets/img/icons/emoj-icon-02.svg"
														alt="Icon"></a></li>
											<li><a href="javascript:void(0);"><img
														src="<?php echo base_url();?>assets/img/icons/emoj-icon-03.svg"
														alt="Icon"></a></li>
											<li><a href="javascript:void(0);"><img
														src="<?php echo base_url();?>assets/img/icons/emoj-icon-04.svg"
														alt="Icon"></a></li>
											<li><a href="javascript:void(0);"><img
														src="<?php echo base_url();?>assets/img/icons/emoj-icon-05.svg"
														alt="Icon"></a></li>
											<li class="add-emoj"><a href="javascript:void(0);"><i class="bx bx-plus"></i></a>
											</li>
										</ul>
									</div>
								</div>
								<div class="smile-foot">
									<a href="#" class="action-circle"><i class="bx bx-microphone-off"></i></a>
								</div>
								<input type="text" class="form-control chat_form" placeholder="Type your message here...">
								<div class="form-buttons">
									<button class="btn send-btn" type="submit">
										<i class="bx bx-paper-plane"></i>
									</button>
								</div>
							</form>
						</div>
					</div>
					<!-- /Chat -->

					<!-- Right sidebar -->
					<div class="right-sidebar right_sidebar_profile right-side-contact hide-right-sidebar" id="middle1">
						<div class="right-sidebar-wrap active">
							<div class="slimscroll">
								<div class="left-chat-title d-flex justify-content-between align-items-center border-bottom-0">
									<div class="fav-title mb-0">
										<h6>Contact Info</h6>
									</div>
									<div class="contact-close_call text-end">
										<a href="#" class="close_profile close-star">
											<i class="bx bxs-star"></i>
										</a>
										<a href="#" class="close_profile close-trash">
											<i class="bx bx-trash"></i>
										</a>
									</div>
								</div>
								<div class="sidebar-body">
									<div class="mt-0 right_sidebar_logo">
										<div class="text-center right-sidebar-profile">
											<figure class="avatar avatar-xl mb-3">
												<img src="<?php echo base_url();?>assets/img/avatar/avatar-2.jpg"
													class="rounded-circle" alt="image">
											</figure>
											<h5 class="profile-name">Mark Villiams</h5>
											<div class="last-seen-profile">
												<span>last seen at 07:15 PM</span>
											</div>
											<div class="chat-options chat-option-profile">
												<ul class="list-inline">
													<li class="list-inline-item">
														<a href="{{ url('audio-call" class="btn btn-outline-light "
															data-bs-toggle="tooltip" data-bs-placement="bottom"
															title="Voice Call">
															<i class="bx bx-phone"></i>
														</a>
													</li>
													<li class="list-inline-item ">
														<a href="{{ url('video-call"
															class="btn btn-outline-light profile-open" data-bs-toggle="tooltip"
															data-bs-placement="bottom" title="Video Call">
															<i class="bx bx-video"></i>
														</a>
													</li>
													<li class="list-inline-item">
														<a href="javascript:void(0)" class="btn btn-outline-light"
															data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chat">
															<i class="bx bx-message-square-dots"></i>
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="chat-member-details">
											<div class="member-details">
												<ul>
													<li>
														<h5>Bio</h5>
													</li>
													<li>
														<h6>Phone</h6>
														<span>555-555-21541</span>
													</li>
													<li>
														<h6>Email Address</h6>
														<span>info@example.com</span>
													</li>
												</ul>
											</div>
										</div>

									</div>
								</div>
								<div class="right-sidebar-head share-media">
									<div class="share-media-blk">
										<h5>Shared Media</h5>
										<a href="javascript:void(0);">View All</a>
									</div>
									<div class="about-media-tabs">
										<nav>
											<div class="nav nav-tabs " id="nav-tab">
												<a class="nav-item nav-link active" id="nav-home-tab" data-bs-toggle="tab"
													href="#info">Photos</a>
												<a class="nav-item nav-link" id="nav-profile-tab1" data-bs-toggle="tab"
													href="#Participants">Videos</a>
												<a class="nav-item nav-link" id="nav-profile-tab2" data-bs-toggle="tab"
													href="#media">File</a>
												<a class="nav-item nav-link" id="nav-profile-tab3" data-bs-toggle="tab"
													href="#link">Link</a>
											</div>
										</nav>
										<div class="tab-content pt-0" id="nav-tabContent">
											<div class="tab-pane fade show active" id="info">
												<ul class="nav share-media-img mb-0">
													<li>
														<a href="<?php echo base_url();?>assets/img/media/media-01.jpg"
															data-fancybox="gallery" class="fancybox">
															<img src="<?php echo base_url();?>assets/img/media/media-01.jpg"
																alt="">
														</a>
													</li>
													<li>
														<a href="<?php echo base_url();?>assets/img/media/media-02.jpg"
															data-fancybox="gallery" class="fancybox">
															<img src="<?php echo base_url();?>assets/img/media/media-02.jpg"
																alt="">
														</a>
													</li>
													<li>
														<a href="<?php echo base_url();?>assets/img/media/media-03.jpg"
															data-fancybox="gallery" class="fancybox">
															<img src="<?php echo base_url();?>assets/img/media/media-03.jpg"
																alt="">
														</a>
													</li>
													<li>
														<a href="<?php echo base_url();?>assets/img/media/media-04.jpg"
															data-fancybox="gallery" class="fancybox">
															<img src="<?php echo base_url();?>assets/img/media/media-04.jpg"
																alt="">
														</a>
													</li>
													<li>
														<a href="<?php echo base_url();?>assets/img/media/media-05.jpg"
															data-fancybox="gallery" class="fancybox">
															<img src="<?php echo base_url();?>assets/img/media/media-05.jpg"
																alt="">
														</a>
													</li>
													<li class="blur-media">
														<a href="<?php echo base_url();?>assets/img/media/media-02.jpg"
															data-fancybox="gallery" class="fancybox">
															<img src="<?php echo base_url();?>assets/img/media/media-02.jpg"
																alt="">
														</a>
														<span>+10</span>
													</li>
												</ul>
											</div>
											<div class="tab-pane fade" id="Participants">
												<ul class="nav share-media-img mb-0">
													<li>
														<a href="https://www.youtube.com/embed/Mj9WJJNp5wA" data-fancybox
															class="fancybox">
															<img src="<?php echo base_url();?>assets/img/media/media-01.jpg"
																alt="img">
															<span><i class="bx bx-play-circle"></i></span>
														</a>
													</li>
													<li>
														<a href="https://www.youtube.com/embed/Mj9WJJNp5wA" data-fancybox
															class="fancybox">
															<img src="<?php echo base_url();?>assets/img/media/media-02.jpg"
																alt="img">
															<span><i class="bx bx-play-circle"></i></span>
														</a>
													</li>
													<li>
														<a href="https://www.youtube.com/embed/Mj9WJJNp5wA" data-fancybox
															class="fancybox">
															<img src="<?php echo base_url();?>assets/img/media/media-03.jpg"
																alt="img">
															<span><i class="bx bx-play-circle"></i></span>
														</a>
													</li>
													<li>
														<a href="https://www.youtube.com/embed/Mj9WJJNp5wA" data-fancybox
															class="fancybox">
															<img src="<?php echo base_url();?>assets/img/media/media-04.jpg"
																alt="img">
															<span><i class="bx bx-play-circle"></i></span>
														</a>
													</li>
													<li>
														<a href="https://www.youtube.com/embed/Mj9WJJNp5wA" data-fancybox
															class="fancybox">
															<img src="<?php echo base_url();?>assets/img/media/media-05.jpg"
																alt="img">
															<span><i class="bx bx-play-circle"></i></span>
														</a>
													</li>
													<li class="blur-media">
														<a href="https://www.youtube.com/embed/Mj9WJJNp5wA" data-fancybox
															class="fancybox">
															<img src="<?php echo base_url();?>assets/img/media/media-03.jpg"
																alt="img">
														</a>
														<span>+10</span>
													</li>
												</ul>
											</div>
											<div class="tab-pane fade" id="media">
												<div class="media-file">
													<div class="media-doc-blk">
														<span><i class="bx bxs-file-doc"></i></span>
														<div class="document-detail">
															<h6>Landing_page_V1.doc</h6>
															<ul>
																<li>12 Mar 2023</li>
																<li>246.3 KB</li>
															</ul>
														</div>
													</div>
													<div class="media-download">
														<a href="javascript:void(0);"><i class="bx bx-download"></i></a>
													</div>
												</div>
												<div class="media-file">
													<div class="media-doc-blk">
														<span><i class="bx bxs-file-pdf"></i></span>
														<div class="document-detail">
															<h6>Design Guideless.pdf</h6>
															<ul>
																<li>12 Mar 2023</li>
																<li>246.3 KB</li>
															</ul>
														</div>
													</div>
													<div class="media-download">
														<a href="javascript:void(0);"><i class="bx bx-download"></i></a>
													</div>
												</div>
												<div class="media-file">
													<div class="media-doc-blk">
														<span><i class="bx bxs-file"></i></span>
														<div class="document-detail">
															<h6>sample site.txt</h6>
															<ul>
																<li>12 Mar 2023</li>
																<li>246.3 KB</li>
															</ul>
														</div>
													</div>
													<div class="media-download">
														<a href="javascript:void(0);"><i class="bx bx-download"></i></a>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="link">
												<div class="media-link-grp">
													<div class="link-img">
														<a href="javascript:void(0);"><img
																src="<?php echo base_url();?>assets/img/media/media-link-01.jpg"
																alt="Img"></a>
													</div>
													<div class="media-link-detail">
														<h6><a href="javascript:void(0);">Digital Marketing Guide</a></h6>
														<span><a
																href="javascript:void(0);">https://elements.envato.com/all-items/blog</a></span>
													</div>
												</div>
												<div class="media-link-grp mb-0">
													<div class="link-img">
														<a href="javascript:void(0);"><img
																src="<?php echo base_url();?>assets/img/media/media-link-02.jpg"
																alt="Img"></a>
													</div>
													<div class="media-link-detail">
														<h6><a href="javascript:void(0);">Blog Post</a></h6>
														<span><a
																href="javascript:void(0);">https://elements.envato.com/blog-post-TXQ5FB8</a></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="chat-message-grp">
									<ul>
										<li>
											<a href="javascript:void(0);" class="star-message-left">
												<div class="stared-group">
													<span class="star-message"> <i class="bx bx-star"></i></span>
													<h6>Starred Messages</h6>
												</div>
												<div class="count-group">
													<span>10</span>
													<i class="bx bx-chevron-right"></i>
												</div>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												<div class="stared-group">
													<span class="mute-message"> <i class="bx bx-microphone-off"></i></span>
													<h6>Mute Notifications</h6>
												</div>
												<div class="count-group">
													<i class="bx bx-chevron-right"></i>
												</div>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												<div class="stared-group">
													<span class="block-message"> <i class="bx bx-x-circle"></i></span>
													<h6>Block User</h6>
												</div>
												<div class="count-group">
													<i class="bx bx-chevron-right"></i>
												</div>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												<div class="stared-group">
													<span class="report-message"> <i class="bx bx-user-x"></i></span>
													<h6>Report User</h6>
												</div>
												<div class="count-group">
													<i class="bx bx-chevron-right"></i>
												</div>
											</a>
										</li>
										<li>
											<a href="javascript:void(0);">
												<div class="stared-group">
													<span class="delete-message"> <i class="bx bx-trash-alt"></i></span>
													<h6>Delete Chat</h6>
												</div>
												<div class="count-group">
													<i class="bx bx-chevron-right"></i>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Right sidebar -->

				</div>
    		</div>
        </div>		
		<!-- /Main Wrapper --> 
        <!-- Add Transfer -->
		<div class="modal fade" id="add-units">
			<div class="modal-dialog purchase modal-dialog-centered stock-adjust-modal">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Add Transfer</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<div class="row">
									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="input-blocks">
											<label>Date</label>

											<div class="input-groupicon calender-input">
												<i data-feather="calendar" class="info-img"></i>
												<input type="text" class="datetimepicker form-control" placeholder="Select Date">
											</div>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="input-blocks">
											<label>From</label>
											<select class="select">
												<option>Choose</option>
												<option>Store 1</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="input-blocks">
											<label>To</label>
											<select class="select">
												<option>Choose</option>
												<option>Store 2</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="input-blocks">
											<label>Product Name</label>
											<input type="text" placeholder="Please type product code and select">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="modal-body-table">
											<div class="table-responsive">
												<table class="table  datanew">
													<thead>
														<tr>
															<th>Product</th>
															<th>Qty</th>
															<th>Purchase Price($)</th>
															<th>Discount($)</th>
															<th>Tax(%)</th>
															<th>Tax Amount($)</th>
															<th>Unit Cost($)</th>
															<th>Total Cost(%)</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="p-5"></td>
															<td class="p-5"></td>
															<td class="p-5"></td>
															<td class="p-5"></td>
															<td class="p-5"></td>
															<td class="p-5"></td>
															<td class="p-5"></td>
															<td class="p-5"></td>
														</tr>													
													</tbody>
												</table>
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-lg-3 col-md-6 col-sm-12">
											<div class="input-blocks">
												<label>Order Tax</label>
												<input type="text" value="0">
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-12">
											<div class="input-blocks">
												<label>Discount</label>
												<input type="text" value="0">
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-12">
											<div class="input-blocks">
												<label>Shipping</label>
												<input type="text" value="0">
											</div>
										</div>
										<div class="col-lg-3 col-md-6 col-sm-12">
											<div class="input-blocks">
												<label>Status</label>
												<select class="select">
													<option>Choose</option>
													<option>Sent</option>
													<option>Pending</option>
												</select>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="input-blocks summer-description-box">
										<label>Notes</label>
										<div id="summernote"></div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="modal-footer-btn">
										<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
										<a href="javascript:void(0);" class="btn btn-submit">Submit</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add Transfer -->

		<!-- Edit Transfer -->
		<div class="modal fade" id="edit-units">
			<div class="modal-dialog purchase modal-dialog-centered stock-adjust-modal">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Edit Transfer</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<div >
									<div>
										<div class="row">
											<div class="col-lg-4 col-md-6 col-sm-12">
												<div class="input-blocks">
													<label>Date</label>
			
													<div class="input-groupicon calender-input">
														<i data-feather="calendar" class="info-img"></i>
														<input type="text" class="datetimepicker" placeholder="19 Jan 2023">
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-12">
												<div class="input-blocks">
													<label>From</label>
													<select class="select">
														<option>Store 1</option>
														<option>Choose</option>
													</select>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-12">
												<div class="input-blocks">
													<label>To</label>
													<select class="select">
														<option>Store 2</option>
														<option>Choose</option>
													</select>
												</div>
											</div>
											<div class="col-lg-12 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Product</label>
													<div class="input-groupicon">
														<input type="text"
															placeholder="Scan/Search Product by code and select...">
														<div class="addonset">
															<img src="<?php echo base_url();?>assets/img/icons/scanners.svg" alt="img">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12">
											<div class="modal-body-table total-orders">
												<div class="table-responsive">
													<table class="table">
														<thead>
															<tr>
																<th>Product Name</th>
																<th>QTY</th>
																<th>Purchase Price($) </th>
																<th>Discount($) </th>
																<th>Tax %</th>
																<th>Tax Amount($)</th>
																<th class="text-end">Unit Cost($)</th>
																<th class="text-end">Total Cost ($) </th>
																<th></th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	<div class="productimgname">
																		<a href="javascript:void(0);" class="product-img stock-img">
																			<img src="<?php echo base_url();?>assets/img/products/stock-img-02.png" alt="product">
																		</a>
																		<a href="javascript:void(0);">Nike Jordan</a>
																	</div>
																</td>
																<td><div class="product-quantity">
																	<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																	<input type="text" class="quntity-input" value="10">
																	<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
																</div></td>
																<td>2000</td>
																<td>500.00</td>
																<td>0.00</td>
																<td>0.00</td>
																<td class="text-end">0.00</td>
																<td class="text-end">1500</td>
																<td>
																	<a class="delete-set"><img
																			src="<?php echo base_url();?>assets/img/icons/delete.svg" alt="svg"></a>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-12 float-md-right">
												<div class="total-order">
													<ul>
														<li>
															<h4>Order Tax</h4>
															<h5>$ 0.00</h5>
														</li>
														<li>
															<h4>Discount</h4>
															<h5>$ 0.00</h5>
														</li>
														<li>
															<h4>Shipping</h4>
															<h5>$ 0.00</h5>
														</li>
														<li class="total">
															<h4>Grand Total</h4>
															<h5>$1500.00</h5>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Order Tax</label>
													<input type="text" value="0">
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Discount</label>
													<input type="text" value="0">
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Shipping</label>
													<input type="text" value="0">
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Status</label>
													<select class="select">
														<option>Sent</option>
														<option>Pending</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-lg-12">
									<div class="input-blocks summer-description-box">
										<label>Description</label>
										<div id="summernote2">
											<p>These shoes are made with the highest quality materials. </p>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="modal-footer-btn">
										<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
										<a href="javascript:void(0);" class="btn btn-submit">Save Changes</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit Transfer -->

		<!-- Import Purchase -->
		<div class="modal fade" id="view-notes">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Import Transfer</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<div class="row">
									<div class="col-lg-4 col-sm-6 col-12">
										<div class="input-blocks">
											<label>From</label>
											<select class="select">
												<option>Choose</option>
												<option>Store 1</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 col-12">
										<div class="input-blocks">
											<label>To</label>
											<select class="select">
												<option>Choose</option>
												<option>Store 2</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4 col-sm-6 col-12">
										<div class="input-blocks">
											<label>Satus</label>
											<select class="select">
												<option>Choose</option>
												<option>Sent</option>
												<option>Pending</option>
											</select>
										</div>
									</div>
									<div class="col-lg-12 col-sm-6 col-12">
										<div class="row">
											<div>
												<!-- <div class="input-blocks download">
													<a class="btn btn-submit">Download Sample File</a>
												</div> -->
												<div class="modal-footer-btn download-file">
													<a href="javascript:void(0)" class="btn btn-submit">Download Sample File</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="input-blocks image-upload-down">
											<label>	Upload CSV File</label>
											<div class="image-upload download">
												<input type="file">
												<div class="image-uploads">
													<img src="<?php echo base_url();?>assets/img/download-img.png" alt="img">
													<h4>Drag and drop a <span>file to upload</span></h4>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12 col-sm-6 col-12">
										<div class="input-blocks">
											<label>Shipping</label>
											<input type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="input-blocks summer-description-box transfer">
										<label>Description</label>
										<div id="summernote3">
										</div>
										<p>Maximum 60 Characters</p>
									</div>
								</div>
									<div class="col-lg-12">
										<div class="modal-footer-btn">
											<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
											<a href="<?php echo base_url();?>purchase-list" class="btn btn-submit">Submit</a>
										</div>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Import Purchase -->
        <?= $this->include('partials/theme-settings') ?>
		<?= $this->include('partials/vendor-scripts') ?>
        <!-- Summernote JS -->
		<script src="<?php echo base_url();?>assets/plugins/summernote/summernote-bs4.min.js"></script>
		<!-- FancyBox JS -->
		<script src="<?php echo base_url();?>assets/plugins/fancybox/jquery.fancybox.min.js"></script>
		<!-- Mobile Input -->
		<script src="<?php echo base_url();?>assets/plugins/intltelinput/js/intlTelInput.js"></script>
		<!-- Sweetalert 2 -->
		<script src="<?php echo base_url();?>assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
		<script src="<?php echo base_url();?>assets/plugins/sweetalert/sweetalerts.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="<?php echo base_url();?>assets/js/jquery.slimscroll.min.js"></script>

		<!-- Slimscroll JS -->
		<script src="<?php echo base_url();?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	
		<!-- Swiper JS -->
		<script src="<?php echo base_url();?>assets/plugins/swiper/swiper.min.js"></script>
	</body>
</html>