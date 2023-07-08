@extends('layouts.auth');

@section('title')
Registrasi
@endsection

@section('content')
<div class="container">
    <div class="registrasi-page">
        <div class="row">
            <div class="col-4 box-left">
                <div class="stepper">
                    <div class="stepper-item">
                        <div class="stepper-number">1</div>
                        <div class="stepper-title"> Data Diri</div>
                    </div>
                    <div class="stepper-line"></div>
                    <div class="stepper-item">
                        <div class="stepper-number  active">2</div>
                        <div class="stepper-title"> Data Usaha</div>
                    </div>
                </div>
            </div>
            <div class="col-8 box-right">
                <div class="card">
                    <div class="card-body p-4">
                        <!-- form -->
                        <div class="form-header mb-3 mt-3">
                            <img src="{{ asset('img/Logo2.png')}}" alt="logo">
                        </div>
                        <form action="#" id="form-step2">
                            <div class="form-group mb-3">
                                <label for="InputUsaha" class="form-label">Nama Usaha</label>
                                <input type="text" class="form-control" id="InputUsaha">
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputAlamat" class="form-label">Alamat Usaha</label>
                                <input type="text" class="form-control" id="InputAlamat">
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputNorek" class="form-label">Nomor Rekening Usaha</label>
                                <input type="text" class="form-control" id="InputNorek">
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputBank" class="form-label">Bank Tujuan</label>
                                <select class="form-select" id="InputBank">
                                    <option value="">Pilih Bank</option>
                                    <option value="bni">Bank Syariah Indonesia</option>
                                    <option value="mandiri">Bank Mandiri</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputNamaRekening" class="form-label">Nama Rekening</label>
                                <input type="text" class="form-control" id="InputNamaRekening">
                            </div>
                            <div class="form-group mb-3">
                                <label for="UploadFile" class="form-label">Surat Izin Usaha</label>
                                <input type="file" class="form-control" id="UploadFile">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{route('reg1')}}"
                                        class="col-12 btn btn-danger mb-3 shadow">Sebelumnya</a>
                                </div>
                                <div class="col-6">
                                    <a href="{{route('reg3-success')}}"
                                        class="col-12 btn btn-primary mb-3 shadow">Selanjutnya</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('prepend-script')
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endpush

@push('addon-script')
<script src={{asset('js/registrasi.js')}}></script>
<script src={{asset('js/local_storage/registrasi-localstorage.js')}}></script>
@endpush
