<!DOCTYPE html>
<html lang="en">
	<head>
		<?= $this->include('partials/title-meta') ?>
		<?= $this->include('partials/head-css') ?>	
	</head>
	<?= $this->include('partials/body') ?>
		<div id="global-loader">
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
															<a href="javascript:void(0);"><i data-feather="airplay"></i><span>Website Settings</span><span class="menu-arrow"></span></a>
															<ul>
																<li><a href="<?php echo base_url(); ?>system-settings">System Settings</a></li>
																<li><a href="<?php echo base_url(); ?>company-settings">Company Settings </a></li>
																<li><a href="<?php echo base_url(); ?>localization-settings">Localization</a></li>
																<li><a href="<?php echo base_url(); ?>prefixes">Prefixes</a></li>
																<li><a href="<?php echo base_url(); ?>preference">Preference</a></li>
																<li><a href="<?php echo base_url(); ?>appearance">Appearance</a></li>
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
															<a href="javascript:void(0);" class="active subdrop"><i data-feather="layout"></i><span>Other Settings</span><span class="menu-arrow"></span></a>
															<ul>
																<li><a href="<?php echo base_url(); ?>storage-settings">Storage</a></li>
																<li><a href="<?php echo base_url(); ?>ban-ip-address" class="active">Ban IP Address </a></li>
															</ul>
														</li>
													</ul>								
												</li>
												
											</ul>
										</div>
									</div>
								</div>
								<div class="settings-page-wrap w-50">
									<div class="setting-title">
										<h4>Ban IP Address</h4>
									</div>
									<div class="page-header bank-settings justify-content-end">
										<div class="page-btn">
											<a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#add-banip"><i data-feather="plus-circle" class="me-2"></i>Add New Ban IP</a>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<div class="card table-list-card">
												<div class="card-body">
													<div class="table-top">
														<div class="search-set">
															<div class="search-input">
																<a href="" class="btn btn-searchset"><i data-feather="search" class="feather-search"></i></a>
															</div>
														</div>
														<div class="search-path">
															<div class="d-flex align-items-center">
																<a class="btn btn-filter" id="filter_search">
																	<i data-feather="filter" class="filter-icon"></i>
																	<span><img src="<?php echo base_url(); ?>assets/img/icons/closes.svg" alt="img"></span>
																</a>
															</div>
														</div>
														<div class="form-sort">
															<i data-feather="sliders" class="info-img"></i>
															<select class="select">
																<option>Sort by Date</option>
																<option>Newest</option>
																<option>Oldest</option>
															</select>
														</div>
													</div>
													<!-- /Filter -->
													<div class="card" id="filter_inputs">
														<div class="card-body pb-0">
															<div class="row">
																<div class="col-lg-4 col-sm-6 col-12">
																	<div class="input-blocks">
																		<i data-feather="zap" class="info-img"></i>
																		<select class="select">
																			<option>Choose IP</option>
																			<option>211.11.0.25</option>
																			<option>211.03.0.11</option>
																		</select>
																	</div>
																</div>
																<div class="col-lg-3 col-sm-6 col-12 ms-auto">
																	<div class="input-blocks">
																		<a class="btn btn-filters ms-auto"> <i data-feather="search" class="feather-search"></i> Search </a>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- /Filter -->
													<div class="table-responsive">
														<table class="table datanew">
															<thead>
																<tr>
																	<th class="no-sort">
																		<label class="checkboxs">
																			<input type="checkbox" id="select-all">
																			<span class="checkmarks"></span>
																		</label>
																	</th>
																	<th>IP Address</th>
																	<th>Reason</th>
																	<th>Date</th>
																	<th class="no-sort text-end">Action</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</td>
																	<td>
																		211.11.0.25
																	</td>
																	<td>
																		<p>You can get on-demand services in 
																			order to find a nearby service.</p>
																	</td>
																	<td>
																		12 Jul 2023
																	</td>
																	<td class="action-table-data justify-content-end">
																		<div class="edit-delete-action">
																			<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-banip">
																				<i data-feather="edit" class="feather-edit"></i>
																			</a>
																			<a class="confirm-text p-2" href="javascript:void(0);">
																				<i data-feather="trash-2" class="feather-trash-2"></i>
																			</a>
																		</div>
																		
																	</td>
																</tr>
																<tr>
																	<td>
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</td>
																	<td>
																		211.03.0.11
																	</td>
																	<td>
																		<p>Extract pricing information at inventory levels.</p>
																	</td>
																	<td>
																		24 Aug 2023
																	</td>
																	<td class="action-table-data justify-content-end">
																		<div class="edit-delete-action">
																			<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-banip">
																				<i data-feather="edit" class="feather-edit"></i>
																			</a>
																			<a class="confirm-text p-2" href="javascript:void(0);">
																				<i data-feather="trash-2" class="feather-trash-2"></i>
																			</a>
																		</div>
																		
																	</td>
																</tr>	
																<tr>
																	<td>
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</td>
																	<td>
																		211.24.0.17
																	</td>
																	<td>
																		<p>Fetching data for competitors to gain competitive advantage.</p>
																	</td>
																	<td>
																		07 Sep 2023
																	</td>
																	<td class="action-table-data justify-content-end">
																		<div class="edit-delete-action">
																			<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-banip">
																				<i data-feather="edit" class="feather-edit"></i>
																			</a>
																			<a class="confirm-text p-2" href="javascript:void(0);">
																				<i data-feather="trash-2" class="feather-trash-2"></i>
																			</a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<label class="checkboxs">
																			<input type="checkbox">
																			<span class="checkmarks"></span>
																		</label>
																	</td>
																	<td>
																		211.12.0.34
																	</td>
																	<td>
																		<p>Temporarily block to protect user accounts from internet fraudsters.</p>
																	</td>
																	<td>
																		13 Oct 2023
																	</td>
																	<td class="action-table-data justify-content-end">
																		<div class="edit-delete-action">
																			<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-banip">
																				<i data-feather="edit" class="feather-edit"></i>
																			</a>
																			<a class="confirm-text p-2" href="javascript:void(0);">
																				<i data-feather="trash-2" class="feather-trash-2"></i>
																			</a>
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
								</div>
							</div>						
						</div>
					</div>
				</div>
			</div>
            </div>
		<!-- /Main Wrapper -->
		
        <!-- Add BanIp -->
		<div class="modal fade" id="add-banip">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Add New Ban IP Address</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="<?php echo base_url(); ?>ban-ip-address">
									<div class="row">
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">IP Address</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">Reason For Ban</label>
												<textarea rows="4" placeholder="Type your message" class="form-control"></textarea>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
												<span class="status-label">Status</span>
												<input type="checkbox" id="user5" class="check" checked="">
												<label for="user5" class="checktoggle"></label>
											</div>
										</div>
									</div>
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Add BanIp -->

		<!-- Edit BanIp -->
		<div class="modal fade" id="edit-banip">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Edit Ban IP Address</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="<?php echo base_url(); ?>ban-ip-address">
									<div class="row">
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">IP Address</label>
												<input type="text" class="form-control" value="211.11.0.25">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">Reason For Ban</label>
												<textarea rows="4" class="form-control" placeholder="Temporarily block to protect user accounts from internet fraudsters."></textarea>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
												<span class="status-label">Status</span>
												<input type="checkbox" id="user4" class="check" checked="">
												<label for="user4" class="checktoggle"></label>
											</div>
										</div>
									</div>
									<div class="modal-footer-btn">
										<button type="button" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-submit">Save Changes</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Edit BanIp -->
		<?= $this->include('partials/theme-settings') ?>
		<?= $this->include('partials/vendor-scripts') ?>			
    </body>
</html>