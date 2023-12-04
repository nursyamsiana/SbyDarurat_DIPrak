@extends('0_0navbar.base')
@section('content')

<!-- MASUKIN HTML KALIAN DI BAWAH KOMEN INI -->
<link rel="stylesheet" href="style_are2.css" />
<title>Report Page</title>
<script defer src="script_are2.js"></script>

<div class="box">
    <div class="page">
        <div class="laporan">
            <div class="pelaporan">
                PELAPORAN KEJADIAN / BENCANA
            </div>
            <div class="desc">
                Laporkan segala kejadian kejahatan maupun bencana yang ada di sekitar Anda!
            </div>

            <div class="steps">
                <span class="circle active">1</span>
                <span class="circle active">2</span>
                <div class="progress-bar-active">
                    <span class="indicator"></span>
                </div>
                <span class="circle">3</span>
                <span class="circle">4</span>
                <div class="progress-bar">
                    <span class="indicator"></span>
                </div>
            </div>
            <div class="steps_text">
                <span class="text_active">kronologi Kejadian</span>
                <span class="text_active">Detail</span>
                <span class="text_active">Upload Bukti</span>
                <span class="text_active">Submit</span>
                <div class="progress-bar">
                    <span class="indicator"></span>
                </div>
            </div>

            <div class="section"></div>

            <div class="detail">
                Isi detail pada masing-masing kolom
            </div>

            <div class="section"></div>

            <div class="form-group">
                <div class="label">
                    <label for="tanggalKejadian">Tanggal Kejadian</label><span class="important">*</span>
                </div>
                <div class="answer">
                    <input type="date" id="tanggalKejadian" name="tanggalKejadian" class="text-box">
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label for="waktuKejadian">Waktu Kejadian (WIB)</label><span class="important">*</span>
                </div>
                <div class="answer">
                    <div class="select-answer">
                        <span class="dropdown">Pilih Waktu Kejadian</span>
                        <div class="caret"></div>
                    </div>
                    <ul class="menu">
                        <li class="active">Dini hari (00.00-05.59 AM)</li>
                        <li>Pagi hari (06.00-12.00 PM)</li>
                        <li>Siang hari (12.01-17.00 PM)</li>
                        <li>Malam hari (17.01-23.59 PM)</li>
                    </ul>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label for="kronologiKejadian">Kronologi Kejadian</label><span class="important">*</span>
                </div>
                <div class="answer">
                    <input type="text" id="kronologiKejadian" name="kronologiKejadian" class="text-box"
                        placeholder="Tulis kronologi kejadian">
                </div>
            </div>

            <div class="buttons">
                <button id="back">Back</button>
                <button id="next">Next</button>
            </div>
        </div>
    </div>


@stop