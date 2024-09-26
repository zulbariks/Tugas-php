<?php

require 'funtion.php';

$menu_kantin = query("SELECT * FROM menu_kantin")


// ngambil data tabel menu kantin




?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Menu Kantin</title>
</head>

<body>
    <h1 class="text-center mt-4">Menu Kantin</h1>
    <table class="border-2 mx-auto mt-2">
        <tr>
            <th>No</th>
            <th class="border-2">Nama makanan</th>
            <th class="border-2">Harga</th>
            <th>Action</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($menu_kantin as $row): ?>
            <tr class="border-2">
                <td> <?= $i; ?> </td>
                <td class="border-2"><?= $row["name"] ?></td>
                <td class="border-2"><?= $row["price"] ?></td>
                <td class="text-xs ">
                    <a class="hover:text-slate-600" href="edit.php?id=<?= $row["id"] ?>">Tambahkan</a> |
                    <a class="hover:text-slate-600" href="kurangin.php?id=<?= $row["id"] ?>" onclick="return confirm('Are You Sure??')">Kurangi</a>

                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        <!-- 
    <tr class="border-2">
        <td>2</td>
        <td class="border-2">es cekek</td>
        <td class="border-2">3000</td>
    </tr>
    <tr class="border-2">
        <td>3</td>
        <td class="border-2">es campur</td>
        <td class="border-2">8000</td>
    </tr>
    <tr class="border-2">
        <td>4</td>
        <td class="border-2">kopi</td>
        <td class="border-2">65000</td>
    </tr> -->
    </table>
    <div class="text-center mt-4">
        <button class="px-2 py-3 bg-blue-500 text-white rounded-full hover:bg-blue-600"><a href="tambah.php">Tambahkan Lauk</a></button>
    </div>
</body>

</html>