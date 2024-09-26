<?php

require 'funtion.php';


$id = $_GET["id"];

// echo $id;

$menu = query("SELECT * FROM menu_kantin WHERE id = $id");

// var_dump($menu);

if (isset($_POST["submit"])) {
    var_dump($_POST);


    // var_dump(mysqli_affected_rows($koneksi));


    // ngecekk
    if (edit($_POST, $id, "menu_kantin") > 0) {
        echo "<script>
    alert('Data Berhasil Ditambahin');
    document.location.href = 'index.php';
    </script>";
    } else {
        echo "<script>
    alert('Data Gagal Ditambahin');
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
    <h1>Tambahin Menu</h1>


    <form action="" method="post">
        <ul>
            <li>
                <label for="name">Nama Makanan/Minuman :</label>
            </li>
            <li>
                <input type="text" name="name" id="name" value="<?= $menu[0]['name'] ?>">
            </li>
            <li>
                <label for="price">Harga :</label>
            </li>
            <li>
                <input type="text" name="price" id="price" value="<?= $menu[0]['price'] ?>">
            </li>
            <li>
                <button name="submit" type="submit">Tambahin</button>
            </li>
        </ul>
    </form>
</body>

</html>