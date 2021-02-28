<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lemonada">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
</head>

<body class="bg-gradient-primary" style="background-image: url(&quot;assets/img/3185113.jpg&quot;);">
    <div class="container">
        <div class="row justify-content-center">
            
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;assets/img/Tqeda.png&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4" style="font-family: 'Baloo Bhaijaan', cursive;">Welcome To TQEDA !</h4>
                                    </div>
                                    <form class="user" method="post" action="{{ url('/connection') }}" >
                                        @csrf
                                          <div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="URL..." name="host"></div>
                                          <div class="form-group"><input class="form-control form-control-user" type="password"  placeholder="API Key..." name="key"></div>
                                          <div class="form-group"><input class="form-control form-control-user" type="password"  placeholder="API Secret..." name="secret"></div>
                                          
                                          <button class="btn btn-primary btn-block text-white btn-user" type="submit" style="background-color: rgb(0,0,0);font-size: 25px;">Connect</button>
                                          <hr>
                                          <hr>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @if(session()->has("msg"))
                <div class="alert alert-success">
                        {{ session()->get('msg') }}
                </div>
        @endif
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>