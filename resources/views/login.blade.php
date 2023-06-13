<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Login </title>

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
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper mt-5 me-5">
            <div class="animate form login_form mt-5 p-4">
                <section class="card login_content p-4 mt-5"
                    style="background-color: #030d1a; border-radius:20px; color:yellow;">
                    <center><img src="/assets/images/logohd.png" alt="..."
                            class=" img-responsive profile_img w-100 mt-4 ms-4"></center>
                    <div>
                        <h1>Welcome</h1>
                        <div>
                            <a class="btn btn-warning submit w-100 mb-3 p-1" href="#signup" class="to_register">
                                <h6 class="mt-2">Admin</h6>
                            </a>
                        </div>
                        <div>
                            <a class="btn btn-warning submit w-100 mb-3 p-1" href="#signup" class="to_register">
                                <h6 class="mt-2">Penanggung Jawab</h6>
                            </a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                        </div>
                    </div>
                </section>
            </div>

            <div id="register" class="card animate form registration_form mt-5 p-2 me-2 col-md-12 col-sm-12"
                style="background-color: #030d1a; color:yellow; border:2px solid yellow; border-radius:20px;">
                <section class="login_content p-1 ">
                    <form action="{{ route('web.login.perform') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h1>Login <span>admin</span></h1>
                        <img src="/assets/images/user.png" alt="..." class="img-circle w-25 h-25 mb-3"
                            style="border:2px solid yellow">

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

                        <div class="clearfix"></div>

                        <div class="separator">
                            <a href="#signin" class="to_register">
                                <h5>Kembali</h5>
                            </a>
                        </div>

                        <x-error-validate />
                    </form>
                </section>

            </div>
        </div>
    </div>


    <script>
        function hideshow() {
            var password = document.getElementById("password1");
            var slash = document.getElementById("slash");
            var eye = document.getElementById("eye");

            if (password.type === 'password') {
                password.type = "text";
                slash.style.display = "block";
                eye.style.display = "none";
            } else {
                password.type = "password";
                slash.style.display = "none";
                eye.style.display = "block";
            }

        }
    </script>
</body>

</html>
