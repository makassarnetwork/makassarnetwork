<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login | MakassarNetwork</title>
  <link rel="stylesheet" href="{{ asset('asset/css/login.css') }}" media="screen" type="text/css" />
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
</head>

<body>
<div class="container">
  <div id="login">
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
    {!! csrf_field() !!}
      <fieldset class="clearfix">
        <p><span class="fontawesome-user"></span>
            <input type="text" name="email" maxlength="30" value="{{ old('email') }}" placeholder="Masukkan Email" required>
        @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif
        </p>

        <p><span class="fontawesome-lock"></span>
            <input type="password" name="password" placeholder="******" required>
        @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
        @endif
        </p>
        <p><input type="submit" name="login" value="Masuk"></p>

      </fieldset>
    </form>      
   </div> <!-- end login -->
</div>
</body>
</html>