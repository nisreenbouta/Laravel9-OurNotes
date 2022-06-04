@extends('layouts.frontbase')

@section('title', 'User Comments & Reviews' )

@section('content')



    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home </a> \ </li>
                <li class="active"> User Comments</li>
            </ul>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-2">

                        <h3 class="title">User Menu </h3>
                        <hr>
                        @include('home.user.usermenue')


                </div>

            <div class="col-md-10">

                    <h4 class="title">User Comments & Reviews</h4>
                    <hr>

                <div class="input-checkbox">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Content</th>
                            <th>User</th>
                            <th>Review</th>
                            <th>Rate</th>
                            <th>Status</th>
                            <th style="width: 110px">Delete</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $comments as $rs)
                            <tr class="success"><td>{{$rs->id}}</td>
                                <td><a href="{{route('content', ['id'=>$rs->content_id])}}" >{{$rs->content->title}}</a></td>
                                <td>{{$rs->user->name}}</td>
                                <td>{{$rs->review}}</td>
                                <td>{{$rs->rate}}</td>
                                <td>{{$rs->status}}</td>

                                </td>
                                <td><a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}"<a
                                        onclick="return confirm('DELETING!! ARE YOU SURE??')" class="btn btn-danger ">Delete</a></td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>


@endsection

