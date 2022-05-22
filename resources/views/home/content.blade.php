@extends('layouts.frontbase')

@section('title', $data->title)

@section('content')


    <div id="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home </a></li>
                <li class="breadcrumb-item"><a href="#">Content </a></li>
                <li class="breadcrumb-item"><a href="#">Category </a></li>
            <li class="breadcrumb-item active"></a> {{$data->title}}</li>
              </ol>

       <div class="main-content">

        <div class="book-show-area">

            <div class="container">
                @include('home.messages')
                <div class="row">

                        <div class="col-md-3">

                        <img src="{{Storage::url($data->image)}}" class="img img-fluid"style="width: 300px ; height: 200px">
                    </div>

                    @foreach($images as $rs)

                            <img src="{{Storage::url($rs->image)}}" class="img img-fluid" style="width: 300px ; height: 200px">

                    @endforeach

                    <div class="col-md-6">
                        <h3>{{$data->title}}</h3>
                        <p class="text-muted">Uploaded By
                            <span class="text-primary">{{$data->user_id}}</span> @<span class="text-info">{{$data->category->title}}</span>
                        </p>
                        <hr>
                        <p><strong>Uploaded By: </strong> {{$data->user_id}}</p>
                        <p><strong>Uploaded at: </strong>{{$data->created_at}}</p>
                        <div class="book-description"><strong>{{$data->description}} </strong></div>
                        <br>
                        <p><strong>Detail INFO:  </strong>{!! $data->detail !!}</p>

                        <div class="book-buttons mt-4">
                            <a href="" class="btn btn-outline-success"><i class="fa fa-check"></i> Already Read</a>

                            <a href="" class="btn btn-outline-danger"><i class="fa fa-heart"></i> Add to My list</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <form action="{{route("storecomment")}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="content_id" class="input" id="content_id" aria-describedby="emailHelp" value="{{$data->id}}">
                        </div>

                        <div class="form-group">
                            <textarea class="input-group" name="review" type="text" name="review" placeholder="Review"></textarea>
                        </div>
                        <div class="form-group">

                            <strong class="text-uppercase">Your Rating: </strong>

                                <input type="number" id="rate" name="rate" value="5" /><label for="rate"></label>
                            <div class="form-group">
                                @auth()
                                <input class="form-control" type="submit"  value="Send Comment" >
                                @else
                                <a href="/login" class="btn btn-outline-danger">For Submitting Your Review, Please Login</a>
                                @endauth
                            </div>
                                <hr>
                                    <strong><h2>REVIEWS</h2></strong>
                                    @php
                                        $average = $data->comment->average('rate');
                                    @endphp
                            <div class="rating">

                                {{number_format($average,0)}}<i class="fa fa-star @if ($average<1) -o empty @endif"></i>
                            </div>
                            <a href="#">{{$data->comment->count('id')}}/ Review(s) / Add Review</a>

                        @foreach($review as $rs)

                                        <div class="col-md-12">
                                            <div><a href="#"><i class="fa fa-user-o"></i>{{$rs->user->name}} </a></div>
                                            <div><a href="#"><i class="fa fa-clock-o"></i>{{$rs->created_at}} </a></div>
                                            <p>{{$rs->rate}}</p>
                                            <strong>{{$rs->review}}</strong>
                                            <hr>
                                        </div>
                                    @endforeach
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            </div>

        </div>

    </div>
@endsection
