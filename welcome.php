<?php
session_start();

// Cek apakah pengguna belum login
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}

// Ambil informasi pengguna yang telah login
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        body {
            background-image: url('dasboard.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            font-family: Arial, sans-serif;
        }

        .container {
            width: 300px;
            margin: 0 auto;
            margin-top: 200px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 5px;
        }

        h2 {
            text-align: center;
        }

        p {
            text-align: center;
            margin-bottom: 20px;
        }

        a {
            display: block;
            width: 100px;
            margin: 0 auto;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 3px;
            color: white;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $username; ?></h2>
        <p>Selamat datang di halaman antrian pasien klinik.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
