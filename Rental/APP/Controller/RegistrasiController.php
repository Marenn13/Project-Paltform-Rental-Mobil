<?php
session_start();
include "../Model/Koneksi.php";
include "../Model/RegistrasiModel.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Create an instance of RegistrasiModel
    $registrasiModel = new RegistrasiModel($conn);

    // Call the registerUser method
    $result = $registrasiModel->registerUser($nama_depan, $nama_belakang, $email, $password);

    // Redirect to appropriate page based on result
    if ($result === "Registrasi berhasil.") {
        header('Location:../Views/LoginView.php');
        exit();
    } else {
        $error = $result;
    }
}
?>
