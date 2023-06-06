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
                                        <h2>1500</h2>
                                        <p>Traffic</p>
                                    </div>
                                    <i class='bx bx-trending-up icon'></i>
                                </div>
                                <span class="progress" data-value="40%"></span>
                                <span class="label">40%</span>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card">
                                <div class="head">
                                    <div>
                                        <h2>1500</h2>
                                        <p>Traffic</p>
                                    </div>
                                    <i class='bx bx-trending-up icon'></i>
                                </div>
                                <span class="progress" data-value="40%"></span>
                                <span class="label">40%</span>
                            </div>
                        </div>

                        <div class="col-6 mt-3">
                            <div class="card">
                                <div class="head">
                                    <div>
                                        <h2>1500</h2>
                                        <p>Traffic</p>
                                    </div>
                                    <i class='bx bx-trending-up icon'></i>
                                </div>
                                <span class="progress" data-value="40%"></span>
                                <span class="label">40%</span>
                            </div>
                        </div>

                        <div class="col-6 mt-3">
                            <div class="card">
                                <div class="head">
                                    <div>
                                        <h2>1500</h2>
                                        <p>Traffic</p>
                                    </div>
                                    <i class='bx bx-trending-up icon'></i>
                                </div>
                                <span class="progress" data-value="40%"></span>
                                <span class="label">40%</span>
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
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit iusto commodi quis pariatur
                            tempora
                            laudantium dolore eligendi expedita distinctio sint doloremque debitis, id dolor. Maxime
                            commodi
                            nostrum
                            repudiandae. Veritatis, quas!</p>

                    </div>

                    <div class="col-md-6">
                        <div class="head">
                            <div class="menu">
                                <i class='bx bx-dots-horizontal-rounded icon'></i>
                                <ul class="menu-link">
                                    <li><a href="#">Edit</a></li>
                                    <li><a href="#">Save</a></li>
                                    <li><a href="#">Remove</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <canvas id="myChart"></canvas>
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
<script src="{{ asset('js/chart.js') }}"></script>
@endpush
