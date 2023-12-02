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
        <span class="text_active">Detail</span>
        <span class="text_active">Upload Bukti</span>
        <span class="text_active">Submit</span>
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
<p class="subtitle">Kronologi Kejadian<span style="color: #DA1212; font-size: 25;">*</span></p>
    <form>
        <textarea id="kronologi" placeholder="Jabarkan kronologi kejadian"></textarea>
    </form>
<p class="subtitle">Gambar dan/atau Video Bukti<span style="color: #DA1212; font-size: 25;">*</span></p>
    <form enctype="multipart/form-data" action="/proses_upload.php" method="post">
        <input type="file" id="lampiran" name="lampiran" accept=".pdf, .doc, .jpg, .png">
    </form>

<div class="container">
    <div class="buttons">
        <button id="prev" disabled>Prev</button>
        <button id="next">Next</button>
    </div>
</div>

<script src="assets/script.js"></script>
@stop