<div class="navbar-container main-menu-content" data-menu="menu-container">
    <!-- include ../../../includes/mixins-->
    <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation" data-icon-style="filled">
        <li class="nav-item"><a class="nav-link" href="{{route('dashboard')}}"><i class="menu-livicon" data-icon="dashboard"></i><span data-i18n="Dashboard">Dashboard</span></a>
        </li>
        @if(auth()->user()->role == '1')
        <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="menu-livicon" data-icon="list"></i><span>Master Data</span></a>
            <ul class="dropdown-menu">
                <li data-menu=""><a class="dropdown-item align-items-center" href="{{route('siswaIndex')}}" data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Data Pendaftaran Siswa</a>
                </li>
                <li data-menu=""><a class="dropdown-item align-items-center" href="{{route('pembayaranIndexadmin')}}" data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Data Pembayaran</a>
                </li>
                <li data-menu=""><a class="dropdown-item align-items-center" href="{{route('guruIndex')}}" data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Data Guru</a>
                </li>
                <li data-menu=""><a class="dropdown-item align-items-center" href="{{route('mapelIndex')}}" data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Data Mapel</a>
                </li>
                <li data-menu=""><a class="dropdown-item align-items-center" href="{{route('kelasIndex')}}" data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Kelas & Jadwal</a>
                </li>
                <li data-menu=""><a class="dropdown-item align-items-center" href="{{route('kegiatanIndex')}}" data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Kegiatan</a>
                </li>
                <li data-menu=""><a class="dropdown-item align-items-center" href="{{route('kalenderIndex')}}" data-toggle="dropdown"><i class="bx bx-right-arrow-alt"></i>Kalender Akademik</a>
                </li>
            </ul>
        </li>
        @endif
        @if(auth()->user()->role == '2')
        <li class="nav-item"><a class="nav-link" href="{{route('biodataIndex')}}"><i class="menu-livicon" data-icon="notebook"></i><span>Isi Biodata</span></a>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{route('pembayaranIndex')}}"><i class="menu-livicon" data-icon="credit-card-out"></i><span>Pembayaran</span></a>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{route('kegiatanShow')}}"><i class="menu-livicon" data-icon="clock"></i><span>Kegiatan</span></a>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{route('kalenderShow')}}"><i class="menu-livicon" data-icon="calendar"></i><span>Kalender Akademik</span></a>
        </li>
        @endif
    </ul>
</div>
