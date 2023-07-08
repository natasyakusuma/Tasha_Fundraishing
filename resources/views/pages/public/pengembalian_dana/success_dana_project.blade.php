@extends('layouts.app')

@section('title')
Dana Sukses
@endsection

@section('content')
<div class="success">
    <div class="container">
        <div class="card p-2">
            <div class="card-body">
                <header>
                    <img src="{{ asset('img/Logo2.png') }}" alt="">
                </header>

                <main>
                    <img src="{{ asset('img/undraw_join_re_w1lh 1.png') }}" alt="">
                    <h2>
                        Terimakasih Telah Melakukan Penarikan Dana Proyek Anda
                    </h2>

                    <p> Anda telah melakukan penarikan dana proyek Anda, Tim Kami sedang melakukan verifikasi 3x24!</p>

                    <div>
                        <a href="{{route('dashboard')}}" class="col-12 btn btn-primary mb-3 shadow"> Kembali Ke Halaman
                            Utama </a>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
<link rel="stylesheet" href={{ asset('sass/app.css') }}>
@endpush
