<!doctype html>
  <html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/') ?>css/sb-admin-2.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Aset</title>
  </head>
  <body>

   <div class="container">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Aset <?= $aset['nama_aset'] ?></h1>
        <p class="lead">Data aset Universitas Harapan Medan</p>
        <hr>
        <div class="card">
          <div class="card-body">
           

            <div class="row">

              <div class="col-sm-4 col-6 mt-2">
                <div class="card shadow">
                  <div class="card-body">
                    <h7 class="card-title" style="font-weight: bold;">Nama Aset</h7>
                    <p><?= $aset['nama_aset'] ?></p>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 col-6 mt-2">
                <div class="card shadow">
                  <div class="card-body">
                    <h7 class="card-title" style="font-weight: bold;">Kategori</h7>
                    <p><?= $aset['kategori'] ?></p>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 col-6 mt-2">
                <div class="card shadow">
                  <div class="card-body">
                    <h7 class="card-title" style="font-weight: bold;">Kualitas</h7>
                    <p><?= $aset['kualitas'] ?></p>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 col-6 mt-2">
                <div class="card shadow">
                  <div class="card-body">
                    <h7 class="card-title" style="font-weight: bold;">Lokasi</h7>
                    <p><?= $aset['lokasi_aset'] ?></p>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 col-6 mt-2">
                <div class="card shadow">
                  <div class="card-body">
                    <h7 class="card-title" style="font-weight: bold;">No Faktur</h7>
                    <p style="font-size: 13px;"><?= $aset['no_faktur_pembelian'] ?></p>
                  </div>
                </div>
              </div>


              <div class="col-sm-4 col-6 mt-2">
                <div class="card shadow">
                  <div class="card-body">
                    <h7 class="card-title" style="font-weight: bold;">Harga</h7>
                    <p><?= $aset['harga_pembelian'] ?></p>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 col-6 mt-2">
                <div class="card shadow">
                  <div class="card-body">
                    <h7 class="card-title" style="font-weight: bold;">Toko Pem</h7>
                    <p><?= $aset['toko_pembelian'] ?></p>
                  </div>
                </div>
              </div>

              <div class="col-sm-4 col-6 mt-2">
                <div class="card shadow">
                  <div class="card-body">
                    <h7 class="card-title" style="font-weight: bold;">Foto</h7>
                    <img src="<?= base_url('assets/berkas/') ?><?= $aset['foto'] ?>" class="img-fluid" alt="Responsive image">
                  </div>
                </div>
              </div>


            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>
</html>