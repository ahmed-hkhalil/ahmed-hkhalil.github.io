<template>
  <div class="account-page">
    <div class="account-content">
      <div class="login-wrapper email-veri-wrap bg-img">
        <div class="login-content">
          <div class="login-userset">
            <div class="login-userset">
              <div class="login-logo logo-normal">
                <img src="@/assets/img/logo.png" alt="img" />
              </div>
            </div>
            <router-link to="/dashboard" class="login-logo logo-white">
              <img src="@/assets/img/logo-white.png" alt="" />
            </router-link>
            <div class="login-userheading text-center">
              <h3>Verify Your Email</h3>
              <h4 class="verfy-mail-content">
                We've sent a link to your email ter4@example.com. Please follow the link
                inside to continue
              </h4>
            </div>
            <div class="signinform text-center">
              <h4>
                Didn't receive an email?
                <a href="javascript:void(0);" class="hover-a resend">Resend Link</a>
              </h4>
            </div>
            <div class="form-login">
              <router-link class="btn btn-login" to="/dashboard"
                >Skip Now</router-link
              >
            </div>
            <div
              class="my-4 d-flex justify-content-center align-items-center copyright-text"
            >
              <p>Copyright &copy; {{ new Date().getFullYear() }} DreamsPOS. All rights reserved</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
