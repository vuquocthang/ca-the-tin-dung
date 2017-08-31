@extends('admin.base')

@section('title')
    Sửa Bài Đăng
@endsection

@section('page-title')
    Sửa Bài Đăng
@endsection

@section('breadcrumb')
    Bài Đăng
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">

                <form action="{{ url('admin/post/update/'. $id) }}" method="post" class="form-horizontal">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-md-12">Tiêu Đề </label>
                        <div class="col-md-12">
                            <input type="text" name="title" value="{{ $post['title'] }}" class="form-control" > </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-email">Meta Description </label>
                        <div class="col-md-12">
                            <input type="text" id="example-email" value="{{ $post['meta_description'] }}" name="meta_description" class="form-control" > </div>
                    </div>

                    <div class="form-group">
                        <textarea id="mymce" name="body">{{ $post['body'] }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Cập Nhật</button>
                </form>
            </div>
        </div>

    </div>
@endsection