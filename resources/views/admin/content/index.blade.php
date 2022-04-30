@extends('layouts.adminbase')

@section('title', 'Content List')

@section('content')



    <div id="page-wrapper" >
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">home</a> </li>
            <li class="breadcrumb-item active">Content List</li>
        </ol>

        <a href="{{route('admin.content.create')}}"class="btn btn-info ">Add Content</a>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-heading"> Content List</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>File</th>
                                        <th>Image </th>
                                        <th>Image Gallery</th>
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
                                        <td>{{\App\Http\Controllers\AdminPanel\Categorycontroller::getParentsTree($rs->category, $rs->category->title?? 'no title')}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>
                                            @if($rs->file)
                                                <img src="{{Storage::url($rs->file)}}" style="height: 40px">
                                            @endif

                                        </td>
                                        <td>
                                            @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                            @endif

                                        </td>
                                        <td>
                                            <a href="{{route('admin.image.index',['pid'=>$rs->id])}}"
                                            onclick="return !window.open(this.href, ' ', 'top=50 left=100 width=1000, height=700')">
                                            <img src="{{asset('adminassets')}}/img/gallery.jpg" style="height: 40px">
                                            </a>
                                        </td>

                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin.content.edit',['id'=>$rs->id])}}"<a class="btn btn-info btn-sm">Edit</a></td>

                                        <td><a href="{{route('admin.content.destroy',['id'=>$rs->id])}}"<a onclick="return confirm('DELETING!! ARE YOU SURE??')" class="btn btn-danger ">Delete</a></td>

                                        <td><a href="{{route('admin.content.show',['id'=>$rs->id])}}"<a class="btn btn-success btn-sm">Show</a></td>
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
