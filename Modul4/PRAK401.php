<!DOCTYPE html>
<html>
<head>
    <style>
        table, td {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
    </style>
    <title>PRAK401</title>
</head>
<body>
    <?php
        $panjang= $lebar= $nilai= "";
        if(isset($_POST['submit'])){
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $nilai = $_POST['nilai'];
        }
    ?>

    <form action="" method="post">
        Panjang: <input type="text" name="panjang" value="<?php echo $panjang;?>"><br>
        Lebar: <input type="text" name="lebar" value="<?php echo $lebar;?>"><br>
        Nilai: <input type="text" name="nilai" value="<?php echo $nilai;?>"><br>
        <input type="submit" name="submit" value="Cetak"><br>
    </form>

    <?php
        if(isset($_POST['submit'])){
            $isi=explode(" ", $nilai);
            if($panjang*$lebar==count($isi)){
                $urutan=0;
                for($i=0; $i<$panjang; $i++) { 
                    for($j=0; $j<$lebar; $j++) { 
                        $tampil[$i][$j]=$isi[$urutan];
                        $urutan++;
                    }
                }
                echo "<table>";
                for($i=0; $i<$panjang; $i++) { 
                    echo "<tr>";
                    for($j=0; $j<$lebar; $j++) { 
                        echo "<td>".$tampil[$i][$j]."</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
            else{
                echo "<br> Panjang nilai tidak sesuai dengan ukuran matriks";
            }
        }
    ?>
</body>
</html>