<template>
  <div class="notes-slider owl-carousel">
    <Carousel :wrap-around="true" :settings="settings" :breakpoints="breakpoints">
      <Slide v-for="item in NotesCarousel" :key="item.id">
        <div :class="item.Class">
          <div class="notes-card-body">
            <p :class="item.Badge_class">
              <i class="fas fa-circle"></i> {{ item.Badge }}
            </p>
            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-ellipsis-v"></i>
            </a>
            <div class="dropdown-menu notes-menu dropdown-menu-end">
              <a
                href="javascript:void(0);"
                class="dropdown-item"
                data-bs-toggle="modal"
                data-bs-target="#edit-note-units"
                ><span><vue-feather type="edit"></vue-feather></span>Edit</a
              >
              <a
                href="javascript:void(0);"
                class="dropdown-item"
                data-bs-toggle="modal"
                data-bs-target="#delete-note-units"
                ><span><vue-feather type="trash-2"></vue-feather></span>Delete</a
              >
              <a href="javascript:void(0);" class="dropdown-item"
                ><span><vue-feather type="star"></vue-feather></span>Not Important</a
              >
              <a
                href="javascript:void(0);"
                class="dropdown-item"
                data-bs-toggle="modal"
                data-bs-target="#view-note-units"
                ><span><vue-feather type="eye"></vue-feather></span>View</a
              >
            </div>
          </div>
          <div class="notes-slider-content text-start">
            <h4>
              <a href="javascript:void(0);">
                {{ item.Title }}
              </a>
            </h4>
            <p>{{ item.Content }}</p>
          </div>
          <div class="notes-slider-widget">
            <div class="notes-logo">
              <a href="javascript:void(0);">
                <span>
                  <img
                    :src="require(`@/assets/img/profiles/${item.Image}`)"
                    alt="Profile"
                    class="img-fluid"
                  />
                </span>
              </a>
              <div class="d-flex">
                <span class="low-square"><i class="fas fa-square"></i></span>
                <p>{{ item.Role }}</p>
              </div>
            </div>
            <div class="notes-star-delete">
              <a href="javascript:void(0);">
                <span><i class="fas fa-star"></i></span>
              </a>
              <a href="javascript:void(0);">
                <span><vue-feather type="trash-2"></vue-feather></span>
              </a>
            </div>
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
import NotesCarousel from "@/assets/json/notes-carousel.json";
export default {
  data() {
    return {
      NotesCarousel: NotesCarousel,
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
          itemsToShow: 3,
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
