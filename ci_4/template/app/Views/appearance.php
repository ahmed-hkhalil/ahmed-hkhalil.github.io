<!DOCTYPE html>
<html lang="en">
    <head>
		<?= $this->include('partials/title-meta') ?>
		<?= $this->include('partials/head-css') ?>
    </head>
	<?= $this->include('partials/body') ?>
		<div id="global-loader" >
			<div class="whirly-loader"> </div>
		</div>	 
		<!-- Main Wrapper -->
        <div class="main-wrapper">	
			<?= $this->include('partials/menu') ?>
			<div class="page-wrapper">
					<div class="content settings-content">
						<div class="page-header settings-pg-header">
							<div class="add-item d-flex">
								<div class="page-title">
									<h4>Settings</h4>
									<h6>Manage your settings on portal</h6>
								</div>
							</div>
							<ul class="table-top-head">
								<li>
									<a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i data-feather="rotate-ccw" class="feather-rotate-ccw"></i></a>
								</li>
								<li>
									<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
								</li>
							</ul>
						</div>
						<div class="row">
							<div class="col-xl-12">
								<div class="settings-wrapper d-flex">
									<div class="sidebars settings-sidebar theiaStickySidebar" id="sidebar2">
										<div class="sidebar-inner slimscroll">
											<div id="sidebar-menu5" class="sidebar-menu">
												<ul>
													<li class="submenu-open">
														<ul>
															<li class="submenu">
																<a href="javascript:void(0);"><i data-feather="settings"></i><span>General Settings</span><span class="menu-arrow"></span></a>
																<ul>
																	<li><a href="<?php echo base_url(); ?>general-settings">Profile</a></li>
																	<li><a href="<?php echo base_url(); ?>security-settings">Security</a></li>
																	<li><a href="<?php echo base_url(); ?>notification">Notifications</a></li>
																	<li><a href="<?php echo base_url(); ?>connected-apps">Connected Apps</a></li>
																</ul>
															</li>
															<li class="submenu">
																<a href="javascript:void(0);"  class="active subdrop"><i data-feather="airplay"></i><span>Website Settings</span><span class="menu-arrow"></span></a>
																<ul>
																	<li><a href="<?php echo base_url(); ?>system-settings">System Settings</a></li>
																	<li><a href="<?php echo base_url(); ?>company-settings">Company Settings </a></li>
																	<li><a href="<?php echo base_url(); ?>localization-settings">Localization</a></li>
																	<li><a href="<?php echo base_url(); ?>prefixes">Prefixes</a></li>
																	<li><a href="<?php echo base_url(); ?>preference">Preference</a></li>
																	<li><a href="<?php echo base_url(); ?>appearance" class="active">Appearance</a></li>
																	<li><a href="<?php echo base_url(); ?>social-authentication">Social Authentication</a></li>
																	<li><a href="<?php echo base_url(); ?>language-settings">Language</a></li>
																</ul>
															</li>
															<li class="submenu">
																<a href="javascript:void(0);"><i data-feather="archive"></i><span>App Settings</span><span class="menu-arrow"></span></a>
																<ul>
																	<li><a href="<?php echo base_url(); ?>invoice-settings">Invoice</a></li>
																	<li><a href="<?php echo base_url(); ?>printer-settings">Printer </a></li>
																	<li><a href="<?php echo base_url(); ?>pos-settings">POS</a></li>
																	<li><a href="<?php echo base_url(); ?>custom-fields">Custom Fields</a></li>
																</ul>
															</li>
															<li class="submenu">
																<a href="javascript:void(0);"><i data-feather="server"></i><span>System Settings</span><span class="menu-arrow"></span></a>
																<ul>
																	<li><a href="<?php echo base_url(); ?>email-settings">Email</a></li>
																	<li><a href="<?php echo base_url(); ?>sms-gateway">SMS Gateways</a></li>
																	<li><a href="<?php echo base_url(); ?>otp-settings">OTP</a></li>
																	<li><a href="<?php echo base_url(); ?>gdpr-settings">GDPR Cookies</a></li>
																</ul>
															</li>
															<li class="submenu">
																<a href="javascript:void(0);"><i data-feather="credit-card"></i><span>Financial Settings</span><span class="menu-arrow"></span></a>
																<ul>
																	<li><a href="<?php echo base_url(); ?>payment-gateway-settings">Payment Gateway</a></li>
																	<li><a href="<?php echo base_url(); ?>bank-settings-grid">Bank Accounts </a></li>
																	<li><a href="<?php echo base_url(); ?>tax-rates">Tax Rates</a></li>
																	<li><a href="<?php echo base_url(); ?>currency-settings">Currencies</a></li>
																</ul>
															</li>
															<li class="submenu">
																<a href="javascript:void(0);"><i data-feather="layout"></i><span>Other Settings</span><span class="menu-arrow"></span></a>
																<ul>
																	<li><a href="<?php echo base_url(); ?>storage-settings">Storage</a></li>
																	<li><a href="<?php echo base_url(); ?>ban-ip-address">Ban IP Address </a></li>
																</ul>
															</li>
														</ul>								
													</li>
													
												</ul>
											</div>
										</div>
									</div>
									<div class="settings-page-wrap">
										<div class="setting-title">
											<h4>Appearance</h4>
										</div>
										<div class="appearance-settings">
											<div class="row">
												<div class="col-xl-4 col-lg-12 col-md-4">
													<div class="setting-info mb-4">
														<h6>Select Theme</h6>
														<p>Choose accent colour of website</p>
													</div>
												</div>
												<div class="col-xl-8 col-lg-12 col-md-8">
													<div class="theme-type-images d-flex align-items-center mb-4">
														<div class="theme-image">
															<div class="theme-image-set">
																<img src="<?php echo base_url(); ?>assets/img/theme/theme-img-08.jpg" alt="">
															</div>
															<span>Light</span>
														</div>
														<div class="theme-image">
															<div class="theme-image-set">
																<img src="<?php echo base_url(); ?>assets/img/theme/theme-img-09.jpg" alt="">
															</div>
															<span>Dark</span>
														</div>
														<div class="theme-image">
															<div class="theme-image-set">
																<img src="<?php echo base_url(); ?>assets/img/theme/theme-img-10.jpg" alt="">
															</div>
															<span>Automatic</span>
														</div>
													</div>
													
												</div>
											</div>
											<div class="row">
												<div class="col-xl-4 col-lg-12 col-md-4">
													<div class="setting-info mb-4">
														<h6>Accent Color</h6>
														<p>Choose accent colour of website</p>
													</div>
												</div>
												<div class="col-xl-4 col-lg-12 col-md-4">
													<div class="theme-colors mb-4">
														<ul>
															<li>
															<span class="themecolorset defaultcolor active"></span>
															</li>
															<li>
															<span class="themecolorset theme-violet"></span>
															</li>
															<li>
															<span class="themecolorset theme-blue"></span>
															</li>
															<li>
															<span class="themecolorset theme-brown"></span>
															</li>
															</ul>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-xl-4 col-lg-12 col-md-4">
													<div class="setting-info mb-4">
														<h6>Expand Sidebar</h6>
														<p>Choose accent colour of website</p>
													</div>
												</div>
												<div class="col-xl-4 col-lg-12 col-md-4">
													<div class="status-toggle modal-status d-flex justify-content-between align-items-center ms-2">
														<input type="checkbox" id="user1" class="check" checked>
														<label for="user1" class="checktoggle">	</label>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-xl-4 col-lg-12 col-md-4">
													<div class="setting-info mb-4">
														<h6>Sidebar Size</h6>
														<p>Select size of the sidebar to display</p>
													</div>
												</div>
												<div class="col-xl-4 col-lg-12 col-md-4">
													<div class="localization-select">
														<select class="select">
															<option>Small - 85px</option>
															<option>Large - 250px</option>
														</select>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-xl-4 col-lg-12 col-md-4">
													<div class="setting-info mb-4">
														<h6>Font Family</h6>
														<p>Select font family of website</p>
													</div>
												</div>
												<div class="col-xl-4 col-lg-12 col-md-4">
													<div class="localization-select">
														<select class="select">
															<option>Nunito</option>
															<option>Poppins</option>
														</select>
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
		<!-- /Main Wrapper --> 
		<?= $this->include('partials/theme-settings') ?>
		<?= $this->include('partials/vendor-scripts') ?>
	</body>
</html>