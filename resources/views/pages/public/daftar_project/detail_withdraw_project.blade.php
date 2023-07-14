@extends('layouts.app')

@section('title')
Detail Penarikan Dana
@endsection

@section('content')
<div class="detail-withdraw-project">
    <div class="container">
        <div class="row">
            <h2> Penarikan Dana </h2>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-detail">
                        <table class="mb-5">
                            <tbody>
                                <tr>
                                    <td>
                                        <p> <b> Nama Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p>Produksi Kue Kering Brand Ina Cookies Cake and Gift</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Mulai Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p> 19-01-2023</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Akhir Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p>19-01-2024</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Tipe Proyek </b> </p>
                                    </td>
                                    <td>
                                        <p>19-01-2024</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Kategori</b> </p>
                                    </td>
                                    <td>
                                        <p>Makanan</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Total Dana Pengajuan </b> </p>
                                    </td>
                                    <td>
                                        <p>Rp.10.000.000</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Status</b> </p>
                                    </td>
                                    <td>
                                        <p style="color: #67B74B">Tercapai</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-up">

                        <head>
                            <h3> Detail Rekening Tujuan </h3>
                        </head>
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <p> <b> Nama Lengkap Penerima </b> </p>
                                    </td>
                                    <td>
                                        <p>Bola Bola Ubi</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> <b> Bank Tujuan </b> </p>
                                    </td>
                                    <td>
                                        <p> BSI Bank Syariah Indoensia</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Nomor Rekening</b> </p>
                                    </td>
                                    <td>
                                        <p>12021XXXXXX</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-down">

                        <head>
                            <h3> Summary Penarikan </h3>
                        </head>
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <p> <b> Total Dana Terkumpul </b> </p>
                                    </td>
                                    <td>
                                        <p> Rp. 10.000.000</p>
                                    </td>
                                    <td class="td-3">

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Biaya Pendaftaran Proyek</b> </p>
                                    </td>
                                    <td>
                                        <p>Rp. 100.000</p>
                                    </td>
                                    <td class="td-3">

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Biaya Aplikasi </b> </p>
                                    </td>
                                    <td>
                                        <p>Rp.10.000 </p>
                                    </td>
                                    <td class="td-3">

                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <hr style="margin-top: 10px;">
                                    </td>
                                    <td style="padding-left: 20px;">
                                        <hr style=" margin-top: 10px; width: 15px ">
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <p> <b> Total Dana Yang Ditarik </b> </p>
                                    </td>
                                    <td>
                                        <p> Rp 9.900.000 </p>
                                    </td>

                                    <td>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary" id="liveToastBtn"> Tarik Dana </button>
                        <div class="toast-container position-fixed top-0 end-0 p-3">
                            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="toast-header">
                                    {{-- <img src="..." class="rounded me-2" alt="..."> --}}
                                    <strong class="me-auto"> Berhasil </strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                   Selamat Penarikan Dana Berhasil!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('addon-script')
<script>
// Get the button element
var button = document.getElementById("liveToastBtn");

// Add click event listener to the button
button.addEventListener("click", function() {
  // Get the toast element
  var toast = document.getElementById("liveToast");
  
  // Show the toast
  var bootstrapToast = new bootstrap.Toast(toast);
  bootstrapToast.show();
});
</script>
@endpush
