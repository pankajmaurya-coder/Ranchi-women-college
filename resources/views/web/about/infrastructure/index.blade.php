@extends('web.layouts.app')

@section('title', 'principle-history')

 @push('style')
      <link rel="stylesheet" href="{{asset('css/about.css')}}">
   @endpush 

@section('content')
 
@include('web.about.infrastructure.hero')
@include('web.about.infrastructure.campus-count')
@include('web.about.infrastructure.classroom')
@include('web.about.infrastructure.laboratory')
@include('web.about.infrastructure.block')
@include('web.about.infrastructure.facilities')


@endsection