<!DOCTYPE html>
<html lang="en">
	<head>
		<?= $this->include('partials/title-meta') ?>
		<?= $this->include('partials/head-css') ?>	
	</head>
    <body class="account-page">
		<div id="global-loader">
			<div class="whirly-loader"> </div>
		</div>
	    <!-- Main Wrapper -->
        <div class="main-wrapper">
			<div class="account-content">
				<div class="login-wrapper login-new">
                    <div class="login-content user-login">
                        <div class="login-logo">
                            <img src="<?php echo base_url();?>assets/img/logo.png" alt="img">
                            <a href="<?php echo base_url();?>dashboard" class="login-logo logo-white">
                                <img src="<?php echo base_url();?>assets/img/logo-white.png"  alt="">
                            </a>
                        </div>
                        <div class="login-userset">    
                            <a href="<?php echo base_url();?>dashboard" class="login-logo logo-white">
                                <img src="<?php echo base_url();?>assets/img/logo-white.png"  alt="">
                            </a>
                            <div class="login-userheading text-center">
                                <h3>Verify Your Email</h3>
                                <h4 class="verfy-mail-content">We've sent a link to your  email ter4@example.com. Please follow the link inside to continue</h4>
                            </div>
                            <div class="signinform text-center">
                                <h4>Didn't receive an email? <a href="javascript:void(0);" class="hover-a resend">Resend Link</a></h4>
                            </div>
                            <div class="form-login">
                                <a class="btn btn-login" href="<?php echo base_url();?>dashboard">Skip Now</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                        <p>Copyright &copy; 2023 DreamsPOS. All rights reserved</p>
                    </div>
                </div>
			</div>
        </div>
		<!-- /Main Wrapper --> 
        <?= $this->include('partials/theme-settings') ?>
		<?= $this->include('partials/vendor-scripts') ?>
	</body>
</html>