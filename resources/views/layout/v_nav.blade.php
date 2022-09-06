{{-- admin --}}
<ul class="metismenu" id="menu">
@if (auth()->user()->level==1)
<li><a href="/dashboard"><i class="ti-dashboard"></i><span>Dashboard</span></a></li>
<li><a href="/dashboard_user"><i class="ti-dashboard"></i><span>Dashboard User</span></a></li>
<li>
    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-align-left"></i><span>Master</span></a>
    <ul class="metismenu collapse">
        <li><a href="/penempatan">Penempatan Magang</a></li>
        <li><a href="/instansi">Kampus / Sekolah</a></li>
        <li><a href="/divisi">Divisi Unit Kerja</a></li>
        <li><a href="/magang">Jenis Magang</a></li>
        <li><a href="/jadwal_kehadiran">Jadwal Kehadiran</a></li>
        <li><a href="/jenis_kehadiran">Jenis Kehadiran</a></li>
    </ul>
</li>
<li><a href="/theysay"><i class="ti-thought"></i><span>What They Say</span></a></li>
<li><a href="/user_daftar"><i class="ti-receipt"></i><span>Data Pendaftar</span></a></li>
<li><a href="/datapribadi"><i class="ti-user"></i><span>Informasi Data Pribadi</span></a></li>
<li>
<a href="javascript:void(0)" aria-expanded="true"><i class="ti-calendar"></i><span>Data Absensi</span></a>
<ul class="metismenu collapse">
    <li><a href="/user_hadir">Hadir</a></li>
    <li><a href="/user_tidakhadir">Tidak Hadir</a></li>
</ul>
</li>
<li>
    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-calendar"></i><span>Form Absensi</span></a>
<ul class="metismenu collapse">
    <li><a href="/hadir">Hadir</a></li>
    <li><a href="/tidakhadir">Tidak Hadir</a></li>
</ul>
</li>
<li>
    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-files"></i><span>FInal Presentation</span></a>
<ul class="metismenu collapse">
    <li><a href="/final_presentation">Form</a></li>
    <li><a href="/user_final_presentation">Data</a></li>
</ul>
</li>
<li><a href="/change_password"><i class="ti-pencil"></i><span>Change Password</span></a></li>


{{-- user --}}
@elseif (auth()->user()->level==2)

<li><a href="/dashboard_user"><i class="ti-dashboard"></i><span>Dashboard User</span></a></li>
<li><a href="/user_daftar"><i class="ti-receipt"></i><span>Data Pendaftar</span></a></li>
<li><a href="/datapribadi"><i class="ti-user"></i><span>Informasi Data Pribadi</span></a></li>
<li>
<a href="javascript:void(0)" aria-expanded="true"><i class="ti-calendar"></i><span>Form Absensi</span></a>
<ul class="metismenu collapse">
    <li><a href="/hadir">Hadir</a></li>
    <li><a href="/tidakhadir">Tidak Hadir</a></li>
</ul>
</li>
<li><a href="/final_presentation"><i class="ti-files"></i><span>Form Final Presentation</span></a></li>
@endif
