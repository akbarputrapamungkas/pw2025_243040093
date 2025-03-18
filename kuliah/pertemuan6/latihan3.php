<?php 
$mahasiswa1 = ['akbar', '243040093', 'akbar@gmail.com', 'teknik informatika'];

$mahasiswa = [
    ['akbar', '243040093', 'akbar @gmail.com', 'teknik informatika'],
    ['adit', '243040096', 'adit@gmail.com', 'teknik informatika']
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
        <li>nama: <?= $m[0]?></li>
        <li>npm : <?= $m[1]?></li>
        <li>email: <?= $m[2]?></li>
        <li>jurusan: <?= $m[3]?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>
