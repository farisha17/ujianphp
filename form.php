<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Praktek HMTL dan PHP</h1>

<!-- di tag from ini WAJIB memakai atribut (action & method) -->
    <form action="create.php" method="post">
        <label>nama</label>
        <br>
<!-- di bagian name (input) itu harus sama dengan field yang sudah kita buat -->
        <input type="text" name="nama">
        <br>

        <label>umur</label>
        <br>
        <input type="number" name="umur">
        <br>

        <label>jenis_kelamin</label>
        <br>
        <input type="text" name="jenis_kelamin">
        <br>

        <label>nomor_telepon</label>
        <br>
        <input type="number" name="nomor_telepon">
        <br>

        <label>alamat</label>
        <br>
        <textarea name="alamat"></textarea>
        <br>

        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>