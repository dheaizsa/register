<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>UTS Cloud Computing</title>
    </head>
    <body style="text-align:center">
        <h1>Halaman Administrator</h1>
        <a href="index.php">Home</a>
        <a href="logout.php">Logout</a>
        <hr>
        <h3>Selamat Datang, <?php echo $_SESSION['user']['nama']; ?></h3>
        Halaman ini akan tampil setelah user melakukan login terlebih dahulu.
    </body>
</html>