<?php

$mahasiswa = [

    [
        "nama" => "Muhammad Fauzan Nur",
        "Nrp" => "233040081",
        "email" => "byzad252@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "raze.jpg"
    ],

    [
        "nama" => "Astra",
        "Nrp" => "233040001",
        "email" => "Astra@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "astra.jpg"
    ],

    [
        "nama" => "Cyper",
        "Nrp" => "233040002",
        "email" => "Cyper@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "cyper.jpg"
    ],

    [
        "nama" => "omen",
        "Nrp" => "233040003",
        "email" => "omen@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "omen.jpg"
    ],

    [
        "nama" => "Brimston",
        "Nrp" => "233040004",
        "email" => "Brimston@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "brimston.jpg"
    ],

    [
        "nama" => "Jet",
        "Nrp" => "233040005",
        "email" => "Jet@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "jet.jpg"
    ],

    [
        "nama" => "Neon",
        "Nrp" => "233040006",
        "email" => "Neon@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "neon.jpg"
    ],

    [
        "nama" => "Sova",
        "Nrp" => "233040007",
        "email" => "Sova@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "sova.jpg"
    ],

    [
        "nama" => "Tante Sage",
        "Nrp" => "233040008",
        "email" => "Sage@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "sage.jpg"
    ],

    [
        "nama" => "Yoru",
        "Nrp" => "233040009",
        "email" => "Yoru@gmail.com",
        "jurusan" => "teknik informatika",
        "gambar" => "yoru.jpg"
    ],


];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daptar Mahasiswa</title>
</head>
<body>
    <h1>Daptar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li><img src="img/<?= $mhs["gambar"]?>" alt=""></li>
        <li>Nama : <?= $mhs["nama"]?></li>
        <li>Nrp : <?= $mhs["Nrp"]?></li>
        <li>Email : <?= $mhs["email"]?></li>
        <li>Jurusan : <?= $mhs["jurusan"]?></li>
    </ul>
    <hr>
    <?php endforeach; ?>

</body>
</html>