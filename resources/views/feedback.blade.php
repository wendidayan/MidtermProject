<!-- resources/views/feedback.blade.php -->
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

<section class="events-section section-padding">
    <div class="container1">
        <div class="cover1">
            <div class="front1">
                <img src="images/feed.png" alt="">
                <div class="text">
                    <span class="text-1">Your Feedback Matters</span><br>
                    <a href="#section_2" class="text-2">Send Your Feedback.</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="events-section section-bg section-padding blurred" id="section_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <h2 class="mb-lg-3">Your Feedback Here</h2>
            </div>
            
            <div class="row custom-block mb-3">
                <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                    <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                        <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">Lab1</h6>
                        
                        <strong class="text-white">Setup</strong>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                    <div class="custom-block-image-wrap">
                        <a href="{{ url('/laboratory1') }}">
                            <img src="images/l12.png" class="custom-block-image img-fluid" alt="">

                            <i class="custom-block-icon bi-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-12 order-3 order-lg-0">
                    <div class="custom-block-info mt-2 mt-lg-0">
                        <a href="{{ url('/laboratory1') }}" class="events-title mb-3">Views Activity</a>

                        <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message" placeholder="Describe message here"></textarea>
                                        
                                        <label for="floatingTextarea">Feedback</label>
                                    </div>
                        <div class="d-flex flex-wrap border-top mt-4 pt-3">

                            <div class="d-flex align-items-center ms-lg-auto">
                            <button class="btn custom-btn" onclick="showThankYouMessage()">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row custom-block custom-block-bg">
                <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                    <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                        <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">Lab2</h6>
                        
                        <strong class="text-white">Routes</strong>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                    <div class="custom-block-image-wrap">
                        <a href="{{ url('/laboratory2') }}">
                            <img src="images/p1.png" class="custom-block-image img-fluid" alt="">

                            <i class="custom-block-icon bi-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-12 order-3 order-lg-0">
                    <div class="custom-block-info mt-2 mt-lg-0">
                        <a href="{{ url('/laboratory2') }}" class="events-title mb-3">Routes Activity</a>

                        <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message" placeholder="Describe message here"></textarea>
                                        
                                        <label for="floatingTextarea">Feedback</label>
                                    </div>
                        <div class="d-flex flex-wrap border-top mt-4 pt-3">

                            <div class="mb-4 mb-lg-0">
                                <div class="d-flex flex-wrap align-items-center mb-1">
                                    
                                </div>

                                <div class="d-flex flex-wrap align-items-center">
                                  
                                </div>
                            </div>

                            <div class="d-flex align-items-center ms-lg-auto">
                            <button class="btn custom-btn" onclick="showThankYouMessage()">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="events-section section-bg section-padding">
    <div class="container">
        <div class="row">
            
            <div class="row custom-block mb-3">
                <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                    <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                        <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">Lab3</h6>
                        
                        <strong class="text-white">Layout</strong>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                    <div class="custom-block-image-wrap">
                        <a href="{{ url('/laboratory3') }}">
                            <img src="images/p2.png" class="custom-block-image img-fluid" alt="">

                            <i class="custom-block-icon bi-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-12 order-3 order-lg-0">
                    <div class="custom-block-info mt-2 mt-lg-0">
                        <a href="{{ url('/laboratory3') }}" class="events-title mb-3">Layout Activity</a>

                        <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message" placeholder="Describe message here"></textarea>
                                        
                                        <label for="floatingTextarea">Feedback</label>
                                    </div>
                        <div class="d-flex flex-wrap border-top mt-4 pt-3">

                            <div class="mb-4 mb-lg-0">
                                <div class="d-flex flex-wrap align-items-center mb-1">
                                    
                                </div>

                                <div class="d-flex flex-wrap align-items-center">
                                    
                                </div>
                            </div>

                            <div class="d-flex align-items-center ms-lg-auto">
                            <button class="btn custom-btn" onclick="showThankYouMessage()">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row custom-block custom-block-bg">
                <div class="col-lg-2 col-md-4 col-12 order-2 order-md-0 order-lg-0">
                    <div class="custom-block-date-wrap d-flex d-lg-block d-md-block align-items-center mt-3 mt-lg-0 mt-md-0">
                        <h6 class="custom-block-date mb-lg-1 mb-0 me-3 me-lg-0 me-md-0">Lab4</h6>
                        
                        <strong class="text-white">Middleware</strong>
                    </div>
                </div>

                <div class="col-lg-4 col-md-8 col-12 order-1 order-lg-0">
                    <div class="custom-block-image-wrap">
                        <a href="{{ url('/laboratory4') }}">
                            <img src="images/w10.png" class="custom-block-image img-fluid" alt="">

                            <i class="custom-block-icon bi-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-12 order-3 order-lg-0">
                    <div class="custom-block-info mt-2 mt-lg-0">
                        <a href="{{ url('/laboratory4') }}" class="events-title mb-3">Middleware Activity</a>

                        <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message" placeholder="Describe message here"></textarea>
                                        
                                        <label for="floatingTextarea">Feedback</label>
                                    </div>
                        <div class="d-flex flex-wrap border-top mt-4 pt-3">

                            
                            <div class="d-flex align-items-center ms-lg-auto">
                            <button class="btn custom-btn" onclick="showThankYouMessage()">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="contact-section section-padding" id="section_3">
        <div class="container">
    </div>
</section>

