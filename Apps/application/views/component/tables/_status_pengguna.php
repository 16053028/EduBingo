<div class="body flex-grow-1 px-3">
  <div class="container">
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
  <h1>Daftar Status Pengguna</h1>
  <p>Dibawah ini merupakan tabel status pengguna yang diperlukan untuk mengatur akses aplikasi</p>
  <table class="table table-secondary table-hover">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">Status Pengguna</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 0; ?>
      <?php foreach ($_status as $data): ?>
      <?php $no++; ?>
      <tr>
        <th scope="row"><?php echo $no; ?></th>
        <td><?php echo $data['TEKS_STATUS_USER']; ?></td>
        <td><?php echo $data['KETRANGAN__STATUS_USER']; ?></td>
        <td>
          <a class="btn btn-warning" href="#" role="button">
            <svg class="icon icon-lg">
              <use xlink:href="<?php echo base_url("vendors/coreui/"); ?>vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
            </svg> Edit</a>
          <a class="btn btn-danger" href="<?php echo base_url('debug/hapus_data/' . 'ID_STATUS_USER/' . $data['ID_STATUS_USER'] . '/'. 'tbl_status_user'); ?>" role="button">
          <svg class="icon icon-lg">
              <use xlink:href="<?php echo base_url("vendors/coreui/"); ?>vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
            </svg> Delete</a>
        </td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>  
  </div>
</div>