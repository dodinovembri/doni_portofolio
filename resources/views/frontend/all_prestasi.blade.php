@extends('layouts.app')

@section('content')
<div class="body">
    <header id="header" class="header-floating-icons" data-plugin-options="{'stickyEnabled': false, 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': false, 'stickyStartAt': 0, 'stickySetTop': '60px', 'stickyChangeLogo': false}">
        <div class="header-body">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row">
                            <div class="header-nav pt-1">
                                <div class="header-nav-main">
                                    <nav class="wrapper-spy collapse">
                                        <ul class="nav" id="mainNav">
                                            <li>
                                                <a data-hash href="{{url('/#about-me')}}" class="nav-link text-color-dark bg-color-primary">
                                                    <i class="icon-home icons"></i>
                                                    <span class="custom-tooltip">About Me</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-hash href="#portfolio" class="nav-link text-color-dark bg-color-primary">
                                                    <i class="icon-diamond icons"></i>
                                                    <span class="custom-tooltip">Prestasi</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div role="main" class="main">

    <section id="about-me" class="section section-no-border section-parallax custom-section-padding-1 custom-position-1 custom-xs-bg-size-cover parallax-no-overflow m-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{asset('tmp/img/demos/resume/about-me/about-me-bg-1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 custom-sm-margin-bottom-1">
                    <img src="{{asset('tmp/img/demos/resume/about-me/me.jpg')}}" class="img-fluid custom-border custom-image-position-2 custom-box-shadow-4" alt />
                </div>
                <div class="col-lg-6 col-xl-5">
                    <h1 class="text-color-primary custom-font-size-1">Doni Firnando</h1>
                    <p class="text-color-light font-weight-normal custom-font-size-2 custom-margin-bottom-1">Sarjana Administrasi Publik (S.AP)</p>
                    <span class="custom-about-me-infos">
                        <span class="custom-text-color-1 text-uppercase">Kenali, 29 September 1997</span>
                        <span class="custom-text-color-1 text-uppercase mb-3">Information Technology &amp; Services</span>
                        <span class="custom-text-color-1 text-uppercase">Public Speaking And Strategi Marketing Media Sosial</span>
                        <span class="custom-text-color-1 text-uppercase">
                            <strong class="text-color-light">Education: </strong>
                            Universitas Sriwijaya
                            <a data-hash href="#education" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1 ml-2">View More</a>
                        </span>
                    </span>
                </div>
                <div class="col-lg-2 col-xl-3 d-none d-lg-block">
                    <img src="{{asset('tmp/img/demos/resume/about-me/mouse.png')}}" custom-anim class="img-fluid custom-image-pos-1" alt />
                </div>
            </div>
        </div>
        <ul class="social-icons custom-social-icons">
            <li class="social-icons-facebook">
                <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li class="social-icons-twitter">
                <a href="http://www.twitter.com/" target="_blank" title="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="social-icons-youtube">
                <a href="http://www.youtube.com/" target="_blank" title="Youtube">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
        </ul>
    </section>

    <div class="custom-about-me-links bg-color-light">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-3 text-center custom-xs-border-bottom p-0">
                    <a data-hash href="#say-hello" class="text-decoration-none">
                        <span class="custom-nav-button text-color-dark">
                            <i class="icon-earphones-alt icons text-color-primary"></i>
                            Contact Information 
                        </span>
                    </a>
                </div>
                <div class="col-lg-2 text-center custom-xs-border-bottom p-0">
                    <a data-hash href="#say-hello" class="text-decoration-none">
                        <span class="custom-nav-button custom-divisors text-color-dark">
                            <i class="icon-envelope-open icons text-color-primary"></i>
                            Send Message    
                        </span>
                    </a>
                </div>
                <div class="col-lg-3 text-center p-0">
                    <a href="#" class="text-decoration-none">
                        <span class="custom-nav-button text-color-dark">
                            <i class="icon-cloud-download icons text-color-primary"></i>
                            Download Resume 
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="section section-no-border bg-color-light m-0">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="custom-box-details bg-color-light custom-box-shadow-1 col-lg-6 ml-5 mb-5 mb-lg-4 float-right clearfix">
                        <h4>Personal Details</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="custom-list-style-1 p-0 mb-0">
                                    <li>
                                        <span class="text-color-dark">Birthday:</span>
                                        <span class="custom-text-color-2">29 September 1997</span>
                                    </li>
                                    <li>
                                        <span class="text-color-dark">Marital:</span>
                                        <span class="custom-text-color-2">Single</span>
                                    </li>
                                    <li>
                                        <span class="text-color-dark">Nationality:</span>
                                        <span class="custom-text-color-2">Indonesia</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="custom-list-style-1 p-0 mb-0">
                                    <li>
                                        <span class="text-color-dark">LinkInd:</span>
                                        <span class="custom-text-color-2"><a class="custom-text-color-2" href="skype:yourskype?chat">Doni Firnando</a></span>
                                    </li>
                                    <li>
                                        <span class="text-color-dark">PHONE:</span>
                                        <span class="custom-text-color-2"><a class="custom-text-color-2" href="tel:123456789">+6282269218380</a></span>
                                    </li>
                                    <li>
                                        <span class="text-color-dark">EMAIL:</span>
                                        <span class="custom-text-color-2"><a class="custom-text-color-2" href="mailto:me@domain.com">donifirnando97@gmail.com</a></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-color-quaternary font-weight-extra-bold text-uppercase">About Me</h2>

                    <p class="custom-text-color-2">I am a person of discipline and responsibility. Being used to recording what activities I have to do every day is very helpful in completing work in detail and trying not to be negligent at work. Creative is my specialty, working hard to always look for alternatives to various problems as dedication and as an effort to learn to improve my knowledge, skills and career.</p>

                    <div class="about-me-more" id="aboutMeMore">
                        <p>I am a person of discipline and responsibility. Being used to recording what activities I have to do every day is very helpful in completing work in detail and trying not to be negligent at work. Creative is my specialty, working hard to always look for alternatives to various problems as dedication and as an effort to learn to improve my knowledge, skills and career.</p>

                        <p>Proin euismod ipsum a tellus condimentum dapibus. Integer porttitor felis elit, eget rutrum ligula commodo quis. Praesent ultricies neque eu mi congue blandit. Nulla feugiat feugiat aliquet. Morbi sed mattis erat. Nullam scelerisque molestie eros, id tristique felis iaculis non. Duis pellentesque neque eget iaculis varius. Donec at nisl semper, aliquam est id, tincidunt lacus. Donec at erat purus.</p>

                        <p>Morbi tincidunt nunc non diam porta, at fermentum orci bibendum. Donec arcu nisi, ornare nec commodo vitae, sollicitudin sed magna. Cras sit amet justo et nulla pulvinar laoreet. Phasellus scelerisque, metus id posuere vulputate, diam tellus iaculis sapien, eget scelerisque ipsum libero convallis velit. Duis lorem ligula, faucibus quis tellus nec, fringilla ultricies leo. Etiam tempus congue magna. Suspendisse porta dictum tortor, eu volutpat ipsum eleifend nec. Aliquam dapibus lorem luctus, cursus libero imperdiet, mattis nunc. Sed in ipsum diam. Quisque efficitur metus purus, vitae fermentum lacus venenatis id.</p>
                    </div>

                    <a id="aboutMeMoreBtn" class="btn btn-tertiary text-uppercase custom-btn-style-1 text-1" href="#">View More</a>

                </div>
            </div>
        </div>
    </section>

<section id="prestasi" class="section section-no-border bg-color-light m-0">
    <div class="container pt-2 pb-4">
                    <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Prestasi</h2>

                        <div class="row pb-4 mb-2">
                            <div class="col-md-6 mb-4 mb-md-0 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">

                                <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mt-3 owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}" style="height: auto;">
                                    
                                    
                                    
                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-340px, 0px, 0px); transition: all 0s ease 0s; width: 1020px;"><div class="owl-item" style="width: 330px; margin-right: 10px;"><div>
                                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                            <img src="{{asset('tmp/img/projects/1.jpeg')}}" class="img-fluid border-radius-0" alt="">
                                        </div>
                                    </div></div><div class="owl-item active" style="width: 330px; margin-right: 10px;"><div>
                                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                            <img src="{{asset('tmp/img/projects/2.jpeg')}}" class="img-fluid border-radius-0" alt="">
                                        </div>
                                    </div></div><div class="owl-item" style="width: 330px; margin-right: 10px;"><div>
                                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                            <img src="{{asset('tmp/img/projects/3.jpeg')}}" class="img-fluid border-radius-0" alt="">
                                        </div>
                                    </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div><div class="owl-dots disabled"></div></div>

                                <hr class="solid my-5 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">

                                <div class="appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100" style="animation-delay: 1100ms;">
                                    <strong class="text-uppercase text-1 mr-3 text-dark float-left position-relative top-2">Share</strong>
                                    <ul class="social-icons">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="overflow-hidden">
                                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="600" style="animation-delay: 600ms;"><strong class="font-weight-extra-bold">International Conference</strong></h2>
                                </div>
                                <p class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">Best Presentation in International Conference on Social Entrepreneurship, Economics and Management Studies, Osaka Japan.</p>

                                <div class="overflow-hidden mt-4">
                                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">Information <strong class="font-weight-extra-bold">Details</strong></h2>
                                </div>
                                <ul class="list list-icons list-primary list-borders text-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Pelaksana:</strong> MRRDS</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Date:</strong> April 2019</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Skills:</strong> <a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">Author</a><a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">Presenter</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row pb-4 mb-2">
                            <div class="col-md-6">
                                <div class="overflow-hidden">
                                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="600" style="animation-delay: 600ms;"> <strong class="font-weight-extra-bold">Esai Nasional</strong></h2>
                                </div>
                                <p class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">Juara 2 Lomba Esai Nasional, Universitas Andalas, Sumatera Barat.</p>

                                <div class="overflow-hidden mt-4">
                                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">Information <strong class="font-weight-extra-bold">Details</strong></h2>
                                </div>
                                <ul class="list list-icons list-primary list-borders text-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Pelaksana:</strong> FISIP Universitas Andalas</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Date:</strong> September 2017</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Skills:</strong> <a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">Author</a><a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">Presenter</a></li>
                                </ul>
                            </div>                            
                            <div class="col-md-6 mb-4 mb-md-0 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">

                                <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mt-3 owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}" style="height: auto;">
                                    
                                    
                                    
                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-340px, 0px, 0px); transition: all 0s ease 0s; width: 1020px;"><div class="owl-item" style="width: 330px; margin-right: 10px;"><div>
                                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                            <img src="{{asset('tmp/img/projects/4.jpeg')}}" class="img-fluid border-radius-0" alt="">
                                        </div>
                                    </div></div><div class="owl-item active" style="width: 330px; margin-right: 10px;"><div>
                                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                            <img src="{{asset('tmp/img/projects/5.jpeg')}}" class="img-fluid border-radius-0" alt="">
                                        </div>
                                    </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div><div class="owl-dots disabled"></div></div>

                                <hr class="solid my-5 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">

                                <div class="appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100" style="animation-delay: 1100ms;">
                                    <strong class="text-uppercase text-1 mr-3 text-dark float-left position-relative top-2">Share</strong>
                                    <ul class="social-icons">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="row pb-4 mb-2">
                            <div class="col-md-6 mb-4 mb-md-0 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">

                                <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mt-3 owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}" style="height: auto;">
                                    
                                    
                                    
                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-340px, 0px, 0px); transition: all 0s ease 0s; width: 1020px;"><div class="owl-item" style="width: 330px; margin-right: 10px;"><div>
                                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                            <img src="{{asset('tmp/img/projects/6.jpeg')}}" class="img-fluid border-radius-0" alt="">
                                        </div>
                                    </div></div><div class="owl-item active" style="width: 330px; margin-right: 10px;"><div>
                                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                            <img src="{{asset('tmp/img/projects/7.jpeg')}}" class="img-fluid border-radius-0" alt="">
                                        </div>
                                    </div></div><div class="owl-item" style="width: 330px; margin-right: 10px;"><div>
                                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                            <img src="{{asset('tmp/img/projects/8.jpeg')}}" class="img-fluid border-radius-0" alt="">
                                        </div>
                                    </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div><div class="owl-dots disabled"></div></div>

                                <hr class="solid my-5 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">

                                <div class="appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100" style="animation-delay: 1100ms;">
                                    <strong class="text-uppercase text-1 mr-3 text-dark float-left position-relative top-2">Share</strong>
                                    <ul class="social-icons">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="overflow-hidden">
                                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="600" style="animation-delay: 600ms;"> <strong class="font-weight-extra-bold">Karya Tulis Ilmiah Nasional</strong></h2>
                                </div>
                                <p class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">Juara 3 Lomba Karya Tulis Ilmiah Nasional, Universitas Lampung.</p>

                                <div class="overflow-hidden mt-4">
                                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">Information <strong class="font-weight-extra-bold">Details</strong></h2>
                                </div>
                                <ul class="list list-icons list-primary list-borders text-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Pelaksana:</strong> HIMAGARA UNILA</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Date:</strong> Mei 2018</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Skills:</strong> <a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">Author</a><a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">Presenter</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row pb-4 mb-2">
                            <div class="col-md-6">
                                <div class="overflow-hidden">
                                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="600" style="animation-delay: 600ms;"> <strong class="font-weight-extra-bold">Karya Tulis Ilmiah Nasional</strong></h2>
                                </div>
                                <p class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">Juara 3 Lomba Karya Tulis Ilmiah Nasional pada Parade Tambang, Universitas Sriwijaya.</p>

                                <div class="overflow-hidden mt-4">
                                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">Information <strong class="font-weight-extra-bold">Details</strong></h2>
                                </div>
                                <ul class="list list-icons list-primary list-borders text-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Pelaksana:</strong> PERMATA FT UNSRI</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Date:</strong> April 2018</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Skills:</strong> <a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">Author</a><a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">Presenter</a></li>
                                </ul>
                            </div>                            
                            <div class="col-md-6 mb-4 mb-md-0 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">

                                <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mt-3 owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}" style="height: auto;">
                                    
                                    
                                    
                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-340px, 0px, 0px); transition: all 0s ease 0s; width: 1020px;"><div class="owl-item" style="width: 330px; margin-right: 10px;"><div>
                                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                            <img src="{{asset('tmp/img/projects/9.jpeg')}}" class="img-fluid border-radius-0" alt="">
                                        </div>
                                    </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div><div class="owl-dots disabled"></div></div>

                                <hr class="solid my-5 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">

                                <div class="appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100" style="animation-delay: 1100ms;">
                                    <strong class="text-uppercase text-1 mr-3 text-dark float-left position-relative top-2">Share</strong>
                                    <ul class="social-icons">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="row pb-4 mb-2">
                            <div class="col-md-6 mb-4 mb-md-0 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">

                                <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mt-3 owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}" style="height: auto;">
                                    
                                    
                                    
                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-340px, 0px, 0px); transition: all 0s ease 0s; width: 1020px;"><div class="owl-item" style="width: 330px; margin-right: 10px;"><div>
                                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                            <img src="{{asset('tmp/img/projects/10.jpeg')}}" class="img-fluid border-radius-0" alt="">
                                        </div>
                                    </div></div><div class="owl-item active" style="width: 330px; margin-right: 10px;"><div>
                                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                            <img src="{{asset('tmp/img/projects/11.jpeg')}}" class="img-fluid border-radius-0" alt="">
                                        </div>
                                    </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div><div class="owl-dots disabled"></div></div>

                                <hr class="solid my-5 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">

                                <div class="appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100" style="animation-delay: 1100ms;">
                                    <strong class="text-uppercase text-1 mr-3 text-dark float-left position-relative top-2">Share</strong>
                                    <ul class="social-icons">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="overflow-hidden">
                                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="600" style="animation-delay: 600ms;"> <strong class="font-weight-extra-bold">Menulis </strong></h2>
                                </div>
                                <p class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">Juara 2 Menulis tentang Kopi, Songket dan Wisata Sumatera Selatan.</p>

                                <div class="overflow-hidden mt-4">
                                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">Information <strong class="font-weight-extra-bold">Details</strong></h2>
                                </div>
                                <ul class="list list-icons list-primary list-borders text-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Pelaksana:</strong> SUMEKS</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Date:</strong> Juli 2018</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Skills:</strong> <a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">Author</a><a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">Presenter</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row pb-4 mb-2">
                            <div class="col-md-6">
                                <div class="overflow-hidden">
                                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="600" style="animation-delay: 600ms;"> <strong class="font-weight-extra-bold">Parade Cinta Tanah Air</strong></h2>
                                </div>
                                <p class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">Juara 3 Parade Cinta Tanah Air (PCTA), Sumatera Selatan.</p>

                                <div class="overflow-hidden mt-4">
                                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">Information <strong class="font-weight-extra-bold">Details</strong></h2>
                                </div>
                                <ul class="list list-icons list-primary list-borders text-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Pelaksana:</strong> KEMENKUMHAM</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Date:</strong> Juli 2018</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Skills:</strong> <a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">Author</a><a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">Presenter</a></li>
                                </ul>
                            </div>                            
                            <div class="col-md-6 mb-4 mb-md-0 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">

                                <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mt-3 owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}" style="height: auto;">
                                    
                                    
                                    
                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-340px, 0px, 0px); transition: all 0s ease 0s; width: 1020px;"><div class="owl-item" style="width: 330px; margin-right: 10px;"><div>
                                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                            <img src="{{asset('tmp/img/projects/12.jpeg')}}" class="img-fluid border-radius-0" alt="">
                                        </div>
                                    </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div><div class="owl-dots disabled"></div></div>

                                <hr class="solid my-5 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">

                                <div class="appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100" style="animation-delay: 1100ms;">
                                    <strong class="text-uppercase text-1 mr-3 text-dark float-left position-relative top-2">Share</strong>
                                    <ul class="social-icons">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>     

                        <div class="row pb-4 mb-2">
                            <div class="col-md-6 mb-4 mb-md-0 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">

                                <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mt-3 owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}" style="height: auto;">
                                    
                                    
                                    
                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-340px, 0px, 0px); transition: all 0s ease 0s; width: 1020px;"><div class="owl-item" style="width: 330px; margin-right: 10px;"><div>
                                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                            <img src="{{asset('tmp/img/projects/16.jpeg')}}" class="img-fluid border-radius-0" alt="">
                                        </div>
                                    </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div><div class="owl-dots disabled"></div></div>

                                <hr class="solid my-5 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">

                                <div class="appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100" style="animation-delay: 1100ms;">
                                    <strong class="text-uppercase text-1 mr-3 text-dark float-left position-relative top-2">Share</strong>
                                    <ul class="social-icons">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="overflow-hidden">
                                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="600" style="animation-delay: 600ms;"> <strong class="font-weight-extra-bold">Program Mahasiswa Wirausaha</strong></h2>
                                </div>
                                <p class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">Pemenang Program Mahasiswa Wirausaha, Universitas Sriwijaya.</p>

                                <div class="overflow-hidden mt-4">
                                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">Information <strong class="font-weight-extra-bold">Details</strong></h2>
                                </div>
                                <ul class="list list-icons list-primary list-borders text-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Pelaksana:</strong> Universitas Sriwijaya</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Date:</strong> Oktober 2018</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Skills:</strong> <a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">Author</a><a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">Presenter</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row pb-4 mb-2">
                            <div class="col-md-6">
                                <div class="overflow-hidden">
                                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="600" style="animation-delay: 600ms;"> <strong class="font-weight-extra-bold">Kompetisi Bisnis Mahasiswa Indonesia</strong></h2>
                                </div>
                                <p class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">Penerima Dana Kompetisi Bisnis Mahasiswa Indonesia, Kemenristekdikti.</p>

                                <div class="overflow-hidden mt-4">
                                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">Information <strong class="font-weight-extra-bold">Details</strong></h2>
                                </div>
                                <ul class="list list-icons list-primary list-borders text-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Pelaksana:</strong> Kemenristekdikti</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Date:</strong> Mei 2019</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Skills:</strong> <a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">Founder</a><a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">Presenter</a></li>
                                </ul>
                            </div>                            
                            <div class="col-md-6 mb-4 mb-md-0 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">

                                <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mt-3 owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}" style="height: auto;">
                                    
                                    
                                    
                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-340px, 0px, 0px); transition: all 0s ease 0s; width: 1020px;"><div class="owl-item" style="width: 330px; margin-right: 10px;"><div>
                                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                            <img src="{{asset('tmp/img/projects/17.jpeg')}}" class="img-fluid border-radius-0" alt="">
                                        </div>
                                    </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div><div class="owl-dots disabled"></div></div>

                                <hr class="solid my-5 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">

                                <div class="appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100" style="animation-delay: 1100ms;">
                                    <strong class="text-uppercase text-1 mr-3 text-dark float-left position-relative top-2">Share</strong>
                                    <ul class="social-icons">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="row pb-4 mb-2">
                            <div class="col-md-6 mb-4 mb-md-0 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">

                                <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mt-3 owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}" style="height: auto;">
                                    
                                    
                                    
                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-340px, 0px, 0px); transition: all 0s ease 0s; width: 1020px;"><div class="owl-item" style="width: 330px; margin-right: 10px;"><div>
                                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                            <img src="{{asset('tmp/img/projects/18.jpeg')}}" class="img-fluid border-radius-0" alt="">
                                        </div>
                                    </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div><div class="owl-dots disabled"></div></div>

                                <hr class="solid my-5 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">

                                <div class="appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100" style="animation-delay: 1100ms;">
                                    <strong class="text-uppercase text-1 mr-3 text-dark float-left position-relative top-2">Share</strong>
                                    <ul class="social-icons">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="overflow-hidden">
                                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="600" style="animation-delay: 600ms;"> <strong class="font-weight-extra-bold">Kewirausahaan Mahasiswa Indonesia  Award </strong></h2>
                                </div>
                                <p class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">Peserta Expo dan Kewirausahaan Mahasiswa Indonesia  Award, Politeknik Negeri Batam.</p>

                                <div class="overflow-hidden mt-4">
                                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">Information <strong class="font-weight-extra-bold">Details</strong></h2>
                                </div>
                                <ul class="list list-icons list-primary list-borders text-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Pelaksana:</strong> Kemenristekdikti</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Date:</strong> Oktober 2019</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Skills:</strong> <a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">Author</a><a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">Presenter</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row pb-4 mb-2">
                            <div class="col-md-6">
                                <div class="overflow-hidden">
                                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="600" style="animation-delay: 600ms;"> <strong class="font-weight-extra-bold">Delegasi IYCF</strong></h2>
                                </div>
                                <p class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">Delegasi Sumsel pada Indonesian Youth Colaboration Forum, Bali.</p>
                                <div class="overflow-hidden mt-4">
                                    <h2 class="text-color-dark font-weight-normal text-4 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">Information <strong class="font-weight-extra-bold">Details</strong></h2>
                                </div>
                                <ul class="list list-icons list-primary list-borders text-2 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Pelaksana:</strong> IYCF</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Date:</strong> Februari 2018</li>
                                    <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Skills:</strong> <a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">Author</a><a href="#" class="badge badge-dark badge-sm badge-pill px-2 py-1 ml-1">Presenter</a></li>
                                </ul>                            </div>                            
                            <div class="col-md-6 mb-4 mb-md-0 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">

                                <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark mt-3 owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false}" style="height: auto;">
                                    
                                    
                                    
                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-340px, 0px, 0px); transition: all 0s ease 0s; width: 1020px;"><div class="owl-item" style="width: 330px; margin-right: 10px;"><div>
                                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                            <img src="{{asset('tmp/img/projects/15.jpeg')}}" class="img-fluid border-radius-0" alt="">
                                        </div>
                                    </div></div><div class="owl-item active" style="width: 330px; margin-right: 10px;"><div>
                                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                            <img src="{{asset('tmp/img/projects/13.jpeg')}}" class="img-fluid border-radius-0" alt="">
                                        </div>
                                    </div></div><div class="owl-item" style="width: 330px; margin-right: 10px;"><div>
                                        <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                            <img src="{{asset('tmp/img/projects/14.jpeg')}}" class="img-fluid border-radius-0" alt="">
                                        </div>
                                    </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"></button><button type="button" role="presentation" class="owl-next"></button></div><div class="owl-dots disabled"></div></div>

                                <hr class="solid my-5 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">

                                <div class="appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100" style="animation-delay: 1100ms;">
                                    <strong class="text-uppercase text-1 mr-3 text-dark float-left position-relative top-2">Share</strong>
                                    <ul class="social-icons">
                                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>                                                                    
    </div>
</section>

    <footer id="footer" class="m-0 p-0">
        <div class="footer-copyright bg-color-light m-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-0">
                        <p class="custom-text-color-2">© Copyright 2019. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
