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
                                    <h4>Contact me</h4>
                                    <form class="teacher-form" role="form" method="post">
                                        <div class="form-group">
                                            <input class="form-control" name="username" type="text"
                                                   placeholder="Full Name">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="email" type="email"
                                                   placeholder="Email Address">
                                        </div>
                                        <textarea class="form-control" placeholder="Write Message" rows="5"></textarea>
                                        <button type="submit" id="submit" class="btn btn-common">Send Message</button>
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
                                    {{--<div class="social-icon">
                                        <a class="social" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="social" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="social" href="#"><i class="fa fa-google-plus"></i></a>
                                        <a class="social" href="#"><i class="fa fa-pinterest"></i></a>
                                    </div>--}}
                                    <div class="desc">
                                        <p>Teaches at the Following</p>
                                        <ul>
                                            @foreach($colleges as $college)
                                                <a href="{{ route('colleges.show', $college->id) }}">{{ $college->name }}</a></li><br/>
                                            @endforeach
                                        </ul>
                                        <h4>Biography</h4>
                                        {!! $professor->user->profile->desc !!}
                                        <ul>
                                            <li><i class="fa fa-phone"></i>0 123 9874 321</li>
                                            <li><i class="fa fa-envelope"></i><a href="#"><span class="__cf_email__"
                                                                                                data-cfemail="7f150a13161e3f1a1b0a1c1e511c1012">[email&#160;protected]</span></a>
                                            </li>
                                            <li><i class="fa fa-skype"></i>julia-educa</li>
                                        </ul>
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
