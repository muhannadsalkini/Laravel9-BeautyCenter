<!--Breadcrumbs start-->
<div class="breadcrumbs text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs-title">
                    <h2>@yield('breadcrumbs')</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumbs-menu">
        <ul>
            <li><a href="{{route('home')}}">HOME <span>//</span></a></li>
            <li>@yield('breadcrumbs')</li>
        </ul>
    </div>
</div>
<!--Breadcrumbs end-->
