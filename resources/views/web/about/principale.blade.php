@extends('web.layouts.app')

@section('title', 'principle-history')

 @push('style')
      <link rel="stylesheet" href="{{asset('css/about.css')}}">
   @endpush 

@section('content')

<section class="principal-header  ">
    <div class="container">
        <span class="header-badge">
            <i class="fa-solid fa-landmark"></i>
            Ranchi Women's College
        </span>
        <h1 class="header-title">
            Our <span>Principals</span>
        </h1>
        <div class="header-divider">
            <span></span>
            <i class="fa-solid fa-crown"></i>
            <span></span>
        </div>

        <p class="header-description">
            Honouring the visionary leaders whose dedication, wisdom and
            commitment have shaped the legacy of Ranchi Women's College
            through generations.
        </p>

     
    </div>
    
</section>

<section class="principal-section">
    <div class="container">

        <!-- First Principal -->
        <div class="first-principal">

            <div class="card">
                <img src="{{ asset('asset/web/about/bhanumati.png') }}" alt="Principal">

                <div class="principal-content">
                    <h2>Dr. Bhanumati</h2>
                    <span class="year">1950 - 1955</span>
                    <p>
                        First Principal of Ranchi Women's College who laid the
                        foundation of excellence and women's education.
                    </p>
                </div>
            </div>

        </div>

        <!-- Other Principals -->

        <div class="other-principal">

            <div class="card">
                <i class="fa-regular fa-user "></i>
                <h4>Principal Name</h4>
                <span>1956 - 1960</span>
            </div>

            <div class="card">
                 <i class="fa-regular fa-user "></i>
                <h4>Principal Name</h4>
                <span>1961 - 1965</span>
            </div>

            <div class="card">
               <i class="fa-regular fa-user "></i>
                <h4>Principal Name</h4>
                <span>1966 - 1970</span>
            </div>

            <div class="card">
                <img src="{{ asset('asset/web/about/bhanumati.png') }}">
                <h4>Principal Name</h4>
                <span>1971 - 1975</span>
            </div>

        </div>

    </div>
</section>

@endsection