<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN | Login</title>
    <link href="{{asset('assets/img/smanda.png')}}" rel="icon" size="16x16">
    <link rel="stylesheet" href="{{asset('/assets/css/style_login.css')}}">


</head>

<body>
    <form method="POST" action="">
        @csrf
        <figure>
            <img src="{{asset('assets/img/logologin.png')}}" alt="Logo SMANDA">
        </figure>
        <h3>Login Admin</h3>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email" id="email" required>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" id="password" required>
        @if(Session::has('status'))
        <div class="warning" role="alert">
            {{Session::get('message')}}
        </div>
        @endif
        <div class="login-button">
            <button id="login" type="submit">Log In</button>
        </div>
        <div class="back-button">
            <button id="kembali" onclick="window.location.href = '/home';">Kembali</button>
        </div>
    </form>
</body>

</html>