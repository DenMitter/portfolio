<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mitter | Back-end developer</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
</head>
<body>
    <div class="container">
        <header>
            <!-- Navigation -->
            <nav>
                <!-- PC navigation -->
                <a class="logo" href=""><svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 0.5H8V4.5H4H0V8.5V12.5V16.5H4H8V12.5H12H16V8.5V4.5V0.5H12ZM4 12.5H8V8.5H12V4.5H8V8.5H4V12.5Z" fill="white"/></svg>Mitter</a>
                <ul id="compNavigation">
                    <li><a class="nav__item nav__item-active" href="#">home</a></li>
                    <li><a class="nav__item" href="#projects">works</a></li>
                    <li><a class="nav__item" href="#aboutMe">about-me</a></li>
                    <li><a class="nav__item" href="#contacts">contacts</a></li>
                    <!-- <li><a href="" class="drop-menu">EN</a></li> -->
                </ul>
                <!-- Mobile navigation -->
                <div class="mobile-menu-container">
                    <div class="burger-menu" id="burger-menu">
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <div class="overlay" id="overlay"></div>
                    <div class="menu" id="menu">
                        <ul>
                            <li><a class="nav__item nav__item-active" href="#">home</a></li>
                            <li><a class="nav__item" href="#projects">works</a></li>
                            <li><a class="nav__item" href="#aboutMe">about-me</a></li>
                            <li><a class="nav__item" href="#contacts">contacts</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        @yield('content')
    </div>
    <i class="hr" style="margin: 125px 0 35px;"></i>
    <div class="container">
        <footer>
            <div class="footer__block">
                <div class="footer__info-me">
                    <div class="footer__info-me_email">
                        <a class="logo" href=""><svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12 0.5H8V4.5H4H0V8.5V12.5V16.5H4H8V12.5H12H16V8.5V4.5V0.5H12ZM4 12.5H8V8.5H12V4.5H8V8.5H4V12.5Z" fill="white"/></svg>Mitter</a>
                        <p>zizulabogdan@gmail.com</p>
                    </div>
                    <p>fullstack developer</p>
                </div>
                <div class="footer__media">
                    <h4>Media</h4>
                    <a href="https://github.com/DenMitter" target="_blank"><svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5 0C4.69875 0 0 4.58819 0 10.2529C0 14.7899 3.00562 18.6219 7.17937 19.9804C7.70437 20.0701 7.90125 19.7625 7.90125 19.4934C7.90125 19.2499 7.88813 18.4425 7.88813 17.5838C5.25 18.058 4.5675 16.9558 4.3575 16.3791C4.23938 16.0843 3.7275 15.1743 3.28125 14.9308C2.91375 14.7386 2.38875 14.2644 3.26813 14.2516C4.095 14.2388 4.68563 14.9949 4.8825 15.3025C5.8275 16.8533 7.33688 16.4175 7.94063 16.1484C8.0325 15.4819 8.30812 15.0334 8.61 14.777C6.27375 14.5207 3.8325 13.6364 3.8325 9.71466C3.8325 8.59965 4.23938 7.67689 4.90875 6.95918C4.80375 6.70286 4.43625 5.65193 5.01375 4.24215C5.01375 4.24215 5.89313 3.97301 7.90125 5.29308C8.74125 5.06239 9.63375 4.94704 10.5263 4.94704C11.4188 4.94704 12.3113 5.06239 13.1513 5.29308C15.1594 3.9602 16.0387 4.24215 16.0387 4.24215C16.6163 5.65193 16.2488 6.70286 16.1438 6.95918C16.8131 7.67689 17.22 8.58684 17.22 9.71466C17.22 13.6492 14.7656 14.5207 12.4294 14.777C12.81 15.0975 13.1381 15.7126 13.1381 16.6738C13.1381 18.0452 13.125 19.1474 13.125 19.4934C13.125 19.7625 13.3219 20.0829 13.8469 19.9804C15.9314 19.2935 17.7428 17.9854 19.026 16.2403C20.3092 14.4953 20.9996 12.4012 21 10.2529C21 4.58819 16.3013 0 10.5 0Z" fill="#ABB2BF"/></svg></a>
                </div>
            </div>
            <p class="subtitle">© Copyright 2024. Made by Mitter</p>
        </footer>
    </div>

    <!-- Left links -->
    <section class="left-links">
        <ul>
            <li><a href="https://github.com/DenMitter" target="_blank"><svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.5 0C4.69875 0 0 4.58819 0 10.2529C0 14.7899 3.00562 18.6219 7.17937 19.9804C7.70437 20.0701 7.90125 19.7625 7.90125 19.4934C7.90125 19.2499 7.88813 18.4425 7.88813 17.5838C5.25 18.058 4.5675 16.9558 4.3575 16.3791C4.23938 16.0843 3.7275 15.1743 3.28125 14.9308C2.91375 14.7386 2.38875 14.2644 3.26813 14.2516C4.095 14.2388 4.68563 14.9949 4.8825 15.3025C5.8275 16.8533 7.33688 16.4175 7.94063 16.1484C8.0325 15.4819 8.30812 15.0334 8.61 14.777C6.27375 14.5207 3.8325 13.6364 3.8325 9.71466C3.8325 8.59965 4.23938 7.67689 4.90875 6.95918C4.80375 6.70286 4.43625 5.65193 5.01375 4.24215C5.01375 4.24215 5.89313 3.97301 7.90125 5.29308C8.74125 5.06239 9.63375 4.94704 10.5263 4.94704C11.4188 4.94704 12.3113 5.06239 13.1513 5.29308C15.1594 3.9602 16.0387 4.24215 16.0387 4.24215C16.6163 5.65193 16.2488 6.70286 16.1438 6.95918C16.8131 7.67689 17.22 8.58684 17.22 9.71466C17.22 13.6492 14.7656 14.5207 12.4294 14.777C12.81 15.0975 13.1381 15.7126 13.1381 16.6738C13.1381 18.0452 13.125 19.1474 13.125 19.4934C13.125 19.7625 13.3219 20.0829 13.8469 19.9804C15.9314 19.2935 17.7428 17.9854 19.026 16.2403C20.3092 14.4953 20.9996 12.4012 21 10.2529C21 4.58819 16.3013 0 10.5 0Z" fill="#ABB2BF"/></svg></a></li>
        </ul>
    </section>
    <!-- Squares -->
    <i class="square" style="right: 0px;top: 81%;border-right: none"></i>
    <i class="square" style="right: 0px;top: 141%;border-right: none;"></i>
    <i class="square" style="left: 0px;top: 191%;border-left: none;"></i>
    <!-- Scripts -->
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>