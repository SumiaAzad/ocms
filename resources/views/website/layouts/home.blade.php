@extends('website.master')
@section('content')


<!-- <div class="contact-popup">
    <div class="contact-popup-title">
        <button type="button" class="close-popup"> <i class="ri-close-fill"></i> </button>
    </div>
    <div class="contact-popup-wrap">
        <div class="comp-info">
            <div class="comp-logo">
                <a href="index.html"> <img src="{{url('/img/logo.png')}}" alt="Image"></a>
            </div>
            <p class="comp-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip</p>
            <ul class="footer-contact-address">
                <li><a href="tel:999762236473"> <i class="ri-phone-line"></i> +999 762 23 6473</a></li>
                <li> <i class="ri-mail-send-fill"></i> <a
                        href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#8fe6e1e9e0cfeaece0fafda1ece0e2"><span
                            class="__cf_email__"
                            data-cfemail="7e171018113e1b1d110b0c501d1113">[email&#160;protected]</span></a></li>
                <li> <i class="ri-earth-fill"></i> <a href="https://www.ecour.com/">www.ecour.com</a></li>
                <li>
                    <i class="ri-map-pin-fill"></i> 24th North Lane, Hill Town, New York
                </li>
            </ul>
        </div>
        <div class="comp-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8385385572983!2d144.95358331584498!3d-37.81725074201705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612419490850!5m2!1sen!2sbd"></iframe>
        </div>
        <div class="share-on text-center">
            <ul class="social-profile style2">
                <li><a target="_blank" href="https://facebook.com/"><i class="ri-facebook-fill"></i> </a></li>
                <li><a target="_blank" href="https://twitter.com/"> <i class="ri-twitter-fill"></i> </a></li>
                <li><a target="_blank" href="https://linkedin.com/"> <i class="ri-linkedin-fill"></i> </a></li>
                <li><a target="_blank" href="https://instagram.com/"> <i class="ri-instagram-line"></i> </a></li>
            </ul>
        </div>
    </div>
</div> -->


<div class="hero-wrap style1 bg-f hero-bg-1 mt-0 mb-4">
    
    <div class="overlay bg-black op-7" style="background-image:url({{url('/img/class.jpg')}})">
    </div> 
    <div class="container">


        <div class="row">
            <div class="col-lg-7 col-md-8">
                <div class="hero-content">
                    <h1>Explore Your Creativity
                        With Best Online Courses</h1>
                    <p>It was popularised in Letraset sheets containing Lorem Ipsum and more recently with desktop
                        publishing software.</p>
                    <!-- <div class="hero-btn">
                        <a href="course.html" class="btn v1"> <i class="ri-eye-line"></i> View Courses</a>
                        <a href="login.html" class="btn v2"> <i class="ri-user-line"></i> Join For Free</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="hero-img-wrap">
        <div class="hero-ellipse-img">
            <img src="{{url('/img/education.jpg')}}" alt="Image">
        </div>

    </div> -->
</div>





<!-- <section class="promo-banner-wrap style1">

    <div class="promo-img-wrap">

    </div>
</section> -->





<!-- <section class="course-wrap pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title style1 text-center mb-40">
                    <h2>Our Popular Online Courses</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="course-card style2">
                    <div class="course-img">
                        <a href="course-details.html"><img src="{{url('/img/course/course-9.jpg')}}" alt="Image"></a>
                    </div>
                    <div class="course-info">
                        <span class="course-price">$35.50</span>
                        <h3><a href="course-details.html">Diploma in Teaching skills:
                                Educators</a></h3>
                        <div class="course-rating">
                            <ul>
                                <li> <i class="ri-star-fill"></i></li>
                                <li> <i class="ri-star-fill"></i></li>
                                <li> <i class="ri-star-fill"></i></li>
                                <li> <i class="ri-star-fill"></i></li>
                                <li> <i class="ri-star-line"></i> </li>
                            </ul>
                            <span>4 Ratings</span>
                        </div>
                        <p>Lorem ipsum dolor sit consectetur adipisicing eiusmo tempor </p>
                    </div>
                    <div class="course-metainfo">
                        <p><i class="ri-user-line"></i>13 students</p>
                        <p><i class="ri-book-open-line"></i><a href="course-details.html">4 Lessons</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="course-card style2">
                    <div class="course-img">
                        <a href="course-details.html"><img src="{{url('/img/course/course-10.jpg')}}" alt="Image"></a>
                    </div>
                    <div class="course-info">
                        <span class="course-price">$55.50</span>
                        <h3><a href="course-details.html">Diploma in Teaching skills:
                                Educators</a></h3>
                        <div class="course-rating">
                            <ul>
                                <li> <i class="ri-star-fill"></i></li>
                                <li> <i class="ri-star-fill"></i></li>
                                <li> <i class="ri-star-fill"></i></li>
                                <li> <i class="ri-star-fill"></i></li>
                                <li> <i class="ri-star-line"></i> </li>
                            </ul>
                            <span>9 Ratings</span>
                        </div>
                        <p>Lorem ipsum dolor sit consectetur adipisicing eiusmo tempor </p>
                    </div>
                    <div class="course-metainfo">
                        <p><i class="ri-user-line"></i>23 students</p>
                        <p><i class="ri-book-open-line"></i><a href="course-details.html">10 Lessons</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="course-card style2">
                    <div class="course-img">
                        <a href="course-details.html"><img src="{{url('/img/course/course-11.jpg')}}" alt="Image"></a>
                    </div>
                    <div class="course-info">
                        <span class="course-price">$95.50</span>
                        <h3><a href="course-details.html">Information About UI/UX
                                Design</a></h3>
                        <div class="course-rating">
                            <ul>
                                <li> <i class="ri-star-fill"></i></li>
                                <li> <i class="ri-star-fill"></i></li>
                                <li> <i class="ri-star-fill"></i></li>
                                <li> <i class="ri-star-fill"></i></li>
                                <li> <i class="ri-star-line"></i> </li>
                            </ul>
                            <span>10 Ratings</span>
                        </div>
                        <p>Lorem ipsum dolor sit consectetur adipisicing eiusmo tempor </p>
                    </div>
                    <div class="course-metainfo">
                        <p><i class="ri-user-line"></i>22 students</p>
                        <p><i class="ri-book-open-line"></i><a href="course-details.html">12 Lessons</a></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="course-card style2">
                    <div class="course-img">
                        <a href="course-details.html"><img src="{{url('/img/course/course-1.jpg')}}" alt="Image"></a>
                    </div>
                    <div class="course-info">
                        <span class="course-price">$55.50</span>
                        <h3><a href="course-details.html">Diploma in Educational
                                psychology</a></h3>
                        <div class="course-rating">
                            <ul>
                                <li> <i class="ri-star-fill"></i></li>
                                <li> <i class="ri-star-fill"></i></li>
                                <li> <i class="ri-star-fill"></i></li>
                                <li> <i class="ri-star-fill"></i></li>
                                <li> <i class="ri-star-line"></i> </li>
                            </ul>
                            <span>6 Ratings</span>
                        </div>
                        <p>Lorem ipsum dolor sit consectetur adipisicing eiusmo tempor </p>
                    </div>
                    <div class="course-metainfo">
                        <p><i class="ri-user-line"></i>16 students</p>
                        <p><i class="ri-book-open-line"></i><a href="course-details.html">8 Lessons</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->





<section class="team-wrap pb-70 mt-6">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title style1 text-center mb-40">
                    <!-- <span>Make Communication</span> -->
                    <h2>Our Teachers</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member">
                    <div class="team-member-img">
                        <img src="{{url('/img/team/team-member-1.jpg')}}" alt="Image">
                        <!-- <ul class="social-profile style1">
                            <li><a target="_blank" href="https://facebook.com/"><i class="ri-facebook-fill"></i> </a>
                            </li>
                            <li><a target="_blank" href="https://linkedin.com/"> <i class="ri-linkedin-fill"></i> </a>
                            </li>
                            <li><a target="_blank" href="https://twitter.com/"> <i class="ri-twitter-fill"></i> </a>
                            </li>
                        </ul> -->
                    </div>
                    <div class="team-member-info">
                        <h4>Tony Stark</h4>
                        <p>Teacher</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member">
                    <div class="team-member-img">
                        <img src="{{url('/img/team/team-member-2.jpg')}}" alt="Image">
                        <!-- <ul class="social-profile style1">
                            <li><a target="_blank" href="https://facebook.com/"><i class="ri-facebook-fill"></i> </a>
                            </li>
                            <li><a target="_blank" href="https://linkedin.com/"> <i class="ri-linkedin-fill"></i> </a>
                            </li>
                            <li><a target="_blank" href="https://twitter.com/"> <i class="ri-twitter-fill"></i> </a>
                            </li>
                        </ul> -->
                    </div>
                    <div class="team-member-info">
                        <h4>Mark Toen</h4>
                        <p>Teacher</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member">
                    <div class="team-member-img">
                        <img src="{{url('/img/team/team-member-3.jpg')}}" alt="Image">
                        <!-- <ul class="social-profile style1">
                            <li><a target="_blank" href="https://facebook.com/"><i class="ri-facebook-fill"></i> </a>
                            </li>
                            <li><a target="_blank" href="https://linkedin.com/"> <i class="ri-linkedin-fill"></i> </a>
                            </li>
                            <li><a target="_blank" href="https://twitter.com/"> <i class="ri-twitter-fill"></i> </a>
                            </li>
                        </ul> -->
                    </div>
                    <div class="team-member-info">
                        <h4>Phil Heath</h4>
                        <p>Teacher</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-member">
                    <div class="team-member-img">
                        <img src="{{url('/img/team/team-member-4.jpg')}}" alt="Image">
                        <!-- <ul class="social-profile style1">
                            <li><a target="_blank" href="https://facebook.com/"><i class="ri-facebook-fill"></i> </a>
                            </li>
                            <li><a target="_blank" fhref="https://linkedin.com/"> <i class="ri-linkedin-fill"></i> </a>
                            </li>
                            <li><a target="_blank" href="https://twitter.com/"> <i class="ri-twitter-fill"></i> </a>
                            </li>
                        </ul> -->
                    </div>
                    <div class="team-member-info">
                        <h4>Jhon Doe</h4>
                        <p>Teacher</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>









@endsection
