<!DOCTYPE html>
<html>
<head>
  <title>Register</title>

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
          <div class="title">Register.</div>
      </div>
      <div class="app-block">
        <div class="app-form">
          <form action="{{ url('/register') }}" method="POST">
            {{ csrf_field() }}
              <div class="input-group {{ $errors->has('name') ? ' has-error' : '' }}">
                <span class="input-group-addon" id="basic-addon2">
                  <i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon2" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                  <span class="help-block">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
              </div>
            <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <span class="input-group-addon" id="basic-addon3">
                  <i class="fa fa-envelope" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" aria-describedby="basic-addon3" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
              <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                <span class="input-group-addon" id="basic-addon3">
                  <i class="fa fa-key" aria-hidden="true"></i></span>
                <input type="password" class="form-control" name="password" placeholder="Password" aria-describedby="basic-addon3" required>
                  @if ($errors->has('password'))
                      <span class="help-block">
                           <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon4">
                  <i class="fa fa-check" aria-hidden="true"></i></span>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" aria-describedby="basic-addon4" required>
              </div>
              <div class="text-center">
                  <input type="submit" class="btn btn-success btn-submit" value="Register">
              </div>
          </form>

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