<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Baguio Teachers Camp Reservation System - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{('css/login/style.css')}}" rel="stylesheet" type="text/css" media="screen" />
  </head>

  <body>
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <h2 class="active">Sign In </h2>
        <div class="fadeIn first">
          <img src="{{('img/login/btc-g.png')}}" id="icon" alt="Baguio Teacher's Camp Logo" />
        </div>
        
        <form method="post" action="{{ url('/login/checkLogin') }}">
          {{ csrf_field()}}
          <input type="username" id="login" class="fadeIn second" name="username" autofocus placeholder="Username">
          <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
          <input type="submit" class="fadeIn fourth" name="login" value="Log In">
        </form>
      </div>
    </div>
  </body>
</html>
