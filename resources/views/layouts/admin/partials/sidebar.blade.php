<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        {{-- <img src="{{asset('images/logooo.png')}}" alt=""> --}}
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
    </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Dashboard</li>
                <li>
                    <a href="{{ route('home') }}" class="@if (Request::is('/')) mm-active @endif">
                        <i class="metismenu-icon fa fa-home" aria-hidden="true"></i>
                        {{-- <i class="metismenu-icon fa fa-home"></i> --}}
                        Home
                    </a>
                </li>
                @role('admin|dokter')
                <li class="app-sidebar__heading">Data Antrian</li>

                {{-- <li>
                    <a href="{{ route('queue.index') }}" class="@if (Request::is('pendaftaran*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-clipboard-list"></i>
                        Pendaftaran Antrian
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('queue.index') }}" class="@if (Request::is('antrian*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-clipboard fa-1x" aria-hidden="true"></i>
                        {{-- <i class="metismenu-icon fa fa-clipboard-list"></i> --}}
                        Antrian Periksa
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('queue.drug') }}" class="@if (Request::is('antri/*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-clipboard"></i>
                        Antrian Obat
                    </a>
                </li> --}}



                <li class="app-sidebar__heading">Data Master</li>
                <li>
                    <a href="{{ route('patient.index') }}" class="@if (Request::is('pasien*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-users" aria-hidden="true"></i>

                        {{-- <i class="metismenu-icon fa fa-portrait"></i> --}}
                        Data Pasien
                    </a>
                </li>
                <li>
                    <a href="{{ route('medicalrecord.index') }}" class="@if (Request::is('rekam-medis*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-medkit" aria-hidden="true"></i>
                        {{-- <i class="metismenu-icon fa fa-notes-medical"></i> --}}
                        Data Rekam Medis
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('drug.index') }}" class="@if (Request::is('obat*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-prescription-bottle-alt"></i>
                        Data Obat
                    </a>
                </li> --}}

                <li>
                    <a href="{{ route('diagnosis.index') }}" class="@if (Request::is('diagnosis*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-file-alt" aria-hidden="true"></i>
                        {{-- <i class="metismenu-icon fa fa-file-alt"></i> --}}
                        Data Diagnosis
                    </a>
                </li>
                @unlessrole('dokter')
                <li>
                    <a href="{{ route('drug.index') }}" class="@if (Request::is('obat*')) mm-active @endif">
                        {{-- <i class="metismenu-icon fa fa-thermometer-full" aria-hidden="true"></i> --}}
                        <i class="metismenu-icon fa fa-prescription-bottle-alt"></i>
                        Data Obat
                    </a>
                </li>
                <li>
                     <a href="{{ route('lab.index') }}" class="@if (Request::is('lab*')) mm-active @endif">
                        {{-- <i class="metismenu-icon fa fa-ambulance" aria-hidden="true"></i> --}}
                        <i class="metismenu-icon fa fa-file-medical-alt"></i>
                        Data Laboratorium
                    </a>
                </li>
                <li>
                    <a href="{{ route('room.index') }}" class="@if (Request::is('ruangan*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-bed" aria-hidden="true"></i>
                        {{-- <i class="metismenu-icon fa fa-door-open"></i> --}}
                        Data Ruangan
                    </a>
                </li>
                <li>
                    <a href="{{ route('service.index') }}" class="@if (Request::is('layanan*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-server" aria-hidden="true"></i>
                        {{-- <i class="metismenu-icon fa fa-file-medical-alt"></i> --}}
                        Data Layanan
                    </a>
                </li>
                @endrole
                @role('admin')
                {{-- <li class="app-sidebar__heading">Laporan</li> --}}
                {{-- <li>
                    <a href="{{ route('medicalrecord.index') }}" class="@if (Request::is('report*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-notes-medical"></i>
                        Laporan Pengunjung
                    </a>
                </li> --}}
                {{-- <li>
                    <a href="{{ route('medicalrecord.index') }}" class="@if (Request::is('report*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-notes-medical"></i>
                        Laporan Obat
                    </a>
                </li> --}}
                {{-- <li>
                    <a href="{{ route('medicalrecord.index') }}" class="@if (Request::is('report*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-notes-medical"></i>
                        Laporan Obat
                    </a>
                </li> --}}

                <li class="app-sidebar__heading">DATA USERS</li>
                <li>
                    <a href="{{ route('user.index') }}" class="@if (Request::is('user*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-user-plus" aria-hidden="true"></i>
                        {{-- <i class="metismenu-icon fa fa-notes-medical"></i> --}}
                        Data User
                    </a>
                </li>
                @endrole
                @endrole
                @role('dokumentasi')
                <li class="app-sidebar__heading">Manajemen Dokumentasi API</li>
                <li>
                    <a href="{{ route('documentation.index') }}" class="@if (Request::is('dokumentasi*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-file-alt"></i>
                        Dokumentasi
                    </a>
                </li>
                <li>
                    <a href="{{ route('parameter.index') }}" class="@if (Request::is('parameter*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-clipboard"></i>
                        Parameter
                    </a>
                </li>
                <li>
                    <a href="{{ route('response.index') }}" class="@if (Request::is('response*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-clipboard-list"></i>
                        Response
                    </a>
                </li>
                @endrole

                @role('pengguna')
                {{-- <li class="app-sidebar__heading">Melihat Dokumentasi API</li>
                <li>
                    <a href="{{ route('documentation.index') }}" class="@if (Request::is('dokumentasi*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-file-alt"></i>
                         Dokumentasi API
                    </a>
                </li> --}}
                @endrole


                @role('bidan')
                <li class="app-sidebar__heading">Data Antrian</li>
                <li>
                    <a href="{{ route('queue.index') }}" class="@if (Request::is('antrian*')) mm-active @endif">

                        <i class="metismenu-icon fa fa-clipboard" aria-hidden="true"></i>
                        Antrian Periksa
                    </a>
                </li>
                <li class="app-sidebar__heading">Data Bidan</li>
                <li>
                    <a href="{{ route('history.index') }}" class="@if (Request::is('history*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-medkit" aria-hidden="true"></i>
                        Pemeriksaan ACN
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('pregnantmom.index') }}" class="@if (Request::is('ibu-hamil*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-portrait"></i>
                        Data Ibu Hamil
                    </a>
                </li> --}}
                {{-- <li>
                    <a href="">
                        <i class="metismenu-icon fa fa-clipboard-list"></i>
                        Data Rekam Medis
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('immunization.index') }}" class="@if (Request::is('imunisasi*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-clipboard"></i>
                        Data Imunisasi
                    </a>
                </li>

                <li>
                    <a href="{{ route('familyplanning.index') }}" class="@if (Request::is('keluargaberencana*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-clipboard-list"></i>
                        Data Keluarga Berencana
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('bpjs.index') }}" class="@if (Request::is('bpjs*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-notes-medical"></i>
                        Data BPJS
                    </a>
                </li> --}}
                <li>
                @endrole

                @role('apoteker')
                <li class="app-sidebar__heading">Data Antrian</li>
                <li>
                    <a href="{{ route('queue.drug') }}" class="@if (Request::is('antri/*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-clipboard" aria-hidden="true"></i>
                        {{-- <i class="metismenu-icon fa fa-clipboard"></i> --}}
                        Antrian Obat
                    </a>
                </li>
                <li class="app-sidebar__heading">Data Master</li>
                <li>
                    <a href="{{ route('drug.index') }}" class="@if (Request::is('obat*')) mm-active @endif">
                        {{-- <i class="metismenu-icon  fa fa-thermometer-full" aria-hidden="true"></i> --}}
                        <i class="metismenu-icon fa fa-prescription-bottle-alt"></i>
                        Data Obat
                    </a>
                </li>
                <li>
                <a href="{{ route('nota.index') }}" class="@if (Request::is('nota*')) mm-active @endif">
                    <i class="metismenu-icon fa fa-credit-card" aria-hidden="true"></i>
                        {{-- <i class="metismenu-icon fa fa-prescription-bottle-alt"></i> --}}
                        Nota Obat
                    </a>
                </li>
                <li class="app-sidebar__heading">Setting</li>
                <li>
                    <a href="{{ route('jasa.index') }}" class="@if (Request::is('jasa*')) mm-active @endif">
                        <i class="metismenu-icon fa fa-credit-card" aria-hidden="true"></i>
                        {{-- <i class="metismenu-icon fa fa-clipboard"></i> --}}
                        Harga Jasa
                    </a>
                </li>
                @endrole
            </ul>
            <footer class="text-center text-white" style="background-color: #fff;  height: 75px; position: relative; bottom:0; left: 0; width: 280px">
                <!-- Grid container -->
                <div class="container p-0 pb-0">
                    <!-- Section: CTA -->
                    {{-- <section class="">
                        <p class="d-flex justify-content-center align-items-center"></p>
                        <p class="big"><span>KLINIK LAA TACHZAN</span></p>
                        <p class="big"><span>© 2023 Copyright</span></p>
                    </section> --}}
                    <!-- Section: CTA -->
                </div>
                <!-- Grid container -->
                <div class="text-center p-0" style="background-color: #fff; ">
                {{-- <div class="text-center p-0" style="background-color: #fff; color: black;"> --}}
                    <p class="d-flex justify-content-center align-items-center"></p>
                        <p class="big"><span>KLINIK LAA TACHZAN</span></p>
                        <p class="big"><span>© 2023 Copyright</span></p>
                </div>
            </footer>
        </div>

    </div>

</div>
