<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK103</title>
</head>
<body>
    <?php
    $celcius = 37.841;
    $fahrenheit = (9/5*$celcius) + 32; //Rumus Mencari Fahrenheit
    $reamur = (4/5*$celcius); //Rumus Mencari Reamur
    $kelvin = (273.15+$celcius); //Rumus Mencari Kelvin

    echo "Fahrenheit (F) = ".number_format($fahrenheit,4,',')."<br>";
    echo "Reamur (R) = ".number_format($reamur,4,',')."<br>";
    echo "Kelvin (K) = ".number_format($kelvin,4,',')."<br>";
    ?>
</body>
</html>