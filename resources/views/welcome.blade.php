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

    <link rel="icon" href="{{asset('images/head/logo.png')}}">
    <title>Outfix Sweaters</title>
</head>

<body>
    <nav id="navbar" class="nav">
        <div class="container mx-5">
            <div class="row">
                <div class="col-6">
                    <div class="">
                        <a href="#">
                            <h2 class="header-logo">Alquimia Sweaters</h2>
                        </a>
                    </div>
                </div>
                <div class="col sections">
                    <div class="main_list">
                        <ul class="navlinks">
                            <li class="ml-auto"><a href="#temporada-2021">Temporada 2021</a></li>
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
                            <li><a href="#temporada-2021">Temporada 2021</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="">
        <div class="">
            <div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
                        <div class="carousel-caption header-carousel-caption">
                            <h2 class="title  header-title display-3">Alquimia Sweaters</h2>
                            <p class="lead header-lead">Prendas pensadas para la mujer que siente libertad al vestirse</p>
                        </div>
                    </div>
                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
                        <div class="carousel-caption header-carousel-caption">
                            <h2 class="title  header-title display-3">Alquimia Sweaters</h2>
                            <p class="lead header-lead">Moda versátil, adaptable a cualquier look y momento del dia</p>
                        </div>
                    </div>
                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
                        <div class="carousel-caption header-carousel-caption">
                            <h2 class="title  header-title display-3">Alquimia Sweaters</h2>
                            <p class="lead header-lead">Prendas con texturas extremadamente suaves</p>
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
            <div class="row justify-content-center">
                <div id="temporada-2021" class="col-12 mt-5 mb-3 text-center">
                    <h2 class="season-title">Temporada 2021</h2>
                    <hr>
                </div>

                <div id="otoño-invierno" class="col-12 mt-0 mb-2s text-center">
                    <h2 class="inner-season-title">"otoño-invierno"</h2>
                </div>


                <div class="col-12 col-md-9 col-lg-5">
                    <div class="card">
                        <div class="card-body p-0">

                            <div id="maxi-zafiro-bolsillos" class="carousel" data-ride="carousel" data-interval="false" data-touch="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item product-carousel-item active">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <span class="zoom z1">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-zafiro/h1.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item ">
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <div class="carousel-caption">
                                                <p class="product-lead">Lima</p>
                                            </div>
                                            <span class="zoom z1">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-zafiro/h2.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item ">
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <div class="carousel-caption">
                                                <p class="product-lead">Militar</p>
                                            </div>
                                            <span class="zoom z1">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-zafiro/h3.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item ">
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <div class="carousel-caption">
                                                <p class="product-lead">Beige</p>
                                            </div>
                                            <span class="zoom z1">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-zafiro/c1.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item ">
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <div class="carousel-caption">
                                                <p class="product-lead">Rojo</p>
                                            </div>
                                            <span class="zoom z1">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-zafiro/c2.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item ">
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <div class="carousel-caption">
                                                <p class="product-lead">Lavanda</p>
                                            </div>
                                            <span class="zoom z1">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-zafiro/c3.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item ">
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <div class="carousel-caption">
                                                <p class="product-lead">Negro</p>
                                            </div>
                                            <span class="zoom z1">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-zafiro/c4.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item ">
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <div class="carousel-caption">
                                                <p class="product-lead">Gris</p>
                                            </div>
                                            <span class="zoom z1">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-zafiro/c5.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item ">
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <div class="carousel-caption">
                                                <p class="product-lead">Rosa</p>
                                            </div>
                                            <span class="zoom z1">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-zafiro/c6.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item ">
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <div class="carousel-caption">
                                                <p class="product-lead">Aqua</p>
                                            </div>
                                            <span class="zoom z1">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-zafiro/c7.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item ">
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <div class="carousel-caption">
                                                <p class="product-lead">Verde</p>
                                            </div>
                                            <span class="zoom z1">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-zafiro/c8.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item ">
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <div class="carousel-caption">
                                                <p class="product-lead">Lila</p>
                                            </div>
                                            <span class="zoom z1">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-zafiro/c9.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item ">
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <div class="carousel-caption">
                                                <p class="product-lead">Lima</p>
                                            </div>
                                            <span class="zoom z1">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-zafiro/c10.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item ">
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <div class="carousel-caption">
                                                <p class="product-lead">Militar</p>
                                            </div>
                                            <span class="zoom z1">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-zafiro/c11.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item ">
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <div class="carousel-caption">
                                                <p class="product-lead">Militar</p>
                                            </div>
                                            <span class="zoom z1">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-zafiro/c12.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item ">
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <div class="carousel-caption">
                                                <p class="product-lead">Crudo</p>
                                            </div>
                                            <span class="zoom z1">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-zafiro/c13.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#maxi-zafiro-bolsillos" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#maxi-zafiro-bolsillos" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <div class="info text-start">
                                <h4 class="card-title d-inline">Maxi zafiro</h4>
                                <h5 class="price d-inline">$2390</h5>
                                <p class="card-text text-center"> rem ipsum dolor, sit amet consectetur adipisiipsum dolor, sit amet consectetur adipisicing elit. At consequatur </p>
                                <div class="container">
                                    <div>
                                    </div>
                                    <!-- 
                                    <div class="row justify-content-end color-container">
                                        <div class="color" style="background-color: red;"></div>
                                        <div class="color" style="background-color: green;"></div>
                                        <div class="color" style="background-color: blue;"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-9 col-lg-5">
                    <div class="card">
                        <div class="card-body p-0">

                            <div id="clasico-alma" class="carousel" data-ride="carousel" data-interval="false" data-touch="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item product-carousel-item active">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <span class="zoom z2">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/clasico-alma/h1.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <span class="zoom z2">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/clasico-alma/h2.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <span class="zoom z2">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/clasico-alma/c1.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <span class="zoom z2">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/clasico-alma/c2.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <span class="zoom z2">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/clasico-alma/c3.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <span class="zoom z2">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/clasico-alma/c4.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <span class="zoom z2">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/clasico-alma/c5.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <span class="zoom z2">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/clasico-alma/c6.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <span class="zoom z2">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/clasico-alma/c7.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <a class="carousel-control-prev" href="#clasico-alma" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#clasico-alma" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <div class="info text-start">
                                <h4 class="card-title d-inline">Clásico Alma</h4>
                                <h5 class="price d-inline">$2200</h5>
                                <p class="card-text text-center"> rem ipsum dolor, sit amet consectetur adipisiipsum dolor, sit amet consectetur adipisicing elit. At consequatur </p>
                                <div class="container">
                                    <div>
                                    </div>
                                    <!-- 
                                    <div class="row justify-content-end color-container">
                                        <div class="color" style="background-color: red;"></div>
                                        <div class="color" style="background-color: green;"></div>
                                        <div class="color" style="background-color: blue;"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-9 col-lg-5">
                    <div class="card">
                        <div class="card-body p-0">

                            <div id="capucha-esmeralda" class="carousel" data-ride="carousel" data-interval="false" data-touch="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item product-carousel-item active">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <span class="zoom z3">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/capucha-esmeralda/h1.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <span class="zoom z3">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/capucha-esmeralda/h2.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <span class="zoom z3">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/capucha-esmeralda/h3.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <span class="zoom z3">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/capucha-esmeralda/c1.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <span class="zoom z3">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/capucha-esmeralda/c2.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <span class="zoom z3">
                                                <img class="card-img" src="{{asset('images/season-2021/autumn-winter/models/capucha-esmeralda/c3.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center" style="">
                                            <span class="zoom z3">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/capucha-esmeralda/c4.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <a class="carousel-control-prev" href="#capucha-esmeralda" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#capucha-esmeralda" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <div class="info text-start">
                                <h4 class="card-title d-inline">Capucha esmeralda</h4>
                                <h5 class="price d-inline">$2390</h5>
                                <p class="card-text text-center"> rem ipsum dolor, sit amet consectetur adipisiipsum dolor, sit amet consectetur adipisicing elit. At consequatur </p>
                                <div class="container">
                                    <div>
                                    </div>
                                    <!-- 
                                    <div class="row justify-content-end color-container">
                                        <div class="color" style="background-color: red;"></div>
                                        <div class="color" style="background-color: green;"></div>
                                        <div class="color" style="background-color: blue;"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-9 col-lg-5">
                    <div class="card">
                        <div class="card-body p-0">

                            <div id="maxi-rayado" class="carousel" data-ride="carousel" data-interval="false"  data-touch="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item product-carousel-item active">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z4">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-rayado/h1.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z4">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-rayado/h2.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z4">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-rayado/h3.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z4">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-rayado/h4.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z4">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-rayado/c1.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z4">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-rayado/c2.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z4">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-rayado/c3.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z4">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-rayado/c4.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z4">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-rayado/c5.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z4">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-rayado/c6.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z4">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/maxi-rayado/c7.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <a class="carousel-control-prev" href="#maxi-rayado" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#maxi-rayado" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <div class="info text-start">
                                <h4 class="card-title d-inline">Maxi rayado</h4>
                                <h5 class="price d-inline">$2200</h5>
                                <p class="card-text text-center"> rem ipsum dolor, sit amet consectetur adipisiipsum dolor, sit amet consectetur adipisicing elit. At consequatur </p>
                                <div class="container">
                                    <div>
                                    </div>
                                    <!-- 
                                    <div class="row justify-content-end color-container">
                                        <div class="color" style="background-color: red;"></div>
                                        <div class="color" style="background-color: green;"></div>
                                        <div class="color" style="background-color: blue;"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-9 col-lg-5">
                    <div class="card">
                        <div class="card-body p-0">

                            <div id="saco-topacio" class="carousel" data-ride="carousel" data-interval="false"  data-touch="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item product-carousel-item active">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z5">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/saco-topacio/h1.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z5">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/saco-topacio/h2.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z5">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/saco-topacio/h3.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z5">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/saco-topacio/c1.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z5">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/saco-topacio/c2.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z5">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/saco-topacio/c3.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z5">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/saco-topacio/c4.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z5">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/saco-topacio/c5.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z5">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/saco-topacio/c6.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z5">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/saco-topacio/c7.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>


                                </div>
                                <a class="carousel-control-prev" href="#saco-topacio" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#saco-topacio" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <div class="info text-start">
                                <h4 class="card-title d-inline">Saco topacio</h4>
                                <h5 class="price d-inline">$2200</h5>
                                <p class="card-text text-center"> rem ipsum dolor, sit amet consectetur adipisiipsum dolor, sit amet consectetur adipisicing elit. At consequatur </p>
                                <div class="container">
                                    <div>
                                    </div>
                                    <!-- 
                                    <div class="row justify-content-end color-container">
                                        <div class="color" style="background-color: red;"></div>
                                        <div class="color" style="background-color: green;"></div>
                                        <div class="color" style="background-color: blue;"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-9 col-lg-5">
                    <div class="card">
                        <div class="card-body p-0">

                            <div id="polera-ambar" class="carousel" data-ride="carousel" data-interval="false"  data-touch="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item product-carousel-item active">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z6">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/polera-ambar/h1.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z6">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/polera-ambar/h2.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z6">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/polera-ambar/c1.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z6">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/polera-ambar/c2.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z6">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/polera-ambar/c3.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z6">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/polera-ambar/c4.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z6">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/polera-ambar/c5.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z6">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/polera-ambar/c6.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z6">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/polera-ambar/c7.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z6">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/polera-ambar/c8.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>


                                </div>
                                <a class="carousel-control-prev" href="#polera-ambar" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#polera-ambar" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <div class="info text-start">
                                <h4 class="card-title d-inline">Polera ambar</h4>
                                <h5 class="price d-inline">$2200</h5>
                                <p class="card-text text-center"> rem ipsum dolor, sit amet consectetur adipisiipsum dolor, sit amet consectetur adipisicing elit. At consequatur </p>
                                <div class="container">
                                    <div>
                                    </div>
                                    <!-- 
                                    <div class="row justify-content-end color-container">
                                        <div class="color" style="background-color: red;"></div>
                                        <div class="color" style="background-color: green;"></div>
                                        <div class="color" style="background-color: blue;"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-12 col-md-9 col-lg-5">
                    <div class="card">
                        <div class="card-body p-0">

                            <div id="trenza-cristal" class="carousel" data-ride="carousel" data-interval="false"  data-touch="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item product-carousel-item active">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z7">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/trenza-cristal/h2.jpeg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z7">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/trenza-cristal/h1.jpeg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z7">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/trenza-cristal/c1.jpeg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z7">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/trenza-cristal/c2.jpeg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <a class="carousel-control-prev" href="#trenza-cristal" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#trenza-cristal" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <div class="info text-start">
                                <h4 class="card-title d-inline">Trenza cristal</h4>
                                <h5 class="price d-inline">$2200</h5>
                                <p class="card-text text-center"> rem ipsum dolor, sit amet consectetur adipisiipsum dolor, sit amet consectetur adipisicing elit. At consequatur </p>
                                <div class="container">
                                    <div>
                                    </div>
                                    <!-- 
                                    <div class="row justify-content-end color-container">
                                        <div class="color" style="background-color: red;"></div>
                                        <div class="color" style="background-color: green;"></div>
                                        <div class="color" style="background-color: blue;"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-9 col-lg-5">
                    <div class="card">
                        <div class="card-body p-0">

                            <div id="rombo-acuario" class="carousel" data-ride="carousel" data-interval="false"  data-touch="false">
                                <div class="carousel-inner">
                                    <div class="carousel-item product-carousel-item active">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z8">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/rombo-acuario/h1.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z8">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/rombo-acuario/h2.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z5">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/rombo-acuario/c1.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z8">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/rombo-acuario/c2.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z8">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/rombo-acuario/c3.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>
                                    <div class="carousel-item product-carousel-item">
                                        <div class="carousel-caption">
                                            <p class="product-lead">Lavanda</p>
                                        </div>
                                        <div class=" col-12 p-0 m-0 text-center">
                                            <span class="zoom z8">
                                                <img loading="lazy" class="card-img" src="{{asset('images/season-2021/autumn-winter/models/rombo-acuario/c4.jpg')}}" alt="">
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <a class="carousel-control-prev" href="#rombo-acuario" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#rombo-acuario" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                            <div class="info text-start">
                                <h4 class="card-title d-inline">Rombo acuario</h4>
                                <h5 class="price d-inline">$2200</h5>
                                <p class="card-text text-center"> rem ipsum dolor, sit amet consectetur adipisiipsum dolor, sit amet consectetur adipisicing elit. At consequatur </p>
                                <div class="container">
                                    <div>
                                    </div>
                                    <!-- 
                                    <div class="row justify-content-end color-container">
                                        <div class="color" style="background-color: red;"></div>
                                        <div class="color" style="background-color: green;"></div>
                                        <div class="color" style="background-color: blue;"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="basic-info" class="mt-5">
        <div class="container">
            <hr>
            <div class="row justify-content-center">
                <h2 class="inner-season-title text-uppercase text-center">
                    Información
                </h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4">
                    <div class="card info-card box1">
                        <div class="card-body">
                            <h2 class="text-center">box1</h2>
                            <p class="basic-info-text">unt veniam minima, sed aspernatur id modi nihil ex cum, explicabo mollitia expedita. Obcaecati repudiandae doloribus eligendi ipsa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card info-card box2">
                        <div class="card-body">
                            <h2 class="text-center">box2</h2>
                            <p class="basic-info-text">nt veniam minima, sed aspernatur id modi nihil ex cum, explicabo mollitia expedita. Obcaecati repudiandae doloribus eligendi ipsa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card info-card box3">
                        <div class="card-body">
                            <h2 class="text-center">box3</h2>
                            <p class="basic-info-text"> veniam minima, sed aspernatur id modi nihil ex cum, explicabo mollitia expedita. Obcaecati repudiandae doloribus eligendi ipsa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card info-card box4">
                        <div class="card-body">
                            <h2 class="text-center">box4</h2>
                            <p class="basic-info-text">iam minima, sed aspernatur id modi nihil ex cum, explicabo mollitia expedita. Obcaecati repudiandae doloribus eligendi ipsa.</p>
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

                <img class="footer-logo" src="{{asset('images/head/logo.png')}}" alt="">
                <h5 class="text-uppercase">Alquimia Sweaters</h5>

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
            <a class="text-dark" href="#"> <a href="#"></a> Alquimia Sweaters</a>
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