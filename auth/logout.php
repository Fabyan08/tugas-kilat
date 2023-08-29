<?php
// mengaktifkan session php
session_start();

// menghapus semua session
session_destroy();

echo '<script>window.location.href="../index.php"</script>';

// mengalihkan halaman ke halaman login
// header("location:index.php");
// header("location:");
