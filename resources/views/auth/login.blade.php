@extends('layouts.app')

@section('content')
<style>
    .btn-circle.btn-xl {
        width: 70px;
        height: 70px;
        padding: 10px 15px;
        font-size: 37px;
        line-height: 1.33;
        border-radius: 35px;
        text-align: center;
        margin-right: 10px;
        margin-left: 10px;
    }
</style>
<section id="login" class="container secondary-page">
   <div class="general general-results players">
      <!-- LOGIN BOX -->
       <div class="top-score-title right-score col-md-12">
           <h3>Login<span> Now</span><span class="point-int"> !</span></h3>
            <div class="col-md-12">
                @if(Session::has('status'))
                  <div class="alert alert-success alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      Information : <a href="#" class="alert-link">{{ Session::get('status') }} </a>.
                  </div>
                @endif
                @if(Session::has('warning'))
                  <div class="alert alert-warning alert-dismissable">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                      Information : <a href="#" class="alert-link">{{ Session::get('warning') }} </a>.
                  </div>
                @endif
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-sign-in"></i> Login
                            </button>

                            <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                        </div>
                    </div>
                </form>
                <h3>Or</h3>
                <div class="social-box">
              			<div class="row mg-btm">
                       <div class="col-md-12">
                          <center>
                              <a href="redirect/facebook" class="btn btn-primary btn-circle btn-xl">
                                <i class="fa fa-facebook"></i>
                              </a>
                              <a href="redirect/twitter" class="btn btn-info btn-circle btn-xl" >
                                 <i class="fa fa-twitter"></i>
                              </a>
                              <a href="redirect/google" class="btn btn-danger btn-circle btn-xl" >
                                 <i class="fa fa-google-plus"></i>
                              </a>
                          </center>
          			       </div>
              			</div>
              	</div>
            </div>
        </div>
    </div>
    @include('layouts.bottom-content')
</section>
@endsection
