<?php
$mahasiswa1 = ['akbar', '243040093', 'akbar@gmail.com', 'teknik informatika'];
// array yg indexnya berupa string yg berasosiasi dengan tiap elemen
$mahasiswa = [
    ['nama' => 'akbar', 'nim' => '243040093', 'email' => 'akbar @gmail.com', 'jurusan' => 'teknik informatika'],
    ['nama' => 'adit', 'nim' => '243040096', 'email' => 'adit@gmail.com', 'jurusan' => 'teknik informatika'],
    ['nama' => 'erik', 'nim' => '243040013', 'email' => 'erik@gmail.com', 'jurusan' => 'teknik informatika']
];
// echo $mahasiswa[1][2];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>daftar mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>nama: <?= $m['nama'] ?></li>
            <li>npm : <?= $m['nim'] ?></li>
            <li>email: <?= $m['email'] ?></li>
            <li>jurusan: <?= $m['jurusan'] ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>