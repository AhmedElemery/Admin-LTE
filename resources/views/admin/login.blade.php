<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ trans('admin.login') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ url('design/adminPanel') }}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ url('design/adminPanel') }}/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ url('design/adminPanel') }}/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ url('design/adminPanel') }}/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="{{ url('design/adminPanel') }}/plugins/iCheck/square/blue.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Login</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    @if(session()->has('success_updated'))
      <div class="alert alert-success">
          <h3>{{ session('success_updated') }}</h3>
      </div>
    @endif

    @if ($errors->all())
       @foreach ($errors->all() as $error)
           <div class="alert alert-danger">
                {{ $error }}
            </div>
       @endforeach
    @endif

    <form method="post">
        {!! csrf_field() !!}
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="rememberMe" value="1"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="{{ aurl('forgot/password') }}">I forgot my password</a><br>

  </div>
</div>
<script src="{{ url('design/adminPanel') }}/bower_components/jquery/dist/jquery.min.js"></script>
<script src="{{ url('design/adminPanel') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{ url('design/adminPanel') }}/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
