<?php
// $mahasiswa = [
// ["Sandhika Galih", "043040023", "sandhikagalih@unpas.ac.id", "Teknik Informatika"],
// ["033040001", "Doddy Ferdiansyah", "doddy@gmail.com", "Teknik Industri"]
// ];

$mahasiswa = [
    [
        "nrp" => "043040023",
        "nama" => "sandhika galih",
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik informatika",
        "gambar" => "sandhika.jpg"
    ],
    [
        "nama" => "Doddy Ferdiansyah",
        "nrp" => "033040001",
        "email" => "doddy@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "doddy.png"
    ],
    [
        "nrp" => "243040093",
        "nama" => "akbar putra pamungkas",
        "email" => "akbar@gmail.com",
        "jurusan" => "Teknik informatika",
        "gambar" => "akbar.jpg"
    ],
    [
        "nrp" => "243040077",
        "nama" => "yaiza ananda",
        "email" => "yaiza@gmail.com",
        "jurusan" => "Teknik informatika",
        "gambar" => "yaiza.jpg"
    ],
    [
        "nrp" => "243040087",
        "nama" => "muhammad farel triputra alfarizqi",
        "email" => "farel@gmail.com",
        "jurusan" => "Teknik informatika",
        "gambar" => "farrel.jpg"
    ],
    [
        "nrp" => "243040068",
        "nama" => "muhammad khairan rozan",
        "email" => "rozan@gmail.com",
        "jurusan" => "Teknik informatika",
        "gambar" => "rozan.jpg"
    ],
    [
        "nrp" => "2302010300",
        "nama" => "cendika habibulloh salabiah",
        "email" => "albi@gmail.com",
        "jurusan" => "Manajemen",
        "gambar" => "alby.jpg"
    ],
    [
        "nrp" => "246020021",
        "nama" => "muhammad raja chaniago",
        "email" => "raja@gmail.com",
        "jurusan" => "Fotografi dan film",
        "gambar" => "raja.jpg"
    ],
    [
        "nrp" => "3211171049",
        "nama" => "albertus bulet tapun",
        "email" => "taalbertus@gmail.com",
        "jurusan" => "kimia",
        "gambar" => "tapun.jpg"
    ],
    [
        "nrp" => "243040096",
        "nama" => "muhammad aditya prahaz",
        "email" => "prahaz@gmail.com",
        "jurusan" => "Teknik informatika",
        "gambar" => "adit.jpg"
    ],
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar mahasiswa</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="img/<?= $mhs["gambar"];?>"></li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>email : <?= $mhs["email"]; ?></li>
            <li>jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
            <?php endforeach ; ?>
</body>
</html>