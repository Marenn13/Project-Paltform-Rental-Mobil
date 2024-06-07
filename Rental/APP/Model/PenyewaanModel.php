<?php
class PenyewaanModel {
    // Buat properties yang dibutuhkan
    public $carName;
    public $plate;
    public $price;
    public $image;

    // Buat constructor untuk inisialisasi objek dengan data mobil
    public function __construct($carName, $plate, $price, $image) {
        $this->carName = $carName;
        $this->plate = $plate;
        $this->price = $price;
        $this->image = $image;
    }

    // Buat method getter untuk mengambil data mobil
    public function getCarName() {
        return $this->carName;
    }

    public function getPlate() {
        return $this->plate;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getImage() {
        return $this->image;
    }
}
?>
