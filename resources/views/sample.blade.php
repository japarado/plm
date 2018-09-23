@extends('layouts.base')

{{----}}
@section('header-image', asset('img/banner1.jpg'))
@section('title',' Log in')
@section('banner-title', 'Authentication')

{{--Blue Ribbon Sections--}}
@section('blue-ribbon-left-text', 'Are you a professor?')
@section('blue-ribbon-button-text', 'Create Professor Account')
@section('blue-ribbon-btn-link', '#')
{{--End Blue Ribbon Section--}}

@section('content')
    @include('comp.page-header')
    <section id="content">
        <div class="container">
            <div class="row">
                @include('forms.login')
            </div>
        </div>
    </section>
    {{-- Blue Ribbon Section --}}
    @include('comp.blue-ribbon')
    {{--End Blue Ribbon Section--}}
@endsection
