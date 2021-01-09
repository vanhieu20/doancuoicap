@extends('admins.layouts.master')
@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tài khoản người dùng</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Tài khoản ngươi dùng</a></li>
                            <li class="breadcrumb-item active">Danh sách</li>
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
                            <div class="card-header">
                                <h3 class="card-title">Danh sách </h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th>STT</th>
                                            <th data-sortable="false">Họ và tên</th>
                                            <th data-sortable="false">Số điện thoại</th>
                                            <th data-sortable="false">Email</th>
                                            <th data-sortable="false">Địa chỉ</th>
                                            <th data-sortable="false">Trạng thái</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user as $key => $row)
                                            <tr>
                                                <td tabindex="0" class="sorting_1">{{ $key + 1 }}</td>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->phone }}</td>
                                                <td>{{ $row->email }}</td>
                                                <td>{{ $row->address }}</td>
                                                <td>
                                                    <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                    <input data-lock="{{ $row->status }}" data-id="{{ $row->id }}" type="checkbox" @if ($row->status == 1) checked @endif class="custom-control-input changeStatus" id="customSwitch3">
                                                    <label class="custom-control-label" for="customSwitch3"></label>
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

@stop
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script>
    $(".del_course").click(function(){
        id = $(this).data('id');
        Swal.fire({
            title: 'Bạn có chắc chắn?',
            text: 'Bạn sẽ không thể hoàn nguyên điều này!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Vâng, xóa nó đi!',
            cancelButtonText: 'Hủy',
        }).then((result) => {
            if (result.value == true) {
                $.ajax({
                    url: '/admin/course/' + id,
                    type: 'get',
                    data: {
                        'id': id,
                    },
                    success: function(res) {
                        if (res.warning) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Thông báo',
                                text: res.warning,
                                confirmButtonText: 'Xác nhận',
                            });
                        }
                        if (res.success) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Thông báo',
                                text: res.success,
                                confirmButtonText: 'Xác nhận',
                            }).then((result) => {
                                location.reload();
                            });
                        }
                    }
                });
            }
        });
    });

    $('.changeStatus').click(function(){
        var lock = $(this).data('lock');
        var id = $(this).data('id');
        if(lock == 1){
            document.getElementById('customSwitch3').checked = true;
            var key_lock = 'Khóa tài khoản này.';
        }else{
            document.getElementById('customSwitch3').checked = false;
            var key_lock = 'Mở tài khoản này.';
        }
        $.confirm({
            title: 'Xác nhận',
            content: key_lock,
            icon: 'fa fa-question-circle',
            animation: 'scale',
            closeAnimation: 'scale',
            opacity: 0.5,
            buttons: {
                'confirm': {
                    text: 'Đồng ý',
                    btnClass: 'btn-blue',
                    action: function(){
                        return $.ajax({
                            url: '/admin/account/'+ id,
                            type: 'get',
                            data: {
                                'status': lock,
                            },
                        }).done(function(res){
                            if(res.unlock){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Thông báo',
                                    text: res.unlock,
                                    confirmButtonText: 'Xác nhận',
                                }).then((result) => {
                                    document.getElementById('customSwitch3').checked = true;
                                    location.reload();
                                });
                            }
                            if(res.lock){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Thông báo',
                                    text: res.lock,
                                    confirmButtonText: 'Xác nhận',
                                }).then((result) => {
                                    document.getElementById('customSwitch3').checked = false;
                                    location.reload();
                                });
                            }
                        });
                    }
                },
                Hủy: function(){

                },
            }
        });
    });

</script>
@stop

