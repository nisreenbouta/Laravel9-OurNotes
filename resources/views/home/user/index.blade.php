@extends('layouts.frontbase')

@section('title', 'User Panel' )

@section('content')



    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home </a> \ </li>
                <li class="active"> User Panel</li>
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

                    <h4 class="title">User Profile</h4>
                    <hr>

                <div class="input-checkbox">
                        @include('profile.show')
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>


@endsection

