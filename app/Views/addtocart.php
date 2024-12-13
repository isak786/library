<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Stylish Navbar with Hero Overlay</title>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url('assets/style/input.css') ?>" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top ">
    <div class="container">
        <a class="navbar-brand text-black" href="../home/index.html">
            <img src="<?= base_url('assets/images/caplogo.png') ?>" alt="Libraria Logo" class="logo"> LMS
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="../../assets/images/caplogo.png" class="logo" alt="">LMS</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav mx-auto gap-5 mt-3">
                <li class="nav-item " ><a class="text-black text-decoration-none" href="<?= site_url('/') ?>">Home</a></li>
                <li class="nav-item"><a class="text-black text-decoration-none" id="books" href="#bookscard" >Books/Journals</a></li>
                <li class="nav-item"><a class="text-black text-decoration-none" id="cds"  href="#cdscard">CDs/DVDs</a></li>
                <li class="nav-item"><a class="text-black text-decoration-none"  id="games" href="#gamescard">Games</a></li>
            </ul>
                <div class="d-flex gap-3 mt-2">
                    <a href="<?= site_url('login') ?>" class="btn btn_login_2">Login</a>
                    <a href="<?= site_url('register') ?>" class="btn btn-register">Register</a>
                </div>
            </div>
        </div>
    </div>
</nav>
  <!--Hero Section -->
  <div class="container mt-5 pt-5">
    <div class="row mt-5 pt-3"> 
      <div class="col-lg-4 col-md-6">
        <img src="<?= base_url('assets/images/book2.png') ?>" alt="Book Image" class="img-fluid shadow-sm rounded">
      </div>   
      <div class="col-lg-8 col-md-6">
        <h2 class="fw-bold mt-3">Skyshade - The Lightlark Saga (Hardback)</h2>
        <p class="text-muted">By Alex Aster</p>
        <p><strong>Format:</strong> Hardback</p>
        <p><strong>Publisher:</strong> XYZ Publications</p>
        <p><strong>Price:</strong> <span class="text-danger">£12.99</span> <span class="text-muted text-decoration-line-through">£15.99</span> <small>(Save £3.00)</small></p>
        <p class="text-success">✓ In Stock</p>
        <p class="text-muted">Usually dispatched within 2-3 working days</p>

       
        <div class="d-flex flex-wrap align-items-center mb-3">
          <label for="quantity" class="me-2 mt-3">Quantity:</label>
          <input type="number" id="quantity" class="form-control w-25 me-3 mt-3" value="1" min="1">
          <button class="btn btn-primary me-2 mt-3">Add to Basket</button>
          <button class="btn btn-outline-secondary mt-3">Click & Collect</button>
        </div>

      
      </div>
    </div>
  </div>
  <!-- Footer Section -->
  <section class="mt-5">
    <div class="container border-top ">
      <footer class="footer-section ">
        <div class="footer-content pt-5 pb-5">
          <div class="row">
            <div class="col-xl-4 col-lg-4 mb-50">
              <div class="footer-widget">
                <div class="footer-logo">
                  <a class="navbar-brand text-black" href="#">
                    <img src="<?= base_url('assets/images/caplogo.png') ?>" alt="Libraria Logo" class="logo"> LMS
                  </a>
                </div>
                <div class="footer-text">
                  <p>
                    Lorem ipsum dolor sit amet, consec tetur adipisicing elit,
                    sed do eiusmod tempor incididuntut consec tetur
                    adipisicing elit,Lorem ipsum dolor sit amet.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
              <div class="footer-widget">
                <div class="footer-widget-heading">
                  <h3>Useful Links</h3>
                </div>
                <ul>
                  <li><a href="#" class="text-decoration-none">Home</a></li>
                  <li>
                    <a href="#" class="text-decoration-none">Books/Journals</a>
                  </li>
                  <li>
                    <a href="#" class="text-decoration-none">CDs/DVDs</a>
                  </li>
                  <li><a href="#" class="text-decoration-none">Games</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
              <div class="footer-widget">
                <div class="footer-widget-heading">
                  <h3>Contact Us</h3>
                </div>
                <ul class="contact-info">
                  <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <span>123 Library Street, Cityname, Country</span>
                  </li>
                  <li>
                    <i class="fas fa-phone-alt"></i>
                    <span>+123 456 7890</span>
                  </li>
                  <li>
                    <i class="fas fa-envelope"></i>
                    <span>info@library.com</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="container">
      <div class="copyright-area">
        <div class="row">
          <div class="col-xl-6 col-lg-6 text-center text-lg-left">
            <div class="copyright-text">
              <p>
                Copyright &copy; 2024, All Right Reserved
                <a href="https://codepen.io/anupkumar92/">Info</a>
              </p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
            <div class="footer-menu">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Books/Journals</a></li>
                <li><a href="#">CDs/DVDs</a></li>
                <li><a href="#">Games</a></li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    </footer>
  </section>


  <script>
    
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/js/index.js') ?>"></script>
</body>

</html>