@php
    $parentCategories = \App\Http\Controllers\HomeController::categorylist();
@endphp

<li class="mega-parent"><a href="#">Categories</a>
    <ul class="mgea-menu">

        @foreach($parentCategories as $rs)
        <li class="mega-sub"><a href="">{{ $rs->title }}</a>
            @if(count($rs->children))
                @include('home.categorytree',['children' =>$rs->children])
            @endif

        </li>
        @endforeach

    </ul>
</li>

