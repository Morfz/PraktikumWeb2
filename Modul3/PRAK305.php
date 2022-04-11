<!DOCTYPE html>
<html>
<head>
    <title>PRAK305</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="input">
        <input type="submit" name="submit" value="Submit"><br>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $input=$_POST['input'];
            echo "<h3>Input</h3>$input";
            echo "<h3>Output</h3>";
            $pnjng = strlen($input);
            $teks = str_split($input);

            $j=0;
            for($k=0; $k<$pnjng; $k++){
                echo strtoupper($teks[$j]);
                for($i=1; $i<$pnjng; $i++){
                    echo strtolower($teks[$j]);
                }
                $j++;
            }
        }
    ?>
</body>
</html>