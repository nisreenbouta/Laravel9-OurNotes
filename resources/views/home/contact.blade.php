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

                <div class="row">

                    <div class="advance-search">

                            <h3>Contact Form</h3>

                            <form action="{{route("storemessage")}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name & Surname">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Subject">
                                        </div>
                                    </div>


                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <textarea class="form-control"  type="text" name="message" placeholder="Message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <input class="form-control" type="submit"  value="Send Message" >
                                        </div>
                                    </div>
                                </div>
                            </form>


                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Contact Information</h3>
                    <p class="text-muted">Uploaded By
                        <span class="text-primary">n</span> @<span class="text-info">n</span>
                    </p>
                    {!! $setting->contact !!}

                </div>

            </div>
        </div>
    </div>

@endsection
