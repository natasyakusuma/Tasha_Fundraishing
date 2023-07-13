@extends('layouts.app')

@section('title')
Login
@endsection

@section('content')
<main>
    <h1 class="title"> Welcome Thea Anugrah Felicia</h1>
    <p> Ajukan Proyek Anda Untuk Mendapatkan Pendanaan </p>
    <div class=" container">
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="{{asset('img/undraw_hello_re_3evm 1.png')}}" alt="">
            </div>

            <div class="col-md-6">
                <div class="info-data">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="head">
                                    <div>
                                        <p> Jumlah Daftar Proyek </p>
                                        <h2> {{ $responseData['data']['total_campaign'] }} </h2>
                                        <p> Proyek </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card">
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
                            <div class="card">
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
                            <div class="card">
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
            <div class=" content-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="head">
                            <h3> Produksi Batik Tulis dan Cap</h3>
                        </div>
                        <h2> Rp.2000.0000</h2>
                        <p> Ina Cookies merupakan produsen kue kering yang secara legal berdiri sejak 2012. Namun,
                            secara resmi beroperasi pada tahun 1992 dengan berfokus pada bisnis produsen kue kering
                            skala rumahan yang dirintis oleh pasangan suami-istri yang dimana terus berkembang hingga
                            dikelola secara profesional dengan kemampuan produksi dan jaringan distribusi terbesar di
                            indonesia.</p>
                    </div>


                    <div class="col-md-6 bar-chart">
                        <div class="head">
                            <h3> Progress Pengumpulan Dana</h3>
                        </div>
                        <div class="container">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                                <div id="progress-input" data-value="40"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <p>
                                    Total Dana yang Terkumpul
                                </p>

                            </div>

                            <div class="col-4" style="color : #1775F1">
                                <p>
                                    Rp.10.000.000
                                </p>
                            </div>
                        </div>
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

<script src="{{ asset('js/bar.js') }}"></script>
@endpush
