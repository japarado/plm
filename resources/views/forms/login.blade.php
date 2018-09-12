<div class="col-md-6">
    <h2 class="medium-title">Login</h2>

    <form method="post" class="login" action="{{ route('login') }}">
        <div class="form-group">
            <label for="username">Email Address <span class="required">*</span></label>
            <input class="form-control" name="username" id="username" type="text">
        </div>
        <div class="form-group">
            <label for="password">Password <span class="required">*</span></label>
            <input class="form-control" name="password" id="password" type="password">
        </div>
        <div class="form-group">
            <label for="rememberme" class="inline">
                <input name="rememberme" id="rememberme" type="checkbox">Remember me</label>
            <a href="#">Lost your password?</a>
        </div>
        <button type="submit" id="submit" class="btn btn-common">Login</button>
    </form>
</div>
