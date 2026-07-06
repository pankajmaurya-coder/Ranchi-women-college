@extends('web.layouts.app')

@section('title', 'home-page')

@section('content')

@include('web.partials.slider')
@include('web.partials.welcome')
@include('web.partials.department')
@include('web.partials.notic')
@include('web.partials.website')

@endsection