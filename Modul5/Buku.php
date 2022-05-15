<?php
    require('Model.php');
    if (isset($_GET['id_buku'])) {
        deleteBuku($_GET['id_buku']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1 {
        text-align: center;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Buku</title>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-md-12 py-3">
            <h1>Perpustakaan</h1>
            <hr>
            <h3>Data Buku</h3>
            <a class="btn btn-light my-1" href='index.php'"><i class="fa fa-home"></i> Beranda</a>
            <a class="btn btn-dark my-1" href='FormBuku.php'"><i class="fa fa-user-plus"></i> Tambah Data</a>
            <p></p>
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?= getDataBuku() ?>
            </tbody>
        </table>
        </div>
        </div>
    </div>
</body>
</html>