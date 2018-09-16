<!-- Roof area Starts -->
<div id="roof" class="hidden-xs" style="background-color: maroon;">
    <div class="container">
        <!-- Wellcome Starts -->
        <div class="pull-left">
            <i class="fa fa-map-o" aria-hidden="true"></i> 1002, General Luna St., Intramuros, Manila
        </div>
        <!-- Wellcome End -->

        <!-- Quick Contacts Starts -->
        <div class="quick-contacts pull-right">
            <ul class="list-inline">
                <li><span><i class="fa fa-phone"></i> +632 643-2500</span></li>
                @guest
                    <li><span><a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a> / <a
                                href="{{ route('login') }}">Register</a></span></li>
                @else
                    <li><span class=""><a href="#"><span
                                    class="fa fa-user-circle"></span><span>{{ Auth::user()->name }}</span></a></span>
                    </li>
                    <li><span><a href="#"><span class="fa fa-id-card"></span><span>Profile</span></a></span></li>
                    {{--<li class="dropdown-menu">
                        <a href="#">{{ Auth::user()->name }}</a>
                        <span class="caret"></span>
                        <ul class="dropdown">
                            <li><a href="#">Profile</a></li>
                            <li><a href="{{ route('logout') }}">Log out</a></li>
                        </ul>
                    </li>--}}
                    <li>
                        <span>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                        </span>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;" class="form-inline">
                        @csrf
                    </form>
                @endguest

            </ul>
            {{--<span><i class="fa fa-phone"></i> +61 2 9385 1000</span>
            <span><i class="fa fa-envelope"></i><a href="#">@plm.edu.ph</a></span>
            @guest
                <span><a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a> / <a
                            href="{{ route('register') }}">Register</a></span>
            @else
                <span>{{ Auth::user()->name }}</span>
                <span></span>
            @endguest--}}
        </div>
        <!-- Quick Contacts End -->
    </div>
</div>
<!-- Roof area End -->
