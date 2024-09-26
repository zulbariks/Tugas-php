<?php

require 'funtion.php';

if (isset($_POST['submit'])) {
    // var_dump($_POST);
    tambah($_POST, 'tables');
}

if (isset($_POST["submit"])) {
    var_dump($_POST);


    // var_dump(mysqli_affected_rows($koneksi));


    // ngecekk
    if (tambah($_POST, 'tables') > 0) {
        echo "<script>
    alert('Data Berhasil Ditambahkan');
    document.location.href = 'tables.php';
    </script>";
    } else {
        echo "<script>
    alert('Data Gagal Ditambahkan');
    document.location.href = 'tables.php';
    </script>";
    }
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>tambah mejanya</h1>

    <ul>
        <form action="" method="post">
            <li>
                <label for="number">Nomor Meja</label>
            </li>
            <li>
                <input type="number" name="number" id="number">
            </li>
            <li>
                <label for="status">Status Meja</label>
            </li>
            <li>
                <select name="status" id="status">
                    <option value="1">Sudah Terisi</option>
                    <option value="0">Ready</option>
                </select>
                <span>Ceklis jika meja terisi</span>
            </li>
            <button name="submit" type="submit">Tambahkan meja</button>
        </form>
    </ul>
</body>

</html>