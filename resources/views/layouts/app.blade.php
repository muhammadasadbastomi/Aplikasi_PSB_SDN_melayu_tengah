<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/login/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/login/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/login/css/iofrm-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/login/css/iofrm-theme9.css') }}">
</head>

<body>
    <div class="form-body" class="container-fluid">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>Selamat Datang Di PSB SDN Melayu Kabupaten Banjar.</h3>
                    @yield('info')
                    <img src="{{ asset('app-assets/login/images/graphic5.svg') }}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <div class="">
                                <img class="logo-size" src="{{ asset('images/logobanjar.png') }}" alt="">
                            </div>
                        </div>
                        <div class="page-links">
                            <a href="{{ route('login') }}"
                                class="{{ (\Request::route()->getName() == 'login') ? 'active' : '' }}">Login</a><a
                                href="{{ route('register') }}"
                                class="{{ (\Request::route()->getName() == 'register') ? 'active' : '' }}">Register</a>
                        </div>
                        @yield('content')
                        {{-- <form>
                            <input class="form-control" type="text" name="username" placeholder="E-mail Address"
                                required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                            </div>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('app-assets/login/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('app-assets/login/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('app-assets/login/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('app-assets/login/js/main.js') }}"></script>
</body>

</html>
