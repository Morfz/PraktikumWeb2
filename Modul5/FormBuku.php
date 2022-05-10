<?php 
    require('Model.php');
    if (isset($_GET['id_buku'])) {
        editBuku();
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
    <?php echo (isset($_GET['id_buku']))? "<title>Update Data Buku</title>" : "<title>Tambah Data Buku</title>" ?> 
</head>
<body>
    <div class="container">
    <div class="result">
    <div class="col-md-12 py-3">
                <h1>Perpustakaan</h1>
                <hr>
                <h3>Form Buku</h3>
                <a class="btn btn-danger my-2" href="Buku.php"><i class="fa fa-arresult-left"></i> Kembali</a>
                <p></p>
                    <form action="" method="post">
                            <div class="mb-3">
                                <label for="judul">Judul Buku</label>
                                <input type="text" class="form-control" name="judul" id="judul" <?php echo (isset($_GET['id_buku'])) ?  "value = '" . $result[0]["judul_buku"] . "'" : "value = '' "; ?> placeholder="Masukkan Judul Buku" required>
                            </div>
                            <div class="mb-3">
                                <label for="penulis">Penulis Buku</label>
                                <input type="text" class="form-control" name="penulis" id="penulis" <?php echo (isset($_GET['id_buku']) ) ?  "value = '" . $result[0]["penulis"] . "'" : "value = '' "; ?> placeholder="Masukkan Penulis Buku" required>
                            </div>

                            <div class="mb-3">
                                <label for="penerbit">Penerbit</label>
                                <input class="form-control" name="penerbit" id="penerbit" <?php echo (isset($_GET['id_buku']) ) ?  "value = '" . $result[0]["penerbit"] . "'" : "value = '' "; ?> placeholder="Masukkan Penerbit Buku" required>
                            </div>
                            <div class="mb-3">
                                <label for="thn_terbit">Tahun Terbit</label>
                                <input type="number" class="form-control" name="thn_terbit" id="thn_terbit" <?php echo (isset($_GET['id_buku'])) ?  "value = '" . $result[0]["tahun_terbit"] . "'" : "value = '' "; ?> placeholder="Tanggal Terakhir Bayar" required>
                            </div>
                            <?php
                            if (isset($_GET['id_buku'])) {
                                echo " <button type=\"submit\" name=\"update\" class=\"btn btn-secondary my-2\">Update</button>";
                            } else {
                                echo " <button type=\"submit\" name=\"submit\" class=\"btn btn-primary my-2\">Tambah</button>";
                            }
                            ?>
                        </form>

    <?php
        if (isset($_POST['submit'])) {
            insertBuku($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thn_terbit']);
        }
        if (isset($_POST['update'])) {
            updateBuku($_GET['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thn_terbit']);
        }
    ?>
</body>
</html>