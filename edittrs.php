<?php

require 'funtion.php';

// if (isset($_POST['submit'])) {
//     // var_dump($_POST);
//     tambahtrs($_POST);
// }

$id = $_GET["id"];
$transaction = query("SELECT * FROM transaction WHERE id=$id");

$menus = query("SELECT * FROM menu_kantin");

// var_dump($transaction);


if (isset($_POST["submit"])) {
    // var_dump($_POST);
    // die;
    if (edit($_POST, $id, 'transaction') > 0) {
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
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaction</title>
</head>

<body>
    <h1>Edit Transaksinya</h1>

    <ul>
        <form action="" method="post">
            <li>
                <label for="buyer">Nama Pelanggan</label>
            </li>
            <li>
                <input type="text" name="buyer" id="buyer" value="<?= $transaction[0]['buyer'] ?> ">
            </li>
            <li>
                <label for="">Silahkan Check Menu yang di pilih Pelangan</label>
            </li>
            <?php
            $menu_array = json_decode($transaction[0]['menu'], true);
            // var_dump($menus);
            ?>
            <?php
            $i = 0;
            ?>
            <?php foreach ($menus as $menu): ?>
                <li>
                    <input type="checkbox" name="menu[<?= $i ?>]" value="<?= $menu['name'] ?>" <?php if (in_array($menu['name'], $menu_array)) {
                                                                                                    echo "checked";
                                                                                                }  ?> id="menu<?= $menu ?>">
                    <label for="<?= $menu ?>"><?= $menu['name'] ?></label>
                </li>
                <?php $i++ ?>
            <?php endforeach; ?>
            <li>
                <label for="amount">Harganya</label>
            </li>
            <li>
                <input type="text" name="amount" id="amount" value="<?= $transaction[0]['amount'] ?> ">
            </li>
            <button name="submit" type="submit">Tambahkan Transaksi</button>
        </form>
    </ul>
</body>

</html>