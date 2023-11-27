@extends('layouts.master')
@section('content')
    <style>
        .support-header {
            width: 100%;
            height: auto;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .support-header-mobile {
            display: none;
        }
        .support-img {
            width: 100%;
            height: auto;
        }
        .support-dark-img {
            width: 100%;
            height: auto;
        }
        .light-mode .support-img {
            display: block;
        }
        .light-mode .support-dark-img {
            display: none;
        }
        .dark-mode .support-img {
            display: none;
        }
        .dark-mode .support-dark-img {
            display: block;
        }
        .text-overlay {
            position: absolute;
            top: 65%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 100%;
        }
        .support-text1 {
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
        .support-text2 {
            color: #FFF;
            text-align: center;
            font-family: SF Pro Display;
            font-size: 30px;
            font-style: normal;
            font-weight: 590;
            line-height: 35px; /* 116.667% */
            margin: 0;
        }
        .support1 {
            display: flex;
            justify-content: center;
            gap: 125px;
            margin-top: -70px;
            margin-bottom: 150px;
        }
        .support2 {
            display: flex;
            justify-content: center;
            width: 100%;
            margin-bottom: 150px;
        }
        .support3 {
            width: 100%;
            margin-bottom: 66px;
        }
        .support4 {
            width: 100%;
            margin-bottom: 100px;
        }
        .support5 {
            width: 100%;
            margin-bottom: 66px;
        }
        .support6 {
            width: 100%;
            margin-bottom: 18px;
        }
        .support7 {
            width: 100%;
            margin-bottom: 103px;
        }
        .suport1-img {
            z-index: 1;
        }
        .sup-text-green {
            color: #5CA346;
            text-align: center;
            font-family: SF Pro Display;
            font-size: 20px;
            font-style: normal;
            font-weight: 700;
            line-height: 20px; /* 100% */
            width: 80%;
            margin: 0;
        }
        .resolved-text-green {
            color: #5CA346;
            text-align: center;
            font-family: SF Pro Display;
            font-size: 32px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            margin: 0;
            width: 75%;
        }
        .touch-text-white {
            /* color: #000; */
            font-family: SF Pro Display;
            font-size: 24px;
            font-style: normal;
            font-weight: 400;
            line-height: 25px; /* 104.167% */
            margin: 0;
            width: 98%;
        }
        .btn-register-green {
            width: 197px;
            height: 36px;
            flex-shrink: 0;
            border: 2px solid #5CA346;
            border-radius: 17px;
            background: transparent;
        }
        .btn-register-green span {
            color: #5CA346;
            text-align: center;
            font-family: SF Pro Display;
            font-size: 14px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
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
        .span-text-grn {
            color: #5CA346;
            font-family: SF Pro Display;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 16px;
            margin: 0;
        }
        .light-mode .rep-img {
            display: block;
        }
        .light-mode .rep-dark-img {
            display: none;
        }
        .dark-mode .rep-img {
            display: none;
        }
        .dark-mode .rep-dark-img {
            display: block;
        }
        .dark-mode .app-dark {
            border-radius: 10px;
            border: 0.5px solid #5CA346;
        }
        .text-overlay-mobile {
                position: absolute;
                top: 60%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 100%;
            }
            .app-dark-mobile {
                display: none;
            }
            .aldy-text-mobile {
                display: none;
            }
        @media screen and (max-width: 1000px)
        {
            .support-header {
                display: none;
            }
            .support-header-mobile {
                width: 100%;
                height: auto;
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                margin-bottom: 30px;
            }
            .support-text1 {
                font-size: 20px;
                line-height: 25px;
                margin: 0;
            }
            .support-text2 {
                font-size: 12px;
                line-height: 14px;
            }
            .suport1-img {
                width: 88px;
                height: 88px;
            }
            .support1 {
                gap: 43px;
            }
            .sup-text-green {
                font-size: 12px;
                line-height: 12px;
                width: 100%;
            }
            .support1 {
                margin-bottom: 66px;
            }
            .resolved-text-green {
                font-size: 20px;
                line-height: 20px;
                font-family: SF Pro Text;
                width: 100%;
            }
            .support2 {
                margin-bottom: 66px;
            }
            .rep-img {
                width: 100px;
                height: 100px;
            }
            .gap-150-mobile {
                gap: 36px;
            }
            .touch-text-white {
                font-size: 14px;
                line-height: 16px;
                font-family: SF Pro Text;
            }
            .support5 {
                display: none;
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
            .gap-36 {
                gap: 16px;
            }
            .app-window {
                display: none;
            }
            .app-dark-mobile {
                width: 100%;
            }
            .support-light {
                display: block;
                width: 100%;
            }
            .support-dark {
                display: none;
            }

            .dark-mode .support-light {
                display: none;
            }

            .dark-mode .support-dark {
                display: block;
                width: 100%;
            }

            .dark-mode .rep-dark-img {
                width: 100px;
                height: 100px;
            }
            .rep-img3 {
                width: 100px;
                height: 100px;
            }

            .dark-mode .app-dark-mobile {
                border: #5CA346 1px solid;
                border-radius: 10px;
            }
        }

        .sup-text-green.tw-sup-text-green {
            width: 75%;
            line-height: 25px;
        }

        @media screen and (max-width: 1000px)
        {
            .support-text2.tw-support-text2 {
                font-size: 12px;
                font-style: normal;
                font-weight: 590;
                line-height: 16px; 
                font-family: SF Pro Text;
            }
            .sup-text-green.tw-sup-text-green {
                font-size: 12px;
                font-style: normal;
                font-weight: 700;
                line-height: 14px; 
            }
            .resolved-text-green.tw-resolved-text-green {
                font-weight: 700;
                line-height: 25px;
                font-size: 20px;
            }
            .touch-text-white.tw-touch-text-white {
                font-size: 14px;
                font-style: normal;
                font-weight: 400;
                line-height: 18px;
                text-align: center;
                width: 78%;
            }
            .support4 {
                display: flex;
                justify-content: center;

            }
            .aldy-text-mobile.tw-aldy-text-mobile {
                font-size: 12px;
                line-height: 14px;
                width: 85%;
            }
        }
    </style>


    <div class="support-header">
        <img src="assets/image/support/1.png" class="support-img">
        <img src="assets/image/support/1-dark.png" class="support-dark-img">
        <div class="text-overlay">
            <div class="main-content">
                <p class="support-text1">
                    {{-- Tell us about the challenges you've faced. --}}
                    @lang('message.support-text1')
                </p>
                <p class="support-text2">
                    {{-- Instead of dwelling on it, why not share your thoughts with us, --}}
                    @lang('message.support-text2-1')
                    <br>
                    {{-- and we can work together with your approach. --}}
                    @lang('message.support-text2-2')
                    <br>
                    {{-- You're looking for a beginning, and we're interested in long-term benefits. --}}
                    @lang('message.support-text2-3')
                </p>
            </div>
        </div>
    </div>

    <div class="support-header-mobile">
        <img src="assets/image/support/support-mobile.png" class="support-light">
        <img src="assets/image/support/support-mobile-dark.png" class="support-dark">
        <div class="text-overlay-mobile">
            <div class="main-content">
                <div class="flex flex-col gap-16 mobile-ml-mr">
                    <p class="support-text1">
                        {{-- Tell us about the challenges --}}
                        @lang('message.support-text1-1')
                        <br> 
                        {{-- you've faced. --}}
                        @lang('message.support-text1-2')
                    </p>
                    <p class="support-text2 @if(app()->getLocale() == 'tw') tw-support-text2 @endif">
                        {{-- Instead of dwelling on it, why not share your thoughts with us, --}}
                        @lang('message.support-text2-1')
                        
                        {{-- and we can work together with your approach. --}}
                        @lang('message.support-text2-2')
                        
                        {{-- You're looking for a beginning, and we're interested in long-term benefits. --}}
                        @lang('message.support-text2-3')
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="support1 mobile-ml-mr">
            <div class="flex flex-col item gap-36">
                <img src="assets/image/support/support1.png" class="suport1-img">
                <div class="flex content-center">
                    <p class="sup-text-green @if(app()->getLocale() == 'tw') tw-sup-text-green @endif">
                        {{-- CUSTOMER SUPPORT --}}
                        @lang('message.c-sup-text-green-1')
                    </p>
                </div>
            </div>
            <div class="flex flex-col item gap-36">
                <img src="assets/image/support/support2.png" class="suport1-img">
                <div class="flex content-center">
                    <p class="sup-text-green @if(app()->getLocale() == 'tw') tw-sup-text-green @endif">
                        {{-- TECH TEAM SUPPORT --}}
                        @lang('message.c-sup-text-green-2')
                    </p>
                </div>
            </div>
            <div class="flex flex-col item gap-36">
                <img src="assets/image/support/support3.png" class="suport1-img">
                <div class="flex content-center">
                    <p class="sup-text-green @if(app()->getLocale() == 'tw') tw-sup-text-green @endif">
                        {{-- SALES TEAM SUPPORT --}}
                        @lang('message.c-sup-text-green-3')
                    </p>
                </div>
            </div>
        </div>

        <div class="support2 mobile-ml-mr">
            <p class="resolved-text-green @if(app()->getLocale() == 'tw') tw-resolved-text-green @endif">
                {{-- There is nothing in the world that cannot be resolved;
                all we need is communication. --}}
                @lang('message.resolved-text-green')
            </p>
        </div>

        <div class="support3 mobile-ml-mr">
            <div class="flex content-center item gap-150 gap-150-mobile">
                <img src="assets/image/support/2.svg" alt="" class="rep-img">
                <img src="assets/image/support/rep-dark.png" alt="" class="rep-dark-img">
                <img src="assets/image/support/3.svg" class="rep-img3" alt="" >
            </div>
        </div>

        <div class="support4 mobile-ml-mr">
            <p class="touch-text-white @if(app()->getLocale() == 'tw') tw-touch-text-white @endif">
                {{-- You can get in touch with our customer service by clicking on the email icon and sending an email. 
                Our customer service will respond to your questions as quickly as possible. You can also 
                seamlessly contact us by clicking on the Telegram instant chat icon. --}}
                @lang('message.touch-text-white')
            </p>
        </div>

        <div class="support5">
            <div class="flex content-center item gap-10">
                <button class="btn-register-green">
                    <span>
                        {{-- Register Live Account --}}
                        @lang('message.register-live-account')
                    </span>
                </button>
                <button class="btn-register-green">
                    <span>
                        {{-- Log in to your portal --}}
                        @lang('message.log-in-to-your-portal')
                    </span>
                </button>
            </div>
        </div>

        <div class="support6 mobile-ml-mr">
            <div class="wheat-container">
                <p class="open-text">
                    {{-- OPEN YOUR INVESTMENT ACCOUNT --}}
                    @lang('message.c-open-text')
                </p>
            </div>
        </div>
        <div class="support7 mobile-ml-mr">
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
    </div>
@endsection