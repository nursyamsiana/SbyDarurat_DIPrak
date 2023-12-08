@extends('0_0navbar.base')
@section('title')
@section('content')

<!-- MASUKIN HTML KALIAN DI BAWAH KOMEN INI -->
<link rel="stylesheet" href="assets/style_nana.css">
<link rel="stylesheet" href="assets/style_popup.css">


<div class="container">
    <div class="steps">
        <span class="circle active">1</span>
        <span class="circle active">2</span>
        <span class="circle active">3</span>
        <span class="circle active">4</span>
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
            </div>
    </div>
    </div>    
    
<p class="subtitle">Isi detail pada masing-masing kolom!</p>
<p class="subtitle">Kejadian/Peristiwa<span style="color: #DA1212; font-size: 25;">*</span></p>
    <form>
    <div class="form_kejadian">
        <select id="kejadian">
          <option value="" selected disabled>Kecelakaan LanTas</option>
          <option value="ba">Bencana Alam</option>
          <option value="kk">Kecelakaan Kerja</option>
          <option value="kl">Kecelakaan LanTas</option>
          <option value="lain">Lainnya</option>
        </select>
    </div>
    </form>
<p class="subtitle">Tanggal Kejadian<span style="color: #DA1212; font-size: 25;">*</span></p>
    <form>
        <input type="date" id="date" placeholder="05/12/2023">
    </form>
<p class="subtitle">Waktu Kejadian<span style="color: #DA1212; font-size: 25;">*</span></p>
    <form>
    <div class="form_kejadian">
        <select id="kejadian">
          <option value="" selected disabled>00.00-05.00</option>
          <option value="ba">00.00 - 05.00</option>
          <option value="kk">05.01 - 11.59</option>
          <option value="kl">12.00 - 17.59</option>
          <option value="lain">18.00 - 23.59</option>
        </select>
    </div>
    </form>
<p class="subtitle">Kronologi Kejadian<span style="color: #DA1212; font-size: 25;">*</span></p>
    <form>
        <textarea id="kronologi" placeholder="terjadi kecelakaan akibat pengendara nekat menerobos lampu merah hingga menabrak pohon"></textarea>
    </form>
<p class="subtitle">Foto/Video Bukti<span style="color: #DA1212; font-size: 25;">*</span></p>
    <form enctype="multipart/form-data" action="/proses_upload.php" method="post">
        <input type="file" id="lampiran" placeholder="bukti.jpg" name="lampiran" accept=".pdf, .doc, .jpg, .png">
    </form>




<div class="container">
    <div class="buttons">
        <button id="prev"><a href="/lapor3_up2">Prev</a></button>
        <button type="submit" id="next" onclick="openPopup()">Submit</button>
    </div>


<div class="popup" id="popup">
    <img src="{{ asset('assets/icons/warning.png') }}">
        <h2>Apakah Anda yakin?</h2>
        <p>*cek ulang form pelaporan sebelum melakukan submit</p>
        <button type="button" class="button-alert1" onclick="openPopup2()">Submit Form
        </button>
        <button type="button" class="button-alert2" onclick="closePopup()">Back</button>
</div>


<div class="popup2" id="popup2">
    <img src="{{ asset('assets/icons/megaphone2.png') }}">
        <h2>Pelaporan telah diterima</h2>
        <p>*proses verifikasi dapat dipantau melalui "Notifikasi" pada navbar</p>
        <button type="button" class="button-alert1"><a href="/status_verif">Check Reports</a>
        </button>
        <button type="button" class="button-alert2"><a href="/">Back to Home</a></button>
</div>
</div>

<script>
    let popup = document.getElementById("popup");
    let popup2 = document.getElementById("popup2");

    function openPopup() {
        popup.classList.add("open-popup");
    }

    function openPopup2() {
        popup2.classList.add("open-popup");
        popup.classList.remove("open-popup");
    }

    function closePopup() {
        popup.classList.remove("open-popup");
    }

    progressBar = document.querySelector(".indicator");
    progressBar.style.width = `100%`;
</script>

@endsection