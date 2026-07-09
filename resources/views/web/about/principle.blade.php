@extends('web.layouts.app')

@section('title', 'principle-history')

 @push('style')
      <link rel="stylesheet" href="{{asset('css/about.css')}}">
   @endpush 

@section('content')
<section class="principal-history">
    <div class="section-header">

            <h2 class="section-title">
                Principals of the College
            </h2>
            <img src="{{asset('asset/web/layouts/divider1.png')}}">

            <span class="section-subtitle">
                Leadership Legacy
            </span>
        </div>
    <div class="container">
        <div class="timeline">
            <article class="timeline-item left">
                <div class="timeline-card">
                    <div class="principal">
                        <!-- <img src="images/principal-1.jpg" alt=""> -->
                         <img src="{{asset('asset/web/about/bhanumati.png')}}">
                    </div>
                    <div class="principal-content">
                        <span class="principal-badge">
                            First Principal
                        </span>
                        <h3>
                            Mrs. Bhanumati Prasad
                        </h3>
                        <div class="principal-date">
                            <span class="date-icon">
                                📅
                            </span>
                            <span>
                                18 July 1949 - 28 February 1981
                            </span>
                        </div>
                        <div class="principal-service">
                            <span class="service-icon">
                                ⏳
                            </span>
                            <span>
                                Served for 31 Years
                            </span>
                        </div>
                    </div>
                </div>
                <span class="timeline-dot"></span>
            </article>

            <article class="timeline-item right">
                <span class="timeline-dot"></span>
                <div class="timeline-card">
                    <div class="principal">
                        <img src="images/default-user.png" alt="">
                    </div>
                    <div class="principal-content">
                        <span class="principal-badge">
                            Prof.-in-Charge
                        </span>
                        <h3>
                            Miss S. Dey
                        </h3>
                        <div class="principal-date">
                            <span>📅</span>
                            <span>
                                01 March 1981 - 27 February 1982
                            </span>
                        </div>
                        <div class="principal-service">
                            <span>⏳</span>
                            <span>
                                Served for 1 Year
                            </span>
                        </div>
                    </div>
                </div>
            </article>

            <article class="timeline-item left">
                <div class="timeline-card">
                    <div class="principal">
                        <img src="images/default-user.png" alt="">
                    </div>
                    <div class="principal-content">
                        <span class="principal-badge">
                            Principal
                        </span>
                        <h3>
                            Dr.(Mrs.) Indu Dhan
                        </h3>
                        <div class="principal-date">
                            <span>📅</span>
                            <span>
                                28 February 1982 - 31 October 1986
                            </span>
                        </div>
                        <div class="principal-service">
                            <span>⏳</span>
                            <span>
                                Served for 4 Years 8 Months
                            </span>
                        </div>
                    </div>
                </div>
                <span class="timeline-dot"></span>
            </article>
            <!-- Item 4 -->

            <article class="timeline-item right">
                <span class="timeline-dot"></span>
                <div class="timeline-card">
                    <div class="principal">
                        <img src="images/default-user.png" alt="">
                    </div>
                    <div class="principal-content">
                        <span class="principal-badge">
                            Principal
                        </span>
                        <h3>
                            Dr.(Mrs.) Vinodani Terway
                        </h3>
                        <div class="principal-date">
                            <span>📅</span>
                            <span>
                                01 November 1986 - 31 July 1992
                            </span>
                        </div>
                        <div class="principal-service">
                            <span>⏳</span>
                            <span>
                                Served for 5 Years 9 Months
                            </span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Item 5 -->

            <article class="timeline-item left">
                <div class="timeline-card">
                    <div class="principal">
                        <img src="images/default-user.png" alt="">
                    </div>
                    <div class="principal-content">
                        <span class="principal-badge">
                            Principal
                        </span>
                        <h3>
                            Dr.(Mrs.) Pushpa Sinha
                        </h3>
                        <div class="principal-date">
                            <span>📅</span>
                            <span>
                                01 August 1992 - 31 July 1997
                            </span>
                        </div>
                        <div class="principal-service">
                            <span>⏳</span>
                            <span>
                                Served for 5 Years
                            </span>
                        </div>
                    </div>
                </div>
                <span class="timeline-dot"></span>
            </article>

        </div>
    </div>

</section>

@endsection;