<?php
include 'koneksi.php';
    if (isset($_POST['simpan1'])) {
    $nama = $_POST['nama_barang'];
    $gambar = $_POST['gambar'];
    $harga = $_POST['harga_barang'];
    $dkrpsi = $_POST['deskripsi_barang'];

    $sql = "UPDATE databarang1 SET `gambar`='$gambar', `harga_barang`='$harga', `deskripsi_barang`='$dkrpsi' WHERE `nama_barang`='$nama'";
    $query = mysqli_query($connect, $sql);
    //Pengecekkan jika proses simpan kedatabase berhasil
    if ($query) {
        header('Location: dashboard.php');
    }else{
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    }
    }
?>
