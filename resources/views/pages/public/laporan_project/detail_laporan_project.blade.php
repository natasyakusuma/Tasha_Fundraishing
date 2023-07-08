@extends('layouts.app')

@section('title')
Detail Laporan Proyek
@endsection

@section('content')
<div class="detail-laporan-project">
    <div class="container">
        <div class="row">
            <h2> Detail Proyek </h2>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-detail">
                        <table class="mb-5">
                            <tbody>

                                <tr>
                                    <td>
                                        <p> <b> Nama Laporan </b> </p>
                                    </td>
                                    <td>
                                        <p>laporan Proyek Januari</p>
                                    </td>
                                </tr>
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
                                        <p> <b> Tanggal Pengajuan </b> </p>
                                    </td>
                                    <td>
                                        <p> 19-01-2023</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Waktu Pengembalian </b> </p>
                                    </td>
                                    <td>
                                        <p>Pengembalian Ke-2 </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Tenor </b> </p>
                                    </td>
                                    <td>
                                        <p>Per-3 Bulan </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Periode </b> </p>
                                    </td>
                                    <td>
                                        <p> 1 Tahun </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Status </b> </p>
                                    </td>
                                    <td>
                                        <p> Disetujui </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6 ">
                <div class="card">
                    <div class="card-detail2">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"> Tanggal</th>
                                        <th scope="col"> Jumlah </th>
                                        <th scope="col"> Deskripsi </th>
                                        <th scope="col"> Bukti </th>
                                        <th scope="col"> Tipe </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td> 19-12-2023</td>
                                        <td> Rp.2.000.000 </td>
                                        <td> Membeli Bahan </td>
                                        <td> Bukti </td>
                                        <td> Keluar </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
