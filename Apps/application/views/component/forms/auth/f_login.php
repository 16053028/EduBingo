<div class="row justify-content-center">
  <div class="col-lg-8">
    <div class="card-group d-block d-md-flex row">
      <div class="card col-md-7 p-4 mb-0">
        <?php echo form_open('auth/actLogin'); ?>
        <div class="card-body">
          <h1>Login</h1>
          <?php 
            if ($this->session->flashdata('success_register') !='') {
                echo '<div class="alert alert-success" role="alert">';
                echo $this->session->flashdata('success_register');
                echo '</div>';
              } elseif ($this->session->flashdata('msg') !='') {
                echo '<div class="alert alert-danger" role="alert">';
                echo $this->session->flashdata('msg');
                echo '</div>';
              }
          ?>
          <p class="text-medium-emphasis">Sign In to your account</p>
          <div class="input-group mb-3"><span class="input-group-text">
              <svg class="icon">
                <use xlink:href="<?php echo base_url("vendors/coreui/vendors/@coreui/icons/svg/free.svg#cil-user"); ?>"></use>
              </svg></span>
            <input class="form-control" type="text" placeholder="Username" name="username">
          </div>
          <div class="input-group mb-4"><span class="input-group-text">
              <svg class="icon">
                <use xlink:href="<?php echo base_url("vendors/coreui/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"); ?>"></use>
              </svg></span>
            <input class="form-control" type="password" placeholder="Password" name="password">
          </div>
          <div class="row">
            <div class="col-6">
              <button class="btn btn-primary px-4" type="submit">Login</button>
            </div>
            <div class="col-6 text-end">
              <button class="btn btn-link px-0" type="button">Forgot password?</button>
            </div>
          </div>
        </div>
        </form>
      </div>

      <!-- Register page is not needed -->

      <!-- <div class="card col-md-5 text-white bg-primary py-5">
        <div class="card-body text-center">
          <div>
            <h2>Sign up</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            
            <button class="btn btn-lg btn-outline-light mt-3" type="button" 
            onclick="window.location.href='<?php echo base_url('register'); ?>'">
              Register Now!
            </button>
            
          </div>
        </div>
      </div> -->

    </div>
    Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
  </div>
</div>