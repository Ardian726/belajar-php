<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP SubStr</title>
</head>
<body>
    
    <?php
        // No.01
        $karakter = "Saat ini saya sudah mencapai materi php.";
        echo "1. Karakter yang diambil : " . substr($karakter, 0, 10);
        
        echo "\n";

        // No.02
        $karakter = "Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan substr.";
        echo "2. Karakter yang diambil : " . substr($karakter, 3, 20);
    ?>

</body>
</html>