<!-- PHP -->
<?php
$daftarSmartphoneSamsung = array("SG22"=>"Samsung Galaxy S22", "SG22+"=>"Samsung Galaxy S22+", "SGA03"=>"Samsung Galaxy A03", "SGX5"=>"Samsung Galaxy Xcover 5");
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK105</title>
    <!-- CSS -->
    <style>
        .Samsung {
            font-weight: bold;
            background-color: red;
            height: 70px;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <table border = "1">
        <tr>
            <td class = "Samsung" >Daftar Smartphone Samsung</td>
        </tr>
        <tr>
            <td><?php echo $daftarSmartphoneSamsung["SG22"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $daftarSmartphoneSamsung["SG22+"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $daftarSmartphoneSamsung["SGA03"]; ?></td>
        </tr>
        <tr>
            <td><?php echo $daftarSmartphoneSamsung["SGX5"]; ?></td>
        </tr>
    </table>
</body>
</html>