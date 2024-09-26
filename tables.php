<?php

require 'funtion.php';

$tables = query("SELECT * FROM tables");

// var_dump($tables);


?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Nomor Meja</title>
</head>

<body>
    <h1 class="text-center mt-4">
        Nomor Meja
    </h1>

    <table class="border-2 mx-auto mt-2" cellspaddding="4">
        <tr>
            <th class="border-2">No</th>
            <th class="border-2">Nomor Meja</th>
            <th class="border-2">Condition</th>
            <th class="border-2">Update</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach ($tables as $table): ?>
            <tr>
                <th class="border-2"><?= $no ?></th>
                <th class="border-2"><?= $table['number'] ?></th>
                <th class="border-2"><?php if ($table['status']) {
                                            echo "terisi";
                                        } else {
                                            echo "bisa diisi";
                                        }
                                        ?></th>
                <th class="border-2 text-xs "><a class="hover:text-slate-600" href="hapus.php?id=<?= $table["id"] ?>" onclick="return confirm('Are You Sure??')">Hapus</a> | <a class="hover:text-slate-600" href="edittable.php?id=<?= $table["id"] ?>">Edit</a></th>
            </tr>
            <?php $no++ ?>
        <?php endforeach; ?>

    </table>
    <div class=" flex items-center mx-auto justify-center">
        <button class="py-2 px-3 bg-blue-600 hover:bg-blue-800 mt-4 rounded-full"><a href=" tambahtable.php " class="text-white">Tambah Table</a></button>
    </div>
</body>

</html>