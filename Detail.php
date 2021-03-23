<?php
include 'koneksi.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM databarang1 WHERE id_barang='$id'";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($query);

    if( mysqli_num_rows($query) > 1 ) {
        die("data tidak ditemukan...");
    }
?>

<!doctype html>
<html lang="en">
  <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="style.css?version=<?php echo filemtime('style.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Allerta&family=Imbue:wght@200&family=Overlock:wght@700&family=Saira+Condensed:wght@300&family=Sen&family=Staatliches&family=Kaushan+Script&family=Teko&family=Pathway+Gothic+One&display=swap"
        rel="stylesheet">
    <title>Detail Barang</title>
  </head>
  <body>

  <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <button class="navbar-toggler mb-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse text-center navbar-collapse" id="navbarNavAltMarkup">
                    <a class="navbar-brand ms-1" href="#">Violet Evergarden Store</a>
                    <div class="navbar-nav">
                        <a class="nav-link active" href="./dashboard.php">Home</a>
                        <a class="nav-link" href="./tambah.php">Tambah Produk</a>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <section id="detail">
        <div class="container">
            <h4 class="krnjg">Detail Barang</h4>
            <div class="line"></div>
            
            <div class="card mb-3 mt-5" style="max-width: 900px; border-left: 6px solid #89216B">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="<?php echo $row["gambar"];?>" class="card-img-top mt-5 ms-4 mb-4">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body ms-5">
                        <h5 class="card-title"><?php echo $row["nama_barang"];?></h5>
                        <div class="line-2"></div>
                        <p class="card-text hrgdtl">Harga: Rp. <strong><?php echo number_format($row["harga_barang"]);?></strong></p>
                        <p class="card-text hrgdtl"><?php echo $row["deskripsi_barang"];?></p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <button type="button" class="btn btn-success" style="width: 120px;">Beli</button>
                    </div>
                    </div>
                </div>
                </div>
        </div>
    </section>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
