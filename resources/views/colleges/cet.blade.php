@extends('layouts.base')

@section('title')
    {{ $college->name }}
@endsection

@section('header-image')
    {{ asset('img/KNIGHTS.png') }}
@endsection

@section('banner-title')
    College of Engineering and Technology
@endsection

@section('content')
    @include('comp.page-header')
@endsection
