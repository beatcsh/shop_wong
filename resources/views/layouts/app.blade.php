<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon"
        href="https://pinkdiamondnailsla.com/cdn/shop/files/pesoplumagraffiti_PinkBackground_WaterproofvinyldecalsbypinkdiamondnailsLA_pinkdiamondnailsla_300x300.png?v=1695602866"
        type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>uefe</title>
    <!-- Tailwind CSS -->
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Exo+2:wght@100..900&family=Ga+Maamli&display=swap');

        * {
            font-family: "Exo 2", sans-serif;
        }

        .content-wrapper {
            margin-top: 15px;
            margin-bottom: 30px;
        }

        footer {
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body class="bg-gray-800">
    @if (auth()->check())
        <nav class="bg-gray-900 p-4">
            <div class="container mx-auto flex justify-between items-center">
                <p class="text-violet-600 hover:text-white transition-all duration-500">Hi
                    {{ auth()->user()->username }}</p>
                <div class="flex space-x-4">
                    <a class="text-violet-300 hover:text-white transition-all duration-500" aria-current="page"
                        href="/main">Home</a>
                    @if (auth()->user()->username == 'admin')
                        <a class="text-violet-300 hover:text-white transition-all duration-500" aria-current="page"
                            href="/addProds">Add Products</a>
                    @endif
                    <form action="/logout" method="post" class="inline">
                        @csrf
                        <button type="submit"
                            class="text-violet-700 hover:text-white transition-all duration-500 underline">Logout</button>
                    </form>
                </div>
            </div>
        </nav>

    @endif

    <div class="content-wrapper flex justify-center items-center">
        <div class="container text-center">
            @yield('contenido')
        </div>
    </div>

    @if (auth()->check())
        <footer class="text-center bg-gray-900">
            <section class="py-4">
                <!-- Social media links -->
                <a class="text-violet-700 mx-4 hover:text-white transition-all duration-700" href="#!" role="button">
                    <i class='bx bxl-facebook-circle'></i> 
                </a>
                <a class="text-violet-700 mx-4 hover:text-white transition-all duration-700" href="#!" role="button">
                    <i class='bx bxl-twitter' ></i>
                </a>
                <a class="text-violet-700 mx-4 hover:text-white transition-all duration-700" href="#!" role="button">
                    <i class='bx bxl-instagram-alt' ></i>
                </a>
                <a class="text-violet-700 mx-4 hover:text-white transition-all duration-700" href="#!" role="button">
                    <i class='bx bxl-linkedin-square' ></i>
                </a>
                <a class="text-violet-700 mx-4 hover:text-white transition-all duration-700" href="#!" role="button">
                    <i class='bx bxl-github' ></i>
                </a>
            </section>
            <p class="pb-4 text-sm text-white">Derechos de autor a cada uno de los artistas, nosotros no sabemos nada</p>
        </footer>
    @endif

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>

</html>
