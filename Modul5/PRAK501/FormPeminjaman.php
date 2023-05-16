<?php
require 'Koneksi.php';
require 'Model.php';
if (isset($_GET['id_peminjaman'])) {
    editPeminjaman();
}
$dataMember = getMember(koneksi());
$dataBuku = getBuku(koneksi());

if (isset($_POST['update'])) {
    updatePeminjaman($_GET["id_peminjaman"], $_POST["tgl_pinjam"], $_POST["tgl_kembali"], $_POST["id_buku"], $_POST["id_member"]);
}
if (isset($_POST['tambah'])) {
    insertDataPeminjaman($_POST["tgl_pinjam"], $_POST["tgl_kembali"], $_POST["id_buku"], $_POST["id_member"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Peminjaman</title>
</head>
<body class="p-3">
    <div class="container">
    <div class="row">
    <form action="" method="post">
        <h1 style="text-align: center;" class="mt-2">Tambah Data Peminjaman</h1>
        <label for="tgl_pinjam" class="form-label">Tanggal Peminjaman</label>
        <input type="date" name="tgl_pinjam" id="tgl_pinjam" class="form-control mb-3" value="<?php if(isset($_GET['id_peminjaman'])) echo $result[0]["tgl_pinjam"] ?>" required>

        <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
        <input type="date" name="tgl_kembali" id="tgl_kembali" class="form-control mb-3" value="<?php if(isset($_GET['id_peminjaman'])) echo $result[0]["tgl_kembali"] ?>" required>

        <label for="id_buku">Judul Buku:</label><br>
        <select id="id_buku" name="id_buku">
            <?php
            if (!isset($_GET['id_peminjaman'])) { ?>
            <option disabled selected></option>
            <?php
            }
            foreach ($dataBuku as $barisBuku) {
                $selected = '';
                    if (
                        isset($_GET['id_peminjaman']) && $hasil[0]['id_buku'] ==
                        $barisBuku['id_buku']
                    ) {
                        $selected = 'selected';
                    }
                    ?>
            <option value="<?php echo $barisBuku['id_buku']; ?>" <?php echo $selected; ?>><?php echo $barisBuku['judul_buku']; ?></option>
            <?php } ?>
        </select>
            <br><br>

        <label for="id_member">Nama Member:</label><br>
        <select id="id_member" name="id_member">
            <?php
            if (!isset($_GET['id_peminjaman'])) { ?>
            <option disabled selected></option>
            <?php
            }
            foreach ($dataMember as $barisMember) {
                $selected = '';
                    if (
                        isset($_GET['id_peminjaman']) && $hasil[0]['id_member'] ==
                        $barisMember['id_member']
                    ) {
                        $selected = 'selected';
                    }
            ?>
            <option value="<?php echo $barisMember['id_member']; ?>" <?php echo $selected; ?>><?php echo $barisMember['nama_member']; ?></option>
            <?php } ?>
            </select>
            <br><br>
        <?php 
            if (isset($_GET['id_peminjaman'])) {
                echo "<button type=\"submit\" class=\"btn btn-success mt-3\" name=\"update\"> Update </button>";
            }
            else {
                echo "<button type=\"submit\" class=\"btn btn-success mt-3\" name=\"tambah\"> Tambah </button>"; 
            }
        ?>
    </div>
    </div>
    </form>
</body>
</html>