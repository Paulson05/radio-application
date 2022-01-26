<div class="navbar-bg">
    <div class="container">
        <div class="navbar-content">
            <a class="navbar-logo" href="#"><img src="{{asset('assets/img/gravity.jpg')}}" alt="logo"></a>
            <button class="navbar-toggle" type="button"><i class="fas fa-bars"></i></button>
            <div class="navbar-overlay">
                <div class="navbar-slide">
                    <div class="slide-head">
                        <a href="#"><img src="{{asset('assets/img/gravity.jpg')}}" alt="logo"></a>
                        <button class="cencel"><i class="fas fa-times"></i></button>
                    </div>
                    <ul class="navbar-list">
                        <li class="navbar-item {{ Route::currentRouteNamed('homepage') ? 'active' : '' }}"><a class="navbar-link" href="{{route('homepage')}}"><span><i class="fas fa-headphones-alt"></i>Home</span></a></li>
                        <li class="navbar-item {{ Route::currentRouteNamed('frontend.about') ? 'active' : '' }}"><a class="navbar-link" href="{{route('frontend.about')}}"><span><i class="fas fa-headphones-alt"></i>About us</span></a></li>
                        <li class="navbar-item {{ Route::currentRouteNamed('frontend.scheduler') ? 'active' : '' }}"><a class="navbar-link" href="{{route('frontend.scheduler')}}"><span><i class="fas fa-headphones-alt"></i>Show Schedule</span></a></li>
                        <li class="navbar-player"><div class="player"><button class="player-btn" id="play-pause-button"><i class="fas fa-play"></i></button></div></li>
                        <li class="navbar-item {{ Route::currentRouteNamed('frontend.team') ? 'active' : '' }}"><a class="navbar-link" href="{{route('frontend.team')}}"><span><i class="fas fa-headphones-alt"></i>Aops</span></a>

                        </li>
                        <li class="navbar-item "><a class="navbar-link {{ Route::currentRouteNamed('blog.list') ? 'active' : '' }} " href="{{route('blog.list')}}"><span><i class="fas fa-headphones-alt"></i>blogs</span></a>

                        </li>
                        <li class="navbar-item"><a class="navbar-link" href="{{route('frontend.contactus')}}"><span><i class="fas fa-headphones-alt"></i>Contact us</span></a></li>
                    </ul>
                    <div class="navbar-btn">
                        <a class="btn btn-outline" href="sponsor.html"><i class="fas fa-hands-helping"></i><span>Become a Sponsor</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
