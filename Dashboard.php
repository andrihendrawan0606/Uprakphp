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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Redressed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link
        href="https://fonts.googleapis.com/css2?family=Allerta&family=Imbue:wght@200&family=Overlock:wght@700&family=Saira+Condensed:wght@300&family=Sen&family=Staatliches&family=Kaushan+Script&family=Teko&family=Pathway+Gothic+One&display=swap"
        rel="stylesheet">

    <title>Uji Level 3</title>
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

    
    <section id="ph">
        <h2 class="text-center">LAPTOP PRODUK</h2>
    </section>

    <section id="produk">
        <div class="container">
        <div class="overflow-auto">
            <div class="row ms-5">
            <?php
                include 'koneksi.php';
                    $sql = "SELECT * FROM `databarang1`";
                    $query = mysqli_query($connect, $sql);
                    while($row = mysqli_fetch_array($query)){
                ?>
            <div class="card mb-3 mt-3 row1" style="max-width: 540px; border-left: 5px solid #7f7fd5">
                <div class="row ms-3">
                  <form action="simpan.php" method="POST">
                    <div class="col-md-4">
                    <img src="<?php echo $row["gambar"];?>" class="card-img-top" style="margin-left: 120px;">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body text-center">
                    <h5 class="card-title" style="margin-left: 80px;"><?php echo $row["nama_barang"];?></h5>
                    <p class="card-text" style="margin-left: 80px;">Harga: Rp. <?php echo number_format($row["harga_barang"]);?></p>
                        <p class="card-text" style="margin-left: 80px;"><small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.......</small></p>
                        <a href="formedit.php?id=<?php echo $row['id_barang']; ?>" type="submit" class="edit btnn"><button type="button" class="btn edit btn-warning mt-2">Edit</button></a>
                        <a href="delete.php?id=<?php echo $row['id_barang']; ?>" type="submit" class="delete"><button type="button" class="btn delete btn-danger mt-2">Delete</button></a>
                        <a href="detail.php?id=<?php echo $row['id_barang']; ?>" type="submit" class="delete"><button type="button" class="btn detail btn-success mt-2">Detail</button></a>
                    </div>
                    </div>
                </div>
                </div>
                    </form>
                <?php
                    }
                    ?>
            </div>
            </div>
        </div>
    </section>

    <section id="footer">
    &copy; Copyright 2021
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>

<?php
