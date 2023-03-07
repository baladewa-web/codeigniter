<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lihat Data</title>
    <?php $this->load->view('/partials/head') ?>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php $this->load->view('/partials/sidebar') ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php $this->load->view('/partials/navbar') ?>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-5 col-md-6 mb-4">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between mb-3">
                      <h5 class="mb-0">Detail Data</h5>
                      <a href="<?php echo site_url('page/list') ?>" class="float-end"><i class='bx bx-arrow-back'></i> Kembali</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <p class="col-sm-3">Tahun</p>
                          <div class="col-sm-9">
                              <h6 class="text-end text-info"><?php echo $usulan->tahun ?></h6>
                          </div>
                        </div>
                        <hr class="mt-0 mb-3">
                        <div class="row">
                          <p class="col-sm-3">Usulan</p>
                          <div class="col-sm-9">
                              <h5 class="text-end"><?php echo $usulan->nama ?></h5>
                          </div>
                        </div>
                        <hr class="mt-0 mb-3">
                        <div class="row">
                          <p class="col-sm-3">Rt / Rw</p>
                          <div class="col-sm-9">
                              <h6 class="text-end"><?php echo $usulan->rt ?> / <?php echo $usulan->rw ?></h6>
                          </div>
                        </div>
                        <hr class="mt-0 mb-3">
                        <div class="row">
                          <p class="col-sm-3">Jumlah</p>
                          <div class="col-sm-9">
                              <h5 class="text-end"><?php echo $usulan->jumlah ?></h5>
                          </div>
                        </div>
                        <hr class="mt-0 mb-3">
                        <div class="row">
                          <p class="col-sm-3">Satuan</p>
                          <div class="col-sm-9">
                              <h5 class="text-end"><?php echo $usulan->satuan ?></h5>
                          </div>
                        </div>
                        <hr class="mt-0 mb-3">
                        <div class="row">
                          <p class="col-sm-3">Pagu</p>
                          <div class="col-sm-9">
                              <h5 class="text-end"><?php echo "Rp. ". number_format($usulan->pagu, 0,",","."); ?></h5>
                          </div>
                        </div>
                        <hr class="mt-0 mb-3">
                        <div class="row">
                          <p class="col-sm-3">Realisasi</p>
                          <div class="col-sm-9">
                              <h5 class="text-end"><?php echo "Rp. ". number_format($usulan->realisasi, 0,",","."); ?></h5>
                          </div>
                        </div>
                        <hr class="mt-0 mb-3">
                        <div class="row">
                          <p class="col-sm-3">Sisa</p>
                          <div class="col-sm-9">
                              <h5 class="text-end"><?php echo "Rp. ". number_format($usulan->pagu - $usulan->realisasi, 0,",","."); ?></h5>
                          </div>
                        </div>
                        <hr class="mt-0 mb-3">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php $this->load->view('/partials/footer.php') ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    
    <!-- Modal -->
    <?php //$this->load->view('/partials/modal') ?>


    <!-- Core JS -->
    <?php $this->load->view('/partials/script') ?>
</body>
</html>