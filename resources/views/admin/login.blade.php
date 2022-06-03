<html>
<head>
    <link href="{{asset('adminassets/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('adminassets/css/font-awesome.css')}}" rel="stylesheet" />
</head>
    <body>

            <form action="{{route('loginadmincheck')}}" method="post">
                @include('home.messages')
                @csrf
                <h3>Login to your Account</h3>
                <hr>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary">Login </button>
                <a href="/registeruser" type="submit" class="text-center">Register </a>
            </form>
            </div>

            <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
            <!-- JQUERY SCRIPTS -->
            <script src="{{asset('adminassets/js/jquery-1.10.2.js')}}"></script>
            <!-- BOOTSTRAP SCRIPTS -->
            <script src="{{asset('adminassets/js/bootstrap.min.js')}}"></script>
            <!-- METISMENU SCRIPTS -->
            <script src="{{asset('adminassets/js/jquery.metisMenu.js')}}"></script>
            <!-- CUSTOM SCRIPTS -->
            <script src="{{asset('adminassets/js/custom.js')}}"></script>
            <script src="{{asset('assets/js/summernote.js')}}"></script>
            <script src="https://cdn.lordicon.com/lusqsztk.js"></script>


    </body>
</html>
