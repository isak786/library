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
  <nav class="navbar navbar-expand-lg navbar-light fixed-top transparent">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?= base_url('assets/images/caplogo.png') ?>" alt="Libraria Logo" class="logo"> LMS
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="<?= base_url('assets/images/caplogo.png') ?>" class="logo" alt="">LMS</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav mx-auto gap-4 mt-2">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Books/Journals</a></li>
            <li class="nav-item"><a class="nav-link" href="#">CDs/DVDs</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Games</a></li>
          </ul>
          <div class="d-flex gap-3 mt-2">
            <a href="<?= site_url('login') ?>" class="btn btn-login">Login</a>
            <a href="<?= site_url('register') ?>" class="btn btn-register">Register</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <!--Hero Section -->
  <section class="bgheronew">
    <div class="container text-center promo-content mt-5">
      <h4 class="promo-subtitle">Online Learning Anytime, Anywhere!</h4>
      <h2 class="promo-title">DISCOVER YOUR ROOTS</h2>
      <p class="parahero">
        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humor, or randomized words.
      </p>
      <div class="hero-buttons">
        <a href="#" class="btnLearnMore">Learn More</a>

      </div>
    </div>
  </section>
  <!-- About Section -->
  <section class="container mt-5">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-6">
        <h3>About</h3>
        <div class="line"></div>
        <p class="parablog ">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate, corrupti consequuntur? Laboriosam quos quidem nobis quod harum, reprehenderit ratione beatae distinctio, facilis placeat explicabo ipsum tenetur, ab eius fugit accusamus?
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sapiente atque vitae dolor facilis itaque nam a unde quos quaerat sunt velit error saepe, exercitationem ratione qui fugit, optio iste!
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ducimus voluptates quo inventore placeat, blanditiis dolorem quam saepe distinctio enim consectetur quis asperiores quia maiores maxime fuga veritatis harum dolorum.
        </p>
      </div>
      <div class="col-md-6 text-center">
        <img src="<?= base_url('assets/images/signUp2.png') ?>" class="grilimg" alt="">
      </div>
    </div>
  </section>
  <!-- Featured Books Section -->
  <section>
    <div class="container mt-5">
      <h1 class="feturedheading ">Featured Books</h1>
      <div class="line"></div>
      <div class="row justify-content-center">

        <div class="col-lg-3 col-md-6 mt-3 d-flex justify-content-center">
          <div class="book-card">
            <img src="<?= base_url('assets/images/book2.png') ?>" alt="Book Image" class="book-image" />
            <div class="book-info">
              <h3 class="book-title">Book Title</h3>
              <p class="book-author">by Author Name</p>
              <p class="book-description">
                Short description about the book goes here. It could be an overview or key points.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-3 d-flex justify-content-center">
          <div class="book-card">
            <img src="<?= base_url('assets/images/book3.png') ?>" alt="Book Image" class="book-image" />
            <div class="book-info">
              <h3 class="book-title">Book Title</h3>
              <p class="book-author">by Author Name</p>
              <p class="book-description">
                Short description about the book goes here. It could be an overview or key points.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-3 d-flex justify-content-center">
          <div class="book-card">
            <img src="<?= base_url('assets/images/book3.png') ?>" alt="Book Image" class="book-image" />
            <div class="book-info">
              <h3 class="book-title">Book Title</h3>
              <p class="book-author">by Author Name</p>
              <p class="book-description">
                Short description about the book goes here. It could be an overview or key points.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-3 d-flex justify-content-center">
          <div class="book-card">
            <img src="<?= base_url('assets/images/book2.png') ?>" alt="Book Image" class="book-image" />
            <div class="book-info">
              <h3 class="book-title">Book Title</h3>
              <p class="book-author">by Author Name</p>
              <p class="book-description">
                Short description about the book goes here. It could be an overview or key points.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Article Section -->
  <section class=" mt-5">
    <h1 class="text-center">Stay updated with articles</h1>

    <div class="container">
      <div class="row mt-5">

        <div class="col-lg-4 col-md-6 mt-3">
          <div class="card h-100">

            <img src="<?= base_url('assets/images/articles1.jpg') ?>" alt="Book Cover">
            <div class="card-body">
              <div class="d-flex align-items-center gap-3 bg_flag w-50 mb-4  justify-content-center">
                <div>
                  <img src="<?= base_url('assets/images/candianFlag.png') ?>" class="flagicon" alt="">
                </div>
                <div>Canada</div>
              </div>
              <div>
                <h4 class="text-start">Employment Reference Letter for Canada PRR</h4>
                <p class="text-start parablog">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos perferendis quod eius, hic tempora quas natus nam repellat beatae corporis sint aliquam eaque tenetur nesciunt laudantium animi? Obcaecati, corrupti? Omnis?</p>
              </div>
              <div class="text-start btn">
                Read Articles >
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-3">
          <div class="card h-100">
            <img src="<?= base_url('assets/images/articles2.jpg') ?>" alt="Book Cover">
            <div class="card-body">
              <div class="d-flex align-items-center gap-3 bg_flag w-50 mb-4  justify-content-center">
                <div>
                  <img src="<?= base_url('assets/images/candianFlag.png') ?>" class="flagicon" alt="">
                </div>
                <div>Canada</div>
              </div>
              <div>
                <h4 class="text-start">Employment Reference Letter for Canada PRR</h4>
                <p class="text-start parablog">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos perferendis quod eius, hic tempora quas natus nam repellat beatae corporis sint aliquam eaque tenetur nesciunt laudantium animi? Obcaecati, corrupti? Omnis?</p>
              </div>
              <div class="text-start btn">
                Read Articles >
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-3">
          <div class="card h-100">

            <img src="<?= base_url('assets/images/articles1.jpg') ?>" alt="Book Cover">
            <div class="card-body">
              <div class="d-flex align-items-center gap-3 bg_flag w-50 mb-4  justify-content-center">
                <div>
                  <img src="<?= base_url('assets/images/candianFlag.png') ?>" class="flagicon" alt="">
                </div>
                <div>Canada</div>
              </div>
              <div>
                <h4 class="text-start">Employment Reference Letter for Canada PRR</h4>
                <p class="text-start parablog">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos perferendis quod eius, hic tempora quas natus nam repellat beatae corporis sint aliquam eaque tenetur nesciunt laudantium animi? Obcaecati, corrupti? Omnis?</p>
              </div>
              <div class="text-start btn">
                Read Articles >
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </section>
  <!-- Testimonial Section -->
  <section class="container-fluid bg-articles mt-4 overflow-hidden">
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner container">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-lg-4 col-md-6 mt-3">
              <div class="card cardtesti p-3">
                <div class="d-flex gap-4">
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                </div>
                <div class="parablog">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus harum accusantium deserunt totam cupiditate, unde maxime sunt eos nulla dignissimos laboriosam expedita amet rem eaque, eius ipsa ipsam porro! Sapiente.
                </div>
                <div class="d-flex align-items-center gap-3 mt-4">
                  <img src="<?= base_url('assets/images/testi.png') ?>" class="testiImg" alt="">
                  <div>John Doe<br><span class="parablog">Freelancer</span></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-3">
              <div class="card cardtesti p-3">
                <div class="d-flex gap-4">
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                </div>
                <div class="parablog">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus harum accusantium deserunt totam cupiditate, unde maxime sunt eos nulla dignissimos laboriosam expedita amet rem eaque, eius ipsa ipsam porro! Sapiente.
                </div>
                <div class="d-flex align-items-center gap-3 mt-4">
                  <img src="<?= base_url('assets/images/testi.png') ?>" class="testiImg" alt="">
                  <div>John Doe<br><span class="parablog">Freelancer</span></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-3">
              <div class="card cardtesti p-3">
                <div class="d-flex gap-4">
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                </div>
                <div class="parablog">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus harum accusantium deserunt totam cupiditate, unde maxime sunt eos nulla dignissimos laboriosam expedita amet rem eaque, eius ipsa ipsam porro! Sapiente.
                </div>
                <div class="d-flex align-items-center gap-3 mt-4">
                  <img src="<?= base_url('assets/images/testi.png') ?>" class="testiImg" alt="">
                  <div>John Doe<br><span class="parablog">Freelancer</span></div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-4 col-md-6 mt-3">
              <div class="card cardtesti p-3">
                <div class="d-flex gap-4">
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                </div>
                <div class="parablog">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus harum accusantium deserunt totam cupiditate, unde maxime sunt eos nulla dignissimos laboriosam expedita amet rem eaque, eius ipsa ipsam porro! Sapiente.
                </div>
                <div class="d-flex align-items-center gap-3 mt-4">
                  <img src="<?= base_url('assets/images/testi.png') ?>" class="testiImg" alt="">
                  <div>John Doe<br><span class="parablog">Freelancer</span></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 mt-3">
              <div class="card cardtesti p-3">
                <div class="d-flex gap-4">
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                  <i class="bi bi-star"></i>
                </div>
                <div class="parablog">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus harum accusantium deserunt totam cupiditate, unde maxime sunt eos nulla dignissimos laboriosam expedita amet rem eaque, eius ipsa ipsam porro! Sapiente.
                </div>
                <div class="d-flex align-items-center gap-3 mt-4">
                  <img src="<?= base_url('assets/images/testi.png') ?>" class="testiImg" alt="">
                  <div>John Doe<br><span class="parablog">Freelancer</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
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





  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/js/index.js') ?>"></script>
</body>

</html>