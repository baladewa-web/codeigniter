<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?php echo base_url(); ?>assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<? echo base_url(); ?>assets/js/config.js"></script>
  </head>

  <body>
  <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-8">
                <div class="card shadow border-0">
                    <div class="card-header border-0 text-center bg-secondary text-light">
                        <h4 class="fw-semibold text-dark">Register</h4>
                        <span class="fw-lighter text-white">silahkan isi form</span>
                    </div>
                    <div class="card-body">
                        <form class="fw-semibold p-3">
                            <div class="row justify-content-center mb-3">
                                <label for="" class="col-md-2 mb-2 text-left">Nama</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row justify-content-center mb-3">
                                <label for="" class="col-md-2 mb-2 text-left">Username</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row justify-content-center mb-3">
                                <label for="" class="col-md-2 mb-2">Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-8 text-end">
                                    <input type="button" class="btn btn-primary rounded-pill" value="Register">
                                </div>
                            </div>
                        </form>
                        <p class="text-center mt-3 ">Sudah punya akun? <a href="<?php echo site_url('login') ?>" class="text-decoration-none">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?php echo base_url() ?>assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/libs/popper/popper.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/js/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?php echo base_url() ?>assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="<?php echo base_url() ?>assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="<?php echo base_url() ?>assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>