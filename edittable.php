<?php

require 'funtion.php';


$id = $_GET["id"];

// echo $id;

$table =  query("SELECT * FROM tables WHERE id = $id");

// var_dump($menu);

if (isset($_POST["submit"])) {
    var_dump($_POST);
    if (edit($_POST, $id, 'tables') > 0) {
        echo "<script>
    alert('Data Berhasil Ditambahkan');
    document.location.href = 'transaction.php';
    </script>";
    } else {
        echo "<script>
    alert('Data Gagal Ditambahkan');
    document.location.href = 'transaction.php';
    </script>";
    }


    // var_dump(mysqli_affected_rows($koneksi));



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
    <h1>Edit Meja</h1>

    <ul>
        <form action="" method="post">
            <li>
                <label for="number">Nomor Meja</label>
            </li>
            <li>
                <input type="number" name="number" id="number" value="<?= $table[0]['number'] ?>">
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