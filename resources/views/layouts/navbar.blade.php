<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed bg-primary navbar-brand-center">
    <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item"><a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template/index.html">
                    <div class="brand-logo"><img class="logo" src="{{ asset('app-assets/images/logo/logo-light.png') }}">
                    </div>
                    <h2 class="brand-text mb-0">Frest</h2>
                </a></li>
        </ul>
    </div>
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu mr-auto"><a class="nav-link nav-menu-main menu-toggle" href="#"><i class="bx bx-menu"></i></a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right d-flex align-items-center">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon bx bx-fullscreen"></i></a></li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="user-nav d-lg-flex d-none">
                                <span class="user-name">{{ Auth::user()->name }}</span>
                                <span class="user-status">Available</span></div>
                            @if((Auth::user()->role == 2) && (Auth::user()->photos == !null))
                            <span><img class="round" src="{{ url('images/biodata/'. Auth::user()->photos )}}" height="40" width="40" alt=""></span>
                            @elseif((Auth::user()->role == 2) && (Auth::user()->photos == !null))
                            <span><img class="round" src="{{ url('images/admin/'. Auth::user()->photos )}}" height="40" width="40" alt=""></span>
                            @else
                            <span><img class="round" src="{{ url('images/default.png') }}" alt="avatar" height="40" width="40"></span>
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-right pb-0">
                            @if(Auth::user()->role == 1)
                            <a class="dropdown-item" href="{{route('userProfile')}}"><i class="bx bx-user mr-50"></i> Edit Profile</a>
                            <div class="dropdown-divider mb-0"></div>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="bx bx-power-off mr-50"></i>
                                {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
