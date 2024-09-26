<?php

require 'funtion.php';

$id = $_GET["id"];




if (hapus($id, 'transaction') > 0) {
// if (mysqli_affected_rows($koneksi) > 0) {
    echo "<script>
    alert('Data Berhasil Dikurangin');
    document.location.href = 'transaction.php';
    </script>";
} else {
    echo "<script>
    alert('Data Gagal Dikurangi');
    document.location.href = 'transaction.php';
    </script>";
}
