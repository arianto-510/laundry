<?php
include '../koneksi.php';
$id = $_GET['id'];
var_dump($id);

$data = mysqli_query($conn, "DELETE FROM pelanggan WHERE id = '$id'");

if (mysqli_affected_rows($conn) > 0) {
    header("Location: pelanggan.php");
}
