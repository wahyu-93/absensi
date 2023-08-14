@extends('layouts.master')

@section('header')
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">E-Presensi</div>
        <div class="right"></div>
    </div>
@endsection

<style>
    #webcam-capture  video {
        display: inline-block;
        width: 100% !important;
        margin: auto;
        height: auto !important;
        border-radius: 15px
    }
</style>


@section('content')
    <div class="row" style="margin-top : 70px; margin-left: 10px; margin-right: 10px">
        <input type="hidden" name="lokasi" id="lokasi">
        <div id="webcam-capture"></div>
    </div>

    <div class="row">
        <button class="btn btn-primary btn-sm">Absen Masuk</button>
    </div>
@endsection

@push('my-script')
<script>    
    Webcam.set({
        height : 480,
        width : 640,
        image_format : 'jpeg',
        jpeg_quality : 100
    });

    Webcam.attach('#webcam-capture')
    
    const cam = document.getElementById('webcam-capture')
    cam.style.margin = 'auto'

    // lokasi
    const lokasi = document.getElementById("lokasi");
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        lokasi.innerHTML = "Geolocation is not supported by this browser.";
    }

    function showPosition(position) {
        lokasi.value = position.coords.latitude + "," + position.coords.longitude;
    }
</script>
@endpush