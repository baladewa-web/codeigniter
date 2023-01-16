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
                      <div class="card-header">
                        <h5 class="card-title text-primary">List Data</h5>
                      </div>
                      <div class="card-body">
                        <form action="post" class="mb-3 bg-light">
                          <div class="row">
                            <div class="col-md-2">
                              <select name="" id="" class="form-select">
                                <option selected disabled>Pilih Kategori</option>
                                <option value="usulan">Usulan</option>
                                <option value="pagu">Pagu</option>
                                <option value="tahun">Tahun</option>
                              </select>
                            </div>
                            <div class="col-md-2">
                              <input type="text" class="form-control" name="" placeholder="cari">
                            </div>
                            <div class="col-md-1">
                              <button type="submit" class="btn btn-outline-secondary"> <i class='bx bx-search-alt-2'></i> </button>
                            </div>
                          </div>
                        </form> 
                        <div class="table-responsive">
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
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>asdf</td>
                                <td>sdf</td>
                                <td>asdf</td>
                                <td>asdf</td>
                                <td>asdf</td>
                                <td>afd</td>
                                <td>asdf</td>
                                <td>asdf</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>asdf</td>
                                <td>sdf</td>
                                <td>asdf</td>
                                <td>asdf</td>
                                <td>asdf</td>
                                <td>afd</td>
                                <td>asdf</td>
                                <td>asdf</td>
                              </tr>
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