<?php
    require('Model.php');
    if (isset($_GET['id_buku'])) {
        deleteBuku($_GET['id_buku']);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
</head>
<body>
    <fieldset>
        <legend><h2>Data Buku</h2></legend>
        <table border='1' cellpadding='10'>
            <tr>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
            <?= getDataBuku() ?>
        </table>
        <br><a href="FormBuku.php"><button>Tambah Data</button></a>
    </fieldset>
</body>
</html>