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
    <h1 style="text-align: center; color: brown; font-weight: 600; text-shadow: 2px 2px 5px black; ">Kelaspagi</h1>
 
    <table border="1">
        <tr style="background-color: aquamarine; color: black; font-weight: 700; font-family: Verdana, Geneva, Tahoma, sans-serif;">
            <th width="5%">No.</th>
            <th width="5%">Nomor Bootcamp</th>
            <th width="5%">Nama Peserta</th>
            <th width="5%">Nama Bootcamp</th>
            <th width="5%">Jadwal Kelas</th>
            <th width="5%">No Telpon</th>
        </tr>

      <?php
      $data = mysqli_query($koneksi, 'SELECT * FROM detail WHERE jadwal_kelas LIKE "pagi"');
      while ($detail = mysqli_fetch_array($data)) {
        ?>
    <tr>
        <td> <?php print $detail['id']?> </td>
        <td> <?php print $detail['nomor_bootcamp']?> </td>
        <td> <?php print $detail['nama_peserta']?> </td>
        <td> <?php print $detail['nama_bootcamp']?> </td>
        <td> <?php print $detail['jadwal_kelas']?> </td>
        <td> <?php print $detail['no_telp']?> </td>
    </tr>
    <?php
    }?> 
    </table>
</body>
</html>