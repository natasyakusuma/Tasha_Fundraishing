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
                                        <p>{{ $responseData['data']['campaign']['name'] }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Tanggal Pengajuan </b> </p>
                                    </td>
                                    <td>
                                        <p>{{\Carbon\Carbon::parse($responseData['data']['campaign']['created_at'])->format('d-m-Y') }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Tenor </b> </p>
                                    </td>
                                    <td>
                                        <p>{{ $responseData['data']['campaign']['tenors'] }}</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Status </b> </p>
                                    </td>
                                    <td>
                                        @if($responseData['data']['is_exported'] == 1 )
                                        <span class="badge bg-success"> APPROVED </span>
                                        @elseif($responseData['data']['is_exported'] == 0 )
                                        <span class="badge bg-warning">WAITING_VERIFICATION </span>
                                        @elseif($responseData['data']['is_exported'] == -1 )
                                        <span class="badge bg-danger"> REJECTED </span>
                                        @endif
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
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 10px;"> Tanggal</th>
                                            <th scope="col" style="width: 10px;"> Jumlah </th>
                                            <th scope="col" style="width: 20px;"> Deskripsi </th>
                                            <th scope="col" style="width: 180px;"> Bukti </th>
                                            <th scope="col"> Tipe </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($responseData['data']['campaign_report_details'] as $item)
                                        <tr>
                                            <td style="max-width: 10px; overflow: hidden; text-overflow: ellipsis;">{{$item['date']}}</td>
                                            <td style="max-width: 10px; overflow: hidden; text-overflow: ellipsis;">{{$item['amount']}}</td>
                                            <td style="max-width: 20px; overflow: hidden; text-overflow: ellipsis;">{{$item['description']}}</td>
                                            <td style="max-width: 180px; overflow: hidden; text-overflow: ellipsis;">{{$item['evidence']}}</td>
                                            <td>{{$item['type']}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection