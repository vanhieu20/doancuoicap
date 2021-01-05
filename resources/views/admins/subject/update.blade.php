@extends('admins.layouts.master');
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Khóa học</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin/subject">Khóa học</a></li>
                            <li class="breadcrumb-item active">Cập nhật</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Cập nhật</h3>
                    </div>
                    <form role="form" method="POST" action="{{ route('subject.update',$subject->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Danh mục khóa học</label>
                                        <select class="custom-select" name="counrses_id">
                                            @foreach ($course as $item)
                                                <option value="{{ $item->id }}" @if ($item->id == $subject->counrses_id) selected @else  @endif>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Tên khóa học</label>
                                        <input type="text" class="form-control" value="{{ isset($subject) ? $subject->name : '' }}" name="name" id="name" placeholder="Nhập tên khóa học">
                                        @if($errors->has('name'))
                                            <div class="error">
                                                {{$errors->first('name')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Số tiền</label>
                                        <input type="text" class="form-control" value="{{ isset($subject) ? $subject->money : '' }}" name="money" id="money" placeholder="Nhập số tiền">
                                        @if($errors->has('money'))
                                            <div class="error">
                                                {{$errors->first('money')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="image">Ảnh minh họa</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                        <img width="100px" height="100px" src="{{ pare_url_file($subject->image) }}" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Ngày bắt đầu:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                            </div>
                                            <input type="date" value="{{ isset($subject) ? $subject->date_start : '' }}" name="date_start" class="form-control" data-inputmask-inputformat="dd/mm/yyyy">
                                        </div>
                                        @if($errors->has('date_start'))
                                            <div class="error">
                                                {{$errors->first('date_start')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Ngày kết thúc:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                            </div>
                                            <input type="date" value="{{ isset($subject) ? $subject->date_end : '' }}" name="date_end" class="form-control" data-inputmask-inputformat="dd/mm/yyyy">
                                        </div>
                                        @if($errors->has('date_end'))
                                            <div class="error">
                                                {{$errors->first('date_end')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Chi tiết khóa học</label>
                                        <textarea class="form-control textarea" name="content">{!! isset($subject) ? $subject->content : '' !!}</textarea>
                                        @if($errors->has('content'))
                                            <div class="error">
                                                {{$errors->first('content')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Lưu thông tin</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
<script>
    function setInputFilter(textbox, inputFilter) {
        ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
            textbox.addEventListener(event, function() {
                if (inputFilter(this.value)) {
                    this.oldValue = this.value;
                    this.oldSelectionStart = this.selectionStart;
                    this.oldSelectionEnd = this.selectionEnd;
                } else if (this.hasOwnProperty("oldValue")) {
                    this.value = this.oldValue;
                    this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                }
            });
        });
    }

    setInputFilter(document.getElementById("money"), function(value) {
        return /^\d*$/.test(value);
    });

    $(document).ready(function () {
        bsCustomFileInput.init();
    });

    $('#reservationdate').datetimepicker({
        format: 'L'
    });
</script>
@stop

