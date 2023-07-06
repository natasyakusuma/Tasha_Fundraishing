<section id="sidebar">
    <a href="#" class="brand"><img src="{{ asset('img/Logo2.png') }}" alt=""> </a>
    <ul class="side-menu">
        <li><a href="{{ route('dashboard') }}" class="{{ (request()->is('dashboard')) ? 'active' : '' }}"><i class='bx bxs-dashboard icon'></i> Dashboard</a></li>
        <li class="divider" data-text="main">Main</li>
        <li>
            <a href="#" class="{{ (request()->is('project')) ? 'active' : '' }}"><i class='bx bxs-inbox icon'></i> Daftar Proyek <i class='bx bx-chevron-right icon-right'></i></a>
            <ul class="side-dropdown">
                <li><a href="{{ route('pro1') }}"> Pengajuan Dana Proyek </a></li>
                <li><a href=" {{ route('proSaya') }}"> Proyek Saya </a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class='bx bxs-inbox icon'></i> Pengembalian Dana <i
                    class='bx bx-chevron-right icon-right'></i></a>
            <ul class="side-dropdown">
                <li><a href="{{ route('ReturnDana') }}"> Ajukan Pengembalian </a></li>
                <li><a href="{{ route('DanaSimul') }}"> Simulasi Pengembalian Dana </a></li>
                <li><a href="{{ route('myReturnDana') }}"> Pengembalian Dana Saya </a></li>
            </ul>
        </li>

        <li>
            <a href="#"><i class='bx bxs-inbox icon'></i> Laporan Proyek <i
                    class='bx bx-chevron-right icon-right'></i></a>
            <ul class="side-dropdown">
                <li><a href="{{ route('proCreate') }}"> Membuat Laporan Proyek </a></li>
                <li><a href="{{ route('proLaporanSaya') }}"> Laporan Proyek Saya </a></li>
            </ul>
        </li>
    </ul>
</section>
