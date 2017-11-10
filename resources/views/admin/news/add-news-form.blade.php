@extends('admin.master')

@section('title')
    Add News
    @endsection

@section('body')


    <div class="container-fluid">
        <div class="row">
            <hr>
            <h3>Add News Form</h3>
            <hr>
            <div class="col-lg-12">
                @if($message = Session::get('message'))
                    {{ $message }}
                @endif
                <div class="form">
                    <form class="form-horizontal " id="" action="{{ url('news/save-news') }}" method="post" enctype="multipart/form-data" >
                        {{ csrf_field() }}
                        <div class="form-group ">
                            <label for="" class="control-label col-lg-2">News Title <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="" name="news_title" type="text" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">News Category <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <select name="category_id" class="form-control">
                                    <option>Select News  Category</option>
                                    @foreach($category as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="" class="control-label col-lg-2">News Description <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <textarea name="news_description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="" class="control-label col-lg-2">News Image <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="" name="news_image" type="file" accept="image/*" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Publication Status <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <select name="publication_status" class="form-control">
                                    <option>Select Publication Status</option>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <input type="submit" value="Save Category" name="btn" class="btn btn-primary">
                                <input type="submit" value="Cancel" name="btn"  class="btn btn-default">
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>

    @endsection