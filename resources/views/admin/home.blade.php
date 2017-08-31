@extends('admin.base')

@section('title')
    Trang Chủ
@endsection


@section('page-title')
    @parent
@endsection

@section('breadcrumb')
    @parent
@endsection


@section('content')

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="white-box">
                <h3 class="box-title m-b-0">SEO Onpage</h3>

                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form action="{{ url('admin/seo') }}" method="post">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta Description</label>
                                <input type="text" name="meta_description" value="{{ $seo['meta_description'] }}" class="form-control" id="exampleInputEmail1" placeholder="Description" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta Keyword</label>
                                <input type="text" name="meta_keyword" value="{{ $seo['meta_keyword'] }}" class="form-control" id="exampleInputEmail1" placeholder="Keyword" required>
                            </div>


                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3"></div>

    </div>

@endsection