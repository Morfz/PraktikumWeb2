<?php
require("Koneksi.php");
 
function Login($nomor_member, $password){
    session_start();
    $statement = koneksi()->prepare('SELECT * FROM member WHERE nomor_member="'.$nomor_member.'" AND password="'.$password.'"');
    $statement->execute();
    $result = $statement->rowCount();
    if ($result > 0) {
        $_SESSION['nomor_member'] = $_POST['nomor_member'];
        header("Location: Index.php");
    } else {
        echo "<script>alert('Nomor Member atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>