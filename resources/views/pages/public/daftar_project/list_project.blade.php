@extends('layouts.app')

@section('title')
Project Saya
@endsection

@section('content')
<div class="list-project">
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
                            <th scope="col"> Mulai Proyek </th>
                            <th scope="col"> Akhir Proyek </th>
                            <th scope="col"> Dana Terkumpul </th>
                            <th scope="col"> Target Pendanaan </th>
                            <th scope="col"> Status </th>
                            <th scope="col"> Aksi </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($responseData['data'] as $item)
                        <tr>
                            <td><a href="{{ route('detail_project', $item['id']) }}">{{ $item['name'] }}</a></td>
                            <td>{{ \Carbon\Carbon::parse($item['start_date'])->format('d-m-Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($item['closing_date'])->format('d-m-Y') }}</td>
                            <td>Rp {{ number_format($item['current_funding_amount'], 0, ".", ".") }}</td>
                            <td>Rp {{ number_format($item['target_funding_amount'], 0, ".", ".") }}</td>
                            <td> @if($item['status'] == "WAITING_VERIFICATION" || $item['status'] == "RUNNING" ||
                                $item['status'] == "PROCEECED")
                                <span class="badge bg-warning">{{ $item['status'] }}</span>
                                @elseif($item['status'] == "DECLINE")
                                <span class="badge bg-danger">{{ $item['status'] }}</span>
                                @elseif($item['status'] == "ACTIVE" || $item['status'] == "ACHIEVED" || $item['status']
                                == "DONE")
                                <span class="badge bg-success">{{ $item['status'] }}</span>
                                @endif
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-6">
                                        <a href="{{ route('edit_project', $item['id']) }}">
                                            <i data-feather="edit" id="editIcon" class="icon-edit"></i>
                                        </a>
                                    </div>

                                    <div class="col-6">
                                        <a href="#">
                                            <i data-feather="trash"></i>
                                        </a>
                                    </div>
                                </div>
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
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
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
