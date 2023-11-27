@extends('layouts.master')
@section('content')
    <style>
        .partner-header {
            width: 100%;
            height: auto;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-bottom: 82px;
        }
        .partner-img {
            width: 100%;
            height: auto;
        }
        .partner-dark-img {
            width: 100%;
            height: auto;
        }
        .light-mode .partner-img {
            display: block;
        }
        .light-mode .partner-dark-img {
            display: none;
        }
        .dark-mode .partner-img {
            display: none;
        }
        .dark-mode .partner-dark-img {
            display: block;
        }
        .text-overlay {
            position: absolute;
            top: 75%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 100%;
        }
        .partner-text1 {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Display;
            font-size: 48px;
            font-style: normal;
            font-weight: 700;
            line-height: 60px; /* 125% */
            margin: 0;
            margin-bottom: 26px;
        }

        .partner-text2 {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Display;
            font-size: 30px;
            font-style: normal;
            font-weight: 590;
            line-height: 35px; /* 116.667% */
            margin: 0;
        }
        .partner-text-green {
            color: #5CA346;
            text-align: center;
            font-family: SF Pro Display;
            font-size: 32px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            margin: 0;
        }
        .partner1 {
            width: 100%;
            margin-bottom: 68px;
        }
        .partner2 {
            width: 100%;
            margin-bottom: 100px;
        }
        .partner3 {
            width: 100%;
            margin-bottom: 100px;
        }
        .partner4 {
            width: 100%;
            margin-bottom: 166px;
        }
        .partner4-mobile {
            display: none;
        }
        .partner5 {
            width: 100%;
            margin-bottom: 89px;
        }
        .partner6 {
            width: 100%;
            margin-bottom: 68px;
        }
        .partner7 {
            width: 100%;
            margin-bottom: 68px;
        }
        .partner8{
            width: 100%;
            margin-bottom: 100px;
        }
        .partner9 {
            width: 100%;
            margin-bottom: 200px;
        }
        .partner9 a {
            text-decoration: none;
        }
        .partner10 {
            width: 100%;
            margin-bottom: 18px;
        }
        .partner11 {
            width: 100%;
            margin-bottom: 100px;
        }
        .stbl-text {
            color: #5CA346;
            text-align: center;
            font-family: SF Pro Display;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 16px; /* 100% */
            margin: 0;
        }
        .stbl-text-mobile {
            display: none;
        }
        .enjoy-text-green {
            color: #5CA346;
            font-family: SF Pro Display;
            font-size: 48px;
            font-style: normal;
            font-weight: 274;
            line-height: 55px; /* 114.583% */
            margin: 0;
        }
        .enjoy-text-green2 {
            color: #5CA346;
            font-family: 'SF Pro Display';
            font-size: 48px;
            font-style: normal;
            font-weight: 300;
            line-height: 55px; /* 114.583% */
            margin: 0;
            margin-bottom: 26px;
        }
        .enjoy-text-white {
            color: #000;
            font-family: SF Pro Display;
            font-size: 24px;
            font-style: normal;
            font-weight: 274;
            line-height: 25px; /* 104.167% */
            margin: 0;
            width: 56%;
        }
        .dark-mode .enjoy-text-white {
            color: #FFF;
        }
        .log-text {
            color: #000;
            font-family: SF Pro Display;
            font-size: 16px;
            font-style: normal;
            font-weight: 510;
            line-height: 20px; /* 125% */
            margin: 0;
            width: 75%;
            margin-left: 16px;
            /* margin-top: 50px; */
        }
        .dark-mode .log-text {
            color: #FFF;
        }
        .log-text-span {
            color: #5CA346;
            font-family: SF Pro Display;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: 16px; /* 100% */
            margin-left: 16px;
            margin-top: 50px;
            margin-bottom: 10px;
        }
        .w-f {
            width: 100%;
        }
        .reward-text-green {
            color: #5CA346;
            text-align: center;
            font-family: SF Pro Display;
            font-size: 32px;
            font-style: normal;
            font-weight: 700;
            line-height: 50px; /* 156.25% */
            margin: 0;
            margin-bottom: 26px;
        }
        .reward-text-white {
            color: #000;
            text-align: center;
            font-family: SF Pro Display;
            font-size: 30px;
            font-style: normal;
            font-weight: 600;
            line-height: 35px; /* 116.667% */
            margin: 0;
        }
        .reward-text-white-mobile {
            display: none;
        }
        .dark-mode .reward-text-white {
            color: #FFF;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        thead {
            background-color: #5CA346;
            color: white;
        }

        th, td {
            border: 2px solid #ffffff;
            text-align: center;
            padding: 8px;
        }

        .dark-mode th, .dark-mode td {
            border: 2px solid #000000;
            text-align: center;
            padding: 8px;
        }

        th {
            width: 107.143px;
            text-align: center;
            color: #FFF;
            text-align: center;
            font-family: SF Pro Display;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
        }
        td {
            color: #000;
            text-align: center;
            font-family: SF Pro Display;
            font-size: 12px;
            font-style: normal;
            font-weight: 300;
            line-height: 20px; /* 250% */
        }
        .dark-mode td {
            color: #FFF;
        }
        th:nth-child(1) {
            width: 349px; /* Description column width */
        }
        th:nth-child(2),
        td:nth-child(2) {
            width: 160.714px; /* MIN SPREADS (pips) column width */
        }

        th:nth-child(3),
        td:nth-child(3) {
            width: 160.714px; /* MIN SPREADS (pips) column width */
        }

        th:nth-child(4),
        td:nth-child(4) {
            width: 160.714px; /* Min trade size column width */
        }

        th:nth-child(5),
        td:nth-child(5) {
            width: 160.714px; /* Max trade size column width */
        }
        tr:nth-child(odd) {
            background-color: rgba(92, 163, 70, 0.10);
        }
        .dark-mode tr:nth-child(odd) {
            background: rgba(92, 163, 70, 0.40);
        }

        /* Reset background for specific rows */
        tr:nth-child(2) {
            background-color: rgba(92, 163, 70, 0.10); 
        }
        .dark-mode tr:nth-child(2) {
            background: rgba(92, 163, 70, 0.40);
        }

        tr:nth-child(3) {
            background-color: rgba(92, 163, 70, 0.10); /* Background for the third row */
        }
        .dark-mode tr:nth-child(3) {
            background: rgba(92, 163, 70, 0.40); /* Background for the third row */
        }
        tr:nth-child(4) {
            background-color: rgba(92, 163, 70, 0.10); /* Background for the third row */
        }
        .dark-mode tr:nth-child(4) {
            background: rgba(92, 163, 70, 0.40);
        }
        .or-text {
            color: #5CA346;
            text-align: center;
            font-family: SF Pro Display;
            font-size: 32px;
            font-style: normal;
            font-weight: 700;
            line-height: 50px; /* 156.25% */
            margin: 0;
        }
        .tnc-text {
            color: #5CA346;
            font-family: SF Pro Display;
            font-size: 16px;
            font-style: normal;
            font-weight: 510;
            line-height: 20px; /* 125% */
            text-decoration-line: underline;
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
        .light-mode .atr-img {
            display: block;
        }
        .light-mode .atr-dark-img {
            display: none;
        }
        .dark-mode .atr-img {
            display: none;
        }
        .dark-mode .atr-dark-img {
            display: block;
        }
        .partner-header-mobile {
            display: none;
        }
        .dark-mode .app-dark {
            border-radius: 10px;
            border: 0.5px solid #5CA346;
        }
        .app-dark-mobile {
            display: none;
        }
        .aldy-text-mobile {
            display: none;
        }
        @media screen and (max-width: 1000px)
        {
            .partner-header {
                display: none;
            }
            .partner-header-mobile {
                width: 100%;
                height: auto;
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                margin-bottom: 50px;
            }
            .text-overlay-mobile {
                position: absolute;
                top: 70%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 100%;
            }
            .partner-text1 {
                font-size: 20px;
                line-height: 25px;
                margin: 0;
            }
            .partner-text2 {
                font-size: 12px;
                line-height: 14px;
            }
            .partner-text-green {
                font-size: 24px;
                font-weight: 700;
                line-height: normal;
            }
            .atr-img {
                width: 70px;
                height: 70px;
            }
            .stbl-text {
                display: none;
            }
            .stbl-text-mobile {
                display: block;
                color: #5CA346;

                text-align: center;
                font-size: 10px;
                font-style: normal;
                font-weight: 700;
                line-height: 10px;
                font-family: SF Pro Text;
                margin: 0;
            }
            .gap-36 {
                gap: 16px;
            }
            .partner2 {
                margin-bottom: 50px;
            }
            .enjoy-text-green2 {
                font-size: 16px;
                line-height: 16px;
                text-align: center;
            }
            .enjoy-text-white {
                font-size: 12px;
                font-style: normal;
                font-weight: 274;
                line-height: 14px;
                text-align: center;
                width: 100%;
            }
            .partner3 {
                margin-bottom: 36px;
            }
            .partner4 {
                width: 100%;
                margin-bottom: 166px;
                display: none;
            }
            .partner4-mobile {
                display: block;
                margin-bottom: 100px;
                width: 100%;
            }
            .marquee3 {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .marquee-content3 {
                display: flex;
                animation: marquee-animation3 150s linear infinite;
                width: fit-content; /* Adjust the width based on your image size */
                gap: 14px;
            }
            @keyframes marquee-animation3 {
                0% {
                transform: translateX(0);
                }
                100% {
                transform: translateX(-100%);
                }
            }
            .mobile5-img {
                width: 223.995px;
                height: 460.75px;
            }
            .log-text-span {
                margin-top: 26px;
                font-size: 14px;
                line-height: 14px;
            }
            .log-text {
                font-size: 12px;
                line-height: 14px;
            }
            .reward-text-green {
                font-size: 20px;
                line-height: 20px;
                margin-bottom: 16px;
            }
            .reward-text-white {
                font-size: 12px;
                line-height: 14px;
                display: none;
            }
            .reward-text-white-mobile {
                color: #000;

                text-align: center;
                font-family: SF Pro Text;
                font-size: 12px;
                font-style: normal;
                font-weight: 590;
                line-height: 14px; /* 116.667% */
                margin: 0;
                display: block; 
            }
            .partner5 {
                margin-bottom: 36px;
            }
            .partner6 {
                overflow-x: auto;
                margin-bottom: 50px;
            }
            .partner8 {
                overflow-x: auto;
                margin-bottom: 50px;
            }
            .partner9 {
                text-align: center;
                margin-bottom: 66px;
            }
            .tnc-text {
                font-size: 14px;
                font-family: SF Pro Text;
            }
            table {
                white-space: nowrap;
                min-width: 100%;
            }
            th, td {
                min-width: 128px; /* Set a minimum width for each cell to prevent squeezing content */
            }
            .wheat-container {
                height: 50px;
            }
            .open-text {
                font-size: 14px;
                line-height: normal;
                font-family: SF Pro Text;
            }   
            .app-dark-mobile {
                display: block;
            }
            .app-dark {
                display: none;
            }
            .aldy-text {
                display: none;
            }
            .aldy-text-mobile {
                display: block;
                text-align: center;
                font-family: SF Pro Text;
                font-size: 10px;
                font-style: normal;
                font-weight: 400;
                line-height: 12px;
                margin: 0;
            }
            .span-text-grn {
                font-size: 10px;
                line-height: 12px;
            }
            .partner11 {
                margin-bottom: 60px;
            }
            .partner1 {
                margin-bottom: 26px;
            }
            .app-window {
                display: none;
            }
            .app-dark-mobile {
                width: 100%;
            }
            .company-mobile-img {
                display: block;
                width: 100%;
            }
            .company-mobile-img-dark {
                display: none;

            }
            .dark-mode .company-mobile-img {
                display: none;
            }
            .dark-mode .company-mobile-img-dark {
                display: block;
                width: 100%;
            }
            .dark-mode .atr-dark-img {
                width: 70px;
                height: 70px;
            }
            .dark-mode .app-dark-mobile {
                border: #5CA346 1px solid;
                border-radius: 10px;
            }
            .w-f-slick {
                width: 60%;
            }
            .dark-mode .slick-dots li.slick-active button:before {
                color: #19ff00;
            }
            .dark-mode .slick-dots li button:before {
                color: #00ff16;
            }

            .partner-text1.tw-partner-text1 {
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: 25px;
            }
            .stbl-text-mobile.tw-stbl-text-mobile {
                font-size: 10px;
                font-style: normal;
                font-weight: 700;
                line-height: 12px;
            }
            .enjoy-text-green2.tw-enjoy-text-green2 {
                font-size: 20px;
                font-weight: 400;
                line-height: 25px;
            }

            .enjoy-text-white.tw-enjoy-text-white {
                font-size: 14px;
                font-weight: 400;
                line-height: 18px;
            }
            .aldy-text-mobile.tw-aldy-text-mobile {
                font-size: 12px;
                line-height: 14px;
                width: 85%;
            }
        }


    </style>

    <div class="partner-header">
        <img src="assets/image/partner/partner.png" class="partner-img">
        <img src="assets/image/partner/partner-dark.png" class="partner-dark-img">
        <div class="text-overlay">
            <div class="main-content">
                <div class="flex flex-col">
                    <p class="partner-text1">
                        {{-- Don't give up your forest --}}
                        @lang('message.partner-text1-1')
                        <br>
                        {{-- for the sake of one tree. --}}
                        @lang('message.partner-text1-2')
                    </p>
                    <p class="partner-text2">
                        {{-- Solutions for Introducing Advisor (IA) --}}
                        @lang('message.partner-text2-1')
                        <br>
                        {{-- Build your client base, earn more revenue. --}}
                        @lang('message.partner-text2-2')
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="partner-header-mobile">
        <img src="assets/image/partner/partner-mobile.png" class="company-mobile-img">
        <img src="assets/image/partner/partner-mobile-dark.png" class="company-mobile-img-dark">
        <div class="text-overlay-mobile">
            <div class="main-content">
                <div class="flex flex-col gap-16 mobile-ml-mr">
                    <p class="partner-text1 @if(app()->getLocale() == 'tw') tw-partner-text1 @endif">
                        {{-- Don't give up your forest --}}
                        @lang('message.partner-text1-1')
                        <br>
                        {{-- for the sake of one tree. --}}
                        @lang('message.partner-text1-2')
                    </p>
                    <p class="partner-text2">
                        {{-- Solutions for Introducing Advisor (IA) --}}
                        @lang('message.partner-text2-1')
                        <br>
                        {{-- Build your client base, earn more revenue. --}}
                        @lang('message.partner-text2-2')
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="partner1 mobile-ml-mr">
            <p class="partner-text-green">
                {{-- Rely on a rock solid partner --}}
                @lang('message.partner-text-green')
            </p>
        </div>

        <div class="partner2 mobile-ml-mr">
            <div class="flex" style="justify-content: space-between">
                <div class="flex flex-col item gap-36">
                    <img src="assets/image/partner/4.svg" class="atr-img">
                    <img src="assets/image/partner/attractive-dark.png" class="atr-dark-img">
                    <p class="stbl-text">
                        {{-- Attractive tailored --}}
                        @lang('message.stbl-text-1')
                        <br>
                        {{-- reward scheme --}}
                        @lang('message.stbl-text-2')
                    </p>
                    <p class="stbl-text-mobile @if(app()->getLocale() == 'tw') tw-stbl-text-mobile @endif">
                        {{-- Attractive --}}
                        @lang('message.stbl-text-mobile-1')
                        <br>
                        {{-- reward --}}
                        @lang('message.stbl-text-mobile-2')
                        <br> 
                        {{-- scheme --}}
                        @lang('message.stbl-text-mobile-3')
                    </p>
                </div>
                <div class="flex flex-col item gap-36">
                    <img src="assets/image/partner/1.svg" class="atr-img">
                    <img src="assets/image/partner/advance-dark.png" class="atr-dark-img">
                    <p class="stbl-text">
                        {{-- Advanced Client --}}
                        @lang('message.stbl-text-3')
                        <br>
                        {{-- Tracking System --}}
                        @lang('message.stbl-text-4')
                    </p>
                    <p class="stbl-text-mobile @if(app()->getLocale() == 'tw') tw-stbl-text-mobile @endif">
                        {{-- Client  --}}
                        @lang('message.stbl-text-mobile-4')
                        <br>
                        {{-- Tracking --}}
                        @lang('message.stbl-text-mobile-5')
                        <br>
                        {{-- System --}}
                        @lang('message.stbl-text-mobile-6')
                    </p>
                </div>
                <div class="flex flex-col item gap-36">
                    <img src="assets/image/partner/2.svg" class="atr-img">
                    <img src="assets/image/partner/automated-dark.png" class="atr-dark-img">
                    <p class="stbl-text">
                        {{-- Automated --}}
                        @lang('message.stbl-text-5')
                        <br>
                        {{-- revenue reporting --}}
                        @lang('message.stbl-text-6')
                    </p>
                    <p class="stbl-text-mobile @if(app()->getLocale() == 'tw') tw-stbl-text-mobile @endif">
                        {{-- Automated --}}
                        @lang('message.stbl-text-mobile-7')
                        <br>
                        {{-- revenue --}}
                        @lang('message.stbl-text-mobile-8')
                        <br>
                        {{-- reporting --}}
                        @lang('message.stbl-text-mobile-9')
                    </p>
                </div>
                <div class="flex flex-col item gap-36">
                    <img src="assets/image/partner/3.svg" class="atr-img">
                    <img src="assets/image/partner/powerful-dark.png" class="atr-dark-img">
                    <p class="stbl-text">
                        {{-- Powerful and --}}
                        @lang('message.stbl-text-7')
                        <br>
                        {{-- user-friendly CRM --}}
                        @lang('message.stbl-text-8')
                    </p>
                    <p class="stbl-text-mobile @if(app()->getLocale() == 'tw') tw-stbl-text-mobile @endif">
                        {{-- Powerful --}}
                        @lang('message.stbl-text-mobile-10')
                        <br>
                        {{-- and user- --}}
                        @lang('message.stbl-text-mobile-11')
                        <br>
                        {{-- friendly CRM --}}
                        @lang('message.stbl-text-mobile-12')
                    </p>
                </div>
            </div>
        </div>

        <div class="partner3 mobile-ml-mr">
            <p class="enjoy-text-green2 @if(app()->getLocale() == 'tw') tw-enjoy-text-green2 @endif">
                {{-- Enjoy Metabase quality investment experience?
                Don't be selfish, invite your friends now! --}}
                @lang('message.enjoy-text-green2')
            </p>
            <p class="enjoy-text-white @if(app()->getLocale() == 'tw') tw-enjoy-text-white @endif">
                {{-- Recommend Metabase and earn cash bonuses up to  --}}
                @lang('message.enjoy-text-white-1')
                <br> 
                {{-- USD 100.00 per referral*.Just follow the simple 
                steps below: --}}
                @lang('message.enjoy-text-white-2')
            </p>
        </div>

        <div class="partner4">
            <div class="flex content-center gap-20">
                <div class="flex flex-col item">
                    <img src="assets/image/partner/5.png">
                    <div class="w-f">
                        <p class="log-text-span">
                            {{-- How to be a sponsor? --}}
                            @lang('message.log-text-span-1')
                        </p>
                        <p class="log-text">
                            {{-- Just log into your ePortal to obtain
                            your referral link, then share it
                            with your friends. --}}
                            @lang('message.log-text-1')
                        </p>
                    </div>
                    
                </div>
                <div class="flex flex-col item">
                    <img src="assets/image/partner/6.png">
                    <div class="w-f">
                        <p class="log-text-span">
                            {{-- If you have been sponsored --}}
                            @lang('message.log-text-span-2')
                        </p>
                        <p class="log-text">
                            {{-- Your friend must register an
                            investment account using your
                            referral link. --}}
                            @lang('message.log-text-2')
                        </p>
                    </div>
                    
                </div>
                <div class="flex flex-col item">
                    <img src="assets/image/partner/7.png">
                    <div class="w-f">
                        <p class="log-text-span">
                            {{-- How to claim your referral bonuses --}}
                            @lang('message.log-text-span-3')
                        </p>
                        <p class="log-text">
                            {{-- Both parties will be eligible for the
                            referral bonus once your friend
                            deposits and trades for a minimum
                            of 14 business days. --}}
                            @lang('message.log-text-3')
                        </p>
                    </div>
                </div>
                
            </div>
            
        </div>

        <div class="partner4-mobile">
            {{-- <div class="marquee3">
                <div class="marquee-content3">
                    <div class="marquee-item3">
                        <div class="flex flex-col item">
                            <img src="assets/image/partner/5.png" class="mobile5-img">
                            <div class="w-f">
                                <p class="log-text-span">How to be a sponsor?</p>
                                <p class="log-text">
                                    Just log into your ePortal to obtain
                                    your referral link, then share it
                                    with your friends.
                                </p>
                            </div>
                            
                        </div>
                    </div>

                    <div class="marquee-item3">
                        <div class="flex flex-col item">
                            <img src="assets/image/partner/6.png" class="mobile5-img">
                            <div class="w-f">
                                <p class="log-text-span">If you have been sponsored</p>
                                <p class="log-text">
                                    Your friend must register an
                                    investment account using your
                                    referral link.
                                </p>
                            </div>
                            
                        </div>
                    </div>

                    <div class="marquee-item3">
                        <div class="flex flex-col item">
                            <img src="assets/image/partner/7.png" class="mobile5-img">
                            <div class="w-f">
                                <p class="log-text-span">How to claim your referral bonuses</p>
                                <p class="log-text">
                                    Both parties will be eligible for the
                                    referral bonus once your friend
                                    deposits and trades for a minimum
                                    of 14 business days.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="slick-slider3">
                <div class="slide-item3-container">
                    <div class="flex flex-col item">
                        <img src="assets/image/partner/5.png" class="mobile5-img">
                        <div class="w-f-slick">
                            <p class="log-text-span">
                                {{-- How to be a sponsor? --}}
                                @lang('message.log-text-span-1')
                            </p>
                            <p class="log-text">
                                {{-- Just log into your ePortal to obtain
                                your referral link, then share it
                                with your friends. --}}
                                @lang('message.log-text-1')
                            </p>
                        </div>
                    </div>
                </div>

                <div class="slide-item3-container">
                    <div class="flex flex-col item">
                        <img src="assets/image/partner/6.png" class="mobile5-img">
                        <div class="w-f-slick">
                            <p class="log-text-span">
                                {{-- If you have been sponsored --}}
                                @lang('message.log-text-span-2')
                            </p>
                            <p class="log-text">
                                {{-- Your friend must register an
                                investment account using your
                                referral link. --}}
                                @lang('message.log-text-2')
                            </p>
                        </div>
                        
                    </div>
                </div>

                <div class="slide-item3-container">
                    <div class="flex flex-col item">
                        <img src="assets/image/partner/7.png" class="mobile5-img">
                        <div class="w-f-slick">
                            <p class="log-text-span">
                                {{-- How to claim your referral bonuses --}}
                                @lang('message.log-text-span-3')
                            </p>
                            <p class="log-text">
                                {{-- Both parties will be eligible for the
                                referral bonus once your friend
                                deposits and trades for a minimum
                                of 14 business days. --}}
                                @lang('message.log-text-3')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="partner5 mobile-ml-mr">
            <p class="reward-text-green">
                {{-- Your Rewards --}}
                @lang('message.reward-text-green')
            </p>
            <p class="reward-text-white">
                {{-- After the referred client funds  --}}
                @lang('message.reward-text-white-1')
                <br>
                {{-- their account, both the sponsor and the referred client will receive a --}}
                @lang('message.reward-text-white-2')
                <br>
                {{-- bonus on their accounts proportional to the deposit, as detailed below. --}}
                @lang('message.reward-text-white-3')
            </p>
            <p class="reward-text-white-mobile">
                {{-- After the referred client funds 
                their account, both the sponsor and the referred client will receive a
                bonus on their accounts proportional to the deposit, as detailed below. --}}
                @lang('message.reward-text-white-mobile')
            </p>
        </div>

        <div class="partner6">
            <table>
                <thead>
                    <tr>
                        <th>
                            {{-- Amount In USD --}}
                            @lang('message.amount-in-usd')
                        </th>
                        <th>
                            {{-- MIN TRADING DAYS --}}
                            @lang('message.min-trading-days')
                        </th>
                        <th>
                            {{-- Standard Reward --}}
                            @lang('message.standard-reward')
                        </th>
                        <th>
                            {{-- Premium Reward --}}
                            @lang('message.premium-reward')
                        </th>
                        <th>
                            {{-- VIP Reward --}}
                            @lang('message.vip-reward')
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{-- Minimum Deposit Referred Client --}}
                            @lang('message.minumum-deposit-referred-client')
                        </td>
                        <td rowspan="14">14</td>
                        <td>3,000.00</td>
                        <td>5,000.00</td>
                        <td>10,000.00</td>
                    </tr>
                    <tr>
                        <td>
                            {{-- Minimum Trading Lot Referred Client --}}
                            @lang('message.minimum-trading-lot-referred-client')
                        </td>
                        <td>
                            {{-- 5 Standard Lots --}}
                            @lang('message.5-standard-lots')
                        </td>
                        <td>
                            {{-- 15 Standard Lots --}}
                            @lang('message.15-standard-lots')
                        </td>
                        <td>
                            {{-- 50 Standard Lots --}}
                            @lang('message.50-standard-lots')
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            {{-- Cash Bonus Referrer --}}
                            @lang('message.cash-bonus-referrer')
                        </td>
                        <td>100.00</td>
                        <td>300.00</td>
                        <td>500.00</td>
                    </tr>
                    <tr>
                        <td>
                            {{-- Cash Bonus Referred Client --}}
                            @lang('message.cash-bonus-referred-client')
                        </td>
                        <td>100.00</td>
                        <td>300.00</td>
                        <td>500.00</td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- <div class="partner7">
            <p class="or-text">Or</p>
        </div> --}}

        {{-- <div class="partner8">
            <table>
                <thead>
                    <tr>
                        <th>Amount In USD</th>
                        <th>MIN TRADING DAYS</th>
                        <th>Standard Reward</th>
                        <th>Premium Reward</th>
                        <th>VIP Reward</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Minimum Deposit Referred Client</td>
                        <td rowspan="14">14</td>
                        <td>5,000.00</td>
                        <td>10,000.00</td>
                        <td>30,000.00</td>
                    </tr>
                    <tr>
                        <td>Minimum Trading Lot Referred Client</td>
                        <td>10</td>
                        <td>30</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Deposited Trading Bonus Referrer</td>
                        <td>500.00</td>
                        <td>1,000.00</td>
                        <td>3,000.00</td>
                    </tr>
                    <tr>
                        <td>Deposited Trading Bonus Referred Client</td>
                        <td>500.00</td>
                        <td>1000.00</td>
                        <td>3,000.00</td>
                    </tr>
                </tbody>
            </table>
        </div> --}}

        <div class="partner9">
            <a href="/assets/pdf/METABASE_REFERRAL_RPOGRAM_T&C.pdf" target="_blank">
                <span class="tnc-text">
                    {{-- *See the full terms and conditions of this offer. --}}
                    @lang('message.tnc-text')
                </span>
            </a>
        </div>

        <div class="partner10 mobile-ml-mr">
            <div class="wheat-container">
                <p class="open-text">
                    {{-- OPEN YOUR INVESTMENT ACCOUNT --}}
                    @lang('message.c-open-text')
                </p>
            </div>
        </div>

        <div class="partner11 mobile-ml-mr">
            <div class="flex flex-col-mobile gap-20">
                <div class="flex gap-10">
                    <img src="assets/image/footer/apple.svg" class="app-dark">
                    <img src="assets/image/footer/google.svg" class="app-dark">
                    <img src="assets/image/footer/window.svg" class="app-dark app-window">

                    <img src="assets/image/company/google-mobile-new.svg" class="app-dark-mobile">
                    <img src="assets/image/company/apple-mobile-new.svg" class="app-dark-mobile">
                    <img src="assets/image/company/window-mobile-new.svg" class="app-dark-mobile app-window">
                </div>
                <div class="flex content-center">
                    <p class="aldy-text">
                        {{-- Already have a friend at Metabase? --}}
                        @lang('message.aldy-text-1')
                        <br>
                        {{-- Ask them for their referral code so you both get  --}}
                        @lang('message.aldy-text-2')
                        <span class="span-text-grn">
                            {{-- USD$100.00 - Rewards! --}}
                            @lang('message.aldy-text-3')
                        </span>
                    </p>
                    <p class="aldy-text-mobile @if(app()->getLocale() == 'tw') tw-aldy-text-mobile @endif">
                        {{-- Already have a friend at Metabase? --}}
                        @lang('message.aldy-text-1')
                        <br>
                        {{-- Ask them for their referral code so you both get  --}}
                        @lang('message.aldy-text-2')
                        <span class="span-text-grn">
                            {{-- USD$100.00 - Rewards! --}}
                            @lang('message.aldy-text-3')
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection