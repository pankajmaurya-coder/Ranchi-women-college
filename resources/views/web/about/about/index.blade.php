@extends('web.layouts.app')

@section('title', 'about-page')

 @push('style')
      <link rel="stylesheet" href="{{asset('css/about.css')}}">
   @endpush 

@section('content')
   @include('web.about.about.main')
   @include('web.about.about.content')
@endsection