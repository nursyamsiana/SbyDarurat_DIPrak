@extends('0_0navbar.base')
@section('content')

<!-- MASUKIN HTML KALIAN DI BAWAH KOMEN INI -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles_uswa.css">
    <title>Lapor</title>
</head>
<body>

     <div class="content">
        <header>
            <h2>PELAPORAN KEJADIAN ATAU BENCANA</h2>
            <p class="subtitle">Laporkan segala kejadian kejahatan maupun bencana yang ada di sekitar Anda!.</p>
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
                        <div class="stepper__step-icon stepper__step-icon--finish">
                            1
                        </div>
                        <div class="stepper__step-text">Lokasi kejadian
                        </div>

                    </div>
                    <div class="stepper__step stepper__step--finish" aria-label="Details" tabindex="0">
                        <div class="stepper__step-icon stepper__step-icon--finish">
                            2
                        </div>
                        <div class="stepper__step-text">Details
                        </div>
                    </div>
                    <div class="stepper__step stepper__step--finish" aria-label="pesanan dikirimkan" tabindex="0">
                        <div class="stepper__step-icon stepper__step-icon--finish">
                            3
                        </div>
                        <div class="stepper__step-text">Upload bukti
                        </div>

                    </div>
                    <div class="stepper__step stepper__step--finish" aria-label="Submit" tabindex="0">
                        <div class="stepper__step-icon stepper__step-icon--finish1"  style="background: rgb(224, 224, 224)">
                            4
                        </div>
                        <div class="stepper__step-text">Submit
                        </div>

                    </div>

                    <div class="stepper__line">
                        <div class="stepper__line-background" style="background: rgb(224, 224, 224);">
                        </div>
                        <div class="stepper__line-foreground" style="width: calc((100% - 500px) * 1); background: #0C2180;">
                        </div>
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
        
            <!-- Tombol button di bawah container -->
            <div class="submit-button-container">
                <button type="button" class="submit-button" onclick="backButton()">Back</button>
                <button type="button" class="submit-button" onclick="openFailedPopup()">Submit</button>
                <div class="popup" id="failed-popup">
                    <img src="assets/icons/warning.png">
                    <h2 class="failed-alert">Failed :(</h2>
                    <button type="button" class="button-alert1" onclick="openConfirmPopup()" >Reupload the Report</button>
                    <button type="button" class="button-alert2" onclick="closeFailedPopup()" >Cancel the Report</button>
                </div> 
                <div class="popup" id="confirm-popup">
                    <img src="assets/icons/sirine.png">
                    <h2 class="failed-alert">Are you sure?</h2>
                    <button type="button" class="button-alert1" onclick="openSuccessPopup()" >Yes</button>
                    <button type="button" class="button-alert2" onclick="closeConfirmPopup()" >No</button>
                </div> 
                <div class="popup" id="success-popup">
                    <img src="assets/icons/megaphone2.png">
                    <h2 class="failed-alert">Success!</h2>
                    <p class="subtext">Wait for the next step or</p>
                    <button type="button" class="button-alert3" onclick="closeSuccessPopup()" >Click Here</button>
                </div> 
                
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
    <script>
        function removeFile(containerId) {
           var container = document.getElementById(containerId);
           container.innerHTML = ''; // Hapus konten di dalam kontainer
        }

        let failedPopup = document.getElementById("failed-popup");
        function openFailedPopup(){
            failedPopup.classList.add("open-popup")
        }
        function closeFailedPopup(){
            failedPopup.classList.remove("open-popup")
        }

        let confirmPopup = document.getElementById("confirm-popup")
        function openConfirmPopup(){
            closeFailedPopup()
            confirmPopup.classList.add("open-popup")
        }
        function closeConfirmPopup(){
            confirmPopup.classList.remove("open-popup")
        }

        let successPopup = document.getElementById("success-popup")
        function openSuccessPopup(){
            closeConfirmPopup()
            successPopup.classList.add("open-popup")
        }

        function closeSuccessPopup() {
            successPopup.classList.remove("open-popup")
        }
     </script>
</body>
</html>

@stop

