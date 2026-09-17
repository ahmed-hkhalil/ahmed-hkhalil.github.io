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

            <div class="page-wrapper cardhead">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">File Upload</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
									<li class="breadcrumb-item active">File Upload</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
					
						<!-- Drag Card -->					
						<div class="col-md-12">	
						
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Single File Upload</h5>
								</div>
								<div class="card-body">
									<div class="custom-file-container" data-upload-id="myFirstImage">
										<label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
										<label class="custom-file-container__custom-file" >
											<input type="file" class="custom-file-container__custom-file__custom-file-input">
											<input type="hidden" name="MAX_FILE_SIZE" value="10485760">
											<span class="custom-file-container__custom-file__custom-file-control"></span>
										</label>
										<div class="custom-file-container__image-preview"></div>
									</div>
								</div>
							</div>
							
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Multiple File Upload</h5>
								</div>
								<div class="card-body">
									<div class="custom-file-container" data-upload-id="mySecondImage">
										<label>Upload (Allow Multiple) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
										<label class="custom-file-container__custom-file" >
											<input type="file" class="custom-file-container__custom-file__custom-file-input" multiple>
											<input type="hidden" name="MAX_FILE_SIZE" value="10485760">
											<span class="custom-file-container__custom-file__custom-file-control"></span>
										</label>
										<div class="custom-file-container__image-preview"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Drag Card -->
						
					</div>
				
				</div>			
            </div>

            
            </div>		
		<!-- /Main Wrapper --> 
        <?= $this->include('partials/theme-settings') ?>
		<?= $this->include('partials/vendor-scripts') ?>
         <!-- Fileupload JS -->
		<script src="<?php echo base_url();?>assets/plugins/fileupload/fileupload.min.js"></script>
	</body>
</html>