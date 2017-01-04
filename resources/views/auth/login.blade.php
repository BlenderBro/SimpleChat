<!DOCTYPE html>
<html>
<head>
  <title>Log in</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/vendor.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/flat-admin.css') }}">
</head>
<body>
  <div class="app app-default">

<div class="app-container app-login">
  <div class="flex-center">
    <div class="app-header"></div>
    <div class="app-body">
      <div class="loader-container text-center">
          <div class="icon">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
              </div>
            </div>
          <div class="title">Logging in...</div>
      </div>
      <div class="app-block">
      <div class="app-form">
        <div class="form-header">
          <div class="app-brand">SimpleChat</div>
        </div>
        <form action="{{ url('/login') }}" method="POST">
            {{ csrf_field() }}
            <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
              <span class="input-group-addon" id="basic-addon1">
                <i class="fa fa-user" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
              <span class="input-group-addon" id="basic-addon2">
                <i class="fa fa-key" aria-hidden="true"></i></span>
              <input type="password" class="form-control" placeholder="Password" name="password" aria-describedby="basic-addon2">
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-success btn-submit" value="Login">
            </div>
        </form>
          <div class="form-line">
              <div class="title">OR</div>
          </div>
          <div class="form-footer">
              <div class="links">
                <a href="{{ url('/register') }}">Register</a>
              </div>
          </div>
      </div>
      </div>
    </div>
    <div class="app-footer">
    </div>
  </div>
</div>

  </div>
  
  {{--<script type="text/javascript" src="{{asset('/js/vendor.js') }}"></script>--}}
  {{--<script type="text/javascript" src="{{asset('/js/app.js') }}"></script>--}}

</body>
</html>