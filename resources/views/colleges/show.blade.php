@extends('layouts.base')

@section('title')
    {{ $college->name }}
@endsection

@section('header-image')
    {{ asset('img/banner1.jpg') }}
@endsection

@section('banner-title')
    College of {{ $college->name }}
@endsection

@section('content')
    @include('comp.page-header')

@endsection
