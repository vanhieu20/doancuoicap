@extends('client.layouts.master')
@section('content')
<center>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông tin cá nhân</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Thay đổi thông tin cá nhân</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Khóa học của tôi</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

  <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Họ và tên</label>
  <div class="col-10">
    <input class="form-control" type="text" value="Nhập họ và tên" id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Địa chỉ</label>
  <div class="col-10">
    <input class="form-control" type="search" value="Nhập địa chỉ" id="example-search-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Email</label>
  <div class="col-10">
    <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Số điện thoại</label>
  <div class="col-10">
    <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
  </div>
</div>

  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  	
  <div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Họ và tên</label>
  <div class="col-10">
    <input class="form-control" type="text" value="Nhập họ và tên" id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Địa chỉ</label>
  <div class="col-10">
    <input class="form-control" type="search" value="Nhập địa chỉ" id="example-search-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Email</label>
  <div class="col-10">
    <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-2 col-form-label">Số điện thoại</label>
  <div class="col-10">
    <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
  </div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>


  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  	<table border="1" cellpadding="20" cellspacing="5">
    	<tr>
    		<td>Tên học viên đã đăng ký</td>
    		<td>Tên môn học</td>
    		<td>Học phí</td>
    		<td>Thời gian bắt đầu</td>
    		<td>Thời gian kết thúc</td>
    		<td>Email</td>
    		<td>Số điện thoại</td>
    		<td>Địa chỉ</td>
    	</tr>
    	<tr>
    		<td><a href="#"></a></td>
    		<td><a href="#"></a></td>
    		<td><a href="#"></a></td>
    		<td><a href="#"></a></td>
    		<td><a href="#"></a></td>
    		<td><a href="#"></a></td>
    		<td><a href="#"></a></td>
    		<td><a href="#"></a></td>
    	</tr>
    </table>
  </div>
</div>
</center>
@stop