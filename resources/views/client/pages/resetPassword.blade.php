@extends('client.layouts.master')
@section('content')
<div class="container">
	<div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="text-center">
                        <h3><i class="fa fa-lock fa-4x"></i></h3>
                        <h2 class="text-center">Tạo mật khẩu mới</h2>
                        @include('client.layouts.notification')
                        <div class="panel-body">
                            <form id="register-form" action="" method="post">
                                @csrf
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
                                        <input id="new_password" name="new_password" placeholder="Mật khẩu mới" class="form-control"  type="password">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock color-blue"></i></span>
                                        <input id="re_new_passoword" name="re_new_passoword" placeholder="Xác nhận mật khẩu" class="form-control"  type="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-lg btn-primary btn-block" value="Xác nhận" type="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
@stop
@section('script')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection
