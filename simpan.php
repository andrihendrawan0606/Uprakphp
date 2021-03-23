<?php
include 'koneksi.php';
    if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $gambar = $_POST['gambar'];
    $desc = $_POST['deskripsi'];

    $sql = "INSERT INTO `databarang1` (`nama_barang`, `harga_barang`, `gambar`, `deskripsi_Barang`) VALUES ('$nama', '$harga', '$gambar', '$desc')";
    $query = mysqli_query($connect, $sql);
    //Pengecekkan jika proses simpan kedatabase berhasil
    if ($query) {
        header('Location: dashboard.php');
    } else{
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    }
    }
?>
