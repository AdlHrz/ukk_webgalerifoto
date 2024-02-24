<?php
include "koneksi.php";
session_start();

$albumid =$_GET['albumid'];
$sql = mysqli_query($conn, "DELETE FROM album WHERE albumid='$albumid'");

if ($sql) {
    echo "<script>
    alert('hapus data berhasil');
    location.href='album.php';
</script>";
} else {
    echo "<script>
    alert('hapus data gagal');
    location.href='album.php';
    </script>";
}
