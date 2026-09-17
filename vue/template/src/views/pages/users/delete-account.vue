<template>
  <layout-header></layout-header>
  <layout-sidebar></layout-sidebar>
  <div class="page-wrapper">
    <div class="content">
      <div class="page-header">
        <div class="add-item d-flex">
          <div class="page-title">
            <h4>Delete Account Request</h4>
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
      </div>
      <!-- /product list -->
      <div class="card table-list-card">
        <div class="card-body pb-0">
          <div class="table-top table-top-two">
            <div class="input-blocks search-set mb-0">
              <div class="search-input">
                <input type="text" placeholder="Search" class="dark-input" />
                <a href="" class="btn btn-searchset"
                  ><i data-feather="search" class="feather-search"></i
                ></a>
              </div>
            </div>
            <div class="search-path d-flex align-items-center search-path-new">
              <div class="form-sort">
                <vue-feather type="sliders" class="info-img"></vue-feather>
                <vue-select
                  :options="DeleteSort"
                  id="deletesort"
                  placeholder="Sort by Date"
                />
              </div>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table datanew">
              <thead>
                <tr>
                  <th class="no-sort">
                    <label class="checkboxs">
                      <input type="checkbox" id="select-all" />
                      <span class="checkmarks"></span>
                    </label>
                  </th>
                  <th>User Name</th>
                  <th>Requisition Date</th>
                  <th>Delete Request Date</th>
                  <th class="no-sort">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <label class="checkboxs">
                      <input type="checkbox" />
                      <span class="checkmarks"></span>
                    </label>
                  </td>
                  <td>
                    <div class="userimgname">
                      <a href="javascript:void(0);" class="product-img">
                        <img src="@/assets/img/users/user-01.jpg" alt="product" />
                      </a>
                      <div>
                        <a href="javascript:void(0);">Steven</a>
                      </div>
                    </div>
                  </td>
                  <td>25 Sep 2023</td>
                  <td>01 Oct 2023</td>
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a
                        class="confirm-text p-2"
                        @click="showConfirmation"
                        href="javascript:void(0);"
                      >
                        <i data-feather="trash-2" class="feather-trash-2"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label class="checkboxs">
                      <input type="checkbox" />
                      <span class="checkmarks"></span>
                    </label>
                  </td>
                  <td>
                    <div class="userimgname">
                      <a href="javascript:void(0);" class="product-img">
                        <img src="@/assets/img/users/user-02.jpg" alt="product" />
                      </a>
                      <div>
                        <a href="javascript:void(0);">Susan Lopez</a>
                      </div>
                    </div>
                  </td>
                  <td>30 Sep 2023</td>
                  <td>05 Oct 2023</td>
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a
                        class="confirm-text p-2"
                        @click="showConfirmation"
                        href="javascript:void(0);"
                      >
                        <i data-feather="trash-2" class="feather-trash-2"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label class="checkboxs">
                      <input type="checkbox" />
                      <span class="checkmarks"></span>
                    </label>
                  </td>
                  <td>
                    <div class="userimgname">
                      <a href="javascript:void(0);" class="product-img">
                        <img src="@/assets/img/users/user-03.jpg" alt="product" />
                      </a>
                      <div>
                        <a href="javascript:void(0);">Robert Grossman</a>
                      </div>
                    </div>
                  </td>
                  <td>10 Sep 2023</td>
                  <td>25 Sep 2023</td>
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a
                        class="confirm-text p-2"
                        @click="showConfirmation"
                        href="javascript:void(0);"
                      >
                        <i data-feather="trash-2" class="feather-trash-2"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label class="checkboxs">
                      <input type="checkbox" />
                      <span class="checkmarks"></span>
                    </label>
                  </td>
                  <td>
                    <div class="userimgname">
                      <a href="javascript:void(0);" class="product-img">
                        <img src="@/assets/img/users/user-06.jpg" alt="product" />
                      </a>
                      <div>
                        <a href="javascript:void(0);">Janet Hembre</a>
                      </div>
                    </div>
                  </td>
                  <td>15 Sep 2023</td>
                  <td>20 Sep 2023</td>
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a
                        class="confirm-text p-2"
                        @click="showConfirmation"
                        href="javascript:void(0);"
                      >
                        <i data-feather="trash-2" class="feather-trash-2"></i>
                      </a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label class="checkboxs">
                      <input type="checkbox" />
                      <span class="checkmarks"></span>
                    </label>
                  </td>
                  <td>
                    <div class="userimgname">
                      <a href="javascript:void(0);" class="product-img">
                        <img src="@/assets/img/users/user-04.jpg" alt="product" />
                      </a>
                      <div>
                        <a href="javascript:void(0);">Russell Belle</a>
                      </div>
                    </div>
                  </td>
                  <td>15 Aug 2023</td>
                  <td>01 Sep 2023</td>
                  <td class="action-table-data">
                    <div class="edit-delete-action">
                      <a
                        class="confirm-text p-2"
                        @click="showConfirmation"
                        href="javascript:void(0);"
                      >
                        <i data-feather="trash-2" class="feather-trash-2"></i>
                      </a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /product list -->
    </div>
  </div>
</template>
<script>
import Swal from "sweetalert2";

export default {
  data() {
    return {
      DeleteSort: ["Sort by Date", "Newest", "Oldest"],
    };
  },
  methods: {
    showConfirmation() {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
        confirmButtonClass: "btn btn-primary",
        cancelButtonClass: "btn btn-danger ml-1",
        buttonsStyling: false,
      }).then((result) => {
        if (result.value) {
          Swal.fire({
            icon: "success",
            title: "Deleted!",
            text: "Your file has been deleted.",
            confirmButtonClass: "btn btn-success",
          });
        }
      });
    },
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
