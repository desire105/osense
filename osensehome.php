<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Optimized Sense Trader</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"/>

  <style>
    /* Logo */
    .brand-logo {
      height: 50px;
      width: 50px;
      object-fit: cover;
      border-radius: 10px;
    }

    .brand-text .line1 {
      font-weight: 700;
      font-size: 15px;
    }

    .brand-text .line2 {
      font-weight: 500;
      font-size: 13px;
      color: #555;
    }

    /* Buttons */
    .btn-primary {
      background: linear-gradient(45deg, #003366, #0066cc);
      border-radius: 10px;
      padding: 10px 20px;
      color: white;
      font-weight: 600;
      text-transform: uppercase;
      border: none;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
    }

    .btn-primary:hover {
      background: linear-gradient(45deg, #002244, #0044cc);
      transform: translateY(-3px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

    /* Stat Boxes */
    .stat-box {
      border-radius: 20px;
      color: white;
      text-align: center;
      padding: 25px 15px;
      font-weight: bold;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      height: 170px;
    }

    .pink {
      background: linear-gradient(135deg, #f43f5e, #fb7185);
    }

    .blue {
      background: linear-gradient(135deg, #2563eb, #3b82f6);
    }

    
    .carousel-img {
      height: 300px;
      object-fit: contain;
      width: 100%;
    }

    
    .option-card {
      border-radius: 20px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease-in-out;
    }

    .option-card:hover {
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    
    footer {
      background-color: #003366;
      color: white;
    }

    footer a {
      color: #ffffff;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    .footer-icon a {
      font-size: 20px;
      margin-right: 15px;
    }

  
    .card {
      border: 1px solid #ddd;
      border-radius: 10px;
      background-color: #fff;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.2);
    }

.card-img-top {
  margin: 0;
  padding: 0;
  border-radius: 142px;
  display: block;
  width: 100%;
  height: 200px;
  object-fit: contain;
}

  </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light px-4 shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="img/WhatsApp Image 2025-05-13 at 16.03.28_c0b8572b.jpg" alt="Logo" class="brand-logo me-2" />
      <div class="brand-text d-flex flex-column">
        <span class="line1">Optimized</span>
        <span class="line2">Sense Trader</span>
      </div>
    </a>
    <div class="d-none d-lg-flex ms-auto gap-2">
      <a href="osense.php" class="btn btn-primary">Open Demat</a>
      <a href="deposit.php" class="btn btn-primary">Deposit</a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item mx-2"><a class="nav-link fw-bold active" href="osensehome.php">Home</a></li>
        <li class="nav-item mx-2"><a class="nav-link fw-bold" href="osense.php">Register</a></li>
        <li class="nav-item mx-2"><a class="nav-link fw-bold" href="deposit.php">Deposit</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="d-block d-lg-none text-center mt-3">
  <a href="osense.php" class="btn btn-primary me-2 mb-2">Open Demat</a>
  <a href="#" class="btn btn-primary mb-2">Deposit</a>
</div>


<div class="text-center mt-4">
  <h1><b>Welcome To Our Portal</b></h1>
  <p>Manage your account registrations and deposits seamlessly. Get started by choosing an option above.</p>
</div>

<!-- Card Section -->
<div class="container my-5">
  <div class="row g-4">
    <div class="col-6 col-md-3">
      <div class="card shadow-sm p-0 overflow-hidden rounded">
        <img src="img/WhatsApp Image 2025-05-14 at 01.01.38_2cc918f3.jpg" class="card-img-top rounded" alt="Card 1">
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card shadow-sm p-0 overflow-hidden rounded">
        <img src="img/WhatsApp Image 2025-05-14 at 01.50.47_de049d89.jpg" class="card-img-top rounded" alt="Card 2">
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card shadow-sm p-0 overflow-hidden rounded">
        <img src="img/WhatsApp Image 2025-05-14 at 02.13.38_c9729953.jpg" class="card-img-top rounded" alt="Card 3">
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card shadow-sm p-0 overflow-hidden rounded">
        <img src="img/WhatsApp Image 2025-05-14 at 02.17.42_9abb7f0e.jpg" class="card-img-top rounded" alt="Card 4">
      </div>
    </div>
  </div>
</div>


<div class="text-center mt-5 mb-5">
  <h2><b>The Smarter Route to Wealth Creation</b></h2>
</div>


<div id="carouselExample" class="carousel slide mb-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/WhatsApp Image 2025-05-14 at 00.14.31_03e05a79.jpg" class="d-block w-100 carousel-img" alt="...">
    </div>
  </div>
</div>


<div class="container py-5">
  <div class="row g-4 justify-content-center">
    <div class="col-6 col-md-3">
      <div class="bg-white text-center p-4 option-card">
        <img src="img/images12345.jpg" alt="Stocks" class="mb-2" style="width: 50px; height: 50px;">
        <h6>Stocks & ETF's</h6>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="bg-white text-center p-4 option-card">
        <img src="img/bull-with-chart-bar-logo-design-finance-logo-design-free-vector (1).jpg" alt="Forex" class="mb-2" style="width: 80px; height: 50px;">
        <h6>Forex</h6>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="bg-white text-center p-4 option-card">
        <img src="img/images7687.jpg" alt="Future & Options" class="mb-2" style="width: 50px; height: 50px;">
        <h6>Future & Options</h6>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="bg-white text-center p-4 option-card">
        <img src="img/Fixer.jpg" alt="Commodities" class="mb-2" style="width: 50px; height: 50px;">
        <h6>Commodities</h6>
      </div>
    </div>
  </div>
</div>

<p style="margin: 10px;">At OSense Trader, we safeguard your interests and ensure your investment journey is as secure as it is prosperous.</p>

<div class="container my-5">
  <div class="p-4 text-center bg-light border rounded shadow">
    <h4>Zero Brokerage</h4><hr>
    <h4>500x Margin Facilities</h4><hr>
    <h4>24x7 Deposit & Withdrawal</h4><hr>
    <h4>Round-The-Clock Customer support</h4>
  </div>
</div>


<div class="container-fluid px-0">
  <img src="img/WhatsApp Image 2025-05-14 at 00.43.45_223640b9.jpg" alt="Banner Image" class="img-fluid w-100" style="object-fit: cover; max-height: 500px;">
</div>


<footer class="bg-bule text-light pt-5 pb-3">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mb-4">
        <h5>Optimized Sense Trader</h5>
        <p>Empowering your financial journey with smart trading solutions and 24/7 support.</p>
      </div>
      <div class="col-md-4 mb-4">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-light text-decoration-none">Home</a></li>
          <li><a href="osense.php" class="text-light text-decoration-none">Register</a></li>
          <li><a href="#" class="text-light text-decoration-none">Deposit</a></li>
          <li><a href="#" class="text-light text-decoration-none">About Us</a></li>
        </ul>
      </div>
      <div class="col-md-4 mb-4">
        <h5>Contact Us</h5>
        <p>Email: <a href="mailto:optimizedsensetrader@gmail.com" class="text-light">optimizedsensetrader@gmail.com</a></p>
        <p>Phone: +91-9211207724</p>
        <div class="mt-3">
          <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
          <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
    <hr class="border-light" />
    <div class="text-center">
      &copy; 2025 Optimized Sense Trader. All rights reserved.
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
