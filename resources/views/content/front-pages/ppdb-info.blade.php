@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'PPDB Tahun Ajaran 2024')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page-pricing.css') }}" />
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/front-page-pricing.js') }}"></script>
@endsection


@section('content')
    <!-- Pricing Plans -->
    <section class="section-py first-section-pt">
        <div class="container">
            <h2 class="text-center mb-2">PPDB Tahun Ajaran 2024</h2>
            <p class="text-center">Informasi Daftar Ulang</p>

            <div class="row mx-0 gy-3 px-lg-5">
                <!-- Basic -->
                <div class="col-lg mb-md-0 mb-4">
                    <div class="card border rounded shadow-none">
                        <div class="card-body">
                            <div>
                                <p>Pengumuman Hasil Seleksi PPDB Tahun Pelajaran 2023/2024 dapat diakses melalui website
                                    <span><a href="">https://ppdb.bantenprov.go.id/</a></span> &mdash; [ klik disini
                                    tata cara cek kelulusan ]
                                </p>

                                <p>Bagi siswa/i yang dinyatakan lolos seleksi PPDB 2023 agar segera melakukan Daftar Ulang
                                    dengan mengisi formulir online daftar ulang [ klik disini ] dengan ketentuan berikut:
                                </p>

                                <li class="mb-2 d-flex align-items-center"><i class="ti ti-point ti-lg"></i>A. Jadwal dan
                                    Persyaratan Pengumpulan Dokumen:</li>


                                <p>&mdash; Mengisi formulir daftar ulang. </p>
                                <p>&mdash; Pengumpulan dokumen di laksanankan di SMKN 1 Kabupaten Tangerang pada tanggal :
                                    12 &ndash; 14 juli 2023. Dimulai Pukul 08.00 &ndash; 12.00 WIB. </p>
                                <p>&mdash; Siswa/i hadir kesekolah dengan Pakaian Seragam SMP/MTs lengkap. </p>
                                <p>&mdash; Siswa/i hadir sesuai jadwal jurusan berikut: Hari/tanggal: Rabu, 12 Juli 2023
                                    &ndash; ( TKJ, TEI dan TITL ). </p>
                                <p>&mdash; Hari/tanggal: Kamis, 13 Juli 2023 &ndash; ( TPTU, DKV dan TBSM ). </p>
                                <p>&mdash; Hari/tanggal: Jumat, 14 Juli 2023 &ndash; ( untuk siswa/i yang dokumennya belum
                                    lengkap ). </p><br>

                                <li class="mb-2 d-flex align-items-center"><i class="ti ti-point ti-lg"></i>B. Dokumen yang
                                    harus disiapkan:</li>

                                <p>&mdash; Bukti Keterangan Lolos Seleksi &ndash; [ klik disini ] Bukti Daftar Ulang (cek di
                                    email masuk apabila sudah mengisi form daftar ulang). </p>
                                <p>&mdash; Surat Pernyataan. </p>
                                <p>&mdash; Foto Copy Kartu Keluarga. </p>
                                <p>&mdash; Foto Copy Akta Kelahiran. </p>
                                <p>&mdash; Legalisir Rapor Semester 1-5. </p>
                                <p>&mdash; Surat Keterangan Lulus (Asli). </p>
                                <p>&mdash; Pas Foto Berwarna 3&times;4 (4 lembar). </p><br>
                                <li class="mb-2 d-flex align-items-center"><i class="ti ti-point ti-lg"></i>C. Seluruh
                                    dokumen dimasukan kedalam Map Plastik dengan ketentuan:</li>

                                <p>&mdash; Teknik Elektronika Industri (TEI) &ndash; Warna: Kuning . </p>
                                <p>&mdash; Teknik Instalasi Tenaga Listrik (TITL) &ndash; Warna: Merah . </p>
                                <p>&mdash; Teknik Pendingin dan Tata Udara (TPTU) &ndash; Warna: Biru . </p>
                                <p>&mdash; Teknik Komputer dan Jaringan (TKJ) &ndash; Warna: Hijau . </p>
                                <p>&mdash; Desain Komunikasi Visual (DKV) &ndash; Warna: Ungu . </p>
                                <p>&mdash; Teknik dan Bisnis Sepeda Motor (TBSM) &ndash; Warna: Orange .</p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--/ Pricing Plans -->
    <!-- Pricing Free Trial -->
    <section class="pricing-free-trial bg-label-primary">
        <div class="container">
            <div class="position-relative">
                <div class="d-flex justify-content-between flex-column-reverse flex-lg-row align-items-center py-4 px-5">
                    <div class="text-center text-lg-start mt-2 ms-3">
                        <h3 class="text-primary mb-1">Terdapat Kesulitan? Hubungi Kami Sekarang Juga!</h3>
                        <p class="text-body mb-1">Kamu akan mendapatkan pelayanan khusus untuk keluhan anda.</p>
                        <a href="/#landingCTANew" class="btn btn-primary mt-4 mb-2">Hubungi Kami Sekarang
                        </a>
                    </div>
                    <!-- image -->
                    <div class="text-center">
                        <img src="{{ asset('assets/img/illustrations/girl-with-laptop.png') }}"
                            class="img-fluid me-lg-5 pe-lg-1 mb-3 mb-lg-0" alt="Api Key Image" width="202">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Pricing Free Trial -->
    <!-- Plans Comparison -->
    <section class="section-py first-section-pt">
        <div class="container">
            <h2 class="text-center mb-2">Tes Potensi Akademik (TPA)</h2>
            <p class="text-center">Informasi Tes Potensi Akademik</p>

            <div class="row mx-0 gy-3 px-lg-5">
                <!-- Basic -->
                <div class="col-lg mb-md-0 mb-4">
                    <div class="card border rounded shadow-none">
                        <div class="card-body">
                            <div>
                                <p>Berikut ini adalah informasi bagi calon peserta didik baru SMKN 1 Kabupaten Tangerang
                                    Tahun Pelajaran 2023/2024 terkait tes potensi akademik:
                                </p>

                                <p>Siswa pendaftar yang telah di VERIFIKASI , wajib hadir ke SMK Negeri 8 Kabupaten
                                    Tangerang untuk mengikuti TES POTENSI AKADEMIK sesuai dengan Hari dan tanggal yang telah
                                    di tentukan , mulai Tanggal 06 Juli 2023.

                                <p>&mdash; Siswa hadir kesekolah dengan : Memakai Pakaian Seragam SMP/MTs lengkap.</p>
                                <p>&mdash; Siswa Peserta Test Potensi Akademik , Wajib Hadir : 30 menit, sebelum Tes
                                    dimulai.</p><br>
                                </p>

                                <li class="mb-2 d-flex align-items-center"><i class="ti ti-point ti-lg"></i>Siswa yang hadir
                                    Wajib untuk membawa :

                                </li>


                                <p>&mdash; HP/Smartphone (memiliki paket internet).</p>
                                <p>&mdash; Bukti Nomor Tes.</p>
                                <p>&mdash; Alat Tulis dan Papan Alas Ujian.</p>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--/ Plans Comparison -->
    <!-- FAQS -->
    <section class="section-py pricing-faqs rounded-bottom bg-body">
        <div class="container">
            <div class="text-center mb-3 pb-1">
                <span class="badge bg-label-primary">Pertanyaan Yang Sering Diajukan</span>
            </div>
            <h3 class="text-center mb-1">Pertanyaan <span class="section-title">Yang Sering Diajukan</span></h3>
            <p class="text-center mb-5 pb-3">Jelajahi FAQ ini untuk menemukan jawaban atas pertanyaan umum.</p>
            <div class="row gy-5">
                <div class="col-lg-5">
                    <div class="text-center">
                        <img src="{{ asset('assets/img/avatars/guru') }}" alt="faq boy with logos" class="faq-image" />
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="accordion" id="accordionExample">
                        <div class="card accordion-item active">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#accordionOne" aria-expanded="true" aria-controls="accordionOne">
                                    Kapan Dibuka PPDB Tahun 2024?
                                </button>
                            </h2>

                            <div id="accordionOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame snaps
                                    icing
                                    marzipan gummi bears macaroon dragée danish caramels powder. Bear claw dragée pastry
                                    topping
                                    soufflé. Wafer gummi bears marshmallow pastry pie.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                                    Bagaimana Proses PPDB Tahun 2024?
                                </button>
                            </h2>
                            <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée oat
                                    cake
                                    dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut
                                    gummies. Jelly
                                    beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
                                    Apakah PPDB Bisa dilakukan Secara Online?
                                </button>
                            </h2>
                            <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Regular license can be used for end products that do not charge users for access or
                                    service(access
                                    is free and there will be no monthly subscription fee). Single regular license can be
                                    used for
                                    single end product and end product can be used by you or your client. If you want to
                                    sell end
                                    product to multiple clients then you will need to purchase separate license for each
                                    client. The
                                    same rule applies if you want to use the same end product on multiple domains(unique
                                    setup). For
                                    more info on regular license you can check official description.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionFour" aria-expanded="false" aria-controls="accordionFour">
                                    Apa Syarat Untuk Daftar Ulang?
                                </button>
                            </h2>
                            <div id="accordionFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis et aliquid quaerat
                                    possimus maxime!
                                    Mollitia reprehenderit neque repellat deleniti delectus architecto dolorum maxime,
                                    blanditiis
                                    earum ea, incidunt quam possimus cumque.
                                </div>
                            </div>
                        </div>
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#accordionFive" aria-expanded="false" aria-controls="accordionFive">
                                    Tahun Ajaran Baru Dimulai Kapan?
                                </button>
                            </h2>
                            <div id="accordionFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi molestias exercitationem
                                    ab cum
                                    nemo facere voluptates veritatis quia, eveniet veniam at et repudiandae mollitia ipsam
                                    quasi
                                    labore enim architecto non!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ FAQS -->

@endsection
