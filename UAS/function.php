<?php
$conn = mysqli_connect('localhost', 'root', '', 'uas_1904030060');

//pemanggilan tabel
function query($query)
{
  global $conn;

  //mengambil seluruh data pada tabel
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  //pemanggilan elemen data dengan rapi
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambahbuku($data)
{
  global $conn;

  $nm_buku = htmlspecialchars($data['nm_buku']);
  $pengarang = htmlspecialchars($data['pengarang']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $tahun = htmlspecialchars($data['tahun']);
  $jumlah = htmlspecialchars($data['jumlah']);

  $query = "INSERT INTO buku
  VALUES
  (null,'$nm_buku','$pengarang','$penerbit','$tahun','$jumlah');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function tambahagt($data)
{
  global $conn;

  $nm_anggota = htmlspecialchars($data['nm_anggota']);
  $jenkel = htmlspecialchars($data['jenkel']);
  $alamat = htmlspecialchars($data['alamat']);
  $no_telp = htmlspecialchars($data['no_telp']);
  $status = htmlspecialchars($data['status']);

  $query = "INSERT INTO anggota
  VALUES
  (null,'$nm_anggota','$jenkel','$alamat','$no_telp','$status');";
  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function hapusbuku($id_buku)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM buku WHERE id_buku=$id_buku") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function hapusang($id_anggota)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM anggota WHERE id_anggota=$id_anggota") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}


function editbuku($data)
{
  global $conn;

  $id_buku = $data['id_buku'];
  $nm_buku = htmlspecialchars($data['nm_buku']);
  $pengarang = htmlspecialchars($data['pengarang']);
  $penerbit = htmlspecialchars($data['penerbit']);
  $tahun = htmlspecialchars($data['tahun']);
  $jumlah = htmlspecialchars($data['jumlah']);

  $query = "UPDATE buku SET
  nm_buku ='$nm_buku',
  pengarang ='$pengarang',
  penerbit ='$penerbit',
  tahun ='$tahun',
  jumlah ='$jumlah'
  WHERE id_buku = $id_buku;";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function editagt($data)
{
  global $conn;

  $id_anggota = $data['id_anggota'];
  $nm_anggota = htmlspecialchars($data['nm_anggota']);
  $jenkel = htmlspecialchars($data['jenkel']);
  $alamat = htmlspecialchars($data['alamat']);
  $no_telp = htmlspecialchars($data['no_telp']);
  $status = htmlspecialchars($data['status']);

  $query = "UPDATE anggota SET
  nm_anggota ='$nm_anggota',
  jenkel ='$jenkel',
  alamat ='$alamat',
  no_telp ='$no_telp',
  status ='$status'
  WHERE id_anggota = $id_anggota;";

  mysqli_query($conn, $query);

  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

function caribuku($keyword)
{
  global $conn;

  $query = "SELECT * FROM buku WHERE nm_buku LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function cariang($keyword)
{
  global $conn;

  $query = "SELECT * FROM anggota WHERE nm_anggota LIKE'%$keyword%'";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}
