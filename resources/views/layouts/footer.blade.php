<style>
    .risk-word {
        color: #F00;
        font-family: SF Pro Text;
        font-size: 12px;
        font-style: normal;
        font-weight: 700;
        line-height: normal; 
        margin: 0;
    }
    .risk-content {
        color: #FFF;
        font-family: SF Pro Text;
        font-size: 10px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin: 0;
    }
    .ft-description {
        color: #FFF;
        font-family: SF Pro Text;
        font-size: 12px;
        font-style: normal;
        font-weight: 400;
        line-height: 18px; /* 150% */
        margin: 0;
    }
    .ft-col1 {
        width: 284px;
        height: auto;
        gap: 36px;
    }
    .ft-col2 {
        margin-top: 52px;
        width: 380px;
    }
    .ft-col3 {
        width: 266px;
        height: auto;
        gap: 59px;
        margin-top: 52px;
    }
    .copyright-word {
        color: #5CA346;
        font-family: SF Pro Text;
        font-size: 10px;
        font-style: normal;
        font-weight: 700;
        line-height: 14px; /* 140% */
        margin: 0;
    }
    .discover-word {
        color: #5CA346;
        text-align: center;
        font-family: SF Pro Text;
        font-size: 12px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        text-align: left;
        margin-top: 0px;
    }
    .input-container {
        position: relative;
        display: inline-block;
    }
    /* .input-container input::placeholder {
        padding-left: 15px; 
    } */
    .eml {
        position: absolute;
        right: 5px;
        top: 4px;
        border: none;
        background: #5CA346;
        padding: 0;
        margin: 0;
        width: 20px;
        height: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 20px;
    }
    .social-box {
        width: 28px;
        height: 28px;
        flex-shrink: 0;
        background: #EBE9E9;
        border-radius: 5px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .text-green {
        color: #5CA346;
        font-family: SF Pro Text;
        font-size: 12px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        margin: 0;
    }
    .text-white {
        color: #FFF;
        font-family: SF Pro Text;
        font-size: 12px;
        font-style: normal;
        font-weight: 600;
        line-height: normal; /* 200% */
        margin: 0;
    }
    .ft-container {
        /* border: 1px solid #FFFFFF; */
        max-width: 1000px;
        width: 100%;
        margin: 0 auto;
        gap: 70px;
    }
    .footer-desc-mobile {
        display: none;
    }
    @media screen and (max-width: 1000px){
        .footer-desc {
            display: none;
        }
        .footer-desc-mobile {
            /* border-radius: 0px 0px var(--corner-radius, 55px) var(--corner-radius, 55px); */
            background: rgba(92, 163, 70, 0.10);
            /* display: flex;
            flex-direction: column; */
            width: 100%;
            height: 857px;
            display: block;
            padding: 37px 40px 60px 40px;
            box-sizing: border-box;
        }
        .dark-mode .footer-desc-mobile {
            background: rgba(92, 163, 70, 0.30);
        }
        .ft-description {
            font-size: 12px;
            line-height: 18px;
            color: #000;
        }
        .copyright-word {
            color: #5CA346;

            font-family: SF Pro Text;
            font-size: 10px;
            font-style: normal;
            font-weight: 700;
            line-height: 14px; /* 140% */
        }
        .mb-66 {
            margin-bottom: 66px;
        }
        .discover-word {
            color: #5CA346;
            font-size: 14px;
            font-weight: 700;
            line-height: normal;
            margin-bottom: 0;
        }
        .app-dark-footer {
            width: 100%;
        }
        .mb-36 {
            margin-bottom: 36px;
        }
        .risk-text-red {
            color: #F00;

            font-family: SF Pro Text;
            font-size: 12px;
            font-style: normal;
            font-weight: 700;
            line-height: normal;
            margin: 0;
            margin-bottom: 16px;
        }
        .risk-content {
            font-size: 10px;
            color: #000;
        }
        .dark-mode .ft-description {
            color: #FFF;
        }
        .dark-mode .risk-content {
            color: #fff;
        }
    }
</style>
<footer class="footer-desc">
    <div class="flex flex-col ft-container">
        <div class="flex gap-52">
            <div class="ft-col1 flex flex-col">
                <div class="flex flex-col gap-26">
                    <div>
                        <img src="assets/image/footer/logolarge.png">
                    </div>
    
                    <div>
                        <p class="ft-description">
                            Metabase establish in 2022. <br>
                            It committed to delivering a comprehensive
                            and reliable trading experience for forex
                            traders globally. With our team of industry
                            experts and cutting-edge technology, we
                            empower traders with the necessary tools
                            and knowledge to navigate the dynamic
                            foreign exchange market.
    
                            <br><br>
    
                            Our platform provides comprehensive resources,
                            competitive offerings, and robust customer
                            support to ensure a secure and successful trading
                            journey. We strive to be the trusted partner for
                            traders seeking a comprehensive and rewarding
                            forex trading experience.
                        </p>
                    </div>
                </div>
                

                <div>
                    <p class="copyright-word">
                        NFA ID: 0555449<br>
                        Copyright © Metabase 2023. All rights reserved.
                    </p>
                </div>
            </div>

            <div class="ft-col2 flex flex-col">
                <div class="flex space-btw">
                    <div class="flex flex-col gap-23">
                        <div>
                            <p class="text-green">EXPLORE</p>
                        </div>
                        <div class="flex flex-col gap-20">
                            <p class="text-white">
                                HOME
                            </p>
                            <p class="text-white">
                                COMPANY
                            </p>
                            <p class="text-white">
                                TRADING
                            </p>
                            <p class="text-white">
                                PARTNERSHIP
                            </p>
                            <p class="text-white">
                                SUPPORT
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-23">
                        <div>
                            <p class="text-green">CLIENT</p>
                        </div>
                        <div class="flex flex-col gap-20">
                            <p class="text-white">
                                REGISTER
                            </p>
                            <p class="text-white">
                                PORTAL
                            </p>
                            <p class="text-white">
                                CASH IN
                            </p>
                            <p class="text-white">
                                CASH OUT
                            </p>
                            <p class="text-white">
                                PASSWORD
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-20">
                        <div class="flex flex-col gap-23">
                            <div>
                                <p class="text-green">LANGUAGE</p>
                            </div>
                            <div class="flex flex-col gap-20">
                                <p class="text-white">
                                    ENGLISH
                                </p>
                                <p class="text-white">
                                    CHINESE
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex flex-col gap-20">
                            <div>
                                <p class="text-green">BENEFIT</p>
                            </div>
                            <div class="flex flex-col gap-20">
                                <p class="text-white">
                                    BONUSES
                                </p>
                                <p class="text-white">
                                    CREDIT
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-20">
                        <div class="flex flex-col gap-23">
                            <div>
                                <p class="text-green">THEME</p>
                            </div>
                            <div class="flex flex-col gap-20">
                                <p class="text-white">
                                    LIGHT MODE
                                </p>
                                <p class="text-white">
                                    DARK MODE
                                </p>
                            </div>
                        </div>
                        
                        <div class="flex flex-col gap-20">
                            <div>
                                <p class="text-green">INQUIRY</p>
                            </div>
                            <div class="flex flex-col gap-20">
                                <p class="text-white">
                                    EMAIL
                                </p>
                                <p class="text-white">
                                    TELEGRAM
                                </p>
                            </div>
                        </div>
                       
                    </div>
                </div>
                
                {{-- <div class="flex gap-36">
                    <div class="flex flex-col gap-16">
                        <div>
                            <p class="text-green">CLIENT</p>
                        </div>
                        <div>
                            <p class="text-white">
                                REGISTER<br>
                                LOG IN PORTAL<br>
                                DEPOSIT<br>
                                WITHDRAWAL<br>
                                FORGET PASSWORD
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-16">
                        <div>
                            <p class="text-green">BENEFIT</p>
                        </div>
                        <div>
                            <p class="text-white">
                                REFERRAL BONUS<br>
                                REFERRAL CREDIT
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-16">
                        <div>
                            <p class="text-green">INQUIRY</p>
                        </div>
                        <div>
                            <p class="text-white">
                                EMAIL SUPPORT<br>
                                TELEGRAM SUPPORT
                            </p>
                        </div>
                    </div>
                </div> --}}
                

            </div>

            <div class="ft-col3 flex flex-col">
                <div class="flex flex-col gap-25">
                    <div class="flex flex-col">
                        <div>
                            <p class="discover-word">
                                Stay connect with us
                            </p>
                        </div>
                        <div>
                            <form action="#" style="margin: 0">
                                @csrf
                                <div class="input-container">
                                    <input type="email" id="email" name="email" style="border-radius: 20px; border: none; height:28px; width: 266px">
                                    <button class="eml"><img src="assets/image/arrow.svg"></button>
                                </div>
                            </form>
                        </div>
                    </div>
    
                    <div class="flex flex-col">
                        <div>
                            <p class="discover-word">Discover our applications</p>
                        </div>
                        <div class="flex flex-col gap-16">
                            <div>
                                <img src="assets/image/footer/apple.svg">
                            </div>
                            <div>
                                <img src="assets/image/footer/google.svg">
                            </div>
                            <div>
                                <img src="assets/image/footer/window.svg">
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="flex gap-8">
                    <div class="social-box">
                        <img src="assets/image/footer/telegram.png">
                    </div>
                    <div class="social-box">
                        <img src="assets/image/footer/facebook.png">
                    </div>
                    <div class="social-box">
                        <img src="assets/image/footer/ig.png">
                    </div>
                    <div class="social-box">
                        <img src="assets/image/footer/linkedin.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-6">
            <div>
                <p class="risk-word">Risk Warning:</p>
            </div>
            <div>
                <p class="risk-content">
                    Trading foreign exchange, spot precious metals and any other product on the Forex platform involves significant risk of loss and may not be suitable for all investors. Prior to opening an account with Metabase, consider your level of experience, investment objectives, assets, income and risk appetite. 
                    The possibility exists that you could sustain a loss of some or all of your initial investment and therefore you should not speculate, invest or hedge with capital you cannot afford to lose, that is borrowed or urgently needed or necessary for personal or family subsistence. 
                    You should be aware of all the risks associated with foreign exchange trading, and seek advice from an independent financial advisor if you have any doubts. The content of this website represents advertising material and has not been submitted to nor approved by any supervisory authority.
                </p>
            </div>
        </div>
    </div>
</footer>

<footer class="footer-desc-mobile">
    <div class="flex flex-col gap-26 mb-66">
        <div>
            <img src="assets/image/logo-mobile-long.svg" alt="">
        </div>
        <div>
            <p class="ft-description">
                Metabase establish in 2022. It committed to delivering a 
                comprehensive and reliable trading experience for forex 
                traders globally. With our team of industry experts and 
                cutting-edge technology, we empower traders with the 
                necessary tools and knowledge to navigate the dynamic 
                foreign exchange market.
                <br>
                <br>
                Our platform provides comprehensive resources, competitive 
                offerings, and robust customer support to ensure a secure 
                and successful trading journey. We strive to be the trusted 
                partner for traders seeking a comprehensive and rewarding
                forex trading experience.
            </p>
        </div>
        <div>
            <p class="copyright-word">
                NFA ID: 0555449<br>
                Copyright © Metabase 2023. All rights reserved.
            </p>
        </div>
    </div>
    <div class="flex flex-col gap-16 mb-36">
        <div>
            <p class="discover-word">Discover our applications</p>
        </div>
        <div class="flex gap-10">
            <img src="assets/image/apple-mobile.svg" class="app-dark-footer">
            <img src="assets/image/google-mobile.svg" class="app-dark-footer">
            <img src="assets/image/windows-mobile.svg" class="app-dark-footer app-window">
        </div>
    </div>

    
    <div class="flex gap-8 mb-66">
        <div class="social-box">
            <img src="assets/image/footer/telegram.svg">
        </div>
        <div class="social-box">
            <img src="assets/image/footer/fb.svg">
        </div>
        <div class="social-box">
            <img src="assets/image/footer/ig.svg">
        </div>
        <div class="social-box">
            <img src="assets/image/footer/linkdin.svg">
        </div>
    </div>

    <div class="flex flex-col">
        <p class="risk-text-red">
            Risk Warning:
        </p>
        <p class="risk-content">
            Trading foreign exchange, spot precious metals and any other product on the Forex platform involves significant risk of loss and may not be suitable for all investors. Prior to opening an account with Metabase, consider your level of experience, investment objectives, assets, income and risk appetite. The possibility exists that you could sustain a loss of some or all of your initial investment and therefore you should not speculate, invest or hedge with capital you cannot afford to lose, that is borrowed or urgently needed or necessary for personal or family subsistence. You should be aware of all the risks associated with foreign exchange trading, and seek advice from an independent financial advisor if you have any doubts. The content of this website represents advertising material and has not been submitted to nor approved by any supervisory authority.
        </p>
    </div>
    
</footer>