<?php 
$this->load->view('component/_base');
$this->load->view('component/_load_icons');
 ?>

    <!-- Vendors styles-->
    <link rel="stylesheet" href="<?php echo base_url("vendors/coreui/vendors/simplebar/css/simplebar.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("vendors/coreui/css/vendors/simplebar.css"); ?>">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url("vendors/coreui/css/style.css"); ?>" rel="stylesheet">

  </head>
  <body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <?php $this->load->view('component/forms/auth/f_login'); ?>
      </div>
    </div>
    <!-- Plugins and scripts required by this view-->
    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo base_url("vendors/coreui/vendors/@coreui/coreui/js/coreui.bundle.min.js"); ?>"></script>
    <script src="<?php echo base_url("vendors/coreui/vendors/simplebar/js/simplebar.min.js"); ?>"></script>
    
<?php $this->load->view('component/_end'); ?>