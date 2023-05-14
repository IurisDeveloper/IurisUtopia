@extends('Layout.header')

@section('title', 'Home')

<div class="container">
    <div id="carousel-example-generic">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/banner/Group 27.png"
                    alt="..."style="margin-top:5rem !important;padding-right: 4rem !important">
                <div class="container">
                    <div class="col-lg-6">
                        <div class="carousel-caption slide-one">
                            <!-- heading -->
                            <h2 class="animated fadeInLeftBig" style="font: normal normal bold 70px/84px Syne;">
                                Grab the New</h2>
                            <!-- paragraph -->
                            <h2 class="animated fadeInRightBig"
                                style="font: transparent linear-gradient (243deg, #FA41F9 0%, #3932FA 100%) 0% 0% no-repeat padding-box !important">
                                Market's Lead.
                            </h2>
                            <p style="font: normal normal medium 24px/35px Montserrat;">Accelerate your Crypto growth by
                                investing in the new Market Lead</p>
                            <a href="#">
                                <img src="img/featured/Group 12.png">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="carousel-caption slide-one">
                            <img src="img/album/k4fnk4f-1536x1503.png" alt="..."
                                style="height: 480px; margin-right:2rem !important;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- block for animate navigation menu -->
<div class="nav-animate"></div>


<div class="container">>
    <img src="img/background/Group 16.png" style="margin-top: 55px;max-width:100% !important">
</div>

<div class="container">
    <img src="img/background/Component 1 – 2.png" style="margin-top: 80px;max-width:100% !important">
    {{-- <h2>Connect and Gift with Crypto</h2>
    <p>The Ultimate Way to Share Moments and Crypto in Real-Time. The app provides a seamless and easy-to-use
        way to connect with others and gift them crypto (Utopia Coin). The app appeals to the growing interest
        in digital assets and the potential for future value appreciation.</p> --}}
</div>

<div class="container">>
    <p style="text-align:center;font: normal normal bold 55px/66px Syne;color:white"><strong>How it works?</strong></p>
</div>

<div class="container">
    <div class="col-lg-6">
        <img src="img/background/Component 6 – 1.png" style="margin-top: 80px;max-width:100% !important">
    </div>
    <div class="col-lg-6" style="margin-top: 80px!important;">
        <h2 style="font: normal normal bold 55px/66px Syne;color:white">Easy Connect</h2>
        <p style="font: normal normal medium 24px/35px Montserrat;color:white">Connect with your loved ones and your
            colleagues in
            an easy and efficient manner in the Crypto world. Earn
            Eutopia Coins and while you do share love and get the work done. As easy as that.</p>
    </div>
</div>

<div class="container">
    <div class="col-lg-6" style="margin-top: 80px!important;">
        <h2 style="font: normal normal bold 55px/66px Syne;color:white">Valueable Gift</h2>
        <p style="font: normal normal medium 24px/35px Montserrat;color:white">Ultimate way to share crypto (Utopia
            Coin), making it appealing to both crypto enthusiasts and casual users looking for a fun and modern way to
            connect with all of friends and family.</p>
    </div>
    <div class="col-lg-6">
        <img src="img/background/Component 3 – 4.png" style="margin-top: 80px;max-width:100% !important">
    </div>
</div>

<div class="container">
    <p style="text-align:center;font: normal normal bold 60px/73px Syne;color:white;margin-top: 80px;">Popular Networks
    </p>
    <div class="container">
        <img src="img/background/Group 54.png"
            style="margin-top: 80px;max-width:100% !important;background: transparent linear-gradient (243deg, #000 100%) 0% 0% no-repeat padding-box !important;opacity: 1;">
    </div>
</div>


<style>
    .animated .fadeInLeftBig>h2 {}


    . .img-responsive,
    .thumbnail>img,
    .thumbnail a>img,
    .carousel-inner>.item>img,
    .carousel-inner>.item>a>img {
        margin-top: 5rem;
        opacity: 1;
        background-repeat: no-repeat;
    }

    @media (min-width: 1300px) {

        .img-responsive,
        .thumbnail>img,
        .thumbnail a>img,
        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            margin-top: 5rem;
            opacity: 1;
            background-repeat: no-repeat;
        }
    }

    @media screen and (min-width: 768px) {
        .carousel-caption {
            right: 0 !important;
            left: 0 !important;
            padding-bottom: 0 !important;
        }
    }
</style>

@extends('Layout.footer')
