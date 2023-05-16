<?php
    // json encode
    $kelas = array (
        // 'key' => 'value'
        'x' => 'Kelas X',
        'xi' => 'Kelas XI',
        'xii' => 'Kelas XII',
        'xiii' => 'Kelas XIII',
    );

    echo json_encode($kelas['x']);

    echo "<br>";

    // Menggunakan foreach untuk perulangan data kelas array
    foreach ($kelas as $array) {
        echo $array . "<br>";
    }

    echo "<br>";

    $kelasDecode = '{"x" : 1, "xi" : 2, "xii" : 3}';

    $object = json_decode($kelasDecode);
    
?>