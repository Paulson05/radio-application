@extends('frontend.template.master')
@section('body')
<section class="blog-part">
    <div class="container">
        <div class="row content-reverse">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="blog-src" action="{{route('search')}}">
                            <input type="text" name="q" class="form-control"  placeholder="search"/>
                            <button><i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="col-md-7 col-lg-12">
                        <div class="blog-filter"><h3>popular post</h3>
                            <ul class="blog-suggest">
                                @if($recent_posts)
                                @foreach($recent_posts as $post)
                                <li>
                                    <div class="suggest-img"><a href="#"><img src="{{asset('/assets/img/suggest-1.jpg')}}" alt="suggest-1"></a></div>
                                    <div class="suggest-content">
                                        <div class="suggest-title">
                                            <h4><a href="#">{{$post->title}}</a></h4>
                                        </div>
                                        <div class="suggest-meta">
                                            <div class="suggest-date">
                                                <i class="far fa-calendar-alt"></i><p>02 feb 2020</p>
                                            </div>
                                            <div class="suggest-comment">
                                                <i class="far fa-comments"></i>
                                                <p>16</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-12">
                        <div class="blog-filter">
                            <h3>Best tags</h3>
                            <ul class="blog-tag">
                                <li><a href="#">domain</a></li>
                                <li><a href="#">cloud</a></li>
                                <li><a href="#">web</a></li>
                                <li><a href="#">payment</a></li>
                                <li><a href="#">E-commerce</a></li>
                                <li><a href="#">Sequerity</a></li>
                                <li><a href="#">solution</a></li>
                                <li><a href="#">offer</a></li>
                                <li><a href="#">support</a></li>
                                <li><a href="#">knowladge</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="blog-filter">
                            <h3>follow us</h3>
                            <ul class="blog-icon">
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="blog-ad">
                            <a href="#"><img src="{{asset('assets/img/ad-banner.jpg')}}" alt="ad-banner"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    @if(count($posts)>0)
                    @foreach($posts as $post)
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="blog-card">
                            <img src="{{asset('assets/img/blog-1.jpg')}}" alt="blog-1">
                            <div class="blog-overlay">
                                <p>03 february 2020</p>
                                <h3><a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}">{{$post->title}}</a></h3>
                                <a class="btn btn-outline" href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}">read more</a>
                            </div>+

                        </div>
                    </div>
                    @endforeach
                    @else
                    <p class="alert alert-danger">No Post Found</p>
                    @endif
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-long-arrow-alt-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">...</li>
                            <li class="page-item"><a class="page-link" href="#">67</a></li>
                            <li class="page-item"><a class="page-link" href="#">
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
