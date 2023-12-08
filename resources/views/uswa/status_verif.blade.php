@extends('0_0navbar.base2')
@section('content')

<!-- MASUKIN HTML KALIAN DI BAWAH KOMEN INI -->
<link rel="stylesheet" href="assets/style_status.css">
    
<body>
        <div class="report-container">
            <button class="back-button" onclick="goBack('/')"> < Back </button>
                <h1>Uploaded Reports List</h1>
            <div class="report-list">
                <!-- Menampilkan nama laporan dalam kotak baris yang berbeda -->
                <div class="report-item">
                    <span>  Nama Laporan 1</span>
                    <a href="/verif"><button class="accepted-button" onclick="redirectToAcceptedPage('laporan1')">Accepted ></button></a>
                </div>
                <div class="report-item">
                    <span>  Nama Laporan 2</span>
                    <button class="progress-button" onclick="redirectToProgressPage('laporan2')">In Progress ></button>
                </div>
                <div class="report-item">
                    <span>  Nama Laporan 3</span>
                    <button class="declined-button" onclick="redirectToDeclinedPage('laporan3')">Declined ></button>
                </div>
                <div class="report-item">
                    <span>  Nama Laporan 4</span>
                    <button class="accepted-button" onclick="redirectToAcceptedPage('laporan4')">Accepted ></button>
                </div>
                <div class="report-item">
                    <span>  Nama Laporan 5</span>
                    <button class="progress-button" onclick="redirectToProgressPage('laporan5')">In Progress ></button>
                </div>
                <div class="report-item">
                    <span>  Nama Laporan 6</span>
                    <button class="declined-button" onclick="redirectToDeclinedPage('laporan6')">Declined ></button>
                </div>
                <div class="report-item">
                    <span>  Nama Laporan 7</span>
                    <button class="accepted-button" onclick="redirectToAcceptedPage('laporan7')">Accepted ></button>
                </div>
                <div class="report-item">
                    <span>  Nama Laporan 8</span>
                    <button class="progress-button" onclick="redirectToProgressPage('laporan8')">In Progress ></button>
                </div>
                <div class="report-item">
                    <span>  Nama Laporan 9</span>
                    <button class="declined-button" onclick="redirectToDeclinedPage('laporan9')">Declined ></button>
                </div>
            </div>
        </div>
    

@stop