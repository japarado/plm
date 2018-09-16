@extends('layouts.base')

@section('title', $college->name)

@section('header-image', asset('img/banner1.jpg'))

@section('banner-title', 'College of ' . $college->name)

@section('content')
    @include('comp.page-header')
    <section class="courses section">
        <div class="container">
            <div class="row">
                @foreach($professors as $professor)
                    @foreach($professor->pivot as $course)
                        @include('comp.course-box')
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
@endsection
