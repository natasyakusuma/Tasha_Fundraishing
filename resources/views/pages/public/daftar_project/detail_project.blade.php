@extends('layouts.app')

@section('title')
Proyek Saya
@endsection

@section('content')
<div class="detail-project">
    <div class="container">
        <div class="row">
            <h2> Detail Proyek </h2>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-detail">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <p> <b> Nama Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p>{{ $responseData['data']['name'] }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Deskripsi Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p>{{ $responseData['data']['description'] }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Tanggal Mulai </b> </p>
                                    </td>
                                    <td>
                                        <p>{{ $responseData['data']['start_date'] }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Mulai Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p>{{ $responseData['data']['closing_date'] }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Akhir Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p style="color: red">- ga ada di return BE -</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Sisa Waktu Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p style="color: red">- ga ada di return BE -</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Tipe Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p>{{ $responseData['data']['type'] }}</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Kategori </b> </p>
                                    </td>
                                    <td>
                                        <p>{{ $responseData['data']['category'] }}</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Tenor </b> </p>
                                    </td>
                                    <td>
                                        <p>{{ $responseData['data']['tenors'] }} Bulan</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Total Dana Pengajuan </b> </p>
                                    </td>
                                    <td>
                                        <p>Rp {{ number_format($responseData['data']['target_funding_amount'], 0, ".", ".") }}</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Status </p>
                                    </td>
                                    <td>
                                        <button class="btn btn-verification" disabled style="pointer-events: none;">
                                            <span>{{ $responseData['data']['status'] }}</span>
                                        </button>
                                    </td>
                                    
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Dokumen Proyektus </b> </p>
                                    </td>
                                    <td>
                                        
                                        <a href="{{ $responseData['data']['prospektus_url'] }}"><i class='bx bxs-dashboard icon'></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6 ">
                <div class="card">
                    <div class="card-up">
                        <div class="card-body mb-5">
                            <h2> Progress Dana Terkumpul</h2>
                            <div class="container">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                    <div id="progress-max" data-value="{{ $responseData['data']['target_funding_amount'] }}"></div>
                                    <div id="progress-input" data-value="{{ $responseData['data']['current_funding_amount'] }}"></div>
                                </div>
                            </div>

                            {{-- <div class="row">
                                <div class="col-md-2">
                                    <span class="bullet">&#8226;</span>
                                </div>

                                <div class="col-md-10">
                                    <p> Dana Sudah Terkumpul </p>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-down">
                        <div class="card-body">
                            <div class="head">
                                <h2>
                                    Gambar
                                </h2>
                            </div>
                            <p style="color: red">- ga ada di return BE -</p>
                            <div id="carouselControls" class="carousel slide" data-ride="carousel" data-interval="3000">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{asset('img/image25.png')}}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('img/image25.png')}}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('img/image25.png')}}" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only"></span>
                                </a>
                                <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only"></span>
                                </a>
                            </div>
                            
                            
                        </div>

                        <div class="row">
                            <a type="submit" class="col-12 btn btn-primary mb-3 shadow" href="{{route('detail_withdraw_project')}}">
                                <p> Penarikan Dana </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('prepend-script')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endpush

@push('addon-script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="{{ asset('js/bar.js') }}"></script>
@endpush
