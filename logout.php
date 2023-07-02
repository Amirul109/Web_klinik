<?php
session_start();

// Hapus session dan redirect ke halaman login
session_destroy();
header("Location: login.php");
exit;
?>
