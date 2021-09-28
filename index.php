<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar php</title>
</head>
<style>
    table {
        margin-top: 20px;
    }

    table th {
        padding: 10px 15px;
        text-transform: capitalize;
    }

    table td {
        padding: 6px;
    }
</style>
<?php
// menghitung luas persegi
$sisi1 = 20;
$sisi2 = 30;
$luasPersegi = $sisi1 * $sisi2;

// menghitung luas segitiga
$alas = 30;
$tinggi = 10;
define("seperdua", 1 / 2);
$luasSegitiga = seperdua * $alas * $tinggi;

// menghitung luas trapesium
$sisiA = 10;
$sisiB = 10;
$tinggiTrapesium = 20;
$luasTrapesium = seperdua * ($sisiA + $sisiB) * $tinggiTrapesium;

// menhitumg luas lingkaran
define("PHI", 3.14);
$r = 10;
$luasLingkaran = PHI * $r * $r;

//menghitung luas permukaan tabung
$tinggiTabung = 20;
$rTabung = 10;
$luasPermukaanTabung = 2 * PHI * $rTabung * ($rTabung + $tinggiTabung);

?>

<body>
    <table border="2" align="center">
        <tr>
            <th>luas persegi</th>
            <th>luas segitiga</th>
            <th>luas trapesium</th>
            <th>luas lingkaran</th>
            <th>luas permukaan tabung</th>
        </tr>
        <tr align="center">
            <td><?= $luasPersegi; ?></td>
            <td><?= $luasSegitiga; ?></td>
            <td><?= $luasTrapesium; ?></td>
            <td><?= $luasLingkaran; ?></td>
            <td><?= $luasPermukaanTabung; ?></td>
        </tr>
    </table>

</body>

</html>