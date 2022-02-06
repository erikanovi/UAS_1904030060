<?php

require 'function.php';

$id_anggota = $_GET['id_anggota'];
$buku = query("SELECT * FROM anggota WHERE id_anggota = $id_anggota");


if (isset($_POST['edit'])) {
  if (editbuku($_POST) > 0) {
    echo
    "<script>
    alert('data berhasil diedit');
    document.location.href = 'anggota.php';
    </script>";
  } else {
    echo
    "<script>
    alert('maaf data gagal diedit');
    </script>";
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Perpustakaan</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">Perpus Kita</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->

    <!-- Navbar-->

  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="index.php">
              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
              Dashboard
            </a>

            <div class="sb-sidenav-menu-heading">Addons</div>
            <a class="nav-link" href="buku.php">
              <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
              Daftar Buku
            </a>
            <a class="nav-link" href="input_buku.php">
              <div class="sb-nav-link-icon"><i class="fas fa-folder-plus"></i></div>
              Input Buku
            </a>
            <a class="nav-link" href="anggota.php">
              <div class="sb-nav-link-icon"><i class="fas fa-user-friends"></i></div>
              Daftar Anggota
            </a>
            <a class="nav-link" href="input_agt.php">
              <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
              Input Anggota
            </a>
          </div>
        </div>
      </nav>
    </div>

    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <h1 class="mt-4">Input Anggota Perpustakaan</h1>
          <hr>

          <form method="POST" action="">
            <div class="form-group">
              <label for="nm_anggota">Nama Anggota : </label>
              <input type="text" class="form-control" id="nm_anggota" placeholder="nama lengkap" name="nm_anggota" autofocus required autocomplete="off">
            </div>
            <div class="form-group">
              <label for="jenkel">Jenis Kelamin : </label>
              <input type="text" class="form-control" id="jenkel" placeholder="jenis kelamin" name="jenkel" required autocomplete="off">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat : </label>
              <input type="text" class="form-control" id="alamat" placeholder="alamat lengkap" name="alamat" required autocomplete="off">
            </div>
            <div class="form-group">
              <label for="no_telp">No Telepon : </label>
              <input type="text" class="form-control" id="no_telp" placeholder="no telepon" name="no_telp" required autocomplete="off">
            </div>
            <div class="form-group">
              <label for="status">Status : </label>
              <input type="text" class="form-control" id="status" placeholder="status" name="status" required autocomplete="off">
            </div>

            <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
          </form>
        </div>
      </main>


      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Perpus Kita 2022</div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
</body>

</html>