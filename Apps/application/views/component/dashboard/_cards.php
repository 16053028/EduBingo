<div class="card-group">
  <div class="card">
    <div class="card-body">
      <div class="text-medium-emphasis text-end mb-4">
        <svg class="icon icon-xxl">
          <use xlink:href="<?php echo base_url("vendors/coreui/"); ?>vendors/@coreui/icons/svg/free.svg#cil-people"></use>
        </svg>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="fs-4 fw-semibold"><?php echo $total_user; ?></div><small class="text-medium-emphasis text-uppercase fw-semibold">Total User</small>
        </div>
        <div class="col-md-4">
          <div class="fs-4 fw-semibold"><?php echo $total_user_online; ?></div><small class="text-medium-emphasis text-uppercase fw-semibold">Total User online</small>
        </div>
      </div>
      
      <div class="progress progress-thin mt-3 mb-0">
        <div class="progress-bar bg-success" role="progressbar" style="width: <?php 
        echo $presentase_online; ?>%" aria-valuenow="<?php echo $total_user; ?>" aria-valuemin="0" aria-valuemax="<?php echo $total_user; ?>"></div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <div class="text-medium-emphasis text-end mb-4">
        <svg class="icon icon-xxl">
          <use xlink:href="<?php echo base_url("vendors/coreui/"); ?>vendors/@coreui/icons/svg/free.svg#cil-institution"></use>
        </svg>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="fs-4 fw-semibold"><?php echo $total_instansi; ?></div><small class="text-medium-emphasis text-uppercase fw-semibold">Total Instansi</small>
        </div>
      </div>
      
      <div class="progress progress-thin mt-3 mb-0">
        <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $total_instansi/$total_instansi*100; ?>%" aria-valuenow="<?php echo $total_instansi; ?>" aria-valuemin="0" aria-valuemax="<?php echo $total_instansi; ?>"></div>
      </div>
    </div>
  </div>
</div>