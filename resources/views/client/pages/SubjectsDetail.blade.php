@extends('client.layouts.master')
@section('content')

 <!-- About Section Begin -->
 <section class="about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Chi tiết khóa học</h2>
                </div>
            </div>
        </div>
        @include('client.layouts.notification')
        <div class="row">
            <div class="col-8 detail_subjects">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-pic">
                            <img src="{{ pare_url_file($detailSubject->image) }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-text">
                            <h3>{{ $detailSubject->name }}</h3>
                            <p> </p>
                            <ul>
                                <!-- <li><span class="icon_check"></span> Write On Your Business Card</li> -->
                                <li><span class="icon_check"></span>Học phí: {{$detailSubject->money}}</li>
                                <li><span class="icon_check"></span>Ngày bắt đầu: {{$detailSubject->date_start}}</li>
                                <li><span class="icon_check"></span>Ngày kết thuc: {{$detailSubject->date_end}}</li>
                            </ul>
                            <hr>
                            <div class="si-social">
                                @if ($checkRegis == '')
                                    <a class="button_regis" href="{{ route('regis_subjects',$detailSubject->id) }}"><i>ĐĂNG KÝ HỌC</i></a>
                                @else
                                    <a class="button_regis_cancel" href="{{ route('cancel_regis_subjects',$detailSubject->id) }}"><i>HỦY ĐĂNG KÝ</i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <p class="f-para">{!! $detailSubject->content !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-4 related_subjects">
                <h3>Các môn học liên quan</h3>
                <div class="ex3">
                    @if ($relatedSubjects)
                        @foreach ($relatedSubjects as $item)
                            <hr>
                            <div class="post_item_with_thumb">
                                <div class="post_thumb">
                                    <a href="{{ route('subjects',$item->id) }}">
                                        <img src="{{ pare_url_file($item->image) }}" alt="" >
                                    </a>
                                </div>
                                <div class="post_content ml-3">
                                    <a class="name" href="{{ route('subjects',$item->id) }}">{{ $item->name }}</a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- About Section End -->

@stop
