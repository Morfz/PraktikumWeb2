<!DOCTYPE html>
<html>
<head>
    <title>PRAK203</title>
</head>
<body>
    <?php
        error_reporting(0);
        $nilai=$_POST['nilai'];
        $suhuAwal=$_POST['suhuAwal'];
        $suhuAkhir=$_POST['suhuAkhir'];
    ?>

    <form method="post" action="">
        Nilai: <input type="number" name="nilai" value="<?php if (isset($nilai)) echo $nilai;?>"><br>
        Dari:<br>
        <input type="radio" name="suhuAwal" <?php if (isset($suhuAwal) && $suhuAwal=="Celsius") echo "checked";?> value="Celsius">Celsius<br>
        <input type="radio" name="suhuAwal" <?php if (isset($suhuAwal) && $suhuAwal=="Fahrenheit") echo "checked";?> value="Fahrenheit">Fahrenheit<br>
        <input type="radio" name="suhuAwal" <?php if (isset($suhuAwal) && $suhuAwal=="Rheamur") echo "checked";?> value="Rheamur">Rheamur<br>
        <input type="radio" name="suhuAwal" <?php if (isset($suhuAwal) && $suhuAwal=="Kelvin") echo "checked";?> value="Kelvin">Kelvin<br>
        Ke:<br>
        <input type="radio" name="suhuAkhir" <?php if (isset($suhuAkhir) && $suhuAkhir=="Celsius") echo "checked";?> value="Celsius">Celsius<br>
        <input type="radio" name="suhuAkhir" <?php if (isset($suhuAkhir) && $suhuAkhir=="Fahrenheit") echo "checked";?> value="Fahrenheit">Fahrenheit<br>
        <input type="radio" name="suhuAkhir" <?php if (isset($suhuAkhir) && $suhuAkhir=="Rheamur") echo "checked";?> value="Rheamur">Rheamur<br>
        <input type="radio" name="suhuAkhir" <?php if (isset($suhuAkhir) && $suhuAkhir=="Kelvin") echo "checked";?> value="Kelvin">Kelvin<br>
        <input type="submit" name="submit" value="Konversi"> 
    </form>

    <?php
        if(isset($_POST['submit'])){
            if($nilai != NULL){
                if($suhuAwal=="Celsius" && $suhuAkhir=="Celsius"){
                    echo ("<h2>Hasil Konversi: $nilai &degC</h2>");
                }  
                if($suhuAwal=="Fahrenheit" && $suhuAkhir=="Fahrenheit"){
                    echo ("<h2>Hasil Konversi: $nilai &degF</h2>");
                }  
                if($suhuAwal=="Rheamur" && $suhuAkhir=="Rheamur"){
                    echo ("<h2>Hasil Konversi: $nilai &degR</h2>");
                }  
                if($suhuAwal=="Kelvin" && $suhuAkhir=="Kelvin"){
                    echo ("<h2>Hasil Konversi: $nilai K</h2>");
                }  
                if($suhuAwal=="Celsius" && $suhuAkhir=="Fahrenheit"){
                    $nilaiAkhir=(9/5*$nilai)+32;
                    echo ("<h2>Hasil Konversi: $nilaiAkhir &degF</h2>");
                }  
                if($suhuAwal=="Celsius" && $suhuAkhir=="Rheamur"){
                    $nilaiAkhir=4/5*$nilai;
                    echo ("<h2>Hasil Konversi: $nilaiAkhir &degR</h2>");
                } 
                if($suhuAwal=="Celsius" && $suhuAkhir=="Kelvin"){
                    $nilaiAkhir=273+$nilai;
                    echo ("<h2>Hasil Konversi: $nilaiAkhir K</h2>");
                } 
                if($suhuAwal=="Fahrenheit" && $suhuAkhir=="Celsius"){
                    $nilaiAkhir=($nilai-32)*5/9;
                    echo ("<h2>Hasil Konversi: $nilaiAkhir &degC</h2>");
                }  
                if($suhuAwal=="Fahrenheit" && $suhuAkhir=="Rheamur"){
                    $nilaiAkhir=($nilai-32)*4/9;
                    echo ("<h2>Hasil Konversi: $nilaiAkhir &degR</h2>");
                }  
                if($suhuAwal=="Fahrenheit" && $suhuAkhir=="Kelvin"){
                    $nilaiAkhir=($nilai-32)*5/9+273;
                    echo ("<h2>Hasil Konversi: $nilaiAkhir K</h2>");
                }  
                if($suhuAwal=="Rheamur" && $suhuAkhir=="Celsius"){
                    $nilaiAkhir=$nilai*5/4;
                    echo ("<h2>Hasil Konversi: $nilaiAkhir &degC</h2>");
                }  
                if($suhuAwal=="Rheamur" && $suhuAkhir=="Fahrenheit"){
                    $nilaiAkhir=($nilai*9/4)+32;
                    echo ("<h2>Hasil Konversi: $nilaiAkhir &degF</h2>");
                }  
                if($suhuAwal=="Rheamur" && $suhuAkhir=="Kelvin"){
                    $nilaiAkhir=($nilai*5/4)+273;
                    echo ("<h2>Hasil Konversi: $nilaiAkhir K</h2>");
                }  
                if($suhuAwal=="Kelvin" && $suhuAkhir=="Celsius"){
                    $nilaiAkhir=$nilai-273;
                    echo ("<h2>Hasil Konversi: $nilaiAkhir &degC</h2>");
                } 
                if($suhuAwal=="Kelvin" && $suhuAkhir=="Fahrenheit"){
                    $nilaiAkhir=($nilai-273)*9/5+32;
                    echo ("<h2>Hasil Konversi: $nilaiAkhir &degF</h2>");
                }
                if($suhuAwal=="Kelvin" && $suhuAkhir=="Rheamur"){
                    $nilaiAkhir=($nilai-273)*4/5;
                    echo ("<h2>Hasil Konversi: $nilaiAkhir &degR</h2>");
                } 
            }
        }
    ?>
</body>
</html>