<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Buku</title>
</head>
<body class="p-3">
    <?php
        include_once('Model.php');
        if (isset($_GET['id_buku'])) {
            editBuku();
        }
    ?>
    <div class="container">
    <div class="row">
    <form action="" method="post">
    <h1 style="text-align: center;" class="mt-2">Tambah Data Buku</h1>
            
            <label for="judul_buku" class="form-label">Judul Buku</label>
            <input type="text" name="judul_buku" id="judul_buku"  class="form-control mb-3" value="<?php if(isset($_GET['id_buku'])) echo $result[0]["judul_buku"] ?>" required>
  
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" name="penulis" id="penulis" class="form-control mb-3" value="<?php if(isset($_GET['id_buku'])) echo $result[0]["penulis"] ?>" required>

            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" class="form-control mb-3" value="<?php if(isset($_GET['id_buku'])) echo $result[0]["penerbit"] ?>" required>
 
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input type="text" name="tahun_terbit" id="tahun_terbit" class="form-control mb-3" value="<?php if(isset($_GET['id_buku'])) echo $result[0]["tahun_terbit"] ?>" required>

            <?php 
                if (isset($_GET['id_buku'])) {
                    echo "<button type=\"submit\" class=\"btn btn-success mt-3\" name=\"update\"> Update </button>";
                }
                else {
                    echo "<button type=\"submit\" class=\"btn btn-success mt-3\" name=\"tambah\"> Tambah </button>"; 
                }
            ?>
    </div>
    </div> 
    </form>

    <?php
    if (isset($_POST['update'])) {
        updateBuku($_GET['id_buku'], $_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
        
    }
    if (isset($_POST['tambah'])) {
        insertDataBuku($_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    }
    ?>
    
</body>
</html>