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
                                        <p>{{ $responseData['data']['document_name'] }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Nama Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p style="color: red">- Ga ada di return BE -</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Tanggal Pengajuan </b> </p>
                                    </td>
                                    <td>
                                        <p style="color: red">- Ga ada di return BE -</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Waktu Pengembalian </b> </p>
                                    </td>
                                    <td>
                                        <p style="color: red">- Ga ada di return BE -</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Tenor </b> </p>
                                    </td>
                                    <td>
                                        <p style="color: red">- Ga ada di return BE -</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Periode </b> </p>
                                    </td>
                                    <td>
                                        <p style="color: red">- Ga ada di return BE -</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Status </b> </p>
                                    </td>
                                    <td>
                                        <p style="color: red">- Ga ada di return BE -</p>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
