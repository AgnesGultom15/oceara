<!DOCTYPE html>
<html lang="en">
<script src="{{ asset('js/tailwindcss3.4.1.js') }}"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <style>
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            background: url("{{ asset('images/pnti.jpg') }}") no-repeat center;
            background-size: cover;
        }

        .logo {
            height: 60px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 30px;
            font-size: 15px;
            justify-content: center;
            text-align: center;
        }

        nav a:hover {
            color: rgb(90, 170, 241);
        }

        .hero-content {
            text-align: center;
            color: white;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .hero-content h1 {
            font-size: 60px;
            line-height: 1;
        }

        .hero-content h1 span {
            font-size: 90px;
            font-weight: bold;
        }

        .search-bar {
            width: 450px;
            position: absolute;
            left: 50%;
            top: 100%;
            transform: translate(-50%, -50%);
            height: 30px;
            border-radius: 40px;
            padding: 10px;
            background: rgba(255, 255, 255, 0.509);
            align-items: center;
        }

        .search-text {
            line-height: 30px;
            background: none;
            border: none;
            outline: none;
            width: 350px;
            padding-left: 10px;
            font-size: 25px;
            color: rgb(3, 80, 148);
        }

        .search-button {
            line-height: 30px;
            border: none;
            outline: none;
            background: none;
            cursor: pointer;
            width: 24px;
            height: 24px;
        }

        #user {
            margin-left: 90px;
        }
    </style>
</head>
<body>
    <header>
        <!-- Navbar updated with Tailwind classes -->
        <div class="navbar flex justify-between items-center bg-white bg-opacity-0 p-2">
            <img src="{{ asset('images/Oceara pUTIH.png') }}" alt="Logo" class="logo" />
            <nav>
                <a href="{{ url('/home') }}">HOME</a>
                <a href="{{ url('/destinasi') }}" id="p">DESTINASI</a>
                <a href="{{ url('/promo') }}">PROMO</a>
            </nav>
            <a href="{{ url('/login') }}" id="user">
                <img src="{{ asset('images/user-circle-fill.png') }}" />
            </a>
        </div>

        <div class="hero-content">
            <h1>
                Mau Kemana <br />
                <span>Hari Ini?</span>
            </h1>
            <div class="search-bar">
                <input class="search-text" type="text" />
                <button type="submit" class="search-button">&#128269;</button>
            </div>
        </div>

        <!-- Tailwind example section -->
        <div class="bg-blue-200 text-blue-800 p-4 m-4 text-center rounded-xl">
            Ini contoh implementasi Tailwind: margin, padding, dan background-color!
        </div>
    </header>
</body>
</html>