<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Masuk Ke Aplikasi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/daftar.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
        <body>
    <?php
    
    if(isset($_POST['username'])){
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $query = mysqli_query($koneksi, "INSERT INTO user (nama,username,password) values('$nama','$username','$password')");
        if($query){
            echo '<script>alert("Selamat Pendaftaran Anda Berhasil. Silahkan Melakukan Login.")</script>';
        }else{
            echo '<script>alert("Pendaftaran Anda Gagal.")<</script>';

        }

        }
                  
    ?>
        <form method="post">
            <table align="center">
                <tr>
                     <td colspan="2" align="center">
                        <h3>Pendaftaran Users</h3>
                     </td>
                </tr>

                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                    <td><input type="text" name="notelepon"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="radio" name="jenis_kelamin" value="laki_laki">Laki-laki</td>
                    <td><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit">Daftar User</button>
                            <a href="login.php">Login</a>

                        </td>
                    </tr>
                </tr>
            </table>

        </form>
    </body>
    
</html>