<?php

require 'funtion.php';

$transaction = query("SELECT * FROM transaction");

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Transaction</title>
</head>

<body>
    <h1 class="text-center mt-6">Transaction</h1>

    <table class="border-2 mx-auto">
        <tr class="border-2">
            <th class="border-2">No</th>
            <th class="border-2">Pembeli</th>
            <th class="border-2">Yang Dipesan</th>
            <th class="border-2">Total Harga</th>
            <th class="border-2">Action</th>
        </tr>

        <?php $no = 1; ?>
        <?php foreach ($transaction as $trs): ?>
            <tr>
                <th class="border-2"><?= $no ?></th>
                <th class="border-2"><?= $trs['buyer'] ?> </th>
                <th class="border-2"><?php $menu_array = json_decode($trs['menu'], true);  // Menggunakan true untuk mengubah ke array asosiatif
                                        // Menampilkan data menu
                                        foreach ($menu_array as $menu_item) {
                                            echo $menu_item . ", ";
                                        } ?>
                </th>
                <th class="border-2"><?= $trs['amount'] ?> </th>
                <th>
                    <a class="hover:text-slate-600 text-xs" href="edittrs.php?id=<?= $trs["id"] ?>">Edit</a> |
                    <a class="hover:text-slate-600 text-xs" href="hapustrs.php?id=<?= $trs["id"] ?>" onclick="return confirm('Are You Sure??')">Hapus</a>
                </th>
            </tr>
            <?php $no++ ?>
        <?php endforeach; ?>
    </table>
    <div class=" flex items-center mx-auto justify-center">
        <button class="py-2 px-3 bg-blue-600 hover:bg-blue-800 mt-4 rounded-full"><a href=" tambahtrs.php " class="text-white">Tambah Transaksi</a></button>
    </div>
</body>

</html>