@extends('client.layouts.master')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <center>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Thay đổi thông tin cá nhân</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Khóa học của tôi</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <form action="{{ route('update_infomation',Auth::user()->id) }}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">Họ và tên</label>
                    <div class="col-10">
                      <input class="form-control" name="name" type="text" value="{{ $user->name }}" id="example-text-input" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-search-input" class="col-2 col-form-label">Địa chỉ</label>
                    <div class="col-10">
                      <input class="form-control" type="text" name="address" value="{{ $user->address }}" id="example-search-input" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-email-input" class="col-2 col-form-label">Email</label>
                    <div class="col-10">
                      <input class="form-control" disabled="disabled" type="email" value="{{ $user->email }}" id="example-email-input" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-tel-input" class="col-2 col-form-label">Số điện thoại</label>
                    <div class="col-10">
                      <input class="form-control" name="phone" type="tel" value="{{ $user->phone }}" id="example-tel-input" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-tel-input" class="col-2 col-form-label">Mật khẩu</label>
                    <div class="col-10">
                      <input class="form-control" name="password" type="password" value="" placeholder="Nhập mật khẩu mới nếu bạn muốn thay đổi mật khẩu" id="example-tel-input">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-tel-input" class="col-2 col-form-label">Xác nhận mật khẩu</label>
                    <div class="col-10">
                      <input class="form-control" type="password" value="" placeholder="Xác nhận mật khẩu" id="example-tel-input">
                    </div>
                </div>
                <div>
                  <button class="btn btn-success">Cập nhật thông tin</button>
                </div>
              </form>
            </div>

            
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
              <table border="1" cellpadding="20" cellspacing="5">
                  <tr>
                    <td>STT</td>
                    <td>Tên môn học</td>
                    <td>Học phí</td>
                    <td>Thời gian bắt đầu</td>
                    <td>Thời gian kết thúc</td>
                  </tr>
                  @if(count($list_regis) > 0)
                    @foreach($list_regis as $key => $item)
                      <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->subjects->name }}</td>
                        <td>{{ $item->money }}</td>
                        <td>{{ $item->subjects->date_start }}</td>
                        <td>{{ $item->subjects->date_end }}</td>
                      </tr>
                    @endforeach
                  @else
                  Bạn chưa đăng ký khóa học nào
                  @endif
              </table>
            </div>
        </div>
      </center>
    </div>
  </div>
</div>
@stop