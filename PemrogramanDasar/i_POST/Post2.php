<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(isset($_POST["nama"])) : ?>
        <h1>Hai <?= $_POST["nama"] ?></h1>
    <?php endif; ?>

    <form action="" method="post">
        Masukkan kata: 
        <input type="text" name="kata">
        <br>
        <button type="" name="kirim">Kirim</button>
    </form>

    <?php if(isset($_POST["kata"])) : ?>
        <h1>Hai <?= $_POST["kata"] ?></h1>
    <?php endif; ?>
</body>
</html>