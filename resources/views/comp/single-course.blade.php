@extends('layouts.base')

@section('title','Course Name')

@section('content')
    <div id="content" class="single-course">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="single-item">
                        <div class="course-item">
                            <div class="up-content">
                                <h2 class="section-title">{{ $course->name }}</h2>
                                <p>College of {{ $course->college->name }}</p>
                            </div>

                            <div id="carousel-area">
                                <div id="carousel-slider" class="carousel slide" data-interval="3000">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-slider" data-slide-to="0" class="active">
                                        </li>
                                        <li data-target="#carousel-slider" data-slide-to="1">
                                        </li>
                                        <li data-target="#carousel-slider" data-slide-to="2">
                                        </li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active"
                                             style="background-image: url({{ asset('img/background/plm.jpg') }});">
                                            <div class="carousel-caption">
                                                <p style="color:black">Pamantasan ng Lungsod ng Maynila</p>
                                            </div>
                                        </div>
                                        <div class="item"
                                             style="background-image: url({{ asset('img/background/plm.jpg') }});">
                                            <div class="carousel-caption">
                                                <p style="color:black">Pamantasan ng Lungsod ng Maynila</p>
                                            </div>
                                        </div>
                                        <div class="item"
                                             style="background-image: url({{ asset('img/background/plm.jpg') }});">
                                            <div class="carousel-caption">
                                                <p style="color:black">Pamantasan ng Lungsod ng Maynila</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="des item-inner">
                                <h3>Description</h3>
                                <p>{!! $course->desc !!}</p>
                            </div>
                            <div class="course-topics item-inner">
                                <h3>Course Content</h3>


                            </div>
                        </div>
                    </div>
                </div>

                <aside id="sidebar" class="col-md-4">
                    <div class="course-information">
                        <div class="widget-heading">
                            <h4>Course Information</h4>
                        </div>
                        <ul>
                            <li><span>Duration:</span>{{ $course->duration }}</li>
                            <li><span>Chairperson: </span>{{ $course->professor->user->name }}</li>
                        </ul>
                        @auth()
                            @if(auth()->user()->type == 'PROFESSOR')
                                <a class="btn btn-warning" href="{{ route('colleges.show', $course->college->id) }}">Back</a><br/>
                                <a class="btn btn-common" href="{{ route('courses.edit', $course->id) }}">Edit this
                                    Course</a>
                                {!!Form::open(['action' => ['CoursesController@destroy', $course->id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            @endif
                        @endauth
                    </div>

                    <div class="widget widget-popular-posts">
                        <h5 class="widget-title">Files</h5>
                        <ul class="posts-list">
                            @if(count($professor->files) < 1)
                                <li>No Files Found</li>
                            @else
                                @foreach($professor->files as $file)
                                    <li>
                                        {{--<div class="widget-thumb">
                                            <a href="#"><img src="assets/img/blog/thumb2.jpg" alt=""/></a>
                                        </div>--}}
                                        <div class="widget-content">
                                            <span>Uploaded: {{ $file->created_at }}</span>
                                            <a href="/public/professors/{{ $professor->user->name }}/files/{{ $file->name }}">{{ $file->name }}</a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
@endsection
