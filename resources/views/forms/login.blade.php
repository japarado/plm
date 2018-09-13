<div class="col-md-6">
    <h2 class="medium-title">Login</h2>

    <form method="post" class="login" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="username">Email Address <span class="required">*</span></label>
            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="username"
                   type="email" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif
        </div>
        <div class="form-group">
            <label for="password">Password <span class="required">*</span></label>
            <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password"
                   type="password" required autofocus>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif
        </div>
        <div class="form-group">
            <label for="rememberme" class="inline">
                <input name="remember" id="rememberme" type="checkbox" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember Me') }}</label>
            <a href="#">Lost your password?</a>
        </div>

        <button type="submit" id="submit" class="btn btn-common">Login</button>
    </form>
</div>
