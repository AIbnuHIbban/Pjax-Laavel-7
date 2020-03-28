<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Register SIKasir - Mudah Dalam Berwirausaha </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <link href="{{asset('dist/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('dist/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('dist/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern d-flex align-items-center">

        <div class="home-btn d-none d-sm-block">
            <a href="javascript:void(0)"><i class="fas fa-home h2 text-white"></i></a>
        </div>
        
        <div class="account-pages w-100 mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">
                                
                                <div class="text-center mb-4">
                                    <a href="javascript:void(0)">
                                        <span><img src="{{asset('icon_text.png')}}" alt="" height="28"></span>
                                    </a>
                                </div>

                                <form action="#" class="pt-2">

                                    {{-- <div class="form-group mb-3">
                                        <label for="fullname">Full Name</label>
                                        <input class="form-control" type="text" id="fullname" placeholder="Enter your name" required>
                                    </div> --}}
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Email address</label>
                                        <input class="form-control" type="email" id="emailaddress" required placeholder="Enter your email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required id="password" placeholder="Enter your password">
                                    </div>
                                    
                                    <div class="form-group mb-3">
                                        <label for="confirm_password">Confirmation Password</label>
                                        <input class="form-control" type="password" required id="password" placeholder="Enter your password again">
                                    </div>
                                    
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="checkbox-signup">
                                        <label class="custom-control-label" for="checkbox-signup">I accept <a href="javascript: void(0);" class="text-dark">Terms and Conditions</a></label>
                                    </div>
                                    
                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-success btn-block" type="submit"> Sign Up </button>
                                    </div>

                                </form>

                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <p class="text-muted mb-0">Already have account?  <a href="{{url('login')}}" class="text-dark ml-1"><b>Sign In</b></a></p>
                                </div>

                        </div>

                </div>
            </div>
        </div>

        <script src="{{asset('dist/assets/js/vendor.min.js')}}"></script>

        <script src="{{asset('dist/assets/js/app.min.js')}}"></script>
        
    </body>
</html>