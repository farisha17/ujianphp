<?php

// Create = proses membuat
// Pake method POST
// POST manipulasi data/input data/ nambahin data/ masukin data
// PUT buat edit data (update)

include 'koneksi.php';

// yg ($) itu boleh nama apa aja, tapi kalo yg di (['']) itu namanya mengikuti field yg sudah kita  buat

$id = $_POST['id'];
$nama = $_POST['nama']; 
$umur = $_POST['umur'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$nomor_telepon = $_POST['nomor_telepon'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "INSERT INTO user VALUES('$id', '$nama', '$umur', '$jenis_kelamin', '$nomor_telepon', '$alamat')");

// location = untuk berpindah halaman
header('location:index.php');
?>