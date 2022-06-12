@extends('layouts.frontbase')

@section('title', $category->title . ' Content')

@section('content')



    <div id="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home </a></li>
            <li class="breadcrumb-item"><a href="#">{{$category->title}} </a></li>

        </ol>
    </div>
    @foreach($content as $rs)
        <div class="col-md-12">
            <div class="single-book">

                <img src="{{Storage::url($rs->image)}}" style="height: 200px; width: 250px">
                <div class="book-short-info">
                    <h5>{{$rs->title}}</h5>
                    <p>
                        <a href="" class=""><i class="fa fa-upload"></i> {{$rs->user_id}}</a>
                    </p>
                    <a href="{{route('content',['id'=>$rs->id])}}" class="btn btn-outline-primary"><i class="fa fa-eye"></i> View</a>


                </div>
            </div>
        </div> <!-- Single Book Item -->
    @endforeach
@endsection
