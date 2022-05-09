<?php
    require('Model.php');
    if (isset($_GET['id_member'])) {
        deleteMember($_GET['id_member']);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Member</title>
</head>
<body>
    <fieldset>
        <legend><h2>Data Member</h2></legend>
        <table border='1' cellpadding='10'>
            <tr>
                <th>Nama Member</th>
                <th>Nomor Member</th>
                <th>Alamat</th>
                <th>Tanggal Mendaftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Aksi</th>
            </tr>
            <?= getDataMember() ?>
        </table>
        <br><a href="FormMember.php"><button>Tambah Data</button></a>
    </fieldset>
</body>
</html>