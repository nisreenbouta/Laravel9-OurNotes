@foreach($children as $subcategory)
    <ul class="list-group-item list-group-item-action">
        @if(count($subcategory-> children))
            <li style="color: #eb99c8; font-family: 'Arial Black'">{{$subcategory->title}}</li>
            <ul class="list-group-item list-group-item-action">
                @include('home.categorytree', ['$children' => $subcategory->children])
            </ul>
            <hr>
        @else
        <li><a href="{{route('categorycontent', ['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a> </li>
    </ul>

    @endif


@endforeach
