<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <!-- Bootstrap core CSS -->

    <!-- Additional CSS Files-->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-sixteen.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">


    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>{{ config('app.name', 'Newton') }}</title>


</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <!-- ***** Preloader Start ***** -->
        <div id="preloader">
            <div class="jumper">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- ***** Preloader End ***** -->

        <!-- Header -->
        <header class="">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <h2>Newton<em>S</em></h2>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="dashboard">HOME
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="product">OUR PRODUCTS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact">CONTACT US</a>
                            </li>
                            <br>

                            <li class="nav-item">
                                <div class="dropdown">
                                    <button type="button" class="btn btn-info" data-toggle="dropdown">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> <a
                                            style="color: black; font-weight: bold;" href="cart">CART</a> <span
                                            class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <div class="row total-header-section">
                                            <div class="col-lg-6 col-sm-6 col-6">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span
                                                    class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                            </div>
                                            @php $total = 0 @endphp
                                            @foreach ((array) session('cart') as $id => $details)
                                                @php $total += $details['fee'] * $details['quantity'] @endphp
                                            @endforeach
                                            <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                                <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                                            </div>
                                        </div>
                                        @if (session('cart'))
                                            @foreach (session('cart') as $id => $details)
                                                <div class="row cart-detail">
                                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                        <img src="{{ $details['image_path'] }}" />
                                                    </div>
                                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                        <p>{{ $details['title'] }}</p>
                                                        <span class="price text-info"> ${{ $details['fee'] }}</span>
                                                        <span class="count">
                                                            Quantity:{{ $details['quantity'] }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                                <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View
                                                    all</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/logout') }}">LOG OUT</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <!-- Page Content -->

        <!-- Banner Starts Here -->

        @yield('content')

        <div class="container">

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

        </div>

        @yield('scripts')

        {{-- PAGE FOOTER --}}
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="inner-content">
                            <p style="color: #fff;">Stay Connected</p>
                            <div class="awesome">
                                <a href="//facebook.com/profile.php?id=100066858159194/"><i
                                        class="fa fa-facebook-f"></i></a>
                                <a href="//github.com/Soburr"><i class="fa fa-github"></i></a>
                                <a href="//linkedin.com/in/adebesin-adewunmi-334897220/"><i
                                        class="fa fa-linkedin"></i></a>
                                <a href="//wa.me/2348140902526"><i class="fa fa-whatsapp"></i></a>
                                <a href="//twitter.com/LilLucie4?t=pDIYS_BC8I7Mahub0xTkBQ&s=09/"> <i
                                        class="fa fa-twitter"></i></a>
                                <a href="//instagram.com/newton0999/"><i class="fa fa-instagram"></i></a>
                            </div><br>
                            <p style="color: #fff;">Contact us via mail</p>
                            <p style="color: #fff; text-transform: lowercase;">adebesinnewton99@gmail.com</p><br>
                            <p style="color: #fff;">Dev Number</p>
                            <p style="color: #fff;">+234 814 0902 526</p><br><br>
                            &copy; 2022 | Newton Co., Ltd.
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>


        <!-- Additional Scripts -->
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('js/owl.js') }}"></script>
        <script src="{{ asset('js/slick.js') }}"></script>
        <script src="{{ asset('js/isotope.js') }}"></script>
        <script src="{{ asset('js/accordions.js') }}"></script>


        <script language="text/Javascript">
            cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
            function clearField(t) { //declaring the array outside of the
                if (!cleared[t.id]) { // function makes it static and global
                    cleared[t.id] = 1; // you could use true and false, but that's more typing
                    t.value = ''; // with more chance of typos
                    t.style.color = '#fff';
                }
            }
        </script>



    </div>
</body>
</html>
