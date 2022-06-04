@extends('layouts.frontbase')

@section('title', 'User BookMarks' )

@section('content')



    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home </a> \ </li>
                <li class="active"> User BookMarks</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-2">

                    <h3 class="title"> User Menu</h3>
                    <hr>
                    @include('home.user.usermenue')


                </div>

                <div class="col-md-10">

                        <div class="profile-tab border p-2">
                            <h3 class="">My BookMarks</h3>
                            <hr>
                                <div class="row">

                                    <div class="col-md-4">
                                        @foreach($data as $rs)
                                        <div class="single-book">
                                            <img src="{{Storage::url($data->content->image)}}" alt="">
                                            <div class="book-short-info">
                                                <h5>{{$rs->title}}</h5>
                                                <p>
                                                    <a href="" class=""><i class="fa fa-upload"></i> Polash Rana</a>
                                                </p>
                                                <a href="book-view.html" class="btn btn-outline-primary"><i class="fa fa-eye"></i> View</a>
                                                <a href="{{route('bookmark.destroy',['id'=>$rs->id])}}"<a
                                                    onclick="return confirm('REMOVING!! ARE YOU SURE??')" class="btn btn-outline-danger"><i class="fa fa-times"></i> Remove</a>



                                            </div>
                                        </div>
                                    </div> <!-- Single Book Item -->
                                    @endforeach


                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection

