<?php

require 'funtion.php';

// if (isset($_POST['submit'])) {
//     // var_dump($_POST);
//     tambahtrs($_POST);
// }
$menus = query("SELECT * FROM menu_kantin");
// var_dump($menus);
if (isset($_POST["submit"])) {
    // var_dump($_POST);

    // $selected_menus = $_POST['menu'];



    // var_dump($selected_menus);


    // var_dump(mysqli_affected_rows($koneksi));

    // ngecekk
    if (tambah($_POST, 'transaction') > 0) {
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
    <title>Tamabah Transaction</title>
</head>

<body>
    <h1>tambah Transaksinya</h1>

    <ul>
        <form action="" method="post">
            <li>
                <label for="buyer">Nama Pelanggan</label>
            </li>
            <li>
                <input type="text" name="buyer" id="buyer">
            </li>
            <li>
                <label for="">Silahkan Check Menu yan di pilih Pelangan</label>
            </li>
            <?php
            $i = 0;
            // $menu_yang_dipilih = [];
            ?>
            <?php foreach ($menus as $menu): ?>
                <li>
                    <input type="checkbox" name="menu[<?= $i ?>]" value="<?= $menu['name'] ?>" id="menu<?= $menu ?>">
                    <label for="<?= $menu ?>"><?= $menu['name'] ?></label>
                </li>
                <?php $i++ ?>
            <?php endforeach; ?>
            <li>
                <label for="amount">Harganya</label>
            </li>
            <li>
                <input type="text" name="amount" id="amount">
            </li>
            <button name="submit" type="submit">Tambahkan Transaksi</button>
        </form>
    </ul>
</body>

</html>