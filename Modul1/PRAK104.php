<!-- PHP -->
<?php
$daftarSmartphoneSamsung = array("Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5");
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK104</title>
    <!-- CSS -->
    <style>
        .Samsung {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <table border = "1">
        <tr>
            <td class = "Samsung" >Daftar Smartphone Samsung</td>
        </tr>
        <tr>
            <td><?php echo $daftarSmartphoneSamsung[0]; ?></td>
        </tr>
        <tr>
            <td><?php echo $daftarSmartphoneSamsung[1]; ?></td>
        </tr>
        <tr>
            <td><?php echo $daftarSmartphoneSamsung[2]; ?></td>
        </tr>
        <tr>
            <td><?php echo $daftarSmartphoneSamsung[3]; ?></td>
        </tr>
    </table>
</body>
</html>