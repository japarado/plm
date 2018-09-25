@extends('layouts.base')

{{----}}
@section('header-image', asset('img/banner1.jpg'))
@section('title',' Log in')
@section('banner-title', 'Authentication')

@section('content')
    @include('comp.page-header')
    <section id="content">
        <div class="container">
            <div class="row">
                @include('forms.login')
            </div>
        </div>
    </section>
@endsection
