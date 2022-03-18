@extends('layouts.blog')

@section('title', 'Blog')

@section('keywords','Bakim, Guzellik')


@section('content')
    <!--Our blog detalis-->
    <div class="our-blog-details ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="blog-left-sidebar">
                        <article class="articles-details">
                            <div class="article-thumbnail">
                                <img src="{{asset('assets')}}/images/blog/blog-details.jpg" alt="">
                                <div class="blog-bottom-action">
                                    <div class="blog-publish">
                                        <p><i class="zmdi zmdi-time"></i>Jun 25, 2017 </p>
                                    </div>
                                    <div class="blog-action-box">
                                        <ul>
                                            <li><a href="#"><i class="zmdi zmdi-favorite-outline"></i>(550)</a></li>
                                            <li><a href="#"><i class="zmdi zmdi-comments"></i>(200)</a></li>
                                            <li><a href="#"><i class="zmdi zmdi-share"></i>(100)</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="article-desc">
                                <div class="article-title">
                                    <h3>Lorem ipsum dolor sit amet, consectetur .</h3>
                                </div>
                                <div class="article-text">
                                    <p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut rutrum nunc. Donec rhoncus lacus sed mauris feugiat ultrices. Mauris ish veles  ish sapien sem. lovess uisque nec lectus sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut fermentum est, it’ss laoreet is congue nulla. Mauris bibendumess pellentesque facilisis. Maecenas tw ante odio, rutrum nec viverra.justo ma tristique mi, lorem ipsum dolor sit amet. rutrum nec viverra.justo magna tristique mi, aenean nis massa,scelerisque impertied feubiat.</p>
                                    <p class="text-2">Aenean nisl massa, scelerisque imperdiet feugiat et, rutrum ut nibh. Integer elit sem, rutrum vestibulum nunc nec, imperdiet tincidunt es odio. Aenean ant aliquet, ante non pellentesque laoreet, lorem leo egestas metus, eget pellentesque nisi sem non ex. Nulla sollicitudin lorem felis, sit </p>
                                    <blockquote>
                                        <p><i class="fa fa-quote-left" aria-hidden="true"></i>Aenean nisl massa, scelerisque imperdiet feugiat et, rutrum ut nibh. Integer elit sem, Aenean nish dostlo massa, scelerisque imperdiet feugiat et, rutrum ut nibh.<i class="fa fa-quote-right" aria-hidden="true"></i></p>
                                    </blockquote>
                                    <p class="text-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut rutrum nunc. Donec rhoncus lacus sed mauris feugiat ultrices. Mauri ish veles dost Osapien sem. doiil Quisque nec love lectus sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut fermentum , congu ulla. Mauris bibendum twss lorem ses pellentesque facilisis twss Maecenas ante odio,  </p>
                                </div>
                            </div>
                            <div class="article-gallery">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="s-article-gallery">
                                            <img src="{{asset('assets')}}/images/blog/blog-action-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <div class="s-article-gallery">
                                            <img src="{{asset('assets')}}/images/blog/blog-action-2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-4 hidden-sm col-xs-12">
                                        <div class="s-article-gallery">
                                            <img src="{{asset('assets')}}/images/blog/blog-action-3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-comment-box">
                                <div class="comment-title">
                                    <h3>(20) comments</h3>
                                </div>
                                <div class="comment-box-inner fix">
                                    <div class="blog-comment fix">
                                        <div class="blog-comment-img">
                                            <img src="{{asset('assets')}}/images/blog/comment-1.jpg" alt="">
                                        </div>
                                        <div class="blog-comment-desc">
                                            <div class="comment-top-box">
                                                <div class="comment-title-box">
                                                    <h5>Tarek Aziz</h5>
                                                    <p>15 Min ago</p>
                                                </div>
                                                <div class="comment-action-box">
                                                    <a href="#"><i class="fa fa-share" ></i></a>
                                                </div>
                                            </div>
                                            <div class="comment-bottom-box">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-comment reply fix">
                                        <div class="blog-comment-img">
                                            <img src="{{asset('assets')}}/images/blog/blog-comment-2.jpg" alt="">
                                        </div>
                                        <div class="blog-comment-desc">
                                            <div class="comment-top-box">
                                                <div class="comment-title-box">
                                                    <h5>Mohin patwary</h5>
                                                    <p>14 Min ago</p>
                                                </div>
                                                <div class="comment-action-box">
                                                    <a href="#"><i class="fa fa-share" ></i></a>
                                                </div>
                                            </div>
                                            <div class="comment-bottom-box">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-comment fix">
                                        <div class="blog-comment-img">
                                            <img src="{{asset('assets')}}/images/blog/comment-1.jpg" alt="">
                                        </div>
                                        <div class="blog-comment-desc">
                                            <div class="comment-top-box">
                                                <div class="comment-title-box">
                                                    <h5>Tarek Aziz</h5>
                                                    <p>15 Min ago</p>
                                                </div>
                                                <div class="comment-action-box">
                                                    <a href="#"><i class="fa fa-share" ></i></a>
                                                </div>
                                            </div>
                                            <div class="comment-bottom-box">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, quam congue dictum luctus, lacus magna congue ante, in finibus dui sapien eu dolor. Integer tincidunt suscipit erat, nec laoreet ipsum vestibulum sed. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--blog comment form start-->
                                <div class="blog-comment-form ">
                                    <div class="comment-title">
                                        <h3>leave a comment</h3>
                                    </div>
                                    <form action="#">
                                        <div class="comment-input fix">
                                            <div class="input-field">
                                                <input type="text" placeholder="Name">
                                            </div>
                                            <div class="input-field">
                                                <input type="text" placeholder="E-mail">
                                            </div>
                                        </div>
                                        <div class="textarea">
                                            <textarea placeholder="Message"></textarea>
                                        </div>
                                        <div class="submit">
                                            <button type="submit">Send Message</button>
                                        </div>
                                    </form>
                                </div>
                                <!--blog comment form end-->
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="blog-right sidebar">
                        <aside class="widget search mb-30">
                            <div class="widget-search">
                                <form action="#">
                                    <input type="text" placeholder="Search here....">
                                    <button type="submit"><i class="zmdi zmdi-search"></i></button>
                                </form>
                            </div>
                        </aside>
                        <aside class="widget categories grey-bg mb-30">
                            <div class="widget-title">
                                <h3>categories</h3>
                            </div>
                            <div class="widget-categories">
                                <!--Accordion item 1-->
                                <h6>Face treatment</h6>
                                <ul>
                                    <li><a href="#">Face wash</a></li>
                                    <li><a href="#">Cream</a></li>
                                </ul>
                                <!--Accordion item 1 end-->

                                <!--Accordion item 2 start-->
                                <h6>Nail treatment</h6>
                                <ul>
                                    <li><a href="#">Nail tratment 1</a></li>
                                    <li><a href="#">Nail tratment 2</a></li>
                                </ul>
                                <!--Accordion item 2 end-->

                                <!--Accordion item 3 start-->
                                <h6>Hair treatment</h6>
                                <ul>
                                    <li><a href="#">Hair cut</a></li>
                                    <li><a href="#">Hair shampo</a></li>
                                </ul>
                                <!--Accordion item 3 end-->

                                <!--Accordion item 4 start-->
                                <h6 class="open">Body treatment</h6>
                                <ul>
                                    <li><a href="#">Oil message</a></li>
                                    <li><a href="#">Stone message</a></li>
                                </ul>
                                <!--Accordion item 4 end-->

                            </div>
                        </aside>
                        <aside class="widget mb-30 grey-bg">
                            <div class="widget-title">
                                <h3>recent post</h3>
                            </div>
                            <div class="recent-post">
                                <div class="single-recent-post mb-15">
                                    <div class="recent-post-thumbnail">
                                        <img src="{{asset('assets')}}/images/blog/recent-1.jpg" alt="">
                                    </div>
                                    <div class="post-detail">
                                        <div class="post-title">
                                            <h5><a href="#">Ut enim ad minim nostrud</a></h5>
                                        </div>
                                        <div class="post-publish">
                                            <p class="post-date">
                                                On 01 Dec 2016
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-recent-post mb-15">
                                    <div class="recent-post-thumbnail">
                                        <img src="{{asset('assets')}}/images/blog/recent-1.jpg" alt="">
                                    </div>
                                    <div class="post-detail">
                                        <div class="post-title">
                                            <h5><a href="#">Ut enim ad minim nostrud</a></h5>
                                        </div>
                                        <div class="post-publish">
                                            <p class="post-date">
                                                On 01 Dec 2016
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-recent-post">
                                    <div class="recent-post-thumbnail">
                                        <img src="{{asset('assets')}}/images/blog/recent-1.jpg" alt="">
                                    </div>
                                    <div class="post-detail">
                                        <div class="post-title">
                                            <h5><a href="#">Ut enim ad minim nostrud</a></h5>
                                        </div>
                                        <div class="post-publish">
                                            <p class="post-date">
                                                On 01 Dec 2016
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget video mb-30">
                            <div class="widget-video">
                                <img src="{{asset('assets')}}/images/blog/widget-video.jpg" alt="">
                                <div class="widget-video-icon">
                                    <a href="https://www.youtube.com/watch?v=E6ZgAyx8kWU">
                                        <i class="zmdi zmdi-play"></i>
                                    </a>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget flicker grey-bg mb-30 hidden-sm fix">
                            <div class="widget-title">
                                <h3>Flicker Widget</h3>
                            </div>
                            <div class="widget-filcker fix">
                                <ul>
                                    <li><a href="#"><img src="{{asset('assets')}}/images/blog/widget-flicker-1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('assets')}}/images/blog/widget-flicker-2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('assets')}}/images/blog/widget-flicker-3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('assets')}}/images/blog/widget-flicker-4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('assets')}}/images/blog/widget-flicker-5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('assets')}}/images/blog/widget-flicker-6.jpg" alt=""></a></li>
                                </ul>
                            </div>
                        </aside>
                        <aside class="widget offer mb-30 hidden-sm">
                            <div class="widget-offer-discount">
                                <div class="widget-img">
                                    <img src="{{asset('assets')}}/images/blog/wiget-discount.jpg" alt="">
                                    <div class="widget-discount-text">
                                        <h1>50%</h1>
                                        <h2>off</h2>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <aside class="widget tag mb-30 grey-bg">
                            <div class="widget-title">
                                <h3>popular tag</h3>
                            </div>
                            <div class="widget-tag">
                                <ul>
                                    <li><a href="#">Message</a></li>
                                    <li><a href="#">Life</a></li>
                                    <li><a href="#">spa</a></li>
                                    <li><a href="#">skin care</a></li>
                                    <li><a href="#">nail care</a></li>
                                    <li><a href="#">Body care</a></li>
                                </ul>
                            </div>
                        </aside>
                        <aside class="widget newsletter grey-bg">
                            <div class="widget-title">
                                <h3>Subscribe</h3>
                            </div>
                            <div class="widget-newsletter">
                                <p>Lorem ipsum dolor sit amet, love dost   consectetur adipisicing elit, </p>
                                <form action="#">
                                    <input type="text" placeholder="Enter Your email">
                                    <button type="submit">Send</button>
                                </form>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Our blog detalis end-->
@endsection
