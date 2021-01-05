<header class="header-section">
    <div class="container">
        <div class="logo">
            <a href="./index.html">
                <img src="{{ asset('themes/clients/img/logo.png') }}" alt="">
            </a>
        </div>
        <div class="nav-menu">
            <nav class="mainmenu mobile-menu">
                <ul>
                    <li class="active"><a href="/">Trang chủ</a></li>
                    <li><a href="{{ route('Course') }}">Khóa học</a>
                        <ul class="dropdown">
                            <li><a href="{{ route('Course') }}">Khoa học tự nhiên</a></li>
                            <li><a href="{{ route('Course') }}">Khóa học xã hội</a></li>
                            <li><a href="{{ route('Course') }}">Tiếng anh</a></li>
                        </ul>
                    </li>
                    <li><a href="./schedule.html">Mở rộng</a></li>
                    <li><a href="{{ route('Introduce') }}">Giới thiệu</a></li>
                    @if (Auth::user())
                        <li>
                            <a href="{{ route('dashboard') }}">Admin</a>
                        </li>
                    @endif
                </ul>
            </nav>
            <a href="{{ route('SignUp')}}" class="primary-btn top-btn"><i class="fa fa-ticket"></i>Đăng ký</a>
            <a href="{{ route('SignIn')}}" class="primary-btn top-btn"><i class="fa fa-ticket"></i>Đăng nhập</a>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
