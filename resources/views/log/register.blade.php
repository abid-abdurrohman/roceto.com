@extends('layouts.app')

@section('content')

<section id="login" class="container secondary-page">
    <div class="general general-results players">
        <!-- LOGIN BOX -->
      <div class="top-score-title right-score col-md-12">
          <h3>Register<span> Now</span><span class="point-int"> !</span></h3>
           <div class="col-md-12 login-page">
                <form method="post" class="login-form">
                   <div class="name">
                       <label for="name_login">Email:</label><div class="clear"></div>
                       <input id="name_login" name="name_login" type="text" placeholder="example@domain.com" required=""/>
                   </div>
                   <div class="pwd">
                       <label for="password_login">Password:</label><div class="clear"></div>
                       <input id="password_login" name="password_login" type="password" placeholder="********" required=""/>
                   </div>
                   <div id="login-submit">
                       <input type="submit" value="Submit"/>
                       <p>
                           <a href="redirect/facebook">FB Login</a>
                           <a href="redirect/twitter">Twitter Login</a>
                           <a href="redirect/google">G+</a>
                       </p>
                   </div>
                </form>
           </div>
      </div><!--Close Login-->
   </div>
    @include('layouts.bottom-content')
</section>
@endsection
