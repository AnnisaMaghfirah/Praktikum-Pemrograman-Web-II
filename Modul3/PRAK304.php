<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK304</title>
</head>
<body>
    <?php
    $star = NULL;
    $picture = "<img  src='https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png' width='50px' height='50px'>";
    if (isset($_POST['star'])) {
        $star = $_POST['star'];
    }
    if (isset($_POST['Tambah'])) {
        $star += 1;
    } if (isset($_POST['Kurang'])) {
        $star -= 1;
    }
    if (empty($star)) {
    ?>
    <form action="" method="post">
        Jumlah bintang
        <input type="text" name="star"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
    } ?>
    <?php
    if (!empty($star)) {
        echo "Jumlah bintang $star";
    ?>
    <br></br>
    <?php
    for($i = 0; $i < $star; $i++){
        echo "$picture";
    }
    ?>
    <form action="" method="post">
        <input type="text" name="star" value="<?= $star ?>" hidden><br>
        <button type="submit" name="Tambah" value="Tambah">Tambah</button>
        <button type="submit" name="Kurang" value="Kurang">Kurang</button>
    </form>
    <?php
    }
    ?>
</body>
</html>