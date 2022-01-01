<!DOCTYPE html><html lang="en">

<head>
    @include('frontend.template.partials.head')
</head>

<body>
<div class="back2top-btn"><a href="#"><i class="fas fa-long-arrow-alt-up"></i></a></div>
<header class="header-part">
    @include('frontend.template.partials.pageheader')
</header>
<nav class="navbar-part">
    @include('frontend.template.partials.navbar')
</nav>
<div class="bottom-player">
    <div class="player">
        <button class="player-btn" id="play-pause-button2"><i class="fas fa-play"></i></button>
    </div>
</div>
@yield('body')
<footer class="footer-part footer-gape">
    @include('frontend.template.partials.footers')
</footer>
<section class="copy-part">
    @include('frontend.template.partials.copywrite')
</section>
@include('frontend.template.partials.scripts')
</body>

</html>
