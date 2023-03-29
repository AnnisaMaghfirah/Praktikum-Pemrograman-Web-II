<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK202</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    $pesanNama = $pesanNim = $result = $pesanJenisKelamin = "";
    $nama = $nim = $jenisKelamin = "";

    if (isset($_POST['submit'])) {
        if (empty($_POST['nama'])) {
            $pesanNama = "Nama tidak boleh kosong";
        } else {
            $nama = cek_input($_POST['nama']);
        }
        if (empty($_POST['nim'])) {
            $pesanNim = "nim tidak boleh kosong";
        } else {
            $nim = cek_input($_POST['nim']);
        }
        if (empty($_POST['jenisKelamin'])) {
            $pesanJenisKelamin = "jenis kelamin tidak boleh kosong";
        } else {
            $jenisKelamin = cek_input($_POST['jenisKelamin']);
        }
    }

    function cek_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <form method = "post">
    Nama: <input type = "text" name = "nama" value = "<?=$nama?>" > <span class = "error">* <?=$pesanNama;?> </span> </br>
    Nim: <input type = "text" name = "nim" value = "<?=$nim?>" > <span class = "error">* <?=$pesanNim;?> </span> </br>
    Jenis Kelamin : <span class = "error">* <?=$pesanJenisKelamin;?> </span> </br>

    <input type = "radio" name = "jenisKelamin" value = "Laki-laki"
    <?php if (isset($_POST["jenisKelamin"]) && $_POST["jenisKelamin"] == "Laki-Laki") echo "checked"; ?> >Laki-Laki</br>
    <input type = "radio" name = "jenisKelamin" value = "Perempuan"
    <?php if (isset($_POST["jenisKelamin"]) && $_POST["jenisKelamin"] == "Perempuan") echo "checked"; ?> >Perempuan</br>
    <input type = "submit" name = "submit" value = "Submit">
    </form> </br>
    
    <?php
    if (!empty($nama) && !empty($nim) && !empty($jenisKelamin)) {
        echo "$nama <br>";
        echo "$nim <br>";
        echo "$jenisKelamin <br>";
    }
    ?>
</body>
</html>