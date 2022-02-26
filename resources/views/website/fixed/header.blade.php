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
    <div class="header-bottom py-3 border-bottom border-5" style="background-color: #7F8C8D">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2 col-md-4 col-6 order-lg-1 order-md-1 order-1">
                    <!-- <div class="logo">
                        <a href="index.html"><img src="{{('/img/logo.png')}}" alt="Image"></a>
                    </div> -->
                </div>
                <div class="">
                    <!-- <div class="col-lg-6 col-md-3 col-6 order-lg-2 order-md-3 order-3"> -->
                    <div class="main-menu-wrap style1 ">
                        <div class="menu-close xl-none">
                            <a href="javascript:void(0)"><i class="las la-times"></i></a>
                        </div>
                        <div id="menu" class="text-left d-flex justify-content-around align-items-center">
                            <div class="logo">
                                <a href="index.html"><img src="{{url('/img/logo-web.png')}}" alt="Image" width="70px" class="rounded-circle"></a>
                            </div>
                            <ul class="main-menu ">
                                <li>
                                    <a href="{{route('website.home')}}">HOME</a>

                                </li>
                                

                                <li class=""><a href="{{route('website.about')}}">About Us</a>
                                    
                                </li>
                                <li><a href="{{route('website.student.signup')}}">Registration</a></li>



                                @if(auth()->user() && auth()->user()->role == "student")
                                    @if(auth()->user())
                                    <li><a  href="{{route('website.routine')}}">Routine</a></li>
                                    <li><a href="{{route('website.profile')}}">Profile</a></li>
                                    <li><a  href="{{route('website.result')}}">Result</a></li>
                                    <li><a  href="{{route('website.exam')}}">Exam</a></li>
                                    <li ><a  href="{{route('user.logout')}}">logout</a> </li>

                                    @else
                                     <li><a href="{{route('user.login')}}">Login</a></li>
                                          
                                    @endif

                                @else
                                    @if(auth()->user())
                                    <li><a  href="{{route('website.teacherprofile')}}">Profile</a></li>
                                    <li><a  href="{{route('website.teacher.routine')}}">Routine</a></li>
                                    <li><a  href="{{route('website.teacher.exam')}}">exam</a></li>

                                    <li><a  href="{{route('website.teacher.result')}}">Result</a></li>
                                    <li><a  href="{{route('user.logout')}}">logout</a></li>

                                    @else
                                    <li><a href="{{route('user.login')}}"> User Login</a></li>
   
                                    @endif


                                @endif


                                <li>
                                    <a href="{{route('admin.login')}}">Admin Login</a>

                                </li>

                                

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
