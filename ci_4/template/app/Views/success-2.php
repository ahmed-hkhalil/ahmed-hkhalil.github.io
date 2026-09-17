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
				<div class="login-wrapper">
                    <div class="login-content">
                        <div class="login-userset">
                            <div class="login-userset">
                                <div class="login-logo logo-normal">
                                    <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="img">
                                </div>
                            </div>    
							<a href="<?php echo base_url(); ?>dashboard" class="login-logo logo-white">
								<img src="<?php echo base_url(); ?>/assets/img/logo-white.png"  alt="">
							</a>
                            <div class="login-userheading text-center">
                                <img src="<?php echo base_url(); ?>/assets/img/icons/check-icon.svg" alt="Icon">
                                <h3 class="text-center">Success</h3>
                                <h4 class="verfy-mail-content text-center">Your Passwrod Reset Successfully!</h4>
                            </div>
                            
                           
                            <div class="form-login">
                                <a class="btn btn-login mt-0" href="<?php echo base_url(); ?>signin-2">Back to Login</a>
                            </div>
                            <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                                <p>Copyright © 2023-Dreamspos</p>
                            </div>
                        </div>
                    </div>
                    <div class="login-img">
                        <img src="<?php echo base_url(); ?>/assets/img/authentication/step-two.png" alt="img">
                    </div>
                </div>
			</div>
        </div>
        <!-- /Main Wrapper -->
        <?= $this->include('partials/theme-settings') ?>
        <?= $this->include('partials/vendor-scripts') ?>
    </body>
</html>