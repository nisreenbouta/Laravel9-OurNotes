
<div class="main-content">

<!-- Carousel -->

<div id="carouselExampleIndicators" class="carousel slide main-slider" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">

        <div class="carousel-item active">
            @foreach($sliderdata as $rs)
            <img src="{{Storage::url($rs->image)}}"  class="d-block w-100">

            <div class="carousel-caption d-none d-md-block">
                <h3>{{$rs->title}}</h3>
                <p>
                    <a href="{{route('content',['id'=>$rs->id])}}" class="btn btn-primary slider-link">
                        View Now

                    </a>

                </p>
            </div>
        </div>
    </div> @endforeach
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>
<!-- Carousel -->


