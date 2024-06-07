<?php
session_start();
include "../Model/Koneksi.php";
include "../Model/LoginModel.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" ){
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Create an instance of LoginModel
    $loginModel = new LoginModel($conn);

    // Call the authenticateUser method
    $isAuthenticated = $loginModel->authenticateUser($email, $password);

    // Redirect to appropriate page based on result
    if ($isAuthenticated) {
        $_SESSION['email'] = $email;
        header('Location:../Views/homepage.php');
        exit();
    } else {
        $error = "Login Gagal. Email atau kata sandi salah";
        include "../Views/LoginView.php";
    }
}
?>
