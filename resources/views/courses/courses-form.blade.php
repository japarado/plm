<div class="col-md-6 col-md-offset-3">
    <h2 class="medium-title">Editing {{ $course->name }}</h2>
    {{ Form::open(['action' => ['CoursesController@update', $course->id], 'method' => 'POST', 'enctpye' => 'multipart/form-data']) }}
    @csrf
    <div class="form-group">
        {{ Form::label('name', 'College Name') }} <span class="required">*</span>
        {{ Form::text('name') }}
        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
        @endif
    </div>

    <div class="form-group">
        {{--<label for="password">Password <span class="required">*</span></label>
        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password"
               type="password" required autofocus>--}}

        {{ Form::label('desc', 'College Description') }}
        {{ Form::textarea('desc') }}

        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('password') }}</strong></span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('picture', 'Course Profile Picture') }}
        {{ Form::file('picture') }}
    </div>

    <div class="form-group">
	{{ Form::label('professor_id', 'Chairperson') ]}
	{{ Form::select('professor_id' }}
    </div>
    </div>

    <button type="submit" id="submit" class="btn btn-common">Login</button>
    {{ Form::close() }}
</div>

