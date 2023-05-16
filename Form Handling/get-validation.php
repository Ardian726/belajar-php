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
        $namaLengkap  = "";
        $kelas = '';

        if($_SERVER["REQUEST_METHOD"] === "POST") {
            $namaLengkap = dataType($_POST['namaLengkap']);
            $kelas = dataType($_POST['kelas']);
        }

        function dataType($dataKelas)
        {
            $inputData = trim($dataKelas);
            $inputData = stripslashes($dataKelas);
            $inputData = htmlspecialchars($dataKelas);
            return $inputData;
        }
    ?>

    <form action="<?php echo htmlspecialchars($_SEVER['PHP_SELF']); ?>" method="POST">
        <div style="margin-bottom: 3px;">
            <label for="username">Username</label>
            <input type="text" id="username" name="namaLengkap" placeholder="Masukan nama anda" />
        </div>
        <div style="margin-bottom: 3px;">
            <label for="kelas">Kelas</label>
            <input type="number" id="kelas" name="kelas" placeholder="Masukan kelas anda" />
        </div>
        <input type="submit" value="Simpan">
    </form>

    <?php
        echo "<br>";
        echo "Nama lengkap saya " . $namaLengkap;
        echo "<br>";
        echo "Kelas saya " . $kelas;
    ?>
</body>
</html>