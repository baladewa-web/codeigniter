<!-- LogOut Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <div class="modal-body text-center">
          <h5>Yakin akan keluar?</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
            Batal
          </button>
          <a href="<?php echo base_url('login/logout') ?>" class="btn btn-outline-danger">Log Out</a>
        </div>
      </div>
    </div>
</div>

<!-- build:js assets/vendor/js/core.js -->
<!-- <script defer src="<?php //echo base_url() ?>assets/vendor/libs/jquery/jquery.js"></script> -->
<script src="<?php echo base_url() ?>assets/vendor/libs/popper/popper.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/js/bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/js/menu.js"></script>

<!-- DataTables -->
<script defer src="<?php echo base_url()?>assets/datatables/js/jquery-3.5.1.js"></script>
<script defer src="<?php echo base_url()?>assets/datatables/js/jquery.dataTables.min.js"></script>
<script defer src="<?php echo base_url()?>assets/datatables/js/dataTables.bootstrap5.min.js"></script>
<script defer src="<?php echo base_url()?>assets/datatables/script.js"></script>

<!-- Vendors JS -->
<script src="<?php echo base_url() ?>assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="<?php echo base_url() ?>assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?php echo base_url() ?>assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>