@extends('layouts.app')

@section('title')
Laporan Proyek Saya
@endsection

@section('content')
<div class="project-laporansaya">
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
                            <th scope="col"> Nama Laporan</th>
                            <th scope="col"> Nama Proyek </th>
                            <th scope="col"> Tanggal </th>
                            <th scope="col"> Status Laporan</th>
                            <th scope="col"> Status Pengembalian</th>
                            <th scope="col"> File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="{{route('detailLaporanSaya')}}"> Laporan Proyek Bulan Februari</a></td>
                            <td> Produksi Kue Kering Brand Ina Cookies Cake and Gift </td>
                            <td> 19-01-2023 </td>
                            <td> Pengembalian ke-2 </td>
                            <td>
                                <button class="btn btn-verification" disabled style="pointer-events: none;">
                                    <span> Ditolak</span>
                                </button></td>
                            <td>
                                <i data-feather="file-text"></i>  
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
