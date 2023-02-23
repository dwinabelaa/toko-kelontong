<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #B08BBB;" id="profile">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark p-2 fixed-top" style="background-color: #863A6F;">
        <div class="container-fluid me-5 ms-5">
            <a class="navbar-brand" href="#">Toko Kelontong</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="barang">Daftar Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="harga">Daftar Harga</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container-fluid pt-5">
        @yield('container')
    </div>

    <!-- Footer -->
    <footer class="text-center p-1 fixed-bottom" style="background-color: #863A6F;">
        <p class="text-white">Selamat Berbelanja</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
