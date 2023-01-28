<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data</title>
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
                      <h5 class="mb-0">Ubah Data</h5>
                      <small class="text-muted float-end">Ubah data dalam database</small>
                    </div>
                    <div class="card-body">
                      <!-- <form method="post" action="<?php //echo site_url('page/create'); ?>"> -->
                      <?php 
                        $attributes = array( 'method' => "post", "autocomplete" => "off");
                        echo form_open('', $attributes);
                      ?>
                      <div class="row mb-3">
                        <input type="hidden" name="id" value="<?php echo $usulan->id ?>">

                          <label class="col-sm-2 col-form-label" for="tahun">Tahun</label>
                          <div class="col-sm-5">
                            <div class="input-group input-group-merge">
                              <span id="Tahun" class="input-group-text">
                              <i class='bx bx-calendar' ></i>
                              </span>
                              <input type="number" name="tahun" class="form-control" id="tahun" value="<?php echo $usulan->tahun ?>" placeholder="YYYY" <?= set_value('tahun'); ?>/>
                            </div>
                            <small class="text-danger mb-0">
                              <?php echo form_error('tahun') ?>
                            </small>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="usulan">Usulan</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="Usulan" class="input-group-text">
                              <i class='bx bx-buildings'></i>
                              </span>
                              <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $usulan->nama ?>" placeholder="Perbaikan selokan" <?= set_value('nama'); ?>/>
                            </div>
                            <small class="text-danger">
                              <?php echo form_error('nama') ?>
                            </small>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="rt">Rt</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-company2" class="input-group-text"
                                ><i class='bx bx-location-plus'></i>
                              </span>
                              <input type="number" name="rt" id="Rt" class="form-control" value="<?php echo $usulan->rt ?>" placeholder="1" <?= set_value('rt'); ?>/>
                            </div>
                            <small class="text-danger">
                              <?php echo form_error('rt') ?>
                            </small>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="rw">Rw</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class='bx bxs-location-plus' ></i></span>
                              <input type="number" name="rw" id="Rw" class="form-control"  value="<?php echo $usulan->rw ?>" placeholder="3" <?= set_value('rw'); ?>/>
                            </div>
                            <small class="text-danger">
                              <?php echo form_error('rw') ?>
                            </small>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="jumlah">Jumlah</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class='bx bx-customize'></i></span>
                              <input type="number" name="jumlah" id="Jumlah" class="form-control"  value="<?php echo $usulan->jumlah ?>" placeholder="3" <?= set_value('jumlah'); ?>/>
                            </div>
                            <small class="text-danger">
                              <?php echo form_error('jumlah') ?>
                            </small>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="satuan">Satuan</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"><i class='bx bx-list-ul'></i></span>
                              <input type="text" name="satuan" id="Satuan" class="form-control"  value="<?php echo $usulan->satuan ?>"  placeholder="paket" <?= set_value('satuan'); ?>/>
                            </div>
                            <small class="text-danger">
                              <?php echo form_error('satuan') ?>
                            </small>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="pagu">pagu</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">Rp</span>
                              <input type="number" name="pagu" id="Pagu" class="form-control" value="<?php echo $usulan->pagu ?>" placeholder="10.000.000" <?= set_value('pagu'); ?>/>
                            </div>
                            <small class="text-danger">
                              <?php echo form_error('pagu') ?>
                            </small>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="realisasi">Realisasi</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">Rp</span>
                              <input type="number" name="realisasi" id="Realisasi" class="form-control" value="<?php echo $usulan->realisasi ?>"  placeholder="9.000.000" <?= set_value('realisasi'); ?>/>
                            </div>
                            <small class="text-danger">
                              <?php echo form_error('realisasi') ?>
                            </small>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="sisa">Sisa</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">Rp</span>
                              <input type="number" name="sisa" id="Sisa" class="form-control" value="<?php echo $usulan->sisa ?>" placeholder="1.000.000"<?= set_value('sisa'); ?>/>
                            </div>
                            <small class="text-danger">
                              <?php echo form_error('sisa') ?>
                            </small>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <a href="<?php echo site_url('page/list') ?>" class="btn btn-secondary">Cancel</a>
                            <input type="submit" class="btn btn-primary" value="Simpan">
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