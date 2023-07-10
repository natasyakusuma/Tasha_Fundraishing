@extends('layouts.app2')

@section('title')
Profil
@endsection


@section('content')
<div class="profile-page">
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-lg-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px" src="https://icons8.com/icon/76QkhdjAmEbg/ball-point-pen"><span
                        class="font-weight-bold"> Thea </span><span class="text-black-50">thea@gmail.com</span><span>
                    </span>
                </div>
            </div>
            <div class="col-lg-9 border-right">
                <div class="p-3 py-5 data-diri">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Data Diri </h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels"> Nama Lengkap </label><input type="text"
                                class="form-control" placeholder="Masukkan Nama Lengkap Anda" value=""></div>
                        <div class="col-md-6"><label class="labels"> Email </label><input type="text"
                                class="form-control" value="" placeholder="Masukkan Email Anda"></div>
                        <div class="col-md-6"><label class="labels"> Nomor Telepon </label><input type="text"
                                class="form-control" value="" placeholder="Masukkan Nomor Telepon"></div>
                        <div class="col-md-6"><label class="labels"> NIK</label><input type="text" class="form-control"
                                value="" placeholder="Masukkan Email Anda"></div>
                        <div class="col-md-6"><label class="labels"> Tanggal Lahir </label><input type="text"
                                class="form-control" placeholder="Masukkan Tanggal Lahir Anda" value=""></div>
                        <div class="col-md-6"> <label for="InputBank" class="form-label">Gender</label>
                            <select class="form-select" id="InputGender" name="type" required>
                                <option value="1">Laki-laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-6"><label class="labels"> Status Pekerjaan </label><input type="text"
                                class="form-control" value="" placeholder="Status Pekerjaan Anda"></div>
                        <div class="col-md-6"><label class="labels"> NPWP </label><input type="text"
                                class="form-control" value="" placeholder="Masukkan Nomor NPWP Anda"></div>
                    </div>

                    <div class="py-5 data-usaha">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Data Usaha </h4>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels"> Nama Usaha </label><input type="text"
                                    class="form-control" placeholder="Masukkan Nama Usaha Anda" value="">
                            </div>
                            <div class="col-md-6"><label class="labels"> Alamat Usaha </label><input type="text"
                                    class="form-control" value="" placeholder="Masukkan Alamat Usaha Anda">
                            </div>
                            <div class="col-md-6">
                                <label for="UploadImage" class="form-label"> Surat Izin</label>
                                <input type="file" class="form-control" id="UploadImage" name="banner" required>
                            </div>
                            <div class="col-md-6"><label class="submit"> Nama Rekening Usaha</label><input type="text"
                                    class="form-control" value="" placeholder="Masukkan Email Anda">
                            </div>
                            <div class="col-md-6"><label class="labels"> Bank Tujuan </label><input type="text"
                                    class="form-control" placeholder="Masukkan Bank Tujuan Anda" value="">
                            </div>
                            <div class="col-md-6"><label class="labels"> Nomor Rekening Usaha </label><input type="text"
                                    class="form-control" value="" placeholder="Masukkan Nomor Rekening Anda">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button class="button" id="cancel-button" type="submit"> Ubah </button>
                        <button class="button" id="next-button" type="submit"> Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
