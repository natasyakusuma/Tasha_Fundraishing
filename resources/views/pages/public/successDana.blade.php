@extends('layouts.app')

@section('title')
Dana Sukses
@endsection

@section('content')
<div class="success-dana">
    <div class="container">
        <div class="card p-2">
            <div class="card-body">
                <header>
                    <img src="{{ asset('img/Logo2.png') }}" alt="">
                </header>

                <main>
                    <img src="{{ asset('img/undraw_completed_03xt 1.png') }}" alt="">
                    <h2>
                        Terimakasih Telah Melakukan Pengajuan Pendanaan Proyek Anda
                    </h2>

                    <p> Anda telah melakukan pengajuan laporan proyek Anda, Tim Kami sedang melakukan verifikasi proyek
                        Anda! </p>

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
