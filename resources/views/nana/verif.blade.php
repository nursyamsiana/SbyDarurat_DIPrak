@extends('0_0navbar.base2')
@section('content')

<!-- MASUKIN HTML KALIAN DI BAWAH KOMEN INI -->
<link rel="stylesheet" href="assets/style_detVerif.css">

<div class="top">
        <div class="left">
        <button class="back-button" onclick="goBack('/')"> < Back </button>
        </div>
        <div class="right">
            <div class="reportId">
                <p class="report_Id">Report ID: 230926XXXX</p>
            </div>
            <div class="divide">
                <p class="divider">|</p>
            </div>
            <div class="verif_status">
                <p class="verif">Verified</p>
            </div>
        </div>
    </div>

    <div class="line"></div>

    <div class="box">
        <div class="container">
            <div class="steps">
                <span class="circle active">1</span>
                <span class="circle active">2</span>
                <span class="circle active">3</span>
                <span class="circle">4</span>
                <div class="progress-bar">
                    <span class="indicator"></span>
                </div>
            </div>
            <div class="steps_text">
                <span class="text_active">Report Sent (02 - 03 - 2023)</span>
                <span class="text_active">Validation Report (02 - 03 - 2023)</span>
                <span class="text_active">Verification Process (02 - 03 - 2023)</span>
                <span class="text_active">Report Verified (02 - 03 - 2023)</span>
                <div class="progress-bar">
                </div>
            </div>
        </div>
    </div>

    <div class="bottom">
        <div class="detail_left">
            <div class="detailReport">
                <p class="detail_report">DETAIL REPORT</p>
                <p class="reportBy">Report:</p>
                <p class="emailUser">member@gmail.com</p>
                <p class="reportTo">To:</p>
                <p class="emailGov">police-surabaya@go.id</p>
            </div>
        </div>


        <div class="detail_right"> 
            <div class="lineDetail_top"></div>
            <div class="lineDetail_side"></div>
            <div class="container">
                <!-- <div class="steps">
                    <span class="circle active"></span>
                    <span class="circle active"></span>
                    <span class="circle active"></span>
                    <div class="progress-bar">
                        <span class="indicator"></span>
                    </div>
                </div> -->
                <div class="status">
                    <span class="statusLabel">Topic</span>
                    <p class="detail_status">Lorem ipsum</p>
                    <span class="statusLabel">Fill Content</span>
                    <p class="detail_status">Lorem ipsum</p>
                    <span class="statusLabel">Verified By</span>
                    <p class="detail_status">Lorem ipsum</p>
                    <div class="progress-bar">
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop