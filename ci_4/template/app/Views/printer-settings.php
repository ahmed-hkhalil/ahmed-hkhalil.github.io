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
									<?= $this->include('partials/settings-sidebar') ?>
										<div class="settings-page-wrap w-50">
											<div class="setting-title">
												<h4>Printer</h4>
											</div>
											<div class="page-header justify-content-end">
												<ul class="table-top-head">
													<li>
														<a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><img src="<?php echo base_url(); ?>/assets/img/icons/pdf.svg" alt="img"></a>
													</li>
													<li>
														<a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img src="<?php echo base_url(); ?>/assets/img/icons/excel.svg" alt="img"></a>
													</li>
													<li>
														<a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"><i data-feather="printer" class="feather-rotate-ccw"></i></a>
													</li>
												</ul>
												<div class="page-btn">
													<a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#add-printer"><i data-feather="plus-circle" class="me-2"></i>Add New Printer</a>
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
																			<span><img src="<?php echo base_url(); ?>/assets/img/icons/closes.svg" alt="img"></span>
																		</a>
																		<div class="layout-hide-box">
																			<a href="javascript:void(0);" class="me-3 layout-box"><i data-feather="layout" class="feather-search"></i></a>
																			<div class="layout-drop-item card">
																				<div class="drop-item-head">
																					<h5>Want to manage datatable?</h5>
																					<p>Please drag and drop your column to reorder your table and enable see option as you want.</p>
																				</div>
																				<ul>
																					<li>
																						<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
																							<span class="status-label"><i data-feather="menu" class="feather-menu"></i>Shop</span>
																							<input type="checkbox" id="option1" class="check" checked>
																							<label for="option1" class="checktoggle">	</label>
																						</div>
																					</li>
																					<li>
																						<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
																							<span class="status-label"><i data-feather="menu" class="feather-menu"></i>Product</span>
																							<input type="checkbox" id="option2" class="check" checked>
																							<label for="option2" class="checktoggle">	</label>
																						</div>
																					</li>
																					<li>
																						<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
																							<span class="status-label"><i data-feather="menu" class="feather-menu"></i>Reference No</span>
																							<input type="checkbox" id="option3" class="check" checked>
																							<label for="option3" class="checktoggle">	</label>
																						</div>
																					</li>
																					<li>
																						<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
																							<span class="status-label"><i data-feather="menu" class="feather-menu"></i>Date</span>
																							<input type="checkbox" id="option4" class="check" checked>
																							<label for="option4" class="checktoggle">	</label>
																						</div>
																					</li>
																					<li>
																						<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
																							<span class="status-label"><i data-feather="menu" class="feather-menu"></i>Responsible Person</span>
																							<input type="checkbox" id="option5" class="check" checked>
																							<label for="option5" class="checktoggle">	</label>
																						</div>
																					</li>
																					<li>
																						<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
																							<span class="status-label"><i data-feather="menu" class="feather-menu"></i>Notes</span>
																							<input type="checkbox" id="option6" class="check" checked>
																							<label for="option6" class="checktoggle">	</label>
																						</div>
																					</li>
																					<li>
																						<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
																							<span class="status-label"><i data-feather="menu" class="feather-menu"></i>Quantity</span>
																							<input type="checkbox" id="option7" class="check" checked>
																							<label for="option7" class="checktoggle">	</label>
																						</div>
																					</li>
																					<li>
																						<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
																							<span class="status-label"><i data-feather="menu" class="feather-menu"></i>Actions</span>
																							<input type="checkbox" id="option8" class="check" checked>
																							<label for="option8" class="checktoggle">	</label>
																						</div>
																					</li>
																				</ul>
																			</div>
																		</div>
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
																					<option>Choose Printer</option>
																					<option>HP Printer</option>
																					<option>Epson</option>
																				</select>
																			</div>
																		</div>
																		<div class="col-lg-4 col-sm-6 col-12">
																			<div class="input-blocks">
																				<i data-feather="edit-2" class="info-img"></i>
																				<select class="select">
																					<option>Connection Type</option>
																					<option>Network</option>
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
																<table class="table  datanew">
																	<thead>
																		<tr>
																			<th class="no-sort">
																				<label class="checkboxs">
																					<input type="checkbox" id="select-all">
																					<span class="checkmarks"></span>
																				</label>
																			</th>
																			<th>Printer Name</th>
																			<th>Connection type</th>
																			<th>IP Address</th>
																			<th>Port</th>
																			<th class="no-sort">Action</th>
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
																				HP Printer
																			</td>
																			<td>
																				Network
																			</td>
																			<td>
																				151.00.1.22							
																			</td>
																			<td>900</td>
																			<td class="action-table-data">
																				<div class="edit-delete-action">
																					<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-printer">
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
																				Epson
																			</td>
																			<td>
																				Network
																			</td>
																			<td>
																				151.00.2.20							
																			</td>
																			<td>700</td>
																			<td class="action-table-data">
																				<div class="edit-delete-action">
																					<a class="me-2 p-2" href="#" data-bs-toggle="modal" data-bs-target="#edit-printer">
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
				<!-- Add Printer -->
				<div class="modal fade" id="add-printer">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Add Printer</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="printer-settings">
									<div class="row">
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">Printer Name <span> *</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">Connection Type <span> *</span></label>
												<select class="select">
													<option>Choose</option>
													<option>Network</option>
												</select>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">IP Address <span> *</span></label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-0">
												<label class="form-label">Port <span> *</span></label>
												<input type="text" class="form-control">
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
		<!-- /Add Printer -->

		<!-- Edit Printer -->
		<div class="modal fade" id="edit-printer">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Add Printer</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="printer-settings">
									<div class="row">
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">Printer Name <span> *</span></label>
												<input type="text" class="form-control" value="HP Printer">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">Connection Type <span> *</span></label>
												<select class="select">
													<option>Network</option>
												</select>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-3">
												<label class="form-label">IP Address <span> *</span></label>
												<input type="text" class="form-control" value="151.00.1.22">
											</div>
										</div>
										<div class="col-lg-12">
											<div class="mb-0">
												<label class="form-label">Port <span> *</span></label>
												<input type="text" class="form-control" value="900">
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
		<!-- /Edit Printer -->
		<?= $this->include('partials/theme-settings') ?>
        <?= $this->include('partials/vendor-scripts') ?>
    </body>
</html>