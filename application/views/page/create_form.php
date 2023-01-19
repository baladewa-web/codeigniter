<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Data</title>
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
                <div class="col-lg-7 col-md-8 mb-4 order-0">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between mb-3">
                      <h5 class="mb-0">Tambah Data</h5>
                      <small class="text-muted float-end">Tambah data dalam database</small>
                    </div>
                    <div class="card-body">
                      <form method="post" action="<?php echo base_url('page/store'); ?>">
                      <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="tahun">Tahun</label>
                          <div class="col-sm-5">
                            <div class="input-group input-group-merge">
                              <span id="usulan" class="input-group-text">
                              <i class='bx bx-calendar' ></i>
                              </span>
                              <input
                                type="month"
                                name="tahun"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="YYYY"
                                aria-label="Perbaikan selokan"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="usulan">Usulan</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="usulan" class="input-group-text">
                              <i class='bx bx-buildings'></i>
                              </span>
                              <input
                                type="text"
                                name="usulan"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="Perbaikan selokan"
                                aria-label="Perbaikan selokan"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="rt">Rt</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-company2" class="input-group-text"
                                ><i class='bx bx-location-plus'></i>
                              </span>
                              <input
                                type="number"
                                name="rt"
                                id="rt"
                                class="form-control"
                                placeholder="1"
                                aria-label="Rt"
                                aria-describedby="basic-icon-default-company2"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="rw">Rw</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class='bx bxs-location-plus' ></i></span>
                              <input
                                type="number"
                                name="rw"
                                id="rw"
                                class="form-control"
                                placeholder="3"
                                aria-label="Rw"
                                aria-describedby="rw"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="jumlah">Jumlah</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class='bx bx-customize'></i></span>
                              <input
                                type="number"
                                name="jumlah"
                                id="jumlah"
                                class="form-control"
                                placeholder="3"
                                aria-label="Jumlah"
                                aria-describedby="jumlah"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="satuan">Satuan</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class='bx bx-list-ul'></i></span>
                              <input
                                type="text"
                                name="satuan"
                                id="satuan"
                                class="form-control"
                                placeholder="paket"
                                aria-label="Satuan"
                                aria-describedby="satuan"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="pagu">pagu</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class='bx bx-wallet-alt' ></i></span>
                              <input
                                type="number"
                                name="pagu"
                                id="pagu"
                                class="form-control"
                                placeholder="10.000.000"
                                aria-label="Pagu"
                                aria-describedby="pagu"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="realisasi">Realisasi</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class='bx bx-money' ></i></span>
                              <input
                                type="number"
                                name="realisasi"
                                id="realisasi"
                                class="form-control"
                                placeholder="9.000.000"
                                aria-label="Realisasi"
                                aria-describedby="realisasi"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="sisa">Sisa</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class='bx bx-wallet' ></i></span>
                              <input
                                type="number"
                                name="sisa"
                                id="sisa"
                                class="form-control"
                                placeholder="1.000.000"
                                aria-label="Sisa"
                                aria-describedby="sisa"
                              />
                            </div>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary"><i class='bx bx-save' ></i> Simpan</button>
                          </div>
                        </div>
                      </form>
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