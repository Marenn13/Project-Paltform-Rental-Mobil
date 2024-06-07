<?php
class Penyewaan2Model {
    private $carName;
    private $plate;
    private $price;
    private $image;
    private $tglSewa;
    private $durasi;
    private $supir;
    private $ktpPath;
    private $simPath;
    private $totalPrice;

    public function __construct($carName, $plate, $price, $image, $tglSewa, $durasi, $supir, $ktpPath, $simPath, $totalPrice) {
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
    }

    // Tambahkan getter untuk masing-masing properti jika diperlukan

    public function toArray() {
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
            'totalPrice' => $this->totalPrice
        ];
    }
}
?>
