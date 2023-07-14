@extends('layouts.app')

@section('title')
Laporan Proyek Saya
@endsection

@section('content')
<div class="list-laporan-project">
    <div class="head">
        <h2>
            Laporan Proyek Saya
        </h2>
    </div>

    <div class="main">
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"> Nama Laporan</th>
                            <th scope="col"> Nama Proyek </th>
                            <th scope="col"> Tanggal </th>
                            <th scope="col"> Status Laporan</th>
                            <th scope="col"> Status Pengembalian</th>
                            <th scope="col"> File</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($responseData['data'] as $item)
                            <tr>
                                <td><a href="{{ route('detail_laporan_project', $item['id']) }}">{{ $item['document_name'] }}</a></td>
                                <td style="color: red">- ga ada di return BE -</td>
                                <td>{{ \Carbon\Carbon::parse($item['created_at'])->format('d-m-Y') }}</td>
                                <td style="color: red">- ga ada di return BE -</td>
                                <td>
                                    <button class="btn btn-verification" disabled style="pointer-events: none;">
                                        <span style="color: red">- ga ada di return BE -</span>
                                    </button></td>
                                <td>
                                    <a href="{{ $item['document_url'] }}"><i data-feather="file-text"></i></a>
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
