
<ul class="metismenu" id="menu">
@if (auth()->user()->level==1)
    <li><a href="/dashboard"><i class="ti-dashboard"></i><span>Dashboard</span></a></li>
    <li><a href="/user_daftar"><i class="ti-user"></i><span>Data Pendaftar</span></a></li>
    <li><a href="/user_absensi"><i class="ti-user"></i><span>Data Absensi</span></a></li>
    <li><a href="/user_final_presentation"><i class="ti-user"></i><span>Data Final Presentation</span></a></li>
    <li><a href="/pendaftaran"><i class="ti-receipt"></i> <span>Form Pendaftaran</span></a></li>
    <li><a href="/absensi"><i class="ti-calendar"></i> <span>Form Absensi</span></a></li>
    <li><a href="/final_presentation"><i class="ti-files"></i> <span>Form Final Presentation</span></a></li>
@elseif (auth()->user()->level==2)
    <li><a href="/dashboard"><i class="ti-dashboard"></i><span>Dashboard</span></a></li>
    <li><a href="/pendaftaran"><i class="ti-receipt"></i> <span>Form Pendaftaran</span></a></li>
    <li><a href="/absensi"><i class="ti-calendar"></i> <span>Form Absensi</span></a></li>
    <li><a href="/final_presentation"><i class="ti-files"></i> <span>Form Final Presentation</span></a></li>
@endif
