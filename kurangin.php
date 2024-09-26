<?php

require 'funtion.php';

$id = $_GET["id"];

hapus($id, 'menu_kantin');


if (mysqli_affected_rows($koneksi) > 0) {
    echo "<script>
    alert('Data Berhasil Dikurangin');
    document.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Dikurangi');
    document.location.href = 'index.php';
    </script>";
}
