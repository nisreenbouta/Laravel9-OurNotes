<div class="book-list-sidebar">
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <h3>Recent Uploaded Notes</h3>

                <div class="row">
                    @foreach($contentlist1 as $rs)
                    <div class="col-md-4">
                        <div class="single-book">
                            <img src="{{Storage::url($rs->image)}}" style="height: 200px; width: 200px">
                            <div class="book-short-info">
                                <h5>{{$rs->title}}</h5>
                                <p>
                                    <a href="" class=""><i class="fa fa-upload"></i> {{$rs->user_id}}</a>
                                </p>
                                <a href="book-view.html" class="btn btn-outline-primary"><i class="fa fa-eye"></i> View</a>
                                <a href="" class="btn btn-outline-danger"><i class="fa fa-heart"></i> Mylist</a>

                            </div>
                        </div>
                    </div> <!-- Single Book Item -->
                    @endforeach
                </div>

                <div class="books-pagination mt-5">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <span class="page-link">Previous</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                  <span class="page-link">
                    2
                    <span class="sr-only">(current)</span>
                  </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div> <!-- Book List -->

            <div class="col-md-3">
                <div class="widget">
                    <h5 class="mb-2 border-bottom pb-3">
                        Categories
                    </h5>

                    <div class="list-group mt-3">
                        <a href="#" class="list-group-item list-group-item-action">
                            Programming
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">Arts</a>
                        <a href="#" class="list-group-item list-group-item-action">Banking</a>
                        <a href="#" class="list-group-item list-group-item-action">Others</a>
                    </div>

                </div> <!-- Single Widget -->

            </div> <!-- Sidebar -->

        </div>
    </div>
</div>
