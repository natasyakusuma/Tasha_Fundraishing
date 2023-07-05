<section id="sidebar">
    <a href="#" class="brand"><img src="{{ asset('img/Logo2.png') }}" alt=""> </a>
    <ul class="side-menu">
<<<<<<< HEAD
      <li><a href="{{ route('dashboard') }}" class="active"><i class='bx bxs-dashboard icon'></i> Dashboard</a></li>
      <li class="divider" data-text="main">Main</li>
      <li>
        <a href="#"><i class='bx bxs-inbox icon'></i> Daftar Proyek <i class='bx bx-chevron-right icon-right'></i></a>
        <ul class="side-dropdown">
          <li><a href="{{ route('pro1') }}"> Pengajuan Dana Proyek </a></li>
          <li><a href=""> Proyek Saya </a></li>
        </ul>
      </li>
      <li><a href="#"><i class='bx bxs-chart icon'></i> Pengembalian Dana</a></li>
      <li><a href="#"><i class='bx bxs-widget icon'></i> Laporan Proyek</a></li>
      <li class="divider" data-text="table and forms">Table and forms</li>
      <li><a href="#"><i class='bx bx-table icon'></i> Tables</a></li>
      <li>
        <a href="#"><i class='bx bxs-notepad icon'></i> Forms <i class='bx bx-chevron-right icon-right'></i></a>
        <ul class="side-dropdown">
          <li><a href="#">Basic</a></li>
          <li><a href="#">Select</a></li>
          <li><a href="#">Checkbox</a></li>
          <li><a href="#">Radio</a></li>
        </ul>
      </li>
    </ul>
  </section>
=======
        <li><a href="{{ route('dashboard') }}" class="active"><i class='bx bxs-dashboard icon'></i> Dashboard</a></li>
        <li class="divider" data-text="main">Main</li>
        <li>
            <a href="#"><i class='bx bxs-inbox icon'></i> Daftar Proyek <i
                    class='bx bx-chevron-right icon-right'></i></a>
            <ul class="side-dropdown">
                <li><a href="{{ route('pro1') }}"> Pengajuan Dana Proyek </a>
                </li>
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
>>>>>>> 33e7db5be10da1cb84b62c4c2146939475370573
