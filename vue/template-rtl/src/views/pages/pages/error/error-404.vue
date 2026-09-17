<template>
  <div class="error-page">
    <div class="error-box">
      <div class="error-img">
        <img src="@/assets/img/authentication/error-404.png" class="img-fluid" alt="" />
      </div>
      <h3 class="h2 mb-3">Oops, something went wrong</h3>
      <p>
        Error 404 Page not found. Sorry the page you looking for doesn’t exist or has been
        moved
      </p>
      <router-link to="/dashboard" class="btn btn-primary"
        >Back to Dashboard</router-link
      >
    </div>
  </div>
</template>
