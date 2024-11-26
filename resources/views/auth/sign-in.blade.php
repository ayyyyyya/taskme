<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>TaskMe | Sign In</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="/admin-template/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/admin-template/assets/css/lineicons.css" />
    <link rel="stylesheet" href="/admin-template/assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="/admin-template/assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="/admin-template/assets/css/main.css" />
</head>

<body>
    {{-- START : Sign In --}}
    <div class="row g-0 auth-row">
        <div class="col-lg-6">
            <div class="auth-cover-wrapper bg-primary-100">
                <div class="auth-cover">
                    <div class="title text-center">
                        <h1 class="text-primary mb-10">Welcome Back</h1>
                        <p class="text-medium">
                            Sign in to your Existing account to continue
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
            <div class="signin-wrapper">
                <div class="form-wrapper">
                    <h6 class="mb-15">Sign In Form</h6>
                    <p class="text-sm mb-25">
                        Start creating the best possible user experience for you
                        customers.
                    </p>
                    <form action="/auth/sign-in" method="POST">
                        @csrf
                        <div class="row">
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
                            <div class="col-xxl-6 col-lg-12 col-md-6">
                                <div class="form-check checkbox-style mb-30">
                                    <input class="form-check-input" type="checkbox" value="" id="checkbox-remember" />
                                    <label class="form-check-label" for="checkbox-remember">Ingat saya</label>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-xxl-6 col-lg-12 col-md-6">
                                <div class="text-start text-md-end text-lg-start text-xxl-end mb-30">
                                    <a href="#0" class="hover-underline">Lupa Password?</a>
                                </div>
                            </div>
                            <!-- end col -->
                            <div class="col-12">
                                <div class="button-group d-flex justify-content-center flex-wrap">
                                    <button class="main-btn primary-btn btn-hover w-100 text-center">
                                        Masuk
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </form>
                    
                    <div class="singin-option pt-40">
                        <p class="text-sm text-medium text-center text-gray">
                            Easy Sign In With
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
                            Don’t have any account yet?
                            <a href="/sign-up">Create an account</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    {{-- END : Sign In --}}
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
