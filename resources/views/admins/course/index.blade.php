@extends('admins.layouts.master')
@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Danh mục khóa học</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Danh mục khóa học</a></li>
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
                                <h3 class="card-title btn btn-info float-right"><a href="{{ route('course.create')}}" class="text-white">Thêm mới</a></h3>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">STT</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tên Danh mục</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Tháo tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($course as $key => $row)
                                            <tr>
                                                <td tabindex="0" class="sorting_1">{{ $key + 1 }}</td>
                                                <td>{{ $row->name }}</td>
                                                <td>
                                                    <a href="{{ route('course.update',$row->id) }}" class="btn btn-success"><i class="fa fa-edit"> Sửa</i></a>
                                                    <button type="button" class="btn btn-danger del_course" data-toggle="modal" data-id="{{ $row->id }}" data-target="#modal-danger">Xóa</button>
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

//   $(function () {
//     $("#example1").DataTable({
//       "responsive": true,
//       "autoWidth": false,
//     });
//     $('#example2').DataTable({
//       "paging": true,
//       "lengthChange": false,
//       "searching": false,
//       "ordering": true,
//       "info": true,
//       "autoWidth": false,
//       "responsive": true,
//     });
//   });

</script>
@stop

