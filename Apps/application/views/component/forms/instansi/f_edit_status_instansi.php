<div class="body flex-grow-1 px-3">
  <div class="container">
    <!-- content here -->
    <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card mb-4 mx-4">

              <?php echo form_open('instansi_pendidikan/edit_status/' . $status_user->ID_STATUS_USER); ?>
                
                <div class="card-body p-4">
                  <h1>Edit Status Instansi</h1>
                  <p class="text-medium-emphasis">Status instansi digunakan untuk membedakan instansi seperti : SD/MI/SMP/MTS/SMA/SMK/MA baik negeri maupun swasta</p>
                  
                  <div class="input-group mb-3"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="<?php echo base_url("vendors/coreui/vendors/@coreui/icons/svg/free.svg#cil-book"); ?>"></use>
                      </svg></span>
                    <input class="form-control" type="text" placeholder="Status Pengguna" name="status_instansi" id="status_instansi" value="<?php echo $status_user->TEKS_STATUS_INSTANSI; ?>">
                  </div>

                  <div class="input-group mb-3"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="<?php echo base_url("vendors/coreui/vendors/@coreui/icons/svg/free.svg#cil-note-add"); ?>"></use>
                      </svg></span>
                    <input class="form-control" type="text" placeholder="Keterangan Status pengguna ..." name="keterangan_status" id="keterangan_status" value="<?php echo $status_user->KETERANGAN_STATUS_INSTANSI; ?>">
                  </div>

                  <button class="btn btn-block btn-info" type="submit" value="submit">Update</button>
                  <button class="btn btn-block btn-danger" type="button"  onclick="window.history.back();">Cancel</button>
                </div>
              
              </form>
            </div>
          </div>
        </div>

  </div>
</div>