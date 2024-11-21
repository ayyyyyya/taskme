<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>Sign Up | TaskMaster</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="/admin-template/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/admin-template/assets/css/lineicons.css" />
    <link rel="stylesheet" href="/admin-template/assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="/admin-template/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="/admin-template/assets/css/main.css" />
</head>

<body>
    {{-- START : Sign Up --}}
    <div class="row g-0 auth-row">
        <div class="col-lg-6">
            <div class="auth-cover-wrapper bg-primary-100">
                <div class="auth-cover">
                    <div class="title text-center">
                        <h1 class="text-primary mb-10">Get Started</h1>
                        <p class="text-medium">
                            Start creating the best possible user experience
                            <br class="d-sm-block" />
                            for you customers.
                        </p>
                    </div>
                    <div class="cover-image">
                        <img src="/admin-template/assets/images/auth/signin-image.svg" alt="" />
                    </div>
                    <div class="shape-image">
                        <img src="/admin-template/assets/images/auth/shape.svg" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
        <div class="col-lg-6">
            <div class="signup-wrapper">
                <div class="form-wrapper">
                    <h6 class="mb-15">Sign Up Form</h6>
                    <p class="text-sm mb-25">
                        Start creating the best possible user experience for you
                        customers.
                    </p>
                    <form action="/sign-up" method="POST">
                        @csrf  <!-- Jangan lupa menambahkan CSRF token -->
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Nama</label>
                                    <input type="text" name="name" placeholder="Nama" required />
                                </div>
                            </div>
                            <!-- end col -->
                    
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Email</label>
                                    <input type="email" name="email" placeholder="Email" required />
                                </div>
                            </div>
                            <!-- end col -->
                    
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Password</label>
                                    <input type="password" name="password" placeholder="Password" required />
                                </div>
                            </div>
                            <!-- end col -->
                    
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Konfirmasi Password</label>
                                    <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required />
                                </div>
                            </div>
                            <!-- end col -->
                    
                            <div class="col-12">
                                <div class="button-group d-flex justify-content-center flex-wrap">
                                    <button class="main-btn primary-btn btn-hover w-100 text-center">
                                        Daftar
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </form>                    
                     
                    <div class="singup-option pt-40">
                        <p class="text-sm text-medium text-center text-gray">
                            Easy Sign Up With
                        </p>
                        <div
                            class="
                    button-group
                    pt-40
                    pb-40
                    d-flex
                    justify-content-center
                    flex-wrap
                  ">
                            <button class="main-btn primary-btn-outline m-2">
                                <i class="lni lni-facebook-fill mr-10"></i>
                                Facebook
                            </button>
                            <a href="{{ route('auth.google') }}" class="main-btn danger-btn-outline m-2">
                                <i class="lni lni-google mr-10"></i>
                                Google
                            </a>
                        </div>
                        <p class="text-sm text-medium text-dark text-center">
                            Already have an account? <a href="signin.html">Sign In</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    {{-- END : Sign Up --}}
    <script src="/admin-template/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/admin-template/assets/js/Chart.min.js"></script>
    <script src="/admin-template/assets/js/dynamic-pie-chart.js"></script>
    <script src="/admin-template/assets/js/moment.min.js"></script>
    <script src="/admin-template/assets/js/fullcalendar.js"></script>
    <script src="/admin-template/assets/js/jvectormap.min.js"></script>
    <script src="/admin-template/assets/js/world-merc.js"></script>
    <script src="/admin-template/assets/js/polyfill.js"></script>
    <script src="/admin-template/assets/js/main.js"></script>
</body>
