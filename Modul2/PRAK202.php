<!DOCTYPE HTML>  
<html>
<head>
  <title>PRAK202</title>
  <style>.error {color: #FF0000;}</style>
</head>
<body>  
<?php
  error_reporting(0);
  $nama=$_POST['nama'];
  $nim=$_POST['nim'];
  $jKelamin=$_POST['jKelamin'];
  $namaErr = $nimErr = $jKelaminErr = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama"])) {
      $namaErr = "nama tidak boleh kosong";
    } 

    if (empty($_POST["nim"])) {
      $nimErr = "nim tidak boleh kosong";
    } 

    if (empty($_POST["jKelamin"])) {
      $jKelaminErr = "jenis kelamin tidak boleh kosong";
    } 
  }
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Nama: <input type="text" name="nama" value="<?php if (isset($nama)) echo $nama;?>">
  <span class="error">* <?php echo $namaErr;?></span><br>
  Nim: <input type="text" name="nim" value="<?php if (isset($nim)) echo $nim;?>">
  <span class="error">* <?php echo $nimErr;?></span><br>
  Jenis Kelamin:<span class="error">* <?php echo $jKelaminErr;?></span><br>
  <input type="radio" name="jKelamin" <?php if (isset($jKelamin) && $jKelamin=="Laki-Laki") echo "checked";?> value="Laki-Laki">Laki-Laki<br>
  <input type="radio" name="jKelamin" <?php if (isset($jKelamin) && $jKelamin=="Perempuan") echo "checked";?> value="Perempuan">Perempuan<br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
  if(isset($_POST['submit'])){
    if($nama != NULL && $nim != NULL && $jKelamin != NULL){
      echo "<h2>Output:</h2>";
        echo "$nama <br> $nim <br> $jKelamin";
    }
  }
?>
</body>
</html>