@extends('layouts.base')

@section('title')
    Home
@endsection

@section('content')
<div class="about section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="about-header">
                    <h3 class="medium-title">Welcome Students</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias laudantium nemo eveniet
                        excepturi, suscipit amet illo autem quasi, sequi illum quisquam doloremque est magni
                        accusamus
                        quo, officia voluptates temporibus cum. Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit.</p>
                </div>
                <ul class="info-list">
                    <li><a href="#"><i class="fa fa-check"></i> Narwhal quinoa sriacha organic.</a></li>
                    <li><a href="#"><i class="fa fa-check"></i> Artisan paleo flannel, polaroid umami franzen.</a>
                    </li>
                    <li><a href="#"><i class="fa fa-check"></i> Sriracha vegan typewriter tofu gentrify.</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="img-thumb">
                    <img src="{{ asset('img/plm/pages/university-pic.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection