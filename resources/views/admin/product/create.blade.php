@extends('layouts.adminbase')

@section('title', 'Add Product ')

@section('content')


    <div id="page-wrapper" >
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">home</a> </li>
            <li class="breadcrumb-item active">Add Product</li>
        </ol>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Add Product </h2>
                    <div class="panel panel-default">
                        <div class="panel-heading"style="background-color:red">

                            Adding Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Product Elemnts</h3>
                                    <form role="form" action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Parent Product</label>
                                            <select class="form-control select2" name="category_id" style="...">

                                                @foreach($data as $rs)
                                                    <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\Categorycontroller::getParentsTree($rs, $rs->title)}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                            <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Title">
                                            <p class="help-block">Help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Keyword</label>
                                            <input type="text" class="form-control" name="keyword" placeholder="keyword">
                                            <p class="help-block">Help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Description </label>
                                            <input type="text" class="form-control" name="description" placeholder="Description">
                                            <p class="help-block">Help text here.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Price </label>
                                            <input type="number" class="form-control" name="price" value="0">

                                        </div>
                                        <div class="form-group">
                                            <label>Quantity </label>
                                            <input type="number" class="form-control" name="quantity" value="0">

                                        </div>
                                        <div class="form-group">
                                            <label> Minimum Quantity </label>
                                            <input type="number" class="form-control" name="quantity" value="0">

                                        </div>
                                        <div class="form-group">
                                            <label>Tax % </label>
                                            <input type="number" class="form-control" name="tax" value="0">
                                        </div>
                                        <div class="form-group">
                                            <label>Detail INFO </label>
                                            <textarea class="form-control" name="detail">

                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Choose Image file</label>
                                            <input type="file" class="custom-file-input" name="image">
                                        </div>

                                        <div class="form-group">
                                            <label>Select </label>
                                            <label>
                                                <select class="form-control" name="status">
                                                    <option>True</option>
                                                    <option>False</option>
                                                </select>
                                            </label>
                                        </div>

                                        <button type="submit" class="btn btn-default">Submit </button>
                                        <button type="reset" class="btn btn-primary">Reset </button>

                                    </form>



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
