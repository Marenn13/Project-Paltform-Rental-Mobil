<?php
include '../Model/PembayaranModel.php';

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
    $payment= $_POST["payment_method"];

    $ktp = $_FILES['ktp'];
    $sim = $_FILES['sim'];
    $tf = $_FILES['tf'];


        
        $uploadDir = 'uploads/';

        // Create the directory if it doesn't exist
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }       

    // Move uploaded files to the upload directory
    $ktpPath = $uploadDir . basename($ktp['name']);
    $simPath = $uploadDir . basename($sim['name']);
    $tfPath = $uploadDir . basename($tf['name']);
    
    header("Location: ../Views/DetailView.php?tgl_sewa=$tglSewa&durasi=$durasi&supir=$supir&car_name=$carName&plate=$plate&price=$price&image=$image&name=$name&email=$email&phone=$phone&address=$address");

}
?>