<?php
include "koneksi.php";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);

    if(mysqli_num_rows($result) > 0){
        $user = mysqli_fetch_assoc($result);
        if(password_verify($password, $user['password'])){
            header('Location: landing.php');
            exit();
        } else {
            echo "<script>alert('Password salah!');</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>

<div class="conlog">
    <h2>Login</h2>
    
    <form method="POST">
        <table>
            <tr>
                <td><label for="username">Masukkan Username:</label></td>
                <td><input type="text" name="username" placeholder="username" required></td>
            </tr>
            <tr>
                <td><label for="password">Masukkan Password:</label></td>
                <td><input type="password" name="password" placeholder="password" required></td>
            </tr>
        </table>

        <button type="submit" name="login">Login</button>
    </form>

    <p>Create Account | <a href="regis.php">Daftar disini</a></p>
</div>

<footer class="footer">
    <div class="footer-overlay"></div>

    <div class="footer-container">

        <div class="footer-logo">
            <h2>Deerisst</h2>
            <p>modern | artistic | hair</p>
        </div>

        <div class="footer-section">
            <h3>ADDRESS</h3>
            <p>12727 Philadelphia St.<br>Whittier, CA 90601</p>
        </div>

        <div class="footer-section">
            <h3>CONTACT</h3>
            <p>(562) 907-2820<br>artikahairsalon@gmail.com</p>
        </div>

        <div class="footer-section">
            <h3>HOURS</h3>
            <p>
                We accept walk ins,<br>
                by appointment preferred.<br><br>

                Monday 10am–6pm<br>
                Tuesday 9am–4pm<br>
                Wednesday 9am–5pm<br>
                Thursday 9am–7pm<br>
                Friday 9am–6pm<br>
                Saturday 8am–4pm<br>
                Sunday Closed<br><br>

                You may schedule online or<br>
                message your stylist directly.
            </p>
        </div>
    </div>

    <div class="footer-social">
        <i class="fab fa-instagram"></i>
        <i class="fab fa-facebook-f"></i>
        <i class="fas fa-star"></i>
    </div>

    <p class="footer-bottom">
        © Deerisst Salon 2002–2020 | Proudly partnering with <a href="#">Mangomint</a>.
    </p>
</footer>

</body>
</html>
