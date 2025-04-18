<!-- resources/views/promo.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PROMO</title>
    <script src="{{ asset('js/tailwindcss3.4.1.js') }}"></script>
</head>
<body class="bg-gray-900 text-white font-sans">

    <!-- Navbar -->
    <header class="bg-transparent flex justify-between items-center p-4">
        <img src="{{ asset('images/Oceara pUTIH.png') }}" alt="Logo" class="h-14">
        <nav class="flex gap-8 text-lg font-medium">
            <a href="{{ url('/home') }}" class="hover:text-blue-400">HOME</a>
            <a href="{{ url('/destinasi') }}" class="hover:text-blue-4000">DESTINASI</a>
            <a href="{{ url('/promo') }}" class="hover:text-blue-400">PROMO</a>
        </nav>
        <a href="{{ url('/login') }}">
            <img src="{{ asset('images/user-circle-fill.png') }}" class="h-10">
        </a>
    </header>

    <!-- Slider -->
    <div class="relative w-full max-w-5xl mx-auto mt-8 overflow-hidden rounded-lg shadow-lg">
        <div class="flex transition-transform duration-500 ease-in-out" id="slider">
            <!-- Slide 1 -->
            <div class="min-w-full relative">
                <img src="{{ asset('images/pnt1.jpg') }}" class="w-full h-96 object-cover" alt="Labuan Bajo">
                <div class="absolute bottom-6 left-6 bg-black/60 p-4 rounded">
                    <h2 class="text-2xl font-bold">Paket Wisata Labuan Bajo</h2>
                    <p>3D2N - Pulau Kelor - Pulau Padar - Komodo</p>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="min-w-full relative">
                <img src="{{ asset('images/pnt2.jpg') }}" class="w-full h-96 object-cover" alt="Pulau Padar">
                <div class="absolute bottom-6 left-6 bg-black/60 p-4 rounded">
                    <h2 class="text-2xl font-bold">Nikmati Hiburan Anda bersama Kami!</h2>
                    <p>Pulau Padar - Pantai Pink</p>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="min-w-full relative">
                <img src="{{ asset('images/pnt1.jpg') }}" class="w-full h-96 object-cover" alt="Paket Snorkeling">
                <div class="absolute bottom-6 left-6 bg-black/60 p-4 rounded">
                    <h2 class="text-2xl font-bold">Paket Snorkeling</h2>
                    <p class="mb-4">Termasuk: Destinasi Eksotis, Hotel Eksklusif, Panduan Profesional</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Pesan Sekarang</button>
                </div>
            </div>
        </div>

        <!-- Navigation buttons -->
        <button onclick="changeSlide(-1)" class="absolute top-1/2 left-4 transform -translate-y-1/2 text-3xl">&#10094;</button>
        <button onclick="changeSlide(1)" class="absolute top-1/2 right-4 transform -translate-y-1/2 text-3xl">&#10095;</button>
    </div>

    <script>
        const slider = document.getElementById("slider");
        let index = 0;

        function changeSlide(direction) {
            const totalSlides = slider.children.length;
            index = (index + direction + totalSlides) % totalSlides;
            slider.style.transform = `translateX(-${index * 100}%)`;
        }
    </script>
</body>
</html>
