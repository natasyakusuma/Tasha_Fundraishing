@extends('layouts.app')


@section('title')
Pengajuan Dana Proyek
@endsection

@section('content')
<div class="create-project">
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

    <div class="container">
        <form action="{{ route('projectCreateForm') }}" method="post" id="form-dana1" enctype="multipart/form-data">
            @csrf
            <div class="project-dana1">
                <div class="card">
                    <div class="card-body">
                        <header>
                            <h2>
                                Informasi Proyek
                            </h2>
                        </header>
                        <div class="form-group mb-3">
                            <label for="InputProyek" class="form-label">Nama Proyek</label>
                            <input type="text" class="form-control" id="InputUsaha" name="name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="DeskripsiProyek" class="form-label">Deskripsi Proyek</label>
                            <textarea cols="10" rows="4"class="form-control" id="DeskripsiProyek" name="description" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="InputBank" class="form-label">Tipe Proyek</label>
                            <select class="form-select" id="InputBank" name="type" required>
                                <option value="">Pilih Tipe Proyek</option>
                                <option value="Musyarakah">Akad Musyarakah</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="InputKategori" class="form-label">Kategori</label>
                            <input type="text" class="form-control" id="InputKategori" name="category" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="StartDate" class="form-label"> Mulai Pengumpulan Dana</label>
                            <input type="date" class="form-control" id="StartDate" name="startDate" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="EndDate" class="form-label"> Akhir Pengumpulan Dana</label>
                            <input type="date" class="form-control" id="EndDate" name="closingDate" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="project-dana2">
                <div class="card">
                    <div class="card-body">
                        <header>
                            <h2>
                                Informasi Investasi
                            </h2>
                        </header>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="InputTotal" class="form-label">Total Dana Yang Diperlukan</label>
                                    <input type="number" class="form-control" id="targetFundingAmount" name="targetFundingAmount" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="InputTenor" class="form-label">Tenor</label>
                                    <input type="number" class="form-control" id="InputTenor" placeholder="masukkan tenor dalam jumlah bulan, contoh 12" name="tenor" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="InputReturn" class="form-label">Return Investasi</label>
                                    <input type="number" class="form-control" id="InputReturn" min="0" max="1" step="0.1"  name="profitShare" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="InputSukuk" class="form-label">Harga Per-Sukuk</label>
                                    <input type="numbers" class="form-control" id="hargapersukuk" name="hargapersukuk" readonly>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="ReturnDate" class="form-label"> Waktu Pengembalian </label>
                                    <input type="number" class="form-control" placeholder="masukkan waktu pengembalian dalam jumlah bulan, contoh : 6" id="ReturnDate" name="returnInvestmentPeriod" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="TotalSuku" class="form-label">Jumlah Sukuk yang Tersedia </label>
                                    <input type="number" class="form-control" id="sukuk" name="sukuk" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="UploadFile" class="form-label">Upload Prospektus Anda</label>
                            <input type="file" class="form-control" id="UploadFile" name="prospektus" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="UploadImage" class="form-label">Upload Gambar</label>
                            <input type="file" class="form-control" id="UploadImage" name="banner"  required>
                        </div>
                        <button type="submit" class="col-12 btn btn-primary mb-3 shadow">Submit</button>
                    </div>
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
<script>
    document.getElementById('sukuk').addEventListener('input', function () {
        var targetFundingAmount = parseFloat(document.getElementById('targetFundingAmount').value);
        var sukuk = parseFloat(this.value);
        var hargapersukuk = targetFundingAmount / sukuk;
        document.getElementById('hargapersukuk').value = isNaN(hargapersukuk) ? '' : hargapersukuk.toFixed(2);
    });
</script>
@endpush
