<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <!-- CSS FILES -->                
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}">  
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">  
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 

</head>
<body>

<nav class="navbar navbar-expand-lg">                
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <span class="navbar-brand-text">
                WebDev
                <small>Midterm Project</small>
            </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contacts') }}">Contacts</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Projects</a>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ url('/laboratory1') }}">Laboratory 1</a></li>
                        <li><a class="dropdown-item" href="{{ url('/laboratory2') }}">Laboratory 2</a></li>
                        <li><a class="dropdown-item" href="{{ url('/laboratory3') }}">Laboratory 3</a></li>
                        <li><a class="dropdown-item" href="{{ url('/laboratory4') }}">Laboratory 4</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/feedback') }}">Feedbacks</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="site-footer @yield('footer-class')">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 me-auto mb-5 mb-lg-0">
                <a class="navbar-brand d-flex align-items-center" href="index.html">
                    <span class="navbar-brand-text">
                        WebDev
                        <small>Midterm Project</small>
                    </span>
                </a>
            </div>

            <div class="col-lg-3 col-12">
                <h5 class="site-footer-title mb-4">Schedule</h5>
                <p class="d-flex border-bottom pb-3 mb-3 me-lg-3">
                    <span>M-F-Th</span>
                    4:00 PM - &:00 PM
                </p>
                <p class="d-flex me-lg-3">
                    <span>WED</span>
                    8:30 AM - 12:00 PM
                </p>
                <br>
                <p class="copyright-text">Copyright © 2024 WebDev Midterm Project</p>
            </div>

            <div class="col-lg-2 col-12 ms-auto">
                <ul class="social-icon mt-lg-5 mt-3 mb-4">
                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-instagram" style="display:flex; text-align: center; justify-content: center; align-items: center;"></a>
                    </li>
                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-facebook" style="display:flex; text-align: center; justify-content: center; align-items: center;"></a>
                    </li>
                    <li class="social-icon-item">
                        <a href="#" class="social-icon-link bi-whatsapp" style="display:flex; text-align: center; justify-content: center; align-items: center;"></a>
                    </li>
                </ul>
                <p class="copyright-text">Design: <a rel="nofollow" href="#" target="_blank">Wendee Diane</a></p>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ADC1C2" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
</footer>

<!-- JAVASCRIPT FILES -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/animated-headline.js') }}"></script>
<script src="{{ asset('js/modernizr.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/thanks.js') }}"></script>

</body>
</html>
