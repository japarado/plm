@extends('layouts.base')

@section('title','Home')

@section('content')
    {{--Carousel Start--}}
    @include('comp.carousel')
    {{--Carousel End--}}

    {{--Cards--}}
    <section class="activity-area section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">Pamantasan ng Lungsod ng Maynila</h2>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="activity-item">
                        <div class="icon fast-color">
                            <i class="fa fa-flash"></i>
                        </div>
                        <h3>Diverse Courses</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed.</p>
                        <a class="btn btn-rm btn-common" href="courses-grid.html">Explore</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="activity-item">
                        <div class="icon secend-color">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <h3>Outstanding Alumni</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed.</p>
                        <a class="btn btn-rm btn-common" href="courses-grid.html">Explore</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="activity-item">
                        <div class="icon thred-color">
                            <i class="fa fa-flask"></i>
                        </div>
                        <h3>Innovative Approaches</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae nulla debitis vitae temporibus enim sed.</p>
                        <a class="btn btn-rm btn-common" href="courses-grid.html">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--End Cards--}}

    {{-- Welcome Students  --}}{{--
    <div class="about section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="about-header">
                        <h3 class="medium-title">Welcome Students</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias laudantium nemo
                            eveniet
                            excepturi, suscipit amet illo autem quasi, sequi illum quisquam doloremque est magni
                            accusamus
                            quo, officia voluptates temporibus cum. Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit.</p>
                    </div>
                    <ul class="info-list">
                        <li><a href="#"><i class="fa fa-check"></i> Narwhal quinoa sriacha organic.</a></li>
                        <li><a href="#"><i class="fa fa-check"></i> Artisan paleo flannel, polaroid umami
                                franzen.</a>
                        </li>
                        <li><a href="#"><i class="fa fa-check"></i> Sriracha vegan typewriter tofu gentrify.</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="img-thumb">
                        <img src="{{ asset('img/plm/pages/university-pic.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    --}}{{--End Welcome Students--}}

    {{--Card--}}
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="features-wrapper">
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="features-main">
                                <div class="features-header">
                                    <h2>Our Students Deserve Only the Best</h2>
                                    <p>See what the PLM has to offer for academics under its wing.</p>
                                </div>
                                <div class="row info">
                                    <div class="col-sm-6">
                                        <div class="icon">
                                            <i class="fa fa-group"></i>
                                        </div>
                                        <div class="content">
                                            <h3>Skilled Professors</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Repellendus, quaerat beatae.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="icon">
                                            <i class="fa fa-university"></i>
                                        </div>
                                        <div class="content">
                                            <h3>Best Infrastructure</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Repellendus, quaerat beatae.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="icon">
                                            <i class="fa fa-cogs"></i>
                                        </div>
                                        <div class="content">
                                            <h3>Well Equiped Labs</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Repellendus, quaerat beatae.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="icon">
                                            <i class="fa fa-book"></i>
                                        </div>
                                        <div class="content">
                                            <h3>Big Library</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Repellendus, quaerat beatae.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="img-thumb">
                                <img src="{{ asset('img/education.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--End card--}}
@endsection
