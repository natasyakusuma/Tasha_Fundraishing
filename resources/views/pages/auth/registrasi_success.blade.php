@extends('layouts.auth')

@section('title')
Registration Success
@endsection

@section('content')
<div class="registrasi-success">
    <div class="container">
        <div class="card p-2">
            <div class="card-body">
                <header>
                    <img src="{{ asset('img/Logo2.png') }}" alt="">
                </header>

                <main>
                    <img src="{{ asset('img/undraw_mobile_login_re_9ntv 1.png') }}" alt="">
                     <h2>
                        Terima Kasih Telah Melakukan Registrasi
                     </h2>
                     <div class="col-12">
                        <a href="{{route('login')}}"
                            class="col-12 btn btn-primary mb-3 shadow"> Kembali Ke Halaman Login </a>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection
