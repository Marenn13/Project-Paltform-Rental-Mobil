<?php
class PembayaranModel {
    // Properties
    public $carName;
    public $plate;
    public $price;
    public $image;
    public $tglSewa;
    public $durasi;
    public $supir;
    public $ktpPath;
    public $simPath;
    public $totalPrice;
    public $payment_method;
    public $transfer_proof;

    // Constructor
    public function __construct($carName, $plate, $price, $image, $tglSewa, $durasi, $supir, $ktpPath, $simPath, $totalPrice, $payment_method, $transfer_proof) {
        $this->carName = $carName;
        $this->plate = $plate;
        $this->price = $price;
        $this->image = $image;
        $this->tglSewa = $tglSewa;
        $this->durasi = $durasi;
        $this->supir = $supir;
        $this->ktpPath = $ktpPath;
        $this->simPath = $simPath;
        $this->totalPrice = $totalPrice;
        $this->payment_method = $payment_method;
        $this->transfer_proof = $transfer_proof;
    }

    // Getter methods
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

    public function getTglSewa() {
        return $this->tglSewa;
    }

    public function getDurasi() {
        return $this->durasi;
    }

    public function getSupir() {
        return $this->supir;
    }

    public function getKtpPath() {
        return $this->ktpPath;
    }

    public function getSimPath() {
        return $this->simPath;
    }

    public function getTotalPrice() {
        return $this->totalPrice;
    }

    public function getpayment_method() {
        return $this->payment_method;
    }

    public function gettransfer_proof() {
        return $this->transfer_proof;
    }

    // Getter method untuk mendapatkan semua atribut sekaligus
    public function getAllAttributes() {
        return [
            'carName' => $this->carName,
            'plate' => $this->plate,
            'price' => $this->price,
            'image' => $this->image,
            'tglSewa' => $this->tglSewa,
            'durasi' => $this->durasi,
            'supir' => $this->supir,
            'ktpPath' => $this->ktpPath,
            'simPath' => $this->simPath,
            'totalPrice' => $this->totalPrice,
            'payment_method' => $this->payment_method,
            'transfer_proof' => $this->transfer_proof
        ];
    }
}
?>