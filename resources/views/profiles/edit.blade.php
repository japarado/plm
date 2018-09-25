@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h2 class="medium-title">Editing Profile</h2>
                {!! Form::open(['action' => ['ProfilesController@update', $profile->user_id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                @csrf
                <div class="form-group">
                    {{ Form::label('name', 'Name') }} <span class="required">*</span>
                    {{ Form::text('name', $profile->user->name, ['class' => 'form-control', 'placeholder' => 'School of Computing']) }}
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('name') }}</strong></span>
                    @endif
                </div>

                <div class="form-group">
                    {{ Form::label('desc', 'Description') }} <span class="required">*</span>
                    {{ Form::textarea('desc', $profile->desc, ['class' => 'form-control', 'placeholder' => 'Tell us about yourself!', 'id' => 'summary-ckeditor']) }}
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('name') }}</strong></span>
                    @endif
                </div>

                {{ Form::hidden('_method','PUT') }}
                {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
