<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP StrtoUpper</title>
</head>
<body>
    
    <?php
        // No. 01
        $stringTunggal = "Bintang, Arya, Arif, Syahru";
        $explode = explode(",", $stringTunggal);
        print_r($explode);

        echo "\n";

        //No. 02
        $stringTunggal = "HTML-CSS-JAVASCRIPT-PHP";
        $explode = explode("-", $stringTunggal);
        print_r($explode);
    ?>

</body>
</html>