<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = (int)$_POST["nilai"];
    }
    if (isset($_POST['tambah'])) {
        $nilai += 1;
    }

    if (isset($_POST['kurang'])) {
        $nilai -= 1;
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>PRAK304</title>
    <style>
        .gambar {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <?php
    if (empty($nilai)) : ?>
        <form action="" method="post">
            Jumlah Bintang <input type="text" name="nilai">
            <br><input type="submit" name="submit" value="Submit">
        </form>

    <?php
    endif;
    if (!empty($nilai)) : 
    ?>
        jumlah bintang <?= $nilai; ?>

        <br>
        <?php
        for ($i = 0; $i < $nilai; $i++) {
            echo "<img src='star-images.png' class='gambar'>";
        }
        ?>
        <form action="" method="post">
            <input type="text" name="nilai" value="<?= $nilai ?>" hidden>
            <input type="submit" name="tambah" value="Tambah">
            <input type="submit" name="kurang" value="Kurang">
        </form>


    <?php endif; ?>
</body>

</html>