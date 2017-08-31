@extends('admin.base')

@section('title')
    Upload Ảnh
@endsection

@section('page-title')
    Upload Ảnh
@endsection

@section('breadcrumb')
    Ảnh
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-12 col-xs-12">
            <div class="white-box">

                <form action="{{ url('admin/image/upload') }}" method="post" class="form-horizontal"  enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                    <label for="input-file-now">Your so fresh input file — Default version</label>
                    <input type="file" name="image" id="input-file-now" class="dropify" />
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Upload</button>
                    </div>

                </form>

            </div>

        </div>

    </div>
@endsection