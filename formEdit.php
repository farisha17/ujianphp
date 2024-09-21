<?php

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM bimbel WHERE id='$id'");
while ($bimbel = mysqli_fetch_array($data)){
    ?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Praktek HTML dan PHP</h1>
    <form action="edit.php" method="post">
    <input type="hidden" name="id" method="POST" value="<?php print $bimbel['id']?>">

        <label>Nama Lengkap Antum</label>
        <br>
        <input type="text" name="nama" value="<?php print $bimbel['nama']?>">
        <br>

        <label>umur</label>
        <br>
        <input type="number" name="umur" value="<?php print $bimbel['umur']?>">
        <br>

        <label>jenis_kelamin</label>
        <br>
        <input type="text" name="jenis_kelamin" value="<?php print $bimbel['jenis_kelamin']?>">
        <br>
        <label>nomor_telepon</label>
        <br>
        <input type="number" name="nomor_telepon" value="<?php print $bimbel['nomor_telepon']?>">
        <br>

        <label>alamat</label>
        <br>
        <textarea name="alamat"><?php print $bimbel['alamat']?></textarea>
        <br>

        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>
    <?php
}
?>