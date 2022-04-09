@extends('layouts.adminbase')

@section('title', 'Add Category ')

@section('content')

    <li  >
        <a class="active-menu"  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Add Category</a>
    </li>

    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Add Category </h2>
                    <div class="panel panel-default">
                        <div class="panel-heading"style="background-color:red">

                            Form Element Examples
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Category Elemnts</h3>
                                    <form role="form" action="/admin/category/store" method="post">
                                        @csrf
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

                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-primary">Reset Button</button>

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
