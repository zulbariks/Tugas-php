<?php

require 'funtion.php';

$id = $_GET["id"];

hapus($id, 'tables');


if (mysqli_affected_rows($koneksi) > 0) {
    echo "<script>
    alert('Data Berhasil Dikurangin');
    document.location.href = 'tables.php';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Dikurangi');
    document.location.href = 'tables.php';
    </script>";
}
