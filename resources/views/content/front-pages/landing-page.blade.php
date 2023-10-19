@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Halaman Utama')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/nouislider/nouislider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />
@endsection

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/front-page-landing.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/nouislider/nouislider.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/front-page-landing.js') }}"></script>
@endsection

@section('content')
    <div data-bs-spy="scroll" class="scrollspy-example">
        <!-- Hero: Start -->
        <section id="hero-animation">
            <div id="landingHero" class="section-py landing-hero position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="hero-text-box">
                                <h1 class="text-primary hero-title fw-bold">SMK Negeri 8 Kab. Tangerang</h1>
                                <h2 class="hero-sub-title h6 mb-4 pb-1">
                                    Schools that focus on industry-based education to equip students to be ready with the
                                    needs of national and international industries.
                                </h2>
                                <h2 class="hero-sub-title h6 mb-4 pb-1">
                                    So with that one of the steps that the school took, collaborating with MikroTIK
                                    specifically for the Department of Computer and Network Engineering, MikroTik is a
                                    Latvian company which was founded in 1996 to develop routers and wireless ISP systems.
                                    MikroTik now provides hardware and software for Internet connectivity in most of the
                                    countries around the world.
                                </h2>
                                <div class="landing-hero-btns-container d-flex align-items-center">
                                    <div class="landing-hero-btn d-inline-block position-relative me-4">
                                        <span class="hero-btn-item position-absolute d-none d-md-flex text-heading">Lihat
                                            Selengkapnya
                                            <img src="{{ asset('assets/img/front-pages/icons/Join-community-arrow.png') }}"
                                                alt="Join community arrow" class="scaleX-n1-rtl" />
                                        </span>
                                        <a href="/ppdb-info" class="btn btn-primary btn-md-lg btn-sm-sm">PPDB Online
                                            2024</a>
                                    </div>
                                    <a href="#" class="btn btn-success btn-md-lg btn-sm-sm">Cek Kelulusan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <img src="{{ asset('assets/img/avatars/teach.png') }}" alt="Join community arrow" />
                            <div class="card p-3">
                                <figure class="p-3 mb-0">
                                    <blockquote class="blockquote">
                                        <p>Tujuan utama pendidikan bukanlah pengetahuan, tetapi tindakan.</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer mb-0 text-muted">
                                        EKO SAPTINI,S.Pd, M.Pd - <cite title="Source Title">Kepala Sekolah</cite>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Hero: End -->

        <!-- Useful features: Start -->
        <section id="landingJurusan" class="section-py landing-features">
            <div class="container">
                <div class="text-center mb-3 pb-1">
                    <span class="badge bg-label-primary">Jurusan Sekolah</span>
                </div>
                <h3 class="text-center mb-1">
                    <span class="section-title">Semua Yang Anda Cari</span> Kami Memiliki Jurusan Yang Lengkap
                </h3>
                <p class="text-center mb-3 mb-md-5 pb-3">
                    Pelajari Dan Pilih Salah Satu Jurusan Yang Kami Miliki
                </p>
                <div class="features-icon-wrapper row gx-0 gy-4 g-sm-5">
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <img src="{{ asset('assets/img/front-pages/icons/keyboard.png') }}" alt="laptop charging" />
                        </div>
                        <h5 class="mb-3">Teknik Instalasi Tenaga Listrik</h5>
                        <p class="features-icon-description">
                            Jurusan yang mempelajari tentang perencanaan dan pemasangan instalasi penerangan, tenaga
                            pemasangan dan pengoperasian motor listrik dengan kendali elektromekanik, elektronik dan PLC
                            (Programable Logic Controller).
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <img src="{{ asset('assets/img/front-pages/icons/keyboard.png') }}" alt="transition up" />
                        </div>
                        <h5 class="mb-3">Teknik Pemesinan</h5>
                        <p class="features-icon-description">
                            Jurusan yang mempelajari tentang energi dan sumber energinya.
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <img src="{{ asset('assets/img/front-pages/icons/keyboard.png') }}" alt="edit" />
                        </div>
                        <h5 class="mb-3">Teknik Sepeda Motor</h5>
                        <p class="features-icon-description">
                            Teknik Otomotif yang menekankan pada keterampilan pelayanan jasa mekanik kendaraan sepeda motor
                            roda dua.
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <img src="{{ asset('assets/img/front-pages/icons/keyboard.png') }}" alt="3d select solid" />
                        </div>
                        <h5 class="mb-3">Teknik Komputer dan Jaringan</h5>
                        <p class="features-icon-description">
                            Teknik yang mempelajari tentang cara instalasi PC, instalasi LAN, memperbaiki PC dan mempelajari
                            program-program PC.
                        </p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <img src="{{ asset('assets/img/front-pages/icons/keyboard.png') }}" alt="lifebelt" />
                        </div>
                        <h5 class="mb-3">Akuntansi</h5>
                        <p class="features-icon-description">Bidang studi yang mempelajari materi terkait metode pencatatan
                            dan penyusunan laporan keuangan yang berguna membantu pemangku kepentingan dalam proses
                            pengambilan keputusan.</p>
                    </div>
                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                        <div class="text-center mb-3">
                            <img src="{{ asset('assets/img/front-pages/icons/keyboard.png') }}" alt="google docs" />
                        </div>
                        <h5 class="mb-3">Administrasi Perkantoran</h5>
                        <p class="features-icon-description">Program studi di perguruan tinggi yang mempelajari mengenai
                            operasional perusahaan baik secara administrasi dan kebutuhan kantor serta mengelola dan
                            pengawasan tempat kerja.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Useful features: End -->

        <!-- Real customers reviews: Start -->
        <section id="landingReviews" class="section-py bg-body landing-reviews pb-0">
            <!-- What people say slider: Start -->
            <div class="container">
                <div class="row align-items-center gx-0 gy-4 g-lg-5">
                    <div class="col-md-6 col-lg-5 col-xl-3">
                        <div class="mb-3 pb-1">
                            <span class="badge bg-label-primary">Review Perusahaan Untuk Kami</span>
                        </div>
                        <h3 class="mb-1"><span class="section-title">Partner Testimonial</span></h3>
                        <p class="mb-3 mb-md-5">
                            Lihat Apa Yang Mereka Katakan<br class="d-none d-xl-block" />
                            Kepuasan Partnert Terhadap Kami
                        </p>
                        <div class="landing-reviews-btns">
                            <button id="reviews-previous-btn" class="btn btn-label-primary reviews-btn me-3 scaleX-n1-rtl"
                                type="button">
                                <i class="ti ti-chevron-left ti-sm"></i>
                            </button>
                            <button id="reviews-next-btn" class="btn btn-label-primary reviews-btn scaleX-n1-rtl"
                                type="button">
                                <i class="ti ti-chevron-right ti-sm"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-7 col-xl-9">
                        <div class="swiper-reviews-carousel overflow-hidden mb-5 pb-md-2 pb-md-3">
                            <div class="swiper" id="swiper-reviews">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <div
                                                class="card-body text-body d-flex flex-column justify-content-between h-100">
                                                <div class="mb-3">
                                                    <img src="{{ asset('assets/img/partner/1.png') }}" alt="client logo"
                                                        class="client-logo img-fluid" />
                                                </div>
                                                <p>
                                                    “Vuexy is hands down the most useful front end Bootstrap theme I've ever
                                                    used. I can't wait
                                                    to use it again for my next project.”
                                                </p>
                                                <div class="text-warning mb-3">
                                                    <i class="ti ti-star-filled ti-sm"></i>
                                                    <i class="ti ti-star-filled ti-sm"></i>
                                                    <i class="ti ti-star-filled ti-sm"></i>
                                                    <i class="ti ti-star-filled ti-sm"></i>
                                                    <i class="ti ti-star-filled ti-sm"></i>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-2 avatar-sm">
                                                        <img src="{{ asset('assets/img/partner/1.png') }}" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Cecilia Payne</h6>
                                                        <p class="small text-muted mb-0">CEO of Airbnb</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <div
                                                class="card-body text-body d-flex flex-column justify-content-between h-100">
                                                <div class="mb-3">
                                                    <img src="{{ asset('assets/img/partner/2.png') }}" alt="client logo"
                                                        class="client-logo img-fluid" />
                                                </div>
                                                <p>
                                                    “I've never used a theme as versatile and flexible as Vuexy. It's my go
                                                    to for building
                                                    dashboard sites on almost any project.”
                                                </p>
                                                <div class="text-warning mb-3">
                                                    <i class="ti ti-star-filled ti-sm"></i>
                                                    <i class="ti ti-star-filled ti-sm"></i>
                                                    <i class="ti ti-star-filled ti-sm"></i>
                                                    <i class="ti ti-star-filled ti-sm"></i>
                                                    <i class="ti ti-star-filled ti-sm"></i>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-2 avatar-sm">
                                                        <img src="{{ asset('assets/img/avatars/2.png') }}" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Eugenia Moore</h6>
                                                        <p class="small text-muted mb-0">Founder of Hubspot</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <div
                                                class="card-body text-body d-flex flex-column justify-content-between h-100">
                                                <div class="mb-3">
                                                    <img src="{{ asset('assets/img/partner/3.png') }}" alt="client logo"
                                                        class="client-logo img-fluid" />
                                                </div>
                                                <p>
                                                    This template is really clean & well documented. The docs are really
                                                    easy to understand and
                                                    it's always easy to find a screenshot from their website.
                                                </p>
                                                <div class="text-warning mb-3">
                                                    <i class="ti ti-star-filled ti-sm"></i>
                                                    <i class="ti ti-star-filled ti-sm"></i>
                                                    <i class="ti ti-star-filled ti-sm"></i>
                                                    <i class="ti ti-star-filled ti-sm"></i>
                                                    <i class="ti ti-star-filled ti-sm"></i>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-2 avatar-sm">
                                                        <img src="{{ asset('assets/img/avatars/3.png') }}" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Curtis Fletcher</h6>
                                                        <p class="small text-muted mb-0">Design Lead at Dribbble</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card h-100">
                                            <div
                                                class="card-body text-body d-flex flex-column justify-content-between h-100">
                                                <div class="mb-3">
                                                    <img src="{{ asset('assets/img/partner/4.png') }}" alt="client logo"
                                                        class="client-logo img-fluid" />
                                                </div>
                                                <p>
                                                    All the requirements for developers have been taken into consideration,
                                                    so I’m able to build
                                                    any interface I want.
                                                </p>
                                                <div class="text-warning mb-3">
                                                    <i class="ti ti-star-filled ti-sm"></i>
                                                    <i class="ti ti-star-filled ti-sm"></i>
                                                    <i class="ti ti-star-filled ti-sm"></i>
                                                    <i class="ti ti-star-filled ti-sm"></i>
                                                    <i class="ti ti-star ti-sm"></i>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar me-2 avatar-sm">
                                                        <img src="{{ asset('assets/img/avatars/4.png') }}" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Sara Smith</h6>
                                                        <p class="small text-muted mb-0">Founder of Continental</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- What people say slider: End -->
            <hr class="m-0" />
            <!-- Logo slider: Start -->
            <div class="container">
                <div class="swiper-logo-carousel py-4 my-lg-2">
                    <div class="swiper" id="swiper-clients-logos">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/partner/1.png') }}" alt="client logo" class="client-logo"
                                    data-app-light-img="partner/1.png" data-app-dark-img="partner/1.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/partner/2.png') }}" alt="client logo" class="client-logo"
                                    data-app-light-img="partner/2.png" data-app-dark-img="partner/2.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/partner/3.png') }}" alt="client logo" class="client-logo"
                                    data-app-light-img="partner/3.png" data-app-dark-img="partner/3.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/partner/4.png') }}" alt="client logo" class="client-logo"
                                    data-app-light-img="partner/4.png" data-app-dark-img="partner/4.png" />
                            </div>
                            <div class="swiper-slide">
                                <img src="{{ asset('assets/img/partner/3.png') }}" alt="client logo" class="client-logo"
                                    data-app-light-img="partner/3.png" data-app-dark-img="partner/3.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Logo slider: End -->
        </section>
        <!-- Real customers reviews: End -->

        <!-- Our great team: Start -->
        <section id="landingTeam" class="section-py landing-team">
            <div class="container">
                <div class="text-center mb-3 pb-1">
                    <span class="badge bg-label-primary">Pimpinan</span>
                </div>
                <h3 class="text-center mb-1"><span class="section-title">Pimpinan</span> SMK Negeri 8 Kab. Tangerang</h3>
                <p class="text-center mb-md-5 pb-3">Ingin mengenal siapa kami?</p>
                <div class="row gy-5 mt-2">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card mt-3 mt-lg-0 shadow-none">
                            <div class="bg-label-primary position-relative team-image-box">
                                <img src="{{ asset('assets/img/front-pages/landing-page/team-member-1.png') }}"
                                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                                    alt="human image" />
                            </div>
                            <div class="card-body border border-top-0 border-label-primary text-center">
                                <h5 class="card-title mb-0">EKO SAPTINI,S.Pd, M.Pd</h5>
                                <p class="text-muted mb-0">Kepala Sekolah</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card mt-3 mt-lg-0 shadow-none">
                            <div class="bg-label-info position-relative team-image-box">
                                <img src="{{ asset('assets/img/front-pages/landing-page/team-member-2.png') }}"
                                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                                    alt="human image" />
                            </div>
                            <div class="card-body border border-top-0 border-label-info text-center">
                                <h5 class="card-title mb-0">Paul Miles</h5>
                                <p class="text-muted mb-0">Wakil Kepala Sekolah</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card mt-3 mt-lg-0 shadow-none">
                            <div class="bg-label-danger position-relative team-image-box">
                                <img src="{{ asset('assets/img/front-pages/landing-page/team-member-3.png') }}"
                                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                                    alt="human image" />
                            </div>
                            <div class="card-body border border-top-0 border-label-danger text-center">
                                <h5 class="card-title mb-0">Nannie Ford</h5>
                                <p class="text-muted mb-0">Waka Kesiswaan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card mt-3 mt-lg-0 shadow-none">
                            <div class="bg-label-success position-relative team-image-box">
                                <img src="{{ asset('assets/img/front-pages/landing-page/team-member-4.png') }}"
                                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                                    alt="human image" />
                            </div>
                            <div class="card-body border border-top-0 border-label-success text-center">
                                <h5 class="card-title mb-0">Chris Watkins</h5>
                                <p class="text-muted mb-0">Kepala Tata Usaha</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our great team: End -->

        <!-- FAQ: Start -->
        <section id="landingFAQ" class="section-py bg-body landing-faq">
            <div class="container">
                <div class="text-center mb-3 pb-1">
                    <span class="badge bg-label-primary">Pertanyaan Yang Sering Diajukan</span>
                </div>
                <h3 class="text-center mb-1">Pertanyaan <span class="section-title">Yang Sering Diajukan</span></h3>
                <p class="text-center mb-5 pb-3">Jelajahi FAQ ini untuk menemukan jawaban atas pertanyaan umum.</p>
                <div class="row gy-5">
                    <div class="col-lg-5">
                        <div class="text-center">
                            <img src="{{ asset('assets/img/avatars/guru') }}" alt="faq boy with logos"
                                class="faq-image" />
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
                                        Lemon drops chocolate cake gummies carrot cake chupa chups muffin topping. Sesame
                                        snaps icing
                                        marzipan gummi bears macaroon dragée danish caramels powder. Bear claw dragée pastry
                                        topping
                                        soufflé. Wafer gummi bears marshmallow pastry pie.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionTwo" aria-expanded="false"
                                        aria-controls="accordionTwo">
                                        Bagaimana Proses PPDB Tahun 2024?
                                    </button>
                                </h2>
                                <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Dessert ice cream donut oat cake jelly-o pie sugar plum cheesecake. Bear claw dragée
                                        oat cake
                                        dragée ice cream halvah tootsie roll. Danish cake oat cake pie macaroon tart donut
                                        gummies. Jelly
                                        beans candy canes carrot cake. Fruitcake chocolate chupa chups.
                                    </div>
                                </div>
                            </div>
                            <div class="card accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#accordionThree" aria-expanded="false"
                                        aria-controls="accordionThree">
                                        Apakah PPDB Bisa dilakukan Secara Online?
                                    </button>
                                </h2>
                                <div id="accordionThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Regular license can be used for end products that do not charge users for access or
                                        service(access
                                        is free and there will be no monthly subscription fee). Single regular license can
                                        be used for
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
                                        data-bs-target="#accordionFour" aria-expanded="false"
                                        aria-controls="accordionFour">
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
                                        data-bs-target="#accordionFive" aria-expanded="false"
                                        aria-controls="accordionFive">
                                        Tahun Ajaran Baru Dimulai Kapan?
                                    </button>
                                </h2>
                                <div id="accordionFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi molestias
                                        exercitationem ab cum
                                        nemo facere voluptates veritatis quia, eveniet veniam at et repudiandae mollitia
                                        ipsam quasi
                                        labore enim architecto non!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ: End -->

        <!-- CTA: Start -->
        <section id="landingCTA" class="section-py landing-cta p-lg-0 pb-0">
            <div class="container">
                <div class="row align-items-center gy-5 gy-lg-0">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h6 class="h2 text-primary fw-bold mb-1">Ingin Mengenal lebih Lanjut?</h6>
                        <p class="fw-medium mb-4">Lihat Secara Lengkap Tentang SMK Negeri 8 Kab. Tangerang</p>
                        <a href="{{ url('/front-pages/payment') }}" class="btn btn-lg btn-primary">Profile Sekolah</a>
                    </div>
                    <div class="col-lg-6 pt-lg-5 text-center text-lg-end">
                        <img src="{{ asset('assets/img/backgrounds/logo.jpg') }}" alt="cta dashboard"
                            class="img-fluid" />
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA: End -->

        <!-- Contact Us: Start -->
        <section id="landingCTANew" class="section-py bg-body landing-contact">
            <div class="container">
                <div class="text-center mb-3 pb-1">
                    <span class="badge bg-label-primary">Hubungi Kami</span>
                </div>
                <h3 class="text-center mb-1"><span class="section-title">Mari kita</span> bekerja bersama</h3>
                <p class="text-center mb-4 mb-lg-5 pb-md-3">Ada pertanyaan atau komentar? Silakan tulis pesan kepada kami
                </p>
                <div class="row gy-4">
                    <div class="col-lg-5">
                        <div class="contact-img-box position-relative border p-2 h-100">
                            <img src="{{ asset('assets/img/front-pages/landing-page/contact-customer-service.png') }}"
                                alt="contact customer service" class="contact-img w-100 scaleX-n1-rtl" />
                            <div class="pt-3 px-4 pb-1">
                                <div class="row gy-3 gx-md-4">
                                    <div class="col-md-6 col-lg-12 col-xl-7">
                                        <div class="d-flex align-items-center">
                                            <div class="badge bg-label-primary rounded p-2 me-2"><i
                                                    class="ti ti-mail ti-sm"></i></div>
                                            <div>
                                                <p class="mb-0">Email</p>
                                                <h5 class="mb-0">
                                                    <a href="mailto:example@gmail.com"
                                                        class="text-heading">smkn_delapan@yahoo.com</a>
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12 col-xl-5">
                                        <div class="d-flex align-items-center">
                                            <div class="badge bg-label-success rounded p-2 me-2">
                                                <i class="ti ti-phone-call ti-sm"></i>
                                            </div>
                                            <div>
                                                <p class="mb-0">Phone</p>
                                                <h5 class="mb-0"><a href="tel:+1234-568-963"
                                                        class="text-heading">02193029554</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-1">Kirim Pesan Kepada Kami</h4>
                                <p class="mb-4">
                                    Jika Memiliki Pertanyaan Khusus / Keluhan Kepada Kami,<br class="d-none d-lg-block" />
                                    Silahkan Mengirimkan Pesan Kepada Kami! Akan Kami Jawab Secepat Mungkin
                                </p>
                                <form>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label" for="contact-form-fullname">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="contact-form-fullname"
                                                placeholder="john" />
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="contact-form-email">Email Anda</label>
                                            <input type="text" id="contact-form-email" class="form-control"
                                                placeholder="johndoe@gmail.com" />
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label" for="contact-form-message">Pesan</label>
                                            <textarea id="contact-form-message" class="form-control" rows="8" placeholder="Write a message"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary">Kirim Sekarang</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us: End -->
    </div>
@endsection
