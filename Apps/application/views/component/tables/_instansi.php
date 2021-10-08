<div class="body flex-grow-1 px-3">
  <div class="container">
  <?php 
    if ($this->session->flashdata('success') !='') {
        echo '<div class="alert alert-success" role="alert">';
        echo $this->session->flashdata('success');
        echo '</div>';
      }
  ?>
  <h1>Daftar Instansi</h1>
  <p>Dibawah ini merupakan tabel instansi yang terdaftar pada aplikasi</p>
  <table class="table table-secondary table-hover">
    <thead>
      <tr>
        <a class="btn btn-info" style="float: right;" href="<?php echo base_url('instansi_pendidikan/form_add_status'); ?>" role="button">
        <svg class="icon icon-lg">
            <use xlink:href="<?php echo base_url("vendors/coreui/"); ?>vendors/@coreui/icons/svg/free.svg#cil-plus"></use>
          </svg> Tambah Instansi</a>
      </tr>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">Nama Instansi</th>
        <th scope="col">Alamat Instansi</th>
        <th scope="col">Status Instansi</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 0; ?>
      <?php foreach ($detail_instansi_pendidikan as $data): ?>
      <?php $no++; ?>
      <tr>
        <th scope="row"><?php echo $no; ?></th>
        <td><?php echo $data['NAMA_INSTANSI_PENDIDIKAN']; ?></td>
        <td><?php echo $data['ALAMAT_INSTANSI_PENDIDIKAN']; ?></td>
        <td><?php echo $data['TEKS_STATUS_INSTANSI']; ?></td>
        <td>
          <a class="btn btn-warning" href="#" role="button">
            <svg class="icon icon-lg">
              <use xlink:href="<?php echo base_url("vendors/coreui/"); ?>vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
            </svg> Edit</a>
          <a class="btn btn-danger" href="<?php echo base_url('instansi_pendidikan/hapus_instansi_pendidikan/' . 'ID_INSTANSI_PENDIDIKAN/' . $data['ID_INSTANSI_PENDIDIKAN'] . '/'. 'tbl_instansi_pendidikan'); ?>" role="button">
          <svg class="icon icon-lg">
              <use xlink:href="<?php echo base_url("vendors/coreui/"); ?>vendors/@coreui/icons/svg/free.svg#cil-trash"></use>
            </svg> Delete</a>
        </td>
      </tr>
      <?php endforeach ?>
    </tbody>
    <tfoot>  
      <?php if (isset($pagination)): ?>
        <?php echo $pagination; ?>
      <?php endif ?>
    </tfoot>
  </table>
  </div>
</div>