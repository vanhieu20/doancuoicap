<header class="header-section">
    <div class="container">
        <div class="logo">
            <a href="/">
                <img src="{{ asset('themes/clients/img/logo.png') }}" alt="">
            </a>
        </div>
        <div class="nav-menu">
            <nav class="mainmenu mobile-menu">
                <ul>
                    <li class="active"><a href="/">Trang chủ</a></li>
                    <li><a href="">Khóa học</a>
                        <ul class="dropdown">
                            @foreach ($list_course as $item)
                                <li><a href="{{ route('Course',$item->id) }}">{{ $item->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="./schedule.html">Mở rộng</a></li>
                    <li><a href="{{ route('Introduce') }}">Giới thiệu</a></li>
                    @if (Auth::user())
                        @if (Auth::user()->role == 1)
                            <li>
                                <a href="{{ route('dashboard')}}" class="-btn"><i class="fa fa-ticket"></i>Dashboard</a>
                            </li>
                        @endif
                    @endif
                </ul>
            </nav>
            @if(Auth::user())
                @if (Auth::user()->role == 3)
                    <a href="{{ route('MyCourse')}}" class="primary-btn top-btn"><i class="fa fa-ticket"></i>Thông tin</a>
                @endif
            @else
                <a href="{{ route('SignUp')}}" class="primary-btn top-btn"><i class="fa fa-ticket"></i>Đăng ký/Đăng nhập</a>
            @endif
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>
