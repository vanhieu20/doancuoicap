@if ($information)
    <div class="container">
        <div class="row">
            <div class="card col-sm-12">
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Họ và tên</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ email</th>
                                <th>Địa chỉ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $information->name }}</td>
                                <td>{{ $information->phone }}</td>
                                <td>{{ $information->email }}</td>
                                <td>{{ $information->address }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endif
