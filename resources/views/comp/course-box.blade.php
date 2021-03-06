<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="courses-wrap">
        <div class="thumb">
            @if($professor->pivot->picture == 'placeholder.jpg')
                <img src="/storage/courses/{{ $professor->pivot->picture }}"
                     alt="Picture of course {{ $professor->pivot->name }}">
            @else
                <img src="/storage/courses/{{ $professor->pivot->name }}/cover_image/{{ $professor->pivot->picture }}"
                     alt="Picture of course {{ $professor->pivot->name }}">
            @endif
            <div class="courses-price">
                <p class="years">Duration</p>
                <span class="price">{{ $professor->pivot->duration }} Years</span>
            </div>
        </div>
        <div class="course-detail-wrap">
            <div class="teacher-wrap">
                <span class="course-instructor">Chair: <a href="{{ route('profiles.show', $professor->user_id) }}">{{ $professor->user->name }}</a></span>
                <img src="{{ asset($professor->user->profile->picture) }}"
                     alt="Picture of {{ $professor->user->name }}">
            </div>
            <div class="course-content">
                
                <p></p>
                {{--<a href="{{ route('courses.show',[$professor->pivot->professor_id,$professor->pivot->college_id]) }}" class="btn btn-common btn-sm">Explore</a>--}}
                <a href="{{ route('courses.show',\App\Course::where('professor_id','=',$professor->user_id)->where('college_id','=',$college->id)->first()->id) }}"
                   class="btn btn-common btn-sm">Explore</a>
            </div>
        </div>
    </div>
</div>
