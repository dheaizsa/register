<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Ke Aplikasi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
    </head>
    <body>
        
    <?php
    
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $query = mysqli_query($koneksi, "SELECT*FROM user where username='$username' and password='$password'");
        if(mysqli_num_rows($query) > 0){
            $data = mysqli_fetch_array($query);
            $_SESSION['user'] = $data;
            echo '<script>alert("Selamat datang, '.$data['nama'].'");
            location.href="index.php";</script>';
        }else{
            echo '<script>alert("Username/password tidak sesuai.");</script>';

        }
        }
    ?>
        <form method="post">
            <table align="center">
                <tr>
                     <td colspan="2" align="center">
                        <h3>Login User</h3>
                     </td>
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
                            <button type="submit">Login</button>
                            <a href="daftar.php">Daftar</a>

                        </td>
                    </tr>
                </tr>
            </table>

        </form>
    </body>
        
</html>