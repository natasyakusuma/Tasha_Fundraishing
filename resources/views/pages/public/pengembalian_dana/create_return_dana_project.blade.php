@extends('layouts.app')

@section('title')
Pengajuan Pengembalian Dana
@endsection


@section('content')
<div class="create-return-dana">
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
                <form action="{{ route('refundCreateForm') }}" method="POST" id="form-dana1" enctype="multipart/form-data">
                    @csrf
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
                        <label for="InputProyek" class="form-label"> Total Dana Pengembalian </label>
                        <input type="number" class="form-control" id="InputUsaha" name="amount"
                            placeholder="Masukkan Total Dana Pengembalian" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="UploadDocument" class="form-label"> Upload Bukti Transfer </label>
                        <input type="file" class="form-control" id="UploadDocument" name="fileReceipt" required>
                    </div>

                    <button type="submit" class="btn btn-primary col-12"> Submit </button>
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
