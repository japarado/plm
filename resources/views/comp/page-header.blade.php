<div class="page-header" style="background: url(@yield('header-image'));">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-wrapper">
                    <h2 class="page-title">@yield('banner-title')</h2>
                    <a href="{{ route('home') }}">Home</a>
                    <span>/</span>
                    <span class="current">@yield('title')</span>
                </div>
            </div>
        </div>
    </div>
</div>
