@extends('layouts.app')

@section('title')
View Laporan Proyek
@endsection


@section('content')
<div class="create-laporan-project">
    <div class="container">
        <header>
            <h2>
                Lihat Laporan Proyek
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
                    <div class="d-flex justify-content-end">
                        <button class="button" id="cancel-button" type="submit"> Edit </button>
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