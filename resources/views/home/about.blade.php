@extends('layouts.frontbase')

@section('title', 'About Us | ' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')



            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home </a> \ </li>
                <li class="active"> About</li>
            </ul>



    <div class="section">

            <div class="container">
<h1> About Us</h1>
                <br>
                <div class="row">
                    <div class="col-md-12">
                    {!! $setting->aboutus !!}
                </div>
            </div>
        </div>
    </div>

@endsection
