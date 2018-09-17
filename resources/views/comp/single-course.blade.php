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

                        <div class="Courses-slider">
                            <div class="touch-slider owl-carousel" data-slider-pagination="true">
                                <div class="item">
                                    <a href="#"><img src="{{ asset($course->picture) }}" alt=""></a>
                                </div>
                                {{--<div class="item">
                                    <a href="#"><img src="assets/img/event/img-2.jpg" alt=""></a>
                                </div>
                                <div class="item">
                                    <a href="#"><img src="assets/img/event/img-3.jpg" alt=""></a>
                                </div>--}}
                            </div>
                        </div>

                        <div class="des item-inner">
                            <h3>Description</h3>
                            <p>{{ $course->description }}</p>
                        </div>
                        <div class="topics item-inner">
                            <h3>Topics Included</h3>
                            <div class="row">
                                <div class="col-sm-4">
                                    <ul>
                                        <li><i class="fa fa-check"></i> WooCommerce Integration</li>
                                        <li><i class="fa fa-check"></i> Visual Composer</li>
                                        <li><i class="fa fa-check"></i> Revolution Slider</li>
                                        <li><i class="fa fa-check"></i> Custom Drag and Drop Blocks</li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Personal Assistance</li>
                                        <li><i class="fa fa-check"></i> Standard and Secure Code</li>
                                        <li><i class="fa fa-check"></i> Validated</li>
                                        <li><i class="fa fa-check"></i> Latest WordPress Compatible</li>
                                    </ul>
                                </div>
                                <div class="col-sm-4">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Ajax Galleries</li>
                                        <li><i class="fa fa-check"></i> Events Management</li>
                                        <li><i class="fa fa-check"></i> Teachers Management</li>
                                        <li><i class="fa fa-check"></i> Advanced Options</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="course-topics item-inner">
                            <h3>Course Content</h3>

                            <div class="accordion-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                We have a team of experienced teachers
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis
                                                eius quod minima unde quisquam cum ducimus, quasi commodi porro!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                Diversity training programs, curriculum understandable
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis
                                                eius quod minima unde quisquam cum ducimus, quasi commodi porro!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                Learn everywhere, everytime on devices
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis
                                                eius quod minima unde quisquam cum ducimus, quasi commodi porro!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
                                                Brightcation promotion programs for outstanding students
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapsefour" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis
                                                eius quod minima unde quisquam cum ducimus, quasi commodi porro!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                        <li>
                            <span>Starts:</span>November 22, 2016
                        </li>
                        <li><span>Duration:</span>8 Weeks</li>
                        <li><span>Study Level:</span>Intermediate</li>
                        <li><span>Discipline</span>
                            <a href="#">Other Courses</a>,
                            <a href="#">Tech Courses</a></li>
                        <li class="clearfix">
                            <span>Price:</span>
                            <span class="amount">$45.00</span>
                        </li>
                    </ul>
                    <a class="btn btn-common">Purchase Course</a>
                </div>

                <div class="widget widget-popular-posts">
                    <h5 class="widget-title">Popular Posts</h5>
                    <ul class="posts-list">
                        <li>
                            <div class="widget-thumb">
                                <a href="#"><img src="assets/img/blog/thumb2.jpg" alt=""/></a>
                            </div>
                            <div class="widget-content">
                                <span>Jun 1, 2017</span>
                                <a href="#">Female Caucasian Insructor</a>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="#"><img src="assets/img/blog/thumb2.jpg" alt=""/></a>
                            </div>
                            <div class="widget-content">
                                <span>Jun 1, 2017</span>
                                <a href="#">Female Caucasian Insructor</a>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <li>
                            <div class="widget-thumb">
                                <a href="#"><img src="assets/img/blog/thumb2.jpg" alt=""/></a>
                            </div>
                            <div class="widget-content">
                                <span>Jun 1, 2017</span>
                                <a href="#">Female Caucasian Insructor</a>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                    </ul>
                </div>

                <div class="widget widget-categories">
                    <h5 class="widget-title">Categories</h5>
                    <ul class="cat-list">
                        <li>
                            <i class="fa fa-angle-right"></i><a href="#">Freebies</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i><a href="#">Site Template</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i><a href="#">Online Market</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i><a href="#">Typography</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right"></i><a href="#">Inspirations</a>
                        </li>
                    </ul>
                </div>
            </aside>

        </div>
    </div>
</div>
@endsection
