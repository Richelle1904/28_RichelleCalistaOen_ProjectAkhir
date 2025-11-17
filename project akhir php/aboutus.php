<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELAJAR BOOTSTRAP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="aboutus.css">
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
                </ul>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="page-content">

        <div class="team-container">

            <div class="team-member">
                <div class="team-photo">
                    <img src="2.jpg" alt="Kaylee Peterson">
                </div>
                <h3>kaylee peterson</h3>
                <p>monday</p>
                <p><a href="#">view instagram</a></p>
                <a href="book.php"><button class="book-button">book with kaylee</button></a>
            </div>

            <div class="team-member">
                <div class="team-photo">
                    <img src="3.jpg" alt="Oksana Van Sisseren">
                </div>
                <h3>oksana van</h3>
                <p>fridays</p>
                <p><a href="#">view instagram</a></p>
                <a href="book.php"><button class="book-button">book with oksana</button></a>
            </div>

            <div class="team-member">
                <div class="team-photo">
                    <img src="4.jpg" alt="Aine Brooks">
                </div>
                <h3>aine brooks</h3>
                <p>saturday</p>
                <p><a href="#">view instagram</a></p>
                <a href="book.php"><button class="book-button">book with aine</button></a>
            </div>
        </div>
    </div>

    <div class="container py-5">

  <div class="row align-items-center">


    <div class="col-md-6">
      <img src="15.jpg" class="img-fluid" 
           style="width:100%; height:550px; object-fit:cover; border-radius:10px;">
    </div>

    <div class="col-md-6 ps-md-5 mt-4 mt-md-0">

      <p style="font-size: 1rem; margin-bottom: 5px;">Our Locations</p>

      <h2 style="font-family: 'Georgia', serif; font-size: 2.6rem; font-weight: 600; margin-bottom: 20px;">
        Visit Us In New York
      </h2>

      <p style="font-size: 1.05rem; max-width: 600px;">
        Fringe Salon brings our creative, community-focused hair services to some of New York's most 
        vibrant neighborhoods. You can find us in Manhattan, Brooklyn, the Lower East Side, and 
        Gowanus, where our master stylists blend artistry with genuine care. Our salons are hubs of 
        creativity, uplifting artists, and contributing to the community. Come see why Fringe Salon is a 
        beloved cornerstone in these eclectic areas, offering imaginative haircuts and color services in 
        a cosy and authentic atmosphere.
      </p>

      <button class="btn mt-3 px-4 py-2"
              style="background-color:#efb1a8; color:#361e44; border:none; border-radius:20px; font-size:1.1rem;">
        Discover Our Locations
      </button>
    </div>
  </div>

  <div class="row mt-5">


    <div class="col-md-6 mb-4">
      <h4 style="font-family:'Georgia', serif;">Fringe | LES</h4>
      <p>
        248 Broome Street,<br>
        New York, NY 10002
      </p>
      <p>(212) 674-8383</p>

      <div class="dropdown">
        <button class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
          Sunday 11:00AM - 8:00PM
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item">Monday 10:00AM - 7:00PM</a></li>
          <li><a class="dropdown-item">Tuesday 10:00AM - 7:00PM</a></li>
          <li><a class="dropdown-item">Wednesday 10:00AM - 7:00PM</a></li>
        </ul>
      </div>
    </div>

    <div class="col-md-6 mb-4">
      <h4 style="font-family:'Georgia', serif;">Fringe | BK</h4>
      <p>
        298 Bond Street,<br>
        Brooklyn, NY 11231
      </p>
      <p>(718) 624-8383</p>

      <div class="dropdown">
        <button class="btn btn-outline-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
          Sunday 11:00AM - 5:00PM
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item">Monday 10:00AM - 6:00PM</a></li>
          <li><a class="dropdown-item">Tuesday 10:00AM - 6:00PM</a></li>
          <li><a class="dropdown-item">Wednesday 10:00AM - 6:00PM</a></li>
        </ul>
      </div>
    </div>

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
