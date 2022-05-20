@extends('layouts.frontbase')

@section('title', 'Frequently Asked Questions | ' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')



            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home </a> \ </li>
                <li class="active"> Frequently Asked Questions</li>
            </ul>



    <div class="section">

            <div class="container">

                <br>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Frequently Asked Questions</h1>
<hr>
                        @foreach($datalist as $rs)
                            <h3>{{$rs->question}}</h3>
                            <p>{!!$rs->answer!!}</p>
                        @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
