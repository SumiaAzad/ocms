<header class="header-wrap style1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="header-top-left">
                    <div class="close-header-top xl-none">
                        <button type="button"><i class="las la-times"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
            </div>
            
        </div>
    </div>
    </div>
    <div class="header-bottom" style="background-color: #C5C4DF">
        <div class="container" >
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-4 col-6 order-lg-1 order-md-1 order-1">
                    <!-- <div class="logo">
                        <a href="index.html"><img src="{{('/img/logo.png')}}" alt="Image"></a>
                    </div> -->
                </div>
                <div>
                <!-- <div class="col-lg-6 col-md-3 col-6 order-lg-2 order-md-3 order-3"> -->
                    <div class="main-menu-wrap style1">
                        <div class="menu-close xl-none">
                            <a href="javascript:void(0)"><i class="las la-times"></i></a>
                        </div>
                        <div id="menu" class="text-left">
                        <div class="logo">
                        <a href="index.html"><img src="{{('/img/logo.png')}}" alt="Image"></a>
                    </div>
                            <ul class="main-menu " >
                                <li>
                                    <a href="{{route('website.home')}}">HOME</a>

                                </li>
                                <li class="has-children">
                                    <a href="">Student</a>
                                    <ul class="sub-menu">
                                        <li><a style="background-color:blue"
                                                href="{{route('website.student.signup')}}">Sign Up</a></li>
                                    </ul>

                                </li>

                                <li class="has-children"><a href="#">About Us</a>
                                    <ul class="sub-menu">
                                        <li><a href="contact.html">CONTACT</a></li>
                                        <li><a href="teacher.html">TEACHER</a></li>
                                        <li><a href="pricing-plan.html">PRICING PLAN</a></li>
                                        <li><a href="testimonial.html">TESTIMONIALS</a></li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="privacy-policy.html">PRIVACY POLICY</a></li>
                                        <li><a href="terms-condition.html">TERMS &AMP; CONDITIONS</a></li>
                                        <li><a href="404.html">404</a></li>
                                    </ul>
                                </li>
                                
                                @if(auth()->user())
                                <a style="background-color: #e7e7e7;" href="{{route('user.logout')}}">logout</a>
                                <a class="btn btn-light" href="{{route('website.routine')}}">Routine</a>
                                <a class="btn btn-primary" href="{{route('website.profile')}}">Profile</a>
                                <a class="btn btn-primary" href="{{route('website.result')}}">Result</a>
                                @else
                                    <a href="{{route('user.login')}}">Login</a>
                            @endif

                            </ul>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-bar-wrap">
                        <div class="sidebar-menu xl-none">
                            <i class="ri-equalizer-line"></i>
                        </div>
                        <div class="mobile-top-bar xl-none">
                            <i class="ri-settings-3-line"></i>
                        </div>
                        <div class="mobile-menu xl-none">
                            <a href='javascript:void(0)'><i class="ri-menu-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5  order-lg-3 order-md-2">
                    <div class="header-menu-wrap">
                        <div class="header-search md-none">
                            <!-- @if(auth()->user())
                                <a class="btn btn-primary" href="{{route('user.logout')}}">logout</a>
                                <a class="btn btn-primary" href="{{route('website.routine')}}">Routine</a>
                                <a class="btn btn-primary" href="{{route('website.profile')}}">Profile</a>
                                <a class="btn btn-primary" href="{{route('website.result')}}">Result</a>
                                @else
                                    <a href="{{route('user.login')}}">Login</a>
                            @endif -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(session()->has('error'))
    <p class="alert alert-danger">{{session()->get('error')}}</p>
    @endif

    @if(session()->has('msg'))
    <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif
</header>
