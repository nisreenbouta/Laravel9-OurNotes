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
                <div class="row">

                    <div class="col-md-3">

                        <img src="{{Storage::url($data->image)}}" class="img img-fluid">
                    </div>

                    @foreach($images as $rs)

                            <img src="{{Storage::url($rs->image)}}" class="img img-fluid" style="width: 100px ; height: 150px">

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
            </div>
        </div>

    </div>
@endsection
