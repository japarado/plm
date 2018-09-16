<section class="courses section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="courses-wrap">
                    <div class="thumb">
                        <img src="@yield('course-picture')" alt="">
                        <div class="courses-price">
                            <p class="years">Duration: 3 Years</p>
                            <span class="price">$2000</span>
                        </div>
                    </div>
                    <div class="course-detail-wrap">
                        <div class="teacher-wrap">
                            <span class="course-instructor">by <a href="#">Maria Bella</a>, <a
                                        href="#">Jana Smith</a></span>
                            <img src="@yield('professor-picture')" alt="">
                        </div>
                        <div class="course-content">
                            <h3><a href="courses-single.html">@yield('course-name')</a></h3>
                            <p>@yield('course-desc')</p>
                            <a href="{{ route('courses.show',$course->id) }}" class="btn btn-common btn-sm">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>