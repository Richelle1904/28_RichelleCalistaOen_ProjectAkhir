<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELAJAR BOOTSTRAP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="landing3.css">
    <link rel="icon" href="icon.jpeg">
</head>
<body>
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Deerisst</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="landing.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="book.php">Book Now</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="data.php">Open Data</a></li>
      </ul>
      <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </div>
  </div>
 </nav>

 <div class="bg mb-4">
   <div class="photo">
        <div id="jumbotronCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="1.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Slide 1">
            </div>
            <div class="carousel-item">
              <img src="9.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Slide 2">
            </div>
            <div class="carousel-item">
              <img src="12.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Slide 3">
            </div>
            <div class="carousel-item">
              <img src="11.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Slide 4">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#jumbotronCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#jumbotronCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div class="jumbotron-overlay text-center">
          <h1 class="display-4">ELEVATE</h1>
          <h1 class="display-4"><b> YOUR BEAUTY</b></h1>
          <p class="lead">With dermatologists certified best skincare,</p>
        </div>
     </div>
   </div>

<br>
<br>


 <div class="d-flex" style="background-image: url('8.jpg'); background-size: cover; background-repeat: no-repeat;">
  <div style="flex: 1; padding-right: 20px; padding-left: 40px; padding-top: 20px;" class="d-flex align-items-center text-center">
    <div>
      <h1 class="display-4">What Our Clients Say</h1>
      <p>Loooove Deerisst! She has been making me the perfect blond for years, and I especially love how cool the vibe and decor of the salon is! I always feel extra cool leaving my appointment</p>
    </div>
  </div>
  <div style="flex: 1;" class="d-flex justify-content-end">
   <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="width: 400px; height: 400px; margin-right: 80px;">
    <div class="carousel-inner" style="height: 100%;">
      <div class="carousel-item active">
        <img src="5.jpg" class="d-block w-100" style="height: 100%; object-fit: cover;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="6.jpg" class="d-block w-100" style="height: 100%; object-fit: cover;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="7.jpg" class="d-block w-100" style="height: 100%; object-fit: cover;" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
   </div>
  </div>
</div>

<div class="py-5">
  <div class="container text-center">

    <h2 class="mb-3" style="font-family: 'Georgia', serif; font-weight: 600; font-size: 2.3rem;">
      Our Services
    </h2>

    <p class="mx-auto mb-5" style="max-width: 750px; font-size: 1.05rem;">
      At Deerisst Salon, we believe in more than just a good hair day; we believe in an artistic 
      transformation that fits your unique style! Our talented master stylists specialize in haircuts 
      and color services that celebrate your individuality. We are deeply connected to our local 
      community, engaging in arts and activism to uplift and inspire. Whether you visit us in Brooklyn 
      or the Lower East Side, join us for an authentic salon experience where creativity meets community!
    </p>

    <div class="row g-4">

      <div class="col-md-3 col-sm-6">
        <div class="service-box">
          <img src="haircut.jpg" class="img-fluid service-img" alt="">
          <h4 class="mt-3 service-title">Haircuts →</h4>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="service-box">
          <img src="haircolor.jpg" class="img-fluid service-img" alt="">
          <h4 class="mt-3 service-title">Hair Color →</h4>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="service-box">
          <img src="style.jpg" class="img-fluid service-img" alt="">
          <h4 class="mt-3 service-title">Hair Styling →</h4>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="service-box">
          <img src="treatment.jpg" class="img-fluid service-img" alt="">
          <h4 class="mt-3 service-title">Hair Treatments →</h4>
        </div>
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
            <p>(562) 907-2820<br>deerissthairsalon@gmail.com</p>
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