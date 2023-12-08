@extends('0_0navbar.base')
@section('title')
@section('content')

<!-- MASUKIN HTML KALIAN DI BAWAH KOMEN INI -->
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
            </div>
    </div>
</div>    
    
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

    <script>
    progressBar = document.querySelector(".indicator");
    progressBar.style.width = `50%`;
    </script>

@endsection