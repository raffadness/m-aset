<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TEMAN ASET</title>
  <link rel="shortcut icon" href="<?= base_url('assets/') ?>img/logow.svg" type="image/x-icon">
  <link
      href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />
    <link
      href="<?= base_url('assets/') ?>css/sb-admin-2.min.css"
      rel="stylesheet"
    />

    <link href="https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-2.1.8/b-3.1.2/b-colvis-3.1.2/b-html5-3.1.2/b-print-3.1.2/r-3.0.3/datatables.min.css" rel="stylesheet">
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/bs4/jqc-1.12.4/dt-2.1.8/b-3.1.2/b-colvis-3.1.2/b-html5-3.1.2/b-print-3.1.2/r-3.0.3/datatables.min.js"></script>

   
    <link href="<?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="<?= base_url('app/') ?>"
        >
          <div class="sidebar-brand-icon rotate-n-15">
            <img src="<?= base_url('assets/') ?>img/logow.svg" alt="Logo">
          </div>
          <div class="sidebar-brand-text mx-3">TEMAN ASET<sup></sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('app/') ?>">
            <i class="fa-solid fa-house"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Data</div>
        

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('app/data_aset') ?>">
          <i class="fa-solid fa-fw fa-user"></i>
            <span>Aset</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('app/data_peminjaman') ?>">
          <i class="fa-solid fa-fw fa-book"></i>
            <span>Peminjaman</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('app/data_denda') ?>">
          <i class="fa-solid fa-fw fa-coins"></i>
            <span>Denda</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('app/data_kategori') ?>">
          <i class="fa-solid fa-fw fa-table-list"></i>
            <span>Kategori</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('app/data_kualitas') ?>">
          <i class="fa-solid fa-fw fa-star"></i>
            <span>Kualitas</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('app/data_lokasi') ?>">
          <i class="fa-solid fa-fw fa-location-dot"></i>
            <span>Lokasi</span></a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('app/data_admin') ?>">
          <i class="fa-solid fa-fw fa-user-group"></i>
            <span>Admin</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav
            class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <button
              id="sidebarToggleTop"
              class="btn btn-link d-md-none rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form
              class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
            >
              <div class="input-group">
                <input
                  type="text"
                  class="form-control bg-light border-0 small"
                  placeholder="Cari ..."
                  aria-label="Search"
                  aria-describedby="basic-addon2"
                />
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="searchDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div
                  class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                  aria-labelledby="searchDropdown"
                >
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control bg-light border-0 small"
                        placeholder="Cari ..."
                        aria-label="Search"
                        aria-describedby="basic-addon2"
                      />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                    ><?=  ucfirst($this->session->username) ?></span
                  >
                  <img
                    class="img-profile rounded-circle"
                    src="<?= base_url('assets/') ?>dist/img/user.png"
                  />
                </a>
                <!-- Dropdown - User Information -->
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
                  <!-- <div class="dropdown-divider"></div> -->
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                  <i class="fa-solid fa-right-from-bracket"></i>
                    Keluar
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->
    <!-- Bootstrap core JavaScript-->
       <!-- Scroll to Top Button-->
       <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div
      class="modal fade"
      id="logoutModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar ?</h5>
            <button
              class="close"
              type="button"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            Pilih "Keluar" jika ingin mengakhiri sesi.
          </div>
          <div class="modal-footer">
            <button
              class="btn btn-secondary"
              type="button"
              data-dismiss="modal"
            >
              Batal
            </button>
            <a class="btn btn-danger" href="<?= base_url('login/logout') ?>">Keluar</a>
          </div>
        </div>
      </div>
    </div>

    <div class="content-wrapper">