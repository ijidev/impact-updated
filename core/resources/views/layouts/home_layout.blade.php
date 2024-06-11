<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Panel</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('homeasset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('homeasset/css/start.css') }}">
    <link rel="stylesheet" href="{{ asset('homeasset/libraries/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontassets/login.css') }}">
    <link rel="stylesheet" href="{{ asset('frontassets/custom.js') }}">
        
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css"
      integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ asset('frontassets/login.css') }}">
</head> 
    <body class="everyThing">
        
        
    <style>
            .loader-wrapper {
                display: flex;
                justify-content: center;
                align-items: center;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.7);
                z-index: 9999;
            }

            .loader {
                border: 4px solid #f3f3f3;
                border-top: 4px solid blue;
                border-radius: 50%;
                width: 40px;
                height: 40px;
                animation: spin 2s linear infinite;
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }

            #loader p {
                margin-top: 20px;
                margin-left: 10px;
                color: white;
                font-weight: bold;
            }

        </style>

    <div class="loader-wrapper" id="loader">
            <div class="loader"></div>
            <p> Loading...</p>
        </div>
        
        
        <nav>
            <div class="container">
                <div class="mainNav py-2">
                    <a
                        href="{{ route('home') }}"
                        class="navbar-brand"
                        style="text-decoration: none; color: white"
                        >
                        <img src="{{ asset('/homeasset/images/logo.png') }}" alt="" class="logo" />
                    </a>
    
                    <!--a href="{{ route('logou') }}"><i class=""></i>Logout</a-->
                    <a href="{{ route('profile') }}"><i class="las la-user"></i></a>
                </div>
            </div>
        </nav>
        
        <div class="page-header">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">@yield('title')</h2>
                @if (session('success'))
                    <div class="alert alert-success text-center" role="alert">
                        {{ session('success') }}
                    </div>   
                @elseif (session('error'))
                    <div class="alert alert-danger text-center" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
        
         @yield('content')
         
        <!-- bottom tab -->
        <div class="bottomTabs fixed-bottom">
            <div class="container">
                <div class="mainTabs">
                    <div class="home d-flex flex-column align-items-center" id="tab">
                        <a href="{{ route('home') }}" class="d-flex flex-column align-items-center text-decoration-none">
                            <i class="las la-home"></i>
                            <p class="small">Home</p>
                        </a>
                    </div>
                    <div class="starting" id="tab">
                        <a href="{{ route('getstarted') }}" class="d-flex flex-column align-items-center text-decoration-none">
                            <img src="{{ asset('homeasset/images/start.png') }}" alt="" style="width: 60px;">
                            <p class="small text-center">Starting</p>
                        </a>
                    </div>
                    <div class="Records d-flex flex-column align-items-center" id="tab">
                        <a href="{{ route('record') }}" class="d-flex flex-column align-items-center text-decoration-none">
                            <i class="las la-book"></i>
                            <p class="small">Records</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
         
    </body>
    <!-- Custom JS File -->
     <script>
        document.addEventListener("DOMContentLoaded", function() {
            const modal = document.getElementById("popup");
            const closeModal = document.getElementById("popCloseBtn");
        
            modal.style.display = "block";
        
            closeModal.addEventListener("click", function() {
            modal.style.display = "none";
            });
        });
        
        document.addEventListener("DOMContentLoaded", function() {
            const loader = document.getElementById("loader");
            const content = document.querySelector("body");

            // Simulate loading time (you can replace this with actual loading code)
            setTimeout(function() {
                loader.style.display = "none";
                content.style.display = "block";
            }, 1000); // Change 2000 to the actual loading time in milliseconds
            });
    </script>
        <script src="{{ asset('frontassets/model.js') }}"></script>
        <script src="{{ asset('frontassets/custom.js') }}"></script>
       
</html>