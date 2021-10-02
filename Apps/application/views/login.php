<?php $this->load->view('component/head'); ?>
    

    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url("vendors/coreui/assets/favicon/apple-icon-114x114.png") ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url("vendors/coreui/assets/favicon/apple-icon-120x120.png") ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url("vendors/coreui/assets/favicon/apple-icon-144x144.png") ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url("vendors/coreui/assets/favicon/apple-icon-152x152.png") ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url("vendors/coreui/assets/favicon/apple-icon-180x180.png") ?>">

    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url("vendors/coreui/assets/favicon/android-icon-192x192.png") ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url("vendors/coreui/assets/favicon/favicon-32x32.png") ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url("vendors/coreui/assets/favicon/favicon-96x96.png") ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url("vendors/coreui/assets/favicon/favicon-16x16.png") ?>">

    <link rel="manifest" href="<?php echo base_url("vendors/coreui/assets/favicon/manifest.json") ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url("vendors/coreui/assets/favicon/ms-icon-144x144.png") ?>">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendors styles-->
    <link rel="stylesheet" href="<?php echo base_url("vendors/coreui/vendors/simplebar/css/simplebar.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("vendors/coreui/css/vendors/simplebar.css") ?>">
    <!-- Main styles for this application-->
    <link href="<?php echo base_url("vendors/coreui/css/style.css") ?>" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="<?php echo base_url("vendors/coreui/css/examples.css") ?>" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card-group d-block d-md-flex row">
              <div class="card col-md-7 p-4 mb-0">
                <div class="card-body">
                  <h1>Login</h1>
                  <p class="text-medium-emphasis">Sign In to your account</p>
                  <div class="input-group mb-3"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="<?php echo base_url("vendors/coreui/vendors/@coreui/icons/svg/free.svg#cil-user"); ?>"></use>
                      </svg></span>
                    <input class="form-control" type="text" placeholder="Username">
                  </div>
                  <div class="input-group mb-4"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="<?php echo base_url("vendors/coreui/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"); ?>"></use>
                      </svg></span>
                    <input class="form-control" type="password" placeholder="Password">
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <button class="btn btn-primary px-4" type="button">Login</button>
                    </div>
                    <div class="col-6 text-end">
                      <button class="btn btn-link px-0" type="button">Forgot password?</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card col-md-5 text-white bg-primary py-5">
                <div class="card-body text-center">
                  <div>
                    <h2>Sign up</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <button class="btn btn-lg btn-outline-light mt-3" type="button">Register Now!</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo base_url("vendors/coreui/vendors/@coreui/coreui/js/coreui.bundle.min.js"); ?>"></script>
    <script src="<?php echo base_url("vendors/coreui/vendors/simplebar/js/simplebar.min.js"); ?>"></script>
    
    <!-- We use those scripts to show code examples, you should remove them in your application.-->

<?php $this->load->view('component/foot'); ?>