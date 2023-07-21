@extends('layouts.app')

@section('title')
Login
@endsection

@section('content')
<main>
    <h1 class="title"> Welcome Thea Anugrah Felicia</h1>
    <p> Ajukan Proyek Anda Untuk Mendapatkan Pendanaan! </p>

    <div class=" container">
        <div class="row">
            <div class="col-md-6 d-flex">
                <img class="img-fluid banner" src="{{asset('img/undraw_hello_re_3evm 1.png')}}" alt="">
            </div>

            <div class="col-md-6">
                <div class="info-data">
                    <div class="row">
                        <div class="col-6">
                            <div class="card shadow">
                                <div class="head">
                                    <div>
                                        <p> Jumlah Daftar Proyek </p>
                                        <h2> {{ $responseData['data']['total_campaign'] }} </h2>
                                        <p class=""> Proyek </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card shadow">
                                <div class="head">
                                    <div>
                                        <p> Jumlah Laporan Proyek </p>
                                        <h2> {{ $responseData['data']['total_campaign_report'] }} </h2>
                                        <p> Proyek </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 mt-3">
                            <div class="card shadow">
                                <div class="head">
                                    <div>
                                        <p> Total Pengembalian Dana </p>
                                        <h2> {{ $responseData['data']['total_payment'] }} </h2>
                                        <p> Proyek </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 mt-3">
                            <div class="card shadow">
                                <div class="head">
                                    <div>
                                        <p> Total Penarikan Dana </p>
                                        <h2> {{ $responseData['data']['total_withdraw'] }} </h2>
                                        <p> Proyek </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Data  -->
        <div class="data">
            <div class="content-data shadow">

                <div class="carousel-button d-flex justify-content-end">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <img src="{{asset('img/Arrow_LeftSquare.png')}}" alt="">
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <img src="{{asset('img/Arrow_RightSquare.png')}}" alt="">
                    </button>
                </div>

                <!-- Carousel  -->
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($responseData['data']['campaigns'] as $key => $data)
                        <div class="carousel-item {{ $key == '0' ? 'active' : '' }}">
                            <div class="row">
                                <div class="col-md-6 content-detail">
                                    <div class="head">
                                        <h3>{{ $data['name'] }}</h3>
                                    </div>
                                    <h2>Rp {{ number_format($data['target_funding_amount'], 0, ".", ".") }}</h2>
                                    <p>{{ $data['description'] }}</p>
                                </div>

                                <div class="col-md-6 bar-chart">
                                    <div class="head">
                                        <h3> Progress Pengumpulan Dana</h3>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-11">
                                            <div class="container p-0">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                    <div id="progress-max"
                                                        data-value="{{ $data['target_funding_amount'] }}">
                                                    </div>
                                                    <div id="progress-input"
                                                        data-value="{{ $data['current_funding_amount'] }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-1 font-bold">
                                            <p id="calculate-value" class="mt-1"></p>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <p>
                                            <b>Total Dana yang Terkumpul</b>
                                        </p>
                                        <div style="color : #1775F1; font-weight : bold">
                                            <p>Rp {{ number_format($data['current_funding_amount'], 0, ".", ".") }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('prepend-script')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endpush

@push('addon-script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="{{ asset('js/bar-carousel.js') }}"></script>
@endpush
