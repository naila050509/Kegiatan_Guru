<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Login - Gentelella</title>    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
    /* ===== Login/Register Card Style ===== */
        .login-bg {
        background: linear-gradient(135deg, #2A3F54 0%, #34495e 100%);
        min-height: 100vh;
        }

        /* Card Animation */
       .card {
        animation: fadeInUp 0.6s ease-out;
        border-radius: 16px;
        padding: 10px 5px;
        margin: 50px auto; /* Tambah jarak atas & bawah, tengah secara horizontal */
        max-width: 410px;   /* Biar nggak terlalu lebar di layar besar */
        }


        /* Brand Logo */
        .brand-logo {
        color: #1ABB9C;
        border: 2px solid #1ABB9C;
        padding: 8px 10px;
        border-radius: 50%;
        font-size: 1.2rem;
        margin-right: 10px;
        }

        /* Login & Register Form Input Groups */
        .login-input-group .form-control,
        .login-input-group .input-group-text,
        .login-input-group .btn {
        height: 38px;
        line-height: 1.5;
        }

        .login-input-group .form-control {
        border-radius: 0;
        padding-left: 10px;
        border-left: none;
        border-right: none;
        border-top: none;
        border-bottom: 1px solid #ced4da;
        background: transparent;
        color: #333;
        }

        .login-input-group .form-control:focus {
        box-shadow: none;
        border-color: #86b7fe;
        }

        .login-input-group .input-group-text {
        border-radius: 0.375rem 0 0 0.375rem;
        background-color: #f8f9fa;
        border-right: none;
        color: #888;
        }

        .login-input-group .btn {
        border-radius: 0 0.375rem 0.375rem 0;
        border-color: #ced4da !important;
        background-color: #f8f9fa;
        }

        .login-input-group .btn:hover {
        background: rgba(0,0,0,0.05);
        }

        /* Eye icon style */
        .eye-btn {
        border-color: #ced4da !important;
        color: #ced4da !important;
        }

        /* Button Styles */
        .btn-primary {
        background: linear-gradient(to right, #1ABB9C, #20c997);
        border: none;
        transition: all 0.3s ease;
        }

        .btn-primary:hover {
        background: linear-gradient(to right, #17a88b, #1bb890);
        }

        .btn-success {
        background: linear-gradient(to right, #28a745, #218838);
        border: none;
        }

        .btn-success:hover {
        background: linear-gradient(to right, #218838, #1e7e34);
        }

        /* Footer */
        .footer-links a {
        opacity: 0.75;
        transition: 0.3s;
        }

        .footer-links a:hover {
        opacity: 1;
        }

        /* Animation */
        @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
        }

        /* Responsive tweaks */
        @media (max-width: 576px) {
        .card {
        padding: 20px;
        margin: 20px;
        }
    }


    </style>
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMt23cez/3paNdF+2z5l5d5e5b5e5b5e5b5e5b" crossorigin="anonymous">
    
    <!-- Custom styles -->
  </head>

  <body class="login-bg">
    <div class="container-fluid d-flex align-items-center justify-content-center min-vh-100">
      <div class="row justify-content-center w-100">
        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-10">
          
          <!-- Login Form Card -->
          <div class="card shadow-lg border-0" id="loginCard">
            <div class="card-body p-5">
              <!-- Brand Header -->
              <div class="text-center mb-4">
                <div class="d-flex align-items-center justify-content-center mb-3">
                  <img src="images/logo.svg" style="height: 35px; width: auto;">
                  <h3 class="mb-0 fw-bold text-dark">Naila</h3>
                </div>
                <p class="text-muted">Please sign in to your account </p>
              </div>

              <!-- Login Form -->
             <form id="Form" action="proses.php" method="POST">
                <input type="hidden" name="login" value="1">
                <div class="mb-3">
                    <label for="username" class="form-label text-muted">Username</label>
                    <div class="input-group login-input-group">
                    <span class="input-group-text bg-light border-end-0">
                        <i class="fas fa-user text-muted"></i>
                    </span>
                    <input type="text" class="form-control border-start-0 ps-0"
                            id="username" name="nama" placeholder="Enter your username" required>
                    </div>
                </div>

                  <div class="mb-3">
                      <label for="password" class="form-label text-muted">Password</label>
                      <div class="input-group login-input-group">
                      <span class="input-group-text bg-light border-end-0">
                          <i class="fas fa-lock text-muted"></i>
                      </span>
                      <input type="password" class="form-control border-start-0 ps-0"
                              id="password" name="password" placeholder="Enter your password" required>
                      <button class="btn btn-outline-secondary border-start-0" type="button" id="togglePassword">
                          <i class="fas fa-eye" id="eyeIcon"></i>
                      </button>
                      </div>
                  </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="rememberMe">
                    <label class="form-check-label text-muted" for="rememberMe">
                        Remember me 
                    </label>
                    </div>
                    <a href="#" class="text-decoration-none" id="forgotPasswordLink">Forgot password?</a>
                </div>

                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary btn-lg">
                    <i class="fas fa-sign-in-alt me-2"></i>Sign In
                    </button>
                </div>
              </form>


              <!-- Divider -->
              <div class="text-center mb-3">
                <span class="text-muted">Don't have an account?</span>
                <a href="#" class="text-decoration-none ms-1" id="showRegisterForm">Create Account</a>
              </div>
            </div>
          </div>

          <!-- Registration Form Card (Hidden by default) -->
          <div class="card shadow-lg border-0 d-none" id="registerCard">
            <div class="card-body p-5">
              <!-- Brand Header -->
              <div class="text-center mb-4">
                <div class="d-flex align-items-center justify-content-center mb-3">
                  <img src="images/logo.svg" style="height: 35px; width: auto;">
                  <h3 class="mb-0 fw-bold text-dark">Naila</h3>
                </div>
                <p class="text-muted">Create your new account</p>
              </div>

              <!-- Registration Form -->
              <form id="registerForm" action="proses.php" method="POST">
                <input type="hidden" name="submit" value="1"> <!-- trigger register -->

                <div class="mb-3">
                  <label for="regUsername" class="form-label text-muted">Username</label>
                  <div class="input-group login-input-group">
                    <span class="input-group-text bg-light border-end-0">
                      <i class="fas fa-user text-muted"></i>
                    </span>
                    <input type="text" name="nama" class="form-control border-start-0 ps-0" id="regUsername" placeholder="Choose a username" required>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="regPassword" class="form-label text-muted">Password</label>
                  <div class="input-group login-input-group">
                    <span class="input-group-text bg-light border-end-0">
                      <i class="fas fa-lock text-muted"></i>
                    </span>
                    <input type="password" name="password" class="form-control border-start-0 ps-0" id="regPassword" placeholder="Create a password" required>
                  </div>
                </div>

                <div class="mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                    <label class="form-check-label text-muted" for="agreeTerms">
                      I agree to the <a href="#" class="text-decoration-none">Terms</a> and <a href="#" class="text-decoration-none">Privacy</a>
                    </label>
                  </div>
                </div>

                <div class="d-grid mb-3">
                  <button type="submit" class="btn btn-success btn-lg">
                    <i class="fas fa-user-plus me-2"></i>Create Account
                  </button>
                </div>
              </form>
              
              <!-- Divider -->
              <div class="text-center mb-3">
                <span class="text-muted">Already have an account?</span>
                <a href="#" class="text-decoration-none ms-1" id="showLoginForm">Sign In</a>
              </div>
            </div>
          </div>

          <!-- Footer -->
          <div class="text-center mt-4">
            <p class="text-light opacity-75 mb-2">
              &copy; 2025 All Rights Reserved. Gentelella is a Bootstrap 5 template.
            </p>
            <div>
              <a href="#" class="text-light text-decoration-none opacity-75 me-3">Privacy</a>
              <a href="#" class="text-light text-decoration-none opacity-75 me-3">Terms</a>
              <a href="#" class="text-light text-decoration-none opacity-75">Support</a>
            </div>
          </div>

          <br>

        </div>
      </div>
    </div>

      <!-- JavaScript for form switching and password toggle -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        const loginCard = document.getElementById('loginCard');
        const registerCard = document.getElementById('registerCard');
        const showRegisterForm = document.getElementById('showRegisterForm');
        const showLoginForm = document.getElementById('showLoginForm');
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        // Form switching
        showRegisterForm.addEventListener('click', function(e) {
          e.preventDefault();
          loginCard.classList.add('d-none');
          registerCard.classList.remove('d-none');
        });

        showLoginForm.addEventListener('click', function(e) {
          e.preventDefault();
          registerCard.classList.add('d-none');
          loginCard.classList.remove('d-none');
        });

        // Password toggle
        togglePassword.addEventListener('click', function() {
          const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
          passwordInput.setAttribute('type', type);
          eyeIcon.classList.toggle('fa-eye');
          eyeIcon.classList.toggle('fa-eye-slash');
        });

        // Form submissions (redirect to dashboard)
        document.getElementById('loginForm').addEventListener('submit', function(e) {
          e.preventDefault();
          window.location.href = 'dist/index.php';
        });

        document.getElementById('registerForm').addEventListener('submit', function(e) {
          e.preventDefault();
          window.location.href = 'dist/index.php';
        });
      });
    </script>


  </body>
</html>
