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
			<div class="page-wrapper cardhead">
				<div class="content ">

					<!-- Page Header -->
							<div class="page-header">
								<div class="row">
									<div class="col-sm-12">
										<h3 class="page-title">Text Editor</h3>
										<ul class="breadcrumb">
											<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
											<li class="breadcrumb-item active">Text Editor</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- /Page Header -->

					<div class="row">

						<!-- Editor -->
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Editor</h5>
								</div>
								<div class="card-body">
									<div id="summernote"></div>
								</div>
							</div>
						</div>
						<!-- /Editor -->

					</div>
				</div>
			</div>
		</div>
		<!-- /Main Wrapper --> 
		<?= $this->include('partials/theme-settings') ?>
		
		<?= $this->include('partials/vendor-scripts') ?>
		<!-- Summernote JS -->
        <script src="<?php echo base_url(); ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>
	</body>
</html>
