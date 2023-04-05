<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302</title>
</head>
<body>
    <form action="" method="POST">
    Tinggi :
    <input type="text" name="tinggi"></br>
    Alamat Gambar :
    <input type="text" name="alamat"></br>
    <button type="submit" name="cetak">Cetak</button>
    </form> </br>

    <?php
    if (isset($_POST['cetak'])){
        $tinggi = $_POST['tinggi'];
        $a = 1; $i = 1; $c = $tinggi;
        $gambar = $_POST['alamat'];
    }
    ?>
    <?php
    if (isset($_POST['cetak'])) : ?>
    <?php
    while( $a<=$tinggi ) { ?>
    <?php
    while($i < $a ) { ?>
        <img style = "width: 25px; opacity: 0;" src=<?= "$gambar"; ?> alt ="">
        <?php $i++ ?>
    <?php } ?>
    <?php
    while($c >= $a) { ?>
        <img style="width : 25px" src=<?= "$gambar"; ?> alt="">
        <?php $c-- ?>
        <?php } ?>
        <br>
    <?php
    $i = 1; $c = $tinggi;
    $a++;
    ?>
    <?php } ?>
    <?php endif; ?>
</body>
</html>