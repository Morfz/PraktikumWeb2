<?php
require('Model.php');
if (isset($_GET['id_member'])) {
    editMember();
}

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
        <?php echo (isset($_GET['id_member'])) ? "<title>Update Data Member</title>" : "<title>Tambah Data Member</title>" ?>
    </head>

    <body>
        <div class="container">
            <div class="result">
                <div class="col-md-12 py-3">
                    <h1>Perpustakaan</h1>
                    <hr>
                    <h3>Form Member</h3>
                    <a class="btn btn-secondary my-1" href='Member.php'><i class=" fa fa-home"></i>Kembali</a>
                    <p></p>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="nama_member">Nama Member</label>
                            <input type="text" class="form-control" name="nama_member" id="nama_member" <?php echo (isset($_GET['id_member'])) ?  "value = '" . $result[0]["nama_member"] . "'" : "value = '' "; ?> placeholder="Nama Member" required>
                        </div>
                        <div class="mb-3">
                            <label for="nomor_member">Nomor Member</label>
                            <input type="text" class="form-control" name="nomor_member" id="nomor_member" <?php echo (isset($_GET['id_member'])) ?  "value = '" . $result[0]["nomor_member"] . "'" : "value = '' "; ?> placeholder="Nomor Member" required>
                        </div>
                        <div class="mb-3">
                            <label for="nomor_member">Password</label>
                            <input type="password" class="form-control" name="password" id="password" value ="" placeholder="Password" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" results="3" required><?php echo (isset($_GET['id_member'])) ? $result[0]["alamat"] : ""; ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tgl_mendaftar">Tanggal Mendaftar</label>
                            <input type="datetime-local" class="form-control" name="tgl_mendaftar" id="tgl_mendaftar" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["tgl_mendaftar"] . "" : "value = '' "; ?> placeholder="Tanggal Mendaftar" required>
                        </div>
                        <div class="mb-3">
                            <label for="tgTerakhirBayar">Tanggal Terakhir Bayar</label>
                            <input type="date" class="form-control" name="tgl_terakhir_bayar" id="tgl_terakhir_bayar" <?php echo (isset($_GET['id_member'])) ?  "value = '" . $result[0]["tgl_terakhir_bayar"] . "'" : "value = '' "; ?> placeholder="Tanggal Terakhir Bayar" required>
                        </div>
                        <?php
                        if (isset($_GET['id_member'])) {
                            echo " <button type=\"submit\" name=\"update\" class=\"btn btn-primary my-2\">Update</button>";
                        } else {
                            echo " <button type=\"submit\" name=\"submit\" class=\"btn btn-primary my-2\">Tambah</button>";
                        }
                        ?>
                    </form>

                    <?php
                    if (isset($_POST['submit'])) {
                        // $tgl_daftar = date_create($_POST['tgl_mendaftar']);
                        // $tgl_daftar = date_format($tgl_daftar,"Y-m-d H:i:s");
                        insertMember($_POST['nama_member'], $_POST['nomor_member'], md5($_POST['password']), $_POST['alamat'], $_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
                    }
                    if (isset($_POST['update'])) {
                        // $tgl_daftar = date_create($_POST['tgl_daftar']);
                        // $tgl_daftar = date_format($tgl_daftar,"Y-m-d H:i:s");
                        $tgl_daftar = date('Y-m-d H:i:s', strtotime($_POST['tgl_mendaftar']));
                        updateMember($_GET['id_member'], $_POST['nama_member'], $_POST['nomor_member'], md5($_POST['password']), $_POST['alamat'], $_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
                    }

                    ?>
    </body>

    </html>
<?php
else :
    header("location:ErrorPage.php");
endif;
?>