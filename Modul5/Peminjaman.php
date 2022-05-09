<?php
    require('Model.php');
    if (isset($_GET['id_peminjaman'])) {
        deletePeminjaman($_GET['id_peminjaman']);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman</title>
</head>
<body>
    <fieldset>
        <legend><h2>Data Peminjaman</h2></legend>
        <table border='1' cellpadding='10'>
            <tr>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
            <?= getDataPeminjaman() ?>
        </table>
        <br><a href="FormPeminjaman.php"><button>Tambah Data</button></a>
    </fieldset>
</body>
</html>