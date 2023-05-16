<?php
include_once ('Koneksi.php');
include_once ('Model.php');
$result = getPeminjaman(koneksi());
$dataMember = getMember(koneksi());
$dataBuku = getBuku(koneksi());
if (isset($_GET['id_peminjaman'])) {
    deletePeminjaman($_GET['id_peminjaman']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Peminjaman</title>
</head>
<body class="p-3">
    <h2><center>Data Peminjaman</center></h2>
    <center><a href="FormPeminjaman.php"><button class="btn btn-warning mb-1">Tambah Data Peminjaman</button></a></center>
    <a href="Index.php"><button class="btn btn-dark mb-4">Kembali</button></a>
    <table class="table">
    <thead class="table-dark">
            <tr>
                <th class="text-center">ID Peminjaman</th>
                <th class="text-center">Tanggal Pinjam</th>
                <th class="text-center">Tanggal Kembali</th>
                <th class="text-center">Judul Buku</th>
                <th class="text-center">Nama Member</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <?php
        foreach ($result as $hasil) {
            echo "<tr>";
            echo "<td>" . $hasil["id_peminjaman"] . "</td>";
            echo "<td>" . $hasil["tgl_pinjam"] . "</td>";
            echo "<td>" . $hasil["tgl_kembali"] . "</td>";
            foreach ($dataBuku as $temp) {
                if ($hasil['id_buku'] == $temp['id_buku']) {
                    echo "<td>" . $temp['judul_buku'] . "</td>";
                }
            }
            foreach ($dataMember as $temp) {
                if ($hasil['id_member'] == $temp['id_member']) {
                    echo "<td>" . $temp['nama_member'] . "</td>";
                }
            }
            echo "<td>";
            echo "<a class='btn btn-primary' href='FormPeminjaman.php?id_peminjaman=" . $hasil['id_peminjaman'] . "'>Edit</a>";
            echo " ";
            echo "<a class='btn btn-danger' href='Peminjaman.php?id_peminjaman=" . $hasil['id_peminjaman'] . "' onclick=\"return confirm('Yakin Ingin Dihapus?')\">Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>