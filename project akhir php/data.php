<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELAJAR BOOTSTRAP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="data2.css">
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
    <div class="container mt-5">

        <div class="d-flex justify-content-center">
            <table class="table table-striped table-bordered">
        <tr>
            <th>NO</th>
            <th>ID Booking</th>
            <th>Lokasi</th>
            <th>Layanan</th>
            <th>Stylist</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>No HP</th>
            <th>Pembayaran</th>
        </tr>

        <?php
        include 'koneksi.php';
        $no = 1;

        $data = mysqli_query($koneksi, "SELECT * FROM data");

        while($d = mysqli_fetch_array($data)){
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['id_booking']; ?></td>
                <td><?php echo $d['lokasi']; ?></td>
                <td><?php echo $d['layanan']; ?></td>
                <td><?php echo $d['stylist']; ?></td>
                <td><?php echo $d['tanggal']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['no_hp']; ?></td>
                <td><?php echo $d['pembayaran']; ?></td>
            </tr>
        <?php
        }
        ?>

            </table>
        </div>
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
