<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penugasan PHP StrtoUpper</title>
</head>
<body>
    
    <?php
        // No. 01
        $karakter = "Saat ini saya sudah mencapai materi php.";
        echo "1. Karakter yang diubah menjadi huruf besar : " . strtoupper($karakter);
        
        echo "\n";

        // No.02
        $karakter = "Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan strtoupper().";
        echo "2. Karakter yang diubah menjadi huruf besar : " . strtoupper($karakter);
        echo "\n";
    ?>

</body>
</html>