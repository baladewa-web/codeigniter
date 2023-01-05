<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
            <div class="col-md-10 shadow bg-white">
                <div class="row p-3">
                    <div class="col-lg-7 ">
                        <img src="<?php echo site_url('assets/img/backgrounds/img-1.png')?>" alt="" width="550">
                    </div>
                    <div class="col-lg-5 justify-content-center align-items-center mt-4">
                        
                        <div class="card border-0 p-3 mb-3">
                            <?php 
                                if($this->session->flashdata('error_login') !='')
                                {
                                    echo '<div class="alert alert-danger alert-dismissible " role="alert">';
                                    echo $this->session->flashdata('error_login');
                                    echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                                    echo '</div>';
                                }
                            ?>
                            <div class="text-center">
                                <h4 class="fw-semibold mb-0">Welcome</h4>
                                <span class="fw-lighter text-secondary">please Login</span>
                            </div>
                            <form action="login/login" method="post">
                                <div class="form-floating border-bottom border-primary">
                                    <input type="text" name="username" class="form-control border-0 shadow-none" id="floatingUsername" placeholder="Username">
                                    <label for="floatingUsername">Username</label>
                                </div>
                                <div class="form-floating mb-3 border-bottom border-primary">
                                    <input type="password" name="password" class="form-control border-0 shadow-none" id="floatingPassword" placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="d-grid gap-2 mb-3">
                                    <input type="submit" class="btn btn-primary fw-semibold rounded-pill shadow" value="Login">
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                Registrasi akun? <a href="<?php echo site_url('login/register') ?>" class="text-decoration-none">Register</a>
                            </div>
                        </div>
                    </div>
                    <p class="text-center text-muted">&copy; 2022</p>
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