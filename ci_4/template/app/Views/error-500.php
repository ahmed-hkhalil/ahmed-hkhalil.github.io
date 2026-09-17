<!DOCTYPE html>
<html lang="en">
	<head>
		<?= $this->include('partials/title-meta') ?>
		<?= $this->include('partials/head-css') ?>	
	</head>
    <body class="error-page">
		<div id="global-loader">
			<div class="whirly-loader"> </div>
		</div>
		<!-- Main Wrapper -->
  		<div class="main-wrapper">
            <div class="error-box">
				<div class="error-img">
                    <img src="<?php echo base_url();?>assets/img/authentication/error-500.png" class="img-fluid" alt="">
                </div>
				<h3 class="h2 mb-3">Oops, something went wrong</h3>
				<p>Server Error 500. We apologise and are fixing the problem
                    Please try again at a  later stage</p>
                <a href="<?php echo base_url(); ?>dashboard" class="btn btn-primary">Back to Dashboard</a>
			</div>
        </div>
        <!-- /Main Wrapper -->
		<?= $this->include('partials/theme-settings') ?>
		<?= $this->include('partials/vendor-scripts') ?>
	</body>
</html>