<!-- Footer: Start -->
<footer class="landing-footer bg-body footer-text">
  <div class="footer-top">
    <div class="container">
      <div class="row gx-0 gy-4 g-md-5">
        <div class="col-lg-5">
          <a href="{{url('front-pages/landing')}}" class="app-brand-link mb-4">
            <span class="app-brand-logo demo">@include('_partials.macros',['height'=>20,'withbg' => "fill: #fff;"])</span>
            <span class="app-brand-text demo footer-link fw-bold ms-2 ps-1">SMK Negeri 8 Kab. Tangerang</span>
          </a>
          <p class="footer-text footer-logo-description mb-4">
            Jl. Sarwani No.10, Tipar Raya, Kec. Jambe, Kabupaten Tangerang, Banten 15720<br>
            <p>NPSN: 20614732</p>
            <p>Status: Negeri</p>
            <p>Bentuk Pendidikan: SMK</p>
            <p>Status Kepemilikan: Pemerintah Daerah</p>
            <p>SK Pendirian Sekolah: 421/Kep.252-Huk/2009</p>
            <p>Tanggal SK Pendirian: 2009-06-08</p>
            <p>SK Izin Operasional : 421/Kep.252-Huk/2009</p>
            <p>Tanggal SK Izin Operasional : 2009-06-08</p>
          </p>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <h6 class="footer-title mb-4">Halaman Unggulan</h6>
          <ul class="list-unstyled">
            <li class="mb-3">
              <a href="/demo-1" target="_blank" class="footer-link">Pendaftaran SMKN 8</a>
            </li>
            <li class="mb-3">
              <a href="/demo-5" target="_blank" class="footer-link">LMS SMKN 8</a>
            </li>
            <li class="mb-3">
              <a href="/demo-2" target="_blank" class="footer-link">eRapor SMKN 8</a>
            </li>
            <li class="mb-3">
              <a href="/demo-3" target="_blank" class="footer-link">SKL SMKN 8</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <h6 class="footer-title mb-4">Jurusan Pendidikan</h6>
          <ul class="list-unstyled">
            <li class="mb-3">
              <a href="{{url('/front-pages/pricing')}}" class="footer-link">Teknik Elektronika Industri</a>
            </li>
            <li class="mb-3">
              <a href="{{url('/front-pages/payment')}}" class="footer-link">Teknik Instalasi Tenaga Listrik<span class="badge rounded bg-primary ms-2">New</span></a>
            </li>
            <li class="mb-3">
              <a href="{{url('/front-pages/checkout')}}" class="footer-link">Teknik Komputer Dan Jaringan</a>
            </li>
            <li class="mb-3">
              <a href="{{url('/front-pages/help-center')}}" class="footer-link">Design Komunikasi Visual</a>
            </li>
            <li class="mb-3">
              <a href="{{url('/auth/login-cover')}}" target="_blank" class="footer-link">Teknik Sepeda Motor</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
          <h6 class="footer-title mb-4">Ekstrakulikuler</h6>
          <ul class="list-unstyled">
            <li class="mb-3">
              <a href="{{url('/front-pages/pricing')}}" class="footer-link">PPS Betako Merpati Putih</a>
            </li>
            <li class="mb-3">
              <a href="{{url('/front-pages/payment')}}" class="footer-link">Informatika<span class="badge rounded bg-primary ms-2">New</span></a>
            </li>
            <li class="mb-3">
              <a href="{{url('/front-pages/checkout')}}" class="footer-link">Sepak Bola</a>
            </li>
            <li class="mb-3">
              <a href="{{url('/front-pages/help-center')}}" class="footer-link">Band / Musik</a>
            </li>
            <li class="mb-3">
              <a href="{{url('/auth/login-cover')}}" target="_blank" class="footer-link">Taekwondo</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom py-3">
    <div class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
      <div class="mb-2 mb-md-0">
        <span class="footer-text">©
          <script>
          document.write(new Date().getFullYear());

          </script>
        </span>
        <a href="{{config('variables.creatorUrl')}}" target="_blank" class="fw-medium text-white footer-link">{{config('variables.creatorName')}},</a>
        <span class="footer-text"> Pengabdian Kepada Masyarakat - Tahun 2023.</span>
      </div>
      <div>
        <a href="{{config('variables.githubFreeUrl')}}" class="footer-link me-3" target="_blank">
          <img src="{{asset('assets/img/front-pages/icons/github-'.$configData['style'].'.png') }}" alt="github icon" data-app-light-img="front-pages/icons/github-light.png" data-app-dark-img="front-pages/icons/github-dark.png" />
        </a>
        <a href="{{config('variables.facebookUrl')}}" class="footer-link me-3" target="_blank">
          <img src="{{asset('assets/img/front-pages/icons/facebook-'.$configData['style'].'.png') }}" alt="facebook icon" data-app-light-img="front-pages/icons/facebook-light.png" data-app-dark-img="front-pages/icons/facebook-dark.png" />
        </a>
        <a href="{{config('variables.twitterUrl')}}" class="footer-link me-3" target="_blank">
          <img src="{{asset('assets/img/front-pages/icons/twitter-'.$configData['style'].'.png') }}" alt="twitter icon" data-app-light-img="front-pages/icons/twitter-light.png" data-app-dark-img="front-pages/icons/twitter-dark.png" />
        </a>
        <a href="{{config('variables.instagramUrl')}}" class="footer-link" target="_blank">
          <img src="{{asset('assets/img/front-pages/icons/instagram-'.$configData['style'].'.png') }}" alt="google icon" data-app-light-img="front-pages/icons/instagram-light.png" data-app-dark-img="front-pages/icons/instagram-dark.png" />
        </a>
      </div>
    </div>
  </div>
</footer>
<!-- Footer: End -->
