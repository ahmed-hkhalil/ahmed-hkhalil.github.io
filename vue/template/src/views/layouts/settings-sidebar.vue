<template>
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu5" class="sidebar-menu">
      <ul>
        <li
          v-for="menu in Settings"
          :key="menu.title"
          class="w-100"
          :class="{ submenu: true, subdrop: menu.expanded }"
          @click="toggleSubMenu(menu)"
        >
          <a :href="'javascript:void(0);'">
            <vue-feather :type="menu.icon"></vue-feather>
            <span class="me-4">{{ menu.title }}</span>
            <span class="menu-arrow"></span>
          </a>
          <ul :class="{ 'd-block': menu.expanded, 'd-none': !menu.expanded }">
            <li v-for="subMenu in menu.subMenu" :key="subMenu.title">
              <router-link :to="subMenu.routes" active-class="active">{{
                subMenu.title
              }}</router-link>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
import Settings from "@/assets/json/settings.json";
export default {
  data() {
    return {
      Settings: Settings,
    };
  },
  methods: {
    toggleSubMenu(menu) {
      menu.expanded = !menu.expanded;
    },
  },
};
</script>
