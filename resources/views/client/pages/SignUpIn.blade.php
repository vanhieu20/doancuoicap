@extends('client.layouts.master')
@section('content')

<div class="row">
    <div class="col-md-6 mx-auto p-0">
        <div class="card">
            <div class="login-box">
                @include('client.layouts.notification')
                <div class="login-snip">
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
                    <label for="tab-1" class="tab">Đăng nhập</label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up">
                    <label for="tab-2" class="tab">Đăng ký</label>
                    <div class="login-space">
                        <div class="login">
                            <form action="{{ route('login') }}" id="form-login" method="POST">
                                @csrf
                                <div class="group">
                                    <label for="user" class="label">Email</label>
                                    <input id="email_login" type="email" value="{{ Cookie::get('email') }}" name="email" class="input" placeholder="Nhập email ">
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Mật khẩu</label>
                                    <input id="password_login" name="password" value="{{ Cookie::get('password') }}" type="password" class="input" data-type="password" placeholder="Nhập mật khẩu">
                                </div>
                                <div class="group">
                                    <input id="check" name="remember" type="checkbox" class="check" @if (Cookie::get('email') != '') checked @endif >
                                    <label for="check"><span class="icon"></span> Nhớ mật khẩu</label>
                                </div>
                                <div class="group">
                                    <input type="submit" class="button" value="Đăng nhập">
                                </div>
                                <div class="hr"></div>
                                <div class="foot"> <a href="#">Quên mật khẩu?</a> </div>
                            </form>
                        </div>
                        <div class="sign-up-form">
                            <form action="{{ route('SignUp') }}" id="form-signUp" method="POST">
                                @csrf
                                <div class="group">
                                    {{-- <label for="user" class="label">Họ và tên</label> --}}
                                    <input id="name" name="name" type="text" class="input" placeholder="Nhập họ và tên">
                                    <span class="error d-none" id="error_name">Họ và tên không được nhập kí tự đặc biệt</span>
                                </div>
                                <div class="group">
                                    {{-- <label for="pass" class="label">Email</label> --}}
                                    <input id="email" name="email" type="text" class="input" placeholder="email@gmail.com">
                                    <span class="error d-none" id="email_error">Địa chỉ email không hợp lệ</span>
                                </div>
                                <div class="group">
                                    {{-- <label for="pass" class="label">Địa chỉ</label> --}}
                                    <input id="address" name="address" type="text" class="input" placeholder="Nhập địa chỉ">
                                </div>
                                <div class="group">
                                    {{-- <label for="pass" class="label">Số điện thoại</label> --}}
                                    <input id="phone" name="phone" type="text" class="input" placeholder="Nhập số điện thoại">
                                </div>
                                <div class="group">
                                    {{-- <label for="pass" class="label">Mật khẩu</label> --}}
                                    <input id="password" name="password" type="password" class="input" data-type="password" placeholder="Nhập mật khẩu">
                                </div>
                                <div class="group">
                                    {{-- <label for="pass" class="label">Xác nhận mật khẩu</label> --}}
                                    <input id="re_password" name="re_password" type="password" class="input" data-type="password" placeholder="Xác nhận mật khẩu">
                                </div>
                                <div class="group">
                                    <input type="submit" id="btn-signUp" class="button" value="Đăng ký tài khoản">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <script>
        $('#form-login').validate({
            rules: {
                email: "required",
                password: "required",
            },
            messages: {
                email: "Vui lòng nhập email",
                password: "Vui lòng nhập mật khẩu",
            }
        });
        $("#form-signUp").validate({
            rules: {
                name: "required",
                email: "required",
                address: "required",
                phone: "required",
                password: {
                    required: true,
                    minlength: 8,
                },
                re_password: {
                    required: true,
                    equalTo: "#password"
                },
            },
            messages: {
                name: "Họ và tên không được để trống.",
                email: "Email không được để trống.",
                address: "Địa chỉ không được để trống.",
                phone: "Số điện thoại không được để trống.",
                password: {
                    required: "Mật khẩu không được để trống",
                    minlength: "Mật khẩu ít nhất 8 kí tự",
                },
                re_password: {
                    required: "Mật khẩu xác nhận không được để trống.",
                    equalTo: 'Mật khẩu xác nhận không khớp',
                },
            }
        });
        $(document).ready(function(){
            $("#email").change(function() {
                var x = $("#email").val();
                var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if (x.match(mailformat)) {
                    $("#email_error").addClass('d-none');
                    // $(".button").attr("disabled", false);
                    $('.button').css('cursor','');
                } else {
                    // $(".button").attr("disabled", true);
                    $('.button').css('cursor','no-drop');
                }
            });

            $('#name').change(function() {
                var name = $("#name").val();
                if (/^[a-zA-Za-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀẾỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểếỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ \\s]+$/.test(name) == false) {
                    $("#error_name").removeClass('d-none');
                    $(".button").attr("disabled", true);
                    $('.button').css('cursor','no-drop');
                } else {
                    $("#error_name").addClass('d-none');
                    $('.button').css('cursor','');
                    $(".button").attr("disabled", false);
                }
            });

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
            setInputFilter(document.getElementById("phone"), function(value) {
                return /^\d*$/.test(value)
            });
        });

    </script>
@endsection
