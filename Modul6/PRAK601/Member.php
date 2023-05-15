<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Member</title>
</head>
<body>
    <?php
    include_once('Model.php');
    if (isset($_SESSION['nomor_member']) == false) {
        header('Location: ErrorPage.php');
    }

    if (isset($_GET['id_member'])) {
        deleteMember($_GET['id_member']);
    }
    ?>
    <h2><center>Data Member</center></h2>
    <center><a href="FormMember.php"><button class="btn btn-warning mb-1" >Tambah Data Member</button></a></center>
    <a href="Index.php"><button class="btn btn-dark mb-4">Kembali</button></a>
    <table class="table"> 
    <thead class="table-dark">
        <tr>
            <th class="text-center">ID Member</th>
            <th class="text-center">Nama Member</th>
            <th class="text-center">Nomor Member</th>
            <th class="text-center">Password</th>
            <th class="text-center">Alamat Member</th>
            <th class="text-center">Tanggal Mendaftar</th>
            <th class="text-center">Tanggal Terakhir Bayar</th>
            <th class="text-center">Aksi</th>
        </tr>
    </thead>
    <?php readData("member") ?>
    </table>
</body>
</html>