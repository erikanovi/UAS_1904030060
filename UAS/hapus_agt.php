<?php
require "function.php";

// agar tidak bisa masuk secara pengetikan manual pada URL
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}

$id_anggota = $_GET['id_anggota'];
if (hapusbuku($id_buku) > 0) {
  echo
  "<script>
    alert('data berhasil dihapus');
    document.location.href = 'anggota.php';
    </script>";
} else {
  echo
  "<script>
    alert('maaf data gagal dihapus');
    </script>";
}
