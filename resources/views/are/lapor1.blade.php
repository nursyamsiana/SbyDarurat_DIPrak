@extends('0_0navbar.base')
@section('content')

<!-- MASUKIN HTML KALIAN DI BAWAH KOMEN INI -->
<link rel="stylesheet" href="style_are1.css" />
<title>Report Page</title>
<script defer src="script_are1.js"></script>

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
                <span class="circle">2</span>
                <span class="circle">3</span>
                <span class="circle">4</span>
                <div class="progress-bar">
                    <span class="indicator"></span>
                </div>
            </div>
            <div class="steps_text">
                <span class="text_active">Lokasi Kejadian</span>
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
                    <label for="jenisKejadian">Jenis Kejadian</label><span class="important">*</span>
                </div>
                <div class="answer">
                    <div class="select-answer">
                        <span class="dropdown">Pilih Jenis Kejadian</span>
                        <div class="caret"></div>
                    </div>
                    <ul class="menu">
                        <li class="active">Kejahatan</li>
                        <li>Bencana</li>
                    </ul>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label for="jenisKejadianDetail">Jenis Kejadian Bencana/Kejahatan</label><span
                        class="important">*</span>
                </div>
                <div class="answer">
                    <div class="select-answer">
                        <span class="dropdown">Pilih Jenis Kejadian</span>
                        <div class="caret"></div>
                    </div>
                    <ul class="menu">
                        <li class="active">Kebakaran</li>
                        <li>Kecelakaan Infrastruktur</li>
                        <li>Kecelakaan Lab</li>
                        <li>Bencana Alam</li>
                        <li>Lainnya</li>
                    </ul>
                </div>
            </div>

            <div class="form-group">
                <div class="label">
                    <label for="lokasiKejadian">Lokasi Kejadian</label><span class="important">*</span>
                </div>
                <div class="answer">
                    <input type="text" id="lokasiKejadian" name="lokasiKejadian" class="text-box"
                        placeholder="cth: Jl. Malam, No 1001">
                </div>
            </div>

            <div class="buttons">
                <button id="next">Next</button>
            </div>
        </div>
    </div>

@stop