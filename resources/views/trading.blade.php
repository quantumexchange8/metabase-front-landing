@extends('layouts.master')
@section('content')
    <style>
        .trading-header {
            width: 100%;
            height: auto;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-bottom: 90px;
        }
        .trading-header-mobile {
            display: none;
        }
        .trading-text1 {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Display;
            font-size: 48px;
            font-weight: 700;
            line-height: 1.2; /* Adjust line-height as needed */
            margin: 0;
            margin-bottom: 36px;
        }

        .trading-text2 {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Display;
            font-size: 30px;
            font-weight: 590; /* Note: font-weight 590 is not a standard value, use a valid one */
            line-height: 30px; /* Adjust line-height as needed */
            margin: 0;
            width: 92%;
        }

        .trading-img {
            width: 100%;
            height: auto;
        }
        .trading-dark-img {
            width: 100%;
            height: auto;
        }
        .light-mode .trading-img {
            display: block;
        }
        .light-mode .trading-dark-img {
            display: none;
        }
        .dark-mode .trading-img {
            display: none;
        }
        .dark-mode .trading-dark-img {
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
        .trading1 {
            width: 100%;
            margin-bottom: 18px;
        }
        .trading2 {
            width: 100%;
            margin-bottom: 100px;
        }
        .trading2-3 {
            width: 100%;
            margin-bottom: 68px;
            display: flex;
            justify-content: center;
        }
        .trading3 {
            width: 100%;
            margin-bottom: 68px;
        }
        .trading4 {
            width: 100%;
            margin-bottom: 68px;
        }
        .trading5 {
            width: 100%;
            margin-bottom: 38px;
        }
        .trading6 {
            width: 100%;
            margin-bottom: 100px;
        }
        .trading7 {
            width: 100%;
            margin-bottom: 100px;
        }
        .trading8 {
            width: 100%;
            margin-bottom: 38px;
        }
        .trading9 {
            width: 100%;
            margin-bottom: 100px;
        }
        .trading10 {
            width: 100%;
            margin-bottom: 100px;
        }
        .trading11 {
            width: 100%;
            margin-bottom: 389px;
        }
        .trading12 {
            width: 100%;
            margin-bottom: 369px;
        }
        .trading13 {
            width: 100%;
            margin-bottom: 18px;
        }
        .trading14 {
            width: 100%;
            margin-bottom: 200px;
        }
        .trading15 {
            width: 100%;
            margin-bottom: 100px;
        }
        .wheat-container {
            width: 100%;
            height: 50px;
            border-radius: 10px;
            background: rgba(92, 163, 70, 0.10);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .dark-mode .wheat-container {
            background: rgba(92, 163, 70, 0.40) !important;
        }
        .aldy-text {
            /* color: #000; */
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 16px; /* 114.286% */
            margin: 0;
        }
        .aldy-text-mobile {
            display: none;
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
        .worry-text-green {
            color: #5CA346;
            font-family: SF Pro Display;
            font-size: 48px;
            font-style: normal;
            font-weight: 274;
            line-height: 50px; /* 104.167% */
            margin: 0;
            margin-bottom: 26px;
        }
        .worry-text-white {
            /* color: #000; */
            font-family: SF Pro Display;
            font-size: 24px;
            font-style: normal;
            font-weight: 274;
            line-height: 25px; /* 104.167% */
            margin: 0;
        }
        .worry-text-white2 {
            /* color: #000; */
            font-family: SF Pro Display;
            font-size: 24px;
            font-style: normal;
            font-weight: 300;
            line-height: 25px; /* 104.167% */
            margin: 0;
            width: 50%;
        }
        .worry-text-white3 {
            /* color: #000; */
            font-family: SF Pro Display;
            font-size: 24px;
            font-style: normal;
            font-weight: 300;
            line-height: 25px; /* 104.167% */
            margin: 0;
            width: 97%;
        }
        .trading-line {
            width: 100%;
            height: 1px;
            margin-bottom: 100px;
            background: #5CA346;
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
        th:nth-child(2) {
            width: 403.195px; /* Description column width */
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
            background-color: transparent; /* No background for the second row */
        }

        tr:nth-child(3) {
            background-color: rgba(92, 163, 70, 0.10); /* Background for the third row */
        }
        .dark-mode tr:nth-child(3) {
            background: rgba(92, 163, 70, 0.40); /* Background for the third row */
        }
        .aldy-text {
            /* color: #000; */
            font-family: SF Pro Text;
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
        .disclaimer-text-white {
            /* color: #000; */
            font-family: SF Pro Display;
            font-size: 24px;
            font-style: normal;
            font-weight: 510;
            line-height: 30px; /* 125% */
        }

        .numbered-list {
            list-style-type: decimal; /* Use decimal numbering for the ordered list */
            padding-left: 36px; /* Adjust the left padding as needed */
            margin-top: 0;
        }

        .numbered-list li {
            margin-bottom: 10px; /* Adjust the margin between list items as needed */
            /* color: #000; */
            font-family: SF Pro Display;
            font-size: 24px;
            font-style: normal;
            font-weight: 274;
            line-height: 30px;
            width: 98%;
        }
        .note-text {
            /* color: #000; */
            font-family: SF Pro Display;
            font-size: 24px;
            font-style: normal;
            font-weight: 274;
            line-height: 30px;
        }
        .low-text-green {
            color: #5CA346;
            font-family: SF Pro Display;
            font-size: 36px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            margin: 0;
        }
        .dark-mode .app-dark {
            border-radius: 10px;
            border: 0.5px solid #5CA346;
        }
        .app-dark-mobile {
            display: none;
        }
        .light-mode .stable-img {
            display: block;
            /* width: 100%; */
        }
        .light-mode .stable-dark-img {
            display: none;
            width: 100%;
        }
        .dark-mode .stable-img {
            display: none;
        }
        .dark-mode .stable-dark-img {
            display: block;
        }
        @media screen and (max-width: 1000px)
        {
            .trading-header {
                display: none;
            }
            .trading-header-mobile {
                width: 100%;
                height: auto;
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                margin-bottom: 30px;
            }
            .text-overlay-mobile {
                position: absolute;
                top: 70%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 100%;
            }
            .trading-text1 {
                color: #FFF;

                text-align: center;
                font-family: SF Pro Text;
                font-size: 20px;
                font-style: normal;
                font-weight: 700;
                line-height: 18px; 
                margin: 0;
                width: 100%;
            }
            .trading-text2 {
                color: #FFF;
                text-align: center;
                font-family: SF Pro Text;
                font-size: 12px;
                font-style: normal;
                font-weight: 590;
                line-height: 14px; /* 116.667% */
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
            .trading2 {
                margin-bottom: 66px;
            }
            .low-text-green {
                font-size: 20px;
                line-height: 30px;
                font-family: SF Pro Text;
                text-align: center;
            }
            .stable-img {
                width: 70px;
                height: 70px;
            }
            .stbl-text {
                font-size: 10px;
                line-height: 10px;
                font-family: SF Pro Text;
            }
            .worry-text-green {
                font-size: 16px;
                line-height: 16px;
                font-family: SF Pro Text;
                margin-bottom: 16px;
            }
            .worry-text-white {
                font-family: SF Pro Text;
                font-size: 12px;
                font-style: normal;
                font-weight: 274;
                line-height: 14px;
            }
            .trading4 {
                margin-bottom: 66px;
            }
            .worry-text-white2 {
                width: 100%;
                font-size: 12px;
                line-height: 14px;
                font-family: SF Pro Text;
            }

            table {
                white-space: nowrap;
                min-width: 100%;
            }
            th, td {
                /* min-width: 128px; Set a minimum width for each cell to prevent squeezing content */
            }
            .trading6 {
                overflow-x: auto;
                margin-bottom: 66px;
            }
            .trading7  {
                overflow-x: auto;
                margin-bottom: 66px;
            }
            .trading-line {
                margin-bottom: 36px;
            }
            .trading9 {
                overflow-x: auto;
                margin-bottom: 66px;
            }
            .worry-text-white3 {
                font-size: 12px;
                line-height: 14px;
                font-family: SF Pro Text;
            }
            .trading10 {
                margin-bottom: 66px;
            }
            .trading11 {
                margin-bottom: 100px;
            }
            .trading12 {
                margin-bottom: 100px;
            }
            .trading14 {
                margin-bottom: 66px;
            }
            .disclaimer-text-white {
                font-size: 12px;
                line-height: 14px;
                font-weight: 500;
                font-family: SF Pro Display;
            }
            .numbered-list li {
                font-size: 12px;
                line-height: 14px;
                font-weight: 300;
                margin-bottom: 0px;
            }
            .numbered-list {
                padding-left: 16px;
            }
            .note-text {
                font-family: SF Pro Text;
                font-size: 12px;
                line-height: 14px;
                font-weight: 300;
            }
            .trading15 {
                margin-bottom: 66px;
            }
            .app-window {
                display: none;
            }
            .app-dark-mobile {
                width: 100%;
            }
            .gap-36 {
                gap: 16px;
            }
            .mobile-desc {
                display: none;
            }
            th {
                font-size: 12px;
            }
            .trading-mobile-light {
                display: block;
                width: 100%;
            }
            .trading-mobile-dark {
                display: none;
            }
            .dark-mode .trading-mobile-light {
                display: none;
            }
            .dark-mode .trading-mobile-dark {
                display: block;
                width: 100%;
            }

            .dark-mode .app-dark-mobile {
                border: #5CA346 1px solid;
                border-radius: 10px;
            }
            .trading2-3 {
                margin-bottom: 26px;
            }
            .dark-mode .stable-dark-img {
                width: 70px;
                height: 70px;
            }
        }

        .trading-text2.tw-trading-text2-text {
            width: 80%;
        }
        .worry-text-white2.tw-worry-text-white2 {
            width: 52%;
        }

        @media screen and (max-width: 1000px)
        {
            .trading-text2.tw-trading-text2-text {
                font-size: 12px;
                line-height: 14px;
                width: 90%;
            }
            .aldy-text-mobile.tw-aldy-text-mobile {
                font-size: 12px;
                line-height: 14px;
                width: 85%;
            }
            .worry-text-green.tw-worry-text-green {
                line-height: 25px;
                font-size: 20px;
            }
            .worry-text-white.tw-worry-text-white {
                font-size: 14px;
                line-height: 18px;
                font-weight: 400;
            }
            .worry-text-white2.tw-worry-text-white2 {
                width: 100%;
                font-size: 14px;
                line-height: 18px;
                font-weight: 400;
            }
            .worry-text-white3.tw-worry-text-white3 {
                font-size: 14px;
                line-height: 18px;
                font-weight: 400;
            }
            .aldy-text-mobile.tw-aldy-text-mobile {
                font-size: 12px;
                line-height: 14px;
                font-weight: 400;
            }
            .tw-numbered-list {
                line-height: 18px !important;
                font-size: 14px !important;
            }
        }
    </style>

    
    <div class="trading-header">
        <img src="assets/image/trading/trading.png" class="trading-img">
        <img src="assets/image/trading/trading-dark.png" class="trading-dark-img">
        <div class="text-overlay">
            <div class="main-content">

                <div class="flex flex-col item">
                    <p class="trading-text1">
                        {{-- One account - a world of opportunities --}}
                        @lang('message.trading-text1')
                    </p>
                    <p class="trading-text2 @if(app()->getLocale() == 'tw') tw-trading-text2-text @endif">
                        {{-- Access a wealth of trading, investment and saving solutions from the
                        comfort and security of your multi-currency Metabase account.
                        Enjoy the freedom offered by a versatile Super-CRM and all the popular
                        digital currencies payment options. --}}
                        @lang('message.trading-text2')
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="trading-header-mobile">
        <img src="assets/image/trading/trading-mobile.png" class="trading-mobile-light" alt="">
        <img src="assets/image/trading/trading-mobile-dark.png" class="trading-mobile-dark" alt="">
        <div class="text-overlay-mobile">
            <div class="main-content">
                <div class="flex flex-col gap-16 mobile-ml-mr item">
                    <p class="trading-text1">
                        {{-- One account -  --}}
                        @lang('message.trading-text3')
                        <br> 
                        {{-- a world of opportunities --}}
                        @lang('message.trading-text4')
                    </p>
                    <p class="trading-text2 @if(app()->getLocale() == 'tw') tw-trading-text2-text @endif">
                        {{-- Access a wealth of trading, investment and saving solutions from the
                        comfort and security of your multi-currency Metabase account.
                        Enjoy the freedom offered by a versatile Super-CRM and all the popular
                        digital currencies payment options. --}}
                        @lang('message.trading-text2')
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="trading1 mobile-ml-mr">
            <div class="wheat-container">
                <p class="open-text">
                    {{-- OPEN YOUR INVESTMENT ACCOUNT --}}
                    @lang('message.c-open-text')
                </p>
            </div>
        </div>
        <div class="trading2 mobile-ml-mr">
            <div class="flex gap-20 flex-col-mobile">
                <div class="flex gap-10">
                    <img src="assets/image/footer/apple.svg" class="app-dark">
                    <img src="assets/image/footer/google.svg" class="app-dark">
                    <img src="assets/image/footer/window.svg" class="app-dark app-window">

                    <img src="assets/image/company/google-mobile-new.svg" class="app-dark-mobile">
                    <img src="assets/image/company/apple-mobile-new.svg" class="app-dark-mobile">
                    <img src="assets/image/company/window-mobile-new.svg" class="app-dark-mobile app-window">
                </div>
                <div class="flex item content-center">
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

        <div class="trading2-3 mobile-ml-mr">
            <p class="low-text-green">
                {{-- LOW TO HIGH RISK STRATEGIES --}}
                @lang('message.c-low-text-green')
            </p>
        </div>

        <div class="trading3 mobile-ml-mr">
            <div class="flex" style="justify-content: space-between">
                <div class="flex flex-col item gap-36">
                    <img src="assets/image/trading/4.png" class="stable-img">
                    <img src="assets/image/trading/stable-dark.png" class="stable-dark-img">
                    <p class="stbl-text">
                        {{-- STABLE --}}
                        @lang('message.c-stbl-text-1')
                        <br>
                        {{-- SAVING --}}
                        @lang('message.c-stbl-text-2')
                    </p>
                </div>
                <div class="flex flex-col item gap-36">
                    <img src="assets/image/trading/3.png" class="stable-img">
                    <img src="assets/image/trading/passive-dark.png" class="stable-dark-img">
                    <p class="stbl-text">
                        {{-- PASSIVE --}}
                        @lang('message.c-stbl-text-3')
                        <br>
                        {{-- INVESTING --}}
                        @lang('message.c-stbl-text-4')
                    </p>
                </div>
                <div class="flex flex-col item gap-36">
                    <img src="assets/image/trading/2.png" class="stable-img">
                    <img src="assets/image/trading/ative-dark.png" class="stable-dark-img">
                    <p class="stbl-text">
                        {{-- ATIVE --}}
                        @lang('message.c-stbl-text-5')
                        <br>
                        {{-- DIVERSIFY --}}
                        @lang('message.c-stbl-text-6')
                    </p>
                </div>
                <div class="flex flex-col item gap-36">
                    <img src="assets/image/trading/1.png" class="stable-img">
                    <img src="assets/image/trading/aggressive-dark.png" class="stable-dark-img">
                    <p class="stbl-text">
                        {{-- AGGRESSIVE --}}
                        @lang('message.c-stbl-text-7')
                        <br>
                        {{-- SPECULATION --}}
                        @lang('message.c-stbl-text-8')
                    </p>
                </div>
            </div>
        </div>
        
        <div class="trading4 mobile-ml-mr">
            <div class="flex flex-col">
                <div>
                    <p class="worry-text-green @if(app()->getLocale() == 'tw') tw-worry-text-green @endif">
                        {{-- Worry-Free and  --}}
                        @lang('message.worry-text-green-1')
                        <br>
                        {{-- boosting your Investment --}}
                        @lang('message.worry-text-green-2')
                    </p>
                </div>
                <div>
                    <p class="worry-text-white @if(app()->getLocale() == 'tw') tw-worry-text-white @endif">
                        {{-- SPAA is a custom-tailored investment solution designed by Metabase for the future. It is based on 
                        the client's risk tolerance and offers four distinct investment modes: Stable, Passive, Active, and 
                        Aggressive. SPAA incorporates the Metabase Fintech System, which effectively reduces investment 
                        risk for clients, aiming to maximize returns. One of SPAA's key features is that it does not charge any 
                        entry fees and has very low service fees. --}}
                        @lang('message.worry-text-white-1')
                        <br>
                        <br>
                        {{-- In addition to these appealing features, clients can easily monitor their investment 
                        portfolio's performance within the Metabase Super App after investing. 
                        Clients can almost experience the joy of worry-free investment and enhance the 
                        quality of their investments. --}}
                        @lang('message.worry-text-white-2')
                    </p>
                </div>
            </div>
        </div>

        <div class="trading-line mobile-ml-mr"></div>

        <div class="trading5 mobile-ml-mr">
            <div class="flex flex-col">
                <div>
                    <p class="worry-text-green">
                        {{-- Currencies & Precious Metals --}}
                        @lang('message.worry-text-green-3')
                    </p>
                </div>
                <div>
                    <p class="worry-text-white2 @if(app()->getLocale() == 'tw') tw-worry-text-white2 @endif">
                        {{-- Metabase's offer comprises major, minor and 
                        emerging currency pairs as well as precious metals, 
                        allowing you to trade around the clock and take 
                        advantage of opportunities all over the world. We 
                        also provide exclusive research on these assets to 
                        help you optimize your strategy. --}}
                        @lang('message.worry-text-white2-1')
                    </p>
                </div>
            </div>
        </div>

        <div class="trading6 mobile-ml-mr">
            <table>
                <thead>
                    <tr>
                        <th>
                            {{-- SYMBOL --}}
                            @lang('message.c-symbol')
                        </th>
                        <th class="mobile-desc">
                            {{-- DESCRIPTIONS --}}
                            @lang('message.c-descriptions')
                        </th>
                        <th>
                            {{-- MIN SPREADS (pips) --}}
                            @lang('message.c-min-speads')
                        </th>
                        <th>
                            {{-- MIN TRADE SIZE --}}
                            @lang('message.c-min-trade-size')
                        </th>
                        <th class="mobile-desc">
                            {{-- MAX TRADE SIZE --}}
                            @lang('message.c-max-trade-size')
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>AUDCAD</td>
                        <td class="mobile-desc">Australian Dollar vs. Canadian Dollar</td>
                        <td>1.6</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>
                    <tr>
                        <td>AUDCHF</td>
                        <td class="mobile-desc">Australian Dollar vs. Swiss Franc</td>
                        <td>1.3</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>
                    <tr>
                        <td>AUDJPY</td>
                        <td class="mobile-desc">Australian Dollar vs. Japanese Yen</td>
                        <td>1.4</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>

                    <tr>
                        <td>AUDNZD</td>
                        <td class="mobile-desc">Australian Dollar vs. New Zealand Dollar</td>
                        <td>2.0</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>
                    <tr>
                        <td>AUDUSD</td>
                        <td class="mobile-desc">Australian Dollar vs. US Dollar</td>
                        <td>1.2</td>
                        <td>0.01</td>
                        <td class="mobile-desc">100</td>
                    </tr>

                    <tr>
                        <td>CADCHF</td>
                        <td class="mobile-desc">Canadian Dollar vs. Swiss Franc</td>
                        <td>1.3</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>
                    <tr>
                        <td>CADCHF</td>
                        <td class="mobile-desc">Canadian Dollar vs. Swiss Franc</td>
                        <td>1.3</td>
                        <td>0.01</td>
                        <td class="mobile-desc">100</td>
                    </tr>

                    <tr>
                        <td>CADJPY</td>
                        <td class="mobile-desc">Canadian Dollar vs. Japanese Yen</td>
                        <td>1.4</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>
                    <tr>
                        <td>CHFJPY</td>
                        <td class="mobile-desc">Swiss Franc vs. Japanese Yen</td>
                        <td>1.7</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>

                    <tr>
                        <td>EURAUD</td>
                        <td class="mobile-desc">Euro vs. Australian Dollar</td>
                        <td>2.3</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>
                    <tr>
                        <td>EURCAD</td>
                        <td class="mobile-desc">Euro vs. Canadian Dollar</td>
                        <td>2.3</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>
                    <tr>
                        <td>EURCHF</td>
                        <td class="mobile-desc">Euro vs. Swiss Franc</td>
                        <td>1.9</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>
                    <tr>
                        <td>EURGBP</td>
                        <td class="mobile-desc">Euro vs. British Pound</td>
                        <td>1.2</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>
                    <tr>
                        <td>EURJPY</td>
                        <td class="mobile-desc">Euro vs. Japanese Yen</td>
                        <td>2.0</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>
                    <tr>
                        <td>EURNZD</td>
                        <td class="mobile-desc">Euro vs. New Zealand Dollar</td>
                        <td>2.5</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>
                    <tr>
                        <td>EURUSD</td>
                        <td class="mobile-desc">Euro vs. US Dollar</td>
                        <td>1.1</td>
                        <td>0.01</td>
                        <td class="mobile-desc">100</td>
                    </tr>
                    <tr>
                        <td>GBPAUD</td>
                        <td class="mobile-desc">British Pound vs. Australian Dollar</td>
                        <td>2.7</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>
                    <tr>
                        <td>GBPCAD</td>
                        <td class="mobile-desc">British Pound vs. Canadian Dollar</td>
                        <td>2.7</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>
                    <tr>
                        <td>GBPCHF</td>
                        <td class="mobile-desc">British Pound vs. Swiss Franc</td>
                        <td>2.1</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>
                    <tr>
                        <td>GBPJPY</td>
                        <td class="mobile-desc">British Pound vs. Japanese Yen</td>
                        <td>2.4</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>
                    <tr>
                        <td>GBPNZD</td>
                        <td class="mobile-desc">British Pound vs. New Zealand Dollar</td>
                        <td>2.9</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>
                    <tr>
                        <td>GBPUSD</td>
                        <td class="mobile-desc">British Pound vs. US Dollar</td>
                        <td>1.4</td>
                        <td>0.01</td>
                        <td class="mobile-desc">100</td>
                    </tr>

                    <tr>
                        <td>NZDCAD</td>
                        <td class="mobile-desc">New Zealand Dollar vs. Canadian Dollar</td>
                        <td>1.5</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>
                    <tr>
                        <td>NZDCHF</td>
                        <td class="mobile-desc">New Zealand Dollar vs. Swiss Franc</td>
                        <td>1.2</td>
                        <td>0.01</td>
                        <td class="mobile-desc">100</td>
                    </tr>
                    <tr>
                        <td>NZDJPY</td>
                        <td class="mobile-desc">New Zealand Dollar vs. Japanese Yen</td>
                        <td>1.3</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>
                    <tr>
                        <td>NZDUSD</td>
                        <td class="mobile-desc">New Zealand Dollar vs. US Dollar</td>
                        <td>1.8</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>

                    <tr>
                        <td>USDCAD</td>
                        <td class="mobile-desc">US Dollar vs. Canadian Dollar</td>
                        <td>2.2</td>
                        <td>0.01</td>
                        <td class="mobile-desc">100</td>
                    </tr>
                    <tr>
                        <td>USDCHF</td>
                        <td class="mobile-desc">US Dollar vs. Swiss Franc</td>
                        <td>1.6</td>
                        <td>0.01</td>
                        <td class="mobile-desc">100</td>
                    </tr>
                    <tr>
                        <td>USDJPY</td>
                        <td class="mobile-desc">US Dollar vs. Japanese Yen</td>
                        <td>1.2</td>
                        <td>0.01</td>
                        <td class="mobile-desc">100</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="trading7 mobile-ml-mr">
            <table>
                <thead>
                    <tr>
                        <th>
                            {{-- SYMBOL --}}
                            @lang('message.c-symbol')
                        </th>
                        <th class="mobile-desc">
                            {{-- DESCRIPTIONS --}}
                            @lang('message.c-descriptions')
                        </th>
                        <th>
                            {{-- MIN SPREADS (pips) --}}
                            @lang('message.c-min-speads')
                        </th>
                        <th>
                            {{-- MIN TRADE SIZE --}}
                            @lang('message.c-min-trade-size')
                        </th>
                        <th class="mobile-desc">
                            {{-- MAX TRADE SIZE --}}
                            @lang('message.c-max-trade-size')
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>XAUUSD</td>
                        <td class="mobile-desc">Gold vs. US Dollar</td>
                        <td>23</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>
                    <tr>
                        <td>XAUEUR</td>
                        <td class="mobile-desc">Gold vs. Euro</td>
                        <td>21</td>
                        <td>0.01</td>
                        <td class="mobile-desc">50</td>
                    </tr>
                    <tr>
                        <td>XAGUSD</td>
                        <td class="mobile-desc">Silver vs. US Dollar</td>
                        <td>109</td>
                        <td>0.01</td>
                        <td class="mobile-desc">20</td>
                    </tr>

                    <tr>
                        <td>XPDUSD</td>
                        <td class="mobile-desc">Palladium</td>
                        <td>31</td>
                        <td>0.01</td>
                        <td class="mobile-desc">10</td>
                    </tr>
                    <tr>
                        <td>XPTUSD</td>
                        <td class="mobile-desc">Platinum</td>
                        <td>35</td>
                        <td>0.01</td>
                        <td class="mobile-desc">10</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="trading-line mobile-ml-mr"></div>

        <div class="trading8 mobile-ml-mr">
            <div class="flex flex-col">
                <div>
                    <p class="worry-text-green">
                        {{-- CFDs Indices --}}
                        @lang('message.worry-text-green-4')
                    </p>
                </div>
                <div>
                    <p class="worry-text-white2 @if(app()->getLocale() == 'tw') tw-worry-text-white2 @endif">
                        {{-- Metabase's FX platforms also allow you to trade on the movements of all the main European and American indices, as well as Japan’s. Most of these CFDs are available both as Forward (with an expiration date) or Spot/Synthetic (no expiration date, overnight rollover/swap interest applies). --}}
                        @lang('message.worry-text-white2-2')
                    </p>
                </div>
            </div>
        </div>

        <div class="trading9 mobile-ml-mr">
            <table>
                <thead>
                    <tr>
                        <th>
                            {{-- SYMBOL --}}
                            @lang('message.c-symbol')
                        </th>
                        <th class="mobile-desc">
                            {{-- DESCRIPTIONS --}}
                            @lang('message.c-descriptions')
                        </th>
                        <th>
                            {{-- MIN SPREADS (pips) --}}
                            @lang('message.c-min-speads')
                        </th>
                        <th>
                            {{-- MIN TRADE SIZE --}}
                            @lang('message.c-min-trade-size')
                        </th>
                        <th class="mobile-desc">
                            {{-- MAX TRADE SIZE --}}
                            @lang('message.c-max-trade-size')
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#CHINA50</td>
                        <td class="mobile-desc">Spot China 50 (USD)</td>
                        <td>7.50</td>
                        <td>1</td>
                        <td class="mobile-desc">100</td>
                    </tr>
                    <tr>
                        <td>#NIK225</td>
                        <td class="mobile-desc">Spot Japan 225 (JPY)</td>
                        <td>15.00</td>
                        <td>10</td>
                        <td class="mobile-desc">100</td>
                    </tr>
                    <tr>
                        <td>#DE40</td>
                        <td class="mobile-desc">Spot Germany 40 (EUR)</td>
                        <td>2.00</td>
                        <td>1</td>
                        <td class="mobile-desc">200</td>
                    </tr>

                    <tr>
                        <td>#FR40</td>
                        <td class="mobile-desc">Spot France 40 (EUR)</td>
                        <td>1.60</td>
                        <td>1</td>
                        <td class="mobile-desc">200</td>
                    </tr>
                    <tr>
                        <td>#ES</td>
                        <td class="mobile-desc">Spot Spain 35 (EUR)</td>
                        <td>5.20</td>
                        <td>1</td>
                        <td class="mobile-desc">200</td>
                    </tr>
                    <tr>
                        <td>#CH</td>
                        <td class="mobile-desc">Spot Switzerland 20 (CHF)</td>
                        <td>3.14</td>
                        <td>1</td>
                        <td class="mobile-desc">100</td>
                    </tr>

                    <tr>
                        <td>#US500</td>
                        <td class="mobile-desc">Spot US 500 (USD)</td>
                        <td>0.65</td>
                        <td>1</td>
                        <td class="mobile-desc">200</td>
                    </tr>
                    <tr>
                        <td>#NAS100</td>
                        <td class="mobile-desc">Spot US Tech 100 (USD)</td>
                        <td>1.70</td>
                        <td>1</td>
                        <td class="mobile-desc">200</td>
                    </tr>
                    <tr>
                        <td>#GB100</td>
                        <td class="mobile-desc">Spot UK 100 (GBP)</td>
                        <td>1.60</td>
                        <td>1</td>
                        <td class="mobile-desc">200</td>
                    </tr>
                    <tr>
                        <td>#EU50</td>
                        <td class="mobile-desc">Spot EU Stocks 50 (EUR)</td>
                        <td>2.10</td>
                        <td>1</td>
                        <td class="mobile-desc">200</td>
                    </tr>
                    <tr>
                        <td>#US30</td>
                        <td class="mobile-desc">Spot US 30 (USD)</td>
                        <td>3.20</td>
                        <td>1</td>
                        <td class="mobile-desc">200</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="trading-line mobile-ml-mr"></div>

        <div class="trading10 mobile-ml-mr">
            <div class="flex flex-col">
                <div>
                    <p class="worry-text-green">
                        {{-- Stop Out Level --}}
                        @lang('message.worry-text-green-5')
                    </p>
                </div>
                <div>
                    <p class="worry-text-white3 @if(app()->getLocale() == 'tw') tw-worry-text-white3 @endif">
                        {{-- Subject to the limitations set forth in the General Terms and Conditions, the Risk Disclosure Statement and the Special Terms and Conditions for Forex to which we draw your attention, Metabase's trading platforms are designed to automatically trigger a liquidation of open positions when the Margin Level ([equity/used margin] x 100) reaches the Stop Out level, which varies depending on the technology you are using (the “Automatic Liquidation System”).    --}}
                        @lang('message.worry-text-white3-1')
                        <br><br>
                        {{-- The Automatic Liquidation System has been set up for the sole benefit of Metabase Ltd. While the Automatic Liquidation System aims at avoiding that the Client is losing more than the Forex Margin and while Metabase Ltd will ensure that, in the vast majority of cases, the Automatic Liquidation System is activated as soon as the Liquidation Percentage is reached, it is entitled but not obliged to do so. No warranty is given by Metabase Ltd in this regard. The Client may still suffer a loss much higher than the Forex Margin. --}}
                        @lang('message.worry-text-white3-2')
                    </p>
                </div>
            </div>
        </div>

        <div class="trading11 mobile-ml-mr">
            <div class="flex flex-col">
                <div>
                    <p class="worry-text-green">
                        {{-- Risk Warning --}}
                        @lang('message.worry-text-green-6')
                    </p>
                </div>
                <div>
                    <p class="worry-text-white3 @if(app()->getLocale() == 'tw') tw-worry-text-white3 @endif">
                        {{-- The content of this guide is purely informative and does not constitute an offer or a recommendation to trade a specific product and is not to be understood as a piece of advice of any sort, in particular regarding trading, tax and legal questions. The information or opinion regarding a product expressed in this guide do not take into consideration the investment objectives, the assets, the experience or the knowledge of a single investor.    --}}
                        @lang('message.worry-text-white3-3')
                        <br><br>
                        {{-- Metabase Ltd and its employees shall in no event be liable for damages or losses arising directly or indirectly from decisions made on the basis of the content of this guide. The content of this guide was produced by Metabase Ltd as per the current date and may be subject to change without prior notification. Although the content of this guide has been obtained from and is based upon sources that Metabase Ltd believes to be reliable, Metabase Ltd assumes no responsibility for the quality, correctness, timeliness or completeness of the content of this guide. This guide may not be reproduced in part or full without the written prior consent of Metabase Ltd.  Forex transactions are highly speculative, involve an extreme degree of risk and are generally suitable only for persons who can assume and sustain a risk of loss in excess of their Forex margin. Forex transactions may, by their nature, generate losses that are in theory unlimited. In the absence of prior intervention, the loss could greatly exceed all the client's assets deposited with the Metabase Ltd. --}}
                        @lang('message.worry-text-white3-4')
                    </p>
                </div>
            </div>
        </div>

        <div class="trading12 mobile-ml-mr">
            <div class="flex content-center">
                <img src="assets/image/trading/logobig.svg" style="width:100%">
            </div>
        </div>

        <div class="trading13 mobile-ml-mr">
            <div class="wheat-container">
                <p class="open-text">{{-- OPEN YOUR INVESTMENT ACCOUNT --}}
                    @lang('message.c-open-text')
                </p>
            </div>
        </div>

        <div class="trading14 mobile-ml-mr">
            <div class="flex gap-20 flex-col-mobile">
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

        <div class="trading15 mobile-ml-mr">
            <div class="flex flex-col">
                <div>
                    <p class="worry-text-green">
                        {{-- Disclaimer - Fo/rex Trading Losses --}}
                        @lang('message.worry-text-green-7')
                    </p>
                </div>
                <div>
                    <p class="worry-text-white3">
                        <span class="disclaimer-text-white">
                            {{-- This disclaimer aims to clarify the following matters: --}}
                            @lang('message.disclaimer-text-white')
                        </span>
                        <ol class="numbered-list">
                            <li class="@if(app()->getLocale() == 'tw') tw-numbered-list @endif">
                                {{-- Risks of Forex Trading: The Forex trading market involves high volatility and may lead to investment losses. Forex investment is a high-risk activity that may result in the loss of invested capital. --}}
                                @lang('message.numbered-list-1')
                            </li>
                            <li class="@if(app()->getLocale() == 'tw') tw-numbered-list @endif">
                                {{-- Individual Differences: Each investor has different risk tolerance and investment objectives. Performance in Forex trading will vary due to individual differences. --}}
                                @lang('message.numbered-list-2')
                            </li>
                            <li class="@if(app()->getLocale() == 'tw') tw-numbered-list @endif">
                                {{-- Disclaimer: This company is not responsible for any Forex trading losses incurred by investors. All risks and losses in Forex trading will be borne by the investors. --}}
                                @lang('message.numbered-list-3')
                            </li>
                            <li class="@if(app()->getLocale() == 'tw') tw-numbered-list @endif">
                                {{-- Consultation and Education: This company encourages investors to seek independent financial and legal advice to understand the risks and legal responsibilities associated with Forex trading. --}}
                                @lang('message.numbered-list-4')
                            </li>
                            <li class="@if(app()->getLocale() == 'tw') tw-numbered-list @endif">
                                {{-- Investor Decision: Investors bear ultimate responsibility for their Forex trading decisions. Investors should carefully consider risks and only invest funds they can afford to lose. --}}
                                @lang('message.numbered-list-5')
                            </li>
                            <li class="@if(app()->getLocale() == 'tw') tw-numbered-list @endif">
                                {{-- Risk Management: Investors should take appropriate risk management measures, including stop-loss orders, to mitigate potential losses. --}}
                                @lang('message.numbered-list-6')
                            </li>
                            <li class="@if(app()->getLocale() == 'tw') tw-numbered-list @endif">
                                {{-- Trading Results: The results of Forex trading may vary due to market fluctuations. Past performance does not guarantee future results. --}}
                                @lang('message.numbered-list-7')
                            </li>
                            <li class="@if(app()->getLocale() == 'tw') tw-numbered-list @endif">
                                {{-- Market Manipulation: Investors are not allowed to engage in any market manipulation activities, including but not limited to manipulating prices, spreading false information, or abusing market rules. --}}
                                @lang('message.numbered-list-8')
                            </li>
                        </ol>
                        <span class="note-text">
                            {{-- Please note that this company does not provide any guarantees or representations, either express or implied, regarding the success or failure of Forex trading results or any specific investment strategy. Investors should carefully read and understand these risks before engaging in Forex trading and seek professional advice when necessary. --}}
                            @lang('message.note-text')
                        </span>  
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection