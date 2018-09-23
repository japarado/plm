<div class="col-md-6 col-md-offset-3">
    <h2 class="medium-title">Editing {{ $course->name }}</h2>
    {!! Form::open(['action' => ['CoursesController@update', $course->id], 'method' => 'POST', 'enctpye' => 'multipart/form-data']) !!}
    @csrf
    <div class="form-group">
        {{ Form::label('name', 'College Name') }} <span class="required">*</span>
        {{ Form::text('name', 'yes', ['class' => 'form-control', 'placeholder' => 'School of Computing']) }}
        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('desc', 'College Description') }}
        {{ Form::textarea('desc','', ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Say something about the college :)']) }}

        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('password') }}</strong></span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::file('picture') }}

        @if ($errors->has('picture'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        <label for="professor_id">Professor</label>
        <select id="college+id" name="college_id">
            @foreach($professors as $professor)
                <option value="{{ $professor->id }}">{{ $professor->user->name }}</option>
            @endforeach
        </select>
        @if ($errors->has('professor_id'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        <label for="college_id">College</label>
        <select id="college_id" name="college_id">
            @foreach($colleges as $college)
                <option value="{{ $college->id }}">{{ $college->name }}</option>
            @endforeach
        </select>
        @if ($errors->has('college_id'))
            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
    </div>
</div>

<button type="submit" id="submit" class="btn btn-common">Login</button>
{!! Form::close() !!}
</div>

