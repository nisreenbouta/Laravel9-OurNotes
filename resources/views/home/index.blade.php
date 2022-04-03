@extends('layouts.frontbase')

@section('title', 'Our Notes')

@section('slider')

    @include("home.slider")
@endsection

@section('content')

    <div class="top-body pt-4 pb-4">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="card card-body single-top-link" onclick="location.href='login.html'">
                        <h4>Sign In</h4>
                        <i class="fa fa-sign-in-alt"></i>
                        <p>
                            Sign In To Start Sharing Your Notes
                        </p>
                    </div> <!-- Single Item -->
                </div> <!-- Single Col -->

                <div class="col-md-3">
                    <div class="card card-body single-top-link"  onclick="location.href='register.html'">
                        <h4>Create New</h4>
                        <i class="fa fa-user"></i>
                        <p>
                            Create New Account
                        </p>
                    </div> <!-- Single Item -->
                </div> <!-- Single Col -->

                <div class="col-md-3">
                    <div class="card card-body single-top-link">
                        <h4>Share Notes</h4>
                        <i class="fa fa-cart-plus"></i>
                        <p>
                            Share Your Notes With Anyone!
                        </p>
                    </div> <!-- Single Item -->
                </div> <!-- Single Col -->

                <div class="col-md-3">
                    <div class="card card-body single-top-link">
                        <h4>Top Searched</h4>
                        <i class="fa fa-search"></i>
                        <p>
                            Top Searched Notes Lists
                        </p>
                    </div> <!-- Single Item -->
                </div> <!-- Single Col -->

            </div>
        </div>
    </div> <!-- End Top Body Links -->
    <div class="advance-search">
        <div class="container">
            <h3>Advance Search</h3>
            <form>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Note Title/Description</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Book Title/Description">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Owner</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Book Author">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Publication</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Book Publication">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Notes Category</label>
                            <select class="form-control">
                                <option>Select a category</option>
                                <option>Java Programming</option>
                                <option>C Programming</option>
                                <option>C++ Programming</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-success btn-lg" name="">
                            <i class="fa fa-search"></i> Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>




@endsection
