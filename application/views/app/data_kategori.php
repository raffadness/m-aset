<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="card shadow mb-4">
          <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-between">
              <h1 class="tbtitle h4 mb-0 text-gray-800">Data Kategori</h1>
            </div>
          </div>
        <div class="card-body">
          <!-- Button trigger modal -->
          <div id="example1_wrapper" class="dt-container dt-bootstrap4 dt-empty-footer mb-3">
            <div class="col-md-12">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Data Kategori
              </button>
            </div>
          </div>
          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-plus"></i> Form Tambah Data Kategori</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="post" action="<?= base_url('app/act_addkategori') ?>">

                   <div class="form-group">
                    <label for="exampleInputEmail1">Kode Kategori </label>
                    <input type="text" name="kode" class="form-control" required value="<?= $kode ?>">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama kategori</label>
                    <input type="text" name="nama_kategori" class="form-control" required="">
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
                  <th>Nama Kategori</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1 ?>
                <?php foreach($kategori as $data){ ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td>
                      <?= $data['kode'] ?>
                    </td>
                    <td><?= $data['nama_kategori'] ?></td>
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
                          <h5 class="modal-title" id="exampleModalLabel">Edit Data Kategori</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="<?= base_url('app/act_editkategori') ?>">

                            <input type="hidden" name="id" value="<?= $data['id']  ?>">

                            <div class="form-group">
                              <label for="exampleInputEmail1">Kode Kategori </label>
                              <input type="text" name="kode" class="form-control" required value="<?= $kode ?>">
                            </div>

                            
                            <div class="form-group">
                              <label for="exampleInputEmail1">Nama kategori</label>
                              <input type="text" name="nama_kategori" class="form-control" required="" value="<?= $data['nama_kategori'] ?>">
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
                          <h5 class="modal-title" id="exampleModalLabel">Hapus Data Lokasi Aset</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">

                          <h4>Apakah anda ingin menghapus data ini ? </h4>
                          <form method="post" action="<?= base_url('app/act_hapuskategori') ?>">
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