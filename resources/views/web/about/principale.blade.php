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
                <h4>Miss S. Dey (Prof.-in-Charge)</h4>
                <span>01.03.1981 to 27.02.1982</span>
            </div>

            <div class="card">
                 <i class="fa-regular fa-user "></i>
                <h4>Dr.(Mrs) Indu Dhan</h4>
                <span>28.02.1982 to 31.10.1986</span>
            </div>

            <div class="card">
               <i class="fa-regular fa-user "></i>
                <h4>Dr.(Mrs) Vinodani Terway</h4>
                <span>01.11.1986 to 31.07.1992</span>
            </div>

            <div class="card">
                <i class="fa-regular fa-user "></i>
                <h4>Dr.(Mrs) Sushila Mishra </h4>
                <span>01.08.1992 to 26.09.1994</span>
            </div>

            <div class="card">
                <!-- <i class="fa-regular fa-user "></i> -->
                 <img src="{{ asset('asset/web/about/principle/veena.png') }}" alt="Principal">
                <h4>Dr.(Mrs) Veena Mahto</h4>
                <span>27.09.1994 to 04.01.2001</span>
            </div>

            <div class="card">
                <img src="{{ asset('asset/web/about/principle/manju.png') }}" alt="Principal">
                <h4>Dr.(Mrs) Manju Sinha</h4>
                <span>05.11.2001 to 10.07.2011</span>
            </div>

            <div class="card">
                <i class="fa-regular fa-user "></i>
                <h4>Dr.(Mrs) Zinat Kausar</h4>
                <span>11.07.2011 to 27.07.2012</span>
            </div>

             <div class="card">
                <img src="{{ asset('asset/web/about/principle/manju.png') }}" alt="Principal">
                <h4>Dr.(Mrs) Manju Sinha</h4>
                <span>28.07.2012 to 31.01.2021</span>
            </div>

            <div class="card">
                <img src="{{ asset('asset/web/about/principle/samsun.png') }}" alt="Principal">
                <h4>Dr. Shamshun Nehar</h4>
                <span>01.02.2021 to 18.01.2023</span>
            </div>

            <div class="card">
                <img src="{{ asset('asset/web/about/principle/supriya.png') }}" alt="Principal">
                <h4>Dr. Supriya</h4>
                <span>19.01.2023 to 16.07.2025</span>
            </div>

            <div class="card">
                <img src="{{ asset('asset/web/partials/welcome/principle.png') }}" alt="Principal">
                <h4>Dr. Vinita Singh (Principal-in-Charge)</h4>
                <span>17.07.2025 to Till Date</span>
            </div>

        </div>

    </div>
</section>

@endsection