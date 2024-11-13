<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Library Management System - Login</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?= base_url('assets/style/input.css') ?>" />
  </head>
  <body>
    <div class="container-fluid">
      <div class="row align-items-center justify-content-center ">
        <div class="col-md-6 col-lg-7 left-section">
          <div class="content-wrapper text-center">
            <div class="rounded-box p-5">
              <h1 class="left-title mb-3">Don't Have An Account Yet?</h1>
              <p class="left-description mb-4">
                Sign up if you still don't have an account ...
              </p>
              <button class="btn btn-outline-light" onclick="window.location.href='<?= site_url('register') ?>'">
                Sign Up
            </button>
            
            </div>
          </div>
        </div>

        <div class="col-md-8 col-lg-5">
          <div class="form-container">
            <h2 class="text-start mb-5">Sign In</h2>
            <form action="<?= site_url('/') ?>">
              <div class="mb-3 icon-input">
                <span class="form-icon"><i class="bi bi-envelope"></i></span>
                <input
                  type="email"
                  class="form-control"
                  placeholder="Email"
                  required
                />
              </div>

              <div class="mb-3 icon-input">
                <span class="form-icon"><i class="bi bi-lock"></i></span>
                <input
                  type="password"
                  class="form-control"
                  placeholder="Password"
                  required
                />
              </div>

              <button type="submit" class="btn btn-primary w-100">
                Sign In
              </button>
            </form>
            <!-- onclick="window.location.href='//site_url('/')'" -->
            <div class="text-center mt-3">
              <p>
                Don't have an account?
                <a href="<?= site_url('register') ?>" class="text-primary"
                  >Sign Up</a
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css"
      rel="stylesheet"
    />
  </body>
</html>

