<?php
class InfoModel {
    private $cars = [
        ["Toyota Innova", "AB 2258 IH", 670000, "../images/INNOVA.png"],
        ["Mitsubisi Xpander", "AB 6857 KL", 570000, "../images/XPANDER.png"],
        ["Honda Mobilio 2014", "AB 1376 CE", 300000, "../images/MOBILIO.png"],
        ["Toyota Rush", "AA 6680 K", 300000, "../images/RUSH.png"],
        ["New Honda Jazz", "AB 9090 YQ", 290000, "../images/JAZZ.png"],
        ["Daihatsu Terios 2018", "AB 2124 UQ", 350000, "../images/TERIOS.png"],
        ["Toyota Xenia", "AB 1012 MW", 225000, "../images/avanzaa.png"],
        ["Toyota Sigra", "AB 9112 LO", 225000, "../images/SIGRA.png"],
    ];

    public function getCars() {
        return $this->cars;
    }
}
?>
