<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Library Management System - Register</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
    rel="stylesheet"
  />
    <link rel="stylesheet" href="<?= base_url('assets/style/input.css') ?>" />
  </head>
  <body>
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-md-6 col-lg-7 left-section">
          <div class="content-wrapper text-center">
            <div class="rounded-box p-5">
              <h1 class="left-title mb-3">Login!</h1>
              <p class="left-description mb-4">
                If you have an account ...
              </p>
              <button class="btn btn-outline-light" onclick="window.location.href='<?= site_url('login') ?>'">Sign in</button>
            </div>
          </div>
        </div>

        <div class="col-md-8 col-lg-5">
          <div class="form-container">
            <h2 class="text-start mb-5">Sign Up</h2>
            <form action="<?= site_url('/auth/processSignup') ?>" method="post">
              <div class="row">
                  <div class="col-md-6">
                      <div class="mb-3 icon-input">
                          <span class="form-icon"><i class="bi bi-person"></i></span>
                          <input id="first_name" name="first_name" type="text" class="form-control" placeholder="First Name" required />
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="mb-3 icon-input">
                          <span class="form-icon"><i class="bi bi-person"></i></span>
                          <input id="surname" name="surname"type="text" class="form-control" placeholder="Last Name" required />
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="mb-3 icon-input">
                          <span class="form-icon"><i class="bi bi-envelope"></i></span>
                          <input id="email" name="email" type="email" class="form-control" placeholder="Email" required />
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="mb-3 icon-input">
                          <span class="form-icon"><i class="bi bi-telephone"></i></span>
                          <input id="phone" name="phone" type="number" class="form-control" placeholder="Phone Number" required />
                      </div>
                  </div>
              </div>
              <div class="mb-3 icon-input">
                  <span class="form-icon"><i class="bi bi-lock"></i></span>
                  <input id="password" name="password" type="password" class="form-control" placeholder="Password" required />
              </div>
              <div class="mb-3 icon-input">
                  <span class="form-icon"><i class="bi bi-calendar"></i></span>
                  <input id="dob" name="dob" type="date" class="form-control" placeholder="Date of Birth" required />
              </div>
              <div class="mb-3 icon-input">
                  <select id="gender" name="gender" class="form-control" required>
                      <option value="" disabled selected>Select Gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="other">Other</option>
                  </select>
              </div>
          
              <button type="submit" class="btn btn-primary w-100" onclick="window.location.href='<?= site_url('login') ?>'">
               Sign Up
              </button>
          </form>
          
            <div class="text-center mt-3">
              <p>
                Already a member? <a href="<?= site_url('login') ?>" class="text-primary">Sign in</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
     
  </body>
</html>
