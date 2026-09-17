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
                            <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="img">
                            <a href="<?php echo base_url();?>dashboard" class="login-logo logo-white">
                                <img src="<?php echo base_url(); ?>/assets/img/logo-white.png"  alt="">
                            </a>
                        </div>
                        <div class="login-userset">
                            <div class="login-userheading text-center">
                                <img src="<?php echo base_url(); ?>/assets/img/icons/check-icon.svg" alt="Icon">
                                <h3 class="text-center">Success</h3>
                                <h4 class="verfy-mail-content text-center">Your Passwrod Reset Successfully!</h4>
                            </div>
                            
                           
                            <div class="form-login">
                                <a class="btn btn-login mt-0" href="<?php echo base_url(); ?>signin-3">Back to Login</a>
                            </div>
                            <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                                <p>Copyright © 2023-Dreamspos</p>
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