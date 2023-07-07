@extends('layouts.app')

@section('title')
Pengembalian Dana Saya
@endsection

@section('content')
<div class="MyReturnDana">
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
                            <th scope="col"> Tanggal Pengembalian </th>
                            <th scope="col"> Waktu Pengembalian </th>
                            <th scope="col"> Total Dana Pengembalian </th>
                            <th scope="col"> Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#"> Produksi Kue Kering Brand Ina Cookies Cake and Gift</a>
                            </td>
                            <td> 19-01-2023 </td>
                            <td> Pengembalian Ke-2 </td>
                            <td> Rp. 10.000.000 </td>
                            <td>
                                <button class="btn btn-verification" disabled style="pointer-events: none;">
                                    <span> Tercapai </span>
                                </button></td>
                            <td>
                           
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
