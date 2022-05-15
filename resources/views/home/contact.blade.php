@extends('layouts.frontbase')

@section('title', 'Contact | ' . $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')



            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home </a> \ </li>
                <li class="active"> Contact</li>
            </ul>

    <div class="section">

            <div class="container">
                <div class="advance-search">
                    <div class="col-md-12 border p-4">
                        <h3>Contact Form</h3>
                        @include('home.messages')
                        <form action="{{route("storemessage")}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="fullname" class="input-group" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name & Surname">
                            </div>
                            <div class="form-group">
                                <input type="tel" name="phone" class="input-group" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="input-group" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="input-group" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="input-group" name="message" type="text" name="message" placeholder="Message"></textarea>
                            </div>
                            <br>
                            <div class="form-group">

                                <input class="form-control" type="submit"  value="Send Message" >
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <br>
                    <h1>Contact Information</h1>
                    {!! $setting->contact !!}

                </div>
            </div>
        </div>
    </div>

@endsection
