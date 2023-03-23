<header class="sticky-top z-1020 bg-white shadow-sm">
    <div
     class="position-relative logo-bar-area z-1 bg-white">
        <!--bg-white-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="col-auto col-xl-3 pl-0 pr-3 d-flex align-items-center">
                         <a class="d-block py-2 mr-3 ml-0" href="https://sobkisubazar.com">
                             <img src="{{ asset('frontend/assets/images/logo.png') }}" 
                                alt="Sobkisubazar" class="mw-120 h-51px h-md-51px">
                         </a>
                     </div>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <div class="flex-grow-1 mr-5 align-items-center d-lg-block">
                         <div class="position-relative flex-grow-1">
                            <!-- <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                              </form> -->
                             <form action="" method="GET" class="mb-0 mobile-hor-swipe text-center">
                                 <div class="d-lg-block d-flex position-relative align-items-center">
                                     <div class="input-group">
                                         <input type="text" class="form-control" style="font-size: 18px;"
                                              placeholder="Search Your Product">
                                         <div class="d-lg-block">
                                             <button class="btn btn-primary" type="submit"
                                                 style="background-color:#572c84!important;border-color:#572c84!important">
                                                 <i style="line-height:20px !important;"
                                                     class="fa-solid fa-magnifying-glass fs-18"></i>
                                             </button>
                                         </div>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
 
                     <div class="d-lg-block ml-3 mr-0">
                        <ul class="list-inline mb-0 mobile-hor-swipe text-center navbar-nav">
                            <li class="list-inline-item mr-0 py-1 nav-item">
                                <a
                                    href="#"
                                    class="ad-menu px-2 py-2 d-inline-block text-reset">
                                    <span class="menu-text-hover">All Ads</span>
                                </a>
                            </li>
                        </ul>
                     </div>
 
                     <div class="d-lg-block ml-3 mr-0">
                        <ul class="list-inline mb-0 mobile-hor-swipe text-center">
                            <li class="list-inline-item mr-0 py-1">
                                <a
                                    href="#"
                                    class="ad-menu px-2 py-2 d-inline-block text-reset">
                                    <span class="menu-text-hover">Support</span>
                                </a>
                            </li>
                        </ul>
                     </div>

                    @if (Route::has('login'))
                        <ul class="list-inline mb-0 mobile-hor-swipe text-center">
                            @auth
                            <li class="list-inline-item mr-0 py-1">
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="ad-menu px-2 py-2 d-inline-block text-reset">
                                    <span class="menu-text-hover">Dashboard</span>
                                </a>
                            </li>
                            @else
                            <li class="list-inline-item mr-0 py-1">
                                <a
                                    href="{{ route('login') }}"
                                    class="ad-menu px-2 py-2 d-inline-block text-reset">
                                    <span class="menu-text-hover">Login</span>
                                </a>
                            </li>
                            @if (Route::has('register'))
                            <li class="list-inline-item mr-0 py-1">
                                <a
                                    href="{{ route('register') }}"
                                    class="ad-menu px-2 py-2 d-inline-block text-reset">
                                    <span class="menu-text-hover">Register</span>
                                </a>
                            </li>
                            @endif
                            @endauth
                        </ul>
                        @endif
                     <div class="d-lg-block ml-3 mr-0">
                         <ul class="list-inline mb-0 mobile-hor-swipe text-center">
                             <li class="list-inline-item mr-0">
                                 <a href="{{ route('adstore') }}" target="_blank">
                                     <button type="button" class="btn btn-post btn-rounded">Post Your Ad</button>
                                 </a>
                             </li>
                            </ul>
                     </div>
                     </div>
                    </nav>



                </div>
            </div>
        </div>
    </div>
</header>