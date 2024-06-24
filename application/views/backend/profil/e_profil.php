<!-- Begin Page Content -->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-9">
      <?= form_open_multipart('user/ubahprofil'); ?>
      <div class="form-group row">
        <label for="username" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="username" name="username" value="<?= $user->username; ?>">
          <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-2">Gambar</div>
        <div class="col-sm-10">
          <div class="row">
            <div class="col-sm-3">
              <img src="<?= base_url('img/profile/') . $user->image; ?>" class="img-thumbnail" alt="Profile Image">
            </div>
            <div class="col-sm-9">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image">
                <label class="custom-file-label" for="image">Pilih file</label>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group row justify-content-end">
        <div class="col-sm-10">
          <div class="row">
            <div class="col-sm-2">
              <button type="submit" class="btn btn-primary btn-block">Ubah</button>
            </div>
            <div class="col-sm-2">
              <button type="button" class="btn btn-danger btn-block" onclick="window.history.go(-1)">Kembali</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- /.container-fluid -->