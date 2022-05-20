<?php
require("Koneksi.php");
?>
<!DOCTYPE html>
<html>

<head>
    <style>
        h1 {
            text-align: center;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Perpustakaan</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-3">
                <nav class="navbar navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand h1" href="Index.php">Perpustakaan</a>
                        <ul class="nav navbar-nav my-2 my-lg-0">
                            <?php
                            session_start();
                            if (isset($_SESSION['nomor_member'])) :
                            ?>
                                <li>
                                    <?php echo $_SESSION['nomor_member'] ?>
                                    <a class="btn btn-info" href="Logout.php">Logout</a>
                                </li>
                            <?php else : ?>
                                <li><a class="btn btn-primary" href="FormLogin.php">Login</a></li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </nav>
                <div class="text-center" style="padding-bottom: 10px;">
                    <p>
                    <h3>Menu</h3>
                    </p>
                    <p><a class="btn btn-danger" href="Buku.php">Data Buku</a></p>
                    <p><a class="btn btn-warning" href="Member.php">Data Member</a></p>
                    <p><a class="btn btn-success" href="Peminjaman.php">Data Peminjaman</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>