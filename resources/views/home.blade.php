@extends('layouts.master')
@section('content')

<style>
    .home-header {
        width: 100%;
        height: auto;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        margin-bottom: 50px;
    }
    .text-overlay {
        position: absolute;
        top: 75%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 100%;
    }
    .home-img {
        width: 100%;
        height: auto;
    }
    .home-dark-img {
        width: 100%;
        height: auto;
    }
    .unlock-word {
        color: #FFF;
        text-align: center;
        font-family: SF Pro Display;
        font-size: 48px;
        font-style: normal;
        font-weight: 700;
        line-height: 30px; /* 62.5% */
        margin: 0;
    }
    .btn-green {
        border: 2px solid #5CA346;
        background: transparent;
        border-radius: 17px;
        width: 197px;
        height: 36px;
    }
    .dark-mode .btn-green span {
        color: #FFF;
        text-align: center;
        font-family: SF Pro Display;
        font-size: 14px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }
    .btn-green span {
        /* color: #FFF; */
        text-align: center;
        font-family: SF Pro Display;
        font-size: 14px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }
    .investing-word {
        color: #FFF;
        text-align: center;
        font-family: SF Pro Display;
        font-size: 30px;
        font-style: normal;
        font-weight: 600;
        line-height: 30px; /* 100% */
        margin: 0;
    }
    .investing-row {
        width: 90%;
    }
    .invest-img {
        width: 118px;
        height: 118px;
    }
    .invest-word {
        /* color: #000; */
        text-align: center;
        font-family: SF Pro Display;
        font-size: 14px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }
    .home1 {
        margin-top: 50px;
        margin-bottom: 80px;
        display: block;
    }
    .home1-mobile {
        display: none;
    }
    .home2 {
        margin-bottom: 36px;
    }
    .home3 {
        margin-bottom: 100px;
    }
    .trade-word {
        color: #5CA346;
        text-align: center;
        font-family: SF Pro Display;
        font-size: 48px;
        font-style: normal;
        font-weight: 700;
        line-height: 40px; /* 83.333% */
        margin: 0;
    }
    .trade-word-mobile {
        display: none;
    }
    .our-word {
        text-align: center;
        font-family: SF Pro Display;
        font-size: 30px;
        font-style: normal;
        font-weight: 600;
        line-height: 35px; /* 116.667% */
        margin: 0;
        width: 80%;
    }
    .home2-2 {
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .core-img {
        border-radius: 25px;
    }
    .core-adv {
        /* width: 100%; */
        position: relative;
        margin-bottom: 100px;
    }
    .explore-word {
        color: #FFF;
        font-family: Arial;
        font-size: 30px;
        font-style: normal;
        font-weight: 700;
        line-height: 30px; /* 100% */
        margin: 0;
    }
    .ourcore-word {
        color: #FFF;
        text-align: right;
        font-family: SF Pro Display;
        font-size: 48px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        margin: 0;
    }
    .word-big {
        color: #FFF;
        text-align: center;
        font-family: SF Pro Display;
        font-size: 100px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        margin: 0;
        text-align: right;
        height: 110px;
    }
    .word-small {
        color: #FFF;
        font-family: SF Pro Display;
        font-size: 14px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        margin: 0;
        text-align: right;
    }
    .explore-cont {
        width: 70%;
        display: flex;
        align-items: flex-end;
    }
    .core {
        display: block;
        width: 100%;
        height: auto;
    }
    .core-dark {
        display: none;
    }
    .dark-mode .core {
        display: none;
    }
    .dark-mode .core-dark {
        display: block;
        width: 100%;
        height: auto;
    }
    .core-mobile {
        display: none;
    }
    .overlay-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: left;
        max-width: 1000px;
        width: 100%;
        /* color: #ffffff; Set the text color */
        /* Add any additional styling for the overlay text container here */
    }
    .main-content-image {
        display: flex;
        justify-content: flex-start;
        margin-left: 241px;
        margin-right: 252px;
        flex-wrap: wrap;
        width: 100%;
        max-width: 1000px;
        margin: 0 auto;
    }
    .main-content-image-mobile {
        display: none;
    }
    .acc-word {
        color: #5CA346;
        text-align: center;
        font-family: SF Pro Display;
        font-size: 48px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        margin: 0;
    }
    .crm-img {
        width: 100%;
    }
    .select-word {
        /* color: #000; */
        text-align: center;
        font-family: SF Pro Display;
        font-size: 30px;
        font-style: normal;
        font-weight: 600;
        line-height: 35px; /* 116.667% */
        width: 90%;
    }
    .std-word-purple {
        color: #6D0080;
        text-align: center;
        font-family: SF Pro Text;
        font-size: 16px;
        font-style: normal;
        font-weight: bold;
        line-height: normal;
        margin: 0;
        margin-bottom: 10px;
    }
    .std-word-orange {
        color: #D17E00;
        text-align: center;
        font-family: SF Pro Text;
        font-size: 16px;
        font-style: normal;
        font-weight: bold;
        line-height: normal;
        margin: 0;
        margin-bottom: 10px;
    }
    .std-word-green {
        color: #008042;
        text-align: center;
        font-family: SF Pro Text;
        font-size: 16px;
        font-style: normal;
        font-weight: bold;
        line-height: normal;
        margin: 0;
        margin-bottom: 10px;
    }
    .std-word-blue {
        color: #0028FC;
        text-align: center;
        font-family: SF Pro Text;
        font-size: 16px;
        font-style: normal;
        font-weight: bold;
        line-height: normal;
        margin: 0;
        margin-bottom: 10px;
    }
    .std-word-text {
        text-align: center;
        font-family: SF Pro Display;
        font-size: 12px;
        font-style: normal;
        font-weight: 510;
        line-height: 14px; /* 116.667% */
        margin: 0;
    }
    .std-border {
        /* box-shadow: 7.5px 7.5px 7.5px 0px rgba(109, 0, 128, 0.30); */
        border-radius: 30px;
        margin-bottom: 16px;
    }
    .ecn-border {
        /* box-shadow: 7.5px 7.5px 7.5px 0px rgba(255, 153, 0, 0.30); */
        border-radius: 30px;
        margin-bottom: 16px;
    }
    .esaving-border {
        /* box-shadow: 7.5px 7.5px 7.5px 0px rgba(0, 128, 66, 0.30); */
        border-radius: 30px;
        margin-bottom: 16px;
    }
    .einvest-border {
        /* box-shadow: 7.5px 7.5px 7.5px 0px rgba(0, 40, 252, 0.30); */
        border-radius: 30px;
        margin-bottom: 16px;
    }
    .home5 {
        width: 100%;
        margin-bottom: 100px;
    }
    .home5-mobile {
        display: none;
    }
    .home5-1 {
        width: 100%;
        margin-bottom: 150px;
    }
    .iphone-img {
        width: 100%;
        margin-bottom: -5px;
    }
    .idk {
        position: relative;
        margin-bottom: 100px;
    }
    .idk-mobile {
        display: none;
    }
    .idk-img {
        width: 100%;
        height: auto;
    }
    .idk-dark-img {
        width: 100%;
        height: auto;
    }
    .light-mode .idk-img {
        display: block;
    }
    .light-mode .idk-dark-img {
        display: none;
    }
    .dark-mode .idk-img {
        display: none;
    }
    .dark-mode .idk-dark-img {
        display: block;
    }
    .taking-word {
        color: #FFF;
        font-family: SF Pro Display;
        font-size: 48px;
        font-style: normal;
        font-weight: 700;
        line-height: 50px; /* 104.167% */
        margin: 0;
        width: 95%;
    }
    .confidence-text {
        color: #FFF;
        font-family: SF Pro Display;
        font-size: 88px;
        font-style: normal;
        font-weight: 700;
        line-height: 85px; /* 96.591% */
        margin: 0;
        margin-bottom: 36px;
    }
    .open-text-green {
        color: #5CA346;
        font-family: SF Pro Display;
        font-size: 36px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        margin: 0;
        margin-bottom: 30px;
    }
    .invest-text {
        /* color: #000; */
        font-family: SF Pro Display;
        font-size: 30px;
        font-style: normal;
        font-weight: 510;
        line-height: 35px; /* 116.667% */
        margin: 0;
        width: 85%;
    }
    .wheat-container {
        width: 100%;
        height: 50px;
        border-radius: 10px;
        background: rgba(92, 163, 70, 0.10);
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .dark-mode .wheat-container {
        background: rgba(92, 163, 70, 0.40) !important;
    }
    .home7 {
        width: 100%;
        margin-bottom: 18px;
    }
    .open-text {
        /* color: #000; */
        text-align: center;
        font-family: SF Pro Display;
        font-size: 32px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        margin: 0;
    }
    .home6 {
        margin-bottom: 66px;
    }
    .aldy-text {
        /* color: #000; */
        font-family: SF Pro Display;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 16px; /* 114.286% */
        margin: 0;
    }
    .span-text-grn {
        color: #5CA346;
        font-family: SF Pro Display;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 16px;
        margin: 0;
    }
    .home8 {
        width: 100%;
        margin-bottom: 100px;
    }
    .home8-mobile {
        display: none;
    }
    .tired-text-green {
        color: #5CA346;
        text-align: center;
        font-family: SF Pro Display;
        font-size: 48px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        margin: 0;
        /* width: 693px; */
    }
    .tired-text {
        /* color: #000; */
        text-align: center;
        font-family: SF Pro Display;
        font-size: 30px;
        font-style: normal;
        font-weight: 600;
        line-height: 35px; /* 116.667% */
        margin: 0;
        width: 85%;
    }
    .tired-content {
        width: 100%;
        display: flex;
        justify-content: center;
    }
    .home9 {
        margin-bottom: 50px;
    }
    .home10 {
        margin-bottom: 66px;
    }
    .home11 {
        margin-bottom: 66px;
    }
    .home11-mobile {
        display: none;
    }
    .home12 {
        margin-bottom: 100px;
    }
    .plus-text {
        color: #FFF;
        text-align: right;
        font-family: SF Pro Display;
        font-size: 60px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;

    }

    .home4 {
        margin-bottom: 100px;
    }

    .dark-mode .acct-type {
        color: #FFF;
        font-family: SF Pro Display;
        font-size: 30px;
        font-style: normal;
        font-weight: 500;
        line-height: 30px; /* 100% */
    }

    .acct-type {
        color: #000;
        font-family: SF Pro Display;
        font-size: 30px;
        font-style: normal;
        font-weight: 500;
        line-height: 30px; /* 100% */
    }
    .acct-type li {
        margin-bottom: 26px;
    }
    .light-mode .home-image {
        display: block;
    }
    .light-mode .home-dark-img {
        display: none;
    }
    .dark-mode .home-img {
        display: none;
    }
    .dark-mode .home-dark-img {
        display: block;
    }
    .dark-mode .app-dark {
        border-radius: 10px;
        border: 0.5px solid #5CA346;
    }
    .home-header-mobile {
        display: none;
    }
    .core-mobile-dark {
        display: none;
    }
    @media screen and (max-width: 1000px) {
        .home-header {
            display: none;
        }

        .home-header-mobile {
            width: 100%;
            height: auto;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-bottom: 38px;
        }
        .home-mobile-img {
            width: 100%;
        }
        .home-mobile-dark-img {
            display: none;
        }
        .dark-mode .home-mobile-dark-img {
            width: 100%;
            display: block;
        }
        .dark-mode .home-mobile-img {
            display: none;
        }

        .dark-mode .core-mobile {
            display: none;
        }
        .core-mobile-dark {
            display: none;
        }
        .dark-mode .core-mobile-dark {
            display: block;
        }

        .text-overlay-mobile {
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 100%;
        }
        .unlock-word {
            font-size: 20px;
        }
        .btn-green {
            width: 150px;
            height: 30px;
            flex-shrink: 0;
            border: 2px solid #5CA346;
        }
        .btn-green span {
            font-size: 12px !important;
            color: #FFF;
        }
        .investing-word {
            font-size: 12px;
            line-height: 14px;
            font-family: SF Pro Text;
        }
        .investing-row {
            width: 100%;
        }
        .invest-img {
            width: 70px;
            height: 70px;
        }
        .mobile-gap {
            gap: 26px;
        }
        .invest-word {
            font-size: 12px;
        }
        .home1 {
            display: none;
        }
        .home1-mobile {
            display: block;
            margin-bottom: 50px;
        }
        .marquee1 {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .marquee-content {
            display: flex;
            animation: marquee-animation 150s linear infinite;
            width: fit-content; /* Adjust the width based on your image size */
            gap: 25px;
        }
        @keyframes marquee-animation {
            0% {
            transform: translateX(0);
            }
            100% {
            transform: translateX(-100%);
            }
        }

        .marquee2 {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .marquee-content2 {
            display: flex;
            animation: marquee-animation2 150s linear infinite;
            width: fit-content; /* Adjust the width based on your image size */
            gap: 20px;
        }

        @keyframes marquee-animation2 {
            0% {
            transform: translateX(0);
            }
            100% {
            transform: translateX(-100%);
            }
        }

        .trade-word {
            display: none;
            /* font-size: 20px;
            line-height: 20px; */
        }
        .trade-word-mobile {
            display: block;
            color: #5CA346;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: 20px; /* 100% */
            margin: 0;
        }
        .our-word {
            font-family: SF Pro Text;
            font-size: 12px;
            line-height: 14px;
            font-weight: 600;
            width: 100%;
        }
        .core-img {
            width: 100%
        }
        .home2 {
            margin-bottom: 16px;
        }
        .core {
            width: 100%;
            height: auto;
        }
        .main-content-image {
            display: none;
        }
        .main-content-image-mobile {
            display: flex;
        }
        .core-adv {
            margin-bottom: 50px;
        }
        .overlay-text-mobile {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
        }
        .overlay-text-mobile2 {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
        }
        .ourcore-word {
            color: #FFF;
            text-align: right;
            font-family: SF Pro Display;
            font-size: 20px;
            font-style: normal;
            font-weight: 590;
            line-height: 20px; /* 100% */
        }
        .word-big {
            font-size: 36px;
            height: auto;
        }
        .word-small {
            font-size: 10px;
        }
        .plus-text {
            font-size: 20px;
        }
        .core {
            display: none;
        }
        .core-mobile {
            display: block;
        }
        .explore-cont {
            width: 45%;
            display: flex;
            flex-direction: column-reverse;
        }
        .explore-word {
            /* width: 70%; */
            font-size: 12px;
            line-height: 14px;
        }
        .acc-word {
            font-size: 20px;
            line-height: normal;
            font-family: SF Pro Text;
        }
        .select-word {
            font-size: 12px;
            line-height: 14px;
            font-family: SF Pro Text;
            width: 100%;
        }
        .home4 {
            margin-bottom: 42px;
        }
        .home5 {
            display: none;
        }
        .home5-mobile {
            display: block;
            width: 100%;
            margin: 0 40px;
        }
        .std-border {
            border-radius: 12.5px;
            box-shadow: none;
            width: 70px;
            height: 70px;
        }
        .ecn-border {
            border-radius: 12.5px;
            box-shadow: none;
            width: 70px;
            height: 70px;
        }
        .esaving-border {
            border-radius: 12.5px;
            box-shadow: none;
            width: 70px;
            height: 70px;
        }
        .einvest-border {
            border-radius: 12.5px;
            box-shadow: none;
            width: 70px;
            height: 70px;
        }
        .std-word-purple {
            font-size: 10px;
            line-height: 10px;
            font-weight: 600;
        }
        .std-word-orange {
            font-size: 10px;
            line-height: 10px;
            font-weight: 600;
        }
        .std-word-green {
            font-size: 10px;
            line-height: 10px;
            font-weight: 600;
        }
        .std-word-blue {
            font-size: 10px;
            line-height: 10px;
            font-weight: 600;
        }
        .acct-type {
            color: #000;
            font-family: SF Pro Text;
            font-size: 12px;
            font-style: normal;
            font-weight: 500;
            line-height: 14px; /* 116.667% */
            padding-left: 20px;
            margin-top: 40px;
        }
        .acct-type li {
            margin-bottom: 10px;
        }
        .home5-1 {
            margin-bottom: 42px;
        }
        .idk {
            display: none;
        }
        .idk-mobile {
            display: block;
            width: 100%;
            position: relative;
            margin-bottom: 50px;
        }
        .confidence-text {
            font-size: 32px;
            line-height: 30px;
            margin-bottom: 16px;
        }
        .taking-word {
            font-size: 14px;
            line-height: 16px;
            width: 70%;
        }
        .open-text-green {
            font-size: 14px;
            line-height: normal;
            margin-bottom: 16px;
        }
        .invest-text {
            font-size: 12px;
            line-height: 14px; /* 116.667% */
            width: 100%;
        }
        .open-text {
            font-size: 14px;
            line-height: normal;
        }
        .home8 {
            display: none;
        }
        .home8-mobile {
            display: flex;
            margin-bottom: 50px;
            width: 100%;
        }
        .aldy-text {
            font-size: 10px;
            font-family: SF Pro Text;
            text-align: center;
        }
        .span-text-grn {
            font-size: 10px;
        }
        .tired-text-green {
            font-size: 20px;
        }
        .tired-text {
            font-size: 12px;
            line-height: 14px;
        }
        .gap-30 {
            gap: 15px;
        }
        .img09 {
            width: 219.601px;
            height: 451.712px;
        }
        .home11 {
            margin-bottom: 66px;
            display: none;
        }
        .home11-mobile {
            display: block;
            margin-bottom: 36px;
            width: 100%;
        }
        .btn-green span {
            color: #000;
            font-size: 12px;
        }
        .home12 {
            margin-bottom: 66px;
        }
        .dark-mode .core-dark {
            display: none;
            width: 100%;
            height: auto;
        }
        .dark-mode .acct-type {
            font-size: 12px;
            line-height: 14px;
            margin-top: 40px;
        }

        .idk-img-mobile {
            display: block;
        }
        .idk-img-mobile-dark {
            display: none;
        }
        .dark-mode .idk-img-mobile {
            display: none;
        }

        .dark-mode .idk-img-mobile-dark {
            display: block;
            width: 100%;
        }
        .dark-mode .app-dark {
            width: 100%;
        }
        .dark-mode .ft-description {
            color: #FFF;
        }
        .dark-mode .risk-content {
            color: #fff;
        }
        .slide-item2-container {
            display: flex !important;
            justify-content: center !important;
        }
    }

    @media screen and (max-width: 1350px)
    {
        .gap-60 {
            gap: 30px;
        }
    }
    .w-full {
        width: 100%;
    }
</style>

    <div class="home-header">
        <img src="assets/image/home/home1.png" class="home-img">
        <img src="assets/image/home/home1-dark.png" class="home-dark-img">
        <div class="text-overlay">
            <div class="main-content">
                <div class="flex flex-col gap-56">
                    <div>
                        <p class="unlock-word">UNLOCK YOUR POTENTIAL</p>
                    </div>
    
                    <div class="flex flex-col gap-26 item">
                        <div class="flex content-center gap-10">
                            <div>
                                <button class="btn-green">
                                    <span style="color: #FFFFFF">
                                        Register Live Account
                                    </span>
                                </button>
                            </div>
                            <div>
                                <button class="btn-green">
                                    <span style="color: #FFFFFF">
                                        Log in to your portal
                                    </span>
                                </button>
                            </div>
                        </div>
    
                        <div class="flex content-center gap-10">
                            <img src="assets/image/footer/apple.svg" class="app-dark">
                            <img src="assets/image/footer/google.svg" class="app-dark">
                            <img src="assets/image/footer/window.svg" class="app-dark">
                        </div>
    
                        <div class="investing-row">
                            <p class="investing-word">
                                Investing isn't just for the wealthy. At Metabase,<br>
                                we believe that everyone  deserves access to high-quality
                                investment products and services.
                            </p>
                        </div>
                    </div>
                    
    
                    
                </div>
            </div>
        </div>
    </div>

    <div class="home-header-mobile">
        <img src="assets/image/home/home1-mobile.png" class="home-mobile-img">
        <img src="assets/image/home/home1-mobile-dark.png" class="home-mobile-dark-img">
        <div class="text-overlay-mobile">
            <div class="main-content">
                <div class="flex flex-col item gap-16 mobile-ml-mr">
                    <div>
                        <p class="unlock-word">
                            UNLOCK YOUR POTENTIAL
                        </p>
                    </div>
                    <div class="flex flex-col item">
                        <div class="flex content-center gap-16">
                            <div>
                                <button class="btn-green">
                                    <span style="color: #FFFFFF">Register Live Account</span>
                                </button>
                            </div>
                            <div>
                                <button class="btn-green">
                                    <span style="color: #FFFFFF">Log in to your portal</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="investing-row">
                        <p class="investing-word">
                            Investing isn't just for the wealthy. At Metabase,<br>
                            we believe that everyone  deserves access to high-quality
                            investment products and services.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="home1">
            <div class="flex gap-29 mobile-gap">
                <div class="flex flex-col item">
                    <img src="/assets/image/home/04.png" class="invest-img">
                    <p class="invest-word">
                        FOREX
                    </p>
                </div>
                <div class="flex flex-col item">
                    <img src="/assets/image/home/07.png" class="invest-img">
                    <p class="invest-word">
                        METALS
                    </p>
                </div>
                <div class="flex flex-col item">
                    <img src="/assets/image/home/05.png" class="invest-img">
                    <p class="invest-word">
                        ENERGY
                    </p>
                </div>
                <div class="flex flex-col item">
                    <img src="/assets/image/home/06.png" class="invest-img">
                    <p class="invest-word">
                        COMMODITIES
                    </p>
                </div>
                <div class="flex flex-col item">
                    <img src="/assets/image/home/03.png" class="invest-img">
                    <p class="invest-word">
                        STOCKS
                    </p>
                </div>
                <div class="flex flex-col item">
                    <img src="/assets/image/home/01.png" class="invest-img">
                    <p class="invest-word">
                        CRYPTO
                    </p>
                </div>
                <div class="flex flex-col item">
                    <img src="/assets/image/home/08.png" class="invest-img">
                    <p class="invest-word">
                        INDICES
                    </p>
                </div>
            </div>
        </div>

        <div class="home1-mobile">
            <div class="marquee1">
                <div class="marquee-content">
                    <div class="marquee-item">
                        <div class="flex flex-col item">
                            <img src="/assets/image/home/04.png" class="invest-img">
                            <p class="invest-word">
                                FOREX
                            </p>
                        </div>
                    </div>

                    <div class="marquee-item">
                        <div class="flex flex-col item">
                            <img src="/assets/image/home/07.png" class="invest-img">
                            <p class="invest-word">
                                METALS
                            </p>
                        </div>
                    </div>
                    <div class="marquee-item">
                        <div class="flex flex-col item">
                            <img src="/assets/image/home/05.png" class="invest-img">
                            <p class="invest-word">
                                ENERGY
                            </p>
                        </div>
                    </div>
                    <div class="marquee-item">
                        <div class="flex flex-col item">
                            <img src="/assets/image/home/06.png" class="invest-img">
                            <p class="invest-word">
                                COMMODITIES
                            </p>
                        </div>
                    </div>
                    <div class="marquee-item">
                        <div class="flex flex-col item">
                            <img src="/assets/image/home/03.png" class="invest-img">
                            <p class="invest-word">
                                STOCKS
                            </p>
                        </div>
                    </div>
                    <div class="marquee-item">
                        <div class="flex flex-col item">
                            <img src="/assets/image/home/01.png" class="invest-img">
                            <p class="invest-word">
                                CRYPTO
                            </p>
                        </div>
                    </div>
                    <div class="marquee-item">
                        <div class="flex flex-col item">
                            <img src="/assets/image/home/08.png" class="invest-img">
                            <p class="invest-word">
                                INDICES
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home2 mobile-ml-mr">
            <div class="flex flex-col item gap-26">
                <div>
                    <p class="trade-word">
                        TRADE WITH METABASE EXCELLENCE
                    </p>
                    <p class="trade-word-mobile">
                        TRADE WITH<br> METABASE EXCELLENCE
                    </p>
                </div>
                <div class="home2-2">
                    <p class="our-word">
                        Our broad range of over 300 Forex and CFD instruments
                        accessible from a single platform of your choice.
                    </p>
                </div>
            </div>
        </div>

        <div class="home3 mobile-ml-mr">
            <img src="assets/image/home/01new.png" class="core-img">

        </div>
    </div>

    <div class="core-adv">
        <img src="assets/image/home/core.png" class="core">
        <img src="assets/image/home/core-dark.png" class="core-dark">
        <img src="assets/image/home/core-mobile.png" class="core-mobile">
        <img src="assets/image/home/core-mobile-dark.png" class="core-mobile-dark">
        <div class="main-content-image">
            <div class="flex flex-col overlay-text">
                <div class="flex flex-col gap-60">
                    <div>
                        <p class="ourcore-word">
                            Our Core <br>
                            Advantage
                        </p>
                    </div>
                    <div>
                        <p class="word-big">0</p>
                        <p class="word-small">Requotes & Rejections</p>
                    </div>
                    <div>
                        <div><p class="word-big">24-7</p></div>
                        <div><p class="word-small">Support</p></div>
                    </div>
                    <div class="flex space-btw">
                        <div class="explore-cont">
                            <p class="explore-word">
                                Explore of Forex and CFD instruments with
                                transparent pricing tailored to your trading level.
                                Select a tier below to view its conditions.
                            </p>
                        </div>
                        <div>
                            <div class="flex flex-end">
                                <p class="word-big">
                                    300
                                </p>
                                <span class="plus-text">+</span>
                            </div>
                            <div><p class="word-small">Trading Instruments</p></div>
                        </div>
                    </div>
                </div>
                {{-- <div class="explore-cont">
                    <p class="explore-word">
                        Explore of Forex and CFD instruments with
                        transparent pricing tailored to your trading level.
                        Select a tier below to view its conditions.
                    </p>
                </div> --}}
            </div>
            
        </div>

        <div class="main-content-image-mobile mobile-ml-mr">
            <div class="flex content-center overlay-text-mobile gap-67">
                <div class="explore-cont">
                    <p class="explore-word">
                        Explore of Forex and CFD instruments with
                        transparent pricing tailored to your trading level.
                        Select a tier below to view its conditions.
                    </p>
                </div>
                <div>
                    <div class="flex flex-col gap-26">
                        <div>
                            <p class="ourcore-word">
                                Our Core <br>
                                Advantage
                            </p>
                        </div>
                        <div>
                            <p class="word-big">0</p>
                            <p class="word-small">Requotes & Rejections</p>
                        </div>
                        <div>
                            <div><p class="word-big">24-7</p></div>
                            <div><p class="word-small">Support</p></div>
                        </div>
                        <div>
                            <div class="flex flex-end">
                                <p class="word-big">
                                    300
                                </p>
                                <span class="plus-text">+</span>
                            </div>
                            <div><p class="word-small">Trading Instruments</p></div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="home4 mobile-ml-mr">
            <div class="flex flex-col">
                <div>
                    <p class="acc-word">
                        Which account suitable for you?
                    </p>
                </div>
                <div class="flex content-center">
                    <p class="select-word">
                        Selecting the right account type is essential to ensure you have
                        the best user experience. Different account types offer varying
                        benefit and functionalities, catering to specific needs and preferences.
                    </p>
                </div>
            </div>
        </div>

        <div class="home5">
            <div class="flex content-center gap-90">
                <div class="flex flex-col item" style="width: 150px">
                    <img src="assets/image/home/std.png" class="std-border">
                    <p class="std-word-purple">STANDARD<br> ACCOUNT</p>
                    {{-- <p class="std-word-text">
                        STANDARD account is
                        a common type of
                        trading account, suitable
                        for both individuals.
                    </p> --}}
                </div>
                <div class="flex flex-col item" style="width: 150px">
                    <img src="assets/image/home/ecn.png" class="ecn-border">
                    <p class="std-word-orange">ECN<br> ACCOUNT</p>
                    {{-- <p class="std-word-text" style="width: 115px">
                        ECN account obtain
                        competitive pricing
                        from multiple
                        liquidity providers.
                    </p> --}}
                </div>
                <div class="flex flex-col item" style="width: 150px">
                    <img src="assets/image/home/esaving.png" class="esaving-border">
                    <p class="std-word-green">eSAVING<br> ACCOUNT</p>
                    {{-- <p class="std-word-text">
                        eSAVING account is
                        a worry-free savings
                        and investment account
                        designed for investors.
                    </p> --}}
                </div>
                <div class="flex flex-col item" style="width: 176px">
                    <img src="assets/image/home/einvest.png" class="einvest-border">
                    <p class="std-word-blue">eINVEST<br> ACCOUNT</p>
                    {{-- <p class="std-word-text">
                        eINVEST account allows
                        investors to achieve stable
                        investment returns even in
                        the volatile and unpredictable
                        financial markets.
                    </p> --}}
                </div>
            </div>
        </div>

        <div class="home5-mobile">
            <div class="flex space-btw">
                <div class="flex flex-col item" style="width: 70px">
                    <img src="assets/image/home/std-mobile.svg" class="std-border">
                    <p class="std-word-purple">STANDARD<br> ACCOUNT</p>
                    {{-- <p class="std-word-text">
                        STANDARD account is
                        a common type of
                        trading account, suitable
                        for both individuals.
                    </p> --}}
                </div>
                <div class="flex flex-col item" style="width: 70px">
                    <img src="assets/image/home/ecn-mobile.svg" class="ecn-border">
                    <p class="std-word-orange">ECN<br> ACCOUNT</p>
                    {{-- <p class="std-word-text" style="width: 115px">
                        ECN account obtain
                        competitive pricing
                        from multiple
                        liquidity providers.
                    </p> --}}
                </div>
                <div class="flex flex-col item" style="width: 70px">
                    <img src="assets/image/home/esaving-mobile.svg" class="esaving-border">
                    <p class="std-word-green">eSAVING<br> ACCOUNT</p>
                    {{-- <p class="std-word-text">
                        eSAVING account is
                        a worry-free savings
                        and investment account
                        designed for investors.
                    </p> --}}
                </div>
                <div class="flex flex-col item" style="width: 70px">
                    <img src="assets/image/home/einvest-mobile.svg" class="einvest-border">
                    <p class="std-word-blue">eINVEST<br> ACCOUNT</p>
                    {{-- <p class="std-word-text">
                        eINVEST account allows
                        investors to achieve stable
                        investment returns even in
                        the volatile and unpredictable
                        financial markets.
                    </p> --}}
                </div>
            </div>
        </div>

        <div class="home5-1 mobile-ml-mr">
            <ul class="acct-type">
                <li>
                    STANDARD account is a common type of trading account, suitable for both individuals.
                </li>
                <li>
                    ECN account obtain competitive pricing from multiple liquidity providers.
                </li>
                <li>
                    eSAVING account is a worry-free saving and investment account designed for investors.
                </li>
                <li>
                    eINVEST accounts empower investors to independently assess and select high-quality 'asset management masters,' enabling them to manage your funds in the volatile and unpredictable foreign exchange market.
                </li>
            </ul>
        </div>
    </div>

    <div class="iphone">
        <img src="assets/image/home/iphone.svg" class="iphone-img">
    </div>
    <div class="idk">
        <img src="assets/image/home/idk.png" class="idk-img">
        <img src="assets/image/home/idk-dark.png" class="idk-dark-img">
        <div class="main-content-image">
            <div class="overlay-text" style="top:70%">
                <p class="confidence-text">
                    Confidence is an <br>
                    attitude.
                </p>
                <p class="taking-word">
                    Taking your investment plan seriously
                    is equivalent to taking your<br>
                    future prospects seriously.
                </p>
            </div>
        </div>
    </div>

    <div class="idk-mobile">
        <img src="assets/image/home/idk-mobile.png" alt="" class="idk-img-mobile">
        <img src="assets/image/home/idk-mobile-dark.png" alt="" class="idk-img-mobile-dark">
        <div class="main-content-image-mobile mobile-ml-mr">
            <div class="overlay-text-mobile2">
                <div class="flex flex-col mobile-ml-mr">
                    <p class="confidence-text">
                        Confidence is an attitude.
                    </p>
                    <p class="taking-word">
                        Taking your investment plan seriously
                        is equivalent to taking your
                        future prospects seriously.
                    </p>
                </div>
                
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="home6 mobile-ml-mr">
            <div>
                <p class="open-text-green">
                    Open your free investment account
                </p>
                <p class="invest-text">
                    Your Investment Account is a full-featured Metabase account,
                    without opening or maintenance fees. All you need to open your
                    account online is your ID, a proof of residence (phone or utility
                    bill), just a few minutes.
                </p>
            </div>
        </div>

        <div class="home7 mobile-ml-mr">
            <div class="wheat-container">
                <p class="open-text">OPEN YOUR INVESTMENT ACCOUNT</p>
            </div>
        </div>
        <div class="home8">
            <div class="flex gap-20">
                <div class="flex gap-10">
                    <img src="assets/image/footer/apple.svg" class="app-dark">
                    <img src="assets/image/footer/google.svg" class="app-dark">
                    <img src="assets/image/footer/window.svg" class="app-dark">
                </div>
                <div>
                    <p class="aldy-text">
                        Already have a friend at Metabase?<br>
                        Ask them for their referral code so you both get <span class="span-text-grn">USD$100.00 - Rewards!</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="home8-mobile mobile-ml-mr">
            <div class="flex flex-col gap-20 w-full">
                <div class="flex gap-8">
                    <img src="assets/image/apple-mobile.svg" class="app-dark">
                    <img src="assets/image/google-mobile.svg" class="app-dark">
                    {{-- <img src="assets/image/windows-mobile.svg" class="app-dark"> --}}
                </div>
                <div>
                    {{-- <p class="aldy-text">
                        Already have a friend at Metabase?
                        Ask them for their referral code so you both get <span class="span-text-grn">USD$100.00 - Rewards!</span>
                    </p> --}}
                    <p class="aldy-text">
                        Already have a friend at Metabase? Ask them for their referral code so you both get <span class="span-text-grn">USD$100.00 - Rewards!</span> 
                    </p>
                    
                </div>
            </div>
        </div>

        <div class="home9 mobile-ml-mr-15">
            <img src="assets/image/home/crm.svg" class="crm-img">
        </div>

        <div class="home10 mobile-ml-mr">
            <div class="flex flex-col gap-30">
                <div class="tired-content">
                    <p class="tired-text-green">
                        Are you tired of the<br>
                        traditional personal dashboard?
                    </p>
                </div>
                <div class="flex content-center">
                    <p class="tired-text">
                        Open a trading account quickly, and you will discover
                        our powerful personal management dashboard that will make it
                        easier for you to control your trading account and investment.
                    </p>
                </div>
            </div>
        </div>

        <div class="home11">
            <div class="flex gap-20">
                <img src="assets/image/home/09.png" class="img09">
                <img src="assets/image/home/10.png" class="img09">
                <img src="assets/image/home/11.png" class="img09">
            </div>
        </div>

        <div class="home11-mobile">
            {{-- <div class="marquee2">
                <div class="marquee-content2">
                    <div class="marquee-item2">
                        <img src="assets/image/home/09.png" class="img09">
                    </div>
                    <div class="marquee-item2">
                        <img src="assets/image/home/10.png" class="img09">
                    </div>
                    <div class="marquee-item2">
                        <img src="assets/image/home/11.png" class="img09">
                    </div>
                </div>
            </div> --}}
            <div class="slick-slider2">
                <div class="slide-item2-container">
                    <img src="assets/image/home/09.png" class="img09">
                </div>

                <div class="slide-item2-container">
                    <img src="assets/image/home/10.png" class="img09">
                </div>

                <div class="slide-item2-container">
                    <img src="assets/image/home/11.png" class="img09">
                </div>
            </div>
        </div>

        <div class="home12">
            <div class="flex gap-10">
                <div>
                    <button class="btn-green">
                        <span>Register Live Account</span>
                    </button>
                </div>
                <div>
                    <button class="btn-green">
                        <span>Log in to your portal</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection