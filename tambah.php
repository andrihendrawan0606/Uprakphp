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

    <title>Tambah Barang</title>
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
                    <a class="navbar-brand ms-4" href="#">Violet Evergarden Store</a>
                    <div class="navbar-nav">
                        <a class="nav-link active" href="./dashboard.php">Home</a>
                        <a class="nav-link" href="#">Tambah Produk</a>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <section id="tabel-list">
        <div class="container mt-4">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <form action="simpan.php" method="POST">
                        <div class="row">
            
                        <div class="mb-3">
                            <label class="form-label">Nama Barang:</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama">
                     
                            <div class="mb-3">
                            <label class="form-label">Gambar</label>
                            <input type="text" class="form-control" name="gambar" placeholder="Link">
                            </div>
                        </div>
                        <div class="col-sm">
                        <div class="mb-3">
                            <label class="form-label">Harga Barang:</label>
                            <input type="number" class="form-control" name="harga" placeholder="Harga">
                            </div>
                        </div>
                        <div class="col-sm">
            
                            <label class="form-label">Deskripsi:</label>
                            <input type="text" class="form-control" name='deskripsi' placeholder="Deskripsi">
                            </div>
                        </div>
                    </div>
                    </div>
                            <input type="submit" class="btn tambah btn-success" name="simpan" value="simpan">
                        </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer" style="margin-top: 216px;">
    &copy; Copyright 2021
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>
