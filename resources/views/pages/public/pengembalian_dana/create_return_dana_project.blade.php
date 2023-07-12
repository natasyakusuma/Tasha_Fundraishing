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
                <form action="#" id="form-dana1">

                    <div class="form-group mb-3">
                        <label for="InputProyek" class="form-label">Nama Proyek</label>
                        <input type="text" class="form-control" id="InputProyek" placeholder="Masukkan Nama Proyek">
                    </div>

                    <div class="form-group mb-3">
                        <label for="InputProyek" class="form-label"> Total Dana Pengembalian </label>
                        <input type="text" class="form-control" id="InputUsaha"
                            placeholder="Masukkan Total Dana Pengembalian">
                    </div>

                    <div class="form-group mb-3">
                        <label for="UploadDocument" class="form-label"> Upload Bukti Transfer </label>
                        <input type="file" class="form-control" id="UploadDocument">
                    </div>

                    <button type="submit" class="btn btn-primary col-12" id="liveToastBtn"> Submit </button>
                    <div class="toast-container position-fixed top-0 end-0 p-3">
                        <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                {{-- <img src="..." class="rounded me-2" alt="..."> --}}
                                <strong class="me-auto"> Berhasil </strong>
                                <button type="button" class="btn-close" data-bs-dismiss="toast"
                                    aria-label="Close"></button>
                            </div>
                            <div class="toast-body">
                                Selamat Pengajuan Dana Berhasil!
                            </div>
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

<script>
    // Get the button element
    var button = document.getElementById("liveToastBtn");

    // Add click event listener to the button
    button.addEventListener("click", function () {
        // Get the toast element
        var toast = document.getElementById("liveToast");

        // Show the toast
        var bootstrapToast = new bootstrap.Toast(toast);
        bootstrapToast.show();
    });

</script>
@endpush

@push('prepend-script')
<script src="{{ asset('js/popup.js') }}"></script>
@endpush
