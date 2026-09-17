<template>
  <!-- Print Barcode -->
  <div class="modal fade" id="prints-barcode">
    <div class="modal-dialog modal-dialog-centered stock-adjust-modal">
      <div class="modal-content">
        <div class="page-wrapper-new p-0">
          <div class="content">
            <div class="modal-header border-0 custom-modal-header">
              <div class="page-title">
                <h4>Barcode</h4>
              </div>
              <button
                type="button"
                class="close"
                data-bs-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body custom-modal-body">
              <div class="d-flex justify-content-end">
                <a href="javascript:void(0);" class="btn btn-cancel close-btn">
                  <span><i class="fas fa-print me-2"></i></span>
                  Print Barcode</a
                >
              </div>

              <div class="barcode-scan-header">
                <h5>Nike Jordan</h5>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="barcode-scanner-link text-center">
                    <h6>Grocery Alpha</h6>
                    <p>Nike Jordan</p>
                    <p>Price: $400</p>
                    <div class="barscaner-img">
                      <img
                        src="@/assets/img/barcode/barcode-01.png"
                        alt="Barcode"
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
              </div>

              <div class="barcode-scan-header">
                <h5>Apple Series 5 Watch</h5>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="barcode-scanner-link text-center">
                    <h6>Grocery Alpha</h6>
                    <p>Apple Series 5 Watch</p>
                    <p>Price: $300</p>
                    <div class="barscaner-img">
                      <img
                        src="@/assets/img/barcode/barcode-02.png"
                        alt="Barcode"
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="barcode-scanner-link text-center">
                    <h6>Grocery Alpha</h6>
                    <p>Apple Series 5 Watch</p>
                    <p>Price: $300</p>
                    <div class="barscaner-img">
                      <img
                        src="@/assets/img/barcode/barcode-02.png"
                        alt="Barcode"
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="barcode-scanner-link text-center">
                    <h6>Grocery Alpha</h6>
                    <p>Apple Series 5 Watch</p>
                    <p>Price: $300</p>
                    <div class="barscaner-img">
                      <img
                        src="@/assets/img/barcode/barcode-02.png"
                        alt="Barcode"
                        class="img-fluid"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Print Barcode -->
</template>
