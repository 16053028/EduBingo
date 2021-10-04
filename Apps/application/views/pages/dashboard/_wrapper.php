  </head>
  <body>
    <?php $this->load->view('component/_sidebar',); ?>

    <div class="wrapper d-flex flex-column min-vh-100 bg-light">

      <?php $this->load->view('component/dashboard/_header'); ?>
      
      <?php $this->load->view($contentPages); ?>

      <?php $this->load->view('component/dashboard/_footer'); ?>
      
    </div>

    <!-- Plugins and scripts required by this view-->
    <script src="vendors/chart.js/js/chart.min.js"></script>
    <script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="js/main.js"></script>
    <script>
    </script>