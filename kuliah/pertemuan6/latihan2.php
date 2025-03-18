<?php
// menceteak array menggunakan looping
$binatang = ['🐼', '🐨', '😺', '🦁', '🐯'];
$makanan = ['nasi goreng', 'bakwan', 'ayam', 'mie', 'bakso']
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Daftar Binatang</h2>
    <ul>
        <?php for ($i = 0; $i < count($binatang); $i++) { ?>
            <li><?php echo $binatang[$i]; ?></li>
        <?php } ?>
    </ul>

    <h2>Daftar Makanan</h2>
    <ul>
        <?php for ($i = 0; $i < count($makanan); $i++) : ?>
            <li><?= $makanan[$i]; ?></li>
        <?php endfor; ?>
    </ul>

    <h2>daftar binatang baru</h2>
    <ul>
        <?php foreach($binatang as $b) : ?>
            <li><?= $b; ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>daftar Makanan baru</h2>
    <ul>
        <?php foreach($Makanan as $M) : ?>
            <li><?= $M; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>