@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

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
            <hr>
            <form>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Note Title/Description</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Note Title/Description">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Owner</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Note Writer">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Publication</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Note Publication">
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

    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <h3>Uploaded Notes</h3>
<hr>
                <div class="row">

                    @foreach($contentlist1 as $rs)
                        <div class="col-md-4">
                            <div class="single-book">

                                <img src="{{Storage::url($rs->image)}}" style="height: 210px; width: 270px">
                                <div class="book-short-info">
                                    <h5>{{$rs->title}}</h5>
                                    @php
                                        $average = $rs->comment->average('rate');
                                    @endphp
                                    <div class="rating">

                                        {{number_format($average,0)}}<i class="fa fa-star @if ($average<1) -o empty @endif"></i>
                                       <h5>{{$rs->comment->count('id')}} Reviews</h5>
                                    </div>

                                    <p>
                                        <a href="" class=""><i class="fa fa-upload"></i> {{$rs->user_id}}</a>
                                    </p>
                                    <a href="{{route('content',['id'=>$rs->id])}}" class="btn btn-outline-primary"><i class="fa fa-eye"></i> View</a>
                                    <a href="{{route('bookmark.add',['id'=>$rs->id])}}" class="btn btn-outline-warning"><i class="fa fa-bookmark"></i> My BookMarks</a>

                                </div>
                            </div>
                        </div> <!-- Single Book Item -->
                    @endforeach

                <div class="books-pagination mt-5">


                    <nav aria-label="...">
                        <hr>
                        <ul class="pagination">

                            <li class="page-item disabled">

                                <span class="page-link">Previous</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                  <span class="page-link">
                    2
                    <span class="sr-only">(current)</span>
                  </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div> <!-- Book List -->
            </div>


@endsection
