@extends('0_0navbar.base')
@section('title')
@section('content')

<!-- MASUKIN HTML KALIAN DI BAWAH KOMEN INI -->
<link rel="stylesheet" href="assets/style_upload.css">
<link rel="stylesheet" href="assets/style_popup.css">
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
        <span class="text_active">Lokasi Kejadian</span>
        <span class="text_active">Detail</span>
        <span class="text_active">Upload Bukti</span>
        <span class="text">Submit</span>
            <div class="progress-bar">
            </div>
    </div>
</div> 

<div class="upload-container">
    <div class="upload-section-container">
        <div class="upload-section">
            <div class="upload-icon">
                <img src="assets/icons/cloud.png" alt="upload" > 
            </div>
            <label for="file-input" class="file-label">
                <span>Select File</span>
            </label>
                <input type="file" id="file-input" class="file-selector-input" multiple>
            <div class="or-text" onclick="openPopup()">or drop your file here</div>

                <div class="popup" id="popup">
                    <img src="{{ asset('assets/icons/warning.png') }}">
                    <h2>Gagal :(</h2>
                    <p>*ukuran file terlalu besar/koneksi internet kurang stabil</p>
                    
                    <button type="button" class="button-alert1">
                    <label for="file-input">Reupload the Report</label>    
                    </button>
                    
                    <input type="file" id="file-input" class="file-selector-input" multiple>
                    <button type="button" class="button-alert2" onclick="closePopup()" >Cancel the Report</button>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="buttons">
        <button id="prev"><a href="/lapor2">Prev</a></button>
        <button id="next"><a href="/lapor3_up2">Next</a></button>
    </div>
</div>


<script>
    let popup = document.getElementById("popup");
    
    function openPopup(){
        popup.classList.add("open-popup")
    }
        
    function closePopup(){
        popup.classList.remove("open-popup")
    }

    progressBar = document.querySelector(".indicator");
    progressBar.style.width = `80%`;
</script>


@endsection