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
                                    <style type="text/css">
                                        .tags {
  display: inline;
  position: relative;
}

.tags:hover:after {
  background: #333;
  background: rgba(0, 0, 0, .8);
  border-radius: 5px;
  bottom: -34px;
  color: #fff;
  content: attr(gloss);
  left: 20%;
  padding: 5px 15px;
  position: absolute;
  z-index: 98;
}

.tags:hover:before {
  border: solid;
  border-color: #333 transparent;
  border-width: 0 6px 6px 6px;
  bottom: -4px;
  content: "";
  /* left: 50%; */
  position: absolute;
  z-index: 99;
}
                                    </style>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Phạm Thanh Tươi</td>
                                            <td>Tiếng anh</td>
                                            <td>500.000đ</td>
                                            <td class="label label-info text-center">Chưa thanh toán</td>
                                            <td>
                                                <a href="#" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-success tags" gloss="Duyệt đơn"><i class="fa fa-check-square"></i></a>
                                            </td>
                                        </tr>
                                        {{-- @foreach($subject as $key => $row)
                                            <tr>
                                                <td tabindex="0" class="sorting_1">{{ $key + 1 }}</td>
                                                <td><img height="100px" width="max-content" src="{{ pare_url_file($row->image) }}" alt=""></td>
                                                <td>{{ $row->course->name }}</td>
                                                <td>{{ $row->name }}</td>
                                                <td>
                                                    <a href="{{ route('subject.update',$row->id) }}" class="btn btn-success"><i class="fa fa-edit"> Sửa</i></a>
                                                    <button type="button" class="btn btn-danger del_course" data-toggle="modal" data-id="{{ $row->id }}" data-target="#modal-danger">Xóa</button>
                                                </td>
                                            </tr>
                                        @endforeach --}}
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
    // $(".del_course").click(function(){
    //     id = $(this).data('id');
    //     Swal.fire({
    //         title: 'Bạn có chắc chắn?',
    //         text: 'Bạn sẽ không thể hoàn nguyên điều này!',
    //         icon: 'warning',
    //         showCancelButton: true,
    //         confirmButtonColor: '#3085d6',
    //         cancelButtonColor: '#d33',
    //         confirmButtonText: 'Vâng, xóa nó đi!',
    //         cancelButtonText: 'Hủy',
    //     }).then((result) => {
    //         if (result.value == true) {
    //             $.ajax({
    //                 url: '/admin/subject/' + id,
    //                 type: 'get',
    //                 data: {
    //                     'id': id,
    //                 },
    //                 success: function(res) {
    //                     if (res.warning) {
    //                         Swal.fire({
    //                             icon: 'error',
    //                             title: 'Thông báo',
    //                             text: res.warning,
    //                             confirmButtonText: 'Xác nhận',
    //                         });
    //                     }
    //                     if (res.success) {
    //                         Swal.fire({
    //                             icon: 'success',
    //                             title: 'Thông báo',
    //                             text: res.success,
    //                             confirmButtonText: 'Xác nhận',
    //                         }).then((result) => {
    //                             location.reload();
    //                         });
    //                     }
    //                 }
    //             });
    //         }
    //     });
    // });
</script>
@stop

