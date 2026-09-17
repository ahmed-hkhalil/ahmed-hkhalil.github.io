<template>
    <layout-header></layout-header>
    <layout-sidebar></layout-sidebar>

    <div class="page-wrapper notes-page-wrapper file-manager" >
        <div class="content">
            <div class="page-header page-add-notes d-flex align-items-center justify-content-between">
                <div class="add-item d-flex align-items-center">
                    <div class="page-title">
                        <h4>Deleted</h4>
                        <h6>Manage your Deleted File</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-12 sidebars-right theiaStickySidebar section-bulk-widget">
                    <files-sidebar></files-sidebar>
                </div>

                <div class="col-lg-9 budget-role-notes">

                    <div class="alert alert-danger d-flex align-items-center justify-content-between delete-alert"
                        role="alert">
                        <p class="mb-0 text-danger d-flex align-items-center"><vue-feather type="info"
                                class="feather-16 me-2"></vue-feather>Items in trash will be deleted forever after 30 days
                        </p> <a href="javascript:void(0);" class="btn btn-secondary" id="file-delete"
                            @click="handleFileDelete"><vue-feather type="trash-2"
                                class="feather-16 me-1"></vue-feather>Empty Trash</a>
                    </div>
                    <div class="card p-4 bg-white all-files mb-0">
                        <div class="seprator-lg d-sm-flex align-items-center justify-content-between">
                            <h4>All Files</h4>
                            <div class="d-flex align-items-center btn-grp">
                                <a href="javascript:void(0);" class="btn btn-primary me-2"><vue-feather type="list"
                                        class="feather-20"></vue-feather></a>
                                <a href="javascript:void(0);" class="btn btn-outline-secondary me-2"><vue-feather
                                        type="layout" class="feather-20"></vue-feather></a>
                                <a href="javascript:void(0);" class="btn btn-outline-secondary me-2"><vue-feather
                                        type="grid" class="feather-20"></vue-feather></a>
                                <div class="icon-select me-2">
                                    <span class="icon"><vue-feather type="calendar" class="feather-16"></vue-feather></span>
                                    <vue-select :options="Opened" id="meopened" placeholder="Last Modified" />
                                </div>

                                <div class="icon-select">
                                    <span class="icon"><vue-feather type="file-text"
                                            class="feather-16"></vue-feather></span>
                                    <vue-select :options="File" id="mefilepdf" placeholder="All File Types" />
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive deleted-table">
                            <file-table></file-table>
                        </div>

                        <div class="deleted-info text-center p-4">
                            <div class="bin-bg d-flex align-items-center justify-content-center">
                                <img src="@/assets/img/icons/trash-bin.svg" class="me-2" alt="img">
                            </div>
                            <h6 class="mt-3">Trash is Empty</h6>
                            <p>Items moved to the trash will be deleted forever after 30 days</p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- /Content -->
    </div>

    <file-manager-modal></file-manager-modal>
</template>

<script>
export default {
    data() {
        return {
            File: ["All File types", "Folders", "PDF", "Images", "Videos", "Audios", "Excel"],
            Opened: ["Last Modified", "Last Modified by Me", "Last Opened by Me"]
        }
    },
    methods: {
        handleFileDelete() {
            if (document.getElementById('file-delete')) {
                document.getElementsByClassName('deleted-table')[0].classList.add('d-none');
                document.getElementsByClassName('deleted-info')[0].classList.add('d-block');
            }
        }
    }
}
</script>