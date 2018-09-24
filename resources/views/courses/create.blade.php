@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2 class="medium-title">Create New Course</h2>
                {!! Form::open(['action' => ['CoursesController@store'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                @csrf
                <div class="form-group">
                    {{ Form::label('name', 'College Name') }} <span class="required">*</span>
                    {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'School of Computing']) }}
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
                    @endif
                </div>

                <div class="form-group">
                    {{ Form::label('desc', 'College Description') }}
                    {{ Form::textarea('desc','', ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Say something about the college :)']) }}

                    @if ($errors->has('desc'))
                        <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('desc') }}</strong></span>
                    @endif
                </div>

                <div class="form-group">
                    {{ Form::label('picture', 'Cover Picture') }}
                    {{ Form::file('picture') }}

                    @if ($errors->has('picture'))
                        <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('picture') }}</strong>
            </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="professor_id">Professor</label>
                    <select id="professor_id" name="professor_id">
                        @foreach($professors as $professor)
                                <option value="{{ $professor->user_id }}">{{ $professor->user->name }}</option>
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
                                <option value="{{ $college->id }}">{{ $college->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('college_id'))
                        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('college_id') }}</strong>
        </span>
                    @endif
                </div>
                {{ Form::hidden('_method','POST') }}
                {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    </div>
@endsection
