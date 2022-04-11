<!DOCTYPE html>
<html>
<head>
    <title>PRAK302</title>
    <style type="text/css">
        img {
            width : 20px;
            height : 20px;
        }
        td {
            float : right;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $tinggi = $_POST['tinggi'];
            $url = $_POST['url'];
        }
    ?>
    <form action="" method="post">
        Tinggi :<input type="text" name="tinggi" value="<?php echo $tinggi;?>"> <br>
        Alamat Gambar : <input type="text" name="url" value="<?php echo $url;?>"> <br>
        <input type="submit" name="submit" value="Cetak"><br><br>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $i=0;
        echo "<table>";
        while ($tinggi > $i){
            $j = 0;
            echo "<tr><td>";
            while ($j < $tinggi){
                echo "<img src='$url'>";
                $j ++;
            }
            echo "</td></tr>";
            $tinggi --;
            }
        echo "</table>";
    }
    ?>
</body>
</html>