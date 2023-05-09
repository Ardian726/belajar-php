<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penugasan PHP Implode</title>
</head>
<body>
    
    <?php
        // No. 01
        $arrayTampung = array("Bintang", "Arya", "Arif", "Syahru");
        $implode = implode(" / ", $arrayTampung);
        echo "1. Kelompok : " . $implode;
        
        echo "\n";

        // No. 02
        $arrayTampung = array("HTML", "CSS", "JAVASCRIPT", "PHP");
        $implode = implode(" - ", $arrayTampung);
        echo "2. Bahasa pemograman : " . $implode;
    ?>

</body>
</html>