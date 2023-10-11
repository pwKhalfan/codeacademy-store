<!doctype html>
<html lang="en" >

<head>

    <meta charset="utf-8" />
    <title>Free Register | Qovex - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/templates/store1/assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="/templates/store1/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/templates/store1/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/templates/store1/assets/css/app.min.css"  id="app-style"  rel="stylesheet" type="text/css" />

</head>

<body>
    <div class="home-btn d-none d-sm-block">
        <a href="index.html" class="text-reset"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-login text-center">
                            <div class="bg-login-overlay"></div>
                            <div class="position-relative">
                                <h5 class="text-white font-size-20">Free Register</h5>
                                <p class="text-white-50 mb-0">Get your free Qovex account now</p>
                                <a href="index.html" class="logo logo-admin mt-4">
                                    <img src="/templates/store1/assets/images/logo-sm-dark.png" alt="" height="30">
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-5">

                            <div class="p-2">
                                <form class="form-horizontal" action="/register" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="useremail"> {{__('Email')}} </label>
                                        <input type="email" class="form-control" id="useremail"
                                            placeholder="{{__('Enter email')}}" name="email">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="username"> {{__('Name')}} </label>
                                        <input type="text" class="form-control" id="username"
                                            placeholder="{{__('Enter name')}}" name="name">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword"> {{__('Password')}} </label>
                                        <input type="password" class="form-control" id="userpassword"
                                            placeholder="{{__('Enter password')}}" name="password">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword"> {{__('Password Confirmation')}} </label>
                                        <input type="password" class="form-control" id="userpassword"
                                            placeholder="{{__('Enter password confirmation')}}" name="password_confirmation">
                                    </div>

                                    <div class="mt-4">
                                        <button class="btn btn-primary w-100 waves-effect waves-light"
                                            type="submit">Register</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <p class="mb-0">By registering you agree to the Skote <a href="#"
                                                class="text-primary">Terms of Use</a></p>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <p>Already have an account ? <a href="pages-login.html" class="fw-medium text-primary">
                                Login</a> </p>
                        <p>©
                            <script>document.write(new Date().getFullYear())</script> Qovex. Crafted with <i
                                class="mdi mdi-heart text-danger"></i> by Themesbrand
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <!-- JAVASCRIPT -->
    <script src="/templates/store1/assets/libs/jquery/jquery.min.js"></script>
    <script src="/templates/store1/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/templates/store1/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="/templates/store1/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/templates/store1/assets/libs/node-waves/waves.min.js"></script>
    <script src="/templates/store1/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>


    <script src="/templates/store1/assets/js/app.js"></script>

</body>

</html>