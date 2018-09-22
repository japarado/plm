<div class="col-md-6 col-md-offset-3">

    <h2 class="medium-title">Register</h2>

    <form action="{{ route('register') }}" id="register-form" class="register-form" role="form" method="post">
        @csrf
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="input-icon">
                <i class="ti-user"></i>
                <input id="name" type="text" class="form-control" name="name" placeholder="Full Name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="input-icon">
                <i class="ti-email"></i>
                <input id="email" type="email" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="input-icon">
                <i class="ti-lock"></i>
                <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <div class="input-icon">
                <i class="ti-lock"></i>
                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" required>
            </div>
            <a href="{{ route('login') }}">Already have an account?</a>
        </div>
        {{--<div class="form-group">
            <label for="username">Email address<span class="required">*</span></label>
            <input class="form-control" name="username" id="username" type="text">
        </div>
        <div class="form-group">
            <label for="password">Password <span class="required">*</span></label>
            <input class="form-control" name="password" id="password" type="password">
        </div>--}}
        <button type="submit" id="submit" class="btn btn-common">Register</button>
    </form>
</div>
