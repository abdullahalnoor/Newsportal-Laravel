@extends('admin.master')

@section('title')

@endsection

@section('body')

    <div class="container-fluid">
        <div class="row">
            <hr>
            <h3>Update Category Form</h3>
            <hr>
            <div class="col-lg-12">
                @if($message = Session::get('message'))
                    {{ $message }}
                @endif
                <div class="form">
                    <form name="editForm" class="form-horizontal " id="" action="{{ url('category/update-category') }}" method="post" >
                        {{ csrf_field() }}
                        <div class="form-group ">
                            <label for="" class="control-label col-lg-2">Category name <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="" name="category_name" type="text" value="{{ $category->category_name }}" />
                                <input class=" form-control" id="" name="category_id" type="hidden" value="{{ $category->id }}" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="" class="control-label col-lg-2">Category Description <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <textarea name="category_description" class="form-control">{{ $category->category_description }}</textarea>
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


    <script>
        document.forms['editForm'].elements['publication_status'].value = '{{ $category->publication_status }}'
    </script>

@endsection