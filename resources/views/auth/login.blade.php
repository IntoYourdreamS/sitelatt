<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
</head>

<body>
    <form action="auth/login" method="post">
        <div class="wrapper">
            <div class="container main">
                <div class="row">
                    <div class="col-md-6 side-image">
                        <!-------------      image     ------------->
                        <img src="{{ asset('/img/41.png') }}" alt="">
                    </div>
                    <div class="col-md-6 right">
                        <div class="input-box">
                            <header>Login</header>
                            @csrf
                            <div class="input-field">
                                <input type="text" class="input" id="Username" required="" autocomplete="off" name="email" value="{{ Session::get('email') }}">
                                <label for="Username">Username</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" id="pass" required="" name="password">
                                <label for="pass">Password</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" class="submit" value="Login" name="submit">
                            </div>
                            @if (session('login'))
                                <div class="alert alert-danger mt-3" role="alert">{{ session('login') }}</div>
                            @endif
                            @if (session('logout'))
                                <div class="alert alert-success mt-3" role="alert">{{ session('logout') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
