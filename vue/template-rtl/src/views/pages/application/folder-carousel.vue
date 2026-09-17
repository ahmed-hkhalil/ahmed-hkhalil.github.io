<template>
  <div class="owl-carousel folders-carousel owl-theme">
    <Carousel :wrap-around="true" :settings="settings" :breakpoints="breakpoints">
      <Slide v-for="item in FolderCarousel" :key="item.id">
        <div class="folders p-3">
          <div class="d-flex align-items-center justify-content-between head">
            <div class="d-flex align-items-center">
              <img src="@/assets/img/icons/folder.svg" alt="Folder" class="me-2" />
              <h6 class="popup-toggle">
                <a href="javascript:void(0);">Project Details</a>
              </h6>
            </div>
            <div class="dropdown">
              <a
                href="javascript:void(0);"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                class="dropset"
              >
                <i class="fa fa-ellipsis-v"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a href="javascript:void(0);" class="dropdown-item">Details</a></li>
                <li><a href="javascript:void(0);" class="dropdown-item">Share</a></li>
                <li><a href="javascript:void(0);" class="dropdown-item">Copy</a></li>
                <li><a href="javascript:void(0);" class="dropdown-item">Move</a></li>
                <li><a href="javascript:void(0);" class="dropdown-item">Download</a></li>
                <li><a href="javascript:void(0);" class="dropdown-item">Rename</a></li>
                <li><a href="javascript:void(0);" class="dropdown-item">Archeived</a></li>
                <li><a href="javascript:void(0);" class="dropdown-item">Delete</a></li>
              </ul>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-start project-plan my-3">
            <label>Project plan</label>
            <ul class="d-flex">
              <li class="d-flex align-items-center">154 KB</li>
              <li class="d-flex align-items-center">8 Files</li>
            </ul>
          </div>
          <div class="d-flex align-items-center justify-content-between avatar-wrap">
            <div class="group-avatar">
              <span class="avatar">
                <a
                  href="javascript:void(0);"
                  data-bs-toggle="tooltip"
                  data-bs-placement="right"
                  aria-label="Member 1"
                  data-bs-original-title="Member 1"
                  ><img :src="require(`@/assets/img/avatar/${item.Image}`)" alt="Avatar"
                /></a>
              </span>
              <span class="avatar">
                <a
                  href="javascript:void(0);"
                  data-bs-toggle="tooltip"
                  data-bs-placement="right"
                  aria-label="Member 2"
                  data-bs-original-title="Member 2"
                  ><img
                    :src="require(`@/assets/img/avatar/${item.Image_Two}`)"
                    alt="Avatar"
                /></a>
              </span>
              <span class="avatar">
                <a
                  href="javascript:void(0);"
                  data-bs-toggle="tooltip"
                  data-bs-placement="right"
                  aria-label="Member 3"
                  data-bs-original-title="Member 3"
                  ><img
                    :src="require(`@/assets/img/avatar/${item.Image_Three}`)"
                    alt="Avatar"
                /></a>
              </span>
              <span class="avatar">
                <a
                  href="javascript:void(0);"
                  data-bs-toggle="tooltip"
                  data-bs-placement="right"
                  aria-label="Member 4"
                  data-bs-original-title="Member 4"
                  ><img
                    :src="require(`@/assets/img/avatar/${item.Image_Four}`)"
                    alt="Avatar"
                /></a>
              </span>
              <span class="avatar">
                <a
                  href="javascript:void(0);"
                  data-bs-toggle="tooltip"
                  data-bs-placement="right"
                  aria-label="Member 5"
                  data-bs-original-title="Member 5"
                  ><img
                    :src="require(`@/assets/img/avatar/${item.Image_Five}`)"
                    alt="Avatar"
                /></a>
              </span>
              <span class="count">
                <a href="javascript:void(0);">{{ item.Member }}</a>
              </span>
            </div>
            <a href="javascript:void(0);" class=""
              ><vue-feather type="star" class="feather-16"></vue-feather
            ></a>
          </div>
        </div>
      </Slide>
      <template #addons>
        <Navigation />
      </template>
    </Carousel>
  </div>
</template>

<script>
import { Carousel, Navigation, Slide } from "vue3-carousel";
import "vue3-carousel/dist/carousel.css";
import FolderCarousel from "@/assets/json/folder-carousel.json";
export default {
  data() {
    return {
      FolderCarousel: FolderCarousel,
      settings: {
        itemsToShow: 1,
        snapAlign: "center",
        loop: true,
      },
      breakpoints: {
        575: {
          itemsToShow: 1,
          snapAlign: "center",
        },
        767: {
          itemsToShow: 1,
          snapAlign: "center",
        },
        991: {
          itemsToShow: 2,
          snapAlign: "center",
        },
        1024: {
          itemsToShow: 2,
          snapAlign: "start",
        },
      },
    };
  },
  components: {
    Carousel,
    Slide,
    Navigation,
  },
};
</script>
