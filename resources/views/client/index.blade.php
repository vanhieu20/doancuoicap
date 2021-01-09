@extends('client.layouts.master')
@section('content')
<!-- Hero Section Begin -->
    <section class="hero-section set-bg mb-5" data-setbg="{{ asset('themes/clients/img/hero.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero-text">
                        <span> Đăng ký nhanh, học nhanh</span>
                        <h2>Welcome<br /> Học nhanh</h2>
                        <a href="#" class="primary-btn">Tìm đăng ký ngay</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('themes/clients/img/hero-right.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <section class="speaker-section spad">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="{{ asset('themes/clients/img/Toan.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4>Toán giải tích</h4>
                                        <span>Jayden Gill</span>
                                    </div>
                                    <div class="si-social">
                                        <a href="{{ route('subjects') }}"><i>Xem</i></a>
                                    </div>
                                    <p>Businesses often become known today through effective marketing. The marketing
                                        may be in the form of a regular news item or half column society news in the
                                        Sunday newspaper.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="{{ asset('themes/clients/img/Toeic.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4>Tiếng anh </h4>
                                        <span>Mary Jane</span>
                                    </div>
                                    <div class="si-social">
                                        <a href="#"><i>Xem</i></a>
                                    </div>
                                    <p>Businesses often become known today through effective marketing. The marketing
                                        may be in the form of a regular news item or half column society news in the
                                        Sunday newspaper.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="{{ asset('themes/clients/img/Hoa.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4>Hóa cấp tốc</h4>
                                        <span>Jack Human</span>
                                    </div>
                                    <div class="si-social">
                                        <a href="#"><i>Xem</i></a>
                                    </div>
                                    <p>Businesses often become known today through effective marketing. The marketing
                                        may be in the form of a regular news item or half column society news in the
                                        Sunday newspaper.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="{{ asset('themes/clients/img/Su.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4>Sử 12</h4>
                                        <span>Sara Brudt</span>
                                    </div>
                                    <div class="si-social">
                                        <a href="#"><i>Xem</i></a>
                                    </div>
                                    <p>Businesses often become known today through effective marketing. The marketing
                                        may be in the form of a regular news item or half column society news in the
                                        Sunday newspaper.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="{{ asset('themes/clients/img/Sinh.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4>Sinh chuyên sâu</h4>
                                        <span>Emma Sandoval</span>
                                    </div>
                                    <div class="si-social">
                                        <a href="#"><i>Xem</i></a>
                                    </div>
                                    <p>Businesses often become known today through effective marketing. The marketing
                                        may be in the form of a regular news item or half column society news in the
                                        Sunday newspaper.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="speaker-item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="si-pic">
                                    <img src="{{ asset('themes/clients/img/Ly.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="si-text">
                                    <div class="si-title">
                                        <h4>Lý</h4>
                                        <span>Harriet Freeman</span>
                                    </div>
                                    <div class="si-social">
                                        <a href="#"><i>Xem</i></a>
                                    </div>
                                    <p>Businesses often become known today through effective marketing. The marketing
                                        may be in the form of a regular news item or half column society news in the
                                        Sunday newspaper.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load-more">
                <a href="#" class="primary-btn">Load More</a>
            </div>
        </div>
    </section>

    <!-- Team Member Section Begin -->
    <section class="mb-5 team-member-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Người giảng dạy</h2>
                        <p>Giáo viên, giảng viên có thể thay đổi trong khóa học để tạo sự hiệu quả cao nhất cho khóa học</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="member-item set-bg" data-setbg="{{ asset('themes/clients/img/team-member/member-1.jpg ') }}">
            <div class="mi-social">
                <div class="mi-social-inner bg-gradient">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5>Emma Sandoval</h5>
                <span>Giáo viên toán</span>
            </div>
        </div>
        <div class="member-item set-bg" data-setbg="{{ asset('themes/clients/img/team-member/member-2.jpg ') }}">
            <div class="mi-social">
                <div class="mi-social-inner bg-gradient">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5>Emma Sandoval</h5>
                <span>Giáo viên hóa</span>
            </div>
        </div>
        <div class="member-item set-bg" data-setbg="{{ asset('themes/clients/img/team-member/member-3.jpg ') }}">
            <div class="mi-social">
                <div class="mi-social-inner bg-gradient">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5>Emma Sandoval</h5>
                <span>Giáo viên Lý</span>
            </div>
        </div>
        <div class="member-item set-bg" data-setbg="{{ asset('themes/clients/img/team-member/member-4.jpg ') }}">
            <div class="mi-social">
                <div class="mi-social-inner bg-gradient">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5>Emma Sandoval</h5>
                <span>Giáo viên Văn</span>
            </div>
        </div>
        <div class="member-item set-bg" data-setbg="{{ asset('themes/clients/img/team-member/member-5.jpg ') }}">
            <div class="mi-social">
                <div class="mi-social-inner bg-gradient">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5>Emma Sandoval</h5>
                <span>Giáo viên Sinh</span>
            </div>
        </div>
        <div class="member-item set-bg" data-setbg="{{ asset('themes/clients/img/team-member/member-6.jpg ') }}">
            <div class="mi-social">
                <div class="mi-social-inner bg-gradient">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5>Emma Sandoval</h5>
                <span>Giáo viên Sử</span>
            </div>
        </div>
        <div class="member-item set-bg" data-setbg="{{ asset('themes/clients/img/team-member/member-7.jpg ') }}">
            <div class="mi-social">
                <div class="mi-social-inner bg-gradient">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5>Emma Sandoval</h5>
                <span>Giáo viên Địa</span>
            </div>
        </div>
        <div class="member-item set-bg" data-setbg="{{ asset('themes/clients/img/team-member/member-8.jpg ') }}">
            <div class="mi-social">
                <div class="mi-social-inner bg-gradient">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5>Emma Sandoval</h5>
                <span>Giáo viên Công dân</span>
            </div>
        </div>
        <div class="member-item set-bg" data-setbg="{{ asset('themes/clients/img/team-member/member-9.jpg ') }}">
            <div class="mi-social">
                <div class="mi-social-inner bg-gradient">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5>Emma Sandoval</h5>
                <span>Giáo viên Anh</span>
            </div>
        </div>
        <div class="member-item set-bg" data-setbg="{{ asset('themes/clients/img/team-member/member-10.jpg ') }}">
            <div class="mi-social">
                <div class="mi-social-inner bg-gradient">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5>Emma Sandoval</h5>
                <span>Giảng viên Anh nâng cao</span>
            </div>
        </div>
    </section>
    <!-- Team Member Section End -->

@stop
