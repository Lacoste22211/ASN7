<?php
include 'config.php';
$id = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM karyawan WHERE id=$id");

if ($delete) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data.";
}
?>
