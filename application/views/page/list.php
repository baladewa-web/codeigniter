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
                      <div class="card-header d-flex justify-content-between p-3">
                        <h5 class="card-title text-primary"><i class='bx bx-sm bx-file text-primary'></i> List Data</h5>
                        <a href="<?php echo site_url('page/create') ?>" class="btn btn-primary"><i class='bx bx-list-plus bx-sm'></i> Tambah Data</a>
                      </div>
                      <div class="card-body">
                      <!-- Alert create data -->
                      <?php if ($this->session->flashdata('create_alert')): ?>
                          <div class="alert alert-info alert-dismissible" role="alert">
                              <i class="fas fa-check"></i>
                              <?php echo $this->session->flashdata('create_alert'); ?>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      <?php endif;  ?>
                      
                      <!-- Alert edit data -->
                      <?php if ($this->session->flashdata('edit_alert')): ?>
                          <div class="alert alert-success alert-dismissible" role="alert">
                              <i class="fas fa-check"></i>
                              <?php echo $this->session->flashdata('edit_alert'); ?>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      <?php endif;  ?>

                      <!-- Alert delete data -->
                      <?php if ($this->session->flashdata('delete_alert')): ?>
                          <div class="alert alert-danger alert-dismissible" role="alert">
                              <i class="fas fa-check"></i>
                              <?php echo $this->session->flashdata('delete_alert'); ?>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      <?php endif;  ?>

                      <form action="<?= base_url('page/list'); ?>" method="post">
                          <div class="d-flex">
                            <div class="row">
                              <div class="col-md-10">
                                <input type="text" class="form-control" name="keyword" placeholder="cari tahun / usulan">
                              </div>
                              <div class="col-md-2">
                                <input type="submit" class="btn btn-outline-secondary" name="submit" value="Cari"> 
                              </div>
                            </div>
                          </div>
                        </form>
                        <div class="table-responsive mt-3 mb-3">
                          <table class="table table-striped table-hover" id="table-list">
                            <thead>
                              <tr class="table-dark text-light">
                                <th class="text-white">No</th>
                                <th class="text-white">Usulan</th>
                                <th class="text-center text-white">RT</th>
                                <th class="text-center text-white">RW</th>
                                <th class="text-center text-white">Jumlah</th>
                                <th class="text-white">Satuan</th>
                                <th class="text-white">Pagu</th>
                                <th class="text-white">Realisasi</th>
                                <th class="text-center text-white">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php 
                                foreach($usulan as $item) : 
                              ?>
                              <tr>
                                <td><?php echo ++$start; ?></td>
                                <td><?php echo $item->nama ?></td>
                                <td class="text-center"><?php echo $item->rt ?></td>
                                <td class="text-center"><?php echo $item->rw ?></td>
                                <td class="text-center"><?php echo $item->jumlah ?></td>
                                <td><?php echo $item->satuan ?></td>
                                <td><?php echo "Rp. ". number_format($item->pagu, 0,",","."); ?></td>
                                <td><?php echo "Rp. ". number_format($item->realisasi, 0,",","."); ?></td>
                                <td class="text-center">
                                <div class="dropdown">
                                  <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item text-info" href="<?php echo site_url('page/view/'.$item->id); ?>"
                                      > <i class='bx bx-detail'></i> Lihat</a
                                    >
                                    <a class="dropdown-item text-success" href="<?php echo site_url('page/edit/'.$item->id); ?>"
                                      ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <a class="dropdown-item text-danger" href="<?php echo site_url('page/delete/'.$item->id); ?> " onclick="return confirm('Yakin akan menghapus data?')"
                                      ><i class="bx bx-trash me-1"></i> Hapus</a
                                    >
                                  </div>
                                </div>
                                </td>
                              </tr>
                              <?php endforeach; ?>
                            </tbody>
                          </table>
                        </div>
                        <span>Results : <?= $total_rows; ?></span>
                          <?php echo $this->pagination->create_links(); ?>
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