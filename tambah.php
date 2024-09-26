<?php

require 'funtion.php';

if(isset($_POST["submit"])) {
    var_dump($_POST);


    // var_dump(mysqli_affected_rows($koneksi));


    // ngecekk
    if(tambah($_POST, 'menu_kantin') >0 ) {
        echo "<script>
    alert('Data Berhasil Ditambahkan');
    document.location.href = 'index.php';
    </script>";
    }else{
        echo "<script>
    alert('Data Gagal Ditambahkan');
    document.location.href = 'index.php';
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
    <h1>Tambahkan Menu</h1>


    <form action="" method="post">
        <ul>
            <li>
                <label for="name">Nama Makanan/Minuman :</label>
            </li>
            <li>
                <input type="text" name="name" id="name">
            </li>
            <li>
                <label for="price">Harga :</label>
            </li>
            <li>
                <input type="text" name="price" id="price">
            </li>
            <li>
                <button name="submit" type="submit">Tambahin</button>
            </li>
        </ul>
    </form>
</body>
</html>