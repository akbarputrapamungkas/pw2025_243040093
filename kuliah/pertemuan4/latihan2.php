<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ciba looping</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            text-align: center;
            background-color: aqua;
            line-height: 30px;
            font-size: 0.8em;
            display: inline-block;
        }
    </style>
</head>

<body>
    <?php for ($i = 1; $i <= 5; $i= $i+1) { ?>
        <div class="kotak"><?php echo $i ?></div>
    <?php } ?>
</body>

</html>