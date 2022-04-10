<!DOCTYPE html>
<html>
<head>
    <title>PRAK201</title>
</head>
<body>
    <?php
        error_reporting(0);
        $nama1=$_POST['nama1'];
        $nama2=$_POST['nama2'];
        $nama3=$_POST['nama3'];
    ?>

    <form action="" method="post">
        Nama: 1 <input type="text" name="nama1" value="<?php if (isset($nama1)) echo $nama1;?>"><br>
        Nama: 2 <input type="text" name="nama2" value="<?php if (isset($nama2)) echo $nama2;?>"><br>
        Nama: 3 <input type="text" name="nama3" value="<?php if (isset($nama3)) echo $nama3;?>"><br>
        <input type="submit" name="submit" value="Urutkan">
    </form>
    
    <?php
        if(isset($_POST['submit'])){
            if($nama1 != NULL && $nama2 != NULL && $nama3 != NULL){
                echo "<h2>Output:</h2>";
                if(($nama1 < $nama2) && ($nama1 < $nama3)){
                    if($nama2<$nama3){
                        echo "$nama1 <br> $nama2 <br> $nama3";
                    }
                    else {
                        echo "$nama1 <br> $nama3 <br> $nama2";
                    }
                }
                else if(($nama2 < $nama1) && ($nama2 < $nama3)){
                    if($nama1<$nama3){
                        echo "$nama2 <br> $nama1 <br> $nama3";
                    }
                    else {
                        echo "$nama2 <br> $nama3 <br> $nama1";
                    }
                }
                else if(($nama3 < $nama1) && ($nama3 < $nama2)){
                    if($nama1<$nama2){
                        echo "$nama3 <br> $nama1 <br> $nama2";
                    }
                    else {
                        echo "$nama3 <br> $nama2 <br> $nama1";
                    }
                }
            }
        }
    ?>
</body>
</html>