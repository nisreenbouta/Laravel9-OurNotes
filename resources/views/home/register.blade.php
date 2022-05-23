@extends('layouts.frontbase')

@section('title', 'User Registeration Page' )

@section('content')



            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home </a> \ </li>
                <li class="active"> User Registeration</li>
            </ul>



    <div class="section">

            <div class="container">
<h1> User Registeration</h1>
                <hr>
                <br>
                <div class="row">
                    <div class="col-md-12">
                  @include('auth.register')
                </div>
            </div>
        </div>
    </div>

@endsection
