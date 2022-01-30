@extends('frontend.template.master')
@section('body')
<main class="banner-slider">
    <section class="banner-1">
        <div class="banner-oly">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-content">
                            <h1>Gravity FM - 88.1</h1>
                            <p>With you allways ....</p>
                            <a href="#" class="btn btn-inline"><i class="fas fa-eye"></i><span>live on youtube</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner-2">
        <div class="banner-oly">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-content">
                            <h1>Gravity FM - 88.1</h1>
                            <p>With you allways ....</p>
                            <a href="#" class="btn btn-inline"><i class="fas fa-eye"></i><span>live on youtube</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner-3">
        <div class="banner-oly">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-content">
                            <h1>Gravity FM - 88.1</h1>
                            <p>With you allways ....</p>
                            <a href="#" class="btn btn-inline"><i class="fas fa-eye"></i><span>live on youtube</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<section class="section about-part">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="about-img">
                    <a href="#" class="about-1"><img src="assets/img/about-1.jpg" alt="about-1"></a>
                    <a href="#" class="about-2"><img src="assets/img/about-2.jpg" alt="about-2"></a>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="about-content">
                    <h2><span>Gravity 88.1 fm</span>About Us</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi fugiat totam delectus in velit enim expedita aliquam impedit reprehenderit necessitatibus delectus velit illo corrupti dolor cum. accusamus sint autem hic nisi natus libero veniam soluta eaque dolorem laboriosam obcaecati dolorum unde Rerum recusandae minus facilis!</p><p>Apart from loud and filtered sound quality we have massive coverage of local and global loyal listenership by the highest responded programs round the week.</p>
                    <h3>Since 1995</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section show-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>show Schedule</h2>
                </div>
            </div>
        </div>
       @include('frontend.template.partials.scheduler')
    </div>
</section>
@include('frontend.template.partials.team')
<section class="section video-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Video playlist</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="video-slider slider-arrow">
                    <div class="video-card">
                        <div class="video-img">
                            <img src="assets/img/video-1.jpg" alt="video-1">
                            <div class="video-overlay">
                                <a class="venobox icon icon-inline" data-autoplay="true" data-vbtype="video" href="https://youtu.be/J7Kyv2inOMU"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="video-content">
                            <h5>Music Festival 2020</h5>
                            <p>Lorem ipsum dolor sit amet commodi harum odio facilis velit minus elit.</p>
                        </div>
                    </div>
                    <div class="video-card">
                        <div class="video-img">
                            <img src="assets/img/video-2.jpg" alt="video-2">
                            <div class="video-overlay">
                                <a class="venobox icon icon-inline" data-autoplay="true" data-vbtype="video" href="https://youtu.be/J7Kyv2inOMU"><i class="fas fa-play"></i></a></div>
                        </div>
                        <div class="video-content">
                            <h5>Music Festival 2020</h5>
                            <p>Lorem ipsum dolor sit amet commodi harum odio facilis velit minus elit.</p>
                        </div>
                    </div>
                    <div class="video-card">
                        <div class="video-img">
                            <img src="assets/img/video-3.jpg" alt="video-3">
                            <div class="video-overlay">
                                <a class="venobox icon icon-inline" data-autoplay="true" data-vbtype="video" href="https://youtu.be/J7Kyv2inOMU"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="video-content">
                            <h5>Music Festival 2020</h5>
                            <p>Lorem ipsum dolor sit amet commodi harum odio facilis velit minus elit.</p>
                        </div>
                    </div>
                    <div class="video-card">
                        <div class="video-img">
                            <img src="assets/img/video-4.jpg" alt="video-4">
                            <div class="video-overlay">
                                <a class="venobox icon icon-inline" data-autoplay="true" data-vbtype="video" href="https://youtu.be/J7Kyv2inOMU"><i class="fas fa-play"></i></a></div>
                        </div>
                        <div class="video-content">
                            <h5>Music Festival 2020</h5>
                            <p>Lorem ipsum dolor sit amet commodi harum odio facilis velit minus elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="team-btn">
                    <a class="btn btn-outline" href="video.html"><i class="fas fa-eye"></i><span>show more</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section gallery-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>ushno galleries</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="gallery-content">
                    <ul class="gallery-list">
                        <li class="verti-img"><img src="assets/img/gallery-1.jpg" alt="gallery-1"></li>
                        <li class="hori-img"><img src="assets/img/gallery-2.jpg" alt="gallery-2"></li>
                        <li class="big-img"><img src="assets/img/gallery-3.jpg" alt="gallery-3"></li>
                        <li><img src="assets/img/gallery-4.jpg" alt="gallery-4"></li>
                        <li><img src="assets/img/gallery-5.jpg" alt="gallery-5"></li>
                        <li><img src="assets/img/gallery-6.jpg" alt="gallery-6"></li>
                        <li><img src="assets/img/gallery-7.jpg" alt="gallery-7"></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="gallery-btn">
                    <a class="btn btn-outline" href="gallery.html"><i class="fas fa-eye"></i><span>show more</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section blog-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>recent articles</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-slider slider-arrow">
                    <div class="blog-card">
                        <img src="assets/img/blog-1.jpg" alt="blog-1">
                        <div class="blog-overlay">
                            <p>03 february 2020</p>
                            <h3><a href="#">Lorem ipsum dolor sit ame consectetur adipiscing</a></h3>
                            <a class="btn btn-outline" href="#">read more</a>
                        </div>
                    </div>
                    <div class="blog-card"><img src="assets/img/blog-2.jpg" alt="blog-2">
                        <div class="blog-overlay">
                            <p>03 february 2020</p>
                            <h3><a href="#">Lorem ipsum dolor sit ame consectetur adipiscing</a></h3>
                            <a class="btn btn-outline" href="#">read more</a>
                        </div>
                    </div>
                    <div class="blog-card">
                        <img src="assets/img/blog-3.jpg" alt="blog-3">
                        <div class="blog-overlay">
                            <p>03 february 2020</p>
                            <h3><a href="#">Lorem ipsum dolor sit ame consectetur adipiscing</a></h3>
                            <a class="btn btn-outline" href="#">read more</a>
                        </div>
                    </div>
                    <div class="blog-card"><img src="assets/img/blog-4.jpg" alt="blog-4">
                        <div class="blog-overlay">
                            <p>03 february 2020</p>
                            <h3><a href="#">Lorem ipsum dolor sit ame consectetur adipiscing</a></h3>
                            <a class="btn btn-outline" href="#">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-btn">
                    <a class="btn btn-outline" href="blog-list.html">
                        <i class="fas fa-eye"></i>
                        <span>show more</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
