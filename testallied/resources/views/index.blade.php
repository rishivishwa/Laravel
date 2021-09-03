{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                
               
               

                
            </div>
        </div>
    </body>
</html> --}}



@extends('layouts.app')

@section('content')
<section class="hero-area section">
    <!-- Single Slider -->
    <div class="hero-inner">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                        <div class="hero-image">
                        <img src="assets/images/hero/Level-on-playing-fields-logo-png.png" alt="#" style="margin-top:100px; margin-bottom:0px;">
                        </div>
                        <div class="hero-text" style="padding-bottom:120px;">
                            <h3 class="wow fadeInUp" data-wow-delay=".3s">Basically, we at Level the Playing Field do two things, but we do both things pretty darn well:</h3>
                            <h5 class="wow fadeInUp" data-wow-delay=".4s">We help consumers, contractors, PAs and Plaintiff Attorneys overcome unreasonable claims departments so that consumers get righteous outcomes for their covered property claims.</h5>
                            <h5 class="wow fadeInUp" data-wow-delay=".4s">We help contractors, PAs and Plaintiff Attorneys catapult their careers into the top 1% of all income earners nationally.</h5>
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Single Slider -->
</section>
<!--/ End Hero Area -->

<!-- Start Features Area -->
<section id="features" class="features section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Resources to Help You Accomplish This:</h2>
                </div>
            </div>
        </div>
        <div class="single-head">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-6">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <div class="feature-video-container">
                             <iframe class="feature-responsive-iframe" src="https://www.youtube.com/embed/FkQuawiGWUw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="feature-img-panel"><a href="free-ebook.html"><img src="assets/images/Book-min.png" width="147" height="161" alt=""></a></div>
                          <div class="feature-txt"><h3>Download FREE Level the Playing Field Book </h3>
                        <p><a href="free-ebook.html">DownLoad</a></p>
                        </div>
                        <div > <a href="free-ebook.html" class="btn button">Learn More</a></div>
                    </div>
                    <!-- End Single Feature -->
                </div>
                
                <div class="col-lg-3 col-md-6 col-6">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <div class="feature-video-container"><!--width="120" height="90"-->
                             <iframe class="feature-responsive-iframe" src="https://www.youtube.com/embed/FkQuawiGWUw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="feature-img-panel"><img src="assets/images/Icon-2-min.jpg" width="108" height="112" alt=""></div>
                          <div class="feature-txt"><h3>Join FREE Level the Playing Field FB Group/Forum </h3>
                        <p><a href="#">Join Now</a></p>
                        </div>
                        <div> <a href="#" class="btn button">Learn More</a></div>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <div class="feature-video-container"><!--width="120" height="90"-->
                             <iframe class="feature-responsive-iframe" src="https://www.youtube.com/embed/FkQuawiGWUw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="feature-img-panel"><img src="assets/images/Icon-3-min.jpg"/></div>
                          <div class="feature-txt"><h3>LP Loss Consulting – Appraisal Dispute Resolution</h3>
                        <p></p>
                        </div>
                        <div> <a href="#" class="btn button">Download</a></div>
                    </div>
                    <!-- End Single Feature -->
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <div class="feature-video-container"><!--width="120" height="90"-->
                             <iframe class="feature-responsive-iframe" src="https://www.youtube.com/embed/FkQuawiGWUw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="feature-img-panel"><img src="assets/images/Icon-4-min.jpg" width="126" height="126" alt=""></div>
                          <div class="feature-txt"><h3>LP Loss Consulting – Appraisal Dispute Resolution </h3>
                        <p>Phone  Email   Case Study</p>
                        </div>
                        <div> <a href="#" class="btn button">Learn More</a></div>
                    </div>
                    <!-- End Single Feature -->
                </div>
                
                <div class="col-lg-3 col-md-6 col-6">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <div class="feature-video-container"><!--width="120" height="90"-->
                             <iframe class="feature-responsive-iframe" src="https://www.youtube.com/embed/FkQuawiGWUw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="feature-img-panel"><img src="assets/images/Icon-5-min.png" width="108" height="110" alt=""></div>
                          <div class="feature-txt"><h3>Estimates Made Easy </h3>
                        <p>Phone  Email   <a href="#">Site</a></p>
                        </div>
                        <div> <a href="#" class="btn button">Learn More</a></div>
                    </div>
                    <!-- End Single Feature -->
                </div>
                
                <div class="col-lg-3 col-md-6 col-6">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <div class="feature-video-container"><!--width="120" height="90"-->
                             <iframe class="feature-responsive-iframe" src="https://www.youtube.com/embed/FkQuawiGWUw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="feature-img-panel"><img src="assets/images/Icon-6-min.jpg" width="130" height="126" alt=""></div>
                          <div class="feature-txt"><h3>Contractor ProDocs </h3>
                        <p>Phone  Email   <a href="#">Site</a></p>
                        </div>
                        <div> <a href="#" class="btn button">Learn More</a></div>
                    </div>
                    <!-- End Single Feature -->
                </div>
                
                <div class="col-lg-3 col-md-6 col-6">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <div class="feature-video-container"><!--width="120" height="90"-->
                             <iframe class="feature-responsive-iframe" src="https://www.youtube.com/embed/FkQuawiGWUw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="feature-img-panel"><img src="assets/images/Icon-7-min.jpg" width="110" height="102" alt=""></div>
                          <div class="feature-txt"><h3>Top 1 Percent Coaching & Training – Free and Paid Training </h3>
                        <p>Schedule    Sch Tony     Sch Steve</p>
                        </div>
                        <div> <a href="#" class="btn button">Learn More</a></div>
                    </div>
                    <!-- End Single Feature -->
                </div>
                
                <div class="col-lg-3 col-md-6 col-6">
                    <!-- Start Single Feature -->
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <div class="feature-video-container"><!--width="120" height="90"-->
                             <iframe class="feature-responsive-iframe" src="https://www.youtube.com/embed/FkQuawiGWUw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="feature-img-panel"></div>
                          <div class="feature-txt"><h3>Contractor Marketing Solutions </h3>
                        <p>Phone    Email    Site  Case Studies</p>
                        </div>
                        <div> <a href="#" class="btn button">Learn More</a></div>
                    </div>
                    <!-- End Single Feature -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Features Area -->

<!-- Start Enquiry Form -->
<section class="inquiry-form-panel section" style="top:1.5em;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <!-- Single Widget -->
                    <div class="footer-nav single-footer"> 
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">For more inquiries please use the form below</h2>   
                        <div class="col-lg-6 col-md-10 col-10 form">                        
                         <form action="/action_page.php">
                          <div class="form-group">
                            <input type="firstname" class="form-control" placeholder="First Name" id="firstname">
                          </div>
                          <div class="form-group">
                            <input type="lastname" class="form-control" placeholder="Last Lame" id="lastname">
                          </div>
                          <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address" id="email">
                          </div>
                          <div class="form-group">
                            <input type="phone" class="form-control" placeholder="Phone" id="phone">
                          </div>
                          <div class="form-group">
                            <input type="businessname" class="form-control" placeholder="Business Name" id="businessname">
                          </div>
                          <div class="form-group">
                            <textarea class="form-control txt-area" cols="30" rows="7" placeholder="How Can We Help You?" id="help"></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form> 
                        </div>
                    </div>
                    <!-- End Single Widget -->
                </div>
                
            </div>
        </div>
</section>

@endsection