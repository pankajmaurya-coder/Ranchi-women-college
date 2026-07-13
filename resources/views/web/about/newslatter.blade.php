@extends('web.layouts.app')

@section('title', 'about-page')

 @push('style')
      <link rel="stylesheet" href="{{asset('css/about.css')}}">
   @endpush 

@section('content')

<section class="newslatter py-5">
    <div class="container">
          

    <div class="title">
            <h2>Newsletter</h2>
            <img
                src="{{ asset('asset/web/layouts/divider2.png') }}"
                alt="Divider"
                class="welcome-divider">
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="newsletter-card">
                    <div class="newsletter-img">
                        <img src="{{asset('asset/web/about/newslatter/december2024.png')}}" alt="Newsletter">
                    </div>
                   <h2 class="mt-4 text-center text-uppercase fs-3">December 2024</h2>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="newsletter-card">
                    <div class="newsletter-img">
                        <img src="{{asset('asset/web/about/newslatter/december2024.png')}}" alt="Newsletter">
                    </div>
                    <h2 class="mt-4 text-center text-uppercase fs-3">December 2024</h2>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="newsletter-card">
                    <div class="newsletter-img">
                        <img src="{{asset('asset/web/about/newslatter/december2024.png')}}" alt="Newsletter">
                    </div>
                    <h2 class="mt-4 text-center text-uppercase fs-3">December 2024</h2>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection