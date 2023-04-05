<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK303</title>
</head>
<body>
    <form action="" method="POST">
        Batas Bawah : <input type="number" name="bawah" ></br>
        Batas Atas : <input type="number" name="atas" ></br>
        <button type="submit" name="cetak">Cetak</button>
    </form></br>
    <?php
    if (isset($_POST['cetak'])){
        $bawah = $_POST['bawah'];
        $atas = $_POST['atas'];
        $i = $bawah;
        do {
            if (($i+7)%5==0){
                echo  "<img  src='https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png' width='20px' height='20px'>";
            } else {
                echo $i;
            }
            echo "&nbsp";
            $i++;
        } while ($i<=$atas);
    }
    ?>
</body>
</html>