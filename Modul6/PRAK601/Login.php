<?php 
include_once 'Koneksi.php'; 

if(isset($_SESSION['nomor_member'] )== true) {
    header('Location: Index.php');
}

if(isset($_POST['login'])) {
    $nomor_member = $_POST['nomor_member'];
    $password = $_POST['password'];

    try {
        $sql = "SELECT * FROM member WHERE nomor_member = :nomor_member AND password = :password"; 
        $stmt = koneksi()->prepare($sql); 
        $stmt->bindParam(':nomor_member', $nomor_member);
        $stmt->bindParam(':password', $password);
        $stmt->execute(); 

        $count = $stmt->rowCount();
        if($count == 1) { 
            $_SESSION['nomor_member'] = $nomor_member;
            echo "<script>alert('Login Berhasil!');
            window.location='Index.php';</script>";
            return;
        }else{
            echo "<script>alert('Login Gagal, Silakan Coba Kembali!');
			window.location='FormLogin.php';</script>";
        }
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
}