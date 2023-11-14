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
            border: 2px solid #f1f1f1;
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
    </style>

    <div class="partner-header">
        <img src="assets/image/partner/partner.png" class="partner-img">
        <img src="assets/image/partner/partner-dark.png" class="partner-dark-img">
        <div class="text-overlay">
            <div class="main-content">
                <div class="flex flex-col">
                    <p class="partner-text1">
                        Don't give up your forest<br>
                        for the sake of one tree.
                    </p>
                    <p class="partner-text2">
                        Solutions for Introducing Advisor (IA)<br>
                        Build your client base, earn more revenue.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="partner1">
            <p class="partner-text-green">
                Rely on a rock solid partner
            </p>
        </div>

        <div class="partner2">
            <div class="flex" style="justify-content: space-between">
                <div class="flex flex-col item gap-36">
                    <img src="assets/image/partner/4.svg" class="atr-img">
                    <img src="assets/image/partner/attractive-dark.png" class="atr-dark-img">
                    <p class="stbl-text">
                        Attractive tailored<br>
                        reward scheme
                    </p>
                </div>
                <div class="flex flex-col item gap-36">
                    <img src="assets/image/partner/1.svg" class="atr-img">
                    <img src="assets/image/partner/advance-dark.png" class="atr-dark-img">
                    <p class="stbl-text">
                        Advanced Client<br>
                        Tracking System
                    </p>
                </div>
                <div class="flex flex-col item gap-36">
                    <img src="assets/image/partner/2.svg" class="atr-img">
                    <img src="assets/image/partner/automated-dark.png" class="atr-dark-img">
                    <p class="stbl-text">
                        Automated<br>
                        revenue reporting
                    </p>
                </div>
                <div class="flex flex-col item gap-36">
                    <img src="assets/image/partner/3.svg" class="atr-img">
                    <img src="assets/image/partner/powerful-dark.png" class="atr-dark-img">
                    <p class="stbl-text">
                        Powerful and<br>
                        user-friendly CRM
                    </p>
                </div>
            </div>
        </div>

        <div class="partner3">
            <p class="enjoy-text-green2">
                Enjoy Metabase quality investment experience?
                Don't be selfish, invite your friends now!
            </p>
            <p class="enjoy-text-white">
                Recommend Metabase and earn cash bonuses up 
                to USD 100.00 per referral*.Just follow the simple 
                steps below:
            </p>
        </div>

        <div class="partner4">
            <div class="flex content-center gap-20">
                <div class="flex flex-col item">
                    <img src="assets/image/partner/5.png">
                    <div class="w-f">
                        <p class="log-text-span">How to be a sponsor?</p>
                        <p class="log-text">
                            Just log into your ePortal to obtain
                            your referral link, then share it
                            with your friends.
                        </p>
                    </div>
                    
                </div>
                <div class="flex flex-col item">
                    <img src="assets/image/partner/6.png">
                    <div class="w-f">
                        <p class="log-text-span">If you have been sponsored</p>
                        <p class="log-text">
                            Your friend must register an
                            investment account using your
                            referral link.
                        </p>
                    </div>
                    
                </div>
                <div class="flex flex-col item">
                    <img src="assets/image/partner/7.png">
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

        <div class="partner5">
            <p class="reward-text-green">Your Rewards</p>
            <p class="reward-text-white">
                After the referred client funds <br>
                their account, both the sponsor and the referred client will receive a<br>
                bonus on their accounts proportional to the deposit, as detailed below.
            </p>
        </div>

        <div class="partner6">
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
                        <td>Minimum Trading Lot Referred Client</td>
                        <td rowspan="14">14</td>
                        <td>5 Standard Lots</td>
                        <td>15 Standard Lots</td>
                        <td>50 Standard Lots</td>
                    </tr>
                    <tr>
                        <td>Minimum Deposit Referred Client</td>
                        <td>5,000.00</td>
                        <td>10,000.00</td>
                        <td>30,000.00</td>
                    </tr>
                    <tr>
                        <td>Cash Bonus Referrer</td>
                        <td>100.00</td>
                        <td>300.00</td>
                        <td>1,000.00</td>
                    </tr>
                    <tr>
                        <td>Cash Bonus Referred Client</td>
                        <td>50.00</td>
                        <td>150.00</td>
                        <td>500.00</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="partner7">
            <p class="or-text">Or</p>
        </div>

        <div class="partner8">
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
                        <td>1,500.00</td>
                        <td>5,000.00</td>
                    </tr>
                    <tr>
                        <td>Deposited Trading Bonus Referred Client</td>
                        <td>250.00</td>
                        <td>750.00</td>
                        <td>2,500.00</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="partner9">
            <a href="#">
                <span class="tnc-text">
                    *See the full terms and conditions of this offer.
                </span>
            </a>
        </div>

        <div class="partner10">
            <div class="wheat-container">
                <p class="open-text">OPEN YOUR INVESTMENT ACCOUNT</p>
            </div>
        </div>

        <div class="partner11">
            <div class="flex gap-20">
                <div class="flex gap-10">
                    <img src="assets/image/footer/apple.svg">
                    <img src="assets/image/footer/google.svg">
                    <img src="assets/image/footer/window.svg">
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