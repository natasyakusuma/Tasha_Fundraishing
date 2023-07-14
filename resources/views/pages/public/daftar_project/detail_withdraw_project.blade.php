@extends('layouts.app')

@section('title')
Detail Penarikan Dana
@endsection

@section('content')
<div class="detail-withdraw-project">
    <div class="container">
        <div class="row">
            <h2> Penarikan Dana </h2>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-detail">
                        <table class="mb-5">
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
                                        <p> <b> Tipe Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p>{{ $responseData['data']['type'] }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Kategori</b> </p>
                                    </td>
                                    <td>
                                        <p>{{ $responseData['data']['category'] }}</p>
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
                                        <p> <b> Status</b> </p>
                                    </td>
                                    <td>
                                        <p style="color: #67B74B">{{ $responseData['data']['status'] }}</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-up">
                        <head>
                            <h3> Detail Rekening Tujuan </h3>
                        </head>
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <p> <b> Nama Lengkap Penerima </b> </p>
                                    </td>
                                    <td>
                                        <p style="color: red">- Ga ada di return BE -</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Bank Tujuan </b> </p>
                                    </td>
                                    <td>
                                        <p style="color: red">- Ga ada di return BE -</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Nomor Rekening</b> </p>
                                    </td>
                                    <td>
                                        <p style="color: red">- Ga ada di return BE -</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-down">
                        <head>
                            <h3> Summary Penarikan </h3>
                        </head>
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <p> <b> Total Dana Terkumpul </b> </p>
                                    </td>
                                    <td>
                                        <p>Rp {{ number_format($responseData['data']['current_funding_amount'], 0, ".", ".") }}</p>
                                    </td>
                                    <td class="td-3">

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Biaya Pendaftaran Proyek</b> </p>
                                    </td>
                                    <td>
                                        <p>Rp 100.000</p>
                                    </td>
                                    <td class="td-3">

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Biaya Aplikasi </b> </p>
                                    </td>
                                    <td>
                                        <p>Rp 10.000</p>
                                    </td>
                                    <td class="td-3">

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <hr style="margin-top: 10px;">
                                    </td>
                                    <td style="padding-left: 20px;">
                                        <hr style=" margin-top: 10px; width: 15px ">
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Total Dana Yang Ditarik </b> </p>
                                    </td>
                                    <td>
                                        <p>Rp {{ number_format($totalWithDraw, 0, ".", ".") }}</p>
                                    </td>

                                    <td>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <form action="{{ route('withdrawFrom', $responseData['data']['id']) }}" method="POST">
                            @csrf
                            <input type="number" name="amount" value="{{ $responseData['data']['current_funding_amount'] }}" hidden>
                            <button type="submit" class="btn btn-primary" id="liveToastBtn">Tarik Dana</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
