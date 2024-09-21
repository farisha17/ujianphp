<?php

include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktek PHP</title>
</head>
<body>
    <h1 style="text-align: center; color: brown; font-weight: 600; text-shadow: 2px 2px 5px black; ">Data laki laki</h1>

    <table border="1">
        <tr style="background-color: aquamarine; color: black; font-weight: 700; font-family: Verdana, Geneva, Tahoma, sans-serif;">
            <th width="5%">No.</th>
            <th width="5%">Nama</th>
            <th width="5%">Umur</th>
            <th width="5%">Jenis Kelamin</th>
            <th width="5%">Nomor Telepon</th>
            <th width="5%">Alamat</th>
            <th width="5%">Option</th>
        </tr>

      <?php
      $data = mysqli_query($koneksi, 'SELECT * FROM bimbel WHERE jenis_kelamin LIKE "L"');
      while ($bimbel = mysqli_fetch_array($data)) {
        ?>
    <tr>
        <td> <?php print $bimbel['id']?> </td>
        <td> <?php print $bimbel['nama']?> </td>
        <td> <?php print $bimbel['umur']?> </td>
        <td> <?php print $bimbel['jenis_kelamin']?> </td>
        <td> <?php print $bimbel['nomor_telepon']?> </td>
        <td> <?php print $bimbel['alamat']?> </td>
        <td>
            <a href="formEdit.php?id=<?php print $bimbel['id']?>">Edit</a>
            <a href="detail.php?id=<?php print $bimbel['id']?>">Detail</a>
            <a href="hapus.php?id=<?php print $bimbel['id']?>" onclick="return confirm('YAKIN MAU HAPUS DATA?')">Hapus</a>    
        </td>
    </tr>
    <?php
    }?> 
    </table>
</body>
</html>