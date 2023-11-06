@php
$customizerHidden = 'customizer-hide';
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Registration Seminar')

@section('vendor-style')
<!-- Vendor -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />

<link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/@form-validation/umd/styles/index.min.css')}}" />
@endsection

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>

<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/bundle/popular.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/pages-auth-multisteps.js')}}"></script>
@endsection

@section('content')
<div class="authentication-wrapper authentication-cover authentication-bg">
  <div class="authentication-inner row">

    <!-- Left Text -->
    <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-center p-5 auth-cover-bg-color position-relative auth-multisteps-bg-height">
      <img src="{{ asset('assets/img/illustrations/auth-register-multisteps-illustration.png') }}" alt="auth-register-multisteps" class="img-fluid" width="280">

      <img src="{{ asset('assets/img/illustrations/bg-shape-image-'.$configData['style'].'.png') }}" alt="auth-register-multisteps" class="platform-bg" data-app-light-img="illustrations/bg-shape-image-light.png" data-app-dark-img="illustrations/bg-shape-image-dark.png">
    </div>
    <!-- /Left Text -->

    <!--  Multi Steps Registration -->
    <div class="d-flex col-lg-8 align-items-center justify-content-center p-sm-5 p-3">
      <div class="w-px-700">
        <div id="multiStepsValidation" class="bs-stepper shadow-none">
          <div class="bs-stepper-header border-bottom-0">
            <div class="step" data-target="#accountDetailsValidation">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-circle"><i class="ti ti-smart-home ti-sm"></i></span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title">Peserta</span>
                  <span class="bs-stepper-subtitle">Detail Peserta</span>
                </span>
              </button>
            </div>
          </div>
          <div class="bs-stepper-content">

            <form id="multiStepsForm" action="{{url('/registration/seminar')}}" method="POST">
              @csrf
              <!-- Account Details -->
              <div id="accountDetailsValidation" class="content">
                <div class="content-header mb-4">
                  <h3 class="mb-1">Registrasi Peserta Seminar</h3>
                  <p>Daftarkan diri anda dengan cara mengisi absensi online peserta seminar untuk mendapatkan sertifikat digital anda!</p>
                </div>
                @error('class')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label class="form-label" for="id_seminar">Acara Seminar</label>
                     <select id="id_seminar" name="id_seminar" class="select2 form-select" data-placeholder="Pilihan Seminar">
                      <option value="">Pilihan Seminar</option>
                         @foreach ($seminars as $seminar)
                            <option value="{{ $seminar->id }}">{{ $seminar->name }}</option>
                        @endforeach
                    </select>
                    </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="full_name">Nama Lengkap</label>
                    <input type="text" name="full_name" id="full_name" class="form-control" placeholder="johndoe" />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe" />
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="multiStepsPass">Kelas</label>
                    <div class="input-group input-group-merge">
                      <input type="number" id="class" name="class" class="form-control" placeholder="10 - 12"  />
                      <span class="input-group-text cursor-pointer" id="class"></span>
                       
                    </div>
                  </div>
                  
                  <div class="col-md-12">
                    <label class="form-label" for="multiStepsConfirmPass">Jurusan</label>
                    <div class="input-group input-group-merge">
                      <input type="text" id="program_study" name="program_study" class="form-control"  placeholder="Teknik Komputer Jaringan"/>
                      <span class="input-group-text cursor-pointer" id="program_study"></span>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label class="form-label" for="nis">Nomoir Induk Siswa</label>
                    <input type="number" name="nis" id="nis" class="form-control" placeholder="21101140151" aria-label="johndoe" />
                  </div>
                  <div class="col-12 d-flex justify-content-between mt-4">
                    <button type="submit" class="btn btn-primary btn-next"> <span class="align-middle d-sm-inline-block d-none me-sm-1 me-0">Selesai</span> <i class="ti ti-arrow-right ti-xs"></i></button>
                  </div>
                </div>
              </div>
             
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- / Multi Steps Registration -->
  </div>
</div>

<script>
  // Check selected custom option
  window.Helpers.initCustomOptionCheck();
</script>
@endsection
