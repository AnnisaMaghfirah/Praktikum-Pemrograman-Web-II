<?php
    include_once('Koneksi.php');
    if (isset($_SESSION['nomor_member'])) {
        echo "<script>alert('Anda Sudah login!');
        window.location='Index.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
        <form action="Login.php" method="post" enctype="multipart/form-data">
        <center>
            <h2 class="text-align: center;" class="mt-2">Form Login</h2>
        </center>

            <div class="form-group">
                <label for="nomor_member">Nomor Member</label>
                <input type="text" class="form-control" name="nomor_member" id="nomor_member" placeholder="nomor member">
            </div> </br>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="password">
            </div> </br>

            <center>
                <button class="btn btn-primary btn-lg" type="submit" name="login">Login</button>
                <p class="mt-5 mb-3 text-muted">Copyright By Annisa Maghfirah</p>
            </center>
        </form>
</body>
</html>