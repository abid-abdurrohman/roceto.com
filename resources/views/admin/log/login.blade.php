<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link href="{{ URL::asset('admin_asset/css/bootstrap.min.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="{{ URL::asset('admin_asset/login/css/reset.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('admin_asset/login/css/style.css') }}">

</head>
<body>
    <div class="container">
  <div class="info">
    <h1>LOGIN ADMIN</h1><span>Made with <i class="fa fa-heart"></i> by <a href="#">roceto</a></span>
  </div>
</div>
<div class="form">
  @if (Session::has('message'))
    <div class="alert alert-warning"><span class="close"></span>{{ Session::get('message') }}</div>
  @endif
  <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
  {{ Form::open(array('method'=>'POST','action'=>'AdminController@pro_login','class'=>'login-form')) }}

    <input type="text" placeholder="username" name="username" required/>
    <input type="password" placeholder="password" name="password" required/>
    <button>LOG IN</button>
  {{ Form::close() }}
</div>

<script src="{{ URL::asset('admin_asset/login/js/index.js') }}"></script>

</body>
</html>
