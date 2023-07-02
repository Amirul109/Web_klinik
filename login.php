<?php
session_start();

// Cek apakah pengguna sudah login
if(isset($_SESSION['username'])){
    header("Location: welcome.php");
    exit;
}

// Cek apakah form login telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifikasi username dan password (gunakan metode autentikasi yang sesuai, seperti mengambil data dari database)
    if ($username === "admin" && $password === "admin123") {
        // Set session untuk menyimpan status login
        $_SESSION['username'] = $username;
        
        // Redirect ke halaman welcome
        header("Location: welcome.php");
        exit;
    } else {
        $errorMessage = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: none;
            border-radius: 3px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 3px;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        p.error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if(isset($errorMessage)) { echo "<p class='error'>$errorMessage</p>"; } ?>
        <form method="POST" action="">
            <label>Username:</label>
            <input type="text" name="username" placeholder="example@gmail.com"><br><br>
            <label>Password:</label>
            <input type="password" name="password" placeholder="Password"><br><br>
            <input type="submit" value="Login">
            <p>
                <a href="#">Lupa Password</a>
            </p>
        </form>
    </div>
</body>
</html>
