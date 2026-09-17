<template>
    <div class="account-page">
        <div class="main-wrapper">
            <div class="account-content">
                <div class="login-wrapper login-new">
                    <div class="login-content user-login">
                        <div class="login-logo">
                            <img src="@/assets/img/logo.png" alt="img">
                            <router-link to="/dashboard" class="login-logo logo-white">
                                <img src="@/assets/img/logo-white.png" alt="">
                            </router-link>
                        </div>
                        <div class="login-userset">
                            <div class="login-userheading text-center">
                                <img src="@/assets/img/icons/check-icon.svg" alt="Icon">
                                <h3 class="text-center">Success</h3>
                                <h4 class="verfy-mail-content text-center">Your Passwrod Reset Successfully!</h4>
                            </div>


                            <div class="form-login">
                                <router-link class="btn btn-login mt-0" to="/signin-3">Back to Login</router-link>
                            </div>
                            <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                                <p>Copyright © {{ new Date().getFullYear() }}-Dreamspos</p>
                            </div>
                        </div>
                    </div>
                    <div class="my-4 d-flex justify-content-center align-items-center copyright-text">
                        <p>Copyright &copy; {{ new Date().getFullYear() }} DreamsPOS. All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>