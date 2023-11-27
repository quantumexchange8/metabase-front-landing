@extends('layouts.master')
@section('content')
    <style>
    .company-header {
        width: 100%;
        height: auto;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        margin-bottom: 100px;
    }
    .company-header-mobile {
        display: none;
    }
    .company-img {
        width: 100%;
        height: auto;
    }
    .company-dark-img {
        width: 100%;
        height: auto;
    }
    .light-mode .company-img {
        display: block;
    }
    .light-mode .company-dark-img {
        display: none;
    }
    .dark-mode .company-img {
        display: none;
    }
    .dark-mode .company-dark-img {
        display: block;
    }
    .text-overlay {
        position: absolute;
        top: 75%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: left;
        width: 100%;
    }
    .metabase-text {
        color: #FFF;
        font-family: SF Pro Display;
        font-size: 30px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        margin: 0;
        width: 75%;
    }
    .metabase-text-large {
        color: #FFF;
        font-family: SF Pro Display;
        font-size: 96px;
        font-style: normal;
        font-weight: 700;
        line-height: normal; /* 52.083% */
        margin: 0;
    }
    .company1 {
        width: 100%;
        margin-bottom: 225px;
    }
    .company2 {
        width: 100%;
        margin-top: 45px;
        margin-bottom: 45px;
    }
    .company3 {
        width: 100%;
        margin-bottom: 200px;
    }
    .company3-mobile {
        display: none;
    }
    .company4 {
        width: 100%;
        margin-bottom: 200px;
    }
    .company4-mobile {
        display: none;
    }
    .company5 {
        width: 100%;
        margin-top: 45px;
        margin-bottom: 45px;
    }
    .company6 {
        width: 100%;
        margin-bottom: 200px;
    }
    .company6-mobile {
        display: none;
    }
    .company7 {
        width: 100%;
        margin-bottom: 173px;
    }
    .company8 {
        width: 100%;
        margin-bottom: 20px;
        margin-top: 135px;
    }
    .company9 {
        width: 100%;
        margin-bottom: 103px;
    }
    .company1-text {
        color: #5CA346;
        font-family: SF Pro Display;
        font-size: 48px;
        font-style: normal;
        font-weight: 700;
        line-height: 50px; /* 104.167% */
        margin: 0;
        width: 72%;
    }
    .company2-text {
        color: #5CA346;
        text-align: right;
        font-family: SF Pro Display;
        font-size: 128px;
        font-style: normal;
        font-weight: 700;
        line-height: 120px; /* 93.75% */
        margin: 0;
        width: 100%;
        margin-bottom: 20px;
    }
    .company2-text2 {
        /* color: #000; */
        text-align: right;
        font-family: SF Pro Display;
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: 30px; /* 125% */
        margin: 0;
        width: 68%;
    }
    .company4-text {
        color: #5CA346;
        text-align: right;
        font-family: SF Pro Display;
        font-size: 48px;
        font-style: normal;
        font-weight: 700;
        line-height: 50px; /* 104.167% */
        margin: 0;
        width: 100%;
        margin-bottom: 20px;
    }
    .company5-text {
        color: #5CA346;
        font-family: SF Pro Display;
        font-size: 64px;
        font-style: normal;
        font-weight: 700;
        line-height: 70px; /* 109.375% */
        margin: 0;
        margin-bottom: 20px;
    }
    .company6-text {
        color: #5CA346;
        text-align: right;
        font-family: SF Pro Display;
        font-size: 128px;
        font-style: normal;
        font-weight: 700;
        line-height: 120px; /* 93.75% */
        margin: 0;
        margin-bottom: 20px;
    }
    .company7-text {
        color: #5CA346;
        text-align: center;
        font-family: SF Pro Display;
        font-size: 48px;
        font-style: normal;
        font-weight: 700;
        line-height: 50px; /* 104.167% */
        margin: 0;
    }
    .dot-bg {
        background-image: url('/assets/image/company/mobile-dot.svg');
        background-position: center;
        background-size: cover !important; /* Optional - adjust as needed */
        background-repeat: no-repeat; /* Optional - adjust as needed */
        width: 100%;
        height: auto;
        /* padding: 20px 0; */
        margin-bottom: 200px;
    }
    .dot-bg2 {
        background-image: url('/assets/image/company/testdot.svg');
        background-position: center;
        background-size: cover !important; /* Optional - adjust as needed */
        background-repeat: no-repeat; /* Optional - adjust as needed */
        width: 100%;
        height: auto;
        padding: 76px 0 85px 0;
    }
    .company3-text {
        color: #5CA346;
        font-family: SF Pro Display;
        font-size: 48px;
        font-style: normal;
        font-weight: 700;
        line-height: 50px; /* 104.167% */
        margin: 0;
        margin-bottom: 20px;
    }
    
    .company3-text2 {
        font-family: SF Pro Display;
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: 30px; /* 125% */
        margin: 0;
    }
    .company3-text2-mobile {
        display: none;
    }
    .company4-text2 {
        /* color: #000; */
        text-align: right;
        font-family: SF Pro Display;
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: 30px; /* 125% */
        margin: 0;
    }
    .company5-text2 {
        /* color: #000; */
        font-family: SF Pro Display;
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: 30px; /* 125% */
        margin: 0;
        width: 83%;
    }
    .company6-text2 {
        /* color: #000; */
        text-align: right;
        font-family: SF Pro Display;
        font-size: 24px;
        font-style: normal;
        font-weight: 600;
        line-height: 30px; /* 125% */
        margin: 0;
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
    .aldy-text {
        /* color: #000; */
        font-family: SF Pro Display;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 16px; /* 114.286% */
        margin: 0;
    }
    .aldy-text-mobile {
        display: none;
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
    .dark-mode .app-dark {
        border-radius: 10px;
        border: 0.5px solid #5CA346;

    }
    .app-dark-mobile {
        display: none;
    }
    .dot-bg-mobile {
        display: none;
    }

    .word-img {
        display: block;
        width: 100%;
    }
    .word-mobile-img {
        display: none;
        width: 100%;
    }

    .dot-bg-mobile1 {
        display: none;
    }

    .company10 {
        width: 100%;
        margin-bottom: 60px;
        text-align: center;
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

    .company1-text-mobile {
        display: none;
    }

    @media screen and (max-width: 1000px)
    {
        .metabase-text-large {
            font-size: 36px;
            line-height: 20px;
            font-family: SF Pro Text;
        }
        .metabase-text  {
            font-size: 12px;
            line-height: 14px;
            font-family: SF Pro Text;
            width: 100%;
        }
        .company-header {
            display: none;
            margin-bottom: 36px;
        }
        .company-header-mobile {
            width: 100%;
            height: auto;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-bottom: 30px;
        }
        .company1-text {
            font-size: 20px;
            line-height: 22px;
            width: 80%;
            display: none;
        }
        .text-overlay-mobile {
            position: absolute;
            top: 75%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
        }
        .text-overlay-mobile2 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
        }
        .metabase-text-large {
            font-size: 36px;

        }
        .metabase-text {
            font-size: 12px;
        }
        .company1 {
            margin-bottom: 66px;
        }
        .dot-bg {
            display: none;
        }
        .dot-bg-mobile {
            display: block;
            margin-bottom: 66px;
            position: relative;
        }
        .dot-bg-mobile1 {
            background-image: url('/assets/image/company/mobile-dot.svg');
            background-position: center;
            background-size: cover !important; /* Optional - adjust as needed */
            background-repeat: no-repeat;
            display: block;
            margin-bottom: 66px;
            position: relative;
            padding: 20px;
        }
        .dark-mode .dot-bg-mobile1 {
            background-image: url('/assets/image/company/dot-dark.svg');
        }
        .dot-bg-mobile-img {
            width: 100%;
            display: block;
        }
        .dot-bg-mobile-img-dark {
            display: none;
        }
        .dark-mode .dot-bg-mobile-img {
            display: none;
        }
        .dark-mode .dot-bg-mobile-img-dark {
            width: 100%;
            display: block;
        }
        .company2-text {
            font-size: 48px;
            line-height: 50px;
        }
        .company2-text2 {
            font-size: 12px;
            line-height: 14px;
            width: 100%;
        }
        .company3-text {
            font-size: 24px;
            line-height: 25px;
            /* width: 75%; */
            margin-bottom: 16px;
        }

        .company3 {
            display: none;
        }
        .company3-mobile {
            display: block;
            margin-bottom: 66px;
        }
        .company3-text2 {
            font-size: 12px;
            line-height: 14px;
            display: none;
        }
        .company3-text2-mobile {
            font-family: SF Pro Text;
            font-size: 12px;
            font-style: normal;
            font-weight: 590;
            line-height: 14px;
            display: block;
            margin: 0;
        }
        .company4 {
            display: none;
        }
        .company4-mobile {
            display: block;
            width: 100%;
            margin-bottom: 66px;
        }
        .company4-text {
            font-size: 24px;
            line-height: 25px;
        }
        .company4-text2 {
            /* color: #000; */

            text-align: right;
            font-family: SF Pro Text;
            font-size: 12px;
            font-style: normal;
            font-weight: 590;
            line-height: 14px;
        }
        .company5-text {
            font-size: 24px;
            font-style: normal;
            font-weight: 700;
            line-height: 25px;
            margin: 0;
        }
        .company5-text2 {
            font-family: SF Pro Text;
            font-size: 12px;
            font-style: normal;
            font-weight: 590;
            line-height: 14px; /* 116.667% */
            margin: 0;
            width: 100%;
        }
        .company6 {
            width: 100%;
            margin-bottom: 200px;
            display: none;
        }
        .company6-mobile {
            display: block;
            margin-bottom: 66px;
        }
        .company6-text {
            color: #5CA346;

            text-align: right;
            font-family: SF Pro Text;
            font-size: 48px;
            font-style: normal;
            font-weight: 700;
            line-height: 45px;
            margin: 0;
            margin-bottom: 16px;
        }
        .company6-text2 {
            font-size: 12px;
            line-height: 14px;
            font-family: SF Pro Text;
        }
        .company7-text {
            font-size: 24px;
            line-height: 25px;
            font-family: SF Pro Display;
        }
        .company7 {
            margin-bottom: 66px;
        }
        .word-img {
            display: none;
        }
        .word-mobile-img {
            display: block;
            width: 100%;
        }
        .dot-bg2 {
            padding: 20px 0 20px 0;
            margin-bottom: 66px;
        }
        .company8 {
            margin-top: 0px;
        }
        .open-text {
            font-size: 14px;
            line-height: normal;
            font-family: SF Pro Text;
        }
        .wheat-container {
            height: 50px;
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
        }
        .span-text-grn {
            font-size: 10px;
            line-height: 12px;
        }
        .gap-10 {
            gap: 8px;
        }
        .company9 {
            margin-bottom: 78px;
        }
        .app-dark-mobile {
            width: 100%;
            display: block;
        }
        .app-dark {
            display: none;
        }
        .app-window {
            display: none;
        }
        .dark-mode .app-dark-mobile {
            width: 100%;
            border: #5CA346 1px solid;
            border-radius: 10px;
        }
        .aldy-text-mobile {
            margin: 0;
        }
        .company-mobile-img-dark {
            display: none;
        }
        .company-mobile-img {
            display: block;
            width: 100%;
        }
        .dark-mode .company-mobile-img {
            display: none;
        }
        .dark-mode .company-mobile-img-dark {
            display: block;
            width: 100%;
        }
        .tnc-text {
            font-size: 14px;
            font-family: SF Pro Text;
        }
        .company1-text-mobile {
            display: block;
            font-size: 20px;
            line-height: 22px;
            width: 90%;
            color: #5CA346;
            font-family: SF Pro Text;
            margin: 0;
            font-weight: 700;
        }
        
    }

    .company1-text.tw-company1-text {
        width: 55%;
        font-family: SF Pro Text;
    }
    .company5-text2.tw-company5-text2 {
        width: 78%;
    }

    @media screen and (max-width: 1000px)
    {
        .company1-text-mobile.tw-company1-text-mobile {
            width: 90%;
            font-family: SF Pro Text;
            line-height: 32px;
            font-size: 24px;
        }
        .company2-text2.tw-company2-text2 {
            line-height: 20px;
            font-family: SF Pro Text;
            font-weight: 590;
            font-size: 14px;
        }
        .company3-text.tw-company3-text {
            font-size: 24px;
            line-height: 30px;
        }
        .company3-text2-mobile.tw-company3-text2-mobile {
            font-size: 14px;
            line-height: 20px;
        }
        .company4-text.tw-company4-text {
            font-size: 24px;
            line-height: 30px;
        }
        .company4-text2.tw-company4-text2 {
            font-size: 14px;
            line-height: 20px;
        }
        .company5-text.tw-company5-text {
            line-height: 30px;
            font-size: 24px;
        }
        .company5-text2.tw-company5-text2 {
            line-height: 20px;
            font-size: 14px;
            width: 98%;
            text-align: justify;
        }
        .company6-text2.tw-company6-text2 {
            font-size: 14px;
            line-height: 20px;
            text-align: right;
        }
        .aldy-text-mobile.tw-aldy-text-mobile {
            font-size: 12px;
            line-height: 14px;
            width: 85%;
        }
        .metabase-text.tw-metabase-text {
            line-height: 16px;
            font-size: 12px;
        }
        .company7-text.tw-company7-text {
            font-size: 24px;
            line-height: 30px;
        }
    }
    </style>

    <div class="company-header">
        <img src="assets/image/company/1.png" class="company-img">
        <img src="assets/image/company/companyhead-dark.png" class="company-dark-img">
        <div class="text-overlay">
            <div class="main-content">
                <div class="flex flex-col w-full mobile-ml-mr">
                    <div class="flex flex-col gap-16">
                        <p class="metabase-text-large">
                            {{-- Metabase --}}
                            @lang('message.metabase')
                        </p>
                        <p class="metabase-text">
                            {{-- is not a typical investment brokerage.
                            Our history, ambition and DNA comes from the world of creativity,
                            software development and the empowerment of investors.
                            These values still remain central to Metabase. --}}
                            @lang('message.metabase-text')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="company-header-mobile">
        <img src="assets/image/company/company-mobile.png" class="company-mobile-img">
        <img src="assets/image/company/company-mobile-dark.png" class="company-mobile-img-dark">
        <div class="text-overlay-mobile">
            <div class="main-content">
                <div class="flex flex-col gap-16 mobile-ml-mr">
                    
                    <p class="metabase-text-large">
                        {{-- Metabase --}}
                        @lang('message.metabase')
                    </p>
                    <p class="metabase-text @if(app()->getLocale() == 'tw') tw-metabase-text @endif">
                        {{-- is not a typical investment brokerage.
                        Our history, ambition and DNA comes from the world of creativity,
                        software development and the empowerment of investors.
                        These values still remain central to Metabase. --}}
                        @lang('message.metabase-text')
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="company1 mobile-ml-mr">
            <p class="company1-text @if(app()->getLocale() == 'tw') tw-company1-text @endif">
                {{-- “Metabase combines a unique
                multi-asset class trading platform
                with the innovative power of a
                fintech company based on a
                solid Metabase.” --}}
                @lang('message.company1-text')
            </p>
            <p class="company1-text-mobile @if(app()->getLocale() == 'tw') tw-company1-text-mobile @endif">
                {{-- “Metabase combines a unique
                multi-asset class trading platform
                with the innovative power of a
                fintech company based on a
                solid Metabase.” --}}
                @lang('message.company1-text')
            </p>
        </div>
    </div>

    <div class="dot-bg">
        <div class="main-content">
            <div class="company2">
                <p class="company2-text">
                     {{-- CRYPTO --}}
                     @lang('message.c-company2-text-1')
                     <br>
                     {{-- CURRENCIES --}}
                     @lang('message.c-company2-text-2')
                </p>
                <div class="flex" style="justify-content: flex-end;">
                    <p class="company2-text2">
                       {{-- Metabase fascinated by the technology behind the blockchain.
                        The events of the past year have started a
                        “housecleaning” process similar to that we witnessed
                        in the online world when the dot-com bubble burst.
                        What is important is that future activities in the
                        crypto area take place within a reliable, regulated framework.
                        With our crypto trading, we created an efficient trading platform
                        for our clients that ensures secure, cost-efficient execution with
                        sufficient liquidity in the cryptocurrencies traded. More than
                        15 cryptocurrencies can currently be traded via Metabase,
                        and we are well on the way to increasing this number.  --}}
                        @lang('message.company2-text2')
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="dot-bg-mobile1">
        {{-- <img src="assets/image/company/mobile-dot.svg" alt="" class="dot-bg-mobile-img"> --}}
        {{-- <div class="text-overlay-mobile2"> --}}
            
            <div class="flex flex-col gap-16 mobile-ml-mr">
                <p class="company2-text">
                    {{-- CRYPTO --}}
                    @lang('message.c-company2-text-1')
                    <br>
                    {{-- CURRENCIES --}}
                    @lang('message.c-company2-text-2')
                </p>
                <p class="company2-text2 @if(app()->getLocale() == 'tw') tw-company2-text2 @endif">
                    {{-- Metabase fascinated by the technology behind the blockchain.
                    The events of the past year have started a
                    “housecleaning” process similar to that we witnessed
                    in the online world when the dot-com bubble burst.
                    What is important is that future activities in the
                    crypto area take place within a reliable, regulated framework.
                    With our crypto trading, we created an efficient trading platform
                    for our clients that ensures secure, cost-efficient execution with
                    sufficient liquidity in the cryptocurrencies traded. More than
                    15 cryptocurrencies can currently be traded via Metabase,
                    and we are well on the way to increasing this number.  --}}
                    @lang('message.company2-text2')
                </p>
            </div>
           
        {{-- </div> --}}
    </div>
        
    <div class="main-content">
        <div class="company3 mobile-ml-mr">
            <p class="company3-text">
                {{-- KEY SUCCESS FACTORS --}}
                @lang('message.c-company3-text-1')
                <br>
                {{-- NOT LIMITED TO FINANCIAL ASSETS --}}
                @lang('message.c-company3-text-2')
            </p>
            <div class="flex" style="justify-content: flex-start;">
                <p class="company3-text2">
                   {{-- The areas we highly prioritize include protection from --}}
                   @lang('message.company3-text2-1')
                   <br>
                   {{-- cyber risks and ensuring system functionality. --}}
                   @lang('message.company3-text2-2')
                   <br>
                   {{-- Therefore, Metabase invests substantial funds in IT security every year. --}}
                   @lang('message.company3-text2-3')
                   <br>
                   {{-- Additionally, other areas include innovation, customer satisfaction, --}}
                   @lang('message.company3-text2-4')
                   <br>
                   {{-- and environmental footprint.  --}}
                   @lang('message.company3-text2-5')
                </p>
            </div>
        </div>

        <div class="company3-mobile mobile-ml-mr">
            <p class="company3-text @if(app()->getLocale() == 'tw') tw-company3-text @endif">
                {{-- KEY SUCCESS --}}
                @lang('message.c-company3-text-3')
                <br> 
                {{-- FACTORS --}}
                @lang('message.c-company3-text-4')
                {{-- NOT LIMITED --}}
                @lang('message.c-company3-text-5')
                <br>
                {{-- TO FINANCIAL ASSETS --}}
                @lang('message.c-company3-text-6')
            </p>
            <div class="flex" style="justify-content: flex-start;">
                <p class="company3-text2-mobile @if(app()->getLocale() == 'tw') tw-company3-text2-mobile @endif">
                    {{-- The areas we highly prioritize include protection from
                    cyber risks and ensuring system functionality.
                    Therefore, Metabase invests substantial funds in IT security every year.
                    Additionally, other areas include innovation, customer satisfaction,
                    and environmental footprint.  --}}
                    @lang('message.company3-text2-1') 
                    @lang('message.company3-text2-2') 
                    @lang('message.company3-text2-3') 
                    @lang('message.company3-text2-4') 
                    @lang('message.company3-text2-5')
                </p>
            </div>
        </div>

        <div class="company4">
            <p class="company4-text">
                {{-- THE METABASE GROWTH --}}
                @lang('message.c-comapny4-text-1')
                <br>
                {{-- STORY CONTINUES --}}
                @lang('message.c-comapny4-text-2')
            </p>
            <div class="flex" style="justify-content: flex-end;">
                <p class="company4-text2">
                    {{-- Metabase will enlarge its strong position in the home market, --}}
                    @lang('message.company4-text2-1')
                    <br>
                    {{-- diversify its services, develop new customer segments and expand --}}
                    @lang('message.company4-text2-2')
                    <br>
                    {{-- in other target markets in Europe, Asia and the Middle East. --}}
                    @lang('message.company4-text2-3')
                    <br>
                    {{-- This will broaden the Group's income sources, helping to reduce --}}
                    @lang('message.company4-text2-4')
                    <br>
                    {{-- the proportion that is transaction-based and hence more volatile.  --}}
                    @lang('message.company4-text2-5')
                    <br><br>
                    {{-- &nbsp;&nbsp; Metabase will also be well placed to cope with difficult market --}}
                    @lang('message.company4-text2-6')
                    <br>
                    {{-- or economic situations in the future - and to take advantage of --}}
                    @lang('message.company4-text2-7')
                    <br>
                    {{-- opportunities that arise for its clients and for the --}}
                    @lang('message.company4-text2-8')
                    <br>
                    {{-- foreign exchange trading itself. --}}
                    @lang('message.company4-text2-9')
                </p>
            </div>
        </div>
        <div class="company4-mobile mobile-ml-mr">
            <p class="company4-text @if(app()->getLocale() == 'tw') tw-company4-text @endif">
                {{-- THE METABASE GROWTH
                STORY CONTINUES --}}
                @lang('message.c-company4-text-1')
                <br>
                @lang('message.c-company4-text-2')
            </p>
            <div class="flex" style="justify-content: flex-end;">
                <p class="company4-text2 @if(app()->getLocale() == 'tw') tw-company4-text2 @endif">
                    {{-- Metabase will enlarge its strong position in the home market,
                    diversify its services, develop new customer segments and expand
                    in other target markets in Europe, Asia and the Middle East.
                    This will broaden the Group's income sources, helping to reduce
                    the proportion that is transaction-based and hence more volatile. --}}
                    &nbsp;&nbsp; @lang('message.company4-text2-1') 
                    @lang('message.company4-text2-2') 
                    @lang('message.company4-text2-3') 
                    @lang('message.company4-text2-4') 
                    @lang('message.company4-text2-5')
                     <br><br>
                    {{-- &nbsp;&nbsp; Metabase will also be well placed to cope with difficult market
                    or economic situations in the future - and to take advantage of
                    opportunities that arise for its clients and for the
                    foreign exchange trading itself. --}}
                    @lang('message.company4-text2-6') 
                    @lang('message.company4-text2-7') 
                    @lang('message.company4-text2-8') 
                    @lang('message.company4-text2-9')
                </p>
            </div>
        </div>
    </div>

    <div class="dot-bg">
        <div class="main-content">
            <div class="company5">
                <p class="company5-text">
                    {{-- METABASE: MORE THAN --}}
                    @lang('message.c-company5-text-1')
                    <br>
                    {{-- JUST ONLINE TRADING --}}
                    @lang('message.c-company5-text-2')
                </p>
                <div class="flex" style="justify-content: flex-start;">
                    <p class="company5-text2 @if(app()->getLocale() == 'tw') tw-company5-text2 @endif">
                        {{-- On average, Metabase customers are wealthier than those of other online
                        brokers. This is because they also benefit from a comprehensive universal
                        crypto payment service. Metabase's offering in this area will soon be expanded
                        with eBill and a modern Crypto payment wallet featuring, --}}
                        @lang('message.company5-text2-1')
                        <br>
                        {{-- Apple Pay and Google Pay. --}}
                        @lang('message.company5-text2-2')
                        <br><br>
                        
                        {{-- In keeping with the democratisation of the financial world and the power of
                        innovation, the Meta-Financial super app, jointly launched by Metabase and
                        Metabase Technology in 2021, is enjoying increasing popularity. --}}
                        @lang('message.company5-text2-3')
                        <br><br>
                        
                        {{-- But institutional clients are also increasingly benefiting from the diverse opportunities
                        offered by Metabase's unique business model. For example, the TEAM is continuously
                        expanding its software platform for asset managers called “Asset Master”,
                        which offers efficient, cost-effective portfolio management and trading. --}}
                        @lang('message.company5-text2-4')
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="dot-bg-mobile">
        <img src="assets/image/company/dot-bg2-mobile.svg" alt="" class="dot-bg-mobile-img">
        <img src="assets/image/company/dot-dark.svg" alt="" class="dot-bg-mobile-img-dark">
        <div class="text-overlay-mobile2">
            
            <div class="flex flex-col gap-16 mobile-ml-mr">
                <p class="company5-text @if(app()->getLocale() == 'tw') tw-company5-text @endif">
                    {{-- METABASE: MORE THAN --}}
                    @lang('message.c-company5-text-1')
                    <br>
                    {{-- JUST ONLINE TRADING --}}
                    @lang('message.c-company5-text-2')
                </p>
                <p class="company5-text2 @if(app()->getLocale() == 'tw') tw-company5-text2 @endif">
                    {{-- On average, Metabase customers are wealthier than those of other online
                    brokers. This is because they also benefit from a comprehensive universal
                    crypto payment service. Metabase's offering in this area will soon be expanded
                    with eBill and a modern Crypto payment wallet featuring,
                    Apple Pay and Google Pay. --}}
                    @lang('message.company5-text2-1') 
                    @lang('message.company5-text2-2')
                    <br><br>
                    
                    {{-- In keeping with the democratisation of the financial world and the power of
                    innovation, the Meta-Financial super app, jointly launched by Metabase and
                    Metabase Technology in 2021, is enjoying increasing popularity. --}}
                    @lang('message.company5-text2-3')
                    <br><br>
                    
                    {{-- But institutional clients are also increasingly benefiting from the diverse opportunities
                    offered by Metabase's unique business model. For example, the TEAM is continuously
                    expanding its software platform for asset managers called “Asset Master”,
                    which offers efficient, cost-effective portfolio management and trading. --}}
                    @lang('message.company5-text2-4')
                </p>
            </div>
           
        </div>
    </div>
        

    <div class="main-content">
        <div class="company6">
            <p class="company6-text">
                {{-- CODE OF --}}
                @lang('message.c-company6-text-1')
                <br>
                {{-- CONDUCT --}}
                @lang('message.c-company6-text-2')
            </p>
            <div class="flex" style="justify-content: flex-end;">
                <p class="company6-text2">
                    {{-- As the leader in online forex trading and as a FinTech company, --}}
                    @lang('message.company6-text2-1')
                    <br>
                    {{-- innovation and technology challenge the codes of convention. --}}
                    @lang('message.company6-text2-2')
                    <br>
                    {{-- the rules are respected and important corporate values are cherished. --}}
                    @lang('message.company6-text2-3')
                    <br>
                    {{-- The Group's Code of Conduct guides its daily actions with --}}
                    @lang('message.company6-text2-4')
                    <br>
                    {{-- internal and external investors. --}}
                    @lang('message.company6-text2-5')
                </p>
            </div>
        </div>
        <div class="company6-mobile mobile-ml-mr">
            <p class="company6-text">
                {{-- CODE OF --}}
                @lang('message.c-company6-text-1')
                <br>
                {{-- CONDUCT --}}
                @lang('message.c-company6-text-2')
            </p>
            <div class="flex" style="justify-content: flex-end;">
                <p class="company6-text2 @if(app()->getLocale() == 'tw') tw-company6-text2 @endif">
                    {{-- As the leader in online forex trading and as a FinTech company,
                    innovation and technology challenge the codes of convention.
                    the rules are respected and important corporate values are cherished.
                    The Group's Code of Conduct guides its daily actions with
                    internal and external investors. --}}
                    @lang('message.company6-text2-1')
                    @lang('message.company6-text2-2')
                    @lang('message.company6-text2-3')
                    @lang('message.company6-text2-4')
                    @lang('message.company6-text2-5')
                </p>
            </div>
        </div>

        <div class="company7 mobile-ml-mr">
            <p class="company7-text @if(app()->getLocale() == 'tw') tw-company7-text @endif">
                {{-- Open an Investment Trading Account
                with Metabase to experience the
                pulse of digital in the active financial markets. --}}
                @lang('message.company7-text')
            </p>
        </div>
    </div>

    <div class="dot-bg2">
        <div class="main-content">
            <div class="flex content-center">
                <img src="assets/image/company/2.svg" class="word-img">
                <img src="assets/image/company/manyword-mobile.svg" class="word-mobile-img">
            </div>
        </div>
    </div>
    
    <div class="main-content">
        <div class="company8 mobile-ml-mr">
            <div class="wheat-container">
                <p class="open-text">
                    {{-- OPEN YOUR INVESTMENT ACCOUNT --}}
                    @lang('message.c-open-text')
                </p>
            </div>
        </div>
        <div class="company9 mobile-ml-mr">
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

        <div class="company10 mobile-ml-mr">
            <a href="/privacy-policy">
                <span class="tnc-text">
                    {{-- *See the full terms and conditions of this offer. --}}
                    @lang('message.privacy-text')
                </span>
            </a>
        </div>
        
    </div>
@endsection