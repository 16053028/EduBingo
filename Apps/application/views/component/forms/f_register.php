  </head>
  <body>
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card mb-4 mx-4">

              <?php echo form_open('register/proses'); ?>

              <!-- <form method="post" action="<?php echo base_url('register/daftarkan'); ?>"> -->
                
                <div class="card-body p-4">
                  <h1>Create Login Account</h1>
                  <p class="text-medium-emphasis">Create an Username and Password for Login</p>
                  
                  <!-- error message -->

                  <?php 
                    if($this->session->flashdata('msg') !='')
                    {
                      echo '<div class="alert alert-danger" role="alert">';
                      echo $this->session->flashdata('msg');
                      echo '</div>';
                    }
                  ?>
                  
                  <div class="input-group mb-3"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="<?php echo base_url("vendors/coreui/vendors/@coreui/icons/svg/free.svg#cil-user"); ?>"></use>
                      </svg></span>
                    <input class="form-control" type="text" placeholder="Username" name="username" id="username">
                  </div>
                  <div class="input-group mb-3"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="<?php echo base_url("vendors/coreui/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"); ?>"></use>
                      </svg></span>
                    <input class="form-control" type="password" placeholder="Password" name="password" id="password">
                  </div>
                  <div class="input-group mb-4"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="<?php echo base_url("vendors/coreui/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"); ?>"></use>
                      </svg></span>
                    <input class="form-control" type="password" placeholder="Repeat password" name="rpass" id="rpass">
                  </div>
                  <button class="btn btn-block btn-info" type="submit" value="submit">Create</button>
                  <button class="btn btn-block btn-warning" type="reset" value="reset">Reset</button>
                  <button class="btn btn-block btn-danger" type="button"  onclick="window.history.back();">Back</button>
                </div>
              
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>