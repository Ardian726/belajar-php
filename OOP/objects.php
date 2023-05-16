<?php
    class dealerCar
    {
        public $nameCar;
        public $capacity;

        function buyCar()
        {
            echo "Mobil tersedia, silahkan beli.";
        }

        function typeCar()
        {
            echo "Tersedia pilihan tipe mobil.";
        }
    }

    $buy = new dealerCar();
    $buy->buyCar();

    // Cara ke-1
    echo "<br>";
    $buy->nameCar = "Honda Civic, ";
    echo "<br>";
    $buy->capacity = 2;
    echo "Berhasil membeli " . $buy->nameCar . 'sebanyak : ' . $buy->capacity;

    // Cara ke-2
    echo "<br>";
    echo "Berhasil membeli " . $buy->nameCar = "Honda Civic, " . 'sebanyak : ' . $buy->capacity = 2;
?>