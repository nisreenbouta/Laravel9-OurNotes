@extends('layouts.adminbase')

@section('title', 'Add Category ')

@section('content')


    <div id="page-wrapper" >
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">home</a> </li>
            <li class="breadcrumb-item active">Add Category</li>
        </ol>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Add Category </h2>
                    <div class="panel panel-default">
                        <div class="panel-heading"style="background-color:red">

                            Adding Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Category Elemnts</h3>
                                    <form role="form" action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Parent Category</label>
                                            <select class="form-control select2" name="parent_id" style="...">
                                                <option value="0" selected="selected">Main Category</option>
                                                @foreach($data as $rs)
                                                    <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\Categorycontroller::getParentsTree($rs, $rs->title)}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                            <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Title">

                                        </div>
                                        <div class="form-group">
                                            <label>Keyword</label>
                                            <input type="text" class="form-control" name="keyword" placeholder="keyword">

                                        </div>
                                        <div class="form-group">
                                            <label>Description </label>
                                            <input type="text" class="form-control" name="description" placeholder="Description">

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
