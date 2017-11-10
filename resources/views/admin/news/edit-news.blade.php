@extends('admin.master')

@section('title')
Update News
@endsection

@section('body')


    <div class="container-fluid">
        <div class="row">
            <hr>
            <h3>Add News Form</h3>
            <hr>
            <div class="col-lg-12">

                <div class="form">
                    <form class="form-horizontal " id="" action="{{ url('news/update-news') }}" method="post" enctype="multipart/form-data" name="editForm">
                        {{ csrf_field() }}
                        <div class="form-group ">
                            <label for="" class="control-label col-lg-2">News Title <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="" name="news_title" value="{{ $newsById->news_title }}" type="text" />
                                <input class=" form-control" id="" name="news_id" value="{{ $newsById->id }}" type="hidden" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">News Category <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <select name="category_id" class="form-control">
                                    @foreach($publishedCategory as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="" class="control-label col-lg-2">News Description <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <textarea name="news_description" class="form-control">{{ $newsById->news_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="" class="control-label col-lg-2">News Image <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <img src="{{asset( $newsById->news_image )}}" style="width: 80px;height: 50px;">
                                <br>
                                <br>
                                <input class=" form-control" id="" name="news_image" type="file" accept="image/*" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="address" class="control-label col-lg-2">Publication Status <span class="required">*</span></label>
                            <div class="col-lg-10">
                                <select name="publication_status" class="form-control">
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <input type="submit" value="Update Category" name="btn" class="btn btn-primary">
                                <input type="reset" value="Cancel" name="btn"  class="btn btn-default">
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
    document.forms['editForm'].elements['publication_status'].value = '{{ $newsById->publication_status }}'
</script>
@endsection