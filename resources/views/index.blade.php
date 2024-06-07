@extends('layouts.app')
@section('navbar')
    @include('layouts.navbar')
@endsection
@section('content')
    <div class="px-4 py-4 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="{{ Vite::asset('resources/images/gor.png') }}" alt="" width="162"
            height="126">
        <h1 class="display-5 fw-bold">GOR SIPARDANGOLAN</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Platform terpercaya bagi anda untuk menyewa lapangan yang anda butuhkan! Sebut saja lapangan
                yang anda butuhkan seperti lapangan badminton,ada di GOR SIPARDANGOLAN!</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3"><a href="{{ route('sewalapangan') }}"
                        style="text-decoration:none; color:whitesmoke;">Sewa Lapangan
                        Sekarang!</a></button>
                        <button type="button" class="btn btn-primary btn-lg px-4 gap-3"><a href="{{ route('login') }}"
                            style="text-decoration:none; color:whitesmoke;">Login</a></button>
                    <button type="button" class="btn btn-primary btn-lg px-4 gap-3"><a href="{{ route('register') }}"
                            style="text-decoration:none; color:whitesmoke;">Reister</a></button>          
            </div>
        </div>
    </div>

    <div class="b-example-divider"></div>

    <div class="mt-4 pt-4 px-5 mx-2 text-center">
        <h1 class="display-4 fw-bold">Sewa Lapangan Sesuai Kebutuhan Anda!</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Kami mengerti bahwa anda membutuhkan kecepatan dalam memilih layanan penyewaan lapangan
                untuk keperluan olahraga anda, tenang kami disini untuk membantu!</p>
        </div>
        <div class="overflow-hidden">
            <div class="container px-5">
                <img src="{{ Vite::asset('resources/images/lap1.jpg') }}" class="img-fluid border rounded-3 shadow mb-4"
                    alt="Example image" width="300" height="200" loading="lazy">
                <img src="{{ Vite::asset('resources/images/lap2.jpg') }}" class="img-fluid border rounded-3 shadow mb-4"
                    alt="Example image" width="300" height="200" loading="lazy">
                <img src="{{ Vite::asset('resources/images/lap3.jpg') }}" class="img-fluid border rounded-3 shadow mb-4"
                    alt="Example image" width="300" height="200" loading="lazy">
            </div>
        </div>
    </div>

    <div class="b-example-divider"></div>

    <div class="container col-xxl-8 px-4">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{ Vite::asset('resources/images/icon.png') }}" class="d-block mx-lg-auto img-fluid"
                    alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Ingin berolahraga dengan teman atau keluarga ?</h1>
                <p class="display-6">Booking aja lapangannya di GOR SIPARDANGOLAN!</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mt-5">
                    <button type="button" class="btn btn-primary btn-lg px-4 gap-3"><a href="{{ route('sewalapangan') }}"
                            style="text-decoration:none; color:whitesmoke;">Sewa Lapangan
                            Sekarang!</a></button>        
                </div>
            </div>
        </div>
    </div>
@endsection
