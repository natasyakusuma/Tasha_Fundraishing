@extends('layouts.app')

@section('title')
Simulasi Pengembalian Dana
@endsection


@section('content')
<div class="simulation-return-dana-project">
    <div class="container">
        <header>
            <h2>
                Simulasi Pengembalian Dana
            </h2>
        </header>
        <div class="card">
            <div class="card-body">
                <form action="#" id="form-dana1">
                    <div class="form-group mb-3">
                        <label for="target_funding_amount" class="form-label">Total Dana Yang Diperlukan </label>
                        <input type="text" class="form-control" id="target_funding_amount" name="target_funding_amount">
                    </div>

                    <div class="form-group mb-3">
                        <label for="tenors" class="form-label">Tenor</label>
                        <select class="form-select" name="tenors" id="tenors">
                            <option value=3> 3 Bulan </option>
                            <option value=6> 6 Bulan </option>
                            <option value=9> 9 Bulan </option>
                            <option value=12> 12 Bulan </option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="return_investment" class="form-label"> Return Investasi</label>
                        <select class="form-select" id="return_investment" name="return_investment">
                            <option value=0.1>1% </option>
                            <option value=0.2>2%</option>
                            <option value=0.3>3%</option>
                            <option value=0.4>4%</option>
                            <option value=0.5>5%</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label for="return_investment_period" class="form-label"> Waktu Pengembalian </label>
                        <select class="form-select" name="return_investment_period" id="return_investment_period">
                            <option value=1> Tiap 1 Bulan </option>
                            <option value=2> Tiap 2 Bulan </option>
                            <option value=3> Tiap 3 Bulan </option>
                            <option value=4> Tiap 4 Bulan </option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="installment">Total Dana Yang Harus Dibayarkan Pada Setiap Waktu Pengembalian</label>
                        <input type="text" class="form-control" id="installment" readonly>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('addon-script')
<link rel="stylesheet" href={{ asset('sass/app.css') }}>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Fungsi untuk menghitung total dan menampilkan hasil
        function calculateInstallment() {
            let target_funding_amount = parseFloat(document.getElementById("target_funding_amount").value);
            let tenors = parseInt(document.getElementById("tenors").value);
            let return_investment = parseFloat(document.getElementById("return_investment").value.replace(',', '.'));
            let return_investment_period = parseInt(document.getElementById("return_investment_period").value);

            // Lakukan perhitungan
            let installment = (target_funding_amount + (target_funding_amount * return_investment)) / (tenors / return_investment_period);

            // Tampilkan hasil dalam format mata uang rupiah
            document.getElementById("installment").value = formatToRupiah(installment);
        }

        // Fungsi untuk mengubah angka menjadi format mata uang rupiah
        function formatToRupiah(angka) {
            let formatter = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
            });

            return formatter.format(angka);
        }

        // Panggil fungsi calculateInstallment() saat nilai input berubah
        document.getElementById("target_funding_amount").addEventListener("change", calculateInstallment);
        document.getElementById("tenors").addEventListener("change", calculateInstallment);
        document.getElementById("return_investment").addEventListener("change", calculateInstallment);
        document.getElementById("return_investment_period").addEventListener("change", calculateInstallment);

        // Panggil fungsi calculateInstallment() saat halaman dimuat untuk menginisialisasi hasil
        calculateInstallment();
    });
</script>
@endpush