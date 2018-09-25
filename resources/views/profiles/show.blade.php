@extends('layouts.base')

@section('content')
    <section id="content" class="single-teacher">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="single-teacher-inner">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="thumb-img">
                                    <img src="assets/img/teacher/img-01.jpg" alt="">
                                </div>
                                <div class="contact-teacher">
                                    <form class="teacher-form" role="form" method="post">
                                       
                                        <a href="{{ route('profiles.edit', $profile->user_id) }}" class="btn btn-warning">Edit Profile</a>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="teacher-info">
                                    <div class="name section-heading">
                                        <h3>{{ $user->name }}</h3>
                                        {{--<span>Math Teacher</span>--}}
                                    </div>
                                    
                                    <div class="desc">
                                        <p>Teaches at the Following</p>
                                        <ul>
                                            @foreach($colleges as $college)
                                                <a href="{{ route('colleges.show', $college->id) }}">{{ $college->name }}</a></li><br/>
                                            @endforeach
                                        </ul>
                                        <h4>Biography</h4>
                                        {!! $professor->user->profile->desc !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
