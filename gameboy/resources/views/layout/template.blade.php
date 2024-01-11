<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GameBoy - @yield('title', 'Website')</title>
    <link href="/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>



<body style="background: url('/images/bg.jpg') no-repeat center center fixed; background-size: cover;">
    <nav class="navbar navbar-expand-lg" data-bs-theme="dark" style="background-color: #45526e">
        <div class="container">
            <a class="navbar-brand" href="/"></a><a class="navbar-brand" href="/">
                <img src="{{ asset('/images/logo1.png') }}" class="img-fluid" style="max-height: 30px;">
                GameBoy
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/"><i
                                class="bi bi-house-door-fill"></i> Home</a>
                    </li>

                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/games/data"><i class="bi bi-gear-fill"></i> Game Master</a>
                        </li>
                    @endauth
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0  text-dark">
                    <form action="/" class="d-flex " role="search">
                        <input class="form-control me-2 bg-light-subtle" type="search" name="search"
                            placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <form action="/logout" method="post">
                                    @csrf
                                    <li>
                                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i>
                                            Logout</button>
                                    </li>
                                </form>

                            </ul>
                        </li>
                    @else
                        <li class="nav-item text-dark">
                            <a class="nav-link" href="/login"><i class="bi bi-person-circle"></i> Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-2">
        @yield('content')
    </div>



    <footer class="text-center text-lg-start text-white" style="background-color: #45526e">
        <!-- Grid container -->
        <div class="container-fluid p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Company name
                        </h6>
                        <p>
                            <i class="bi bi-building-fill"></i> manusiahiu.inc
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                        <p>
                            <a class="text-white"><a class="navbar-brand" href="/" target="blank"><i
                                        class="bi bi-controller"></i> GameBoy.com</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <a href="https://maps.app.goo.gl/Wd1cGTfTmJrYiScU9" target="blank"
                            style="text-decoration: none; color: inherit;">
                            <p><i class="fas fa-home mr-3"></i><i class="bi bi-geo-alt-fill"></i> Pentagon</p>
                        </a>
                        <a href="https://wa.me/6281267858615" target="_blank"
                            style="text-decoration: none; color: inherit;">
                            <i class="bi bi-telephone"></i> Admin
                        </a>
                    </div>
                    <!-- Grid column -->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->

            <hr class="my-3">

            <!-- Section: Copyright -->
            <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                    <!-- Grid column -->
                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                        <!-- Copyright -->
                        <div class="p-3">
                            © 2024 Copyright: Manusiahiu
                        </div>
                        <!-- Copyright -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                        <!-- Social Media Buttons -->

                        <a href="https://github.com/manusiaahiu" target="blank"
                            class="btn btn-outline-light btn-floating m-1" role="button"><i
                                class="bi bi-github"></i></a>
                        <a href="https://www.linkedin.com/in/ferdi-syamadri-32394024a/" target="blank"
                            class="btn btn-outline-light btn-floating m-1" role="button"><i
                                class="bi bi-linkedin"></i></a>
                        <a href="https://www.instagram.com/manusiaa_hiu/" target="blank"
                            class="btn btn-outline-light btn-floating m-1" role="button"><i
                                class="bi bi-instagram"></i></a>
                        <a href="mailto: manusiaahiuu@gmail.com" target="_blank"
                            class="btn btn-outline-light btn-floating m-1" role="button">
                            <i class="bi bi-envelope-at"></i>
                        </a>

                    </div>
                    <!-- Grid column -->
                </div>
            </section>
            <!-- Section: Copyright -->
        </div>
        <!-- Grid container -->
    </footer>


    <!-- End of .container -->

    <script src="/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>
