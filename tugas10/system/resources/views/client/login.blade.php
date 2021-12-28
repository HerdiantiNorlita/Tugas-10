<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | My Flatshoes</title>
  <link rel="stylesheet" type="text/css" href="{{ url('public') }}/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
</head>
<body id="bg-login">

  <div class="box-login">
    @include('utils.notif')
    <h2>Login</h2>
    <form action="{{ url('login') }}" method="post">
      @csrf
      <input type="email" placeholder="Email" class="input-control" name="email">
      <input type="password"  placeholder="Password" class="input-control" name="password">
     <button class="btn">
       login
     </button>
    </form>
  </div>
</body>
</html>