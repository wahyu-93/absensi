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

@section('content')
    <div class="section full mt-2">
        <div class="section-title">Title</div>
        <div class="wide-block pt-2 pb-2">
            <div id="webcam-capture"></div>
        </div>

    </div>
@endsection

@push('my-script')
<script>
    Webcam.set({
        height : 480,
        width : 640,
        image_format : 'jpeg',
        jpeg_quality : 80
    });

    Webcam.attach('#webcam-capture')
</script>
@endpush