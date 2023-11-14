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
            font-family: SF Pro Display;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 16px; /* 114.286% */
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
            border: 2px solid #f1f1f1;
            text-align: center;
            padding: 8px;
        }

        .dark-mode th, td {
            border: 2px solid rgb(0, 0, 0);
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
        .light-mode .stable-img {
            display: block;
        }
        .light-mode .stable-dark-img {
            display: none;
        }
        .dark-mode .stable-img {
            display: none;
        }
        .dark-mode .stable-dark-img {
            display: block;
        }
        .dark-mode .app-dark {
            border-radius: 10px;
            border: 0.5px solid #5CA346;
        }
    </style>

    
    <div class="trading-header">
        <img src="assets/image/trading/trading.png" class="trading-img">
        <img src="assets/image/trading/trading-dark.png" class="trading-dark-img">
        <div class="text-overlay">
            <div class="main-content">

                <div class="flex flex-col item">
                    <p class="trading-text1">
                        One account - a world of opportunities
                    </p>
                    <p class="trading-text2">
                        Access a wealth of trading, investment and saving solutions from the
                        comfort and security of your multi-currency Metabase account.
                        Enjoy the freedom offered by a versatile Super-CRM and all the popular
                        digital currencies payment options.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="trading1">
            <div class="wheat-container">
                <p class="open-text">OPEN YOUR INVESTMENT ACCOUNT</p>
            </div>
        </div>
        <div class="trading2">
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

        <div class="trading2-3">
            <p class="low-text-green">
                LOW TO HIGH RISK STRATEGIES
            </p>
        </div>

        <div class="trading3">
            <div class="flex" style="justify-content: space-between">
                <div class="flex flex-col item gap-36">
                    <img src="assets/image/trading/4.png" class="stable-img">
                    <img src="assets/image/trading/stable-dark.png" class="stable-dark-img">
                    <p class="stbl-text">
                        STABLE<br>SAVING
                    </p>
                </div>
                <div class="flex flex-col item gap-36">
                    <img src="assets/image/trading/3.png" class="stable-img">
                    <img src="assets/image/trading/passive-dark.png" class="stable-dark-img">
                    <p class="stbl-text">
                        PASSIVE<br>INVESTING
                    </p>
                </div>
                <div class="flex flex-col item gap-36">
                    <img src="assets/image/trading/2.png" class="stable-img">
                    <img src="assets/image/trading/ative-dark.png" class="stable-dark-img">
                    <p class="stbl-text">
                        ATIVE<br>DIVERSIFY
                    </p>
                </div>
                <div class="flex flex-col item gap-36">
                    <img src="assets/image/trading/1.png" class="stable-img">
                    <img src="assets/image/trading/aggressive-dark.png" class="stable-dark-img">
                    <p class="stbl-text">
                        AGGRESSIVE<br>SPECULATION
                    </p>
                </div>
            </div>
        </div>
        
        <div class="trading4">
            <div class="flex flex-col">
                <div>
                    <p class="worry-text-green">
                        Worry-Free and <br>
                        boosting your Investment
                    </p>
                </div>
                <div>
                    <p class="worry-text-white">
                        SPAA is a custom-tailored investment solution designed by Metabase for the future. It is based on 
                        the client's risk tolerance and offers four distinct investment modes: Stable, Passive, Active, and 
                        Aggressive. SPAA incorporates the Metabase Fintech System, which effectively reduces investment 
                        risk for clients, aiming to maximize returns. One of SPAA's key features is that it does not charge any 
                        entry fees and has very low service fees.
                        <br>
                        <br>
                        In addition to these appealing features, clients can easily monitor their investment 
                        portfolio's performance within the Metabase Super App after investing. 
                        Clients can almost experience the joy of worry-free investment and enhance the 
                        quality of their investments.
                    </p>
                </div>
            </div>
        </div>

        <div class="trading-line"></div>

        <div class="trading5">
            <div class="flex flex-col">
                <div>
                    <p class="worry-text-green">
                        Currencies & Precious Metals
                    </p>
                </div>
                <div>
                    <p class="worry-text-white2">
                        Metabase's offer comprises major, minor and 
                        emerging currency pairs as well as precious metals, 
                        allowing you to trade around the clock and take 
                        advantage of opportunities all over the world. We 
                        also provide exclusive research on these assets to 
                        help you optimize your strategy.
                    </p>
                </div>
            </div>
        </div>

        <div class="trading6">
            <table>
                <thead>
                    <tr>
                        <th>SYMBOL</th>
                        <th>DESCRIPTIONS</th>
                        <th>MIN SPREADS (pips)</th>
                        <th>MIN TRADE SIZE</th>
                        <th>MAX TRADE SIZE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>AUDCAD</td>
                        <td>Australian Dollar vs. Canadian Dollar</td>
                        <td>1.6</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>AUDCHF</td>
                        <td>Australian Dollar vs. Swiss Franc</td>
                        <td>1.3</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>AUDJPY</td>
                        <td>Australian Dollar vs. Japanese Yen</td>
                        <td>1.4</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>

                    <tr>
                        <td>AUDNZD</td>
                        <td>Australian Dollar vs. New Zealand Dollar</td>
                        <td>2.0</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>AUDUSD</td>
                        <td>Australian Dollar vs. US Dollar</td>
                        <td>1.2</td>
                        <td>0.01</td>
                        <td>100</td>
                    </tr>

                    <tr>
                        <td>CADCHF</td>
                        <td>Canadian Dollar vs. Swiss Franc</td>
                        <td>1.3</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>CADCHF</td>
                        <td>Canadian Dollar vs. Swiss Franc</td>
                        <td>1.3</td>
                        <td>0.01</td>
                        <td>100</td>
                    </tr>

                    <tr>
                        <td>CADJPY</td>
                        <td>Canadian Dollar vs. Japanese Yen</td>
                        <td>1.4</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>CHFJPY</td>
                        <td>Swiss Franc vs. Japanese Yen</td>
                        <td>1.7</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>

                    <tr>
                        <td>EURAUD</td>
                        <td>Euro vs. Australian Dollar</td>
                        <td>2.3</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>EURCAD</td>
                        <td>Euro vs. Canadian Dollar</td>
                        <td>2.3</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>EURCHF</td>
                        <td>Euro vs. Swiss Franc</td>
                        <td>1.9</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>EURGBP</td>
                        <td>Euro vs. British Pound</td>
                        <td>1.2</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>EURJPY</td>
                        <td>Euro vs. Japanese Yen</td>
                        <td>2.0</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>EURNZD</td>
                        <td>Euro vs. New Zealand Dollar</td>
                        <td>2.5</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>EURUSD</td>
                        <td>Euro vs. US Dollar</td>
                        <td>1.1</td>
                        <td>0.01</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>GBPAUD</td>
                        <td>British Pound vs. Australian Dollar</td>
                        <td>2.7</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>GBPCAD</td>
                        <td>British Pound vs. Canadian Dollar</td>
                        <td>2.7</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>GBPCHF</td>
                        <td>British Pound vs. Swiss Franc</td>
                        <td>2.1</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>GBPJPY</td>
                        <td>British Pound vs. Japanese Yen</td>
                        <td>2.4</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>GBPNZD</td>
                        <td>British Pound vs. New Zealand Dollar</td>
                        <td>2.9</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>GBPUSD</td>
                        <td>British Pound vs. US Dollar</td>
                        <td>1.4</td>
                        <td>0.01</td>
                        <td>100</td>
                    </tr>

                    <tr>
                        <td>NZDCAD</td>
                        <td>New Zealand Dollar vs. Canadian Dollar</td>
                        <td>1.5</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>NZDCHF</td>
                        <td>New Zealand Dollar vs. Swiss Franc</td>
                        <td>1.2</td>
                        <td>0.01</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>NZDJPY</td>
                        <td>New Zealand Dollar vs. Japanese Yen</td>
                        <td>1.3</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>NZDUSD</td>
                        <td>New Zealand Dollar vs. US Dollar</td>
                        <td>1.8</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>

                    <tr>
                        <td>USDCAD</td>
                        <td>US Dollar vs. Canadian Dollar</td>
                        <td>2.2</td>
                        <td>0.01</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>USDCHF</td>
                        <td>US Dollar vs. Swiss Franc</td>
                        <td>1.6</td>
                        <td>0.01</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>USDJPY</td>
                        <td>US Dollar vs. Japanese Yen</td>
                        <td>1.2</td>
                        <td>0.01</td>
                        <td>100</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="trading7">
            <table>
                <thead>
                    <tr>
                        <th>SYMBOL</th>
                        <th>DESCRIPTIONS</th>
                        <th>MIN SPREADS (pips)</th>
                        <th>MIN TRADE SIZE</th>
                        <th>MAX TRADE SIZE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>XAUUSD</td>
                        <td>Gold vs. US Dollar</td>
                        <td>23</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>XAUEUR</td>
                        <td>Gold vs. Euro</td>
                        <td>21</td>
                        <td>0.01</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>XAGUSD</td>
                        <td>Silver vs. US Dollar</td>
                        <td>109</td>
                        <td>0.01</td>
                        <td>20</td>
                    </tr>

                    <tr>
                        <td>XPDUSD</td>
                        <td>Palladium</td>
                        <td>31</td>
                        <td>0.01</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>XPTUSD</td>
                        <td>Platinum</td>
                        <td>35</td>
                        <td>0.01</td>
                        <td>10</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="trading8">
            <div class="flex flex-col">
                <div>
                    <p class="worry-text-green">
                        CFDs Indices
                    </p>
                </div>
                <div>
                    <p class="worry-text-white2">
                        Metabase's FX platforms also allow you to trade on the movements of all the main European and American indices, as well as Japan’s. Most of these CFDs are available both as Forward (with an expiration date) or Spot/Synthetic (no expiration date, overnight rollover/swap interest applies).
                    </p>
                </div>
            </div>
        </div>

        <div class="trading9">
            <table>
                <thead>
                    <tr>
                        <th>SYMBOL</th>
                        <th>DESCRIPTIONS</th>
                        <th>MIN SPREADS (pips)</th>
                        <th>MIN TRADE SIZE</th>
                        <th>MAX TRADE SIZE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#CHINA50</td>
                        <td>Spot China 50 (USD)</td>
                        <td>7.50</td>
                        <td>1</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>#NIK225</td>
                        <td>Spot Japan 225 (JPY)</td>
                        <td>15.00</td>
                        <td>10</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>#DE40</td>
                        <td>Spot Germany 40 (EUR)</td>
                        <td>2.00</td>
                        <td>1</td>
                        <td>200</td>
                    </tr>

                    <tr>
                        <td>#FR40</td>
                        <td>Spot France 40 (EUR)</td>
                        <td>1.60</td>
                        <td>1</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>#ES</td>
                        <td>Spot Spain 35 (EUR)</td>
                        <td>5.20</td>
                        <td>1</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>#CH</td>
                        <td>Spot Switzerland 20 (CHF)</td>
                        <td>3.14</td>
                        <td>1</td>
                        <td>100</td>
                    </tr>

                    <tr>
                        <td>#US500</td>
                        <td>Spot US 500 (USD)</td>
                        <td>0.65</td>
                        <td>1</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>#NAS100</td>
                        <td>Spot US Tech 100 (USD)</td>
                        <td>1.70</td>
                        <td>1</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>#GB100</td>
                        <td>Spot UK 100 (GBP)</td>
                        <td>1.60</td>
                        <td>1</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>#EU50</td>
                        <td>Spot EU Stocks 50 (EUR)</td>
                        <td>2.10</td>
                        <td>1</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>#US30</td>
                        <td>Spot US 30 (USD)</td>
                        <td>3.20</td>
                        <td>1</td>
                        <td>200</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="trading10">
            <div class="flex flex-col">
                <div>
                    <p class="worry-text-green">
                        Stop Out Level
                    </p>
                </div>
                <div>
                    <p class="worry-text-white3">
                        Subject to the limitations set forth in the General Terms and Conditions, the Risk Disclosure Statement and the Special Terms and Conditions for Forex to which we draw your attention, Metabase’s trading platforms are designed to automatically trigger a liquidation of open positions when the Margin Level ([equity/used margin] x 100) reaches the Stop Out level, which varies depending on the technology you are using (the “Automatic Liquidation System”).   <br><br>
                        The Automatic Liquidation System has been set up for the sole benefit of Metabase Ltd. While the Automatic Liquidation System aims at avoiding that the Client is losing more than the Forex Margin and while Metabase Ltd will ensure that, in the vast majority of cases, the Automatic Liquidation System is activated as soon as the Liquidation Percentage is reached, it is entitled but not obliged to do so. No warranty is given by Metabase Ltd in this regard. The Client may still suffer a loss much higher than the Forex Margin.
                    </p>
                </div>
            </div>
        </div>

        <div class="trading11">
            <div class="flex flex-col">
                <div>
                    <p class="worry-text-green">
                        Risk Warning
                    </p>
                </div>
                <div>
                    <p class="worry-text-white3">
                        The content of this guide is purely informative and does not constitute an offer or a recommendation to trade a specific product and is not to be understood as a piece of advice of any sort, in particular regarding trading, tax and legal questions. The information or opinion regarding a product expressed in this guide do not take into consideration the investment objectives, the assets, the experience or the knowledge of a single investor.   <br><br>
                        Metabase Ltd and its employees shall in no event be liable for damages or losses arising directly or indirectly from decisions made on the basis of the content of this guide. The content of this guide was produced by Metabase Ltd as per the current date and may be subject to change without prior notification. Although the content of this guide has been obtained from and is based upon sources that Metabase Ltd believes to be reliable, Metabase Ltd assumes no responsibility for the quality, correctness, timeliness or completeness of the content of this guide. This guide may not be reproduced in part or full without the written prior consent of Metabase Ltd.  Forex transactions are highly speculative, involve an extreme degree of risk and are generally suitable only for persons who can assume and sustain a risk of loss in excess of their Forex margin. Forex transactions may, by their nature, generate losses that are in theory unlimited. In the absence of prior intervention, the loss could greatly exceed all the client's assets deposited with the Metabase Ltd.
                    </p>
                </div>
            </div>
        </div>

        <div class="trading12">
            <div class="flex content-center">
                <img src="assets/image/trading/logobig.svg">
            </div>
        </div>

        <div class="trading13">
            <div class="wheat-container">
                <p class="open-text">OPEN YOUR INVESTMENT ACCOUNT</p>
            </div>
        </div>

        <div class="trading14">
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

        <div class="trading15">
            <div class="flex flex-col">
                <div>
                    <p class="worry-text-green">
                        Disclaimer - Forex Trading Losses
                    </p>
                </div>
                <div>
                    <p class="worry-text-white3">
                        <span class="disclaimer-text-white">This disclaimer aims to clarify the following matters:</span>
                        <ol class="numbered-list">
                            <li>Risks of Forex Trading: The Forex trading market involves high volatility and may lead to investment losses. Forex investment is a high-risk activity that may result in the loss of invested capital.</li>
                            <li>Individual Differences: Each investor has different risk tolerance and investment objectives. Performance in Forex trading will vary due to individual differences.</li>
                            <li>Disclaimer: This company is not responsible for any Forex trading losses incurred by investors. All risks and losses in Forex trading will be borne by the investors.</li>
                            <li>Consultation and Education: This company encourages investors to seek independent financial and legal advice to understand the risks and legal responsibilities associated with Forex trading.</li>
                            <li>Investor Decision: Investors bear ultimate responsibility for their Forex trading decisions. Investors should carefully consider risks and only invest funds they can afford to lose.</li>
                            <li>Risk Management: Investors should take appropriate risk management measures, including stop-loss orders, to mitigate potential losses.</li>
                            <li>Trading Results: The results of Forex trading may vary due to market fluctuations. Past performance does not guarantee future results.</li>
                            <li>Market Manipulation: Investors are not allowed to engage in any market manipulation activities, including but not limited to manipulating prices, spreading false information, or abusing market rules.</li>
                        </ol>
                        <br>
                        <br>
                        <span class="note-text">
                            Please note that this company does not provide any guarantees or representations, either express or implied, regarding the success or failure of Forex trading results or any specific investment strategy. Investors should carefully read and understand these risks before engaging in Forex trading and seek professional advice when necessary.
                        </span> 
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection