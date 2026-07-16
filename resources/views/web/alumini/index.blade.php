@extends('web.layouts.app')

@section('title', 'alumini-page')

 @push('style')
      <link rel="stylesheet" href="{{asset('css/about.css')}}">
   @endpush 

@section('content')

   @include('web.alumini.hero')
   @include('web.alumini.main')
   
@endsection