@foreach($children as $subcategory)
    <ul class="mega-sub-item">
        @if(count($subcategory->children))
            <li class="mega-sub"><a href="">{{ $subcategory->title }}</a>
                <ul class="mega-sub-item">
                    @include('home.categorytree',['children' =>$subcategory->children])
                </ul>
            </li>
        @else
            <li><a href="{{ route('categoryservice',['id'=>$subcategory->id] )}}">{{ $subcategory->title }}</a></li>
        @endif
    </ul>
@endforeach
