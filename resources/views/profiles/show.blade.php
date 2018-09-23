@extends('layouts.base')

@section('content')
<section id="content" class="single-teacher">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="single-teacher-inner">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="thumb-img">
                                <img src="assets/img/teacher/img-01.jpg" alt="">
                            </div>
                            <div class="contact-teacher">
                                <h4>Contact me</h4>
                                <form class="teacher-form" role="form" method="post">
                                    <div class="form-group">
                                        <input class="form-control" name="username" type="text" placeholder="Full Name">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email"
                                               placeholder="Email Address">
                                    </div>
                                    <textarea class="form-control" placeholder="Write Message" rows="5"></textarea>
                                    <button type="submit" id="submit" class="btn btn-common">Send Message</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="teacher-info">
                                <div class="name section-heading">
                                    <h3>Julia Benjama</h3>
                                    <span>Math Teacher</span>
                                </div>
                                <div class="social-icon">
                                    <a class="social" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="social" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="social" href="#"><i class="fa fa-google-plus"></i></a>
                                    <a class="social" href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex ea qui, voluptas
                                        vitae pariatur nihil odit. Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Laudantium nisi repudiandae est molestias aut ullam, labore porro, nihil
                                        unde veritatis, vel. Iure, rerum, deleniti! Eveniet rerum commodi dignissimos
                                        itaque dicta.</p>
                                    <h4>Biography</h4>
                                    <p><strong>Teacher name was born in the middle of 70’s in the generation that swore
                                            to be young forever and with this young soul the teacher name saw your
                                            professional life arises so fast. Read the details below:</strong></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum eius dolorum
                                        officia debitis, quaerat dolor deleniti amet animi quo repudiandae, illo, beatae
                                        esse voluptatum numquam sequi iusto magni inventore recusandae? Lorem ipsum
                                        dolor sit amet, consectetur adipisicing elit. Qui, dolore! Maiores officiis cum
                                        aspernatur, eligendi enim. Minus cumque, unde rerum dolorum maxime illum,
                                        blanditiis suscipit ipsa nemo impedit laboriosam magni.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui amet autem
                                        laudantium repellat fuga, quisquam eaque expedita veritatis tenetur porro
                                        adipisci, soluta, numquam ad non laborum aliquid cum eos corporis. Lorem ipsum
                                        dolor sit amet, consectetur adipisicing elit. Illum nostrum doloribus
                                        perferendis. Explicabo minus, possimus optio laudantium modi, omnis, quod
                                        doloremque sequi illo assumenda dolorum repellat. Numquam doloremque ratione
                                        corporis.</p>
                                    <ul>
                                        <li><i class="fa fa-phone"></i>0 123 9874 321</li>
                                        <li><i class="fa fa-envelope"></i><a href="#"><span class="__cf_email__"
                                                                                            data-cfemail="7f150a13161e3f1a1b0a1c1e511c1012">[email&#160;protected]</span></a>
                                        </li>
                                        <li><i class="fa fa-skype"></i>julia-educa</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
