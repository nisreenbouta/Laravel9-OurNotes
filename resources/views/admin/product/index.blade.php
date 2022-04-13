@extends('layouts.adminbase')

@section('title', 'Product List')

@section('content')



    <div id="page-wrapper" >
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">home</a> </li>
            <li class="breadcrumb-item active">Product List</li>
        </ol>

        <a href="{{route('admin.product.create')}}"class="btn btn-info ">Add Product</a>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">

                    <div class="panel panel-default">
                        <div class="panel-heading"> Product List</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
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
                                        <td>{{\App\Http\Controllers\AdminPanel\Categorycontroller::getParentsTree($rs, $rs->title)}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>{{$rs->price}}</td>
                                        <td>{{$rs->quantity}}</td>
                                        <td>
                                            @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                            @endif
                                        </td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin.product.edit',['id'=>$rs->id])}}"<a href="https://www.free-css.com/free-css-templates" class="btn btn-info btn-sm">Edit</a></td>
                                        <td><a href="{{route('admin.product.destroy',['id'=>$rs->id])}}"<a href="https://www.free-css.com/free-css-templates" onclick="return confirm('DELETING!! ARE YOU SURE??')" class="btn btn-danger ">Delete</a></td>

                                        <td><a href="{{route('admin.product.show',['id'=>$rs->id])}}"<a href="https://www.free-css.com/free-css-templates" class="btn btn-success btn-sm">Show</a></td>
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
