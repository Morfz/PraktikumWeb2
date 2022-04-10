<!DOCTYPE html>
<html>
<head>
    <title>PRAK301</title>
</head>
<body>
    <?php
        error_reporting(0);
        $jumlah=$_POST['jumlah'];
        $i=1;
    ?>
    <form method="post" action="">
        Nilai : <input type="number" name="jumlah" value="<?php echo $jumlah;?>"><br>
        <input type="submit" name="submit" value="Cetak">
    </form>
    <?php
        if(isset($_POST['submit'])){
            while($i<=$jumlah){
                if($i%2==1){
                    echo("<h2><font color=red>Peserta ke-$i</font><br>");
                    $i++;
                }
                else if($i%2==0){
                    echo("<h2><font color=green>Peserta ke-$i</font><br>");
                    $i++;
                }
            }
        }
    ?>
</body>
</html>