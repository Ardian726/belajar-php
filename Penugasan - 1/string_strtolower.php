<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP StrtoLower</title>
</head>
<body>
    
    <?php
        // No. 01
        $karakter = "Saat ini Saya Sudah Mencapai Materi php.";
        echo "1. Karakter yang diubah menjadi huruf kecil : " . strtolower($karakter);
        
        echo "\n";

        // No. 02
        $karakter = "Aku telah melalui tahapan BELAJAR php string, sekarang telah mencapai tahapan STRTOLOWER().";
        echo "2. Karakter yang diubah menjadi huruf kecil : " . strtolower($karakter);
    ?>

</body>
</html>