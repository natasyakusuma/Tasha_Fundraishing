@extends('layouts.app')

@section('title')
Project Saya 
@endsection

@section('content')
    <div class="project-saya">
        <div class="head">
            <h2>
                Projek Saya
            </h2>
        </div>

        <div class="main">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col"> Nama Proyek</th>
                            <th scope="col"> Mulai Proyek </th>
                            <th scope="col"> Akhir Proyek </th>
                            <th scope="col"> Dana Terkumpul </th>
                            <th scope="col"> Total Target Investasi </th>
                            <th scope="col"> Status </th>
                            <th scope="col"> Aksi </th>
                          
                        </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><a href="{{route('pro2')}}"> Produksi Kue Kering Brand Ina Cookies Cake and Gift</a></td>
                            <td> 19-01-2023 </td>
                            <td> 19-01-2024 </td>
                            <td> Rp. 10.000.000 </td>
                            <td> Rp. 10.000.000 </td>
                            <td> Tercapai </td>
                            <td> 
                                <div class="row">
                                    <div class="col-6">
                                        <i data-feather="edit"></i>
                                    </div>

                                    <div class="col-6">
                                        <i data-feather="trash"></i>
                                    </div>
                                </div> 
                            </td>
                          </tr>
                          <tr>
                            <td> Produksi Kue Kering Brand Ina Cookies Cake and Gift</td>
                            <td> 19-01-2023 </td>
                            <td> 19-01-2024 </td>
                            <td> Rp. 10.000.000 </td>
                            <td> Rp. 10.000.000 </td>
                            <td> Menunggu Verifikasi</td>
                            <td> 
                                <div class="row">
                                    <div class="col-6">
                                        <i data-feather="edit"></i>
                                    </div>

                                    <div class="col-6">
                                        <i data-feather="trash" ></i>
                                    </div>
                                </div> 
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
<link rel="stylesheet" href={{ asset('sass/app.css') }}>
@endpush

@push('prepend-script')
<script src="{{ asset('js/projectSaya.js') }}"></script>
@endpush