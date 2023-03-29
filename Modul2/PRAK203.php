<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK203</title>
</head>
<body>
    <form method = "post">
        <label for = " ">Nilai: </label>
        <input type = "text" name = "nilai"><br>

        <label for = "">Dari : </label></br>
        <input type = "radio" name = 'dariSuhu' value = "C">Celcius<br>
        <input type = "radio" name = 'dariSuhu' value = "F">Fahrenheit<br>
        <input type = "radio" name = 'dariSuhu' value = "R">Reamur<br>
        <input type = "radio" name = 'dariSuhu' value = "K">Kelvin<br>

        <label for = "">Ke : </label><br>
        <input type = "radio" name = 'keSuhu' value = "C">Celcius<br>
        <input type = "radio" name = 'keSuhu' value = "F">Fahrenheit<br>
        <input type = "radio" name = 'keSuhu' value = "R">Reamur<br>
        <input type = "radio" name = 'keSuhu' value = "K">Kelvin<br>
        <input type = "submit" name = "Submit" value = "Konversi">
    </form>

    <?php
    $Suhu = $dari = $ke = NULL;
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['nilai'])) {
            $Suhu = $_POST['nilai'];
        }
        if (isset($_POST['dariSuhu'])) {
            $dari = $_POST['dariSuhu'];
        }
        if (isset($_POST['keSuhu'])) {
            $ke = $_POST['keSuhu'];
        }
    }
        if ($dari == "C" && $ke == "F") {
            $nilai = (9/5 * $Suhu) + 32;
            echo "<h2>Hasil Konversi : $nilai &deg;F</h2>";
        }
        elseif ($dari == "C" && $ke == "R") {
            $nilai = (4/5 * $Suhu) + 32;
            echo "<h2>Hasil Konversi : $nilai &deg;R</h2>";
        }
        elseif ($dari == "C" && $ke == "K") {
            $nilai = ($Suhu + 273);
            echo "<h2>Hasil Konversi : $nilai &deg;K</h2>";
        }
        elseif ($dari == "C" && $ke == "C") {
            echo "<h2>Tidak Bisa Mengkonversi Nilai Suhu</h2>";
        }
        elseif ($dari == "F" && $ke == "C") {
            $nilai = 5/9 * ($Suhu - 32);
            echo "<h2>Hasil Konversi : $nilai &deg;C</h2>";
        }
        elseif ($dari == "F" && $ke == "R") {
            $nilai = 4/9 * ($Suhu - 32);
            echo "<h2>Hasil Konversi : $nilai &deg;R</h2>";
        }
        elseif ($dari == "F" && $ke == "K") {
            $nilai = (($Suhu - 32) * 5/9) + 273;
            echo "<h2>Hasil Konversi : $nilai &deg;K</h2>";
        }
        elseif ($dari == "F" && $ke == "F") {
            echo "<h2>Tidak Bisa Mengkonversi Nilai Suhu</h2>";
        }
        elseif ($dari == "R" && $ke == "C") {
            $nilai = (5/4 * $Suhu);
            echo "<h2>Hasil Konversi : $nilai &deg;C</h2>";
        }
        elseif ($dari == "R" && $ke == "F") {
            $nilai = (9/4 * $Suhu) + 32;
            echo "<h2>Hasil Konversi : $nilai &deg;F</h2>";
        }
        elseif ($dari == "R" && $ke == "K") {
            $nilai = (5/4 * $Suhu) + 273;
            echo "<h2>Hasil Konversi : $nilai &deg;K</h2>";
        }
        elseif ($dari == "R" && $ke == "R") {
            echo "<h2>Tidak Bisa Mengkonversi Nilai Suhu</h2>";
        }
        elseif ($dari == "K" && $ke == "C") {
            $nilai = $Suhu - 273;
            echo "<h2>Hasil Konversi : $nilai &deg;C</h2>";
        }
        elseif ($dari == "K" && $ke == "F") {
            $nilai = (9/5 * ($Suhu - 273)) + 32;
            echo "<h2>Hasil Konversi : $nilai &deg;F</h2>";
        }
        elseif ($dari == "K" && $ke == "R") {
            $nilai = 4/5 * ($Suhu - 273);
            echo "<h2>Hasil Konversi : $nilai &deg;R</h2>";
        }
        elseif ($dari == "K" && $ke == "K") {
            echo "<h2>Tidak Bisa Mengkonversi Nilai Suhu</h2>";
        }
    ?>
</body>
</html>