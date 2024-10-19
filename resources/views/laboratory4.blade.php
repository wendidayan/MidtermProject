<!-- resources/views/laboratory4.blade.php -->
@extends('Components.layout1') <!-- This extends your Layout.blade.php -->
@section('title', 'Laboratory 4') <!-- This sets the title section -->
@section('content') <!-- This defines the content section -->
<section class="hero-section hero-50 d-flex justify-content-center align-items-center" id="section_1">

<div class="section-overlay"></div>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#777D94" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>

<div class="container">
    <div class="row">

        <div class="col-lg-6 col-12">

            <h1 class="text-white mb-4 pb-2">Laboratory 4</h1>

            <a href="#section_2" class="btn custom-btn smoothscroll me-3">Explore Project</a>
        </div>

    </div>
</div>

<svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="#ffffff" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0"></path> <path fill="#ffffff" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z" stroke-width="0"></path><path fill="#ffffff" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z" stroke-width="0"></path></svg>
</section>


<section class="about-section section-padding" id="section_2">
    <div class="container">
        <div class="col-lg-12 col-12 text-center">
                <h2 class="mb-lg-5 mb-4">Fourth Laravel Project (Middleware)</h2>
        </div>
    <div class="image-gallery">
        <div class="image-container">
            <img src="images/w10.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">Age Verification Modal</div>
            </div>
        </div>
    
        <div class="image-container">
            <img src="images/w11.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">Access Denied Page</div>
            </div>
        </div>   

        <div class="image-container">
            <img src="images/w12.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">Restricted Page</div>
            </div>
        </div>   

        <div class="image-container">
            <img src="images/p1.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">Log In Page</div>
            </div>
        </div>
    
        <div class="image-container">
            <img src="images/p2.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">Welcome Page</div>
            </div>
        </div>
    
        <div class="image-container">
            <img src="images/p4.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">About Page</div>
            </div>
        </div>

        <div class="image-container">
            <img src="images/p5.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">Contact Page</div>
            </div>
        </div>
    </div>


    <div class="learning-section">
        <h2>Description</h2>
            <p>
            This project focuses on creating custom middleware in a Laravel application, 
            specifically the CheckAge and LogRequests classes. The CheckAge middleware 
            checks if a user's age is 18 or older, redirecting those who do not meet this 
            requirement to an Access Denied page, while the LogRequests middleware logs all 
            HTTP request details to a file named log.txt. Both middleware were assigned to specific 
            routes, showcasing the effective use of custom middleware to enhance application 
            functionality and security.
            </p>
        </div>

    <div class="image-gallery">
        <div class="image-container">
            <img src="images/w1.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">CheckAge.php</div>
            </div>
        </div>

        <div class="image-container">
            <img src="images/w2.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">LogRequests.php</div>
            </div>
        </div>

        <div class="image-container">
            <img src="images/w4.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">Kernel.php</div>
            </div>
        </div>

        <div class="image-container">
            <img src="images/w3.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">logging.php</div>
            </div>
        </div>

        <div class="image-container">
            <img src="images/w6.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">log.txt</div>
            </div>
        </div>

        <div class="image-container">
            <img src="images/y1.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">Components/Layout.blade.php</div>
            </div>
        </div>

        <div class="image-container">
            <img src="images/y2.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">Components/Layout.blade.php</div>
            </div>
        </div>

        <div class="image-container">
            <img src="images/y3.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">Components/Layout.blade.php</div>
            </div>
        </div>

        <div class="image-container">
            <img src="images/w7.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">username.blade.php</div>
            </div>
        </div>

        <div class="image-container">
            <img src="images/w5.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">access-denied.blade.php</div>
            </div>
        </div>

        <div class="image-container">
            <img src="images/r2.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">restricted-area.blade.php</div>
            </div>
        </div>

        <div class="image-container">
            <img src="images/y5.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">welcome.blade.php</div>
            </div>
        </div>
        
        <div class="image-container">
            <img src="images/y6.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">about.blade.php</div>
            </div>
        </div>

        <div class="image-container">
            <img src="images/y7.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">contact.blade.php</div>
            </div>
        </div>

        <div class="image-container">
            <img src="images/w8.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">routes/web.php</div>
            </div>
        </div>

        <div class="image-container">
            <img src="images/w9.png" alt="Lab 4">
            <div class="overlay">
                <div class="overlay-text">routes/web.php</div>
            </div>
        </div>
    </div>

    <div class="learning-section">
        <h2>Challenges</h2>
            <p>
            We faced several challenges during this project, particularly in 
            middleware registration due to the absence of the Kernel.php file. 
            Implementing age restrictions through middleware parameters also 
            proved difficult, requiring careful handling of input values. 
            Additionally, customizing the logging.php configuration for the LogRequests 
            middleware presented challenges in ensuring proper logging functionality.
            </p>
        </div>
    </div>
</section>



<section class="section-bg-image">
    <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z" stroke-width="0"></path></svg>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12">
                <div class="section-bg-image-block">
                    <h2 class="mb-lg-3">What I Learned</h2>
                        <p>I learned to create and implement custom middleware 
                            in Laravel for age validation and request logging. 
                            I also gained insights into handling parameters in middleware 
                            and customizing logging settings to track HTTP requests 
                            effectively. 
                        </p>
                    </div> 
                </div>
            </div>
        </div>
    <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z" stroke-width="0"></path></svg>
</section>

<section class="contact-section section-padding" id="section_3">
    <div class="container">
        <div class="challenges-section">
            <h2>Summary</h2>
                <p>
                This project involved developing custom middleware in a 
                Laravel application, including the CheckAge and LogRequests classes. 
                The CheckAge middleware verifies users' ages, redirecting those 
                under 18 to an Access Denied page, while the LogRequests middleware 
                captures and logs HTTP request details in a file. By integrating 
                both middleware into specific routes, the project illustrated how 
                middleware can enhance functionality and bolster security within the application..
                </p>
        </div>  
    </div>
</section>
<!-- End Hero Section  -->
@endsection