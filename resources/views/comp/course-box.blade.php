<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="courses-wrap">
        <div class="thumb">
            <img src="{{ asset('img/courses/img-1.jpg') }}" alt="Picture of course {{ $professor->pivot->name }}">
            <div class="courses-price">
                <p class="years">Duration</p>
                <span class="price">{{ $professor->pivot->duration }} Years</span>
            </div>
        </div>
        <div class="course-detail-wrap">
            <div class="teacher-wrap">
                <span class="course-instructor">Chair: <a href="#">{{ $professor->user->name }}</a></span>
                <img src="{{ asset($professor->user->profile->picture) }}" alt="Picture of {{ $professor->user->name }}">
            </div>
            <div class="course-content">
                <h3>
                    <a href="{{ route('courses.show',[$professor->pivot->professor_id,$professor->pivot->college_id]) }}">{{ $professor->pivot->name }}</a>
                </h3>
                <p></p>
                <a href="{{ route('courses.show',[$professor->pivot->professor_id,$professor->pivot->college_id]) }}" class="btn btn-common btn-sm">Apply Now</a>
            </div>
        </div>
    </div>
</div>
