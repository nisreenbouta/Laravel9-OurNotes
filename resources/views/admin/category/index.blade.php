@extends('layouts.adminbase')

@section('title', 'Category List')

@section('content')

    <li>

        <a class="active-menu"  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Category List</a>

    </li>

    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Category List</h2>
                    <div class="panel panel-default">
                        <div class="panel-heading"> Category List</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Keyword</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th style="width: 40px">Edit</th>
                                        <th style="width: 40px">Delete</th>
                                        <th style="width: 40px">Show</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $data as $rs)
                                    <tr class="success">
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>{{$rs->keyword}}</td>
                                        <td>{{$rs->description}}</td>
                                        <td>{{$rs->image}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="/admin/category/edit/{{$rs->id}}"<a href="https://www.free-css.com/free-css-templates" class="btn btn-info btn-sm">Edit</a></td>
                                        <td><a href="/admin/category/delete/{{$rs->id}}"<a href="https://www.free-css.com/free-css-templates" class="btn btn-danger btn-sm">Delete</a></td>
                                        <td><a href="/admin/category/show/{{$rs->id}}"<a href="https://www.free-css.com/free-css-templates" class="btn btn-success btn-sm">Show</a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
