<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="card shadow mb-4">
          <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-between">
              <h1 class="tbtitle h4 mb-0 text-gray-800">Data Admin</h1>
            </div>
          </div>
        <div class="card-body">
          <!-- Button trigger modal -->
          <div id="example1_wrapper" class="dt-container dt-bootstrap4 dt-empty-footer mb-3">
            <div class="col-md-12">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Data Admin
              </button>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-plus"></i> Form Tambah Data Admin Aset</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="post" action="<?= base_url('app/act_addAdmin') ?>">

                   <div class="form-group">
                    <label for="exampleInputEmail1">Kode Admin</label>
                    <input type="text" name="kode" class="form-control" required value="<?= $kode ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Jabatan</label>
                    <select class="form-control" name="jabatan">
                      <option>-- Pilih Jabatan --</option>
                      <option>Administrasi</option>
                      <option>Dosen</option>
                      <option>Rektor</option>
                    </select>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" required="">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="Password" name="pass" class="form-control" required>
                  </div>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="box-body">
          <div class="table-responsive">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Jabatan</th>
                  <th>Username</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1 ?>
                <?php foreach($admin as $data){ ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td>
                      <?= $data['kode'] ?>
                    </td>
                    <td><?= $data['jabatan'] ?></td>
                    <td><?= $data['username'] ?></td>
                    <td>
                      <button class="btn btn-success btn-sm col-md-12 mb-1" data-toggle="modal" data-target="#exampleModaledit<?= $data['id'] ?>"><i class="fa-solid fa-pen-to-square"></i> Edit</button>
                      <button class="btn btn-danger btn-sm col-md-12" data-toggle="modal" data-target="#exampleModalhapus<?= $data['id'] ?>"><i class="fa-solid fa-trash"></i> Hapus</button>
                    </td>
                  </tr>


                  <!-- Modal Edit -->
                  <div class="modal fade" id="exampleModaledit<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Data Admin Aset</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                         <form method="post" action="<?= base_url('app/act_editAdmin') ?>">

                          <input type="hidden" name="id" value="<?= $data['id']  ?>">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Kode Admin</label>
                            <input type="text" name="kode" class="form-control" required value="<?= $data['kode'] ?>">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Jabatan</label>
                            <select class="form-control" name="jabatan">
                              <option><?= $data['jabatan'] ?></option>
                              <option>-- Pilih Jabatan --</option>
                              <option>Administrasi</option>
                              <option>Dosen</option>
                              <option>Rektor</option>
                            </select>
                          </div>


                          <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" name="username" class="form-control" required="" value="<?= $data['username'] ?>">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Password Baru</label>
                            <input type="Password" name="pass" class="form-control" required value="">
                          </div>


                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <!-- End Modal Edit -->

                <!-- Modal Hapus -->
                <div class="modal fade" id="exampleModalhapus<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Admin Aset</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <h4>Apakah anda ingin menghapus data ini ? </h4>
                        <form method="post" action="<?= base_url('app/act_hapusAdmin') ?>">
                          <input type="hidden" name="id" value="<?= $data['id'] ?>">

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Delete</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- End Modal Edit -->
              <?php } ?>
            </tbody>
         </table>
       </div>
     </div>
   </tbody>
 </div>
</div>
</div>
</section>
<!-- /.content -->
</div>