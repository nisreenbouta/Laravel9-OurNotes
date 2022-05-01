

<div class="main-content">
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide main-slider" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        @foreach($sliderdata as $rs)
        <div class="carousel-inner">
            <div class="carousel-item active">

                <img src="{{Storage::url($rs->image)}}"  style="width: 700px; height: 300px" >

                <div class="carousel-caption d-none d-md-block">

                <p>
                    <h3>{{$rs->title}}</h3>

                        <a href="{{route('content',['id'=>$rs->id])}}" class="btn btn-primary slider-link">
                            View Now
                        </a>
                    </p>
                </div>
            </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Carousel -->

    </div>
</div>
@endforeach
