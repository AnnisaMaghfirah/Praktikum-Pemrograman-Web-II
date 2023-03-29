<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK204</title>
</head>
<body>
    <form method = "POST">
        <label for = " ">Nilai : </label>
        <input type = "text" name = "nilai"></input></br>
        <input type = "submit" value = "Konversi"></input>
    </form>
    <?php
    $nilai = NULL;
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['nilai'])) {
            $nilai = $_POST['nilai'];
        }
    }
    if ($nilai >= 1 && $nilai < 10) {
        echo "<h2>Hasil : satuan</h2>";
    }
    elseif ($nilai >= 11 && $nilai < 20) {
        echo "<h2>Hasil : belasan</h2>";
    }
    elseif ($nilai == 10 || $nilai >= 20 && $nilai <= 99) {
        echo "<h2>Hasil : puluhan</h2>";
    }
    elseif ($nilai >= 100 && $nilai <= 999) {
        echo "<h2>Hasil : ratusan</h2>";
    }
    elseif ($nilai >= 1000) {
        echo  "<h2>Hasil  :  Anda  Menginput  Melebihi  Limit Bilangan</h2>";
    }
    elseif ($nilai == 0 and $nilai !=NULL) {
        echo "<h2>Hasil : nol</h2>";
    }
    elseif ($nilai < 0) {
        echo "<h2>Bukan Bilangan Cacah<h2>";
    }
    ?>
</body>
</html>