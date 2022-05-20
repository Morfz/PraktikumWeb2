<?php
require('Model.php');
if (isset($_GET['id_peminjaman'])) {
    deletePeminjaman($_GET['id_peminjaman']);
}
?>

<?php
session_start();
if (isset($_SESSION['nomor_member'])) :
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
        <title>Data Peminjaman</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-3">
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand h1" href="Index.php">Perpustakaan</a>
                            <ul class="nav navbar-nav my-2 my-lg-0">
                                <li>
                                    <?php echo $_SESSION['nomor_member'] ?>
                                    <a class="btn btn-info" href="Logout.php">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <p>
                    <h3>Data Peminjaman</h3>
                    </p>
                    <a class="btn btn-secondary my-1" href='index.php'><i class=" fa fa-home"></i>Kembali</a>
                    <a class="btn btn-dark my-1" href='FormPeminjaman.php'><i class=" fa fa-user-plus"></i>Tambah Data</a>
                    <p></p>
                    <table class="table table-hover">
                        <thead class="table-light">
                            <tr>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?= getDataPeminjaman() ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>

    </html>

<?php
else :
    header("location:ErrorPage.php");
endif;
?>