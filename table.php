<?php

include 'koneksi.php';

$create = "CREATE TABLE bimbel (
id INT AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(255) NOT NULL,
umur INT(10) NOT NULL,
jenis_kelamin VARCHAR(200) NOT NULL,
nomor_telepon INT(20) NOT NULL,
alamat TEXT(255) NOT NULL
)";


if($koneksi->query($create) === true){
    echo "Table ujian berhasil dibuat";
}else{
    echo "Gagal membuat table";
}

$koneksi->close();
?>