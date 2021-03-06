<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ElTianguisdelAutomovil - Recuperar contraseña</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link href="assets/css/theme.css" rel="stylesheet">



</head>

<body>
    <!-- Wrap -->

    <div id="wrap">


        <div id="landing">
            <div class="header-image">
                <div class="container">
                    <div class="auth-unit">

                        <h3 class="text-brand"><span class="glyphicon glyphicon-dashboard"></span> ElTianguisdelAutomovil</span></h3>
                        <div class="auth-unit-top">
                            <h3>Recuperar Contraseña</h3>
                            <p>recupera tu contraseña si la has perdido!</p>
                        </div>


                        <div class="auth-unit-inner">
                            <form role="form" class="tooltip-demo">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cuenta de correo</label>
                                    <input type="email" class="form-control " id="exampleInputEmail1" placeholder="email@example.com">
                                </div>
                                <a href="login.html" class="btn btn-danger btn-block">Recuperar Contraseña</a>
                            </form>
                        </div>

                        <br>
                        <a href="{{URL::to('/acceso')}}" class="btn btn-primary btn-block btn-lg"><strong>Accesa</strong> a tu cuenta</a>
                        <a href="{{URL::to('/registro')}}" class="btn btn-success btn-block btn-lg"><strong>Registrate</strong> es gratis</a>

                    </div>
                </div>
            </div>
            <!-- /header-image -->
        </div>

    </div>
    <!-- /Wrap -->


    <!-- Footer -->

    <div id="footer">
        <div class="container">

            <ul class="list-inline">
                <li><a href="index.html">Home</a>
                </li>
                <li><a href="#">Terms</a>
                </li>
                <li><a href="#">About</a>
                </li>
                <li><a href="#">Our Blog</a>
                </li>
                <li><a href="#">Contact Us</a>
                </li>
                <li><a href="#">List your Vehicle</a>
                </li>
                <li><a href="browse.html">Browse Vehicles</a>
                </li>
            </ul>
            <p class="text-muted credit">&copy; 2013 <strong>AutoMarket</strong> &middot; Created by: <a href="https://wrapbootstrap.com/user/themestrap">Themestrap</a> &middot; Powered by: <a href="http://getbootstrap.com/">Bootstrap</a> 
            </p>
        </div>
    </div>

    <!-- /Footer -->

    <!-- JS Assets -->

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>


</body>

</html>