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
                    <li class="active"><a href="./index.html">Trang chủ</a></li>
                    <li><a href="./speaker.html">Khóa học</a>
                        <ul class="dropdown">
                            <li><a href="#">Khoa học tự nhiên</a></li>
                            <li><a href="#">Khóa học xã hội</a></li>
                            <li><a href="#">Tiếng anh</a></li>
                        </ul>
                    </li>
                    <li><a href="./schedule.html">Mở rộng</a></li>
                    <li><a href="./blog.html">Giới thiệu</a></li>
                    @if (Auth::user())
                        <li>
                            <a href="{{ route('dashboard') }}">Admin</a>
                        </li>
                    @endif
                </ul>
            </nav>
            <a href="#" class="primary-btn top-btn"><i class="fa fa-ticket"></i>Khóa học đã đăng ký</a>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
