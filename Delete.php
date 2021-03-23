<?php
include 'koneksi.php';
    if (isset($_GET['id'])) {
        header('Location: dashboard.php');

    $id = $_GET['id'];
    $sql = "DELETE FROM `databarang1` WHERE `id_barang`='$id'";
    $query = mysqli_query($connect, $sql);
    //cek jika proses simpan kedatabase berhasil
    if ($query) {
        header('Location: dashboard.php');
    }else{
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    }
    }
?>
