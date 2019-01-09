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
                <li><a href="#">About</a></li>
                <li><a href="{{ route('hotels') }}">Add Hotel</a></li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}">
                        {{ __('Logout') }}
                    </a>
                </li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</div>