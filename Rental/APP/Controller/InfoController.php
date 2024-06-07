<?php
require_once '../Model/InfoModel.php';

class InfoController {
    public function showCarList() {
        $infoModel = new InfoModel();
        $cars = $infoModel->getCars();
        include "../Views/carlistView.php";
    }

    public function redirectToPenyewaan($carName, $plate, $price, $image) {
        // Arahkan ke controller PenyewaanController dengan parameter
        header("Location: ../Controller/PenyewaanController.php?carName=$carName&plate=$plate&price=$price&image=$image");
        exit();
    }
}

// Tangani parameter 'action'
if (isset($_GET['action']) && $_GET['action'] === 'penyewaan') {
    $controller = new InfoController();
    $controller->redirectToPenyewaan($_GET['carName'], $_GET['plate'], $_GET['price'], $_GET['image']);
} else {
    $controller = new InfoController();
    $controller->showCarList();
}
?>
