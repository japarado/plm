@extends('layouts.base')

@section('title')
    CAUP
@endsection

@section('content')
    <section class="courses section">
        <div class="container">
            <div class="row">
                <h2 class="section-title">Featured Courses</h2>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="courses-wrap">
                        <div class="thumb">
                            <img src="{{ asset('img/courses/CAUP.jpg') }}" alt="">
                            <div class="courses-price">
                                <p class="years">Duration: 4 Years</p>
                            </div>
                        </div>
                        <div class="course-detail-wrap">
                            <div class="teacher-wrap">
                                <span class="course-instructor">College Dean<a href="#">Arch. Gil C. Evasco</a></span>
                                <img src="{{ asset('img/courses/thumb-teacher-1.jpg') }}" alt="">
                            </div>
                            <div class="course-content">
                                <h3>Architecture and Urban Planning</h3>
                                <p style="height: 300px;">An architect is a person who plans, designs, and reviews the construction of buildings. To practice architecture means to provide services in connection with the design of buildings and the space within the site surrounding the buildings, that have as their principal purpose human occupancy or use.<br>An urban planner is a professional who practices in the field of urban planning.</br</p>
                                <a href="/CAUPDLC" class="btn btn-common btn-sm">EXPLORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection