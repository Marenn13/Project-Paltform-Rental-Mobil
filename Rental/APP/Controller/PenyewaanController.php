<?php
include '../Model/PenyewaanModel.php';

class PenyewaanController {
    public function index() {
        // Ambil data dari URL
        $carName = isset($_GET['carName']) ? $_GET['carName'] : 'Tidak diketahui';
        $plate = isset($_GET['plate']) ? $_GET['plate'] : 'Tidak diketahui';
        $price = isset($_GET['price']) ? $_GET['price'] : '0';
        $image = isset($_GET['image']) ? $_GET['image'] : 'no-image.png';

        // Buat objek model
        $carModel = new PenyewaanModel($carName, $plate, $price, $image);
        
        // Panggil view dengan data mobil
          include '../Views/PenyewaanViews.php';
    
        // Redirect ke halaman Pembayaran setelah form disubmit
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            header("Location:../Views/Penyewaan2Views.php");
            exit(); // Penting untuk keluar agar tidak ada output lain setelah redirect
        }
            }
        }

// Panggil method index
$controller = new PenyewaanController();
$controller->index();
?>
