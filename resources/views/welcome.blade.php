<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Outfix Sweaters</title>
</head>

<body>
    <nav id="navbar" class="nav">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="logo">
                        <a href="#">Logo</a>
                    </div>
                </div>
                <div class="col sections">
                    <div class="main_list">
                        <ul class="navlinks">
                            <li class="ml-auto"><a href="#model1">About</a></li>
                            <li class=""><a href="#model1">Aout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-1 ml-auto">
                    <span class="navTrigger">
                        <i>
                            <h1></h1>
                        </i>
                        <i>
                            <h1></h1>
                        </i>
                        <i>
                            <h1></h1>
                        </i>
                    </span>
                </div>

                <div id="sections-mobile" class="col-12 d-none">
                    <div class="main_list">
                        <ul class="navlinks">
                            <li><a href="#model1">Abasdout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="">
        <div class="">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
                        <div class="carousel-caption">
                            <h2 class="title display-3">Alquimia Sweaters</h2>
                            <p class="lead">Prendas pensadas para la mujer que siente libertad al vestirse</p>
                        </div>
                    </div>
                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
                        <div class="carousel-caption">
                            <h2 class="title display-3">Alquimia Sweaters</h2>
                            <p class="lead">Moda versátil, adaptable a cualquier look y momento del dia</p>
                        </div>
                    </div>
                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
                        <div class="carousel-caption">
                            <h2 class="title display-3">Alquimia Sweaters</h2>
                            <p class="lead">Texturas extremadamente suaves, nuestras prendas oversize hoy son tendencia</p>
                        </div>
                    </div>
                    <!--
                    <div class="arrow">
                        <a href="#content"><i class="fas fa-chevron-down fa-7x"></i></a>
                    </div>-->
                </div>
            </div>
    </header>

    <section>
        <div id="content" class='container'>
            <div class="model row justify-content-center">
                <div id="model1" class="col-12 mt-5 mb-3 text-center">
                    <h2 class="model-title">modelo 1</h2>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card">
                        <div class="card-body p-0">

                            <div id="modelo1" class="carousel slide" data-ride="carousel" data-interval="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item product-carousel-item active">
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                        <span class="zoom">
                                            <img class="card-img" src="{{asset('images/season-2021/autumn-winter/models/capucha-esmeralda/ejemplo.jpg')}}" alt="">
                                        </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                        <span class="zoom">
                                            <img class="card-img" src="{{asset('images/season-2021/autumn-winter/models/capucha-esmeralda/ejemplo2.jpg')}}" alt="">
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#modelo1" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#modelo1" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <div class="info col-12 text-start">
                                <h4 class="card-title mb-1">modelo 1</h4>
                                <p class="card-text m-0 text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. At consequatur </p>
                                <div class="container">
                                    <div class="row justify-content-end color-container">
                                        <div class="color" style="background-color: red;"></div>
                                        <div class="color" style="background-color: green;"></div>
                                        <div class="color" style="background-color: blue;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Footer -->
    <footer class="text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-0">
            <!--Grid row-->
            <!--Grid column-->
            <div class="d-inline">
                <div class=""></div>
                <h5 class="text-uppercase">Footer Content</h5>

                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="icon d-inline">
                <a href="https://www.facebook.com/alquimia.sweaters"><i class="fab fa-facebook-f fa-2x"></i></a>
            </div>
            <div class="icon d-inline">
                <a href="https://www.instagram.com/alquimia.sweaters/?hl=es-la"><i class="fab fa-instagram fa-2x"></i></a>
            </div>
            <!--Grid column-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="col-12 text-center ">
            © 2021 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">Alquimia Sweaters</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="{{ asset('js/app.js') }}"> </script>
    <script src="{{ asset('js/jquery.zoom.js') }}"> </script>
    <script src="{{ asset('js/zoomInit.js') }}"> </script>

    <script src="https://kit.fontawesome.com/296d8bf733.js" crossorigin="anonymous"></script>
</body>

</html>