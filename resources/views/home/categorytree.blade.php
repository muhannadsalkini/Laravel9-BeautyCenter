@foreach($children as $subcategory)
    <ul class="mega-sub-item">
        @if(count($subcategory->children))
            <li class="mega-sub"><a href="">{{ $rs->title }}</a>
                <ul class="mega-sub-item">
                    @include('home.categorytree',['children' =>$rs->children])
                </ul>
            </li>
        @else
            <li><a href="elements-accordion.html">{{ $subcategory->title }}</a></li>
        @endif
    </ul>
@endforeach
