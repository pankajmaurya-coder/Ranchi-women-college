@extends('web.layouts.app')

@section('title', 'syllabus')

 @push('style')
      <link rel="stylesheet" href="{{asset('css/about.css')}}">
   @endpush 

@section('content')
 <section class="my-5">
    <div class="container">
        <div class="title">
            <h2>FEE STRUCTURE</h2>
            <img
                src="{{ asset('asset/web/layouts/divider2.png') }}"
                alt="Divider"
                class="welcome-divider">
        </div>

         <div class="container py-5">

    <!-- Undergraduate -->
    <div class="card mb-4">
        <div class="card-header fw-bold">
            Undergraduate Fee Structure
        </div>

        <div class="list-group list-group-flush">

            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span>Fashion Designing - Fee Structure (UG)</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
            </div>

            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span>B.Sc. IT - Fee Structure</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
            </div>

            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span>B.A./B.Com./B.Sc. Clinical Nutrition & Dietetics</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
            </div>

            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span>B.A./B.Com./B.Sc. Computer Application</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
            </div>

            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span>BBA Fee Structure 2026</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
            </div>

            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span>B.Sc. Biotechnology Fee Structure 2026</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
            </div>

            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span>BBA / IT / BCA / FD / CN&D / Biotechnology Honours</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
            </div>

            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span>BA / B.Sc. / B.Com. Fee Structure</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
            </div>

        </div>
    </div>


    <!-- Postgraduate -->

    <div class="card mb-4">

        <div class="card-header fw-bold">
            Postgraduate Fee Structure
        </div>

        <div class="list-group list-group-flush">

            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span>M.A./M.Com./M.Sc. Clinical Nutrition & Dietetics</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
            </div>

            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span>MCA Fee Structure</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
            </div>

            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span>M.Sc. IT Fee Structure</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
            </div>

            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span>Fashion Designing - Fee Structure (PG)</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
            </div>

            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span>MBA Fee Structure 2026</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
            </div>

            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span>M.Sc. Biotechnology Fee Structure 2026</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
            </div>

            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span>MA / M.Sc. / M.Com. Fee Structure</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
            </div>

        </div>

    </div>


    <!-- B.Ed. -->

    <div class="card">

        <div class="card-header fw-bold">
            Bachelor of Education (B.Ed.)
        </div>

        <div class="list-group list-group-flush">

            <div class="list-group-item d-flex justify-content-between align-items-center">
                <span>B.Ed. Session (2024–2026) Fee Structure</span>
                <a href="#" class="btn btn-sm btn-outline-primary">Download</a>
            </div>

        </div>

    </div>

</div>
    </div>
 </section>


@endsection