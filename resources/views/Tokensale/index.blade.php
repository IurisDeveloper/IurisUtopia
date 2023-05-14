@extends('Layout.header')

@section('title', 'Token Sale')

<div class="container">
    <div class="box1">
        <div class="container" style="text-align:center;color:#ffffff;max-width: 100%!important">
            <div class="col-lg-4">
                <h2>Wallet</h2>
                <h3>XYZ</h3>
            </div>
            <div class="col-lg-4">
                <h2>Current Fees</h2>
                <h3>+ 2% of Tokens Sold + 2% of BUSD / BNB Raised</h3>
            </div>
            <div class="col-lg-4">
                <h2>Balance</h2>
                <h3>1.123</h3>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="box2">
        <div class="container" style="text-align:center;color:#ffffff;max-width: 100%!important">
            <h2>Generate Sale</h2>
            <h3>Creating your own sale only takes seconds!</h3>
            <p
                style="font: normal normal medium 24px/35px Montserrat !important;color:#ffffff; margin-top: 4rem !important;max-width: 75%;float: none;margin: 0 auto;">
                Disclaimer: We cannot be held reponsible for incorrect entry of information or be held liable for
                anything related to your use of our platform. Please ensure you enter all your details to the best
                accuracy possible and that you are in compliance with your local laws and regulations.</p>
            <button class="sale">Start Sale</button>
        </div>
    </div>
</div>

<div class="container">
    <div class="box3">
        <div class="container" style="margin-top: 20px;">
            <h3 class="token">Token Address</h3>
            <h3 class="token">Token Name</h3>
            <h3 class="token">Token Symbol</h3>
            <h3 class="token">Token Decimal</h3>
            <h3 class="token">Presale Rate</h3>
            <h3 class="token">Soft/Hard Cop</h3>
            <h3 class="token">Contribution Limit</h3>
            <h3 class="token">Pancake Liquidity</h3>
            <h3 class="token">Timings</h3>
            <h3 class="token">Finalize</h3>
        </div>
    </div>
</div>


<!-- block for animate navigation menu -->
<div class="nav-animate"></div>




<style>
    .box1 {
        margin-top: 170px !important;
        width: 100% !important;
        height: 25% !important;
        background: transparent linear-gradient(288deg, #3932FA 0%, #9A3AF9 64%, #FA41F9 100%) 0% 0% no-repeat padding-box;
        border: 0.800000011920929px solid #FFFFFF;
        border-radius: 25px;
        opacity: 1;
        backdrop-filter: blur(19px);
        -webkit-backdrop-filter: blur(19px);
    }

    .box2 {
        margin-top: 100px !important;
        width: 100% !important;
        height: 40% !important;
        background: transparent linear-gradient(316deg, #3932fa 0%, #9A3AF9 64%, #fa41f9 100%) 0% 0% no-repeat padding-box;
        border: 0.8px solid #ffffff;
        border-radius: 25px;
        opacity: 1;
        backdrop-filter: blur(19px);
        -webkit-backdrop-filter: blur(19px);
    }

    .box3 {
        margin-top: 100px !important;
        width: 100% !important;
        height: 100% !important;
        background: transparent linear-gradient(334deg, #3932FA 0%, #9A3AF9 64%, #FA41F9 100%) 0% 0% no-repeat padding-box;
        border: 0.800000011920929px solid #FFFFFF;
        border-radius: 25px;
        opacity: 1;
        backdrop-filter: blur(19px);
        -webkit-backdrop-filter: blur(19px);
    }

    .sale {
        background: transparent linear-gradient(188deg, #FA41F9 0%, #3932FA 100%) 0% 0% no-repeat padding-box;
        border: 1px solid #FFFFFF;
        border-radius: 5px;
        opacity: 1;
        width: 100px;
        height: 30px;
        margin-top: 50px;
    }

    .container .resume-title {
        font-size: 26px;
        font-weight: 700;
        margin-top: 20px;
        margin-bottom: 20px;
        color: #050d18;
    }

    .container .token {
        padding: 0 0 20px 20px;
        margin-top: -2px;
        border-left: 2px solid #1f5297;
        position: relative;
    }

    .container .token h4 {
        line-height: 18px;
        font-size: 18px;
        font-weight: 600;
        text-transform: uppercase;
        font-family: "Poppins", sans-serif;
        color: #050d18;
        margin-bottom: 10px;
    }

    .container .token h5 {
        font-size: 16px;
        background: #e4edf9;
        padding: 5px 15px;
        display: inline-block;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .container .token ul {
        padding-left: 20px;
    }

    .container .token ul li {
        padding-bottom: 10px;
    }

    .container .token:last-child {
        padding-bottom: 0;
    }

    .container .token::before {
        content: "";
        position: absolute;
        width: 16px;
        height: 16px;
        border-radius: 50px;
        left: -9px;
        top: 0;
        background: #fff;
        border: 2px solid #1f5297;
    }


    @media screen and (min-width: 593px) {}
</style>

@extends('Layout.footer')
