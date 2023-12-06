@extends('0_0navbar.base')
@section('content')

<!-- MASUKIN HTML KALIAN DI BAWAH KOMEN INI -->
<link rel="stylesheet" href="assets/style_nana.css">

<p class="title">PELAPORAN KEJADIAN ATAU BENCANA</p>
<p class="subtitle">Laporkan segala kejadian kejahatan maupun bencana yang terjadi di sekitar Anda!</p>

<br><br>

<div class="container">
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
        <span class="text">Detail</span>
        <span class="text">Upload Bukti</span>
        <span class="text">Submit</span>
            <div class="progress-bar">
            <span class="indicator"></span>
            </div>
    </div>
    </div>    
    <!-- <div class="steps_text">
        <li class="step1_active">Lokasi Kejadian</li>
        <li class="step2_active">Detail</li>
        <li class="step3_active">Upload Bukti</li>
        <li class="step4">Submit</li>
    </div> -->

    
<p class="subtitle">Isi detail pada masing-masing kolom!</p>
<p class="subtitle">Kejadian/Peristiwa<span style="color: #DA1212; font-size: 25;">*</span></p>
    <form>
    <div class="form_kejadian">
        <select id="kejadian">
          <option value="" selected disabled>Pilih jenis kejadian/peristiwa</option>
          <option value="ba">Bencana Alam</option>
          <option value="kk">Kecelakaan Kerja</option>
          <option value="kl">Kecelakaan LanTas</option>
          <option value="lain">Lainnya</option>
        </select>
    </div>
    </form>
<p class="subtitle">Tanggal Kejadian<span style="color: #DA1212; font-size: 25;">*</span></p>
    <form>
        <input type="date" id="date" placeholder="Select your date">
    </form>
<p class="subtitle">Waktu Kejadian<span style="color: #DA1212; font-size: 25;">*</span></p>
    <form>
    <div class="form_kejadian">
        <select id="kejadian">
          <option value="" selected disabled>Pilih rentang waktu kejadian</option>
          <option value="ba">00.00 - 05.00</option>
          <option value="kk">05.01 - 11.59</option>
          <option value="kl">12.00 - 17.59</option>
          <option value="lain">18.00 - 23.59</option>
        </select>
    </div>
    </form>
    <p class="subtitle">Lokasi Kejadian<span style="color: #DA1212; font-size: 25;">*</span></p>
    <form>
        <textarea id="kronologi" placeholder="Tuliskan lokasi kejadian"></textarea>
    </form>
    
<div class="container">
    <div class="buttons">
        <button id="prev" disabled>Prev</button>
        <button id="next"><a href="/lapor2">Next</a></button>
    </div>
</div>
<div class="popup">
    <img src="">
    <

<!-- <script src="assets/stepper.js"></script> -->


<!-- <link rel="stylesheet" href="/assets/style_are1.css" />
<title>Report Page</title>
<script defer src="/assets/script_are1.js"></script>

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
    </div> -->

@stop