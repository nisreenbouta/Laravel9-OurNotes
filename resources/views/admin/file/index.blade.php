
@extends('layouts.adminwindow')

@section('title', 'Content Files ')

@section('content')
    <div class="col-md-12">
<h3>{{$content->title}}</h3>
<hr>
<div class="col-md-12">
    <form role="form" action="{{route('admin.file.store', ['pid'=>$content->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">

        </div>

        <div class="form-group">
            <label>Choose file</label>
            <input type="file" class="custom-file-input" name="file">
        </div>
        <input class="input-group-text" type="submit" value="Upload">

        </div>

    </form>
    <div id="page-wrapper" >
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"> Content Files</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                           <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>File</th>
                                        <th style="width: 40px">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $files as $rs)
                                    <tr class="success">
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>
                                            @if($rs->file)
                                                <a href="{{Storage::url($rs->file)}}" >View</a>
                                            @endif
                                        </td>
                                        <td><a href="{{route('admin.file.destroy',['pid'=>$content->id, 'id'=>$rs->id])}}" onclick="return confirm('DELETING!! ARE YOU SURE??')" class="btn btn-danger">Delete</a></td>
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
