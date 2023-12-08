@extends('0_0navbar.base')
@section('title')
@section('content')

<!-- MASUKIN HTML KALIAN DI BAWAH KOMEN INI -->
<!-- <link rel="stylesheet" href="assets/style_nana.css">

<p class="title">PELAPORAN KEJADIAN ATAU BENCANA</p>
<p class="subtitle">Laporkan segala kejadian kejahatan maupun bencana yang terjadi di sekitar Anda!</p>

<br><br> -->

<div class="container">
    <div class="steps">
        <span class="circle active">1</span>
        <span class="circle active">2</span>
        <span class="circle">3</span>
        <span class="circle">4</span>
            <div class="progress-bar">
            <span class="indicator"></span>
            </div>
    </div>
    <div class="steps_text">
        <span class="text_active">Lokasi Kejadian</span>
        <span class="text_active">Detail</span>
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
<p class="subtitle">Kronologi Kejadian<span style="color: #DA1212; font-size: 25;">*</span></p>
    <form>
        <textarea id="kronologi" placeholder="Jabarkan kronologi kejadian"></textarea>
    </form>

    <div class="container">
    <div class="buttons">
        <button id="prev"><a href="/lapor1">Prev</a></button>
        <button id="next"><a href="/lapor3_up1">Next</a></button>
    </div>
</div>
<div class="popup">
    <img src="">
    <

<!-- <script src="assets/stepper.js"></script> -->



<!-- <link rel="stylesheet" href="/assets/style_are2.css" />
<title>Report Page</title>
<script defer src="/assets/script_are2.js"></script>

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
    </div> -->


@endsection