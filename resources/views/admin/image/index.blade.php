
@extends('layouts.adminwindow')

@section('title', 'Content Image Gallery ')

@section('content')

<h3>{{$content->title}}</h3>
<hr>
    <form role="form" action="{{route('admin.image.store',['pid'=>$content->id])}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">
            <label>File input</label>
            <input type="file" name="image">
        </div>

        <div class="form-group">
            <label>Choose Image file</label>
            <input type="file" class="custom-file-input" name="image">
        </div>
        <input class="input-group-text" type="submit" value="Upload">


    </form>



    <div id="page-wrapper" >
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"> Content Image Gallery</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th style="width: 40px">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $images as $rs)
                                    <tr class="success">
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>
                                            @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 100px">
                                            @endif
                                        </td>
                                        <td><a href="{{route('admin.image.destroy',['pid'=>$content->id, 'id'=>$rs->id])}}">
                                            <a href="https://www.free-css.com/free-css-templates" onclick="return confirm('DELETING!! ARE YOU SURE??')" class="btn btn-danger ">Delete</a></td>

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
