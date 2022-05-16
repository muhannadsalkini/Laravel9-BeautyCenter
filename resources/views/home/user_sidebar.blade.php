<!--shop sidebar start-->
<div class="col-md-2">
    <div class="shop sidebar">
        <aside class="widget categories grey-bg mb-30">
            <div class="widget-title">
                <h3>User Panel</h3>
            </div>
            <div class="widget-categories">
                <!--Accordion item 1-->
                <h6 class="open" data-collapse-summary="" aria-expanded="true"><a href="#"><a href="#">User Panel</a></a></h6>
                <ul aria-hidden="false" style="display: block;">
                    <li><a style="@yield('Profile_status')" href="{{ route('myprofile') }}">Profile</a></li>
                    <li><a style="@yield('Wishlist_status')" href="{{ route('wishlist') }}">Wishlist</a></li>
                    <li><a style="@yield('Appointments_status')" href="{{ route('user_appointment') }}">Appointments</a></li>
                    <li><a style="@yield('Reviews_status')" href="{{ route('myreviews') }}">Reviews</a></li>
                    <li><a @yield('Messages_status') href="#">Messages</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
                <!--Accordion item 1 end-->
                <!--Accordion item 2 start
                <h6 data-collapse-summary="" aria-expanded="false" class=""><a href="#"><a href="#">Nail treatment</a></a></h6>
                <ul aria-hidden="true" style="display: none;">
                    <li><a href="#">Nail tratment 1</a></li>
                    <li><a href="#">Nail tratment 2</a></li>
                </ul>
                Accordion item 2 end-->
            </div>
        </aside>
    </div>
</div>
