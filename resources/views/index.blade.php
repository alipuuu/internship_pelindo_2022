<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Internship Pelindo Regional 3</title>
        <link rel="icon" href="images/logo-tok.png" type="image/icon type">
        <!-- CSS FILES -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link href="css/templatemo-leadership-event.css" rel="stylesheet">

        <script src="dist/sweetalert.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" href="dist/sweetalert.css">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="/" class="navbar-brand mx-auto mx-lg-0">
                    <!-- <i class="bi-bullseye brand-logo"></i> -->
                    <img src="images/logo-internship.png" alt="" width="260" height="60">
                    {{-- <img src="images/logo-internship.png" alt="" width="230" height="60"> --}}
                    <!-- <i><span class="brand-text">INTERNSHIP <br> PROGRAM 2022</span></i> -->
                </a>
                <a class="nav-link custom-btn btn d-lg-none" href="{{route('register')}}">DAFTAR</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Mentors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Get to know</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_5">Ploting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_6">Location</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_7">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link custom-btn btn d-none d-lg-block" href="{{route('register')}}">DAFTAR</a>
                        </li>
                    </ul>
                <div>
            </div>
        </nav>

        <main>
            <section class="hero" id="section_1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-12 m-auto">
                            <div class="hero-text">
                                {{-- <img src="images/internship program.png" alt="" width="700" height="180"> --}}

                                <!-- <h1 class="text-white mb-4"><u class="text-info">INTERNSHIP</u> PROGRAM 2022</h1>
                                <h1 class="text-white mb-4"><u class="text-info">PT.PELINDO</u> Regional 3</h1> -->
                                <!-- <div class="d-flex justify-content-center align-items-center">
                                    <span class="date-text">July 12 to 18, 2022</span>
                                    <span class="location-text">Times Square, NY</span>
                                </div> -->
                                <img src="images/jargon.png">
                                {{-- <a href="#section_2" class="custom-link bi-arrow-down arrow-icon"></a> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="video-wrap">
                    <video autoplay="" loop="" muted="" class="custom-video" poster="">
                        {{-- <source src="videos/pelindomovie.mp4" type="video/mp4"> --}}
                        Your browser does not support the video tag.
                    </video>
                </div>
            </section>

            <section class="highlight">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="highlight-thumb">
                                <img src="images/highlight/batch-1.png" class="highlight-image img-fluid" alt="">
                                <div class="highlight-info">
                                    <h3 class="highlight-title">BATCH 1</h3>
                                    {{-- <a href="https://www.youtube.com/templatemo" class="bi-youtube highlight-icon"></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="highlight-thumb">
                                <img src="images/highlight/batch-2.png" class="highlight-image img-fluid" alt="">
                                <div class="highlight-info">
                                    <h3 class="highlight-title">BATCH 2</h3>
                                    {{-- <a href="https://www.youtube.com/templatemo" class="bi-youtube highlight-icon"></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="highlight-thumb">
                                <img src="images/highlight/batch-3.png" class="highlight-image img-fluid" alt="">
                                <div class="highlight-info">
                                    <h3 class="highlight-title">BATCH 3</h3>
                                    {{-- <a href="https://www.youtube.com/templatemo" class="bi-youtube highlight-icon"></a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="highlight-thumb">
                                <img src="images/highlight/batch-4.png" class="highlight-image img-fluid" alt="">
                                <div class="highlight-info">
                                    <h3 class="highlight-title">BATCH 4</h3>
                                    {{-- <a href="https://www.youtube.com/templatemo" class="bi-youtube highlight-icon"></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="about section-padding" id="section_2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-12">
                            <h2 class="mb-4">Internship <u class="text-info">Program 2022</u></h2>
                        </div>
                        <div class="col-lg-6 col-12">
                            <h3 class="mb-3">PT Pelabuhan Indonesia (persero) Regional 3</h3>
                            <p>Kegiatan magang dirasa sangat berguna bagi para mahasiswa untuk membentuk kualitas dirinya agar lebih siap menghadapi dunia kerja di masa mendatang.
                            Dalam masa transisi menuju dunia kerja, tidak jarang juga freshgraduate mencari program pemagangan untuk melatih kemampuan dalam bentuk
                            praktik kerja sesuai dengan bidang keahliannya. Dengan ini, PT Pelabuhan Indonesia Regional 3 menyediakan wadah untuk calon peserta magang
                            dalam memperoleh pengalaman dalam dunia kerja.
                            </p>
                            <a class="custom-btn custom-border-btn btn custom-link mt-3 me-3" href="#section_3">Mentor Kami</a>
                        </div>
                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <h4>Ingin mengenal lebih Program Internship yang ada di PT Pelindo Regional 3? <br> Simak yuk  Informasi dibawah ini!!
                            </h4>
                            <div class="avatar-group border-top py-5 mt-5">
                                <img src="images/avatar/cavina.jpg" class="img-fluid avatar-image" alt="">
                                <img src="images/avatar/cavina.jpg" class="img-fluid avatar-image avatar-image-left" alt="">
                                <img src="images/avatar/cavina.jpg" class="img-fluid avatar-image avatar-image-left" alt="">
                                <img src="images/avatar/cavina.jpg" class="img-fluid avatar-image avatar-image-left" alt="">
                                <p class="d-inline">Lebih dari 10.000 pendaftar magang</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="speakers section-padding" id="section_3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12 d-flex flex-column justify-content-center align-items-center">
                            <div class="speakers-text-info">
                                <h2 class="mb-4">Our <u class="text-info">Mentors</u></h2>
                                <p>Dengan ini perkenalkan mentor yang akan menemani kalian selama mendapatkan pengalaman
                                    untuk Internship Program di PT Pelabuhan Indonesia Regional 3
                                </p>
                                <a class="custom-btn btn custom-link mt-3" href="#section_4">Tertarik Info Selengkapnya?</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="speakers-thumb">
                                <img src="images/avatar/cavina.jpg" class="img-fluid speakers-image" alt="">
                                <small class="speakers-featured-text">Featured</small>
                                <div class="speakers-info">
                                    <h5 class="speakers-title mb-0">Cavina</h5>
                                    <p class="speakers-text mb-0">Mentor</p>
                                    <ul class="social-icon">
                                        <li><a href="#" class="social-icon-link bi-facebook"></a></li>
                                        <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                                        <li><a href="#" class="social-icon-link bi-google"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="speakers-thumb speakers-thumb-small">
                                        <img src="images/avatar/cavina.jpg" class="img-fluid speakers-image" alt="">
                                        <div class="speakers-info">
                                            <h5 class="speakers-title mb-0">Cavina</h5>
                                            <p class="speakers-text mb-0">Event Planner</p>
                                            <ul class="social-icon">
                                                <li><a href="#" class="social-icon-link bi-facebook"></a></li>
                                                <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="speakers-thumb speakers-thumb-small">
                                        <img src="images/avatar/cavina.jpg" class="img-fluid speakers-image" alt="">
                                        <div class="speakers-info">
                                            <h5 class="speakers-title mb-0">Cavina</h5>
                                            <p class="speakers-text mb-0">Startup Coach</p>
                                            <ul class="social-icon">
                                                <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                                                <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="speakers-thumb speakers-thumb-small">
                                        <img src="images/avatar/cavina.jpg" class="img-fluid speakers-image" alt="">
                                        <div class="speakers-info">
                                            <h5 class="speakers-title mb-0">Cavina</h5>
                                            <p class="speakers-text mb-0">Event Manager</p>
                                            <ul class="social-icon">
                                                <li><a href="#" class="social-icon-link bi-facebook"></a></li>
                                                <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                                                <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="speakers-thumb speakers-thumb-small">
                                        <img src="images/avatar/cavina.jpg" class="img-fluid speakers-image" alt="">
                                        <div class="speakers-info">
                                            <h5 class="speakers-title mb-0">Cavina</h5>
                                            <p class="speakers-text mb-0">Top Level Speaker</p>
                                            <ul class="social-icon">
                                                <li><a href="#" class="social-icon-link bi-instagram"></a></li>
                                                <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="schedule section-padding" id="section_4">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <h2 class="mb-5 text-center">Get to know more about <u class="text-info"> Internship Program 2022</u></h2>
                            <nav>
                                <div class="nav nav-tabs align-items-baseline" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-DayOne-tab" data-bs-toggle="tab" data-bs-target="#nav-DayOne" type="button" role="tab" aria-controls="nav-DayOne" aria-selected="true">
                                        <h3>
                                            <span>Kategori</span>
                                            <small>SMK | D3 | D4/S1 | FreshGrad</small>
                                        </h3>
                                    </button>
                                    <button class="nav-link" id="nav-DayTwo-tab" data-bs-toggle="tab" data-bs-target="#nav-DayTwo" type="button" role="tab" aria-controls="nav-DayTwo" aria-selected="false">
                                        <h3>
                                            <span>Kuota</span>
                                            <small>Kapasitas Peserta Magang</small>
                                        </h3>
                                    </button>
                                    <button class="nav-link" id="nav-DayThree-tab" data-bs-toggle="tab" data-bs-target="#nav-DayThree" type="button" role="tab" aria-controls="nav-DayThree" aria-selected="false">
                                        <h3>
                                            <span>Site Office</span>
                                            <small>Penempatan Peserta Magang</small>
                                        </h3>
                                    </button>
                                    <button class="nav-link" id="nav-DayFour-tab" data-bs-toggle="tab" data-bs-target="#nav-DayFour" type="button" role="tab" aria-controls="nav-DayFour" aria-selected="false">
                                        <h3>
                                            <span>Schedule</span>
                                            <small>Jadwal Pelaksanaan Magang</small>
                                        </h3>
                                    </button>
                                </div>
                            </nav>
                            <div class="tab-content mt-5" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-DayOne" role="tabpanel" aria-labelledby="nav-DayOne-tab">
                                    <div class="row border-bottom pb-5 mb-5">
                                        <div class="col-lg-4 col-12">
                                            <img src="images/schedule/freshgrad.jpg" class="schedule-image img-fluid" alt="">
                                        </div>
                                        <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                                            <h4 class="mb-2">FRESH GRADUATE</h4>
                                            <p>Program Magang Fresh Graduate adalah progam perusahaan yang berlangsung selama 3 (tiga) sampai 6 (enam) bulan
                                                dan dapat diperpanjang dengan akumulasi maksimal 1(satu) tahun.
                                                Program ini memberikan kesempatan kepada lulusan sekolah tinggi atau universitas maksimal 1 (satu) tahun
                                                sejak ijazah diterbitkan dengan tujuan untuk menyalurkan potensi dan menggali pengalaman kerja secara langsung di Perusahaan.</p>
                                            <!-- <div class="d-flex align-items-center mt-4">
                                                <div class="avatar-group d-flex">
                                                    <img src="images/avatar/happy-asian-man-standing-with-arms-crossed-grey-wall.jpg" class="img-fluid avatar-image" alt="">
                                                    <div class="ms-3">
                                                        Logan Wilson
                                                        <p class="speakers-text mb-0">CEO / Founder</p>
                                                    </div>
                                                </div>
                                                <span class="mx-3 mx-lg-5">
                                                    <i class="bi-clock me-2"></i>
                                                    9:00 - 9:45 AM
                                                </span>
                                                <span class="mx-1 mx-lg-5">
                                                    <i class="bi-layout-sidebar me-2"></i>
                                                    Conference Hall 3
                                                </span>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="row border-bottom pb-5 mb-5">
                                        <div class="col-lg-4 col-12">
                                            <img src="images/schedule/mahasiswa.jpg" class="schedule-image img-fluid" alt="">
                                        </div>
                                        <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                                            <h4 class="mb-2">MAHASISWA</h4>
                                            <p>Program Magang Mahasiswa adalah progam perusahaan yang berlangsung paling sedikit selama 3 (tiga) sampai 6 (enam) bulan
                                                dan dapat diperpanjang dengan akumulasi maksimal 1(satu) tahun. Progam ini memberikan kesempatan kepada mahasiswa aktif
                                                tingkat Diploma/Sarjana yang merupakan bentuk implementasi secara sistematis dan
                                                sinkron antara progam pendidikan dengan progam penguasaan keahlian yang diperoleh melalui kegiatan kerja
                                                secara langsung dibawah bimbingan dan pengawasan Pembimbing/Instruktur dengan tujuan ntuk memenuhi tugas dari Perguruan Tinggi.</p>
                                            <!-- <div class="d-flex align-items-center mt-4">
                                                <div class="avatar-group d-flex">
                                                    <img src="images/avatar/portrait-good-looking-brunette-young-asian-woman.jpg" class="img-fluid avatar-image" alt="">
                                                    <div class="ms-3">
                                                    Natalie
                                                    <p class="speakers-text mb-0">Event Planner</p>
                                                </div>
                                                </div>
                                                <span class="mx-3 mx-lg-5">
                                                    <i class="bi-clock me-2"></i>
                                                    10:00 - 10:45 AM
                                                </span>
                                                <span class="mx-1 mx-lg-5">
                                                    <i class="bi-layout-sidebar me-2"></i>
                                                    100-D Room
                                                </span>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-12">
                                            <img src="images/schedule/pkl.jpg" class="schedule-image img-fluid" alt="">
                                        </div>
                                        <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                                            <h4 class="mb-2">SISWA PKL</h4>
                                            <p>Program Magang Siswa/PKL adalah progam perusahaan yang berlangsung paling sedikit selama 3 (tiga) sampai 6 (enam) bulan
                                                dan dapat diperpanjang dengan akumulasi maksimal 1(satu) tahun. Program ini memberikan kesempatan kepada siswa Sekolah Menengah Atas/sederajat
                                                 yang merupakan bentuk implementasi secara sistematis dan sinkron antara progam pendidikan dengan progam penguasaan keahlian
                                                 yang diperoleh melalui kegiatan kerja secara langsung dibawah bimbingan dan pengawasan Pembimbing/Instruktur
                                                 dengan tujuan ntuk memenuhi tugas dari sekolah.</p>
                                            <!-- <div class="d-flex align-items-center mt-4">
                                                <div class="avatar-group d-flex">
                                                    <img src="images/avatar/senior-man-white-sweater-eyeglasses.jpg" class="img-fluid avatar-image" alt="">
                                                    <div class="ms-3">
                                                    Thomas
                                                    <p class="speakers-text mb-0">Startup Coach</p>
                                                </div>
                                                </div>
                                                <span class="mx-3 mx-lg-5">
                                                    <i class="bi-clock me-2"></i>
                                                    11:00 - 11:45 AM
                                                </span>
                                                <span class="mx-1 mx-lg-5">
                                                    <i class="bi-layout-sidebar me-2"></i>
                                                    100-B Room
                                                </span>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-DayTwo" role="tabpanel" aria-labelledby="nav-DayTwo-tab">
                                    <div class="row border-bottom pb-5 mb-5">
                                        <div class="col-lg-4 col-12">
                                            <img src="images/schedule/people-smiling-while-conference-room.jpg" class="schedule-image img-fluid" alt="">
                                        </div>
                                        <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                                            <h4 class="mb-2">Kapasitas / Kuota Peserta Magang</h4>
                                            <p>Diterima atau tidaknya permohonan magang tergantung pada ketersediaan Kuota sesuai dengan Data Kebutuhan Magang, Tim Manajemen
                                                Regional 3 PT Pelabuhan Indonesia (Persero) akan menghubungi dan memberikan surat balasan baik yang dinyatakan diterima ataupun
                                                belum untuk pemagang yang mendaftar.</p>
                                            <!-- <div class="d-flex align-items-center mt-4">
                                                <div class="avatar-group d-flex">
                                                    <img src="images/avatar/pretty-smiling-joyfully-female-with-fair-hair-dressed-casually-looking-with-satisfaction.jpg" class="img-fluid avatar-image" alt="">
                                                    <div class="ms-3">
                                                        Isabella
                                                        <p class="speakers-text mb-0">Event Manager</p>
                                                    </div>
                                                </div>
                                                <span class="mx-3 mx-lg-5">
                                                    <i class="bi-clock me-2"></i>
                                                    9:00 - 9:45 AM
                                                </span>
                                                <span class="mx-1 mx-lg-5">
                                                    <i class="bi-layout-sidebar me-2"></i>
                                                    Conference Hall 2
                                                </span>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-DayThree" role="tabpanel" aria-labelledby="nav-DayThree-tab">
                                    <div class="row border-bottom pb-5 mb-5">
                                        <div class="col-lg-4 col-12">
                                            <img src="images/schedule/people-smiling-while-conference-room.jpg" class="schedule-image img-fluid" alt="">
                                        </div>
                                        <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                                            <h4 class="mb-2">Penempatan Peserta Magang</h4>
                                            <p>Bagi Peserta Magang yang sudah diterima / Calon peserta magang akan ditempatkan sesuai Data Kebutuhan Magang di Divisi, Departemen di semuwa wilayah
                                                kerja Regional 3 PT Pelabuhan Indonesia (Persero) yang mana terdapat pekerjaan atau proyek yang sedang dilaksanakan.</p>
                                            <!-- <div class="d-flex align-items-center mt-4">
                                                <div class="avatar-group d-flex">
                                                    <img src="images/avatar/pretty-smiling-joyfully-female-with-fair-hair-dressed-casually-looking-with-satisfaction.jpg" class="img-fluid avatar-image" alt="">
                                                    <div class="ms-3">
                                                        Isabella
                                                        <p class="speakers-text mb-0">Event Manager</p>
                                                    </div>
                                                </div>
                                                <span class="mx-3 mx-lg-5">
                                                    <i class="bi-clock me-2"></i>
                                                    9:00 - 9:45 AM
                                                </span>
                                                <span class="mx-1 mx-lg-5">
                                                    <i class="bi-layout-sidebar me-2"></i>
                                                    Conference Hall 1
                                                </span>
                                            </div> -->
                                        </div>
                                    </div>
                                    <!-- <div class="row">
                                        <div class="col-lg-4 col-12">
                                            <img src="images/schedule/jason-goodman-bzqU01v-G54-unsplash.jpg" class="schedule-image img-fluid" alt="">
                                        </div>
                                        <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                                            <h4 class="mb-2">Working Life in Corporate Environment</h4>
                                            <p>Quisque mollis, ante non semper ultricies, nulla sapien sollicitudin augue, id scelerisque nunc turpis nec urna.</p>
                                            <div class="d-flex align-items-center mt-4">
                                                <div class="avatar-group d-flex">
                                                    <img src="images/avatar/indoor-shot-beautiful-happy-african-american-woman-smiling-cheerfully-keeping-her-arms-folded-relaxing-indoors-after-morning-lectures-university.jpg" class="img-fluid avatar-image" alt="">
                                                    <div class="ms-3">
                                                    Samantha
                                                    <p class="speakers-text mb-0">Top Level Speaker</p>
                                                </div>
                                                </div>
                                                <span class="mx-3 mx-lg-5">
                                                    <i class="bi-clock me-2"></i>
                                                    10:00 - 10:45 AM
                                                </span>
                                                <span class="mx-1 mx-lg-5">
                                                    <i class="bi-layout-sidebar me-2"></i>
                                                    100-C Room
                                                </span>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="tab-pane fade" id="nav-DayFour" role="tabpanel" aria-labelledby="nav-DayFour-tab">
                                    <div class="row border-bottom pb-5 mb-5">
                                        <div class="col-lg-4 col-12">
                                            <img src="images/schedule/people-smiling-while-conference-room.jpg" class="schedule-image img-fluid" alt="">
                                        </div>
                                        <div class="col-lg-8 col-12 mt-3 mt-lg-0">
                                            <h4 class="mb-2">Jadwal Pelaksanaan Magang</h4>
                                            <p>Pada tahun 2022 Periode pelaksanaan magang yaitu pada bulan : Januari (BATCH 1) - April (BATCH2) - Juli (BATCH3) - Oktober (BATCH4).
                                                Pengajuan dan pendaftaran magang dapat dilakukan 1 Bulan sebelum Periode BATCH, Selanjutnya Tim Manajemen Regional 3 PT Pelabuhan Indonesia
                                                (Persero) akan MATCH-UP Peserta sesuai dengan Data Kebutuhan Magang di Periode yang tersedia.
                                            </p>
                                            <!-- <div class="d-flex align-items-center mt-4">
                                                <div class="avatar-group d-flex">
                                                    <img src="images/avatar/pretty-smiling-joyfully-female-with-fair-hair-dressed-casually-looking-with-satisfaction.jpg" class="img-fluid avatar-image" alt="">
                                                    <div class="ms-3">
                                                        Isabella
                                                        <p class="speakers-text mb-0">Event Manager</p>
                                                    </div>
                                                </div>
                                                <span class="mx-3 mx-lg-5">
                                                    <i class="bi-clock me-2"></i>
                                                    9:00 - 9:45 AM
                                                </span>
                                                <span class="mx-1 mx-lg-5">
                                                    <i class="bi-layout-sidebar me-2"></i>
                                                    Conference Hall 1
                                                </span>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="call-to-action section-padding">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-12">
                            <h2 class="text-white mb-4">Tertarik mengikuti <br><u class="text-info">internship program 2022 ?</u></h2>
                            <p class="text-white">Yuk daftarkan dirimu segera untuk mengikuti internship program 2022 di PT Pelabuhan Indonesia (Persero) Regional 3,
                                Dengan Mekanisme dan Ketentuan yang dijelaskan, berikut Ploting Internship yang telah dibuat.
                            </p>
                        </div>
                        <div class="col-lg-3 col-12 ms-lg-auto mt-4 mt-lg-0">
                            <a href="#section_5" class="custom-btn btn">Ploting</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pricing section-padding" id="section_5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-12 text-center mx-auto mb-5">
                            <h2>Ploting <br><u class="text-info">Internship Program 2022</u></h2>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-5 mb-lg-0">
                            <div class="pricing-thumb bg-white shadow-lg">
                                <div class="pricing-title-wrap d-flex align-items-center">
                                    <h4 class="pricing-title text-white mb-0">Pemberkasan</h4>
                                    <!-- <h5 class="pricing-small-title text-white mb-0 ms-auto">$640</h5> -->
                                </div>
                                <div class="pricing-body">
                                    <p>
                                        • KTP / KIA <br>
                                        • Data Diri & CV Terbaru <br>
                                        • Proposal Pengajuan Magang <br>
                                    </p>
                                    <p>
                                        Berisi : Latar Belakang, Identitas Diri, Tujuan & Manfaat, Bidang Penempatan, Waktu Pelaksanaan
                                    </p>
                                    <div class="border-bottom pb-3 mb-4"></div>
                                    <p>Untuk Pemberkasan Khusus sesuai dengan Kategori dilanjutkan pada saat daftar.</p>
                                    <!-- <a class="custom-btn btn mt-3" href="#">Buy Tickets</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-5 mb-lg-0">
                            <div class="pricing-thumb bg-white shadow-lg">
                                <div class="pricing-title-wrap d-flex align-items-center">
                                    <h4 class="pricing-title text-white mb-0">Interview</h4>
                                    <!-- <h5 class="pricing-small-title text-white mb-0 ms-auto">$840</h5> -->
                                </div>
                                <div class="pricing-body">
                                    <p>Pengumuman lolos pemberkasan magang akan diinfokan melalui alamat E-mail, apabila tidak menerima
                                        surat balasan Max. 1 Minggu sebelum periode pengajuan berlangsung harap menghubungi PIC.
                                    </p><div class="border-bottom pb-3 mb-4"></div>
                                    <p>Setelah diterima Calon Peserta magang wajib mengikuti sesi wawancara kemudian penempatan dan pembekalan
                                        peserta.</p>
                                    <!-- <div class="border-bottom pb-3 mb-4"></div>
                                    <p>Quick group meetings for multiple teams</p> -->
                                    <!-- <a class="custom-btn btn mt-3" href="#">Buy Tickets</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="pricing-thumb bg-white shadow-lg">
                                <div class="pricing-title-wrap d-flex align-items-center">
                                    <h4 class="pricing-title text-white mb-0">Report & Final</h4>
                                    <!-- <h5 class="pricing-small-title text-white mb-0 ms-auto">$1,240</h5> -->
                                </div>
                                <div class="pricing-body">
                                    <p>
                                       Setelah periode hampir selesai, Peserta magang wajib presentasi berupa Laporan Kegiatan
                                       untuk penilaian selama magang sesuai jadwal yang ditentukan oleh PIC.
                                    </p>
                                    <div class="border-bottom pb-3 mb-4"></div>
                                    <p>E - Certificate akan dikirimkan melalui Group Chat dan dikirimkan melalui e-mail Pemagang yang sudah menyelesaikan
                                        Program magang pada periodenya secara keseluruhan.
                                    </p>
                                    <!-- <a class="custom-btn btn mt-3" href="#">Buy Tickets</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="venue section-padding" id="section_6">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <h2 class="mb-5">Lokasi <u class="text-info">PT Pelabuhan Indonesia (persero) Regional 3</u></h2>
                        </div>
                        <div class="col-lg-6 col-12">
                            <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.3695349395616!2d112.73107755112144!3d-7.1986107447774215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f8c47b6d765d%3A0xc61b079f5afde6be!2sPT.%20Pelabuhan%20Indonesia%20(Persero)%20Regional%203!5e0!3m2!1sid!2sid!4v1657685084959!5m2!1sid!2sid" width="100%" height="458" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                            <div class="venue-thumb bg-white shadow-lg">
                                <div class="venue-info-title">
                                    <h2 class="text-white mb-0">PT. Pelabuhan Indonesia (Persero) Regional 3</h2>
                                </div>
                                <div class="venue-info-body">
                                    <h4 class="d-flex">
                                        <i class="bi-geo-alt me-2"></i>
                                        <span>Jl. Perak Timur No.610, Perak Utara, Kec. Pabean Cantikan, Kota SBY, Jawa Timur 60165</span>
                                    </h4>
                                    <h5 class="mt-4 mb-3">
                                        <a href="mailto:hello@yourgmail.com">
                                            <i class="bi-envelope me-2"></i>
                                            internship.regional3@gmail.com
                                        </a>
                                    </h5>
                                    <h5 class="mb-0">
                                        <a href="tel: 305-240-9671">
                                            <i class="bi-telephone me-2"></i>
                                            085858585858
                                        </a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="contact section-padding" id="section_7">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-12 mx-auto">
                            <form class="custom-form contact-form bg-white shadow-lg" action="/insert_theysay" method="post" role="document" enctype="multipart/form-data">
                                @csrf
                                {{ csrf_field() }}
                                <h2><center>Do you have anything to say?</center></h2>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Name" value="{{old('name')}}" required>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email" value="{{old('email')}}" required>
                                    </div>
                                    <div class="col-12">
                                        <input rows="5" type="text" name="message" id="message" class="form-control" placeholder="Message" value="{{old('message')}}" required>
                                        {{-- <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message" value="{{old('message')}}"></textarea> --}}
                                        <button type="submit" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-3']);" class="form-control">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <br><br>
                <center>
                @if (Session::has('status'))
                <div class="col-lg-4 col-12 alert alert-success" role="alert">
                    <center><strong>{{Session::get('message')}}</strong></center>
                </div>
                @endif
                </center>
            </section>
        </main>
        <footer class="site-footer">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-12 border-bottom pb-5 mb-5">
                        <div class="d-flex">
                            <a href="/" class="navbar-brand">
                                <img src="images/logo-internship.png" alt="" width="230" height="60">&nbsp;&nbsp;&nbsp;
                                <img src="images/logo-pelindo.png" alt="" width="250" height="50">&nbsp;&nbsp;&nbsp;
                                {{-- <i><span class="brand-text">INTERNSHIP <br> PROGRAM 2022</span></i> --}}
                            </a>
                            <ul class="social-icon ms-auto">
                                <!-- <li><a href="#" class="social-icon-link bi-facebook"></a></li> -->
                                <!-- <li><a href="#" class="social-icon-link bi-whatsapp"></a></li> -->
                                <!-- <li><a href="#" class="social-icon-link bi-youtube"></a></li> -->
                                <li><a target="_blank" href="https://www.instagram.com/internship.regional3/" class="social-icon-link bi-instagram"></a></li>

                                <li><a href="#section_1" class="bi-arrow-up arrow-icon custom-link"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <!-- <ul class="footer-menu d-flex flex-wrap">
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Story</a></li>
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Code of Conduct</a></li>
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Privacy and Terms</a></li>
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                        </ul> -->
                    </div>
                    <div class="col-lg-5 col-12 ms-lg-auto">
                        <div class="copyright-text-wrap d-flex align-items-center">
                            <!-- <p class="copyright-text ms-lg-auto me-4 mb-0">Copyright © 2022 Leadership Event Co., Ltd.               -->
                            <!-- <br>All Rights Reserved.  -->
          					<!-- <br><br>Design: <a title="CSS Templates" rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p> -->

                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

        <script src="sweetalert2.all.min.js"></script>
        <script src="sweetalert2.min.js"></script>
        <link rel="stylesheet" href="sweetalert2.min.css">
        <script>
        document.querySelector('.sweet-3').onclick = function(){
        swal("Saved Changed!", "You clicked the button!", "success");
        };
        </script>
    </body>
</html>
