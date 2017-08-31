@extends('admin.base')

@section('title')
    Danh Sách Bài Đăng
@endsection

@section('page-title')
    Danh Sách Bài Đăng
@endsection

@section('breadcrumb')
    Bài Đăng
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">


                <div class="table-responsive">
                    <table class="table color-table info-table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tiêu Đề</th>
                            <th>Hành Động</th>
                            <th>Hành Động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post['id'] }}</td>
                            <td>{{ $post['title']}}</td>
                            <td><a href="{{ url('admin/post/editForm/' . $post['id']) }}">Sửa</a></td>
                            <td><a href="{{ url('admin/post/del/' . $post['id']) }}">Xóa</a></td>
                        </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection