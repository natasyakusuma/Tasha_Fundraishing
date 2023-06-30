@extends('layouts.app')

@section('title')
Pengajuan Pengembalian Dana
@endsection


@section('content')
<div class="return-dana">
    <div class="popup-overlay" id="popup-overlay">
        <div class="popup-container">
            <h2>Pengajuan Pengembalian Dana </h2>
            <p>
                Untuk melakukan pengajuan pengembalian dana proyek, siapkanlahh bukti transfer Anda!
            </p>
            <button id="next-button" type="submit"> Selanjutnya </button>
            <button class="close-btn" id="close-btn">&times;</button>
        </div>
    </div>

    <div class="container">
        <header>
            <h2>
               Ajukan Pengembalian Dana
            </h2>
        </header>
        <div class="card">
            <div class="card-body">
                <form action="#" id="form-dana1">
                    <div class="form-group mb-3">
                        <label for="InputProyek" class="form-label">Total Dana Yang Diperlukan </label>
                            <input type="text" class="form-control" id="InputUsaha">
                    </div>
                 
                    <div class="form-group mb-3">
                        <label for="InputTenor" class="form-label">Tenor</label>
                        <select class="form-select" id="InputTenor">
                            <option value="1"> 6 Bulan </option>
                            <option value="2"> 1 Tahun </option>
                            <option value="3"> 2 Tahun </option>
                            <option value="3"> 3 Tahun </option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="InputReturnInvestment" class="form-label"> Return Investasi</label>
                        <select class="form-select" id="InputReturnInvestment">
                            <option value="1">  0,1 Bulan </option>
                            <option value="2"> 0,3 Tahun </option>
                            <option value="3"> 0,5 Tahun </option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="InputWaktu" class="form-label"> Waktu Pengembalian </label>
                        <select class="form-select" id="InputWaktu">
                            <option value="1"> 2 Bulan </option>
                            <option value="2"> 3 Bulan </option>
                            <option value="3"> 6 Bulan </option>
                            <option value="3"> 1 Tahun </option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a type="submit" class="col-12 btn btn-primary mb-3 shadow" href="">Submit</a>
                        </div>
                    </div>
                </form>
            </div>
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