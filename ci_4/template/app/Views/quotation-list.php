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
						<div class="content">
							<div class="page-header">
								<div class="add-item d-flex">
									<div class="page-title">
										<h4>Quotation List</h4>
										<h6>Manage Your Quotation</h6>
									</div>
								</div>
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
									<li>
										<a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i data-feather="rotate-ccw" class="feather-rotate-ccw"></i></a>
									</li>
									<li>
										<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
									</li>
								</ul>
								<div class="page-btn">
									<a href="#" class="btn btn-added" data-bs-toggle="modal" data-bs-target="#add-units"><i data-feather="plus-circle" class="me-2"></i>Add New Quotation</a>
								</div>
							</div>
							

							<!-- /product list -->
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
												
											</div>
											
										</div>
										<div class="form-sort">
											<i data-feather="sliders" class="info-img"></i>
											<select class="select">
												<option>Sort by Date</option>
												<option>25 9 23</option>
												<option>12 9 23</option>
											</select>
										</div>
									</div>
									<!-- /Filter -->
									<div class="card" id="filter_inputs">
										<div class="card-body pb-0">
											<div class="row">
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="input-blocks">
														<i data-feather="box" class="info-img"></i>
														<select class="select">
															<option>Choose product</option>
															<option>Bold V3.2</option>
															<option>Apple Series 5 Watch</option>
														</select>
													</div>
												</div>
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="input-blocks">
														<i data-feather="stop-circle" class="info-img"></i>
														<select class="select">
															<option>Choose Status</option>
															<option>Sent</option>
															<option>Ordered</option>
														</select>
													</div>
												</div>
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="input-blocks">
														<i data-feather="user" class="info-img"></i>
														<select class="select">
															<option>Choose Custmer</option>
															<option>walk-in-customer</option>
															<option>John Smith</option>
														</select>
													</div>
												</div>
												<div class="col-lg-2 col-sm-6 col-12">
													<div class="input-blocks">
														<i data-feather="file-text" class="info-img"></i>
														<div class="input-groupicon">
															<input type="text" class="form-control" placeholder="Enter Reference" >
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-sm-6 col-12">
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
                                    <th>Product Name</th>
                                    <th>Reference</th>
                                    <th>Customer Name</th>
                                    <th>Status</th>
                                    <th>Grand Total ($)</th>
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
                                        <div class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="<?php echo base_url(); ?>/assets/img/products/product1.jpg"
                                                    alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Lenovo 3rd Generation</a>
                                        </div>
                                    </td>
                                    <td>PT001</td>
                                    <td>walk-in-customer</td>
                                    <td><span class="badges status-badge">Sent</span></td>
                                    <td>$550</td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit-units">
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
                                        <div class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="<?php echo base_url(); ?>/assets/img/products/product2.jpg"
                                                    alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Bold V3.2</a>
                                        </div>

                                    </td>
                                    <td>PT002</td>
                                    <td>walk-in-customer</td>
                                    <td><span class="badges status-badge">Sent</span></td>
									<td>$430</td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit-units">
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
                                        <div class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="<?php echo base_url(); ?>/assets/img/products/product3.jpg"
                                                    alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Nike Jordan</a>
                                        </div>

                                    </td>
                                    <td>PT003</td>
                                    <td>walk-in-customer</td>
                                    <td><span class="badges order-badge">Ordered</span></td>
                                    <td>$260</td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit-units">
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
                                        <div class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="<?php echo base_url(); ?>/assets/img/products/product4.jpg"
                                                    alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Apple Series 5 Watch</a>
                                        </div>

                                    </td>
                                    <td>PT004</td>
                                    <td>John Smith</td>
                                    <td><span class="badges unstatus-badge">Pending</span></td>
                                    <td>$470</td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit-units">
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
                                        <div class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="<?php echo base_url(); ?>/assets/img/products/product6.jpg"
                                                    alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Amazon Echo Dot</a>
                                        </div>
                                    </td>
                                    <td>PT005</td>
                                    <td>Harley Stanley</td>
                                    <td><span class="badges unstatus-badge">Pending</span></td>
                                    <td>$380</td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit-units">
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
                                        <div class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="<?php echo base_url(); ?>/assets/img/products/product5.jpg"
                                                    alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Lobar Handy</a>
                                        </div>
                                    </td>
                                    <td>PT006</td>
                                    <td>Egbert Caldwell</td>
                                    <td><span class="badges status-badge">Sent</span></td>
                                    <td>$190</td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit-units">
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
                                        <div class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="<?php echo base_url(); ?>/assets/img/products/product7.jpg"
                                                    alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Red Premium Handy</a>
                                        </div>
                                    </td>
                                    <td>PT007</td>
                                    <td>walk-in-customer</td>
                                    <td><span class="badges unstatus-badge">Pending</span></td>
                                    <td>$540</td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit-units">
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
                                        <div class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="<?php echo base_url(); ?>/assets/img/products/product8.jpg"
                                                    alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Iphone 14 Pro</a>
                                        </div>
                                    </td>
                                    <td>PT008</td>
                                    <td>Benjamin</td>
                                    <td><span class="badges order-badge">Ordered</span></td>
                                    <td>$610</td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit-units">
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
                                        <div class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="<?php echo base_url(); ?>/assets/img/products/product9.jpg"
                                                    alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Black Slim 200</a>
                                        </div>
                                    </td>
                                    <td>PT009</td>
                                    <td>walk-in-customer</td>
                                    <td><span class="badges unstatus-badge">Pending</span></td>
                                    <td>$220</td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit-units">
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
                                        <div class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="<?php echo base_url(); ?>/assets/img/products/product10.jpg"
                                                    alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Woodcraft Sandal</a>
                                        </div>
                                    </td>
                                    <td>PT010</td>
											<td>Nydia Fitzgerald</td>
											<td><span class="badges status-badge">Sent</span></td>
											<td>$460</td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit-units">
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
                                        <div class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="<?php echo base_url(); ?>/assets/img/products/product11.jpg"
                                                    alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Lobar Handy</a>
                                        </div>
                                    </td>
                                    <td>PT011</td>
											<td>Thomas</td>
											<td><span class="badges unstatus-badge">Pending</span></td>
											<td>$250</td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit-units">
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
                                        <div class="productimgname">
                                            <a href="javascript:void(0);" class="product-img">
                                                <img src="<?php echo base_url(); ?>/assets/img/products/product8.jpg"
                                                    alt="product">
                                            </a>
                                            <a href="javascript:void(0);">Iphone 15 Pro</a>
                                        </div>
                                    </td>
                                    <td>PT012</td>
											<td>Benjamin</td>
											<td><span class="badges status-badge">Sent</span></td>
											<td>$550</td>
                                    <td class="action-table-data">
                                        <div class="edit-delete-action">
                                            <a class="me-2 p-2 mb-0" href="javascript:void(0);">
                                                <i data-feather="eye" class="action-eye"></i>
                                            </a>
                                            <a class="me-2 p-2" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit-units">
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
							<!-- /product list -->
						</div>
			</div>
		</div>
		<!-- /Main Wrapper -->
				<!--Add Quotation -->
				<div class="modal fade" id="add-units">
			<div class="modal-dialog purchase modal-dialog-centered stock-adjust-modal">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Add Quotation</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="quotationList">
									<div class="row">
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="input-blocks add-product">
												<label>Customer Name</label>
												<div class="row">
													<div class="col-lg-10 col-sm-10 col-10">
														<select class="select">
															<option>Choose</option>
															<option>Benjamin</option>
															<option>Nydia Fitzgerald</option>
														</select>
													</div>
													<div class="col-lg-2 col-sm-2 col-2 p-0">
														<div class="add-icon tab">
															<a class="btn btn-filter" data-bs-toggle="modal"
																data-bs-target="#add-units"><img
																	src="<?php echo base_url(); ?>/assets/img/icons/plus1.svg" alt="img">
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="input-blocks">
												<label>Date</label>

												<div class="input-groupicon calender-input">
													<i data-feather="calendar" class="info-img"></i>
													<input type="text" class="datetimepicker" placeholder="Choose">
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="input-blocks">
												<label>Reference Number</label>
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<div class="input-blocks">
												<label>Product Name</label>
												<div class="input-groupicon select-code">
													<input type="text" placeholder="Please type product code and select">
													<div class="addonset">
														<img src="<?php echo base_url(); ?>/assets/img/icons/qrcode-scan.svg" alt="img">
													</div>
												</div>
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
															<tr style="background: #ffffff;">
																<td class="p-5">
					
																</td>
																<td class="p-5">
					
																</td>
																<td class="p-5">
					
																</td>
																<td class="p-5">
					
																</td>
																<td class="p-5">
					
																</td>
																<td class="p-5">
					
																</td>
																<td class="p-5">
					
																</td>
																<td class="p-5">
					
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>

										</div>
										<div class="row">
											<div class="col-lg-3 col-md-6 col-sm-12">
												<div class="input-blocks mb-3">
													<label>Order Tax</label>
													<input type="text" value="0">
												</div>
											</div>
											<div class="col-lg-3 col-md-6 col-sm-12">
												<div class="input-blocks mb-3">
													<label>Discount</label>
													<input type="text" value="0">
												</div>
											</div>
											<div class="col-lg-3 col-md-6 col-sm-12">
												<div class="input-blocks mb-3">
													<label>Shipping</label>
													<input type="text" value="0">
												</div>
											</div>
											<div class="col-lg-3 col-md-6 col-sm-12">
												<div class="input-blocks mb-3">
													<label>Status</label>
													<select class="select">
														<option>Choose</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="input-blocks summer-description-box">
											<label>Description</label>
											<div id="summernote"></div>
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
		<!-- /Add Quotation -->

		<!-- edit popup -->
		<div class="modal fade" id="edit-units">
			<div class="modal-dialog edit-sales-modal">
				<div class="modal-content">
					<div class="page-wrapper p-0 m-0">
						<div class="content p-0">
							<div class="page-header p-4 mb-0">
								<div class="add-item new-sale-items d-flex">
									<div class="page-title">
										<h4>Edit Quotation</h4>
									</div>
									<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
							</div>
							<div class="card">
								<div class="card-body">
									<form action="quotationList">
										<div class="row">
											<div class="col-lg-4 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Customer Name</label>
													<div class="row">
														<div class="col-lg-10 col-sm-10 col-10">
															<select class="select">
																<option>Thomas</option>
																<option>Rose</option>
															</select>
														</div>
														<div class="col-lg-2 col-sm-2 col-2 ps-0">
															<div class="add-icon">
																<span class="choose-add"><i data-feather="plus-circle" class="plus"></i></span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Date</label>
													<div class="input-groupicon calender-input">
														<i data-feather="calendar" class="info-img"></i>
														<input type="text" class="datetimepicker" placeholder="19 jan 2023">
													</div>
												</div>
											</div>
											<div class="col-lg-4 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Reference Number</label>
													<input type="text" placeholder="010203">
												</div>
											</div>
											<div class="col-lg-12 col-sm-6 col-12">
												<div class="input-blocks">
													<label>Product Name</label>
													<div class="input-groupicon select-code">
														<input type="text" placeholder="Please type product code and select">
														<div class="addonset">
															<img src="<?php echo base_url(); ?>/assets/img/icons/scanners.svg" alt="img">
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="table-responsive no-pagination">
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
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="<?php echo base_url(); ?>/assets/img/products/stock-img-02.png" alt="product">
																</a>
																<a href="javascript:void(0);">Nike Jordan</a>
															</div>												
														</td>
														<td>
															<div class="product-quantity">
																<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																<input type="text" class="quntity-input" value="2">
																<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
															</div>
														</td>
														<td>2000</td>
														<td>500</td>
														<td>
															0.00
														</td>
														<td>0.00</td>
														<td>0.00</td>
														<td>1500</td>
													</tr>
													<tr>
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="<?php echo base_url(); ?>/assets/img/products/stock-img-03.png" alt="product">
																</a>
																<a href="javascript:void(0);">Apple Series 5 Watch</a>
															</div>												
														</td>
														<td>
															<div class="product-quantity">
																<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																<input type="text" class="quntity-input" value="2">
																<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
															</div>
														</td>
														<td>3000</td>
														<td>400</td>
														<td>
															0.00
														</td>
														<td>0.00</td>
														<td>0.00</td>
														<td>1700</td>
													</tr>
													<tr>
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="<?php echo base_url(); ?>/assets/img/products/stock-img-05.png" alt="product">
																</a>
																<a href="javascript:void(0);">Lobar Handy</a>
															</div>												
														</td>
														<td>
															<div class="product-quantity">
																<span class="quantity-btn">+<i data-feather="plus-circle" class="plus-circle"></i></span>
																<input type="text" class="quntity-input" value="2">
																<span class="quantity-btn"><i data-feather="minus-circle" class="feather-search"></i></span>
															</div>
														</td>
														<td>2500</td>
														<td>500</td>
														<td>
															0.00
														</td>
														<td>0.00</td>
														<td>0.00</td>
														<td>2000</td>
													</tr>
												</tbody>
											</table>
										</div>
			
										<div class="row">
											<div class="col-lg-6 ms-auto">
												<div class="total-order w-100 max-widthauto m-auto mb-4">
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
														<li>
															<h4>Grand Total</h4>
															<h5>$5200.00</h5>
														</li>
													</ul>
												</div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks mb-3">
													<label>Order Tax</label>
													<div class="input-groupicon select-code">
														<input type="text" placeholder="0">
													</div>
													
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks mb-3">
													<label>Discount</label>
													<div class="input-groupicon select-code">
														<input type="text" placeholder="0">
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks mb-3">
													<label>Shipping</label>
													<div class="input-groupicon select-code">
														<input type="text" placeholder="0">
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-sm-6 col-12">
												<div class="input-blocks mb-3">
													<label>Status</label>
													<select class="select">
														<option>Sent</option>
														<option>Completed</option>
														<option>Inprogress</option>
													</select>
												</div>
											</div>
											<div class="col-lg-12">
												<div class="input-blocks summer-description-box">
													<label>Description</label>
													<div id="summernote5"></div>
												</div>
											</div>
											<div class="col-lg-12 text-end">
												<button type="button" class="btn btn-cancel add-cancel me-3" data-bs-dismiss="modal">Cancel</button>
												<button type="submit" class="btn btn-submit add-sale">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /edit popup -->
		<?= $this->include('partials/theme-settings') ?>
        <?= $this->include('partials/vendor-scripts') ?>
    </body>
</html>