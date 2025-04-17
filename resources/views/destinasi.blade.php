<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESTINASI</title>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/styles3.css') }}">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=double_arrow">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="navbar">
            <img src="{{ asset('images/Oceara pUTIH.png') }}" alt="Logo" class="logo">
            <nav>
                <a href="{{ url('/home') }}">HOME</a>
                <a href="{{ url('/destinasi') }}">DESTINASI</a>
                <a href="{{ url('/promo') }}">PROMO</a>
            </nav>
            <a href="{{ url('/login') }}" id="user">
                <img src="{{ asset('images/user-circle-fill.png') }}">
            </a>
        </div>
    </header>

    <div class="container swiper">
        <div class="text-area">
            <a href="{{ url('/galang') }}"><button>GALANG</button></a>
            <a href="{{ url('/nongsa') }}"><button>NONGSA</button></a>
            <a href="{{ url('/tanjung_pinggir') }}"><button>Tj.PINGGIR</button></a>
            <a href="{{ url('/tiban') }}"><button>TIBAN</button></a>
            <a href="{{ url('/sekupang') }}"><button>SEKUPANG</button></a>
            <a href="{{ url('/piayu') }}"><button>PIAYU</button></a>
            <a href="{{ url('/punggur') }}"><button>PUNGGUR</button></a>
        </div>

        <div class="card-wrapper">
            <ul class="card-list swiper-wrapper">
                <li class="card-item swiper-slide">
                    <img src="{{ asset('images/pnt1.jpg') }}" alt="img-1" class="image-item">
                    <a><p class="sub">MIROTA</p></a>
                    <a href="{{ url('/des1') }}"><p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p></a>
                </li>
                <li class="card-item swiper-slide">
                    <img src="{{ asset('images/pnt2.jpg') }}" alt="img-2" class="image-item">
                    <a><p class="sub">CORNER</p></a>
                    <a href="#"><p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p></a>
                </li>
                <li class="card-item swiper-slide">A
                    <img src="{{ asset('images/pnt3.jpg') }}" alt="img-3" class="image-item">
                    <a><p class="sub">MELUR</p></a>
                    <a href="#"><p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p></a>
                </li>
                <li class="card-item swiper-slide">
                    <img src="{{ asset('images/pnt4.jpg') }}" alt="img-4" class="image-item">
                    <a><p class="sub">MIROTA</p></a>
                    <a href="#"><p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p></a>
                </li>
                <li class="card-item swiper-slide">
                    <img src="{{ asset('images/pnt5.jpg') }}" alt="img-5" class="image-item">
                    <a><p class="sub">MIROTA</p></a>
                    <a href="#"><p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p></a>
                </li>
                <li class="card-item swiper-slide">
                    <img src="{{ asset('images/pnt6.jpg') }}" alt="img-6" class="image-item">
                    <a><p class="sub">MIROTA</p></a>
                    <a href="#"><p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p></a>
                </li>
                <li class="card-item swiper-slide">
                    <img src="{{ asset('images/pnt7.jpg') }}" alt="img-7" class="image-item">
                    <a><p class="sub">MIROTA</p></a>
                    <a href="#"><p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p></a>
                </li>
            </ul>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <!-- Custom Script -->
    <script src="{{ asset('js/script5.js') }}"></script>
</body>
</html>