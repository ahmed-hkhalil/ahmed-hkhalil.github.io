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
						<div class="page-title me-auto">
							<h4>Low Stocks</h4>
							<h6>Manage your low stocks</h6>
						</div>
						<ul class="table-top-head low-stock-top-head">
							<li>
								<div class="status-toggle d-flex justify-content-between align-items-center">
									<input type="checkbox" id="user2" class="check" checked="">
									<label for="user2" class="checktoggle">checkbox</label>
									Notify
								</div>
							</li>
							<li>
								<a href="" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#send-email"><i data-feather="mail" class="feather-mail"></i>Send Email</a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><img src="<?php echo base_url();?>assets/img/icons/pdf.svg" alt="img"></a>
							</li>
							<li>
								<a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img src="<?php echo base_url();?>assets/img/icons/excel.svg" alt="img"></a>
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
					</div>
					<div class="table-tab">
						<ul class="nav nav-pills" id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
							  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Low Stocks</button>
							</li>
							<li class="nav-item" role="presentation">
							  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Out of Stocks</button>
							</li>
							
						</ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
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
												<a class="btn btn-filter" id="filter_search">
													<i data-feather="filter" class="filter-icon"></i>
													<span><img src="<?php echo base_url();?>assets/img/icons/closes.svg" alt="img"></span>
												</a>
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
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks">
															<i data-feather="box" class="info-img"></i>
															<select class="select">
																<option>Choose Product</option>
																<option>Lenovo 3rd Generation </option>
																<option>Nike Jordan  </option>
																<option>Amazon Echo Dot </option>
															</select>
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks">
															<i data-feather="zap" class="info-img"></i>
															<select class="select">
																<option>Choose Category</option>
																<option>Laptop</option>
																<option>Shoe</option>
																<option>Speaker</option>
															</select>
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks">
															<i data-feather="archive" class="info-img"></i>
															<select class="select">
																<option>Choose Warehouse</option>
																<option>Lavish Warehouse </option>
																<option>Lobar Handy </option>
																<option>Traditional Warehouse </option>
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
														<th>Warehouse</th>
														<th>Store</th>
														<th>Product</th>
														<th>Category</th>
														<th>SKU</th>
														<th>Qty</th>
														<th>Qty Alert</th>
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
														<td>Lavish Warehouse </td>
														<td>Crinol</td>
														
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="<?php echo base_url();?>assets/img/products/stock-img-01.png" alt="product">
																</a>
																<a href="javascript:void(0);">Lenovo 3rd Generation </a>
															</div>												
														</td>
														<td>Laptop</td>
														<td>PT001</td>
														<td>15</td>
														<td>10</td>
														<td class="action-table-data">
															<div class="edit-delete-action">
																<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-stock">
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
														<td>Lobar Handy</td>
														<td>Selosy</td>
														
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="<?php echo base_url();?>assets/img/products/stock-img-02.png" alt="product">
																</a>
																<a href="javascript:void(0);">Nike Jordan </a>
															</div>												
														</td>
														<td>Shoe</td>
														<td>PT002</td>
														<td>17</td>
														<td>08</td>
														<td class="action-table-data">
															<div class="edit-delete-action">
																<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-stock">
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
														<td>Quaint Warehouse</td>
														<td>Logerro</td>
														
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="<?php echo base_url();?>assets/img/products/stock-img-03.png" alt="product">
																</a>
																<a href="javascript:void(0);">Apple Series 5 Watch </a>
															</div>												
														</td>
														<td>Electronics</td>
														<td>PT003</td>
														<td>14</td>
														<td>12</td>
														<td class="action-table-data">
															<div class="edit-delete-action">
																<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-stock">
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
														<td>Traditional Warehouse</td>
														<td>Vesloo</td>
														
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="<?php echo base_url();?>assets/img/products/stock-img-04.png" alt="product">
																</a>
																<a href="javascript:void(0);">Amazon Echo Dot</a>
															</div>												
														</td>
														<td>Speaker</td>
														<td>PT004</td>
														<td>20</td>
														<td>15</td>
														<td class="action-table-data">
															<div class="edit-delete-action">
																<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-stock">
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
														<td>Cool Warehouse</td>
														<td>Crompy</td>
														
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="<?php echo base_url();?>assets/img/products/stock-img-05.png" alt="product">
																</a>
																<a href="javascript:void(0);">Lobar Handy</a>
															</div>												
														</td>
														<td>Furnitures</td>
														<td>PT005</td>
														<td>18</td>
														<td>13</td>
														<td class="action-table-data">
															<div class="edit-delete-action">
																<a class="me-2 p-2" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#edit-stock">
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
							<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
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
												<a class="btn btn-filter" id="filter_search1">
													<i data-feather="filter" class="filter-icon"></i>
													<span><img src="<?php echo base_url();?>assets/img/icons/closes.svg" alt="img"></span>
												</a>
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
										<div class="card" id="filter_inputs1">
											<div class="card-body pb-0">
												<div class="row">
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks">
															<i data-feather="box" class="info-img"></i>
															<select class="select">
																<option>Choose Product</option>
																<option>Lenovo 3rd Generation </option>
																<option>Nike Jordan  </option>
																<option>Amazon Echo Dot </option>
															</select>
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks">
															<i data-feather="zap" class="info-img"></i>
															<select class="select">
																<option>Choose Category</option>
																<option>Laptop</option>
																<option>Shoe</option>
																<option>Speaker</option>
															</select>
														</div>
													</div>
													<div class="col-lg-3 col-sm-6 col-12">
														<div class="input-blocks">
															<i data-feather="archive" class="info-img"></i>
															<select class="select">
																<option>Choose Warehouse</option>
																<option>Lavish Warehouse </option>
																<option>Lobar Handy </option>
																<option>Traditional Warehouse </option>
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
																<input type="checkbox" id="select-all2">
																<span class="checkmarks"></span>
															</label>
														</th>
														<th>Warehouse</th>
														<th>Store</th>
														<th>Product</th>
														<th>Category</th>
														<th>SKU</th>
														<th>Qty</th>
														<th>Qty Alert</th>
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
														<td>Lavish Warehouse </td>
														<td>Crinol</td>
														
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="<?php echo base_url();?>assets/img/products/stock-img-01.png" alt="product">
																</a>
																<a href="javascript:void(0);">Lenovo 3rd Generation </a>
															</div>												
														</td>
														<td>Laptop</td>
														<td>PT001</td>
														<td>15</td>
														<td>10</td>
														<td class="action-table-data">
															<div class="edit-delete-action">
																<a class="me-2 p-2" href="javascript:void(0);">
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
														<td>Lobar Handy</td>
														<td>Selosy</td>
														
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="<?php echo base_url();?>assets/img/products/stock-img-02.png" alt="product">
																</a>
																<a href="javascript:void(0);">Nike Jordan </a>
															</div>												
														</td>
														<td>Shoe</td>
														<td>PT002</td>
														<td>17</td>
														<td>08</td>
														<td class="action-table-data">
															<div class="edit-delete-action">
																<a class="me-2 p-2" href="javascript:void(0);">
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
														<td>Quaint Warehouse</td>
														<td>Logerro</td>
														
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="<?php echo base_url();?>assets/img/products/stock-img-03.png" alt="product">
																</a>
																<a href="javascript:void(0);">Apple Series 5 Watch </a>
															</div>												
														</td>
														<td>Electronics</td>
														<td>PT003</td>
														<td>14</td>
														<td>12</td>
														<td class="action-table-data">
															<div class="edit-delete-action">
																<a class="me-2 p-2" href="javascript:void(0);">
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
														<td>Traditional Warehouse</td>
														<td>Vesloo</td>
														
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="<?php echo base_url();?>assets/img/products/stock-img-04.png" alt="product">
																</a>
																<a href="javascript:void(0);">Amazon Echo Dot</a>
															</div>												
														</td>
														<td>Speaker</td>
														<td>PT004</td>
														<td>20</td>
														<td>15</td>
														<td class="action-table-data">
															<div class="edit-delete-action">
																<a class="me-2 p-2" href="javascript:void(0);">
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
														<td>Cool Warehouse</td>
														<td>Crompy</td>
														
														<td>
															<div class="productimgname">
																<a href="javascript:void(0);" class="product-img stock-img">
																	<img src="<?php echo base_url();?>assets/img/products/stock-img-05.png" alt="product">
																</a>
																<a href="javascript:void(0);">Lobar Handy</a>
															</div>												
														</td>
														<td>Furnitures</td>
														<td>PT005</td>
														<td>18</td>
														<td>13</td>
														<td class="action-table-data">
															<div class="edit-delete-action">
																<a class="me-3 p-2" href="javascript:void(0);">
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
				</div>
			</div>
            </div>		
		<!-- /Main Wrapper --> 
        	<!-- Send Mail -->
		<div class="modal fade" id="send-email">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="success-email-send modal-body .custom-modal-body text-center">
						<span><i data-feather="check-circle" class="feather-trash-2"></i></span>
						<h4>Success</h4>
						<p>Email Sent Successfully</p>
						<a href="" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /Send Mail -->

		<!-- Edit Low Stock -->
		<div class="modal fade" id="edit-stock">
			<div class="modal-dialog modal-dialog-centered custom-modal-two">
				<div class="modal-content">
					<div class="page-wrapper-new p-0">
						<div class="content">
							<div class="modal-header border-0 custom-modal-header">
								<div class="page-title">
									<h4>Edit Low Stocks</h4>
								</div>
								<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body custom-modal-body">
								<form action="<?php echo base_url();?>low-stocks">
									<div class="mb-3">
										<label class="form-label">Warehouse</label>
										<input type="text" class="form-control" value="Lavish Warehouse">
									</div>
									<div class="mb-3">
										<label class="form-label">Store</label>
										<input type="text" class="form-control" value="Crinol">
									</div>
									<div class="mb-3">
										<label class="form-label">Category</label>
										<input type="text" class="form-control" value="Laptop">
									</div>
									<div class="mb-3">
										<label class="form-label">Product</label>
										<input type="text" class="form-control" value="Lenevo 3rd Gen">
									</div>
									<div class="mb-3">
										<label class="form-label">SKU</label>
										<input type="text" class="form-control" value="PT001">
									</div>
									<div class="mb-3">
										<label class="form-label">Qty</label>
										<input type="text" class="form-control" value="15">
									</div>
									<div class="mb-3">
										<label class="form-label">Qty Alert</label>
										<input type="text" class="form-control" value="10">
									</div>
									<div class="mb-0">
										<div class="status-toggle modal-status d-flex justify-content-between align-items-center">
											<span class="status-label">Status</span>
											<input type="checkbox" id="user3" class="check" checked="">
											<label for="user3" class="checktoggle"></label>
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
		<!-- / Edit Low Stock -->
        <?= $this->include('partials/theme-settings') ?>
		<?= $this->include('partials/vendor-scripts') ?>
	</body>
</html>