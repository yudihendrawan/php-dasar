<?php 
$nama = "Yudi Ganteng";
$namaBelakang = "Sekali";
//aritmatika
//ada + - / * %

$a = 10;
$b = 10;
$c = $a + $b;
$d = $a * $b;

//operator assigment -> untuk menggabungkan string
//menggunakan simbol titik (. )
// echo $nama . " " . $namaBelakang;

//operator perbandingan: mengecek nilainya saja, tidak melihat tipe datanya sama apa tidak, contohnya var_dump yang ke dua dibawah
// <, >, <=, >=, ==, !=
// var_dump(1 < 2);
// var_dump(1 == "1");

//identitas: mengecek juga type datanya, jika tipe data beda dan nilainya sama maka dianggap tidak sama
// ===, !==
// var_dump(1 === "1");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 2</title>
</head>
<body>
    <h1>Hallo, <?php echo $nama; ?></h1>
    <p>Penjumlahan <?php echo $a . " + " . $b . " = " . $c ?></p>
    <p>Perkalian <?php echo $a . " x " . $b . " = " . $d ?></p>
</body>
</html>
