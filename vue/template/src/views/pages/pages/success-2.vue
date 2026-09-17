<template>
    <div class="account-page">
        <div class="main-wrapper">
            <div class="account-content">
                <div class="login-wrapper">
                    <div class="login-content">
                        <div class="login-userset">
                            <div class="login-userset">
                                <div class="login-logo logo-normal">
                                    <img src="@/assets/img/logo.png" alt="img">
                                </div>
                            </div>
                            <router-link to="/dashboard" class="login-logo logo-white">
                                <img src="@/assets/img/logo-white.png" alt="">
                            </router-link>
                            <div class="login-userheading text-center">
                                <img src="@/assets/img/icons/check-icon.svg" alt="Icon">
                                <h3 class="text-center">Success</h3>
                                <h4 class="verfy-mail-content text-center">Your Passwrod Reset Successfully!</h4>
                            </div>


                            <div class="form-login">
                                <router-link class="btn btn-login mt-0" to="/signin-2">Back to Login</router-link>
                            </div>
                            <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                                <p>Copyright © {{ new Date().getFullYear() }}-Dreamspos</p>
                            </div>
                        </div>
                    </div>
                    <div class="login-img">
                        <img src="@/assets/img/authentication/step-two.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>