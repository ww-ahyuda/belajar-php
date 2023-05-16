<?php

class dealercar
{
    public $namecar;
    public $capacity;

    function buyCar()
    {
        echo "mobil tersedia, silahkan beli.";
    }

    function typeCar()
    {
        echo "tersedia pilihan tipe mobil kapasitas mobil.";
    }

}

$buy = new dealercar();
$buy ->buyCar();
echo "<br>";
$buy -> namecar = "Honda civic 2023";
echo "<br>";
$buy -> capacity = 2;
echo "berhasil membeli " . $buy->namecar . ' dengan kapasitas ' . $buy->capacity;

// echo "berhasil membeli " . $buy->namecar = "Honda civic 2023" . ' dengan kapasitas ' . $buy->capacity = 2;
?>