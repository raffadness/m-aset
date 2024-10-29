<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="card shadow mb-4">
          <div class="card-header">
            <div class="d-sm-flex align-items-center justify-content-between">
              <h1 class="tbtitle h4 mb-0 text-gray-800">Data Denda Peminjaman</h1>
            </div>
          </div>
        <div class="card-body">

            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Peminjam</th>
                    <th>Kode Aset</th>
                    <th>Tgl Pengambalian</th>
                    <th>Denda</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1 ?>
                  <?php foreach($denda as $data){ ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td>
                        <?= $data['kode_peminjam'] ?>
                      </td>
                      <td><?= $data['kode_aset'] ?></td>
                      <td><?= $data['tgl_pengembalian'] ?></td>
                      <td><?= $data['denda'] ?></td>
                      <td>


                        <button class="btn btn-danger btn-sm col-md-12" data-toggle="modal" data-target="#exampleModalhapus<?= $data['id'] ?>"><i class="fa-solid fa-trash"></i> Hapus</button>
                      </td>
                    </tr>



                    <!-- End Modal Edit -->

                    <!-- Modal Hapus -->
                    <div class="modal fade" id="exampleModalhapus<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data Denda Aset</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">

                            <h4>Apakah anda ingin menghapus data ini ? </h4>
                            <form method="post" action="<?= base_url('app/act_hapusdenda') ?>">
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
       </tbody>
     </div>
 </div>
</div>
</section>
<!-- /.content -->
</div>