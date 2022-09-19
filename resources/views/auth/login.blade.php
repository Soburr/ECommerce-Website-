<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <title>Login</title>
</head>

<body>

    <div class="bg-img">
        <div class="content">
            <h2>NEWTONs</h2>

            @if ($errors->any())
                <div class="alert alert-danger" style="color: red; font-size: 20px;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach

                    </ul>
                </div><br>
            @endif

            <form action="{{ asset('login') }}" method="POST">
                @csrf

                {{-- Email Field --}}
                <div class="field">
                    {{-- <span class="fa fa-user"></span> --}}
                    <input type="text" name="email" placeholder="Email" required autofocus>
                </div>

                {{-- Password Field --}}
                <div class="field space">
                    {{-- <span class="fa fa-lock"></span> --}}
                    <input type="password" name="password" placeholder="Password" required autofocus>
                    {{-- <span class="show">SHOW</span> --}}
                </div><br>

                {{-- Login Field --}}
                <div class="field">
                    <input type="submit" value="LOG IN">
                </div>
            </form><br>

            {{-- Signup --}}
            <div class="signup">
                <input type="checkbox" name="remember" id="remember_me"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                {{-- Remember Me --}}
                <span>{{ __('Remember me') }}</span><br><br>
                Don't have an account ?
                <a href="register">Sign Up</a><br><br>

                {{-- Reset Password --}}
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}"> Forgot Your password? </a>
                @endif
            </div>

        </div>
    </div>



</body>

</html>
