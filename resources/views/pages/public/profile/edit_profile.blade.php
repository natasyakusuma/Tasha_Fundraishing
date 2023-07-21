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
                        class="font-weight-bold">{{ $responseData['data']['full_name'] }}</span><span
                        class="text-black-50">{{ $responseData['data']['email'] }}</span><span>
                    </span>
                </div>
            </div>
            <div class="col-lg-9 border-right">
                <div class="p-3 py-5 data-diri">
                    {{-- Form --}}
                    <form action="{{route('update_profile', session('user_id'))}}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Data Diri </h4>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="labels"> Nama Lengkap </label>
                                <input type="text" name="full_name" class="form-control"
                                    placeholder="Masukkan Nama Lengkap Anda"
                                    value="{{ $responseData['data']['full_name'] }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="labels"> Email </label>
                                <input type="text" name="email" class="form-control" placeholder="Masukkan Email Anda"
                                    value="{{ $responseData['data']['email'] }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="labels"> Nomor Telepon </label>
                                <input type="text" name="phone_number" class="form-control"
                                    placeholder="Masukkan Nomor Telepon"
                                    value="{{ $responseData['data']['phone_number'] }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="labels"> NIK</label>
                                <input type="text" name="id_card" class="form-control" placeholder="Masukkan NIK Anda"
                                    value="{{ $responseData['data']['id_card'] }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="labels"> Tanggal Lahir </label>
                                <input type="text" name="date_of_birth" class="form-control"
                                    placeholder="Masukkan Tanggal Lahir Anda"
                                    value="{{ $responseData['data']['date_of_birth'] }}" required>
                            </div>
                            <div class="col-md-6">
                                <label for="InputBank" class="form-label">Gender</label>
                                <select class="form-select" id="InputGender" name="gender" required>
                                    <option value="M" {{ $responseData['data']['gender'] == "M" ? 'selected' : '' }}>
                                        Pria</option>
                                    <option value="F" {{ $responseData['data']['gender'] == "F" ? 'selected' : '' }}>
                                        Wanita</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="labels"> Status Pekerjaan </label>
                                <input type="text" name="employment_status" class="form-control"
                                    placeholder="Status Pekerjaan Anda"
                                    value="{{ $responseData['data']['employment_status'] }}" required>
                            </div>
                            <div class="col-md-6">
                                <label class="labels"> NPWP </label>
                                <input type="text" name="tax_registration_number" class="form-control"
                                    placeholder="Masukkan Nomor NPWP Anda"
                                    value="{{ $responseData['data']['tax_registration_number'] }}" required>
                            </div>
                        </div>


                        <div class="py-5 data-usaha">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="text-right">Data Usaha </h4>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class="labels"> Nama Usaha </label>
                                    <input type="text" readonly class="form-control"
                                        value="{{ $responseData['data']['user_business']['name']}}">
                                </div>
                                <div class="col-md-6">
                                    <label class="labels"> Alamat Usaha </label>
                                    <input type="text" readonly class="form-control"
                                        value="{{ $responseData['data']['user_business']['address']}}">
                                </div>
                                <div class="col-md-6">
                                    <label class="labels"> Surat Izin</label>
                                    <input type="file" readonly class="form-control"
                                        value="{{ $responseData['data']['user_business']['certificate_url']}}">
                                </div>
                                <div class="col-md-6">
                                    <label class="labels"> Nama Rekening Usaha</label>
                                    <input type="text" readonly class="form-control"
                                        value="{{ $responseData['data']['user_bank']['account_name']}}">
                                </div>
                                <div class="col-md-6">
                                    <label class="labels"> Bank Tujuan </label>
                                    <input type="text" readonly class="form-control"
                                        value="{{ $responseData['data']['user_bank']['bank_name']}}">
                                </div>
                                <div class="col-md-6">
                                    <label class="labels"> Nomor Rekening Usaha </label>
                                    <input type="text" readonly class="form-control"
                                        value="{{ $responseData['data']['user_bank']['account_number']}}">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button class="button" id="cancel-button" type="submit"> <a
                                    href="{{ route('view_profile') }}"> Batal </a> </button>
                            <button class="button" id="next-button" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- @if ($message)
            <div class="toast-container position-fixed top-0 end-0 p-3">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <strong class="me-auto"> Berhasil </strong>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        {{ $message }}
                    </div>
                </div>
            </div>
            @endif --}}
        </div>
    </div>
</div>


@endsection

@push('prepend-script')
<script src="{{ asset('js/toast.js') }}"></script>
@endpush
