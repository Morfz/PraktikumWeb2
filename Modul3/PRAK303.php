<!DOCTYPE html>
<html>
<head>
    <style>
        .gambar {
            width: 20px;
            height: 20px;
        }
    </style>
    <title>PRAK303</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $btsBawah=$_POST['btsBawah'];
        $btsAtas=$_POST['btsAtas'];
    }
    ?>
    <form method="post" action="">
        Batas Bawah : <input type="number" name="btsBawah" value="<?php echo $btsBawah;?>"><br>
        Batas Atas : <input type="number" name="btsAtas" value="<?php echo $btsAtas;?>"><br>
        <input type="submit" name="submit" value="Cetak"><br>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $i=$btsBawah;
            do{
                if(($i+7)%5==0){
                    echo "<img src='star-images.png' class='gambar'> ";
                    $i++;
                }
                else{
                    echo "$i ";
                    $i++;
                }
            }
            while($i<=$btsAtas);
        }
    ?>
</body>
</html>