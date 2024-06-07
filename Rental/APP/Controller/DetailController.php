<?php
include '../Model/DetailModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $tglSewa = $_POST["tgl_sewa"];
    $durasi = $_POST["durasi"];
    $supir = $_POST["supir"];
    $carName = $_POST["car_name"];
    $plate = $_POST["plate"];
    $price = $_POST["price"];
    $image = $_POST["image"];

    if (isset($_FILES['ktp']) && isset($_FILES['sim'])) {
        $ktp = $_FILES['ktp'];
        $sim = $_FILES['sim'];

        // Directory where files will be uploaded
        $uploadDir = 'uploads/';

        // Ensure the directory exists
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $ktpPath = $uploadDir . basename($ktp['name']);
        $simPath = $uploadDir . basename($sim['name']);
        
        // Move the uploaded files to the upload directory
        if (move_uploaded_file($ktp['tmp_name'], $ktpPath) && move_uploaded_file($sim['tmp_name'], $simPath)) {
            header("Location:../Views/homepage.php?tgl_sewa=$tglSewa&durasi=$durasi&supir=$supir&car_name=$carName&plate=$plate&price=$price&image=$image&name=$name&email=$email&phone=$phone&address=$address");
            exit; // Ensure no further code is executed after the redirect
        } else {
            echo "Failed to upload files.";
        }
    }
}
?>