@if ($subjects)
    <div class="container">
        <div class="row">
            <div class="card col-sm-12">
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Danh mục khóa học</th>
                                <th>Tên khóa học</th>
                                <th>Ngày bắt đầu</th>
                                <th>Ngày kết thúc</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $subjects->nameCourse }}</td>
                                <td>{{ $subjects->name }}</td>
                                <td>{{ $subjects->date_start }}</td>
                                <td>{{ $subjects->date_end }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endif
