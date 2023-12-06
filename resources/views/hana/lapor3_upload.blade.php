@extends('0_0navbar.base')
@section('content')

<!-- MASUKIN HTML KALIAN DI BAWAH KOMEN INI -->

    <link rel="stylesheet" href="assets/style_upload.css">
    <link rel="stylesheet" href="assets/style_nana.css">

<p class="title">PELAPORAN KEJADIAN ATAU BENCANA</p>
<p class="subtitle">Laporkan segala kejadian kejahatan maupun bencana yang terjadi di sekitar Anda!</p>

<br><br>

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
            <span class="indicator"></span>
            </div>
    </div>
    </div> 
    
    <!-- <div class="content">
        <header>
            <h2>PELAPORAN KEJADIAN ATAU BENCANA</h2>
            <p class="subtitle">Laporkan segala kejadian kejahatan maupun bencana yang ada di sekitar Anda!</p>
        </header>
        <section>
            <h2 class="a11y-hidden"></h2>
            <div class="O2KPzo">
                <div class="mn7INg xFSVYg"> 
                </div>
                <div class="mn7INg EfbgJE"> 
                </div>
            </div>
            <div class="bHBbO4">
                <div class="stepper">
                    <div class="stepper__step stepper__step--finish" aria-label="Lokasi kejadian" tabindex="0">
                        <div class="stepper__step-icon stepper__step-icon--finish" style="background: #93b1d2">
                            1
                        </div>
                        <div class="stepper__step-text">Lokasi kejadian
                        </div>

                    </div>
                    <div class="stepper__step stepper__step--finish" aria-label="Details" tabindex="0">
                        <div class="stepper__step-icon stepper__step-icon--finish" style="background: #93b1d2">
                            2
                        </div>
                        <div class="stepper__step-text">Details
                        </div>
                    </div>
                    <div class="stepper__step stepper__step--finish" aria-label="pesanan dikirimkan" tabindex="0">
                        <div class="stepper__step-icon stepper__step-icon--finish" style="background: #93b1d2">
                            3
                        </div>
                        <div class="stepper__step-text">Upload bukti
                        </div>

                    </div>
                    <div class="stepper__step stepper__step--finish" aria-label="Submit" tabindex="0">
                        <div class="stepper__step-icon stepper__step-icon--finish" style="background: rgb(224, 224, 224)">
                            4 
                        </div>
                        <div class="stepper__step-text">Submit
                        </div>

                    </div>

                    <div class="stepper__line">
                        <div class="stepper__line-background" style="background: rgb(224, 224, 224);">
                        </div>
                        <div class="stepper__line-foreground" style="width: calc((100% - 600px) * 1); background: #0C2180;">
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="upload-container">
                <div class="upload-section-container">
                        <div class="upload-section">
                            <div class="upload-icon">
                                <img src="assets/icons/cloud.png" alt="upload"> 
                            </div>
                            <label for="file-input" class="file-label">
                                <span>Select File</span>
                            </label>
                            <input type="file" id="file-input" class="file-selector-input" multiple>
                            <div class="or-text">or drop your file here</div>
                    </div>
                </div>
            </div>
        
            <!-- Tombol button di bawah container -->
            <div class="submit-button-container">
                <button type="button" onclick="backButton()"><a href="/lapor2">Back</a></button>
                <button type="button" onclick="submitForm()"><a href="/lapor3_up2">Submit</a></button>
            </div>
        
            <div class="O2KPzo">
                <div class="mn7INg xFSVYg"> 
                </div>
                <div class="mn7INg EfbgJE"> 
                </div>
            </div>
        </section>
    </div>

    <!-- Your page content goes here -->

</body>
</html>


@stop