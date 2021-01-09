@extends('admins.layouts.master')
@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Danh sách đăng kí</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Danh sách đăng kí</a></li>
                            {{-- <li class="breadcrumb-item active">Danh sách</li> --}}
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                @include('admins.layouts.notification')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th>STT</th>
                                            <th>Họ và tên</th>
                                            <th>Tên khóa học</th>
                                            <th>Số tiền</th>
                                            <th>Trạng thái</th>
                                            <th data-sortable="false">Tháo tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($regisInfo as $key => $row)
                                            <tr>
                                                <td tabindex="0" class="sorting_1">{{ $key + 1 }}</td>
                                                <td>
                                                    <a data-toggle="tooltip" data-placement="left" title="Thông tin người đăng kí" data-id="{{ $row->student }}" href="{{ route('listRegis.information',$row->id) }}" class="information">{{ $row->student->fullName }}</a>
                                                </td>
                                                <td>
                                                    <a data-toggle="tooltip" data-placement="left" title="Thông tin khóa học" data-id="{{ $row->subject }}" href="{{ route('listRegis.mySubject',$row->id) }}" class="subject">{{ $row->subjects->name }}</a>
                                                </td>
                                                <td>{{ number_format($row->money,0,',','.') }} VNĐ</td>
                                                <td class="text-center">
                                                    @if ($row->status == 0)
                                                        <span class="alert alert-danger p-1">Chưa thanh toán</span>
                                                    @else
                                                        <span class="alert alert-success p-1">Đã thanh toán</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($row->status == 0)
                                                        <a href="#" data-toggle="tooltip" data-placement="left" class="btn btn-success check_status" data-status="{{ $row->status }}" data-id="{{ $row->id }}" title="Phê duyệt!"><i class="fa fa-check-square"></i></a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- modal show thông tin người đăng kí khóa học -->
<div id="myModalInfomation" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title text-left">Thông tin người đăng ký</h4>
            </div>
            <div class="modal-body" id="md_content_infomation">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<!-- modal show Khóa học -->
<div id="mySubject" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header ">
                <h4 class="modal-title text-left">Thông tin khóa học</h4>
            </div>
            <div class="modal-body" id="md_content_my_subject">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

@stop
@section('script')

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });

    $('.check_status').click(function(){
        $this = $(this);
        id = $this.data('id');
        status = $this.data('status');
        var select1 = '';
        if(status == 1){
            select1 = 'selected = "selected"';
        }
        var select0 = '';
        if(status == 0){
            select0 = 'selected = "selected"';
        }
        $.confirm({
            icon: 'fas fa-check-circle',
            theme: 'modern',
            title: 'Xin chào',
            content: '' +
                '<form class="formName">' +
                '<div class="form-group">' +
                '<label>Xác nhận môn học này đã được thanh toán chưa nào?</label>' +
                '<select id="status_work" name="status" class="form-control">' +
                    '<option value="0" '+select0+'>Chưa thanh toán</option>'+
                    '<option value="1" '+select1+'>Đã thanh toán</option>'+
                '</select>' +
                '</div>' +
                '</form>',
            // closeIcon: true,
            animation: 'scale',
            type: 'green',
            buttons:{
                confirm: {
                    text: 'Xác nhận',
                    btnClass: 'btn-blue',
                    action: function () {
                        var statusWork = $('#status_work').val();
                        return $.ajax({
                            url: "/admin/list-register",
                            type: 'get',
                            data : {
                                'id_regis' : id,
                                'status' : statusWork,
                            },
                        }).done(function(res){
                            if(res.success){
                                // $.alert(res.success);
                                $.confirm({
                                    icon: 'fa fa-smile-o',
                                    theme: 'modern',
                                    animation: 'scale',
                                    type: 'blue',
                                    closeIcon: true,
                                    title: 'Thành công',
                                    content: res.success,
                                    buttons:{
                                        confirm: {
                                            text: 'Đồng ý',
                                            btnClass: 'btn-blue',
                                            action: function () {
                                                location.reload(true);
                                            },
                                        },
                                    },
                                });
                            }
                        });
                    },
                },
                Hủy: function(){

                },
            },
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $(".information").click(function (event) {
            event.preventDefault();
            let $this = $(this);
            let url = $this.attr('href');
            $("#myModalInfomation").modal('show');
            $.ajax({
                url: url,
            }).done(function (result) {
                if(result){
                    $("#md_content_infomation").html('').append(result);
                }
            });
        });
    })

    $(function () {
        $(".subject").click(function (event) {
            event.preventDefault();
            let $this = $(this);
            let url = $this.attr('href');
            $("#mySubject").modal('show');
            $.ajax({
                url: url,
            }).done(function (result) {
                if(result){
                    $("#md_content_my_subject").html('').append(result);
                }
            });
        });
    })
</script>
@stop

