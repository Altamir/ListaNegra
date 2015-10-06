<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Login Form</title>
        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}" />
    </head>
    <body>
    <span href="#" class="button" id="toggle-login">Log in</span>
    <div id="login">
      <div id="triangle"></div>
      <h1>Log in</h1>
      <form method="POST" action="/auth/login">
        {!! csrf_field() !!}
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <input type="submit" value="Log in" />
      </form>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="{{ secure_asset('js/index.js') }}"></script>
  </body>
</html>
