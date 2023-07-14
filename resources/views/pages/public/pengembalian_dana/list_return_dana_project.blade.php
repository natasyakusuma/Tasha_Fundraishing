@extends('layouts.app')

@section('title')
Pengembalian Dana Saya
@endsection

@section('content')
<div class="list-return-dana-project">
    <div class="head">
        <h2>
            Projek Saya
        </h2>
    </div>

    <div class="main">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"> Nama Proyek</th>
                            <th scope="col"> Tanggal Pengembalian </th>
                            <th scope="col"> Waktu Pengembalian </th>
                            <th scope="col"> Total Dana Pengembalian </th>
                            <th scope="col"> Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($responseData['data'] as $item)
                            <tr>
                                <td style="color: red"><a href="#">- ga ada di return BE -</a></td>
                                <td style="color: red">- ga ada di return BE -</td>
                                <td style="color: red">- ga ada di return BE -</td>
                                <td>Rp {{ number_format($item['amount'], 0, ".", ".") }}</td>
                                <td>
                                    <button class="btn btn-verification" disabled style="pointer-events: none;">
                                        <span>{{ $item['status'] }}</span>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @if ($message)
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto"> Berhasil </strong>
                    <button type="button" class="btn-close" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ $message }}
                </div>
            </div>
        </div>
    @endif
</div>
@endsection

@push('addon-script')
<link rel="stylesheet" href={{ asset('sass/app.css') }}>
@endpush

@push('prepend-script')
<script src="{{ asset('js/projectSaya.js') }}"></script>
<script src="{{ asset('js/toast.js') }}"></script>
@endpush
