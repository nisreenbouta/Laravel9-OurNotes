@extends('layouts.adminbase')

@section('title', 'Show Category: '. $data->title )

@section('content')



    <div id="page-wrapper" >

        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">home</a> </li>
            <li class="breadcrumb-item active">Show Category</li>
        </ol>

        <div id="page-inner">

            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('admin.category.edit',['id'=>$data->id])}}"class="btn btn-info ">Edit</a>
                    <a href="{{route('admin.category.destroy',['id'=>$data->id])}}"onclick="return confirm('DELETING!! ARE YOU SURE??')" class="btn btn-danger ">Delete</a>

                    <div class="panel panel-default">

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="panel panel-default">
                                        <div class="panel-heading"style="background-color:red"> Detail</div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <tr>
                                                        <th style="width: 150px">Id</th>
                                                        <td>{{$data->id}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Title</th>
                                                        <td>{{$data->title}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Keyword</th>
                                                        <td>{{$data->keyword}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Image</th>
                                                        <td>{{$data->image}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Status</th>
                                                        <td>{{$data->status}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Created Date</th>
                                                        <td>{{$data->Created_at}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Update Date</th>
                                                        <td>{{$data->updated_at}}</td>
                                                    </tr>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                                </div>

                    </div>

                </div>
            </div>
            <!-- /. ROW  -->
            <hr />

        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->

@endsection
