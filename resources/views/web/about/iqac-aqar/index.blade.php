@extends('web.layouts.app')

@section('title', 'principle-history')

 @push('style')
      <link rel="stylesheet" href="{{asset('css/about.css')}}">
   @endpush 

@section('content')

@include('web.about.iqac-aqar.hero')
@include('web.about.iqac-aqar.main')
@include('web.about.iqac-aqar.objective')
@include('web.about.iqac-aqar.resource')
@include('web.about.iqac-aqar.certificate')
@include('web.about.iqac-aqar.document')

@endsection