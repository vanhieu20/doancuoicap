@extends('client.layouts.master')
@section('content')
<center>
<table border="0">
    <tr><button><a href="#">KHOA HỌC TỰ NHIÊN</a></button></tr>
    <tr><button><a href="#">KHOA HỌC XÃ HỘI</a></button></tr>
    <tr><button><a href="#">TIẾNG ANH</a></button></tr>
</table>
</center>
<br>
<hr>
<br>
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
@stop