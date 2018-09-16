<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="courses-wrap">
        <div class="thumb">
            <img src="{{ asset($course->picture) }}" alt="Picture of course {{ $course->name }}">
            <div class="courses-price">
                <p class="years">Duration</p>
                <span class="price">{{ $course->duraton }}</span>
            </div>
        </div>
        <div class="course-detail-wrap">
            <div class="teacher-wrap">
                <span class="course-instructor">by <a href="#">{{ $professor->user->name }}</a></span>
                <img src="{{ $professor->user->profile->picture }}" alt="Picture of {{ $professor->user->name }}">
            </div>
            <div class="course-content">
                <h3>
                    <a href="{{ route('courses.show',[$course->professor_id,$course->college_id]) }}">{{ $course->name }}</a>
                </h3>
                <p></p>
                <a href="{{ route('courses.show',[$course->professor_id,$course->college_id]) }}" class="btn btn-common btn-sm">Apply Now</a>
            </div>
        </div>
    </div>
</div>