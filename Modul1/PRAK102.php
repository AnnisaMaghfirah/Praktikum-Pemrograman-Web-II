<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK102</title>
</head>
<body>
    <?php
    //NIM: 2110817220002
    $akhirnim = 2;

    //Deklarasi Variabel
    $jari_jari = 4.2;
    $tinggi = 5.4;
    $panjang = 8.9;
    $lebar = 14.7;
    $sisi = 7.9;
    $alasPrismaSegitiga = 5.5;
    $tinggiPrismaSegitiga = 7.5;
    $tinggiLimasPersegiPanjang = 8.5;

    //Pengkondisian Akhiran NIM
    if($akhirnim == 0 || $akhirnim == 1) {
        $volume_tabung = 3.14 * $jari_jari * $jari_jari * $tinggi; //Rumus Volume Tabung
        echo number_format($volume_tabung, 3). " m3";
    } else if ($akhirnim == 2 || $akhirnim == 3) {
        $volume_kerucut= 1/3 * 3.14 * $jari_jari * $jari_jari * $tinggi; //Rumus Volume Kerucut
        echo number_format($volume_kerucut, 3). " m3";
    } else if ($akhirnim == 4 || $akhirnim == 5) {
        $volume_bola = 4/3 * 3.14 * $jari_jari * $jari_jari * $jari_jari; //Rumus Volume Bola
        echo number_format($volume_bola, 3). " m3";
    } else if ($akhirnim == 6 || $akhirnim == 7) {
        $volume_prismaAlasSegitiga= ($alasPrismaSegitiga * $tinggi / 2) * $tinggiPrismaSegitiga; //Rumus Volume Prisma Alas Segitiga
        echo number_format($volume_prismaAlasSegitiga, 3). " m3";
    } else if ($akhirnim == 8 || $akhirnim == 9) {
        $volume_limasAlasPersegiPanjang= 1/3 * $panjang * $lebar * $tinggiLimasPersegiPanjang; //Rumus Volume Limas Alas Persegi Panjang
        echo number_format($volume_limasAlasPersegiPanjang, 3). " m3";
    }
    ?>
</body>
</html>