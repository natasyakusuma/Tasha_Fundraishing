@extends('layouts.app')

@section('title')
Membuat Laporan Proyek
@endsection


@section('content')
<div class="create-laporan-project">

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
                <form action="{{ route('create_laporan_project') }}" method="POST" id="form-createproyek1" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="InputDokumen" class="form-label">Nama Dokumen</label>
                        <input type="text" class="form-control" id="InputDokumen" name="documentName" placeholder="Masukkan Nama Dokumen" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="InputProyek" class="form-label">Nama Proyek</label>
                        <select class="form-select" id="InputProyek" name="projectName" required>
                            <option value="">Pilih Tipe Proyek</option>
                            @foreach ($responseData['data'] as $item)
                                <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="UploadDocument" class="form-label">Upload File Laporan</label>
                        <input type="file" class="form-control" id="UploadDocument" name="uploadDocument" required>
                    </div>
                    <button type="submit" id="next-button" class="col-12 btn btn-primary mb-3 shadow">Submit</button>
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