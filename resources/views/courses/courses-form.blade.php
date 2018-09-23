<div class="col-md-6 col-md-offset-3">
    <h2 class="medium-title">Editing {{ $course->name }}</h2>
    {!! Form::open(['action' => ['CoursesController@update', $course->id], 'method' => 'POST', 'enctpye' => 'multipart/form-data']) !!}
    @csrf
    <div class="form-group">
        {{ Form::label('name', 'College Name') }} <span class="required">*</span>
        {{ Form::text('name', $course->name, ['class' => 'form-control', 'placeholder' => 'School of Computing']) }}
        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::label('desc', 'College Description') }}
        {{ Form::textarea('desc',$course->desc, ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Say something about the college :)']) }}

        @if ($errors->has('desc'))
            <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('desc') }}</strong></span>
        @endif
    </div>

    <div class="form-group">
        {{ Form::file('picture') }}

        @if ($errors->has('picture'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('picture') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        <label for="professor_id">Professor</label>
        <select id="college_id" name="college_id">
            @foreach($professors as $professor)
                @if($course->professor->user_id == $professor->user_id)
                    <option selected value="{{ $professor->user_id }}">{{ $professor->user->name }}</option>
                @else
                    <option value="{{ $professor->user_id }}">{{ $professor->user->name }}</option>
                @endif
            @endforeach
        </select>
        @if ($errors->has('professor_id'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('professor_id') }}</strong>
            </span>
        @endif
    </div>

    <div class="form-group">
        <label for="college_id">College</label>
        <select id="college_id" name="college_id">
            @foreach($colleges as $college)
                @if($course->college->id == $college->id)
                    <option selected value="{{ $college->id }}">{{ $college->name }}</option>
                @else
                    <option value="{{ $college->id }}">{{ $college->name }}</option>
                @endif
            @endforeach
        </select>
        @if ($errors->has('college_id'))
            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('college_id') }}</strong>
        </span>
        @endif
    </div>
    {{ Form::hidden('_method','PUT') }}
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
</div>
</div>

