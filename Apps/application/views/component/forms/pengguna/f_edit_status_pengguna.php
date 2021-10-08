<div class="body flex-grow-1 px-3">
  <div class="container">
    <!-- content here -->
    <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card mb-4 mx-4">

              <?php echo form_open('pengguna/edit_status/' . $status_user->ID_STATUS_USER); ?>
                
                <div class="card-body p-4">
                  <h1>Edit status Pengguna</h1>
                  <p class="text-medium-emphasis">Status pengguna digunakan untuk membedakan Akses Pengguna</p>
                  
                  <div class="input-group mb-3"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="<?php echo base_url("vendors/coreui/vendors/@coreui/icons/svg/free.svg#cil-book"); ?>"></use>
                      </svg></span>
                    <input class="form-control" type="text" placeholder="Status Pengguna" name="status_pengguna" id="status_pengguna" value="<?php echo $status_user->TEKS_STATUS_USER; ?>">
                  </div>

                  <div class="input-group mb-3"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="<?php echo base_url("vendors/coreui/vendors/@coreui/icons/svg/free.svg#cil-note-add"); ?>"></use>
                      </svg></span>
                    <input class="form-control" type="text" placeholder="Keterangan Status pengguna ..." name="keterangan_status" id="keterangan_status" value="<?php echo $status_user->KETERANGAN_STATUS_USER; ?>">
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