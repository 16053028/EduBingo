<div class="body flex-grow-1 px-3">
  <div class="container">

  <?php 
    if ($this->session->flashdata('success') !='') {
        echo '<div class="alert alert-success" role="alert">';
        echo $this->session->flashdata('success');
        echo '</div>';
      }
  ?>
  <h1>Daftar Pengguna</h1>
  <p>Dibawah ini merupakan tabel Pengguna yang terdaftar pada aplikasi</p>
  <table class="table table-secondary table-hover">
    <thead>
      <tr>
        <a class="btn btn-info" style="float: right;" href="<?php echo base_url('instansi_pendidikan/form_add_status'); ?>" role="button">
        <svg class="icon icon-lg">
            <use xlink:href="<?php echo base_url("vendors/coreui/"); ?>vendors/@coreui/icons/svg/free.svg#cil-plus"></use>
          </svg> Tambah Pengguna</a>
      </tr>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">Nama Pengguna</th>s
        <th scope="col">Status Pengguna</th>
        <th scope="col">Instansi</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 0; ?>
      <?php foreach ($detail_pengguna as $data): ?>
      <?php $no++; ?>
      <tr>
        <th scope="row"><?php echo $no; ?></th>
        <td><?php echo $data['NAMA_USER']; ?></td>
        <td><?php echo $data['TEKS_STATUS_USER']; ?></td>
        <td><?php echo $data['NAMA_INSTANSI_PENDIDIKAN']; ?></td>
        <td>
          <a class="btn btn-warning" href="#" role="button">
            <svg class="icon icon-lg">
              <use xlink:href="<?php echo base_url("vendors/coreui/"); ?>vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
            </svg> Edit</a>
          <a class="btn btn-danger" href="<?php echo base_url('debug/hapus_pengguna/' . $data['ID_USER']); ?>" role="button">
          <svg class="icon icon-lg">
              <use xlink:href="<?php echo base_url("vendors/coreui/"); ?>vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
            </svg> Delete</a>
        </td>
      </tr>
      <?php endforeach ?>
    </tbody>
    <tfoot style="">  
      <tr style="">
        <td style="border: none;">
          <?php if (isset($pagination)): ?>
            <?php echo $pagination; ?>
          <?php endif ?>
        </td>
      </tr>
    </tfoot>
  </table>

  </div>
</div>