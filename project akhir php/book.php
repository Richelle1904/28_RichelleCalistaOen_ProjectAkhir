<?php
include "koneksi.php";

if(isset($_POST['data'])){

    $lokasi     = $_POST['lokasi'];
    $layanan    = $_POST['layanan'];
    $stylist    = $_POST['stylist'];
    $tanggal    = $_POST['tanggal'];
    $nama       = $_POST['nama'];
    $hp         = $_POST['no_hp'];
    $pembayaran = $_POST['pembayaran'];


    $query = "INSERT INTO data (lokasi, layanan, stylist, tanggal, nama, no_hp, pembayaran) 
              VALUES ('$lokasi', '$layanan', '$stylist', '$tanggal', '$nama', '$hp', '$pembayaran')";

    $result = mysqli_query($koneksi, $query);

    if($result){
        echo "<script>alert('Booking berhasil! Kami akan segera menghubungi Anda.');
        window.location='landing.php';</script>";
    } else {
        echo "Gagal melakukan booking! Error: " . mysqli_error($koneksi);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELAJAR BOOTSTRAP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="book2.css">
    <link rel="icon" href="icon.jpeg">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Deerisst</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="landing.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="aboutus.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="book.php">Book Now</a></li>
                    <li class="nav-item"><a class="nav-link" href="data.php">Open Data</a></li>
                </ul>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="conlog">
        <h2>Booking Information</h2>
        <form action="" method="POST">
        <table style="margin: 0 auto; border-collapse: collapse;">
            <tr>
                <td><label>Lokasi</label></td>
                <td>:</td>
                <td>
                    <select name="lokasi" required>
                        <option value="">Pilih Lokasi</option>
                        <option value="in_store">In Store</option>
                        <option value="home_service">Home Service</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Layanan</label></td>
                <td>:</td>
                <td>
                    <select name="layanan" required>
                        <option value="">Pilih Layanan</option>
                        <option value="haircut">Haircut</option>
                        <option value="hair_coloring">Hair Coloring</option>
                        <option value="hair_styling">Hair Styling</option>
                        <option value="hair_treatment">Hair Treatment</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Stylist</label></td>
                <td>:</td>
                <td>
                    <select name="stylist" required>
                        <option value="">Pilih Stylist</option>
                        <option value="Annie">Annie</option>
                        <option value="Bob">Bob</option>
                        <option value="Celeste">Celeste</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>Tanggal Booking</label></td>
                <td>:</td>
                <td><input type="date" name="tanggal" required></td>
            </tr>
            <tr>
                <td><label>Nama Lengkap</label></td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td><label>No HP</label></td>
                <td>:</td>
                <td><input type="number" name="no_hp" min="0" required></td>
            </tr>
            <tr>
                <td><label>Metode Pembayaran</label></td>
                <td>:</td>
                <td>
                    <select name="pembayaran" required>
                        <option value="">Pilih Pembayaran</option>
                        <option value="credit">Credit</option>
                        <option value="debit">Debit</option>
                        <option value="transfer">Transfer</option>
                    </select>
                </td>
            </tr>
            <tr>
                        <td colspan="5" style="text-align:center;">
                            <button type="submit" name="data">Book Now</button>
                        </td>
                    </tr>
        </table>
        </form>
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