@extends('admin.master')

@section('title')
    Add Category
@endsection

@section('body')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Category Manage Table</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @if($message = Session::get('message'))
                       <h2 class="text-success">{{ $message }}</h2>
                    @endif
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table  class="table table-responsive table-striped table-bordered " >
                        <thead>
                        <tr>
                            <th>  SL</th>
                            <th> Category Name</th>
                            <th> Category Description</th>
                            <th> Publication Status</th>
                            <th> Action</th>
                        </tr>
                        <?php $i=1;?>
                        @foreach($categories as $category  )
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->category_description }}</td>
                                <td>{{ $category->publication_status == 1 ?'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($category->publication_status == 1)
                                    <a href="{{ url('/category/unpublished-category/'.$category->id) }}" class="btn btn-xs btn-block btn-primary">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                    @else
                                    <a href="{{ url('/category/published-category/'.$category->id) }}" class="btn btn-xs btn-block btn-warning">
                                        <span class="glyphicon glyphicon-arrow-down"></span>
                                    </a>
                                    @endif
                                    <a href="{{ url('category/edit-category/'.$category->id) }}" class="btn btn-xs btn-block btn-info">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/category/delete-category/'.$category->id) }}" onclick="return confirm('are you sure to delete this ?')" class="btn btn-xs btn-block btn-danger">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </table>

            </div>

        </div>

    </div>
    </div>
@endsection
