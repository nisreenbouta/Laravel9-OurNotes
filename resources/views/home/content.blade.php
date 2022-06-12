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



        <div class="section">

            <div class="container">

                <br>
                <div class="row">
                    <div class="col-md-6">
                        @include('home.messages')
                        <img src="{{Storage::url($data->image)}}"  style="width: 550px;height: 350px"/>
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

                        <form action="{{route('storecomment')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="hidden" name="content_id" class="input" id="content_id" aria-describedby="emailHelp" value="{{$data->id}}">
                            </div>

                            <div class="form-group">
                                <textarea class="input-group" name="review" type="text" name="review" placeholder="Review"></textarea>
                            </div>
                            <div class="form-group">

                                <strong class="text-uppercase">Your Rating: </strong>

                                <input id="input-id" type="text" class="rating" data-size="sm" name="rate" >
                                <div class="form-group">
                                    @auth()
                                        <input class="form-control" type="submit"  value="Send Comment" >
                                    @else
                                        <a href="/login" class="btn btn-outline-danger">For Submitting Your Review, Please Login</a>
                                    @endauth
                                </div>
                            </div>
                        </form>
<br>
                        <h3 class="">REVIEWS</h3>
                        <hr>
                        <div class="single-book">
                            @php
                                $average = $data->comment->average('rate');
                            @endphp
                            <div class="rating">

                                {{number_format($average,0)}}<i class="fa fa-star @if ($average<1) -o empty @endif"></i>
                            </div>
                            <a href="#">{{$data->comment->count('id')}}/ Review(s) </a>

                            @foreach($review as $rs)

                                <div><a href="#"><i class="fa fa-user-o"></i>{{$rs->user->name}} </a></div>
                                <div><a href="#"><i class="fa fa-clock-o"></i>{{$rs->created_at}} </a></div>
                                <p> Rate: {{$rs->rate}}</p>
                                <strong>{{$rs->review}}</strong>
                                <hr>
                            @endforeach

                        </div>
                    </div>


                    <div class="col-md-6">
                        <h5 class="mb-2 border-bottom pb-3">

                                <h3 class="">PDF NOTES</h3>

                            <div class="input-checkbox">
                                <table class="table">
                                    <thead>
                                <tr>
                                    <th>File ID </th>
                                    <th>title </th>
                                    <th>View </th>
                                </tr>
                                @foreach($file as $rs)
                                    <tbody>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td> <a href="{{Storage::url($rs->file)}}" >View & Download File </a></td>
                                    </tbody>
                                @endforeach

                       </thead>
                                </table>
                            </div>
                        </h5>
                        @foreach($images as $rs)
<hr>
                            <img src="{{Storage::url($rs->image)}}" href="" class="img img-fluid" style="width: 400px ; height: 400px">

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection




