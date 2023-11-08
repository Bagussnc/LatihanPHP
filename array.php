<?php

//cara lama
$hari = array("senin", "selasa", "rabu");

//cara baru
$abian = ["rabu", "juni", 30, true];

//menampilkan array
var_dump($abian);
echo "<br><br>";

//menampilkan satu elemen 
echo $abian[1];
echo "<br><br>";

//menampilkan elemen baru
$hari[] = "kamis";
$hari[] = "jumat";
var_dump($hari);
echo "<br><br>";

//menampilkan semua array ke user
foreach ($hari as $h) {
    echo "$h <br><br>";
}

//array asosiatif
$siswa = [
    'nama' => 'abian',
    'umur' => 17,
    'email' => 'abian@gmail.com'
];

echo $siswa['email'] . '<br><br>';

foreach ($siswa as $s) {
    echo "$s <br><br>";
}

//multiple array
$ahmad = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

echo $ahmad[2][0] . "<br><br>";

foreach ($ahmad as $z) {
    //cara pertama 
    echo $z[0] . "<br>";
    echo $z[1] . "<br>";
    echo $z[2] . "<br>";
    //cara kedua
    foreach ($z as $v) {
        echo $v . "<br>";
    }
    echo "<br>";
}

//latihan 2

$siswa = [
    ['nama' => 'abian', 'umur' => 17, 'hobi' => 'futsal'],
    ['nama' => 'zidan', 'umur' => 17, 'hobi' => 'voli'],
    ['nama' => 'toni', 'umur' => 17, 'hobi' => 'nari']
];

foreach ($siswa as $r) {

    echo "Nama: " . $r['nama'] . "<br>" . "Umur: " . $r['umur'] . "<br>" . "Hobi: " . $r['hobi'] . "<br>" . "<br><br>";
}




?>

<?php
$angka = [1, 2, 3, 4, 5];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php for ($i = 0; $i < count($angka); $i++) : ?>
        <div class="kotak">
            <?= $angka[$i]; ?>
        </div>
    <?php
    endfor;
    ?>
    <div class="clear"></div>

    <?php foreach ($angka as $a) : ?>
        <div class="kotak">
            <?= $a; ?>
        </div>
    <?php endforeach; ?>
</body>

</html>