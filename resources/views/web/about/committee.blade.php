@extends('web.layouts.app')

@section('title', 'about-page')

 @push('style')
      <link rel="stylesheet" href="{{asset('css/about.css')}}">
   @endpush 

@section('content')


<section class="committee-directory py-5">
    <div class="container">

        <div class="title mb-5">
            <h2>Committee Directory</h2>
            <img
                src="{{ asset('asset/web/layouts/divider2.png') }}"
                alt="Divider"
                class="welcome-divider">
                <p>
                    Click on the links below to view or download the committee
                directory for the respective academic years.
                </p>
        </div>

        <!-- Card -->
        <a href="#" class="committee-card d-flex justify-content-between align-items-center flex-wrap text-decoration-none mb-4">

            <div class="d-flex align-items-center gap-4">
                <div class="pdf-icon">
                    <i class="fa-solid fa-file-pdf"></i>
                </div>

                <div>
                    <h4 class="mb-2 fw-semimedium">Directory of Committees - 2021-22</h4>
                    <p class="mb-0 text-muted">
                        View or download the committee directory for the academic year 2021-22.
                    </p>
                </div>
            </div>

            <button class="btn committee-btn mt-3 mt-lg-0">
                <i class="fa-solid fa-download me-2"></i>View PDF
            </button>

        </a>

        <!-- Card -->
        <a href="#" class="committee-card d-flex justify-content-between align-items-center flex-wrap text-decoration-none mb-4">

            <div class="d-flex align-items-center gap-4">
                <div class="pdf-icon">
                    <i class="fa-solid fa-file-pdf"></i>
                </div>

                <div>
                    <h4 class="mb-2 fw-semimedium">Directory of Committees - 2022-23</h4>
                    <p class="mb-0 text-muted">
                        View or download the committee directory for the academic year 2022-23.
                    </p>
                </div>
            </div>

            <button class="btn committee-btn mt-3 mt-lg-0">
                <i class="fa-solid fa-download me-2"></i>View PDF
            </button>

        </a>

        <!-- Card -->
        <a href="#" class="committee-card d-flex justify-content-between align-items-center flex-wrap text-decoration-none">

            <div class="d-flex align-items-center gap-4">
                <div class="pdf-icon">
                    <i class="fa-solid fa-file-pdf"></i>
                </div>

                <div>
                    <h4 class="mb-2 fw-semimedium">College Committees List 2025-26</h4>
                    <p class="mb-0 text-muted">
                        View or download the committee list for the academic year 2025-26.
                    </p>
                </div>
            </div>

            <button class="btn committee-btn mt-3 mt-lg-0">
                <i class="fa-solid fa-download me-2"></i>View PDF
            </button>
        </a>

    </div>
</section>

@endsection