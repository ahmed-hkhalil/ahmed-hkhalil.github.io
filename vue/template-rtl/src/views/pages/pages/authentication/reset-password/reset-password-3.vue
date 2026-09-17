<template>
  <div class="account-page">
    <div class="account-content">
      <div class="login-wrapper login-new">
        <div class="login-content user-login">
          <div class="login-logo">
            <img src="@/assets/img/logo.png" alt="img" />
            <router-link to="/dashboard" class="login-logo logo-white">
              <img src="@/assets/img/logo-white.png" alt="" />
            </router-link>
          </div>
          <form @submit.prevent="submitForm">
            <div class="login-userset">
              <div class="login-userheading">
                <h3>Reset password?</h3>
                <h4>Enter New Password & Confirm Password to get inside</h4>
              </div>
              <div class="form-login">
                <label> Old Password</label>
                <div class="pass-group">
                  <input type="password" class="pass-input" />
                  <span class="fas toggle-password fa-eye-slash"></span>
                </div>
              </div>
              <div class="form-login">
                <label>New Password</label>
                <div class="pass-group">
                  <input type="password" class="pass-inputa" />
                  <span class="fas toggle-passworda fa-eye-slash"></span>
                </div>
              </div>
              <div class="form-login">
                <label> New Confirm Passworrd</label>
                <div class="pass-group">
                  <input type="password" class="pass-inputs" />
                  <span class="fas toggle-passwords fa-eye-slash"></span>
                </div>
              </div>
              <div class="form-login">
                <button type="submit" class="btn btn-login">Change Password</button>
              </div>
              <div class="signinform text-center">
                <h4>
                  Return to
                  <router-link to="/signin-3" class="hover-a"> login </router-link>
                </h4>
              </div>
            </div>
          </form>
        </div>
        <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
          <p>Copyright &copy; {{ new Date().getFullYear() }} DreamsPOS. All rights reserved</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    submitForm() {
      this.$router.push("/success-3");
    },
  },
}
</script>
