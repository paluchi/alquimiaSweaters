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
                        <a href="#">Your Logo</a>
                    </div>
                </div>
                <div class="col sections">
                    <div class="main_list">
                        <ul class="navlinks">
                            <li><a href="#model1">About</a></li>
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
                            <h2 class="display-4">First Slide</h2>
                            <p class="lead">This is a description for the first slide.</p>
                        </div>
                    </div>
                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
                        <div class="carousel-caption">
                            <h2 class="display-4">Second Slide</h2>
                            <p class="lead">This is a description for the second slide.</p>
                        </div>
                    </div>
                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
                        <div class="carousel-caption">
                            <h2 class="display-4">Third Slide</h2>
                            <p class="lead">This is a description for the third slide.</p>
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
                    <h2 class="">modelo 1</h2>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="col-12 p-0 m-0">
                                <img class="item-img" src="{{ URL::asset('images/season-2021/autumn-winter/models/capucha-esmeralda/ejemplo.jpg') }}" alt="">
                            </div>
                            <div class="info col-12 p-2">
                                <h4 class="card-title mb-1">modelo 1</h4>
                                <p class="card-text m-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. At consequatur amet nihil quis nisi praesentium possimus, labore et tempore, tempora atque aut dicta aliquid. Eius excepturi minima itaque repudiandae vitae?</p>
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


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="{{ asset('js/app.js') }}"> </script>

    <script src="https://kit.fontawesome.com/296d8bf733.js" crossorigin="anonymous"></script>
</body>

</html>