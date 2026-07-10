@extends('web.layouts.app')

@section('title', 'principle-history')

 @push('style')
      <link rel="stylesheet" href="{{asset('css/about.css')}}">
   @endpush 

@section('content')

<section class="holiday  page-section">
    <div class="container">
          <img src="{{ asset('asset/web/about/holiday.png') }}">
    </div>
</section>

@endsection