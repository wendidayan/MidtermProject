<!-- resources/views/about.blade.php -->
@extends('Components.layout1') <!-- This extends your Layout.blade.php -->
@section('title', 'Wendee Diane Llona Project') <!-- This sets the title section -->

@section('content') <!-- This defines the content section -->

<section class="hero-section d-flex justify-content-center align-items-center">

<div class="section-overlay"></div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#777D94" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>

<div class="container">
    <div class="row">

        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
        <h2 class="text-white">Welcome, {{ $username ?? 'Guest' }}!</h2>

            <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                <span>I'm a</span>
                <span class="cd-words-wrapper">
                    <b class="is-visible">BSIT student</b>
                    <b>Tech Enthusiast</b>
                    <b>Problem Solver</b>
                </span>
            </h1>

            <div class="custom-btn-group">
                <a href="#section_2" class="btn custom-btn smoothscroll me-3">My Story</a>

                <a href="{{ url('/contacts') }}" class="link">Contact Me</a>
            </div>
        </div>


    </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
</section>

<section class="about-section section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h2 class="mb-lg-5 mb-4">About Me</h2>
                    </div>

                    <div class="col-lg-5 col-12 me-auto mb-4 mb-lg-0">
                        <h3 class="mb-3">Profile Summary</h3>

                        <p><strong>As a third-year BSIT student</strong>, I'm passionate about computer studies and dedicated to learning. My academic journey has equipped me with a solid foundation in programming and a comprehensive understanding of modern technology trends.</p>

                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                        <div class="member-block">
                            <div class="member-block-image-wrap">
                                <img src="images/me.png" class="member-block-image img-fluid" alt="Profile">

                                <ul class="social-icon">
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-facebook"
                                        style="display:flex; text-align: center; 
                                          justify-content: center; align-items: center;"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-instagram"
                                        style="display:flex; text-align: center; 
                                          justify-content: center; align-items: center;"></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="member-block-info d-flex align-items-center">
                                <h5>Wendee</h5>

                                <p class="ms-auto">Student</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="member-block">
                            <div class="member-block-image-wrap">
                                <img src="images/bicolU.png" class="member-block-image img-fluid" alt="">

                                <ul class="social-icon">
                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-facebook"
                                        style="display:flex; text-align: center; 
                                          justify-content: center; align-items: center;"></a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="#" class="social-icon-link bi-instagram"
                                        style="display:flex; text-align: center; 
                                          justify-content: center; align-items: center;"></a>
                                    </li>
                                </ul>

                            </div>

                            <div class="member-block-info d-flex align-items-center">
                                <h5>Bicol University</h5>

                                <p class="ms-auto">School</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
  <!-- End Section  -->
  @endsection