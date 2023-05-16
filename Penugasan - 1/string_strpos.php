<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penugasan PHP StrPos</title>
</head>
<body>
    
    <?php
        // No.01
        $strPos = "Saat ini saya sudah mencapai materi PHP.";
        $strPosBerhasil = "PHP";
        $strPosTidakBerhasil = "JAVASCRIPT";
        echo "1. A. StrPos berhasil : " . strpos($strPos, $strPosBerhasil);
        echo "\n";
        echo "B. StrPos tidak berhasil : " . strpos($strPos, $strPosTidakBerhasil);
        
        echo "\n";

        // No.02
        $strPos = "Aku telah melalui tahapan belajar php string, sekarang telah mencapai tahapan strpos.";
        $strPosBerhasil = "belajar php string";
        $strPosTidakBerhasil = "strlen";
        echo "2. A. StrPos berhasil : " . strpos($strPos, $strPosBerhasil);
        echo "\n";
        echo "B. StrPos tidak berhasil : " . strpos($strPos, $strPosTidakBerhasil);
    ?>

</body>
</html>