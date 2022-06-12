
<div class="col-md-3">
<div class="book-list-sidebar">

            @php
        $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
       @endphp

                <div class="col-md-12">
                    <div class="widget @if (!@isset($page)) @endif">
                        <h5 class="md-1 border-bottom pb-1">
                             Categories
                        </h5>

        @foreach($mainCategories as $rs)
            <li class="navbar-toggler-icon">
                                    <li class="single-top-link">
                                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$rs->title}}</a>

                                @if(count($rs->children))
                                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                                                <a class="dropdown-item" href="#"> @include('home.categorytree', ['children' => $rs->children])</a>
                                            </div>
                                        @endif
                                    </li>



                              </div>

                            </div>


                                @endforeach

                    </div> <!-- Single Widget -->

            <!-- Sidebar -->



  </div>
  </div>
