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
<<<<<<< HEAD

=======
>>>>>>> 33e7db5be10da1cb84b62c4c2146939475370573
                <div class="card">
                    <div class="card-detail">
                        <table class="mb-5">
                            <tbody>
                                <tr>
                                    <td>
                                        <p> <b> Nama Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p>Produksi Kue Kering Brand Ina Cookies Cake and Gift</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Deskripsi Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p>Ina Cookies telah memiliki pengalaman lebih dari 30 tahun dalam industri kue
                                            kering.
                                            Hal ini menjadikan Ina Cookies sangat peduli terhadap seluruh kualitas kue
                                            kering
                                            yang diproduksi sehingga menjalankan sistem manajemen .</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Tanggal Mulai </b> </p>
                                    </td>
                                    <td>
                                        <p>19-01-2023</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Mulai Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p>19-01-2024</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Akhir Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p>Ina Cookies telah memiliki pengalaman lebih dari 30 tahun dalam industri kue
                                            kering.
                                            Hal ini menjadikan Ina Cookies sangat peduli terhadap seluruh kualitas kue
                                            kering
                                            yang diproduksi sehingga menjalankan sistem manajemen .</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Sisa Waktu Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p> 10 Hari</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Tipe Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p> Musyarakah </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Kategori </b> </p>
                                    </td>
                                    <td>
                                        <p> Makanan </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Tenor </b> </p>
                                    </td>
                                    <td>
                                        <p> 1 Tahun </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Total Dana Pengajuan </b> </p>
                                    </td>
                                    <td>
                                        <p> Rp. 10.000.000 </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Status </p>
                                    </td>
                                    <td>
<<<<<<< HEAD
                                        <p style="color:rgb(197, 197, 20)"> Menunggu Verifikasi </p>
                                    </td>
=======
                                        <button class="btn btn-verification" disabled style="pointer-events: none;">
                                            <span>Menunggu Verifikasi</span>
                                        </button>
                                    </td>
                                    
>>>>>>> 33e7db5be10da1cb84b62c4c2146939475370573
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Dokumen Proyektus </b> </p>
                                    </td>
                                    <td>
                                        <i class='bx bxs-dashboard icon'></i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

<<<<<<< HEAD
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="card-up">
                            <div>
                                <canvas id="myChart"></canvas>
                            </div>
=======
            <div class="col-md-6 ">
                <div class="card">
                    <div class="card-up">
                        <div class="card-body mb-5">
                            <h2> Progress Dana Terkumpul</h2>
                            <div class="container">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                    <div id="progress-input" data-value="40"></div>
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
>>>>>>> 33e7db5be10da1cb84b62c4c2146939475370573
                        </div>
                    </div>
                </div>

                <div class="card">
<<<<<<< HEAD
                    <div class="card-body">
                        <div class="card-down">
=======
                    <div class="card-down">
                        <div class="card-body">
>>>>>>> 33e7db5be10da1cb84b62c4c2146939475370573
                            <div class="head">
                                <h2>
                                    Gambar
                                </h2>
                            </div>
<<<<<<< HEAD

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
=======
                            <div id="carouselControls" class="carousel slide" data-ride="carousel" data-interval="3000">
>>>>>>> 33e7db5be10da1cb84b62c4c2146939475370573
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{asset('img/image25.png')}}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
<<<<<<< HEAD
                                        <img class="d-block w-100" src="{{asset('img/image25.png')}}"
                                            alt="Second slide">
=======
                                        <img class="d-block w-100" src="{{asset('img/image25.png')}}" alt="Second slide">
>>>>>>> 33e7db5be10da1cb84b62c4c2146939475370573
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{asset('img/image25.png')}}" alt="Third slide">
                                    </div>
                                </div>
<<<<<<< HEAD
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
=======
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
                            <div class="col-12">
                                <a type="submit" class="col-12 btn btn-primary mb-3 shadow" href="{{route('proDana')}}">Penarikan Dana </a>
                            </div>
>>>>>>> 33e7db5be10da1cb84b62c4c2146939475370573
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
    @endsection

    @push('prepend-script')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    @endpush

    @push('addon-script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/chart.js') }}"></script>
    @endpush
=======
</div>
@endsection

@push('prepend-script')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endpush

@push('addon-script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="{{ asset('js/bar.js') }}"></script>
@endpush
>>>>>>> 33e7db5be10da1cb84b62c4c2146939475370573
