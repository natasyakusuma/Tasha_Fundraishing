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
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold">{{ $responseData['data']['full_name'] }}</span><span class="text-black-50">{{ $responseData['data']['email'] }}</span><span>
                    </span>
                </div>
            </div>
            <div class="col-lg-9 border-right">
                <div class="p-3 py-5 data-diri">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Data Diri </h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="labels"> Nama Lengkap </label>
                            <input type="text" class="form-control" value="{{ $responseData['data']['full_name'] }}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels"> Email </label>
                            <input type="text" class="form-control" value="{{ $responseData['data']['email'] }}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels"> Nomor Telepon </label>
                            <input type="text" class="form-control" value="{{ $responseData['data']['phone_number'] }}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels"> NIK</label>
                            <input type="text" class="form-control" value="{{ $responseData['data']['id_card'] }}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels"> Tanggal Lahir </label>
                            <input type="text" class="form-control" value="{{ $responseData['data']['date_of_birth'] }}">
                        </div>
                        <div class="col-md-6"> 
                            <label for="InputBank" class="form-label">Gender</label>
                            <select class="form-select" id="InputGender">
                                <option value="M" {{ $responseData['data']['gender'] == "M" ? 'selected' : '' }}>Pria</option>
                                <option value="F" {{ $responseData['data']['gender'] == "F" ? 'selected' : '' }}>Wanita</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="labels"> Status Pekerjaan </label>
                            <input type="text" class="form-control" value="{{ $responseData['data']['employment_status'] }}">
                        </div>
                        <div class="col-md-6">
                            <label class="labels"> NPWP </label>
                            <input type="text" class="form-control" value="{{ $responseData['data']['tax_registration_number'] }}">
                        </div>
                    </div>

                    <div class="py-5 data-usaha">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Data Usaha </h4>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="labels" style="color: red"> Nama Usaha </label>
                                <input type="text" class="form-control" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="labels" style="color: red"> Alamat Usaha </label>
                                <input type="text" class="form-control" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="labels" style="color: red"> Surat Izin</label>
                                <input type="file" class="form-control" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="labels" style="color: red"> Nama Rekening Usaha</label>
                                <input type="text" class="form-control" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="labels" style="color: red"> Bank Tujuan </label>
                                <input type="text" class="form-control" value="">
                            </div>
                            <div class="col-md-6">
                                <label class="labels" style="color: red"> Nomor Rekening Usaha </label>
                                <input type="text" class="form-control" value="">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="{{ route('edit_profile') }}" class="btn btn-primary" id="next-button"> Edit </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
