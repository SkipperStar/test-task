<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Travel</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
<header id="header">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6 col-6 header-top-left">
                    <ul>
                        <li><a href="#">Visit Us</a></li>
                        <li><a href="#">Buy Tickets</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6 col-6 header-top-right">
                    <div class="header-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}">
                            {{ __('Logout') }}
                        </a>
                    </li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->

<!-- start banner Area -->
<section class="about-banner relative">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Hotels
                </h1>
                <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="hotels.html"> Hotels</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start destinations Area -->
<section class="destinations-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-40 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Destinations</h1>
                </div>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-warning" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <div class="row">
            @if($hotels)
                @forelse($hotels as $hotel)
                    <div class="col-lg-4">
                        <div class="single-destinations">
                            <div class="thumb">
                                <img src="{{ asset('img/hotels/'.$hotel->image) }}" alt="{{ $hotel->name }}">
                            </div>
                            <div class="details">
                                <h4 class="d-flex justify-content-between">
                                    <span>{{ $hotel->name }}</span>
                                    <div class="star">
                                        @for($i = 0; $i < $hotel->stars; $i++)
                                            <span class="fa fa-star checked"></span>
                                        @endfor
                                    </div>
                                </h4>
                                <p>
                                    View on map   |   {{ $hotel->reviews}} Reviews
                                </p>
                                <form action="{{ route('reserve') }}" method="post">
                                    @csrf
                                    <ul class="package-list">
                                        <li class="d-flex justify-content-between align-items-center">
                                            <span>Wi-fi</span>
                                            @if($hotel->wifi)
                                                <span>Yes</span>
                                            @else
                                                <span>No</span>
                                            @endif
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <span>Room Service</span>
                                            @if($hotel->service)
                                                <span>Yes</span>
                                            @else
                                                <span>No</span>
                                            @endif
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <span>Air Condition</span>
                                            @if($hotel->condition)
                                                <span>Yes</span>
                                            @else
                                                <span>No</span>
                                            @endif
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <span>Restaurant</span>
                                            @if($hotel->restaurant)
                                                <span>Yes</span>
                                            @else
                                                <span>No</span>
                                            @endif
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <span>Floor</span>
                                            <span>
                                                <select name="floor" id="floor">
                                                    @foreach($hotel->options as $k=>$option)
                                                        <option value="{{ $option['id'] }}">{{$option['floor']}}</option>
                                                    @endforeach
                                                </select>
                                            </span>
                                        </li>
                                        <li class="d-flex justify-content-between align-items-center">
                                            <span>Price per night</span>
                                            <a href="#" class="price-btn">${{ $hotel->price }}</a>
                                        </li>
                                    </ul>
                                    @if($hotel->available)
                                    <button type="submit" class="btn btn-outline-warning">Reserve</button>
                                        @else
                                    <button type="submit" class="btn btn-outline-warning" disabled>Reserve</button>
                                    @endif
                                        <input type="hidden" name="hotel" value="{{ $hotel->id }}">
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <h4>No one hotel</h4>
                @endforelse
            @endif
        </div>
    </div>
</section>
<!-- End destinations Area -->


<!-- Start home-about Area -->
<section class="home-about-area">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-end">
            <div class="col-lg-6 col-md-12 home-about-left">
                <h1>
                    Did not find your Package? <br>
                    Feel free to ask us. <br>
                    We‘ll make it for you
                </h1>
                <p>
                    inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
                </p>
                <a href="#" class="primary-btn text-uppercase">request custom price</a>
            </div>
            <div class="col-lg-6 col-md-12 home-about-right no-padding">
                <img class="img-fluid" src="{{ asset('img/hotels/about-img.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End home-about Area -->

<!-- start footer Area -->
<footer class="footer-area section-gap">
    <div class="container">

        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About Agency</h6>
                    <p>
                        The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Navigation Links</h6>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Feature</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Portfolio</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Newsletter</h6>
                    <p>
                        For business professionals caught between high OEM price and mediocre print and graphic output.
                    </p>
                    <div id="mc_embed_signup">
                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
                            <div class="input-group d-flex flex-row">
                                <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                <button class="btn bb-btn"><span class="lnr lnr-location"></span></button>
                            </div>
                            <div class="mt-10 info"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget mail-chimp">
                    <h6 class="mb-20">InstaFeed</h6>
                    <ul class="instafeed d-flex flex-wrap">
                        <li><img src="img/i1.jpg" alt=""></li>
                        <li><img src="img/i2.jpg" alt=""></li>
                        <li><img src="img/i3.jpg" alt=""></li>
                        <li><img src="img/i4.jpg" alt=""></li>
                        <li><img src="img/i5.jpg" alt=""></li>
                        <li><img src="img/i6.jpg" alt=""></li>
                        <li><img src="img/i7.jpg" alt=""></li>
                        <li><img src="img/i8.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- End footer Area -->

<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/easing.min.js')}}"></script>
<script src="{{asset('js/hoverIntent.js')}}"></script>
<script src="{{asset('js/superfish.min.js')}}"></script>
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/mail-script.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>