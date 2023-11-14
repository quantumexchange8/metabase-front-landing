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
    .company4 {
        width: 100%;
        margin-bottom: 200px;
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
        background-image: url('/assets/image/company/testdot.svg');
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
    </style>

    <div class="company-header">
        <img src="assets/image/company/1.png" class="company-img">
        <img src="assets/image/company/companyhead-dark.png" class="company-dark-img">
        <div class="text-overlay">
            <div class="main-content">
                <div class="flex flex-col w-full">
                    <div>
                        <p class="metabase-text-large">Metabase</p>
                        <p class="metabase-text">
                            is not a typical investment brokerage.<br>
                            Our history, ambition and DNA comes from the world of creativity,<br>
                            software development and the empowerment of investors.<br>
                            These values still remain central to Metabase.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="company1">
            <p class="company1-text">
                “Metabase combines a unique
                multi-asset class trading platform
                with the innovative power of a
                fintech company based on a<br>
                solid Metabase.”
            </p>
        </div>
    </div>

    <div class="dot-bg">
        <div class="main-content">
            <div class="company2">
                <p class="company2-text">
                    CRYPTO<br>
                    CURRENCIES
                </p>
                <div class="flex" style="justify-content: flex-end;">
                    <p class="company2-text2">
                        Metabase fascinated by the technology behind the blockchain.
                        The events of the past year have started a
                        “housecleaning” process similar to that we witnessed
                        in the online world when the dot-com bubble burst.
                        What is important is that future activities in the
                        crypto area take place within a reliable, regulated framework.
                        With our crypto trading, we created an efficient trading platform
                        for our clients that ensures secure, cost-efficient execution with
                        sufficient liquidity in the cryptocurrencies traded. More than
                        15 cryptocurrencies can currently be traded via Metabase,
                        and we are well on the way to increasing this number. 
                    </p>
                </div>
            </div>
        </div>
    </div>
        
    <div class="main-content">
        <div class="company3">
            <p class="company3-text">
                KEY SUCCESS FACTORS<br>
                NOT LIMITED TO FINANCIAL ASSETS
            </p>
            <div class="flex" style="justify-content: flex-start;">
                <p class="company3-text2">
                    The areas we highly prioritize include protection from<br>
                    cyber risks and ensuring system functionality.<br>
                    Therefore, Metabase invests substantial funds in IT security every year.<br>
                    Additionally, other areas include innovation, customer satisfaction,<br>
                    and environmental footprint. 
                </p>
            </div>
        </div>

        <div class="company4">
            <p class="company4-text">
                THE METABASE GROWTH<br>
                STORY CONTINUES
            </p>
            <div class="flex" style="justify-content: flex-end;">
                <p class="company4-text2">
                    Metabase will enlarge its strong position in the home market,<br>
                    diversify its services, develop new customer segments and expand<br>
                    in other target markets in Europe, Asia and the Middle East.<br>
                    This will broaden the Group's income sources, helping to reduce<br>
                    the proportion that is transaction-based and hence more volatile. <br><br>
                    &nbsp;&nbsp; Metabase will also be well placed to cope with difficult market<br>
                    or economic situations in the future - and to take advantage of<br>
                    opportunities that arise for its clients and for the<br>
                    foreign exchange trading itself.
                </p>
            </div>
        </div>
    </div>

    <div class="dot-bg">
        <div class="main-content">
            <div class="company5">
                <p class="company5-text">
                    METABASE: MORE THAN<br>
                    JUST ONLINE TRADING
                </p>
                <div class="flex" style="justify-content: flex-start;">
                    <p class="company5-text2">
                        On average, Metabase customers are wealthier than those of other online
                        brokers. This is because they also benefit from a comprehensive universal
                        crypto payment service. Metabase's offering in this area will soon be expanded
                        with eBill and a modern Crypto payment wallet featuring,<br>
                        Apple Pay and Google Pay.<br><br>
                        
                        In keeping with the democratisation of the financial world and the power of
                        innovation, the Meta-Financial super app, jointly launched by Metabase and
                        Metabase Technology in 2021, is enjoying increasing popularity.<br><br>
                        
                        But institutional clients are also increasingly benefiting from the diverse opportunities
                        offered by Metabase's unique business model. For example, the TEAM is continuously
                        expanding its software platform for asset managers called “Asset Master”,
                        which offers efficient, cost-effective portfolio management and trading.
                    </p>
                </div>
            </div>
        </div>
    </div>
        

    <div class="main-content">
        <div class="company6">
            <p class="company6-text">
                CODE OF<br>
                CONDUCT
            </p>
            <div class="flex" style="justify-content: flex-end;">
                <p class="company6-text2">
                    As the leader in online forex trading and as a FinTech company,<br>
                    innovation and technology challenge the codes of convention.<br>
                    the rules are respected and important corporate values are cherished.<br>
                    The Group's Code of Conduct guides its daily actions with<br>
                    internal and external investors.
                </p>
            </div>
        </div>

        <div class="company7">
            <p class="company7-text">
                Open an Investment Trading Account
                with Metabase to experience the
                pulse of digital in the active financial markets.
            </p>
        </div>
    </div>

    <div class="dot-bg2">
        <div class="main-content">
            <div class="flex content-center">
                <img src="assets/image/company/2.svg">
            </div>
        </div>
    </div>
    
    <div class="main-content">
        <div class="company8">
            <div class="wheat-container">
                <p class="open-text">OPEN YOUR INVESTMENT ACCOUNT</p>
            </div>
        </div>
        <div class="company9">
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
    </div>
@endsection