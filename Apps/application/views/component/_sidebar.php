<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
  <div class="sidebar-brand d-none d-md-flex">
    <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
      <use xlink:href="<?php echo base_url("vendors/coreui/assets/brand/coreui.svg#full"); ?>"></use>
    </svg>
    <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
      <use xlink:href="<?php echo base_url("vendors/coreui/assets/brand/coreui.svg#signet"); ?>"></use>
    </svg>
  </div>
  <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
    <li class="nav-item"><a class="nav-link" href="<?php echo base_url("dashboard") ?>">
        <svg class="nav-icon">
          <use xlink:href="<?php echo base_url("vendors/coreui/vendors/@coreui/icons/svg/free.svg#cil-speedometer"); ?>"></use>
        </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
    <li class="nav-title">Administrator</li>

    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url("pengguna"); ?>">
        <svg class="nav-icon">
          <use xlink:href="<?php echo base_url("vendors/coreui/"); ?>vendors/@coreui/icons/svg/free.svg#cil-people"></use>
        </svg> Pengguna</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url("instansi_pendidikan"); ?>">
        <svg class="nav-icon">
          <use xlink:href="<?php echo base_url("vendors/coreui/"); ?>vendors/@coreui/icons/svg/free.svg#cil-institution"></use>
        </svg>Instansi</a>
    </li>

    <li class="nav-divider"></li>
    <li class="nav-title">Settings</li>
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
        <svg class="nav-icon">
          <use xlink:href="<?php echo base_url("vendors/coreui/"); ?>vendors/@coreui/icons/svg/free.svg#cil-star"></use>
        </svg> Status</a>
      <ul class="nav-group-items">
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url("instansi_pendidikan/status_instansi"); ?>">Instansi</a> </li>
        <li class="nav-item"><a class="nav-link" href="<?php echo base_url("pengguna/status_pengguna"); ?>">Pengguna</a> </li>
        
      </ul>
    </li>

    <li class="nav-item mt-auto"><a class="nav-link" href="<?php echo base_url("auth/logout") ?>">
        <svg class="nav-icon">
          <use xlink:href="<?php echo base_url("vendors/coreui/"); ?>vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
        </svg> Logout</a></li>
    
  </ul>
  <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>