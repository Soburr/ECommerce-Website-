<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css"
        rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Registration</title>
</head>

<body>
    <div class="bg-img">
        <div class="content">
            <h2>NEWTONs</h2>

            @if ($errors->any())
                <div class="alert alert-danger" style="color: red; font-size: 20px;">
                    @foreach ($errors->all() as $error)
                        <ul>
                            <li>{{ $error }}</li>
                        </ul>
                    @endforeach
                </div><br>
            @endif

            <form action="{{ route('register') }}" method="POST">
                @csrf

                {{-- Name Field --}}
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" name="name" placeholder="Name" required autofocus>
                </div><br>

                {{-- Email Field --}}
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" name="email" placeholder="Email" required autofocus>
                </div>

                {{-- Password Field --}}
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" name="password" placeholder="Password" required autofocus>
                    <span class="show">SHOW</span>
                </div>

                {{-- Confirm Password --}}
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" name="password_confirmation" placeholder="Confirm Password"
                        id="password_confirmation" required autofocus>
                    <span class="show">SHOW</span>
                </div><br>

                {{-- Login Field --}}
                <div class="field">
                    <input type="submit" value="LOG IN">
                </div>
            </form><br>
            <div class="signup">
                <span>Already Registered ?</span>
                <a href="login">Log In</a><br><br>
            </div>
        </div>
</body>

</html>
