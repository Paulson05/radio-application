@extends('frontend.template.master')
@section('body')
<div class="bottom-player">
    <div class="player">
        <button class="player-btn" id="play-pause-button2"><i class="fas fa-play"></i></button>
    </div>
</div>
<section class="single-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-content">
                    <h2>Blog Details</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="blog-list.html">Blog-list</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog-Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-det-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-det-banner">
                    <img src="{{ asset('imgs/image').'/'.$detail->image }}" alt="blog-details">
                    <div class="blog-det-content"><div class="blog-det-title">
                            <h2><a href="#">{{$detail->title}}</a></h2>
                        </div>
                        <ul class="blog-det-meta">
                            <li><i class="far fa-user"></i><p>By Admin</p></li>
                            <li><i class="far fa-calendar-alt"></i><p>02 Feb 2020</p></li>
                            <li><i class="far fa-folder-open"></i><p>Concert</p></li><li>
                                <i class="far fa-comments"></i><p>37 Comment</p></li><li>
                                <i class="far fa-share-square"></i><p>21 Share</p></li>
                        </ul>
                    </div>
                </div>
                <div class="blog-det-descrip content-fluid">
                    <p>{{$detail->body}}</p></div>

                <div class="blog-det-footer">
                    <ul class="blog-det-tag">
                        <li><h4>Tags:</h4></li>
                        <li><a href="#">Crowd</a></li>
                        <li><a href="#">Party</a></li>
                        <li><a href="#">Concert</a></li>
                    </ul>
                    <ul class="blog-det-share"><li>
                            <h4>Share:</h4>
                        </li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>


                <div class="blog-det-comment">
                    <h3>Comments (3)</h3>
                    <ul class="comment-list">
                        <li><div class="comment">
                                <div class="comment-img">
                                    <a href="#"><img src="img/comment-1.jpg" alt="comment-1"></a>
                                </div>
                                <div class="comment-content">
                                    <h4>Miron Mahmud <span>02 February 2020</span></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab aperiam corrupti maiores animi nisi ratione maxime quae in doloremque corporis tempore earum ut voluptas exercitationem.</p>
                                </div>
                                <div class="comment-reply">
                                    <a href="#"><i class="fas fa-reply-all"></i>reply</a>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <div class="comment">
                                        <div class="comment-img">
                                            <a href="#"><img src="img/comment-2.jpg" alt="comment-2"></a>
                                        </div>
                                        <div class="comment-content">
                                            <h4>Tahmina Bonny <span>02 February 2020</span></h4>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab aperiam corrupti maiores animi nisi ratione maxime quae in doloremque corporis tempore earum ut voluptas exercitationem.</p>
                                        </div>
                                        <div class="comment-reply"><a href="#"><i class="fas fa-reply-all"></i>reply</a></div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="comment">
                                <div class="comment-img">
                                    <a href="#"><img src="img/comment-3.jpg" alt="comment-3"></a>
                                </div>
                                <div class="comment-content">
                                    <h4>Labonno Khan <span>02 February 2020</span></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ab aperiam corrupti maiores animi nisi ratione maxime quae in doloremque corporis tempore earum ut voluptas exercitationem.</p>
                                </div>
                                <div class="comment-reply"><a href="#"><i class="fas fa-reply-all"></i>reply</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="blog-det-form">
                    <h3>Leave Your Comment</h3>
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Name">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="col-lg-6"><div class="form-group">
                                    <input type="email" placeholder="Your Email">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea placeholder="Your Comment"></textarea>
                                    <i class="fas fa-pen-nib"></i>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-btn">
                                    <button type="submit" class="btn btn-inline">
                                        <i class="fas fa-tint"></i>
                                        <span>Drop your comment</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
