<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktek ka DILA</title>
</head>
<body>
    <h1 style="text-align: center; color: red; font-weight: 600; ">Praktek HTML dan PHP</h1>

    <a href="datalaki.php">Data laki laki</a>
    <a href="dataperempuan.php">dataperempuan</a>
    <a href="form.php">Tambah data</a>
    <table border="1">
        <tr style="background-color: aquamarine; color: black; font-family:Verdana, Geneva, Tahoma, sans-serif">
        <th width="5%">No</th>
            <th>nama</th>
            <th>umur</th>
            <th>jenis_kelamin</th>
            <th>No_telepon</th>
            <th>alamat</th>
            <th>Option</th>
        </tr>

        <?php
        $data = mysqli_query($koneksi, 'SELECT * FROM bimbel');
        while($bimbel = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php print $bimbel['id'] ?></td>
                <td><?php print $bimbel['nama'] ?></td>
                <td><?php print $bimbel['umur'] ?></td>
                <td><?php print $bimbel['jenis_kelamin'] ?></td>
                <td><?php print $bimbel['nomor_telepon'] ?></td>
                <td><?php print $bimbel['alamat'] ?></td>
                <td>
                    <a href="formEdit.php?id=<?php print $bimbel['id'] ?>">Edit</a>
                    <a href="detail.php?id=<?php print $bimbel['id'] ?>">Detail</a>
                    <a href="hapus.php?id=<?php print $bimbel['id'] ?>" onclick="return confirm('Y4kin m4u h4pus d4t4')">Hapus</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>