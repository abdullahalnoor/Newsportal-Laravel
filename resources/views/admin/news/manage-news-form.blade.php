@extends('admin.master')

@section('title')

@endsection

@section('body')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">News Manage Table</h1>
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
                            <th> Writer </th>
                            <th> News Title</th>
                            <th> Category Name</th>
                            <th> News Description</th>
                            <th> Publication Status</th>
                            <th> Action</th>
                        </tr>
                        <?php $i=1;?>
                        @foreach($news as $news  )
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $news->author_name }}</td>
                                <td>{{ $news->news_title }}</td>
                                <td>{{ $news->category_name }}</td>
                                <td>{{ $news->news_description }}</td>
                                <td>{{ $news->publication_status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    @if($news->publication_status == 1)
                                    <a href="{{ url('/news/unpublished-news/'.$news->id) }}" class="btn btn-xs btn-primary">
                                        <span class="glyphicon glyphicon-arrow-up"></span>
                                    </a>
                                    @else
                                        <a href="{{ url('/news/published-news/'.$news->id) }}" class="btn btn-xs btn-warning">
                                            <span class="glyphicon glyphicon-arrow-down"></span>
                                        </a>
                                    @endif
                                        <a href="{{ url('/news/edit-news/'.$news->id) }}" class="btn btn-xs btn-info">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{ url('/news/delete-news/'.$news->id) }}" class="btn btn-xs btn-danger">
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