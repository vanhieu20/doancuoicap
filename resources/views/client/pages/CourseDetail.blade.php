@extends('client.layouts.master')
@section('content')
<section class="speaker-section spad">
        <div class="container">
            <div class="row">
                @if (count($list_course_id) > 0)
                    @foreach ($list_course_id as $item)
                        <div class="col-sm-6">
                            <div class="speaker-item">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="si-pic">
                                            <img src="{{ pare_url_file($item->image) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="si-text">
                                            <div class="si-title">
                                                <h4>{{ $item->name }}</h4>
                                                {{-- <span>Jayden Gill</span> --}}
                                            </div>
                                            <div class="si-social">
                                                <a href="{{ route('subjects',$item->id) }}"><i>Chi tiết</i></a>
                                            </div>
                                            <div class="content">
                                                <p>{!! $item->content !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                        Danh sách khóa học chưa cập nhật. Mời bạn quay lại sau
                @endif
            </div>
        </div>
    </section>
@stop
