@extends('admin.base')

@section('title')
    Danh Sách Ảnh
@endsection

@section('page-title')
    Danh Sách Ảnh
@endsection

@section('breadcrumb')
    Ảnh
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">


                <div class="table-responsive">
                    <table class="table color-table info-table">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Link</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $l)
                            <tr>
                                <td><img width="500px" src="{{ url('public/image/' . $l['basename']) }}"></td>
                                <td>{{ url('public/image/' . $l['basename']) }}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection