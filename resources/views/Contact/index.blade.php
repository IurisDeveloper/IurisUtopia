@extends('Layout.header')

@section('title', 'Contact Us')

<div class="container">
    <div class="col-lg-9 box1">
        <div class="container" style="font: normal normal bold 50px/60px Syne; color:#FFFFFF">
            <h1>Get in Touch</h1>
            <h2>Send a Message</h2>
        </div>
        <div class="col-lg-6">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="name" placeholder="Name">
                    <input type="text" class="form-control" id="country" placeholder="Country Code">
                </div>
            </form>
        </div>
        <div class="col-lg-6">

        </div>
    </div>
    <div class="col-lg-3 box2">
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


<!-- block for animate navigation menu -->
<div class="nav-animate"></div>




<style>
    .box1 {
        margin-top: 170px !important;
        width: 55% !important;
        height: 100% !important;
        margin-right: 5% !important;
        background: transparent linear-gradient(334deg, #3932FA 0%, #9A3AF9 64%, #FA41F9 100%) 0% 0% no-repeat padding-box;
        border: 0.800000011920929px solid #FFFFFF;
        border-radius: 25px;
        opacity: 1;
        backdrop-filter: blur(19px);
        -webkit-backdrop-filter: blur(19px);
    }

    .box2 {
        margin-top: 170px !important;
        width: 40% !important;
        height: 100% !important;
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

    #name {
        margin-top: 40px;
        background: transparent linear-gradient(200deg, #00031B 0%, #3932FA 100%) 0% 0% no-repeat padding-box;
        border: 1px solid #FFFFFF;
        border-radius: 5px;
        opacity: 0.26;
    }

    #name::-webkit-input-placeholder {
        color: white;
    }

    #country {
        margin-top: 60px;
        background: transparent linear-gradient(200deg, #00031B 0%, #3932FA 100%) 0% 0% no-repeat padding-box;
        border: 1px solid #FFFFFF;
        border-radius: 5px;
        opacity: 0.26;
    }

    #country::-webkit-input-placeholder {
        color: white;
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
