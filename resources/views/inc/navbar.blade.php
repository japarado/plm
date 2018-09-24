<nav class="navbar navbar-default main-navigation" role="navigation" data-spy="affix" data-offset-top="50">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('img/PLM.png') }}" alt=""></a>
        </div>
        <!-- Brand End -->

        <!-- Collapse Navbar -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
                @auth
                    <li class="dropdown dropdown-toggle">
                        <a class="active" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="dropdown dropdown-toggle">
                        <a href="#" data-toggle="dropdown">Colleges<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" style="width: 300px;">
                            @foreach(App\College::all() as $college)
                                <li><a href="{{ route('colleges.show',$college->id) }}">{{ $college->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @if(Auth::user()->type == 'PROFESSOR')
                        <li class="dropdown dropdown-toggle">
                            <a href="#" data-toggle="dropdown">Actions<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('courses.create') }}">Create Course</a></li>
                                <li><a href="{{ route('profiles.create') }}">Upload a File</a></li>
                            </ul>
                        </li>
                    @endif
                @endauth
            </ul>
            <!-- Mobile Menu End -->
        </div>
    </div>
</nav>
