@extends('layouts.app')

@section('title')
Membuat Laporan Proyek
@endsection


@section('content')
<div class="create-project">

    <div class="popup-overlay" id="popup-overlay">
        <div class="popup-container">
            <h2>Dokumen Laporan Proyek</h2>
            <p>
                Untuk membuat laporan proyek Anda , dapat mengundah template laporan pada button berikut. 
                Jika sudah membuat laporan, Anda dapat melanjutkannya untuk submit
            </p>
            <button class="button" id="cancel-button" type="submit"> Template Laporan </button>
            <button class="button" id="next-button" type="submit"> Selanjutnya </button>
            <button class="close-btn" id="close-btn">&times;</button>
        </div>
    </div>

    <div class="container">
        <header>
            <h2>
                Membuat Laporan Proyek
            </h2>
        </header>
        <div class="card">
            <div class="card-body">

                <form action="#" id="form-createproyek1">
                    <div class="form-group mb-3">
                        <label for="InputProyek" class="form-label">Nama Dokumen</label>
                        <input type="text" class="form-control" id="InputUsaha">
                    </div>
                    <div class="form-group mb-3">
                        <label for="InputProyek" class="form-label">Nama Proyek</label>
                        <input type="text" class="form-control" id="InputUsaha">
                    </div>
                    <div class="form-group mb-3">
                        <label for="UploadDocument" class="form-label">Upload File Laporan</label>
                        <input type="file" class="form-control" id="UploadDocument">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a type="submit" class="col-12 btn btn-primary mb-3 shadow" href="{{route('pro-succesCreate')}}">Submit</a>
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