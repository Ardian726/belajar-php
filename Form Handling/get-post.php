<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
</head>
<body>
    <!-- Metode Get -->
    <!-- <form action="./get-data.php" method="get">
        <div style="margin-bottom: 3px;">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukan nama anda" />
        </div>
        <div style="margin-bottom: 3px;">
            <label for="kelas">Kelas</label>
            <input type="number" id="kelas" name="kelas" placeholder="Masukan nama anda" />
        </div>
        <input type="submit" value="Simpan">
    </form> -->

    <!-- Metode POST -->
    <form action="./get-data.php" method="post">
        <div style="margin-bottom: 3px;">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukan nama anda" />
        </div>
        <div style="margin-bottom: 3px;">
            <label for="kelas">Kelas</label>
            <input type="number" id="kelas" name="kelas" placeholder="Masukan nama anda" />
        </div>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>