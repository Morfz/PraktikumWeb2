<?php
    require('Model.php');
    if (isset($_GET['id_member'])) {
        deleteMember($_GET['id_member']);
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
    <title>Data Member</title>
</head>
<body>
    <div class="container">
    <div class="row">
    <div class="col-md-12 py-3">
            <h1>Perpustakaan</h1>
            <hr>
            <h3>Data Member</h3>
            <a class="btn btn-light my-1" href='index.php'"><i class="fa fa-home"></i> Beranda</a>
            <a class="btn btn-dark my-1" href='FormMember.php'"><i class="fa fa-user-plus"></i> Tambah Data</a>
            <p></p>
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                <th>Nama Member</th>
                <th>Nomor Member</th>
                <th>Alamat</th>
                <th>Tanggal Mendaftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?= getDataMember() ?>
            </tbody>
        </table>
        </div>
        </div>
    </div>
</body>
</html>