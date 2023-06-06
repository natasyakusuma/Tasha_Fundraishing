<section id="sidebar">
    <a href="#" class="brand"><img src="{{ asset('img/Logo2.png') }}" alt=""> </a>
    <ul class="side-menu">
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