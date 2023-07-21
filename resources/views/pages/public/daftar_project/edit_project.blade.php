@extends('layouts.app')


@section('title')
Edit Pengajuan Dana Proyek
@endsection

@section('content')
<div class="edit-project">
    <div class="container">
        <form action="{{ route('projectUpdateForm', $responseData['data']['id']) }}" method="post" id="form-dana1" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-left">
                            <div class="card-body">
                                <table class="table table-borderless">
                                    <header>
                                        <h3>
                                            Informasi Proyek
                                        </h3>
                                    </header>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p> <b> Nama Proyek </b> </p>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="InputProyek" name="name" value="{{ $responseData['data']['name'] }}"
                                                    required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> <b> Deskripsi Proyek </b> </p>
                                            </td>
                                            <td>
                                                <textarea cols="10" rows="4" class="form-control" id="DeskripsiProyek"
                                                    name="description" required>{{ $responseData['data']['description'] }}</textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> <b> Mulai Proyek </b> </p>
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" id="StartDate" name="startDate" value="{{ $responseData['data']['start_date'] }}"
                                                    required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> <b> Akhir Proyek </b> </p>
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" id="EndDate" name="closingDate" value="{{ $responseData['data']['closing_date'] }}"
                                                    required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> <b> Sisa Waktu Proyek </b> </p>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="SisaWaktu" value="{{ $remainingDate }} hari" disabled>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> <b> Tipe Proyek </b> </p>
                                            </td>
                                            <td>
                                                <select class="form-select" id="InputBank" name="type" required>
                                                    <option value="">Pilih Tipe Proyek</option>
                                                    <option value="Musyarakah" {{ $responseData['data']['type'] == 'Musyarakah'  ? 'selected' : ''}}>Akad Musyarakah</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> <b> Kategori </b> </p>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="InputKategori" name="category" value="{{ $responseData['data']['category'] }}"
                                                    required>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-right">
                            <div class="card-body">
                                <table class="table table-borderless">
                                    <header>
                                        <h3>
                                            Informasi Investasi
                                        </h3>
                                    </header>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p> <b> Total Dana Yang Diperlukan </b> </p>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" value="{{ $responseData['data']['current_funding_amount'] }}"
                                                    name="currentFundingAmount" hidden>
                                                <input type="number" class="form-control" id="InputTotal" value="{{ $responseData['data']['target_funding_amount'] }}"
                                                    name="targetFundingAmount" required>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> <b> Tenor </b> </p>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" id="InputTenor" name="tenor" value="{{ $responseData['data']['tenors'] }}"
                                                    required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> <b> Return Investasi </b> </p>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" id="InputReturn" min="0" max="1"
                                                    step="0.1" name="profitShare" value="{{ $responseData['data']['profit_share'] }}" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> <b> Waktu Pengembalian </b> </p>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" id="ReturnDate"
                                                    name="returnInvestmentPeriod" value="{{ $responseData['data']['return_investment_period'] }}" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> <b> Jumlah Suku yang Tersedia</b> </p>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control" id="TotalSuku" name="sukuk"
                                                    value="{{ $responseData['data']['max_sukuk'] }}" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> <b> Upload Perspektus</b> </p>
                                            </td>
                                            <td>
                                                <input type="file" class="form-control" id="UploadFile" name="prospektus">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p> <b> Upload Gambar </b> </p>
                                            </td>
                                            <td>
                                                <input type="file" class="form-control" id="UploadImage" name="banner[]"
                                                    multiple>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-center">
                    <a href="{{ route('list_project') }}" class="col-6">
                        <button class="button" id="cancel-button" type="submit"> Batal </button>
                    </a>
    
                    <a  class="col-6">
                        <button class="button" id="next-button" type="submit"> Simpan</button>
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('addon-script')
<link rel="stylesheet" href={{ asset('sass/app.css') }}>
@endpush

@push('prepend-script')
<script src="{{ asset('js/popup.js') }}"></script>
@endpush
