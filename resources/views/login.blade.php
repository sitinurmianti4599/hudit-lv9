<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Login </title>
    <link rel="icon" href="/assets/images/logo.png">


    <!-- Bootstrap -->
    <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
   
        <div class="login_wrapper mt-2 me-5">
            <div class="animate form login_form mt-5 p-1 ">
                <section class="card login_content p-4 mt-5 "
                    style="background-color: #030d1a; border-radius:20px; color:yellow;">
                    <center><img src="/assets/images/logohd.png" alt="..."
                            class=" img-responsive profile_img w-100 mt-4 ms-4"></center>
                    <form action="{{ route('web.login.perform') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h1>Login</h1>
                        <!-- <img src="/assets/images/user.png" alt="..." class="img-circle w-25 h-25 mb-3"
                            style="border:2px solid yellow"> -->

                        <div class="clear-fix"></div>
                        <div class="col-md-12 col-sm-6 mb-3">
                            <input class="form-control" data-validate-length-range="6" data-validate-words="2"
                                name="name" placeholder="Username" required=""
                                style="border:2px solid yellow; border-radius:10px;" required="required" />
                        </div>
                        <div class="col-md-12 col-sm-6">
                            <input class="form-control" type="password" id="password1" name="password"
                                placeholder="Password" required=""
                                style="border:2px solid yellow; border-radius:10px;" required />

                            <span style="position: absolute;right:15px;top:7px;" onclick="hideshow()">
                                <i id="slash" class="fa fa-eye-slash"></i>
                                <i id="eye" class="fa fa-eye"></i>
                            </span>
                        </div>

                        <button class="btn btn-warning submit w-50">Log in</button>
                        <x-error-validate />
                    </form>
                </section>
            </div> 
        </div>
  

        <script src="/assets/js/myscript.js"></script>

</body>

</html>
