<!DOCTYPE html>
<html>
<head>
    <title>PRAK204</title>
</head>
<body>
    <?php
    error_reporting(0);
        $nilai=$_POST['nilai'];
    ?>
    <form method="post" action="">
        Nilai : <input type="number" name="nilai" value="<?php echo $nilai;?>"><br>
        <input type="submit" name="submit" value="Konversi">
</form>
<?php
    if(isset($_POST['submit'])){
        if($nilai==0){
            echo ("<h2>Hasil: Nol");
        }
        else if($nilai>0 && $nilai<10){
            echo ("<h2>Hasil: Satuan</h2>");
        }
        else if($nilai>10 && $nilai<20){
            echo ("<h2>Hasil: Belasan</h2>");
        }
        else if($nilai==10 || $nilai>=20 && $nilai <100){
            echo ("<h2>Hasil: Puluhan</h2>");
        }
        else if($nilai>=100 && $nilai<1000){
            echo ("<h2>Hasil: Ratusan</h2>");
        }
        else{
            echo ("<h2>Hasil: Anda menginput melebihi limit bilangan</h2>");
        }
    }
        ?>
</body>
</html>