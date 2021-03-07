<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <base href="{{asset('')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <title>Đăng nhập</title>
        <link href="{{asset('public/css/forms.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/css/buttons.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/css/login.min.css')}}" rel="stylesheet">
  </head>
  <body class="login js login-action-login wp-core-ui  locale-en-us">
    <div id="login">
        <p class="message">Chào mừng đến với phpAdmin<br> Nền tảng website admin <strong>tốt nhất</strong></p>
        <form name="loginform" id="loginform" method="post">
            @csrf
            <p>
                <label for="username">Tên tài khoản</label>
                <input type="text" name="username" id="username" class="input" value="" size="20" autocapitalize="off">
            </p>
            <div class="user-pass-wrap">
                <label for="password">Mật khẩu</label>
                <div class="wp-pwd">
                    <input type="text" name="password" id="password" class="input password-input" value="" size="20">
                </div>
            </div>
            <p class="submit">
                <input style="width:100%" type="submit" name="submit" id="wp-submit" class="button button-primary button-large"
                    value="Đăng nhập">
            </p>
        </form>
        <p id="backtoblog"><a href="">← Về trang chủ </a></p>
    </div>
</body>
</html>