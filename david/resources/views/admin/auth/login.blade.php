<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>David Antonyan | Admin Login</title>
    <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
</head>
<body class="login">
    <div id="login">
        <h1>
            {{App\Helpers\Helper::logo()}}
        </h1>
        @if (count($errors) > 0)
            <div id="login-error">
                <strong>ОШИБКА</strong>
                <br>
                @foreach($errors->all() as $error)
                    &nbsp;&nbsp;&nbsp;:{{$error}}<br>
                @endforeach
            </div>
        @endif
        <form name="loginform" id="loginform" action="{{route('admin.login')}}" method="post">
            <p>
                <label for="user_login">E-mail<br>
                <input type="email" name="email" id="user_login" class="input" value="{{old('email')}}"></label>
            </p>
            <p>
                <label for="user_pass">Пароль<br>
                <input type="password" name="password" id="user_pass" class="input"></label>
            </p>
            <p class="f-left">
                <label for="remember">
                    <input name="remember" type="checkbox" id="remember"> Запомнить меня
                </label>
            </p>
            <p class="submit">
                {{csrf_field()}}
                <input type="submit" class="button button-large" value="Войти">
            </p>
        </form>
    </div>
    <script>

        function attempt_focus(){
            setTimeout(function(){
                try{
                    d = document.getElementById('user_login');
                    d.focus();
                    d.select();
                } catch(e){}
            }, 200);
        }

        attempt_focus();
    </script>
</body>
</html>