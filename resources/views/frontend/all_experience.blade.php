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
                                                <a data-hash href="#experience" class="nav-link text-color-dark bg-color-primary">
                                                    <i class="icon-eye icons"></i>
                                                    <span class="custom-tooltip">Experience</span>
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

    <section id="experience" class="section section-secondary section-no-border m-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Experience</h2>
                    <section class="timeline custom-timeline" id="timeline">
                        <div class="timeline-body">
                            <article class="timeline-box right custom-box-shadow-2">
                                <div class="row">
                                    <div class="experience-info col-lg-3 col-sm-5 bg-color-primary">
                                        <span class="from text-color-dark text-uppercase">
                                            From
                                            <span class="font-weight-semibold">2019</span>
                                        </span>
                                        <span class="to text-color-dark text-uppercase">
                                            To
                                            <span class="font-weight-semibold">Present</span>
                                        </span>
                                        <p class="text-color-dark">(3 Years 9 Months)</p>
                                        <span class="company text-color-dark font-weight-semibold">
                                            Okler Themes
                                            <span class="company-location text-color-dark font-weight-normal text-uppercase">Greater New York</span>
                                        </span>
                                    </div>
                                    <div class="experience-description col-lg-9 col-sm-7 bg-color-light">
                                        <h4 class="text-color-dark font-weight-semibold">CV. ERSELIA CITRA PERSADA</h4>
                                        <p class="custom-text-color-2">Administrasi Konsultan: Melakukan riset, membuat karya, membuat Kerangka Kerja (KAK), Pengajuan lelang, pemenangan dan Negosiasi.</p>
                                    </div>
                                </div>
                            </article>
                            <article class="timeline-box right custom-box-shadow-2">
                                <div class="row">
                                    <div class="experience-info col-lg-3 col-sm-5 bg-color-primary">
                                        <span class="from text-color-dark text-uppercase">
                                            From
                                            <span class="font-weight-semibold">Sep 2012</span>
                                        </span>
                                        <span class="to text-color-dark text-uppercase">
                                            To
                                            <span class="font-weight-semibold">Present</span>
                                        </span>
                                        <p class="text-color-dark">(3 Years 9 Months)</p>
                                        <span class="company text-color-dark font-weight-semibold">
                                            Okler Themes
                                            <span class="company-location text-color-dark font-weight-normal text-uppercase">Greater New York</span>
                                        </span>
                                    </div>
                                    <div class="experience-description col-lg-9 col-sm-7 bg-color-light">
                                        <h4 class="text-color-dark font-weight-semibold">ARCHIPELAGO INTERNASIONAL</h4>
                                        <p class="custom-text-color-2">Front Office (ASIAN GAMES): Bertugas menyambut tamu, komunikator,  verifikasi dokumen atlet dari berbagai negara untuk reservasi (check in/out), menginput data, dan menulis buku lost and found.</p>
                                    </div>
                                </div>
                            </article>
                            <article class="timeline-box right custom-box-shadow-2">
                                <div class="row">
                                    <div class="experience-info col-lg-3 col-sm-5 bg-color-primary">
                                        <span class="from text-color-dark text-uppercase">
                                            From
                                            <span class="font-weight-semibold">Sep 2012</span>
                                        </span>
                                        <span class="to text-color-dark text-uppercase">
                                            To
                                            <span class="font-weight-semibold">Present</span>
                                        </span>
                                        <p class="text-color-dark">(3 Years 9 Months)</p>
                                        <span class="company text-color-dark font-weight-semibold">
                                            Okler Themes
                                            <span class="company-location text-color-dark font-weight-normal text-uppercase">Greater New York</span>
                                        </span>
                                    </div>
                                    <div class="experience-description col-lg-9 col-sm-7 bg-color-light">
                                        <h4 class="text-color-dark font-weight-semibold">BPJS KESEHATAN KCP. PALEMBANG </h4>
                                        <p class="custom-text-color-2">Relationship Office:  Melakukan verifikasi dokumen, menginput, mengolah data calon peserta dan klaim serta melakuka n sosialisasi tentang program BPJSK.</p>
                                    </div>
                                </div>
                            </article>     
                            <article class="timeline-box right custom-box-shadow-2">
                                <div class="row">
                                    <div class="experience-info col-lg-3 col-sm-5 bg-color-primary">
                                        <span class="from text-color-dark text-uppercase">
                                            From
                                            <span class="font-weight-semibold">Sep 2012</span>
                                        </span>
                                        <span class="to text-color-dark text-uppercase">
                                            To
                                            <span class="font-weight-semibold">Present</span>
                                        </span>
                                        <p class="text-color-dark">(3 Years 9 Months)</p>
                                        <span class="company text-color-dark font-weight-semibold">
                                            Okler Themes
                                            <span class="company-location text-color-dark font-weight-normal text-uppercase">Greater New York</span>
                                        </span>
                                    </div>
                                    <div class="experience-description col-lg-9 col-sm-7 bg-color-light">
                                        <h4 class="text-color-dark font-weight-semibold">TIM PENELITIAN DOSEN</h4>
                                        <p class="custom-text-color-2"></p>
                                    </div>
                                </div>
                            </article>    
                            <article class="timeline-box right custom-box-shadow-2">
                                <div class="row">
                                    <div class="experience-info col-lg-3 col-sm-5 bg-color-primary">
                                        <span class="from text-color-dark text-uppercase">
                                            From
                                            <span class="font-weight-semibold">Sep 2012</span>
                                        </span>
                                        <span class="to text-color-dark text-uppercase">
                                            To
                                            <span class="font-weight-semibold">Present</span>
                                        </span>
                                        <p class="text-color-dark">(3 Years 9 Months)</p>
                                        <span class="company text-color-dark font-weight-semibold">
                                            Okler Themes
                                            <span class="company-location text-color-dark font-weight-normal text-uppercase">Greater New York</span>
                                        </span>
                                    </div>
                                    <div class="experience-description col-lg-9 col-sm-7 bg-color-light">
                                        <h4 class="text-color-dark font-weight-semibold">ASISTEN LABORATORIUM ADMINISTRASI PUBLIK</h4>
                                        <p class="custom-text-color-2"></p>
                                    </div>
                                </div>
                            </article>                                                                                                          
                            <div class="timeline-bar"></div>
                        </div>
                    </section>

                    <h2 class="text-color-quaternary text-uppercase font-weight-extra-bold">Organisasi</h2>
                    <section class="timeline custom-timeline" id="timeline">
                        <div class="timeline-body">
                            <article class="timeline-box right custom-box-shadow-2">
                                <div class="row">
                                    <div class="experience-info col-lg-3 col-sm-5 bg-color-primary">
                                        <span class="from text-color-dark text-uppercase">
                                            From
                                            <span class="font-weight-semibold">Sep 2012</span>
                                        </span>
                                        <span class="to text-color-dark text-uppercase">
                                            To
                                            <span class="font-weight-semibold">Present</span>
                                        </span>
                                        <p class="text-color-dark">(3 Years 9 Months)</p>
                                        <span class="company text-color-dark font-weight-semibold">
                                            Okler Themes
                                            <span class="company-location text-color-dark font-weight-normal text-uppercase">Greater New York</span>
                                        </span>
                                    </div>
                                    <div class="experience-description col-lg-9 col-sm-7 bg-color-light">
                                        <h4 class="text-color-dark font-weight-semibold">KETUA UMUM IKATAN KELUARGA MAHASISWA SAI BATAIN </h4>
                                        <p class="custom-text-color-2">Ketua Umum: Memimpin, mengkoordinir, berkomunikasi dan Bernegosiasi.</p>
                                    </div>
                                </div>
                            </article>  
                            <article class="timeline-box right custom-box-shadow-2">
                                <div class="row">
                                    <div class="experience-info col-lg-3 col-sm-5 bg-color-primary">
                                        <span class="from text-color-dark text-uppercase">
                                            From
                                            <span class="font-weight-semibold">Sep 2012</span>
                                        </span>
                                        <span class="to text-color-dark text-uppercase">
                                            To
                                            <span class="font-weight-semibold">Present</span>
                                        </span>
                                        <p class="text-color-dark">(3 Years 9 Months)</p>
                                        <span class="company text-color-dark font-weight-semibold">
                                            Okler Themes
                                            <span class="company-location text-color-dark font-weight-normal text-uppercase">Greater New York</span>
                                        </span>
                                    </div>
                                    <div class="experience-description col-lg-9 col-sm-7 bg-color-light">
                                        <h4 class="text-color-dark font-weight-semibold">UKM-UNSRI RISET DAN EDUKASI UNIVERSITAS SRIWIJAYA </h4>
                                        <p class="custom-text-color-2">Staff Khusus HRD: Berhasil membuat inovasi perekrutan dan mempertahankan 90% dari jumlah anggota yang bergabung.</p>
                                    </div>
                                </div>
                            </article>          
                            <div class="timeline-bar"></div>
                        </div>
                    </section>                    
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
