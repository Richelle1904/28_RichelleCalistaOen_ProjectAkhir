<?php
include "koneksi.php";
if(isset($_POST['registrasi'])){
    $nama = $_POST['nama'];
    $hp = $_POST['no_hp'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check_query = "SELECT username FROM users WHERE username = '$username'";
    $check_result = mysqli_query($koneksi, $check_query);

    if(mysqli_num_rows($check_result) > 0){
        echo "Username sudah digunakan! Silakan pilih username lain.";
    } else {
        $query = "INSERT INTO users (nama, no_hp, username, password) VALUES ('$nama', '$hp', '$username', '$password')";
        $result = mysqli_query($koneksi, $query);

        if($result){
            echo "<script>alert('Registrasi berhasil | silahkan login.');
            window.location='login.php';</script>";
        } else {
            echo "Gagal mendaftar! Error: " . mysqli_error($koneksi);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="conlog">
    <h2>Form Registrasi</h2>

    <form method="POST">
        <fieldset>
            <table>
                <tr>
                    <td><label for="nama">Masukkan nama</label></td>
                    <td>:</td>
                    <td><input type="text" name="nama" placeholder="nama" required></td>
                </tr>
                <tr>
                    <td><label for="no_hp">Masukkan nomor handphone</label></td>
                    <td>:</td>
                    <td><input type="int" name="no_hp" placeholder="no_hp" required></td>
                </tr>
                <tr>
                    <td><label for="username">Masukkan username</label></td>
                    <td>:</td>
                    <td><input type="text" name="username" placeholder="username" required></td>
                </tr>
                <tr>
                    <td><label for="password">Masukkan password</label></td>
                    <td>:</td>
                    <td><input type="password" name="password" placeholder="password" required></td>
                </tr>
                <tr>
                    <td colspan="5" style="text-align:center;">
                        <button type="submit" name="registrasi">Registrasi</button>
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>

    <p>Sudah punya akun? | <a href="login.php">Login disini</a></p>
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
