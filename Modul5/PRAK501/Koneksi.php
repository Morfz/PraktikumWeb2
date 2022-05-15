<?php
    function koneksi(){
        $host="localhost";
        $database="perpustakaan";
        $user="root";
        $pass="";
        try{
            $koneksi = new PDO("mysql:host=$host;dbname=$database","$user","$pass");
            // $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "<p>Koneksi Sukses</p>";
        }catch(PDOException $e){
            echo "Koneksi Gagal <br/>".$e->getMessage();
        }
        return $koneksi;
    }
?>