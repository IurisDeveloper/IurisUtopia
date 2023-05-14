<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="HimanshuGupta">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <!-- Basic stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <!-- Font awesome CSS -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style-color.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link href="{{ asset('img/logo/Group 25.png') }}" rel="shortcut icon">
</head>

<body>

    <!-- wrapper -->
    <div class="wrapper" id="header">

        <!-- header area -->
        <header>
            <!-- primary menu -->
            <nav class="navbar navbar-fixed-top navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- logo area -->
                        <a class="navbar-brand" href="{{ url('/Home') }}">
                            <!-- logo image -->
                            <img class="img-responsive" src="img/logo/Group 25.png" alt="" />
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ url('/Home') }}">Home</a></li>
                            <li><a href="{{ url('/Whitepaper') }}">Whitepaper</a></li>
                            <li><a href="{{ url('/Tokensale') }}">Token Sale</a></li>
                            <li><a href="{{ url('/Project') }}">Project</a></li>
                            <li><a href="{{ url('/Contact') }}">Contact Us</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <!--/ header end -->

        <style>
            .navbar-default .navbar-nav>li>a {
                padding: 25px 35px;
            }

            /* .navbar-brand>img {
                margin-right: 15rem;
            } */

            .img-responsive,
            .thumbnail>img,
            .thumbnail a>img,
            .carousel-inner>.item>img,
            .carousel-inner>.item>a>img {
                margin-top: 0 !important;
            }
        </style>
