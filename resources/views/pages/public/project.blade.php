@extends('layouts.app')


@section('title')
Pengajuan Dana Proyek
@endsection

@section('content')
<div class="project">
    <div class="popup-overlay" id="popup-overlay">
        <div class="popup-container">
            <h2>Pengajuan Dana Proyek</h2>
            <p>
                Untuk melakukan pengajuan dana proyek, siapkan proyektus Anda untuk diupload nanti!
            </p>
            <button id="next-button" type="submit"> Selanjutnya </button>
            <button class="close-btn" id="close-btn">&times;</button>
        </div>
    </div>


    <div class="container project-dana1">
        <div class="card ">
            <div class="card-body">
                <header>
                    <h2>
                        Informasi Proyek
                    </h2>
                </header>
                <form action="#" id="form-dana1">
                    <div class="form-group mb-3">
                        <label for="InputProyek" class="form-label">Nama Proyek</label>
                        <input type="text" class="form-control" id="InputUsaha">
                    </div>
                    <div class="form-group mb-3">
                        <label for="DeskripsiProyek" class="form-label">Deskripsi Proyek</label>
                        <input type="textarea" class="form-control" id="DeskripsiProyek">
                    </div>
                    <div class="form-group mb-3">
                        <label for="InputBank" class="form-label">Tipe Proyek</label>
                        <select class="form-select" id="InputBank">
                            <option value="">Pilih Tipe Proyek</option>
                            <option value="bni">Akad Musyarakah</option>
                            <option value="mandiri">Akad Musyarakah</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="InputKategori" class="form-label">Kategori</label>
                        <input type="text" class="form-control" id="InputKategori">
                    </div>
                    <div class="form-group mb-3">
                        <label for="StartDate" class="form-label"> Mulai Pengumpulan Dana</label>
                        <input type="date" class="form-control" id="StartDate">
                    </div>
                    <div class="form-group mb-3">
                        <label for="EndDate" class="form-label"> AkhirPengumpulan Dana</label>
                        <input type="date" class="form-control" id="EndDate">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container project-dana2">
        <div class="card ">
            <div class="card-body">
                <header>
                    <div class="row">
                        <div class="col-6">
                            <h2>
                                Informasi Investasi
                            </h2>
                        </div>
                    </div>

                </header>
                <form action="#" id="form-dana1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="InputTotal" class="form-label">Total Dana Yang Diperlukan</label>
                                <input type="numbers" class="form-control" id="InputTotal">
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputTenor" class="form-label">Tenor</label>
                                <input type="t" class="form-control" id="InputTenor">
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputReturn" class="form-label">Return Investasi</label>
                                <input type="text" class="form-control" id="InputReturn">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="InputSukuk" class="form-label">Harga Per-Sukuk</label>
                                <input type="numbers" class="form-control" id="InputSukuk" disabled>
                            </div>
                            <div class="form-group mb-3">
                                <label for="ReturnDate" class="form-label"> Waktu Pengembalian </label>
                                <input type="date" class="form-control" id="ReturnDate">
                            </div>
                            <div class="form-group mb-3">
                                <label for="TotalSuku" class="form-label">Jumlah Suku yang Tersedia </label>
                                <input type="text" class="form-control" id="TotalSuku">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="UploadFile" class="form-label">Upload Prospektus Anda</label>
                        <input type="file" class="form-control" id="UploadFile">
                    </div>
                    <div class="form-group mb-3">
                        <label for="UploadImage" class="form-label">Upload Gambar</label>
                        <input type="file" class="form-control" id="UploadImage">
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a type="submit" class="col-12 btn btn-primary mb-3 shadow"
                                href="{{route('pro-success')}}">Submit</a>
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

