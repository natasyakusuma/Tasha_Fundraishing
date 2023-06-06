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
                        <div class="stepper-number active">1</div>
                        <div class="stepper-title"> Data Diri </div>
                    </div>
                    <div class="stepper-line"></div>
                    <div class="stepper-item">
                        <div class="stepper-number">2</div>
                        <div class="stepper-title"> Data Usaha</div>
                    </div>
                </div>
            </div>
            <div class="col-8 box-right">
                <div class="card">
                    <div class="card-body p-4">
                        <!-- form -->
                        <div class="form-header mb-3 mt-3">
                            <img src="{{asset('img/Logo2.png')}}" alt="logo">
                        </div>
                        <form action="#" id="form-step1">
                            <div class="form-group mb-3">
                                <label for="InputName" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="InputName">
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="InputPassword"
                                    placeholder="Kata sandi minimal 8 karakter">
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputPasswordConfirm" class="form-label">Re-Password</label>
                                <input type="password" class="form-control" id="InputPasswordConfirm">
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputBirthDate" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="InputBirthDate">
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputGender" class="form-label">Gender</label>
                                <select class="form-select" id="InputGender">
                                    <option value="">Pilih gender</option>
                                    <option value="male">Pria</option>
                                    <option value="female">Wanita</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputJobs" class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control" id="InputJobs">
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputNIK" class="form-label">NIK</label>
                                <input type="number" class="form-control" id="InputNIK">
                            </div>
                            <a href="{{ route('reg2')}}" class="col-12 btn btn-primary mb-3 shadow">Selanjutnya </a>
            
                        </form>
                        <p class="text-center">
                            Sudah Punya Akun?
                            <a href="{{ route('login') }}">
                                Login disini
                            </a>
                        </p>
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
@endpush
