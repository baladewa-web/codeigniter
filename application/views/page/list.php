<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data</title>
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
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                      <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title text-primary"><i class='bx bx-sm bx-file text-primary'></i> List Data</h5>
                        <a href="<?php echo site_url('page/create') ?>" class="btn btn-primary"><i class='bx bx-list-plus bx-sm'></i> Tambah Data</a>
                      </div>
                      <div class="card-body">
                      <?php if ($this->session->flashdata('create_alert')): ?>
                          <div class="alert alert-info alert-dismissible" role="alert">
                              <i class="fas fa-check"></i>
                              <?php echo $this->session->flashdata('create_alert'); ?>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      <?php endif;  ?>
                      <?php if ($this->session->flashdata('edit_alert')): ?>
                          <div class="alert alert-success alert-dismissible" role="alert">
                              <i class="fas fa-check"></i>
                              <?php echo $this->session->flashdata('edit_alert'); ?>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      <?php endif;  ?>

                      <?php echo form_open('page/search') ?>
                          <div class="d-flex">
                            <div class="row">
                              <div class="col-md-10 mb-3">
                                <input type="text" class="form-control" name="keyword" placeholder="cari tahun / usulan">
                              </div>
                              <div class="col-md-2 mb-3">
                                <button type="submit" class="btn btn-outline-secondary"> <i class='bx bx-search-alt-2'></i> </button>
                              </div>
                            </div>
                            
                          </div>
                        <?php echo form_close() ?>

                        <div class="table-responsive mt-3">
                          <table class="table table-striped table-hover" id="table-list">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Usulan</th>
                                <th>RT</th>
                                <th>RW</th>
                                <th>Jumlah</th>
                                <th>Satuan</th>
                                <th>Pagu</th>
                                <th>Realisasi</th>
                                <th class="text-center">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $i=1;
                                foreach($usulan as $item) : 
                              ?>
                              <tr>
                                <td><?php echo $i++ ?></td>
                                <td><?php echo $item->nama ?></td>
                                <td><?php echo $item->rt ?></td>
                                <td><?php echo $item->rw ?></td>
                                <td><?php echo $item->jumlah ?></td>
                                <td><?php echo $item->satuan ?></td>
                                <td><?php echo $item->pagu ?></td>
                                <td><?php echo $item->realisasi ?></td>
                                <td class="text-center">
                                  <a href="#" class="btn btn-outline-light text-info p-1">
                                    <i class='bx bx-sm bx-detail'></i>
                                  </a>
                                  <a href="<?php echo site_url('page/edit/'.$item->id); ?>" class="btn btn-outline-light text-success p-1"><i class='bx bx-sm bx-edit'></i></a>
                                  <a href="<?php echo site_url('page/delete/'.$item->id); ?>" class="btn btn-outline-light text-danger p-1" onclick="return confirm('Yakin akan menghapus data?')"><i class='bx bx-sm bx-trash'></i></a>
                                </td>
                              </tr>
                              <?php endforeach; ?>
                            </tbody>
                          </table>
                        </div>
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