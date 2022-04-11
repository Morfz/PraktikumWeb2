<!DOCTYPE html>
<html>
<head>
    <title>PRAK302</title>
    <style type="text/css">
        img {
            width : 16px;
            height : 16px;
        }
        td {
            float : right;
        }
    </style>
</head>
<body>
    <?php
        error_reporting(0);
        $tinggi = $_POST['tinggi'];
        $url = $_POST['url'];
    ?>
    <form action="" method="post">
        Tinggi :<input type="text" name="tinggi"> <br>
        Alamat Gambar : <input type="text" name="url"> <br>
        <input type="submit" name="submit" value="Cetak">
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