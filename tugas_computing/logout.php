<?php
session_start();
session_destroy();
?>
<script type="text/javascript">
    alert('Selamat Anda berhasil Logout.');
    location.href = "login.php";
</script>