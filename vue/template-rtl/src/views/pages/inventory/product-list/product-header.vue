<template>
  <div class="page-header">
    <div class="add-item d-flex">
      <div class="page-title">
        <h4>Product List</h4>
        <h6>Manage your products</h6>
      </div>
    </div>
    <ul class="table-top-head">
      <li>
        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"
          ><img src="@/assets/img/icons/pdf.svg" alt="img"
        /></a>
      </li>
      <li>
        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"
          ><img src="@/assets/img/icons/excel.svg" alt="img"
        /></a>
      </li>
      <li>
        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"
          ><i data-feather="printer" class="feather-printer"></i
        ></a>
      </li>
      <li>
        <a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"
          ><i data-feather="rotate-ccw" class="feather-rotate-ccw"></i
        ></a>
      </li>
      <li>
        <a
          ref="collapseHeader"
          data-bs-toggle="tooltip"
          data-bs-placement="top"
          title="Collapse"
          @click="toggleCollapse"
        >
          <i data-feather="chevron-up" class="feather-chevron-up"></i>
        </a>
      </li>
    </ul>
    <div class="page-btn">
      <router-link to="/inventory/add-product" class="btn btn-added"
        ><vue-feather type="plus-circle" class="me-2"></vue-feather>Add New
        Product</router-link
      >
    </div>
    <div class="page-btn import">
      <a
        href="javascript:void(0);"
        class="btn btn-added color"
        data-bs-toggle="modal"
        data-bs-target="#view-notes"
        ><vue-feather type="download" class="me-2"></vue-feather>Import Product</a
      >
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {};
  },
  methods: {
    toggleCollapse() {
      const collapseHeader = this.$refs.collapseHeader;

      if (collapseHeader) {
        collapseHeader.classList.toggle("active");
        document.body.classList.toggle("header-collapse");
      }
    },
  },
};
</script>
