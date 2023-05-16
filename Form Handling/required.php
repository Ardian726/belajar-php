<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
</head>
<body>
    <?php

        //back to null
        $namaLengkap  = '';
        $kelas = '';

        // message error required
        $namaLengkapError  = '';
        $kelasError = '';

        function dataType ($dataKelas)
        {
            $inputData = trim($dataKelas);
            $inputData =  stripslashes($dataKelas);
            $inputData = htmlspecialchars($dataKelas);
            return $inputData;
        }

        if($_SERVER['REQUEST_METHOD'] === "POST") {
            if (empty($_POST['namaLengkap'])) {
                $namaLengkapError = 'Nama lengkap tidak boleh kosong!';
            } else {
                $namaLengkap = dataType($_POST['namaLengkap']);
            }
            if (empty($_POST['kelas'])) {
                $kelasError = "Kelas tidak boleh kosong!";
            } else {
                $kelas = dataType($_POST['kelas']);
            }
        }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div style="margin-bottom: 3px;">
            <label for="namaLengkap">Nama Lengkap</label>
            <input type="text" id="namaLengkap" name="namaLengkap">
            <Span style="color:red; font-size:12px;"><?php echo $namaLengkapError; ?></Span>
        </div>
        <div style="margin-bottom: 3px;">
            <label for="kelas">Kelas</label>
            <input type="number" id="kelas" name="kelas">
            <Span style="color:red; font-size:12px;"><?php echo $kelasError; ?></Span>
        </div>
        <button type="submit">Simpan</button>
    </form>

    <?php
        echo "Nama saya adalah " . $namaLengkap;
        echo "<br>";
        echo "Kelas saya saat ini " . $kelas;
    ?>

    <?php echo "Today is" . date(" D M Y"); ?>
    <?php include './include.php'; ?>
</body>
</html>