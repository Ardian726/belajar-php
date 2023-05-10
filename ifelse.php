<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP If else</title>
</head>
<body>
    
    <?php
        // Nilai
        $nilai = 78;

        if($nilai <= 74) {
            echo "Kamu di bawah KKM";
        } if($nilai = 100) {
            echo "Nilai kamu SEMPURNA";
        } else {
            echo "Kamu sudah di atas KKM";
        }

        echo "<br>";

        // Waktu
        $waktu = 10;
        
        if($waktu <= 10) {
            echo "Selmat Pagi";
        } else {
            echo "Selamat Siang";
        }

        // elseif

        $nilaiTugas = 80;

        if($nilaiTugas >= 90) {
            echo "Selamat, kamu nilainya bagus! (A)";
        } elseif ($nilaiTugas >= 85) {
            echo "Selamat, nilai kamu cukup bagus! (-A)";
        } elseif ($nilaiTugas >= 80) {
            echo "Selamat, niali kamu bagus! (B)";
        } elseif ($nilaiTugas >= 75) {
            echo "Selamat, nilai kamu kurang bagus! (C)";
        } else {
            echo "Selamat, kamu remedial";
        }

        // Switch

        $hari = "Senin";
        switch ($hari) {
            case 'Senin':
                echo "Hari ini adalah hari Senin";
                break;
            case 'Selasa' :
                echo "Hari ini adalah hari selasa";
                break;
            case 'Rabu' :
                echo "Hari ini adalah hari Rabu";
                break;
            case 'Kamis' :
                echo "Hari ini adalah hari Kamis";
                break;
            case 'Jumat' :
                echo "Hari ini adalah hari Jumat";
                break;
            default:
                echo "Hari weekend libur! Jangan ganggu!";
                break;
        }
        ?>

</body>
</html>