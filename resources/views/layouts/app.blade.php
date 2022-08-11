<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="author" content="">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
                    <!-- Bootstrap core CSS -->

                    <!-- Additional CSS Files From Downloaded Template-->
        <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
        <link rel="stylesheet" href="{{ asset('css/templatemo-sixteen.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
        <link rel="stylesheet" href="{{ asset('css/template.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">


                       <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <title>{{ config('app.name', 'Laravel') }}</title>


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
                      <a class="navbar-brand" href="index.html"><h2>Newton <em>Clothing</em></h2></a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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
                          <li class="nav-item">
                            <a class="nav-link" href="{{url('/logout')}}">LOG OUT</a>
                          </li>

                        </ul>
                      </div>
                    </div>
                  </nav>
                </header>

                <!-- Page Content -->
                <!-- Banner Starts Here -->

                @yield('content')

                <footer>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="inner-content">
                          <p>Copyright &copy; 2022</p> {{-- Newton Clothing Co., Ltd. --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </footer>


                <!-- Bootstrap core JavaScript -->
                <script src="{{asset ('jquery/jquery.min.js')}}"></script>
                <script src="{{asset ('bootstrap/js/bootstrap.bundle.min.js')}}"></script>


                <!-- Additional Scripts -->
                <script src="{{ asset('js/custom.js') }}"></script>
                <script src="{{ asset('js/owl.js') }}"></script>
                <script src="{{ asset('js/slick.js') }}"></script>
                <script src="{{ asset('js/isotope.js') }}"></script>
                <script src="{{ asset('js/accordions.js') }}"></script>


                <script language = "text/Javascript">
                  cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
                  function clearField(t){                   //declaring the array outside of the
                  if(! cleared[t.id]){                      // function makes it static and global
                      cleared[t.id] = 1;  // you could use true and false, but that's more typing
                      t.value='';         // with more chance of typos
                      t.style.color='#fff';
                      }
                  }
                </script>



        </div>
    </body>
</html>
