<template>
  <div class="stickysidebar">
    <aside class="card file-manager-sidebar mb-0">
      <h5 class="d-flex align-items-center">
        <span class="me-2 d-flex align-items-center"><vue-feather type="folder"
            class="feather-20"></vue-feather></span>Files
      </h5>
      <div class="dropdown">
        <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"
          class="dropset btn btn-primary mb-3 btn-icon">
          <span class="me-1 btn-icon"><vue-feather type="plus-circle" class="feather-16"></vue-feather></span>New
        </a>
        <ul class="dropdown-menu">
          <li data-bs-toggle="modal" data-bs-target="#upload-file">
            <a href="javascript:void(0);" class="dropdown-item"><vue-feather type="upload-cloud"
                class="feather-16 me-2"></vue-feather>Upload File</a>
          </li>
          <li data-bs-toggle="modal" data-bs-target="#upload-folder">
            <a href="javascript:void(0);" class="dropdown-item"><vue-feather type="folder"
                class="feather-16 me-2"></vue-feather>Upload
              Folder</a>
          </li>
          <li data-bs-toggle="modal" data-bs-target="#create-folder">
            <a href="javascript:void(0);" class="dropdown-item"><vue-feather type="folder-minus"
                class="feather-16 me-2"></vue-feather>Create folder</a>
          </li>
        </ul>
      </div>

      <ul class="mb-5">
        <li :class="{ 'active': isActive('/application/file-manager') }">
          <router-link to="/application/file-manager"><span class="me-2 btn-icon"><vue-feather type="file-text"
                class="feather-16"></vue-feather></span>My
            Files</router-link>
        </li>
        <li><a href="javascript:void(0);"><span class="me-2 btn-icon"><vue-feather type="star"
                class="feather-16"></vue-feather></span>Google Drive</a></li>
        <li><a href="javascript:void(0);"><span class="me-2 btn-icon"><vue-feather type="send"
                class="feather-16"></vue-feather></span>Dropbox</a></li>
        <li :class="{ 'active': isActive('/application/file-shared') }">
          <router-link to="/application/file-shared"><span class="me-2 btn-icon"><vue-feather type="file"
                class="feather-16"></vue-feather></span>Shared With
            Me</router-link>
        </li>
        <li :class="{ 'active': isActive('/application/file-document') }">
          <router-link to="/application/file-document"><span class="me-2 btn-icon"><vue-feather type="file"
                class="feather-16"></vue-feather></span>Document</router-link>
        </li>
        <li :class="{ 'active': isActive('/application/file-recent') }">
          <router-link to="/application/file-recent"><span class="me-2 btn-icon"><vue-feather type="clock"
                class="feather-16"></vue-feather></span>Recent</router-link>
        </li>
        <li :class="{ 'active': isActive('/application/file-favourites') }">
          <router-link to="/application/file-favourites"><span class="me-2 btn-icon"><vue-feather type="star"
                class="feather-16"></vue-feather></span>Favourites</router-link>
        </li>
        <li :class="{ 'active': isActive('/application/file-archived') }">
          <router-link to="/application/file-archived"><span class="me-2 btn-icon"><vue-feather type="target"
                class="feather-16"></vue-feather></span>Archived</router-link>
        </li>
        <li :class="{ 'active': isActive('/application/file-manager-deleted') }">
          <router-link to="/application/file-manager-deleted"><span class="me-2 btn-icon"><vue-feather type="trash-2"
                class="feather-16"></vue-feather></span>Deleted</router-link>
        </li>
        <li><a href="javascript:void(0);"><span class="me-2 btn-icon"><vue-feather type="settings"
                class="feather-16"></vue-feather></span>Settings</a></li>
      </ul>
      <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
          <span class="me-2 btn-icon"><vue-feather type="hard-drive" class="feather-16"></vue-feather></span>
          <h6>Storage</h6>
        </div>
        <span>70%</span>
      </div>
      <div class="progress my-2">
        <div class="progress-bar progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75"
          aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <span>78.5 GB of 1 TB Free Used</span>
      <div class="space-manager p-4">
        <img src="@/assets/img/icons/half-circle.svg" alt="Folder">
        <h6><a href="javascript:void(0);">Need More Space?</a></h6>
        <p>Upgrade storage for 2TB for $60 per month</p>
        <a href="javascript:void(0);" class="btn btn-outline-primary">Upgrade<span class="ms-1 btn-icon"><vue-feather
              type="repeat" class="feather-16"></vue-feather></span></a>
      </div>
    </aside>
  </div>
</template>

<script>
export default {
  methods: {
    isActive(route) {
      return this.$route.path === route;
    },
  },
};
</script>
