<div class="body flex-grow-1 px-3">
  <div class="container">
    <!-- content here -->

    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card mb-4 mx-4">

          <?php echo form_open('instansi_pendidikan/edit_instansi/' . $edit_instansi->ID_INSTANSI_PENDIDIKAN); ?>
            
            <div class="card-body p-4">
              <h1>Rubah Data Instansi Pendidikan</h1>
              <p class="text-medium-emphasis">Instansi Pendidikan digunakan untuk mengidentifikasi asal pengguna</p>
              
              <div class="input-group mb-3"><span class="input-group-text">
                  <svg class="icon">
                    <use xlink:href="<?php echo base_url("vendors/coreui/vendors/@coreui/icons/svg/free.svg#cil-book"); ?>"></use>
                  </svg></span>
                <input class="form-control" type="text" placeholder="Nama instansi Pendidikan" name="nama_instansi" id="nama_instansi" value="<?php echo $edit_instansi->NAMA_INSTANSI_PENDIDIKAN; ?>">
              </div>

              <div class="input-group mb-3"><span class="input-group-text">
                  <svg class="icon">
                    <use xlink:href="<?php echo base_url("vendors/coreui/vendors/@coreui/icons/svg/free.svg#cil-map"); ?>"></use>
                  </svg></span>
                <textarea class="form-control" type="text" placeholder="Alamat Instansi Pendidikan" name="alamat_instansi" id="alamat_instansi"><?php echo $edit_instansi->ALAMAT_INSTANSI_PENDIDIKAN; ?></textarea>
              </div>

              <div class="input-group mb-3">
                <select class="form-select" name="status_instansi" id="status_instansi" aria-label="Pilih status instansi">
                  <option value="" disabled selected>Pilih status instansi</option>
                  <?php foreach ($status_instansi as $data): ?>
                    <option value="<?php echo $data['ID_STATUS_INSTANSI']; ?>"
                      <?php if ($edit_instansi->ID_STATUS_INSTANSI == $data['ID_STATUS_INSTANSI']): ?>
                      <?php echo "selected" ?>
                    <?php endif ?>><?php echo $data['TEKS_STATUS_INSTANSI']; ?></option>
                  <?php endforeach ?>
                </select>
              </div>

              <button class="btn btn-block btn-info" type="submit" value="submit">Simpan</button>
              <button class="btn btn-block btn-warning" type="reset" value="reset">Reset</button>
              <button class="btn btn-block btn-danger" type="button"  onclick="window.history.back();">Back</button>
            </div>    

          </form>

        </div>
    </div>
    
  </div>
</div>