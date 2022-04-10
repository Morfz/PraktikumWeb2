<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302</title>
    <!-- <style>
        .tab {
            width: 20px;
            height: 20px;
        }
    </style> -->
</head>

<body>
    <form action="" method="post">
        Tinggi :<input type="text" name="tinggi"> <br>
        Alamat Gambar : <input type="text" name="url"> <br>
        <input type="submit" value="cetak">

    </form>
    <?php
    $tinggi = $_POST['tinggi'];
    $url = $_POST['url'];

    $a = 1;
    while ($a <= $tinggi) {
        $b = 1;
        while ($b < $a) {
            echo "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;";
            $b++;
        }
        $c = $tinggi;
        while ($c >= $a) {
            echo "<img src='$url'class='tab'>";
            $c--;
        }
        echo '<br>';
        $a++;
    }
    ?>
</body>

</html>