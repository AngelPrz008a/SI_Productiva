<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login ProductivA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="./assets/css/styleLogin.css">
    <link rel="shortcut icon" href="assets/images/iconoo.png" type="image/png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/iconoo.png" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.2.0.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap-4.5.0.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css">


    <link rel="stylesheet" href="assets/css/VentanasM.css">


</head>

<body>

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->







    <!-- partial:index.partial.html -->
    <div id="back">
        <canvas id="canvas" class="canvas-back"></canvas>
        <div class="backRight">
        </div>
        <div class="backLeft">
        </div>
    </div>



    <div id="slideBox">
        <div class="topLayer">
            <div class="left">
                <img src="./assets/images/logooo2.png" class="logoV2" alt="">
                <div class="content">
                    <h2>
                        <Strong>Recuperar Contraseña</Strong>
                    </h2>
                    <form id="form-signup" method="post" onsubmit="return false;">
                        <div class="form-element form-stack">
                            <label for="email" class="form-label">N° Documento</label>
                            <input id="email" type="email" name="email">
                        </div>



                        <div class="form-element form-submit">

                            <button id="signUp" class="signup" type="submit" name="signup">Enviar</button>
                            <button id="goLeft" class="arrowL"><i class="fas fa-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>


            <div class="right">
                <img src="./assets/images/logooo.png" class="logoV" alt="">
                <div class="content">
                    <h2><strong>Iniciar Sesión</strong></h2>
                    <form id="form-login" method="POST" action="{{url('login')}}" >
                    @csrf
                        <div class="form-element form-stack">
                            <label for="username-login" class="form-label">Usuario</label>
                            <input id="username-login" value="{{old('number')}}" type="text" name="number">
                            @error('number')
                               {{$message}}
                                   @enderror
                        </div>
                        <div class="form-element form-stack">
                            <label for="password-login" class="form-label">Contraseña</label>
                            <input value="{{old('clave')}}" id="password-login" type="password" name="clave">
                            @error('clave')
                               {{$message}}
                                   @enderror

                        </div>
                        <div class="form-element form-submit">
                        
                            <a id="goRight" class="login off" name="signup">¿Olvidaste tu contraseña?</a>
                            <button id="logIn" class="login" type="submit" name="login">Ingresar</button>



                        </div>
                    </form>


                    
                    <a class="aLogin" href="{{ url('Landing')}}">
                    <i class="lni lni-chevron-left-circle"></i>
                    volver</a>
                    
                    @if (session('msg'))
                    <div style=" margin-top:1rem;" class="alert alert-danger">
                      {{session('msg')}}
                    </div>
                    @endif
                </div>
            </div>

        </div>
    </div>

    <!--

Remixed from "Sliding Login Form" Codepen by
C-Rodg (github.com/C-Rodg)
https://codepen.io/crodg/pen/yNKxej

Remixed from "Paper.js - Animated Shapes Header" Codepen by
Connor Hubeny (@cooper_hu)
https://codepen.io/cooper_hu/pen/ybxoev

Custom Checkbox based on the blog post by
Mik Ted (@inserthtml):
https://www.inserthtml.com/2012/06/custom-form-radio-checkbox/

HTML5 Form Validation based on the blog post by
Thoriq Firdaus (@tfirdaus):
https://webdesign.tutsplus.com/tutorials/
html5-form-validation-with-the-pattern-attribute--cms-25145

-->
    <!-- partial -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.11.3/paper-full.min.js"></script>
    <script src="./assets/js/scriptLogin.js"></script>


    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-3.5.1-min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap-4.5.0.min.js"></script>

    <!--====== Plugins js ======-->
    <script src="assets/js/plugins.js"></script>

    <!--====== Counter Up js ======-->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>



    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>

    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== Particles js ======-->
    <script src="assets/js/particles.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

    <!--====== Ventanas modales js ======-->
    <script src="assets/js/VentanasM.js"></script>






</body>

</html>



<!-- 

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

<form method="POST" action="{{url('login')}}">
    @csrf
    <fieldset>

    
    <legend>Login</legend>

   
    <div class="form-group">
      <label class="col-md-4 control-label" for="">Usuario</label>
      <div class="col-md-4">
      <input id=""  value="{{old('number')}}" name="number" type="text" placeholder="Usuario" class="form-control input-md">
        @error('number')
            {{$message}}
        @enderror
      </div>
    </div>

    
    <div class="form-group">
      <label class="col-md-4 control-label" for="">Contraseña</label>
      <div class="col-md-4">
        <input value="{{old('clave')}}" id="" name="clave" type="password" placeholder="Contraseña" class="form-control input-md">
        @error('clave')
            {{$message}}
        @enderror
      </div>
    </div>

   
    <div class="form-group">
      <label class="col-md-4 control-label" for=""></label>
      <div class="col-md-4">
        <button id="" name="" class="btn btn-primary">Ingresar</button>
      </div>
    </div>

    </fieldset>
</form>



@if (session('msg'))
{{session('msg')}}
@endif

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
 -->
