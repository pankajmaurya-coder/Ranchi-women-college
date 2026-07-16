@extends('web.layouts.app')

@section('title', 'home-page')

 @push('style')
 <!-- swipper js -->
              <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@14.0.1/swiper-bundle.min.css"
    />
   @endpush 

@section('content')

@include('web.partials.slider')
@include('web.partials.welcome')
@include('web.partials.department')
@include('web.partials.notic')
@include('web.partials.testimonial')
@include('web.partials.website')

@endsection

@push('script')
 <script src="https://cdn.jsdelivr.net/npm/swiper@14.0.1/swiper-bundle.min.js"></script>
    <script src="{{asset('js/web/slider.js')}}"></script>
    <!-- <script src="{{asset('js/web/header.js')}}"></script> -->
    <script src="{{asset('js/web/testimonial.js')}}"></script>
@endpush