@extends('layouts.app')


@section('title')
Edit Pengajuan Dana Proyek
@endsection

@section('content')
<div class="edit-project">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card ">
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
                                            <input type="text" class="form-control" id="InputProyek" name="name"
                                                required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p> <b> Deskripsi Proyek </b> </p>
                                        </td>
                                        <td>
                                            <textarea cols="10" rows="4" class="form-control" id="DeskripsiProyek"
                                                name="description" required></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p> <b> Mulai Proyek </b> </p>
                                        </td>
                                        <td>
                                            <input type="date" class="form-control" id="StartDate" name="startDate"
                                                required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p> <b> Akhir Proyek </b> </p>
                                        </td>
                                        <td>
                                            <input type="date" class="form-control" id="EndDate" name="closingDate"
                                                required>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p> <b> Sisa Waktu Proyek </b> </p>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="SisaWaktu" name="name" required>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p> <b> Tipe Proyek </b> </p>
                                        </td>
                                        <td>
                                            <select class="form-select" id="InputBank" name="type" required>
                                                <option value="">Pilih Tipe Proyek</option>
                                                <option value="musyarakah">Akad Musyarakah</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p> <b> Kategori </b> </p>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control" id="InputKategori" name="category"
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
                                            <input type="number" class="form-control" id="InputTotal"
                                                name="targetFundingAmount" required>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p> <b> Tenor </b> </p>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" id="InputTenor" name="tenor"
                                                required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p> <b> Return Investasi </b> </p>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" id="InputReturn" min="0" max="1"
                                                step="0.1" name="profitShare" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p> <b> Waktu Pengembalian </b> </p>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" id="ReturnDate"
                                                name="returnInvestmentPeriod" required>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p> <b> Jumlah Suku yang Tersedia</b> </p>
                                        </td>
                                        <td>
                                            <input type="number" class="form-control" id="TotalSuku" name="sukuk"
                                                required>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p> <b> Upload Perspektus</b> </p>
                                        </td>
                                        <td>
                                            <input type="file" class="form-control" id="UploadFile" name="prospektus"
                                                required>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p> <b> Upload Gambar </b> </p>
                                        </td>
                                        <td>
                                            <input type="file" class="form-control" id="UploadImage" name="banner"
                                                multiple required>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-end">
            <button class="button" id="cancel-button" type="submit"> Batal </button>
            <button class="button" id="next-button" type="submit"> Simpan</button>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
<link rel="stylesheet" href={{ asset('sass/app.css') }}>
@endpush

@push('prepend-script')
<script src="{{ asset('js/popup.js') }}"></script>
@endpush
