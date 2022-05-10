<?php 
    require('Model.php');
    if (isset($_GET['id_peminjaman'])) {
        editPeminjaman();
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
    <!-- <script src="https://kit.fontawesome.com/14edc419b7.js"></script> -->
    <?php echo (isset($_GET['id_peminjaman']))? "<title>Update Data Peminjaman</title>" : "<title>Tambah Data Peminjaman</title>" ?>
</head>

<body>
<div class="container">
    <div class="row">
    <div class="col-md-12 py-3">
                <h1>Perpustakaan</h1>
                <hr>
                <h3>Form Peminjaman</h3>
                <a class="btn btn-danger my-2" href="Buku.php"><i class="fa fa-arrow-left"></i> Kembali</a>
                <p></p>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="tgl_pinjam">Tanggal Peminjaman</label>
                                <input type="date" class="form-control" name="tgl_pinjam" id="tgl_pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_pinjam"] . "" : "value = '' "; ?> placeholder="Tanggal Peminjaman" required>
                            </div>
                            <div class="mb-3">
                                <label for="tgl_kembali">Tanggal Pengembalian</label>
                                <input type="date" class="form-control" name="tgl_kembali" id="tgl_kembali" <?php echo (isset($_GET['id_peminjaman']) ) ?  "value = " . $result[0]["tgl_kembali"] . "" : "value = '' "; ?> placeholder="Tanggal Pengembalian" required>
                            </div>

                            <?php
                            if (isset($_GET['id_peminjaman'])) {
                                echo " <button type=\"submit\" name=\"update\" class=\"btn btn-secondary my-2\">Update</button>";
                            } else {
                                echo " <button type=\"submit\" name=\"submit\" class=\"btn btn-primary my-2\">Tambah</button>";
                            }
                            ?>
                        </form>
    
    <?php
        if (isset($_POST['submit'])) {
            insertPeminjaman($_POST['tgl_pinjam'], $_POST['tgl_kembali']);
        }
        if (isset($_POST['update'])) {
            updatePeminjaman($_GET['id_peminjaman'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
        }
        ?>
</body>
</html>