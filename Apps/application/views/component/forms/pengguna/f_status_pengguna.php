<div class="body flex-grow-1 px-3">
  <div class="container">
    <!-- content here -->
    <div class="row justify-content-center">
          <div class="col-md-6">
            <div class="card mb-4 mx-4">

              <?php echo form_open('pengguna/add_status'); ?>
                
                <div class="card-body p-4">
                  <h1>Buat status Pengguna</h1>
                  <p class="text-medium-emphasis">Status pengguna digunakan untuk membedakan Akses Pengguna</p>
                  
                  <div class="input-group mb-3"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="<?php echo base_url("vendors/coreui/vendors/@coreui/icons/svg/free.svg#cil-book"); ?>"></use>
                      </svg></span>
                    <input class="form-control" type="text" placeholder="Status Pengguna" name="status_pengguna" id="status_pengguna">
                  </div>

                  <div class="input-group mb-3"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="<?php echo base_url("vendors/coreui/vendors/@coreui/icons/svg/free.svg#cil-note-add"); ?>"></use>
                      </svg></span>
                    <input class="form-control" type="text" placeholder="Keterangan Status pengguna ..." name="keterangan_status" id="keterangan_status">
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