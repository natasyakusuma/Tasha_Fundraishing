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
                                        <p>{{ \Carbon\Carbon::parse($responseData['data']['start_date'])->format('d-m-Y') }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Mulai Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p>{{ \Carbon\Carbon::parse($responseData['data']['start_date'])->format('d-m-Y') }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Akhir Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p>{{ \Carbon\Carbon::parse($responseData['data']['closing_date'])->format('d-m-Y') }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Sisa Waktu Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p>{{ $remainingDate }} hari</p>
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
                                        <p>Rp
                                            {{ number_format($responseData['data']['target_funding_amount'], 0, ".", ".") }}
                                        </p>
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
                                        <a href="{{ $responseData['data']['prospektus_url'] }}"><i
                                                class='bx bxs-dashboard icon'></i></a>
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
                               <div class="row">
                                <div class="col-10">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                        <div id="progress-max"
                                            data-value="{{ $responseData['data']['target_funding_amount'] }}"></div>
                                        <div id="progress-input"
                                            data-value="{{ $responseData['data']['current_funding_amount'] }}"></div>
                                    </div>
                                </div>

                                <div class="col-2">
                                    <p id="calculate-value"></p>
                                </div>
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
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($responseData['data']['banners'] as $key => $data)
                                        <div class="carousel-item {{ $key == '0' ? 'active' : '' }}">
                                            <img src="{{ $data['url'] }}" class="d-block w-100" alt="...">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>

                        @if ($responseData['data']['status'] == "ACHIEVED")
                            <a type="submit" class="w-100 btn btn-primary mb-3 shadow"
                                href="{{ route('detail_withdraw_project', $responseData['data']['id']) }}">
                                <p> Penarikan Dana </p>
                            </a>
                        @else
                            <a class="w-100 btn btn-primary mb-3 shadow disabled" href="#">
                                <p> Penarikan Dana </p>
                            </a>
                        @endif
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
