<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/82ef5747eb.js" crossorigin="anonymous"></script>
    <title>JASMAPALA - Jasamarga Pegiat Alam</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400&family=Quicksand:wght@600&display=swap');

        /* html,
        body {
            overflow-x: hidden
        } */
        /* .header-1 {
            font-family: -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 105px;
            font-style: normal;
            font-weight: 900;
            letter-spacing: normal;
            text-transform: none;
            color: #F8D4BC;

        } */

        /* .content-1 {
            font-family: -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 28px;
            font-style: normal;
            font-weight: 400;
            text-transform: none;
            color: #FFFFFF;
        } */
        .primary-color {
            color: #3A4D39;
        }

        .secondary-color {
            color: #4F6F52;
        }

        .hijau-muda {
            color: #739072;
        }

        .broken-white {
            color: #ECE3CE;
        }

        .header {
            font-family: -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-style: normal;
            font-weight: 900;
            letter-spacing: normal;
            text-transform: none;
            /* color: #ECE3CE; */
        }

        .content {
            font-family: -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-style: normal;
            font-weight: 400;
            text-transform: none;
        }

        .font-weight-bold {
            font-weight: bold !important;
            color: #3A4D39 !important;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-style: normal;
            font-weight: 900;
            letter-spacing: normal;
            text-transform: none;
            /* color: #ECE3CE; */

        }


        li,
        ol {
            font-family: -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-style: normal;
            font-weight: 400;
            text-transform: none;
            /* color: #FFFFFF; */
        }


        .jumbotron {
            position: relative;
            overflow: hidden;
            /* width: 100vw; */
            height: 100vh;
            margin: 0;
        }

        .jumbotron video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            -ms-transform: translateX(-50%) translateY(-50%);
            -moz-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }

        .jumbotron::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.42), rgba(0, 0, 0, 0.52));
            /* Hitam dengan tingkat transparansi 50% */
            z-index: 0;
        }

        #home #content {
            position: relative;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            height: 100vh;
            margin: 0;
            z-index: 1;
        }


        #home #content h1 {
            font-size: 24pt;
        }

        #home #content p {
            margin-top: 10px;
            font-size: 14pt;
            line-height: 1.2
        }

        #content {
            position: relative;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            height: 300px;
            margin: 0;
            z-index: 1;
        }


        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #ebebeb;
        }

        ::-webkit-scrollbar-thumb {
            background: #4F6F52;
            border-radius: 20px;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-20px);
            }

            60% {
                transform: translateY(-10px);
            }
        }

        .animated-arrow {
            animation: bounce 4s infinite;
        }

    </style>
</head>

<body>
    <section id="home">
        <div class="jumbotron">
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="{{ asset('video/header.mp4') }}" type="video/mp4">
            </video>
            <div id="content" class="text-white d-flex align-items-center justify-content-center">
                <div class="container">
                    <div class="container text-center">
                        <img src="{{ asset('images/jasmapala.jpeg') }}" style="border-radius: 130px; height: 180px;width: 180px;margin-bottom:10px;" alt="Logo">
                    </div>
                    <div class="container text-center">
                        <h1 class="broken-white">JASMAPALA</h1>
                        <p class="text-white">Jasamarga Pegiat Alam atau <strong>Jasmapala</strong> <br>
                            Merupakan organisasi pegiat alam yang bergerak <br> dibawah naungan Bang <strong>Ari
                                Setyawan</strong>.
                        </p>
                        <div class="d-grid gap-2 d-flex justify-content-center mt-3">
                            <a href="#" class="btn btn-lg text-white" style="background:#3A4D39">Gabung
                                Sekarang</a>
                            <a href="#" class="btn btn-lg btn-outline-light text-white">Donasi</a>
                        </div>
                    </div>
                    <div class="container text-center" style="margin-top:50px;margin-bottom:40px;">
                        <a onclick="scrollToSection('about')" href="#about"><i class="fa-solid fa-chevron-down animated-arrow hijau-muda h3"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="sticky-bottom" id="navbar">
        <nav class="navbar navbar-expand-lg p-1" style="background: #ECE3CE;">
            <div class="container">

                <a class="navbar-brand header primary-color" style="font-size: 18px;" href="#home">
                    <img src="{{ asset('images/jasmapala.jpeg') }}" style="border-radius: 130px; height: 60px;width: 60px;margin-right:5px;" alt="Logo" class="d-inline-block align-text-center"> JASMAPALA
                    {{-- <img src="{{ asset('images/jasmapala.jpeg') }}" alt="Logo" width="30" height="24"> --}}
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                {{-- <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link" onclick="scrollToSection('home')" aria-current="page"
                                href="#home">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="scrollToSection('about')" aria-current="page"
                                href="#about">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Aktivitas</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="btn text-white" style="background:#3A4D39">Login</a>
                        </li>
                    </ul>
                </div> --}}
                <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" onclick="scrollToSection('home')" href="#home">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" onclick="scrollToSection('about')" href="#about">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Aktivitas</a>
                        </li>
                        <li class="nav-item  d-sm-block d-md-none d-lg-none">
                            <a href="#" class="btn text-white" style="background:#3A4D39">Login <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="navbar-nav d-none d-md-block d-lg-block">
                    <!-- This div is visible on small screens (lg and below) -->
                    <a href="#" class="btn text-white" style="background:#3A4D39">Login <i class="fa-solid fa-arrow-right-to-bracket"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Bagian Navbar -->

    <section id="about">
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

    <script>
        window.onload = function() {
            // Trigger scrolling to the 'home' section on page load
            scrollToSection('home');
        };

        window.onscroll = function() {
            updateActiveSection();

            var navbar = document.getElementById("navbar");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                navbar.classList.remove("fixed-bottom");
                navbar.classList.add("sticky-top");
            } else {
                navbar.classList.remove("sticky-top");
                navbar.classList.add("fixed-bottom");
            }
        };

        function scrollToSection(sectionId) {
            var section = document.getElementById(sectionId);
            var navbarLinks = document.querySelectorAll('.navbar-nav .nav-link');

            navbarLinks.forEach(function(link) {
                link.classList.remove('font-weight-bold');
            });

            if (section) {
                section.scrollIntoView({
                    behavior: 'smooth'
                });

                // Apply bold style to the clicked link
                document.querySelector('.navbar-nav a[onclick="scrollToSection(\'' + sectionId + '\')"]').classList.add(
                    'font-weight-bold');
            }
        }

        function updateActiveSection() {
            var sections = document.querySelectorAll('section');
            var navbarLinks = document.querySelectorAll('.navbar-nav .nav-link');

            sections.forEach(function(section) {
                var rect = section.getBoundingClientRect();
                if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
                    // Section is in the middle of the viewport
                    var sectionId = section.getAttribute('id');
                    setBoldStyleForLink(sectionId);
                }
            });
        }

        function setBoldStyleForLink(sectionId) {
            var navbarLinks = document.querySelectorAll('.navbar-nav .nav-link');
            navbarLinks.forEach(function(link) {
                link.classList.remove('font-weight-bold');
            });

            // Apply bold style to the corresponding link
            document.querySelector('.navbar-nav a[onclick="scrollToSection(\'' + sectionId + '\')"]').classList.add(
                'font-weight-bold');
        }

    </script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script> --}}

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
