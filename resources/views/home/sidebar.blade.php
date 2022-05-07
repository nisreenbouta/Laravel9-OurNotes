    <div class="book-list-sidebar">
    @php
        $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
       @endphp
                <div class="col-md-12">
                    <div class="widget @if (!@isset($page)) @endif">
                        <h5 class="mb-2 border-bottom pb-3">
                            Categories
                        </h5>
                        <ul class="category-list">
    @foreach($mainCategories as $rs)
        <li class="dropdown sidebar-collapse">
                        <div class="list-group mt-3">
                            <a href="#" class="list-group-item list-group-item-action">
                                {{$rs->title}}
                            </a>
                          <div class="row">
                              @if(count($rs->children)) @include('home.categorytree', ['children' => $rs->children]) @endif

                          </div>
                        </div>

                            </li>
                            @endforeach
                        </ul>
                    </div> <!-- Single Widget -->

                </div> <!-- Sidebar -->

    </div>


