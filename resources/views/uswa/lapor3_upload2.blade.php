@extends('0_0navbar.base')
@section('title')
@section('content')

<!-- MASUKIN HTML KALIAN DI BAWAH KOMEN INI -->
<link rel="stylesheet" href="assets/styles_uswa.css">

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
                     <div class="upload-section " id="upload-photo-section">
                        <label for="upload-photo">Uploaded Photo</label>   
                        <!-- Tambahkan ruang untuk file yang diupload -->
                        <span id="uploaded-photo-container"></span>  
                        <!-- Tambahkan ikon "x" untuk menghapus file -->
                        <span class="remove-file" onclick="removeFile('uploaded-photo-container')">&#10006;</span>
                    </div>
                    <div class="upload-section" id="upload-video-section">
                        <label for="upload-video">Uploaded Video</label>
                        <span id="uploaded-video-container"></span>  
                        <!-- Tambahkan ikon "x" untuk menghapus file -->
                        <span class="remove-file" onclick="removeFile('uploaded-video-container')">&#10006;</span>
                    </div>
                </div>
            </div>
        
            
        
<div class="container">
    <div class="buttons">
        <button id="prev"><a href="/lapor3_up1">Prev</a></button>
        <button id="next"><a href="/lapor4">Next</a></button>
    </div>
</div>

<script>
    progressBar = document.querySelector(".indicator");
    progressBar.style.width = `80%`;
</script>
@endsection