@extends('layouts.adminbase')

@section('title', 'Settings')

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('content')



    <div id="page-wrapper" >
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">home</a> </li>
            <li class="breadcrumb-item active">Settings</li>
        </ol>

        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Settings </h2>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="panel panel-default">

                <div class="panel-body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link" href="#home" data-toggle="tab">General</a></li>
                        <li class="nav-item"><a class="nav-link" id="custom-tabs-one-smtp" href="#custom-tabs-one-smtp" data-toggle="tab" aria-selected="false">Smtp Email</a></li>
                        <li class="nav-item"><a href="#custom-tabs-one-social" data-toggle="tab">Social media</a></li>
                        <li class="nav-item"><a href="#custom-tabs-one-about" data-toggle="tab">About us</a></li>
                        <li class="active"><a href="#custom-tabs-one-references" data-toggle="tab">References</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade" id="home">
                            <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                                <input type="hidden" id ="id" name="id" value="{{$data->id}}" class="form-control">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" id="title"  class="form-control" name="title" value="{{$data->title}}">

                                </div>
                                <div class="form-group">
                                    <label>Keyword</label>
                                    <input type="text" class="form-control" name="keyword" value="{{$data->keyword}}">

                                </div>
                                <div class="form-group">
                                    <label>Description </label>
                                    <input type="text" class="form-control" name="description" value="{{$data->description}}">

                                </div>


                                <div class="form-group">
                                    <label>Choose Icon file</label>
                                    <input type="file" class="custom-file-input" name="icon" >
                                </div>

                                <div class="form-group">
                                    <label>Select </label>
                                    <label>
                                        <select class="form-control" name="status">
                                            <option selected>{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-default">Update Setting</button>
                                <button type="reset" class="btn btn-primary">Reset </button>

                            </form>
                                <div class="tab-pane fade" id="custom-tabs-one-smtp" role="tabpanel" aria-labelledby="custom-tabs-one-smtp">
                                      <div class="form-group">
                                            <label>Smtp Server</label>
                                          <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                                     </div>

                                <div class="form-group">
                                    <label>Smtp Email</label>
                                    <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtp Password</label>
                                    <input type="text" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Smtp Port</label>
                                    <input type="text" name="smtpport" value="{{$data->smtpport }}" class="form-control">
                                </div>

                            </div>

                        <div class="tab-pane fade" id="custom-tabs-one-social" role="tabpanel" aria-labelledby="custom-tabs-one-social">
                            <div class="form-group">
                                <label>Fax</label>
                                <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                            </div>

                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" name="twitter" value="{{$data->twitter }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>YouTube</label>
                            <input type="text" name="youtube" value="{{$data->youtube }}" class="form-control">
                        </div>

                        </div>
                        <div class="tab-pane fade" id="custom-tabs-one-about" role="tabpanel" aria-labelledby="custom-tabs-one-about">
                            <div class="form-group">
                                <label>About Us</label>
                                <textarea id="aboutus" name="aboutus" >{{$data->aboutus}}</textarea>
                            </div>
                        </div>
                            <div class="tab-pane fade" id="custom-tabs-one-contact" role="tabpanel" aria-labelledby="custom-tabs-one-contact">
                                <div class="form-group">
                                    <label>Contact</label>
                                    <textarea id="contact" name="contact" >{{$data->contact}}</textarea>
                                </div>
                            </div>
                                <div class="tab-pane fade" id="custom-tabs-one-references" role="tabpanel" aria-labelledby="custom-tabs-one-references">
                                    <div class="form-group">
                                        <label>References</label>
                                        <textarea id="references" name="references" >{{$data->references}}</textarea>
                                    </div>
                                    <script>
                                        $(document).ready(function (){
                                            $('#aboutus').summernote();
                                            $('#contact').summernote();
                                            $('#references').summernote();
                                        });
                                    </script>


                    </div>
                </div>
        </div>

        <!-- /. PAGE INNER  -->
    </div>

    <!-- /. PAGE WRAPPER  -->

    </div>
@endsection
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
                <script>
                    $(document).ready(function (){
                        $('#aboutus').summernote();
                        $('#contact').summernote();
                        $('#references').summernote();
                    });
                </script>
@endsection
