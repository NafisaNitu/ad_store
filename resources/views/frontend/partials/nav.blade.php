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

                        
                        <div id="mySidebar" class="sidebar-r category-shadow-sm d-none-cat">
                            <a href="javascript:void(0)" class="closebtn d-none-cat" onclick="closeNav()">×</a>
                            {{-- <a href="#">About</a>
                            <a href="#">Services</a>
                            <a href="#">Clients</a>
                            <a href="#">Contact</a> --}}
                            <div class="shadow-sm rounded" style="background-color: #f5f7fa;">
                                <div class="fw-600 px-3 sidebar-subtitle">
                                    <a class="text-dark" href="#saleAd">Sale Ad</a>
                                </div>
                                <div class="px-4">
                                    <div class="aiz-checkbox-list">
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="product" value="product">
                                            <span class="aiz-square-check"></span>
                                            <a href="#saleProduct"><span class="fs-13 fs-md-13">Product</span></a>
                                        </label>

                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="property" value="property">
                                            <span class="aiz-square-check"></span>
                                            <a href="#saleProperty"><span class="fs-13 fs-md-13">Property</span></a>
                                        </label>
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="service" value="service" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <a href="#saleService"><span class="fs-13 fs-md-13">Service</span></a>

                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="shadow-sm rounded" style="background-color: #f5f7fa;">
                                <div class="fw-600 px-3 sidebar-subtitle">
                                    <a class="text-dark" href="#buyAd">Buy Ad</a>
                                </div>
                                <div class="px-4">
                                    <div class="aiz-checkbox-list">
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="Product" value="Product" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-13 fs-md-13">Product</span>
                                        </label>
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="Property" value="Property" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-13 fs-md-13">Property</span>
                                        </label>
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="Service" value="Service" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-13 fs-md-13">Service</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="shadow-sm rounded" style="background-color: #f5f7fa;">
                                <div class="fw-600 px-3 sidebar-subtitle">
                                    <a class="text-dark" href="#rentAd">Rent Ad</a>
                                </div>
                                <div class="px-4">
                                    <div class="aiz-checkbox-list">
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="ForRent" value="ForRent" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-13 fs-md-13">For Rent</span>
                                        </label>
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="ToRent" value="ToRent" onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-13 fs-md-13">To Rent</span>
                                        </label>
                                        <label class="aiz-checkbox">
                                            <input type="checkbox" name="CorporateAds" value="CorporateAds"
                                                onchange="filter()">
                                            <span class="aiz-square-check"></span>
                                            <span class="fs-13 fs-md-13">Corporate Ads</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="shadow-sm rounded" style="background-color: #f5f7fa;">
                                <div class="fw-600 px-3 pb-1 sidebar-subtitle">
                                    <a class="text-dark" href="#allOffer">All Offer</a>
                                </div>
                            </div>
                        </div>
                        
                        <div id="main d-none-cat">
                            <button class="openbtn d-none-cat" onclick="openNav()">☰ Category Filter</button>  
                        </div>
  
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
                             <form action="{{ route('search') }}" method="get" class="mb-0 mobile-hor-swipe text-center">
                                 <div class="d-lg-block d-flex position-relative align-items-center">
                                     <div class="input-group">
                                         <input type="text" class="form-control" name="search" style="font-size: 18px;"
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
                                    href="{{ url('/') }}"
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
                                    href="{{ url('/dashboard') }}" target="_blank"
                                    class="ad-menu px-2 py-2 d-inline-block text-reset">
                                    <span class="menu-text-hover">My Account</span>
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