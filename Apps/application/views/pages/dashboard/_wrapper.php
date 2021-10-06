    <?php 
    $this->load->view('component/_base');
    $this->load->view('component/_load_icons');
     ?>
     <!-- Vendors styles-->
    <link rel="stylesheet" href="<?php echo base_url("vendors/coreui/vendors/simplebar/css/simplebar.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("vendors/coreui/css/vendors/simplebar.cs"); ?>s">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url("vendors/coreui/css/style.css"); ?>" rel="stylesheet">
    <!-- Load Custom CSS -->
    <link href="<?php echo base_url("vendors/coreui/vendors/@coreui/chartjs/css/coreui-chartjs.css"); ?>" rel="stylesheet">

  </head>
  <body>

    <!-- Sidebar -->
    <?php $this->load->view('component/_sidebar',); ?>
    <!-- Content Body Wrapper-->
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <!-- Header -->
    <?php $this->load->view('component/dashboard/_header'); ?>  
    <!-- Content -->
    <?php $this->load->view($contentPages); ?>
    <!-- Footer -->
    <?php $this->load->view('component/dashboard/_footer'); ?>  

    </div>

    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo base_url("vendors/coreui/vendors/@coreui/coreui/js/coreui.bundle.min.js"); ?>"></script>
    <script src="<?php echo base_url("vendors/coreui/vendors/simplebar/js/simplebar.min.js"); ?>"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="<?php echo base_url("vendors/coreui/vendors/chart.js/js/chart.min.js"); ?>"></script>
    <script src="<?php echo base_url("vendors/coreui/vendors/@coreui/chartjs/js/coreui-chartjs.js"); ?>"></script>
    <script src="<?php echo base_url("vendors/coreui/vendors/@coreui/utils/js/coreui-utils.js"); ?>"></script>
    <script src="<?php echo base_url("vendors/coreui/js/main.js"); ?>"></script>
    <script>
    </script>

<?php $this->load->view('component/_end'); ?>