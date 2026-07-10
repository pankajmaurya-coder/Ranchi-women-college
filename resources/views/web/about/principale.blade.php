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

@endsection