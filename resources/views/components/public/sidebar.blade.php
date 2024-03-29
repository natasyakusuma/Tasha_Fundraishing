<section id="sidebar">
    <a href="{{ route('dashboard') }}" class="brand"><img src="{{ asset('img/Logo2.png') }}" alt=""> </a>
    <ul class="side-menu">
        <li><a href="{{ route('dashboard') }}" class="{{ (request()->is('dashboard')) ? 'active' : '' }}"><i data-feather="grid" class = "icon"></i> Dashboard</a></li>
        <li class="divider" data-text="main"> Menu </li>
        <li>
            <a href="#" class="{{ (request()->is('proyek*')) ? 'active' : '' }}"><i data-feather="edit" class = "icon"></i> Daftar Proyek <i class='bx bx-chevron-right icon-right'></i></a>
            <ul class="side-dropdown">
                <li><a href="{{ route('create_project') }}"> Pengajuan Dana Proyek </a></li>
                <li><a href=" {{ route('list_project') }}"> Proyek Saya </a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="{{ (request()->is('pengembalian-dana*')) ? 'active' : '' }}"><i data-feather="file-minus" class = "icon"></i> Pengembalian Dana <i
                    class='bx bx-chevron-right icon-right'></i></a>
            <ul class="side-dropdown">
                <li><a href="{{ route('create_return_dana') }}"> Ajukan Pengembalian </a></li>
                <li><a href="{{ route('simulation_return_dana_project') }}"> Simulasi Pengembalian Dana </a></li>
                <li><a href="{{ route('list_return_dana_project') }}"> Pengembalian Dana Saya </a></li>
            </ul>
        </li>

        <li>
            <a href="#" class="{{ (request()->is('laporan-proyek*')) ? 'active' : '' }}"><i data-feather="file-text" class = "icon"></i> Laporan Proyek <i
                    class='bx bx-chevron-right icon-right'></i></a>
            <ul class="side-dropdown">
                <li><a href="{{ route('create_laporan_project') }}"> Membuat Laporan Proyek </a></li>
                <li><a href="{{ route('list_laporan_project') }}"> Laporan Proyek Saya </a></li>
            </ul>
        </li>
    </ul>
</section>
