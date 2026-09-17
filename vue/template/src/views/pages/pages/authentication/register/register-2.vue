<template>
  <div class="account-page">
    <div class="account-content">
      <div class="login-wrapper">
        <div class="login-content">
          <form @submit.prevent="submitForm">
            <div class="login-userset">
              <div class="login-logo logo-normal">
                <img src="@/assets/img/logo.png" alt="img" />
              </div>
              <router-link to="/dashboard" class="login-logo logo-white">
                <img src="@/assets/img/logo-white.png" alt="" />
              </router-link>
              <div class="login-userheading">
                <h3>Register</h3>
                <h4>Create New Dreamspos Account</h4>
              </div>
              <div class="form-login">
                <label>Name</label>
                <div class="form-addons">
                  <input type="text" class="form-control" />
                  <img src="@/assets/img/icons/user-icon.svg" alt="img" />
                </div>
              </div>
              <div class="form-login">
                <label>Email Address</label>
                <div class="form-addons">
                  <input type="text" class="form-control" />
                  <img src="@/assets/img/icons/mail.svg" alt="img" />
                </div>
              </div>
              <div class="form-login">
                <label>Password</label>
                <div class="pass-group">
                  <input type="password" class="pass-input" />
                  <span class="fas toggle-password fa-eye-slash"></span>
                </div>
              </div>
              <div class="form-login">
                <label>Confirm Passworrd</label>
                <div class="pass-group">
                  <input type="password" class="pass-inputs" />
                  <span class="fas toggle-passwords fa-eye-slash"></span>
                </div>
              </div>
              <div class="form-login authentication-check">
                <div class="row">
                  <div class="col-sm-8">
                    <div class="custom-control custom-checkbox justify-content-start">
                      <div class="custom-control custom-checkbox">
                        <label class="checkboxs ps-4 mb-0 pb-0 line-height-1">
                          <input type="checkbox" />
                          <span class="checkmarks"></span>I agree to the
                          <a href="javascript:void(0);" class="hover-a">Terms & Privacy</a>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-login">
                <button type="submit" class="btn btn-login">Sign Up</button>
              </div>
              <div class="signinform">
                <h4>
                  Already have an account ?
                  <router-link to="/signin-2" class="hover-a">Sign In Instead</router-link>
                </h4>
              </div>
              <div class="form-setlogin or-text">
                <h4>OR</h4>
              </div>
              <div class="form-sociallink">
                <ul class="d-flex">
                  <li>
                    <a href="javascript:void(0);" class="facebook-logo">
                      <img src="@/assets/img/icons/facebook-logo.svg" alt="Facebook" />
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0);">
                      <img src="@/assets/img/icons/google.png" alt="Google" />
                    </a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" class="apple-logo">
                      <img src="@/assets/img/icons/apple-logo.svg" alt="Apple" />
                    </a>
                  </li>
                </ul>
              </div>
              <div
                class="my-4 d-flex justify-content-center align-items-center copyright-text"
              >
                <p>Copyright &copy; {{ new Date().getFullYear() }} DreamsPOS. All rights reserved</p>
              </div>
            </div>
          </form>
        </div>
        <div class="login-img">
          <img src="@/assets/img/authentication/register02.png" alt="img" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    submitForm() {
      this.$router.push("/signin-2");
    },
  },

}
</script>