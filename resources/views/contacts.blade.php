<!-- resources/views/contacts.blade.php -->
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
                <a href="{{ url('/about') }}" class="btn custom-btn">My Story</a>

                <a href="#section_3" class="link smoothscroll">Contact Me</a>
            </div>
        </div>


    </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
</section>

<section class="contact-section section-padding" id="section_3">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-12">
                        <form action="#" method="post" class="custom-form contact-form" role="form">
                            <h2 class="mb-4 pb-2">Contact Me</h2>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="full-name" id="full-name" class="form-control" placeholder="Full Name" required="">
                                        
                                        <label for="floatingInput">Full Name</label>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12"> 
                                    <div class="form-floating">
                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required="">
                                        
                                        <label for="floatingInput">Email address</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="message" name="message" placeholder="Describe message here"></textarea>
                                        
                                        <label for="floatingTextarea">Message</label>
                                    </div>

                                    <button type="submit" class="form-control">Submit Form</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="contact-info mt-5">
                            <div class="contact-info-item">
                                <div class="contact-info-body">
                                    <strong>Sacnangan, Pilar, Sorsogon</strong>

                                    <p class="mt-2 mb-1">
                                        <a href="tel: 010-020-0340" class="contact-link">
                                            (020) 
                                            010-020-0340
                                        </a>
                                    </p>

                                    <p class="mb-0">
                                        <a href="#" class="contact-link">
                                            wendeellona@gmail.com
                                        </a>
                                    </p>
                                </div>

                                <div class="contact-info-footer">
                                    <a href="#">Directions</a>
                                </div>
                            </div>
                                <img src="images/myadd.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
  <!-- End Section  -->
  @endsection