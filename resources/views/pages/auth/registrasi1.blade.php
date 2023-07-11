@extends('layouts.auth');

@section('title')
Registrasi 1
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
                        <form action="{{ route('reg1Form') }}" method="POST" id="form-step1">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="InputName" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="InputName" name="fullName" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="InputEmail" name="email" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="InputPassword" placeholder="Kata sandi minimal 8 karakter" name="password" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputPasswordConfirm" class="form-label">Re-Password</label>
                                <input type="password" class="form-control" id="InputPasswordConfirm" name="rePassword" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputPhone" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="InputPhone" name="phone" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputBirthDate" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="InputBirthDate" name="dateOfBirth" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputGender" class="form-label">Gender</label>
                                <select class="form-select" id="InputGender" name="gender" required>
                                    <option value="">Pilih gender</option>
                                    <option value="M">Pria</option>
                                    <option value="F">Wanita</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputJobs" class="form-label">Pekerjaan</label>
                                <input type="text" class="form-control" id="InputJobs" name="employmentStatus" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputNIK" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="InputNIK" name="nik" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="InputNPWP" class="form-label">NPWP</label>
                                <input type="text" class="form-control" id="InputNPWP" name="nik" required>
                            </div>
                            <button type="submit" class="col-12 btn btn-primary mb-3 shadow">Selanjutnya</button>
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
<script src={{asset('js/local_storage/registrasi-localstorage.js')}}></script>
@endpush


