<template>
    <!-- Upload File -->
    <div class="modal fade modal-default pos-modal upload-modal" id="upload-file" aria-labelledby="upload-file">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-4">
                    <h5>Upload File</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <div class="drag-drop text-center mb-4">
                        <div class="upload">
                            <a href="javascript:void(0);"><img src="@/assets/img/icons/drag-drop.svg" alt=""></a>
                            <p>Drag and drop a <a href="javascript:void(0);">file to upload</a></p>
                        </div>
                        <input type="file" multiple="">
                    </div>

                    <div class="d-flex align-items-center justify-content-between">
                        <p>3 of 1 files Uploaded</p>
                        <span>70%</span>
                    </div>
                    <div class="progress mt-2 mb-4">
                        <div class="progress-bar progress-bar bg-success" role="progressbar" style="width: 75%"
                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <ul>
                        <li class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center w-85">
                                <img src="@/assets/img/icons/folder.svg" alt="Folder" class="me-2">
                                <div class="flex-fill">
                                    <h6><a href="javascript:void(0);">latest-version.zip<i data-feather="check-circle"
                                                class="ms-2 feather-16"></i></a></h6>
                                    <span>616 MB</span>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="text-danger text-right"><i data-feather="trash-2"
                                    class="feather-16"></i></a>
                        </li>
                        <li class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center w-85">
                                <img src="@/assets/img/icons/xls.svg" alt="Folder" class="me-2">
                                <div class="flex-fill">
                                    <h6><a href="javascript:void(0);">Update work history.xls</a></h6>
                                    <span>616 MB</span>
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="text-danger me-2 d-flex align-items-center"><i
                                        data-feather="trash-2" class="feather-16"></i></a>
                                <a href="javascript:void(0);" class="text-default d-flex align-items-center"><i
                                        data-feather="pause-circle" class="feather-16"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center w-85">
                                <img src="@/assets/img/icons/zip.svg" alt="Folder" class="me-2">
                                <div class="flex-fill">
                                    <h6><a href="javascript:void(0);">Updated Project.zip</a></h6>
                                    <span>616 MB</span>
                                    <div class="progress mt-2">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="text-danger me-2 d-flex align-items-center"><i
                                        data-feather="trash-2" class="feather-16"></i></a>
                                <a href="javascript:void(0);" class="text-default d-flex align-items-center"><i
                                        data-feather="play-circle" class="feather-16"></i></a>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- /Upload File -->

    <!-- Upload Folder -->
    <div class="modal fade modal-default pos-modal upload-modal" id="upload-folder" aria-labelledby="upload-folder">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-4">
                    <h5>Upload File</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <div class="drag-drop text-center mb-4">
                        <div class="upload">
                            <a href="javascript:void(0);"><img src="@/assets/img/icons/drag-drop.svg" alt=""></a>
                            <p>Drag and drop a <a href="javascript:void(0);">file to upload</a></p>
                        </div>
                        <input type="file" multiple="">
                    </div>

                    <div class="d-flex align-items-center justify-content-between">
                        <p>3 of 3 files Uploaded</p>
                        <span>100%</span>
                    </div>
                    <div class="progress mt-2 mb-4">
                        <div class="progress-bar progress-bar bg-success" role="progressbar" style="width: 100%"
                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <ul>
                        <li class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center w-85">
                                <img src="@/assets/img/icons/folder.svg" alt="Folder" class="me-2">
                                <div class="flex-fill">
                                    <h6><a href="javascript:void(0);">latest-version<i data-feather="check-circle"
                                                class="ms-2 feather-16"></i></a></h6>
                                    <span>616 MB</span>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="text-danger text-right"><i data-feather="trash-2"
                                    class="feather-16"></i></a>
                        </li>
                        <li class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center w-85">
                                <img src="@/assets/img/icons/xls.svg" alt="Folder" class="me-2">
                                <div class="flex-fill">
                                    <h6><a href="javascript:void(0);">Update work history.xls<i data-feather="trash-2"
                                                class="feather-16"></i></a></h6>
                                    <span>16 MB</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="text-danger me-2"><i data-feather="trash-2"
                                        class="feather-16"></i></a>
                                <a href="javascript:void(0);" class="text-default"><i data-feather="pause-circle"
                                        class="feather-16"></i></a>
                            </div>
                        </li>
                        <li class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center w-85">
                                <img src="@/assets/img/icons/zip.svg" alt="Folder" class="me-2">
                                <div class="flex-fill">
                                    <h6><a href="javascript:void(0);">updated project.zip<i data-feather="trash-2"
                                                class="feather-16"></i></a></h6>
                                    <span>14 MB</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0);" class="text-danger me-2"><i data-feather="trash-2"
                                        class="feather-16"></i></a>
                                <a href="javascript:void(0);" class="text-default"><i data-feather="play-circle"
                                        class="feather-16"></i></a>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="modal-footer d-sm-flex justify-content-end">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Clear</button>
                    <button type="button" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Upload Folder -->

    <!-- Upload Folder -->
    <div class="modal fade modal-default pos-modal upload-message" id="upload-message" aria-labelledby="upload-message">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header p-4">
                    <h5>Upload File</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-4">

                    <div class="d-flex align-items-center justify-content-between">
                        <p>3 of 3 files Uploaded</p>
                        <span>100%</span>
                    </div>
                    <div class="progress mt-2 mb-4">
                        <div class="progress-bar progress-bar bg-success" role="progressbar" style="width: 100%"
                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="modal-footer d-sm-flex justify-content-end">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Clear</button>
                    <button type="button" class="btn btn-primary">Upload</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Upload Folder -->

    <!-- Create Folder -->
    <div class="modal fade modal-default pos-modal" id="create-folder" aria-labelledby="create-folder">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header p-4">
                    <h5>Create Folder</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body p-4">
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label">Folder Name</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer d-sm-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Create Folder</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Create Folder -->
</template>

<script>
export default {
    data() {
        return {
            
        }
    },
}
</script>