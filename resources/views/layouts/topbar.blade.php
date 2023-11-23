<style>
     .mdi.mdi-web {
        color: white;
        font-size: 20px;
    }
    .mdi.mdi-lightbulb-on-outline {
        color: #5CA346;
        font-size: 20px;
    }
    .dark-mode .mdi-lightbulb-on-outline {
        color: #fff;
    }
    .nav li.active > a {
        color: #5CA346;
    }
    .nav-toggle {
        display: none;
        transition: opacity 0.5s ease;
    }
    @media screen and (max-width: 1000px)
    {
        .center-top {
            display: none;
        }

        .nav-toggle {
            display: block;
            text-align: center;
            background: rgba(92, 163, 70, 0.10);
            border-radius: 40px;
            width: 66px;
            height: 66px;
            position: fixed;
            top: 25px;
            left: 25px;
            z-index: 999;
            transition: width 0.3s ease;
            backdrop-filter: blur(6px);
        }

        .overlay-container {
            /* display: none; */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            /* display: flex; */
            justify-content: center;
            align-items: center;
            background: #fff;
            z-index: 999;
            padding: 26px 26px 26px 26px;
            box-sizing: border-box;
            overflow-y: auto;
        }

        .container {
            max-width: 378px;
            width: 100%;
            /* max-height: 801px; */
            height: 100%;
            padding: 26px;
            box-sizing: border-box;
            text-align: center;
            border-radius: 30px;
            background: rgba(92, 163, 70, 0.10);
            /* display: none; */
            overflow: auto;
            /* min-height: 827px; */
            border: 1px solid black;
        }
        .logo-mobile-long {
            width: 200px;
            height: 26px;
        }
        .container-nav {
            /* display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px; Adjust the gap according to your preference */

            display: flex;
            justify-content: space-between;
        }
        .container-nav div {
            text-align: left;
            /* padding: 10px; */
        }
        .nav-text-green {
            color: #5CA346;

            font-family: SF Pro Text;
            font-size: 16px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            text-decoration-line: underline;
        }
        .nav-text-dark {
            color: #000;
            font-family: SF Pro Text;
            font-size: 14px;
            font-style: normal;
            font-weight: 700;
            line-height: 20px; /* 142.857% */
            text-decoration: none;
        }
        .nav-mobile {
            text-decoration: none;
        }
        .btn-green-mobile {
            width: 155px;
            height: 40px;
            border-radius: 40px;
            border: 2px solid #5CA346;
        }
        .btn-green-mobile span {
            color: #000;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 12px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }
        .btn-close {
            background: transparent;
            width: 130px;
            height: 20px;
            border-radius: 40px;
            border: 2px solid red;
        }
        .btn-close span {
            color: #000;
            text-align: center;
            font-family: SF Pro Text;
            font-size: 12px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
        }
        .container-img {
            position: relative;
            /* margin-left: -27px; */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .ticket {
            width: 100%; /* Adjust the width as needed */
            height: auto; /* Maintain aspect ratio */
            display: block;
        }

        .coming {
            position: absolute;
            bottom: 10;
            left: 20;
            width: 50%;
            height: auto;
            display: block;
            width: auto;
            height: auto;
            /* transform: translate(0%, 100%); Move it to the bottom-left */
        }
        .light-green-text {
            color: #5CA346;

            text-align: center;
            font-family: SF Pro Text;
            font-size: 12px;
            font-style: normal;
            font-weight: 700;
            line-height: 14px; /* 116.667% */
        }
        .mt-5 {
            /* margin-top: 25px; */
        }
        /* .slick-slide img {
            display: block !important;
        } */
        /* .slick-prev:before, .slick-next:before {
            display: none;
        } */
        .slick-dots li {
            width: 5px;
        }
        .light-mobile-img {
            width: 100%;
        }
        .app-mobile {
            width: 100%;
        }

        .dark-mode .nav-toggle {
            background: rgba(92, 163, 70, 0.40);
        }
        .dark-mode .overlay-container {
            background: #000;
        }
        .dark-mode .container {
            background: rgba(92, 163, 70, 0.30);
        }

        .dark-mode .nav-text-dark {
            color: #FFF;
        }
        .slick-dots li button:before {
            color: #5CA346;
        }

        .slick-dots li.slick-active button:before {
            color: #000000;
        }
        .dark-mode .btn-green-mobile {
            background: transparent;
        }
        .dark-mode .btn-green-mobile span {
            color: #FFF;
        }
        .gap-30-t {
            gap: 28px;
        }
        .slick-prev:before, .slick-next:before {
            display: none;
        }
        .slick-prev, .slick-next {
            display: none !important;
        }
    }
</style>

<div class="center-top">
    <div class="bar">
        <nav class="nav">
            <ul>
                <li class="nav-img">
                    <img src="/assets/image/logo.svg">
                </li>
                <div class="flex content-center gap-40">
                    <li class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="{{ Route::currentRouteName() === 'company' ? 'active' : '' }}">
                        <a href="{{ route('company') }}">Company</a>
                    </li>
                    <li class="{{ Route::currentRouteName() === 'trading' ? 'active' : '' }}">
                        <a href="{{ route('trading') }}">Trading</a>
                    </li>
                    <li class="{{ Route::currentRouteName() === 'partnership' ? 'active' : '' }}">
                        <a href="{{ route('partnership') }}">Partner</a>
                    </li>
                    <li class="{{ Route::currentRouteName() === 'support' ? 'active' : '' }}">
                        <a href="{{ route('support') }}">Support</a>
                    </li>
                    <li>
                        <i class="mdi mdi-web"></i>
                    </li>
                      <!-- light/dark mode -->
                    <li class="{{ Request::is('dark-mode') ? '' : 'active' }}" id="mode-toggle" style="cursor: pointer;">
                        <i class="mdi mdi-lightbulb-on-outline"></i>
                    </li>
                </div>
                
                <div style="margin-left: 53px;" class="flex gap-10">
                    <!-- log in -->
                    <li class="nav-btn">
                        <a href="#">
                            <button class="btn1 btn-primary"><a class="log" href="http://127.0.0.1:8080/login">
                                <span>Register</span>
                            </button>
                        </a>
                    </li>
                    <li class="nav-btn">
                        <a href="#">
                            <button class="btn1 btn-primary"><a class="log" href="http://127.0.0.1:8080/login">
                                <span>Log In</span>
                            </button>
                        </a>
                    </li>
                </div>
            </ul>
        </nav>
    </div>
</div>

<div class="nav-toggle" onclick="toggleNav()">
    <img src="/assets/image/logo-mobile.svg" alt="logo" style="margin-top: 8px">
</div>

<div class="overlay-container" id="overlayContainer" style="display: none">
    <!-- Content of your container goes here -->
    <div class="container">
        <div class="flex flex-col gap-30-t">
            <div class="flex flex-col gap-26">
                <img src="assets/image/logo-mobile-long.svg" class="logo-mobile-long">
                <div class="container-nav">
                    <div class="flex flex-col gap-15">
                        <div>
                            <a href="#">
                                <span class="nav-text-green">
                                    EXPLORE
                                </span> 
                            </a>
                        </div>

                        <div class="flex flex-col gap-20">
                            <div>
                                <a href="{{ route('home') }}" class="nav-mobile">
                                    <span class="nav-text-dark">
                                        HOME
                                    </span>
                                </a>
                            </div>

                            <div>
                                <a href="{{ route('company') }}" class="nav-mobile">
                                    <span class="nav-text-dark">
                                        COMPANY
                                    </span>
                                </a>
                            </div>

                            <div>
                                <a href="{{ route('trading') }}" class="nav-mobile">
                                    <span class="nav-text-dark">
                                        TRADING
                                    </span>
                                </a>
                            </div>

                            <div>
                                <a href="{{ route('partnership') }}" class="nav-mobile">
                                    <span class="nav-text-dark">
                                        PARTNER
                                    </span>
                                </a>
                            </div>

                            <div>
                                <a href="{{ route('support') }}" class="nav-mobile">
                                    <span class="nav-text-dark">
                                        SUPPORT
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-15">
                        <div>
                            <a href="#"> 
                                <span class="nav-text-green">
                                    CLIENT
                                </span>
                            </a>
                        </div>

                        <div class="flex flex-col gap-20">
                            <div>
                                <a href="#" class="nav-mobile">
                                    <span class="nav-text-dark">
                                        REGISTER
                                    </span>
                                </a>
                            </div>

                            <div>
                                <a href="#" class="nav-mobile">
                                    <span class="nav-text-dark">
                                        PORTAL
                                    </span>
                                </a>
                            </div>

                            <div>
                                <a href="#" class="nav-mobile">
                                    <span class="nav-text-dark">
                                        CASH IN
                                    </span>
                                </a>
                            </div>

                            <div>
                                <a href="#" class="nav-mobile">
                                    <span class="nav-text-dark">
                                        CASH OUT
                                    </span>
                                </a>
                            </div>

                            <div>
                                <a href="#" class="nav-mobile">
                                    <span class="nav-text-dark">
                                        PASSWORD
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex flex-col gap-15">
                        <div>
                            <a href="#"> 
                                <span class="nav-text-green">
                                    BENEFIT
                                </span> 
                            </a>
                        </div>

                        <div class="flex flex-col gap-20">
                            <div>
                                <a href="#" class="nav-mobile">
                                    <span class="nav-text-dark">
                                        BONUSES
                                    </span>
                                </a>
                            </div>

                            <div>
                                <a href="#" class="nav-mobile">
                                    <span class="nav-text-dark">
                                        CREDIT
                                    </span>
                                </a>
                            </div>

                            <div>
                                <a href="#">
                                    <span class="nav-text-green">
                                        INQUIRY
                                    </span>
                                </a>
                            </div>

                            <div>
                                <a href="#" class="nav-mobile">
                                    <span class="nav-text-dark">
                                        EMAIL
                                    </span>
                                </a>
                            </div>

                            <div>
                                <a href="#" class="nav-mobile">
                                    <span class="nav-text-dark">
                                        TELEGRAM
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
            <div class="slick-slider" style="margin-left: -25px">
                {{-- <div class="container-img">
                    <img src="assets/image/ticket.svg" alt="" class="ticket">
                    <img src="assets/image/coming.svg" alt="" class="coming">
                </div>

                <div class="container-img">
                    <img src="assets/image/ticket.svg" alt="" class="ticket">
                    <img src="assets/image/coming.svg" alt="" class="coming">
                </div>

                <div class="container-img">
                    <img src="assets/image/ticket.svg" alt="" class="ticket">
                    <img src="assets/image/coming.svg" alt="" class="coming">
                </div> --}}

                <div class="slide-item1-container">
                    <img src="assets/image/interest_booster.svg" alt="" class="ticket">
                </div>

                <div class="slide-item1-container">
                    <img src="assets/image/alchemist.svg" alt="" class="ticket">
                </div>

                <div class="slide-item1-container">
                    <img src="assets/image/trading_insurance.svg" alt="" class="ticket">
                </div>

                <div class="slide-item1-container">
                    <img src="assets/image/trading_contest.svg" alt="" class="ticket">
                </div>
            </div>

            <div class="flex flex-col gap-25 mt-5">

                <div class="flex content-center gap-14">
                    <img src="assets/image/apple-mobile.svg" class="app-mobile" alt="">
                    <img src="assets/image/google-mobile.svg" class="app-mobile" alt="">
                </div>

                <div class="flex content-center gap-29">

                    <div class="flex flex-col gap-10 item" id="lightMode">
                        <img src="assets/image/light-mobile.svg" class="light-mobile-img" alt="">
                        <span class="light-green-text">
                            Light
                        </span>
                    </div>
                    <div class="flex flex-col gap-10 item" id="darkMode">
                        <img src="assets/image/dark-mobile.svg" class="light-mobile-img" alt="">
                        <span class="light-green-text">
                            Dark
                        </span>
                    </div>
                    <div class="flex flex-col gap-10 item">
                        <img src="assets/image/en-mobile.svg" class="light-mobile-img" alt="">
                        <span class="light-green-text">
                            English
                        </span>
                    </div>
                    <div class="flex flex-col gap-10 item">
                        <img src="assets/image/cn-mobile.svg" class="light-mobile-img" alt="">
                        <span class="light-green-text">
                            中文
                        </span>
                    </div>
                    
                    
                </div>
    
                <div class="flex flex-col gap-15">
                    <div class="flex content-center gap-15">
                        <button class="btn-green-mobile">
                            <span>REGISTER<br> LIVE ACCOUNT</span>
                        </button>
                        <button class="btn-green-mobile">
                            <span>LOG IN TO YOUR<br> PORTAL</span>
                        </button>
                    </div>
        
                    <div class="flex content-center">
                        <button class="btn-green-mobile" onclick="toggleNav()">
                            <span>Close</span>
                        </button>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>
</div>